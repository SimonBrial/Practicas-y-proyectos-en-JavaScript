// Variables
const listaTweets = document.getElementById('lista-tweets');

// Event Listeners

eventListeners();

function eventListeners() {
    // Cuando se envia el formulario
    document.querySelector('#formulario').addEventListener('submit', agregarTweet);

    // Borrar Tweets
    listaTweets.addEventListener('click', borrarTweet);

    // Contenido cargado
    document.addEventListener('DOMContentLoaded', localStorageListo);
}

// Functions

// Añadir tweet del formulario
function agregarTweet(e) {
    e.preventDefault();

    // Crear boton de borrar 
    const btnBorrar = document.createElement('a');
    btnBorrar.classList = 'borrar-tweet';
    btnBorrar.innerText = 'X';

    // Leer el valor del textarea
    const tweet = document.getElementById('tweet').value;

    // Crear elemento y añadirle contenido a la lista
    const li = document.createElement('li');
    li.innerText = tweet;

    // Añade el boton de borrar al Tweet
    li.appendChild(btnBorrar);

    // Añade el tweet a la lista
    listaTweets.appendChild(li);

    // Añadir a Local Storage
    agregarTweetLocalStorage(tweet);
}

// Elimina el Tweet del DOM
function borrarTweet(e) {
    e.preventDefault();

    if (e.target.className === 'borrar-tweet') {
        e.target.parentElement.remove();
        borrarTweetLocalStorage(e.target.parentElement.innerText);
    }
}

// Mostrar datos de LocalStorage en la lista
function localStorageListo() {

    let tweets;

    tweets = obtenerTweetsLocalStorage();

    tweets.forEach(function(tweet) {

        // Crear boton de borrar 
        const btnBorrar = document.createElement('a');
        btnBorrar.classList = 'borrar-tweet';
        btnBorrar.innerText = 'X';

        // Crear elemento y añadirle contenido a la lista
        const li = document.createElement('li');
        li.innerText = tweet;

        // Añade el boton de borrar al Tweet
        li.appendChild(btnBorrar);

        // Añade el tweet a la lista
        listaTweets.appendChild(li);
    });
}

// Agrega el tweet a LocalStorage
function agregarTweetLocalStorage(tweet) {

    let tweets;

    tweets = obtenerTweetsLocalStorage();

    // Añadir el  nuevo Tweet
    tweets.push(tweet);

    // Convertir de string a arreglo para local Storage
    localStorage.setItem('tweets', JSON.stringify(tweets));

    // Agregar a Local Storage
    //localStorage.setItem('tweets', tweet);
}

// Comprobar que haya elementos en Local Storage, retorna un arreglo 
function obtenerTweetsLocalStorage() {

    let tweets;

    // Revisamos los valores de local Storage
    if (localStorage.getItem('tweets') === null) {
        tweets = [];
    } else {
        tweets = JSON.parse(localStorage.getItem('tweets'));
    }
    return tweets;
}

function borrarTweetLocalStorage(tweet) {

    let tweets, tweetBorrar;
    // Elimina la X del tweet
    tweetBorrar = tweet.substring(0, tweet.length - 1);

    tweets = obtenerTweetsLocalStorage();

    tweets.forEach(function(tweet, index) {
        if (tweetBorrar === tweet) {
            tweets.splice(index, 1);
        }
    });

    // Elimino los tweet del Local Storage
    localStorage.setItem('tweets', JSON.stringify(tweets));
}
$(document).ready(function() {

    var imgItems = $('.slider li').length; /* Te indica la cantidad de imagenes que hay, por los 'li' */
    var imgPos = 1;

    /* Función que agrega la paginacion de forma dinamica */
    /* for (i = 1; i <= imgItems; i++) {
        $('.paginacion').append('<li><span class="fa fa-circle"></span></li>');
    } */
    /* -------------------------------------------------- */

    $('.slider li').hide(); /* Para que se desaparezcan todas las imagenes */
    $('.slider li:first').show(); /* Para mostrar la primera imagén */
    //$('.paginacion li:first').css({ 'color': '#ff7700' }); /* Va a mostrar el primer hijo de color naranja */

    //$('.paginacion li').click(paginacion);
    $('.right span').click(nextSlider);
    $('.left span').click(prevSlider);

    /* Funcines */

    function paginacion() {
        var paginacionPos = $(this).index() + 1; /* con esto se trae, el numero en la posición del elemento */

        $('.slider li').hide(); // Oculta todos los Slides
        $('.slider li:nth-child(' + paginacionPos + ')').fadeIn(); // Muestra el slide seleccionado

        // Dandole estilos a la paginación
        $('.paginacion li').css({ 'color': '#707070' })
        $(this).css({ 'color': '#ff7700' })
    };

    function nextSlider() {
        if (imgPos >= imgItems) {
            imgPos = 1;
        } else {
            imgPos++;
        }

        // Dandole estilos a la paginación
        $('.paginacion li').css({ 'color': '#707070' })
        $('.paginacion li:nth-child(' + imgPos + ')').css({ 'color': '#ff7700' })

        $('.slider li').hide(); // Oculta todos los Slides
        $('.slider li:nth-child(' + imgPos + ')').fadeIn(); // Muestra el slide seleccionado

    }

    function prevSlider() {
        if (imgPos <= 1) {
            imgPos = imgItems;
        } else {
            imgPos--;
        }

        // Dandole estilos a la paginación
        $('.paginacion li').css({ 'color': '#707070' })
        $('.paginacion li:nth-child(' + imgPos + ')').css({ 'color': '#ff7700' })
        console.log(imgPos);

        $('.slider li').hide(); // Oculta todos los Slides
        $('.slider li:nth-child(' + imgPos + ')').fadeIn(); // Muestra el slide seleccionado

    }

    /* Para cargar el mapa en la pagina */
    var map = L.map('mapa').setView([51.505, -0.09], 15);

    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
    }).addTo(map);

    L.marker([51.5, -0.09]).addTo(map)
        .bindPopup('Aqui es!!!')
        .openPopup()
        .bindTooltip('Te esperamos!!!')
        .openTooltip();

});
// Variables
const aside = document.querySelector('#aside-api');
const nav = document.querySelector('#nav-bar');
const menu = document.querySelector('#menu-nav');

const lupa = document.querySelector('#lupa')


//const desplazar = document.querySelector('.menu-desplazar')


// Event Listeners
eventListeners()

function eventListeners() {
    menu.addEventListener('click', menuAction)
    lupa.addEventListener('click', obtenerDatos)

}

// Function
function menuAction(e) {
    const slot1 = document.querySelector('#slot1')
    const slot2 = document.querySelector('#slot2')
    const slot3 = document.querySelector('#slot3')

    if (e.target) {
        if (menu.classList.contains('menu-desplazar')) {
            menu.classList.add('menu-volver');
            aside.classList.add('menu-volver');
            slot1.classList.add('slot-down-back');
            slot3.classList.add('slot-up-back')
            slot2.classList.remove('slot2');
            menu.classList.remove('menu-desplazar');
            aside.classList.remove('menu-desplazar');
            slot1.classList.remove('slot-down');
            slot3.classList.remove('slot-up');
        } else {
            menu.classList.remove('menu-volver')
            aside.classList.remove('menu-volver')
            slot1.classList.remove('slot-down-back')
            slot3.classList.remove('slot-up-back')
            slot2.classList.add('slot2')
            menu.classList.add('menu-desplazar')
            aside.classList.add('menu-desplazar')
            slot1.classList.add('slot-down');
            slot3.classList.add('slot-up');
        }
    } 
}

function obtenerDatos() {
    const url = 'https://rickandmortyapi.com/api/character';
    const infoCard = document.querySelector('#infoCards');

    fetch(url, {
        method: 'GET'
    }) 
        .then(response => response.json())
        .then(data => {
            const alive = 'alive'
            const dead = 'dead'
            const unknown = 'unknown'
            let state

            if (data.results[0].status = 'alive') {
                state = alive
            } else if (data.results[0].status = 'dead') {
                state = dead
            } else if (data.results[0].status = 'unknown') {
                state = unknown
            }
            console.log(state);
            


            infoCard.innerHTML = `
                <div>
                    <img class="api-image" src="${data.results[0].image}" alt="${data.results[0].name}">
                    <div>
                        <h2 class="api-name">
                            ${data.results[0].name}
                        </h2>
                        <div class="api-state">
                            <span class="${state}"></span>
                            <p>
                                ${data.results[0].status} - ${data.results[0].species}
                            </p>
                        </div>
                        <p>
                            Origin: ${data.results[0].origin.name}
                        </p>
                        <div>
                            <p>
                                Location:  ${data.results[0].location.name}
                            </p>
                            <p>
                                Created: ${data.results[0].created}
                            </p>

                        </div>
                        
                    </div>
                </div>
            `
        }) 
            /* console.log(data.results) 
        )    */
        .catch(error => console.log('hubo un error'))

        
}
document.addEventListener('DOMContentLoaded', function() {
    eventListeners()
    darkMode()
})

function darkMode() {

    // Leer las preferencias del usuario en el sistema operativo para el color del tema
    /* const prefiereDarkMode = window.matchMedia('(prefers-color-scheme: dark)')

    if(prefiereDarkMode.matches) {
        document.body.classList.add('dark-mode')
    } else {
        document.body.classList.remove('dark-mode')
    }

    prefiereDarkMode.addEventListener('change', function() {
        if(prefiereDarkMode.matches) {
            document.body.classList.add('dark-mode')
        } else {
            document.body.classList.remove('dark-mode')
        }
    }) */

    const botonDarkMode = document.querySelector('.dark-mode-boton')

    botonDarkMode.addEventListener('click', function() {
        document.body.classList.toggle('dark-mode')
    })
}

function eventListeners() {
    const mobileMenu = document.querySelector('.mobile-menu')
    mobileMenu.addEventListener('click', navegacionResponsive)
}

function navegacionResponsive() {
    const navegacion = document.querySelector('.navegacion')

    // Sintaxis básica con una condición
    /* if(navegacion.classList.contains('mostrar')) {
        navegacion.classList.remove('mostrar')
    } else {
        navegacion.classList.add('mostrar')
    } */

    // Otra sintaxis similar a la condición:
    navegacion.classList.toggle('mostrar')

}
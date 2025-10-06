document.addEventListener('DOMContentLoaded', function() {

    eventListeners();

    darkMode();
});

function darkMode(){

    const prefireDarkMode = window.matchMedia('(prefers-color-scheme: dark)');

    console.log(prefireDarkMode.matches);

    if(prefireDarkMode.matches){
        document.body.classList.add('dark-mode');
    }else{
        document.body.classList.remove('dark-mode');
    }

    prefireDarkMode.addEventListener('change', function() {
        if(prefireDarkMode.matches){
            document.body.classList.add('dark-mode');
        }else{
            document.body.classList.remove('dark-mode');
        }
    });

    const botonDarkMode = document.querySelector('.dark-mode-boton');

    botonDarkMode.addEventListener('click', function(){
        document.body.classList.toggle('dark-mode');
    });
}

function eventListeners() {
    const mobileMenu = document.querySelector('.mobile-menu');

    if (mobileMenu) {
        mobileMenu.addEventListener('click', navegacionResponsive);
    }
}

function navegacionResponsive() {
    const navegacion = document.querySelector('.navegacion');

    if (navegacion.classList.contains('mostrar')) {

        navegacion.classList.remove('mostrar');
        console.log('mostrar off');
    } else {
        navegacion.classList.add('mostrar');
        console.log('mostrar on');
    }
}

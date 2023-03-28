
document.addEventListener('DOMContentLoaded', function(){

    eventListener();

    darkMode();

});

function eventListener() {
    const mobileMenu = document.querySelector('.mobile-menu');
    mobileMenu.addEventListener('click',navegacionResponsive)
};

function navegacionResponsive(){
    const navegacion = document.querySelector('.navegacion');

        navegacion.classList.toggle('mostrar');
    
}

function darkMode() {
    const darkMode = document.querySelector('.dark-mode-boton');
    darkMode.addEventListener('click', ()=>{
        document.body.classList.toggle('dark-mode');
    })
}
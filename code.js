window.addEventListener('load', function(){
    var button = document.getElementById('hamburger');
    var menu = document.getElementById('menu');
    button.addEventListener('click', function(){
        menu.classList.toggle('verborgen');
    });
});
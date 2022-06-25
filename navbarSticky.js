window.addEventListener('scroll', function(){
    var navBar = document.querySelector('nav');
    navBar.classList.toggle("sticky", window.scrollY > 0);
})
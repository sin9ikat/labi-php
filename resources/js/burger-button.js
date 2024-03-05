let menuBtn = document.querySelector('.burger-button');
let menu = document.querySelector('.nav-menu');
menuBtn.addEventListener('click', function(){
    menuBtn.classList.toggle('active');
    menu.classList.toggle('active');
})

document.addEventListener('click', function(event){
    if(!event.target.closest('.burger-button') && !event.target.closest('.nav-menu')){
        menuBtn.classList.remove('active');
        menu.classList.remove('active');
    }
});




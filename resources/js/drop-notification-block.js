let menuBtn = document.querySelector('.notification-img');
let menu = document.querySelector('.notification-block');
menuBtn.addEventListener('click', function(){
    menuBtn.classList.toggle('notification-block-show');
    menu.classList.toggle('notification-block-show');
})

document.addEventListener('click', function(event){
    if(!event.target.closest('.notification-img') && !event.target.closest('.notification-block')){
        menuBtn.classList.remove('notification-block-show');
        menu.classList.remove('notification-block-show');
    }
});

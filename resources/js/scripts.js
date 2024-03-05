/*!
* Start Bootstrap - Simple Sidebar v6.0.6 (https://startbootstrap.com/template/simple-sidebar)
* Copyright 2013-2023 Start Bootstrap
* Licensed under MIT (https://github.com/StartBootstrap/startbootstrap-simple-sidebar/blob/master/LICENSE)
*/
//
// Scripts
//

window.addEventListener('DOMContentLoaded', event => {

    // Toggle the side navigation
    const sidebarToggle = document.body.querySelector('#sidebarToggle');
    if (sidebarToggle) {
        // Uncomment Below to persist sidebar toggle between refreshes
        // if (localStorage.getItem('sb|sidebar-toggle') === 'true') {
        //     document.body.classList.toggle('sb-sidenav-toggled');
        // }
        sidebarToggle.addEventListener('click', event => {
            event.preventDefault();
            document.body.classList.toggle('sb-sidenav-toggled');
            localStorage.setItem('sb|sidebar-toggle', document.body.classList.contains('sb-sidenav-toggled'));
        });
    }

});

let select = document.getElementById('selectzero');
let block = document.querySelectorAll('.block');
let lastIndex = 0; // После каждой смены опции, сохраняем сюда индекс предыдущего блока
let description = document.getElementById('description')

select.addEventListener('change', function() {
    block[lastIndex].value = ""; // Очистить значение ввода предыдущего блока
    if(block[lastIndex].id === 'textarea') {
        description.style=""
        block[lastIndex].value = ""; // Очистить значение ввода предыдущего блока
        tinymce.activeEditor.hide();
        block[lastIndex].value = ""; // Очистить значение ввода предыдущего блока
    }
    block[lastIndex].style.display = "none";
    let index = select.selectedIndex;
    if(block[index].id === 'textarea') {
        block[index].style=''
        description.style.display="none"
        tinymce.activeEditor.show();
    } else {
        block[index].style='flex'
    }
    block[index].value="";
    lastIndex = index;
});


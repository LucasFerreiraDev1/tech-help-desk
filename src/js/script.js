
const btn_navbar = document.querySelector('.btn-navbar');
const dropDown = document.querySelector('.menu-dropdown');

btn_navbar.addEventListener('click', ()=> {
    dropDown.classList.toggle('active');
    
    if(btn_navbar.innerHTML === '<i class="fa-solid fa-bars"></i>') {
        btn_navbar.innerHTML = '<i class="fa-solid fa-x"></i>';
    } else {
        btn_navbar.innerHTML = '<i class="fa-solid fa-bars"></i>';
    }
});
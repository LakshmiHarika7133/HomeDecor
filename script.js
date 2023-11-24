const header = document.querySelector('header');
function fixedNavbar(){
    header.classList.toggle('scrolled',window.pageYOffset > 0)
}
fixedNavbar();
window.addEventListener('scroll', fixedNavbar);

let menu = document.querySelector('#menu-btn');
let userBtn = document.querySelector('#user-btn');

menu.addEventListener('click', function(){
    let nav = document.querySelector('.navbar');
    nav.classList.toggle('active');
})

userBtn.addEventListener('click', function(){
    let userBox = document.querySelector('.user-box');
    userBox.classList.toggle('active');
})

// var div = document.getElementById('');
// var display = 0;

// function hideshow(){
//     if(display == 1){
//         div.style.display = 'block';
//         display = 0;
//     }
//     else{
//         div.style.display = 'none';
//         display = 1;
//     }
// }
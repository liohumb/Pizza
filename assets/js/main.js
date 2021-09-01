/* MENU BARRE NAVIGATION */

const navMenu = document.getElementById('nav-menu'),
    navToggle = document.getElementById('nav-toggle'),
    navClose = document.getElementById('nav-close')


if(navToggle){
    navToggle.addEventListener('click', () =>{
        navMenu.classList.add('show-menu')
    })
}


if(navClose){
    navClose.addEventListener('click', () =>{
        navMenu.classList.remove('show-menu')
    })
}

const navLink = document.querySelectorAll('.nav__link')

function linkAction(){
    const navMenu = document.getElementById('nav-menu')
    navMenu.classList.remove('show-menu')
}
navLink.forEach(n => n.addEventListener('click', linkAction))


function scrollHeader(){
    const header = document.getElementById('header')

    if(this.scrollY >= 100) header.classList.add('scroll-header'); else header.classList.remove('scroll-header')
}
window.addEventListener('scroll', scrollHeader)


/* AFFICHAGE MENU PRODUITS */


let swiper = new Swiper(".swiper__container", {
    effect: "coverflow",
    grabCursor: true,
    centeredSlides: true,
    slidesPerView: "auto",
    loop: true,
    spaceBetween: 32,
    coverflowEffect: {
        rotate: 0,
    },
})


/* CONFIRMATION EMAIL */


function confirmEmail() {
    var email = document.getElementById("email").value
    var confemail = document.getElementById("confemail").value
    if(email != confemail) {
        alert('Attention ! \nVotre confirmation d\'email doit être identique de votre email.');
    }
}
/* CALCUL PRIX SELON QUANTITE */


let select = document.querySelector('[name="optionSelect"]')
select.addEventListener('change', function(evt){
    let id = evt.target.value;
    let newprice = prices.filter(price=>price.option_id == id);
    let goodPrice=newprice[0];
     let price = goodPrice.price;
    price;
    document.querySelector('.products__data-price').innerHTML = price+" €";
   let val= document.querySelector('[name="price"]').value = price;
   
})
console.log(prices);


/* CONFIRMATION MOT DE PASSE */


var password = document.getElementById("password")
    , confirm_password = document.getElementById("confirm_password");

function validatePassword(){
    if(password.value != confirm_password.value) {
        confirm_password.setCustomValidity("Passwords Don't Match");
    } else {
        confirm_password.setCustomValidity('');
    }
}

password.onchange = validatePassword;
confirm_password.onkeyup = validatePassword;



document.querySelector('.products__data-price').innerHTML = "10.50€";
let bp = 0;

console.log(prices);


/* POPUP PANIER */


const openModalButtons = document.querySelectorAll('[data-modal-target]')
const closeModalButtons = document.querySelectorAll('[data-close-button]')
const overlay = document.getElementById('overlay')

openModalButtons.forEach(button => {
    button.addEventListener('click', () => {
        const modal = document.querySelector(button.dataset.modalTarget)
        openModal(modal)
    })
})

overlay.addEventListener('click', () => {
    const modals = document.querySelectorAll('.modal.active')
    modals.forEach(modal => {
        closeModal(modal)
    })
})

closeModalButtons.forEach(button => {
    button.addEventListener('click', () => {
        const modal = button.closest('.modal')
        closeModal(modal)
    })
})

function openModal(modal) {
    if (modal == null) return
    modal.classList.add('active')
    overlay.classList.add('active')
}

function closeModal(modal) {
    if (modal == null) return
    modal.classList.remove('active')
    overlay.classList.remove('active')
}
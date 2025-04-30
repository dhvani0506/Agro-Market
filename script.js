// search form
let searchForm = document.querySelector('.search-form');

document.querySelector('#search-btn').onclick = () =>
{
    searchForm.classList.toggle('active');
    loginForm.classList.remove('active');
    navBar.classList.remove('active');
}

// login form
let loginForm = document.querySelector('.login-form');

document.querySelector('#login-btn').onclick = () =>
{
    searchForm.classList.remove('active');
    loginForm.classList.toggle('active');
    navBar.classList.remove('active');
}
// navbar
let navBar = document.querySelector('.navbar');

document.querySelector('#menu-btn').onclick = () =>
{
    searchForm.classList.remove('active');
    loginForm.classList.remove('active');
    navBar.classList.toggle('active');
}

//overlay effect
window.onscroll = () =>
{
    searchForm.classList.remove('active');
    shoppingCart.classList.remove('active');
    loginForm.classList.remove('active');
    navBar.classList.remove('active');
}

//slider
var Swiper = new Swiper(".product-slider", {
    loop:true,
    spaceBetween: 20,
    autoplay: {
        delay: 2000,
        disableOnInteraction: false,
    },

    breakpoints: {
      0: {
        slidesPerView: 1,
      },
      768: {
        slidesPerView: 2,
      },
      1020: {
        slidesPerView: 3,
      },
    },
  });








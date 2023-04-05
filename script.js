// to turn on and off the hamburger menuconst toggle = document.querySelector('.fa-bars');
const navList = document.querySelector('.nav-list');
const toggle = document.querySelector('.hamburger');
toggle.addEventListener('click', function () {
  navList.classList.toggle('invisible-nav');
  navList.classList.toggle('visible-nav');
});

// to animate the scroll down nav bar
$(window).scroll(function () {
  if ($(window).scrollTop()) {
    $('nav').addClass('move-nav');
  } else {
    $('nav').removeClass('move-nav');
  }
});

// for the functionality of the slideshow
const buttons = document.querySelectorAll('[data-carousel-button]');

buttons.forEach((button) => {
  button.addEventListener('click', () => {
    const offset = button.dataset.carouselButton === 'next' ? 1 : -1;
    const slides = button
      .closest('[data-carousel]')
      .querySelector('[data-slides]');

    const activeSlide = slides.querySelector('[data-active]');
    let newIndex = [...slides.children].indexOf(activeSlide) + offset;
    if (newIndex < 0) newIndex = slides.children.length - 1;
    if (newIndex >= slides.children.length) newIndex = 0;

    slides.children[newIndex].dataset.active = true;
    delete activeSlide.dataset.active;
  });
});

// FORM VALIDATION **********************************************************************************************************************************************************************************************8

const firstname = document.querySelector('.firstname');
const lastname = document.querySelector('.lastname');
const password = document.querySelector('.password');
const email = document.querySelector('.email');
const phoneNumber = document.querySelector('.number');
const form = document.querySelector('.form');
const error = document.querySelector('.error');
const errorHide = document.querySelector('.error-hide');
const errorShow = document.querySelector('.error-show');
const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
// email validation

form.addEventListener('submit', (e) => {
  // to check if the fields are empty
  // e.preventDefault();

  if (
    firstname.value === '' ||
    lastname.value === '' ||
    email.value === '' ||
    phoneNumber.value === '' ||
    password.value === ''
  ) {
    // error.classList.replace('error-hide', 'error-show');
    // error.classList.replace('error-show', 'error-error');
    e.preventDefault();

    error.classList.toggle('error-show');
    error.classList.toggle('error-hide');
    return;
  } else {
    this.unbind('submit').submit();
  }
});

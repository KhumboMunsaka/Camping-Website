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

// modal window VALIDATION **********************************************************************************************************************************************************************************************8
let menu = document.querySelector('#menu-btn');
menu.onclick = () => {
  menu.classList.toggle('fa-times');
};
window.onscroll = () => {
  menu.classList.remove('fa-times');
};

// to disble the button until the date is picked
const button = document.querySelector('.btn');
const date = document.querySelector('.date');

const currentDate = new Date();

date.addEventListener('input', function () {
  const pickedDate = new Date(this.value);
  console.log(pickedDate);
  if (pickedDate < currentDate || pickedDate == null) {
    // Date is in the past
    button.classList.toggle('disabled');
    // Perform additional actions if needed
  } else {
    // Date is in the future or today
    button.classList.remove('disabled');
    // Perform additional actions if needed
  }
});

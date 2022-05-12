const menu = document.querySelector('#mobile-menu');
const menuLinks = document.querySelector('.navbar__menu');

// Display Mobile Menu
const mobileMenu = () => {
    menu.classList.toggle('is-active');//adding or deleting class name 'is-active' to the element that has id #mobile-menu
    menuLinks.classList.toggle('active');
};

menu.addEventListener('click', mobileMenu);
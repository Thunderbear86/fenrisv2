//imports
import { initModalCarousel } from './mc.js';
import { positionCircleWords, toggleCircleWords } from './kodning.js';

// Set Initial State Of Menu
let showMenu = false;

// Select DOM Items
const menuBtn = document.querySelector('.menu-btn');
const menu = document.querySelector('.menu');
const menuNav = document.querySelector('.menu-nav');
const navItems = document.querySelectorAll('.nav-item');

// Event listener for menu button
menuBtn.addEventListener('click', toggleMenu);

// Function to toggle the menu
function toggleMenu() {
    menuBtn.classList.toggle('close');
    menu.classList.toggle('show');
    menuNav.classList.toggle('show');
    navItems.forEach(item => item.classList.toggle('show'));
    // Simplified toggle without the need for 'showMenu' boolean
}

// When DOM is fully loaded, initialize necessary functions
document.addEventListener('DOMContentLoaded', () => {
    // Initialize the modal carousel
    initModalCarousel();
    positionCircleWords();

    // Get the codingHeadline element
    const codingHeadline = document.getElementById('codingHeadline');

    // Check if the element exists before adding event listeners
    if (codingHeadline) {
        codingHeadline.addEventListener('mouseover', () => toggleCircleWords(true));
        codingHeadline.addEventListener('mouseout', () => toggleCircleWords(false));
    }

});

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

// Function to toggle the menu
function toggleMenu() {
    showMenu = !showMenu; // Toggle the state of the showMenu boolean
    menuBtn.classList.toggle('close');
    menu.classList.toggle('show');
    menuNav.classList.toggle('show');
    navItems.forEach(item => item.classList.toggle('show'));
}

// Function to close the menu
function closeMenu() {
    if (showMenu) {
        toggleMenu(); // Call the function that toggles the menu
    }
}

// Event listener for menu button
menuBtn.addEventListener('click', toggleMenu);

// Add event listeners for each nav item to close the menu on click
navItems.forEach(item => {
    item.addEventListener('click', closeMenu);
});

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

    // Smooth scrolling for anchor links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();

            const targetId = this.getAttribute('href');
            const targetElement = document.querySelector(targetId);

            if (targetElement) {
                // Close the menu if it's open
                closeMenu();

                // Scroll to the target element
                targetElement.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
            }
        });
    });
});

// mc.js
function initModalCarousels() {
    // Initialize any carousels
    var designCarousel = new bootstrap.Carousel(document.getElementById('designCarousel'));
    var aiCarousel = new bootstrap.Carousel(document.getElementById('aiControls'));
    var kodningCarousel = new bootstrap.Carousel(document.getElementById('kodningControls'));

    // Optional: Add any custom event listeners or additional JavaScript for the modals here
}

// This function will run when the document is ready, ensuring that Bootstrap's JS is loaded
document.addEventListener('DOMContentLoaded', initModalCarousels);
// Export the init function
export { initModalCarousels as initModalCarousel };

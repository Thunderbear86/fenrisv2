// kodning.js

// Function to position words in a circle
export function positionCircleWords() {
    const radius = 100; // radius of the circle
    const words = document.querySelectorAll('.circle-word');
    const angleStep = (2 * Math.PI) / words.length;

    words.forEach((word, index) => {
        const angle = index * angleStep;
        const x = Math.cos(angle) * radius;
        const y = Math.sin(angle) * radius;
        word.style.left = `calc(50% + ${x}px)`;
        word.style.top = `calc(50% + ${y}px)`;
        word.innerText = word.dataset.word;
        word.style.display = 'none'; // Ensure words are hidden by default
    });
}

// Function to show or hide the circle words
export function toggleCircleWords(show) {
    const words = document.querySelectorAll('.circle-word');
    words.forEach(word => {
        word.style.display = show ? 'block' : 'none';
    });
}

// When the DOM is loaded, position the words and add event listeners
document.addEventListener('DOMContentLoaded', () => {
    // Position the words when the page loads
    positionCircleWords();

    // Add hover event listeners to the "Kodning" title
    const codingHeadline = document.getElementById('codingHeadline');

    codingHeadline.addEventListener('mouseover', () => {
        toggleCircleWords(true); // Show words
    });

    codingHeadline.addEventListener('mouseout', () => {
        toggleCircleWords(false); // Hide words
    });
});

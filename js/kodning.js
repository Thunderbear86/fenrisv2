// kodning.js
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
    });
}

export function toggleCircleWords() {
    const words = document.querySelectorAll('.circle-word');
    words.forEach(word => {
        word.classList.toggle('active');
    });
}

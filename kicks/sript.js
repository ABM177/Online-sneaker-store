const carousel = document.querySelector('.carousel');
const items = document.querySelectorAll('.carousel-item');
const nextButton = document.getElementById('next');
const prevButton = document.getElementById('prev');
let currentIndex = 0;

function updateCarousel() {
    const offset = -currentIndex * 100;
    items.forEach(item => {
        item.style.transform = `translateX(${offset}%)`;
    });
}

nextButton.addEventListener('click', () => {
    currentIndex = (currentIndex + 1) % items.length;
    updateCarousel();
});

prevButton.addEventListener('click', () => {
    currentIndex = (currentIndex - 1 + items.length) % items.length;
    updateCarousel();
});

updateCarousel();

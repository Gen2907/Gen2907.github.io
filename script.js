// Selecciona el contenedor que mueve las imágenes del carrusel
const track = document.querySelector('.carousel-track');
// Convierte los elementos hijos del carrusel en un arreglo
const slides = Array.from(track.children);

// Botones para avanzar y retroceder el carrusel
const nextBtn = document.querySelector('.carousel-btn.next');
const prevBtn = document.querySelector('.carousel-btn.prev');

// Índice del slide actual y cantidad de slides visibles
let index = 0;
let visibleSlides = 6;

// Actualiza la posición del carrusel según el índice
function update() {
    const slideWidth = slides[0].getBoundingClientRect().width + 15; // ancho + espacio
    track.style.transform = `translateX(-${index * slideWidth}px)`;  // mueve el carrusel
}

// Avanza al siguiente slide
nextBtn.addEventListener('click', () => {
    index++;
    // Si llega al final, vuelve al inicio
    if (index > slides.length - visibleSlides) index = 0;
    update();
});

// Retrocede al slide anterior
prevBtn.addEventListener('click', () => {
    index--;
    // Si llega antes del primero, va al final
    if (index < 0) index = slides.length - visibleSlides;
    update();
});

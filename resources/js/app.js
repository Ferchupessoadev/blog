import "./bootstrap";
import "preline";
import Alpine from "alpinejs";

window.Alpine = Alpine;

Alpine.start();

addEventListener("DOMContentLoaded", () => {
    // remove error messages if it's present
    const $errorsBox = document.getElementById("errorsBox");
    if ($errorsBox) {
        setTimeout(() => {
            $errorsBox.remove();
        }, 3000);
    }


    const elements = document.querySelectorAll(".fade-up");

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
        if (entry.isIntersecting) {
            entry.target.classList.remove("opacity-0", "translate-y-4");
            entry.target.classList.add("opacity-100", "translate-y-0");
            observer.unobserve(entry.target);
        }
        });
    }, { threshold: 0.1 });

    elements.forEach(el => observer.observe(el));

    const container = document.getElementById('category-container');
    const btnLeft = document.getElementById('scroll-left');
    const btnRight = document.getElementById('scroll-right');

    const scrollAmount = 200;

    btnRight.addEventListener('click', () => {
        container.scrollLeft += scrollAmount;
    });

    btnLeft.addEventListener('click', () => {
        container.scrollLeft -= scrollAmount;
    });

    btnLeft.style.display = container.scrollLeft = 'none'
    // Opcional: Ocultar flechas si no hay más scroll disponible
    container.addEventListener('scroll', () => {
        btnLeft.style.display = container.scrollLeft <= 0 ? 'none' : 'block';
        
        const maxScroll = container.scrollWidth - container.clientWidth;
        btnRight.style.display = container.scrollLeft >= maxScroll ? 'none' : 'block';
    });
});
const navbarElement = document.querySelector("#navbar");

window.addEventListener("scroll", updateNavbarBackground);

function updateNavbarBackground() {
    const isScrolling = window.scrollY > 0;

    navbarElement.classList.toggle("bg-base-300", !isScrolling);
}

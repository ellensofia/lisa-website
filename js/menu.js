window.onload = function () {

    // Access elements from DOM
    const hamburger = document.querySelector(".hamburger");
    const navMenu = document.querySelector(".menu");

    hamburger.addEventListener("click", () => {
        hamburger.classList.toggle("active");
        navMenu.classList.toggle("active");
    })

    //on click remove active class
    document.querySelectorAll(".menu__link").forEach(link => link.addEventListener("click", () => {
        hamburger.classList.remove("active");
        navMenu.classList.remove("active");
    }))

}
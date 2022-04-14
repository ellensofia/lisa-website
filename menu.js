window.onload = function () {



    const hamburger = document.querySelector(".hamburger");
    const navMenu = document.querySelector(".menu");

    hamburger.addEventListener("click", () => {
        hamburger.classList.toggle("active");
        navMenu.classList.toggle("active");
        console.log("steg ett")
        console.log("steg två")
    })

    document.querySelectorAll(".menu__link").forEach(link => link.addEventListener("click", () => {
        hamburger.classList.remove("active");
        navMenu - classList.remove("active");
    }))

}
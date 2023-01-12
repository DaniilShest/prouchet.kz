const burger = document.querySelector(".burger")
const mobileMenu = document.querySelector(".mobile_menu")

burger.addEventListener("click", () => {
    burger.classList.toggle("open")
    mobileMenu.classList.toggle("open")
})

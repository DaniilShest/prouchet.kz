const burger = document.querySelector(".burger")
const mobileMenu = document.querySelector(".mobile_menu")
const anchors = document.querySelectorAll('a[href*="#"]')

for (let anchor of anchors) {
    anchor.addEventListener('click', function (e) {
        e.preventDefault()

        const blockID = anchor.getAttribute('href').substr(1)

        if (window.innerWidth <= 720) {
            if (!document.querySelector('footer').contains(anchor) && !anchor.classList.contains("main__btn")) {
                burger.classList.toggle("open")
                mobileMenu.classList.toggle("open")
                document.body.classList.toggle("lock")
            }
        }

        let blockValue = blockID === "request" || blockID === "contacts" ? "center" : "start"

        document.getElementById(blockID).scrollIntoView({
            behavior: 'smooth',
            block: blockValue
        })
    })
}

burger.addEventListener("click", () => {
    burger.classList.toggle("open")
    mobileMenu.classList.toggle("open")
    document.body.classList.toggle("lock")
})

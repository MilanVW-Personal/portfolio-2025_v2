document.querySelector("#menu-toggle")?.addEventListener('click', () => {
    const navMenu = document.querySelector('#mobile-menu')
    navMenu.classList.toggle("hidden")
})

document.querySelector(".heroBtn")?.addEventListener("click", () => {
    window.location.href = "/contact"
})

document.querySelector(".logoDiv")?.addEventListener("click", () => {
    window.location.href = "/"
})
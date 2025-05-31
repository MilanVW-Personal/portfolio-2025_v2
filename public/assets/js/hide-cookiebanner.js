// Nodige variabelen
const cookiebanner = document.querySelector("#cookieBanner")
const acceptAllBtn = document.querySelector(".acceptAllKnop")
const acceptEssentialBtn = document.querySelector(".acceptEssentialKnop")
const rejectAllBtn = document.querySelector(".rejectAllKnop")

// Fn() voor alle en de essentiële cookies te aanvaarden
const closeCookieBanner = () => {
    cookiebanner.classList.add("hidden")
    // console.log("test")
}

// Events op buttons
acceptAllBtn?.addEventListener("click", closeCookieBanner);
acceptEssentialBtn?.addEventListener("click", closeCookieBanner);
rejectAllBtn?.addEventListener("click", closeCookieBanner);
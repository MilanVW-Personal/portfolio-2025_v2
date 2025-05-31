// Nodige variabelen
const cookiebanner = document.querySelector("#cookieBanner")
const acceptAllBtn = document.querySelector(".acceptAllKnop")
const acceptEssentialBtn = document.querySelector(".acceptEssentialKnop")
const rejectAllBtn = document.querySelector(".rejectAllKnop")

// Fn() voor alle en de essentiële cookies te aanvaarden
if (!sessionStorage.getItem("cookieBannerHasShown"))
    cookiebanner.classList.remove("hidden");
else
    cookiebanner.classList.add("hidden");

const closeCookieBanner = () => {
    cookiebanner.classList.add("hidden");
    sessionStorage.setItem("cookieBannerHasShown", "true");
};

// Events op buttons
acceptAllBtn?.addEventListener("click", closeCookieBanner);
acceptEssentialBtn?.addEventListener("click", closeCookieBanner);
rejectAllBtn?.addEventListener("click", closeCookieBanner);
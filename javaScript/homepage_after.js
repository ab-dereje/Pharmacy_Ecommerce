const user_info = document.querySelector(".menu-profile");
const profile = document.querySelector(".profile");


function PageTransitions() {

    profile.style.display = "none";

    user_info.addEventListener('click', () => {
        if (profile.style.display === "none") {
            profile.style.display = "flex";
            console.log("abu");
        } else {
            profile.style.display = "none";
        }
    })

}
PageTransitions();
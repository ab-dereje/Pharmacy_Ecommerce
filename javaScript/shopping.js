const user_info = document.querySelector(".menu-profile");
const profile = document.querySelector(".profile");
const proced_pay = document.querySelector(".proced-pay");
const billing = document.querySelector(".Billing");
const shop = document.querySelector(".shop");


function PageTransitions() {

    // profile.style.display = "none";

    // user_info.addEventListener('click', () => {
    //     if (profile.style.display === "none") {
    //         profile.style.display = "flex";
    //     } else {
    //         profile.style.display = "none";
    //     }
    // })


    billing.style.display = "none";

    proced_pay.addEventListener('click', () => {
        if (billing.style.display === "none") {
            billing.style.display = "flex";
            shop.style.display = "none";
        } else {
            billing.style.display = "none";
        }
    })

}
PageTransitions();
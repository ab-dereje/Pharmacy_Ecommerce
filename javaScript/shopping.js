const user_info = document.querySelector(".menu-profile");
const profile = document.querySelector(".profile");
const proced_pay = document.querySelector(".proced-pay");
const billing = document.querySelector(".Billing");
const shop = document.querySelector(".shop");
//onst deleteBtn = document.querySelector(".btn");

function PageTransitions() {

    // profile.style.display = "none";

    // user_info.addEventListener('click', () => {
    //     if (profile.style.display === "none") {
    //         profile.style.display = "flex";
    //     } else {
    //         profile.style.display = "none";
    //     }
    // })

    const deleteBtns = document.querySelectorAll(".btn");
    deleteBtns.forEach((deleteBtn) => {
        deleteBtn.addEventListener('click', (event) => {
            const medId = event.target.getAttribute('data');
            // const medId = event.target.dataset.medId;
            console.log(medId);
            const form = document.createElement('form');
            form.method = 'POST';
            form.action = '../controller/cart.php';
            const input = document.createElement('input');
            input.type = 'hidden';
            input.name = 'med_id';
            input.value = medId;
            form.appendChild(input);
            document.body.appendChild(form);
            form.submit();
        })
    });


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
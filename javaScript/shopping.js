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
            const quant = event.target.getAttribute('value')
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

    const update_btn = document.querySelectorAll(".btn-update");
    update_btn.forEach(function(button) {
        button.addEventListener('click', function() {
            var productId = this.getAttribute('data');
            var quantityInput = this.parentNode.parentNode.querySelector('td:nth-child(3) input[name="quantity"]');
            if (quantityInput !== null) {
                var quantity = quantityInput.value;
                var xhr = new XMLHttpRequest();
                xhr.open('POST', '../controller/updateCart.php', true);
                xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
                xhr.onreadystatechange = function() {
                    if (xhr.readyState === XMLHttpRequest.DONE && xhr.status === 200) {
                        console.log(xhr.responseText);
                    }
                };
                xhr.send('product_id=' + productId + '&quantity=' + quantity);
                // console.log(xhr.send('product_id=' + productId + '&quantity=' + quantity));
            } else {
                console.log("Error: quantity input not found");
            }
        });
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
// const buyButtons = document.querySelectorAll('.buy-btn');
// buyButtons.forEach(button => {
//     button.addEventListener('click', (event) => {
//         const medId = event.target.getAttribute('data-med-id');
//         console.log(medId);
//         const form = document.createElement('form');
//         form.method = 'POST';
//         form.action = '../controller/shopping.php';
//         const input = document.createElement('input');
//         input.type = 'hidden';
//         input.name = 'med_id';
//         input.value = medId;
//         form.appendChild(input);
//         document.body.appendChild(form);
//         form.submit();
//         button.innerHTML = "Added";
//     });
// });
const label = document.querySelector('label.number');

let i = 1;
const buyButtons = document.querySelectorAll('.buy-btn');
buyButtons.forEach(button => {
    button.addEventListener('click', (event) => {
        const medId = event.target.getAttribute('data-med-id');
        console.log(medId);
        const data = new FormData();
        data.append('med_id', medId);
        fetch('../controller/shopping.php', {
                method: 'POST',
                body: data
            })
            .then(response => {
                if (response.ok) {
                    if (button.innerHTML !== "Added") {
                        button.innerHTML = "Added";
                        label.innerHTML = `+${i++}`;
                    }
                } else {
                    throw new Error('Failed to add item to cart');
                }
            })
            .catch(error => {
                console.error(error);
            });
    });
});



// about read more
const more_btn = document.querySelector(".more-btn");
const more = document.querySelector(".more");
more.style.display = "none";
more_btn.addEventListener('click', () => {
    if (document.querySelector('.more').style.display === "none") {
        more.style.display = "inline";
        more_btn.innerHTML = "Read Less";
    } else {
        more.style.display = "none";
        more_btn.innerHTML = "Read More";
    }
})


// const buyButton = document.querySelector('.buy-btn');
// buyButton.addEventListener('click', (event) => {
//     const medId = event.target.getAttribute('data-med-id');
//     console.log(medId);
//     const form = document.createElement('form');
//     form.method = 'POST';
//     form.action = '../controller/shopping.php';
//     const input = document.createElement('input');
//     input.type = 'hidden';
//     input.name = 'med_id';
//     input.value = medId;
//     form.appendChild(input);
//     document.body.appendChild(form);
//     form.submit();
// });
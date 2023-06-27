const buyButtons = document.querySelectorAll('.buy-btn');
buyButtons.forEach(button => {
    button.addEventListener('click', (event) => {
        const medId = event.target.getAttribute('data-med-id');
        console.log(medId);
        const form = document.createElement('form');
        form.method = 'POST';
        form.action = '../controller/shopping.php';
        const input = document.createElement('input');
        input.type = 'hidden';
        input.name = 'med_id';
        input.value = medId;
        form.appendChild(input);
        document.body.appendChild(form);
        form.submit();
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
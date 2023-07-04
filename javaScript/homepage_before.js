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
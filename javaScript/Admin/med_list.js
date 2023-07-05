const deleteBtns = document.querySelectorAll(".btn");
deleteBtns.forEach((deleteBtn) => {
    deleteBtn.addEventListener('click', (event) => {
        const quant = event.target.getAttribute('value')
        const medId = event.target.getAttribute('data');
        // const medId = event.target.dataset.medId;
        console.log(medId);
        const form = document.createElement('form');
        form.method = 'POST';
        form.action = '../../controller/Admin/deleteMed.php';
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
        var pricevalue = this.parentNode.parentNode.querySelector('td:nth-child(6) input[name="price"]');
        var descriptionvalue = this.parentNode.parentNode.querySelector('td:nth-child(3) input[name="description"]');
        if (price !== null) {
            var price = pricevalue.value;
            var description = descriptionvalue.value;
            var xhr = new XMLHttpRequest();
            xhr.open('POST', '../../controller/Admin/updateMed.php', true);
            xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
            xhr.onreadystatechange = function() {
                if (xhr.readyState === XMLHttpRequest.DONE && xhr.status === 200) {
                    console.log(xhr.responseText);
                }
            };
            xhr.send('product_id=' + productId + '&price=' + price + '&description=' + description);
            // console.log(xhr.send('product_id=' + productId + '&quantity=' + quantity));
        } else {
            console.log("Error: quantity input not found");
        }
    });
});
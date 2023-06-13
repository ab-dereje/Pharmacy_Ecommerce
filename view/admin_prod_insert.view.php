<?php
$dir = 'photos';
if (!is_dir($dir)) {
    mkdir($dir);
}
?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Product</title>
    </head>

    <body>
        <form action="../controller/Admin_prod_insert.php" method="post" enctype="multipart/form-data">
            <div>
                <label for="med_name">Medicine Name</label>
                <input id="med_name" name="med_name">
            </div>
            <div>
                <label for="description">Description</label>
                <textarea id="description" name="description"></textarea>
            </div>
            <div>
                <label for="types">Types</label>
                <input id="types" name="types">
            </div>
            <div>
                <label for="prescription">Prescription</label>
                <textarea id="prescription" name="prescription"></textarea>
            </div>
            <div>
                <label for="price">Price</label>
                <input id="price" name="price">
            </div>
            <div>
                <label for="photo">Insert Photo</label>
                <input type="file" id="photo" name="photo">
            </div>
            <div>
                <button type="submit" class="btn" name="save">Save</button>
            </div>

        </form>

    </body>

    </html>
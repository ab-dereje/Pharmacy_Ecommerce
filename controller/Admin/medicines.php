<?php

require_once "config.php";

session_start();
if (empty($_SESSION['user'])) {
    header('location:../../view/Admin/AdminLogin.php');
}

$conn = require_once("../../model/database.php");

$sql = "SELECT * FROM Product;";

$result = mysqli_query($conn, $sql);
$resultCheck = mysqli_num_rows($result);

if ($resultCheck > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $id = $row['med_id'];
        $name = $row['med_name'];
        $desc = $row['description'];
        $price = $row['price'];
        $type = $row['type'];
        // echo $row['medId'] . "  ";
        // echo $row['medName'] . "   ";
        // echo $row['description'] . "   ";
        // echo $row['price'] . "   ";
        echo $row['med_name'] . "<form action='deleteMed.php' method='post' >
                                <input type='hidden' value='$id' name='id'> 
                                <button>delete</button>
                           </form>" . "<form action='updateMed.php' method='post' >
                                        <input type='text' value='$id' name='id'> 
                                        <input type='text' value='$name' name='name'> 
                                        <input type='text' value='$desc' name='desc'> 
                                        <input type='text' value='$price' name='price'> 
                                        <input type='text' value='$type' name='type'> 
                                        <button>update</button>
                                      </form>";
    }
}
?>

<!-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Medicine</title>
</head>

<body>
    <table class="table" border="1">
        <thead class="thead">
            <tr class="tr">
                <th class="th">medicine_id</th>
                <th class="th">Name</th>
                <th class="th">Description</th>
                <th class="th">prescription</th>
                <th class="th">Type</th>
                <th class="th">price</th>
                <th class="th">Delete</th>
                <th class="th">Update</th>
            </tr>
        </thead>
        <tbody>
            <?php if ($resultCheck > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
            ?>
                    <tr>
                        <td><input><?php echo $row['med_id']; ?></input> </td>
                        <td><input><?php echo $row['med_name']; ?> </input> </td>
                        <td><input><?php echo $row['description']; ?> </input> </td>
                        <td><input><?php echo $row['prescription']; ?></input>  </td>
                        <td><input><?php echo $row['type']; ?> </input> </td>
                        <td><input><?php echo $row['price']; ?></input>  </td>
                        <form action="./deleteMed.php" method="POST">
                            <td class="td"><button class="btn" data="<?php echo $med_id; ?>">Delete</button></td>
                        </form>

                        <form action="../controller/transaction.php" method="POST">
                            <td class="td"><button class="btn-update" data="<?php echo $med_id; ?>">update</button></td>
                        </form>
                    </tr>
            <?php }
            }
            ?>
        </tbody>
    </table>
</body>

</html> -->
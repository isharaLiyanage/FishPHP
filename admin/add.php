<?php
require_once('../inc/connection.php');
$msg = "";

if (isset($_POST['submit'])) {
    $p_name = $_POST['pName'];
    $p_price = $_POST['pPrice'];
    $p_cat = $_POST['category'];
    $target_dir = "image/";
    $target_file = $target_dir . basename($_FILES['pImage']["name"]);
    move_uploaded_file($_FILES['pImage']["tmp_name"], $target_file);


    $sql = "INSERT INTO poducts (product_name,Product_price,Category,product_image)VALUES('$p_name','$p_price','$p_cat','$target_file')";

    if (mysqli_query($connection, $sql)) {
        $msg = 'product Added to the database';
    } else {
        $msg = 'not working';
    }
}
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mobile Store</title>
</head>
<link rel="stylesheet" href="../css/admin/main.css">

<body>
    <div class="container">
        <div class="heading">Add Product Information</div>
        <div class="form">
            <form action="" method="post" enctype="multipart/form-data" id="form-box">
                <p> <input type="text" name="pName" id="pName" class="pImage" placeholder="product name" required></p>
                <p> <input type="text" name="pPrice" id="pPrice" class="pImage" placeholder="product price" required></p>
                <div class="lable">
                    <p><input type="file" name="pImage" id="customFile" required>
                        <label for="customFile" class="customFile">Choose product image </label>
                    </p>
                </div>
                <Label for="category">Choose category</Label>
                <select name="category" id="category">
                    <option value="category01">category01</option>
                    <option value="category02">category02</option>
                    <option value="category03">category03</option>
                    <option value="category04">category04</option>
                    <option value="category05">category05</option>
                </select>

                <div class="button"><button type="submit" name="submit" value="Add" id="submit">Add</button></div>

            </form>
        </div>
        <div class="form-group">
            <h4><?php echo $msg; ?></h4>
            <h1></h1>
        </div>

        <div class="gopage">
            <a href="index.php">Go to product page</a>
        </div>

    </div>
</body>

</html>
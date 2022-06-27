<?php session_start(); ?>
<?php
require './inc/connection.php';
if (!isset($_SESSION['user_id'])) {
    header('Location: login.php');
} else
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM poducts WHERE id = '$id'";
    $result = mysqli_query($connection, $sql);
    $row = mysqli_fetch_array($result);

    $pname = $row['product_name'];
    $pprice = $row['Product_price'];
    $del_charge = 50;
    $total = $pprice + $del_charge;
    $pimage = $row['product_image'];
} else
    echo 'No product found';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>complite</title>
</head>

<body>
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/background.css">
    <div class="background zIndex">
        <section>
            <div class="buble">
                <div class="a"><img src="img/background/soap_bubbles_PNG15 - Copy.png" alt=""></div>
                <div><img src="img/background/soap_bubbles_PNG15.png" alt=""></div>
                <div><img src="img/background/soap_bubbles_PNG15 - Copy (2).png" alt=""></div>
                <div><img src="img/background/soap_bubbles_PNG15 - Copy (3).png" alt=""></div>
                <div><img src="img/background/soap_bubbles_PNG15 - Copy (4).png" alt=""></div>
                <div><img src="img/background/soap_bubbles_PNG15 - Copy (5).png" alt=""></div>
                <div><img src="img/background/soap_bubbles_PNG15 - Copy (6).png" alt=""></div>

            </div>
        </section>
    </div>
    <div class="containers">

        <?php require_once('./HandF/header.php') ?>

        <div class="con">.
            <div class="heading">
                <h1>Fill the details to complete your order</h1>
            </div>
            <div class="table">
                <div>
                    <h3>Product details</h3>
                    <div class="table">
                        <table>
                            <Tr></Tr>
                            <tr>
                                <th>
                                    Product Name :</th>
                                <td><?php echo $pname ?></td>
                                <td rowspan="4"><img src="<?php echo $pimage ?>" alt="" class="productImage"></td>
                            </tr>


                            <tr>
                                <th>
                                    Product Price :</th>
                                <td><?php echo $pprice ?></td>
                            </tr>
                            <tr>
                                <th>
                                    Delivery charge :</th>
                                <td>Rs. <?php echo number_format($del_charge) ?>/-</td>
                            </tr>
                            <tr>
                                <th>
                                    Total Price :</th>
                                <td>Rs. <?php echo number_format($total) ?>/- </td>
                            </tr>



                        </table>
                    </div>
                    <div class="orderForm">
                        <h4>Enter your details :</h4>
                        <form action="pay.php" method="post" accept-charset="utf-8">
                            <input type="hidden" name="porduct_name" value="<?php echo $pname ?>">
                            <input type="hidden" name="porduct_price" value="<?php echo $pprice ?>">
                            <div class="fromcl">
                                <div> <input type="text" name="name" id="name" placeholder="Enter your name" required></div>
                                <div> <input type="email" name="email" id="email" placeholder="Enter your Email" required></div>
                                <div> <input type="tel" name="tel" id="tel" placeholder="Enter Youer phone" required></div>

                                <input type="submit" class="submit" value="Click to pay : Rs. <?php echo number_format($total); ?> /-" name="submit">
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>

</body>

</html>
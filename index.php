<?php session_start(); ?>
<?php require_once('inc/functions.php'); ?>
<?php
require './inc/connection.php';
$sql = "SELECT * FROM poducts";
$query = "SELECT * FROM poducts WHERE Category='category01' LIMIT 8 ";
$result = mysqli_query($connection, $query);

$sql = "SELECT * FROM poducts";
$query = "SELECT * FROM poducts WHERE Category='category02' LIMIT 8 ";
$result02 = mysqli_query($connection, $query);

$sql = "SELECT * FROM poducts";
$query = "SELECT * FROM poducts WHERE Category='category03' LIMIT  8";
$result03 = mysqli_query($connection, $query);

$sql = "SELECT * FROM poducts";
$query = "SELECT * FROM poducts WHERE Category='category04' LIMIT 8 ";
$result04 = mysqli_query($connection, $query);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Name</title>
</head>
<link rel="stylesheet" href="css/main.css">
<link rel="stylesheet" href="css/background.css">
<script src="js/jquery-3.6.0.js"></script>

<body>
    <?php require_once('./HandF/header.php') ?>


    <div class="welcome">
        <div class="background zIndex">
            <section class="zIndex">
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
        <div class="CompanyName">
            <h5>Company Name</h5>
            <div class="welcomeImg moDisplay"><img src="./img/Siamese-Fighting-Fish.jpg" alt=""></div>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. A officia aperiam ab cupiditate vero aliquam deserunt, blanditiis velit fugiat. Quisquam temporibus aut obcaecati earum quo maxime facilis delectus minima ducimus!</p>
        </div>
        <div class="welcomeImg dsDisplay"><img src="./img/Siamese-Fighting-Fish.jpg" alt=""></div>

    </div>
    <div class="container" id="container">

        <div class="list">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed qui magni accusantium voluptates distinctio deserunt. Nisi dolor eius culpa, voluptate est, ut maxime reprehenderit molestiae dolores nihil amet. Ad, unde!</p>
            <div class="CategoryList">
                <ul>
                    <li>
                        <div class="CategoryName"> Category 01 </div>
                        <div class="ArrowButton"> <button id="left">
                                << </button>
                                    <button id="right">
                                        >> </button></div>
                    </li>

                    <div class="productsList" id="list">

                        <?php
                        while ($row = mysqli_fetch_array($result)) {
                        ?>

                            <div class="products">
                                <div class="productId">
                                    <div class="pro">
                                        <div class="img"> <img src="<?php echo $row['product_image']; ?>" alt="" class="image"></div>
                                        <h6> Product : <?php echo $row['product_name']; ?></h6>
                                        <h2> Price : <?php echo $row['Product_price']; ?>/- </h2>
                                        <a href="order.php?id=<?php echo $row['id'] ?><?PHP if (isset($_SESSION['user_id'])) {
                                                                                            echo '&user_id=' . $_SESSION['user_id'];
                                                                                        } ?>">Buy Now</a>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                    </div>

                    <li>
                        <div class="CategoryName"> Category 02 </div>
                    </li>
                    <div class="productsList">
                        <?php
                        while ($row = mysqli_fetch_array($result02)) {
                        ?>

                            <div class="products">
                                <div class="productId">
                                    <div class="pro">
                                        <div class="img"> <img src="<?php echo $row['product_image']; ?>" alt="" class="image"></div>
                                        <h6> Product : <?php echo $row['product_name']; ?></h6>
                                        <h2> Price : <?php echo $row['Product_price']; ?>/- </h2>
                                        <a href="order.php?id=<?php echo $row['id'] ?><?PHP if (isset($_SESSION['user_id'])) {
                                                                                            echo '&user_id=' . $_SESSION['user_id'];
                                                                                        } ?>">Buy Now</a>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                    <li>
                        <div class="CategoryName">Category 03 </div>
                    </li>
                    <div class="productsList">
                        <?php
                        while ($row = mysqli_fetch_array($result03)) {
                        ?>

                            <div class="products">
                                <div>
                                    <div class="pro">
                                        <div class="img"> <img src="<?php echo $row['product_image']; ?>" alt="" class="image"></div>
                                        <h6> Product : <?php echo $row['product_name']; ?></h6>
                                        <h2> Price : <?php echo $row['Product_price']; ?>/- </h2>
                                        <a href="order.php?id=<?php echo $row['id'] ?><?PHP if (isset($_SESSION['user_id'])) {
                                                                                            echo '&user_id=' . $_SESSION['user_id'];
                                                                                        } ?>">Buy Now</a>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                    <li>
                        <div class="CategoryName"> Category 04 </div>
                    </li>
                    <div class="productsList">
                        <?php
                        while ($row = mysqli_fetch_array($result04)) {
                        ?>

                            <div class="products">
                                <div>
                                    <div class="pro">
                                        <div class="img"> <img src="<?php echo $row['product_image']; ?>" alt="" class="image"></div>
                                        <h6> Product : <?php echo $row['product_name']; ?></h6>
                                        <h2> Price : <?php echo $row['Product_price']; ?>/- </h2>
                                        <a href="order.php?id=<?php echo $row['id'] ?><?PHP if (isset($_SESSION['user_id'])) {
                                                                                            echo '&user_id=' . $_SESSION['user_id'];
                                                                                        } ?>">Buy Now</a>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                    </div>

                </ul>
            </div>



        </div>
    </div>
    </div>
</body>


<script type="text/javascript" src="js/scroll.js"></script>

</html>
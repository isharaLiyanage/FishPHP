<?php session_start(); ?>
<?php
require '../inc/connection.php';
$sql = "SELECT * FROM poducts";
$query = "SELECT * FROM poducts WHERE Category='category04'";
$reuslt = mysqli_query($connection, $query);

?>


<?php
while ($row = mysqli_fetch_array($reuslt)) {
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
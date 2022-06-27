<div class="navgtionBar">
    <nav>
        <ul class="nav">
            <li>
                <h1>Logo</h1>
            </li>
            <li><a href="index.php">Home</a></li>
            <li><a href="./product.php">Product</a></li>
            <li><a href="#">Catagories</a></li>
        </ul>
    </nav>

    <nav>
        <ul class="log">
            <?Php if (isset($_SESSION['user_id'])) {
                if ($_SESSION['Admin'] == 1) {

                    echo ' <li>' . '<a href="./admin/" > Admin panel </a></li>';
                } else {
                }
                echo ' <li>' . '<a href="profile.php?user_id=' . $_SESSION['user_id'] . '"' . '>'  . $_SESSION['first_name'] . '</a>' . '<a href="logout.php">Log Out</a></li>';
            } else {
                echo ' <li> <a href="login.php">Log In</a></li>
                    <li> Or</li>
                    <Li><a href="add-user.php">Sign Up</a></li>';
            }



            ?>

        </ul>
    </nav>

</div>
<?php session_start(); ?>
<?php require_once('inc/connection.php'); ?>
<?php require_once('inc/functions.php'); ?>
<?php

$errors = array();

$first_name = '';
$last_name  = '';
$email  = '';
$password   = '';

if (isset($_SESSION['user_id'])) {
    $errors[]='You have already Log In';
}

if (isset($_POST['submit'])) {

    $first_name = $_POST['first_name'];
    $last_name  = $_POST['last_name'];
    $email  = $_POST['email'];

    //checking errors
    $req_fields = array('first_name', 'last_name', 'email', 'password');
    $errors = array_merge($errors, check_req_filds($req_fields));
    //checking max length
    $max_len_fields = array('first_name' => 50, 'last_name' => 100, 'email' => 100, 'password' => 40);

    $errors = array_merge($errors, check_max_len($max_len_fields));

    //checkin email address already exists
    $email = mysqli_real_escape_string($connection, $_POST['email']);
    $query = "SELECT * FROM user WHERE email='{$email}' LIMIT 1";

    $result_set = mysqli_query($connection, $query);
    if ($result_set) {
        if (mysqli_num_rows($result_set) == 1) {
            $errors[] = 'Email address already exists.';
        }
    }
    if (empty($errors)) {
        $first_name = mysqli_real_escape_string($connection, $_POST['first_name']);
        $last_name = mysqli_real_escape_string($connection, $_POST['last_name']);
        $password = mysqli_real_escape_string($connection, $_POST['password']);
        $hashed_password = sha1($password);



        $query = "INSERT INTO user(";
        $query .= "first_name,last_name,email,password,is_deleted";
        $query .= ")VALUES(";
        $query .= "'{$first_name}','{$last_name}','{$email}','{$hashed_password}',0";
        $query .= ")";
        $result = mysqli_query($connection, $query);


        if ($result) {
            //Query successful.... redirecting to user page
            header('Location: users.php?user_add=true');
        } else {
            $errors[] = 'Fiild to add the new record.';
        }
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add New User</title>
    <link rel="stylesheet" href="css/Min.css">
</head>

<body>

    <header>
        <div class="appname">User Management system</div>
    <!-- <div class="loggedin">Welcome <?php echo $_SESSION['first_name']; ?> <a href="logout.php">Log Out</a></div>// -->
    </header>
    <main>
        <h1>Add New User </h1>
        <form action="add-user.php" method="POST" class="userform">
            <?php
            if (!empty($errors)) {
           dispaly_errors($errors);
            }
            ?>
            <p>
                <label for="">frist Name:</label>
                <input type="text" name="first_name" id="" <?php echo 'value="' . $first_name . '"'; ?>>
            </p>
            <p>
                <label for="">Last Name:</label>
                <input type="text" name="last_name" id="" <?php echo 'value="' . $last_name . '"'; ?>>
            </p>
            <p>
                <label for="">Email Address:</label>
                <input type="text" name="email" id="" <?php echo 'value="' . $email . '"'; ?>>
            </p>
            <p>
                <label for="">New Password:</label>
                <input type="text" name="password" id="">
            </p>
            <p>
                <label for="">&nbsp;</label>
                <button type="submit" name="submit" id="">Save</button>
            </p>
        </form>
</body>

</html>
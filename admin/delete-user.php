<?php session_start(); ?>
<?php require_once('../inc/connection.php');
require_once('../inc/functions.php'); ?>
<?php
if (!isset($_SESSION['user_id'])) {
    header('Location: index.php');
}


if (isset($_GET['user_id'])) {
    //gettingthe user information
    $user_id = mysqli_real_escape_string($connection, $_GET['user_id']);
    if ($user_id == $_SESSION['user_id']) {
        header('location:users.php?err=cannot_delete_current_user');
    } else {
        $query = "UPDATE user SET is_deleted = 1 WHERE id ={$user_id} LIMIT 1";
        $result = mysqli_query($connection, $query);



        if ($result) {
            header('location:users.php?user_deleted');
        } else {
            header('location:users.php?err=delete+fild');
        }
    }
} else {
    header('location: users.php');
}

?>






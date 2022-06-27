<?php session_start(); ?>
<?php require_once('inc/connection.php'); ?>
<?php require_once('inc/functions.php'); ?>
<?php

// check for form submission
if (isset($_POST['submit'])) {

	$errors = array();

	// check if the username and password has been entered
	if (!isset($_POST['email']) || strlen(trim($_POST['email'])) < 1) {
		$errors[] = 'Username is Missing / Invalid';
	}

	if (!isset($_POST['password']) || strlen(trim($_POST['password'])) < 1) {
		$errors[] = 'Password is Missing / Invalid';
	}

	// check if there are any errors in the form
	if (empty($errors)) {
		// save username and password into variables
		$email 		= mysqli_real_escape_string($connection, $_POST['email']);
		$password 	= mysqli_real_escape_string($connection, $_POST['password']);
		$hashed_password = sha1($password);

		// prepare database query
		$query = "SELECT * FROM user 
						WHERE email = '{$email}' 
						AND password = '{$hashed_password}' 
						LIMIT 1";

		$result_set = mysqli_query($connection, $query);

		verify_query($result_set);

		if (mysqli_num_rows($result_set) == 1) {
			// valid user found
			$user = mysqli_fetch_assoc($result_set);
			$_SESSION['user_id'] = $user['id'];
			$_SESSION['first_name'] = $user['first_name'];
			$_SESSION['Admin'] = $user['Admin'];



			//update last  login
			$query = "UPDATE user SET last_login = NOW()";
			$query .= "WHERE id ={$_SESSION['user_id']} LIMIT 1";
			$result_set = mysqli_query($connection, $query);
			verify_query($result_set);
			// redirect to users.php
			header('Location: index.php');
		} else {
			// user name and password invalid
			$errors[] = 'Invalid Username / Password';
		}
	}
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>Log In - User Management System</title>
	<link rel="stylesheet" href="css/min.css">
</head>

<body>
	<div class="login">

		<form action="login.php" method="post">

			<fieldset>
				<legend>
					<h1>Log In</h1>
				</legend>

				<?php
				if (isset($errors) && !empty($errors)) {
					echo '<p class="error">Invalid Username / Password</p>';
				}
				?>
				<?php
				if (isset($_GET['logout'])) {
					echo '<p class="logout"> You have succesffuly logged out from the system </p>';
				}
				?>

				<p>
					<label for="">Username:</label>
					<input type="text" name="email" id="" placeholder="Email Address" value="dileep@bestjobslk.com">
				</p>

				<p>
					<label for="">Password:</label>
					<input type="password" name="password" id="" placeholder="Password" value="password">
				</p>

				<p>
					<button type="submit" name="submit">Log In</button>
				</p>

			</fieldset>

		</form>

	</div> <!-- .login -->
</body>

</html>
<?php mysqli_close($connection); ?>
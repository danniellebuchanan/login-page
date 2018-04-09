<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
include('login_user.php'); // Includes Login Script
if (isset($_SESSION['login_user'])) {
    header("location: confirm.php");
}
?>

<!doctype html>
<html>
<head>
	<script src="js/validate.js" type="text/javascript">
	</script>
	<meta content="width=device-width,initial-scale=1" name="viewport">
	<link href="images/favicon.ico" rel="icon">
	<meta charset="utf-8">
	<link href="css/styles.css" rel="stylesheet" type="text/css">
	<title>Login</title>
</head>
<body>
	<div id="container">
		<div id="login-box">
			<img id="logo" src="images/DFlogo.png">
			<h2 id="login"><b>Login</b></h2>
			<p>Dont have an account? Click <a href="register.php">here</a> to register.</p>
			<form action="" id="login-form" method="post" name="login-form" onsubmit="return validateForm();">
				<table id="login-table">
					<tr>
						<td><input id="username" name="username" pattern="[a-zA-Z0-9]+" placeholder="Username" type="text"></td>
					</tr>
					<tr>
						<td><input id="password" name="password" pattern="[a-zA-Z0-9]+" placeholder="Password" type="password"></td>
					</tr>
					<tr>
						<td><input id="login" name="submit" type="submit" value="Login"></td>
					</tr>
				</table>
			</form>
			<p id="error"><b><?php echo $error; ?></b></p>
		</div>
	</div>
</body>
</html>
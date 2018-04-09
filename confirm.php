<?php
error_reporting(E_ALL); ini_set('display_errors', 1);
include('session.php');
?>

<!DOCTYPE html>
<html>
<head>
	<link href="images/favicon.ico" rel="icon">
	<link href="styles.css" rel="stylesheet" type="text/css">
	<meta charset="utf-8">
	<title>Logged in!</title>
</head>
<body>
	<div id="container">
		<div id="login-box">
			<img id="logo" src="images/DFlogo.png">
			<p>Welcome, <i><?php echo $login_session; ?>.</i></p>
			<div id="logout">
				<a href="logout.php">Log Out</a>
			</div>
		</div>
	</div>
</body>
</html>
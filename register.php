<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
include('register_user.php'); // Includes Login Script
if (isset($_SESSION['login_user'])) {
    header("location: confirm.php");
}
?>

<!doctype html>
<html>
<head>
<script src="js/validate.js" type="text/javascript">
</script>
<meta name="viewport" content="width=device-width,initial-scale=1">
<link rel="icon" href="images/favicon.ico">
<meta charset="utf-8">
<link href="css/styles.css" rel="stylesheet" type="text/css">
<title>Register</title>
</head>

<body>
<div id="container">
<div id="login-box">

<img id="logo" src="images/DFlogo.png">
<p><b>Register</b></p>
<p><a href="login.php">Back to Login</a></p>

<form action="" method="post" name="login-form" onSubmit= "return validateForm();">

<table id="login-table">
  <tr><td><label>Username</label><br>    
      <input type="text" name="username" id="username" pattern="[a-zA-Z0-9]+" >
  </td></tr>
  
   <tr><td> 
   <label>Password</label><br>     
      <input type="password" name="password" id="password" pattern="[a-zA-Z0-9]+">
   </td></tr>
   
   <tr><td>      
  	<input type="submit" name="submit" id="login" value="Register" >
	</td></tr>
   
</table>
</form>

<p id="error" ><?php echo $error; ?></p>

</div>
</div>
</body>
</html>

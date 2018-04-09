<?php
error_reporting(E_ALL); ini_set('display_errors', 1);
//connect to database
include('dbconx.php');


session_start();// Starting Session

// Storing Session
$user_check = $_SESSION['login_user'];

// SQL Query To Fetch Complete Information Of User
$ses_sql = mysqli_query($con, "SELECT username FROM admin where username = '$user_check'") or die (mysqli_error($con)) ;
$row = mysqli_fetch_assoc($ses_sql);
$login_session =$row['username'];
if(!isset($login_session)){
	
mysqli_close($con);

// Redirecting To confirm Page
header('Location: confirm.php'); 
}
?>
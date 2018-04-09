<?php
error_reporting(E_ALL); ini_set('display_errors', 1);
session_start();
if(session_destroy()) // Destroying All Sessions
{
header("Location: login.php"); // Redirecting To Login 
}
?>
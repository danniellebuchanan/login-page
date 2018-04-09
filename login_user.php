<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
$username = $password = ""; // Define variables and initialize with empty values
$error    = ''; // Variable To Store Error Message

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);
    include('dbconx.php');
    
    // Validate credentials
    if (empty($error)) {
        
        $sql = "SELECT username, password FROM admin WHERE username = ?"; // Prepare a select statement
        
        if ($stmt = mysqli_prepare($con, $sql)) {
            
            mysqli_stmt_bind_param($stmt, "s", $param_username); // Bind variables to the prepared statement as parameters
            $param_username = $username; // Set parameters
            
            // Attempt to execute the prepared statement
            if (mysqli_stmt_execute($stmt)) {
                mysqli_stmt_store_result($stmt); // Store result
                
                // Check if username exists, if yes then verify password
                if (mysqli_stmt_num_rows($stmt) == 1) {
                    mysqli_stmt_bind_result($stmt, $username, $hashed_password); // Bind result variables
                    
                    if (mysqli_stmt_fetch($stmt)) {
                        if (password_verify($password, $hashed_password)) {
                            /* Password is correct, so start a new session and
                            save the username to the session */
                            session_start();
                            $_SESSION['login_user'] = $username;
                            header("Location: confirm.php");
                            
                        }
                        
                        else {
                            // Display an error message if password is not valid
                            $error = 'The password you entered was not valid.';
                        }
                    }
                } else {
                    // Display an error message if username doesn't exist
                    $error = 'No account found with that username.';
                }
            } else {
                echo "Oops! Something went wrong. Please try again later.";
            }
        }
        
        // Close statement
        mysqli_stmt_close($stmt);
    }
    
    // Close connection
    mysqli_close($con);
}
?>
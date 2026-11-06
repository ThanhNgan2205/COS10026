<?php
    session_start();
    // Check if the form is submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // 1. User name
            if (isset($_POST["username"])) {$username = $_POST["username"];} 
            else {$username = "";}

            // 2. Password
            if (isset($_POST["password"])) {$password = $_POST["password"];} 
            else {$password = "";}

            // 3. Token
            if (isset($_POST["token"])) {$token = $_POST["token"];} 
            else {$token = "";}

            // Check the username + password
            if ($username == "Ngân" && $password == "106216298") {
                $_SESSION["username"] = $username;
                $_SESSION["token"] = $token;

                header ("Location: welcome.php");
                
            } else {echo "Invalid login. <a href='login.html'>Try again</a>";} 

    } else {
        header("Location: login.html");
    }
?>


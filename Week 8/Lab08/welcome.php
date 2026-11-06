<?php
session_start();

// Check if the user is logged in
if (isset($_SESSION["username"])) {
    include "header.inc";

    echo "Welcome, " . $_SESSION["username"] . "!";
    echo "<p></p>";
    echo "Your token is: " . htmlspecialchars($_SESSION["token"]);

    include "footer.inc";
} else {
    header ("Location: login.html");
}
?>
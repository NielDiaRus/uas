<?php
// sessionScript.php

session_start();

// Store user information in session
$_SESSION["user_id"] = 123;
$_SESSION["username"] = "john_doe";

// Access stored information
$userID = $_SESSION["user_id"];
$username = $_SESSION["username"];

echo "User ID: $userID<br>";
echo "Username: $username<br>";
?>

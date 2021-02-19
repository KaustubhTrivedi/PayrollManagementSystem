<?php

include("connection.php");
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $username = $_POST['username'];
    $password = $_POST['password'];
    mysqli_select_db($conn, $db);
    $sql = "SELECT id FROM login WHERE username = '$username' and passcode = '$password'";

    if (mysqli_query($conn, $sql)) {
        $_SESSION['login_user'] = $username;

        header("location: home.php");
    } else {
        $error = "Your Login Name or Password is invalid";
    }
}

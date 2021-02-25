<?php
session_start();
unset($_SESSION["name1"]);
unset($_SESSION["pass"]);
header('Location:index.php');
?>
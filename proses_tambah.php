<?php
include 'conn.php';

// get variable from form input
$first_name = $_POST["first_name"];
$last_name = $_POST["last_name"];
$email = $_POST["email"];
$phone = $_POST["phone"];
$address = $_POST["address"];
$created_at = date('Y-m-d h:i:s');

// insert query
$result = mysqli_query($conn, "INSERT INTO `customer` (`first_name`, `last_name`, `email`, `phone`, `address`, `created_at`)  
VALUES ('$first_name', '$last_name', '$email', '$phone', '$address', '$created_at');");

header("Location:index.php");

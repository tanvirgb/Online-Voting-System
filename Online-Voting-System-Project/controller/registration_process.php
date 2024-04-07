<?php

include_once '../model/db_connection.php';

$username = $_POST['username'];
$password = $_POST['password'];
$name = $_POST['name'];
$address = $_POST['address'];
$mobile = $_POST['mobile'];
$email = $_POST['email'];


$sql = "INSERT INTO users (username, password, name, address, mobile, email) VALUES ('$username', '$password', '$name', '$address', '$mobile', '$email')";


if ($conn->query($sql) === TRUE) {

    header("Location: ../view/login.php?success=1");
} else {

    header("Location: ../view/registration.php?error=1");
}

$conn->close();

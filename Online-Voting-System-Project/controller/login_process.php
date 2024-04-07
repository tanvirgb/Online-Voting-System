<?php

session_start();

include_once '../model/db_connection.php';

$username = $_POST['username'];
$password = $_POST['password'];

$sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";

$result = $conn->query($sql);

if ($result->num_rows > 0) {

    $_SESSION['loggedin'] = true;
    $_SESSION['username'] = $username;

    header("Location: ../view/dashboard.php");
} else {

    header("Location: ../view/login.php?error=1");
}

$conn->close();

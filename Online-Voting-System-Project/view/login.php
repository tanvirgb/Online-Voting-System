<?php
if (isset($_GET['success']) && $_GET['success'] == 1) {
    echo "<p style='color: green; font-weight: bold; font-size: 23px;'>Registration successful! Please login with your credentials.</p>";
}
?>

<?php
if (isset($_GET['error']) && $_GET['error'] == 1) {
    $errorMessage = isset($_GET['message']) ? $_GET['message'] : "Invalid credentials! Please, try again with correct username and password.";
    echo "<p style='color: red; font-weight: bold; font-size: 23px;'>$errorMessage</p>";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="styles_3.css">
</head>

<body>

    <header>
        <h1>Online Voting System</h1>
        <p>By <b>Md. Tanvir Siddique Pramanik</b></p>
    </header>

    <nav>
        <a href="index.php">Home</a>
        <a href="login.php">Login</a>
        <a href="registration.php">Registration</a>
        <a href="about.php">About</a>
    </nav>

    <div class="container">
        <h2 style='margin-bottom: 15px'>Login</h2>

        <form action="../controller/login_process.php" method="POST">
            <label for="username">Username:</label><br>
            <input type="text" id="username" name="username" required><br>
            <label for="password">Password:</label><br>
            <input type="password" id="password" name="password" required><br><br>
            <input type="submit" value="Login">
        </form>
    </div>

    <footer>
        &copy; 2024 Online Voting System | Created by Md. Tanvir Siddique Pramanik
    </footer>
    <img class="background-image" src="./registration-7010437_1920.jpg" alt="Background Image">
</body>

</html>
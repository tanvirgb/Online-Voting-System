<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <link rel="stylesheet" href="styles_2.css">
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

    <div class="container" style='width: 30%'>
        <h2>Registration</h2>
        <form action="../controller/registration_process.php" method="POST">
            <label for="username">Username:</label><br>
            <input type="text" id="username" name="username" required><br>
            <label for="password">Password:</label><br>
            <input type="password" id="password" name="password" required><br><br>
            <label for="name">Name:</label><br>
            <input type="text" id="name" name="name" required><br>
            <label for="address">Address:</label><br>
            <input type="text" id="address" name="address" required><br>
            <label for="mobile">Mobile Number:</label><br>
            <input type="text" id="mobile" name="mobile" required><br>
            <label for="email">Email:</label><br>
            <input type="email" id="email" name="email" required><br>

            <input type="submit" value="Register">
        </form>
    </div>

    <footer>
        &copy; 2024 Online Voting System | Created by Md. Tanvir Siddique Pramanik
    </footer>

    <img class="background-image" src="./book-5492518_1920.jpg" alt="Background Image">

</body>

</html>
<?php
session_start();

if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {

    header("Location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="styles_4.css">
</head>

<body>

    <header>
        <h1>Welcome, <?php echo $_SESSION['username']; ?></h1>
        <nav>
            <ul>
                <li><a href="dashboard.php">Dashboard</a></li>
                <li><a href="profile.php">Your Profile</a></li>
                <li><a href="vote.php">Vote</a></li>
                <li><a href="center.php">View All Voting Centers</a></li>
                <li><a href="logout.php">Logout</a></li>
            </ul>
        </nav>
    </header>


    <footer>
        &copy; 2024 Online Voting System | Created by Md. Tanvir Siddique Pramanik
    </footer>

    <img class="background-image" src="./charts-6246450_1920.png" alt="Background Image">

</body>

</html>
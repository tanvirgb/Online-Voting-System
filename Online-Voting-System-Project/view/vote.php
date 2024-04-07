<?php
session_start();

if (isset($_SESSION['vote_error_message'])) {
    echo "<p style='color: green; font-weight: bold; font-size: 23px;'>{$_SESSION['vote_error_message']}</p>";
    unset($_SESSION['vote_error_message']);
}
if (isset($_SESSION['vote_success_message'])) {
    echo "<p style='color: green; font-weight: bold; font-size: 23px;'>{$_SESSION['vote_success_message']}</p>";
    unset($_SESSION['vote_success_message']);
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Give Vote</title>
    <link rel="stylesheet" href="styles_6.css">
</head>

<body>

    <header>
        <h1>Give Your Vote</h1>
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

    <div class="container">
        <h2>Select Your Candidate</h2>
        <form action="../controller/vote_process.php" method="POST">
            <label for="candidate">Choose a Candidate:</label><br>
            <select id="candidate" name="candidate" required>
                <option value="candidate1">Candidate 1</option>
                <option value="candidate2">Candidate 2</option>
                <option value="candidate3">Candidate 3</option>
            </select><br><br>
            <input type="submit" value="Submit Vote">
        </form>
    </div>

    <footer>
        &copy; 2024 Online Voting System | Created by Md. Tanvir Siddique Pramanik
    </footer>

    <img class="background-image" src="./ballot-2864318_1920.png" alt="Background Image">

</body>

</html>
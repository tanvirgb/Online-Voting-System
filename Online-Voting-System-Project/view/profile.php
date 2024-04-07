<?php
include_once '../controller/profile_process.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Profile</title>
    <link rel="stylesheet" href="styles_5.css">
</head>

<body>

    <header>
        <h1>Your Profile</h1>
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
        <h2>Your Profile Information</h2>
        <p>Username: <?php echo $row['username']; ?></p>
        <p>Name: <?php echo $row['name']; ?></p>
        <p>Address: <?php echo $row['address']; ?></p>
        <p>Mobile Number: <?php echo $row['mobile']; ?></p>
        <p>Email: <?php echo $row['email']; ?></p>
    </div>

    <footer>
        &copy; 2024 Online Voting System | Created by Md. Tanvir Siddique Pramanik
    </footer>

    <img class="background-image" src="./blank-profile-picture-973460_1920.png" alt="Background Image">


</body>

</html>
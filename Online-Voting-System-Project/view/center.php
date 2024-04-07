<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Voting Centers</title>
    <link rel="stylesheet" href="styles_7.css">
</head>

<body>

    <header>
        <h1>All Voting Centers</h1>
        <nav>
            <a href="dashboard.php">Dashboard</a>
            <a href="profile.php">Your Profile</a>
            <a href="vote.php">Vote</a>
            <a href="center.php">View All Voting Centers</a>
            <a href="logout.php">Logout</a>
        </nav>
    </header>

    <div class="container">
        <h2>List of Voting Centers</h2>
        <?php
        include_once '../controller/center_process.php';
        ?>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Location</th>
                    <th>Opening Hours</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($centers as $center) : ?>
                    <tr>
                        <td><?php echo $center['id']; ?></td>
                        <td><?php echo $center['name']; ?></td>
                        <td><?php echo $center['location']; ?></td>
                        <td><?php echo $center['opening_hours']; ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

    <footer>
        &copy; 2024 Online Voting System | Created by Md. Tanvir Siddique Pramanik
    </footer>

    <img class="background-image" src="./list-2389219_1920.png" alt="Background Image">

</body>

</html>
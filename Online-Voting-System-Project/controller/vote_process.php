<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (isset($_POST['candidate'])) {

        $selectedCandidate = $_POST['candidate'];

        include_once '../model/db_connection.php';

        $sql = "INSERT INTO votes (candidate) VALUES ('$selectedCandidate')";
        if ($conn->query($sql) === TRUE) {
            $_SESSION['vote_success_message'] = "Vote submitted successfully!";
        } else {
            $_SESSION['vote_error_message'] = "Error: " . $sql . "<br>" . $conn->error;
        }
        $conn->close();

        header("Location: ../view/vote.php");
        exit;
    } else {

        $_SESSION['vote_message'] = "Error: Candidate not selected.";
        header("Location: ../view/vote.php");
        exit;
    }
} else {

    header("Location: ../view/vote.php");
    exit;
}

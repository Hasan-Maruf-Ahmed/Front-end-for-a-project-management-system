<?php
session_start();
include '../database/dbConnect.php';

// Check if the user is logged in
if (!isset($_SESSION['email'])) {
    header("location: ../pages/login.php");
    exit();
}

// Get the logged-in user's ID
$userEmail = $_SESSION['email'];
$userQuery = "SELECT id FROM users WHERE email = '$userEmail'";
$userResult = $conn->query($userQuery);
if ($userResult->num_rows > 0) {
    $userId = $userResult->fetch_assoc()['id'];
} else {
    echo "User not found.";
    exit();
}

// Handle the form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $projectName = trim($_POST['project_name']);
    $subtasks = $_POST['subtasks'];

    // Insert the project into the database
    $projectQuery = "INSERT INTO projects (user_id, name) VALUES ('$userId', '$projectName')";
    if ($conn->query($projectQuery) === TRUE) {
        $projectId = $conn->insert_id;

        // Insert sub-tasks into the database
        foreach ($subtasks as $subtask) {
            $subtask = trim($subtask);
            $subtaskQuery = "INSERT INTO sub_tasks (project_id, name) VALUES ('$projectId', '$subtask')";
            $conn->query($subtaskQuery);
        }

        echo "Project and sub-tasks created successfully!";
        header("location: ../index.php");
        exit();
    } else {
        echo "Error: " . $conn->error;
    }
}
?>

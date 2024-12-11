<?php
session_start();
include "./database/dbConnect.php";

echo "<script>";
if (!empty($_SESSION)) {
    $sessionJson = json_encode($_SESSION);
    echo "const sessionData = $sessionJson; console.log('Session Data:', sessionData);";
} else {
    echo "console.log('No session variables are set.');";
}
echo "</script>";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://unpkg.com/@phosphor-icons/web"></script>
    <link rel="stylesheet" href="./styles/variables.css" />
    <link rel="stylesheet" href="./styles/index.css" />
    <link rel="stylesheet" href="./layout/index-layout.css" />
    <link rel="stylesheet" href="./styles/nav.css" />
    <title>Project Management System</title>
</head>

<body>
    <div class="home-page">
        <div class="navbar">
            <?php
            include './components/nav.php'
            ?>
        </div>
        <div class="main-page">
            <div class="main-left">
                <div class="main-heading">
                    <span>My Projects</span>
                    <button class="new-btn" id="open-modal"><i class="ph ph-plus"></i>New</button>
                    <dialog id="dialog">
                        <form action="./backend/create_project.php" method="POST">
                            <h2>Create a New Project</h2>
                            <div class="project-label">
                                <label for="project_name">Project Name:</label>
                                <input type="text" id="project_name" name="project_name" required>
                            </div>

                            <h4>Sub-Tasks</h4>
                            <div id="subtasks">
                                <div class="subtask">
                                    <label for="subtask_name_1">1:</label>
                                    <input type="text" id="subtask_name_1" name="subtasks[]" required>
                                </div>
                            </div>
                            <div class="task-btns">
                                <button class="task-btn" type="button" onclick="addSubtask()">Add Sub-task</button>

                                <button class="task-btn" type="submit">Create Project</button>
                            </div>
                        </form>
                    </dialog>
                </div>
                <div class="main-projects-section">
                    <?php
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

                    // Fetch user's projects
                    $projectsQuery = "SELECT * FROM projects WHERE user_id = '$userId'";
                    $projectsResult = $conn->query($projectsQuery);

                    while ($project = $projectsResult->fetch_assoc()) {
                        $projectId = $project['id'];
                        $projectName = htmlspecialchars($project['name']);
                        $createdAt = date('F j, Y', strtotime($project['created_at']));

                        // Fetch sub-tasks for the project
                        $subtasksQuery = "SELECT * FROM sub_tasks WHERE project_id = '$projectId'";
                        $subtasksResult = $conn->query($subtasksQuery);

                        // Calculate progress (example logic: Completed tasks / Total tasks)
                        $totalTasks = $subtasksResult->num_rows;
                        $completedTasksQuery = "SELECT COUNT(*) AS completed FROM sub_tasks WHERE project_id = '$projectId' AND status = 'Completed'";
                        $completedTasksResult = $conn->query($completedTasksQuery);
                        $completedTasks = $completedTasksResult->fetch_assoc()['completed'];
                        $progress = $totalTasks > 0 ? round(($completedTasks / $totalTasks) * 100) : 0;

                        // Display project card
                        echo "<div class='project-card'>
            <div class='card-title'>
                <i class='ph ph-book'></i>
                <div class='title-sec'>
                    <span class='project-sec-title'>$projectName</span>
                    <span class='project-sec-date'>$createdAt</span>
                </div>
            </div>
            <div class='card-task'>
                <ul>";

                        // Display subtasks
                        while ($subtask = $subtasksResult->fetch_assoc()) {
                            $subtaskName = htmlspecialchars($subtask['name']);
                            echo "<li>$subtaskName</li>";
                        }

                        echo "    </ul>
            </div>
            <div class='card-progress-bar'>
                <div class='progress-bar' style='width: $progress%;'></div>
            </div>
            <div class='card-progress-detail'>
                <span>" . ($progress < 100 ? "On progress" : "Completed") . "</span>
                <span>$progress%</span>
            </div>
        </div>";
                    }
                    ?>

                </div>
            </div>
            <div class="main-right">
                <div class="progress-content-wrapper">
                    <span>Projects Complete</span>
                    <div class="circular-progress-section">
                        <div class="circular-progress">
                            <div class="outer-circle">
                                <div class="inner-circle">
                                    <div id="number"></div>
                                </div>
                            </div>
                            <svg viewbox="0 0 200 200">
                                <circle cx="100" cy="100" r="90" />
                            </svg>
                        </div>
                    </div>
                    <?php
                    $totalProjectsQuery = "SELECT COUNT(*) AS total_projects FROM projects WHERE user_id = '$userId'";
                    $totalProjectsResult = $conn->query($totalProjectsQuery);
                    $totalProjects = $totalProjectsResult->fetch_assoc()['total_projects'];
                    
                    $completedProjectsQuery = "SELECT COUNT(*) AS completed_projects FROM projects WHERE user_id = '$userId' AND status = 'Completed'";
                    $completedProjectsResult = $conn->query($completedProjectsQuery);
                    $completedProjects = $completedProjectsResult->fetch_assoc()['completed_projects'];

                    $projectProgress = $totalProjects > 0 ? round(($completedProjects / $totalProjects) * 100) : 0;


                    $completedProjectsQuery = "SELECT * FROM projects WHERE user_id = '$userId' AND status = 'Completed'";
                    $completedProjectsResult = $conn->query($completedProjectsQuery);

                    while ($project = $completedProjectsResult->fetch_assoc()) {
                        $projectId = $project['id'];
                        $projectName = htmlspecialchars($project['name']);
                        $completedTasksQuery = "SELECT COUNT(*) AS task_count FROM sub_tasks WHERE project_id = '$projectId'";
                        $completedTasksResult = $conn->query($completedTasksQuery);
                        $taskCount = $completedTasksResult->fetch_assoc()['task_count'];

                        // Display each completed project in the list
                        echo "<div class='completed-list'>
                                <ul>
                                    <li>
                                        <i class='ph ph-rows'></i>
                                        <div class='complete-progress-detail'>
                                            <span class='title'>$projectName</span>
                                            <span class='task-no'>$taskCount tasks</span>
                                        </div>
                                    </li>
                                </ul>
                              </div>";
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>

    <script src="./scripts/script.js" defer></script>
    <script>
        function addSubtask() {
            const subtasksDiv = document.getElementById('subtasks');
            const subtaskCount = subtasksDiv.getElementsByClassName('subtask').length + 1;
            const newSubtask = `
        <div class="subtask">
            <label for="subtask_name_${subtaskCount}">${subtaskCount}:</label>
            <input type="text" id="subtask_name_${subtaskCount}" name="subtasks[]" required>
        </div>`;
            subtasksDiv.insertAdjacentHTML('beforeend', newSubtask);
        }
    </script>
    <script>
        let number = document.querySelector("#number");
        let counter = 0;

        const intervalId = setInterval(() => {
            if (counter == <?php echo $projectProgress; ?>) {
                clearInterval(intervalId);
            } else {
                counter++;
                number.innerHTML = counter + "%";
            }
        }, 30);
    </script>
</body>

</html>
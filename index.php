<?php
session_start();
include "./database/dbConnect.php";
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
                            <label for="project_name">Project Name:</label>
                            <input type="text" id="project_name" name="project_name" required>

                            <h3>Sub-Tasks</h3>
                            <div id="subtasks">
                                <div class="subtask">
                                    <label for="subtask_name_1">Sub-task 1:</label>
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
                    <div class="project-card">
                        <div class="card-title">
                            <i class="ph ph-book"></i>
                            <div class="title-sec">
                                <span class="project-sec-title">Personal Portfolio Project</span>
                                <span class="project-sec-date">Today</span>
                            </div>
                        </div>
                        <div class="card-task">
                            <ul>
                                <li>Research different designs for inspiration.</li>
                                <li>Implement a basic structure</li>
                                <li>Add css and js for functionality</li>
                            </ul>
                        </div>
                        <div class="card-progress-bar">
                            <div class="progress-bar"></div>
                        </div>
                        <div class="card-progress-detail">
                            <span>On progress</span>
                            <span>45%</span>
                        </div>
                    </div>
                    <div class="project-card">
                        <div class="card-title">
                            <i class="ph ph-book"></i>
                            <div class="title-sec">
                                <span class="project-sec-title">Personal Portfolio Project</span>
                                <span class="project-sec-date">Today</span>
                            </div>
                        </div>
                        <div class="card-task">
                            <ul>
                                <li>Research different designs for inspiration.</li>
                                <li>Implement a basic structure</li>
                                <li>Add css and js for functionality</li>
                            </ul>
                        </div>
                        <div class="card-progress-bar">
                            <div class="progress-bar"></div>
                        </div>
                        <div class="card-progress-detail">
                            <span>On progress</span>
                            <span>45%</span>
                        </div>
                    </div>
                    <div class="project-card">
                        <div class="card-title">
                            <i class="ph ph-book"></i>
                            <div class="title-sec">
                                <span class="project-sec-title">Personal Portfolio Project</span>
                                <span class="project-sec-date">Today</span>
                            </div>
                        </div>
                        <div class="card-task">
                            <ul>
                                <li>Research different designs for inspiration.</li>
                                <li>Implement a basic structure</li>
                                <li>Add css and js for functionality</li>
                            </ul>
                        </div>
                        <div class="card-progress-bar">
                            <div class="progress-bar"></div>
                        </div>
                        <div class="card-progress-detail">
                            <span>On progress</span>
                            <span>45%</span>
                        </div>
                    </div>
                    <div class="project-card">
                        <div class="card-title">
                            <i class="ph ph-book"></i>
                            <div class="title-sec">
                                <span class="project-sec-title">Personal Portfolio Project</span>
                                <span class="project-sec-date">Today</span>
                            </div>
                        </div>
                        <div class="card-task">
                            <ul>
                                <li>Research different designs for inspiration.</li>
                                <li>Implement a basic structure</li>
                                <li>Add css and js for functionality</li>
                            </ul>
                        </div>
                        <div class="card-progress-bar">
                            <div class="progress-bar"></div>
                        </div>
                        <div class="card-progress-detail">
                            <span>On progress</span>
                            <span>45%</span>
                        </div>
                    </div>
                    <div class="project-card">
                        <div class="card-title">
                            <i class="ph ph-book"></i>
                            <div class="title-sec">
                                <span class="project-sec-title">Personal Portfolio Project</span>
                                <span class="project-sec-date">Today</span>
                            </div>
                        </div>
                        <div class="card-task">
                            <ul>
                                <li>Research different designs for inspiration.</li>
                                <li>Implement a basic structure</li>
                                <li>Add css and js for functionality</li>
                            </ul>
                        </div>
                        <div class="card-progress-bar">
                            <div class="progress-bar"></div>
                        </div>
                        <div class="card-progress-detail">
                            <span>On progress</span>
                            <span>45%</span>
                        </div>
                    </div>
                    <div class="project-card">
                        <div class="card-title">
                            <i class="ph ph-book"></i>
                            <div class="title-sec">
                                <span class="project-sec-title">Personal Portfolio Project</span>
                                <span class="project-sec-date">Today</span>
                            </div>
                        </div>
                        <div class="card-task">
                            <ul>
                                <li>Research different designs for inspiration.</li>
                                <li>Implement a basic structure</li>
                                <li>Add css and js for functionality</li>
                            </ul>
                        </div>
                        <div class="card-progress-bar">
                            <div class="progress-bar"></div>
                        </div>
                        <div class="card-progress-detail">
                            <span>On progress</span>
                            <span>45%</span>
                        </div>
                    </div>
                    <div class="project-card">
                        <div class="card-title">
                            <i class="ph ph-book"></i>
                            <div class="title-sec">
                                <span class="project-sec-title">Personal Portfolio Project</span>
                                <span class="project-sec-date">Today</span>
                            </div>
                        </div>
                        <div class="card-task">
                            <ul>
                                <li>Research different designs for inspiration.</li>
                                <li>Implement a basic structure</li>
                                <li>Add css and js for functionality</li>
                            </ul>
                        </div>
                        <div class="card-progress-bar">
                            <div class="progress-bar"></div>
                        </div>
                        <div class="card-progress-detail">
                            <span>On progress</span>
                            <span>45%</span>
                        </div>
                    </div>
                    <div class="project-card">
                        <div class="card-title">
                            <i class="ph ph-book"></i>
                            <div class="title-sec">
                                <span class="project-sec-title">Personal Portfolio Project</span>
                                <span class="project-sec-date">Today</span>
                            </div>
                        </div>
                        <div class="card-task">
                            <ul>
                                <li>Research different designs for inspiration.</li>
                                <li>Implement a basic structure</li>
                                <li>Add css and js for functionality</li>
                            </ul>
                        </div>
                        <div class="card-progress-bar">
                            <div class="progress-bar"></div>
                        </div>
                        <div class="card-progress-detail">
                            <span>On progress</span>
                            <span>45%</span>
                        </div>
                    </div>
                    <div class="project-card">
                        <div class="card-title">
                            <i class="ph ph-book"></i>
                            <div class="title-sec">
                                <span class="project-sec-title">Personal Portfolio Project</span>
                                <span class="project-sec-date">Today</span>
                            </div>
                        </div>
                        <div class="card-task">
                            <ul>
                                <li>Research different designs for inspiration.</li>
                                <li>Implement a basic structure</li>
                                <li>Add css and js for functionality</li>
                            </ul>
                        </div>
                        <div class="card-progress-bar">
                            <div class="progress-bar"></div>
                        </div>
                        <div class="card-progress-detail">
                            <span>On progress</span>
                            <span>45%</span>
                        </div>
                    </div>
                    <div class="project-card">
                        <div class="card-title">
                            <i class="ph ph-book"></i>
                            <div class="title-sec">
                                <span class="project-sec-title">Personal Portfolio Project</span>
                                <span class="project-sec-date">Today</span>
                            </div>
                        </div>
                        <div class="card-task">
                            <ul>
                                <li>Research different designs for inspiration.</li>
                                <li>Implement a basic structure</li>
                                <li>Add css and js for functionality</li>
                            </ul>
                        </div>
                        <div class="card-progress-bar">
                            <div class="progress-bar"></div>
                        </div>
                        <div class="card-progress-detail">
                            <span>On progress</span>
                            <span>45%</span>
                        </div>
                    </div>
                    <div class="project-card">
                        <div class="card-title">
                            <i class="ph ph-book"></i>
                            <div class="title-sec">
                                <span class="project-sec-title">Personal Portfolio Project</span>
                                <span class="project-sec-date">Today</span>
                            </div>
                        </div>
                        <div class="card-task">
                            <ul>
                                <li>Research different designs for inspiration.</li>
                                <li>Implement a basic structure</li>
                                <li>Add css and js for functionality</li>
                            </ul>
                        </div>
                        <div class="card-progress-bar">
                            <div class="progress-bar"></div>
                        </div>
                        <div class="card-progress-detail">
                            <span>On progress</span>
                            <span>45%</span>
                        </div>
                    </div>
                    <div class="project-card">
                        <div class="card-title">
                            <i class="ph ph-book"></i>
                            <div class="title-sec">
                                <span class="project-sec-title">Personal Portfolio Project</span>
                                <span class="project-sec-date">Today</span>
                            </div>
                        </div>
                        <div class="card-task">
                            <ul>
                                <li>Research different designs for inspiration.</li>
                                <li>Implement a basic structure</li>
                                <li>Add css and js for functionality</li>
                            </ul>
                        </div>
                        <div class="card-progress-bar">
                            <div class="progress-bar"></div>
                        </div>
                        <div class="card-progress-detail">
                            <span>On progress</span>
                            <span>45%</span>
                        </div>
                    </div>
                    <div class="project-card">
                        <div class="card-title">
                            <i class="ph ph-book"></i>
                            <div class="title-sec">
                                <span class="project-sec-title">Personal Portfolio Project</span>
                                <span class="project-sec-date">Today</span>
                            </div>
                        </div>
                        <div class="card-task">
                            <ul>
                                <li>Research different designs for inspiration.</li>
                                <li>Implement a basic structure</li>
                                <li>Add css and js for functionality</li>
                            </ul>
                        </div>
                        <div class="card-progress-bar">
                            <div class="progress-bar"></div>
                        </div>
                        <div class="card-progress-detail">
                            <span>On progress</span>
                            <span>45%</span>
                        </div>
                    </div>
                    <div class="project-card">
                        <div class="card-title">
                            <i class="ph ph-book"></i>
                            <div class="title-sec">
                                <span class="project-sec-title">Personal Portfolio Project</span>
                                <span class="project-sec-date">Today</span>
                            </div>
                        </div>
                        <div class="card-task">
                            <ul>
                                <li>Research different designs for inspiration.</li>
                                <li>Implement a basic structure</li>
                                <li>Add css and js for functionality</li>
                            </ul>
                        </div>
                        <div class="card-progress-bar">
                            <div class="progress-bar"></div>
                        </div>
                        <div class="card-progress-detail">
                            <span>On progress</span>
                            <span>45%</span>
                        </div>
                    </div>
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
                    <div class="completed-list">
                        <ul>
                            <li>
                                <i class="ph ph-rows"></i>
                                <div class="complete-progress-detail">
                                    <span class="title">E-commerce Project</span>
                                    <span class="task-no">12 tasks</span>
                                </div>
                            </li>
                            <li>
                                <i class="ph ph-rows"></i>
                                <div class="complete-progress-detail">
                                    <span class="title">E-commerce Project</span>
                                    <span class="task-no">12 tasks</span>
                                </div>
                            </li>
                            <li>
                                <i class="ph ph-rows"></i>
                                <div class="complete-progress-detail">
                                    <span class="title">E-commerce Project</span>
                                    <span class="task-no">12 tasks</span>
                                </div>
                            </li>
                            <li>
                                <i class="ph ph-rows"></i>
                                <div class="complete-progress-detail">
                                    <span class="title">E-commerce Project</span>
                                    <span class="task-no">12 tasks</span>
                                </div>
                            </li>
                        </ul>
                    </div>
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
            <label for="subtask_name_${subtaskCount}">Sub-task ${subtaskCount}:</label>
            <input type="text" id="subtask_name_${subtaskCount}" name="subtasks[]" required>
        </div>`;
            subtasksDiv.insertAdjacentHTML('beforeend', newSubtask);
        }
    </script>
</body>

</html>
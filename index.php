<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://unpkg.com/@phosphor-icons/web"></script>
    <link rel="stylesheet" href="./styles/index.css"/>
    <link rel="stylesheet" href="./styles/nav.css"/>
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
                hello
            </div>
            <div class="main-right">
                <div class="progress-content-wrapper">
                    <span>Projects Complete</span>
                    <div class="progress-section">
                        progress
                    </div>
                    <div class="completed-list">
                        <ul>
                            <li>
                                <i class="ph ph-rows"></i>
                                <div class="complete-progress-detail">
                                    <span class="title">Marketing Campaign</span>
                                    <span class="task-no">2 tasks</span>
                                </div>
                            </li>
                            <li>
                                <i class="ph ph-rows"></i>
                                <div class="complete-progress-detail">
                                    <span class="title">Marketing Campaign</span>
                                    <span class="task-no">2 tasks</span>
                                </div>
                            </li>
                            <li>
                                <i class="ph ph-rows"></i>
                                <div class="complete-progress-detail">
                                    <span class="title">Marketing Campaign</span>
                                    <span class="task-no">2 tasks</span>
                                </div>
                            </li>
                            <li>
                                <i class="ph ph-rows"></i>
                                <div class="complete-progress-detail">
                                    <span class="title">Marketing Campaign</span>
                                    <span class="task-no">2 tasks</span>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
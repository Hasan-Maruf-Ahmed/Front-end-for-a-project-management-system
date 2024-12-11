<span class="main-icon"><i class="ph ph-atom"></i></span>
<ul class="nav-elements">
    <li><i class="ph ph-squares-four"></i></li>
    <li><i class="ph ph-rows"></i></li>
    <?php
    if (isset($_SESSION['email'])) {
        echo "<li><a href='backend/logout.php'><i class='ph ph-sign-out'></i></a></li>";
    }
    ?>

</ul>
<div class="user-d">
    <span class="user-icon"><a href="./pages/login.php"><i class="ph ph-user-circle"></i></a></span>
    <?php
    if (isset($_SESSION['username'])) {
        echo "<span class='user-name'>" . htmlspecialchars($_SESSION['username']) . "</span>";
    }
    ?>
</div>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/variables.css" />
    <link rel="stylesheet" href="../styles/login_signup.css" />
    <title>Project Management System</title>
</head>

<body>
    <div class="sign_in_up-container">
        <div class="heading">
            <span class="primary-heading">Welcome Back!</span>
            <span class="secondary-heading">Please, sign in to continue</span>
        </div>
        <form class="input-form" action="../backend/signIn_out.php" method="post">
            <div>
                <label for="email">Email address</label>
                <input class="input-box" type="email" id="email" name="email">
            </div>
            <div>
                <label for="password">Password</label>
                <input class="input-box" type="password" id="password" name="password">
            </div>
            <input class="sub-btn" type="submit" value="Submit" name="signIn">
        </form>
        <span class="alternate-link">Don't have an account? <a href="./signup.php">Sign up</a></span>
    </div>
</body>

</html>
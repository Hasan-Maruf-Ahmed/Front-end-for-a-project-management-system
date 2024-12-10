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
            <span class="primary-heading">Create your account</span>
            <span class="secondary-heading">Please, sign up to continue</span>
        </div>
        <form class="input-form" action="">
            <div>
                <label for="username">User Name</label>
                <input class="input-box" type="text" id="username" name="username">
            </div>
            <div>
                <label for="email">Email address</label>
                <input class="input-box" type="email" id="email" name="email">
            </div>
            <div>
                <label for="password">Password</label>
                <input class="input-box" type="password" id="password" name="password">
            </div>
            <input class="sub-btn" type="submit" value="Submit">
        </form>
        <span class="alternate-link">Already have an account? <a href="./login.php">Sign in</a></span>
    </div>
</body>

</html>
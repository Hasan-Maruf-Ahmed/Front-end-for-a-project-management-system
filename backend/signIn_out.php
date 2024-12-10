<?php 
include '../database/dbConnect.php';

if(isset($_POST['signUp'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $password = md5($password);

    $checkEmail = "SELECT * FROM users WHERE email = '$email'";
    $result=$conn->query($checkEmail);
    if($result->num_rows>0) {
        echo "User email already exists";
    }
    else {
        $insertQuery = "INSERT INTO users(username, email, password)
            VALUES ('$username', '$email', '$password')";

        if($conn->query($insertQuery)==TRUE) {
            header("location: ../pages/login.php");
            exit();
        }
        else {
            echo "Error: " .$conn->error;
        }
    }
}

if(isset($_POST['signIn'])){
    $email = $_POST['email'];
    $password = $_POST['password'];
    $password = md5($password);

    $sql = "SELECT * FROM users WHERE email = '$email' AND password = '$password'";
    $result=$conn->query($sql);
    if($result->num_rows>0) {
        session_start();
        $row = $result->fetch_assoc();
        $_SESSION['email']=$row['email'];
        header("location: ../index.php");
        exit();
    }
    else {
        echo "Invalid email or password.";
    }
}

?>
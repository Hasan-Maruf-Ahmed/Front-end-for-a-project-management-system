<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "project_management";
$conn = new mysqli($host, $user, $pass, $db);
if ($conn->connect_error) {
    die ("Error connecting to Database" .$conn->connect_error);
}
?>
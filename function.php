<?php
require "db.php";
session_start();

// if (true) {
//     header("Location: login.php");
// }
if (isset($_POST["login"])) {
    $username = $_POST["username"];
    // echo $username;
    $password = $_POST["password"];
    $query = "SELECT * FROM user WHERE username = '$username'";
    $exeecQuery = mysqli_query($db, $query);
    if (mysqli_num_rows($exeecQuery) == 0) {
        header("Location: login.php");
        die;
    }
    $result = mysqli_fetch_assoc($exeecQuery);
    if (password_verify($password, $result["password"])) {
        $_SESSION["login"] = true;
        header("Location: index.php");
    }
}

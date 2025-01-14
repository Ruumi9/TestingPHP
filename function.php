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
if (isset($_POST["daftar"])) {
    $username = $_POST["username"];
    $password = password_hash($_POST["password"], PASSWORD_ARGON2I);
    $nama = $_POST["nama"];
    $query = "INSERT INTO user VALUES ('','$username','$password','$nama')";
    $exeecQuery = mysqli_query($db, $query);
    if ($exeecQuery) {
        header("Location: index.php");
    } else {
        header("Location: index.php");
    }
    die;
}
if (isset($_POST["update"])) {
    $username = $_POST["username"];
    $nama = $_POST["nama"];
    $id = $_POST["id"];
    $query = "UPDATE user SET username = '$username', nama = '$nama' WHERE id = '$id'";
    $exeecQuery = mysqli_query($db, $query);
    if ($exeecQuery) {
        header("Location: index.php");
    } else {
        header("Location: index.php");
    }
    die;
}

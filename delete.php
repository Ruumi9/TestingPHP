<?php
session_start();
if (!isset($_SESSION["login"])) {
    header("Location: login.php");
}
require_once "db.php";
$id = $_GET["id"];
$query = "DELETE FROM user WHERE id = '$id'";
$exeecQuery = mysqli_query($db, $query);
if ($exeecQuery) {
    header("Location: index.php");
} else {
    header("Location: index.php");
}
die;

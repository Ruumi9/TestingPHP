<?php
session_start();
if (!isset($_SESSION["login"])) {
    header("Location: login.php");
}
if (!isset($_GET["id"])) {
    header("Location: index.php");
}
require_once "db.php";
$id = $_GET["id"];
$query = "SELECT * FROM user WHERE id = '$id'";
$exeecQuery = mysqli_query($db, $query);
$dataUser = mysqli_fetch_assoc($exeecQuery);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="function.php" method="post">
        <input type="text" name="username" placeholder="username" value="<?= $dataUser["username"] ?>" id="">
        <input type="text" name="nama" placeholder="nama" value="<?= $dataUser["nama"] ?>" id="">
        <input type="hidden" name="id" placeholder="nama" value="<?= $dataUser["id"] ?>" id="">
        <button type="submit" name="update">Update</button>
    </form>
</body>

</html>
<?php
session_start();
if (!isset($_SESSION["login"])) {
    header("Location: login.php");
}


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
</head>

<body>
    <a href="login.php">Login</a>
    <br>
    <a href="pendaftaran.php">Pendaftaran</a>
</body>

</html>
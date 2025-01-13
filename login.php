<?php
session_start();
if (isset($_SESSION["login"])) {
    header("Location: index.php");
}
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
        <input type="text" placeholder="Username" name="username">
        <input type="password" placeholder="Password" name="password">
        <button type="submit" name="login">Login</button>
    </form>
</body>

</html>
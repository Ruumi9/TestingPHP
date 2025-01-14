<?php
session_start();
if (!isset($_SESSION["login"])) {
    header("Location: login.php");
}
require_once "db.php";
$query = "SELECT * FROM user";
$exeecQuery = mysqli_query($db, $query);
$dataUser = mysqli_fetch_all($exeecQuery, MYSQLI_ASSOC);

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
    <br>
    <a href="logout.php">logout</a>
    <table border="1">
        <thead>
            <td>No</td>
            <td>Nama</td>
            <td>Username</td>
            <td>Aksi</td>
        </thead>
        <tbody>
            <?php
            foreach ($dataUser as $user):
            ?>
                <tr>
                    <td>1</td>
                    <td><?= $user["nama"] ?></td>
                    <td><?= $user["username"] ?></td>
                    <td>
                        <a href="update.php?id=<?= $user["id"] ?>">Update</a>
                        <a href="delete.php?id=<?= $user["id"] ?>" onclick="confirm('Aapakah anda ingin menhapus?')">Delete</a>
                    </td>
                </tr>
            <?php
            endforeach;
            ?>
        </tbody>
    </table>
</body>

</html>
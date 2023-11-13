<?php
session_start();
include '../config/koneksi.php';
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mlijo</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <div class="container">
        <div class="login">
            <form action="" method="post" class="user">
                <h1>Login</h1>
                <hr>
                <label for="username">Username</label>
                <input type="text" name="username" user="form-control form-control-user">
                <label for="password">Password</label>
                <input type="password" name="password" user="form-control form-control-user">
                <button type="submit" name="login">Login</button>
                <p>
                    <a href="pages-forget.php">Forgot Password ?</a>
                </p>
            </form>

        </div>
        <div class="right">
            <img src="assets/image.png" alt="">
        </div>
    </div>
</body>

</html>

<?php

if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $ambil = $koneksi->query("select * from admin 
where username='$username' and password='$password'");

    $akun = $ambil->num_rows;

    if ($akun == 1) {
        header("Location: ../Admin/index.php");
    }
}

?>
<?php
session_start();
require('../config/koneksi.php');

if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $ambil = $koneksi->query("select * from admin where username='$username' and password='$password'");

    if ($ambil->num_rows > 0) {
        $data = $ambil->fetch_assoc();
        $namaLengkap = $data['nama_lengkap'];
        // $kontol = $data['kolom database']
    }

    $akun = $ambil->num_rows;

    if ($akun == 1) {
        $_SESSION["nama_lengkap"] = $namaLengkap;
        // $_SESSION["terserah"] = $kontol;
        header("Location: ../Admin/index.php");
    } else {
        session_destroy();
    }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1,0">
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
                    <a href="register.html">Register</a>
                </p>
            </form>
        </div>
        <div class="right">
            <img src="assets/image.png" alt="">
        </div>
    </div>
</body>

</html>
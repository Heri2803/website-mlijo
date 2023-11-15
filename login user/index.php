<?php
session_start();
require('../config/koneksi.php');
?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible"
        content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1,0">
        <title>Mlijo</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <div class="container">
            <div class="login">
                <form action="" method="post">
                    <h3>Selamat Datang</h3>
                    <hr>
                    <p>LOGIN</p>
                    <label for="">Email</label>
                    <input type="text" placeholder="example@gmail.com" name="email_pelanggan">
                    <label for="">Password</label>
                    <input type="password" placeholder="Password" name="password_pelanggan">
                    <button name="pelanggan">Login</button>
                    <p>
                        <a href="register.html">Register</a>
                    </p>
                </form>
            </div>
            <div class="right">
                <img src="assets/login.png" alt="">
            </div>
        </div>
    </body>
</html>

<?php
if (isset($_POST['pelanggan'])) {
    $email_pelanggan = $_POST['email_pelanggan'];
    $password_pelanggan = $_POST['password_pelanggan'];

    $ambil = $koneksi->query("select * from pelanggan 
where email_pelanggan='$email_pelanggan' and password_pelanggan='$password_pelanggan'");

    $akun = $ambil->num_rows;

    if ($akun == 1) {
        header("Location: /asset/index.php");
    }
}
?>
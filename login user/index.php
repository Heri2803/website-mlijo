<?php
session_start();
require('../config/koneksi.php');
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
                    <a href="register.php">Register</a>
                </p>
                <p>
                    <a href="lupapassword.php">Forgot</a>
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
// if (isset($_POST['pelanggan'])) {
//     $email_pelanggan = $_POST['email_pelanggan'];
//     $password_pelanggan = $_POST['password_pelanggan'];

//     $ambil = $koneksi->query("select * from pelanggan 
// where email_pelanggan='$email_pelanggan' and password_pelanggan='$password_pelanggan'");

//     $akun = $ambil->num_rows;

//     if ($akun == 1) {
//         header("Location: ../asset/index.php");
//     }
// }


if (isset($_POST["pelanggan"])) {
    $email = $_POST["email_pelanggan"];
    $password = $_POST["password_pelanggan"];
  
    $caripelanggan = query("SELECT * FROM pelanggan WHERE pelanggan.email_pelanggan = '$email' AND pelanggan.password_pelanggan = '$password';");
  
    if ($caripelanggan) {
      // set session
      $_SESSION['nama_pelanggan'] = $caripelanggan[0]['nama_pelanggan'];
      $_SESSION['id_pelanggan'] = $caripelanggan[0]['id_pelanggan']; 
      $_SESSION['foto_pelanggab'] = $caripelanggan[0]['foto_pelanggan'];
    //   $_SESSION['alamat'] = $caripelanggan[0]['alamat'];
    //   $_SESSION['telepon_pelanggan'] = $caripelanggan[0]['telepon_pelanggan'];
      header("Location: /asset/index.php");
    } else {
      echo "<div class='alert alert-warning'>Username atau Password salah</div>
      <meta http-equiv='refresh' content='2'>";
    }
}

?>
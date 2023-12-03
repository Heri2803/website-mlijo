<?php
session_start();
require('../config/koneksi.php');

// Cek apakah formulir telah dikirim
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["pelanggan"])) {
    // Ambil data dari formulir
    $email_pelanggan = $_POST["email_pelanggan"];
    $password_pelanggan = $_POST["password_pelanggan"];

    // Validasi data jika diperlukan

    // Hash password sebelum menyimpan ke database (Anda dapat menggunakan metode hashing yang lebih aman)
    $hashed_password = password_hash($password_pelanggan, PASSWORD_DEFAULT);

    try {
        // Membuat koneksi ke database menggunakan PDO
        $dsn = "mysql:host=localhost;dbname=mlijo";
        $username = "root";
        $password = "";
        $options = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];
        $pdo = new PDO($dsn, $username, $password, $options);

        // Persiapkan dan jalankan statement SQL untuk melakukan pembaruan
        $stmt = $pdo->prepare("UPDATE `pelanggan` SET `password_pelanggan` = :password_pelanggan WHERE `email_pelanggan` = :email_pelanggan");

        // Bind parameter ke statement
        $stmt->bindParam(":password_pelanggan", $password_pelanggan);
        $stmt->bindParam(":email_pelanggan", $email_pelanggan);

        // Eksekusi statement
        $stmt->execute();

        // Tampilkan pesan sukses atau redirect ke halaman lain jika diperlukan
        echo "Data berhasil diperbarui.";
    } catch (PDOException $e) {
        // Tangani kesalahan jika terjadi
        echo "Error: " . $e->getMessage();
    }

    session_destroy();

    echo "<script>alert('Passwowrd telah di ubah');</script>";
    echo "<script>window.location.href = 'index.php';</script>";
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

<style>
  
</style>

<body>
    <div class="container">
        <div class="login">
            <form action="" method="post" onsubmit="kirimemail(); reset(); return false;">
                <h3>Lupa Password</h3>
                <hr>
                <label for="">Email</label>
                <div class="d-flex">
                <input type="text" placeholder="example@gmail.com" name="email_pelanggan" id="Emailotp">
                <button type="submit">Submit</button>
                </div> 
            </form>
            <form action="" method="post">
                <label for="">Email</label>
                <input type="text" placeholder="example@gmail.com" name="email_pelanggan" id="Emailotp">
                <label for="">Password</label>
                <input type="password" placeholder="Password" name="password_pelanggan">
                <label for="">Kode OTP</label>
                <input type="Kode" placeholder="Kode OTP" name="Kode_otp" id="otp_inp">
                <button name="pelanggan" id="update">update</button>
                <p>
                    <a href="index.php">kembali</a>
                </p>
            </form>
        </div>
        <div class="right">
            <img src="assets/login.png" alt="">
        </div>
    </div>

    <script src="https://smtpjs.com/v3/smtp.js">
    </script>

    <script>
        function kirimemail() {

            var emailValue = document.getElementById('Emailotp').value;
            let otp_val = Math.floor(Math.random() * 10000);

            let emailbody = `
    <h1>Please Subscribe to Ash_is_Coding</h1> <br>
    <h2>Your OTP is </h2>${otp_val}`;
            Email.send({
                SecureToken: "56118085-c4f9-4b1b-a072-15e86bff4078",
                To: emailValue,
                From: "mlijoteam3@gmail.com",
                Subject: "This is the subject",
                Body: emailbody
            }).then(
                message => {
          if (message === "OK") {
            // alert("Email berhasil dikirim");
            const otp_inp = document.getElementById('otp_inp');
            const otp_btn = document.getElementById('update');
            // var myModal = new bootstrap.Modal(document.getElementById("login"));

            otp_btn.addEventListener('click', () => {
              // now check whether sent email is valid
              if (otp_inp.value == otp_val) {
                // alert("Email address verified...");
                fetch('savedata.php', {
                    method: 'POST',
                    headers: {
                      'Content-Type': 'application/x-www-form-urlencoded',
                    },
                    body: new URLSearchParams({
                      emailu: document.getElementsByName('email_pelanggan')[0].value,
                      pwu: document.getElementsByName('password_pelanggan')[0].value,
                      namau: document.getElementsByName('Kode_otp')[0].value,
                    }),
                  })
                  // .then(response => response.text())
                  // .then(data => {
                  //   if (data.status === 'success') {
                  //     alert("Data berhasil disimpan ke database");
                  //     // myModal.show();
                  //   } else {
                  //     alert("Gagal menyimpan data ke database. Pesan kesalahan: " + data.message);
                  //     myModal.show();
                  //   }
                  // })
                  .catch(error => {
                    console.error('Error:', error);
                  });
              } else {
                alert("Invalid OTP");
              }
            })
          } else {
            alert("Gagal mengirim email. Pesan kesalahan: " + message);
          }
        }
      );
    }
    </script>
</body>

</html>
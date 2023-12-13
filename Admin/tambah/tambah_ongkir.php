<?php
// $server = "localhost";
// $username = "root";
// $password = "";
// $db = "mlijo";

$server = "mifa.myhost.id";
$username = "mifamyho_mlijo";
$password = "WSImif2023";
$db = "mifamyho_mlijo";
$koneksi = mysqli_connect($server, $username, $password, $db);
if (isset($_POST["simpan"])) {
    $nama_jalan = $_POST['jalan'];
    $tarif = $_POST['tariff'];

    $koneksi->query("INSERT INTO ongkir (nama_jalan,tarif) VALUES ('$nama_jalan','$tarif') ");


    echo "<script>alert('data berhasil disimpan');</script>";
    echo "<script>location='../index.php?ongkir';</script>";
}

<?php
$server = "localhost";
$username = "root";
$password = "";
$db = "mlijo1";
$koneksi = mysqli_connect($server, $username, $password, $db);

if (mysqli_connect_errno()) {
  echo "koneksi gagal : " . mysqli_connect_error();
}

//SELECT DATABASE
function query($query)
{
  global $koneksi;
  $result = mysqli_query($koneksi, $query);
  $rows = [];
  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }
  return $rows;
}

$tampil_produk = query("SELECT * FROM produk;")











  ?>
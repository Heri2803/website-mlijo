<?php

$id_pelanggan = $_GET['hapus_pelanggan'];
$koneksi->query("delete from pelanggan where id_pelanggan='$id_pelanggan'");

echo "<script>alert('data berhasil dihapus');</script>";
echo "<script>location='index.php?pelanggan';</script>";
// var_dump($id_kategori_produk);
?>
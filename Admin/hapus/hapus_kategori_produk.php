<?php

$id_kategori_produk = $_GET['id_kategori_produk'];
$koneksi->query("delete from kategori_produk where id_kategori_produk='$id_kategori_produk'");


?>
<?php
include_once('../config/koneksi.php');


$Sayuran = query("SELECT * FROM kategori_produk WHERE nama_kategori_produk = 'Sayuran';");
$Daging = query("SELECT * FROM kategori_produk WHERE nama_kategori_produk = 'perdagingan';");
$buah = query("SELECT * FROM kategori_produk WHERE nama_kategori_produk = 'Buah-buahan';");
$sayur = query("SELECT * FROM kategori_produk WHERE nama_kategori_produk = 'paket sayur';");
?>

<div class="card kategori">
    <div class="card-header">
        <h4>Kategori Produk</h4>
    </div>

    <nav class="kecil">
        <!-- Use foreach only if $kategori is an array -->
        <?php foreach ($Sayuran as $row): ?>
            <?php
                // Menggunakan nilai 'sayuran' dari kolom kategori_produk
                $sayuran = $row['nama_kategori_produk'];
            ?>
            <a href="#" class="nav-link" onclick="sortProduct('<?php echo $sayuran; ?>')">
                <?php echo $sayuran; ?>
            </a>
        <?php endforeach; ?>
        <?php foreach ($Daging as $row): ?>
            <?php
                // Menggunakan nilai 'sayuran' dari kolom kategori_produk
                $sayuran = $row['nama_kategori_produk'];
            ?>
            <a href="#" class="nav-link" onclick="sortProduct('<?php echo $sayuran; ?>')">
                <?php echo $sayuran; ?>
            </a>
        <?php endforeach; ?>
        <?php foreach ($buah as $row): ?>
            <?php
                // Menggunakan nilai 'sayuran' dari kolom kategori_produk
                $sayuran = $row['nama_kategori_produk'];
            ?>
            <a href="#" class="nav-link" onclick="sortProduct('<?php echo $sayuran; ?>')">
                <?php echo $sayuran; ?>
            </a>
        <?php endforeach; ?>
        <?php foreach ($sayur as $row): ?>
            <?php
                // Menggunakan nilai 'sayuran' dari kolom kategori_produk
                $sayuran = $row['nama_kategori_produk'];
            ?>
            <a href="#" class="nav-link" onclick="sortProduct('<?php echo $sayuran; ?>')">
                <?php echo $sayuran; ?>
            </a>
        <?php endforeach; ?>
    </nav>
</div>

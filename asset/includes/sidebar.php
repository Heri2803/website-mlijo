<div class="card kategori">
    <div class="card-header">
        <h4>Kategori Produk</h4>
    </div>
    <nav class="kecil">
        <?php foreach ($tampil_kategori1 as $row) : ?>
            <form action="" method="post"> <!-- Tambahkan method="post" -->
                <input type="hidden" name="id_kategori" value="<?= $row["id_kategori_produk"]; ?>"> <!-- Tambahkan input hidden untuk id_kategori -->
                <button type="submit" name="nama_kategori" class="nav-link" ><?= $row["nama_kategori_produk"]; ?></button>
            </form>
        <?php endforeach; ?>
    </nav>
</div>
<style>
    button.nav-link {
        font-family: sans-serif;
        border: none;
        background: transparent;
        cursor: pointer;
        padding: 0;
        display: flex;
        align-items: center;
        justify-content: center;
        text-align: center; /* Pusatkan teks secara horizontal */
        vertical-align: middle; /* Pusatkan teks secara vertikal */
        height: 100%; /* Sesuaikan tinggi agar tombol memiliki tinggi yang sesuai */
    }
</style>


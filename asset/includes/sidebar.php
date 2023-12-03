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
    .card.kategori {
    margin-top: 20px;
    border: 2px solid #4fbfa8;
    border-radius: 10px;
    overflow: hidden;
}

.card-header {
    background-color: #4fbfa8;
    color: #ffffff;
    padding: 10px;
    text-align: center;
}

nav.kecil {
    display: flex;
    flex-direction: column;
    align-items: center;
}

nav.kecil button {
    background-color: #4fbfa8;
    color: #ffffff;
    border: none;
    padding: 10px;
    margin: 5px;
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.3s;
}

nav.kecil button:hover {
    background-color: #2980b9;
}
/* Aturan media query untuk responsif */
@media (max-width: 767px) {
    nav.kecil {
        flex-direction: row;
        justify-content: space-around;
        align-items: center;
    }

    nav.kecil button {
        margin: 5px 0;
    }
}

</style>


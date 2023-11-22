<?php
ob_start(); // Start output buffering
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
include('../config/koneksi.php');

// Mengambil id_pembelian dari parameter URL
$id_pembelian = $_GET['id'];

// Query untuk mendapatkan data pembelian sesuai dengan id_pembelian
$query_detail_pembelian = "SELECT
                                pembelian.id_pembelian,
                                pembelian.tanggal_pembelian,
                                pembelian.total_pembelian,
                                pembelian.status_pembayaran,
                                pelanggan.id_pelanggan,
                                pelanggan.nama_pelanggan,
                                pelanggan.alamat,
                                pelanggan.telepon_pelanggan,
                                ongkir.nama_jalan,
                                ongkir.tarif
                           FROM pembelian
                           JOIN pelanggan ON pembelian.id_pelanggan = pelanggan.id_pelanggan
                           JOIN ongkir ON pembelian.id_ongkir = ongkir.id_ongkir
                           WHERE pembelian.id_pembelian = $id_pembelian;";
$result_detail_pembelian = mysqli_query($koneksi, $query_detail_pembelian);

// Memeriksa apakah query berhasil dijalankan
if (!$result_detail_pembelian) {
    echo "Error: " . mysqli_error($koneksi);
}

ob_end_flush(); // End output buffering
?>

<!-- Tambahkan kode untuk menampilkan data pembelian -->
<center>
    <h2>Detail Pesanan</h2>
</center>

<div class="table-responsive">
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID Pembelian</th>
                <th>Tanggal Pembelian</th>
                <th>Total Pembelian</th>
                <th>Status Pembayaran</th>
                <th>ID Pelanggan</th>
                <th>Nama Pelanggan</th>
                <th>Alamat Pelanggan</th>
                <th>Telepon Pelanggan</th>
                <th>Nama Jalan</th>
                <th>Tarif Ongkir</th>
                <!-- Tambahkan kolom sesuai dengan kebutuhan -->
            </tr>
        </thead>
        <tbody>
            <?php
            while ($data_detail_pembelian = mysqli_fetch_assoc($result_detail_pembelian)) :
            ?>
                <tr>
                    <td><?= $data_detail_pembelian['id_pembelian']; ?></td>
                    <td><?= $data_detail_pembelian['tanggal_pembelian']; ?></td>
                    <td>Rp. <?= number_format($data_detail_pembelian['total_pembelian']); ?></td>
                    <td><?= $data_detail_pembelian['status_pembayaran']; ?></td>
                    <td><?= $data_detail_pembelian['id_pelanggan']; ?></td>
                    <td><?= $data_detail_pembelian['nama_pelanggan']; ?></td>
                    <td><?= $data_detail_pembelian['alamat']; ?></td>
                    <td><?= $data_detail_pembelian['telepon_pelanggan']; ?></td>
                    <td><?= $data_detail_pembelian['nama_jalan']; ?></td>
                    <td>Rp. <?= number_format($data_detail_pembelian['tarif']); ?></td>
                    <!-- Tambahkan baris sesuai dengan kebutuhan -->
                </tr>
            <?php endwhile; ?>
        </tbody>
    </table>
    <table class="table table-bordered">
        <thead>
            <th>Nama Produk</th>
            <th>Harga Produk</th>
            <th>Jumlah</th>
            <th>subtotal</th>
        </thead>
        <tbody>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tbody>
    </table>
</div>

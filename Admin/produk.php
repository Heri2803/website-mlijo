<?php

$produk = array();

$ambil = $koneksi->query("SELECT * FROM produk");
while ($pecah = $ambil->fetch_assoc()) {
    $produk[] = $pecah;
}
?>

<div class="animated fadeIn">
    <div class="row">
        <div class="col-md-12 mt-3">
            <div class="card">
                <div class="card-header py-3">
                    <strong class="card-title">Data Produk</strong>
                </div>
                <div class="card-body">
                    <a href="index.php?tambah_produk" class="btn btn-sm btn-primary mb-3 ml-3">
                        <i class="fa fa-plus"></i>Tambah Data
                    </a>
                    <table id="bootstrap-data-table" class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Foto</th>
                                <th>Nama</th>
                                <th>Harga</th>
                                <th>Opsi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($produk as $key => $value): ?>
                                <tr>
                                    <td width="50">
                                        <?php echo $key + 1; ?>
                                    </td>
                                    <td width="200">
                                        <img src="assets/foto_produk/<?= $value['foto_produk']; ?>" alt="">
                                    </td>
                                    <td width="150">
                                        <?php echo $value['nama_produk']; ?>
                                    </td>
                                    <td width="150">Rp.
                                        <?php echo $value['harga_produk']; ?>
                                    </td>
                                    <td class="text center" width="210">
                                        <a href="index.php?edit_produk" class="btn btn-sm btn-primary">
                                            <i class="fa fa-edit"></i>Edit
                                        </a>
                                        <a href="index.php?detail_produk=<?php echo $value['id_produk']; ?>"
                                            class="btn btn-sm btn-info">
                                            <i class="fa fa-edit"></i>Detail
                                        </a>
                                        <a href="index.php?hapus_produk" class="btn btn-sm btn-danger">
                                            <i class="fa fa-trash"></i>Hapus
                                        </a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
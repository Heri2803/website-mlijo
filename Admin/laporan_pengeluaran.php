<?php

$pengeluaran = array();
$ambil = $koneksi->query("select * from pengeluaran");
while ($pecah = $ambil->fetch_assoc()) {
    $pengeluaran[] = $pecah;
}

?>

<div class="animated fadeIn">
    <div class="row">
        <div class="col-md-12 mt-3">
            <div class="card">
                <div class="card-header py-3">
                    <strong class="card-title">Laporan Pengeluaran</strong>
                </div>
                <div class="card-body">
                    <a type="button" name="tambah" class="btn btn-sm btn-primary mb-3 ml-3" data-toggle="modal"
                        data-target="#tambahModal" style="color: white;">
                        <i class="fa fa-plus"></i>Tambah Data
                    </a>
                    <table id="bootstrap-data-table" class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Jenis Pengeluaran</th>
                                <th>Tanggal</th>
                                <th>Total</th>
                                <th>Opsi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($pengeluaran as $key => $value): ?>
                                <tr>
                                    <td width="50">
                                        <?php echo $key + 1 ?>
                                    </td>
                                    <td width="200">
                                        <?= $value['jenis_pengeluaran']; ?>
                                    </td>
                                    <td width="120">
                                        <?php echo date("d F Y", strtotime($value['tanggal'])); ?>
                                    </td>
                                    <td width="100">Rp.
                                        <?php echo number_format($value['total']); ?>
                                    </td>
                                    <td class="text-center" width="150">
                                        <!-- Tombol Edit -->
                                        <!-- <button type="button" name="edit" class="btn btn-primary btn-sm" data-toggle="modal"
                                            data-target="#editModal<?= $value['id_produk'] ?>"><i class="fa fa-edit"></i>
                                            Edit</button> -->
                                        <!-- Tombol Hapus -->
                                        <!-- <a href="index.php?hapus_produk=<?php echo $value['id_produk']; ?>"
                                            class="btn btn-sm btn-danger">
                                            <i class="fa fa-trash"></i> Hapus
                                        </a> -->
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<form action="download1.php">
    <button id="downloadBtn" class="btn btn-sm btn-success" style="float: right;">
        <i class="fa fa-download"></i> Download
    </button>
</form>
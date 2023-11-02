<div class="animated fadeIn">

    <?php

    $data_kategori_produk = array();

    $ambil = $koneksi->query("SELECT * FROM kategori_produk");

    while ($pecah = $ambil->fetch_assoc()) {
        $data_kategori_produk[] = $pecah;
    }
    ?>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header py-3">
                    <strong class="card-title">Data Kategori Produk</strong>
                </div>
                <div class="card-body">
                    <a href="index.php?tambah_kategori_produk" class="btn btn-sm btn-primary mb-3 ml-3">
                        <i class="fa fa-plus"></i> Tambah Data
                    </a>
                    <table id="bootstrap-data-table" class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Kategori</th>
                                <th>Opsi</th>
                            </tr>
                        </thead>
                        <tbody>

                            <?php foreach ($data_kategori_produk as $key => $value): ?>

                                <tr>
                                    <td width="50">
                                        <?= $key + 1; ?>
                                    </td>
                                    <td>
                                        <?= $value['nama_kategori_produk']; ?>
                                    </td>
                                    <td class="text-center" width="150">
                                        <a href="index.php?edit_kategori_produk" class="btn btn-sm btn-primary">
                                            <i class="fa fa-edit"></i> Edit
                                        </a>

                                        <a href="" class="btn btn-sm btn-danger">
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
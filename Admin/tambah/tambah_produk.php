<?php

$kategori_produk = array();

$ambil = $koneksi->query("select * from kategori_produk");
while ($pecah = $ambil->fetch_assoc()) {
    $kategori_produk[] = $pecah;
}


?>

<div class="animated fadeIn">
    <div class="row">
        <div class="col-md-12 mt-3">
            <div class="card">
                <div class="card-header py-3">
                    <strong class="card-title">Tambah Data Produk</strong>
                </div>
                <div class="card-body">
                    <form action="">

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label mt-0,5">Nama Kategori</label>
                            <div class="col-sm-10">
                                <select name="id_kategori_produk" class="form-control">
                                    <option selected disabled>pilih kategori produk</option>
                                    <?php foreach ($kategori_produk as $key => $value): ?>
                                        <option value="</php? echo $value['id_kategori_produk'];?>">
                                            <?php echo $value['nama_kategori_produk']; ?>
                                        </option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label mt-0,5">Nama Produk</label>
                            <div class="col-sm-10">
                                <input type="text" name="nama_produk" class="form-control">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label mt-0,5">Harga</label>
                            <div class="col-sm-10">
                                <input type="number" name="harga_produk" class="form-control">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label mt-0,5">Deskripsi</label>
                            <div class="col-sm-10">
                                <textarea name="deskripsi_produk" class="form-control"></textarea>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label mt-0,5">Stok</label>
                            <div class="col-sm-10">
                                <input type="number" name="stok_produk" class="form-control">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label mt-0,5">Foto</label>
                            <div class="col-sm-10">
                                <input type="file" name="foto_produk" class="form-control">
                            </div>
                        </div>

                    </form>
                </div>
                <div class="card-footer py-3">
                    <div class="row">
                        <div class="col">
                            <a href="index.php?produk" class="btn btn-sm btn-danger">
                                <i class="fa fa-chevron-left"></i>Kembali
                            </a>
                        </div>
                        <div class="col text-right">
                            <button name="simpan" class="btn btn-sm-pramry">
                                Simpan <i class="fa fa-chevron-right"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php

if (isset($_POST['simpan'])) {

}

?>
<div class="animated fadeIn">

    <?php

    $id_pembelian = $_GET['detail_pembelian'];

    $ambil = $koneksi->query("select * from pembelian join pelanggan
    on pembelian.id_pelanggan=pelanggan.id_pelanggan where pembelian.id_pembelian='$id_pembelian'");

    $detail = $ambil->fetch_assoc();
    ?>
    <pre><?php print_r($detail) ?></pre>


    <div class="row">
        <div class="col-md-12 mt-3">
            <div class="card">
                <div class="card-header py-3">
                    <strong class="card-title">Halaman Detail Pembelian</strong>
                </div>
                <div class="row">
                    <div class="col-md-4 mt-3">
                        <div class="card-header">
                            <strong>Data Pelanggan</strong>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table">
                                    <tr>
                                        <th>Nama</th>
                                    </tr>
                                    <tr>
                                        <th>Email</th>
                                    </tr>
                                    <tr>
                                        <th>Telepon</th>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 mt-3">
                        <div class="card-header">
                            <strong>Data Pembelian</strong>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table">
                                    <tr>
                                        <th>No. Pembelian</th>
                                    </tr>
                                    <tr>
                                        <th>Tanggal</th>
                                    </tr>
                                    <tr>
                                        <th>Total</th>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 mt-3">
                        <div class="card-header">
                            <strong>Data Pengiriman</strong>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table">
                                    <tr>
                                        <th>Alamat</th>
                                    </tr>
                                    <tr>
                                        <th>Ongkir</th>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>


                </div>


            </div>
        </div>

    </div>
</div>

<div class="card shadow bg-white">
    <div class="card-body">
        <table id="bootstrap-data-table" class="table table-bordered table-hover table-striped">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Harga</th>
                    <th>Jumlah</th>
                    <th>Subtotal</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>x</td>
                    <td>x</td>
                    <td>x</td>
                    <td>x</td>
                    <td>x</td>
                </tr>

            </tbody>
        </table>
    </div>
</div>
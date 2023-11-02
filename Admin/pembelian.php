<div class="animated fadeIn">


    <?php
    $peembelian = array();
    $ambil = $koneksi->query("select * from pembelian join pelanggan
    on pembelian.id_pelanggan=pelanggan.id_pelanggan");

    while ($pecah = $ambil->fetch_assoc()) {
        $peembelian[] = $pecah;
    }


    ?>

    <div class="row">
        <div class="col-md-12 mt-3">
            <div class="card">
                <div class="card-header py-3">
                    <strong class="card-title">Data Pembelian</strong>
                </div>
                <div class="card-body">
                    <table id="bootstrap-data-table" class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Tanggal</th>
                                <th>Total</th>
                                <th>Opsi</th>
                            </tr>
                        </thead>
                        <tbody>

                            <?php foreach ($peembelian as $key => $value): ?>

                                <tr>
                                    <td width="50">
                                        <?php echo $key + 1 ?>
                                    </td>
                                    <td>
                                        <?php echo $value['nama_pelanggan']; ?>
                                    </td>
                                    <td>
                                        <?php echo date("d F Y", strtotime($value['tanggal_pembelian'])); ?>
                                    </td>
                                    <td>
                                        Rp
                                        <?php echo number_format($value['total_pembelian']); ?>
                                    </td>
                                    <!-- <td class="text center" width="15">
                                        <a href="index.php?detail_pembelian%id="
                                            class="btn btn-sm btn-info">
                                            <i class="fa fa-edit"></i>Detail
                                        </a>
                                    </td> -->
                                    <td class="text center" width="15">
                                        <a href="index.php?detail_pembelian=<?php echo $value['id_pembelian']; ?>"
                                            class="btn btn-sm btn-info">
                                            <i class="fa fa-edit"></i>Detail
                                        </a>
                                    </td>
                                </tr>


                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>


    </div>
</div>
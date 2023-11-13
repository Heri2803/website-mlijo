<div class="shadow p-3 mb-3 mt-3 bg-white" style="border-radius: 5px;">
    <h5><b>Laporan Pembelian</b></h5>
</div>

<div class="card shadow bg-white">
    <div class="card-body">
        <form method="post">
            <div class="row">

                <div class="col-md-4">
                    <div class="form-group row">
                        <div class="col-sm-4">
                            <label for="" class="col-form-label text-end">Mulai :</label>
                        </div>
                        <div class="col-sm-8 text-left">
                            <input type="date" name="tglm" class="form-control">
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="form-group row">
                        <div class="col-sm-4">
                            <label for="" class="col-form-label text-end">Sampai :</label>
                        </div>
                        <div class="col-sm-8">
                            <input type="date" name="tgls" class="form-control">
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <button name="cari" class="btn btn-primary" type="submit">
                        <i class="fa fa-search"></i>
                    </button>
                </div>

            </div>
        </form>
    </div>
</div>

<div class="card shadow bg-white">
    <div class="card-body">
        <div class="table-responsive">
            <table id="bootstrap-data-table" class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Tanggal</th>
                        <th>Jumlah</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>x</td>
                        <td>x</td>
                        <td>x</td>
                        <td>x</td>
                    </tr>
                </tbody>
                <tfoot>
                    <tr>
                        <th colspan="3">Total</th>
                        <th>Rp.</th>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>
</div>

<!-- <div class="alert alert-primary shadow mt-3"></div> -->

<a href="" class="btn btn-sm btn-success" style="float: right;">
    <i class="fa fa-download"></i>download
</a>
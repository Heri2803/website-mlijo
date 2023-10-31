<div class="shadow p-3 mb-3 mt-3 bg-white" style="border-radius: 5px;">
    <h5><b>Laporan Pembelian</b></h5>
</div>

<div class="card shadow bg-white">
    <div class="card-body">
        <form method="post">
            <div class="row">

                <div class="col-md-4">
                    <div class="form-group row">
                        <label for="col-sm-3 col-form-label" class="col-sm-3 col-form-label text-end">Mulai :</label>
                        <div class="col-sm-9">
                            <input type="date" name="tglm" class="form-control">
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="form-group row">
                        <label for="col-sm-3 col-form-label" class="col-sm-3 col-form-label text-end">Sampai :</label>
                        <div class="col-sm-9">
                            <input type="date" name="tgls" class="form-control">
                        </div>
                    </div>
                </div>

                <div class="col-md-1">
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
            <table class="table table-bordered table-hover table-striped" id="tables">
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
<a href="#" class="btn btn-success">
    <i class="fa fa-download" style="margin-left: 5px;"></i>
    Download
</a>
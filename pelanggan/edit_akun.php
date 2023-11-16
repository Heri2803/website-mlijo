<form method="post" enctype="multipart/form-data">
    <div class="form-group row">
        <label class="col-sm-2 col-form-label">Nama Lengkap : </label>
        <div class="col-sm-9">
            <input type="text" name="nama" class="form-control" value="Muhammad Heriyanto">
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-2 col-form-label">Email : </label>
        <div class="col-sm-9">
            <input type="text" name="email" class="form-control" value="muhammadheriyanto28@gmail.com">
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-2 col-form-label">Telephone : </label>
        <div class="col-sm-9">
            <input type="text" name="telpon" class="form-control" value="085730655948">
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-2 col-form-label">Alamat : </label>
        <div class="col-sm-9">
            <textarea name="alamat" class="form-control">Desa Kemundong Kulon</textarea>
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-2 col-form-label">Foto : </label>
        <div class="col-sm-9">
            <img src="/asset/img/teletabis.jpg" class="img-responsive mb-3" width="150">
            <input type="file" name="foto" class="form-control">
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-2 col-form-label"></label>
        <div class="col-sm-9">
            <button name="update" class="btn btn-primary">Update</button>
        </div>
    </div>
</form>
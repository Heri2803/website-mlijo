<?php
include('../config/koneksi.php');
$id_detail = $_GET["idproduk"];
$detail_produk = query("SELECT * FROM produk WHERE produk.id_produk = '$id_detail';");
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mlijo</title>
    <!-- Custom fonts for this template-->
    <link href="/asset/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <!-- Custom styles for this template-->
    <link href="/asset/css/sb-admin-2.min.css" rel="stylesheet">
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"> -->
    <!-- owl carousel -->
    <link href="/asset/css/owl.carousel.min.css" rel="stylesheet">
    <link href="/asset/css/owl.theme.default.min.css" rel="stylesheet">
    <!-- style css -->
    <link href="/asset/css/style.css" rel="stylesheet">
</head>

<body>
    

    <!-- Navbar Start -->
    <nav id="navbar" class="navbar navbar-expand-lg navbar-light bg-light sticky-top">
        <div class="container">
            <!-- navbar brand start -->
            <div class="navbar-brand">
                <a class="d-none d-lg-block mt-1" href="index.php">MLIJO</a>
                <a class="d-sm-none mt-1" href="index.php">MLIJO</a>
            </div>
            <!-- navbar brand end -->
            <!-- btn navbar start -->
            <div class="btn-navbar">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#search" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="toggler"></span>
                    <i class="fas fa-search"></i>
                </button>
                <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="toggler"></span>
                    <i class="fas fa-list"></i>
                </button>
                <!-- btn navbar end -->
                <!-- navbar start -->
            </div>
            <div class="collapse navbar-collapse mt-1" id="navbarNav">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="produk.php">Produk</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/pelanggan/profil.php">Akun Saya</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="Keranjang.php">Keranjang</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="Kontak.php">Kontak</a>
                    </li>
                </ul>
                <!-- search start -->
                <div class="collapse clearfix" id="search">
                    <form action="produk.php" method="get" class="navbar-form">
                        <div class="input-group">
                            <input type="search" name="keyword" class="form-control" placeholder="search" required>
                            <span class="input-group-btn">
                                <button class="btn btn-primary" name="keyword" value="search" type="submit"><i class="fas fa-search"></i></button>
                            </span>
                        </div>
                    </form>
                </div>
                <!-- seacrh end -->
                <!-- btn search start -->
                <div class="btn-search">
                    <div class="collapse navbar-collapse">
                        <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#search">
                            <span class="toggler"></span>
                            <i class="fas fa-search"></i>
                        </button>
                    </div>
                </div>
                <!-- btn search end -->
                <!-- btn keranjang start -->
                <div class="btn-keranjang">
                    <a href="keranjang.php" class="btn btn-primary"><i class="fas fa-shopping-cart"></i></a>
                </div>
                <!-- btn keranjang end -->
            </div>
            <!-- navbar end -->
        </div>
    </nav>
    <!-- Navbar End -->

    <!-- content produk start -->
    <div id="content">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <!-- breadcrumb start -->
                    <ul class="breadcrumb">
                        <li><a href="index.php">Home</a></li>
                        <li>Detail Produk</li>
                    </ul>
                    <!-- breadcrumb end -->
                    <!-- side bar start -->
                    <div class="row d-flex ">

                        <div class="col-md-3">
                            <?php include 'includes/sidebar.php'; ?>
                        </div>
                        <!-- side bar end -->
                        <!-- row page produk start -->
                        
                        <div class="col-md-9">
                            <!-- detail produk start -->
                            <div id="detail-produk" class="row">
                                <!-- col-md-6 start -->
                                <?php foreach ($detail_produk as $row) : ?>
                                <div class="col-md-6">
                                    <div class="img-big">
                                        <div class="nav-big">
                                            <div class="owl-corousel">
                                                <div class="item">
                                                    <img id="gambarbayam" src="/asset/img/<?= $row["foto_produk"]; ?>" class="img-responsive" data-hash="1" weight="100px" height="400px">
                                                </div>
                                        
                                            </div>
                                        </div>
                                    </div>
                                </div>
                              
                                <!-- col-md-6 end -->

                                <!-- col-md-6 start form -->
                                <div class="col-md-6">
                                    <div class="card-box">
                                        <h2>Bayam Segar</h2>
                                        <form method="post" class="form-horizontal">
                                            <div class="form-group row">
                                                <label class="col-sm-4 col-form-label">Jumlah Produk :</label>
                                                <div class="col-sm-7">
                                                    <input type="number" name="jumlah" class="form-control" min="1" value="1">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-4 col-form-label">Stok Produk : </label>
                                                <label class="col-sm-4 col-form-label">Tersisa <?= $row["stok"]; ?> Ikat</label>
                                            </div>
                                            <div>
                                                <p class="harga">Rp. <?= $row["harga_produk"]; ?></p>
                                                <p class="text-center">
                                                    <a href="keranjang.php" class="btn btn-primary">
                                                        <i class="fas fa-shopping-cart">Pesan</i>
                                                    </a>
                                                </p>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <!-- col-md-6 end form -->
                            </div>
                            <!-- detail produk end -->

                            <!-- card box detail start -->
                            <div class="card-box">
                                <h4>Deskripsi Produk</h4>
                                <p><?= $row["deskripsi_produk"]; ?></p>
                            </div>
                            <?php endforeach; ?>
                            <!-- card box detail end -->

                            <!-- produk slide start -->
                            <div id="produk-slide">
                                <div class="card-box">
                                    <h2>Produk Lainnya</h2>
                                </div>
                                <div class="slide">
                                    <div class="nav-slide"></div>
                                    <div class="owl-carousel">
                                    <?php //foreach ($detail_produk as $row) : ?>
                                        <div class="item">
                                            <a href="detail_produk.php">
                                                <img src="/asset/img/<?= $row["foto_produk"]; ?>" class="img-responsive">
                                            </a>
                                            <div class="text">
                                                <a href="detail_produk">
                                                    <h4><?= $row["nama_produk"]; ?></h4>
                                                </a>
                                                <p class="harga"><?= $row["harga_produk"]; ?></p>
                                            </div>
                                        </div>
                                        <?php //endforeach; ?>
                                        
                                    </div>
                                </div>
                            </div>
                            <!-- produk slide end -->
                        </div>
                       
                    </div>

                    <!-- <div id="banner">
                            <div class="container">
                                <div class="owl-nav"></div>
                                <div class="owl-carousel owl-theme">
                                    <div class="item">
                                        <img src="/asset/img/bayam.jpg">
                                    </div>
                                    <div class="item">
                                        <img src="/asset/img/jagung.jpg">
                                    </div>
                                </div>
                            </div>
                        </div> -->
                    <!-- row page produk end -->
                    <br>
                    <!-- pagination start -->
                    <div class=" row justify-content-center">
                        <nav aria-label="...">
                            <ul class="pagination">
                                <li class="page-item disabled">
                                    <a class="page-link text-success" href="#">Previous</a>
                                </li>
                                <li class="page-item"><a class="page-link text-secondary" href="#">1</a></li>
                                <li class="page-item " aria-current="page">
                                    <a class="page-link text-secondary" href="#">2</a>
                                </li>
                                <li class="page-item"><a class="page-link text-secondary" href="#">3</a></li>
                                <li class="page-item">
                                    <a class="page-link text-success" href="#">Next</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                    <!-- pagination end -->

                    <!-- page produk start -->
                    <div class="col-md-9 page-produk">
                        <div class="">
                            <p>Produk Kami dijamin 100% fresh setiap hari . Jika kalian punya pertanyaan atau mungkin masukan bisa <a href="kontak.php">Hubungi Kami</a>.<strong>Mlijo</strong> Kami melayani pelanggan sepenuh hati</p>
                        </div>
                    </div>
                    <!-- page produk end -->
                </div>
            </div>
        </div>
    </div>
    <!-- content produk finish -->



    <!-- footer start -->
    <?php include 'includes/footer.php' ?>
    <!-- footer End -->


    <!-- Bootstrap core JavaScript-->
    <script src="/asset/vendor/jquery/jquery.min.js"></script>
    <script src="/asset/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <!-- Core plugin JavaScript-->
    <script src="/asset/vendor/jquery-easing/jquery.easing.min.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="/asset/js/sb-admin-2.min.js"></script>
    <!-- owl carousel js -->
    <script src="/asset/js/owl.carousel.min.js"></script>
    <!-- main js -->
    <script src="/asset/js/main.js"></script>
    <script src="/asset/js/detail_produk.js"></script>

    <script>
    function gantiGambar(gambarbayam) {
        // Menghapus path image sesuai ID yang dituju
        document.getElementById(gambarbayam).src = '';

        // Menambahkan path baru setelah gambar diklik
        document.getElementById(gambarbayam).src = '/asset/img/jagung.jpg';

        // Optional: Ubah atribut lain jika diperlukan
        // document.getElementById(targetId).setAttribute('data-hash', '2');
        // document.getElementById(targetId).setAttribute('width', '200px');
        // document.getElementById(targetId).setAttribute('height', '300px');
    }
</script>
</body>

</html>
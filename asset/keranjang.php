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
    <!-- top - bar start -->
    <!-- <div id="top-bar">
        <div class="container">
            <div class="row"> -->
                <!-- top left start -->
                <!-- <div class="col-md-6 top-left">
                    <a href="index.php" class="btn btn-sm btn-primary ">Welcome</a>
                    <a href="keranjang.php">Ada 4 items di keranjang</a>
                </div> -->
                <!-- top left end -->
                <!-- top right start -->
                <!-- <div class="col-md-6 top-right">
                    <ul class="top-menu">
                        <li><a href="daftar.php">Daftar</a></li>
                        <li><a href="akun.php">Akun Saya</a></li>
                        <li><a href="keranjang.php">Keranjang Saya</a></li>
                        <li><a href="login.php">Login</a></li>
                    </ul>
                </div> -->
                <!-- top right end -->
            <!-- </div>
        </div>
    </div> -->
    <!-- top - bar end -->

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

    <!-- content keranjang start -->
    <div id="content">
        <div class="container">
            <div class="row">
                <!-- breadcumb start -->
                <div class="col-md-12">
                    <ul class="breadcrumb">
                        <li><a href="index.php">Home</a></li>
                        <li>Keranjang</li>
                    </ul>
                </div>
                <!-- breadcumb end -->
                <!-- start card box -->
                <div class="col-md-12 keranjang">
                    <div class="card-box">
                        <h2>Keranjang Belanja</h2>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Produk</th>
                                        <th>Jumlah</th>
                                        <th>Harga</th>
                                        <th>Subtotal</th>
                                        <th>Option</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><img src="/asset/img/bayam.jpg" class="img-responsive" width="100"></td>
                                        <td>Nama Produk</td>
                                        <td><input type="number" name="jumlah" min="1" value="1" class="form-control form-control-sm" style="width: 200px;"></td>
                                        <td>Rp.1500</td>
                                        <td>
                                            <a href="update_keranjang.php" class="btn btn-sm btn-warning">
                                                <i class="fas fa-redo-alt"></i>
                                            </a>
                                            <a href="hapus_keranjang.php" class="btn btn-sm btn-danger">
                                                <i class="fas fa-trash"></i>
                                            </a>
                                        </td>
                                    </tr>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th colspan="3">Total</th>
                                        <th>Rp.1500</th>
                                        <th></th>
                                    </tr>
                                </tfoot>

                            </table>
                        </div>
                    </div>
                    <!-- end card-box -->
                    <div class="card-footer">
                        <div class="row">
                            <div class="col">
                                <a href="produk.php" class="btn btn-light">
                                    <i class="fas fa-chevron-left"></i> Lanjut Belanja
                                </a>
                            </div>
                            <div class="col-text-right">
                                <a href="checkout.php" class="btn btn-primary">
                                    checkout <i class="fas fa-chevron-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- content keranjang end -->

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
</body>

</html>
<?php
$server = "localhost";
$username = "root";
$password = "";
$db = "mlijo";

// $server = "mifa.myhost.id";
// $username = "mifamyho_mlijo";
// $password = "WSImif2023";
// $db = "mifamyho_mlijo";
$koneksi = mysqli_connect($server, $username, $password, $db);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST["simpan"])) {
        $id_kategori_produk = $_POST["id_kategori_produk"];
        $nama_produk = $_POST['nama_produk'];
        $harga_produk = $_POST['harga_produk'];
        $deskripsi_produk = $_POST['deskripsi_produk'];
        $stok_produk = $_POST['stok_produk'];
        $foto = $_FILES['foto_produk'];
        $foto_produk = $foto['name'];
        $id_produk = $_POST['id_produk'];

        $fotoFileName = '';

        $targetDirectory =__DIR__ . '/../../asset/img/';
        $fotoFileName = $targetDirectory . basename($foto_produk);
        

        if ($foto['size'] > 0) {
            // Tambahkan ini untuk debugging
            var_dump($targetDirectory, $fotoFileName, $foto['tmp_name']);

            if (move_uploaded_file($foto['tmp_name'], $fotoFileName)) 
            {
                // File berhasil diupload

                // Hapus foto lama jika ada
                $queryHapusFotoLama = "SELECT foto_produk FROM produk WHERE id_produk = '" . $id_produk . "'";
                $resultHapusFotoLama = mysqli_query($koneksi, $queryHapusFotoLama);
                $rowHapusFotoLama = mysqli_fetch_assoc($resultHapusFotoLama);

                if ($rowHapusFotoLama['foto_produk'] != "") {
                    $pathFotoLama = $targetDirectory . $rowHapusFotoLama['foto_produk'];
                    if (file_exists($pathFotoLama)) {
                        unlink($pathFotoLama);
                    }
                }

            } else {
                echo "Error uploading file.";
                exit();
            }
        }

        // var_dump($id_kategori_produk, $nama_produk, $harga_produk, $deskripsi_produk, $stok_produk, $foto_produk);

        $query = "UPDATE produk SET 
            id_kategori_produk = '" . $id_kategori_produk . "', 
            nama_produk = '" . $nama_produk . "', 
            harga_produk = '" . $harga_produk . "', 
            deskripsi_produk = '" . $deskripsi_produk . "', 
            stok = '" . $stok_produk . "', 
            foto_produk = '" . $foto_produk . "'
          WHERE id_produk = '" . $id_produk . "'";

        // var_dump($query);

        $result = mysqli_query($koneksi, $query);

        if ($result) {
            echo "<script>alert('data berhasil disimpan');</script>";
            echo "<script>location='../index.php?produk ';</script>";
        } else {
            echo "Error: " . mysqli_error($koneksi);
        }
    }
}
?>
<?php
// $server = "localhost";
// $username = "root";
// $password = "";
// $db = "mlijo";

$server = "mifa.myhost.id";
$username = "mifamyho_mlijo";
$password = "WSImif2023";
$db = "mifamyho_mlijo";
$koneksi = mysqli_connect($server, $username, $password, $db);

if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $fullname = $_POST['name'];
    $username = $_POST['usera'];
    $password = $_POST['pass'];
    $email = $_POST['email'];
    $foto = $_FILES['foto'];
    $fotoName = $foto['name'];

    $fotoFileName = '';

    $targetDirectory =__DIR__ . '/../../asset/img/';
    $fotoFileName = $targetDirectory . basename($fotoName);

    if ($foto['size'] > 0) {
        // Tambahkan ini untuk debugging
        var_dump($targetDirectory, $fotoFileName, $foto['tmp_name']);

        if (move_uploaded_file($foto['tmp_name'], $fotoFileName)) {
            // File berhasil diupload

            // Hapus foto lama jika ada
            $queryHapusFotoLama = "SELECT foto_admin FROM  `admin` WHERE id_admin = '" . $id . "'";
            $resultHapusFotoLama = mysqli_query($koneksi, $queryHapusFotoLama);
            $rowHapusFotoLama = mysqli_fetch_assoc($resultHapusFotoLama);

            if ($rowHapusFotoLama['foto_admin'] != "") {
                $pathFotoLama = $targetDirectory . $rowHapusFotoLama['foto_admin'];
                if (file_exists($pathFotoLama)) {
                    unlink($pathFotoLama);
                }
            }
        } else {
            echo "Error uploading file.";
            exit();
        }
    }


    // Perbaiki query UPDATE dan jalankan langsung di $koneksi
    $query = "UPDATE admin SET nama_lengkap='$fullname', username='$username', password='$password', email='$email', foto_admin='$fotoName' WHERE id_admin='$id'";
    $result = $koneksi->query($query);

    // $query = "UPDATE admin SET nama_lengkap='$fullname', username='$username', password='$password', email='$email', foto_admin='$fotoFileName' WHERE id_admin='$id'";

    $query = ("UPDATE admin SET nama_lengkap='$fullname', username='$username', password='$password', email='$email', foto_admin='$fotoName' WHERE id_admin='$id'");
    $result = mysqli_query($koneksi, $query);



    if ($result) {
        header('Location: ../index.php?admin');
    } else {
        echo "Error: " . mysqli_error($koneksi);
    }
}
?>

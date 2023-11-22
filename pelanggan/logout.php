<?php
session_start();
session_destroy();

echo "<script>alert('Anda telah keluar');</script>";
echo "<script>window.location.href = '/login user/index.php';</script>";
?>

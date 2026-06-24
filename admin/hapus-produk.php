<?php
session_start();

if (!isset($_SESSION['id']) || $_SESSION['id'] != 12) {
    header("Location: ../login.php");
    exit();
}


include "../koneksi.php";


if ($delete) {
    header("Location: adminproduk.php");
}


?>

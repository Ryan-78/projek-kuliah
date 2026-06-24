<?php
session_start();
    if (!isset($_SESSION['id']) || $_SESSION['id'] != 12) {
        header("Location: ../login.php");
    }
    include("../koneksi.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="icon" type="image/x-icon" href="../gambar/logo.png">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ambadrink</title>
    
</nav>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../style-home.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</head>

<body>

    <header>
        <div class="container">
            <img src="../gambar/logo.png" alt="ambadrink2">
            <h2>AMBA <span>DRINKS</span></h2>
        </div>

        <nav class="main-nav">
            <ul>
                <li><a href="../index.php">Home</a></li>
                <li><a href="../produk.php">Product</a></li>
                <li><a href="../contact.php">Contact</a></li>
               
                
            </ul>
            <i class="bi bi-list icon"></i>
        </nav>
    </header>

    <div class="container my-5">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h2>Manajemen Produk (Admin)</h2>
            <!-- Tombol CREATE -->
            <a href="tambah-produk.php" class="btn btn-success"><i class="bi bi-plus-circle me-2"></i>Tambah Produk</a>
        </div>

        <!-- TABEL READ, UPDATE, DELETE -->
        <table class="table table-bordered align-middle text-center">
            <thead class="table-dark">
                <tr>
                    <th>Foto</th>
                    <th>Nama Produk</th>
                    <th>Harga</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><img src="../gambar/logo.png" width="50"></td>
                    <td>Nama Minuman Contoh</td>
                    <td>Rp 15.000</td>
                    <td>
                        <!-- Tombol UPDATE -->
                        <a href="edit-produk.php?id=1" class="btn btn-warning btn-sm text-white">Edit</a>
                        <!-- Tombol DELETE -->
                        <a href="hapus-produk.php?id=1" class="btn btn-danger btn-sm" onclick="return confirm('Yakin hapus?')">Hapus</a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    

</body>

<?php
session_start();

if (!isset($_SESSION['id']) || $_SESSION['id'] != 12) {
    header("Location: ../login.php");
    exit();
}


include "../koneksi.php";


if (isset($_POST['simpan'])) {
    // Ambil data dari form HTML
    $nama      = $_POST['nama_produk'];
    $deskripsi = $_POST['deskripsi'];
    $harga     = $_POST['harga'];

    
    $query = "INSERT INTO produk (nama_produk, deskripsi, harga) VALUES ('$nama', '$deskripsi', '$harga')";
    
    
    if (mysqli_query($koneksi, $query)) {
        echo "<script>
                alert('Produk berhasil ditambahkan!');
                window.location='produk.php'; 
              </script>";
    } else {
        echo "Gagal menyimpan: " . mysqli_error($koneksi);
    }
}


?>
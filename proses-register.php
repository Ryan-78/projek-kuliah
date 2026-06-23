<?php

include "koneksi.php";

if (isset($_POST['register'])) {

    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $konfirmasi = $_POST['konfirmasi'];

    // Cek password
    if ($password != $konfirmasi) {

        echo "<script>
                alert('Konfirmasi password tidak sama!');
                window.location='register.php';
              </script>";
        exit;
    }

    // Cek email sudah ada atau belum
    $cek = mysqli_query($conn, "SELECT * FROM users WHERE email='$email'");

    if (mysqli_num_rows($cek) > 0) {

        echo "<script>
                alert('Email sudah digunakan!');
                window.location='register.php';
              </script>";
        exit;
    }

    // Enkripsi password
    $password = password_hash($password, PASSWORD_DEFAULT);

    // Simpan ke database
    $query = mysqli_query($conn, "INSERT INTO users(nama,email,password)
                                  VALUES('$nama','$email','$password')");

    if ($query) {

        echo "<script>
                alert('Registrasi berhasil!');
                window.location='login.php';
              </script>";

    } else {

        echo "<script>
                alert('Registrasi gagal!');
                window.location='register.php';
              </script>";

    }

}

?>
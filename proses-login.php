<?php

session_start();
include "koneksi.php";

if (isset($_POST['login'])) {

    $email = $_POST['email'];
    $password = $_POST['password'];

    $query = mysqli_query($conn, "SELECT * FROM users WHERE email='$email'");

    if (mysqli_num_rows($query) == 1) {

        $user = mysqli_fetch_assoc($query);

        if (password_verify($password, $user['password'])) {

            $_SESSION['id'] = $user['id'];
            $_SESSION['nama'] = $user['nama'];
            $_SESSION['email'] = $user['email'];

            if ($user['id'] == '12') {
                header("Location: admin/adminproduk.php");
                exit();
            }
            

            header("Location: index.php");
            exit();
        }
        
        else {

            echo "<script>
                    alert('Password salah!');
                    window.location='login.php';
                  </script>";

        }

    } else {

        echo "<script>
                alert('Email tidak ditemukan!');
                window.location='login.php';
              </script>";

    }

}

?>
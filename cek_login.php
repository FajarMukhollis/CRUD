<?php

    require 'koneksi.php';

    $pass = md5($_POST['password']);
    $username = mysqli_escape_string($conn, $_POST['username']);
    $password = mysqli_escape_string($conn, $pass);
    $nama = mysqli_escape_string($conn, $_POST['Nama_Lengkap']); 

    //cek username
    $cek_user = mysqli_query($conn, "SELECT * FROM mahasiswa WHERE username= '$username' ");
    $user_valid = mysqli_fetch_array($cek_user);
    //test jika username terdaftar
    if($user_valid) {
        //test password
        if($password == $user_valid['password']) {
            session_start();
            $_SESSION['username'] = $user_valid['username'];
            $_SESSION['Nama_Lengkap'] = $user_valid['Nama_Lengkap'];
            header('location: tabel.php');
        } else {
            echo "<script>
            alert('LOGIN GAGAL, USERNAME DAN PASSWORD TIDAK SESUAI');
            document.location='index.php';
            </script>";
        }
    } else {
        echo "<script>
        alert('LOGIN GAGAL, USERNAME DAN PASSWORD TIDAK TERDAFTAR');
        document.location='index.php';
        </script>";
    }

?>
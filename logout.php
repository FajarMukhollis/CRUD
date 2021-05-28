<?php
    require 'koneksi.php';

        session_start();
        unset($_SESSION['username']);
        unset($_SESSION['password']);
        unset($_SESSION['Nama_Lengkap']);

        session_destroy();
        echo "<script>
        alert('ANDA TELAH KELUAR DARI HALAMAN');
        document.location='index.php';
        </script>";
?>
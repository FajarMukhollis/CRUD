<?php
    //connect to database
    require 'koneksi.php';

    //jika tombol simpan diklick
    if(isset($_POST['Simpan'])) {
        $npm = $_POST['npm'];
        $nama = $_POST['Nama_Lengkap'];
        $email=$_POST['email'];
        $usernamae=$_POST['username'];
        $password = $_POST['password'];
        $password = md5($password);
        //data akan di edit atau disimpan baru
        if($_GET['hal'] == "edit") {
            $edit=mysqli_query($conn," UPDATE mahasiswa set NPM = '$npm', Nama_Lengkap = '$nama',
                                        Email = '$email', username = '$usernamae', password = '$password'
                                        WHERE No_id  = '$_GET[id]' ");

            if($edit) {
                echo "<script>
                        alert('SUKSES EDIT Data !!!');
                        document.location='tabel.php';
                    </script>";
            } else {
                echo "<script>
                        alert('GAGAL EDIT Data !!!');
                        document.location='tabel.php';
                    </script>";
            }

        }
        //simpan data
        else {
            $simpan=mysqli_query($conn,"INSERT INTO mahasiswa (NPM, Nama_Lengkap, Email, username, password) VALUES
            ('$npm','$nama','$email','$usernamae','".md5($password)."')");

            if($simpan) {
                echo "<script>
                        alert('SUKSES Menyimpan Data !!!');
                        document.location='tabel.php';
                    </script>";
            } else {
                echo "<script>
                        alert('GAGAL Menyimpan Data !!!');
                        document.location='tabel.php';
                    </script>";
            }
        }
    }
    //jika tombol Edit / Hapus di klik
    if(isset($_GET['hal'])) {
        //Pengujian jika edit Data
        if($_GET['hal']=="edit") {
            $show = mysqli_query($conn,"SELECT * FROM mahasiswa WHERE No_id = '$_GET[id]' ");
            $data = mysqli_fetch_array($show);
            if($data) {
                $vnpm = $data['NPM'];
                $vnl = $data['Nama_Lengkap'];
                $vemail = $data['Email'];
                $vuser = $data['username'];
                $vpass = $data['password'];
            }
        }
        //hapus data
        else if($_GET['hal']=="hapus") {
            $hapus = mysqli_query($conn, "DELETE FROM mahasiswa WHERE No_id  = '$_GET[id]' ");
            if($hapus) {
                echo "<script>
                        alert('SUKSES Menghapus Data !!!');
                        document.location='tabel.php';
                    </script>";
            }
        }
    }
?>
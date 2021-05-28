<?php
    require 'koneksi.php';
    require 'crud.php';
    session_start();
    //untuk menghendel agar tidak masuk ke file tabel secara langsung
    if(empty($_SESSION['username'])) {
        echo "<script> alert('HARAP MELAKUKAN LOGIN TERLEBIH DAHULU !!!');
                        document.location='index.php';
            </script>";
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link href="style2.css" rel="stylesheet" type="text/css">
    <title class="bi bi-house">DATA MAHASISWA</title>
</head>

<nav class="navbar sticky-top navbar-expand-lg navbar navbar-dark bg-primary navbar-custom shadow ">
  <div class="container-fluid">
  <nav class="navbar navbar navbar-dark bg-primary ">
  <span class="navbar-brand mb-0 h1"><i class="bi bi-person-circle"></i> <?= $_SESSION['Nama_Lengkap'] ?></span>
</nav>
    <div class="collapse navbar-collapse" id="navbarNav">
        
      <ul class="navbar-nav ms-auto">
      
        <li class="nav-item">
       
          <a type="submit" onclick="return confirm('Logout Account ?')" class="btn btn-danger" href="logout.php"></i> Logout</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<body style="background-color: #e9f3f5; margin left">
    <div class="container">
        <h1 class="text-center mt-5">DAFTAR DATA MAHASISWA</h1>

        <!-- awal tabel -->
        <div style="">
        <div class="card mt-3" style="width: 1100px;">
        <div class="card-header bg-primary text-white">DATA MAHASISWA</div>
        <div class="card-body">
            <table class="table table-bordered table-striped">
                <tr>
                    <th>No</th>
                    <th>NPM</th>
                    <th>Nama Lengkap</th>
                    <th>Email</th>
                    <th>Username</th>
                    <th>Password</th>
                    <th>Aksi</th>
                </tr>
                <?php
                    $no = 1;
                    $show=mysqli_query($conn, "SELECT * FROM mahasiswa ORDER BY No_id asc");
                    while($data=mysqli_fetch_array($show)) :
                ?>
                <tr>
                    <td><?php echo $no++ ?></td>
                    <td><?php echo $data['NPM'] ?></td>
                    <td><?php echo $data['Nama_Lengkap']?></td>
                    <td><?php echo $data['Email']?></td>
                    <td><?php echo $data['username']?></td>
                    <td class="hide-text"><?php echo $data['password']?></td>
                    <td>
                        <a href="tabel.php?hal=edit&id=<?=$data['No_id']?>" class="btn btn-warning"><i class="bi bi-pencil-square"> Edit </i></a>
                        <a href="tabel.php?hal=hapus&id=<?=$data['No_id']?>" onclick="return confirm('Hapus Data Ini')" class="btn btn-danger"> <i class="bi bi-trash-fill"> Hapus </i></a>
                    </td>
                </tr>
                <?php endwhile; ?>
            </table> 
        </div>
        </div>
        </div>
        <!-- akhir tabel -->

        <!-- awal form -->
        <div style="" >
        <div class="card mt-3" style="width: 350px;">
        <div class="card-header bg-primary text-white text-center">Form Input Data Mahasiswa</div>
            <div class="card-body">
               <form action="" method="post">
                    <div class="form-group">
                        <label>NPM</label>
                        <input type="text" name="npm" value="<?=@$vnpm?>" class="form-control mt-2" required>
                    </div>
                    <div class="form-group">
                        <label>Nama Lengkap</label>
                        <input type="text" name="Nama_Lengkap" value="<?=@$vnl?>" class="form-control mt-2" required>
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="text" name="email" value="<?=@$vemail?>" class="form-control mt-2" required>
                    </div>
                    <div class="form-group">
                        <label>Username</label>
                        <input type="text" name="username" value="<?=@$vuser?>" class="form-control mt-2" required>
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" name="password" value="<?=@$vpass?>" class="form-control mt-2" required>
                    </div>
                    <button type="submit" class="btn btn-success mt-2" name="Simpan">Simpan</button>

               </form>
            </div>
        </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.min.js" integrity="sha384-lpyLfhYuitXl2zRZ5Bn2fqnhNAKOAaM/0Kr9laMspuaMiZfGmfwRNFh8HlMy49eQ" crossorigin="anonymous"></script>
</body>
</html>
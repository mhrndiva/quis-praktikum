<?php
include_once("koneksi.php");

//mengambil semua data dari database
$result = mysqli_query($mysqli, "SELECT * FROM absensi");

if (isset($_POST['Submit'])){
    $Nama = $_POST['Nama'];
    $jurusan = $_POST['jurusan'];
    $npm = $_POST['npm'];

    // Insert data ke database
    $add = mysqli_query($mysqli, "INSERT INTO absensi(Nama,jurusan,npm,waktu_kehadiran) VALUE('$Nama', '$jurusan', '$npm', NOW())");
}
?>

<html>
<title>Absensi Mahasiswa</title>
<head>
    <!-- link bootstrap -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
  <body>
<nav class="navbar navbar-dark bg-dark">
    <div class="container-fluid">
       <span class="navbar-brand mb-0 h1">ABSENSI MAHASISWA</span>
    </div>
</nav>

<div class="bg-sucess p-2 text-dark bg-opacity-10">
    <h1 class="p-4 text-center">ABSENSI KEMAHASISWAAN</h1>
    <div class="container">
        <form action="" method="post" name="form_absen">
            <div class="col-md-6 offset-md-3">
                <div class="mb-3">
                    <label class="form-label">Nama</label>
                    <input type="text" class="form-control" name="nam" placeholder="Masukan Nama">
                </div>
                <div class="mb-3">
                    <label class="form-label">Jurusan</label>
                    <input type="text" class="form-control" name="jurusan" placeholder="Masukan Jurusan">
                </div>
                <div class="mb-3">
                    <label class="form-label">NPM</label>
                    <input type="text" class="form-control" name="jurusan" placeholder="Masukan NPM">
                </div>
            </div>
            <div class="text-center">
                <button type="reset" class="btn btn-denger" name="Reset">Reset</button>
                <button type="submit" class="btn btn-primary" name="Submit">Hadir</button>
                <button type="submit" class="btn btn-primary" name="hapus"><a href="hapus.php"> Hapus</button></a>
            </div>
        </form>

        <table class="my-5 table table-striped">
            <tr class="table-dark">
                <th>Nama</th>
                <th>Jurusan</th>
                <th>NPM</th>
                <th>Waktu_Kehadiran</th>
            </tr>
            </table>
    
            <?php
            while ($r = mysqli_fetch_array($result)){
                ?>
                <tr class="table-pimary">
                    <td><?php echo $r['Nama']; ?></td>
                    <td><?php echo $r['jurusan']; ?></td>
                    <td><?php echo $r['npm']; ?></td>
                    <td><?php echo $r['waktu_kehadiran']; ?></td>
                </tr>
                <?php
            }
            ?>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
        </table>
    </div>
</div>
  </body>  
</html>
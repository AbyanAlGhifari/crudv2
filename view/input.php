<?php
include '../config.php';

$nis        = "";
$nama       = "";
$alamat     = "";
$jurusan    = "";
$error      = "";
$sukses     = "";

if (isset($_POST['simpan'])) { //untuk create
    $nis        = $_POST['nis'];
    $nama       = $_POST['nama'];
    $alamat     = $_POST['alamat'];
    $jurusan    = $_POST['jurusan'];

    if ($nis && $nama && $alamat && $jurusan) {

        $sql1   = "insert into siswa(nis,nama,alamat,jurusan) values ('$nis','$nama','$alamat','$jurusan')";
        $q1     = mysqli_query($koneksi, $sql1);
        if ($q1) {
            $sukses     = "Berhasil memasukan data baru";
        } else {
            $error      = "Gagal memasukan data";
        }
    } else {
        $error = "Silahkan masukkan semua data";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Data</title>
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <style>
        .mx-auto {
            width: 800px
        }
    </style>
</head>

<body>
    <div class="mx-auto">
        <!-- untuk memasukan data -->
        <div class="card">
            <div class="card-header">
                Create
            </div>
            <div class="card-body">
                <?php
                if ($error) {
                ?>
                    <div class="alert alert-danger" role="alert">
                        <?php echo $error ?>
                    </div>
                <?php
                }
                ?>
                <?php
                if ($sukses) {
                ?>
                    <div class="alert alert-success" role="alert">
                        <?php echo $sukses ?>
                    </div>
                <?php
                }
                ?>
                <form action="" method="POST">
                    <div class="mb-3 row">
                        <label for="nis" class="col-sm-2 col-form-label">NIS</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="nis" name="nis" value="<?php echo $nis ?>">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="nama" name="nama" value="<?php echo $nama ?>">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="alamat" name="alamat" value="<?php echo $alamat ?>">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="jurusan" class="col-sm-2 col-form-label">Jurusan</label>
                        <div class="col-sm-10">
                            <select class="form-control" name="jurusan" id="jurusan">
                                <option value="">- Pilih Jurusan -</option>
                                <option value="RPL" <?php if ($jurusan == "RPL") echo "selected" ?>>Rekayasa Perangkat Lunak</option>
                                <option value="TO" <?php if ($jurusan == "TO") echo "selected" ?>>Teknik Ototronik</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-12">
                        <input type="submit" name="simpan" value="Simpan Data" class="btn btn-primary" />
                        <a href="index.php"><button type="button" class="btn btn-warning">Kembali</button></a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>
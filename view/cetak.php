<!DOCTYPE html>
<html>
    <head>
        <link href="../assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <title></title>
</head>
<body>
    <center>
        <h2>Daftar Siswa</h2>
        <h>__________________________________________________________</h3>

</center>

<?php
include '../config.php';
?>

<table class="table" >
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">NIS</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Alamat</th>
                            <th scope="col">Jurusan</th>
                        </tr>
                    <tbody>
                        <?php
                        $sql2   = "select * from siswa order by nis asc";
                        $q2     = mysqli_query($koneksi, $sql2);
                        $urut   = 1;
                        while ($r2 = mysqli_fetch_array($q2)) {
                            $id         = $r2['id'];
                            $nis        = $r2['nis'];
                            $nama       = $r2['nama'];
                            $alamat     = $r2['alamat'];
                            $jurusan    = $r2['jurusan'];

                        ?>
                            <tr>
                                <th scope="row"><?php echo $urut++ ?></th>
                                <td scope="row"><?php echo $nis ?></td>
                                <td scope="row"><?php echo $nama ?></td>
                                <td scope="row"><?php echo $alamat ?></td>
                                <td scope="row"><?php echo $jurusan ?></td>
                            </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                    </thead>
                </table>
<script>
    window.print();
    </script>
    </body>
    </html>
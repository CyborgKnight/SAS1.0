<?php
session_start();
include "connect_rekap.php";
$query = mysqli_query($conn, "SELECT * FROM sakit") or die('gagal tampil');

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/css/bootstrap.min.css" />
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <title>Rekap Sakit</title>
</head>

<body>
    <br>
    <div class="card">
        <div class="card-header d-flex align-items-center">
            <h3>Rekap Sakit</h3>
        </div>
        <div class="container mt-4">
            <!-- form filter data berdasarkan range tanggal  -->
            <form action="" method="get">
                <div class="row g-3 align-items-center">
                    <div class="col-auto">
                        <label class="col-form-label"></label>
                    </div>
                    <div class="col-auto">
                        <input type="date" class="form-control" name="dari" required>
                    </div>
                    <div class="col-auto">
                        -
                    </div>
                    <div class="col-auto">
                        <input type="date" class="form-control" name="ke" required>
                    </div>
                    <div class="col-auto">
                        <button class="btn btn-primary" type="submit">Seach</button>
                    </div>
                </div>
            </form>
            <br>

            <div class="card">
                <div class="card-body">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <td>No</td>
                                <td>Name</td>
                                <td>Nis</td>
                                <td>Class</td>
                                <td>Gender</td>
                                <td>Deriction</td>
                                <!-- <td>Picture</td> -->
                                <td>Date</td>
                                <td>Edit</td>
                            </tr>
                        </thead>
                        <?php
                        //jika tanggal dari dan tanggal ke ada maka
                        if (isset($_GET['dari']) && isset($_GET['ke'])) {
                            // tampilkan data yang sesuai dengan range tanggal yang dicari 
                            $data = mysqli_query($conn, "SELECT * FROM sakit WHERE tgl_input BETWEEN '" . $_GET['dari'] . "' and '" . $_GET['ke'] . "'");
                        } else {
                            //jika tidak ada tanggal dari dan tanggal ke maka tampilkan seluruh data
                            $data = mysqli_query($conn, "select * from sakit");
                        }
                        // $no digunakan sebagai penomoran 
                        $no = 1;
                        // while digunakan sebagai perulangan data 
                        while ($row = mysqli_fetch_array($data)) {
                        ?>
                            <tr>
                                <td><?= $no++; ?></td>
                                <td><?= $row['nama']; ?></td>
                                <td><?= $row['nis']; ?></td>
                                <td><?= $row['kelas']; ?></td>
                                <td><?= $row['jenis_kelamin']; ?></td>
                                <td><?= $row['jurusan']; ?></td>
                                <!-- <td><img src="images/<?= $row['gambar'] ?>" width="80"></td> -->
                                <td><?= $row['tgl_input']; ?></td>
                                <td><a href="edit_rekap_sakit.php?id=<?= $row["id"]; ?>">Edit</a> | <a href="hapus.php?id=<?= $row["id"]; ?>" onclick="return confirm('yakin mau di hapus?')">Hapus</a> </td>
                            </tr>
                        <?php } ?>
                    </table>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
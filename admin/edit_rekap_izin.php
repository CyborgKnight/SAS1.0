<?php
include "connect.php";

$id = $_GET["id"];
$query = mysqli_query($conn, "SELECT * FROM izin WHERE id = $id");
$row = mysqli_fetch_assoc($query);

if (isset($_POST["submit"])) {
    $nama           = $_POST["nama"];
    $nis            = $_POST["nis"];
    $kelas          = $_POST["kelas"];
    $jenis_kelamin  = $_POST["jenis_kelamin"];
    $jurusan        = $_POST["jurusan"];
    $keterangan     = $_POST["keterangan"];
    $tgl_input      = $_POST["tgl_input"];
    $submit         = $_POST["submit"];

    $query = mysqli_query($conn, "UPDATE izin SET nama= '$nama', nis= '$nis', kelas= '$kelas', jenis_kelamin= '$jenis_kelamin', keterangan= '$keterangan', tgl_input= '$tgl_input', submit ='$submit'  WHERE id = $id");

    echo "<script>
 alert('Added Succescfully')
 window.location.href = 'halaman_admin.php' 
</script>";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>edit rekap izin</title>
    <link rel="stylesheet" type="text/css" href="css/css/bootstrap.min.css" />
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <link rel="stylesheet" href="../css1/siswa.css" />
</head>

<body>
    <div class="card">
        <div class="card-header d-flex align-items-center">
            <h3>Edit Rekap Izin</h3>
        </div>
        <div class="card-body">
            <form class="form-horizontal" action="" method="post">
                <table cellpadding="3">
                    <tr>
                        <td>Nama Peserta Didik </td>
                        <td>:</td>
                        <td><input type="text" class="form-control" name="nama" placeholder="Nama lengkap" autocomplete="off" value="<?= $row['nama'] ?>"></td>
                    </tr>
                    <tr>
                        <td>NIS</td>
                        <td>:</td>
                        <td><input name="nis" type="number" class="form-control" placeholder="NIS" onKeyPress="if(this.value.length==6) return false;" autocomplete="off" value="<?= $row['nis'] ?>" required> </td>
                    </tr>
                    <tr>
                        <td>Kelas Siswa</td>
                        <td>:</td>
                        <td>
                            <select class="form-select" name="kelas" value="<?= $row['kelas'] ?>" required>
                                <option value="X" disabled>X</option>
                                <option value="XI" disabled>XI</option>
                                <option value="XII">XII</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>Jenis Kelamin</td>
                        <td>:</td>
                        <td>
                            <select class="form-select" name="jenis_kelamin" value="<?= $row['jenis_kelamin'] ?>" required>
                                <option value="laki-laki">Laki-laki</option>
                                <option value="perempuan">Perempuan</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>Jurusan</td>
                        <td>:</td>
                        <td>
                            <select class="form-select" name="jurusan" value="<?= $row['jurusan'] ?>" required>
                                <option value="rpl">Rekayasa Perangkat Lunak</option>
                                <option value="mm" disabled>Multi Media</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>Deskripsi</td>
                        <td>:</td>
                        <td>
                            <div class="form-floating">
                                <textarea class="form-control" id="floatingTextarea2" name="keterangan" cols="30" style="height: 100px" autocomplete="off" value="<?= $row['keterangan'] ?>" required></textarea>
                                <label for="floatingTextarea2">Alasan Izin...</label>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>Tanggal</td>
                        <td>:</td>
                        <td> <input type="date" name="tgl_input" value="<?= $row['tgl_input'] ?>"> </td>
                    </tr>
                    <br>
                    <tr>
                        <td></td>
                        <td></td>
                        <td><button type="submit" name="submit" class="btn btn-dark" value="submit">Save</button></td>
                    </tr>
            </form>
            </table>
        </div>
    </div>
</body>

</html>
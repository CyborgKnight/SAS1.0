<?php
include('connect.php');

if (isset($_POST["submit"])) {
    $nama           = $_POST["nama"];
    $nis            = $_POST["nis"];
    $kelas          = $_POST["kelas"];
    $jenis_kelamin  = $_POST["jenis_kelamin"];
    $jurusan        = $_POST["jurusan"];
    $keterangan     = $_POST["keterangan"];
    $tgl_input      = $_POST["tgl_input"];
    $submit         = $_POST["submit"];

    $query = mysqli_query($conn, "INSERT INTO `izin` (`id`, `nama`, `nis`, `kelas`, `jenis_kelamin`, `jurusan`, `keterangan`, `tgl_input`) VALUES (NULL, '$nama', '$nis', '$kelas', '$jenis_kelamin', '$jurusan', '$keterangan', '$tgl_input')")  or die('gagal simpan');

    echo "<script>
 alert('Added Succescfully')
 window.location.href = 'halaman_siswa.php' 
</script>";
}



?>
<!DOCTYPE html>
<html>

<head>
    <title>form izin</title>
    <link rel="stylesheet" type="text/css" href="css/css/bootstrap.min.css" />
    <link rel="stylesheet" href="../css1/siswa.css" />
</head>


<body>
    <div class="card">
        <div class="card-header d-flex align-items-center">
            <h3>Form Izin</h3>
        </div>
        <div class="card-body">
            <form class="form-horizontal" action="" method="post">

                <table cellpadding="3">
                    <tr>
                        <td>Nama Peserta Didik </td>
                        <td>:</td>
                        <td><input type="text" class="form-control" name="nama" placeholder="Nama lengkap" autocomplete="off"></td>
                    </tr>
                    <tr>
                        <td>NIS</td>
                        <td>:</td>
                        <td><input name="nis" type="number" class="form-control" placeholder="NIS" onKeyPress="if(this.value.length==6) return false;" autocomplete="off" required> </td>
                    </tr>
                    <tr>
                        <td>Kelas Siswa</td>
                        <td>:</td>
                        <td>
                            <select class="form-select" name="kelas" required>
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
                            <select class="form-select" name="jenis_kelamin" required>
                                <option value="laki-laki">Laki-laki</option>
                                <option value="perempuan">Perempuan</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>Jurusan</td>
                        <td>:</td>
                        <td>
                            <select class="form-select" name="jurusan" required>
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
                                <textarea class="form-control" id="floatingTextarea2" name="keterangan" cols="30" style="height: 100px" autocomplete="off" required></textarea>
                                <label for="floatingTextarea2">Alasan Izin...</label>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>Tanggal</td>
                        <td>:</td>
                        <td> <input type="date" name="tgl_input"> </td>
                    </tr>
                    <br>
                    <tr>
                        <td></td>
                        <td></td>
                        <td><button type="submit" name="submit" class="btn btn-dark">Save</button></td>
                    </tr>
            </form>
            </table>
        </div>
    </div>
</body>

</html>
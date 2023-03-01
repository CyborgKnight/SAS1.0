<?php
require 'functions.php';
//cek tombol submit sudah ditekan
if (isset($_POST["submit"])) {
    if (tambah($_POST) > 0) {
        echo "<script>
              alert('Added Successfully');
              document.location.href = 'halaman_siswa.php';
        </script> ";
    } else {
        echo "<script>
              alert('Failed to add');
              document.location.href = 'halaman_siswa.php';
        </script>";
    }
}
?>
<!DOCTYPE html>
<html>

<head>
    <title>form sakit</title>
    <link rel="stylesheet" type="text/css" href="css/css/bootstrap.min.css" />
    <link rel="stylesheet" href="../css1/siswa.css" />
</head>

</html>

<body>
    <div class="card">
        <div class="card-header d-flex align-items-center">
            <h3>Form Sakit</h3>
        </div>
        <div class="card-body">
            <form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
                <table cellpadding="3">
                    <tr>
                        <td>Nama Peserta Didik </td>
                        <td>:</td>
                        <td><input type="text" class="form-control" name="nama" placeholder="Nama lengkap" autocomplete="off" required></td>
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
                        <td>Jurusan</td>
                        <td>:</td>
                        <td>
                            <select class="form-select" name="jurusan">
                                <option value="rpl">Rekayasa Perangkat Lunak</option>
                                <option value="mm" disabled>Multi Media</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>Jenis Kelamin</td>
                        <td>:</td>
                        <td>
                            <select class="form-select" name="jenis_kelamin">
                                <option value="laki-laki">Laki-laki</option>
                                <option value="perempuan">Perempuan</option>
                            </select>
                        </td>
                    </tr>
                    <!-- <tr>
                        <td>Surat Sakit</td>
                        <td>:</td>
                        <td>
                            <div class="form-group">
                                <input type="file" class="form-control" id="gambar" name="gambar" required>
                            </div>
                        </td>
                    </tr> -->
                    <tr>
                        <td>Tanggal</td>
                        <td>:</td>
                        <td><input type="date" name="tgl_input"></td>
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
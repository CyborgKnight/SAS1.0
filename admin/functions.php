<?php
$conn = mysqli_connect("localhost", "root", "", "db_absen");
//cek koneksi
if (mysqli_connect_errno()) {
    echo "koneksi database gagal : " . mysqli_connect_error();
}
function tambah($data)
{
    global $conn;

    $nama           = htmlspecialchars($data["nama"]);
    $nis            = htmlspecialchars($data["nis"]);
    $kelas          = htmlspecialchars($data["kelas"]);
    $jenis_kelamin  = htmlspecialchars($data["jenis_kelamin"]);
    $jurusan        = htmlspecialchars($data["jurusan"]);
    $tgl_input      = htmlspecialchars($data["tgl_input"]);

    // uplod gambar
    $gambar = upload();
    if (!$gambar) {
        return false;
    }



    $query = "INSERT INTO `sakit` (`id`, `nama`, `nis`, `kelas`, `jenis_kelamin`, `jurusan` ,`gambar`, `tgl_input`) VALUES ('', '$nama', '$nis', '$kelas', '$jenis_kelamin', '$jurusan', '$gambar', '$tgl_input')" or die('gagal simpan');
    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}
function upload()
{
    $namaFile = $_FILES['gambar']['name'];
    $ukuranFile = $_FILES['gambar']['size'];
    $error = $_FILES['gambar']['error'];
    $tmpName = $_FILES['gambar']['tmp_name'];

    //cek apakah tidak ada gambar yg di upload
    if ($error === 4) {
        echo "<script>
              alert('Choose a Picture First');
        </script>";
        return false;
    }

    //cek apakah yang diupload gambar
    $ekstensiGambarValid = ['jpg', 'jpeg', 'png'];
    $ekstensiGambar = explode('.', $namaFile);
    $ekstensiGambar = strtolower(end($ekstensiGambar));
    if (!in_array($ekstensiGambar, $ekstensiGambarValid)) {
        echo "<script>
        alert('What you Uploaded is not an Image');
      </script>";
        return false;
    }

    // cek jika ukuran terlalu besar
    if ($ukuranFile > 5000000) {
        echo "<script>
    alert('File Size is to Big');
    </script>";
        return false;
    }

    //lolos pengecekan,gambar siap di upload
    // generate nama gambar foto baru
    $namaFileBaru = uniqid();
    $namaFileBaru .= ".";
    $namaFileBaru .= $ekstensiGambar;

    move_uploaded_file($tmpName, 'images/' . $namaFileBaru);

    return $namaFileBaru;
}

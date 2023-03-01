<?php
include "connect.php";

$id = $_GET["id"];

if (isset($id)) {
  global $conn;

  $query = mysqli_query($conn, "DELETE FROM izin WHERE id = $id");
  $query = mysqli_query($conn, "DELETE FROM masuk WHERE id = $id");
  $query = mysqli_query($conn, "DELETE FROM sakit WHERE id = $id");

  echo "<script>
    alert('Berhasil di hapus!')
    window.location.href = 'dashboard.php' 
  </script>";
}

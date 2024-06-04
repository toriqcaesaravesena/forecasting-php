<?php include "connection.php";
if (isset($_POST["simpan"])) {

  $tahun = $_POST["tahun"];
  $jumlah = $_POST["jumlah"];
  $sql = mysqli_query($db, "INSERT INTO pmb VALUES (null, '$tahun', '$jumlah')") or
  die(mysqli_error($db));
  if($sql) {
    echo"<script>alert('Berhasil menambahkan data'); window.location='./';</script>";
  }
}
<?php
include "../config/koneksi.php";
$id_pengaduan = $_POST['id_pengaduan'];
$delete = mysqli_query($koneksi, "DELETE FROM pengaduan WHERE id_pengaduan = '$id_pengaduan'");

header("Location: index.php");
?>
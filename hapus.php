<?php
include("koneksi.php");

$id=$_GET['id'];

mysqli_query($db,"DELETE FROM tb_jamaah WHERE id_jamaah='$id'");
mysqli_query($db,"DELETE FROM tb_paket WHERE id_paket='$id'");

header("location:tampil.php?sukses");
?>
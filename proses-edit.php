<?php
include("koneksi.php");
if(isset($_POST['edit'])){
    $n=$_POST['nama'];
    $almt=$_POST['alamat'];
    $jk=$_POST['jk'];
    $npak=$_POST['np'];
    $t=$_POST['tujuan'];
    $b=$_POST['berangkat'];
    $id=$_POST['id'];

    $sql="UPDATE tb_jamaah SET nama_jamaah='$n', alamat='$almt', jenis_kelamin='$jk' WHERE id_jamaah='$id'";
    $query=mysqli_query($db, $sql);

    $sql="UPDATE tb_paket SET nama_paket='$npak', tujuan='$t', tgl_keberangkatan='$b' WHERE id_paket='$id'";
    $query=mysqli_query($db, $sql);

    if($query){
        header("location:tampil.php?sukses");
    }else{
        header("location:tampil.php?gagal");
    }

}
?>
<?php
include("koneksi.php");
if(isset($_POST['tambah'])){
    $n=$_POST['nama'];
    $almt=$_POST['alamat'];
    $jk=$_POST['jk'];
    $npak=$_POST['np'];
    $t=$_POST['tujuan'];
    $b=$_POST['berangkat'];

    $sql="INSERT INTO tb_paket(nama_paket,tujuan,tgl_keberangkatan)
    VALUES ('$npak','$t','$b')";
    $query=mysqli_query($db,$sql);

    $sql="SELECT max(id_paket)AS id FROM tb_paket LIMIT 1";
    $query=mysqli_query($db,$sql);

    $data=mysqli_fetch_array($query);
    $i=$data['id'];

    $sql="INSERT INTO tb_jamaah(nama_jamaah,alamat,jenis_kelamin,id_paket)
    VALUES ('$n','$almt','$jk','$i')";
    $query=mysqli_query($db,$sql);

    if($query){
        header("location:tampil.php?sukses");
    }


}
?>
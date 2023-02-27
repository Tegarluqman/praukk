<?php
include("koneksi.php");
 if(!isset($_POST['id'])){
    ("location:tampil.php");
 }

 $id=$_GET['id'];
 $query=mysqli_query($db,"SELECT * FROM tb_jamaah INNER JOIN tb_paket ON tb_jamaah.id_paket = tb_paket.id_paket 
 where tb_jamaah.id_paket='$id'");
 $data=mysqli_fetch_assoc($query);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<center><h1>FORM TAMBAH</h1></center>
    <form action="proses-edit.php" method="POST">
        <fieldset>
        <p>
                <input type="hidden" name="id" value="<?php echo $data['id_jamaah']?>">
</p>
            <p>
                <label for=nama_jamaah>Nama Jamaah:</label>
                <input type="text" name="nama" value="<?php echo $data['nama_jamaah']?>">
</p>
<p>
                <label for=alamat>Alamat:</label>
                <textarea name="alamat" ><?php echo $data['alamat']?></textarea>
</p>
<p>
                <label for=jenis_kelamin>Jenis Kelamin:</label>
                <input type="radio"  name="jk" value="laki-laki"<?php echo $data['jenis_kelamin']?>>laki-laki
                <input type="radio"  name="jk" value="perempuan"<?php echo $data['jenis_kelamin']?>>perempuan
</p>
<p>

                <label for=nama_paket>Nama Paket:</label>
                <select option name="np" <?php echo $data['nama_paket']?>>
                <option value="gold" >gold</option>
                <option value="silver" >silver</option>
                <option value="platinum" >platinum</option>
</select>
</p>
<p>
                <label for=tujuan>tujuan:</label>
                <input type="text" name="tujuan" value="<?php echo $data['tujuan']?>">
</p>
<p>
                <label for=tgl_keberangkatan>Tanggal Keberangkatan:</label>
                <input type="date" name="berangkat" value="<?php echo $data['tgl_keberangkatan']?>">
</p>
<p>
    <input type="submit" name="edit" value="Edit Data">
</p>

</fieldset>
</body>
</html>
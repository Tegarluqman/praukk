<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<center>
    <h1>DATA</h1>
<body>
    <table border="1">

<tr>
    <td>Nama Jamaah</td>
    <td>Alamat</td>
    <td>Jenis Kelamin</td>
    <td>Nama Paket</td>
    <td>Tujuan</td>
    <td>Tanggal Keberangkatan</td>
    <td>aksi</td>
</tr>

<?php
include ("koneksi.php");
$query=mysqli_query($db, "SELECT * FROM tb_jamaah INNER JOIN tb_paket
ON tb_jamaah.id_jamaah = tb_paket.id_paket");

while($row=mysqli_fetch_array($query)){
    echo "<tr>";
    echo "<td>".$row['nama_jamaah']."</td>";
    echo "<td>".$row['alamat']."</td>";
    echo "<td>".$row['jenis_kelamin']."</td>";
    echo "<td>".$row['nama_paket']."</td>";
    echo "<td>".$row['tujuan']."</td>";
    echo "<td>".$row['tgl_keberangkatan']."</td>";
    echo "<td>";
    echo "<a href='edit.php?id=".$row['id_jamaah']."'>edit</a> |";
    echo "<a href='hapus.php?id=".$row['id_jamaah']."'>hapus</a> ";
    echo "</td>";
    echo "</tr>";
}

?>
</table>
<br>
<br>
<a href="tambah.php"><input type="button" value="tambah">
</body>
</center>
</html>
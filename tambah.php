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
    <form action="proses-tambah.php" method="POST">
        <fieldset>
            <p>
                <label for=nama_jamaah>Nama Jamaah:</label>
                <input type="text" name="nama">
</p>
<p>
                <label for=alamat>Alamat:</label>
                <textarea name="alamat"></textarea>
</p>
<p>
                <label for=jenis_kelamin>Jenis Kelamin:</label>
                <input type="radio" name="jk" value="laki-laki">laki-laki
                <input type="radio" name="jk" value="perempuan">perempuan
</p>
<p>
                <label for=nama_paket>Nama Paket:</label>
                <select option name="np">
                <option value="gold" >gold</option>
                <option value="silver" >silver</option>
                <option value="platinum" >platinum</option>
</select>
<p>
                <label for=tujuan>tujuan:</label>
                <input type="text" name="tujuan">
</p>
<p>
                <label for=tgl_keberangkatan>Tanggal Keberangkatan:</label>
                <input type="date" name="berangkat">
</p>
<p>
    <input type="submit" name="tambah" value="Tambah Data">
</p>

</fieldset>
</body>
</html>
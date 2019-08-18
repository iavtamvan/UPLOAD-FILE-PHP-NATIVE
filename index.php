<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Belajarphp.net - Upload</title>
</head>
<body>
<h3>Form Input Data Buku</h3>
<form action="simpan.php" method="post" enctype="multipart/form-data">
    <table>
        <tr><td>Judul Buku</td><td><input type="text" name="judul" placeholder="Judul Buku"></td></tr>
        <tr><td>Cover</td><td><input type="file" name="cover"></td></tr>
        <tr><td></td><td><button type="submit">Simpan Data</button></td></tr>
    </table>
</form>
</body>
</html>
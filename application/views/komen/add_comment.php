<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Tambah Komentar Foto Baru</title>
</head>
<body>
    <h1>Tambah Komentar Foto Baru</h1>
    <form method="post" action="<?php echo base_url('komentarfoto/tambah_process'); ?>">
        <label>FotoID:</label><br>
        <input type="number" name="FotoID" required><br>
        <label>UserID:</label><br>
        <input type="number" name="UserID" required><br>
        <label>Isi Komentar:</label><br>
        <textarea name="IsiKomentar" required></textarea><br>
        <label>Tanggal Komentar:</label><br>
        <input type="date" name="TanggalKomentar" required><br>
        <input type="submit" value="Simpan">
    </form>
</body>
</html>

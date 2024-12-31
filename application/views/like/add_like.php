<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Tambah Like Baru</title>
</head>
<body>
    <h1>Tambah Like Baru</h1>
    <form method="post" action="<?php echo base_url('likefoto/tambah_process'); ?>">
        <label>FotoID:</label><br>
        <input type="number" name="FotoID" required><br>
        <label>UserID:</label><br>
        <input type="number" name="UserID" required><br>
        <label>Tanggal Like:</label><br>
        <input type="date" name="TanggalLike" required><br>
        <input type="submit" value="Simpan">
    </form>
</body>
</html>

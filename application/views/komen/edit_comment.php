<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Komentar Foto</title>
</head>
<body>
    <h1>Edit Komentar Foto</h1>
    <form method="post" action="<?php echo base_url('komentarfoto/edit_process/'.$comment->KomentarID); ?>">
        <label>FotoID:</label><br>
        <input type="number" name="FotoID" value="<?php echo $comment->FotoID; ?>" required><br>
        <label>UserID:</label><br>
        <input type="number" name="UserID" value="<?php echo $comment->UserID; ?>" required><br>
        <label>Isi Komentar:</label><br>
        <textarea name="IsiKomentar" required><?php echo $comment->IsiKomentar; ?></textarea><br>
        <label>Tanggal Komentar:</label><br>
        <input type="date" name="TanggalKomentar" value="<?php echo $comment->TanggalKomentar; ?>" required><br>
        <input type="submit" value="Simpan">
    </form>
</body>
</html>

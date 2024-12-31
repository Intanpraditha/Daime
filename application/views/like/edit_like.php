<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Like</title>
</head>
<body>
    <h1>Edit Like</h1>
    <form method="post" action="<?php echo base_url('likefoto/edit_process/'.$like->LikeID); ?>">
        <label>FotoID:</label><br>
        <input type="number" name="FotoID" value="<?php echo $like->FotoID; ?>" required><br>
        <label>UserID:</label><br>
        <input type="number" name="UserID" value="<?php echo $like->UserID; ?>" required><br>
        <label>Tanggal Like:</label><br>
        <input type="date" name="TanggalLike" value="<?php echo $like->TanggalLike; ?>" required><br>
        <input type="submit" value="Simpan">
    </form>
</body>
</html>

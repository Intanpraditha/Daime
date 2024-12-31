<h1>Register</h1>
    <form method="post" action="<?php echo base_url('login/register_process'); ?>">
        <label>Username:</label><br>
        <input type="text" name="username" required><br>
        <label>Password:</label><br>
        <input type="password" name="password" required><br>
        <label>Email:</label><br>
        <input type="email" name="email" required><br>
        <label>Nama Lengkap:</label><br>
        <input type="text" name="namaLengkap" required><br>
        <label>Alamat:</label><br>
        <textarea name="alamat"></textarea><br>
        <input type="submit" value="Simpan">
    </form>
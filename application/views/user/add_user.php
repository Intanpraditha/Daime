<div class="container-fluid pt-4 px-4">
    <div class="row g-4">
        <div class="col-12">
            <div class="bg-secondary rounded h-100 p-4">
                <h6 class="mb-3">Tambah user baru</h6>
                <form action="<?php echo base_url('user/tambah_process'); ?>" enctype="multipart/form-data" method="post"> 
                    <div class="form-floating mb-3">
                        <input type="text" name="username" class="form-control" id="floatingInput" placeholder="username">
                        <label for="floatingInput">username</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="email" class="form-control" id="floatingInput" name="email"
                            placeholder="name@example.com">
                        <label for="floatingInput">Email</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="password" class="form-control" id="floatingPassword" name="password"
                            placeholder="Password">
                        <label for="floatingPassword">Password</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" name="namaLengkap" class="form-control" id="floatingInput" placeholder="nama lengkap">
                        <label for="floatingInput">nama lengkap</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" name="alamat" class="form-control" id="floatingInput" placeholder="alamat">
                        <label for="floatingInput">alamat</label>
                    </div>
                    <div class="mb-3">
                        <label for="formFile" class="form-label">unggah foto</label>
                        <input class="form-control bg-dark" type="file" name="userfile" accept="image/*" id="formFile">
                    </div>
                    <input type="submit" class="btn btn-primary" value="simpan">
                </form>
            </div>
        </div>
    </div>
</div>
                
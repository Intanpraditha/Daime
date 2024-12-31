
<div class="container-fluid pt-4 px-4">
    <div class="row g-4">
        <div class="col-12">
            <div class="bg-secondary rounded h-100 p-4">
                <h6 class="mb-3">Tambah foto baru</h6>
                <form action="<?php echo base_url('foto/tambah_process'); ?>" enctype="multipart/form-data" method="post"> 
                    <div class="mb-3">
                        <label for="formFile" class="form-label">unggah foto</label>
                        <input class="form-control bg-dark" type="file" name="userfile" accept="image/*" id="formFile">
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" name="JudulFoto" class="form-control" id="floatingInput" placeholder="judul foto">
                        <label for="floatingInput">judul foto</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" name="DeskripsiFoto" class="form-control" id="floatingInput" placeholder="Deskripsi Foto">
                        <label for="floatingInput">Deskripsi Foto</label>
                    </div>
                    <div class="form-floating mb-3">
                        <select name="AlbumID" class="form-select" id="floatingSelect"
                            aria-label="Floating label select example">
                            <option selected>pilih album</option>
                            <?php foreach ($albums as $album) { ?>
                                <option value="<?php echo $album['AlbumID']; ?>"><?php echo $album['NamaAlbum']; ?></option>
                            <?php } ?>
                        </select>
                        <label for="floatingSelect">pilih</label>
                    </div>
                    <input type="submit" class="btn btn-primary" value="simpan">
                </form>
            </div>
        </div>
    </div>
</div>
                

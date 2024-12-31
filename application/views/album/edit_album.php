
<div class="container-fluid pt-4 px-4">
    <div class="row g-4">
        <div class="col-12">
            <div class="bg-secondary rounded h-100 p-4">
                <h6 class="mb-3">Edit album</h6>
                <form action="<?php echo base_url('album/edit_process/'.$album->AlbumID); ?>" method="post"> 
                    <div class="form-floating mb-3">
                        <input type="text" name="NamaAlbum" value="<?php echo $album->NamaAlbum; ?>" class="form-control" id="floatingInput" placeholder="nama album">
                        <label for="floatingInput">Nama album</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" name="Deskripsi" value="<?php echo $album->Deskripsi; ?>" class="form-control" id="floatingInput" placeholder="deskripsi">
                        <label for="floatingInput">Deskripsi</label>
                    </div>
                    <input type="submit" class="btn btn-primary" value="simpan">
                </form>
                <!-- <div class="form-floating mb-3">
                    <input type="password" class="form-control" id="floatingPassword"
                        placeholder="Password">
                    <label for="floatingPassword">Password</label>
                </div> -->
            </div>
        </div>
    </div>
</div>
                

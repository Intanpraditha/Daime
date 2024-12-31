<div class="container-fluid pt-4 px-4">
    <div class="row g-4">
        <div class="col-12">
            <div class="bg-secondary rounded h-100 p-4">
                <h6 class="mb-3">Edit foto</h6>
                <form action="<?php echo base_url('foto/edit_process/'.$photo->FotoID); ?>"method="post"> 
                    <div class="mb-3">
                        <img name="LokasiFile" src="<?php echo base_url('uploads/' . $photo->LokasiFile); ?>" alt="Foto" width="150">
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" name="JudulFoto" value="<?php echo $photo->JudulFoto; ?>" class="form-control" id="floatingInput" placeholder="judul foto">
                        <label for="floatingInput">judul foto</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" name="DeskripsiFoto" value="<?php echo $photo->DeskripsiFoto; ?>" class="form-control" id="floatingInput" placeholder="Deskripsi Foto">
                        <label for="floatingInput">Deskripsi Foto</label>
                    </div>
                    
                    <input type="submit" class="btn btn-primary" value="simpan">
                </form>
            </div>
        </div>
    </div>
</div>
                


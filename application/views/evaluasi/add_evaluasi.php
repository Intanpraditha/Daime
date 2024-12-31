<div class="container-fluid pt-4 px-4">
    <div class="row g-4">
        <div class="col-12">
            <div class="bg-secondary rounded h-100 p-4">
                <h6 class="mb-3">Tambah evaluasi baru</h6>
                <form action="<?php echo base_url('evaluasi/store'); ?>" method="post"> 
                    <div class="form-floating mb-3">
                        <input type="text" name="nama" class="form-control" id="floatingInput" placeholder="nama">
                        <label for="floatingInput">Nama</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" name="catatan" class="form-control" id="floatingInput" placeholder="catatan">
                        <label for="floatingInput">Catatan</label>
                    </div>
                    <div class="form-floating mb-3">
                        <select name="status" class="form-select" id="floatingSelect" aria-label="Floating label select example">
                            <option>pilih status</option>
                            <option value="Belum Selesai">Belum Selesai</option>
                            <option value="Selesai">Selesai</option>
                        </select>
                        <label for="floatingSelect">pilih</label>
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
                
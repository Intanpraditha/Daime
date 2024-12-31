<div class="container-fluid pt-4 px-4">
    <div class="row g-4">
        <div class="col-12">
            <div class="bg-secondary rounded h-100 p-4 shadow">
                <div class="d-flex mb-3">
                    <div class="me-auto">
                        <h3>User</h3>
                    </div>
                    <div>
                        <a href="<?php echo base_url('User/tambah/');?>" class="btn btn-primary">Tambah data</a>
                    </div>
                </div>
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <tr>
                        <th>UserID</th>
                        <th>Foto profile</th>
                        <th>Username</th>
                        <th>Email</th>
                        <th>Nama Lengkap</th>
                        <th>Alamat</th>
                        <th>Aksi</th>
                    </tr>
                    <?php foreach($users as $user): ?>
                    <tr>
                        <td><?php echo $user->UserID; ?></td>
                        <td><img src="<?php echo base_url('uploads/' . $user->LokasiFoto); ?>" alt="Foto" width="100"></td>
                        <td><?php echo $user->username; ?></td>
                        <td><?php echo $user->email; ?></td>
                        <td><?php echo $user->namaLengkap; ?></td>
                        <td><?php echo $user->alamat; ?></td>
                        <td>
                            <a href="<?php echo base_url('user/edit/'.$user->UserID); ?>"><i class="fa fa-pen"></i></a> |
                            <a href="<?php echo base_url('user/hapus/'.$user->UserID); ?>" onclick="return confirm('Anda yakin ingin menghapus user ini?');"><i class="fa fa-trash"></i></a>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

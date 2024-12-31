<!-- Begin Page Content -->
<div class="container-fluid pt-4 px-4">
    <div class="row g-4">
        <div class="col-12">
            <div class="bg-secondary rounded h-100 p-4 shadow">
                <div class="d-flex mb-3">
                    <div class="me-auto">
                        <h3>Evaluasi</h3>
                    </div>
                    <div>
                        <a href="<?php echo base_url('evaluasi/create/');?>" class="btn btn-primary">Tambah data</a>
                    </div>
                </div>
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <tr>
                            <th>EvaluasiID</th>
                            <th>Nama</th>
                            <th>Catatan</th>
                            <th>Status evaluasi</th>
                            <th>Aksi</th>
                        </tr>
                        <?php foreach($evaluasi as $eva): ?>
                        <tr>
                            <td><?php echo $eva->evaID; ?></td>
                            <td><?php echo $eva->nama; ?></td>
                            <td><?php echo $eva->catatan; ?></td>
                            <td><?php echo $eva->status; ?></td>
                            <td>
                                <a href="<?php echo base_url('evaluasi/edit/'.$eva->evaID); ?>"><i class="fa fa-pen"></i></a> |
                                <a href="<?php echo base_url('evaluasi/delete/'.$eva->evaID); ?>" onclick="return confirm('Anda yakin ingin menghapus data ini?');"><i class="fa fa-trash"></i></a>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

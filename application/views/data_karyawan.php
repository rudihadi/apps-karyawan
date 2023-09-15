<div>
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="d-flex justify-content-between">
                                <div>
                                    <h3 class="card-title">Data Karyawan PT XXX</h3>
                                </div>
                                <div>
                                    <?= form_open('Dashboard/search') ?>
                                    <input type="text" name="keyword" class="form-control" placeholder="Search">
                                    <button type="submit" class="btn btn-success">Cari</button>
                                    <?= form_close() ?>
                                </div>
                            </div>

                        </div>
                        <table id="example2" class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>NPK</th>
                                    <th>NAMA</th>
                                    <th>JABATAN</th>
                                    <th>AKSI</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $count = 0;
                                foreach ($data_krywn as $row) {
                                    $count = $count + 1;
                                ?>
                                    <tr>
                                        <td><?= $count ?></td>
                                        <td><?= $row->npk ?></td>
                                        <td><?= $row->nama ?></td>
                                        <td><?= $row->jabatan ?></td>
                                        <td>
                                            <a href="<?= base_url('Dashboard/formEdit/') . $row->npk  ?>" class="mx-auto p-2">Edit</a>
                                            <a href="<?= base_url('Dashboard/AksiDeleteData/') . $row->npk ?>" class="mx-auto p-2">Hapus</a>
                                        </td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
            </div>
        </div>
</div>
</section>
<button type="button" class="btn btn-primary" onclick="document.location.href='<?= base_url('Dashboard/formInput') ?>'">Tambah Karyawan</button>
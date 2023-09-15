<form action="<?= base_url('Dashboard/AksiCari') ?>">
    <div class="card-body">
        <div class="input-group mb-3">
            <span class="input-group-text" id="inputGroup-sizing-default">
                Search
            </span>
            <input type="search" name="keyword" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
            <button type="submit" class="btn btn-primary">Search</button>
        </div>
        <h3>
            Hasil Pencarian
        </h3>
        <?php if ($search_result) : ?>
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
                    foreach ($search_result as $row) {
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
        <?php else : ?>
            <?php if ($keyword) : ?>
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
                        <tr>
                            <td>Data Tidak di Temukan</td>
                            <td>Data Tidak di Temukan</td>
                            <td>Data Tidak di Temukan</td>
                            <td>Data Tidak di Temukan</td>
                        </tr>
                    </tbody>
                </table>
            <?php endif ?>
        <?php endif ?>
    </div>
</form>
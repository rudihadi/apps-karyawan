<h1 class="display-3 text-center">FORM EDIT</h1>

<form action="<?php echo base_url('Dashboard/AksiEdit') ?>" method="post">
    <div class="input-group mb-3">
        <span class="input-group-text" id="inputGroup-sizing-default">NPK</span>
        <input type="text" value="<?php echo $data_krywn->npk ?>" class="form-control" aria-label="Username" aria-describedby="basic-addon1" disabled>
        <input type="hidden" name="npk" value="<?php echo $data_krywn->npk ?>" class="form-control" aria-label="Username" aria-describedby="basic-addon1">
    </div>

    <div class="input-group mb-3">
        <span class="input-group-text" id="inputGroup-sizing-default">Nama</span>
        <input type="text" name="nama" value="<?php echo $data_krywn->nama ?>" class="form-control" aria-label="Username" aria-describedby="basic-addon1">
    </div>

    <div class=" input-group mb-3">
        <span class="input-group-text" id="inputGroup-sizing-default">Jabatan</span>
        <input type="text" name="jabatan" value="<?php echo $data_krywn->jabatan ?>" class="form-control" aria-label="Username" aria-describedby="basic-addon1">
    </div>

    <button type=" submit" value="SIMPAN" class="btn btn-primary">Simpan</button>
</form>
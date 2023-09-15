<h1 class="display-3 text-center">FORM INPUT</h1>
<form action="<?= base_url('Dashboard/AksiInsert') ?>" method="post">
    <div class="input-group mb-3">
        <span class="input-group-text" id="inputGroup-sizing-default">NPK</span>
        <input type="text" class="form-control" name="npk" placeholder="NPK" aria-label="Username" aria-describedby="basic-addon1" required>
    </div>

    <div class="input-group mb-3">
        <span class="input-group-text" id="inputGroup-sizing-default">Nama</span>
        <input type="text" class="form-control" name="nama" placeholder="Nama" aria-label="Recipient's username" aria-describedby="basic-addon2" required>

    </div>

    <div class="input-group mb-3">
        <span class="input-group-text" id="inputGroup-sizing-default">Jabatan</span>
        <input type="text" class="form-control" name="jabatan" placeholder="Jabatan" aria-label="Recipient's username" aria-describedby="basic-addon2" required>

    </div>

    <button type="submit" value="SIMPAN" class="btn btn-primary">Simpan</button>
</form>
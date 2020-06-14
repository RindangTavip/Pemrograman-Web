<div class="container">
    <?php foreach ($siswa as $s) : ?>
        <?= form_open_multipart('Sekolah/update') ?>
        <div class="form-group">
            <input type="hidden" class="form-control" placeholder="Id" name="id" value="<?= $s->id ?>">
        </div>
        <div class="form-group">
            <label for="nama">Nama</label>
            <input type="text" class="form-control" placeholder="Nama" name="nama" value="<?= $s->nama ?>">
        </div>
        <div class="form-group">
            <label for="alamat">Alamat</label>
            <input type="text" class="form-control" placeholder="Alamat" name="alamat" value="<?= $s->alamat ?>">
        </div>
        <div class="form-group">
            <label for="logo">Logo</label>
            <input type="file" class="form-control" placeholder="Logo" name="logo" value="<?= $s->logo ?>">
        </div>
        <button type="submit" class="btn" style="background-color: #DD4814; color: white;">Simpan</button>
        <?= form_close(); ?>
    <?php endforeach ?>
</div>
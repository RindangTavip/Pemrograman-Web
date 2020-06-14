<div class="container">
    
    <div class="row mt-3">
        <div class="col-md-6">
            <h2>Tambah Data Sekolah</h2>
        </div>
    </div>
    
    <div class="row mt">
        <div class="col-md-6">

            <?= form_open_multipart('Sekolah/add') ?>
                <?php if(validation_errors()) : ?>    
                    <?= validation_errors(); ?>
                <?php endif; ?>
                <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" class="form-control" id="nama" name="nama">
                </div>
                <div class="form-group">
                    <label for="alamat">Alamat</label>
                    <input type="text" class="form-control" id="alamat" name="alamat">
                </div>
                <div class="form-group">
                    <label for="logo">Logo</label>
                    <input type="file" class="form-control" id="logo" name="logo">
                </div>
                <button type="submit" name="add" class="btn" style="background-color: #DD4814; color: white;">Simpan</button>
            <?= form_close(); ?>

        </div>
    </div>

</div>
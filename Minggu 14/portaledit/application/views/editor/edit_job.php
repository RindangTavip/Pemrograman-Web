<div class="container-fluid">
    <h3>Edit Job</h3>

    <?php foreach ($editor_job as $job) : ?>

        <form method="post" enctype="multipart/form-data" action="<?php echo base_url(). 'editor/job/update' ?>">
            
            <div class="form-group">
                <label>Deskripsi</label>
                <input type="hidden" name="kd_job" class="form-control" value="<?php echo $job->kd_job ?>">
                <input type="text" name="desc_job" class="form-control" value="<?php echo $job->desc_job ?>">
            </div>

            <div class="form-group">
                <label>Kategori</label>
                <select name="kategori" class="form-control" value="<?php echo $job->kategori ?>">
                  <option disabled><?php echo $job->kategori ?></option>
                  <option>Gambar</option>
                  <option>Video</option>
                </select>
            </div>

            <div class="form-group">
                <label>Tarif</label>
                <input type="text" name="tarif" class="form-control" value="<?php echo $job->tarif ?>">
            </div>

            <div class="form-group">
                <label>Gambar Cover</label>
                <input type="file" name="gambar" class="form-control" value="<?php echo $job->gambar ?>">
            </div>

            <div class="form-group">
                <label>Gambar Sample</label>
                <input type="file" name="gambar_sample" class="form-control" value="<?php echo $job->gambar_sample ?>">
            </div>

            <div class="form-group">
                <label>Gambar Sample 2</label>
                <input type="file" name="gambar_sample2" class="form-control" value="<?php echo $job->gambar_sample2 ?>">
            </div>

            <div class="form-group">
                <label>Video Sample</label>
                <input type="file" name="video_sample" class="form-control" value="<?php echo $job->video_sample ?>">
            </div>

            <button type="Submit" class="btn btn-primary btn-sm">Simpan</button>
            <a href="<?php echo base_url('editor/job/index') ?>"><div class="btn btn-danger btn-sm ml-2">Kembali</div></a>
        </form>

    <?php endforeach; ?>
    
</div>
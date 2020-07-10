<div class="container-fluid">
    <button class="btn btn-sm btn-info" data-toggle="modal" data-target="#tambah"><i class="fas fa-plus fa-sm"></i> Tambah</button>

    <div class="row mt-3">

    <?php foreach ($editor_job as $job) : ?>

        <div class="card ml-3 mb-3" style="width: 16rem;">
            <img src="<?php echo base_url().'/uploads/'.$job->gambar ?>" class="card-img-top" alt="..." style="height: 145px;">
            <div class="card-body">
                <img class="img-profile rounded-circle" src="<?php echo base_url().'/uploads/'.$job->gambar_cover ?>" style="width: 20px; height:20px; box-shadow: 0 2px 4px 0 rgba(0, 0, 0, 0.2), 0 3px 10px 0 rgba(0, 0, 0, 0.19);">
                <small><?php echo $job->username ?></small>
                <p class="card-text mt-2 mb-2"><?php echo $job->desc_job ?></p>
                <?php echo anchor('editor/job/detail/' .$job->kd_job, '<div class="btn btn-success">Detail</div>') ?>
                <a class="mt-1 ml-3">Tarif : <small>Rp <?php echo number_format($job->tarif, 0,',','.') ?></small></a>
                <br>
                <?php echo anchor('editor/job/edit/' .$job->kd_job, '<div class="btn btn-warning mt-2"><i class="fas fa-edit"></i> Edit</div>') ?>
                <?php echo anchor('editor/job/hapus/' .$job->kd_job, '<div class="btn btn-danger mt-2 ml-1"><i class="fas fa-trash"></i> Hapus</div>') ?>
            </div>
        </div>

    <?php endforeach; ?>
    
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="tambah" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambahkan Job Baru</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="<?php echo base_url(). 'editor/job/tambah_job' ?>" method="post" enctype="multipart/form-data">

            <div class="form-group">
                <label>Deskripsi</label>
                <input type="text" name="desc_job" class="form-control">
            </div>

            <div class="form-group">
                <label>Kategori</label>
                <select name="kategori" class="form-control">
                  <option></option>
                  <option>Gambar</option>
                  <option>Video</option>
                </select>
            </div>

            <div class="form-group">
                <label>Tarif</label>
                <input type="text" name="tarif" class="form-control">
            </div>

            <div class="form-group">
                <label>Gambar Cover</label>
                <input type="file" name="gambar" class="form-control">
            </div>

            <div class="form-group">
                <label>Gambar Sample</label>
                <input type="file" name="gambar_sample" class="form-control">
            </div>

            <div class="form-group">
                <label>Gambar Sample 2</label>
                <input type="file" name="gambar_sample2" class="form-control">
            </div>

            <div class="form-group">
                <label>Video Sample</label>
                <input type="file" name="video_sample" class="form-control">
            </div>

            <div class="form-group">
                <label>ID Editor</label>
                <input type="text" name="id_editor" value="<?php echo $this->session->userdata('id_editor') ?>" class="form-control">
            </div>
  
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="Submit" class="btn btn-primary">Simpan</button>
      </div>

      </form>
      

    </div>
  </div>
</div>
<div class="container-fluid">
    <h4>Invoice Order Job</h4>

    <table class="table table-bordered table-hover table-striped">
        <tr>
            <th>Kode Invoice</th>
            <th>Kode Job</th>
            <th>ID Customer</th>
            <th>Dekrispsi Project</th>
            <th>Gambar Bahan</th>
            <th>Video Bahan</th>
            <th>Tanggal Order</th>
            <th>Deadline</th>
            <th>Pembayaran</th>
            <th>Aksi</th>
        </tr>

        <?php foreach ($invoice as $inv) : ?>
            <tr>
                <td><?php echo $inv->kd_invoice ?></td>
                <td><?php echo $inv->kd_job ?></td>
                <td><?php echo $inv->id_customer ?></td>
                <td><?php echo $inv->desc_project ?></td>
                <td><img src="<?php echo base_url(). '/uploads/' .$inv->gambar_bahan ?>" class="img-thumbnail" style="width:200px;"></td>
                <td><video width="160" height="120" controls="controls"><source src="<?php echo base_url(). '/uploads/' .$inv->video_bahan ?>"></video></td>
                <td><?php echo $inv->tgl_order ?></td>
                <td><?php echo $inv->batas_order ?></td>
                <td><?php echo $inv->pembayaran ?></td>
                <td><button class="btn btn-sm btn-primary" data-toggle="modal" data-target="#tambah">Submit</button>
                <?php echo anchor('editor/invoice/hapus/' .$inv->kd_invoice, '<div class="btn btn-sm btn-danger ml-2"></i> Hapus</div>') ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
</div>

<!-- Modal -->
<div class="modal fade" id="tambah" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Submit Project</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="<?php echo base_url(). 'editor/invoice/submit_project' ?>" method="post" enctype="multipart/form-data">

            <div class="form-group">
                <label>Kode Invoice</label>
                <input type="test" name="kd_invoice" placeholder="Tolong Input Manual" class="form-control">
            </div>
            
            <div class="form-group">
                <label>Gambar Project</label>
                <input type="file" name="gambar_project" class="form-control">
            </div>

            <div class="form-group">
                <label>Video Project</label>
                <input type="file" name="video_project" class="form-control">
            </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="Submit" class="btn btn-primary">Submit</button>
      </div>

      </form>

    </div>
  </div>
</div>
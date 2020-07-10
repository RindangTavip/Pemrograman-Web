<div class="container-fluid">

    <div class="card">
        <h5 class="card-header">Detail Job</h5>
        <div class="card-body">
            
            <?php foreach ($portal as $job) : ?>
            <div class="row">
                <div class="col-md-4">
                    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                        <img src="<?php echo base_url(). '/uploads/' .$job->gambar ?>" class="card-img-top" style="width: 520px; height:300px;">
                        </div>
                        <div class="carousel-item">
                        <img src="<?php echo base_url(). '/uploads/' .$job->gambar_sample ?>" class="card-img-top" style="width: 520px; height:300px;">
                        </div>
                        <div class="carousel-item">
                        <img src="<?php echo base_url(). '/uploads/' .$job->gambar_sample2 ?>" class="card-img-top" style="width: 520px; height:300px;">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                    </div>
                </div>
                <div class="col-md-8">
                    <table class="table">
                        <tr>
                            <td>Nama Editor</td>
                            <td><strong>: <?php echo $job->nama_lengkap ?></strong></td>
                        </tr>

                        <tr>
                            <td>Kode Job</td>
                            <td><strong>: <?php echo $job->kd_job ?></strong></td>
                        </tr>

                        <tr>
                            <td>Keterangan</td>
                            <td><strong>: <?php echo $job->desc_job ?></strong></td>
                        </tr>

                        <tr>
                            <td>Kategori</td>
                            <td><strong>: <?php echo $job->kategori ?></strong></td>
                        </tr>

                        <tr>
                            <td>Tarif</td>
                            <td><strong>: Rp <?php echo number_format($job->tarif, 0,',','.') ?></strong></td>
                        </tr>

                    </table>

                    <div align="left">
                        <a><?php echo anchor('dashboard/order/' .$job->kd_job, '<div class="btn btn-primary">Order</div>') ?></a>
                        <a href="<?php echo base_url('kategori/gambar/') ?>"><div class="btn btn-danger ml-2">Kembali</div></a>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>

        </div>
    </div>

</div>
<div class="cover">
    <img src="<?php echo base_url('assets/img/cover2.jpg') ?>" class="d-block w-100" alt="..." style="height: 300px;">
</div>

<div class="container-fluid">

    <div class="row mt-3">

    <?php foreach ($gambar as $job) : ?>

        <div class="card ml-3 mb-3" style="width: 16rem;">
            <img src="<?php echo base_url().'/uploads/'.$job->gambar ?>" class="card-img-top" alt="..." style="height: 145px;">
            <div class="card-body">
                <img class="img-profile rounded-circle" src="<?php echo base_url().'/uploads/'.$job->gambar_cover ?>" style="width: 20px; height:20px; box-shadow: 0 2px 4px 0 rgba(0, 0, 0, 0.2), 0 3px 10px 0 rgba(0, 0, 0, 0.19);">
                <small><?php echo $job->username ?></small>
                <p class="card-text mt-2 mb-2"><?php echo $job->desc_job ?></p>
                <?php echo anchor('welcome/detail_gambar/' .$job->kd_job, '<div class="btn btn-success">Detail</div>') ?>
                <a class="mt-1 ml-3">Tarif : <small>Rp <?php echo number_format($job->tarif, 0,',','.') ?></small></a>
            </div>
        </div>

    <?php endforeach; ?>
    
    </div>
</div>
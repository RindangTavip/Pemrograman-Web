<div class="container-fluid">
    <div class="card">
        <h5 class="card-header">Dashboard Editor</h5>
        <div class="card-body">
            
            <?php foreach ($editor as $dash) : ?>
            <div class="row">
                <div class="col-md-4">
                    <img src="<?php echo base_url(). '/uploads/' .$dash->gambar_cover ?>" class="card-img-top">
                </div>
                <div class="col-md-8">
                    <table class="table">
                        <tr>
                            <td>Nama Editor</td>
                            <td><strong>: <?php echo $dash->nama_lengkap ?></strong></td>
                        </tr>

                        <tr>
                            <td>Username</td>
                            <td><strong>: <?php echo $dash->username ?></strong></td>
                        </tr>

                        <tr>
                            <td>Email</td>
                            <td><strong>: <?php echo $dash->password ?></strong></td>
                        </tr>

                        <tr>
                            <td>Alamat</td>
                            <td><strong>: <?php echo $dash->email ?></strong></td>
                        </tr>

                        <tr>
                            <td>No HP</td>
                            <td><strong>: <?php echo $dash->nohp ?></strong></td>
                        </tr>

                    </table>
                </div>
            </div>
            <?php endforeach; ?>

        </div>
    </div>
</div>
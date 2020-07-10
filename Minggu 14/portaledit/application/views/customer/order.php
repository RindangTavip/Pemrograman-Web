<div class="container-fluid">
    <h4>Order Anda</h4>

    <table class="table table-bordered table-hover table-striped">
        <tr>
            <th>Kode Order</th>
            <th>Kode Invoice</th>
            <th>Deskripsi Project</th>
            <th>Gambar Project</th>
            <th>Video Project</th>
            <th>Biaya</th>
        </tr>

        <?php foreach ($customer as $cust) : ?>
            <tr>
                <td><?php echo $cust->kd_order ?></td>
                <td><?php echo $cust->kd_invoice ?></td>
                <td><?php echo $cust->desc_project ?></td>
                <td><img src="<?php echo base_url(). '/uploads/' .$cust->gambar_project ?>" class="img-thumbnail" style="width:200px;"></td>
                <td><video width="160" height="120" controls="controls"><source src="<?php echo base_url(). '/uploads/' .$cust->video_project ?>"></video></td>
                <td>Rp <?php echo number_format($cust->tarif, 0,',','.') ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
</div>
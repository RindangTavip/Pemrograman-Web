<div class="container-fluid">
    <?php foreach ($portal as $job) : ?>    
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <h3>Input Detail Order</h3>

            <form method="post" enctype="multipart/form-data" action="<?php echo base_url('dashboard/proses_order') ?>">
            
                <div class="form-group">
                    <label>ID Customer</label>
                    <input type="text" name="id_customer" value="<?php echo $this->session->userdata('id_customer') ?>" class="form-control">
                </div>

                <div class="form-group">
                    <label>Deskripsi Project</label>
                    <input type="text" name="desc_project" placeholder="Deskripsi Project Anda" class="form-control">
                </div>

                <div class="form-group">
                    <label>Deadline Project</label>
                    <input type="date" name="batas_order" class="form-control">
                </div>

                <div class="form-group">
                    <label>Pilih Pembayaran</label>
                    <select name="pembayaran" class="form-control">
                        <option></option>
                        <option>PayPal</option>
                        <option>GoPay</option>
                        <option>OVO</option>
                        <option>Transfer Bank</option>
                    </select>
                </div>

                <div class="form-group">
                    <label>Gambar Bahan</label>
                    <input type="file" name="gambar_bahan" class="form-control">
                </div>

                <div class="form-group">
                    <label>Video Bahan</label>
                    <input type="file" name="video_bahan" class="form-control">
                </div>

                <div class="form-group">
                    <label>Kode Job</label>
                    <input type="text" name="kd_job" value="<?php echo $job->kd_job ?>" class="form-control">
                </div>

                <button type="submit" class="btn btn-primary">Proses Order</button>
            </form>
        </div>
        <div class="col-md-2"></div>
    </div>
    <?php endforeach; ?>
</div>
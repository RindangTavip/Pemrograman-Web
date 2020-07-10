<div class="container-fuild">
    <div class="card">
        <h5 class="card-header">Profile Anda</h5>
        <div class="card-body">
            <div class="row">
                <div class="col-md-2">
                    <img src="<?php echo base_url(). '/uploads/' .$this->session->userdata('foto') ?>" class="img-thumbnail" style="width: 250px;">
                </div>

                <div class="col-md-4">
                    <table class="table">
                        <tr>
                            <td>Nama Editor</td>
                            <td><strong>: <?php echo $this->session->userdata('nama_lengkap') ?></strong></td>
                        </tr>

                        <tr>
                            <td>Username</td>
                            <td><strong>: <?php echo $this->session->userdata('username') ?></strong></td>
                        </tr>

                        <tr>
                            <td>E-mail</td>
                            <td><strong>: <?php echo $this->session->userdata('email') ?></strong></td>
                        </tr>

                        <tr>
                            <td>Alamat</td>
                            <td><strong>: <?php echo $this->session->userdata('alamat') ?></strong></td>
                        </tr>

                        <tr>
                            <td>Nomor HP</td>
                            <td><strong>: <?php echo $this->session->userdata('nohp') ?></strong></td>
                        </tr>

                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
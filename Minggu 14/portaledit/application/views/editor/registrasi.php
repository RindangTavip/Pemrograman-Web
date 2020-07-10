<body class="bg-gradient-primary">

  <div class="container">

    <div class="card o-hidden border-0 shadow-lg col-lg-6 my-5 mx-auto">
      <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">
          <div class="col-lg">
            <div class="p-5">
              <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">Editor Account</h1>
              </div>
              <form method="post" enctype="multipart/form-data" action="<?php echo base_url('editor/registrasi/index') ?>" class="user">
                
                <div class="form-group">
                  <input type="text" class="form-control form-control-user" name="nama_lengkap" placeholder="Nama Lengkap">
                  <?php echo form_error('nama_lengkap', '<div class="text-danger small ml-3">', '</div>') ?>
                </div>
                
                <div class="form-group">
                  <input type="text" class="form-control form-control-user" name="email" placeholder="E-mail">
                  <?php echo form_error('email', '<div class="text-danger small ml-3">', '</div>') ?>
                </div>

                <div class="form-group">
                  <input type="text" class="form-control form-control-user" name="alamat" placeholder="Alamat">
                  <?php echo form_error('alamat', '<div class="text-danger small ml-3">', '</div>') ?>
                </div>

                <div class="form-group">
                  <input type="text" class="form-control form-control-user" name="nohp" placeholder="No Handphone">
                  <?php echo form_error('nohp', '<div class="text-danger small ml-3">', '</div>') ?>
                </div>

                <div class="form-group">
                  <label>Foto Profile</label>
                  <input type="file" class="form-control" name="gambar_cover">
                </div>

                <div class="form-group">
                  <input type="text" class="form-control form-control-user" name="username" placeholder="Username">
                  <?php echo form_error('username', '<div class="text-danger small ml-3">', '</div>') ?>
                </div>

                <div class="form-group">
                  <input type="password" class="form-control form-control-user" name="password" placeholder="Password">
                  <?php echo form_error('password', '<div class="text-danger small ml-3">', '</div>') ?>
                </div>
                
                <button type="submit" class="btn btn-primary btn-user btn-block">Register Account</button>
                
              </form>
              <hr>
              <div class="text-center">
                <a class="small" href="<?php echo base_url('auth/login') ?>">Already have an account? Login!</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>
<body class="bg-gradient-primary">

  <div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-xl-5 col-lg-12 col-md-9">

        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item" role="presentation">
                    <a class="nav-link active" id="customer-tab" data-toggle="tab" href="#customer" role="tab" aria-controls="customer" aria-selected="true">Customer</a>
                </li>
                <li class="nav-item" role="presentation">
                    <a class="nav-link" id="editor-tab" data-toggle="tab" href="#editor" role="tab" aria-controls="editor" aria-selected="false">Editor</a>
                </li>
            </ul>

            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="customer" role="tabpanel" aria-labelledby="customer-tab">
                    <!-- Nested Row within Card Body -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="p-5">
                                <div class="text-center">
                                    <h1 class="h4 text-gray-900 mb-4">Login Customer</h1>
                                </div>
                                    <?php echo $this->session->flashdata('pesan') ?>
                                    <form method="post" action="<?php echo base_url('auth/login') ?>" class="user">
                                        <div class="form-group">
                                        <input type="text" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Username" name="username">
                                        <?php echo form_error('username', '<div class="text-danger small ml-2">','</div>'); ?>
                                        </div>
                                        <div class="form-group">
                                        <input type="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="Password" name="password">
                                        <?php echo form_error('password', '<div class="text-danger small ml-2">','</div>'); ?>
                                        </div>
                                        <br>
                                        <button type="submit" class="btn btn-primary form-control">
                                        Login
                                        </button>
                                    </form>
                                    <hr>
                                <div class="text-center">
                                    <a class="small" href="<?php echo base_url('customer/registrasi/index'); ?>">Create an Account!</a>
                                    <br>
                                    <a class="small" href="<?php echo base_url('welcome/index'); ?>">Home</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="editor" role="tabpanel" aria-labelledby="editor-tab">
                <!-- Nested Row within Card Body -->
                <div class="row">
                        <div class="col-lg-12">
                            <div class="p-5">
                                <div class="text-center">
                                    <h1 class="h4 text-gray-900 mb-4">Login Editor</h1>
                                </div>
                                    <?php echo $this->session->flashdata('pesan') ?>
                                    <form method="post" action="<?php echo base_url('auth/login_editor') ?>" class="user">
                                        <div class="form-group">
                                        <input type="text" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Username" name="username">
                                        <?php echo form_error('username', '<div class="text-danger small ml-2">','</div>'); ?>
                                        </div>
                                        <div class="form-group">
                                        <input type="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="Password" name="password">
                                        <?php echo form_error('password', '<div class="text-danger small ml-2">','</div>'); ?>
                                        </div>
                                        <br>
                                        <button type="submit" class="btn btn-primary form-control">
                                        Login
                                        </button>
                                    </form>
                                    <hr>
                                <div class="text-center">
                                    <a class="small" href="<?php echo base_url('editor/registrasi/index'); ?>">Create an Account!</a>
                                    <br>
                                    <a class="small" href="<?php echo base_url('welcome/index'); ?>">Home</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            
          </div>
        </div>

      </div>

    </div>

  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

</body>

</html>
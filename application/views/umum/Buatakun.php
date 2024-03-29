<body class="bg-gradient-primary">

  <div class="container">

    <div class="card o-hidden border-0 shadow-lg my-5">
      <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">
          <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
          <div class="col-lg-7">
            <div class="p-5">
              <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">Membuat Akun!</h1>
              </div>
              <form class="user" method="POST" action="<?= base_url('Umum/daftarakun'); ?>" enctype="multipart/form-data">
                  <div class="form-group row">
                    <div class="col-sm-6 mb-3 mb-sm-0">
                      <input type="text" class="form-control form-control-user" name="fname" id="fname" placeholder="First Name">
                    </div>
                    <div class="col-sm-6">
                      <input type="text" class="form-control form-control-user" name="lname" id="lname" placeholder="Last Name">
                    </div>
                  </div>
                  <div class="form-group">
                    <input type="text" class="form-control form-control-user" name="username" id="username" placeholder="Username">
                  </div>
                  <div class="form-group row">
                    <div class="col-sm-6 mb-3 mb-sm-0">
                      <input type="password" class="form-control form-control-user" name="password" id="password" placeholder="Password">
                    </div>
                    <div class="col-sm-6">
                      <input type="password" class="form-control form-control-user" name="Rpassword" id="Rpassword" placeholder="Repeat Password">
                    </div>
                  </div>
                  <input type="submit" class="btn btn-primary btn-user btn-block" Value="Register Account">
                </form>
                <hr>
                <form class="user">
                  <a href="index.html" class="btn btn-google btn-user btn-block">
                    <i class="fab fa-google fa-fw"></i> Register with Google
                  </a>
                  <a href="index.html" class="btn btn-facebook btn-user btn-block">
                    <i class="fab fa-facebook-f fa-fw"></i> Register with Facebook
                  </a>
                </form>
              <hr>
              <div class="text-center">
                <a class="small" href="">Lupa Password?</a>
              </div>
              <div class="text-center">
                <a class="small" href="<?= base_url('Umum'); ?>">Sudah Punya Akun? Login!</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>
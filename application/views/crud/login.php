<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Login</title><!--digunakan untuk memberi title pada website-->

    <!-- untuk menggunakan font dari template yang sudah ada-->
    <link href="<?= base_url(); ?>assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <!-- untuk menggunakan style dari template yang ada-->
    <link href="<?= base_url(); ?>assets/css/sb-admin-2.min.css" rel="stylesheet">
</head>
<!--untuk membuat body dari tampilan dengan memanggil sebuah class untuk background-->
<body class="bg-gradient-primary">
	<!--untuk membuat tag div dengan class container-->
    <div class="container">
        <!-- untuk membuat baris luar -->
        <div class="row justify-content-center">
            <div class="col-xl-10 col-lg-12 col-md-9">
                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- digunakan untuk membuat baris bersarang di dalam card body  -->
                        <div class="row">
							<!-- digunakan untuk memanggil gambar untuk ditampilkan -->
                            <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
                            <div class="col-lg-6">
                                <div class="p-5">
									<!-- digunakan untuk mengatur posisi text berada ditengah-->
                                    <div class="text-center">
										<!-- untuk memberi text -->
                                        <h1 class="h4 text-gray-900 mb-4">Welcome Back!</h1>
                                    </div>
									<!-- untuk membuat form untuk melakukan login -->
                                    <form class="user" action="<?php echo base_url('Login/cek_log');?>" method="POST">
                                        <!-- digunakan untuk melakukan input username -->
										<div class="form-group">
                                            <input type="text" class="form-control form-control-user" id="username" aria-describedby="username" placeholder="Username..." name="txt_user">
                                        </div>
                                        <!-- digunakan untuk melakukan password -->
                                        <div class="form-group">
                                            <input type="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="Password" name="txt_pass">
                                        </div>
										<div class="form-group">
                                            <div class="custom-control custom-checkbox small">
                                                <input type="checkbox" class="custom-control-input" id="customCheck">
                                                <label class="custom-control-label" for="customCheck">Remember Me</label>
                                            </div>
                                        </div>
                                        <!--<a href="index.html" class="btn btn-primary btn-user btn-block">
                                            Login
                                        </a>-->
										<input type="submit" name="btn_log" value="Login" class="btn btn-primary btn-user btn-block">
                                        <hr>
                                        <!-- digunakan untuk membuat button login menggunakan Google -->
										<a href="index.html" class="btn btn-google btn-user btn-block">
                                            <i class="fab fa-google fa-fw"></i> Login with Google
                                        </a>
										<!-- digunakan untuk membuat button login menggunakan Facebook -->
                                        <a href="index.html" class="btn btn-facebook btn-user btn-block">
                                            <i class="fab fa-facebook-f fa-fw"></i> Login with Facebook
                                        </a>
                                    </form>
                                    <hr>
									<!-- digunakan untuk membuat button jika lupa password -->
                                    <div class="text-center">
                                        <a class="small" href="forgot-password.html">Forgot Password?</a>
                                    </div>
									<!-- digunakan untuk membuat button untuk membuat akun baru-->
                                    <div class="text-center">
                                        <a class="small" href="register.html">Create an Account!</a>
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
    <script src="<?= base_url(); ?>assets/vendor/jquery/jquery.min.js"></script>
    <script src="<?= base_url(); ?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?= base_url(); ?>assets/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?= base_url(); ?>assets/js/sb-admin-2.min.js"></script>
</body>
</html>

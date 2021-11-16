<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?php echo $title; ?></title>

    <link href="<?= base_url(); ?>assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link href="<?= base_url(); ?>assets/css/sb-admin-2.min.css" rel="stylesheet">
</head>
<body class="bg-primary">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-10 col-lg-12 col-md-9">
                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4"><?php echo $title; ?></h1>
                                    </div>
                                    <form class="user" action="<?php echo base_url('Admin/daftar_admin');?>" method="post"> 
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama Lengkap" require> 
                                        </div>
                                        <div class="row">
                                            <div class="col-6">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" id="jabatan" name="jabatan" placeholder="Jabatan" require> 
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" id="nip" name="nip" placeholder="NIP" require> 
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <input type="number" class="form-control" id="telp" name="telp" placeholder="No. Telp/HP" require> 
                                        </div>
                                        <div class="form-group"> 
                                            <input type="text" class="form-control" id="username" name="username" placeholder="Username" require> 
                                        </div> 
                                        <div class="form-group"> 
                                            <input type="password" class="form-control" id="pass" name="pass" placeholder="Password" require> 
                                        </div>
                                        <div class="row">
                                            <div class="col-4">
                                                <div class="form-group"> 
                                                    <input type="text" class="form-control" id="provinsi" name="provinsi" placeholder="Provinsi" require> 
                                                </div>
                                            </div>
                                            <div class="col-4">
                                                <div class="form-group"> 
                                                    <input type="text" class="form-control" id="kabkota" name="kabkota" placeholder="Kabupaten/Kota" require> 
                                                </div>
                                            </div>
                                            <div class="col-4">
                                                <div class="form-group"> 
                                                    <input type="text" class="form-control" id="kecamatan" name="kecamatan" placeholder="Kecamatan" require> 
                                                </div>
                                            </div>
                                        </div>
										<input type="submit" name="btn_log" value="Daftar" class="btn btn-primary btn-user btn-block">
                                    </form><hr> 
                                    <div class="text-center">
                                        <a class="small" href="<?php echo base_url('Admin/login');?>">LOGIN</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="<?= base_url(); ?>assets/vendor/jquery/jquery.min.js"></script>
    <script src="<?= base_url(); ?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <script src="<?= base_url(); ?>assets/vendor/jquery-easing/jquery.easing.min.js"></script>

    <script src="<?= base_url(); ?>assets/js/sb-admin-2.min.js"></script>
</body>
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
<body class="">
    <div class="container">
        <div class="row justify-content-center">
            <div class="container vh-100 d-flex flex-column align-items-center justify-content-center">
                <img src="<?= base_url('assets/img/undraw_pending_approval.svg') ?>" class="mb-4" alt="Ilustrasi" style="height: 30vh;">
                <div class="text-center">
                    <h1>Akun Anda sedang menunggu persetujuan</h1>
                </div>
                <a href="<?php echo base_url('Admin/login');?>" class="btn btn-primary">Kembali ke Login</a>
            </div>
        </div>
    </div>

    <script src="<?= base_url(); ?>assets/vendor/jquery/jquery.min.js"></script>
    <script src="<?= base_url(); ?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <script src="<?= base_url(); ?>assets/vendor/jquery-easing/jquery.easing.min.js"></script>

    <script src="<?= base_url(); ?>assets/js/sb-admin-2.min.js"></script>
</body>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?= $title; ?></title>

    <!-- Custom fonts for this template-->
    <link href=<?= base_url("vendor/fontawesome-free/css/all.min.css"); ?> rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href=<?= base_url("css/sb-admin-2.min.css"); ?> rel="stylesheet">
    <link rel="stylesheet" href=<?= base_url("css/auth.css"); ?>>

</head>

<body class="bg-gradient-primary">

    <!-- Content Section -->
    <?= $this->renderSection('content_auth'); ?>
    <!-- Content Section -->

    <!-- Bootstrap core JavaScript-->
    <script src=<?= base_url("vendor/jquery/jquery.min.js"); ?>></script>
    <script src=<?= base_url("vendor/bootstrap/js/bootstrap.bundle.min.js"); ?>></script>

    <!-- Core plugin JavaScript-->
    <script src=<?= base_url("vendor/jquery-easing/jquery.easing.min.js"); ?>></script>

    <!-- Custom scripts for all pages-->
    <script src=<?= base_url("js/sb-admin-2.min.js"); ?>></script>

</body>

</html>
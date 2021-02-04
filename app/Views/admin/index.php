<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>SISTEM LOGIN</title>

  <!-- Bootstrap core CSS -->
  <link href="<?= base_url('/'); ?>/start/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark static-top">
    <div class="container">
      <a class="navbar-brand" href="<?= base_url('/dashboard'); ?>">BERANDA</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <a class="nav-link btn btn-danger" href="<?php echo base_url('/logout') ?>" role="button">
            <i class="fas fa-th-large pr-2"></i>LOGOUT
          </a>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Page Content -->
  <div class="container">
    <div class="row">
      <div class="col-lg-12 text-center">
        <h1 class="mt-5">SELAMAT DATANG <?php echo $users; ?> DI HALAMAN DASHBOARD</h1>
        <p class="lead">INI ADALAH HALAMAN " <?php echo $users; ?> "</p>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript -->
  <script src="<?= base_url('/'); ?>/start/vendor/jquery/jquery.slim.min.js"></script>
  <script src="<?= base_url('/'); ?>/start/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
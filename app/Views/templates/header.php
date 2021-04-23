<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>Login Module</title>
  <link href="<?php echo base_url('public/assets/css/style.css'); ?>" rel="stylesheet" type="text/css" media="all" />
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script type="text/javascript" src="<?php echo base_url('public/assets/js/script.js'); ?>"></script>
  <script type="text/javascript" src="<?php echo base_url('public/assets/js/main.js'); ?>"></script>
  <meta name="robots" content="noindex,nofollow" />
  <style>
    body {
      background-color: #e6ffe6;
    }

    span {
      color: red;
    }

    a:hover {
      text-decoration: none;
    }
  </style>
</head>

<body>
  <?php $session = \Config\Services::session(); ?>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
      <a class="navbar-brand" href="<?= base_url() ?>">LogIn Module</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
          <?php if ($session->get('login_status') == 1) { ?>
            <li class="nav-item active">
              <a class="nav-link" href="<?= base_url() ?>/users/allUsers">Users</a>
            </li>
          <?php } ?>
          <?php if ($session->get('login_status') == 0) { ?>
            <li class="nav-item active">
              <a class="nav-link" href="<?= base_url() ?>/users/signup">Registration</a>
            </li>
          <?php } ?>
        </ul>
        <?php if ($session->get('login_status') == 1) { ?>
          <a href="<?= base_url() ?>/users/logout" class="text-warning nav-link">LogOut</a>
        <?php } ?>
      </div>
    </div>
  </nav>
  <script type="text/javascript">
    window.setTimeout(function() {
      $(".alert").fadeTo(500, 0).slideUp(500, function() {
        $(this).remove();
      });
    }, 2000);
  </script>
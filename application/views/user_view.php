<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link href="<?php echo base_url() ?>assets/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?=base_url('assets/style.css')?>">
    <link href="<?php echo base_url() ?>assets/css/custom.css" rel="stylesheet">
</head>
<body class="bg">
<nav>
    <a class="navbar-brand" href="<?= base_url() ?>"> <img src="<?= base_url('assets/images/cat.png')?>" alt="" width="50"/> <span> Cute.Cat </span>  </a>
  <ul class="nav nav-pills">
    <li class="nav-item">
      <a class="nav" href="<?= base_url('Home/Gallery')?>">All</a>
    </li>
    <li class="nav-item dropdown">
      <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="" aria-haspopup="true" aria-expanded="false"><?php echo $_SESSION['username'];?></a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="#one">Profil</a>
        <div  class="dropdown-divider"></div>
        <a class="dropdown-item" href='<?php echo base_url(); ?>index.php/Login/logoutUser'>Logout</a>
      </div>
    </li>
  </ul>
</nav>
<div >
<div class="container-fluid head">

    <!-- temporary message for a successful landing to the home page -->
    <?php if ($this->session->flashdata('success')) {?>
        <div class="alert alert-success alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            <?php echo $this->session->flashdata('success'); ?>
        </div>
    <?php  } ?>
    <?php echo validation_errors('<div class="alert alert-danger alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>','</div>');
    ?>
    <h1 class="pov"><span class="text-utama"> HELLO <?php echo $_SESSION['username'];?> </span> </h1>
 
</div>

</div>
</body>
    <script src="<?php echo base_url() ?>assets/js/jquery.min.js"></script>
    <script src="<?php echo base_url() ?>assets/js/bootstrap.min.js"></script>
</html>

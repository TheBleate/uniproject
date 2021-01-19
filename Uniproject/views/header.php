<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
  <meta name="generator" content="Hugo 0.79.0">
  <title>Sticky Footer Navbar Template · Bootstrap v4.5</title>

  <!-- Bootstrap core CSS -->
  <!-- <link href="./css/bootstrap/bootstrap.min.css" rel="stylesheet"> -->
  <link href="<?php echo STYLES_PATH; ?>bootstrap/bootstrap.css" rel="stylesheet">

  <!-- Bootstrap reboot CSS -->
  <!-- <link href="./css/bootstrap/bootstrap-reboot.min.css" rel="stylesheet"> -->
  <link href="<?php echo STYLES_PATH; ?>bootstrap/bootstrap-reboot.css" rel="stylesheet">

  <!-- Bootstrap grid CSS -->
  <!-- <link href="./css/bootstrap/bootstrap-grid.min.css" rel="stylesheet"> -->
  <link href="<?php echo STYLES_PATH; ?>bootstrap/bootstrap-grid.css" rel="stylesheet">

  <!-- Quicksand google webfont CSS -->
  <link href="<?php echo STYLES_PATH; ?>quicksand/quicksand.min.css" rel="stylesheet">

  <!-- Font Awesome webfont CSS -->
  <!-- WARNING: The version of Font Awesome used is the local 4.7.0, so the icon website where everyone is looking is no longer useful, use this instead https://fontawesome.com/v4.7.0/icons -->
  <link href="<?php echo STYLES_PATH; ?>fontawesome/font-awesome.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="<?php echo STYLES_PATH; ?>custom.css" rel="stylesheet">

  <?php foreach ($args as $arg): ?>
      <!-- Custom per page styles -->
      <link href="<?php echo STYLES_PATH. $arg; ?>.css" rel="stylesheet">
  <?php endforeach; ?>
</head>

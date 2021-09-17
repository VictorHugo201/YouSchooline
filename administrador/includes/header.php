<?php
  session_start();
  if(empty($_SESSION['active'])) {
    header('Location: ../');
  }
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta name="description" content="sistema escolar">
  <title>Youschooline</title>
  <link rel="icon" type="image/png" href="../images/big-icon.png">
  <meta charset="utf-8">
  <link rel="shortcut icon" href="../../images/cohete.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Main CSS-->
  <link rel="stylesheet" type="text/css" href="../css/styles.css">
  <link rel="stylesheet" type="text/css" href="../css/mainn.css">
  <!-- Font-icon css-->
  <!--<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">-->
</head>

<body class="app sidebar-mini">
  <!-- Navbar-->
  <header class="app-header"><a class="app-header__logo" href="index.php">Youschooline</a>
    <!-- Sidebar toggle button--><a class="app-sidebar__toggle" href="#" data-toggle="sidebar"> <i
        class="fas fa-bars"></i></a>
    <!-- Navbar Right Menu-->
    <ul class="app-nav">
      <!-- User Menu-->
      <li class="dropdown"><a class="app-nav__item" href="#" data-toggle="dropdown" aria-label="Open Profile Menu"><i
            class="fa fa-user fa-lg"></i></a>
        <ul class="dropdown-menu settings-menu dropdown-menu-right">
          <li><a class="dropdown-item" href="page-user.html"><i class="fa fa-cog fa-lg"></i> configuracion</a></li>
          <li><a class="dropdown-item" href="page-user.html"><i class="fa fa-user fa-lg"></i> Perfil</a></li>
          <li><a class="dropdown-item" href="../salir.php"><i class="fa fa-sign-out fa-lg"></i> Salir</a></li>
        </ul>
      </li>
    </ul>
  </header>
  <?php require_once 'nav.php'; ?>
<?php
   
    //Iniciar una nueva sesión o reanudar la existente.
   // session_start(); 
    //Si existe la sesión "usuario"..., la guardamos en una variable.
    if (isset($_SESSION['usuario'])){
        $cliente =$_SESSION['usuario'];

    }else{
 header('Location: ../');//Aqui lo redireccionas al lugar que quieras.
     die() ;

    }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta name="description" content="Vali is a responsive and free admin theme built with Bootstrap 4, SASS and PUG.js. It's fully customizable and modular.">
    <!-- Twitter meta-->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:site" content="@pratikborsadiya">
    <meta property="twitter:creator" content="@pratikborsadiya">
    <!-- Open Graph Meta-->
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Vali Admin">
    <meta property="og:title" content="Vali - Free Bootstrap 4 admin theme">
    <meta property="og:url" content="http://pratikborsadiya.in/blog/vali-admin">
    <meta property="og:image" content="http://pratikborsadiya.in/blog/vali-admin/hero-social.png">
    <meta property="og:description" content="Vali is a responsive and free admin theme built with Bootstrap 4, SASS and PUG.js. It's fully customizable and modular.">
    <title><?php echo TITULO; ?></title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Main CSS-->
    <link rel="stylesheet" type="text/css" href="<?php echo RUTA_URL;?>/public/css/main.css">
    <!-- Mi estilo CSS-->
    <link rel="stylesheet" type="text/css" href="<?php echo RUTA_URL;?>/public/css/estilo.css">
    <!-- EDITOR CSS-->
    <link rel="stylesheet" type="text/css" href="<?php echo RUTA_URL;?>/public/css/editor.css">
    <!-- Font-icon css-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    
  </head>
  <body class="app sidebar-mini rtl">
    <!-- Navbar-->
    <header class="app-header"><a class="app-header__logo" href="?c=inicio&a=Principal">Practica para el desarrollo Admin</a>
     
      <!-- Navbar Right Menu-->
      <ul class="app-nav">
        <li class="app-search">
          <input class="app-search__input" type="search" placeholder="Search">
          <button class="app-search__button"><i class="fa fa-search"></i></button>
        </li>
        
        <!-- User Menu-->
        <li class="dropdown"><a class="app-nav__item" href="#" data-toggle="dropdown" aria-label="Open Profile Menu"><i class="fa fa-user fa-lg"></i></a>
          <ul class="dropdown-menu settings-menu dropdown-menu-right">
             <li><a class="dropdown-item" href="?c=logout&a=closeSession"><i class="fa fa-sign-out-alt  fa-lg"></i> Cerrar Sesión</a></li>
          </ul>
        </li>
      </ul>
    </header>
   <!-- Sidebar menu-->
    <div class="app-sidebar__overlay" data-toggle="sidebar"></div>
    <aside class="app-sidebar">
   <img src="<?php echo RUTA_URL;?>/public/img/logo/ini_sec.png"> 
 
      <ul class="app-menu">
        <li><a class="app-menu__item active" href="?c=inicio&a=Principal"><i class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label">Inicio</span></a></li>
        <?php if($_SESSION['rol']==1) { ?>
        <li><a class="app-menu__item" href="?c=usuario&a=inicio"><i class="app-menu__icon fa fa-address-card"></i><span class="app-menu__label">Usuarios</span></a></li>
        <?php } ?>
      </ul>
    </aside>
 


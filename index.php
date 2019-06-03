<?php

  require_once 'app/modelo/config_BD.php';
  require_once 'app/modelo/configurar.php';
  $controller = 'login';

  // Todo esta lógica hara el papel de un FrontController
  if(!isset($_REQUEST['c']))
  {
    //Llamado de la página principal
    require_once "app/controlador/$controller.controller.php";
    $controller = ucwords($controller) . 'Controller';
    $controller = new $controller;
    $controller->Index();
  }
  else
  {
    // Obtiene el controlador a cargar
    $controller = strtolower($_REQUEST['c']);
    $accion = isset($_REQUEST['a']) ? $_REQUEST['a'] : 'Index';

    // Instancia el controlador
    require_once "app/controlador/$controller.controller.php";
    $controller = ucwords($controller) . 'Controller';
    $controller = new $controller;

    // Llama la accion
    call_user_func( array( $controller, $accion ) );
  }

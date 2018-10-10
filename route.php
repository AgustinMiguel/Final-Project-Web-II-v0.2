<?php
  require_once "controller/TpeController.php";
  $controller = new TpeController();
  $partesURL = explode ("/", $_GET['action']);
  if($partesURL[0] === ''){
    $controller->TablaEquipos();
  }else {
    if ($partesURL[0] == 'agregar') {
      $controller->InsertarEquipo();
      } elseif($partesURL[0] === 'borrar') {
          $controller->BorrarEquipo($partesURL[1]);
        }
        elseif($partesURL[0] === 'registro'){
              //  loadRegistro();
        }
  }

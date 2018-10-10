<?php
require_once "controller/TpeController.php";
$controller = new TpeController();
if($_GET['action'] == ''){
  $controller->home();
}
else{
  $partesURL = explode ("/", $_GET['action']);
  if($partesURL[0] === 'tabla'){
  //  loadTabla();
  }
  elseif($partesURL[0] === 'lista'){
  //  loadLista();
  }
  elseif($partesURL[0] === 'registro'){
  //  loadRegistro();
  }
}

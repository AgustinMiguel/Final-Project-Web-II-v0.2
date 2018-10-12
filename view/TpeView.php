<?php
require_once('libs/Smarty.class.php');
  /**
   *
   */
  class TpeView
  {

    function Home($Titulo){
      $smarty =new Smarty();
      $smarty->assign('Titulo',$Titulo);
      $smarty->display('templates/home.tpl');
    }

    function Tabla($Titulo, $Equipos)
    {
      $smarty = new Smarty();
      $smarty->assign('Titulo',$Titulo);
      $smarty->assign('Equipos',$Equipos);
      $smarty->display('templates/equipos.tpl');

    }
    function Lista($Titulo)
    {
      $smarty = new Smarty();
      $smarty->assign('Titulo',$Titulo);
      $smarty->display('templates/lista.tpl');
    }
    function Registro($Titulo)
    {
      $smarty = new Smarty();
      $smarty->assign('Titulo',$Titulo);
      $smarty->display('templates/registro.tpl');
    }
    function UpdateEquipo($Titulo, $Equipo){
      $smarty = new Smarty();
      $smarty->assign('Titulo',$Titulo);
      $smarty->assign('Equipo',$Equipo);
      $smarty->assign('home',"http://".$_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]));
      $smarty->display('templates/editarEquipo.tpl');
  }

  }

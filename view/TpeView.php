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
  }

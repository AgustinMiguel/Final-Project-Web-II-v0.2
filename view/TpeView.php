<?php
require('libs/Smarty.class.php');
  /**
   *
   */
  class TpeView
  {



    function Tabla($Titulo, $Equipos)
    {
      $smarty = new Smarty();
      $smarty->assign('Titulo',$Titulo);
      $smarty->assign('Equipos',$Equipos);
      $smarty->display('templates/equipos.tpl');

    }
  }

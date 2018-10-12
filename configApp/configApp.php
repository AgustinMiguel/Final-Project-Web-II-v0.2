<?php
define('HOME', 'Location: http://'.$_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]));
define('LOGIN', 'Location: http://'.$_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]). '/login');
define('LOGOUT', 'Location: http://'.$_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]). '/logout');
define('LISTA', 'Location: http://'.$_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]). '/lista');
define('TABLA', 'Location: http://'.$_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]). '/tabla');
define('REGISTRO', 'Location: http://'.$_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]). '/registro');
define('EDITAR', 'Location: http://'.$_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]). '/editarequipo');

class ConfigApp
{
    public static $ACTION = 'action';
    public static $PARAMS = 'params';
    public static $ACTIONS = [
      '' => 'TpeController#Home',
      'home' =>'TpeController#Home',
      'tabla'=>'TpeController#TablaEquipos',
      'borrar'=> 'TpeController#BorrarEquipo',
      'agregar'=>'TpeController#InsertarEquipo',
      'lista' => 'TpeController#CargarLista',
      'registro'=> 'TpeController#CargarRegistro',
      'editar' => 'TpeController#EditarEquipo',
      'guardarEditar' => 'TpeController#GuardarEditarEquipo',
    ];
}
 ?>

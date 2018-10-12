<?php
require_once "./view/TpeView.php";
require_once "./model/TpeModel.php";
class TpeController
{
  private $view;
  private $model;
  private $Titulo = "NBA";
  private $Equipos;

  function __construct(){
    $this->view = new TpeView();
    $this->model = new TpeModel();
    $this->Titulo = "Lista controlador";
  }

  function Home(){
    $this->view->Home($this->Titulo);
  }

  function TablaEquipos(){
    $Equipos = $this->model->GetEquipos();
    $this->view->Tabla($this->Titulo, $Equipos);
  }

  function InsertarEquipo(){
    $equipo=$_POST["equipoForm"];
    $p_ganados =$_POST["ganadosForm"];
    $p_perdidos=$_POST["perdidosForm"];
    $this->model->InsertarEquipo($equipo, $p_ganados, $p_perdidos);
    header("Location: http://".$_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]));
  }

  function BorrarEquipo($param){
    $this->model->BorrarEquipo($param[0]);
    header("Location: http://".$_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]));

  }
  function CargarLista(){
    $this->view->Lista($this->Titulo);
  }
  function CargarRegistro(){
    $this->view->Registro($this->Titulo);
  }
}
?>

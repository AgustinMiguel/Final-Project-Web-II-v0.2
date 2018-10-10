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
    $Equipos = $this->model->GetEquipos();
    $this->view->Home($this->Titulo, $Equipos);
  }

  function TablaEquipos(){
    $Equipos = $this->model->GetEquipos();
    $this->view->Tabla($this->Titulo, $Equipos);
  }

  function InsertarEquipo(){
    $equipo=$_POST["tituloform"];
    $p_ganados =$_POST["ganadosform"];
    $p_perdidos=$POST["perdidosform"];
    $this->model->InsertarEquipo($equipo, $p_ganados, $p_perdidos);
    header("");
  }
  function BorrarEquipo($id_equipo){
    $this->model->Borrar($id_equipo);
  }
}
?>

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
    $this->Titulo = "NBA";
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
    header("Location: http://".$_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"])."/equipos");
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
function EditarEquipo($param){
    $id_equipo = $param[0];
    $Equipo = $this->model->GetEquipo($id_equipo);
    $this->view->MostrarEditarEquipo("Editar Equipo", $Equipo);
}
function GuardarEditarEquipo(){
    $id_equipo = $_POST["idForm"];
    $nombre_equipo = $_POST["nombreForm"];
    $partidos_ganados = $_POST["pgForm"];
    $partidos_perdidos = $_POST["ppForm"];
    $this->model->GuardarEditarEquipo($nombre_equipo, $partidos_ganados, $partidos_perdidos, $id_equipo);
    header("Location: http://".$_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"].'/guardarEditar'));
  }

}

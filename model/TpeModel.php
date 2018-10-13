<?php
/**
*
*/
class TpeModel
{
  private $db;

  function __construct()
  {
    $this->db = $this->Connect();
  }

  private function Connect()
  {
    return new PDO('mysql:host=localhost;'.'dbname=tpe;charset=utf8', 'root', '');
  }

  function GetEquipos(){
    $sentencia = $this->db->prepare( "select * from equipos");
    $sentencia->execute();
    return $sentencia->fetchAll(PDO::FETCH_ASSOC);
  }
  function GetJugadores(){
    $sentencia = $this->db->prepare( "select * from jugadores");
    $sentencia->execute();
    return $sentencia->fetchAll(PDO::FETCH_ASSOC);
  }
  function InsertarEquipo($equipo, $p_ganados, $p_perdidos){
    $sentencia = $this->db->prepare("INSERT INTO equipos(nombre_equipo, partidos_ganados, partidos_perdidos) VALUES(?,?,?)");
    $sentencia->execute(array($equipo, $p_ganados, $p_perdidos));

  }
  function InsertarJugador($nombre_jugador, $procedencia, $id_equipo){
    $sentencia = $this->db->prepare("INSERT INTO jugadores(nombre_jugador, procedencia, id_equipo) VALUES(?,?,?)");
    $sentencia->execute(array($nombre_jugador, $procedencia, $id_equipo));
  }
  function BorrarEquipo($id_equipo){
    $sentencia = $this->db->prepare( "delete from equipos where id_equipo=?");
    $sentencia->execute(array($id_equipo));
  }
  function BorrarJugador($id_jugador){
    $sentencia = $this->db->prepare( "delete from jugadores where id_jugador=?");
    $sentencia->execute(array($id_jugador));
  }
  function GetEquipo($id){
    $sentencia = $this->db->prepare( "select * from equipos where id_equipo=?");
    $sentencia->execute(array($id));
    return $sentencia->fetch(PDO::FETCH_ASSOC);
  }
  function UpdateEquipo($nombre_equipo, $partidos_ganados, $partidos_perdidos, $id_equipo){
    $sentencia = $this->db->prepare( "update equipos set nombre_equipo = ?, partidos_ganados = ?, partidos_perdidos = ? where id_equipo=?");
    $sentencia->execute(array($nombre_equipo, $partidos_ganados, $partidos_perdidos, $id_equipo));
  }
  function GetJugador($id){
    $sentencia = $this->db->prepare( "select * from jugadores where id_jugador=?");
    $sentencia->execute(array($id));
    return $sentencia->fetch(PDO::FETCH_ASSOC);
  }
  function UpdateJugador($nombre_jugador, $procedencia, $id_jugador){
    $sentencia = $this->db->prepare( "update jugadores set nombre_jugador = ?, procedencia = ? where id_jugador=?");
    $sentencia->execute(array($nombre_jugador, $procedencia, $id_jugador));
}
}

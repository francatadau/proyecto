<?php

/**
 *
 */
 //Creamos la clase
class dbNBA
{
  //atributos privados
private $conexion;
private $mysqli;
private $errorConexion=false;

//Creamos la conexión
function __construct()
{
    $this->mysqli = new mysqli ("localhost","root","","nba");
    if ($this->mysqli->connect_errno) {
      //Error
      $this->errorConexion=true;
    }
  }
  //Getters y Setters
  public function getErrorConexion()
  {
    return $this->errorConexion();
  }

//Consultas
  public function mostrarEquipos(){
    $resultado1 = $mysqli->query("SELECT * FROM equipos");
  }

  public function mostrarConfEste(){
    $resultado1 = $mysqli->query("SELECT * FROM equipos WHERE Conferencia="East"");
  }

  public function mostrarTemporada(){
    $resultado1 = $mysqli->query("SELECT * FROM partidos");
  }
}

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title> Database </title>
  </head>
  <body>
    <?php
    //Crear el objeto de conexion
    $mysqli = new mysqli ("localhost", "root", "", "nba");
    if ($mysqli->connect_errno) {
      //Ha habido un error
      echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
    }else {

      $resultado1 = $mysqli->query("SELECT * FROM partidos");
  }
     ?>
     <h1><a href="index.php"></a>Inicio</h1>
     <a href="confeste.php">Conferencia Este</a>
     <a href="">Conferencia Oeste</a>
    <hr>

     <table border="1">
      <tr>
        <th> Equipo Local </th>
        <th> Equipo Visitante </th>
        <th> Puntos Local </th>
        <th> Puntos Visitante </th>
      </tr>


      <?php

      while ($fila1=$resultado1->fetch_assoc()) {

        echo "<tr>";
        echo "<td>".$fila1['equipo_local']."</td>";
        echo "<td>".$fila1['equipo_visitante']."</td>";
        echo "<td>".$fila1['puntos_local']."</td>";
        echo "<td>".$fila1['puntos_visitante']."</td>";

      }
      echo "</table>";
      ?>

  </body>
</html>

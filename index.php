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

      $resultado1 = $mysqli->query("SELECT * FROM equipos");
  }

     ?>
     <h1><a href="confeste.php"></a>Conferencia Este</h1>
     <a href="">Conferencia Oeste</a>
     <a href="temporada.php">Temporada 99/00</a>
    <hr>

     <table border="1">
      <tr>
        <th> Nombre </th>
        <th> Ciudad </th>
        <th> Conferencia </th>
        <th> Division </th>
      </tr>


      <?php

      
      while ($fila1=$resultado1->fetch_assoc()) {

        echo "<tr>";
        echo "<td>".$fila1['Nombre']."</td>";
        echo "<td>".$fila1['Ciudad']."</td>";
        echo "<td>".$fila1['Conferencia']."</td>";
        echo "<td>".$fila1['Division']."</td>";

      }
      echo "</table>";
      ?>

  </body>
</html>

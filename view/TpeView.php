<?php
  /**
   *
   */
  class TpeView
  {



    function Tabla($Titulo, $Equipos)
    {
      ?>
      <!DOCTYPE html>
      <html lang="en" dir="ltr">
      <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="../CSS/estilos.css" type="text/css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <title><?php echo $Titulo ?></title>
      </head>
        <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-primary">
          <img src="images/nba-logo.png" alt="" height="50px" class="foto">
          <a class="navbar-brand" href="#"></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="#" id="botonHome">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#" id="botonTabla">Regular Season</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#" id="botonLista">All-Star</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#" id="botonRegistro">Register</a>
              </li>
            </ul>
          </div>
        </nav>
        <h1><?php echo $Titulo ?></h1>

        <div class="container">
          <ul class="list-group">

            <?php
                foreach($Equipos as $equipo){
                    echo '<li class="list-group-item">'.$equipo['nombre_equipo'].': '.$equipo['partidos_ganados'].': '.$equipo['partidos_perdidos'].'</li>';
                }
             ?>

          </ul>
        </div>

      </header>
      <div class="container-fluid">
      </div>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
        <script src="js/our.js" charset="utf-8"></script>
      </body>
      </html>
  <?php
    }
  }

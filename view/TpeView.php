<?php
  /**
   *
   */
  class TpeView
  {



    function Home()
    {
      ?>
      <!DOCTYPE html>
      <html lang="en" dir="ltr">
      <head>
        <link rel="stylesheet" href="../CSS/estilos.css" type="text/css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
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

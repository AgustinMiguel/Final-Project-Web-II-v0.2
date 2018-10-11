{include file="header.tpl"}
  <body>
  <h1>{$Titulo}</h1>

  <div class="container-fluid">
    <ul class="list-group">

          {foreach from=$Equipos item=equipo}
              <li class="list-group-item">{$equipo['nombre_equipo']}: {$equipo['partidos_ganados']}: {$equipo['partidos_perdidos']}<a href="borrar/{$equipo['id_equipo']}">BORRAR</a></li>

       {/foreach}
    </ul>
  </div>

  <div class="container-fluid">
    <br>
    <br>
    <h2>Equipo</h2>
    <form method="post" action="agregar">
      <div class="form-group">
        <label for="equipoForm">Nombre Equipo</label>
        <input type="text" class="form-control" id="equipoForm" name="equipoForm">
      </div>
      <div class="form-group">
        <label for="ganadosForm">Partidos ganados</label>
        <input type="text" class="form-control" id="ganadosForm" name="ganadosForm">
      </div>
      <div class="form-group">
        <label for="perdidosForm">Partidos perdidos</label>
        <input type="text" class="form-control" id="perdidosForm" name="perdidosForm">
      </div>
      <button type="submit" class="btn btn-primary">Agregar Equipo</button>
    </form>
  </div>
<div class="container-fluid">
</div>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
  <script src="js/our.js" charset="utf-8"></script>
</body>
</html>

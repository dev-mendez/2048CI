<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="<?=base_url()?>assets/style/bootstrap.min.css" rel="stylesheet">
  <link href="<?=base_url()?>assets/style/datatables.min.css" rel="stylesheet">
  <link href="<?=base_url()?>assets/style/dataTables.bootstrap4.min.css" rel="stylesheet">

  
    <link rel="shortcut icon" href="<?=base_url()?>assets/favicon.ico">


	<title>Scoreboard</title>
</head>
<body>
	<nav class="navbar navbar-light bg-dark text-light">
  <a class="navbar-brand text-light" href="/2048">
    <img src="<?=base_url()?>assets/favicon.ico" width="30" height="30" class="d-inline-block align-top" alt="">
    Tabla de posiciones
  </a>
        <a class="nav-item btn btn-warning btn-sm nav-link text-dark" href="<?=base_url()?>2048">Regresar</a>



</nav>

</div>
<div class="container" style="margin-top:5px;">
<table class="table table-dark table-sm" id="tableRecords">
  <thead>
    <tr>
      <th scope="col">Posición</th>
      <th scope="col">Nickname</th>
      <th scope="col">Record</th>
       <th scope="col">Intentos</th>


    </tr>
  </thead>
  <tbody>
    
  </tbody>
</table></div>
  <div class="pos-f-t" style="margin-bottom: 4%">
  <div class="collapse" id="navbarToggleExternalContent" style="background-color:#343a40 !important">
    <div class=" p-4" >
      <h5 class="text-white h4">Tabla de posiciones</h5>
      <span class="text-muted">El top 1 de la tabla dentro de los 14 dias luego de puesto el record recibirá premio de una transferencia de 5 cuc.</span>
    </div>
  </div>
  <nav class="navbar navbar-dark fixed-bottom bg-dark">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  </nav>
<script src="<?=base_url()?>assets/js/jquery-3.1.1.min.js"></script>
  <script src="<?=base_url()?>assets/js/bootstrap.min.js"></script>
  <script src="<?=base_url()?>assets/js/datatables.min.js"></script>

  <script src="<?=base_url()?>assets/js/tableFetch.js"></script>

</body>
</html>

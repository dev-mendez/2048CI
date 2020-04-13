<!doctype html>
<html lang="en">
  
<meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="<?=base_url()?>assets/favicon.ico">

    <title>Acceder - 2048</title>

    <!-- Bootstrap core CSS -->
    <link href="<?=base_url()?>assets/style/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?=base_url()?>assets/style/signin.css" rel="stylesheet">

  </head>

  <body class="text-center">
        <?php echo validation_errors(); ?>
        <?php $attributes = array('class' => 'form-signin', 'id' => 'formlogin', 'name' => 'formlogin'); ?>
        <?php echo form_open('Home/checklogued', $attributes); ?>

      <img class="mb-4" src="<?=base_url()?>assets/logo.png" alt="" width="72" height="72">
      <h1 class="h3 mb-3 font-weight-normal">Por favor accede</h1>
      <label for="loginnick" class="sr-only">Numero de</label>
      <input type="text" name="loginnick" id="loginnick" class="form-control" placeholder="Nick" required autofocus>
			
      <label for="loginpassword" class="sr-only">Password</label>
      <input type="password" name="loginpassword" id="loginpassword" class="form-control" placeholder="Password" required>

      <button class="btn btn-lg text-light btn-block"style="background:#8f7a66;" type="">Acceder</button>
      <button class="btn btn-lg text-light btn-block"id="regBtn" style="background:#8f7a66;" type="">Registrarse</button>
            <p class="mt-5 mb-3 text-muted">&copy; 2020 by LukeSkywalker</p>
    </form>

<div class="modal fade" id="regModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Registro</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       
<form class="userForm" id="userForm" method="post" action="Home/regUser">

    <div class="form-group">
    <label for="usernameID">Username</label>
    <input type="text" class="form-control" id="REGusername" name="REGusername" aria-describedby="emailHelp">
    <small id="" class="form-text text-muted"></small>
  </div>

  <div class="form-group">
    <label for="phone">Numero de Celular</label>
    <input type="number" class="form-control" id="phone" name="phone" aria-describedby="emailHelp">
    <small class="form-text text-muted">Tu número no será compartido solo sera usado en caso de resultar el ganador de la temporada.</small>
  </div>

      <div class="form-group">
      <label for="validationDefault04">Provincia</label>
      <select   name="province" class="custom-select" id="province" required>
                    <option value="Pinar del R&iacute;o">Pinar del R&iacute;o</option>
                    <option value="Artemisa">Artemisa</option>
                    <option value="Mayabeque">Mayabeque</option>
                    <option value="La Habana">La Habana</option>
                    <option value="Matanzas">Matanzas</option>
                    <option value="Cienfuegos">Cienfuegos</option>
                    <option value="Villa Clara">Villa Clara</option>
                    <option value="Sancti Spiritus">Sancti Spiritus</option>
                    <option value="Ciego de &Aacute;vila">Ciego de &Aacute;vila</option>
                    <option value="Camaguey">Camaguey</option>
                    <option value="Las Tunas">Las Tunas</option>
                    <option value="Holguin">Holguin</option>
                    <option value="Granma">Granma</option>
                    <option value="Santiago de Cuba">Santiago de Cuba</option>
                    <option value="Guant&aacute;namo">Guant&aacute;namo</option>
                    <option value="Isla de la Juventud">Isla de la Juventud</option>
      </select>
    </div>
  <div class="form-group">
    <label for="password">Contraseña</label>
    <input type="password" class="form-control" id="REGpassword" name="REGpassword" >
  </div>
  <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="agree" name="agree">
    <label class="form-check-label" for="exampleCheck1" > <a id="terms" href="">Aceptar los terminos</a> </label>
  </div>
  <button type="submit" id="ModReg" class="btn btn-info" style="background:#8f7a66;">Registrarse</button>
</form>


      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
        
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="termsModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Términos</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
         

        <ul class="list-group">
  <li class="list-group-item">1-> Sus datos personales no serán revelados a terceros solo los usaremos para los ganadores de las temporadas</li>
  <li class="list-group-item">2 -> Uso de Hacks implica, suspension de la cuenta permanentemente</li>
  <li class="list-group-item">3 -> Se irán añadiendo nuevos juegos y premios para las competencias</li>
</ul>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
        <button type="button" class="btn btn-info" data-dismiss="modal" style="background:#8f7a66;">Aceptar</button>
      </div>
    </div>
  </div>
</div>


		<script src="<?=base_url()?>assets/js/jquery-3.1.1.min.js"></script>
    <script src="<?=base_url()?>assets/js/jquery.validate.js"></script>
    <script src="<?=base_url()?>assets/js/validations.js"></script>
    <script src="<?=base_url()?>assets/js/registro.js"></script>
		<script src="<?=base_url()?>assets/js/bootstrap.min.js"></script>
		


  </body>

</html>

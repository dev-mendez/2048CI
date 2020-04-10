<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>2048</title>

  <link href="<?=base_url()?>assets/style/main.css" rel="stylesheet" type="text/css">
  

  <link rel="shortcut icon" href="<?=base_url()?>assets/favicon.ico">
  <link rel="apple-touch-icon" href="<?=base_url()?>assets/meta/apple-touch-icon.png">
  <link rel="apple-touch-startup-image" href="<?=base_url()?>assets/meta/apple-touch-startup-image-640x1096.png" media="(device-width: 320px) and (device-height: 568px) and (-webkit-device-pixel-ratio: 2)"> <!-- iPhone 5+ -->
  <link rel="apple-touch-startup-image" href="<?=base_url()?>assets/meta/apple-touch-startup-image-640x920.png"  media="(device-width: 320px) and (device-height: 480px) and (-webkit-device-pixel-ratio: 2)"> <!-- iPhone, retina -->
  <link href="<?=base_url()?>assets/style/sweetalert2.min.css" rel="stylesheet" type="text/css">
	
	<meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-status-bar-style" content="black">
  <meta name="HandheldFriendly" content="True">
  <meta name="MobileOptimized" content="320">
  <meta name="viewport" content="width=device-width, target-densitydpi=160dpi, initial-scale=1.0, maximum-scale=1, user-scalable=no, minimal-ui">
</head>
<body>
  <div class="container">
    <div class="heading">
      <h1 class="title">2048</h1>

      <div class="scores-container">
        <div class="score-container">0</div>
        <div class="best-container">0</div>
        <h3 class="title"><?=$user['0']->nickname?></h3>
      </div>
    </div>

    <div class="above-game">
      <p class="game-intro">Une los números hasta llegar a<strong> 2048</strong></p>

      <a class="restart-button">New Game</a>
   
    
    
    </div>

    <div class="game-container">
      <div class="game-message">
        <p></p>
        <div class="lower">
	        <a class="keep-playing-button">Keep going</a>
          <a class="retry-button">Intentar de nuevo</a>
        </div>
      </div>

      <div class="grid-container">
        <div class="grid-row">
          <div class="grid-cell"></div>
          <div class="grid-cell"></div>
          <div class="grid-cell"></div>
          <div class="grid-cell"></div>
        </div>
        <div class="grid-row">
          <div class="grid-cell"></div>
          <div class="grid-cell"></div>
          <div class="grid-cell"></div>
          <div class="grid-cell"></div>
        </div>
        <div class="grid-row">
          <div class="grid-cell"></div>
          <div class="grid-cell"></div>
          <div class="grid-cell"></div>
          <div class="grid-cell"></div>
        </div>
        <div class="grid-row">
          <div class="grid-cell"></div>
          <div class="grid-cell"></div>
          <div class="grid-cell"></div>
          <div class="grid-cell"></div>
        </div>
      </div>

      <div class="tile-container">

      </div>
    </div>
            <h3 class="title"><a href="home/logout">Cerrar Sessión</a></h3>
            <h3 class="title"><a href="scoreboard">Scoreboard</a></h3>
    <p class="game-explanation">
      <strong class="important">Como jugar:</strong> Usa tus <strong>teclas de dirección</strong> para mover los cuadros, cuando dos cuadros con el mismo valor se solapan <strong>Se unen dentro de otro con el doble del valor</strong>
    </p>
    <hr>
    <p>
    <strong class="important">Nota:</strong> Esta versión aún se encuentra en desarrollo cualquier sugerencia que tenga puede escribirla a avaldesa007@gmail.com
    </p>
    <hr>
    <p>
    Creado por <a href="http://network.cubava.cu" target="_blank">Adonys Valdés.</a> Basado en <a href="https://itunes.apple.com/us/app/1024!/id823499224" target="_blank">1024 by Veewo Studio</a> 
    </p>
  </div>
  <input type="hidden" name="id" id="id" value="<?=$user['0']->id?>">
  <audio id="xyz" src="<?=base_url()?>assets/js/start.wav" preload=""></audio>
  <audio id="cuac" src="<?=base_url()?>assets/js/cuac.wav" preload=""></audio>


  <script src="<?=base_url()?>assets/js/Bootstrap.js"></script>
	<script src="<?=base_url()?>assets/js/bind_polyfill.js"></script>
  <script src="<?=base_url()?>assets/js/sweetalert2.min.js"></script>
  <script src="<?=base_url()?>assets/js/classlist_polyfill.js"></script>
  <script src="<?=base_url()?>assets/js/animframe_polyfill.js"></script>
	<script src="<?=base_url()?>assets/js/keyboard_input_manager.js"></script>
	<script src="<?=base_url()?>assets/js/jquery-3.1.1.min.js"></script>
  <script src="<?=base_url()?>assets/js/html_actuator.js"></script>
  <script src="<?=base_url()?>assets/js/grid.js"></script>
  <script src="<?=base_url()?>assets/js/tile.js"></script>
  <script src="<?=base_url()?>assets/js/local_storage_manager.js"></script>
  <script src="<?=base_url()?>assets/js/game_manager.js"></script>
  <script src="<?=base_url()?>assets/js/application.js"></script>
	<script src="<?=base_url()?>assets/js/main.js"></script>

</body>
</html>

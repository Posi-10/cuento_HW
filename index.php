<?php require_once 'app/config.php'; ?>
<!DOCTYPE html>
<html lang="es">

<head>
  <title>Cuento</title>
  <!--Requiere etiquetas meta-->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta charset="utf-8">
  <!--CSS-->
  <?php require_once 'app/dependencias_css.php';?>
</head>

<body>
<?php
  if (isset($_GET['vista_solicitada'])) {
    switch ($_GET['vista_solicitada']) {
      case 'capitulos': {
        require_once 'view/capitulos.php';
        break;
      }
      case 'capitulo_1': {
        require_once 'view/capitulo_1.php';
        break;
      }
      case 'capitulo_2': {
        require_once 'view/capitulo_2.php';
        break;
      }
      case 'capitulo_3': {
        require_once 'view/capitulo_3.php';
        break;
      }
      case 'capitulo_4': {
        require_once 'view/capitulo_4.php';
        break;
      }default: {
        require_once 'view/error.php';
        break;
      }
    }
  } else {
    require_once 'view/capitulos.php';
  }
  ?>
  <i class="fa fa-hourglass" aria-hidden="true"></i>
  <!--JavaScript-->
  <?php require_once 'app/dependencias_js.php';?>
</body>

</html>
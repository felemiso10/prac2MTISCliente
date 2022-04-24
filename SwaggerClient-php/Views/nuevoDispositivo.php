<?php

require_once '../vendor/autoload.php';
use Swagger\Client\Api\DispositivoApi;
use Swagger\Client\Model\Dispositivo;

$error = null;
if (isset($_GET['codigo'])) {
    $codigo = (int)$_GET['codigo'];
    $api = new DispositivoApi();
    try {
        $dispositivo = new  Dispositivo();
        $dispositivo->setCodigo($_GET['codigo']);
        $dispositivo->setDescripcion($_GET['descripcion']);
        $result = $api->nuevoDispositivo($dispositivo, $_GET['restKey']);
    } catch (Exception $e) {
        //var_dump($e->getCode());
        $error = $e;
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consultar Dispositivo</title>
</head>
<body>
<form action="" method="GET">
    Codigo:<input type="text" name="codigo" placeholder="Codigo dispostivo"/> <br><br>
    Descripcion:<input type="text" name="descripcion" placeholder="Codigo dispostivo"/> <br><br>
    restKey:<input type="text"  name="restKey"/> <br><br>
    <input type="submit" value="Buscar">
</form>

<?php
    if ($error != null) {
        echo "<h1>".$error->getMessage()."</h1>";
    }


?>
</body>
</html>


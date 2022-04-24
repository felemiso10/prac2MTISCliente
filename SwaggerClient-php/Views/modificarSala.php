<?php

require_once '../vendor/autoload.php';
use Swagger\Client\Api\DispositivoApi;
use Swagger\Client\Api\SalaApi;
use Swagger\Client\Model\Dispositivo;
use Swagger\Client\Model\Sala;

$error = null;
if (isset($_GET['codigo'])) {
    $codigo = (int)$_GET['codigo'];
    $api = new SalaApi();
    try {
        $sala = new  Sala();
        $sala->setCodigo($_GET['codigo']);
        $sala->setNivel($_GET['nivel']);
        $sala->setNombre($_GET['nombre']);
        var_dump($sala);
        $result = $api->modificarSala($sala, $_GET['restKey']);
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
    Nombre:<input type="text" name="nombre" placeholder="Nombre"/> <br><br>
    Nivel:<input type="text" name="nivel" placeholder="Nivel"/> <br><br>
    restKey:<input type="text"  name="restKey"/> <br><br>
    <input type="submit" value="Buscar">
</form>

<?php
if ($error != null) {
    echo "<h1>".$error->getMessage()."</h1>";
}

if ($result != null) {
    echo "<h1>".$result->getMessage()."</h1>";
}

?>
</body>
</html>



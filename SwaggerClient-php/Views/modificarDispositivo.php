<?php

require_once '../vendor/autoload.php';
use Swagger\Client\Api\DispositivoApi;
use Swagger\Client\Model\Dispositivo;

$error = null;
if (isset($_POST['codigo'])) {
    $codigo = (int)$_POST['codigo'];
    $api = new DispositivoApi();
    try {
        $dispositivo = new  Dispositivo();
        $dispositivo->setCodigo($_POST['codigo']);
        $dispositivo->setDescripcion($_POST['descripcion']);
        $result = $api->modificarDispositivo($dispositivo, $_POST['restKey']);
        var_dump($result);
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
    <title>Modificar Dispositivo</title>
</head>
<body>
<form action="" method="POST">
    Código:<input type="text" name="codigo" placeholder="Codigo dispostivo"/> <br><br>
    Descripción:<input type="text" name="descripcion" placeholder="Codigo dispostivo"/> <br><br>
    restKey:<input type="text"  name="restKey"/> <br><br>
    <input type="submit" value="Modificar">
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


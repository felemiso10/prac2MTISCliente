
<?php
require_once '../vendor/autoload.php';
use Swagger\Client\Api\NivelApi;
use Swagger\Client\Model\Nivel;

$error = null;
if (isset($_GET['nivel'])) {

    $api = new NivelApi();
    $nivel = new Nivel();
    $nivel->setNivel($_GET['nivel']);
    $nivel->setDescripcion($_GET['descripcion']);
    try {
        $result = $api->nuevoNivel($nivel, $_GET['restKey']);
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
    <title>Consultar Nivel</title>
</head>
<body>
<form action="" method="GET">
    Nivel:<input type="text" name="nivel" placeholder="Nivel"/> <br><br>
    Descripción:<input type="text" name="descripcion" placeholder="Descripcion"/> <br><br>
    restKey:<input type="text"  name="restKey"/> <br><br>
    <input type="submit" value="Buscar">
</form>

<?php
if ($error != null) {
    echo "<h1>".$error->getMessage()."</h1>";
}

//if ($result != null) {
//    echo "<h1>".$result->getId()."</h1>";
//    echo "<h1>".$result->getDescripcion()."</h1>";
//    echo "<h1>".$result->getId()."</h1>";
//}
?>
</body>
</html>
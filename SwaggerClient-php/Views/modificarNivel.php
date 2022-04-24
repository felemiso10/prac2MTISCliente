
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
        $result = $api->modificarNivel($nivel, $_GET['restKey']);
    } catch (Exception $e) {
        //var_dump($e->getCode());
        $error = $e;
    }
    var_dump($result);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modificar Nivel</title>
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

if ($result != null) {
    echo "<h1>".$result->getMessage()."</h1>";
}
?>
</body>
</html>
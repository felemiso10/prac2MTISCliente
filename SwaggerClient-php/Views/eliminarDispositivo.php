
<?php
require_once '../vendor/autoload.php';
use Swagger\Client\Api\DispositivoApi;

$error = null;
if (isset($_POST['codigo'])) {
    $codigo = (int)$_POST['codigo'];
    $api = new DispositivoApi();
    try {
        $result = $api->borrarDispositivo($codigo, $_POST['restKey']);
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
    <title>Eliminar Dispositivo</title>
</head>
<body>
<form action="" method="POST">
    Codigo:<input type="text" name="codigo" placeholder="Codigo dispostivo"/> <br><br>
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

//if ($result != null) {
//    echo "<h1>".$result."</h1>";
//}
?>
</body>
</html>
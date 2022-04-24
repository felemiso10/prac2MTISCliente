
<?php
require_once '../vendor/autoload.php';
use Swagger\Client\Api\SalaApi;

$error = null;
if (isset($_GET['codigo'])) {
    $codigo = $_GET['codigo'];
    $api = new SalaApi();
    try {
        $result = $api->consultarSala($codigo, $_GET['restKey']);
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
    <title>Consultar Sala</title>
</head>
<body>
<form action="" method="GET">
    Codigo:<input type="text" name="codigo" placeholder="Codigo Sala"/> <br><br>
    restKey:<input type="text"  name="restKey"/> <br><br>
    <input type="submit" value="Buscar">
</form>

<?php
if ($error != null) {
    echo "<h1>".$error->getMessage()."</h1>";
}

if ($result != null) {
    echo "<h1>".$result->getId()."</h1>";
    echo "<h1>".$result->getCodigo()."</h1>";
    echo "<h1>".$result->getNivel()."</h1>";
}
?>
</body>
</html>
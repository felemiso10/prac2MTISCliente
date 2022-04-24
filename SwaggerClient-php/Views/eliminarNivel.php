
<?php
require_once '../vendor/autoload.php';
use Swagger\Client\Api\NivelApi;

$error = null;
if (isset($_GET['nivel'])) {
    $nivel = (int)$_GET['nivel'];
    $api = new NivelApi();
    try {
        $result = $api->borrarNivel($nivel, $_GET['restKey']);
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
    <title>Eliminar Nivel</title>
</head>
<body>
<form action="" method="GET">
    Codigo:<input type="text" name="nivel" placeholder="Nivel"/> <br><br>
    restKey:<input type="text"  name="restKey"/> <br><br>
    <input type="submit" value="Eliminar">
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
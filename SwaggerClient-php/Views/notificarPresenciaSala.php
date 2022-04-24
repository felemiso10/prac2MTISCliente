
<?php
require_once '../vendor/autoload.php';
use Swagger\Client\Api\NotificacionApi;
use Swagger\Client\Model\ErrorRequest;

$error = null;
if (isset($_POST['restKey'])) {
    $nif = $_POST['nif'];
    $api = new NotificacionApi();

    try {
        $result = $api->notificacionPresenciaSala($_POST['restKey']);
    } catch (Exception $e) {

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
    <title>Notificar Error</title>
</head>
<body>
<form action="" method="POST">
    restKey:<input type="text"  name="restKey"/> <br><br>
    <input type="submit" value="Notificar">
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
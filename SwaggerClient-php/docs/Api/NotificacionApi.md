# Swagger\Client\NotificacionApi

All URIs are relative to *https://virtserver.swaggerhub.com/apisDeFele/Notificaciones/1.0.0*

Method | HTTP request | Description
------------- | ------------- | -------------
[**notificacionError**](NotificacionApi.md#notificacionerror) | **POST** /notificacion/error/{nif} | notifica a un empleado de un error
[**notificacionPresenciaSala**](NotificacionApi.md#notificacionpresenciasala) | **POST** /notificacion/presenciaSala | Notifica por email a los empleados que se encuentran en la sala con el nombre de la misma que se le pasa
[**notificacionUsuarioValido**](NotificacionApi.md#notificacionusuariovalido) | **POST** /notificacion/usuarioValido/{nif} | Notifica a un empleado si es valido

# **notificacionError**
> \Swagger\Client\Model\Response notificacionError($body, $nif)

notifica a un empleado de un error

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: ApiKeyAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('restKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('restKey', 'Bearer');

$apiInstance = new Swagger\Client\Api\NotificacionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\ErrorRequest(); // \Swagger\Client\Model\ErrorRequest | El error
$nif = "nif_example"; // string | 

try {
    $result = $apiInstance->notificacionError($body, $nif);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NotificacionApi->notificacionError: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\ErrorRequest**](../Model/ErrorRequest.md)| El error |
 **nif** | **string**|  |

### Return type

[**\Swagger\Client\Model\Response**](../Model/Response.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **notificacionPresenciaSala**
> \Swagger\Client\Model\Response notificacionPresenciaSala()

Notifica por email a los empleados que se encuentran en la sala con el nombre de la misma que se le pasa

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: ApiKeyAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('restKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('restKey', 'Bearer');

$apiInstance = new Swagger\Client\Api\NotificacionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->notificacionPresenciaSala();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NotificacionApi->notificacionPresenciaSala: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\Response**](../Model/Response.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **notificacionUsuarioValido**
> \Swagger\Client\Model\Response notificacionUsuarioValido($nif, $rest_key)

Notifica a un empleado si es valido

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: ApiKeyAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('restKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('restKey', 'Bearer');

$apiInstance = new Swagger\Client\Api\NotificacionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$nif = "nif_example"; // string | nif del empleado
$rest_key = "rest_key_example"; // string | id del metodo

try {
    $result = $apiInstance->notificacionUsuarioValido($nif, $rest_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NotificacionApi->notificacionUsuarioValido: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **nif** | **string**| nif del empleado |
 **rest_key** | **string**| id del metodo |

### Return type

[**\Swagger\Client\Model\Response**](../Model/Response.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


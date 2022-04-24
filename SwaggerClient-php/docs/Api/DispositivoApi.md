# Swagger\Client\DispositivoApi

All URIs are relative to *https://virtserver.swaggerhub.com/apisDeFele/Notificaciones/1.0.0*

Method | HTTP request | Description
------------- | ------------- | -------------
[**borrarDispositivo**](DispositivoApi.md#borrardispositivo) | **DELETE** /dispositivo/borrar/{codigo} | Borra el dispositivo
[**consultarDispositivo**](DispositivoApi.md#consultardispositivo) | **GET** /dispositivo/consultar/{codigo} | obtiene el dispositivo a partir de su codigo
[**modificarDispositivo**](DispositivoApi.md#modificardispositivo) | **PUT** /dispositivo/modificar | Modifica la sala
[**nuevoDispositivo**](DispositivoApi.md#nuevodispositivo) | **POST** /dispositivo/nuevo | Crear un nuevo dispositivo

# **borrarDispositivo**
> \Swagger\Client\Model\Response borrarDispositivo($codigo)

Borra el dispositivo

Borra el dispositivo de la BBDD

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: ApiKeyAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('restKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('restKey', 'Bearer');

$apiInstance = new Swagger\Client\Api\DispositivoApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$codigo = 789; // int | Codigo del dispositivo

try {
    $result = $apiInstance->borrarDispositivo($codigo);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DispositivoApi->borrarDispositivo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **codigo** | **int**| Codigo del dispositivo |

### Return type

[**\Swagger\Client\Model\Response**](../Model/Response.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **consultarDispositivo**
> \Swagger\Client\Model\Dispositivo consultarDispositivo($codigo)

obtiene el dispositivo a partir de su codigo

muestra el dispositivo a partir de su codigo

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: ApiKeyAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('restKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('restKey', 'Bearer');

$apiInstance = new Swagger\Client\Api\DispositivoApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$codigo = 789; // int | Codigo del dispositivo

try {
    $result = $apiInstance->consultarDispositivo($codigo);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DispositivoApi->consultarDispositivo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **codigo** | **int**| Codigo del dispositivo |

### Return type

[**\Swagger\Client\Model\Dispositivo**](../Model/Dispositivo.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **modificarDispositivo**
> \Swagger\Client\Model\ModificarResponse modificarDispositivo($body)

Modifica la sala

Modifica la sala

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: ApiKeyAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('restKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('restKey', 'Bearer');

$apiInstance = new Swagger\Client\Api\DispositivoApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\Dispositivo(); // \Swagger\Client\Model\Dispositivo | Añadir el objeto dispositivo

try {
    $result = $apiInstance->modificarDispositivo($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DispositivoApi->modificarDispositivo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\Dispositivo**](../Model/Dispositivo.md)| Añadir el objeto dispositivo |

### Return type

[**\Swagger\Client\Model\ModificarResponse**](../Model/ModificarResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **nuevoDispositivo**
> \Swagger\Client\Model\Response nuevoDispositivo($body)

Crear un nuevo dispositivo

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: ApiKeyAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('restKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('restKey', 'Bearer');

$apiInstance = new Swagger\Client\Api\DispositivoApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\Dispositivo(); // \Swagger\Client\Model\Dispositivo | Añadir el objeto Dispositivo a la BBDD

try {
    $result = $apiInstance->nuevoDispositivo($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DispositivoApi->nuevoDispositivo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\Dispositivo**](../Model/Dispositivo.md)| Añadir el objeto Dispositivo a la BBDD |

### Return type

[**\Swagger\Client\Model\Response**](../Model/Response.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


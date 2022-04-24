# Swagger\Client\NivelApi

All URIs are relative to *https://virtserver.swaggerhub.com/apisDeFele/Notificaciones/1.0.0*

Method | HTTP request | Description
------------- | ------------- | -------------
[**borrarNivel**](NivelApi.md#borrarnivel) | **DELETE** /nivel/borrar/{nivelId} | Borra el {id} del nivel
[**consultarNivel**](NivelApi.md#consultarnivel) | **GET** /nivel/consultar/{nivel} | obtiene todos los datos del {nivel} especificado
[**modificarNivel**](NivelApi.md#modificarnivel) | **PUT** /nivel/modificar | Modificar {id} del nivel
[**nuevoNivel**](NivelApi.md#nuevonivel) | **POST** /nivel/nuevo | Crear un nuevo nivel

# **borrarNivel**
> \Swagger\Client\Model\Response borrarNivel($nivel_id)

Borra el {id} del nivel

Borra el {id} de la BBDD

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: ApiKeyAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('restKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('restKey', 'Bearer');

$apiInstance = new Swagger\Client\Api\NivelApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$nivel_id = 789; // int | Id del nivel

try {
    $result = $apiInstance->borrarNivel($nivel_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NivelApi->borrarNivel: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **nivel_id** | **int**| Id del nivel |

### Return type

[**\Swagger\Client\Model\Response**](../Model/Response.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **consultarNivel**
> \Swagger\Client\Model\Nivel consultarNivel($nivel)

obtiene todos los datos del {nivel} especificado

muestra el nivel solicitado en la ruta

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: ApiKeyAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('restKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('restKey', 'Bearer');

$apiInstance = new Swagger\Client\Api\NivelApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$nivel = 789; // int | nivel a obtener

try {
    $result = $apiInstance->consultarNivel($nivel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NivelApi->consultarNivel: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **nivel** | **int**| nivel a obtener |

### Return type

[**\Swagger\Client\Model\Nivel**](../Model/Nivel.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **modificarNivel**
> \Swagger\Client\Model\ModificarResponse modificarNivel($body)

Modificar {id} del nivel

Modificar el nivel {id}

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: ApiKeyAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('restKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('restKey', 'Bearer');

$apiInstance = new Swagger\Client\Api\NivelApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\Nivel(); // \Swagger\Client\Model\Nivel | Añadir el objeto Nivel modificado a la BBDD

try {
    $result = $apiInstance->modificarNivel($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NivelApi->modificarNivel: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\Nivel**](../Model/Nivel.md)| Añadir el objeto Nivel modificado a la BBDD |

### Return type

[**\Swagger\Client\Model\ModificarResponse**](../Model/ModificarResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **nuevoNivel**
> \Swagger\Client\Model\Response nuevoNivel($body)

Crear un nuevo nivel

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: ApiKeyAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('restKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('restKey', 'Bearer');

$apiInstance = new Swagger\Client\Api\NivelApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\Nivel(); // \Swagger\Client\Model\Nivel | Añadir el objeto Nivel a la BBDD

try {
    $result = $apiInstance->nuevoNivel($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NivelApi->nuevoNivel: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\Nivel**](../Model/Nivel.md)| Añadir el objeto Nivel a la BBDD |

### Return type

[**\Swagger\Client\Model\Response**](../Model/Response.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


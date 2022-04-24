# Swagger\Client\SalaApi

All URIs are relative to *https://virtserver.swaggerhub.com/apisDeFele/Notificaciones/1.0.0*

Method | HTTP request | Description
------------- | ------------- | -------------
[**borrarSala**](SalaApi.md#borrarsala) | **DELETE** /sala/borrar/{salaId} | Borra {id} de la sala
[**consultarSala**](SalaApi.md#consultarsala) | **GET** /sala/consultar/{salaId} | obtiene el {id} de la sala de la BBDD
[**modificarSala**](SalaApi.md#modificarsala) | **PUT** /sala/modificar | Modificar {id} de la sala
[**nuevaSala**](SalaApi.md#nuevasala) | **POST** /sala/nueva | Crear una nueva sala

# **borrarSala**
> string borrarSala($sala_id)

Borra {id} de la sala

Borra el {id} de la BBDD

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: ApiKeyAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('restKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('restKey', 'Bearer');

$apiInstance = new Swagger\Client\Api\SalaApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sala_id = 789; // int | Id de la sala

try {
    $result = $apiInstance->borrarSala($sala_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalaApi->borrarSala: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sala_id** | **int**| Id de la sala |

### Return type

**string**

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **consultarSala**
> \Swagger\Client\Model\Sala consultarSala($sala_id)

obtiene el {id} de la sala de la BBDD

muestra la sala a partir de su {id}

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: ApiKeyAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('restKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('restKey', 'Bearer');

$apiInstance = new Swagger\Client\Api\SalaApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sala_id = 789; // int | Id de la sala para devolver una

try {
    $result = $apiInstance->consultarSala($sala_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalaApi->consultarSala: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sala_id** | **int**| Id de la sala para devolver una |

### Return type

[**\Swagger\Client\Model\Sala**](../Model/Sala.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **modificarSala**
> \Swagger\Client\Model\ModificarResponse modificarSala($body)

Modificar {id} de la sala

Modificar la sala {id}

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: ApiKeyAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('restKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('restKey', 'Bearer');

$apiInstance = new Swagger\Client\Api\SalaApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\Sala(); // \Swagger\Client\Model\Sala | Añadir el objeto Sala modificado a la BBDD

try {
    $result = $apiInstance->modificarSala($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalaApi->modificarSala: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\Sala**](../Model/Sala.md)| Añadir el objeto Sala modificado a la BBDD |

### Return type

[**\Swagger\Client\Model\ModificarResponse**](../Model/ModificarResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **nuevaSala**
> string nuevaSala($body)

Crear una nueva sala

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: ApiKeyAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('restKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('restKey', 'Bearer');

$apiInstance = new Swagger\Client\Api\SalaApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\Sala(); // \Swagger\Client\Model\Sala | Añadir el objeto Sala a la BBDD

try {
    $result = $apiInstance->nuevaSala($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalaApi->nuevaSala: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\Sala**](../Model/Sala.md)| Añadir el objeto Sala a la BBDD |

### Return type

**string**

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


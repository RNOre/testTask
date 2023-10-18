# OpenAPI\Client\EquipmentApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**addEquipment()**](EquipmentApi.md#addEquipment) | **POST** /api/v1/equipment | Endpoint для добавления информации |
| [**findEquipment()**](EquipmentApi.md#findEquipment) | **GET** /api/v1/equipment | Endpoint для получения списка |
| [**findStatusEquipment()**](EquipmentApi.md#findStatusEquipment) | **GET** /api/v1/equipment/status | Endpoint для получения списка статусов оборудования |
| [**findTypeEquipment()**](EquipmentApi.md#findTypeEquipment) | **GET** /api/v1/equipment/type | Endpoint для получения списка типов оборудования |
| [**updateEquipment()**](EquipmentApi.md#updateEquipment) | **PATCH** /api/v1/equipment/{id} | Endpoint для редактирования информации |


## `addEquipment()`

```php
addEquipment($equipment): \OpenAPI\Client\Model\Equipment
```

Endpoint для добавления информации

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\EquipmentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$equipment = new \OpenAPI\Client\Model\Equipment(); // \OpenAPI\Client\Model\Equipment

try {
    $result = $apiInstance->addEquipment($equipment);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EquipmentApi->addEquipment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **equipment** | [**\OpenAPI\Client\Model\Equipment**](../Model/Equipment.md)|  | |

### Return type

[**\OpenAPI\Client\Model\Equipment**](../Model/Equipment.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `findEquipment()`

```php
findEquipment($page, $limit, $type): \OpenAPI\Client\Model\Equipment[]
```

Endpoint для получения списка

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\EquipmentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$page = 1; // int | page number
$limit = 30; // int | number of items
$type = 'type_example'; // string

try {
    $result = $apiInstance->findEquipment($page, $limit, $type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EquipmentApi->findEquipment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page** | **int**| page number | |
| **limit** | **int**| number of items | |
| **type** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\Equipment[]**](../Model/Equipment.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `findStatusEquipment()`

```php
findStatusEquipment(): \OpenAPI\Client\Model\StatusEquipment[]
```

Endpoint для получения списка статусов оборудования

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\EquipmentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->findStatusEquipment();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EquipmentApi->findStatusEquipment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\StatusEquipment[]**](../Model/StatusEquipment.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `findTypeEquipment()`

```php
findTypeEquipment($limit, $name): \OpenAPI\Client\Model\TypeEquipment[]
```

Endpoint для получения списка типов оборудования

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\EquipmentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$limit = 10; // int | number of items
$name = 'name_example'; // string

try {
    $result = $apiInstance->findTypeEquipment($limit, $name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EquipmentApi->findTypeEquipment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **limit** | **int**| number of items | |
| **name** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\TypeEquipment[]**](../Model/TypeEquipment.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateEquipment()`

```php
updateEquipment($id, $equipment_patch): \OpenAPI\Client\Model\Equipment
```

Endpoint для редактирования информации

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\EquipmentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | id
$equipment_patch = new \OpenAPI\Client\Model\EquipmentPatch(); // \OpenAPI\Client\Model\EquipmentPatch

try {
    $result = $apiInstance->updateEquipment($id, $equipment_patch);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EquipmentApi->updateEquipment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| id | |
| **equipment_patch** | [**\OpenAPI\Client\Model\EquipmentPatch**](../Model/EquipmentPatch.md)|  | |

### Return type

[**\OpenAPI\Client\Model\Equipment**](../Model/Equipment.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

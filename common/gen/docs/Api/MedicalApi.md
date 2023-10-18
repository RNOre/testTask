# OpenAPI\Client\MedicalApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**addMedicalFacility()**](MedicalApi.md#addMedicalFacility) | **POST** /api/v1/medical | Endpoint для добавления информации |
| [**findMedicalFacility()**](MedicalApi.md#findMedicalFacility) | **GET** /api/v1/medical | Endpoint для получения списка |
| [**getMedicalById()**](MedicalApi.md#getMedicalById) | **DELETE** /api/v1/medical/{inn}/{kpp} | Endpoint для удаления информации |


## `addMedicalFacility()`

```php
addMedicalFacility($medical_facility): \OpenAPI\Client\Model\MedicalFacility
```

Endpoint для добавления информации

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\MedicalApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$medical_facility = new \OpenAPI\Client\Model\MedicalFacility(); // \OpenAPI\Client\Model\MedicalFacility

try {
    $result = $apiInstance->addMedicalFacility($medical_facility);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MedicalApi->addMedicalFacility: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **medical_facility** | [**\OpenAPI\Client\Model\MedicalFacility**](../Model/MedicalFacility.md)|  | |

### Return type

[**\OpenAPI\Client\Model\MedicalFacility**](../Model/MedicalFacility.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `findMedicalFacility()`

```php
findMedicalFacility($page, $limit, $inn): \OpenAPI\Client\Model\MedicalFacility[]
```

Endpoint для получения списка

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\MedicalApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$page = 1; // int | page number
$limit = 30; // int | number of items
$inn = 5611087237; // string | length 10 or 12

try {
    $result = $apiInstance->findMedicalFacility($page, $limit, $inn);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MedicalApi->findMedicalFacility: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page** | **int**| page number | |
| **limit** | **int**| number of items | |
| **inn** | **string**| length 10 or 12 | [optional] |

### Return type

[**\OpenAPI\Client\Model\MedicalFacility[]**](../Model/MedicalFacility.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getMedicalById()`

```php
getMedicalById($inn, $kpp): \OpenAPI\Client\Model\MedicalFacility
```

Endpoint для удаления информации

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\MedicalApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$inn = 'inn_example'; // string | INN
$kpp = 'kpp_example'; // string | KPP

try {
    $result = $apiInstance->getMedicalById($inn, $kpp);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MedicalApi->getMedicalById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **inn** | **string**| INN | |
| **kpp** | **string**| KPP | |

### Return type

[**\OpenAPI\Client\Model\MedicalFacility**](../Model/MedicalFacility.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

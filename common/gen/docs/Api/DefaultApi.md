# OpenAPI\Client\DefaultApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**authPost()**](DefaultApi.md#authPost) | **POST** /auth | Auth user |
| [**confirmEventPost()**](DefaultApi.md#confirmEventPost) | **POST** /confirmEvent |  |
| [**eventAnalyticsGet()**](DefaultApi.md#eventAnalyticsGet) | **GET** /event/analytics |  |
| [**eventPost()**](DefaultApi.md#eventPost) | **POST** /event | post event |
| [**eventsGet()**](DefaultApi.md#eventsGet) | **GET** /events | get events for this user |
| [**partnerInfoGet()**](DefaultApi.md#partnerInfoGet) | **GET** /partner/info |  |
| [**registrationPost()**](DefaultApi.md#registrationPost) | **POST** /registration | Add a new user |
| [**representativeInfoGet()**](DefaultApi.md#representativeInfoGet) | **GET** /representative/info |  |
| [**sportsmanInfoGet()**](DefaultApi.md#sportsmanInfoGet) | **GET** /sportsman/info |  |
| [**sportsmanInfoPost()**](DefaultApi.md#sportsmanInfoPost) | **POST** /sportsman/info |  |
| [**userGet()**](DefaultApi.md#userGet) | **GET** /user | get user info |
| [**userPost()**](DefaultApi.md#userPost) | **POST** /user | set user info |
| [**userRolePost()**](DefaultApi.md#userRolePost) | **POST** /user/role | admin set role for user |


## `authPost()`

```php
authPost($user_auth): string
```

Auth user

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$user_auth = new \OpenAPI\Client\Model\UserAuth(); // \OpenAPI\Client\Model\UserAuth

try {
    $result = $apiInstance->authPost($user_auth);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->authPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **user_auth** | [**\OpenAPI\Client\Model\UserAuth**](../Model/UserAuth.md)|  | |

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `confirmEventPost()`

```php
confirmEventPost($bearer, $event_id)
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$bearer = 'bearer_example'; // string
$event_id = 'event_id_example'; // string

try {
    $apiInstance->confirmEventPost($bearer, $event_id);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->confirmEventPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **bearer** | **string**|  | |
| **event_id** | **string**|  | |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `eventAnalyticsGet()`

```php
eventAnalyticsGet($bearer, $event_id): \OpenAPI\Client\Model\Rating[]
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$bearer = 'bearer_example'; // string
$event_id = 'event_id_example'; // string

try {
    $result = $apiInstance->eventAnalyticsGet($bearer, $event_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->eventAnalyticsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **bearer** | **string**|  | |
| **event_id** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\Rating[]**](../Model/Rating.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `eventPost()`

```php
eventPost($bearer, $event)
```

post event

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$bearer = 'bearer_example'; // string
$event = new \OpenAPI\Client\Model\Event(); // \OpenAPI\Client\Model\Event

try {
    $apiInstance->eventPost($bearer, $event);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->eventPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **bearer** | **string**|  | |
| **event** | [**\OpenAPI\Client\Model\Event**](../Model/Event.md)|  | [optional] |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `eventsGet()`

```php
eventsGet($bearer): \OpenAPI\Client\Model\Event[]
```

get events for this user

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$bearer = 'bearer_example'; // string

try {
    $result = $apiInstance->eventsGet($bearer);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->eventsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **bearer** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\Event[]**](../Model/Event.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `partnerInfoGet()`

```php
partnerInfoGet($bearer): \OpenAPI\Client\Model\Partner
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$bearer = 'bearer_example'; // string

try {
    $result = $apiInstance->partnerInfoGet($bearer);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->partnerInfoGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **bearer** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\Partner**](../Model/Partner.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `registrationPost()`

```php
registrationPost($user_registration): string
```

Add a new user

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$user_registration = new \OpenAPI\Client\Model\UserRegistration(); // \OpenAPI\Client\Model\UserRegistration

try {
    $result = $apiInstance->registrationPost($user_registration);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->registrationPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **user_registration** | [**\OpenAPI\Client\Model\UserRegistration**](../Model/UserRegistration.md)|  | |

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `representativeInfoGet()`

```php
representativeInfoGet($bearer): \OpenAPI\Client\Model\Representative
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$bearer = 'bearer_example'; // string

try {
    $result = $apiInstance->representativeInfoGet($bearer);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->representativeInfoGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **bearer** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\Representative**](../Model/Representative.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `sportsmanInfoGet()`

```php
sportsmanInfoGet($bearer): \OpenAPI\Client\Model\Sportsman
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$bearer = 'bearer_example'; // string

try {
    $result = $apiInstance->sportsmanInfoGet($bearer);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->sportsmanInfoGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **bearer** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\Sportsman**](../Model/Sportsman.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `sportsmanInfoPost()`

```php
sportsmanInfoPost($bearer, $sportsman)
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$bearer = 'bearer_example'; // string
$sportsman = new \OpenAPI\Client\Model\Sportsman(); // \OpenAPI\Client\Model\Sportsman

try {
    $apiInstance->sportsmanInfoPost($bearer, $sportsman);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->sportsmanInfoPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **bearer** | **string**|  | |
| **sportsman** | [**\OpenAPI\Client\Model\Sportsman**](../Model/Sportsman.md)|  | [optional] |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `userGet()`

```php
userGet($bearer): \OpenAPI\Client\Model\User
```

get user info

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$bearer = 'bearer_example'; // string

try {
    $result = $apiInstance->userGet($bearer);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->userGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **bearer** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\User**](../Model/User.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `userPost()`

```php
userPost($bearer, $user)
```

set user info

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$bearer = 'bearer_example'; // string
$user = new \OpenAPI\Client\Model\User(); // \OpenAPI\Client\Model\User

try {
    $apiInstance->userPost($bearer, $user);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->userPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **bearer** | **string**|  | |
| **user** | [**\OpenAPI\Client\Model\User**](../Model/User.md)|  | |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `userRolePost()`

```php
userRolePost($bearer, $user_id, $role)
```

admin set role for user

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$bearer = 'bearer_example'; // string
$user_id = 'user_id_example'; // string
$role = new \OpenAPI\Client\Model\UserRole(); // UserRole

try {
    $apiInstance->userRolePost($bearer, $user_id, $role);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->userRolePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **bearer** | **string**|  | |
| **user_id** | **string**|  | |
| **role** | [**UserRole**](../Model/.md)|  | |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

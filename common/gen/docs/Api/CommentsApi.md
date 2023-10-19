# OpenAPI\Client\CommentsApi

All URIs are relative to http://localhost:21080, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**deleteCommentsById()**](CommentsApi.md#deleteCommentsById) | **DELETE** /test/delete/{comment_id} | Удаление комментария |
| [**getAllComments()**](CommentsApi.md#getAllComments) | **GET** /test/index | Метод получения списка комментариев |
| [**getCommentById()**](CommentsApi.md#getCommentById) | **GET** /test/view/{comment_id} | Метод получение комментария |
| [**postComment()**](CommentsApi.md#postComment) | **POST** /test/create | Метод добавления комментария |
| [**putComment()**](CommentsApi.md#putComment) | **PUT** /test/update/{comment_id} | Метод изменения данных комментария |


## `deleteCommentsById()`

```php
deleteCommentsById($comment_id): \OpenAPI\Client\Model\Comment
```

Удаление комментария

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\CommentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$comment_id = 1; // string | Идентификатор комментария

try {
    $result = $apiInstance->deleteCommentsById($comment_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CommentsApi->deleteCommentsById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **comment_id** | **string**| Идентификатор комментария | |

### Return type

[**\OpenAPI\Client\Model\Comment**](../Model/Comment.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAllComments()`

```php
getAllComments(): \OpenAPI\Client\Model\Comment[]
```

Метод получения списка комментариев

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\CommentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->getAllComments();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CommentsApi->getAllComments: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\Comment[]**](../Model/Comment.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCommentById()`

```php
getCommentById($comment_id): \OpenAPI\Client\Model\Comment
```

Метод получение комментария

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\CommentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$comment_id = 1; // string | Идентификатор комментария

try {
    $result = $apiInstance->getCommentById($comment_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CommentsApi->getCommentById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **comment_id** | **string**| Идентификатор комментария | |

### Return type

[**\OpenAPI\Client\Model\Comment**](../Model/Comment.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postComment()`

```php
postComment($comment_create): \OpenAPI\Client\Model\CommentCreate
```

Метод добавления комментария

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\CommentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$comment_create = new \OpenAPI\Client\Model\CommentCreate(); // \OpenAPI\Client\Model\CommentCreate

try {
    $result = $apiInstance->postComment($comment_create);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CommentsApi->postComment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **comment_create** | [**\OpenAPI\Client\Model\CommentCreate**](../Model/CommentCreate.md)|  | |

### Return type

[**\OpenAPI\Client\Model\CommentCreate**](../Model/CommentCreate.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `putComment()`

```php
putComment($comment_id, $comment_create): \OpenAPI\Client\Model\Comment
```

Метод изменения данных комментария

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\CommentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$comment_id = 1; // string | Идентификатор комментария
$comment_create = new \OpenAPI\Client\Model\CommentCreate(); // \OpenAPI\Client\Model\CommentCreate

try {
    $result = $apiInstance->putComment($comment_id, $comment_create);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CommentsApi->putComment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **comment_id** | **string**| Идентификатор комментария | |
| **comment_create** | [**\OpenAPI\Client\Model\CommentCreate**](../Model/CommentCreate.md)|  | |

### Return type

[**\OpenAPI\Client\Model\Comment**](../Model/Comment.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

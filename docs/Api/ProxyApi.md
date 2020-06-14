# OpenAPI\Client\ProxyApi

All URIs are relative to *https://localhost:8090/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**postExternalTransaction**](ProxyApi.md#postExternalTransaction) | **POST** /proxy/transactions | Submit External Transaction



## postExternalTransaction

> \OpenAPI\Client\Model\InlineResponse2021 postExternalTransaction($body)

Submit External Transaction

<p align=\"right\">status: <strong>stable</strong></p>  Submits a transaction that was created and signed outside of cardano-wallet.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new OpenAPI\Client\Api\ProxyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = "/path/to/file.txt"; // \SplFileObject | 

try {
    $result = $apiInstance->postExternalTransaction($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProxyApi->postExternalTransaction: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | **\SplFileObject****\SplFileObject**|  | [optional]

### Return type

[**\OpenAPI\Client\Model\InlineResponse2021**](../Model/InlineResponse2021.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/octet-stream
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


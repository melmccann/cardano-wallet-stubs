# OpenAPI\Client\AddressesApi

All URIs are relative to *https://localhost:8090/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**listAddresses**](AddressesApi.md#listAddresses) | **GET** /wallets/{walletId}/addresses | List



## listAddresses

> \OpenAPI\Client\Model\InlineResponse2003[] listAddresses($wallet_id, $state)

List

<p align=\"right\">status: <strong>stable</strong></p>  Return a list of known addresses, ordered from newest to oldest

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new OpenAPI\Client\Api\AddressesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$wallet_id = 'wallet_id_example'; // string | 
$state = 'state_example'; // string | An optional filter on the address state.

try {
    $result = $apiInstance->listAddresses($wallet_id, $state);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddressesApi->listAddresses: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **wallet_id** | **string**|  |
 **state** | **string**| An optional filter on the address state. | [optional]

### Return type

[**\OpenAPI\Client\Model\InlineResponse2003[]**](../Model/InlineResponse2003.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


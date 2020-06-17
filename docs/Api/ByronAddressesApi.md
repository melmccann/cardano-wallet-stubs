# melmccann\cardanowallet\ByronAddressesApi

All URIs are relative to *https://localhost:8090/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createAddress**](ByronAddressesApi.md#createAddress) | **POST** /byron-wallets/{walletId}/addresses | Create Address
[**importAddress**](ByronAddressesApi.md#importAddress) | **PUT** /byron-wallets/{walletId}/addresses/{addressId} | Import Address
[**listByronAddresses**](ByronAddressesApi.md#listByronAddresses) | **GET** /byron-wallets/{walletId}/addresses | List



## createAddress

> \melmccann\cardanowallet\Model\InlineResponse2003 createAddress($wallet_id, $inline_object10)

Create Address

<p align=\"right\">status: <strong>stable</strong></p>  ⚠️  This endpoint is available for `random` wallets only. Any attempt to call this endpoint on another type of wallet will result in a `403 Forbidden` error from the server.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new melmccann\cardanowallet\Api\ByronAddressesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$wallet_id = 'wallet_id_example'; // string | 
$inline_object10 = new \melmccann\cardanowallet\Model\InlineObject10(); // \melmccann\cardanowallet\Model\InlineObject10 | 

try {
    $result = $apiInstance->createAddress($wallet_id, $inline_object10);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ByronAddressesApi->createAddress: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **wallet_id** | **string**|  |
 **inline_object10** | [**\melmccann\cardanowallet\Model\InlineObject10**](../Model/InlineObject10.md)|  |

### Return type

[**\melmccann\cardanowallet\Model\InlineResponse2003**](../Model/InlineResponse2003.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## importAddress

> importAddress($wallet_id, $address_id)

Import Address

<p align=\"right\">status: <strong>stable</strong></p>  ⚠️  This endpoint is available for `random` wallets only. Any attempt to call this endpoint on another type of wallet will result in a `403 Forbidden` error from the server.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new melmccann\cardanowallet\Api\ByronAddressesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$wallet_id = 'wallet_id_example'; // string | 
$address_id = DdzFFzCqrhtCNjPk5Lei7E1FxnoqMoAYtJ8VjAWbFmDb614nNBWBwv3kt6QHJa59cGezzf6piMWsbK7sWRB5sv325QqWdRuusMqqLdMt; // string | 

try {
    $apiInstance->importAddress($wallet_id, $address_id);
} catch (Exception $e) {
    echo 'Exception when calling ByronAddressesApi->importAddress: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **wallet_id** | **string**|  |
 **address_id** | **string**|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## listByronAddresses

> \melmccann\cardanowallet\Model\InlineResponse2003[] listByronAddresses($wallet_id, $state)

List

<p align=\"right\">status: <strong>stable</strong></p>  Return a list of known addresses, ordered from newest to oldest for sequential wallets. Arbitrarily ordered for random wallets.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new melmccann\cardanowallet\Api\ByronAddressesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$wallet_id = 'wallet_id_example'; // string | 
$state = 'state_example'; // string | An optional filter on the address state.

try {
    $result = $apiInstance->listByronAddresses($wallet_id, $state);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ByronAddressesApi->listByronAddresses: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **wallet_id** | **string**|  |
 **state** | **string**| An optional filter on the address state. | [optional]

### Return type

[**\melmccann\cardanowallet\Model\InlineResponse2003[]**](../Model/InlineResponse2003.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


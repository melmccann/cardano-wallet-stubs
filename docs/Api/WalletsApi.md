# melmccann\cardanowallet\WalletsApi

All URIs are relative to *https://localhost:8090/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteWallet**](WalletsApi.md#deleteWallet) | **DELETE** /wallets/{walletId} | Delete
[**getUTxOsStatistics**](WalletsApi.md#getUTxOsStatistics) | **GET** /wallets/{walletId}/statistics/utxos | UTxO Statistics
[**getWallet**](WalletsApi.md#getWallet) | **GET** /wallets/{walletId} | Get
[**listWallets**](WalletsApi.md#listWallets) | **GET** /wallets | List
[**postWallet**](WalletsApi.md#postWallet) | **POST** /wallets | Create / Restore
[**putWallet**](WalletsApi.md#putWallet) | **PUT** /wallets/{walletId} | Update Metadata
[**putWalletPassphrase**](WalletsApi.md#putWalletPassphrase) | **PUT** /wallets/{walletId}/passphrase | Update Passphrase



## deleteWallet

> deleteWallet($wallet_id)

Delete

<p align=\"right\">status: <strong>stable</strong></p>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new melmccann\cardanowallet\Api\WalletsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$wallet_id = 'wallet_id_example'; // string | 

try {
    $apiInstance->deleteWallet($wallet_id);
} catch (Exception $e) {
    echo 'Exception when calling WalletsApi->deleteWallet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **wallet_id** | **string**|  |

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


## getUTxOsStatistics

> \melmccann\cardanowallet\Model\InlineResponse2001 getUTxOsStatistics($wallet_id)

UTxO Statistics

<p align=\"right\">status: <strong>stable</strong></p>  Return the UTxOs distribution across the whole wallet, in the form of a histogram.  ```      │  100 ─      │      │                                 ┌───┐   10 ─                         ┌───┐   │   │                   ┌───┐      │                 ┌───┐   │   │   │   │                   │   │      │                 │   │   │   │   │   │   ┌───┐           │   │    1 ─ ┌───┐           │   │   │   │   │   │   │   │           │   │      │ │   │           │   │   │   │   │   │   │   │           │   │      │ │   │ │       │ │   │ │ │   │ ╷ │   │ ╷ │   │ ╷       ╷ │   │      └─┘   └─│───────│─┘   └─│─┘   └─│─┘   └─│─┘   └─│───────│─┘   └────            10μ₳    100μ₳   1000μ₳   0.1₳    1₳      10₳     100₳ ```

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new melmccann\cardanowallet\Api\WalletsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$wallet_id = 'wallet_id_example'; // string | 

try {
    $result = $apiInstance->getUTxOsStatistics($wallet_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WalletsApi->getUTxOsStatistics: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **wallet_id** | **string**|  |

### Return type

[**\melmccann\cardanowallet\Model\InlineResponse2001**](../Model/InlineResponse2001.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getWallet

> \melmccann\cardanowallet\Model\InlineResponse200 getWallet($wallet_id)

Get

<p align=\"right\">status: <strong>stable</strong></p>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new melmccann\cardanowallet\Api\WalletsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$wallet_id = 'wallet_id_example'; // string | 

try {
    $result = $apiInstance->getWallet($wallet_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WalletsApi->getWallet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **wallet_id** | **string**|  |

### Return type

[**\melmccann\cardanowallet\Model\InlineResponse200**](../Model/InlineResponse200.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## listWallets

> \melmccann\cardanowallet\Model\InlineResponse200[] listWallets()

List

<p align=\"right\">status: <strong>stable</strong></p>  Return a list of known wallets, ordered from oldest to newest.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new melmccann\cardanowallet\Api\WalletsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->listWallets();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WalletsApi->listWallets: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\melmccann\cardanowallet\Model\InlineResponse200[]**](../Model/InlineResponse200.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## postWallet

> \melmccann\cardanowallet\Model\InlineResponse200 postWallet($unknown_base_type)

Create / Restore

<p align=\"right\">status: <strong>stable</strong></p>  Create and restore a wallet from a mnemonic sentence or account public key.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new melmccann\cardanowallet\Api\WalletsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$unknown_base_type = new \melmccann\cardanowallet\Model\UNKNOWN_BASE_TYPE(); // \melmccann\cardanowallet\Model\UNKNOWN_BASE_TYPE | 

try {
    $result = $apiInstance->postWallet($unknown_base_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WalletsApi->postWallet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **unknown_base_type** | [**\melmccann\cardanowallet\Model\UNKNOWN_BASE_TYPE**](../Model/UNKNOWN_BASE_TYPE.md)|  |

### Return type

[**\melmccann\cardanowallet\Model\InlineResponse200**](../Model/InlineResponse200.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## putWallet

> \melmccann\cardanowallet\Model\InlineResponse200 putWallet($wallet_id, $inline_object)

Update Metadata

<p align=\"right\">status: <strong>stable</strong></p>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new melmccann\cardanowallet\Api\WalletsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$wallet_id = 'wallet_id_example'; // string | 
$inline_object = new \melmccann\cardanowallet\Model\InlineObject(); // \melmccann\cardanowallet\Model\InlineObject | 

try {
    $result = $apiInstance->putWallet($wallet_id, $inline_object);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WalletsApi->putWallet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **wallet_id** | **string**|  |
 **inline_object** | [**\melmccann\cardanowallet\Model\InlineObject**](../Model/InlineObject.md)|  |

### Return type

[**\melmccann\cardanowallet\Model\InlineResponse200**](../Model/InlineResponse200.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## putWalletPassphrase

> putWalletPassphrase($wallet_id, $inline_object1)

Update Passphrase

<p align=\"right\">status: <strong>stable</strong></p>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new melmccann\cardanowallet\Api\WalletsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$wallet_id = 'wallet_id_example'; // string | 
$inline_object1 = new \melmccann\cardanowallet\Model\InlineObject1(); // \melmccann\cardanowallet\Model\InlineObject1 | 

try {
    $apiInstance->putWalletPassphrase($wallet_id, $inline_object1);
} catch (Exception $e) {
    echo 'Exception when calling WalletsApi->putWalletPassphrase: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **wallet_id** | **string**|  |
 **inline_object1** | [**\melmccann\cardanowallet\Model\InlineObject1**](../Model/InlineObject1.md)|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


# melmccann\cardanowallet\MigrationsApi

All URIs are relative to *https://localhost:8090/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getShelleyWalletMigrationInfo**](MigrationsApi.md#getShelleyWalletMigrationInfo) | **GET** /wallets/{walletId}/migrations | Calculate Cost
[**migrateShelleyWallet**](MigrationsApi.md#migrateShelleyWallet) | **POST** /wallets/{walletId}/migrations | Migrate



## getShelleyWalletMigrationInfo

> \melmccann\cardanowallet\Model\InlineResponse2005 getShelleyWalletMigrationInfo($wallet_id)

Calculate Cost

<p align=\"right\">status: <strong>in development</strong></p>  Calculate the exact cost of sending all funds from particular Shelley wallet to a set of addresses.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new melmccann\cardanowallet\Api\MigrationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$wallet_id = 'wallet_id_example'; // string | 

try {
    $result = $apiInstance->getShelleyWalletMigrationInfo($wallet_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MigrationsApi->getShelleyWalletMigrationInfo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **wallet_id** | **string**|  |

### Return type

[**\melmccann\cardanowallet\Model\InlineResponse2005**](../Model/InlineResponse2005.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## migrateShelleyWallet

> \melmccann\cardanowallet\Model\InlineResponse2002[] migrateShelleyWallet($wallet_id, $inline_object7)

Migrate

<p align=\"right\">status: <strong>in development</strong></p>  Submit one or more transactions which transfers all funds from a Shelley wallet to a set of addresses.  This operation attempts to preserve the UTxO \"shape\" of a wallet as far as possible. That is, coins will not be agglomerated. Therefore, if the wallet has a large UTxO set, several transactions may be needed.  A typical usage would be when one wants to move all funds from an old wallet to another by providing addresses coming from the new wallet.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new melmccann\cardanowallet\Api\MigrationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$wallet_id = 'wallet_id_example'; // string | 
$inline_object7 = new \melmccann\cardanowallet\Model\InlineObject7(); // \melmccann\cardanowallet\Model\InlineObject7 | 

try {
    $result = $apiInstance->migrateShelleyWallet($wallet_id, $inline_object7);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MigrationsApi->migrateShelleyWallet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **wallet_id** | **string**|  |
 **inline_object7** | [**\melmccann\cardanowallet\Model\InlineObject7**](../Model/InlineObject7.md)|  |

### Return type

[**\melmccann\cardanowallet\Model\InlineResponse2002[]**](../Model/InlineResponse2002.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


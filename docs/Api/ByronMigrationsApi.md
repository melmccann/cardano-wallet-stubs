# melmccann\cardanowallet\ByronMigrationsApi

All URIs are relative to *https://localhost:8090/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getByronWalletMigrationInfo**](ByronMigrationsApi.md#getByronWalletMigrationInfo) | **GET** /byron-wallets/{walletId}/migrations | Calculate Cost
[**migrateByronWallet**](ByronMigrationsApi.md#migrateByronWallet) | **POST** /byron-wallets/{walletId}/migrations | Migrate



## getByronWalletMigrationInfo

> \melmccann\cardanowallet\Model\InlineResponse2005 getByronWalletMigrationInfo($wallet_id)

Calculate Cost

<p align=\"right\">status: <strong>stable</strong></p>  Calculate the exact cost of sending all funds from particular Byron wallet to a set of addresses.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new melmccann\cardanowallet\Api\ByronMigrationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$wallet_id = 'wallet_id_example'; // string | 

try {
    $result = $apiInstance->getByronWalletMigrationInfo($wallet_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ByronMigrationsApi->getByronWalletMigrationInfo: ', $e->getMessage(), PHP_EOL;
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


## migrateByronWallet

> \melmccann\cardanowallet\Model\InlineResponse2002[] migrateByronWallet($wallet_id, $inline_object14)

Migrate

<p align=\"right\">status: <strong>stable</strong></p>  Submit one or more transactions which transfers all funds from a Byron wallet to a set of addresses.  This operation attempts to preserve the UTxO \"shape\" of a wallet as far as possible. That is, coins will not be agglomerated. Therefore, if the wallet has a large UTxO set, several transactions may be needed.  A typical usage would be when one wants to move all funds from an old wallet to another (Shelley or Byron) by providing addresses coming from the new wallet.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new melmccann\cardanowallet\Api\ByronMigrationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$wallet_id = 'wallet_id_example'; // string | 
$inline_object14 = new \melmccann\cardanowallet\Model\InlineObject14(); // \melmccann\cardanowallet\Model\InlineObject14 | 

try {
    $result = $apiInstance->migrateByronWallet($wallet_id, $inline_object14);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ByronMigrationsApi->migrateByronWallet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **wallet_id** | **string**|  |
 **inline_object14** | [**\melmccann\cardanowallet\Model\InlineObject14**](../Model/InlineObject14.md)|  |

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


# OpenAPI\Client\ByronTransactionsApi

All URIs are relative to *https://localhost:8090/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteByronTransaction**](ByronTransactionsApi.md#deleteByronTransaction) | **DELETE** /byron-wallets/{walletId}/transactions/{transactionId} | Forget
[**listByronTransactions**](ByronTransactionsApi.md#listByronTransactions) | **GET** /byron-wallets/{walletId}/transactions | List
[**postByronTransaction**](ByronTransactionsApi.md#postByronTransaction) | **POST** /byron-wallets/{walletId}/transactions | Create
[**postByronTransactionFee**](ByronTransactionsApi.md#postByronTransactionFee) | **POST** /byron-wallets/{walletId}/payment-fees | Estimate Fee



## deleteByronTransaction

> deleteByronTransaction($wallet_id, $transaction_id)

Forget

<p align=\"right\">status: <strong>stable</strong></p>  Forget pending Byron transaction. Importantly, a transaction, when sent, cannot be cancelled. One can only request forgetting about it in order to try spending (concurrently) the same UTxO in another transaction. But, the transaction may still show up later in a block and therefore, appear in the wallet.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new OpenAPI\Client\Api\ByronTransactionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$wallet_id = 'wallet_id_example'; // string | 
$transaction_id = 'transaction_id_example'; // string | 

try {
    $apiInstance->deleteByronTransaction($wallet_id, $transaction_id);
} catch (Exception $e) {
    echo 'Exception when calling ByronTransactionsApi->deleteByronTransaction: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **wallet_id** | **string**|  |
 **transaction_id** | **string**|  |

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


## listByronTransactions

> \OpenAPI\Client\Model\InlineResponse2002[] listByronTransactions($wallet_id, $start, $end, $order)

List

<p align=\"right\">status: <strong>stable</strong></p>  List all incoming and outgoing transactions for the given wallet.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new OpenAPI\Client\Api\ByronTransactionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$wallet_id = 'wallet_id_example'; // string | 
$start = 'start_example'; // string | An optional start time in ISO 8601 date-and-time format. Basic and extended formats are both accepted. Times can be local (with a timezone offset) or UTC.  If both a start time and an end time are specified, then the start time must not be later than the end time.  Example: `2008-08-08T08:08:08Z`
$end = 'end_example'; // string | An optional end time in ISO 8601 date-and-time format. Basic and extended formats are both accepted. Times can be local (with a timezone offset) or UTC.  If both a start time and an end time are specified, then the start time must not be later than the end time.  Example: `2008-08-08T08:08:08Z`
$order = 'descending'; // string | An optional sort order.

try {
    $result = $apiInstance->listByronTransactions($wallet_id, $start, $end, $order);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ByronTransactionsApi->listByronTransactions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **wallet_id** | **string**|  |
 **start** | **string**| An optional start time in ISO 8601 date-and-time format. Basic and extended formats are both accepted. Times can be local (with a timezone offset) or UTC.  If both a start time and an end time are specified, then the start time must not be later than the end time.  Example: &#x60;2008-08-08T08:08:08Z&#x60; | [optional]
 **end** | **string**| An optional end time in ISO 8601 date-and-time format. Basic and extended formats are both accepted. Times can be local (with a timezone offset) or UTC.  If both a start time and an end time are specified, then the start time must not be later than the end time.  Example: &#x60;2008-08-08T08:08:08Z&#x60; | [optional]
 **order** | **string**| An optional sort order. | [optional] [default to &#39;descending&#39;]

### Return type

[**\OpenAPI\Client\Model\InlineResponse2002[]**](../Model/InlineResponse2002.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## postByronTransaction

> \OpenAPI\Client\Model\InlineResponse2002 postByronTransaction($wallet_id, $inline_object11)

Create

<p align=\"right\">status: <strong>stable</strong></p>  Create and send transaction from the wallet.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new OpenAPI\Client\Api\ByronTransactionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$wallet_id = 'wallet_id_example'; // string | 
$inline_object11 = new \OpenAPI\Client\Model\InlineObject11(); // \OpenAPI\Client\Model\InlineObject11 | 

try {
    $result = $apiInstance->postByronTransaction($wallet_id, $inline_object11);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ByronTransactionsApi->postByronTransaction: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **wallet_id** | **string**|  |
 **inline_object11** | [**\OpenAPI\Client\Model\InlineObject11**](../Model/InlineObject11.md)|  |

### Return type

[**\OpenAPI\Client\Model\InlineResponse2002**](../Model/InlineResponse2002.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## postByronTransactionFee

> \OpenAPI\Client\Model\InlineResponse202 postByronTransactionFee($wallet_id, $inline_object12)

Estimate Fee

<p align=\"right\">status: <strong>stable</strong></p>  Estimate fee for the transaction.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new OpenAPI\Client\Api\ByronTransactionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$wallet_id = 'wallet_id_example'; // string | 
$inline_object12 = new \OpenAPI\Client\Model\InlineObject12(); // \OpenAPI\Client\Model\InlineObject12 | 

try {
    $result = $apiInstance->postByronTransactionFee($wallet_id, $inline_object12);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ByronTransactionsApi->postByronTransactionFee: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **wallet_id** | **string**|  |
 **inline_object12** | [**\OpenAPI\Client\Model\InlineObject12**](../Model/InlineObject12.md)|  |

### Return type

[**\OpenAPI\Client\Model\InlineResponse202**](../Model/InlineResponse202.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


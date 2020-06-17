# melmccann\cardanowallet\ByronCoinSelectionsApi

All URIs are relative to *https://localhost:8090/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**byronSelectCoins**](ByronCoinSelectionsApi.md#byronSelectCoins) | **POST** /byron-wallets/{walletId}/coin-selections/random | Random



## byronSelectCoins

> \melmccann\cardanowallet\Model\InlineResponse2004 byronSelectCoins($wallet_id, $inline_object13)

Random

<p align=\"right\">status: <strong>stable</strong></p>  Select coins to cover the given set of payments.  Uses the <a href=\"https://iohk.io/blog/self-organisation-in-coin-selection/\"> Random-Improve coin selection algorithm</a>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new melmccann\cardanowallet\Api\ByronCoinSelectionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$wallet_id = 'wallet_id_example'; // string | 
$inline_object13 = new \melmccann\cardanowallet\Model\InlineObject13(); // \melmccann\cardanowallet\Model\InlineObject13 | 

try {
    $result = $apiInstance->byronSelectCoins($wallet_id, $inline_object13);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ByronCoinSelectionsApi->byronSelectCoins: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **wallet_id** | **string**|  |
 **inline_object13** | [**\melmccann\cardanowallet\Model\InlineObject13**](../Model/InlineObject13.md)|  |

### Return type

[**\melmccann\cardanowallet\Model\InlineResponse2004**](../Model/InlineResponse2004.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


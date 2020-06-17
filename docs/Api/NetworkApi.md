# melmccann\cardanowallet\NetworkApi

All URIs are relative to *https://localhost:8090/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getNetworkClock**](NetworkApi.md#getNetworkClock) | **GET** /network/clock | Clock
[**getNetworkInformation**](NetworkApi.md#getNetworkInformation) | **GET** /network/information | Information
[**getNetworkParameters**](NetworkApi.md#getNetworkParameters) | **GET** /network/parameters | Parameters



## getNetworkClock

> \melmccann\cardanowallet\Model\InlineResponse2008 getNetworkClock($force_ntp_check)

Clock

<p align=\"right\">status: <strong>stable</strong></p>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new melmccann\cardanowallet\Api\NetworkApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$force_ntp_check = True; // bool | NTP checks are cached for short duration to avoid sending too many queries to the central NTP servers. In some cases however, a client may want to force a new check.  When this flag is set, the request **will block** until NTP server responds or will timeout after a while without any answer from the NTP server.

try {
    $result = $apiInstance->getNetworkClock($force_ntp_check);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NetworkApi->getNetworkClock: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **force_ntp_check** | **bool**| NTP checks are cached for short duration to avoid sending too many queries to the central NTP servers. In some cases however, a client may want to force a new check.  When this flag is set, the request **will block** until NTP server responds or will timeout after a while without any answer from the NTP server. | [optional]

### Return type

[**\melmccann\cardanowallet\Model\InlineResponse2008**](../Model/InlineResponse2008.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getNetworkInformation

> \melmccann\cardanowallet\Model\InlineResponse2007 getNetworkInformation()

Information

<p align=\"right\">status: <strong>stable</strong></p>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new melmccann\cardanowallet\Api\NetworkApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->getNetworkInformation();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NetworkApi->getNetworkInformation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\melmccann\cardanowallet\Model\InlineResponse2007**](../Model/InlineResponse2007.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getNetworkParameters

> \melmccann\cardanowallet\Model\InlineResponse2009 getNetworkParameters()

Parameters

<p align=\"right\">status: <strong>stable</strong></p>  Returns the set of network parameters for the current epoch.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new melmccann\cardanowallet\Api\NetworkApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->getNetworkParameters();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NetworkApi->getNetworkParameters: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\melmccann\cardanowallet\Model\InlineResponse2009**](../Model/InlineResponse2009.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


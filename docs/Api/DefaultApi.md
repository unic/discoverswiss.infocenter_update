# InfocenterUpdate\Client\DefaultApi

All URIs are relative to *https://api.discover.swiss/test/info-update/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteCreativeWork**](DefaultApi.md#deletecreativework) | **DELETE** /creativeWorks/{project}/{sourceId} | DeleteCreativeWork
[**deleteTour**](DefaultApi.md#deletetour) | **DELETE** /tours/{project}/{sourceId} | DeleteTour
[**getStatus**](DefaultApi.md#getstatus) | **GET** /status | GetStatus
[**getStatusAbout**](DefaultApi.md#getstatusabout) | **GET** /status/about | GetStatusAbout
[**postUpsertCreativeWork**](DefaultApi.md#postupsertcreativework) | **POST** /creativeWorks/{project} | PostUpsertCreativeWork
[**postUpsertTour**](DefaultApi.md#postupserttour) | **POST** /tours/{project} | PostUpsertTour
[**putUpsertCreativeWork**](DefaultApi.md#putupsertcreativework) | **PUT** /creativeWorks/{project} | PutUpsertCreativeWork
[**putUpsertTour**](DefaultApi.md#putupserttour) | **PUT** /tours/{project} | PutUpsertTour

# **deleteCreativeWork**
> \InfocenterUpdate\Client\Model\DsUpdateResponse deleteCreativeWork($source_id, $project, $ocp_apim_subscription_key)

DeleteCreativeWork

Delete creative works

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKeyHeader
$config = InfocenterUpdate\Client\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = InfocenterUpdate\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');// Configure API key authorization: apiKeyQuery
$config = InfocenterUpdate\Client\Configuration::getDefaultConfiguration()->setApiKey('subscription-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = InfocenterUpdate\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('subscription-key', 'Bearer');

$apiInstance = new InfocenterUpdate\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$source_id = "source_id_example"; // string | Use source id to delete creative works
$project = "project_example"; // string | Use this property to specify project
$ocp_apim_subscription_key = "ocp_apim_subscription_key_example"; // string | Subscription key to access the api. Get it on developer.discover.swiss.

try {
    $result = $apiInstance->deleteCreativeWork($source_id, $project, $ocp_apim_subscription_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->deleteCreativeWork: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **source_id** | **string**| Use source id to delete creative works |
 **project** | **string**| Use this property to specify project |
 **ocp_apim_subscription_key** | **string**| Subscription key to access the api. Get it on developer.discover.swiss. | [optional]

### Return type

[**\InfocenterUpdate\Client\Model\DsUpdateResponse**](../Model/DsUpdateResponse.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteTour**
> \InfocenterUpdate\Client\Model\DsUpdateResponse deleteTour($source_id, $project, $ocp_apim_subscription_key)

DeleteTour

Delete tours

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKeyHeader
$config = InfocenterUpdate\Client\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = InfocenterUpdate\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');// Configure API key authorization: apiKeyQuery
$config = InfocenterUpdate\Client\Configuration::getDefaultConfiguration()->setApiKey('subscription-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = InfocenterUpdate\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('subscription-key', 'Bearer');

$apiInstance = new InfocenterUpdate\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$source_id = "source_id_example"; // string | Use source id to delete tours
$project = "project_example"; // string | Use this property to specify project
$ocp_apim_subscription_key = "ocp_apim_subscription_key_example"; // string | Subscription key to access the api. Get it on developer.discover.swiss.

try {
    $result = $apiInstance->deleteTour($source_id, $project, $ocp_apim_subscription_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->deleteTour: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **source_id** | **string**| Use source id to delete tours |
 **project** | **string**| Use this property to specify project |
 **ocp_apim_subscription_key** | **string**| Subscription key to access the api. Get it on developer.discover.swiss. |

### Return type

[**\InfocenterUpdate\Client\Model\DsUpdateResponse**](../Model/DsUpdateResponse.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getStatus**
> \InfocenterUpdate\Client\Model\DsStatusGet200TextPlainResponse getStatus($ocp_apim_subscription_key)

GetStatus

Get API Status

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKeyHeader
$config = InfocenterUpdate\Client\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = InfocenterUpdate\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');// Configure API key authorization: apiKeyQuery
$config = InfocenterUpdate\Client\Configuration::getDefaultConfiguration()->setApiKey('subscription-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = InfocenterUpdate\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('subscription-key', 'Bearer');

$apiInstance = new InfocenterUpdate\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ocp_apim_subscription_key = "ocp_apim_subscription_key_example"; // string | Subscription key to access the api. Get it on developer.discover.swiss.

try {
    $result = $apiInstance->getStatus($ocp_apim_subscription_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getStatus: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ocp_apim_subscription_key** | **string**| Subscription key to access the api. Get it on developer.discover.swiss. | [optional]

### Return type

[**\InfocenterUpdate\Client\Model\DsStatusGet200TextPlainResponse**](../Model/DsStatusGet200TextPlainResponse.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getStatusAbout**
> \InfocenterUpdate\Client\Model\DsStatusResponse getStatusAbout($ocp_apim_subscription_key)

GetStatusAbout

Get API Status, Version and Name

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKeyHeader
$config = InfocenterUpdate\Client\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = InfocenterUpdate\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');// Configure API key authorization: apiKeyQuery
$config = InfocenterUpdate\Client\Configuration::getDefaultConfiguration()->setApiKey('subscription-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = InfocenterUpdate\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('subscription-key', 'Bearer');

$apiInstance = new InfocenterUpdate\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ocp_apim_subscription_key = "ocp_apim_subscription_key_example"; // string | Subscription key to access the api. Get it on developer.discover.swiss.

try {
    $result = $apiInstance->getStatusAbout($ocp_apim_subscription_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getStatusAbout: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ocp_apim_subscription_key** | **string**| Subscription key to access the api. Get it on developer.discover.swiss. | [optional]

### Return type

[**\InfocenterUpdate\Client\Model\DsStatusResponse**](../Model/DsStatusResponse.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postUpsertCreativeWork**
> \InfocenterUpdate\Client\Model\DsUpdateResponse postUpsertCreativeWork($project, $body, $ocp_apim_subscription_key)

PostUpsertCreativeWork

Upsert creative works

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKeyHeader
$config = InfocenterUpdate\Client\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = InfocenterUpdate\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');// Configure API key authorization: apiKeyQuery
$config = InfocenterUpdate\Client\Configuration::getDefaultConfiguration()->setApiKey('subscription-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = InfocenterUpdate\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('subscription-key', 'Bearer');

$apiInstance = new InfocenterUpdate\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project = "project_example"; // string | Use this property to specify project
$body = new \InfocenterUpdate\Client\Model\DsCreativeWorkRequest(); // \InfocenterUpdate\Client\Model\DsCreativeWorkRequest | 
$ocp_apim_subscription_key = "ocp_apim_subscription_key_example"; // string | Subscription key to access the api. Get it on developer.discover.swiss.

try {
    $result = $apiInstance->postUpsertCreativeWork($project, $body, $ocp_apim_subscription_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->postUpsertCreativeWork: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **project** | **string**| Use this property to specify project |
 **body** | [**\InfocenterUpdate\Client\Model\DsCreativeWorkRequest**](../Model/DsCreativeWorkRequest.md)|  | [optional]
 **ocp_apim_subscription_key** | **string**| Subscription key to access the api. Get it on developer.discover.swiss. | [optional]

### Return type

[**\InfocenterUpdate\Client\Model\DsUpdateResponse**](../Model/DsUpdateResponse.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postUpsertTour**
> \InfocenterUpdate\Client\Model\DsUpdateResponse postUpsertTour($ocp_apim_subscription_key, $project, $body)

PostUpsertTour

Upsert tours

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKeyHeader
$config = InfocenterUpdate\Client\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = InfocenterUpdate\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');// Configure API key authorization: apiKeyQuery
$config = InfocenterUpdate\Client\Configuration::getDefaultConfiguration()->setApiKey('subscription-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = InfocenterUpdate\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('subscription-key', 'Bearer');

$apiInstance = new InfocenterUpdate\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ocp_apim_subscription_key = "ocp_apim_subscription_key_example"; // string | Subscription key to access the api. Get it on developer.discover.swiss.
$project = "project_example"; // string | Use this property to specify project
$body = new \InfocenterUpdate\Client\Model\DsTourRequest(); // \InfocenterUpdate\Client\Model\DsTourRequest | 

try {
    $result = $apiInstance->postUpsertTour($ocp_apim_subscription_key, $project, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->postUpsertTour: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ocp_apim_subscription_key** | **string**| Subscription key to access the api. Get it on developer.discover.swiss. |
 **project** | **string**| Use this property to specify project |
 **body** | [**\InfocenterUpdate\Client\Model\DsTourRequest**](../Model/DsTourRequest.md)|  | [optional]

### Return type

[**\InfocenterUpdate\Client\Model\DsUpdateResponse**](../Model/DsUpdateResponse.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putUpsertCreativeWork**
> \InfocenterUpdate\Client\Model\DsUpdateResponse putUpsertCreativeWork($project, $body, $ocp_apim_subscription_key)

PutUpsertCreativeWork

Upsert creative works

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKeyHeader
$config = InfocenterUpdate\Client\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = InfocenterUpdate\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');// Configure API key authorization: apiKeyQuery
$config = InfocenterUpdate\Client\Configuration::getDefaultConfiguration()->setApiKey('subscription-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = InfocenterUpdate\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('subscription-key', 'Bearer');

$apiInstance = new InfocenterUpdate\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project = "project_example"; // string | Use this property to specify project
$body = new \InfocenterUpdate\Client\Model\DsCreativeWorkRequest(); // \InfocenterUpdate\Client\Model\DsCreativeWorkRequest | 
$ocp_apim_subscription_key = "ocp_apim_subscription_key_example"; // string | Subscription key to access the api. Get it on developer.discover.swiss.

try {
    $result = $apiInstance->putUpsertCreativeWork($project, $body, $ocp_apim_subscription_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->putUpsertCreativeWork: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **project** | **string**| Use this property to specify project |
 **body** | [**\InfocenterUpdate\Client\Model\DsCreativeWorkRequest**](../Model/DsCreativeWorkRequest.md)|  | [optional]
 **ocp_apim_subscription_key** | **string**| Subscription key to access the api. Get it on developer.discover.swiss. | [optional]

### Return type

[**\InfocenterUpdate\Client\Model\DsUpdateResponse**](../Model/DsUpdateResponse.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putUpsertTour**
> \InfocenterUpdate\Client\Model\DsUpdateResponse putUpsertTour($ocp_apim_subscription_key, $project, $body)

PutUpsertTour

Upsert tours

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKeyHeader
$config = InfocenterUpdate\Client\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = InfocenterUpdate\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');// Configure API key authorization: apiKeyQuery
$config = InfocenterUpdate\Client\Configuration::getDefaultConfiguration()->setApiKey('subscription-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = InfocenterUpdate\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('subscription-key', 'Bearer');

$apiInstance = new InfocenterUpdate\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ocp_apim_subscription_key = "ocp_apim_subscription_key_example"; // string | Subscription key to access the api. Get it on developer.discover.swiss.
$project = "project_example"; // string | Use this property to specify project
$body = new \InfocenterUpdate\Client\Model\DsTourRequest(); // \InfocenterUpdate\Client\Model\DsTourRequest | 

try {
    $result = $apiInstance->putUpsertTour($ocp_apim_subscription_key, $project, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->putUpsertTour: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ocp_apim_subscription_key** | **string**| Subscription key to access the api. Get it on developer.discover.swiss. |
 **project** | **string**| Use this property to specify project |
 **body** | [**\InfocenterUpdate\Client\Model\DsTourRequest**](../Model/DsTourRequest.md)|  | [optional]

### Return type

[**\InfocenterUpdate\Client\Model\DsUpdateResponse**](../Model/DsUpdateResponse.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


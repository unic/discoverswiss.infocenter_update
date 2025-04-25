# InfocenterUpdate\Client\DefaultApi

All URIs are relative to *https://api.discover.swiss/test/info-update/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteAccommodation**](DefaultApi.md#deleteaccommodation) | **DELETE** /accommodations/{project}/{sourceId} | DeleteAccommodation
[**deleteCreativeWork**](DefaultApi.md#deletecreativework) | **DELETE** /creativeWorks/{project}/{sourceId} | DeleteCreativeWork
[**deleteFoodEstablishment**](DefaultApi.md#deletefoodestablishment) | **DELETE** /foodEstablishments/{project}/{sourceId} | DeleteFoodEstablishment
[**deleteImageObject**](DefaultApi.md#deleteimageobject) | **DELETE** /imageObjects/{project}/{sourceId} | DeleteImageObject
[**deleteProduct**](DefaultApi.md#deleteproduct) | **DELETE** /products/{project}/{sourceId} | DeleteProduct
[**deleteTour**](DefaultApi.md#deletetour) | **DELETE** /tours/{project}/{sourceId} | DeleteTour
[**deleteWebcam**](DefaultApi.md#deletewebcam) | **DELETE** /webcams/{project}/{sourceId} | DeleteWebcam
[**getAccommodation**](DefaultApi.md#getaccommodation) | **GET** /accommodations/{project}/{sourceId} | GetAccommodation
[**getCreativeWork**](DefaultApi.md#getcreativework) | **GET** /creativeWorks/{project}/{sourceId} | GetCreativeWork
[**getFoodEstablishment**](DefaultApi.md#getfoodestablishment) | **GET** /foodEstablishments/{project}/{sourceId} | GetFoodEstablishment
[**getImageObject**](DefaultApi.md#getimageobject) | **GET** /imageObjects/{project}/{sourceId} | GetImageObject
[**getLodgingBusiness**](DefaultApi.md#getlodgingbusiness) | **GET** /lodgingbusinesses/{project}/{sourceId} | GetLodgingBusiness
[**getProduct**](DefaultApi.md#getproduct) | **GET** /products/{project}/{sourceId} | GetProduct
[**getStatus**](DefaultApi.md#getstatus) | **GET** /status | GetStatus
[**getStatusAbout**](DefaultApi.md#getstatusabout) | **GET** /status/about | GetStatusAbout
[**getTour**](DefaultApi.md#gettour) | **GET** /tours/{project}/{sourceId} | GetTour
[**getWebcam**](DefaultApi.md#getwebcam) | **GET** /webcams/{project}/{sourceId} | GetWebcam
[**reimportUpdatedObjectsFromIMXPlatform**](DefaultApi.md#reimportupdatedobjectsfromimxplatform) | **POST** /webhook/imx/updates | Reimport updated objects from IMX platform
[**translate**](DefaultApi.md#translate) | **POST** /translate | Translate
[**updateVertices**](DefaultApi.md#updatevertices) | **POST** /updateVertices | UpdateVertices
[**uploadImage**](DefaultApi.md#uploadimage) | **POST** /image/{project} | UploadImage
[**upsertAccommodation**](DefaultApi.md#upsertaccommodation) | **POST** /accommodations/{project} | UpsertAccommodation
[**upsertCreativeWork**](DefaultApi.md#upsertcreativework) | **POST** /creativeWorks/{project} | UpsertCreativeWork
[**upsertFoodEstablishment**](DefaultApi.md#upsertfoodestablishment) | **POST** /foodEstablishments/{project} | UpsertFoodEstablishment
[**upsertImageObject**](DefaultApi.md#upsertimageobject) | **POST** /imageObjects/{project} | UpsertImageObject
[**upsertLodgingBusiness**](DefaultApi.md#upsertlodgingbusiness) | **POST** /lodgingbusinesses/{project} | UpsertLodgingBusiness
[**upsertProduct**](DefaultApi.md#upsertproduct) | **POST** /products/{project} | UpsertProduct
[**upsertTour**](DefaultApi.md#upserttour) | **POST** /tours/{project} | UpsertTour
[**upsertWebcam**](DefaultApi.md#upsertwebcam) | **POST** /webcams/{project} | UpsertWebcam

# **deleteAccommodation**
> \InfocenterUpdate\Client\Model\DsUpdateResponse deleteAccommodation($project, $source_id, $ocp_apim_subscription_key)

DeleteAccommodation

Delete accommodation

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
$source_id = "source_id_example"; // string | Accommodation identifier
$ocp_apim_subscription_key = "ocp_apim_subscription_key_example"; // string | Subscription key to access the API. Get it on (Developer portal)[https://developer.discover.swiss].

try {
    $result = $apiInstance->deleteAccommodation($project, $source_id, $ocp_apim_subscription_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->deleteAccommodation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **project** | **string**| Use this property to specify project |
 **source_id** | **string**| Accommodation identifier |
 **ocp_apim_subscription_key** | **string**| Subscription key to access the API. Get it on (Developer portal)[https://developer.discover.swiss]. |

### Return type

[**\InfocenterUpdate\Client\Model\DsUpdateResponse**](../Model/DsUpdateResponse.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteCreativeWork**
> \InfocenterUpdate\Client\Model\DsUpdateResponse deleteCreativeWork($project, $source_id, $ocp_apim_subscription_key)

DeleteCreativeWork

Delete creative work

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
$source_id = "source_id_example"; // string | Creative work identifier
$ocp_apim_subscription_key = "ocp_apim_subscription_key_example"; // string | Subscription key to access the API. Get it on (Developer portal)[https://developer.discover.swiss].

try {
    $result = $apiInstance->deleteCreativeWork($project, $source_id, $ocp_apim_subscription_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->deleteCreativeWork: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **project** | **string**| Use this property to specify project |
 **source_id** | **string**| Creative work identifier |
 **ocp_apim_subscription_key** | **string**| Subscription key to access the API. Get it on (Developer portal)[https://developer.discover.swiss]. | [optional]

### Return type

[**\InfocenterUpdate\Client\Model\DsUpdateResponse**](../Model/DsUpdateResponse.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteFoodEstablishment**
> \InfocenterUpdate\Client\Model\DsUpdateResponse deleteFoodEstablishment($project, $source_id, $ocp_apim_subscription_key)

DeleteFoodEstablishment

Delete a food establishment

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
$source_id = "source_id_example"; // string | Food establishment identifier
$ocp_apim_subscription_key = "ocp_apim_subscription_key_example"; // string | Subscription key to access the API. Get it on (Developer portal)[https://developer.discover.swiss].

try {
    $result = $apiInstance->deleteFoodEstablishment($project, $source_id, $ocp_apim_subscription_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->deleteFoodEstablishment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **project** | **string**| Use this property to specify project |
 **source_id** | **string**| Food establishment identifier |
 **ocp_apim_subscription_key** | **string**| Subscription key to access the API. Get it on (Developer portal)[https://developer.discover.swiss]. |

### Return type

[**\InfocenterUpdate\Client\Model\DsUpdateResponse**](../Model/DsUpdateResponse.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteImageObject**
> \InfocenterUpdate\Client\Model\DsUpdateResponse deleteImageObject($project, $source_id, $ocp_apim_subscription_key)

DeleteImageObject

Delete image object

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
$source_id = "source_id_example"; // string | Image object identifier
$ocp_apim_subscription_key = "ocp_apim_subscription_key_example"; // string | Subscription key to access the API. Get it on (Developer portal)[https://developer.discover.swiss].

try {
    $result = $apiInstance->deleteImageObject($project, $source_id, $ocp_apim_subscription_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->deleteImageObject: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **project** | **string**| Use this property to specify project |
 **source_id** | **string**| Image object identifier |
 **ocp_apim_subscription_key** | **string**| Subscription key to access the API. Get it on (Developer portal)[https://developer.discover.swiss]. |

### Return type

[**\InfocenterUpdate\Client\Model\DsUpdateResponse**](../Model/DsUpdateResponse.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteProduct**
> \InfocenterUpdate\Client\Model\DsUpdateResponse deleteProduct($project, $source_id, $ocp_apim_subscription_key)

DeleteProduct

Delete a product

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
$source_id = "source_id_example"; // string | Product identifier
$ocp_apim_subscription_key = "ocp_apim_subscription_key_example"; // string | Subscription key to access the API. Get it on (Developer portal)[https://developer.discover.swiss].

try {
    $result = $apiInstance->deleteProduct($project, $source_id, $ocp_apim_subscription_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->deleteProduct: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **project** | **string**| Use this property to specify project |
 **source_id** | **string**| Product identifier |
 **ocp_apim_subscription_key** | **string**| Subscription key to access the API. Get it on (Developer portal)[https://developer.discover.swiss]. |

### Return type

[**\InfocenterUpdate\Client\Model\DsUpdateResponse**](../Model/DsUpdateResponse.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteTour**
> \InfocenterUpdate\Client\Model\DsUpdateResponse deleteTour($project, $source_id, $ocp_apim_subscription_key)

DeleteTour

Delete tour

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
$source_id = "source_id_example"; // string | Tour identifier
$ocp_apim_subscription_key = "ocp_apim_subscription_key_example"; // string | Subscription key to access the API. Get it on (Developer portal)[https://developer.discover.swiss].

try {
    $result = $apiInstance->deleteTour($project, $source_id, $ocp_apim_subscription_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->deleteTour: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **project** | **string**| Use this property to specify project |
 **source_id** | **string**| Tour identifier |
 **ocp_apim_subscription_key** | **string**| Subscription key to access the API. Get it on (Developer portal)[https://developer.discover.swiss]. |

### Return type

[**\InfocenterUpdate\Client\Model\DsUpdateResponse**](../Model/DsUpdateResponse.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteWebcam**
> \InfocenterUpdate\Client\Model\DsUpdateResponse deleteWebcam($project, $source_id, $ocp_apim_subscription_key)

DeleteWebcam

Delete a webcam

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
$source_id = "source_id_example"; // string | Webcam identifier
$ocp_apim_subscription_key = "ocp_apim_subscription_key_example"; // string | Subscription key to access the API. Get it on (Developer portal)[https://developer.discover.swiss].

try {
    $result = $apiInstance->deleteWebcam($project, $source_id, $ocp_apim_subscription_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->deleteWebcam: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **project** | **string**| Use this property to specify project |
 **source_id** | **string**| Webcam identifier |
 **ocp_apim_subscription_key** | **string**| Subscription key to access the API. Get it on (Developer portal)[https://developer.discover.swiss]. |

### Return type

[**\InfocenterUpdate\Client\Model\DsUpdateResponse**](../Model/DsUpdateResponse.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAccommodation**
> \InfocenterUpdate\Client\Model\DsAccommodationRequest getAccommodation($project, $source_id, $ocp_apim_subscription_key)

GetAccommodation

Get the latest upserted version of the accommodation

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
$source_id = "source_id_example"; // string | Accommodation identifier
$ocp_apim_subscription_key = "ocp_apim_subscription_key_example"; // string | Subscription key to access the API. Get it on (Developer portal)[https://developer.discover.swiss].

try {
    $result = $apiInstance->getAccommodation($project, $source_id, $ocp_apim_subscription_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getAccommodation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **project** | **string**| Use this property to specify project |
 **source_id** | **string**| Accommodation identifier |
 **ocp_apim_subscription_key** | **string**| Subscription key to access the API. Get it on (Developer portal)[https://developer.discover.swiss]. |

### Return type

[**\InfocenterUpdate\Client\Model\DsAccommodationRequest**](../Model/DsAccommodationRequest.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCreativeWork**
> \InfocenterUpdate\Client\Model\DsCreativeWorkRequest getCreativeWork($project, $source_id, $ocp_apim_subscription_key)

GetCreativeWork

Get the latest upserted version of the creative work

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
$source_id = "source_id_example"; // string | Creative work identifier
$ocp_apim_subscription_key = "ocp_apim_subscription_key_example"; // string | Subscription key to access the API. Get it on (Developer portal)[https://developer.discover.swiss].

try {
    $result = $apiInstance->getCreativeWork($project, $source_id, $ocp_apim_subscription_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getCreativeWork: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **project** | **string**| Use this property to specify project |
 **source_id** | **string**| Creative work identifier |
 **ocp_apim_subscription_key** | **string**| Subscription key to access the API. Get it on (Developer portal)[https://developer.discover.swiss]. | [optional]

### Return type

[**\InfocenterUpdate\Client\Model\DsCreativeWorkRequest**](../Model/DsCreativeWorkRequest.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getFoodEstablishment**
> \InfocenterUpdate\Client\Model\DsFoodEstablishmentRequest getFoodEstablishment($project, $source_id, $ocp_apim_subscription_key)

GetFoodEstablishment

Get the latest upserted version of the food establishment

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
$source_id = "source_id_example"; // string | Food establishment identifier
$ocp_apim_subscription_key = "ocp_apim_subscription_key_example"; // string | Subscription key to access the API. Get it on (Developer portal)[https://developer.discover.swiss].

try {
    $result = $apiInstance->getFoodEstablishment($project, $source_id, $ocp_apim_subscription_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getFoodEstablishment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **project** | **string**| Use this property to specify project |
 **source_id** | **string**| Food establishment identifier |
 **ocp_apim_subscription_key** | **string**| Subscription key to access the API. Get it on (Developer portal)[https://developer.discover.swiss]. | [optional]

### Return type

[**\InfocenterUpdate\Client\Model\DsFoodEstablishmentRequest**](../Model/DsFoodEstablishmentRequest.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getImageObject**
> \InfocenterUpdate\Client\Model\DsImageObjectRequest getImageObject($project, $source_id, $ocp_apim_subscription_key)

GetImageObject

Get the latest upserted version of the image object

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
$source_id = "source_id_example"; // string | Image object identifier
$ocp_apim_subscription_key = "ocp_apim_subscription_key_example"; // string | Subscription key to access the API. Get it on (Developer portal)[https://developer.discover.swiss].

try {
    $result = $apiInstance->getImageObject($project, $source_id, $ocp_apim_subscription_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getImageObject: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **project** | **string**| Use this property to specify project |
 **source_id** | **string**| Image object identifier |
 **ocp_apim_subscription_key** | **string**| Subscription key to access the API. Get it on (Developer portal)[https://developer.discover.swiss]. |

### Return type

[**\InfocenterUpdate\Client\Model\DsImageObjectRequest**](../Model/DsImageObjectRequest.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getLodgingBusiness**
> \InfocenterUpdate\Client\Model\DsLodgingBusinessRequest getLodgingBusiness($project, $source_id, $ocp_apim_subscription_key)

GetLodgingBusiness

Get the latest upserted version of the lodging business

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
$source_id = "source_id_example"; // string | Lodging business identifier
$ocp_apim_subscription_key = "ocp_apim_subscription_key_example"; // string | Subscription key to access the API. Get it on (Developer portal)[https://developer.discover.swiss].

try {
    $result = $apiInstance->getLodgingBusiness($project, $source_id, $ocp_apim_subscription_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getLodgingBusiness: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **project** | **string**| Use this property to specify project |
 **source_id** | **string**| Lodging business identifier |
 **ocp_apim_subscription_key** | **string**| Subscription key to access the API. Get it on (Developer portal)[https://developer.discover.swiss]. | [optional]

### Return type

[**\InfocenterUpdate\Client\Model\DsLodgingBusinessRequest**](../Model/DsLodgingBusinessRequest.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getProduct**
> \InfocenterUpdate\Client\Model\DsProductRequest getProduct($project, $source_id, $ocp_apim_subscription_key)

GetProduct

Get the latest upserted version of the product

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
$source_id = "source_id_example"; // string | Product identifier
$ocp_apim_subscription_key = "ocp_apim_subscription_key_example"; // string | Subscription key to access the API. Get it on (Developer portal)[https://developer.discover.swiss].

try {
    $result = $apiInstance->getProduct($project, $source_id, $ocp_apim_subscription_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getProduct: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **project** | **string**| Use this property to specify project |
 **source_id** | **string**| Product identifier |
 **ocp_apim_subscription_key** | **string**| Subscription key to access the API. Get it on (Developer portal)[https://developer.discover.swiss]. | [optional]

### Return type

[**\InfocenterUpdate\Client\Model\DsProductRequest**](../Model/DsProductRequest.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getStatus**
> getStatus($ocp_apim_subscription_key)

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
$ocp_apim_subscription_key = "ocp_apim_subscription_key_example"; // string | Subscription key to access the API. Get it on (Developer portal)[https://developer.discover.swiss].

try {
    $apiInstance->getStatus($ocp_apim_subscription_key);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getStatus: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ocp_apim_subscription_key** | **string**| Subscription key to access the API. Get it on (Developer portal)[https://developer.discover.swiss]. | [optional]

### Return type

void (empty response body)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

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
$ocp_apim_subscription_key = "ocp_apim_subscription_key_example"; // string | Subscription key to access the API. Get it on (Developer portal)[https://developer.discover.swiss].

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
 **ocp_apim_subscription_key** | **string**| Subscription key to access the API. Get it on (Developer portal)[https://developer.discover.swiss]. | [optional]

### Return type

[**\InfocenterUpdate\Client\Model\DsStatusResponse**](../Model/DsStatusResponse.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTour**
> \InfocenterUpdate\Client\Model\DsTourRequest getTour($project, $source_id, $ocp_apim_subscription_key)

GetTour

Get the latest upserted version of the tour

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
$source_id = "source_id_example"; // string | Tour identifier
$ocp_apim_subscription_key = "ocp_apim_subscription_key_example"; // string | Subscription key to access the API. Get it on (Developer portal)[https://developer.discover.swiss].

try {
    $result = $apiInstance->getTour($project, $source_id, $ocp_apim_subscription_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getTour: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **project** | **string**| Use this property to specify project |
 **source_id** | **string**| Tour identifier |
 **ocp_apim_subscription_key** | **string**| Subscription key to access the API. Get it on (Developer portal)[https://developer.discover.swiss]. | [optional]

### Return type

[**\InfocenterUpdate\Client\Model\DsTourRequest**](../Model/DsTourRequest.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getWebcam**
> \InfocenterUpdate\Client\Model\DsWebcamRequest getWebcam($project, $source_id, $ocp_apim_subscription_key)

GetWebcam

Get the latest upserted version of the webcam

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
$source_id = "source_id_example"; // string | Webcam identifier
$ocp_apim_subscription_key = "ocp_apim_subscription_key_example"; // string | Subscription key to access the API. Get it on (Developer portal)[https://developer.discover.swiss].

try {
    $result = $apiInstance->getWebcam($project, $source_id, $ocp_apim_subscription_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getWebcam: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **project** | **string**| Use this property to specify project |
 **source_id** | **string**| Webcam identifier |
 **ocp_apim_subscription_key** | **string**| Subscription key to access the API. Get it on (Developer portal)[https://developer.discover.swiss]. | [optional]

### Return type

[**\InfocenterUpdate\Client\Model\DsWebcamRequest**](../Model/DsWebcamRequest.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **reimportUpdatedObjectsFromIMXPlatform**
> reimportUpdatedObjectsFromIMXPlatform($ocp_apim_subscription_key)

Reimport updated objects from IMX platform

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
$ocp_apim_subscription_key = "ocp_apim_subscription_key_example"; // string | Subscription key to access the API. Get it on (Developer portal)[https://developer.discover.swiss].

try {
    $apiInstance->reimportUpdatedObjectsFromIMXPlatform($ocp_apim_subscription_key);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->reimportUpdatedObjectsFromIMXPlatform: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ocp_apim_subscription_key** | **string**| Subscription key to access the API. Get it on (Developer portal)[https://developer.discover.swiss]. |

### Return type

void (empty response body)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **translate**
> \InfocenterUpdate\Client\Model\DsTranslationItemResponseArray translate($ocp_apim_subscription_key, $body)

Translate

Translate text into provided languages

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
$ocp_apim_subscription_key = "ocp_apim_subscription_key_example"; // string | Subscription key to access the API. Get it on (Developer portal)[https://developer.discover.swiss].
$body = new \InfocenterUpdate\Client\Model\DsTranslationRequest(); // \InfocenterUpdate\Client\Model\DsTranslationRequest | 

try {
    $result = $apiInstance->translate($ocp_apim_subscription_key, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->translate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ocp_apim_subscription_key** | **string**| Subscription key to access the API. Get it on (Developer portal)[https://developer.discover.swiss]. |
 **body** | [**\InfocenterUpdate\Client\Model\DsTranslationRequest**](../Model/DsTranslationRequest.md)|  | [optional]

### Return type

[**\InfocenterUpdate\Client\Model\DsTranslationItemResponseArray**](../Model/DsTranslationItemResponseArray.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateVertices**
> updateVertices($request_partner)

UpdateVertices

Run full download pipeline for vertices (Only for internal usage)

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
$request_partner = "request_partner_example"; // string | Request partner acronym.

try {
    $apiInstance->updateVertices($request_partner);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->updateVertices: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request_partner** | **string**| Request partner acronym. |

### Return type

void (empty response body)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **uploadImage**
> \InfocenterUpdate\Client\Model\DsImageProjectPost200TextPlainResponse uploadImage($project, $ocp_apim_subscription_key)

UploadImage

Upload image (binary data) and get URL

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
$ocp_apim_subscription_key = "ocp_apim_subscription_key_example"; // string | Subscription key to access the API. Get it on (Developer portal)[https://developer.discover.swiss].

try {
    $result = $apiInstance->uploadImage($project, $ocp_apim_subscription_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->uploadImage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **project** | **string**| Use this property to specify project |
 **ocp_apim_subscription_key** | **string**| Subscription key to access the API. Get it on (Developer portal)[https://developer.discover.swiss]. |

### Return type

[**\InfocenterUpdate\Client\Model\DsImageProjectPost200TextPlainResponse**](../Model/DsImageProjectPost200TextPlainResponse.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **upsertAccommodation**
> \InfocenterUpdate\Client\Model\DsUpdateResponse upsertAccommodation($ocp_apim_subscription_key, $project, $body)

UpsertAccommodation

Upsert accommodation

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
$ocp_apim_subscription_key = "ocp_apim_subscription_key_example"; // string | Subscription key to access the API. Get it on (Developer portal)[https://developer.discover.swiss].
$project = "project_example"; // string | Use this property to specify project
$body = new \InfocenterUpdate\Client\Model\DsAccommodationRequest(); // \InfocenterUpdate\Client\Model\DsAccommodationRequest | 

try {
    $result = $apiInstance->upsertAccommodation($ocp_apim_subscription_key, $project, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->upsertAccommodation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ocp_apim_subscription_key** | **string**| Subscription key to access the API. Get it on (Developer portal)[https://developer.discover.swiss]. |
 **project** | **string**| Use this property to specify project |
 **body** | [**\InfocenterUpdate\Client\Model\DsAccommodationRequest**](../Model/DsAccommodationRequest.md)|  | [optional]

### Return type

[**\InfocenterUpdate\Client\Model\DsUpdateResponse**](../Model/DsUpdateResponse.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **upsertCreativeWork**
> \InfocenterUpdate\Client\Model\DsUpdateResponse upsertCreativeWork($project, $body, $ocp_apim_subscription_key)

UpsertCreativeWork

Upsert creative work

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
$ocp_apim_subscription_key = "ocp_apim_subscription_key_example"; // string | Subscription key to access the API. Get it on (Developer portal)[https://developer.discover.swiss].

try {
    $result = $apiInstance->upsertCreativeWork($project, $body, $ocp_apim_subscription_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->upsertCreativeWork: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **project** | **string**| Use this property to specify project |
 **body** | [**\InfocenterUpdate\Client\Model\DsCreativeWorkRequest**](../Model/DsCreativeWorkRequest.md)|  | [optional]
 **ocp_apim_subscription_key** | **string**| Subscription key to access the API. Get it on (Developer portal)[https://developer.discover.swiss]. | [optional]

### Return type

[**\InfocenterUpdate\Client\Model\DsUpdateResponse**](../Model/DsUpdateResponse.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **upsertFoodEstablishment**
> \InfocenterUpdate\Client\Model\DsUpdateResponse upsertFoodEstablishment($ocp_apim_subscription_key, $project, $body)

UpsertFoodEstablishment

Upsert a food establishment

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
$ocp_apim_subscription_key = "ocp_apim_subscription_key_example"; // string | Subscription key to access the API. Get it on (Developer portal)[https://developer.discover.swiss].
$project = "project_example"; // string | Use this property to specify project
$body = new \InfocenterUpdate\Client\Model\DsFoodEstablishmentRequest(); // \InfocenterUpdate\Client\Model\DsFoodEstablishmentRequest | 

try {
    $result = $apiInstance->upsertFoodEstablishment($ocp_apim_subscription_key, $project, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->upsertFoodEstablishment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ocp_apim_subscription_key** | **string**| Subscription key to access the API. Get it on (Developer portal)[https://developer.discover.swiss]. |
 **project** | **string**| Use this property to specify project |
 **body** | [**\InfocenterUpdate\Client\Model\DsFoodEstablishmentRequest**](../Model/DsFoodEstablishmentRequest.md)|  | [optional]

### Return type

[**\InfocenterUpdate\Client\Model\DsUpdateResponse**](../Model/DsUpdateResponse.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **upsertImageObject**
> \InfocenterUpdate\Client\Model\DsUpdateResponse upsertImageObject($ocp_apim_subscription_key, $project, $body)

UpsertImageObject

Upsert image object

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
$ocp_apim_subscription_key = "ocp_apim_subscription_key_example"; // string | Subscription key to access the API. Get it on (Developer portal)[https://developer.discover.swiss].
$project = "project_example"; // string | Use this property to specify project
$body = new \InfocenterUpdate\Client\Model\DsImageObjectRequest(); // \InfocenterUpdate\Client\Model\DsImageObjectRequest | 

try {
    $result = $apiInstance->upsertImageObject($ocp_apim_subscription_key, $project, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->upsertImageObject: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ocp_apim_subscription_key** | **string**| Subscription key to access the API. Get it on (Developer portal)[https://developer.discover.swiss]. |
 **project** | **string**| Use this property to specify project |
 **body** | [**\InfocenterUpdate\Client\Model\DsImageObjectRequest**](../Model/DsImageObjectRequest.md)|  | [optional]

### Return type

[**\InfocenterUpdate\Client\Model\DsUpdateResponse**](../Model/DsUpdateResponse.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **upsertLodgingBusiness**
> \InfocenterUpdate\Client\Model\DsUpdateResponse upsertLodgingBusiness($project, $body, $ocp_apim_subscription_key)

UpsertLodgingBusiness

Upsert lodging business

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
$body = new \InfocenterUpdate\Client\Model\DsLodgingBusinessRequest(); // \InfocenterUpdate\Client\Model\DsLodgingBusinessRequest | 
$ocp_apim_subscription_key = "ocp_apim_subscription_key_example"; // string | Subscription key to access the API. Get it on (Developer portal)[https://developer.discover.swiss].

try {
    $result = $apiInstance->upsertLodgingBusiness($project, $body, $ocp_apim_subscription_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->upsertLodgingBusiness: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **project** | **string**| Use this property to specify project |
 **body** | [**\InfocenterUpdate\Client\Model\DsLodgingBusinessRequest**](../Model/DsLodgingBusinessRequest.md)|  | [optional]
 **ocp_apim_subscription_key** | **string**| Subscription key to access the API. Get it on (Developer portal)[https://developer.discover.swiss]. | [optional]

### Return type

[**\InfocenterUpdate\Client\Model\DsUpdateResponse**](../Model/DsUpdateResponse.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **upsertProduct**
> \InfocenterUpdate\Client\Model\DsUpdateResponse upsertProduct($ocp_apim_subscription_key, $project, $body)

UpsertProduct

Upsert a product

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
$ocp_apim_subscription_key = "ocp_apim_subscription_key_example"; // string | Subscription key to access the API. Get it on (Developer portal)[https://developer.discover.swiss].
$project = "project_example"; // string | Use this property to specify project
$body = new \InfocenterUpdate\Client\Model\DsProductRequest(); // \InfocenterUpdate\Client\Model\DsProductRequest | 

try {
    $result = $apiInstance->upsertProduct($ocp_apim_subscription_key, $project, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->upsertProduct: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ocp_apim_subscription_key** | **string**| Subscription key to access the API. Get it on (Developer portal)[https://developer.discover.swiss]. |
 **project** | **string**| Use this property to specify project |
 **body** | [**\InfocenterUpdate\Client\Model\DsProductRequest**](../Model/DsProductRequest.md)|  | [optional]

### Return type

[**\InfocenterUpdate\Client\Model\DsUpdateResponse**](../Model/DsUpdateResponse.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **upsertTour**
> \InfocenterUpdate\Client\Model\DsUpdateResponse upsertTour($ocp_apim_subscription_key, $project, $body)

UpsertTour

Upsert tour

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
$ocp_apim_subscription_key = "ocp_apim_subscription_key_example"; // string | Subscription key to access the API. Get it on (Developer portal)[https://developer.discover.swiss].
$project = "project_example"; // string | Use this property to specify project
$body = new \InfocenterUpdate\Client\Model\DsTourRequest(); // \InfocenterUpdate\Client\Model\DsTourRequest | 

try {
    $result = $apiInstance->upsertTour($ocp_apim_subscription_key, $project, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->upsertTour: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ocp_apim_subscription_key** | **string**| Subscription key to access the API. Get it on (Developer portal)[https://developer.discover.swiss]. |
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

# **upsertWebcam**
> \InfocenterUpdate\Client\Model\DsUpdateResponse upsertWebcam($ocp_apim_subscription_key, $project, $body)

UpsertWebcam

Upsert a webcam

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
$ocp_apim_subscription_key = "ocp_apim_subscription_key_example"; // string | Subscription key to access the API. Get it on (Developer portal)[https://developer.discover.swiss].
$project = "project_example"; // string | Use this property to specify project
$body = new \InfocenterUpdate\Client\Model\DsWebcamRequest(); // \InfocenterUpdate\Client\Model\DsWebcamRequest | 

try {
    $result = $apiInstance->upsertWebcam($ocp_apim_subscription_key, $project, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->upsertWebcam: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ocp_apim_subscription_key** | **string**| Subscription key to access the API. Get it on (Developer portal)[https://developer.discover.swiss]. |
 **project** | **string**| Use this property to specify project |
 **body** | [**\InfocenterUpdate\Client\Model\DsWebcamRequest**](../Model/DsWebcamRequest.md)|  | [optional]

### Return type

[**\InfocenterUpdate\Client\Model\DsUpdateResponse**](../Model/DsUpdateResponse.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


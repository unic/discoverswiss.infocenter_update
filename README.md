# SwaggerClient-php
Infocenter Update test-v2

This PHP package is automatically generated by the [Swagger Codegen](https://github.com/swagger-api/swagger-codegen) project:

- API version: v2
- Build package: io.swagger.codegen.v3.generators.php.PhpClientCodegen

## Requirements

PHP 5.5 and later

## Installation & Usage
### Composer

To install the bindings via [Composer](http://getcomposer.org/), add the following to `composer.json`:

```
{
  "repositories": [
    {
      "type": "git",
      "url": "https://github.com/unic/discoverswiss.infocenter_update.git"
    }
  ],
  "require": {
    "unic/discoverswiss.infocenter_update": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
    require_once('/path/to/SwaggerClient-php/vendor/autoload.php');
```

## Tests

To run the unit tests:

```
composer install
./vendor/bin/phpunit
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKeyHeader
$config = InfocenterUpdate\Client\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = InfocenterUpdate\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');
// Configure API key authorization: apiKeyQuery
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

// Configure API key authorization: apiKeyHeader
$config = InfocenterUpdate\Client\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = InfocenterUpdate\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');
// Configure API key authorization: apiKeyQuery
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

// Configure API key authorization: apiKeyHeader
$config = InfocenterUpdate\Client\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = InfocenterUpdate\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');
// Configure API key authorization: apiKeyQuery
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

// Configure API key authorization: apiKeyHeader
$config = InfocenterUpdate\Client\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = InfocenterUpdate\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');
// Configure API key authorization: apiKeyQuery
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

// Configure API key authorization: apiKeyHeader
$config = InfocenterUpdate\Client\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = InfocenterUpdate\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');
// Configure API key authorization: apiKeyQuery
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

// Configure API key authorization: apiKeyHeader
$config = InfocenterUpdate\Client\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = InfocenterUpdate\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');
// Configure API key authorization: apiKeyQuery
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

// Configure API key authorization: apiKeyHeader
$config = InfocenterUpdate\Client\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = InfocenterUpdate\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');
// Configure API key authorization: apiKeyQuery
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

// Configure API key authorization: apiKeyHeader
$config = InfocenterUpdate\Client\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = InfocenterUpdate\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');
// Configure API key authorization: apiKeyQuery
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

## Documentation for API Endpoints

All URIs are relative to *https://api.discover.swiss/test/info-update/v2*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*DefaultApi* | [**deleteCreativeWork**](docs/Api/DefaultApi.md#deletecreativework) | **DELETE** /creativeWorks/{project}/{sourceId} | DeleteCreativeWork
*DefaultApi* | [**deleteTour**](docs/Api/DefaultApi.md#deletetour) | **DELETE** /tours/{project}/{sourceId} | DeleteTour
*DefaultApi* | [**getStatus**](docs/Api/DefaultApi.md#getstatus) | **GET** /status | GetStatus
*DefaultApi* | [**getStatusAbout**](docs/Api/DefaultApi.md#getstatusabout) | **GET** /status/about | GetStatusAbout
*DefaultApi* | [**postUpsertCreativeWork**](docs/Api/DefaultApi.md#postupsertcreativework) | **POST** /creativeWorks/{project} | PostUpsertCreativeWork
*DefaultApi* | [**postUpsertTour**](docs/Api/DefaultApi.md#postupserttour) | **POST** /tours/{project} | PostUpsertTour
*DefaultApi* | [**putUpsertCreativeWork**](docs/Api/DefaultApi.md#putupsertcreativework) | **PUT** /creativeWorks/{project} | PutUpsertCreativeWork
*DefaultApi* | [**putUpsertTour**](docs/Api/DefaultApi.md#putupserttour) | **PUT** /tours/{project} | PutUpsertTour

## Documentation For Models

 - [DsCreativeWorkRequest](docs/Model/DsCreativeWorkRequest.md)
 - [DsDataGovernanceRequest](docs/Model/DsDataGovernanceRequest.md)
 - [DsGeoCoordinatesRequest](docs/Model/DsGeoCoordinatesRequest.md)
 - [DsGeoShapeRequest](docs/Model/DsGeoShapeRequest.md)
 - [DsImageObjectRequest](docs/Model/DsImageObjectRequest.md)
 - [DsLinkRequest](docs/Model/DsLinkRequest.md)
 - [DsOpeningHoursSpecificationRequest](docs/Model/DsOpeningHoursSpecificationRequest.md)
 - [DsPartnerRequest](docs/Model/DsPartnerRequest.md)
 - [DsPersonRequest](docs/Model/DsPersonRequest.md)
 - [DsPostalAddressRequest](docs/Model/DsPostalAddressRequest.md)
 - [DsStatusGet200TextPlainResponse](docs/Model/DsStatusGet200TextPlainResponse.md)
 - [DsStatusResponse](docs/Model/DsStatusResponse.md)
 - [DsTourElevationRequest](docs/Model/DsTourElevationRequest.md)
 - [DsTourRatingRequest](docs/Model/DsTourRatingRequest.md)
 - [DsTourRequest](docs/Model/DsTourRequest.md)
 - [DsTourSeasonRequest](docs/Model/DsTourSeasonRequest.md)
 - [DsUpdateResponse](docs/Model/DsUpdateResponse.md)

## Documentation For Authorization


## apiKeyHeader

- **Type**: API key
- **API key parameter name**: Ocp-Apim-Subscription-Key
- **Location**: HTTP header

## apiKeyQuery

- **Type**: API key
- **API key parameter name**: subscription-key
- **Location**: URL query string


## Author




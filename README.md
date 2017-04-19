[![Code Climate](https://codeclimate.com/github/LarsNieuwenhuizen/Trustpilot/badges/gpa.svg)](https://codeclimate.com/github/LarsNieuwenhuizen/Trustpilot)
[![Test Coverage](https://codeclimate.com/github/LarsNieuwenhuizen/Trustpilot/badges/coverage.svg)](https://codeclimate.com/github/LarsNieuwenhuizen/Trustpilot/coverage)
[![Build Status](https://travis-ci.org/LarsNieuwenhuizen/Trustpilot.svg?branch=master)](https://travis-ci.org/LarsNieuwenhuizen/Trustpilot)
[![StyleCI](https://styleci.io/repos/87822841/shield?branch=master)](https://styleci.io/repos/87822841)

# Trustpilot
PHP library for communication with Trustpilot 

## Under development

This package is currently being developed (12-04-2017)

This package will first only support the public routes which require access through api key.
Later on the private requests will be added with oAuth support.

## Functioning calls

- #### Business unite
  - [Get public business unit](#https://developers.trustpilot.com/business-unit-api#get-public-business-unit)
  - [Get a business unit's reviews](#https://developers.trustpilot.com/business-unit-api#get-a-business-unit's-reviews)
  - [Get a business unit's categories](#https://developers.trustpilot.com/business-unit-api#list-categories-for-business-unit)
  - [Get a business unit's web links](#https://developers.trustpilot.com/business-unit-api#get-a-business-unit's-web-links)
  - [Get a list of business units](#https://developers.trustpilot.com/business-unit-api#get-a-list-of-business-units)

- #### Categories
  - [Get category](#https://developers.trustpilot.com/categories-api#get-category)
  - [List business units in category](#https://developers.trustpilot.com/categories-api#list-business-units-in-category)

- #### Consumers
  - [Get a consumer's reviews](#https://developers.trustpilot.com/consumer-api#get-a-consumer's-reviews)
  - [Get the profile of the consumer](#https://developers.trustpilot.com/consumer-api#get-the-profile-of-the-consumer)
  - [Get the profile of the consumer(with #reviews and weblinks)](#https://developers.trustpilot.com/consumer-api#get-the-profile-of-the-consumer(with-#reviews-and-weblinks))


## Example setup
```php
$configuration = new \LarsNieuwenhuizen\Trustpilot\Configuration();
$configuration->setBaseUrl('https://api.trustpilot.com/')
    ->setBasePath('v1/')
    ->setDefaultResultsPerPage(5)
    ->setDefaultOrderBy('createdat.desc')
    ->setApiKey('apikey');

$client = new \LarsNieuwenhuizen\Trustpilot\Client($configuration);

$result = $client->businessDataService->getAllBusinessUnits();
```

## Install via composer
```bash
$ composer require larsnieuwenhuizen/trustpilot
```
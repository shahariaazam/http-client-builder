
![Code Checks](https://github.com/shahariaazam/http-client-builder/workflows/Code-Checks/badge.svg)
![Build](https://scrutinizer-ci.com/g/shahariaazam/http-client-builder/badges/build.png?b=master)
![Code Coverage](https://scrutinizer-ci.com/g/shahariaazam/http-client-builder/badges/coverage.png?b=master)
![Code Rating](https://scrutinizer-ci.com/g/shahariaazam/http-client-builder/badges/quality-score.png?b=master)
![Code Intellegence](https://scrutinizer-ci.com/g/shahariaazam/http-client-builder/badges/code-intelligence.svg?b=master)

# HTTP Client Builder

A flexible, extendible, customizable PSR-18 compatible HTTP client builder for PHP. 
You can add it in your library and give user flexibility to use custom PSR-18 compatible HTTP client with it.

### Usage

Just add this library to your `composer.json` file. 

```
composer require shahariaazam/http-client-builder
```

Now if you need any HTTP request in your existing class, just extend your class with `ShahariaAzam\FlexiHTTP\HTTPClientBuilder`.

See following example.

```php
<?php

namespace ShahariaAzam\HTTPClientBuilder;

class YourClass extends HTTPSupport
{
    // Now your class have the following method already
    // public function setHttpClient(ClientInterface $httpClient)
    // public function getHttpClient()
    // public function getHttpHeaders()
    // public function setHttpHeaders()
    // public function getHttpHeaders()
    
    // Now perform HTTP request with the following method
    // public function httpRequest($method, $uri, $headers = [], $body = null, $version = '1.1')
}
``` 

### Contributors

- [Shaharia Azam](https://github.com/shahariaazam)

You can see full list of contributors from [here](https://github.com/shahariaazam/http-client-builder/graphs/contributors). 
You are also welcome to contribute to this repository.

### Issue

Submit your issue [here](https://github.com/shahariaazam/http-client-builder/issues/new)
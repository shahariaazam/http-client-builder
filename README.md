
![Code Checks](https://github.com/shahariaazam/http-client-support/workflows/Code-Checks/badge.svg)
![Build](https://scrutinizer-ci.com/g/shahariaazam/http-client-support/badges/build.png?b=master)
![Code Coverage](https://scrutinizer-ci.com/g/shahariaazam/http-client-support/badges/coverage.png?b=master)
![Code Rating](https://scrutinizer-ci.com/g/shahariaazam/http-client-support/badges/quality-score.png?b=master)
![Code Intellegence](https://scrutinizer-ci.com/g/shahariaazam/http-client-support/badges/code-intelligence.svg?b=master)

# HTTP Client Builder

A flexible, extendible, customizable PSR-18 compatible HTTP client builder for PHP. 
You can add it in your library and give user flexibility to use custom PSR-18 compatible HTTP client with it.

### Usage

Just add this library to your `composer.json` file. 

```
composer require shahariaazam/http-client-support
```

Now if you need any HTTP request in your existing class, just extend your class with `ShahariaAzam\HTTPClientSupport\HTTPSupport`.

See following example.

```php
<?php

namespace ShahariaAzam\HTTPClientSupport;

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

You can see full list of contributors from [here](https://github.com/shahariaazam/http-client-support/graphs/contributors). 
You are also welcome to contribute to this repository.

### Issue

Submit your issue [here](https://github.com/shahariaazam/http-client-support/issues/new)
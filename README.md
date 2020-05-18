# Flexi HTTP Utility

A flexible, extendible, customizable PSR-18 compatible HTTP client builder for PHP. 
You can add it in your library and give user flexibility to use custom PSR-18 compatible HTTP client with it.

# Usage

Just add this library to your `composer.json` file. 

```
composer require shahariaazam/flexi-http
```

Now if you need any HTTP request in your existing class, just extend your class with `ShahariaAzam\FlexiHTTP\HTTPClientBuilder`.

See following example.

```php
<?php

namespace ShahariaAzam\HTTPClientBuilder;

class YourClass extends HTTPClientBuilder
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
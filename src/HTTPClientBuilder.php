<?php


namespace ShahariaAzam\HTTPClientBuilder;

use Nyholm\Psr7\Request;
use Psr\Http\Client\ClientExceptionInterface;
use Psr\Http\Client\ClientInterface;
use Psr\Http\Message\ResponseInterface;
use ShahariaAzam\HTTPClientBuilder\Exception\FlexiHTTPException;
use ShahariaAzam\HTTPClientBuilder\Traits\ClientTrait;
use ShahariaAzam\HTTPClientBuilder\Traits\HeadersTrait;

abstract class HTTPClientBuilder
{
    use HeadersTrait, ClientTrait;

    /**
     * @param $method
     * @param $uri
     * @param array $headers
     * @param null $body
     * @param string $version
     * @return ResponseInterface
     * @throws ClientExceptionInterface
     * @throws FlexiHTTPException
     */
    public function httpRequest($method, $uri, $headers = [], $body = null, $version = '1.1')
    {
        if (empty($this->httpClient) || !$this->httpClient instanceof ClientInterface) {
            throw new FlexiHTTPException(
                "No PSR-18 compatible HTTP client found. Please attach a PSR-18 compatible HTTP client"
            );
        }

        return $this->getHttpClient()->sendRequest(new Request(
            $method,
            $uri,
            $headers = [],
            $body = null,
            $version = '1.1'
        ));
    }
}

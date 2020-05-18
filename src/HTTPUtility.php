<?php


namespace ShahariaAzam\FlexiHTTP;


use Nyholm\Psr7\Request;
use Psr\Http\Client\ClientExceptionInterface;
use Psr\Http\Message\ResponseInterface;
use ShahariaAzam\FlexiHTTP\Traits\HTTPClientTrait;

abstract class HTTPUtility
{
    use HTTPClientTrait;

    /**
     * @param $method
     * @param $uri
     * @param array $headers
     * @param null $body
     * @param string $version
     * @return ResponseInterface
     * @throws ClientExceptionInterface
     */
    public function request($method, $uri, array $headers = [], $body = null, $version = '1.1')
    {
        return $this->getClient()->sendRequest(new Request($method, $uri, $headers = [], $body, $version));
    }
}
<?php
/**
 * FlexiHTTPClientTest class
 *
 * @package  ShahaiaAzam\FlexiHTTP\Tests
 */


namespace ShahaiaAzam\HTTPClientSupport\Tests;


use PHPUnit\Framework\TestCase;
use Psr\Http\Client\ClientInterface;
use Psr\Http\Message\ResponseInterface;
use ShahariaAzam\HTTPClientSupport\Exception\FlexiHTTPException;
use ShahariaAzam\HTTPClientSupport\HTTPClient;

class FlexiHTTPClientTest extends TestCase
{
    public function testClient()
    {
        $mockResponse = $this->getMockBuilder(ResponseInterface::class)->getMock();
        $mockResponse->method('getStatusCode')->willReturn(200);

        $mockClient = $this->getMockBuilder(ClientInterface::class)->getMock();
        $mockClient->method('sendRequest')->willReturn($mockResponse);

        $client = new HTTPClient();
        $client->setHttpClient($mockClient);
        $response = $client->httpRequest('GET', 'http://example.com');
        $this->assertEquals(200, $response->getStatusCode());
    }

    public function testClientWithoutHttpClient()
    {
        $this->expectException(FlexiHTTPException::class);
        $client = new HTTPClient();
        $response = $client->httpRequest('GET', 'http://example.com');
        $this->assertEquals(200, $response->getStatusCode());
    }

    public function testClientWithAddedHeader()
    {
        $mockResponse = $this->getMockBuilder(ResponseInterface::class)->getMock();
        $mockResponse->method('getStatusCode')->willReturn(200);
        $mockResponse->method('getHeaders')->willReturn(['X-Header' => 'DEMO']);

        $mockClient = $this->getMockBuilder(ClientInterface::class)->getMock();
        $mockClient->method('sendRequest')->willReturn($mockResponse);

        $client = new HTTPClient();
        $client->setHttpHeaders(['test' => 1]);
        $this->assertTrue(is_array($client->getHttpHeaders()));
    }
}
<?php


namespace ShahariaAzam\HTTPClientBuilder\Traits;

use Psr\Http\Client\ClientInterface;

trait ClientTrait
{
    /**
     * @var ClientInterface
     */
    private $httpClient;

    /**
     * Get back the PSR-18 compatible HTTP Client
     *
     * @return ClientInterface
     */
    public function getHttpClient()
    {
        return $this->httpClient;
    }

    /**
     * Set any PSR-18 compatible HTTP Client
     *
     * @param ClientInterface $httpClient
     * @return $this
     */
    public function setHttpClient(ClientInterface $httpClient)
    {
        $this->httpClient = $httpClient;
        return $this;
    }
}

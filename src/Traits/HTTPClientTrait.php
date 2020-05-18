<?php


namespace ShahariaAzam\FlexiHTTP\Traits;


use Psr\Http\Client\ClientInterface;

trait HTTPClientTrait
{
    /**
     * @var ClientInterface
     */
    private $client;

    /**
     * Get back the PSR-18 compatible HTTP Client
     *
     * @return ClientInterface
     */
    public function getClient(): ClientInterface
    {
        return $this->client;
    }

    /**
     * Set any PSR-18 compatible HTTP Client
     *
     * @param ClientInterface $client
     * @return HTTPClientTrait
     */
    public function setClient(ClientInterface $client): HTTPClientTrait
    {
        $this->client = $client;
        return $this;
    }
}
<?php


namespace ShahariaAzam\HTTPClientBuilder\Traits;

trait HeadersTrait
{
    /**
     * @var array
     */
    private $httpHeaders = [];

    /**
     * @return array
     */
    public function getHttpHeaders(): array
    {
        return $this->httpHeaders;
    }

    /**
     * @param array $httpHeaders
     * @return $this
     */
    public function setHttpHeaders(array $httpHeaders)
    {
        $this->httpHeaders = $httpHeaders;
        return $this;
    }
}

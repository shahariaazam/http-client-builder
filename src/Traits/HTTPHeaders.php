<?php


namespace ShahariaAzam\FlexiHTTP\Traits;


trait HTTPHeaders
{
    /**
     * @var array
     */
    private $headers = [];

    /**
     * @return array
     */
    public function getHeaders(): array
    {
        return $this->headers;
    }

    /**
     * @param array $headers
     * @return HTTPHeaders
     */
    public function setHeaders(array $headers): HTTPHeaders
    {
        $this->headers = $headers;
        return $this;
    }
}
<?php
/**
 * The MIT License (MIT)
 *
 * Copyright (c) 2020 Shaharia Azam <mail@shaharia.com>
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in
 * all copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
 * THE SOFTWARE.
 */

namespace ShahariaAzam\HTTPClientSupport;

use Nyholm\Psr7\Request;
use Psr\Http\Client\ClientExceptionInterface;
use Psr\Http\Client\ClientInterface;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\StreamInterface;
use Psr\Http\Message\UriInterface;
use ShahariaAzam\HTTPClientSupport\Exception\FlexiHTTPException;
use ShahariaAzam\HTTPClientSupport\Traits\ClientTrait;
use ShahariaAzam\HTTPClientSupport\Traits\HeadersTrait;

abstract class HTTPSupport
{
    use HeadersTrait, ClientTrait;

    /**
     * Make HTTP request
     *
     * @param string $method
     * @param string|UriInterface $uri
     * @param array $headers
     * @param string|null|resource|StreamInterface $body
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
            $headers,
            $body,
            $version
        ));
    }
}

<?php

declare(strict_types=1);

namespace FactorioItemBrowser\ExportQueue\Client\Endpoint\Node;

use FactorioItemBrowser\ExportQueue\Client\Endpoint\EndpointInterface;
use FactorioItemBrowser\ExportQueue\Client\Request\Node\PingRequest;
use FactorioItemBrowser\ExportQueue\Client\Request\RequestInterface;
use FactorioItemBrowser\ExportQueue\Client\Response\EmptyResponse;

/**
 * The endpoint of the ping request.
 *
 * @author BluePsyduck <bluepsyduck@gmx.com>
 * @license http://opensource.org/licenses/GPL-3.0 GPL v3
 */
class PingEndpoint implements EndpointInterface
{
    /**
     * Returns the request class supported by the endpoint.
     * @return string
     */
    public function getSupportedRequestClass(): string
    {
        return PingRequest::class;
    }

    /**
     * Returns the method to use for the request.
     * @return string
     */
    public function getRequestMethod(): string
    {
        return 'POST';
    }

    /**
     * Returns the request path of the endpoint.
     * @param RequestInterface $request
     * @return string
     */
    public function getRequestPath(RequestInterface $request): string
    {
        return '/node/ping';
    }

    /**
     * Creates the response of the endpoint.
     * @return string
     */
    public function getResponseClass(): string
    {
        return EmptyResponse::class;
    }
}

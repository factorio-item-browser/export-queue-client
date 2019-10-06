<?php

declare(strict_types=1);

namespace FactorioItemBrowser\ExportQueue\Client\Endpoint;

use FactorioItemBrowser\ExportQueue\Client\Request\RequestInterface;

/**
 * The interface of the endpoint classes.
 *
 * @author BluePsyduck <bluepsyduck@gmx.com>
 * @license http://opensource.org/licenses/GPL-3.0 GPL v3
 */
interface EndpointInterface
{
    /**
     * Returns the request class supported by the endpoint.
     * @return string
     */
    public function getSupportedRequestClass(): string;

    /**
     * Returns the method to use for the request.
     * @return string
     */
    public function getRequestMethod(): string;

    /**
     * Returns the request path of the endpoint.
     * @param RequestInterface $request
     * @return string
     */
    public function getRequestPath(RequestInterface $request): string;

    /**
     * Creates the response of the endpoint.
     * @return string
     */
    public function getResponseClass(): string;
}

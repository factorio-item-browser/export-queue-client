<?php

declare(strict_types=1);

namespace FactorioItemBrowser\ExportQueue\Client\Endpoint\Job;

use FactorioItemBrowser\ExportQueue\Client\Endpoint\EndpointInterface;
use FactorioItemBrowser\ExportQueue\Client\Request\Job\UpdateRequest;
use FactorioItemBrowser\ExportQueue\Client\Request\RequestInterface;
use FactorioItemBrowser\ExportQueue\Client\Response\Job\DetailsResponse;

/**
 * The endpoint for the update request.
 *
 * @author BluePsyduck <bluepsyduck@gmx.com>
 * @license http://opensource.org/licenses/GPL-3.0 GPL v3
 */
class UpdateEndpoint implements EndpointInterface
{
    /**
     * Returns the request class supported by the endpoint.
     * @return string
     */
    public function getSupportedRequestClass(): string
    {
        return UpdateRequest::class;
    }

    /**
     * Returns the method to use for the request.
     * @return string
     */
    public function getRequestMethod(): string
    {
        return 'PATCH';
    }

    /**
     * Returns the request path of the endpoint.
     * @param RequestInterface $request
     * @return string
     */
    public function getRequestPath(RequestInterface $request): string
    {
        /* @var UpdateRequest $request */
        return sprintf('/job/%s', $request->getJobId());
    }

    /**
     * Creates the response of the endpoint.
     * @return string
     */
    public function getResponseClass(): string
    {
        return DetailsResponse::class;
    }
}

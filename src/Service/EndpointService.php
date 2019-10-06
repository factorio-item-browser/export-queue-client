<?php

declare(strict_types=1);

namespace FactorioItemBrowser\ExportQueue\Client\Service;

use FactorioItemBrowser\ExportQueue\Client\Endpoint\EndpointInterface;
use FactorioItemBrowser\ExportQueue\Client\Exception\UnsupportedRequestException;
use FactorioItemBrowser\ExportQueue\Client\Request\RequestInterface;

/**
 * The service holding the available endpoints.
 *
 * @author BluePsyduck <bluepsyduck@gmx.com>
 * @license http://opensource.org/licenses/GPL-3.0 GPL v3
 */
class EndpointService
{
    /**
     * The available endpoints.
     * @var array|EndpointInterface[]
     */
    protected $endpointsByRequestClass;

    /**
     * Initializes the service.
     * @param array|EndpointInterface[] $exportQueueClientEndpoints
     */
    public function __construct(array $exportQueueClientEndpoints)
    {
        foreach ($exportQueueClientEndpoints as $endpoint) {
            $this->endpointsByRequestClass[$endpoint->getSupportedRequestClass()] = $endpoint;
        }
    }

    /**
     * Returns the endpoint for the request.
     * @param RequestInterface $request
     * @return EndpointInterface
     * @throws UnsupportedRequestException
     */
    public function getEndpointForRequest(RequestInterface $request): EndpointInterface
    {
        $requestClass = get_class($request);
        if (!isset($this->endpointsByRequestClass[$requestClass])) {
            throw new UnsupportedRequestException($requestClass);
        }

        return $this->endpointsByRequestClass[$requestClass];
    }
}

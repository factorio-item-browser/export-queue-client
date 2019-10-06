<?php

declare(strict_types=1);

namespace FactorioItemBrowser\ExportQueue\Client\Endpoint\Job;

use FactorioItemBrowser\ExportQueue\Client\Constant\ParameterName;
use FactorioItemBrowser\ExportQueue\Client\Endpoint\EndpointInterface;
use FactorioItemBrowser\ExportQueue\Client\Request\Job\ListRequest;
use FactorioItemBrowser\ExportQueue\Client\Request\RequestInterface;
use FactorioItemBrowser\ExportQueue\Client\Response\Job\ListResponse;

/**
 * The endpoint for the list request.
 *
 * @author BluePsyduck <bluepsyduck@gmx.com>
 * @license http://opensource.org/licenses/GPL-3.0 GPL v3
 */
class ListEndpoint implements EndpointInterface
{
    /**
     * Returns the request class supported by the endpoint.
     * @return string
     */
    public function getSupportedRequestClass(): string
    {
        return ListRequest::class;
    }

    /**
     * Returns the method to use for the request.
     * @return string
     */
    public function getRequestMethod(): string
    {
        return 'GET';
    }

    /**
     * Returns the request path of the endpoint.
     * @param RequestInterface $request
     * @return string
     */
    public function getRequestPath(RequestInterface $request): string
    {
        /* @var ListRequest $request */
        $parameters = array_filter([
            ParameterName::COMBINATION_HASH => $request->getCombinationHash(),
            ParameterName::STATUS => $request->getStatus(),
            ParameterName::LIMIT => $request->getLimit(),
        ]);

        return rtrim(sprintf('/job/list?%s', http_build_query($parameters)), '?');
    }

    /**
     * Creates the response of the endpoint.
     * @return string
     */
    public function getResponseClass(): string
    {
        return ListResponse::class;
    }
}

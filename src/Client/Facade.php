<?php

declare(strict_types=1);

namespace FactorioItemBrowser\ExportQueue\Client\Client;

use FactorioItemBrowser\ExportQueue\Client\Exception\ClientException;
use FactorioItemBrowser\ExportQueue\Client\Request\Job\CreateRequest;
use FactorioItemBrowser\ExportQueue\Client\Request\Job\DetailsRequest;
use FactorioItemBrowser\ExportQueue\Client\Request\Job\ListRequest;
use FactorioItemBrowser\ExportQueue\Client\Request\Job\UpdateRequest;
use FactorioItemBrowser\ExportQueue\Client\Response\Job\DetailsResponse;
use FactorioItemBrowser\ExportQueue\Client\Response\Job\ListResponse;

/**
 * The facade of the export queue api.
 *
 * @author BluePsyduck <bluepsyduck@gmx.com>
 * @license http://opensource.org/licenses/GPL-3.0 GPL v3
 */
class Facade
{
    /**
     * The client.
     * @var Client
     */
    protected $client;

    /**
     * Initializes the facade.
     * @param Client $client
     */
    public function __construct(Client $client)
    {
        $this->client = $client;
    }

    /**
     * Fetches the details of an export job from the queue.
     * @param DetailsRequest $request
     * @return DetailsResponse
     * @throws ClientException
     */
    public function getJobDetails(DetailsRequest $request): DetailsResponse
    {
        return $this->client->sendRequest($request)->wait();
    }

    /**
     * Fetches a list of export jobs from the queue.
     * @param ListRequest $request
     * @return ListResponse
     * @throws ClientException
     */
    public function getJobList(ListRequest $request): ListResponse
    {
        return $this->client->sendRequest($request)->wait();
    }

    /**
     * Creates a new export job in the queue.
     * @param CreateRequest $request
     * @return DetailsResponse
     * @throws ClientException
     */
    public function createJob(CreateRequest $request): DetailsResponse
    {
        return $this->client->sendRequest($request)->wait();
    }

    /**
     * Updates an export job in the queue.
     * @param UpdateRequest $request
     * @return DetailsResponse
     * @throws ClientException
     */
    public function updateJob(UpdateRequest $request): DetailsResponse
    {
        return $this->client->sendRequest($request)->wait();
    }
}

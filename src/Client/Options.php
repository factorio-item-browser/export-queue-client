<?php

declare(strict_types=1);

namespace FactorioItemBrowser\ExportQueue\Client\Client;

/**
 * The options of the client.
 *
 * @author BluePsyduck <bluepsyduck@gmx.com>
 * @license http://opensource.org/licenses/GPL-3.0 GPL v3
 */
class Options
{
    /**
     * The URL to the API server.
     * @var string
     */
    protected $apiUrl = '';

    /**
     * The API key required for authentication.
     * @var string
     */
    protected $apiKey = '';

    /**
     * The timeout to use for the requests, in seconds.
     * @var int
     */
    protected $timeout = 0;

    /**
     * Sets the URL to the API server.
     * @param string $apiUrl
     * @return $this
     */
    public function setApiUrl(string $apiUrl): self
    {
        $this->apiUrl = $apiUrl;
        return $this;
    }

    /**
     * Returns the URL to the API server.
     * @return string
     */
    public function getApiUrl(): string
    {
        return $this->apiUrl;
    }

    /**
     * Sets the API key required for authentication.
     * @param string $apiKey
     * @return $this
     */
    public function setApiKey(string $apiKey): self
    {
        $this->apiKey = $apiKey;
        return $this;
    }

    /**
     * Returns the API key required for authentication.
     * @return string
     */
    public function getApiKey(): string
    {
        return $this->apiKey;
    }

    /**
     * Sets the timeout to use for the requests, in seconds.
     * @param int $timeout
     * @return $this
     */
    public function setTimeout(int $timeout): self
    {
        $this->timeout = $timeout;
        return $this;
    }

    /**
     * Returns the timeout to use for the requests, in seconds.
     * @return int
     */
    public function getTimeout(): int
    {
        return $this->timeout;
    }
}

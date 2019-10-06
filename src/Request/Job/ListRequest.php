<?php

declare(strict_types=1);

namespace FactorioItemBrowser\ExportQueue\Client\Request\Job;

use FactorioItemBrowser\ExportQueue\Client\Request\RequestInterface;

/**
 * The class for requesting a list of jobs using some filters.
 *
 * @author BluePsyduck <bluepsyduck@gmx.com>
 * @license http://opensource.org/licenses/GPL-3.0 GPL v3
 */
class ListRequest implements RequestInterface
{
    /**
     * The combination hash of the jobs to match.
     * @var string
     */
    protected $combinationHash = '';

    /**
     * The status of the jobs to match.
     * @var string
     */
    protected $status = '';

    /**
     * The number of jobs to return.
     * @var int
     */
    protected $limit = 0;

    /**
     * Sets the combination hash of the jobs to match.
     * @param string $combinationHash
     * @return $this
     */
    public function setCombinationHash(string $combinationHash): self
    {
        $this->combinationHash = $combinationHash;
        return $this;
    }

    /**
     * Returns the combination hash of the jobs to match.
     * @return string
     */
    public function getCombinationHash(): string
    {
        return $this->combinationHash;
    }

    /**
     * Sets the status of the jobs to match.
     * @param string $status
     * @return $this
     */
    public function setStatus(string $status): self
    {
        $this->status = $status;
        return $this;
    }

    /**
     * Returns the status of the jobs to match.
     * @return string
     */
    public function getStatus(): string
    {
        return $this->status;
    }

    /**
     * Sets the number of jobs to return.
     * @param int $limit
     * @return $this
     */
    public function setLimit(int $limit): self
    {
        $this->limit = $limit;
        return $this;
    }

    /**
     * Returns the number of jobs to return.
     * @return int
     */
    public function getLimit(): int
    {
        return $this->limit;
    }
}

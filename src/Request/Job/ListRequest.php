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
     * The combination id of the jobs to match.
     * @var string
     */
    protected $combinationId = '';

    /**
     * The status of the jobs to match.
     * @var string
     */
    protected $status = '';

    /**
     * The order to use for the results.
     * @var string
     */
    protected $order = '';

    /**
     * The number of jobs to return.
     * @var int
     */
    protected $limit = 0;

    /**
     * Sets the combination id of the jobs to match.
     * @param string $combinationId
     * @return $this
     */
    public function setCombinationId(string $combinationId): self
    {
        $this->combinationId = $combinationId;
        return $this;
    }

    /**
     * Returns the combination id of the jobs to match.
     * @return string
     */
    public function getCombinationId(): string
    {
        return $this->combinationId;
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
     * Sets the order to use for the results.
     * @param string $order
     * @return $this
     */
    public function setOrder(string $order): self
    {
        $this->order = $order;
        return $this;
    }

    /**
     * Returns the order to use for the results.
     * @return string
     */
    public function getOrder(): string
    {
        return $this->order;
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

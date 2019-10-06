<?php

declare(strict_types=1);

namespace FactorioItemBrowser\ExportQueue\Client\Response\Job;

use FactorioItemBrowser\ExportQueue\Client\Entity\Job;
use FactorioItemBrowser\ExportQueue\Client\Response\ResponseInterface;

/**
 * The response holding a list of export jobs.
 *
 * @author BluePsyduck <bluepsyduck@gmx.com>
 * @license http://opensource.org/licenses/GPL-3.0 GPL v3
 */
class ListResponse implements ResponseInterface
{
    /**
     * The jobs of the list.
     * @var array|Job[]
     */
    protected $jobs = [];

    /**
     * Sets the jobs of the list.
     * @param array|Job[] $jobs
     * @return $this
     */
    public function setJobs(array $jobs): self
    {
        $this->jobs = $jobs;
        return $this;
    }

    /**
     * Returns the jobs of the list.
     * @return array|Job[]
     */
    public function getJobs(): array
    {
        return $this->jobs;
    }
}

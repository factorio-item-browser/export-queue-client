<?php

declare(strict_types=1);

namespace FactorioItemBrowser\ExportQueue\Client\Request\Job;

use FactorioItemBrowser\ExportQueue\Client\Request\RequestInterface;

/**
 * The class for requesting the details of an export job.
 *
 * @author BluePsyduck <bluepsyduck@gmx.com>
 * @license http://opensource.org/licenses/GPL-3.0 GPL v3
 */
class DetailsRequest implements RequestInterface
{
    /**
     * The ID of the export job.
     * @var int
     */
    protected $jobId = 0;

    /**
     * Sets the ID of the export job.
     * @param int $jobId
     * @return $this
     */
    public function setJobId(int $jobId): self
    {
        $this->jobId = $jobId;
        return $this;
    }

    /**
     * Returns the ID of the export job.
     * @return int
     */
    public function getJobId(): int
    {
        return $this->jobId;
    }
}

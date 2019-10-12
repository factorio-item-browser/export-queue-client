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
     * The id of the export job.
     * @var string
     */
    protected $jobId = '';

    /**
     * Sets the id of the export job.
     * @param string $jobId
     * @return $this
     */
    public function setJobId(string $jobId): self
    {
        $this->jobId = $jobId;
        return $this;
    }

    /**
     * Returns the id of the export job.
     * @return string
     */
    public function getJobId(): string
    {
        return $this->jobId;
    }
}

<?php

declare(strict_types=1);

namespace FactorioItemBrowser\ExportQueue\Client\Request\Job;

use FactorioItemBrowser\ExportQueue\Client\Request\RequestInterface;

/**
 * The class for requesting an update of an export job.
 *
 * @author BluePsyduck <bluepsyduck@gmx.com>
 * @license http://opensource.org/licenses/GPL-3.0 GPL v3
 */
class UpdateRequest implements RequestInterface
{
    /**
     * The ID of the export job.
     * @var int
     */
    protected $jobId = 0;

    /**
     * The new status of the export job.
     * @var string
     */
    protected $status = '';

    /**
     * The error message in case the export job failed.
     * @var string
     */
    protected $errorMessage = '';

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

    /**
     * Sets the new status of the export job.
     * @param string $status
     * @return $this
     */
    public function setStatus(string $status): self
    {
        $this->status = $status;
        return $this;
    }

    /**
     * Returns the new status of the export job.
     * @return string
     */
    public function getStatus(): string
    {
        return $this->status;
    }

    /**
     * Sets the error message in case the export job failed.
     * @param string $errorMessage
     * @return $this
     */
    public function setErrorMessage(string $errorMessage): self
    {
        $this->errorMessage = $errorMessage;
        return $this;
    }

    /**
     * Returns the error message in case the export job failed.
     * @return string
     */
    public function getErrorMessage(): string
    {
        return $this->errorMessage;
    }
}

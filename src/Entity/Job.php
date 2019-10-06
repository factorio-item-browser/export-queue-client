<?php

declare(strict_types=1);

namespace FactorioItemBrowser\ExportQueue\Client\Entity;

use DateTimeInterface;

/**
 * The class representing the details of a job.
 *
 * @author BluePsyduck <bluepsyduck@gmx.com>
 * @license http://opensource.org/licenses/GPL-3.0 GPL v3
 */
class Job
{
    /**
     * The ID of the export job.
     * @var int
     */
    protected $id = 0;

    /**
     * The hash of the combination to be exported.
     * @var string
     */
    protected $combinationHash = '';

    /**
     * The mod names to be exported as combination.
     * @var array|string[]
     */
    protected $modNames = [];

    /**
     * The status of the export job.
     * @var string
     */
    protected $status = '';

    /**
     * The error message in case the export job failed.
     * @var string
     */
    protected $errorMessage = '';

    /**
     * The time when the export job has was created.
     * @var DateTimeInterface|null
     */
    protected $creationTime = null;

    /**
     * The time when the export job was processed.
     * @var DateTimeInterface|null
     */
    protected $exportTime = null;

    /**
     * The time when the export job was imported into the database.
     * @var DateTimeInterface|null
     */
    protected $importTime = null;

    /**
     * Sets the ID of the export job.
     * @param int $id
     * @return $this
     */
    public function setId(int $id): self
    {
        $this->id = $id;
        return $this;
    }

    /**
     * Returns the ID of the export job.
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * Sets the hash of the combination to be exported.
     * @param string $combinationHash
     * @return $this
     */
    public function setCombinationHash(string $combinationHash): self
    {
        $this->combinationHash = $combinationHash;
        return $this;
    }

    /**
     * Returns the hash of the combination to be exported.
     * @return string
     */
    public function getCombinationHash(): string
    {
        return $this->combinationHash;
    }

    /**
     * Sets the mod names to be exported as combination.
     * @param array|string[] $modNames
     * @return $this
     */
    public function setModNames($modNames)
    {
        $this->modNames = $modNames;
        return $this;
    }

    /**
     * Returns the mod names to be exported as combination.
     * @return array|string[]
     */
    public function getModNames()
    {
        return $this->modNames;
    }

    /**
     * Sets the status of the export job.
     * @param string $status
     * @return $this
     */
    public function setStatus(string $status): self
    {
        $this->status = $status;
        return $this;
    }

    /**
     * Returns the status of the export job.
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

    /**
     * Sets the time when the export job has was created.
     * @param DateTimeInterface|null $creationTime
     * @return $this
     */
    public function setCreationTime(?DateTimeInterface $creationTime): self
    {
        $this->creationTime = $creationTime;
        return $this;
    }

    /**
     * Returns the time when the export job has was created.
     * @return DateTimeInterface|null
     */
    public function getCreationTime(): ?DateTimeInterface
    {
        return $this->creationTime;
    }

    /**
     * Sets the time when the export job was processed.
     * @param DateTimeInterface|null $exportTime
     * @return $this
     */
    public function setExportTime(?DateTimeInterface $exportTime): self
    {
        $this->exportTime = $exportTime;
        return $this;
    }

    /**
     * Returns the time when the export job was processed.
     * @return DateTimeInterface|null
     */
    public function getExportTime(): ?DateTimeInterface
    {
        return $this->exportTime;
    }

    /**
     * Sets the time when the export job was imported into the database.
     * @param DateTimeInterface|null $importTime
     * @return $this
     */
    public function setImportTime(?DateTimeInterface $importTime): self
    {
        $this->importTime = $importTime;
        return $this;
    }

    /**
     * Returns the time when the export job was imported into the database.
     * @return DateTimeInterface|null
     */
    public function getImportTime(): ?DateTimeInterface
    {
        return $this->importTime;
    }
}

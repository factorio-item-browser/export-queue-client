<?php

declare(strict_types=1);

namespace FactorioItemBrowser\ExportQueue\Client\Request\Job;

use FactorioItemBrowser\ExportQueue\Client\Request\RequestInterface;

/**
 * The class for creating a new export job.
 *
 * @author BluePsyduck <bluepsyduck@gmx.com>
 * @license http://opensource.org/licenses/GPL-3.0 GPL v3
 */
class CreateRequest implements RequestInterface
{
    /**
     * The combination id for the export job.
     * @var string
     */
    protected $combinationId = '';

    /**
     * The mod names to export as combination.
     * @var array|string[]
     */
    protected $modNames = [];

    /**
     * Sets the combination id for the export job.
     * @param string $combinationId
     * @return $this
     */
    public function setCombinationId(string $combinationId): self
    {
        $this->combinationId = $combinationId;
        return $this;
    }

    /**
     * Returns the combination id for the export job.
     * @return string
     */
    public function getCombinationId(): string
    {
        return $this->combinationId;
    }

    /**
     * Sets the mod names to export as combination.
     * @param array|string[] $modNames
     * @return $this
     */
    public function setModNames($modNames)
    {
        $this->modNames = $modNames;
        return $this;
    }

    /**
     * Returns the mod names to export as combination.
     * @return array|string[]
     */
    public function getModNames()
    {
        return $this->modNames;
    }
}

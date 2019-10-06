<?php

declare(strict_types=1);

namespace FactorioItemBrowserTest\ExportQueue\Client\Entity;

use DateTime;
use FactorioItemBrowser\ExportQueue\Client\Entity\Job;
use PHPUnit\Framework\TestCase;

/**
 * The PHPUnit test of the Job class.
 *
 * @author BluePsyduck <bluepsyduck@gmx.com>
 * @license http://opensource.org/licenses/GPL-3.0 GPL v3
 * @coversDefaultClass \FactorioItemBrowser\ExportQueue\Client\Entity\Job
 */
class JobTest extends TestCase
{
    /**
     * Tests the constructing.
     * @coversNothing
     */
    public function testConstruct(): void
    {
        $entity = new Job();

        $this->assertSame(0, $entity->getId());
        $this->assertSame('', $entity->getCombinationHash());
        $this->assertSame([], $entity->getModNames());
        $this->assertSame('', $entity->getStatus());
        $this->assertSame('', $entity->getErrorMessage());
        $this->assertNull($entity->getCreationTime());
        $this->assertNull($entity->getExportTime());
        $this->assertNull($entity->getImportTime());
    }

    /**
     * Tests the setting and getting the id.
     * @covers ::getId
     * @covers ::setId
     */
    public function testSetAndGetId(): void
    {
        $id = 42;
        $entity = new Job();

        $this->assertSame($entity, $entity->setId($id));
        $this->assertSame($id, $entity->getId());
    }

    /**
     * Tests the setting and getting the combination hash.
     * @covers ::getCombinationHash
     * @covers ::setCombinationHash
     */
    public function testSetAndGetCombinationHash(): void
    {
        $combinationHash = 'abc';
        $entity = new Job();

        $this->assertSame($entity, $entity->setCombinationHash($combinationHash));
        $this->assertSame($combinationHash, $entity->getCombinationHash());
    }

    /**
     * Tests the setting and getting the mod names.
     * @covers ::getModNames
     * @covers ::setModNames
     */
    public function testSetAndGetModNames(): void
    {
        $modNames = ['abc', 'def'];
        $entity = new Job();

        $this->assertSame($entity, $entity->setModNames($modNames));
        $this->assertSame($modNames, $entity->getModNames());
    }

    /**
     * Tests the setting and getting the status.
     * @covers ::getStatus
     * @covers ::setStatus
     */
    public function testSetAndGetStatus(): void
    {
        $status = 'abc';
        $entity = new Job();

        $this->assertSame($entity, $entity->setStatus($status));
        $this->assertSame($status, $entity->getStatus());
    }

    /**
     * Tests the setting and getting the error message.
     * @covers ::getErrorMessage
     * @covers ::setErrorMessage
     */
    public function testSetAndGetErrorMessage(): void
    {
        $errorMessage = 'abc';
        $entity = new Job();

        $this->assertSame($entity, $entity->setErrorMessage($errorMessage));
        $this->assertSame($errorMessage, $entity->getErrorMessage());
    }

    /**
     * Tests the setting and getting the creation time.
     * @covers ::getCreationTime
     * @covers ::setCreationTime
     */
    public function testSetAndGetCreationTime(): void
    {
        $creationTime = new DateTime('2038-01-19 03:14:00');
        $entity = new Job();

        $this->assertSame($entity, $entity->setCreationTime($creationTime));
        $this->assertSame($creationTime, $entity->getCreationTime());
    }

    /**
     * Tests the setting and getting the export time.
     * @covers ::getExportTime
     * @covers ::setExportTime
     */
    public function testSetAndGetExportTime(): void
    {
        $exportTime = new DateTime('2038-01-19 03:14:00');
        $entity = new Job();

        $this->assertSame($entity, $entity->setExportTime($exportTime));
        $this->assertSame($exportTime, $entity->getExportTime());
    }

    /**
     * Tests the setting and getting the import time.
     * @covers ::getImportTime
     * @covers ::setImportTime
     */
    public function testSetAndGetImportTime(): void
    {
        $importTime = new DateTime('2038-01-19 03:14:00');
        $entity = new Job();

        $this->assertSame($entity, $entity->setImportTime($importTime));
        $this->assertSame($importTime, $entity->getImportTime());
    }
}
<?php

declare(strict_types=1);

namespace FactorioItemBrowserTest\ExportQueue\Client\Request\Job;

use FactorioItemBrowser\ExportQueue\Client\Request\Job\CreateRequest;
use PHPUnit\Framework\TestCase;

/**
 * The PHPUnit test of the CreateRequest class.
 *
 * @author BluePsyduck <bluepsyduck@gmx.com>
 * @license http://opensource.org/licenses/GPL-3.0 GPL v3
 * @coversDefaultClass \FactorioItemBrowser\ExportQueue\Client\Request\Job\CreateRequest
 */
class CreateRequestTest extends TestCase
{
    /**
     * Tests the constructing.
     * @coversNothing
     */
    public function testConstruct(): void
    {
        $request = new CreateRequest();

        $this->assertSame('', $request->getCombinationHash());
        $this->assertSame([], $request->getModNames());
    }

    /**
     * Tests the setting and getting the combination hash.
     * @covers ::getCombinationHash
     * @covers ::setCombinationHash
     */
    public function testSetAndGetCombinationHash(): void
    {
        $combinationHash = 'abc';
        $request = new CreateRequest();

        $this->assertSame($request, $request->setCombinationHash($combinationHash));
        $this->assertSame($combinationHash, $request->getCombinationHash());
    }

    /**
     * Tests the setting and getting the mod names.
     * @covers ::getModNames
     * @covers ::setModNames
     */
    public function testSetAndGetModNames(): void
    {
        $modNames = ['abc', 'def'];
        $request = new CreateRequest();

        $this->assertSame($request, $request->setModNames($modNames));
        $this->assertSame($modNames, $request->getModNames());
    }
}
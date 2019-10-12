<?php

declare(strict_types=1);

namespace FactorioItemBrowserTest\ExportQueue\Client\Request\Job;

use FactorioItemBrowser\ExportQueue\Client\Request\Job\ListRequest;
use PHPUnit\Framework\TestCase;

/**
 * The PHPUnit test of the ListRequest class.
 *
 * @author BluePsyduck <bluepsyduck@gmx.com>
 * @license http://opensource.org/licenses/GPL-3.0 GPL v3
 * @coversDefaultClass \FactorioItemBrowser\ExportQueue\Client\Request\Job\ListRequest
 */
class ListRequestTest extends TestCase
{
    /**
     * Tests the constructing.
     * @coversNothing
     */
    public function testConstruct(): void
    {
        $request = new ListRequest();

        $this->assertSame('', $request->getCombinationId());
        $this->assertSame('', $request->getStatus());
        $this->assertSame(0, $request->getLimit());
    }

    /**
     * Tests the setting and getting the combination id.
     * @covers ::getCombinationId
     * @covers ::setCombinationId
     */
    public function testSetAndGetCombinationId(): void
    {
        $combinationId = 'abc';
        $request = new ListRequest();

        $this->assertSame($request, $request->setCombinationId($combinationId));
        $this->assertSame($combinationId, $request->getCombinationId());
    }

    /**
     * Tests the setting and getting the status.
     * @covers ::getStatus
     * @covers ::setStatus
     */
    public function testSetAndGetStatus(): void
    {
        $status = 'abc';
        $request = new ListRequest();

        $this->assertSame($request, $request->setStatus($status));
        $this->assertSame($status, $request->getStatus());
    }

    /**
     * Tests the setting and getting the limit.
     * @covers ::getLimit
     * @covers ::setLimit
     */
    public function testSetAndGetLimit(): void
    {
        $limit = 42;
        $request = new ListRequest();

        $this->assertSame($request, $request->setLimit($limit));
        $this->assertSame($limit, $request->getLimit());
    }
}

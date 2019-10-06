<?php

declare(strict_types=1);

namespace FactorioItemBrowserTest\ExportQueue\Client\Response\Job;

use FactorioItemBrowser\ExportQueue\Client\Entity\Job;
use FactorioItemBrowser\ExportQueue\Client\Response\Job\ListResponse;
use PHPUnit\Framework\TestCase;

/**
 * The PHPUnit test of the ListResponse class.
 *
 * @author BluePsyduck <bluepsyduck@gmx.com>
 * @license http://opensource.org/licenses/GPL-3.0 GPL v3
 * @coversDefaultClass \FactorioItemBrowser\ExportQueue\Client\Response\Job\ListResponse
 */
class ListResponseTest extends TestCase
{
    /**
     * Tests the constructing.
     * @coversNothing
     */
    public function testConstruct(): void
    {
        $response = new ListResponse();

        $this->assertSame([], $response->getJobs());
    }
    
    /**
     * Tests the setting and getting the jobs.
     * @covers ::getJobs
     * @covers ::setJobs
     */
    public function testSetAndGetJobs(): void
    {
        $jobs = [
            $this->createMock(Job::class),
            $this->createMock(Job::class),
        ];
        $response = new ListResponse();

        $this->assertSame($response, $response->setJobs($jobs));
        $this->assertSame($jobs, $response->getJobs());
    }
}

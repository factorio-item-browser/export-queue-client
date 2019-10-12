<?php

declare(strict_types=1);

namespace FactorioItemBrowserTest\ExportQueue\Client\Request\Job;

use FactorioItemBrowser\ExportQueue\Client\Request\Job\DetailsRequest;
use PHPUnit\Framework\TestCase;

/**
 * The PHPUnit test of the DetailsRequest class.
 *
 * @author BluePsyduck <bluepsyduck@gmx.com>
 * @license http://opensource.org/licenses/GPL-3.0 GPL v3
 * @coversDefaultClass \FactorioItemBrowser\ExportQueue\Client\Request\Job\DetailsRequest
 */
class DetailsRequestTest extends TestCase
{
    /**
     * Tests the constructing.
     * @coversNothing
     */
    public function testConstruct(): void
    {
        $request = new DetailsRequest();

        $this->assertSame('', $request->getJobId());
    }

    /**
     * Tests the setting and getting the job id.
     * @covers ::getJobId
     * @covers ::setJobId
     */
    public function testSetAndGetJobId(): void
    {
        $jobId = 'abc';
        $request = new DetailsRequest();

        $this->assertSame($request, $request->setJobId($jobId));
        $this->assertSame($jobId, $request->getJobId());
    }
}

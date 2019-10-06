<?php

declare(strict_types=1);

namespace FactorioItemBrowserTest\ExportQueue\Client\Request\Job;

use FactorioItemBrowser\ExportQueue\Client\Request\Job\UpdateRequest;
use PHPUnit\Framework\TestCase;

/**
 * The PHPUnit test of the UpdateRequest class.
 *
 * @author BluePsyduck <bluepsyduck@gmx.com>
 * @license http://opensource.org/licenses/GPL-3.0 GPL v3
 * @coversDefaultClass \FactorioItemBrowser\ExportQueue\Client\Request\Job\UpdateRequest
 */
class UpdateRequestTest extends TestCase
{
    /**
     * Tests the constructing.
     * @coversNothing
     */
    public function testConstruct(): void
    {
        $request = new UpdateRequest();

        $this->assertSame(0, $request->getJobId());
        $this->assertSame('', $request->getStatus());
        $this->assertSame('', $request->getErrorMessage());
    }

    /**
     * Tests the setting and getting the job id.
     * @covers ::getJobId
     * @covers ::setJobId
     */
    public function testSetAndGetJobId(): void
    {
        $jobId = 42;
        $request = new UpdateRequest();

        $this->assertSame($request, $request->setJobId($jobId));
        $this->assertSame($jobId, $request->getJobId());
    }

    /**
     * Tests the setting and getting the status.
     * @covers ::getStatus
     * @covers ::setStatus
     */
    public function testSetAndGetStatus(): void
    {
        $status = 'abc';
        $request = new UpdateRequest();

        $this->assertSame($request, $request->setStatus($status));
        $this->assertSame($status, $request->getStatus());
    }

    /**
     * Tests the setting and getting the error message.
     * @covers ::getErrorMessage
     * @covers ::setErrorMessage
     */
    public function testSetAndGetErrorMessage(): void
    {
        $errorMessage = 'abc';
        $request = new UpdateRequest();

        $this->assertSame($request, $request->setErrorMessage($errorMessage));
        $this->assertSame($errorMessage, $request->getErrorMessage());
    }
}

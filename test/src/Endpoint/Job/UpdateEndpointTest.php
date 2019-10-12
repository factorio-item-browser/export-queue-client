<?php

declare(strict_types=1);

namespace FactorioItemBrowserTest\ExportQueue\Client\Endpoint\Job;

use FactorioItemBrowser\ExportQueue\Client\Endpoint\Job\UpdateEndpoint;
use FactorioItemBrowser\ExportQueue\Client\Request\Job\UpdateRequest;
use FactorioItemBrowser\ExportQueue\Client\Response\Job\DetailsResponse;
use PHPUnit\Framework\MockObject\MockObject;
use PHPUnit\Framework\TestCase;

/**
 * The PHPUnit test of the UpdateEndpoint class.
 *
 * @author BluePsyduck <bluepsyduck@gmx.com>
 * @license http://opensource.org/licenses/GPL-3.0 GPL v3
 * @coversDefaultClass \FactorioItemBrowser\ExportQueue\Client\Endpoint\Job\UpdateEndpoint
 */
class UpdateEndpointTest extends TestCase
{
    /**
     * Tests the getSupportedRequestClass method.
     * @covers ::getSupportedRequestClass
     */
    public function testGetSupportedRequestClass(): void
    {
        $expectedResult = UpdateRequest::class;

        $endpoint = new UpdateEndpoint();
        $result = $endpoint->getSupportedRequestClass();

        $this->assertSame($expectedResult, $result);
    }

    /**
     * Tests the getRequestMethod method.
     * @covers ::getRequestMethod
     */
    public function testGetRequestMethod(): void
    {
        $expectedResult = 'PATCH';

        $endpoint = new UpdateEndpoint();
        $result = $endpoint->getRequestMethod();

        $this->assertSame($expectedResult, $result);
    }

    /**
     * Tests the getRequestPath method.
     * @covers ::getRequestPath
     */
    public function testGetRequestPath(): void
    {
        $expectedResult = '/job/abc';

        /* @var UpdateRequest&MockObject $request */
        $request = $this->createMock(UpdateRequest::class);
        $request->expects($this->once())
                ->method('getJobId')
                ->willReturn('abc');

        $endpoint = new UpdateEndpoint();
        $result = $endpoint->getRequestPath($request);

        $this->assertSame($expectedResult, $result);
    }

    /**
     * Tests the getResponseClass method.
     * @covers ::getResponseClass
     */
    public function testGetResponseClass(): void
    {
        $expectedResult = DetailsResponse::class;

        $endpoint = new UpdateEndpoint();
        $result = $endpoint->getResponseClass();

        $this->assertSame($expectedResult, $result);
    }
}

<?php

declare(strict_types=1);

namespace FactorioItemBrowserTest\ExportQueue\Client\Endpoint\Job;

use FactorioItemBrowser\ExportQueue\Client\Endpoint\Job\ListEndpoint;
use FactorioItemBrowser\ExportQueue\Client\Request\Job\ListRequest;
use FactorioItemBrowser\ExportQueue\Client\Response\Job\ListResponse;
use PHPUnit\Framework\MockObject\MockObject;
use PHPUnit\Framework\TestCase;

/**
 * The PHPUnit test of the ListEndpoint class.
 *
 * @author BluePsyduck <bluepsyduck@gmx.com>
 * @license http://opensource.org/licenses/GPL-3.0 GPL v3
 * @coversDefaultClass \FactorioItemBrowser\ExportQueue\Client\Endpoint\Job\ListEndpoint
 */
class ListEndpointTest extends TestCase
{
    /**
     * Tests the getSupportedRequestClass method.
     * @covers ::getSupportedRequestClass
     */
    public function testGetSupportedRequestClass(): void
    {
        $expectedResult = ListRequest::class;

        $endpoint = new ListEndpoint();
        $result = $endpoint->getSupportedRequestClass();

        $this->assertSame($expectedResult, $result);
    }

    /**
     * Tests the getRequestMethod method.
     * @covers ::getRequestMethod
     */
    public function testGetRequestMethod(): void
    {
        $expectedResult = 'GET';

        $endpoint = new ListEndpoint();
        $result = $endpoint->getRequestMethod();

        $this->assertSame($expectedResult, $result);
    }

    /**
     * Tests the getRequestPath method.
     * @covers ::getRequestPath
     */
    public function testGetRequestPath(): void
    {
        $expectedResult = '/job/list?combination-id=abc&status=def&limit=42';

        /* @var ListRequest&MockObject $request */
        $request = $this->createMock(ListRequest::class);
        $request->expects($this->once())
                ->method('getCombinationId')
                ->willReturn('abc');
        $request->expects($this->once())
                ->method('getStatus')
                ->willReturn('def');
        $request->expects($this->once())
                ->method('getLimit')
                ->willReturn(42);

        $endpoint = new ListEndpoint();
        $result = $endpoint->getRequestPath($request);

        $this->assertSame($expectedResult, $result);
    }

    /**
     * Tests the getRequestPath method.
     * @covers ::getRequestPath
     */
    public function testGetRequestPathWithoutParameters(): void
    {
        $expectedResult = '/job/list';

        /* @var ListRequest&MockObject $request */
        $request = $this->createMock(ListRequest::class);
        $request->expects($this->once())
                ->method('getCombinationId')
                ->willReturn('');
        $request->expects($this->once())
                ->method('getStatus')
                ->willReturn('');
        $request->expects($this->once())
                ->method('getLimit')
                ->willReturn(0);

        $endpoint = new ListEndpoint();
        $result = $endpoint->getRequestPath($request);

        $this->assertSame($expectedResult, $result);
    }

    /**
     * Tests the getResponseClass method.
     * @covers ::getResponseClass
     */
    public function testGetResponseClass(): void
    {
        $expectedResult = ListResponse::class;

        $endpoint = new ListEndpoint();
        $result = $endpoint->getResponseClass();

        $this->assertSame($expectedResult, $result);
    }
}

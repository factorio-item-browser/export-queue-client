<?php

declare(strict_types=1);

namespace FactorioItemBrowserTest\ExportQueue\Client\Endpoint\Node;

use FactorioItemBrowser\ExportQueue\Client\Endpoint\Node\PingEndpoint;
use FactorioItemBrowser\ExportQueue\Client\Request\Node\PingRequest;
use FactorioItemBrowser\ExportQueue\Client\Request\RequestInterface;
use FactorioItemBrowser\ExportQueue\Client\Response\EmptyResponse;
use PHPUnit\Framework\MockObject\MockObject;
use PHPUnit\Framework\TestCase;

/**
 * The PHPUnit test of the PingEndpoint class.
 *
 * @author BluePsyduck <bluepsyduck@gmx.com>
 * @license http://opensource.org/licenses/GPL-3.0 GPL v3
 * @coversDefaultClass \FactorioItemBrowser\ExportQueue\Client\Endpoint\Node\PingEndpoint
 */
class PingEndpointTest extends TestCase
{
    /**
     * Tests the getSupportedRequestClass method.
     * @covers ::getSupportedRequestClass
     */
    public function testGetSupportedRequestClass(): void
    {
        $expectedResult = PingRequest::class;

        $endpoint = new PingEndpoint();
        $result = $endpoint->getSupportedRequestClass();

        $this->assertSame($expectedResult, $result);
    }

    /**
     * Tests the getRequestMethod method.
     * @covers ::getRequestMethod
     */
    public function testGetRequestMethod(): void
    {
        $expectedResult = 'POST';

        $endpoint = new PingEndpoint();
        $result = $endpoint->getRequestMethod();

        $this->assertSame($expectedResult, $result);
    }

    /**
     * Tests the getRequestPath method.
     * @covers ::getRequestPath
     */
    public function testGetRequestPath(): void
    {
        $expectedResult = '/node/ping';

        /* @var RequestInterface&MockObject $request */
        $request = $this->createMock(RequestInterface::class);

        $endpoint = new PingEndpoint();
        $result = $endpoint->getRequestPath($request);

        $this->assertSame($expectedResult, $result);
    }

    /**
     * Tests the getResponseClass method.
     * @covers ::getResponseClass
     */
    public function testGetResponseClass(): void
    {
        $expectedResult = EmptyResponse::class;

        $endpoint = new PingEndpoint();
        $result = $endpoint->getResponseClass();

        $this->assertSame($expectedResult, $result);
    }
}

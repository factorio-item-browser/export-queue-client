<?php

declare(strict_types=1);

namespace FactorioItemBrowserTest\ExportQueue\Client\Endpoint\Job;

use FactorioItemBrowser\ExportQueue\Client\Endpoint\Job\CreateEndpoint;
use FactorioItemBrowser\ExportQueue\Client\Request\Job\CreateRequest;
use FactorioItemBrowser\ExportQueue\Client\Request\RequestInterface;
use FactorioItemBrowser\ExportQueue\Client\Response\Job\DetailsResponse;
use PHPUnit\Framework\MockObject\MockObject;
use PHPUnit\Framework\TestCase;

/**
 * The PHPUnit test of the CreateEndpoint class.
 *
 * @author BluePsyduck <bluepsyduck@gmx.com>
 * @license http://opensource.org/licenses/GPL-3.0 GPL v3
 * @coversDefaultClass \FactorioItemBrowser\ExportQueue\Client\Endpoint\Job\CreateEndpoint
 */
class CreateEndpointTest extends TestCase
{
    /**
     * Tests the getSupportedRequestClass method.
     * @covers ::getSupportedRequestClass
     */
    public function testGetSupportedRequestClass(): void
    {
        $expectedResult = CreateRequest::class;

        $endpoint = new CreateEndpoint();
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

        $endpoint = new CreateEndpoint();
        $result = $endpoint->getRequestMethod();

        $this->assertSame($expectedResult, $result);
    }

    /**
     * Tests the getRequestPath method.
     * @covers ::getRequestPath
     */
    public function testGetRequestPath(): void
    {
        $expectedResult = '/job';

        /* @var RequestInterface&MockObject $request */
        $request = $this->createMock(RequestInterface::class);

        $endpoint = new CreateEndpoint();
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

        $endpoint = new CreateEndpoint();
        $result = $endpoint->getResponseClass();

        $this->assertSame($expectedResult, $result);
    }
}

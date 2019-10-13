<?php

declare(strict_types=1);

namespace FactorioItemBrowserTest\ExportQueue\Client\Client;

use BluePsyduck\TestHelper\ReflectionTrait;
use FactorioItemBrowser\ExportQueue\Client\Client\Client;
use FactorioItemBrowser\ExportQueue\Client\Client\Facade;
use FactorioItemBrowser\ExportQueue\Client\Exception\ClientException;
use FactorioItemBrowser\ExportQueue\Client\Request\Job\CreateRequest;
use FactorioItemBrowser\ExportQueue\Client\Request\Job\DetailsRequest;
use FactorioItemBrowser\ExportQueue\Client\Request\Job\ListRequest;
use FactorioItemBrowser\ExportQueue\Client\Request\Job\UpdateRequest;
use FactorioItemBrowser\ExportQueue\Client\Response\Job\DetailsResponse;
use FactorioItemBrowser\ExportQueue\Client\Response\Job\ListResponse;
use GuzzleHttp\Promise\PromiseInterface;
use PHPUnit\Framework\MockObject\MockObject;
use PHPUnit\Framework\TestCase;
use ReflectionException;

/**
 * The PHPUnit test of the Facade class.
 *
 * @author BluePsyduck <bluepsyduck@gmx.com>
 * @license http://opensource.org/licenses/GPL-3.0 GPL v3
 * @coversDefaultClass \FactorioItemBrowser\ExportQueue\Client\Client\Facade
 */
class FacadeTest extends TestCase
{
    use ReflectionTrait;

    /**
     * The mocked client.
     * @var Client&MockObject
     */
    protected $client;

    /**
     * Sets up the test case.
     */
    protected function setUp(): void
    {
        parent::setUp();

        $this->client = $this->createMock(Client::class);
    }

    /**
     * Tests the constructing.
     * @throws ReflectionException
     * @covers ::__construct
     */
    public function testConstruct(): void
    {
        $facade = new Facade($this->client);

        $this->assertSame($this->client, $this->extractProperty($facade, 'client'));
    }

    /**
     * Tests the getJobDetails method.
     * @covers ::getJobDetails
     * @throws ClientException
     */
    public function testGetJobDetails(): void
    {
        /* @var DetailsRequest&MockObject $request */
        $request = $this->createMock(DetailsRequest::class);
        /* @var DetailsResponse&MockObject $response */
        $response = $this->createMock(DetailsResponse::class);

        /* @var PromiseInterface&MockObject $promise */
        $promise = $this->createMock(PromiseInterface::class);
        $promise->expects($this->once())
                ->method('wait')
                ->willReturn($response);

        $this->client->expects($this->once())
                     ->method('sendRequest')
                     ->with($this->identicalTo($request))
                     ->willReturn($promise);

        $facade = new Facade($this->client);
        $result = $facade->getJobDetails($request);

        $this->assertSame($response, $result);
    }

    /**
     * Tests the getJobList method.
     * @throws ClientException
     * @covers ::getJobList
     */
    public function testGetJobList(): void
    {
        /* @var ListRequest&MockObject $request */
        $request = $this->createMock(ListRequest::class);
        /* @var ListResponse&MockObject $response */
        $response = $this->createMock(ListResponse::class);

        /* @var PromiseInterface&MockObject $promise */
        $promise = $this->createMock(PromiseInterface::class);
        $promise->expects($this->once())
                ->method('wait')
                ->willReturn($response);

        $this->client->expects($this->once())
                     ->method('sendRequest')
                     ->with($this->identicalTo($request))
                     ->willReturn($promise);

        $facade = new Facade($this->client);
        $result = $facade->getJobList($request);

        $this->assertSame($response, $result);
    }

    /**
     * Tests the createJob method.
     * @throws ClientException
     * @covers ::createJob
     */
    public function testCreateJob(): void
    {
        /* @var CreateRequest&MockObject $request */
        $request = $this->createMock(CreateRequest::class);
        /* @var DetailsResponse&MockObject $response */
        $response = $this->createMock(DetailsResponse::class);

        /* @var PromiseInterface&MockObject $promise */
        $promise = $this->createMock(PromiseInterface::class);
        $promise->expects($this->once())
                ->method('wait')
                ->willReturn($response);

        $this->client->expects($this->once())
                     ->method('sendRequest')
                     ->with($this->identicalTo($request))
                     ->willReturn($promise);

        $facade = new Facade($this->client);
        $result = $facade->createJob($request);

        $this->assertSame($response, $result);
    }

    /**
     * Tests the updateJob method.
     * @throws ClientException
     * @covers ::updateJob
     */
    public function testUpdateJob(): void
    {
        /* @var UpdateRequest&MockObject $request */
        $request = $this->createMock(UpdateRequest::class);
        /* @var DetailsResponse&MockObject $response */
        $response = $this->createMock(DetailsResponse::class);

        /* @var PromiseInterface&MockObject $promise */
        $promise = $this->createMock(PromiseInterface::class);
        $promise->expects($this->once())
                ->method('wait')
                ->willReturn($response);

        $this->client->expects($this->once())
                     ->method('sendRequest')
                     ->with($this->identicalTo($request))
                     ->willReturn($promise);

        $facade = new Facade($this->client);
        $result = $facade->updateJob($request);

        $this->assertSame($response, $result);
    }
}

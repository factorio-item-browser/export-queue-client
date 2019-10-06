<?php

declare(strict_types=1);

namespace FactorioItemBrowserTest\ExportQueue\Client\Client;

use FactorioItemBrowser\ExportQueue\Client\Client\Options;
use FactorioItemBrowser\ExportQueue\Client\Client\OptionsFactory;
use FactorioItemBrowser\ExportQueue\Client\Constant\ConfigKey;
use Interop\Container\ContainerInterface;
use PHPUnit\Framework\MockObject\MockObject;
use PHPUnit\Framework\TestCase;

/**
 * The PHPUnit test of the OptionsFactory class.
 *
 * @author BluePsyduck <bluepsyduck@gmx.com>
 * @license http://opensource.org/licenses/GPL-3.0 GPL v3
 * @coversDefaultClass \FactorioItemBrowser\ExportQueue\Client\Client\OptionsFactory
 */
class OptionsFactoryTest extends TestCase
{
    /**
     * Tests the invoking.
     * @covers ::__invoke
     */
    public function testInvoke(): void
    {
        $config = [
            ConfigKey::PROJECT => [
                ConfigKey::EXPORT_QUEUE_CLIENT => [
                    ConfigKey::OPTIONS => [
                        ConfigKey::OPTION_API_URL => 'abc',
                        ConfigKey::OPTION_API_KEY => 'def',
                        ConfigKey::OPTION_TIMEOUT => 42,
                    ],
                ],
            ],
        ];

        $expectedResult = new Options();
        $expectedResult->setApiUrl('abc')
                       ->setApiKey('def')
                       ->setTimeout(42);

        /* @var ContainerInterface&MockObject $container */
        $container = $this->createMock(ContainerInterface::class);
        $container->expects($this->once())
                  ->method('get')
                  ->with($this->identicalTo('config'))
                  ->willReturn($config);

        $factory = new OptionsFactory();
        $result = $factory($container, Options::class);

        $this->assertEquals($expectedResult, $result);
    }
}

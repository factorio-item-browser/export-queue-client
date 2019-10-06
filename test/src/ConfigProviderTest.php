<?php

declare(strict_types=1);

namespace FactorioItemBrowserTest\ExportQueue\Client;

use FactorioItemBrowser\ExportQueue\Client\ConfigProvider;
use FactorioItemBrowser\ExportQueue\Client\Constant\ConfigKey;
use PHPUnit\Framework\TestCase;

/**
 * The PHPUnit test of the ConfigProvider class.
 *
 * @author BluePsyduck <bluepsyduck@gmx.com>
 * @license http://opensource.org/licenses/GPL-3.0 GPL v3
 * @coversDefaultClass \FactorioItemBrowser\ExportQueue\Client\ConfigProvider
 */
class ConfigProviderTest extends TestCase
{
    /**
     * Tests the invoking.
     * @covers ::__invoke
     */
    public function testInvoke(): void
    {
        $configProvider = new ConfigProvider();
        $result = $configProvider();

        $this->assertArrayHasKey('dependencies', $result);
        $this->assertArrayHasKey('factories', $result['dependencies']);

        $this->assertArrayHasKey(ConfigKey::PROJECT, $result);
        $this->assertArrayHasKey(ConfigKey::EXPORT_QUEUE_CLIENT, $result[ConfigKey::PROJECT]);
        $this->assertArrayHasKey(ConfigKey::ENDPOINTS, $result[ConfigKey::PROJECT][ConfigKey::EXPORT_QUEUE_CLIENT]);
    }
}

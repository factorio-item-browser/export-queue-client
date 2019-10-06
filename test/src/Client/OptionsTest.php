<?php

declare(strict_types=1);

namespace FactorioItemBrowserTest\ExportQueue\Client\Client;

use FactorioItemBrowser\ExportQueue\Client\Client\Options;
use PHPUnit\Framework\TestCase;

/**
 * The PHPUnit test of the Options class.
 *
 * @author BluePsyduck <bluepsyduck@gmx.com>
 * @license http://opensource.org/licenses/GPL-3.0 GPL v3
 * @coversDefaultClass \FactorioItemBrowser\ExportQueue\Client\Client\Options
 */
class OptionsTest extends TestCase
{
    /**
     * Tests the constructing.
     * @coversNothing
     */
    public function testConstruct(): void
    {
        $options = new Options();

        $this->assertSame('', $options->getApiUrl());
        $this->assertSame('', $options->getApiKey());
        $this->assertSame(0, $options->getTimeout());
    }

    /**
     * Tests the setting and getting the api url.
     * @covers ::getApiUrl
     * @covers ::setApiUrl
     */
    public function testSetAndGetApiUrl(): void
    {
        $apiUrl = 'abc';
        $options = new Options();

        $this->assertSame($options, $options->setApiUrl($apiUrl));
        $this->assertSame($apiUrl, $options->getApiUrl());
    }

    /**
     * Tests the setting and getting the api key.
     * @covers ::getApiKey
     * @covers ::setApiKey
     */
    public function testSetAndGetApiKey(): void
    {
        $apiKey = 'abc';
        $options = new Options();

        $this->assertSame($options, $options->setApiKey($apiKey));
        $this->assertSame($apiKey, $options->getApiKey());
    }

    /**
     * Tests the setting and getting the timeout.
     * @covers ::getTimeout
     * @covers ::setTimeout
     */
    public function testSetAndGetTimeout(): void
    {
        $timeout = 42;
        $options = new Options();

        $this->assertSame($options, $options->setTimeout($timeout));
        $this->assertSame($timeout, $options->getTimeout());
    }
}

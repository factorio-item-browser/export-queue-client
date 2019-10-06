<?php

declare(strict_types=1);

namespace FactorioItemBrowserTest\ExportQueue\Client\Response;

use FactorioItemBrowser\ExportQueue\Client\Response\ErrorResponse;
use PHPUnit\Framework\TestCase;

/**
 * The PHPUnit test of the ErrorResponse class.
 *
 * @author BluePsyduck <bluepsyduck@gmx.com>
 * @license http://opensource.org/licenses/GPL-3.0 GPL v3
 * @coversDefaultClass \FactorioItemBrowser\ExportQueue\Client\Response\ErrorResponse
 */
class ErrorResponseTest extends TestCase
{
    /**
     * Tests the constructing.
     * @coversNothing
     */
    public function testConstruct(): void
    {
        $request = new ErrorResponse();

        $this->assertSame('', $request->getMessage());
    }

    /**
     * Tests the setting and getting the message.
     * @covers ::getMessage
     * @covers ::setMessage
     */
    public function testSetAndGetMessage(): void
    {
        $message = 'abc';
        $response = new ErrorResponse();

        $this->assertSame($response, $response->setMessage($message));
        $this->assertSame($message, $response->getMessage());
    }
}

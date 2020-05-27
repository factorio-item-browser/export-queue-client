<?php

declare(strict_types=1);

namespace FactorioItemBrowserTestSerializer\ExportQueue\Client\Response;

use FactorioItemBrowser\ExportQueue\Client\Response\ErrorResponse;
use FactorioItemBrowserTestSerializer\ExportQueue\Client\SerializerTestCase;

/**
 * The serializer test for the ErrorResponse class.
 *
 * @author BluePsyduck <bluepsyduck@gmx.com>
 * @license http://opensource.org/licenses/GPL-3.0 GPL v3
 * @coversNothing
 */
class ErrorResponseTest extends SerializerTestCase
{
    /**
     * Returns the object to be serialized or deserialized.
     * @return object
     */
    protected function getObject(): object
    {
        $response = new ErrorResponse();
        $response->setMessage('abc');
        return $response;
    }

    /**
     * Returns the serialized data.
     * @return array<mixed>
     */
    protected function getData(): array
    {
        return [
            'message' => 'abc',
        ];
    }
}

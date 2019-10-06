<?php

declare(strict_types=1);

namespace FactorioItemBrowserTestSerializer\ExportQueue\Client\Response;

use FactorioItemBrowser\ExportQueue\Client\Response\EmptyResponse;
use FactorioItemBrowserTestAsset\ExportQueue\Client\SerializerTestCase;

/**
 * The serializer test for the EmptyResponse class.
 *
 * @author BluePsyduck <bluepsyduck@gmx.com>
 * @license http://opensource.org/licenses/GPL-3.0 GPL v3
 * @coversNothing
 */
class EmptyResponseTest extends SerializerTestCase
{
    /**
     * Returns the object to be serialized or deserialized.
     * @return object
     */
    protected function getObject(): object
    {
        return new EmptyResponse();
    }

    /**
     * Returns the serialized data.
     * @return array
     */
    protected function getData(): array
    {
        return [];
    }
}

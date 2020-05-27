<?php

declare(strict_types=1);

namespace FactorioItemBrowserTestSerializer\ExportQueue\Client\Request\Job;

use FactorioItemBrowser\ExportQueue\Client\Request\Job\DetailsRequest;
use FactorioItemBrowserTestSerializer\ExportQueue\Client\SerializerTestCase;

/**
 * The serializer test for the DetailsRequest class.
 *
 * @author BluePsyduck <bluepsyduck@gmx.com>
 * @license http://opensource.org/licenses/GPL-3.0 GPL v3
 * @coversNothing
 */
class DetailsRequestTest extends SerializerTestCase
{
    /**
     * Returns the object to be serialized or deserialized.
     * @return object
     */
    protected function getObject(): object
    {
        return new DetailsRequest();
    }

    /**
     * Returns the serialized data.
     * @return array<mixed>
     */
    protected function getData(): array
    {
        return [];
    }
}

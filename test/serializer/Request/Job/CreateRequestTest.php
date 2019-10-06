<?php

declare(strict_types=1);

namespace FactorioItemBrowserTestSerializer\ExportQueue\Client\Request\Job;

use FactorioItemBrowser\ExportQueue\Client\Request\Job\CreateRequest;
use FactorioItemBrowserTestAsset\ExportQueue\Client\SerializerTestCase;

/**
 * The serializer test for the CreateRequest class.
 *
 * @author BluePsyduck <bluepsyduck@gmx.com>
 * @license http://opensource.org/licenses/GPL-3.0 GPL v3
 * @coversNothing
 */
class CreateRequestTest extends SerializerTestCase
{
    /**
     * Returns the object to be serialized or deserialized.
     * @return object
     */
    protected function getObject(): object
    {
        $request = new CreateRequest();
        $request->setCombinationHash('abc')
                ->setModNames(['def', 'ghi']);
        return $request;
    }

    /**
     * Returns the serialized data.
     * @return array
     */
    protected function getData(): array
    {
        return [
            'combinationHash' => 'abc',
            'modNames' => ['def', 'ghi'],
        ];
    }
}

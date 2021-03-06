<?php

declare(strict_types=1);

namespace FactorioItemBrowserTestSerializer\ExportQueue\Client\Request\Job;

use FactorioItemBrowser\ExportQueue\Client\Request\Job\CreateRequest;
use FactorioItemBrowserTestSerializer\ExportQueue\Client\SerializerTestCase;

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
        $request->setCombinationId('abc')
                ->setModNames(['def', 'ghi'])
                ->setPriority('jkl');
        return $request;
    }

    /**
     * Returns the serialized data.
     * @return array<mixed>
     */
    protected function getData(): array
    {
        return [
            'combinationId' => 'abc',
            'modNames' => ['def', 'ghi'],
            'priority' => 'jkl',
        ];
    }
}

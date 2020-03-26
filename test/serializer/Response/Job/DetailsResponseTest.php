<?php

declare(strict_types=1);

namespace FactorioItemBrowserTestSerializer\ExportQueue\Client\Response\Job;

use DateTime;
use Exception;
use FactorioItemBrowser\ExportQueue\Client\Response\Job\DetailsResponse;
use FactorioItemBrowserTestAsset\ExportQueue\Client\SerializerTestCase;

/**
 * The serializer test for the DetailsResponse class.
 *
 * @author BluePsyduck <bluepsyduck@gmx.com>
 * @license http://opensource.org/licenses/GPL-3.0 GPL v3
 * @coversNothing
 */
class DetailsResponseTest extends SerializerTestCase
{
    /**
     * Returns the object to be serialized or deserialized.
     * @return object
     * @throws Exception
     */
    protected function getObject(): object
    {
        $response = new DetailsResponse();
        $response->setId('abc')
                 ->setCombinationId('def')
                 ->setModNames(['ghi', 'jkl'])
                 ->setStatus('mno')
                 ->setErrorMessage('pqr')
                 ->setCreator('stu')
                 ->setCreationTime(new DateTime('2038-01-17 03:14:00'))
                 ->setExporter('vwx')
                 ->setExportTime(new DateTime('2038-01-18 03:14:00'))
                 ->setImporter('yza')
                 ->setImportTime(new DateTime('2038-01-19 03:14:00'));
        return $response;
    }

    /**
     * Returns the serialized data.
     * @return array<mixed>
     */
    protected function getData(): array
    {
        return [
            'id' => 'abc',
            'combinationId' => 'def',
            'modNames' => ['ghi', 'jkl'],
            'status' => 'mno',
            'errorMessage' => 'pqr',
            'creator' => 'stu',
            'creationTime' => '2038-01-17T03:14:00+00:00',
            'exporter' => 'vwx',
            'exportTime' => '2038-01-18T03:14:00+00:00',
            'importer' => 'yza',
            'importTime' => '2038-01-19T03:14:00+00:00',
        ];
    }
}

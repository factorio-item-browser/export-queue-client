<?php

declare(strict_types=1);

namespace FactorioItemBrowserTestSerializer\ExportQueue\Client\Response\Job;

use DateTime;
use Exception;
use FactorioItemBrowser\ExportQueue\Client\Entity\Job;
use FactorioItemBrowser\ExportQueue\Client\Response\Job\ListResponse;
use FactorioItemBrowserTestAsset\ExportQueue\Client\SerializerTestCase;

/**
 * The serializer test for the ListResponse class.
 *
 * @author BluePsyduck <bluepsyduck@gmx.com>
 * @license http://opensource.org/licenses/GPL-3.0 GPL v3
 * @coversNothing
 */
class ListResponseTest extends SerializerTestCase
{
    /**
     * Returns the object to be serialized or deserialized.
     * @return object
     * @throws Exception
     */
    protected function getObject(): object
    {
        $job1 = new Job();
        $job1->setId('abc')
             ->setCombinationId('def')
             ->setModNames(['ghi', 'jkl'])
             ->setStatus('mno')
             ->setErrorMessage('pqr')
             ->setCreator('stu')
             ->setCreationTime(new DateTime('2038-01-14 03:14:00'))
             ->setExporter('vwx')
             ->setExportTime(new DateTime('2038-01-15 03:14:00'))
             ->setImporter('yza')
             ->setImportTime(new DateTime('2038-01-16 03:14:00'));

        $job2 = new Job();
        $job2->setId('bcd')
             ->setCombinationId('efg')
             ->setModNames(['hij', 'klm'])
             ->setStatus('nop')
             ->setErrorMessage('qrs')
             ->setCreator('tuv')
             ->setCreationTime(new DateTime('2038-01-17 03:14:00'))
             ->setExporter('wxy')
             ->setExportTime(new DateTime('2038-01-18 03:14:00'))
             ->setImporter('zab')
             ->setImportTime(new DateTime('2038-01-19 03:14:00'));

        $response = new ListResponse();
        $response->setJobs([$job1, $job2]);
        return $response;
    }

    /**
     * Returns the serialized data.
     * @return array<mixed>
     */
    protected function getData(): array
    {
        return [
            'jobs' => [
                [
                    'id' => 'abc',
                    'combinationId' => 'def',
                    'modNames' => ['ghi', 'jkl'],
                    'status' => 'mno',
                    'errorMessage' => 'pqr',
                    'creator' => 'stu',
                    'creationTime' => '2038-01-14T03:14:00+00:00',
                    'exporter' => 'vwx',
                    'exportTime' => '2038-01-15T03:14:00+00:00',
                    'importer' => 'yza',
                    'importTime' => '2038-01-16T03:14:00+00:00',
                ],
                [
                    'id' => 'bcd',
                    'combinationId' => 'efg',
                    'modNames' => ['hij', 'klm'],
                    'status' => 'nop',
                    'errorMessage' => 'qrs',
                    'creator' => 'tuv',
                    'creationTime' => '2038-01-17T03:14:00+00:00',
                    'exporter' => 'wxy',
                    'exportTime' => '2038-01-18T03:14:00+00:00',
                    'importer' => 'zab',
                    'importTime' => '2038-01-19T03:14:00+00:00',
                ],
            ],
        ];
    }
}

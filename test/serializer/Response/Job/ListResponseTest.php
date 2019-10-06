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
        $job1->setId(42)
             ->setCombinationHash('abc')
             ->setModNames(['def', 'ghi'])
             ->setStatus('jkl')
             ->setErrorMessage('mno')
             ->setCreationTime(new DateTime('2038-01-14 03:14:00'))
             ->setExportTime(new DateTime('2038-01-15 03:14:00'))
             ->setImportTime(new DateTime('2038-01-16 03:14:00'));

        $job2 = new Job();
        $job2->setId(21)
             ->setCombinationHash('pqr')
             ->setModNames(['stu', 'vwx'])
             ->setStatus('yza')
             ->setErrorMessage('bcd')
             ->setCreationTime(new DateTime('2038-01-17 03:14:00'))
             ->setExportTime(new DateTime('2038-01-18 03:14:00'))
             ->setImportTime(new DateTime('2038-01-19 03:14:00'));


        $response = new ListResponse();
        $response->setJobs([$job1, $job2]);
        return $response;
    }

    /**
     * Returns the serialized data.
     * @return array
     */
    protected function getData(): array
    {
        return [
            'jobs' => [
                [
                    'id' => 42,
                    'combinationHash' => 'abc',
                    'modNames' => ['def', 'ghi'],
                    'status' => 'jkl',
                    'errorMessage' => 'mno',
                    'creationTime' => '2038-01-14T03:14:00+00:00',
                    'exportTime' => '2038-01-15T03:14:00+00:00',
                    'importTime' => '2038-01-16T03:14:00+00:00',
                ],
                [
                    'id' => 21,
                    'combinationHash' => 'pqr',
                    'modNames' => ['stu', 'vwx'],
                    'status' => 'yza',
                    'errorMessage' => 'bcd',
                    'creationTime' => '2038-01-17T03:14:00+00:00',
                    'exportTime' => '2038-01-18T03:14:00+00:00',
                    'importTime' => '2038-01-19T03:14:00+00:00',
                ],
            ],
        ];
    }
}

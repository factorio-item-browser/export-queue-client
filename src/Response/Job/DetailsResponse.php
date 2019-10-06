<?php

declare(strict_types=1);

namespace FactorioItemBrowser\ExportQueue\Client\Response\Job;

use FactorioItemBrowser\ExportQueue\Client\Entity\Job;
use FactorioItemBrowser\ExportQueue\Client\Response\ResponseInterface;

/**
 * The response holding the details of an export job.
 *
 * @author BluePsyduck <bluepsyduck@gmx.com>
 * @license http://opensource.org/licenses/GPL-3.0 GPL v3
 */
class DetailsResponse extends Job implements ResponseInterface
{
}

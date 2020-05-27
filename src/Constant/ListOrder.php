<?php

declare(strict_types=1);

namespace FactorioItemBrowser\ExportQueue\Client\Constant;

/**
 * The order values for the list request.
 *
 * @author BluePsyduck <bluepsyduck@gmx.com>
 * @license http://opensource.org/licenses/GPL-3.0 GPL v3
 */
interface ListOrder
{
    /**
     * The order is the creationTime of the jobs, oldest first.
     */
    public const CREATION_TIME = 'creationTime';

    /**
     * The order is latest job first.
     */
    public const LATEST = 'latest';

    /**
     * The order is priority based, using creation time as second criterion.
     */
    public const PRIORITY = 'priority';
}

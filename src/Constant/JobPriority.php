<?php

declare(strict_types=1);

namespace FactorioItemBrowser\ExportQueue\Client\Constant;

/**
 * The priorities of the export jobs.
 *
 * @author BluePsyduck <bluepsyduck@gmx.com>
 * @license http://opensource.org/licenses/GPL-3.0 GPL v3
 */
interface JobPriority
{
    /**
     * The highest priority, the administrator.
     */
    public const ADMIN = 'admin';

    /**
     * The default priority, the user.
     */
    public const USER = 'user';

    /**
     * The lowest priority, the script.
     */
    public const SCRIPT = 'script';
}

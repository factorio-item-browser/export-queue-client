<?php

declare(strict_types=1);

namespace FactorioItemBrowser\ExportQueue\Client\Constant;

/**
 * The interface holding the names of parameters used in the client.
 *
 * @author BluePsyduck <bluepsyduck@gmx.com>
 * @license http://opensource.org/licenses/GPL-3.0 GPL v3
 */
interface ParameterName
{
    /**
     * The parameter holding a combination hash.
     */
    public const COMBINATION_HASH = 'combination-hash';

    /**
     * The parameter holding a status.
     */
    public const STATUS = 'status';

    /**
     * The parameter holding the limit.
     */
    public const LIMIT = 'limit';
}

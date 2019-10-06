<?php

declare(strict_types=1);

namespace FactorioItemBrowser\ExportQueue\Client\Constant;

/**
 * The interface holding the keys of the config.
 *
 * @author BluePsyduck <bluepsyduck@gmx.com>
 * @license http://opensource.org/licenses/GPL-3.0 GPL v3
 */
interface ConfigKey
{
    /**
     * The key holding the name of the project.
     */
    public const PROJECT = 'factorio-item-browser';

    /**
     * The key holding the name of the export queue client itself.
     */
    public const EXPORT_QUEUE_CLIENT = 'export-queue-client';

    /**
     * The key holding the cache directory to use.
     */
    public const CACHE_DIR = 'cache-dir';

    /**
     * The key holding the endpoints of the client.
     */
    public const ENDPOINTS = 'endpoints';

    /**
     * The key for the options.
     */
    public const OPTIONS = 'options';

    /**
     * The key for the API URL option.
     */
    public const OPTION_API_URL = 'api-url';

    /**
     * The key for the API key option.
     */
    public const OPTION_API_KEY = 'api-key';

    /**
     * The key for the timeout option.
     */
    public const OPTION_TIMEOUT = 'timeout';

}

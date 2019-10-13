<?php

declare(strict_types=1);


/**
 * The configuration of the export queue client itself.
 *
 * @author BluePsyduck <bluepsyduck@gmx.com>
 * @license http://opensource.org/licenses/GPL-3.0 GPL v3
 */

namespace FactorioItemBrowser\ExportQueue\Client;


use FactorioItemBrowser\ExportQueue\Client\Constant\ConfigKey;

return [
    ConfigKey::PROJECT => [
        ConfigKey::EXPORT_QUEUE_CLIENT => [
            ConfigKey::ENDPOINTS => [
                Endpoint\Job\CreateEndpoint::class,
                Endpoint\Job\DetailsEndpoint::class,
                Endpoint\Job\ListEndpoint::class,
                Endpoint\Job\UpdateEndpoint::class,
            ],
        ],
    ],
];

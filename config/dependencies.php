<?php

declare(strict_types=1);

/**
 * The configuration of the API client dependencies.
 *
 * @author BluePsyduck <bluepsyduck@gmx.com>
 * @license http://opensource.org/licenses/GPL-3.0 GPL v3
 */

namespace FactorioItemBrowser\ExportQueue\Client;

use BluePsyduck\ZendAutoWireFactory\AutoWireFactory;
use FactorioItemBrowser\ExportQueue\Client\Constant\ConfigKey;
use JMS\Serializer\SerializerInterface;
use function BluePsyduck\ZendAutoWireFactory\injectAliasArray;

return [
    'dependencies' => [
        'factories'  => [
            Client\Client::class => AutoWireFactory::class,
            Client\Options::class => Client\OptionsFactory::class,

            Endpoint\Node\PingEndpoint::class => AutoWireFactory::class,

            Service\EndpointService::class => AutoWireFactory::class,

            // Auto-wire helpers
            SerializerInterface::class . ' $exportQueueClientSerializer' => Serializer\SerializerFactory::class,

            'array $exportQueueClientEndpoints' => injectAliasArray(ConfigKey::PROJECT, ConfigKey::EXPORT_QUEUE_CLIENT, ConfigKey::ENDPOINTS),
        ],
    ],
];

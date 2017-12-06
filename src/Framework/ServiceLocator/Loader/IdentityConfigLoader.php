<?php
declare(strict_types=1);

namespace ExtendsFramework\Identity\Framework\ServiceLocator\Loader;

use ExtendsFramework\Identity\Framework\ServiceLocator\Factory\StorageFactory;
use ExtendsFramework\Identity\Storage\StorageInterface;
use ExtendsFramework\ServiceLocator\Config\Loader\LoaderInterface;
use ExtendsFramework\ServiceLocator\Resolver\Factory\FactoryResolver;
use ExtendsFramework\ServiceLocator\ServiceLocatorInterface;

class IdentityConfigLoader implements LoaderInterface
{
    /**
     * @inheritDoc
     */
    public function load(): array
    {
        return [
            ServiceLocatorInterface::class => [
                FactoryResolver::class => [
                    StorageInterface::class => StorageFactory::class,
                ],
            ],
        ];
    }
}

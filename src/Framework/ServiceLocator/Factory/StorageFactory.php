<?php
declare(strict_types=1);

namespace ExtendsFramework\Identity\Framework\ServiceLocator\Factory;

use ExtendsFramework\Identity\Storage\InMemory\InMemoryStorage;
use ExtendsFramework\Identity\Storage\StorageInterface;
use ExtendsFramework\ServiceLocator\Resolver\Factory\ServiceFactoryInterface;
use ExtendsFramework\ServiceLocator\ServiceLocatorInterface;

class StorageFactory implements ServiceFactoryInterface
{
    /**
     * @inheritDoc
     */
    public function createService(string $key, ServiceLocatorInterface $serviceLocator, array $extra = null): StorageInterface
    {
        return new InMemoryStorage();
    }
}

<?php
declare(strict_types=1);

namespace ExtendsFramework\Identity\Framework\ServiceLocator\Loader;

use ExtendsFramework\Identity\Framework\ServiceLocator\Factory\StorageFactory;
use ExtendsFramework\Identity\Storage\StorageInterface;
use ExtendsFramework\ServiceLocator\Resolver\Factory\FactoryResolver;
use ExtendsFramework\ServiceLocator\ServiceLocatorInterface;
use PHPUnit\Framework\TestCase;

class IdentityConfigLoaderTest extends TestCase
{
    /**
     * Load.
     *
     * Test that loader returns correct array.
     *
     * @covers \ExtendsFramework\Identity\Framework\ServiceLocator\Loader\IdentityConfigLoader::load()
     */
    public function testLoad(): void
    {
        $loader = new IdentityConfigLoader();

        $this->assertSame([
            ServiceLocatorInterface::class => [
                FactoryResolver::class => [
                    StorageInterface::class => StorageFactory::class,
                ],
            ],
        ], $loader->load());
    }
}

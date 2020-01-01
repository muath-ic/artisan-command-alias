<?php
namespace muath-ic\CommandAlias\Tests;

use muath-ic\ArtisanAlais\ArtisanCommandAliasServiceProvider;
use Orchestra\Testbench\TestCase as Orchestra;

abstract class TestCase extends Orchestra {
    /**
     * getPackageProviders
     *
     * @param  mixed $app
     * @return array
     */
    protected function getPackageProviders($app) {
        return [
            ArtisanCommandAliasServiceProvider::class,
        ];
    }
}

<?php
/**
 * Service Provider for ArtisanCommandAlias package
 * php version 7.3.1
 * 
 * @category Web
 * @package  Laravel
 * @author   BySwadi <muath.ye@gmail.com>
 * @license  MIT https://opensource.org/licenses/MIT
 * @link     ArtisanCommandAlias https://www.mokasweets.com/
 */
namespace muath-ic\ArtisanAlias;

use muath-ic\ArtisanAlias\Console\GenericCommandAlias;
use Illuminate\Support\ServiceProvider;

/**
 * Service Provider class for ArtisanCommandAlias package
 * php version 7.3.1
 * 
 * @category Web
 * @package  Laravel
 * @author   BySwadi <muath.ye@gmail.com>
 * @license  MIT https://opensource.org/licenses/MIT
 * @link     ArtisanCommandAlias https://www.mokasweets.com/
 */
class ArtisanCommandAliasServiceProvider extends ServiceProvider {
    /**
     * Boot
     *
     * @return void
     */
    public function boot() {
        $this->publishes([
            __DIR__ . '/' . '../config/artisan-command-alias.php' => config_path('artisan-command-alias.php')
        ]);
    }

    /**
     * Register
     *
     * @return void
     */
    public function register() {
        $this->mergeConfigFrom(__DIR__ . '/' . '../config/artisan-command-alias.php', 'command-alias');

        foreach (config('command-alias.commands', []) as $name => $command) {
            $bind = "command.command-alias:$name";

            $this->app->bind($bind, new GenericCommandAlias($name, $command));
            $this->commands([$bind]);
        }
    }
}

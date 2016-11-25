<?php
namespace Seguce92\Elite;

use Illuminate\Support\ServiceProvider as IlluminateServiceProvider;

class ServiceProvider extends IlluminateServiceProvider
{
    public function boot()
    {
        $this->publishes([__DIR__ . '/../config/base.php' => config_path('seguce92/base.php')], 'seguce92.base');

        $this->publishes([__DIR__ . '/../config/elite.php' => config_path('seguce92/elite.php')], 'seguce92.elite');

        $this->publishes([__DIR__. '/public' => public_path('vendor/seguce92/elite')], 'Elite-public');

        $this->publishes([__DIR__. '/resources' => resource_path('vendor/seguce92/elite')], 'Elite-view');
    }

    public function register()
    {

    }
}

<?php namespace Zonapro\Carbonlocalizer\src\Provider;

use Illuminate\Support\Facades\App;
use Illuminate\Support\ServiceProvider;
use Zonapro\Carbonlocalizer\src\Carbonlocalizer;

class CarbonlocalizerServiceProvider extends ServiceProvider {

	/**
	 * Bootstrap the application services.
	 *
	 * @return void
	 */
	public function boot()
	{
        App::bind('carbonlocalizer', function()
        {
            return new Carbonlocalizer;
        });
	}

	/**
	 * Register the application services.
	 *
	 * @return void
	 */
	public function register()
	{
		//
	}

}

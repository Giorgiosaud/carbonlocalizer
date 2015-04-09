<?php namespace jorgelsaud\Carbonlocalizer\Provider;

use Illuminate\Support\Facades\App;
use Illuminate\Support\ServiceProvider;
use Zonapro\Carbonlocalizer\Carbonlocalizer;

class CarbonlocalizerServiceProvider extends ServiceProvider {

	/**
	 * Bootstrap the application services.
	 *
	 * @return void
	 */
	public function boot()
	{
        $this->loadTranslationsFrom(__DIR__.'/../Translations', 'carbonlocale');

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

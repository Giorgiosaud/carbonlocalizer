<?php namespace Giorgiosaud\Carbonlocalizer\Provider;

use Giorgiosaud\Carbonlocalizer\Carbonlocalizer;
use Illuminate\Support\Facades\App;
use Illuminate\Support\ServiceProvider;

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
            return new Carbonlocalizer();
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

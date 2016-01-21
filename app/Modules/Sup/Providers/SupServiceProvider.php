<?php
namespace App\Modules\Sup\Providers;

use App;
use Config;
use Lang;
use View;
use Illuminate\Support\ServiceProvider;

class SupServiceProvider extends ServiceProvider
{
	/**
	 * Register the Sup module service provider.
	 *
	 * @return void
	 */
	public function register()
	{
		// This service provider is a convenient place to register your modules
		// services in the IoC container. If you wish, you may make additional
		// methods or service providers to keep the code more focused and granular.
		App::register('App\Modules\Sup\Providers\RouteServiceProvider');

		$this->registerNamespaces();
	}

	/**
	 * Register the Sup module resource namespaces.
	 *
	 * @return void
	 */
	protected function registerNamespaces()
	{
		Lang::addNamespace('sup', realpath(__DIR__.'/../Resources/Lang'));

		View::addNamespace('sup', realpath(__DIR__.'/../Resources/Views'));
	}
}

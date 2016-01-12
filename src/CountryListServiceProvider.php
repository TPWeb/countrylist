<?php

namespace TPWeb\CountryList;

use Illuminate\Support\ServiceProvider;
use Illuminate\Foundation\AliasLoader;

class CountryListServiceProvider extends ServiceProvider
{

	/**
	 * Indicates if loading of the provider is deferred.
	 *
	 * @var bool
	 */
	protected $defer = false;
	
	/**
	 * Bootstrap the application events.
	 *
	 * @return void
	 */
	public function boot()
	{
		AliasLoader::getInstance()->alias('Vestacp', 'TPWeb\CountryList\CountryList');
	}

	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{
		$this->app->bind('countrylist', 'TPWeb\CountryList\CountryList');
	}

	/**
	 * Get the services provided by the provider.
	 *
	 * @return array
	 */
	public function provides()
	{
		return ['CountryList'];
	}
}
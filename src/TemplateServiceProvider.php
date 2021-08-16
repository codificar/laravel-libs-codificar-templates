<?php
namespace Codificar\Templates;
use Illuminate\Support\ServiceProvider;

class ThemeServiceProvider extends ServiceProvider {

	public function boot()
	{
		$this->loadRoutesFrom(__DIR__.'/routes/web.php');

		$this->loadViewsFrom(__DIR__.'/resources/views', 'templates');

		// $this->loadMigrationsFrom(__DIR__.'/Database/migrations');

		$this->loadTranslationsFrom(__DIR__ . '/translations', 'templates');

		$this->publishes([
			__DIR__ . '/../public' => public_path('vendor/codificar-templates'),
		], 'public_vuejs_libs');
	}

	public function register()
	{

	}
}
?>
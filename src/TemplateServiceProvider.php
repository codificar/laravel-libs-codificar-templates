<?php
namespace Codificar\Templates;
use Illuminate\Support\ServiceProvider;
use Codificar\Templates\Commands\ResetEmailTemplatesCommand;
use Codificar\Templates\Commands\FillSamples;

class TemplateServiceProvider extends ServiceProvider {

	public function boot()
	{
		$this->loadRoutesFrom(__DIR__.'/routes/web.php');

		$this->loadViewsFrom(__DIR__.'/resources/views', 'templates');

		$this->loadMigrationsFrom(__DIR__.'/Database/migrations');

		$this->loadTranslationsFrom(__DIR__ . '/translations', 'templates');

		$this->publishes([
			__DIR__ . '/../public' => public_path('vendor/codificar/email-templates'),
		], 'public_vuejs_libs');

		$this->publishes([
			__DIR__ . '/../fonts' => public_path('fonts/'),
		], 'public_vuejs_libs');

		$this->publishes([
			__DIR__ . '/../images' => public_path('images/'),
		], 'public_vuejs_libs');

		if ($this->app->runningInConsole()) {
			$this->commands([
				ResetEmailTemplatesCommand::class,
				FillSamples::class
			]);
		}
	}

	public function register()
	{

	}
}
?>
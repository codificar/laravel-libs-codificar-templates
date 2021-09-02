<?php
namespace Codificar\Templates;
use Illuminate\Support\ServiceProvider;
use Codificar\Templates\Commands\ResetEmailTemplatesCommand;

class TemplateServiceProvider extends ServiceProvider {

	public function boot()
	{
		$this->loadRoutesFrom(__DIR__.'/routes/web.php');

		$this->loadViewsFrom(__DIR__.'/resources/views', 'templates');

		 $this->loadMigrationsFrom(__DIR__.'/Database/migrations');

		$this->loadTranslationsFrom(__DIR__ . '/translations', 'templates');

		$this->publishes([
			__DIR__ . '/../public' => public_path('vendor/codificar/email_templates'),
		], 'public_vuejs_libs');

		if ($this->app->runningInConsole()) {
			$this->commands([
				ResetEmailTemplatesCommand::class
			]);
		}
	}

	public function register()/
	{

	}
}
?>
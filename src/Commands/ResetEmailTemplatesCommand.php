<?php

namespace Codificar\Templates\Commands;
use Illuminate\Console\Command;
use Codificar\Templates\Http\EmailTemplate;


class ResetEmailTemplatesCommand extends Command {
	/**
	 * The console command name.
	 *
	 * @var string
	 */
	protected $name = 'reset:email';
	/**
	 * The console command description.
	 *
	 * @var string
	 */
	protected $description = 'Reinicia os templates de email para o estado inicial';

	/**
	 * Execute the console command.
	 *
	 * @return mixed
	 */
	public function fire()
	{
		//Marcar todos como não usados
		EmailTemplate::where('id', '>', '0')->update(['is_used' => false]);


		$email_template = include '../Http/database/EmailTemplateData.php';

		foreach ($email_template as $email) {
			EmailTemplate::updateOrCreate(["key" => $email["key"]], [
				"subject" => $email["subject"],
				"content" => $email["content"],
				"sample" => $email["sample"],
				"is_used" => 1
			]);
		}
	}
}
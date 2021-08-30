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
	public function handle()
	{
		//Marcar todos como não usados
		EmailTemplate::where('id', '>', '0')->update(['is_used' => false]);

		$email_template = include __DIR__ . '/../Http/database/EmailTemplateData.php';

		foreach ($email_template as $email) {
			$template = EmailTemplate::where('key',  $email["key"])->first();
			if($template) {
				$template->subject = $email["subject"];
				$template->content = $email["content"];
				$template->sample = $email["sample"];
				$template->is_used = true;
				$template->save();
			} else {
				EmailTemplate::create([
					"key" => $email["key"],
					"subject" => $email["subject"],
					"content" => $email["content"],
					"sample" => $email["sample"],
					"is_used" => 1
				]);
			}
		}
	}
}
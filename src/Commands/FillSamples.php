<?php

namespace Codificar\Templates\Commands;
use Illuminate\Console\Command;
use Codificar\Templates\Models\EmailTemplate;

use function GuzzleHttp\json_decode;

class FillSamples extends Command {
	/**
	 * The console command name.
	 *
	 * @var string
	 */
	protected $name = 'templates:samples';
	/**
	 * The console command description.
	 *
	 * @var string
	 */
	protected $description = 'Preenche a coluna sample dos templates com as variáveis usadas';

	/**
	 * Execute the console command.
	 *
	 * @return mixed
	 */
	public function handle()
	{

		//Variáveis que são incluídas automaticamente e não precisam estar no sample
		$variaveis_fixas = ['date', 'logo'];


		$templates = EmailTemplate::all();

		foreach($templates as $template) {
			preg_match_all('/\$vars\[\'([^\']*)\'\]/', $template->content, $vars);

			if($template->sample) {
				$current_sample = json_decode($template->sample);
			} else {
				$current_sample = [];
			}

			$sample_array = [];
			foreach ($vars[1] as $var) {
				if(!in_array($var, $variaveis_fixas)) {
					if(isset($current_sample->$var)) {
						$sample_array[$var] = $current_sample->$var;
					} else {
						$sample_array[$var] = "[Undefined Test Variable]";
					}
				}
			}

			if (count($sample_array) == 0) {
				$json = "{}";
			} else {
				$json = json_encode($sample_array);
			}

			$template->sample = $json;
			$template->save();

		}

		print("Variáveis definidas\n");

	}
}
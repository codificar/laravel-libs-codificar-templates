<?php

namespace Codificar\Templates\Commands;
use Illuminate\Console\Command;
use Codificar\Templates\Models\EmailTemplate;
use DB;

class ResetEmailTemplatesCommand extends Command {
	/**
	 * The console command name.
	 *
	 * @var string
	 */
	protected $signature = 'email_template:reset {project?}';
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
		$projectType = $this->argument('project');

		$fileName = __DIR__."/../Database/schema/".$projectType.".sql";

		if(file_exists($fileName)){
			\DB::unprepared(file_get_contents($fileName));
			$this->info("Templates reseted for ".$projectType);
		}
		else  {
			$this->error("File to reset not found");
		}
	}
}
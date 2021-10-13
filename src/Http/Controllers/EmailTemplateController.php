<?php

namespace Codificar\Templates\Http\Controllers;

use Codificar\Templates\Http\EmailTemplate;
use Codificar\Templates\Http\Requests\EmailTemplateTestApiRequest;
use Codificar\Templates\Http\Requests\EmailTemplateUpdateRequest;


use Illuminate\Routing\Controller;

class EmailTemplateController extends Controller {

	// tabela de emails
	public function index() {
		$emailtemplate = EmailTemplate::paginate(50);
		$title = ucwords(trans('email_template.email_template')); /* 'Email View' */

		return view('templates::list')
			->with('title', $title)
			->with('page', 'emails')
			->with('emailtemplate', $emailtemplate);
	}

	/**
	 * Recupera um template de email
	 */
	public function getEmail($id)
	{
		$email_template = EmailTemplate::find($id);
		return $email_template;
	}


	/**
	 * Página de edição de template
	 */
	public function edit_template($id)
	{
		$emailtemplate = EmailTemplate::find($id);
		if ($emailtemplate) {
			$id = $emailtemplate->id;
		}
		else {
			$id = 0;
		}

		$title = ucwords(trans('email_template.edit')); /* 'Email View' */
		return view('templates::edit')
			->with('title', $title)
			->with('id', $id);
	}

	//deleta o template de email a partir do id
	public function delete_template($id)
	{
		$emailtemplate = EmailTemplate::find($id);

		if ($emailtemplate) {
			$key = $emailtemplate->key;
			$path = base_path().'/resources/views/emails/'.$key.'.blade.php';

			if (file_exists($path = base_path().'/resources/views/emails/'.$key.'.blade.php')) {
				unlink($path);
			}
			$emailtemplate->delete();
		}
		return redirect("/admin/email_template");
	}

	//Cria novo template de email se ainda não existir
	public function update_template(EmailTemplateUpdateRequest $request)
	{
		$email_template = $request->email_template;
		$content = $request->input('content');

		$email_template->key = $request->key;
		$email_template->from = $request->from;
		$email_template->subject = $request->subject;
		$email_template->copy_emails = $request->copy_emails;
		$email_template->content = $content;
		$email_template->sample = $request->sample;
		$email_template->save();

		return [
			'success' => true
		];

	}

	public static function verify($content, $vars)
	{
		try {
			if(!isset($vars['date'])) {
				$vars['date'] = today();
			}
			if(!isset($vars['logo'])) {
				$vars['logo'] = \Codificar\Themes\Http\Theme::getLogo();
			}
			bladeCompile($content, ['vars' => $vars]);
			return [
				"success" => true,
				"message" => trans('templates::email_template.success')
			];
		} catch (\Exception $e) {
			$message = $e->getMessage();
			if(str_starts_with($message, 'Undefined index: ')) {
				$error = '';
				$message = trans('templates::email_template.undefined', ['variable' => str_replace('Undefined index: ', '', $message)]);
			} else {
				$error = $message;
				$message = trans('templates::email_template.fail');
			}
			return [
				"success" => false,
				"message" => $message,
				"error" => $error
			];
		}
	}

	public function validate()
	{
		return self::verify(request()->content, json_decode(request()->sample, true));
	}

	public function test()
	{
		$template = EmailTemplate::findOrFail(request()->get('id'));
		try{
			$template->test();
		} catch(\Exception $e) {
			\Log::error($e->getMessage());
			return redirect()->route('EmailTemplates')->withErrors([$e->getMessage()]);
		}
		return redirect()->route('EmailTemplates');
	}

	public function testApi(EmailTemplateTestApiRequest $request)
	{
		$content = str_replace("&gt;", ">", $request->input('content'));
		$content = str_replace("&lt;", "<", $content);
		$template = new EmailTemplate([
			'key' => 'test_temp',
			'from' => 'test@codificar.com.br',
		]);
		$template->content = $content;
		$template->sample = $request->sample;

		try{
			$template->test();
		} catch(\Exception $e) {
			\Log::error($e->getMessage());
			return [
				'success' => false,
				'message' => $e->getMessage()
			];
		}
		return ['success' => true];
	}

	public function makeSeederDataAll()
	{
		$path = '../Database/EmailTemplateData.php';
		$file = fopen($path, 'w');
		try {
			fwrite($file, "<?php\n\n\$array = [];\n");

			$templates = EmailTemplate::all();
			foreach ($templates as $template) {
				$content = $this->convertChars($template->content);
				$subject = $this->convertChars($template->subject);
				if($template->is_used){
					$string = "\$array[] = ['key' => '$template->key', 'subject' => '$subject', 'sample' => '$template->sample',
'content' => '$content'];\n\n";
					fwrite($file, $string);
				}
			}

			fwrite($file, 'return $array;');
		} catch (\Throwable $th) {
			//throw $th;
		} finally {
			chmod($path, 0777);
			fclose($file);
		}


		// return redirect()->route('EmailTemplates');
		// return 'OK';
	}

	private function convertChars($content)
	{
		return str_replace("'", "\'", $content);
	}

}
<?php

namespace Codificar\Templates\Http\Requests;

use Codificar\Templates\Http\Controllers\EmailTemplateController;
use Illuminate\Foundation\Http\FormRequest;

class EmailTemplateTestApiRequest extends FormRequest
{

	protected $authorize = true;
	protected $messages = [];


	private $valid;

	/**
	 * Determine if the user is authorized to make this request.
	 *
	 * @return bool
	 */
	public function authorize() {
		return $this->authorize;
	}

	public function messages() {
		return [
			"valid.in" => trans('templates::email_template.fail')
		];
	}

	/**
	 * Get the validation rules that apply to the request.
	 *
	 * @return array
	 */
	public function rules()
	{
		return [
			'valid' => !$this->valid["success"] ? 'in:true' : ''
		];
	}

	protected function prepareForValidation()
	{
		$content = str_replace("&gt;", ">", $this->input('content'));
		$content = str_replace("&lt;", "<", $content);
		$this->valid = EmailTemplateController::verify($content, request()->sample);
		$this->merge([
			'content' => $content,
			'valid' => $this->valid['success']
		]);
	}
}

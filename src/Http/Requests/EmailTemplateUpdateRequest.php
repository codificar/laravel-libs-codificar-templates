<?php

namespace Codificar\Templates\Http\Requests;

use Codificar\Templates\Http\Controllers\EmailTemplateController;
use Codificar\Templates\Models\EmailTemplate;

use Illuminate\Validation\Rule;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

class EmailTemplateUpdateRequest extends FormRequest
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
			//"valid.in" => $this->valid['message']
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
			'key' => ['required', Rule::unique('email_template')->ignore($this->email_template ? $this->email_template->id : null)],
			'subject' => 'required',
			//'valid' => !$this->valid["success"] ? 'in:true' : ''
		];
	}

	protected function prepareForValidation()
	{
		$email_template = EmailTemplate::find($this->id);

		$content = str_replace("&gt;", ">", $this->input('content'));
		$content = str_replace("&lt;", "<", $content);
		//$this->valid = EmailTemplateController::verify($content, json_decode(request()->sample, true));
		$this->merge([
			'email_template' => $email_template,
			'content' => $content,
			//'valid' => $this->valid['success']
		]);
	}
}

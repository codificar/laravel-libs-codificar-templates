<?php

namespace Codificar\Templates\Http\Requests;

use Codificar\Templates\Http\Controllers\EmailTemplateController;
use Codificar\Templates\Http\EmailTemplate;

use Illuminate\Validation\Rule;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

class EmailTemplateUpdateRequest extends FormRequest
{
	protected $authorize = true;
	protected $messages = [];

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
	 * Retorna um json caso a validação falhe.
	 *
	 * @throws HttpResponseException
	 * @return json
	 */
	protected function failedValidation(Validator $validator) {
		throw new HttpResponseException(
			response()->json([
				'success' => false,
				'errors' => $validator->errors()->all(),
				'error_code' => \ApiErrors::REQUEST_FAILED
			])
		);
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
			'valid' => 'in:true'
		];
	}

	protected function prepareForValidation()
	{
		$email_template = EmailTemplate::find($this->id);

		$content = str_replace("&gt;", ">", $this->input('content'));
		$content = str_replace("&lt;", "<", $content);
		$valid = EmailTemplateController::verify($content, request()->sample);
		$this->merge([
			'email_template' => $email_template,
			'content' => $content,
			'valid' => $valid['success']
		]);
	}
}

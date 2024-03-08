<?php

namespace Codificar\Templates\Models;

use App\Jobs\SendEmailJob;
use Illuminate\Support\Facades\Mail;

class EmailTemplate extends \Eloquent
{
	protected $fillable = array('id', 'subject', 'key', 'copy_emails', 'from', 'sample');

	protected $table = 'email_template';

	public static function SendByKey($key, $vars, $emailTo, $subject = null,  $replyTo = null)
	{
		try {

			if ($emailTemplate = self::getTemplateByKey($key)) {
				$emailTemplate->send($vars, $emailTo, $subject, $replyTo);
			} else {
				\Log::error("Template Email: " . $emailTemplate);
				\Log::error("Template de e-mail inexistente:" . $key);
			}
		} catch (\Exception $e) {
			\Log::error($e->getMessage() . $e->getTraceAsString());
		}
		return false;
	}

	public function send($vars, $emailTo, $subject = null, $replyTo = null)
	{
		if (!$subject) {
			$subject = $this->subject;
			$subject = bladeCompile($this->subject, ['vars' => $vars]);
		}

		$emailFrom = $this->from;
		if (!$emailFrom) {
			$emailFrom = \Settings::getAdminEmail();
		}

		if (empty($vars)) {
			$vars = $this->getSampleVars();
		}

		$vars['logo'] = \Config::get('app.url') . \Codificar\Themes\Http\Theme::getLogoUrl();
		$vars['date'] = date('d/m/Y');

		$emailContent = bladeCompile($this->getContent(), ['vars' => $vars]);
		$copyEmails = $this->copy_emails;

		return Mail::send([], [], function ($message) use ($emailContent, $emailTo, $subject, $replyTo, $copyEmails, $emailFrom) {
			$message->from($emailFrom, \Settings::findByKey('website_title'));
			$message->to($emailTo)->subject($subject);
			if ($replyTo)
				$message->replyTo($replyTo);
			if ($copyEmails)
				$message->bcc($copyEmails);

			$message->setBody($emailContent, 'text/html');
		});
	}

	/**
	 * get email template by key
	 * @param  String $key email_key
	 * @return EmailTempalte | null
	 */
	public static function getTemplateByKey($key)
	{
		return EmailTemplate::where('key', $key)->first();
	}

	/**
	 * get email template content
	 * @return string | Arquivo inexistente
	 */
	public function getContent()
	{
		if ($this->content)
			return $this->content;
		else {
			$path = base_path() . '/resources/views/emails/' . $this->key . '.blade.php';

			if (file_exists($path)) {
				return file_get_contents($path, "rw+");
			} else {
				$defaultLayout = self::getTemplateByKey('layout');
				if ($defaultLayout)
					$defaultLayout->content;
				else
					return "Arquivo inexistente";
			}
		}

		return null;
	}

	/**
	 * get email sample array
	 * @return array 
	 */
	private function getSample()
	{
		$template = $this;
		$variaveis_fixas = ['date', 'logo'];
		preg_match_all('/\$vars\["([^"]+)"\]/', $template->content, $vars);

		if ($template->sample) {
			$current_sample = json_decode($template->sample, true);
		} else {
			$current_sample = [];
		}

		$sample_array = [];
		foreach ($vars[1] as $var) {
			if (!in_array($var, $variaveis_fixas)) {
				if (isset($current_sample[$var])) {
					$sample_array[$var] = $current_sample[$var];
				} else {
					$sample_array[$var] = "[Undefined Test Variable]";
				}
			}
		}

		return array_merge($current_sample, $sample_array);
	}

	/**
	 * get email sample vars
	 * @return array 
	 */
	public function test()
	{
		$this->send($this->getSample(), 'teste@codificar.com.br');
	}

	/**
	 * get email sample vars
	 * @return array 
	 */
	public function getSampleVars()
	{
		$commonVars = [
			"website_title"                     => "Aplicativo de Mobilidade",
			"issuer_name" 	                    => "Codificar",
			"issuer_site" 	                    => "https://codificar.com.br",
			"issuer_address"                    => "BH - MG",
			"issuer_zipcode"                    => "30190-50",
			"issuer_document"                   => "05.957.264/0001-51",
			"provider_name"                     => trans('templates::email_template.provider_name'),
			"user_name"                         => trans('templates::email_template.user_name'),
			"new_password"                      => trans('templates::email_template.new_password'),
			"logo"                              => "https://www.codificar.com.br/wp-content/uploads/2015/01/logoEstilizada.png",
			"ride_total"                        => trans('templates::email_template.ride_total'),
			"ride_payment_mode"                 => trans('templates::email_template.ride_payment_mode'),
			"service_name"                      => trans('templates::email_template.service_name'), 
			"ride_start_time"                   => trans('templates::email_template.ride_start_time'),
			"ride_date"                         => trans('templates::email_template.ride_date'),
			"ride_finish_time"                  => trans('templates::email_template.ride_finish_time'),
			"ride_data_finish"                  => trans('templates::email_template.ride_data_finish'),
			"ride_origin"                       => trans('templates::email_template.ride_origin'),
			"ride_time"                         => trans('templates::email_template.ride_time'),
			'provider_address'                  => trans('templates::email_template.provider_address'),
			'user_address'                      => trans('templates::email_template.user_address'),
			'provider_address_number'           => trans('templates::email_template.provider_address_number'),
			'user_address_number'               => trans('templates::email_template.user_address_number'),
			'provider_neighborhood'	            => trans('templates::email_template.provider_neighborhood'),
			'user_neighborhood'	                => trans('templates::email_template.user_neighborhood'),
			'UF_provider'       	            => trans('templates::email_template.uf_provider'),
			'UF_user'			                => trans('templates::email_template.uf_user'),
			'provider_professional_document'	=> trans('templates::email_template.professional_document'),
			'provider_city'					    => trans('templates::email_template.provider_city'),
			'user_city'						    => trans('templates::email_template.user_city'),
			'displacement_fee'  			    => trans('templates::email_template.displacement_fee'),
			'service_value'     			    => trans('templates::email_template.service_value'),
			'userWhenApproved'					=> trans('templates::email_template.user_when_approved'),
			'providerWhenApproved' 				=> trans('templates::email_template.provider_when_approved'),
			'msg_body'  						=> trans('templates::email_template.msg_body'),
			'msg_title' 						=> trans('templates::email_template.msg_title'),
			'panicAlert' 						=> trans('templates::email_template.panic_alert'),
		];
		$sample = "{}";
		if(isset($this->sample)) {
			$sample = $this->sample;
		}
		$vars = json_decode($sample, true);

		if ($this->sample === null) {
			return array_merge($commonVars);
		} else {
			return array_merge($vars, $commonVars);
		}
	}
}

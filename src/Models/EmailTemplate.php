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
			$current_sample = json_decode($template->sample);
		} else {
			$current_sample = [];
		}

		$sample_array = [];
		foreach ($vars[1] as $var) {
			if (!in_array($var, $variaveis_fixas)) {
				if (isset($current_sample->$var)) {
					$sample_array[$var] = $current_sample->$var;
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
			"website_title" => "Aplicativo de Mobilidade",
			"issuer_name" => "Codificar",
			"issuer_site" => "https://codificar.com.br",
			"issuer_address" => "BH - MG",
			"issuer_zipcode" => "30190-50",
			"issuer_document" => "05.957.264/0001-51",
			"provider_name" => "Nome do Prestador",
			"user_name" => "Nome do Passageiro",
			"new_password" => "Nova Senha",
			"logo" => "https://www.codificar.com.br/wp-content/uploads/2015/01/logoEstilizada.png",
			"ride_total" => "Valor total da corrida",
			"ride_payment_mode" => "Método de pagamento",
			"service_name" =>  "Serviços prestados", 
			"ride_start_time" => "Hora de inicio do agendamento",
			"ride_date" => "Data do agendamento",
			"ride_finish_time" => "Hora de término do agendamento",
			"ride_data_finish" => "Data de término do agendamento",
			"ride_origin" => "Endereço em que o serviço foi prestado",
			"ride_time" => "Duração do atendimento(em minutos)",
			'provider_address'  => "Endereço do Prestador",
			'user_address'      => "Endereço do Paciente",
			'provider_address_number' => "Número residencial do prestador",
			'user_address_number' => "Número residencial do paciente",
			'provider_neighborhood'	=> "Bairro do prestador",
			'user_neighborhood'	=> "Bairro do Paciente",
			'UF_provider'       => "Estado do prestador",
			'UF_user'			=> "Estado do Paciente",
			'provider_professional_document'	=> "Documento do profissional",
			'provider_city'		=> "Cidade do Prestador",
			'user_city'			=> "Cidade do usuário",
			'displacement_fee'  => "taxa de deslocamento",
			'service_value'  => 'valor dos serviços',
			'userWhenApproved'	=> "Horário em que o usuário aceitou os termos",
			'providerWhenApproved' => "Horário em que o prestador aceitou os termos"
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

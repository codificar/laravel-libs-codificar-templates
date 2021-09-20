<?php

namespace Codificar\Templates\Http;

use App\Jobs\SendEmailJob;
use Illuminate\Support\Facades\Mail;
class EmailTemplate extends \Eloquent {
	protected $fillable = array('id', 'subject', 'key','copy_emails','from', 'sample');

	protected $table = 'email_template';

	public static function SendByKey($key, $vars, $emailTo, $subject = null,  $replyTo = null){
		try {

			if($emailTemplate = self::getTemplateByKey($key)){
				$emailTemplate->send($vars, $emailTo, $subject, $replyTo);
			}
			else {
				Log::error("Template de e-mail inexistente:". $key);
			}
		} catch (Exception $e) {
			\Log::error($e);
		}
		return false ;
	}

	public static function SentWithSendGrid($message_body, $subject, $mailFrom, $mailTo, $key, $replyTo = null, $copyEmails = null){
		try{
			$sendgrid = new SendGrid($key);

			$app_name = \Settings::where('key', '=', 'website_title')->first();
			$from = new SendGrid\Email($app_name->value, $mailFrom);
			$to = new SendGrid\Email(null, $mailTo);
			$content = new SendGrid\Content("text/html", $message_body);
			$mail = new SendGrid\Mail($from, $subject, $to, $content);

			if($replyTo){
				$replyTo = new SendGrid\Email(null, $replyTo);
				$mail->setReplyTo($replyTo) ;
			}

			$response = $sendgrid->client->mail()->send()->post($mail);
		}catch(Exception $e){
			Log::error($e);
		}

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

		if(empty($vars)) {
			$vars = json_decode($this->sample, true);
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
	public static function getTemplateByKey($key){
		return EmailTemplate::where('key', $key)->first();
	}

	public function getContent(){
		if($this->content)
			return $this->content;
		else {
			$path = base_path().'/resources/views/emails/'.$this->key.'.blade.php';

			if (file_exists($path)) {
				return file_get_contents($path, "rw+");
			}else{
				return "Arquivo inexistente";
			}
		}

		return null ;
	}

	public static function sendByAmazonSes($body, $subject, $from, $to){
		$amazon_ses_servername = \Settings::findByKey('amazon_ses_servername');
		$amazon_ses_username = \Settings::findByKey('amazon_ses_username');
	 	$amazon_ses_password = \Settings::findByKey('amazon_ses_password');
		$amazon_ses_port = \Settings::findByKey('amazon_ses_port');
		$amazon_ses_tls = \Settings::findByKey('amazon_ses_tls');

		$mail = new PHPMailer;
		$mail->isSMTP();                                      // Set mailer to use SMTP
		$mail->Host = $amazon_ses_servername;  // Specify main and backup SMTP servers
		$mail->SMTPAuth = true;                               // Enable SMTP authentication
		$mail->Username = $amazon_ses_username;                 // SMTP username
		$mail->Password = $amazon_ses_password;                           // SMTP password
		$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
		$mail->Port = $amazon_ses_port;                                   // TCP port to connect to

		$app_name = \Settings::where('key', '=', 'website_title')->first();
		$mail->setFrom($from, $app_name->value);
		$mail->addAddress($to);
		$mail->isHTML(true);                                  // Set email format to HTML
		$mail->SMTPDebug = 2;
		$mail->Subject = $subject;
		$mail->Body    = $body;
		$mail->AltBody = $body;

		if(!$mail->send()) {
		    // Log::info('Message could not be sent.');
		    // Log::info('Mailer Error: ' . $mail->ErrorInfo);
		} else {
		    // Log::info( 'Message has been sent');
		}
	}


	public function test()
	{
		// try {
		// 	Queue::push(new SendEmailJob($this->key, $this->sample, 'test@codificar.com', null, null));
		// } catch(Exception $e) {
		// 	\Log::error($e->getMessage());
		// }
		\Log::info('Email de teste ' . $this->key . ' ' . $this->sample);
		$this->send(json_decode($this->sample, true), 'teste@codificar.com.br');
		// self::SendByKey($this->key, $vars, 'test@codificar.com');
	}
}
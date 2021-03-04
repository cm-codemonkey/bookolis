<?php
defined('_EXEC') or die;

class Pages_controller extends Controller
{
	private $lang;

	public function __construct()
	{
		parent::__construct();

		$this->lang = Session::get_value('lang');
	}

	public function home()
	{
		if (Format::exist_ajax_request() == true)
		{
			$errors = [];

			if (!isset($_POST['name']) OR empty($_POST['name']))
				array_push($errors, ['name','{$lang.not_empty_name}']);

			if (!isset($_POST['phone']) OR empty($_POST['phone']))
				array_push($errors, ['phone','{$lang.not_empty_phone}']);

			if (!isset($_POST['email']) OR empty($_POST['email']))
				array_push($errors, ['email','{$lang.not_empty_email}']);

			if (empty($errors))
			{
				$mail = new Mailer(true);

				try
				{
					$mail->setFrom('info@bookolis.com', Configuration::$web_page);
					$mail->addAddress('info@bookolis.com', Configuration::$web_page);

					if ($_POST['action'] == 'signup')
						$mail->Subject = 'Nuevo registro';
					else if ($_POST['action'] == 'quote')
						$mail->Subject = 'Nuevo cotización';
					else if ($_POST['action'] == 'contact')
						$mail->Subject = 'Nuevo contacto';

					$mail->Body = 'Nombre: ' . $_POST['name'] . '<br>Teléfono: ' . $_POST['phone'] . '<br>Correo electrónico: ' . $_POST['email'] . '<br> Observaciones: ' . $_POST['observations'];
					$mail->send();
				}
				catch (Exception $e) {}

				if ($this->lang == 'es')
					$message = '¡Gracias por ponerte en contacto con nosotros! En breve uno de nuestros asesores te contactará';
				else if ($this->lang == 'en')
					$message = 'Thank you for contacting us! Shortly one of our advisors will contact you';

				echo json_encode([
					'status' => 'success',
					'message' => $message
				]);
			}
			else
			{
				echo json_encode([
					'status' => 'error',
					'errors' => $errors
				]);
			}
		}
		else
		{
			define('_title', '{$vkye_webpage} | {$lang.title}');

			$template = $this->view->render($this, 'home');

			echo $template;
		}
	}
}

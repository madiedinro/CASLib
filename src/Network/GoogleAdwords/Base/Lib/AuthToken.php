<?php

namespace AdvancedContextLib\Network\GoogleAdwords\Base\Lib;


use AdvancedContextLib\Lib\CurlWrapper;
use AdvancedContextLib\Lib\CurlWrapperException;

class AuthTokenException extends \Exception
{

	private $error;
	private $url;
	private $captchaToken;
	private $captchaUrl;

	public function __construct($error, $url = null, $captchaToken = null, $captchaUrl = null)
	{
		$this->error = $error;
		$this->url = $url;
		$this->captchaToken = $captchaToken;
		$this->captchaUrl = $captchaUrl;


		parent::__construct('Failed to get authToken. Reason: ' . $error);
	}

	public function getError()
	{
		return $this->error;
	}

	public function getUrl()
	{
		return $this->url;
	}

	public function getCaptchaToken()
	{
		return $this->captchaToken;
	}

	public function getCaptchaUrl()
	{
		return $this->captchaUrl;
	}

}

class AuthToken
{

	private $email;
	private $password;
	private $accountType;
	private $service;
	private $source;
	private $server;
	private $captchaToken;
	private $captchaResponse;

	public function __construct($email = null, $password = null, $service = 'adwords', $source = 'test', $accountType = 'GOOGLE', $server = 'https://www.google.com', $captchaToken = null, $captchaResponse = null)
	{
		$this->email = $email;
		$this->password = $password;
		$this->accountType = $accountType;
		$this->service = $service;
		$this->source = $source;
		$this->server = $server;
		$this->captchaToken = $captchaToken;
		$this->captchaResponse = $captchaResponse;
	}

	/**
	 * Установить логин и пароль
	 * 
	 * @param string $email
	 * @param string $password
	 */
	public function setEmailAndPassword($email, $password)
	{
		$this->email = $email;
		$this->password = $password;
	}

	/**
	 * Получаем токен
	 * 
	 * @return <type>
	 */
	public function getAuthToken()
	{
		$response = $this->login();
		$fields = $this->parseResponse($response);

		if (array_key_exists('Error', $fields))
		{
			$error = $fields['Error'] . (isset($fields['Info']) ? ': ' . $fields['Info'] : '');
			$url = isset($fields['Url']) ? $fields['Url'] : null;
			$captchaToken = isset($fields['CaptchaToken']) ? $fields['CaptchaToken'] : null;
			$captchaUrl = isset($fields['CaptchaUrl']) ? $fields['CaptchaUrl'] : null;

			throw new AuthTokenException($error, $url, $captchaToken, $captchaUrl);
		} else if (!array_key_exists('Auth', $fields))
		{
			throw new AuthTokenException('Unknown');
		} else
		{
			return $fields['Auth'];
		}
	}

	/**
	 * Выполнение входа
	 * @return <type>
	 */
	private function login()
	{
		$postUrl = $this->server . '/accounts/ClientLogin';
		$postVars = array(
			'accountType' => $this->accountType,
			'Email' => $this->email,
			'Passwd' => $this->password,
			'service' => $this->service,
			'source' => $this->source,
			'logintoken' => $this->captchaToken,
			'logincaptcha' => $this->captchaResponse
		);

		$curl = new CurlWrapper();

		try
		{
			$response = $curl->post($postUrl, $postVars);

			$httpCode = $curl->httpCode();

			if($httpCode != 200 && $httpCode != 403)
			{
				throw new AuthTokenException($httpCode);
			}

		}
		catch (CurlWrapperException $exc)
		{
			throw new AuthTokenException($exc->getMessage());
		}
		
		return $response;
	}

	/**
	 * ОБработка ответа гугла
	 * 
	 * @param string $response
	 * @return string[]
	 */
	private function parseResponse($response)
	{
		$result = array();
		foreach (explode("\n", $response) as $line)
		{
			@list($key, $value) = explode('=', $line, 2);
			$result[$key] = $value;
		}
		return $result;
	}

}

<?php


namespace AdvancedContextLib\Lib;


class CurlWrapperException extends \Exception
{
	public function __construct($message)
	{
		parent::__construct('CURL wrapper fail: ' . $message);
	}
}

class CurlWrapper
{
	/**
	 * Массив дополнительных опций курла
	 *
	 * @var string[]
	 * */
	public $options = array();
	
	/**
	 * Юзерарген
	 *
	 * @var string
	 */

	public $user_agent;
	
	/**
	 * Ошибка
	 *
	 * @var string
	 */
	protected $error = null;
	
	/**
	 * Последний http код
	 * 
	 * @var string
	 */
	protected $httpCode = null;
	
	/**
	 * Ресурс курла
	 *
	 * @var resource
	 * @access protected
	 * */
	protected $ch;
	
	/**
	 * Инициализация враппера
	 */
	function __construct($options = array())
	{
		$this->options = $options;
	}

	/**
	 * Возвращает последнюю ошибку
	 *
	 * @return string
	 */
	function error()
	{
		return $this->error;
	}

	/**
	 * Возвращает последний http код
	 * 
	 * @return <type>
	 */
	function httpCode()
	{
		return $this->httpCode;
	}

	/**
	 * Makes an HTTP GET request to the specified $url with an optional array or string of $vars
	 *
	 * Returns a CurlResponse object if the request was successful, false otherwise
	 *
	 * @param string $url
	 * @param array|string $vars
	 * @return CurlResponse
	 * */
	function get($url, $vars = array())
	{
		if (!empty($vars))
		{
			$url .= ( stripos($url, '?') !== false) ? '&' : '?';
			$url .= ( is_string($vars)) ? $vars : http_build_query($vars, '', '&');
		}

		return $this->request('GET', $url);
	}

	/**
	 * Makes an HTTP POST request to the specified $url with an optional array or string of $vars
	 *
	 * @param string $url
	 * @param array|string $vars
	 * @return CurlResponse|boolean
	 * */
	function post($url, $vars = array())
	{
		return $this->request('POST', $url, $vars);
	}

	/**
	 * Makes an HTTP request of the specified $method to a $url with an optional array or string of $vars
	 *
	 * Returns a CurlResponse object if the request was successful, false otherwise
	 *
	 * @param string $method
	 * @param string $url
	 * @param array|string $vars
	 * @return CurlResponse|boolean
	 * */
	function request($method, $url, $vars = array())
	{
		$this->error = null;
		$this->ch = \curl_init();
			
		if (\is_array($vars))
		{
			$vars = \http_build_query($vars, '', '&');
		}

		switch (\strtoupper($method))
		{
			case 'GET':
				curl_setopt($this->ch, CURLOPT_HTTPGET, true);
				break;
			case 'POST':
				curl_setopt($this->ch, CURLOPT_POST, true);
				break;
			default:
				curl_setopt($this->ch, CURLOPT_CUSTOMREQUEST, \strtoupper($method));
		}
		
		$this->setRequestOptions($url, $vars);

		$response = curl_exec($this->ch);

		$this->httpCode = curl_getinfo($this->ch, CURLINFO_HTTP_CODE);
		$this->error = curl_errno($this->ch) . ' - ' . curl_error($this->ch);
		curl_close($this->ch);
		
		if (!$response)
		{
			throw new CurlWrapperException($this->error);
		}
		
		return $response;
	}

	
	/**
	 * Устанавливает дополнительные опции курла
	 * 
	 * @param string $url
	 * @param string[] $vars
	 */
	protected function setRequestOptions($url, $vars)
	{
		curl_setopt($this->ch, CURLOPT_URL, $url);
		if (!empty($vars))
		{
			curl_setopt($this->ch, CURLOPT_POSTFIELDS, $vars);
		}
		
		curl_setopt($this->ch, CURLOPT_HEADER, false);
		curl_setopt($this->ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($this->ch, CURLOPT_USERAGENT, $this->options['userAgent']);
		curl_setopt($this->ch, CURLOPT_FOLLOWLOCATION, true);
		curl_setopt($this->ch, CURLOPT_ENCODING, 'gzip,deflate');
	}

}
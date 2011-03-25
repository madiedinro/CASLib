<?php


namespace AdvancedContextLib\Lib;


class CurlWrapperException extends \Exception
{
	public function __construct($message)
	{
		parent::__construct('CURL Fail: ' . $message);
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
	function __construct()
	{
		$this->user_agent = 'CURL';
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
		
		$this->set_request_options($url, $vars);

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

	protected function getOptions()
	{
		return $this->options;
	}

	
	/**
	 * Sets the CURLOPT options for the current request
	 *
	 * @param string $url
	 * @param string $vars
	 * @return void
	 * @access protected
	 * */
	protected function set_request_options($url, $vars)
	{
		curl_setopt($this->ch, CURLOPT_URL, $url);
		if (!empty($vars))
		{
			curl_setopt($this->ch, CURLOPT_POSTFIELDS, $vars);
		}

		# Set some default CURL options
		curl_setopt($this->ch, CURLOPT_HEADER, true);
		curl_setopt($this->ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($this->ch, CURLOPT_USERAGENT, $this->user_agent);
		curl_setopt($this->ch, CURLOPT_FOLLOWLOCATION, true);

		# Set any custom CURL options
		foreach ($this->getOptions() as $option => $value)
		{
			curl_setopt($this->ch, constant('CURLOPT_' . str_replace('CURLOPT_', '', strtoupper($option))), $value);
		}
	}

}
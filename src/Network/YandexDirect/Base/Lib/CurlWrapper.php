<?php


namespace AdvancedContextLib\Network\YandexDirect\Base\Lib;

/**
 * Description of CurlWrapper
 *
 * @author dmitryrodin
 */
class CurlWrapper extends \AdvancedContextLib\Lib\CurlWrapper
{
	protected function setRequestOptions($url, $vars)
	{
		parent::setRequestOptions($url, $vars);

		curl_setopt($this->ch, CURLOPT_SSL_VERIFYPEER, false);
		curl_setopt($this->ch, CURLOPT_SSLCERT, $this->options['local_cert']);
	}
}

?>

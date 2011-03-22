<?php
/**
 *
 * 
 */


namespace AdvancedContextLib\Network\GoogleAdwords\Base\Lib;

abstract class SoapClient extends \AdvancedContextLib\Lib\SoapClient
{
	public function __construct($options)
	{
		parent::__construct(
			$this->getWsdl(),
			array(
				'trace' => true,
				'classmap' => $options['classmap']
			)
		);
		
		$headers = new \stdClass();
		$headers->authToken = $options['authToken'];
		$headers->developerToken = $options['developerToken'];
		$headers->clientEmail = $options['login'];
		
		$header = new \SoapHeader($this->getNamespace(), 'RequestHeader', $headers);
		
		$this->__setSoapHeaders($header);

	}


}

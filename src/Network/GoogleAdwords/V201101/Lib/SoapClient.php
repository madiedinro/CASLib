<?php
/**
 * Created by JetBrains PhpStorm.
 * User: dmitryrodin
 * Date: 20.03.11
 * Time: 19:25
 * To change this template use File | Settings | File Templates.
 */


namespace AdvancedContextLib\Network\GoogleAdwords\V201101\Lib;


abstract class SoapClient extends \AdvancedContextLib\Network\GoogleAdwords\Base\Lib\SoapClient
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

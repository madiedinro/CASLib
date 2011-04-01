<?php
/**
 * Created by JetBrains PhpStorm.
 * User: dmitryrodin
 * Date: 20.03.11
 * Time: 19:25
 * To change this template use File | Settings | File Templates.
 */


namespace AdvancedContextLib\Network\GoogleAdwords\V13\Lib;


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


		$headers = array(
			new \SoapHeader($this->getNamespace(), 'email', $options['login']),
			new \SoapHeader($this->getNamespace(), 'password', $options['password']),
			new \SoapHeader($this->getNamespace(), 'useragent', 'CASLib'),
			new \SoapHeader($this->getNamespace(), 'developerToken', $options['developerToken']),
			new \SoapHeader($this->getNamespace(), 'clientEmail', $options['login']),
		);

		$this->__setSoapHeaders($headers);

	}
}

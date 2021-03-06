<?php
/**
 * Created by JetBrains PhpStorm.
 * User: dmitryrodin
 * Date: 20.03.11
 * Time: 19:25
 * To change this template use File | Settings | File Templates.
 */


namespace AdvancedContextLib\Network\Begun\Base\Lib;

abstract class SoapClient extends \AdvancedContextLib\Lib\SoapClient
{
	public function __construct($options)
	{
		parent::__construct(
			$this->getWsdl(),
			array(
				'login' => $options['http_login'],
				'password' => $options['http_password'],
				'trace' => true,
				'classmap' => $options['classmap']
			)
		);

		// Авторизация в система бегун
		$this->__soapCall('auth', array($options['login'], $options['password'], $options['login']));
	}
}

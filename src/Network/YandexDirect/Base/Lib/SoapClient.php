<?php
/**
 * Created by JetBrains PhpStorm.
 * User: dmitryrodin
 * Date: 20.03.11
 * Time: 19:25
 * To change this template use File | Settings | File Templates.
 */


namespace AdvancedContextLib\Network\YandexDirect\Base\Lib;

abstract class SoapClient extends \AdvancedContextLib\Lib\SoapClient
{
	public function __construct($options)
	{
		parent::__construct(
			$this->getWsdl(),
			array(
				'trace' => true,
				'classmap' => $options['classmap'],
				'local_cert' => $options['local_cert'],
			)
		);

	}
}

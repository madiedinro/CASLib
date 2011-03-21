<?php
/**
 * Created by JetBrains PhpStorm.
 * User: dmitryrodin
 * Date: 20.03.11
 * Time: 19:25
 * To change this template use File | Settings | File Templates.
 */


namespace AdvancedContextLib\Network\YandexDirect\Base\Lib;

use AdvancedContextLib\Lib\SoapClient as BaseSoapClient;

class SoapClient extends BaseSoapClient
{
	public function __construct($options)
	{
		parent::__construct(
			$this->wsdl,
			array(
				'trace' => true,
				'classmap' => $options['classmap'],
				'local_cert' => $options['local_cert'],
			)
		);

	}
}

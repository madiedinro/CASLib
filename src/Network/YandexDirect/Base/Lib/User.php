<?php
/**
 * Created by JetBrains PhpStorm.
 * User: dmitryrodin
 * Date: 20.03.11
 * Time: 22:23
 * To change this template use File | Settings | File Templates.
 */

namespace AdvancedContextLib\Network\YandexDirect\Base\Lib;

class User
{
	protected $options = array();
	
	public function __construct($options)
	{
		$this->options = $options;
	}

	/**
	 *
	 * @return \AdvancedContextLib\Network\YandexDirect\V3\Service\CommonService
	 */
	public function getCommonService()
	{
		return new \AdvancedContextLib\Network\YandexDirect\V3\Service\CommonService($this->options);
	}
	
	public function getCurl()
	{
		return new \AdvancedContextLib\Network\YandexDirect\Base\Lib\CurlWrapper($this->options);
	}
}

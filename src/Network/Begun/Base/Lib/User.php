<?php
/**
 * Created by JetBrains PhpStorm.
 * User: dmitryrodin
 * Date: 20.03.11
 * Time: 22:23
 * To change this template use File | Settings | File Templates.
 */

namespace AdvancedContextLib\Network\Begun\Base\Lib;

class User
{
	protected $options = array();
	
	public function __construct($options)
	{
		$this->options = $options;
	}
	
	public function getCommonService()
	{
		return new \AdvancedContextLib\Network\Begun\V1\Service\CommonService($this->options);
	}
}

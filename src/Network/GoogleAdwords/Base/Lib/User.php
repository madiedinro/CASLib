<?php
/**
 * Created by JetBrains PhpStorm.
 * User: dmitryrodin
 * Date: 20.03.11
 * Time: 22:23
 * To change this template use File | Settings | File Templates.
 */

namespace AdvancedContextLib\Network\GoogleAdwords\Base\Lib;

class User
{
	protected $options = array();
	
	public function __construct($options)
	{
		$authTokenGetter = new \AdvancedContextLib\Network\GoogleAdwords\Base\Lib\AuthToken();
		$authTokenGetter->setEmailAndPassword($options['login'], $options['password']);
		
		$options['authToken'] = $authTokenGetter->getAuthToken();
		
		$this->options = $options;
	}

	/**
	 *
	 * @return \AdvancedContextLib\Network\GoogleAdwords\V201101\Service\InfoService 
	 */
	public function getInfoService()
	{
		return new \AdvancedContextLib\Network\GoogleAdwords\V201101\Service\InfoService($this->options);
	}
}

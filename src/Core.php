<?php
/**
 * Created by JetBrains PhpStorm.
 * User: dmitryrodin
 * Date: 20.03.11
 * Time: 21:39
 * To change this template use File | Settings | File Templates.
 */

namespace AdvancedContextLib;

use AdvancedContextLib\Network\Begun\Base\Lib\User as BegunUser;
use AdvancedContextLib\Network\YandexDirect\Base\Lib\User as YandexDirectUser;
use AdvancedContextLib\Network\GoogleAdwords\Base\Lib\User as GoogleAdwordsUser;

class Core {

	const BEGUN = 'Begun';
	const YANDEX_DIRECT = 'YandexDirect';
	const GOOGLE_ADWORDS = 'GoogleAdwords';
	
	static $instance = null;

	protected $configurations = array();

	protected $parameters = array();

	/**
	 * @static
	 * @return Core
	 */
	static function getInstance()
	{
		if(self::$instance === null)
		{
			self::$instance = new self;
		}
		return self::$instance;
	}

	protected function __construct()
	{	}

	public function addConfiguration($name, $network, $options)
	{
		$this->configurations[$network][$name] = $options;
	}

	protected function getFirstConfigurationName($network)
	{
		if(count($this->configurations[$network]))
		{
			return key($this->configurations[$network]);
		}

		
		throw new \Exception('No configurations');
	}

	protected function getConfiguration($name, $network)
	{
		if(!isset($this->configurations[$network][$name]))
		{
			throw new \Exception('Invalid configuration given');
		}

		return $this->configurations[$network][$name];
	}

	/**
	 * @param $name
	 * @return \AdvancedContextLib\Network\Begun\Base\Lib\User
	 */
	public function getBegun($name = null)
	{
		if($name == null)
		{
			$name = $this->getFirstConfigurationName(self::BEGUN);
		}
		
		$options = $this->getConfiguration($name, self::BEGUN);
		return new BegunUser($options);
	}

	/**
	 * @param $name
	 * @return \AdvancedContextLib\Network\YandexDirect\Base\Lib\User
	 */
	public function getYandexDirect($name = null)
	{
		if($name == null)
		{
			$name = $this->getFirstConfigurationName(self::YANDEX_DIRECT);
		}

		$options = $this->getConfiguration($name, self::YANDEX_DIRECT);
		return new YandexDirectUser($options);
	}


	/**
	 * @param $name
	 * @return \AdvancedContextLib\Network\GoogleAdwords\Base\Lib\User
	 */
	public function getGoogleAdwords($name = null)
	{
		if($name == null)
		{
			$name = $this->getFirstConfigurationName(self::GOOGLE_ADWORDS);
		}
		
		$options = $this->getConfiguration($name, self::GOOGLE_ADWORDS);
		return new GoogleAdwordsUser($options);
	}

	/**
	 * Установка конфига
	 * 
	 * @param array $parameters
	 */
	public function setParameters($parameters)
	{
		$this->parameters = $parameters;
	}


}

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

class Core
{
	const BEGUN = 'Begun';
	const YANDEX_DIRECT = 'YandexDirect';
	const GOOGLE_ADWORDS = 'GoogleAdwords';

	static $instance = null;
	protected $parameters = array(
		'common' => array(
			'userAgent' => 'CASLib 0.1.0 (PHP)'
		),
		'connections' => array()
	);

	/**
	 * @static
	 * @return Core
	 */
	static function getInstance()
	{
		if (self::$instance === null)
		{
			self::$instance = new self;
		}
		return self::$instance;
	}

	protected function __construct()
	{
		
	}

	protected function getConfigurationNameForNetwork($network)
	{
		foreach ($this->parameters['connections'] as $connectionName => $connection)
		{
			if($connection['network'] == $network)
			{
				return $connectionName;
			}
		}

		throw new Exception('No configurations for selected network');
	}

	protected function getConfiguration($name)
	{
		if(isset($this->parameters['connections'][$name]))
		{
			return $this->mergeArrays($this->parameters['common'], $this->parameters['connections'][$name]);
		}

		throw new Exception('No configuration with name '.$name);
	}

	/**
	 * @param $name
	 * @return \AdvancedContextLib\Network\Begun\Base\Lib\User
	 */
	public function getBegun($name = null)
	{
		if ($name == null)
		{
			$name = $this->getConfigurationNameForNetwork(self::BEGUN);
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
		if ($name == null)
		{
			$name = $this->getConfigurationNameForNetwork(self::YANDEX_DIRECT);
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
		if ($name == null)
		{
			$name = $this->getConfigurationNameForNetwork(self::GOOGLE_ADWORDS);
		}

		$options = $this->getConfiguration($name, self::GOOGLE_ADWORDS);
		return new GoogleAdwordsUser($options);
	}

	/**
	 * Рекурсивно мерджит массивы
	 * @param array $arr1
	 * @param array $arr2
	 * @return array
	 */
	protected function mergeArrays($arr1, $arr2)
	{
		foreach ($arr2 as $key => $value)
		{
			if (\is_array($arr1) && \array_key_exists($key, $arr1) && \is_array($value))
			{
				$arr1[$key] = $this->mergeArrays($arr1[$key], $arr2[$key]);
			} else
			{
				$arr1[$key] = $value;
			}
		}

		return $arr1;
	}

	/**
	 * Установка конфига
	 * 
	 * @param array $parameters
	 */
	public function setParameters($parameters)
	{
		$this->parameters = $this->mergeArrays($this->parameters, $parameters);
	}

	public function getParameters()
	{
		return $this->parameters;
	}

}

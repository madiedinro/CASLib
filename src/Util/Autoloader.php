<?php
/**
 * Created by JetBrains PhpStorm.
 * User: dmitryrodin
 * Date: 20.03.11
 * Time: 20:51
 * To change this template use File | Settings | File Templates.
 */

namespace AdvancedContextLib\Util;

class Autoloader
{

	protected static $instance = null;

	protected $map = array();

	protected function __construct()
	{
		spl_autoload_register(array($this, 'autoload'));
	}

	public function autoload($name)
	{
		foreach($this->map as $ns => $path)
		{
			if(0 === strpos($name, $ns))
			{
				$filePath = $path.substr(str_replace('\\', '/', $name), strlen($ns)).'.php';
				if(file_exists($filePath))
				{
					require_once $filePath;
				}
			}
		}
	}

	public function setMap($map)
	{
		$this->map = $map;
	}

	/**
	 * @static
	 * @return AdvancedContextLib\Util\Autoloader
	 */
	static function getInstance()
	{
		if(null === self::$instance)
		{
			self::$instance = new self;
		}

		return self::$instance;
	}
}

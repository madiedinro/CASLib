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

	const NS_API = 'API';
	const NS_SOAPLITE = 'http://namespaces.soaplite.com/perl';
	
	public function __construct($options)
	{
		parent::__construct(
			$this->getWsdl(),
			array(
				'trace' => true,
				'classmap' => $options['classmap'],
				'local_cert' => $options['local_cert'],
				'cache_wsdl' => \WSDL_CACHE_NONE
			)
		);
	}

	/**
	 * Ацкий костыль. В ответе частенько пеперпутаны неймспейсы, которые пытаемся тут поправить
	 * 
	 * @param <type> $request
	 * @param <type> $location
	 * @param <type> $action
	 * @param <type> $version
	 * @param <type> $one_way
	 * @return <type>
	 */
	public function __doRequest($request, $location, $action, $version, $one_way = 0)
	{
		$req = parent::__doRequest($request, $location, $action, $version, $one_way);

		$xml = new \SimpleXMLElement($req);
		if(isset($nss[self::NS_SOAPLITE]) && isset ($nss[self::NS_API]))
		{
			$nss = \array_flip($xml->getDocNamespaces(true));
			$req = \str_replace($nss[self::NS_SOAPLITE].':', $nss[self::NS_API].':', $req);
		}

		return $req;
	}
}

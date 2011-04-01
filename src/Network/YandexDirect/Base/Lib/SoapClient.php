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
				'cache_wsdl' => \WSDL_CACHE_NONE
			)
		);
	}


	public function __doRequest($request, $location, $action, $version, $one_way = 0)
	{
		$req = parent::__doRequest($request, $location, $action, $version, $one_way);

		$xml = new \SimpleXMLElement($req);
		$nss = \array_flip($xml->getDocNamespaces(true));
		$req = \str_replace($nss['http://namespaces.soaplite.com/perl'].':', $nss['API'].':', $req);

		return $req;
	}
}

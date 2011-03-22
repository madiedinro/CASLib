<?php
/**
 * Created by JetBrains PhpStorm.
 * User: dmitryrodin
 * Date: 20.03.11
 * Time: 19:51
 * To change this template use File | Settings | File Templates.
 */


namespace AdvancedContextLib\Lib;

abstract class SoapClient extends \SoapClient
{
	protected $options = array();
	
	abstract public function getNamespace();
	abstract public function getWsdl();
}

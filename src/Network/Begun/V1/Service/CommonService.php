<?php


namespace AdvancedContextLib\Network\Begun\V1\Service;

use AdvancedContextLib\Network\Begun\V1\Lib\SoapClient;


/**
 * 
 */
class CommonService extends SoapClient
{

	/**
	 * 
	 * @param integer $campaignId Array
	 * @return 
	 */
	public function delCampaign($campaignId)
	{

		$result = $this->__soapCall("delCampaign", array($campaignId));
		return $result;
	}
	/**
	 * 
	 * @param integer $campaignId Array
	 * @return 
	 */
	public function getCampaign($campaignId)
	{

		$result = $this->__soapCall("getCampaign", array($campaignId));
		return $result;
	}
	/**
	 * 
	 * @param string $name Array
	 * @param string $type Array
	 * @return 
	 */
	public function addCampaign($name, $type)
	{

		$result = $this->__soapCall("addCampaign", array($name, $type));
		return $result;
	}
	/**
	 * 
	 * @param Campaign $campaign Array
	 * @return 
	 */
	public function updCampaign($campaign)
	{

		$result = $this->__soapCall("updCampaign", array($campaign));
		return $result;
	}
	/**
	 * 
	 * @param intArray $campaignIds Array
	 * @return 
	 */
	public function getCampaignsList($campaignIds)
	{

		$result = $this->__soapCall("getCampaignsList", array($campaignIds));
		return $result;
	}
	/**
	 * 
	 * @param integer $campaignId Array
	 * @return 
	 */
	public function getCampaignTarget($campaignId)
	{

		$result = $this->__soapCall("getCampaignTarget", array($campaignId));
		return $result;
	}
	/**
	 * 
	 * @param CampaignTarget $campaignTarget Array
	 * @return 
	 */
	public function updCampaignTarget($campaignTarget)
	{

		$result = $this->__soapCall("updCampaignTarget", array($campaignTarget));
		return $result;
	}
	/**
	 * 
	 * @param integer $campaignId Array
	 * @return 
	 */
	public function getCampaignPadTarget($campaignId)
	{

		$result = $this->__soapCall("getCampaignPadTarget", array($campaignId));
		return $result;
	}
	/**
	 * 
	 * @param integer $campaignId Array
	 * @param integer $padId Array
	 * @return 
	 */
	public function addCampaignPadTarget($campaignId, $padId)
	{

		$result = $this->__soapCall("addCampaignPadTarget", array($campaignId, $padId));
		return $result;
	}
	/**
	 * 
	 * @param integer $campaignId Array
	 * @param integer $padId Array
	 * @return 
	 */
	public function delCampaignPadTarget($campaignId, $padId)
	{

		$result = $this->__soapCall("delCampaignPadTarget", array($campaignId, $padId));
		return $result;
	}
	/**
	 * 
	 * @param integer $bannerId Array
	 * @return 
	 */
	public function delBanner($bannerId)
	{

		$result = $this->__soapCall("delBanner", array($bannerId));
		return $result;
	}
	/**
	 * 
	 * @param integer $bannerId Array
	 * @return 
	 */
	public function getBanner($bannerId)
	{

		$result = $this->__soapCall("getBanner", array($bannerId));
		return $result;
	}
	/**
	 * 
	 * @param Banner $banner Array
	 * @return 
	 */
	public function addBanner($banner)
	{

		$result = $this->__soapCall("addBanner", array($banner));
		return $result;
	}
	/**
	 * 
	 * @param Banner $banner Array
	 * @return 
	 */
	public function updBanner($banner)
	{

		$result = $this->__soapCall("updBanner", array($banner));
		return $result;
	}
	/**
	 * 
	 * @param integer $campaignId Array
	 * @param intArray $bannersIds Array
	 * @param boolean $withDeleted Array
	 * @return 
	 */
	public function getBannersList($campaignId, $bannersIds, $withDeleted)
	{

		$result = $this->__soapCall("getBannersList", array($campaignId, $bannersIds, $withDeleted));
		return $result;
	}
	/**
	 * 
	 * @param integer $conditionId Array
	 * @return 
	 */
	public function delCondition($conditionId)
	{

		$result = $this->__soapCall("delCondition", array($conditionId));
		return $result;
	}
	/**
	 * 
	 * @param integer $conditionId Array
	 * @return 
	 */
	public function getCondition($conditionId)
	{

		$result = $this->__soapCall("getCondition", array($conditionId));
		return $result;
	}
	/**
	 * 
	 * @param Condition $condition Array
	 * @return 
	 */
	public function addCondition($condition)
	{

		$result = $this->__soapCall("addCondition", array($condition));
		return $result;
	}
	/**
	 * 
	 * @param Condition $condition Array
	 * @return 
	 */
	public function updCondition($condition)
	{

		$result = $this->__soapCall("updCondition", array($condition));
		return $result;
	}
	/**
	 * 
	 * @param ConditionArray $newPricesList Array
	 * @return 
	 */
	public function updConditionsPrices($newPricesList)
	{

		$result = $this->__soapCall("updConditionsPrices", array($newPricesList));
		return $result;
	}
	/**
	 * 
	 * @param integer $bannerId Array
	 * @param intArray $conditionsIds Array
	 * @return 
	 */
	public function getConditionsList($bannerId, $conditionsIds)
	{

		$result = $this->__soapCall("getConditionsList", array($bannerId, $conditionsIds));
		return $result;
	}
	/**
	 * 
	 * @param intArray $bannersIds Array
	 * @param intArray $conditionsIds Array
	 * @param boolean $getPositionInfo Array
	 * @return 
	 */
	public function getConditions($bannersIds, $conditionsIds, $getPositionInfo)
	{

		$result = $this->__soapCall("getConditions", array($bannersIds, $conditionsIds, $getPositionInfo));
		return $result;
	}
	/**
	 * 
	 * @param integer $conditionId Array
	 * @return 
	 */
	public function getConditionRate($conditionId)
	{

		$result = $this->__soapCall("getConditionRate", array($conditionId));
		return $result;
	}
	/**
	 * 
	 * @param intArray $conditionsIds Array
	 * @param boolean $suspend Array
	 * @return 
	 */
	public function toggleConditions($conditionsIds, $suspend)
	{

		$result = $this->__soapCall("toggleConditions", array($conditionsIds, $suspend));
		return $result;
	}
	/**
	 * 
	 * @param integer $campaignId Array
	 * @param double $startTime Array
	 * @param double $endTime Array
	 * @param StatsDetail $filter Array
	 * @return 
	 */
	public function getStatsDetail($campaignId, $startTime, $endTime, $filter)
	{

		$result = $this->__soapCall("getStatsDetail", array($campaignId, $startTime, $endTime, $filter));
		return $result;
	}
	/**
	 * 
	 * @param integer $campaignId Array
	 * @param double $startTime Array
	 * @param double $endTime Array
	 * @param StatsCommon $filter Array
	 * @return 
	 */
	public function getStatsCommon($campaignId, $startTime, $endTime, $filter)
	{

		$result = $this->__soapCall("getStatsCommon", array($campaignId, $startTime, $endTime, $filter));
		return $result;
	}
	/**
	 * 
	 * @param integer $campaignId Array
	 * @param double $startTime Array
	 * @param double $endTime Array
	 * @param StatsByDays $filter Array
	 * @return 
	 */
	public function getStatsByDays($campaignId, $startTime, $endTime, $filter)
	{

		$result = $this->__soapCall("getStatsByDays", array($campaignId, $startTime, $endTime, $filter));
		return $result;
	}
	/**
	 * 
	 * @param integer $campaignId Array
	 * @param double $startTime Array
	 * @param double $endTime Array
	 * @param StatsByPads $filter Array
	 * @return 
	 */
	public function getStatsByPads($campaignId, $startTime, $endTime, $filter)
	{

		$result = $this->__soapCall("getStatsByPads", array($campaignId, $startTime, $endTime, $filter));
		return $result;
	}
	/**
	 * 
	 * @param integer $campaignId Array
	 * @param double $startTime Array
	 * @param double $endTime Array
	 * @param StatsKeywords $filter Array
	 * @return 
	 */
	public function getStatsKeywords($campaignId, $startTime, $endTime, $filter)
	{

		$result = $this->__soapCall("getStatsKeywords", array($campaignId, $startTime, $endTime, $filter));
		return $result;
	}
	/**
	 * 
	 * @param integer $geoProfileId Array
	 * @return 
	 */
	public function getGeoProfile($geoProfileId)
	{

		$result = $this->__soapCall("getGeoProfile", array($geoProfileId));
		return $result;
	}
	/**
	 * 
	 * @param string $name Array
	 * @param intArray $regionIds Array
	 * @return 
	 */
	public function addGeoProfile($name, $regionIds)
	{

		$result = $this->__soapCall("addGeoProfile", array($name, $regionIds));
		return $result;
	}
	/**
	 * 
	 * @param GeoProfile $geoProfile Array
	 * @return 
	 */
	public function updGeoProfile($geoProfile)
	{

		$result = $this->__soapCall("updGeoProfile", array($geoProfile));
		return $result;
	}
	/**
	 * 
	 * @param integer $geoProfileId Array
	 * @return 
	 */
	public function delGeoProfile($geoProfileId)
	{

		$result = $this->__soapCall("delGeoProfile", array($geoProfileId));
		return $result;
	}
	/**
	 * 
	 * @return 
	 */
	public function getGeoProfilesList()
	{

		$result = $this->__soapCall("getGeoProfilesList", array());
		return $result;
	}
	/**
	 * 
	 * @return 
	 */
	public function getRegions()
	{

		$result = $this->__soapCall("getRegions", array());
		return $result;
	}
	/**
	 * 
	 * @param integer $geoProfileId Array
	 * @return 
	 */
	public function getGeoProfileRegions($geoProfileId)
	{

		$result = $this->__soapCall("getGeoProfileRegions", array($geoProfileId));
		return $result;
	}
	/**
	 * 
	 * @return 
	 */
	public function getTrafficTypes()
	{

		$result = $this->__soapCall("getTrafficTypes", array());
		return $result;
	}
	/**
	 * 
	 * @param string $keywords Array
	 * @param integer $regionId Array
	 * @param integer $trafficTypeId Array
	 * @param integer $limit Array
	 * @param integer $geoProfileId Array
	 * @return 
	 */
	public function getPositionPrices($keywords, $regionId, $trafficTypeId, $limit, $geoProfileId)
	{

		$result = $this->__soapCall("getPositionPrices", array($keywords, $regionId, $trafficTypeId, $limit, $geoProfileId));
		return $result;
	}
	/**
	 * 
	 * @param Banner $banner Array
	 * @return 
	 */
	public function addBannerImage($banner)
	{

		$result = $this->__soapCall("addBannerImage", array($banner));
		return $result;
	}
	/**
	 * 
	 * @param Banner $banner Array
	 * @return 
	 */
	public function delBannerImage($banner)
	{

		$result = $this->__soapCall("delBannerImage", array($banner));
		return $result;
	}
	/**
	 * 
	 * @param Banner $banner Array
	 * @return 
	 */
	public function updBannerImage($banner)
	{

		$result = $this->__soapCall("updBannerImage", array($banner));
		return $result;
	}
	/**
	 * 
	 * @param string $login Array
	 * @param string $password Array
	 * @param string $clientLogin Array
	 * @return 
	 */
	public function auth($login, $password, $clientLogin)
	{

		$result = $this->__soapCall("auth", array($login, $password, $clientLogin));
		return $result;
	}
	/**
	 * 
	 * @return 
	 */
	public function getProfile()
	{

		$result = $this->__soapCall("getProfile", array());
		return $result;
	}
	/**
	 * 
	 * @return 
	 */
	public function getAccountInfo()
	{

		$result = $this->__soapCall("getAccountInfo", array());
		return $result;
	}


	public static $classmap = array(
		'CampaignLimit' => 'AdvancedContextLib\Network\Begun\V1\Service\CampaignLimit',
		'CampaignPadTypes' => 'AdvancedContextLib\Network\Begun\V1\Service\CampaignPadTypes',
		'CampaignStats' => 'AdvancedContextLib\Network\Begun\V1\Service\CampaignStats',
		'CampaignExternalStats' => 'AdvancedContextLib\Network\Begun\V1\Service\CampaignExternalStats',
		'Campaign' => 'AdvancedContextLib\Network\Begun\V1\Service\Campaign',
		'CampaignScheduleTarget' => 'AdvancedContextLib\Network\Begun\V1\Service\CampaignScheduleTarget',
		'CampaignTarget' => 'AdvancedContextLib\Network\Begun\V1\Service\CampaignTarget',
		'Banner' => 'AdvancedContextLib\Network\Begun\V1\Service\Banner',
		'Condition' => 'AdvancedContextLib\Network\Begun\V1\Service\Condition',
		'ConditionRate' => 'AdvancedContextLib\Network\Begun\V1\Service\ConditionRate',
		'StatsDetail' => 'AdvancedContextLib\Network\Begun\V1\Service\StatsDetail',
		'StatsCommon' => 'AdvancedContextLib\Network\Begun\V1\Service\StatsCommon',
		'StatsByDays' => 'AdvancedContextLib\Network\Begun\V1\Service\StatsByDays',
		'StatsByPads' => 'AdvancedContextLib\Network\Begun\V1\Service\StatsByPads',
		'StatsKeywords' => 'AdvancedContextLib\Network\Begun\V1\Service\StatsKeywords',
		'Region' => 'AdvancedContextLib\Network\Begun\V1\Service\Region',
		'GeoProfile' => 'AdvancedContextLib\Network\Begun\V1\Service\GeoProfile',
		'TrafficType' => 'AdvancedContextLib\Network\Begun\V1\Service\TrafficType',
		'PositionPrice' => 'AdvancedContextLib\Network\Begun\V1\Service\PositionPrice',
		'UserProfile' => 'AdvancedContextLib\Network\Begun\V1\Service\UserProfile',
		'AccountInfo' => 'AdvancedContextLib\Network\Begun\V1\Service\AccountInfo',
	);

	public function __construct($options) {
		$options['classmap'] = self::$classmap;
		parent::__construct($options);
	}

	public function getNamespace() { return 'http://api-new.begun.ru/index.php'; }
	public function getWsdl() { return 'https://madiedinro%40gmail.com:seekeiBiewoe@api-new.begun.ru/?definition=AdvertiserService'; }
}





/**
 * 
 */
class CampaignLimit 
{

	/**
	 * 
	 * @var integer
	 */
	public $clicksDay;

	/**
	 * 
	 * @var integer
	 */
	public $clicksTotal;

	/**
	 * 
	 * @var double
	 */
	public $budgetDay;

	/**
	 * 
	 * @var double
	 */
	public $budgetTotal;

	/**
	 * 
	 * @var boolean
	 */
	public $budgetDistribution;

	/**
	 * 
	 * @param integer $clicksDay 
	 * @param integer $clicksTotal 
	 * @param double $budgetDay 
	 * @param double $budgetTotal 
	 * @param boolean $budgetDistribution 
	 */
	public function __construct($clicksDay = null, $clicksTotal = null, $budgetDay = null, $budgetTotal = null, $budgetDistribution = null)
	{
		$this->setClicksDay($clicksDay);
		$this->setClicksTotal($clicksTotal);
		$this->setBudgetDay($budgetDay);
		$this->setBudgetTotal($budgetTotal);
		$this->setBudgetDistribution($budgetDistribution);
	}

	/**
	 * Возвращает namespace структуры
	 *
	 * @return string
	 */
	public function getNamespace() { return 'http://api-new.begun.ru/index.php'; }

	/**
	 * @return CampaignLimit
	 */
	public static function create() { return new self(); }

	/**
	 * Setter for clicksDay
	 * @param integer $clicksDay 
	 * @return CampaignLimit
	 */
	public function setClicksDay($clicksDay)
	{
		$this->clicksDay = $clicksDay;
		return $this;
	}

	/**
	 * Setter for clicksTotal
	 * @param integer $clicksTotal 
	 * @return CampaignLimit
	 */
	public function setClicksTotal($clicksTotal)
	{
		$this->clicksTotal = $clicksTotal;
		return $this;
	}

	/**
	 * Setter for budgetDay
	 * @param double $budgetDay 
	 * @return CampaignLimit
	 */
	public function setBudgetDay($budgetDay)
	{
		$this->budgetDay = $budgetDay;
		return $this;
	}

	/**
	 * Setter for budgetTotal
	 * @param double $budgetTotal 
	 * @return CampaignLimit
	 */
	public function setBudgetTotal($budgetTotal)
	{
		$this->budgetTotal = $budgetTotal;
		return $this;
	}

	/**
	 * Setter for budgetDistribution
	 * @param boolean $budgetDistribution 
	 * @return CampaignLimit
	 */
	public function setBudgetDistribution($budgetDistribution)
	{
		$this->budgetDistribution = $budgetDistribution;
		return $this;
	}
}



/**
 * 
 */
class CampaignPadTypes 
{

	/**
	 * 
	 * @var boolean
	 */
	public $SearchEngine;

	/**
	 * 
	 * @var boolean
	 */
	public $ContentAndBlog;

	/**
	 * 
	 * @var boolean
	 */
	public $BoardAndCatalog;

	/**
	 * 
	 * @var boolean
	 */
	public $SE;

	/**
	 * 
	 * @var boolean
	 */
	public $Maillist;

	/**
	 * 
	 * @var boolean
	 */
	public $BehaviouralTargeting;

	/**
	 * 
	 * @param boolean $SearchEngine 
	 * @param boolean $ContentAndBlog 
	 * @param boolean $BoardAndCatalog 
	 * @param boolean $SE 
	 * @param boolean $Maillist 
	 * @param boolean $BehaviouralTargeting 
	 */
	public function __construct($SearchEngine = null, $ContentAndBlog = null, $BoardAndCatalog = null, $SE = null, $Maillist = null, $BehaviouralTargeting = null)
	{
		$this->setSearchEngine($SearchEngine);
		$this->setContentAndBlog($ContentAndBlog);
		$this->setBoardAndCatalog($BoardAndCatalog);
		$this->setSE($SE);
		$this->setMaillist($Maillist);
		$this->setBehaviouralTargeting($BehaviouralTargeting);
	}

	/**
	 * Возвращает namespace структуры
	 *
	 * @return string
	 */
	public function getNamespace() { return 'http://api-new.begun.ru/index.php'; }

	/**
	 * @return CampaignPadTypes
	 */
	public static function create() { return new self(); }

	/**
	 * Setter for SearchEngine
	 * @param boolean $SearchEngine 
	 * @return CampaignPadTypes
	 */
	public function setSearchEngine($SearchEngine)
	{
		$this->SearchEngine = $SearchEngine;
		return $this;
	}

	/**
	 * Setter for ContentAndBlog
	 * @param boolean $ContentAndBlog 
	 * @return CampaignPadTypes
	 */
	public function setContentAndBlog($ContentAndBlog)
	{
		$this->ContentAndBlog = $ContentAndBlog;
		return $this;
	}

	/**
	 * Setter for BoardAndCatalog
	 * @param boolean $BoardAndCatalog 
	 * @return CampaignPadTypes
	 */
	public function setBoardAndCatalog($BoardAndCatalog)
	{
		$this->BoardAndCatalog = $BoardAndCatalog;
		return $this;
	}

	/**
	 * Setter for SE
	 * @param boolean $SE 
	 * @return CampaignPadTypes
	 */
	public function setSE($SE)
	{
		$this->SE = $SE;
		return $this;
	}

	/**
	 * Setter for Maillist
	 * @param boolean $Maillist 
	 * @return CampaignPadTypes
	 */
	public function setMaillist($Maillist)
	{
		$this->Maillist = $Maillist;
		return $this;
	}

	/**
	 * Setter for BehaviouralTargeting
	 * @param boolean $BehaviouralTargeting 
	 * @return CampaignPadTypes
	 */
	public function setBehaviouralTargeting($BehaviouralTargeting)
	{
		$this->BehaviouralTargeting = $BehaviouralTargeting;
		return $this;
	}
}



/**
 * 
 */
class CampaignStats 
{

	/**
	 * 
	 * @var integer
	 */
	public $clicksToday;

	/**
	 * 
	 * @var integer
	 */
	public $clicksYesterday;

	/**
	 * 
	 * @var integer
	 */
	public $clicksTotal;

	/**
	 * 
	 * @var integer
	 */
	public $clicksRawTotal;

	/**
	 * 
	 * @var double
	 */
	public $budgetToday;

	/**
	 * 
	 * @var double
	 */
	public $budgetYesterday;

	/**
	 * 
	 * @var double
	 */
	public $budgetTotal;

	/**
	 * 
	 * @param integer $clicksToday 
	 * @param integer $clicksYesterday 
	 * @param integer $clicksTotal 
	 * @param integer $clicksRawTotal 
	 * @param double $budgetToday 
	 * @param double $budgetYesterday 
	 * @param double $budgetTotal 
	 */
	public function __construct($clicksToday = null, $clicksYesterday = null, $clicksTotal = null, $clicksRawTotal = null, $budgetToday = null, $budgetYesterday = null, $budgetTotal = null)
	{
		$this->setClicksToday($clicksToday);
		$this->setClicksYesterday($clicksYesterday);
		$this->setClicksTotal($clicksTotal);
		$this->setClicksRawTotal($clicksRawTotal);
		$this->setBudgetToday($budgetToday);
		$this->setBudgetYesterday($budgetYesterday);
		$this->setBudgetTotal($budgetTotal);
	}

	/**
	 * Возвращает namespace структуры
	 *
	 * @return string
	 */
	public function getNamespace() { return 'http://api-new.begun.ru/index.php'; }

	/**
	 * @return CampaignStats
	 */
	public static function create() { return new self(); }

	/**
	 * Setter for clicksToday
	 * @param integer $clicksToday 
	 * @return CampaignStats
	 */
	public function setClicksToday($clicksToday)
	{
		$this->clicksToday = $clicksToday;
		return $this;
	}

	/**
	 * Setter for clicksYesterday
	 * @param integer $clicksYesterday 
	 * @return CampaignStats
	 */
	public function setClicksYesterday($clicksYesterday)
	{
		$this->clicksYesterday = $clicksYesterday;
		return $this;
	}

	/**
	 * Setter for clicksTotal
	 * @param integer $clicksTotal 
	 * @return CampaignStats
	 */
	public function setClicksTotal($clicksTotal)
	{
		$this->clicksTotal = $clicksTotal;
		return $this;
	}

	/**
	 * Setter for clicksRawTotal
	 * @param integer $clicksRawTotal 
	 * @return CampaignStats
	 */
	public function setClicksRawTotal($clicksRawTotal)
	{
		$this->clicksRawTotal = $clicksRawTotal;
		return $this;
	}

	/**
	 * Setter for budgetToday
	 * @param double $budgetToday 
	 * @return CampaignStats
	 */
	public function setBudgetToday($budgetToday)
	{
		$this->budgetToday = $budgetToday;
		return $this;
	}

	/**
	 * Setter for budgetYesterday
	 * @param double $budgetYesterday 
	 * @return CampaignStats
	 */
	public function setBudgetYesterday($budgetYesterday)
	{
		$this->budgetYesterday = $budgetYesterday;
		return $this;
	}

	/**
	 * Setter for budgetTotal
	 * @param double $budgetTotal 
	 * @return CampaignStats
	 */
	public function setBudgetTotal($budgetTotal)
	{
		$this->budgetTotal = $budgetTotal;
		return $this;
	}
}



/**
 * 
 */
class CampaignExternalStats 
{

	/**
	 * 
	 * @var boolean
	 */
	public $openstat;

	/**
	 * 
	 * @var boolean
	 */
	public $googleAnalytics;

	/**
	 * 
	 * @param boolean $openstat 
	 * @param boolean $googleAnalytics 
	 */
	public function __construct($openstat = null, $googleAnalytics = null)
	{
		$this->setOpenstat($openstat);
		$this->setGoogleAnalytics($googleAnalytics);
	}

	/**
	 * Возвращает namespace структуры
	 *
	 * @return string
	 */
	public function getNamespace() { return 'http://api-new.begun.ru/index.php'; }

	/**
	 * @return CampaignExternalStats
	 */
	public static function create() { return new self(); }

	/**
	 * Setter for openstat
	 * @param boolean $openstat 
	 * @return CampaignExternalStats
	 */
	public function setOpenstat($openstat)
	{
		$this->openstat = $openstat;
		return $this;
	}

	/**
	 * Setter for googleAnalytics
	 * @param boolean $googleAnalytics 
	 * @return CampaignExternalStats
	 */
	public function setGoogleAnalytics($googleAnalytics)
	{
		$this->googleAnalytics = $googleAnalytics;
		return $this;
	}
}



/**
 * 
 */
class Campaign 
{

	/**
	 * 
	 * @var integer
	 */
	public $campaignId;

	/**
	 * 
	 * @var integer
	 */
	public $userId;

	/**
	 * 
	 * @var string
	 */
	public $name;

	/**
	 * 
	 * @var string
	 */
	public $domain;

	/**
	 * 
	 * @var double
	 */
	public $timeStart;

	/**
	 * 
	 * @var double
	 */
	public $timeEnd;

	/**
	 * 
	 * @var 
	 */
	public $status;

	/**
	 * 
	 * @var boolean
	 */
	public $forceShowing;

	/**
	 * 
	 * @var CampaignLimit
	 */
	public $limits;

	/**
	 * 
	 * @var CampaignPadTypes
	 */
	public $types;

	/**
	 * 
	 * @var CampaignStats
	 */
	public $stats;

	/**
	 * 
	 * @var CampaignExternalStats
	 */
	public $externalStats;

	/**
	 * 
	 * @var integer
	 */
	public $geoProfileId;

	/**
	 * 
	 * @var 
	 */
	public $externalGoogleAdwords;

	/**
	 * 
	 * @var 
	 */
	public $campaignType;

	/**
	 * 
	 * @param integer $campaignId 
	 * @param integer $userId 
	 * @param string $name 
	 * @param string $domain 
	 * @param double $timeStart 
	 * @param double $timeEnd 
	 * @param  $status 
	 * @param boolean $forceShowing 
	 * @param CampaignLimit $limits 
	 * @param CampaignPadTypes $types 
	 * @param CampaignStats $stats 
	 * @param CampaignExternalStats $externalStats 
	 * @param integer $geoProfileId 
	 * @param  $externalGoogleAdwords 
	 * @param  $campaignType 
	 */
	public function __construct($campaignId = null, $userId = null, $name = null, $domain = null, $timeStart = null, $timeEnd = null, $status = null, $forceShowing = null, $limits = null, $types = null, $stats = null, $externalStats = null, $geoProfileId = null, $externalGoogleAdwords = null, $campaignType = null)
	{
		$this->setCampaignId($campaignId);
		$this->setUserId($userId);
		$this->setName($name);
		$this->setDomain($domain);
		$this->setTimeStart($timeStart);
		$this->setTimeEnd($timeEnd);
		$this->setStatus($status);
		$this->setForceShowing($forceShowing);
		$this->setLimits($limits);
		$this->setTypes($types);
		$this->setStats($stats);
		$this->setExternalStats($externalStats);
		$this->setGeoProfileId($geoProfileId);
		$this->setExternalGoogleAdwords($externalGoogleAdwords);
		$this->setCampaignType($campaignType);
	}

	/**
	 * Возвращает namespace структуры
	 *
	 * @return string
	 */
	public function getNamespace() { return 'http://api-new.begun.ru/index.php'; }

	/**
	 * @return Campaign
	 */
	public static function create() { return new self(); }

	/**
	 * Setter for campaignId
	 * @param integer $campaignId 
	 * @return Campaign
	 */
	public function setCampaignId($campaignId)
	{
		$this->campaignId = $campaignId;
		return $this;
	}

	/**
	 * Setter for userId
	 * @param integer $userId 
	 * @return Campaign
	 */
	public function setUserId($userId)
	{
		$this->userId = $userId;
		return $this;
	}

	/**
	 * Setter for name
	 * @param string $name 
	 * @return Campaign
	 */
	public function setName($name)
	{
		$this->name = $name;
		return $this;
	}

	/**
	 * Setter for domain
	 * @param string $domain 
	 * @return Campaign
	 */
	public function setDomain($domain)
	{
		$this->domain = $domain;
		return $this;
	}

	/**
	 * Setter for timeStart
	 * @param double $timeStart 
	 * @return Campaign
	 */
	public function setTimeStart($timeStart)
	{
		$this->timeStart = $timeStart;
		return $this;
	}

	/**
	 * Setter for timeEnd
	 * @param double $timeEnd 
	 * @return Campaign
	 */
	public function setTimeEnd($timeEnd)
	{
		$this->timeEnd = $timeEnd;
		return $this;
	}

	/**
	 * Setter for status
	 * @param  $status 
	 * @return Campaign
	 */
	public function setStatus($status)
	{
		$this->status = $status;
		return $this;
	}

	/**
	 * Setter for forceShowing
	 * @param boolean $forceShowing 
	 * @return Campaign
	 */
	public function setForceShowing($forceShowing)
	{
		$this->forceShowing = $forceShowing;
		return $this;
	}

	/**
	 * Setter for limits
	 * @param CampaignLimit $limits 
	 * @return Campaign
	 */
	public function setLimits($limits)
	{
		$this->limits = $limits;
		return $this;
	}

	/**
	 * Setter for types
	 * @param CampaignPadTypes $types 
	 * @return Campaign
	 */
	public function setTypes($types)
	{
		$this->types = $types;
		return $this;
	}

	/**
	 * Setter for stats
	 * @param CampaignStats $stats 
	 * @return Campaign
	 */
	public function setStats($stats)
	{
		$this->stats = $stats;
		return $this;
	}

	/**
	 * Setter for externalStats
	 * @param CampaignExternalStats $externalStats 
	 * @return Campaign
	 */
	public function setExternalStats($externalStats)
	{
		$this->externalStats = $externalStats;
		return $this;
	}

	/**
	 * Setter for geoProfileId
	 * @param integer $geoProfileId 
	 * @return Campaign
	 */
	public function setGeoProfileId($geoProfileId)
	{
		$this->geoProfileId = $geoProfileId;
		return $this;
	}

	/**
	 * Setter for externalGoogleAdwords
	 * @param  $externalGoogleAdwords 
	 * @return Campaign
	 */
	public function setExternalGoogleAdwords($externalGoogleAdwords)
	{
		$this->externalGoogleAdwords = $externalGoogleAdwords;
		return $this;
	}

	/**
	 * Setter for campaignType
	 * @param  $campaignType 
	 * @return Campaign
	 */
	public function setCampaignType($campaignType)
	{
		$this->campaignType = $campaignType;
		return $this;
	}
}



/**
 * 
 */
class CampaignScheduleTarget 
{

	/**
	 * 
	 * @var string
	 */
	public $monday;

	/**
	 * 
	 * @var string
	 */
	public $tuesday;

	/**
	 * 
	 * @var string
	 */
	public $wednesday;

	/**
	 * 
	 * @var string
	 */
	public $thursday;

	/**
	 * 
	 * @var string
	 */
	public $friday;

	/**
	 * 
	 * @var string
	 */
	public $saturday;

	/**
	 * 
	 * @var string
	 */
	public $sunday;

	/**
	 * 
	 * @param string $monday 
	 * @param string $tuesday 
	 * @param string $wednesday 
	 * @param string $thursday 
	 * @param string $friday 
	 * @param string $saturday 
	 * @param string $sunday 
	 */
	public function __construct($monday = null, $tuesday = null, $wednesday = null, $thursday = null, $friday = null, $saturday = null, $sunday = null)
	{
		$this->setMonday($monday);
		$this->setTuesday($tuesday);
		$this->setWednesday($wednesday);
		$this->setThursday($thursday);
		$this->setFriday($friday);
		$this->setSaturday($saturday);
		$this->setSunday($sunday);
	}

	/**
	 * Возвращает namespace структуры
	 *
	 * @return string
	 */
	public function getNamespace() { return 'http://api-new.begun.ru/index.php'; }

	/**
	 * @return CampaignScheduleTarget
	 */
	public static function create() { return new self(); }

	/**
	 * Setter for monday
	 * @param string $monday 
	 * @return CampaignScheduleTarget
	 */
	public function setMonday($monday)
	{
		$this->monday = $monday;
		return $this;
	}

	/**
	 * Setter for tuesday
	 * @param string $tuesday 
	 * @return CampaignScheduleTarget
	 */
	public function setTuesday($tuesday)
	{
		$this->tuesday = $tuesday;
		return $this;
	}

	/**
	 * Setter for wednesday
	 * @param string $wednesday 
	 * @return CampaignScheduleTarget
	 */
	public function setWednesday($wednesday)
	{
		$this->wednesday = $wednesday;
		return $this;
	}

	/**
	 * Setter for thursday
	 * @param string $thursday 
	 * @return CampaignScheduleTarget
	 */
	public function setThursday($thursday)
	{
		$this->thursday = $thursday;
		return $this;
	}

	/**
	 * Setter for friday
	 * @param string $friday 
	 * @return CampaignScheduleTarget
	 */
	public function setFriday($friday)
	{
		$this->friday = $friday;
		return $this;
	}

	/**
	 * Setter for saturday
	 * @param string $saturday 
	 * @return CampaignScheduleTarget
	 */
	public function setSaturday($saturday)
	{
		$this->saturday = $saturday;
		return $this;
	}

	/**
	 * Setter for sunday
	 * @param string $sunday 
	 * @return CampaignScheduleTarget
	 */
	public function setSunday($sunday)
	{
		$this->sunday = $sunday;
		return $this;
	}
}



/**
 * 
 */
class CampaignTarget 
{

	/**
	 * 
	 * @var integer
	 */
	public $campaignId;

	/**
	 * 
	 * @var CampaignLimit
	 */
	public $limits;

	/**
	 * 
	 * @var CampaignPadTypes
	 */
	public $types;

	/**
	 * 
	 * @var double
	 */
	public $timeStart;

	/**
	 * 
	 * @var double
	 */
	public $timeEnd;

	/**
	 * 
	 * @var CampaignScheduleTarget
	 */
	public $scheduleTarget;

	/**
	 * 
	 * @param integer $campaignId 
	 * @param CampaignLimit $limits 
	 * @param CampaignPadTypes $types 
	 * @param double $timeStart 
	 * @param double $timeEnd 
	 * @param CampaignScheduleTarget $scheduleTarget 
	 */
	public function __construct($campaignId = null, $limits = null, $types = null, $timeStart = null, $timeEnd = null, $scheduleTarget = null)
	{
		$this->setCampaignId($campaignId);
		$this->setLimits($limits);
		$this->setTypes($types);
		$this->setTimeStart($timeStart);
		$this->setTimeEnd($timeEnd);
		$this->setScheduleTarget($scheduleTarget);
	}

	/**
	 * Возвращает namespace структуры
	 *
	 * @return string
	 */
	public function getNamespace() { return 'http://api-new.begun.ru/index.php'; }

	/**
	 * @return CampaignTarget
	 */
	public static function create() { return new self(); }

	/**
	 * Setter for campaignId
	 * @param integer $campaignId 
	 * @return CampaignTarget
	 */
	public function setCampaignId($campaignId)
	{
		$this->campaignId = $campaignId;
		return $this;
	}

	/**
	 * Setter for limits
	 * @param CampaignLimit $limits 
	 * @return CampaignTarget
	 */
	public function setLimits($limits)
	{
		$this->limits = $limits;
		return $this;
	}

	/**
	 * Setter for types
	 * @param CampaignPadTypes $types 
	 * @return CampaignTarget
	 */
	public function setTypes($types)
	{
		$this->types = $types;
		return $this;
	}

	/**
	 * Setter for timeStart
	 * @param double $timeStart 
	 * @return CampaignTarget
	 */
	public function setTimeStart($timeStart)
	{
		$this->timeStart = $timeStart;
		return $this;
	}

	/**
	 * Setter for timeEnd
	 * @param double $timeEnd 
	 * @return CampaignTarget
	 */
	public function setTimeEnd($timeEnd)
	{
		$this->timeEnd = $timeEnd;
		return $this;
	}

	/**
	 * Setter for scheduleTarget
	 * @param CampaignScheduleTarget $scheduleTarget 
	 * @return CampaignTarget
	 */
	public function setScheduleTarget($scheduleTarget)
	{
		$this->scheduleTarget = $scheduleTarget;
		return $this;
	}
}



/**
 * 
 */
class Banner 
{

	/**
	 * 
	 * @var integer
	 */
	public $bannerId;

	/**
	 * 
	 * @var integer
	 */
	public $campaignId;

	/**
	 * 
	 * @var string
	 */
	public $url;

	/**
	 * 
	 * @var string
	 */
	public $title;

	/**
	 * 
	 * @var string
	 */
	public $description;

	/**
	 * 
	 * @var 
	 */
	public $status;

	/**
	 * 
	 * @var 
	 */
	public $autobid;

	/**
	 * 
	 * @var string
	 */
	public $image;

	/**
	 * 
	 * @param integer $bannerId 
	 * @param integer $campaignId 
	 * @param string $url 
	 * @param string $title 
	 * @param string $description 
	 * @param  $status 
	 * @param  $autobid 
	 * @param string $image 
	 */
	public function __construct($bannerId = null, $campaignId = null, $url = null, $title = null, $description = null, $status = null, $autobid = null, $image = null)
	{
		$this->setBannerId($bannerId);
		$this->setCampaignId($campaignId);
		$this->setUrl($url);
		$this->setTitle($title);
		$this->setDescription($description);
		$this->setStatus($status);
		$this->setAutobid($autobid);
		$this->setImage($image);
	}

	/**
	 * Возвращает namespace структуры
	 *
	 * @return string
	 */
	public function getNamespace() { return 'http://api-new.begun.ru/index.php'; }

	/**
	 * @return Banner
	 */
	public static function create() { return new self(); }

	/**
	 * Setter for bannerId
	 * @param integer $bannerId 
	 * @return Banner
	 */
	public function setBannerId($bannerId)
	{
		$this->bannerId = $bannerId;
		return $this;
	}

	/**
	 * Setter for campaignId
	 * @param integer $campaignId 
	 * @return Banner
	 */
	public function setCampaignId($campaignId)
	{
		$this->campaignId = $campaignId;
		return $this;
	}

	/**
	 * Setter for url
	 * @param string $url 
	 * @return Banner
	 */
	public function setUrl($url)
	{
		$this->url = $url;
		return $this;
	}

	/**
	 * Setter for title
	 * @param string $title 
	 * @return Banner
	 */
	public function setTitle($title)
	{
		$this->title = $title;
		return $this;
	}

	/**
	 * Setter for description
	 * @param string $description 
	 * @return Banner
	 */
	public function setDescription($description)
	{
		$this->description = $description;
		return $this;
	}

	/**
	 * Setter for status
	 * @param  $status 
	 * @return Banner
	 */
	public function setStatus($status)
	{
		$this->status = $status;
		return $this;
	}

	/**
	 * Setter for autobid
	 * @param  $autobid 
	 * @return Banner
	 */
	public function setAutobid($autobid)
	{
		$this->autobid = $autobid;
		return $this;
	}

	/**
	 * Setter for image
	 * @param string $image 
	 * @return Banner
	 */
	public function setImage($image)
	{
		$this->image = $image;
		return $this;
	}
}



/**
 * 
 */
class Condition 
{

	/**
	 * 
	 * @var integer
	 */
	public $conditionId;

	/**
	 * 
	 * @var integer
	 */
	public $bannerId;

	/**
	 * 
	 * @var double
	 */
	public $price;

	/**
	 * 
	 * @var boolean
	 */
	public $autobid;

	/**
	 * 
	 * @var string
	 */
	public $keywords;

	/**
	 * 
	 * @var string
	 */
	public $stopwords;

	/**
	 * 
	 * @var 
	 */
	public $status;

	/**
	 * 
	 * @var 
	 */
	public $moderationStatus;

	/**
	 * 
	 * @var integer
	 */
	public $position;

	/**
	 * 
	 * @var integer
	 */
	public $competitorsCount;

	/**
	 * 
	 * @var floatArray
	 */
	public $pricesByPositions;

	/**
	 * 
	 * @param integer $conditionId 
	 * @param integer $bannerId 
	 * @param double $price 
	 * @param boolean $autobid 
	 * @param string $keywords 
	 * @param string $stopwords 
	 * @param  $status 
	 * @param  $moderationStatus 
	 * @param integer $position 
	 * @param integer $competitorsCount 
	 * @param floatArray $pricesByPositions 
	 */
	public function __construct($conditionId = null, $bannerId = null, $price = null, $autobid = null, $keywords = null, $stopwords = null, $status = null, $moderationStatus = null, $position = null, $competitorsCount = null, $pricesByPositions = null)
	{
		$this->setConditionId($conditionId);
		$this->setBannerId($bannerId);
		$this->setPrice($price);
		$this->setAutobid($autobid);
		$this->setKeywords($keywords);
		$this->setStopwords($stopwords);
		$this->setStatus($status);
		$this->setModerationStatus($moderationStatus);
		$this->setPosition($position);
		$this->setCompetitorsCount($competitorsCount);
		$this->setPricesByPositions($pricesByPositions);
	}

	/**
	 * Возвращает namespace структуры
	 *
	 * @return string
	 */
	public function getNamespace() { return 'http://api-new.begun.ru/index.php'; }

	/**
	 * @return Condition
	 */
	public static function create() { return new self(); }

	/**
	 * Setter for conditionId
	 * @param integer $conditionId 
	 * @return Condition
	 */
	public function setConditionId($conditionId)
	{
		$this->conditionId = $conditionId;
		return $this;
	}

	/**
	 * Setter for bannerId
	 * @param integer $bannerId 
	 * @return Condition
	 */
	public function setBannerId($bannerId)
	{
		$this->bannerId = $bannerId;
		return $this;
	}

	/**
	 * Setter for price
	 * @param double $price 
	 * @return Condition
	 */
	public function setPrice($price)
	{
		$this->price = $price;
		return $this;
	}

	/**
	 * Setter for autobid
	 * @param boolean $autobid 
	 * @return Condition
	 */
	public function setAutobid($autobid)
	{
		$this->autobid = $autobid;
		return $this;
	}

	/**
	 * Setter for keywords
	 * @param string $keywords 
	 * @return Condition
	 */
	public function setKeywords($keywords)
	{
		$this->keywords = $keywords;
		return $this;
	}

	/**
	 * Setter for stopwords
	 * @param string $stopwords 
	 * @return Condition
	 */
	public function setStopwords($stopwords)
	{
		$this->stopwords = $stopwords;
		return $this;
	}

	/**
	 * Setter for status
	 * @param  $status 
	 * @return Condition
	 */
	public function setStatus($status)
	{
		$this->status = $status;
		return $this;
	}

	/**
	 * Setter for moderationStatus
	 * @param  $moderationStatus 
	 * @return Condition
	 */
	public function setModerationStatus($moderationStatus)
	{
		$this->moderationStatus = $moderationStatus;
		return $this;
	}

	/**
	 * Setter for position
	 * @param integer $position 
	 * @return Condition
	 */
	public function setPosition($position)
	{
		$this->position = $position;
		return $this;
	}

	/**
	 * Setter for competitorsCount
	 * @param integer $competitorsCount 
	 * @return Condition
	 */
	public function setCompetitorsCount($competitorsCount)
	{
		$this->competitorsCount = $competitorsCount;
		return $this;
	}

	/**
	 * Setter for pricesByPositions
	 * @param floatArray $pricesByPositions 
	 * @return Condition
	 */
	public function setPricesByPositions($pricesByPositions)
	{
		$this->pricesByPositions = $pricesByPositions;
		return $this;
	}
}



/**
 * 
 */
class ConditionRate 
{

	/**
	 * 
	 * @var integer
	 */
	public $conditionId;

	/**
	 * 
	 * @var integer
	 */
	public $position;

	/**
	 * 
	 * @var double
	 */
	public $price;

	/**
	 * 
	 * @var string
	 */
	public $keywords;

	/**
	 * 
	 * @param integer $conditionId 
	 * @param integer $position 
	 * @param double $price 
	 * @param string $keywords 
	 */
	public function __construct($conditionId = null, $position = null, $price = null, $keywords = null)
	{
		$this->setConditionId($conditionId);
		$this->setPosition($position);
		$this->setPrice($price);
		$this->setKeywords($keywords);
	}

	/**
	 * Возвращает namespace структуры
	 *
	 * @return string
	 */
	public function getNamespace() { return 'http://api-new.begun.ru/index.php'; }

	/**
	 * @return ConditionRate
	 */
	public static function create() { return new self(); }

	/**
	 * Setter for conditionId
	 * @param integer $conditionId 
	 * @return ConditionRate
	 */
	public function setConditionId($conditionId)
	{
		$this->conditionId = $conditionId;
		return $this;
	}

	/**
	 * Setter for position
	 * @param integer $position 
	 * @return ConditionRate
	 */
	public function setPosition($position)
	{
		$this->position = $position;
		return $this;
	}

	/**
	 * Setter for price
	 * @param double $price 
	 * @return ConditionRate
	 */
	public function setPrice($price)
	{
		$this->price = $price;
		return $this;
	}

	/**
	 * Setter for keywords
	 * @param string $keywords 
	 * @return ConditionRate
	 */
	public function setKeywords($keywords)
	{
		$this->keywords = $keywords;
		return $this;
	}
}



/**
 * 
 */
class StatsDetail 
{

	/**
	 * 
	 * @var double
	 */
	public $time;

	/**
	 * 
	 * @var string
	 */
	public $ip;

	/**
	 * 
	 * @var string
	 */
	public $url;

	/**
	 * 
	 * @var string
	 */
	public $keyword;

	/**
	 * 
	 * @var double
	 */
	public $bid;

	/**
	 * 
	 * @var integer
	 */
	public $position;

	/**
	 * 
	 * @var string
	 */
	public $padName;

	/**
	 * 
	 * @var integer
	 */
	public $padId;

	/**
	 * 
	 * @var integer
	 */
	public $adConditionId;

	/**
	 * 
	 * @var integer
	 */
	public $bannerId;

	/**
	 * 
	 * @param double $time 
	 * @param string $ip 
	 * @param string $url 
	 * @param string $keyword 
	 * @param double $bid 
	 * @param integer $position 
	 * @param string $padName 
	 * @param integer $padId 
	 * @param integer $adConditionId 
	 * @param integer $bannerId 
	 */
	public function __construct($time = null, $ip = null, $url = null, $keyword = null, $bid = null, $position = null, $padName = null, $padId = null, $adConditionId = null, $bannerId = null)
	{
		$this->setTime($time);
		$this->setIp($ip);
		$this->setUrl($url);
		$this->setKeyword($keyword);
		$this->setBid($bid);
		$this->setPosition($position);
		$this->setPadName($padName);
		$this->setPadId($padId);
		$this->setAdConditionId($adConditionId);
		$this->setBannerId($bannerId);
	}

	/**
	 * Возвращает namespace структуры
	 *
	 * @return string
	 */
	public function getNamespace() { return 'http://api-new.begun.ru/index.php'; }

	/**
	 * @return StatsDetail
	 */
	public static function create() { return new self(); }

	/**
	 * Setter for time
	 * @param double $time 
	 * @return StatsDetail
	 */
	public function setTime($time)
	{
		$this->time = $time;
		return $this;
	}

	/**
	 * Setter for ip
	 * @param string $ip 
	 * @return StatsDetail
	 */
	public function setIp($ip)
	{
		$this->ip = $ip;
		return $this;
	}

	/**
	 * Setter for url
	 * @param string $url 
	 * @return StatsDetail
	 */
	public function setUrl($url)
	{
		$this->url = $url;
		return $this;
	}

	/**
	 * Setter for keyword
	 * @param string $keyword 
	 * @return StatsDetail
	 */
	public function setKeyword($keyword)
	{
		$this->keyword = $keyword;
		return $this;
	}

	/**
	 * Setter for bid
	 * @param double $bid 
	 * @return StatsDetail
	 */
	public function setBid($bid)
	{
		$this->bid = $bid;
		return $this;
	}

	/**
	 * Setter for position
	 * @param integer $position 
	 * @return StatsDetail
	 */
	public function setPosition($position)
	{
		$this->position = $position;
		return $this;
	}

	/**
	 * Setter for padName
	 * @param string $padName 
	 * @return StatsDetail
	 */
	public function setPadName($padName)
	{
		$this->padName = $padName;
		return $this;
	}

	/**
	 * Setter for padId
	 * @param integer $padId 
	 * @return StatsDetail
	 */
	public function setPadId($padId)
	{
		$this->padId = $padId;
		return $this;
	}

	/**
	 * Setter for adConditionId
	 * @param integer $adConditionId 
	 * @return StatsDetail
	 */
	public function setAdConditionId($adConditionId)
	{
		$this->adConditionId = $adConditionId;
		return $this;
	}

	/**
	 * Setter for bannerId
	 * @param integer $bannerId 
	 * @return StatsDetail
	 */
	public function setBannerId($bannerId)
	{
		$this->bannerId = $bannerId;
		return $this;
	}
}



/**
 * 
 */
class StatsCommon 
{

	/**
	 * 
	 * @var double
	 */
	public $time;

	/**
	 * 
	 * @var string
	 */
	public $keyword;

	/**
	 * 
	 * @var string
	 */
	public $url;

	/**
	 * 
	 * @var double
	 */
	public $bid;

	/**
	 * 
	 * @var double
	 */
	public $exps;

	/**
	 * 
	 * @var integer
	 */
	public $position;

	/**
	 * 
	 * @var integer
	 */
	public $padsCount;

	/**
	 * 
	 * @var integer
	 */
	public $clicksCount;

	/**
	 * 
	 * @var integer
	 */
	public $adConditionId;

	/**
	 * 
	 * @var integer
	 */
	public $bannerId;

	/**
	 * 
	 * @param double $time 
	 * @param string $keyword 
	 * @param string $url 
	 * @param double $bid 
	 * @param double $exps 
	 * @param integer $position 
	 * @param integer $padsCount 
	 * @param integer $clicksCount 
	 * @param integer $adConditionId 
	 * @param integer $bannerId 
	 */
	public function __construct($time = null, $keyword = null, $url = null, $bid = null, $exps = null, $position = null, $padsCount = null, $clicksCount = null, $adConditionId = null, $bannerId = null)
	{
		$this->setTime($time);
		$this->setKeyword($keyword);
		$this->setUrl($url);
		$this->setBid($bid);
		$this->setExps($exps);
		$this->setPosition($position);
		$this->setPadsCount($padsCount);
		$this->setClicksCount($clicksCount);
		$this->setAdConditionId($adConditionId);
		$this->setBannerId($bannerId);
	}

	/**
	 * Возвращает namespace структуры
	 *
	 * @return string
	 */
	public function getNamespace() { return 'http://api-new.begun.ru/index.php'; }

	/**
	 * @return StatsCommon
	 */
	public static function create() { return new self(); }

	/**
	 * Setter for time
	 * @param double $time 
	 * @return StatsCommon
	 */
	public function setTime($time)
	{
		$this->time = $time;
		return $this;
	}

	/**
	 * Setter for keyword
	 * @param string $keyword 
	 * @return StatsCommon
	 */
	public function setKeyword($keyword)
	{
		$this->keyword = $keyword;
		return $this;
	}

	/**
	 * Setter for url
	 * @param string $url 
	 * @return StatsCommon
	 */
	public function setUrl($url)
	{
		$this->url = $url;
		return $this;
	}

	/**
	 * Setter for bid
	 * @param double $bid 
	 * @return StatsCommon
	 */
	public function setBid($bid)
	{
		$this->bid = $bid;
		return $this;
	}

	/**
	 * Setter for exps
	 * @param double $exps 
	 * @return StatsCommon
	 */
	public function setExps($exps)
	{
		$this->exps = $exps;
		return $this;
	}

	/**
	 * Setter for position
	 * @param integer $position 
	 * @return StatsCommon
	 */
	public function setPosition($position)
	{
		$this->position = $position;
		return $this;
	}

	/**
	 * Setter for padsCount
	 * @param integer $padsCount 
	 * @return StatsCommon
	 */
	public function setPadsCount($padsCount)
	{
		$this->padsCount = $padsCount;
		return $this;
	}

	/**
	 * Setter for clicksCount
	 * @param integer $clicksCount 
	 * @return StatsCommon
	 */
	public function setClicksCount($clicksCount)
	{
		$this->clicksCount = $clicksCount;
		return $this;
	}

	/**
	 * Setter for adConditionId
	 * @param integer $adConditionId 
	 * @return StatsCommon
	 */
	public function setAdConditionId($adConditionId)
	{
		$this->adConditionId = $adConditionId;
		return $this;
	}

	/**
	 * Setter for bannerId
	 * @param integer $bannerId 
	 * @return StatsCommon
	 */
	public function setBannerId($bannerId)
	{
		$this->bannerId = $bannerId;
		return $this;
	}
}



/**
 * 
 */
class StatsByDays 
{

	/**
	 * 
	 * @var double
	 */
	public $time;

	/**
	 * 
	 * @var double
	 */
	public $exps;

	/**
	 * 
	 * @var double
	 */
	public $minBid;

	/**
	 * 
	 * @var double
	 */
	public $maxBid;

	/**
	 * 
	 * @var integer
	 */
	public $minPosition;

	/**
	 * 
	 * @var integer
	 */
	public $maxPosition;

	/**
	 * 
	 * @var integer
	 */
	public $padsCount;

	/**
	 * 
	 * @var integer
	 */
	public $clicksCount;

	/**
	 * 
	 * @var integer
	 */
	public $keywordsCount;

	/**
	 * 
	 * @param double $time 
	 * @param double $exps 
	 * @param double $minBid 
	 * @param double $maxBid 
	 * @param integer $minPosition 
	 * @param integer $maxPosition 
	 * @param integer $padsCount 
	 * @param integer $clicksCount 
	 * @param integer $keywordsCount 
	 */
	public function __construct($time = null, $exps = null, $minBid = null, $maxBid = null, $minPosition = null, $maxPosition = null, $padsCount = null, $clicksCount = null, $keywordsCount = null)
	{
		$this->setTime($time);
		$this->setExps($exps);
		$this->setMinBid($minBid);
		$this->setMaxBid($maxBid);
		$this->setMinPosition($minPosition);
		$this->setMaxPosition($maxPosition);
		$this->setPadsCount($padsCount);
		$this->setClicksCount($clicksCount);
		$this->setKeywordsCount($keywordsCount);
	}

	/**
	 * Возвращает namespace структуры
	 *
	 * @return string
	 */
	public function getNamespace() { return 'http://api-new.begun.ru/index.php'; }

	/**
	 * @return StatsByDays
	 */
	public static function create() { return new self(); }

	/**
	 * Setter for time
	 * @param double $time 
	 * @return StatsByDays
	 */
	public function setTime($time)
	{
		$this->time = $time;
		return $this;
	}

	/**
	 * Setter for exps
	 * @param double $exps 
	 * @return StatsByDays
	 */
	public function setExps($exps)
	{
		$this->exps = $exps;
		return $this;
	}

	/**
	 * Setter for minBid
	 * @param double $minBid 
	 * @return StatsByDays
	 */
	public function setMinBid($minBid)
	{
		$this->minBid = $minBid;
		return $this;
	}

	/**
	 * Setter for maxBid
	 * @param double $maxBid 
	 * @return StatsByDays
	 */
	public function setMaxBid($maxBid)
	{
		$this->maxBid = $maxBid;
		return $this;
	}

	/**
	 * Setter for minPosition
	 * @param integer $minPosition 
	 * @return StatsByDays
	 */
	public function setMinPosition($minPosition)
	{
		$this->minPosition = $minPosition;
		return $this;
	}

	/**
	 * Setter for maxPosition
	 * @param integer $maxPosition 
	 * @return StatsByDays
	 */
	public function setMaxPosition($maxPosition)
	{
		$this->maxPosition = $maxPosition;
		return $this;
	}

	/**
	 * Setter for padsCount
	 * @param integer $padsCount 
	 * @return StatsByDays
	 */
	public function setPadsCount($padsCount)
	{
		$this->padsCount = $padsCount;
		return $this;
	}

	/**
	 * Setter for clicksCount
	 * @param integer $clicksCount 
	 * @return StatsByDays
	 */
	public function setClicksCount($clicksCount)
	{
		$this->clicksCount = $clicksCount;
		return $this;
	}

	/**
	 * Setter for keywordsCount
	 * @param integer $keywordsCount 
	 * @return StatsByDays
	 */
	public function setKeywordsCount($keywordsCount)
	{
		$this->keywordsCount = $keywordsCount;
		return $this;
	}
}



/**
 * 
 */
class StatsByPads 
{

	/**
	 * 
	 * @var double
	 */
	public $time;

	/**
	 * 
	 * @var string
	 */
	public $padName;

	/**
	 * 
	 * @var integer
	 */
	public $padId;

	/**
	 * 
	 * @var integer
	 */
	public $position;

	/**
	 * 
	 * @var integer
	 */
	public $clicksCount;

	/**
	 * 
	 * @var double
	 */
	public $exps;

	/**
	 * 
	 * @param double $time 
	 * @param string $padName 
	 * @param integer $padId 
	 * @param integer $position 
	 * @param integer $clicksCount 
	 * @param double $exps 
	 */
	public function __construct($time = null, $padName = null, $padId = null, $position = null, $clicksCount = null, $exps = null)
	{
		$this->setTime($time);
		$this->setPadName($padName);
		$this->setPadId($padId);
		$this->setPosition($position);
		$this->setClicksCount($clicksCount);
		$this->setExps($exps);
	}

	/**
	 * Возвращает namespace структуры
	 *
	 * @return string
	 */
	public function getNamespace() { return 'http://api-new.begun.ru/index.php'; }

	/**
	 * @return StatsByPads
	 */
	public static function create() { return new self(); }

	/**
	 * Setter for time
	 * @param double $time 
	 * @return StatsByPads
	 */
	public function setTime($time)
	{
		$this->time = $time;
		return $this;
	}

	/**
	 * Setter for padName
	 * @param string $padName 
	 * @return StatsByPads
	 */
	public function setPadName($padName)
	{
		$this->padName = $padName;
		return $this;
	}

	/**
	 * Setter for padId
	 * @param integer $padId 
	 * @return StatsByPads
	 */
	public function setPadId($padId)
	{
		$this->padId = $padId;
		return $this;
	}

	/**
	 * Setter for position
	 * @param integer $position 
	 * @return StatsByPads
	 */
	public function setPosition($position)
	{
		$this->position = $position;
		return $this;
	}

	/**
	 * Setter for clicksCount
	 * @param integer $clicksCount 
	 * @return StatsByPads
	 */
	public function setClicksCount($clicksCount)
	{
		$this->clicksCount = $clicksCount;
		return $this;
	}

	/**
	 * Setter for exps
	 * @param double $exps 
	 * @return StatsByPads
	 */
	public function setExps($exps)
	{
		$this->exps = $exps;
		return $this;
	}
}



/**
 * 
 */
class StatsKeywords 
{

	/**
	 * 
	 * @var string
	 */
	public $bannerName;

	/**
	 * 
	 * @var string
	 */
	public $bannerUrl;

	/**
	 * 
	 * @var string
	 */
	public $keyword;

	/**
	 * 
	 * @var double
	 */
	public $exps;

	/**
	 * 
	 * @var double
	 */
	public $minBid;

	/**
	 * 
	 * @var double
	 */
	public $maxBid;

	/**
	 * 
	 * @var integer
	 */
	public $minPosition;

	/**
	 * 
	 * @var integer
	 */
	public $maxPosition;

	/**
	 * 
	 * @var integer
	 */
	public $clicksCount;

	/**
	 * 
	 * @var integer
	 */
	public $adConditionId;

	/**
	 * 
	 * @var integer
	 */
	public $bannerId;

	/**
	 * 
	 * @param string $bannerName 
	 * @param string $bannerUrl 
	 * @param string $keyword 
	 * @param double $exps 
	 * @param double $minBid 
	 * @param double $maxBid 
	 * @param integer $minPosition 
	 * @param integer $maxPosition 
	 * @param integer $clicksCount 
	 * @param integer $adConditionId 
	 * @param integer $bannerId 
	 */
	public function __construct($bannerName = null, $bannerUrl = null, $keyword = null, $exps = null, $minBid = null, $maxBid = null, $minPosition = null, $maxPosition = null, $clicksCount = null, $adConditionId = null, $bannerId = null)
	{
		$this->setBannerName($bannerName);
		$this->setBannerUrl($bannerUrl);
		$this->setKeyword($keyword);
		$this->setExps($exps);
		$this->setMinBid($minBid);
		$this->setMaxBid($maxBid);
		$this->setMinPosition($minPosition);
		$this->setMaxPosition($maxPosition);
		$this->setClicksCount($clicksCount);
		$this->setAdConditionId($adConditionId);
		$this->setBannerId($bannerId);
	}

	/**
	 * Возвращает namespace структуры
	 *
	 * @return string
	 */
	public function getNamespace() { return 'http://api-new.begun.ru/index.php'; }

	/**
	 * @return StatsKeywords
	 */
	public static function create() { return new self(); }

	/**
	 * Setter for bannerName
	 * @param string $bannerName 
	 * @return StatsKeywords
	 */
	public function setBannerName($bannerName)
	{
		$this->bannerName = $bannerName;
		return $this;
	}

	/**
	 * Setter for bannerUrl
	 * @param string $bannerUrl 
	 * @return StatsKeywords
	 */
	public function setBannerUrl($bannerUrl)
	{
		$this->bannerUrl = $bannerUrl;
		return $this;
	}

	/**
	 * Setter for keyword
	 * @param string $keyword 
	 * @return StatsKeywords
	 */
	public function setKeyword($keyword)
	{
		$this->keyword = $keyword;
		return $this;
	}

	/**
	 * Setter for exps
	 * @param double $exps 
	 * @return StatsKeywords
	 */
	public function setExps($exps)
	{
		$this->exps = $exps;
		return $this;
	}

	/**
	 * Setter for minBid
	 * @param double $minBid 
	 * @return StatsKeywords
	 */
	public function setMinBid($minBid)
	{
		$this->minBid = $minBid;
		return $this;
	}

	/**
	 * Setter for maxBid
	 * @param double $maxBid 
	 * @return StatsKeywords
	 */
	public function setMaxBid($maxBid)
	{
		$this->maxBid = $maxBid;
		return $this;
	}

	/**
	 * Setter for minPosition
	 * @param integer $minPosition 
	 * @return StatsKeywords
	 */
	public function setMinPosition($minPosition)
	{
		$this->minPosition = $minPosition;
		return $this;
	}

	/**
	 * Setter for maxPosition
	 * @param integer $maxPosition 
	 * @return StatsKeywords
	 */
	public function setMaxPosition($maxPosition)
	{
		$this->maxPosition = $maxPosition;
		return $this;
	}

	/**
	 * Setter for clicksCount
	 * @param integer $clicksCount 
	 * @return StatsKeywords
	 */
	public function setClicksCount($clicksCount)
	{
		$this->clicksCount = $clicksCount;
		return $this;
	}

	/**
	 * Setter for adConditionId
	 * @param integer $adConditionId 
	 * @return StatsKeywords
	 */
	public function setAdConditionId($adConditionId)
	{
		$this->adConditionId = $adConditionId;
		return $this;
	}

	/**
	 * Setter for bannerId
	 * @param integer $bannerId 
	 * @return StatsKeywords
	 */
	public function setBannerId($bannerId)
	{
		$this->bannerId = $bannerId;
		return $this;
	}
}



/**
 * 
 */
class Region 
{

	/**
	 * 
	 * @var integer
	 */
	public $regionId;

	/**
	 * 
	 * @var string
	 */
	public $name;

	/**
	 * 
	 * @var integer
	 */
	public $parentId;

	/**
	 * 
	 * @param integer $regionId 
	 * @param string $name 
	 * @param integer $parentId 
	 */
	public function __construct($regionId = null, $name = null, $parentId = null)
	{
		$this->setRegionId($regionId);
		$this->setName($name);
		$this->setParentId($parentId);
	}

	/**
	 * Возвращает namespace структуры
	 *
	 * @return string
	 */
	public function getNamespace() { return 'http://api-new.begun.ru/index.php'; }

	/**
	 * @return Region
	 */
	public static function create() { return new self(); }

	/**
	 * Setter for regionId
	 * @param integer $regionId 
	 * @return Region
	 */
	public function setRegionId($regionId)
	{
		$this->regionId = $regionId;
		return $this;
	}

	/**
	 * Setter for name
	 * @param string $name 
	 * @return Region
	 */
	public function setName($name)
	{
		$this->name = $name;
		return $this;
	}

	/**
	 * Setter for parentId
	 * @param integer $parentId 
	 * @return Region
	 */
	public function setParentId($parentId)
	{
		$this->parentId = $parentId;
		return $this;
	}
}



/**
 * 
 */
class GeoProfile 
{

	/**
	 * 
	 * @var integer
	 */
	public $geoProfileId;

	/**
	 * 
	 * @var string
	 */
	public $name;

	/**
	 * 
	 * @var RegionArray
	 */
	public $regions;

	/**
	 * 
	 * @param integer $geoProfileId 
	 * @param string $name 
	 * @param RegionArray $regions 
	 */
	public function __construct($geoProfileId = null, $name = null, $regions = null)
	{
		$this->setGeoProfileId($geoProfileId);
		$this->setName($name);
		$this->setRegions($regions);
	}

	/**
	 * Возвращает namespace структуры
	 *
	 * @return string
	 */
	public function getNamespace() { return 'http://api-new.begun.ru/index.php'; }

	/**
	 * @return GeoProfile
	 */
	public static function create() { return new self(); }

	/**
	 * Setter for geoProfileId
	 * @param integer $geoProfileId 
	 * @return GeoProfile
	 */
	public function setGeoProfileId($geoProfileId)
	{
		$this->geoProfileId = $geoProfileId;
		return $this;
	}

	/**
	 * Setter for name
	 * @param string $name 
	 * @return GeoProfile
	 */
	public function setName($name)
	{
		$this->name = $name;
		return $this;
	}

	/**
	 * Setter for regions
	 * @param RegionArray $regions 
	 * @return GeoProfile
	 */
	public function setRegions($regions)
	{
		$this->regions = $regions;
		return $this;
	}
}



/**
 * 
 */
class TrafficType 
{

	/**
	 * 
	 * @var integer
	 */
	public $trafficTypeId;

	/**
	 * 
	 * @var string
	 */
	public $name;

	/**
	 * 
	 * @var string
	 */
	public $descr;

	/**
	 * 
	 * @param integer $trafficTypeId 
	 * @param string $name 
	 * @param string $descr 
	 */
	public function __construct($trafficTypeId = null, $name = null, $descr = null)
	{
		$this->setTrafficTypeId($trafficTypeId);
		$this->setName($name);
		$this->setDescr($descr);
	}

	/**
	 * Возвращает namespace структуры
	 *
	 * @return string
	 */
	public function getNamespace() { return 'http://api-new.begun.ru/index.php'; }

	/**
	 * @return TrafficType
	 */
	public static function create() { return new self(); }

	/**
	 * Setter for trafficTypeId
	 * @param integer $trafficTypeId 
	 * @return TrafficType
	 */
	public function setTrafficTypeId($trafficTypeId)
	{
		$this->trafficTypeId = $trafficTypeId;
		return $this;
	}

	/**
	 * Setter for name
	 * @param string $name 
	 * @return TrafficType
	 */
	public function setName($name)
	{
		$this->name = $name;
		return $this;
	}

	/**
	 * Setter for descr
	 * @param string $descr 
	 * @return TrafficType
	 */
	public function setDescr($descr)
	{
		$this->descr = $descr;
		return $this;
	}
}



/**
 * 
 */
class PositionPrice 
{

	/**
	 * 
	 * @var string
	 */
	public $keywords;

	/**
	 * 
	 * @var integer
	 */
	public $position;

	/**
	 * 
	 * @var double
	 */
	public $price;

	/**
	 * 
	 * @param string $keywords 
	 * @param integer $position 
	 * @param double $price 
	 */
	public function __construct($keywords = null, $position = null, $price = null)
	{
		$this->setKeywords($keywords);
		$this->setPosition($position);
		$this->setPrice($price);
	}

	/**
	 * Возвращает namespace структуры
	 *
	 * @return string
	 */
	public function getNamespace() { return 'http://api-new.begun.ru/index.php'; }

	/**
	 * @return PositionPrice
	 */
	public static function create() { return new self(); }

	/**
	 * Setter for keywords
	 * @param string $keywords 
	 * @return PositionPrice
	 */
	public function setKeywords($keywords)
	{
		$this->keywords = $keywords;
		return $this;
	}

	/**
	 * Setter for position
	 * @param integer $position 
	 * @return PositionPrice
	 */
	public function setPosition($position)
	{
		$this->position = $position;
		return $this;
	}

	/**
	 * Setter for price
	 * @param double $price 
	 * @return PositionPrice
	 */
	public function setPrice($price)
	{
		$this->price = $price;
		return $this;
	}
}



/**
 * 
 */
class UserProfile 
{

	/**
	 * 
	 * @var string
	 */
	public $email;

	/**
	 * 
	 * @var string
	 */
	public $name;

	/**
	 * 
	 * @var string
	 */
	public $company;

	/**
	 * 
	 * @var string
	 */
	public $phone;

	/**
	 * 
	 * @var string
	 */
	public $city;

	/**
	 * 
	 * @var 
	 */
	public $sex;

	/**
	 * 
	 * @var double
	 */
	public $birthday;

	/**
	 * 
	 * @param string $email 
	 * @param string $name 
	 * @param string $company 
	 * @param string $phone 
	 * @param string $city 
	 * @param  $sex 
	 * @param double $birthday 
	 */
	public function __construct($email = null, $name = null, $company = null, $phone = null, $city = null, $sex = null, $birthday = null)
	{
		$this->setEmail($email);
		$this->setName($name);
		$this->setCompany($company);
		$this->setPhone($phone);
		$this->setCity($city);
		$this->setSex($sex);
		$this->setBirthday($birthday);
	}

	/**
	 * Возвращает namespace структуры
	 *
	 * @return string
	 */
	public function getNamespace() { return 'http://api-new.begun.ru/index.php'; }

	/**
	 * @return UserProfile
	 */
	public static function create() { return new self(); }

	/**
	 * Setter for email
	 * @param string $email 
	 * @return UserProfile
	 */
	public function setEmail($email)
	{
		$this->email = $email;
		return $this;
	}

	/**
	 * Setter for name
	 * @param string $name 
	 * @return UserProfile
	 */
	public function setName($name)
	{
		$this->name = $name;
		return $this;
	}

	/**
	 * Setter for company
	 * @param string $company 
	 * @return UserProfile
	 */
	public function setCompany($company)
	{
		$this->company = $company;
		return $this;
	}

	/**
	 * Setter for phone
	 * @param string $phone 
	 * @return UserProfile
	 */
	public function setPhone($phone)
	{
		$this->phone = $phone;
		return $this;
	}

	/**
	 * Setter for city
	 * @param string $city 
	 * @return UserProfile
	 */
	public function setCity($city)
	{
		$this->city = $city;
		return $this;
	}

	/**
	 * Setter for sex
	 * @param  $sex 
	 * @return UserProfile
	 */
	public function setSex($sex)
	{
		$this->sex = $sex;
		return $this;
	}

	/**
	 * Setter for birthday
	 * @param double $birthday 
	 * @return UserProfile
	 */
	public function setBirthday($birthday)
	{
		$this->birthday = $birthday;
		return $this;
	}
}



/**
 * 
 */
class AccountInfo 
{

	/**
	 * 
	 * @var integer
	 */
	public $userId;

	/**
	 * 
	 * @var double
	 */
	public $ballance;

	/**
	 * 
	 * @var double
	 */
	public $ballanceIn;

	/**
	 * 
	 * @var double
	 */
	public $ballanceOut;

	/**
	 * 
	 * @param integer $userId 
	 * @param double $ballance 
	 * @param double $ballanceIn 
	 * @param double $ballanceOut 
	 */
	public function __construct($userId = null, $ballance = null, $ballanceIn = null, $ballanceOut = null)
	{
		$this->setUserId($userId);
		$this->setBallance($ballance);
		$this->setBallanceIn($ballanceIn);
		$this->setBallanceOut($ballanceOut);
	}

	/**
	 * Возвращает namespace структуры
	 *
	 * @return string
	 */
	public function getNamespace() { return 'http://api-new.begun.ru/index.php'; }

	/**
	 * @return AccountInfo
	 */
	public static function create() { return new self(); }

	/**
	 * Setter for userId
	 * @param integer $userId 
	 * @return AccountInfo
	 */
	public function setUserId($userId)
	{
		$this->userId = $userId;
		return $this;
	}

	/**
	 * Setter for ballance
	 * @param double $ballance 
	 * @return AccountInfo
	 */
	public function setBallance($ballance)
	{
		$this->ballance = $ballance;
		return $this;
	}

	/**
	 * Setter for ballanceIn
	 * @param double $ballanceIn 
	 * @return AccountInfo
	 */
	public function setBallanceIn($ballanceIn)
	{
		$this->ballanceIn = $ballanceIn;
		return $this;
	}

	/**
	 * Setter for ballanceOut
	 * @param double $ballanceOut 
	 * @return AccountInfo
	 */
	public function setBallanceOut($ballanceOut)
	{
		$this->ballanceOut = $ballanceOut;
		return $this;
	}
}


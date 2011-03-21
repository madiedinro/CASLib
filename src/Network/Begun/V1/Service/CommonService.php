<?php

namespace AdvancedContextLib\Network\Begun\V1\Service;

use AdvancedContextLib\Network\Begun\V1\Lib\SoapClient;

/**
 * :classDescription
 */
class CommonService extends SoapClient
{

/**
 * :operationDescription
 * @return xsd:boolean
 */
public function delCampaign($campaignId)
{
	
    $result = $this->__soapCall("delCampaign", array($campaignId));
    return $result;
}


/**
 * :operationDescription
 * @return tns:Campaign
 */
public function getCampaign($campaignId)
{
	
    $result = $this->__soapCall("getCampaign", array($campaignId));
    return $result;
}


/**
 * :operationDescription
 * @return tns:Campaign
 */
public function addCampaign($name, $type)
{
	
    $result = $this->__soapCall("addCampaign", array($name, $type));
    return $result;
}


/**
 * :operationDescription
 * @return tns:Campaign
 */
public function updCampaign($campaign)
{
	
    $result = $this->__soapCall("updCampaign", array($campaign));
    return $result;
}


/**
 * :operationDescription
 * @return tns:CampaignArray
 */
public function getCampaignsList($campaignIds)
{
	
    $result = $this->__soapCall("getCampaignsList", array($campaignIds));
    return $result;
}


/**
 * :operationDescription
 * @return tns:CampaignTarget
 */
public function getCampaignTarget($campaignId)
{
	
    $result = $this->__soapCall("getCampaignTarget", array($campaignId));
    return $result;
}


/**
 * :operationDescription
 * @return tns:Campaign
 */
public function updCampaignTarget($campaignTarget)
{
	
    $result = $this->__soapCall("updCampaignTarget", array($campaignTarget));
    return $result;
}


/**
 * :operationDescription
 * @return tns:intArray
 */
public function getCampaignPadTarget($campaignId)
{
	
    $result = $this->__soapCall("getCampaignPadTarget", array($campaignId));
    return $result;
}


/**
 * :operationDescription
 * @return xsd:boolean
 */
public function addCampaignPadTarget($campaignId, $padId)
{
	
    $result = $this->__soapCall("addCampaignPadTarget", array($campaignId, $padId));
    return $result;
}


/**
 * :operationDescription
 * @return xsd:boolean
 */
public function delCampaignPadTarget($campaignId, $padId)
{
	
    $result = $this->__soapCall("delCampaignPadTarget", array($campaignId, $padId));
    return $result;
}


/**
 * :operationDescription
 * @return xsd:boolean
 */
public function delBanner($bannerId)
{
	
    $result = $this->__soapCall("delBanner", array($bannerId));
    return $result;
}


/**
 * :operationDescription
 * @return tns:Banner
 */
public function getBanner($bannerId)
{
	
    $result = $this->__soapCall("getBanner", array($bannerId));
    return $result;
}


/**
 * :operationDescription
 * @return tns:Banner
 */
public function addBanner($banner)
{
	
    $result = $this->__soapCall("addBanner", array($banner));
    return $result;
}


/**
 * :operationDescription
 * @return tns:Banner
 */
public function updBanner($banner)
{
	
    $result = $this->__soapCall("updBanner", array($banner));
    return $result;
}


/**
 * :operationDescription
 * @return tns:BannerArray
 */
public function getBannersList($campaignId, $bannersIds, $withDeleted)
{
	
    $result = $this->__soapCall("getBannersList", array($campaignId, $bannersIds, $withDeleted));
    return $result;
}


/**
 * :operationDescription
 * @return xsd:boolean
 */
public function delCondition($conditionId)
{
	
    $result = $this->__soapCall("delCondition", array($conditionId));
    return $result;
}


/**
 * :operationDescription
 * @return tns:Condition
 */
public function getCondition($conditionId)
{
	
    $result = $this->__soapCall("getCondition", array($conditionId));
    return $result;
}


/**
 * :operationDescription
 * @return tns:Condition
 */
public function addCondition($condition)
{
	
    $result = $this->__soapCall("addCondition", array($condition));
    return $result;
}


/**
 * :operationDescription
 * @return tns:Condition
 */
public function updCondition($condition)
{
	
    $result = $this->__soapCall("updCondition", array($condition));
    return $result;
}


/**
 * :operationDescription
 * @return tns:ConditionArray
 */
public function updConditionsPrices($newPricesList)
{
	
    $result = $this->__soapCall("updConditionsPrices", array($newPricesList));
    return $result;
}


/**
 * :operationDescription
 * @return tns:ConditionArray
 */
public function getConditionsList($bannerId, $conditionsIds)
{
	
    $result = $this->__soapCall("getConditionsList", array($bannerId, $conditionsIds));
    return $result;
}


/**
 * :operationDescription
 * @return tns:ConditionArray
 */
public function getConditions($bannersIds, $conditionsIds, $getPositionInfo)
{
	
    $result = $this->__soapCall("getConditions", array($bannersIds, $conditionsIds, $getPositionInfo));
    return $result;
}


/**
 * :operationDescription
 * @return tns:ConditionRate
 */
public function getConditionRate($conditionId)
{
	
    $result = $this->__soapCall("getConditionRate", array($conditionId));
    return $result;
}


/**
 * :operationDescription
 * @return tns:ConditionArray
 */
public function toggleConditions($conditionsIds, $suspend)
{
	
    $result = $this->__soapCall("toggleConditions", array($conditionsIds, $suspend));
    return $result;
}


/**
 * :operationDescription
 * @return tns:StatsDetailArray
 */
public function getStatsDetail($campaignId, $startTime, $endTime, $filter)
{
	
    $result = $this->__soapCall("getStatsDetail", array($campaignId, $startTime, $endTime, $filter));
    return $result;
}


/**
 * :operationDescription
 * @return tns:StatsCommonArray
 */
public function getStatsCommon($campaignId, $startTime, $endTime, $filter)
{
	
    $result = $this->__soapCall("getStatsCommon", array($campaignId, $startTime, $endTime, $filter));
    return $result;
}


/**
 * :operationDescription
 * @return tns:StatsByDaysArray
 */
public function getStatsByDays($campaignId, $startTime, $endTime, $filter)
{
	
    $result = $this->__soapCall("getStatsByDays", array($campaignId, $startTime, $endTime, $filter));
    return $result;
}


/**
 * :operationDescription
 * @return tns:StatsByPadsArray
 */
public function getStatsByPads($campaignId, $startTime, $endTime, $filter)
{
	
    $result = $this->__soapCall("getStatsByPads", array($campaignId, $startTime, $endTime, $filter));
    return $result;
}


/**
 * :operationDescription
 * @return tns:StatsKeywordsArray
 */
public function getStatsKeywords($campaignId, $startTime, $endTime, $filter)
{
	
    $result = $this->__soapCall("getStatsKeywords", array($campaignId, $startTime, $endTime, $filter));
    return $result;
}


/**
 * :operationDescription
 * @return tns:GeoProfile
 */
public function getGeoProfile($geoProfileId)
{
	
    $result = $this->__soapCall("getGeoProfile", array($geoProfileId));
    return $result;
}


/**
 * :operationDescription
 * @return tns:GeoProfile
 */
public function addGeoProfile($name, $regionIds)
{
	
    $result = $this->__soapCall("addGeoProfile", array($name, $regionIds));
    return $result;
}


/**
 * :operationDescription
 * @return tns:GeoProfile
 */
public function updGeoProfile($geoProfile)
{
	
    $result = $this->__soapCall("updGeoProfile", array($geoProfile));
    return $result;
}


/**
 * :operationDescription
 * @return xsd:boolean
 */
public function delGeoProfile($geoProfileId)
{
	
    $result = $this->__soapCall("delGeoProfile", array($geoProfileId));
    return $result;
}


/**
 * :operationDescription
 * @return tns:GeoProfileArray
 */
public function getGeoProfilesList()
{
	
    $result = $this->__soapCall("getGeoProfilesList", array());
    return $result;
}


/**
 * :operationDescription
 * @return tns:RegionArray
 */
public function getRegions()
{
	
    $result = $this->__soapCall("getRegions", array());
    return $result;
}


/**
 * :operationDescription
 * @return tns:RegionArray
 */
public function getGeoProfileRegions($geoProfileId)
{
	
    $result = $this->__soapCall("getGeoProfileRegions", array($geoProfileId));
    return $result;
}


/**
 * :operationDescription
 * @return tns:TrafficTypeArray
 */
public function getTrafficTypes()
{
	
    $result = $this->__soapCall("getTrafficTypes", array());
    return $result;
}


/**
 * :operationDescription
 * @return tns:PositionPriceArray
 */
public function getPositionPrices($keywords, $regionId, $trafficTypeId, $limit, $geoProfileId)
{
	
    $result = $this->__soapCall("getPositionPrices", array($keywords, $regionId, $trafficTypeId, $limit, $geoProfileId));
    return $result;
}


/**
 * :operationDescription
 * @return xsd:boolean
 */
public function addBannerImage($banner)
{
	
    $result = $this->__soapCall("addBannerImage", array($banner));
    return $result;
}


/**
 * :operationDescription
 * @return xsd:boolean
 */
public function delBannerImage($banner)
{
	
    $result = $this->__soapCall("delBannerImage", array($banner));
    return $result;
}


/**
 * :operationDescription
 * @return xsd:boolean
 */
public function updBannerImage($banner)
{
	
    $result = $this->__soapCall("updBannerImage", array($banner));
    return $result;
}


/**
 * :operationDescription
 * @return xsd:boolean
 */
public function auth($login, $password, $clientLogin)
{
	
    $result = $this->__soapCall("auth", array($login, $password, $clientLogin));
    return $result;
}


/**
 * :operationDescription
 * @return tns:UserProfile
 */
public function getProfile()
{
	
    $result = $this->__soapCall("getProfile", array());
    return $result;
}


/**
 * :operationDescription
 * @return tns:AccountInfo
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

protected $wsdl = 'https://api-new.begun.ru/?definition=AdvertiserService';

public function __construct($options) {
	$options["classmap"] = self::$classmap;
	parent::__construct($options);
}


}
/**
 * :classDescription
 */
class CampaignLimit
{
/*
 * @var int
 */
public $clicksDay;
/*
 * @var int
 */
public $clicksTotal;
/*
 * @var float
 */
public $budgetDay;
/*
 * @var float
 */
public $budgetTotal;
/*
 * @var boolean
 */
public $budgetDistribution;



public function __construct($clicksDay = null, $clicksTotal = null, $budgetDay = null, $budgetTotal = null, $budgetDistribution = null)
{
$this->clicksDay = $clicksDay; $this->clicksTotal = $clicksTotal; $this->budgetDay = $budgetDay; $this->budgetTotal = $budgetTotal; $this->budgetDistribution = $budgetDistribution; 
}




public function getNamespace() { return 'http://api-new.begun.ru/index.php'; }

public function getXsiTypeName() { return ':xsiType'; }

/*
 * @return CampaignLimit
 */
public static function create() { return new self(); }

public function setClicksDay($value){ $this->clicksDay = $value; return $this; }
public function setClicksTotal($value){ $this->clicksTotal = $value; return $this; }
public function setBudgetDay($value){ $this->budgetDay = $value; return $this; }
public function setBudgetTotal($value){ $this->budgetTotal = $value; return $this; }
public function setBudgetDistribution($value){ $this->budgetDistribution = $value; return $this; }
}
/**
 * :classDescription
 */
class CampaignPadTypes
{
/*
 * @var boolean
 */
public $SearchEngine;
/*
 * @var boolean
 */
public $ContentAndBlog;
/*
 * @var boolean
 */
public $BoardAndCatalog;
/*
 * @var boolean
 */
public $SE;
/*
 * @var boolean
 */
public $Maillist;
/*
 * @var boolean
 */
public $BehaviouralTargeting;



public function __construct($SearchEngine = null, $ContentAndBlog = null, $BoardAndCatalog = null, $SE = null, $Maillist = null, $BehaviouralTargeting = null)
{
$this->SearchEngine = $SearchEngine; $this->ContentAndBlog = $ContentAndBlog; $this->BoardAndCatalog = $BoardAndCatalog; $this->SE = $SE; $this->Maillist = $Maillist; $this->BehaviouralTargeting = $BehaviouralTargeting; 
}




public function getNamespace() { return 'http://api-new.begun.ru/index.php'; }

public function getXsiTypeName() { return ':xsiType'; }

/*
 * @return CampaignPadTypes
 */
public static function create() { return new self(); }

public function setSearchEngine($value){ $this->SearchEngine = $value; return $this; }
public function setContentAndBlog($value){ $this->ContentAndBlog = $value; return $this; }
public function setBoardAndCatalog($value){ $this->BoardAndCatalog = $value; return $this; }
public function setSE($value){ $this->SE = $value; return $this; }
public function setMaillist($value){ $this->Maillist = $value; return $this; }
public function setBehaviouralTargeting($value){ $this->BehaviouralTargeting = $value; return $this; }
}
/**
 * :classDescription
 */
class CampaignStats
{
/*
 * @var int
 */
public $clicksToday;
/*
 * @var int
 */
public $clicksYesterday;
/*
 * @var int
 */
public $clicksTotal;
/*
 * @var int
 */
public $clicksRawTotal;
/*
 * @var float
 */
public $budgetToday;
/*
 * @var float
 */
public $budgetYesterday;
/*
 * @var float
 */
public $budgetTotal;



public function __construct($clicksToday = null, $clicksYesterday = null, $clicksTotal = null, $clicksRawTotal = null, $budgetToday = null, $budgetYesterday = null, $budgetTotal = null)
{
$this->clicksToday = $clicksToday; $this->clicksYesterday = $clicksYesterday; $this->clicksTotal = $clicksTotal; $this->clicksRawTotal = $clicksRawTotal; $this->budgetToday = $budgetToday; $this->budgetYesterday = $budgetYesterday; $this->budgetTotal = $budgetTotal; 
}




public function getNamespace() { return 'http://api-new.begun.ru/index.php'; }

public function getXsiTypeName() { return ':xsiType'; }

/*
 * @return CampaignStats
 */
public static function create() { return new self(); }

public function setClicksToday($value){ $this->clicksToday = $value; return $this; }
public function setClicksYesterday($value){ $this->clicksYesterday = $value; return $this; }
public function setClicksTotal($value){ $this->clicksTotal = $value; return $this; }
public function setClicksRawTotal($value){ $this->clicksRawTotal = $value; return $this; }
public function setBudgetToday($value){ $this->budgetToday = $value; return $this; }
public function setBudgetYesterday($value){ $this->budgetYesterday = $value; return $this; }
public function setBudgetTotal($value){ $this->budgetTotal = $value; return $this; }
}
/**
 * :classDescription
 */
class CampaignExternalStats
{
/*
 * @var boolean
 */
public $openstat;
/*
 * @var boolean
 */
public $googleAnalytics;



public function __construct($openstat = null, $googleAnalytics = null)
{
$this->openstat = $openstat; $this->googleAnalytics = $googleAnalytics; 
}




public function getNamespace() { return 'http://api-new.begun.ru/index.php'; }

public function getXsiTypeName() { return ':xsiType'; }

/*
 * @return CampaignExternalStats
 */
public static function create() { return new self(); }

public function setOpenstat($value){ $this->openstat = $value; return $this; }
public function setGoogleAnalytics($value){ $this->googleAnalytics = $value; return $this; }
}
/**
 * :classDescription
 */
class Campaign
{
/*
 * @var int
 */
public $campaignId;
/*
 * @var int
 */
public $userId;
/*
 * @var string
 */
public $name;
/*
 * @var string
 */
public $domain;
/*
 * @var long
 */
public $timeStart;
/*
 * @var long
 */
public $timeEnd;
/*
 * @var 
 */
public $status;
/*
 * @var boolean
 */
public $forceShowing;
/*
 * @var CampaignLimit
 */
public $limits;
/*
 * @var CampaignPadTypes
 */
public $types;
/*
 * @var CampaignStats
 */
public $stats;
/*
 * @var CampaignExternalStats
 */
public $externalStats;
/*
 * @var int
 */
public $geoProfileId;
/*
 * @var 
 */
public $externalGoogleAdwords;
/*
 * @var 
 */
public $campaignType;



public function __construct($campaignId = null, $userId = null, $name = null, $domain = null, $timeStart = null, $timeEnd = null, $status = null, $forceShowing = null, $limits = null, $types = null, $stats = null, $externalStats = null, $geoProfileId = null, $externalGoogleAdwords = null, $campaignType = null)
{
$this->campaignId = $campaignId; $this->userId = $userId; $this->name = $name; $this->domain = $domain; $this->timeStart = $timeStart; $this->timeEnd = $timeEnd; $this->status = $status; $this->forceShowing = $forceShowing; $this->limits = $limits; $this->types = $types; $this->stats = $stats; $this->externalStats = $externalStats; $this->geoProfileId = $geoProfileId; $this->externalGoogleAdwords = $externalGoogleAdwords; $this->campaignType = $campaignType; 
}




public function getNamespace() { return 'http://api-new.begun.ru/index.php'; }

public function getXsiTypeName() { return ':xsiType'; }

/*
 * @return Campaign
 */
public static function create() { return new self(); }

public function setCampaignId($value){ $this->campaignId = $value; return $this; }
public function setUserId($value){ $this->userId = $value; return $this; }
public function setName($value){ $this->name = $value; return $this; }
public function setDomain($value){ $this->domain = $value; return $this; }
public function setTimeStart($value){ $this->timeStart = $value; return $this; }
public function setTimeEnd($value){ $this->timeEnd = $value; return $this; }
public function setStatus($value){ $this->status = $value; return $this; }
public function setForceShowing($value){ $this->forceShowing = $value; return $this; }
public function setLimits($value){ $this->limits = $value; return $this; }
public function setTypes($value){ $this->types = $value; return $this; }
public function setStats($value){ $this->stats = $value; return $this; }
public function setExternalStats($value){ $this->externalStats = $value; return $this; }
public function setGeoProfileId($value){ $this->geoProfileId = $value; return $this; }
public function setExternalGoogleAdwords($value){ $this->externalGoogleAdwords = $value; return $this; }
public function setCampaignType($value){ $this->campaignType = $value; return $this; }
}
/**
 * :classDescription
 */
class CampaignScheduleTarget
{
/*
 * @var string
 */
public $monday;
/*
 * @var string
 */
public $tuesday;
/*
 * @var string
 */
public $wednesday;
/*
 * @var string
 */
public $thursday;
/*
 * @var string
 */
public $friday;
/*
 * @var string
 */
public $saturday;
/*
 * @var string
 */
public $sunday;



public function __construct($monday = null, $tuesday = null, $wednesday = null, $thursday = null, $friday = null, $saturday = null, $sunday = null)
{
$this->monday = $monday; $this->tuesday = $tuesday; $this->wednesday = $wednesday; $this->thursday = $thursday; $this->friday = $friday; $this->saturday = $saturday; $this->sunday = $sunday; 
}




public function getNamespace() { return 'http://api-new.begun.ru/index.php'; }

public function getXsiTypeName() { return ':xsiType'; }

/*
 * @return CampaignScheduleTarget
 */
public static function create() { return new self(); }

public function setMonday($value){ $this->monday = $value; return $this; }
public function setTuesday($value){ $this->tuesday = $value; return $this; }
public function setWednesday($value){ $this->wednesday = $value; return $this; }
public function setThursday($value){ $this->thursday = $value; return $this; }
public function setFriday($value){ $this->friday = $value; return $this; }
public function setSaturday($value){ $this->saturday = $value; return $this; }
public function setSunday($value){ $this->sunday = $value; return $this; }
}
/**
 * :classDescription
 */
class CampaignTarget
{
/*
 * @var int
 */
public $campaignId;
/*
 * @var CampaignLimit
 */
public $limits;
/*
 * @var CampaignPadTypes
 */
public $types;
/*
 * @var long
 */
public $timeStart;
/*
 * @var long
 */
public $timeEnd;
/*
 * @var CampaignScheduleTarget
 */
public $scheduleTarget;



public function __construct($campaignId = null, $limits = null, $types = null, $timeStart = null, $timeEnd = null, $scheduleTarget = null)
{
$this->campaignId = $campaignId; $this->limits = $limits; $this->types = $types; $this->timeStart = $timeStart; $this->timeEnd = $timeEnd; $this->scheduleTarget = $scheduleTarget; 
}




public function getNamespace() { return 'http://api-new.begun.ru/index.php'; }

public function getXsiTypeName() { return ':xsiType'; }

/*
 * @return CampaignTarget
 */
public static function create() { return new self(); }

public function setCampaignId($value){ $this->campaignId = $value; return $this; }
public function setLimits($value){ $this->limits = $value; return $this; }
public function setTypes($value){ $this->types = $value; return $this; }
public function setTimeStart($value){ $this->timeStart = $value; return $this; }
public function setTimeEnd($value){ $this->timeEnd = $value; return $this; }
public function setScheduleTarget($value){ $this->scheduleTarget = $value; return $this; }
}
/**
 * :classDescription
 */
class Banner
{
/*
 * @var int
 */
public $bannerId;
/*
 * @var int
 */
public $campaignId;
/*
 * @var string
 */
public $url;
/*
 * @var string
 */
public $title;
/*
 * @var string
 */
public $description;
/*
 * @var 
 */
public $status;
/*
 * @var 
 */
public $autobid;
/*
 * @var string
 */
public $image;



public function __construct($bannerId = null, $campaignId = null, $url = null, $title = null, $description = null, $status = null, $autobid = null, $image = null)
{
$this->bannerId = $bannerId; $this->campaignId = $campaignId; $this->url = $url; $this->title = $title; $this->description = $description; $this->status = $status; $this->autobid = $autobid; $this->image = $image; 
}




public function getNamespace() { return 'http://api-new.begun.ru/index.php'; }

public function getXsiTypeName() { return ':xsiType'; }

/*
 * @return Banner
 */
public static function create() { return new self(); }

public function setBannerId($value){ $this->bannerId = $value; return $this; }
public function setCampaignId($value){ $this->campaignId = $value; return $this; }
public function setUrl($value){ $this->url = $value; return $this; }
public function setTitle($value){ $this->title = $value; return $this; }
public function setDescription($value){ $this->description = $value; return $this; }
public function setStatus($value){ $this->status = $value; return $this; }
public function setAutobid($value){ $this->autobid = $value; return $this; }
public function setImage($value){ $this->image = $value; return $this; }
}
/**
 * :classDescription
 */
class Condition
{
/*
 * @var int
 */
public $conditionId;
/*
 * @var int
 */
public $bannerId;
/*
 * @var float
 */
public $price;
/*
 * @var boolean
 */
public $autobid;
/*
 * @var string
 */
public $keywords;
/*
 * @var string
 */
public $stopwords;
/*
 * @var 
 */
public $status;
/*
 * @var 
 */
public $moderationStatus;
/*
 * @var int
 */
public $position;
/*
 * @var int
 */
public $competitorsCount;
/*
 * @var floatArray
 */
public $pricesByPositions;



public function __construct($conditionId = null, $bannerId = null, $price = null, $autobid = null, $keywords = null, $stopwords = null, $status = null, $moderationStatus = null, $position = null, $competitorsCount = null, $pricesByPositions = null)
{
$this->conditionId = $conditionId; $this->bannerId = $bannerId; $this->price = $price; $this->autobid = $autobid; $this->keywords = $keywords; $this->stopwords = $stopwords; $this->status = $status; $this->moderationStatus = $moderationStatus; $this->position = $position; $this->competitorsCount = $competitorsCount; $this->pricesByPositions = $pricesByPositions; 
}




public function getNamespace() { return 'http://api-new.begun.ru/index.php'; }

public function getXsiTypeName() { return ':xsiType'; }

/*
 * @return Condition
 */
public static function create() { return new self(); }

public function setConditionId($value){ $this->conditionId = $value; return $this; }
public function setBannerId($value){ $this->bannerId = $value; return $this; }
public function setPrice($value){ $this->price = $value; return $this; }
public function setAutobid($value){ $this->autobid = $value; return $this; }
public function setKeywords($value){ $this->keywords = $value; return $this; }
public function setStopwords($value){ $this->stopwords = $value; return $this; }
public function setStatus($value){ $this->status = $value; return $this; }
public function setModerationStatus($value){ $this->moderationStatus = $value; return $this; }
public function setPosition($value){ $this->position = $value; return $this; }
public function setCompetitorsCount($value){ $this->competitorsCount = $value; return $this; }
public function setPricesByPositions($value){ $this->pricesByPositions = $value; return $this; }
}
/**
 * :classDescription
 */
class ConditionRate
{
/*
 * @var int
 */
public $conditionId;
/*
 * @var int
 */
public $position;
/*
 * @var float
 */
public $price;
/*
 * @var string
 */
public $keywords;



public function __construct($conditionId = null, $position = null, $price = null, $keywords = null)
{
$this->conditionId = $conditionId; $this->position = $position; $this->price = $price; $this->keywords = $keywords; 
}




public function getNamespace() { return 'http://api-new.begun.ru/index.php'; }

public function getXsiTypeName() { return ':xsiType'; }

/*
 * @return ConditionRate
 */
public static function create() { return new self(); }

public function setConditionId($value){ $this->conditionId = $value; return $this; }
public function setPosition($value){ $this->position = $value; return $this; }
public function setPrice($value){ $this->price = $value; return $this; }
public function setKeywords($value){ $this->keywords = $value; return $this; }
}
/**
 * :classDescription
 */
class StatsDetail
{
/*
 * @var long
 */
public $time;
/*
 * @var string
 */
public $ip;
/*
 * @var string
 */
public $url;
/*
 * @var string
 */
public $keyword;
/*
 * @var float
 */
public $bid;
/*
 * @var int
 */
public $position;
/*
 * @var string
 */
public $padName;
/*
 * @var int
 */
public $padId;
/*
 * @var int
 */
public $adConditionId;
/*
 * @var int
 */
public $bannerId;



public function __construct($time = null, $ip = null, $url = null, $keyword = null, $bid = null, $position = null, $padName = null, $padId = null, $adConditionId = null, $bannerId = null)
{
$this->time = $time; $this->ip = $ip; $this->url = $url; $this->keyword = $keyword; $this->bid = $bid; $this->position = $position; $this->padName = $padName; $this->padId = $padId; $this->adConditionId = $adConditionId; $this->bannerId = $bannerId; 
}




public function getNamespace() { return 'http://api-new.begun.ru/index.php'; }

public function getXsiTypeName() { return ':xsiType'; }

/*
 * @return StatsDetail
 */
public static function create() { return new self(); }

public function setTime($value){ $this->time = $value; return $this; }
public function setIp($value){ $this->ip = $value; return $this; }
public function setUrl($value){ $this->url = $value; return $this; }
public function setKeyword($value){ $this->keyword = $value; return $this; }
public function setBid($value){ $this->bid = $value; return $this; }
public function setPosition($value){ $this->position = $value; return $this; }
public function setPadName($value){ $this->padName = $value; return $this; }
public function setPadId($value){ $this->padId = $value; return $this; }
public function setAdConditionId($value){ $this->adConditionId = $value; return $this; }
public function setBannerId($value){ $this->bannerId = $value; return $this; }
}
/**
 * :classDescription
 */
class StatsCommon
{
/*
 * @var long
 */
public $time;
/*
 * @var string
 */
public $keyword;
/*
 * @var string
 */
public $url;
/*
 * @var float
 */
public $bid;
/*
 * @var float
 */
public $exps;
/*
 * @var int
 */
public $position;
/*
 * @var int
 */
public $padsCount;
/*
 * @var int
 */
public $clicksCount;
/*
 * @var int
 */
public $adConditionId;
/*
 * @var int
 */
public $bannerId;



public function __construct($time = null, $keyword = null, $url = null, $bid = null, $exps = null, $position = null, $padsCount = null, $clicksCount = null, $adConditionId = null, $bannerId = null)
{
$this->time = $time; $this->keyword = $keyword; $this->url = $url; $this->bid = $bid; $this->exps = $exps; $this->position = $position; $this->padsCount = $padsCount; $this->clicksCount = $clicksCount; $this->adConditionId = $adConditionId; $this->bannerId = $bannerId; 
}




public function getNamespace() { return 'http://api-new.begun.ru/index.php'; }

public function getXsiTypeName() { return ':xsiType'; }

/*
 * @return StatsCommon
 */
public static function create() { return new self(); }

public function setTime($value){ $this->time = $value; return $this; }
public function setKeyword($value){ $this->keyword = $value; return $this; }
public function setUrl($value){ $this->url = $value; return $this; }
public function setBid($value){ $this->bid = $value; return $this; }
public function setExps($value){ $this->exps = $value; return $this; }
public function setPosition($value){ $this->position = $value; return $this; }
public function setPadsCount($value){ $this->padsCount = $value; return $this; }
public function setClicksCount($value){ $this->clicksCount = $value; return $this; }
public function setAdConditionId($value){ $this->adConditionId = $value; return $this; }
public function setBannerId($value){ $this->bannerId = $value; return $this; }
}
/**
 * :classDescription
 */
class StatsByDays
{
/*
 * @var long
 */
public $time;
/*
 * @var float
 */
public $exps;
/*
 * @var float
 */
public $minBid;
/*
 * @var float
 */
public $maxBid;
/*
 * @var int
 */
public $minPosition;
/*
 * @var int
 */
public $maxPosition;
/*
 * @var int
 */
public $padsCount;
/*
 * @var int
 */
public $clicksCount;
/*
 * @var int
 */
public $keywordsCount;



public function __construct($time = null, $exps = null, $minBid = null, $maxBid = null, $minPosition = null, $maxPosition = null, $padsCount = null, $clicksCount = null, $keywordsCount = null)
{
$this->time = $time; $this->exps = $exps; $this->minBid = $minBid; $this->maxBid = $maxBid; $this->minPosition = $minPosition; $this->maxPosition = $maxPosition; $this->padsCount = $padsCount; $this->clicksCount = $clicksCount; $this->keywordsCount = $keywordsCount; 
}




public function getNamespace() { return 'http://api-new.begun.ru/index.php'; }

public function getXsiTypeName() { return ':xsiType'; }

/*
 * @return StatsByDays
 */
public static function create() { return new self(); }

public function setTime($value){ $this->time = $value; return $this; }
public function setExps($value){ $this->exps = $value; return $this; }
public function setMinBid($value){ $this->minBid = $value; return $this; }
public function setMaxBid($value){ $this->maxBid = $value; return $this; }
public function setMinPosition($value){ $this->minPosition = $value; return $this; }
public function setMaxPosition($value){ $this->maxPosition = $value; return $this; }
public function setPadsCount($value){ $this->padsCount = $value; return $this; }
public function setClicksCount($value){ $this->clicksCount = $value; return $this; }
public function setKeywordsCount($value){ $this->keywordsCount = $value; return $this; }
}
/**
 * :classDescription
 */
class StatsByPads
{
/*
 * @var long
 */
public $time;
/*
 * @var string
 */
public $padName;
/*
 * @var int
 */
public $padId;
/*
 * @var int
 */
public $position;
/*
 * @var int
 */
public $clicksCount;
/*
 * @var float
 */
public $exps;



public function __construct($time = null, $padName = null, $padId = null, $position = null, $clicksCount = null, $exps = null)
{
$this->time = $time; $this->padName = $padName; $this->padId = $padId; $this->position = $position; $this->clicksCount = $clicksCount; $this->exps = $exps; 
}




public function getNamespace() { return 'http://api-new.begun.ru/index.php'; }

public function getXsiTypeName() { return ':xsiType'; }

/*
 * @return StatsByPads
 */
public static function create() { return new self(); }

public function setTime($value){ $this->time = $value; return $this; }
public function setPadName($value){ $this->padName = $value; return $this; }
public function setPadId($value){ $this->padId = $value; return $this; }
public function setPosition($value){ $this->position = $value; return $this; }
public function setClicksCount($value){ $this->clicksCount = $value; return $this; }
public function setExps($value){ $this->exps = $value; return $this; }
}
/**
 * :classDescription
 */
class StatsKeywords
{
/*
 * @var string
 */
public $bannerName;
/*
 * @var string
 */
public $bannerUrl;
/*
 * @var string
 */
public $keyword;
/*
 * @var float
 */
public $exps;
/*
 * @var float
 */
public $minBid;
/*
 * @var float
 */
public $maxBid;
/*
 * @var int
 */
public $minPosition;
/*
 * @var int
 */
public $maxPosition;
/*
 * @var int
 */
public $clicksCount;
/*
 * @var int
 */
public $adConditionId;
/*
 * @var int
 */
public $bannerId;



public function __construct($bannerName = null, $bannerUrl = null, $keyword = null, $exps = null, $minBid = null, $maxBid = null, $minPosition = null, $maxPosition = null, $clicksCount = null, $adConditionId = null, $bannerId = null)
{
$this->bannerName = $bannerName; $this->bannerUrl = $bannerUrl; $this->keyword = $keyword; $this->exps = $exps; $this->minBid = $minBid; $this->maxBid = $maxBid; $this->minPosition = $minPosition; $this->maxPosition = $maxPosition; $this->clicksCount = $clicksCount; $this->adConditionId = $adConditionId; $this->bannerId = $bannerId; 
}




public function getNamespace() { return 'http://api-new.begun.ru/index.php'; }

public function getXsiTypeName() { return ':xsiType'; }

/*
 * @return StatsKeywords
 */
public static function create() { return new self(); }

public function setBannerName($value){ $this->bannerName = $value; return $this; }
public function setBannerUrl($value){ $this->bannerUrl = $value; return $this; }
public function setKeyword($value){ $this->keyword = $value; return $this; }
public function setExps($value){ $this->exps = $value; return $this; }
public function setMinBid($value){ $this->minBid = $value; return $this; }
public function setMaxBid($value){ $this->maxBid = $value; return $this; }
public function setMinPosition($value){ $this->minPosition = $value; return $this; }
public function setMaxPosition($value){ $this->maxPosition = $value; return $this; }
public function setClicksCount($value){ $this->clicksCount = $value; return $this; }
public function setAdConditionId($value){ $this->adConditionId = $value; return $this; }
public function setBannerId($value){ $this->bannerId = $value; return $this; }
}
/**
 * :classDescription
 */
class Region
{
/*
 * @var int
 */
public $regionId;
/*
 * @var string
 */
public $name;
/*
 * @var int
 */
public $parentId;



public function __construct($regionId = null, $name = null, $parentId = null)
{
$this->regionId = $regionId; $this->name = $name; $this->parentId = $parentId; 
}




public function getNamespace() { return 'http://api-new.begun.ru/index.php'; }

public function getXsiTypeName() { return ':xsiType'; }

/*
 * @return Region
 */
public static function create() { return new self(); }

public function setRegionId($value){ $this->regionId = $value; return $this; }
public function setName($value){ $this->name = $value; return $this; }
public function setParentId($value){ $this->parentId = $value; return $this; }
}
/**
 * :classDescription
 */
class GeoProfile
{
/*
 * @var int
 */
public $geoProfileId;
/*
 * @var string
 */
public $name;
/*
 * @var RegionArray
 */
public $regions;



public function __construct($geoProfileId = null, $name = null, $regions = null)
{
$this->geoProfileId = $geoProfileId; $this->name = $name; $this->regions = $regions; 
}




public function getNamespace() { return 'http://api-new.begun.ru/index.php'; }

public function getXsiTypeName() { return ':xsiType'; }

/*
 * @return GeoProfile
 */
public static function create() { return new self(); }

public function setGeoProfileId($value){ $this->geoProfileId = $value; return $this; }
public function setName($value){ $this->name = $value; return $this; }
public function setRegions($value){ $this->regions = $value; return $this; }
}
/**
 * :classDescription
 */
class TrafficType
{
/*
 * @var int
 */
public $trafficTypeId;
/*
 * @var string
 */
public $name;
/*
 * @var string
 */
public $descr;



public function __construct($trafficTypeId = null, $name = null, $descr = null)
{
$this->trafficTypeId = $trafficTypeId; $this->name = $name; $this->descr = $descr; 
}




public function getNamespace() { return 'http://api-new.begun.ru/index.php'; }

public function getXsiTypeName() { return ':xsiType'; }

/*
 * @return TrafficType
 */
public static function create() { return new self(); }

public function setTrafficTypeId($value){ $this->trafficTypeId = $value; return $this; }
public function setName($value){ $this->name = $value; return $this; }
public function setDescr($value){ $this->descr = $value; return $this; }
}
/**
 * :classDescription
 */
class PositionPrice
{
/*
 * @var string
 */
public $keywords;
/*
 * @var int
 */
public $position;
/*
 * @var float
 */
public $price;



public function __construct($keywords = null, $position = null, $price = null)
{
$this->keywords = $keywords; $this->position = $position; $this->price = $price; 
}




public function getNamespace() { return 'http://api-new.begun.ru/index.php'; }

public function getXsiTypeName() { return ':xsiType'; }

/*
 * @return PositionPrice
 */
public static function create() { return new self(); }

public function setKeywords($value){ $this->keywords = $value; return $this; }
public function setPosition($value){ $this->position = $value; return $this; }
public function setPrice($value){ $this->price = $value; return $this; }
}
/**
 * :classDescription
 */
class UserProfile
{
/*
 * @var string
 */
public $email;
/*
 * @var string
 */
public $name;
/*
 * @var string
 */
public $company;
/*
 * @var string
 */
public $phone;
/*
 * @var string
 */
public $city;
/*
 * @var 
 */
public $sex;
/*
 * @var long
 */
public $birthday;



public function __construct($email = null, $name = null, $company = null, $phone = null, $city = null, $sex = null, $birthday = null)
{
$this->email = $email; $this->name = $name; $this->company = $company; $this->phone = $phone; $this->city = $city; $this->sex = $sex; $this->birthday = $birthday; 
}




public function getNamespace() { return 'http://api-new.begun.ru/index.php'; }

public function getXsiTypeName() { return ':xsiType'; }

/*
 * @return UserProfile
 */
public static function create() { return new self(); }

public function setEmail($value){ $this->email = $value; return $this; }
public function setName($value){ $this->name = $value; return $this; }
public function setCompany($value){ $this->company = $value; return $this; }
public function setPhone($value){ $this->phone = $value; return $this; }
public function setCity($value){ $this->city = $value; return $this; }
public function setSex($value){ $this->sex = $value; return $this; }
public function setBirthday($value){ $this->birthday = $value; return $this; }
}
/**
 * :classDescription
 */
class AccountInfo
{
/*
 * @var int
 */
public $userId;
/*
 * @var float
 */
public $ballance;
/*
 * @var float
 */
public $ballanceIn;
/*
 * @var float
 */
public $ballanceOut;



public function __construct($userId = null, $ballance = null, $ballanceIn = null, $ballanceOut = null)
{
$this->userId = $userId; $this->ballance = $ballance; $this->ballanceIn = $ballanceIn; $this->ballanceOut = $ballanceOut; 
}




public function getNamespace() { return 'http://api-new.begun.ru/index.php'; }

public function getXsiTypeName() { return ':xsiType'; }

/*
 * @return AccountInfo
 */
public static function create() { return new self(); }

public function setUserId($value){ $this->userId = $value; return $this; }
public function setBallance($value){ $this->ballance = $value; return $this; }
public function setBallanceIn($value){ $this->ballanceIn = $value; return $this; }
public function setBallanceOut($value){ $this->ballanceOut = $value; return $this; }
}

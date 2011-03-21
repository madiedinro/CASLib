<?php

namespace AdvancedContextLib\Network\YandexDirect\V3\Service;

use AdvancedContextLib\Network\YandexDirect\V3\Lib\SoapClient;

/**
 * :classDescription
 */
class CommonService extends SoapClient
{

/**
 * :operationDescription

 * @return xsd:int
 */
public function GetVersion()
{
	
    $result = $this->__soapCall("GetVersion", array());
    return $result;
}


/**
 * :operationDescription

 * @return namesp1:ArrayOfClientInfo
 */
public function GetClientsList()
{
	
    $result = $this->__soapCall("GetClientsList", array());
    return $result;
}


/**
 * :operationDescription
 * @param namesp1:ShortClientInfo $params
 * @return namesp1:ArrayOfShortClientInfo
 */
public function GetSubClients($params)
{
	
    $result = $this->__soapCall("GetSubClients", array($params));
    return $result;
}


/**
 * :operationDescription
 * @param namesp1:AutoPriceInfo $params
 * @return namesp1:ArrayOfPhrasePriceInfo
 */
public function SetAutoPrice($params)
{
	
    $result = $this->__soapCall("SetAutoPrice", array($params));
    return $result;
}


/**
 * :operationDescription
 * @param xsd:int $params
 * @return xsd:int
 */
public function DeleteReport($params)
{
	
    $result = $this->__soapCall("DeleteReport", array($params));
    return $result;
}


/**
 * :operationDescription
 * @param namesp1:CampaignIDInfo $params
 * @return namesp1:CampaignInfo
 */
public function GetCampaignParams($params)
{
	
    $result = $this->__soapCall("GetCampaignParams", array($params));
    return $result;
}


/**
 * :operationDescription
 * @param xsd:int $params
 * @return xsd:int
 */
public function DeleteForecastReport($params)
{
	
    $result = $this->__soapCall("DeleteForecastReport", array($params));
    return $result;
}


/**
 * :operationDescription
 * @param namesp1:CampaignBidsInfo $params
 * @return xsd:int
 */
public function ModerateBanners($params)
{
	
    $result = $this->__soapCall("ModerateBanners", array($params));
    return $result;
}


/**
 * :operationDescription
 * @param namesp1:CampaignBidsInfo $params
 * @return xsd:int
 */
public function StopBanners($params)
{
	
    $result = $this->__soapCall("StopBanners", array($params));
    return $result;
}


/**
 * :operationDescription
 * @param namesp1:CampaignBidsInfo $params
 * @return xsd:int
 */
public function ResumeBanners($params)
{
	
    $result = $this->__soapCall("ResumeBanners", array($params));
    return $result;
}


/**
 * :operationDescription
 * @param namesp1:CampaignBidsInfo $params
 * @return xsd:int
 */
public function ArchiveBanners($params)
{
	
    $result = $this->__soapCall("ArchiveBanners", array($params));
    return $result;
}


/**
 * :operationDescription
 * @param namesp1:CampaignBidsInfo $params
 * @return xsd:int
 */
public function UnArchiveBanners($params)
{
	
    $result = $this->__soapCall("UnArchiveBanners", array($params));
    return $result;
}


/**
 * :operationDescription
 * @param namesp1:CampaignBidsInfo $params
 * @return xsd:int
 */
public function DeleteBanners($params)
{
	
    $result = $this->__soapCall("DeleteBanners", array($params));
    return $result;
}


/**
 * :operationDescription
 * @param namesp1:CampaignIDInfo $params
 * @return xsd:int
 */
public function StopCampaign($params)
{
	
    $result = $this->__soapCall("StopCampaign", array($params));
    return $result;
}


/**
 * :operationDescription
 * @param namesp1:CampaignIDInfo $params
 * @return xsd:int
 */
public function DeleteCampaign($params)
{
	
    $result = $this->__soapCall("DeleteCampaign", array($params));
    return $result;
}


/**
 * :operationDescription
 * @param namesp1:CampaignIDInfo $params
 * @return xsd:int
 */
public function UnArchiveCampaign($params)
{
	
    $result = $this->__soapCall("UnArchiveCampaign", array($params));
    return $result;
}


/**
 * :operationDescription
 * @param namesp1:CampaignIDInfo $params
 * @return xsd:int
 */
public function ArchiveCampaign($params)
{
	
    $result = $this->__soapCall("ArchiveCampaign", array($params));
    return $result;
}


/**
 * :operationDescription
 * @param namesp1:CampaignIDInfo $params
 * @return xsd:int
 */
public function ResumeCampaign($params)
{
	
    $result = $this->__soapCall("ResumeCampaign", array($params));
    return $result;
}


/**
 * :operationDescription

 * @return namesp1:ArrayOfReportInfo
 */
public function GetReportList()
{
	
    $result = $this->__soapCall("GetReportList", array());
    return $result;
}


/**
 * :operationDescription
 * @param namesp1:ArrayOfPingAPI_XInfo $params
 * @return namesp1:ArrayOfPingAPI_XInfo
 */
public function PingAPI_X($params)
{
	
    $result = $this->__soapCall("PingAPI_X", array($params));
    return $result;
}


/**
 * :operationDescription

 * @return xsd:int
 */
public function PingAPI()
{
	
    $result = $this->__soapCall("PingAPI", array());
    return $result;
}


/**
 * :operationDescription
 * @param namesp1:ArrayOfString $params
 * @return namesp1:ArrayOfClientsUnitInfo
 */
public function GetClientsUnits($params)
{
	
    $result = $this->__soapCall("GetClientsUnits", array($params));
    return $result;
}


/**
 * :operationDescription
 * @param namesp1:ArrayOfString $params
 * @return namesp1:ArrayOfClientInfo
 */
public function GetClientInfo($params)
{
	
    $result = $this->__soapCall("GetClientInfo", array($params));
    return $result;
}


/**
 * :operationDescription
 * @param namesp1:GetBannersInfo $params
 * @return namesp1:ArrayOfBannerInfo
 */
public function GetBanners($params)
{
	
    $result = $this->__soapCall("GetBanners", array($params));
    return $result;
}


/**
 * :operationDescription
 * @param namesp1:ArrayOfString $params
 * @return namesp1:ArrayOfShortCampaignInfo
 */
public function GetCampaignsList($params)
{
	
    $result = $this->__soapCall("GetCampaignsList", array($params));
    return $result;
}


/**
 * :operationDescription
 * @param namesp1:GetCampaignsInfo $params
 * @return namesp1:ArrayOfShortCampaignInfo
 */
public function GetCampaignsListFilter($params)
{
	
    $result = $this->__soapCall("GetCampaignsListFilter", array($params));
    return $result;
}


/**
 * :operationDescription
 * @param namesp1:ArrayOfInteger $params
 * @return namesp1:ArrayOfCampaignBalanceInfo
 */
public function GetBalance($params)
{
	
    $result = $this->__soapCall("GetBalance", array($params));
    return $result;
}


/**
 * :operationDescription
 * @param namesp1:ArrayOfInteger $params
 * @return namesp1:ArrayOfBannerPhraseInfo
 */
public function GetBannerPhrases($params)
{
	
    $result = $this->__soapCall("GetBannerPhrases", array($params));
    return $result;
}


/**
 * :operationDescription
 * @param namesp1:BannerPhrasesFilterRequestInfo $params
 * @return namesp1:ArrayOfBannerPhraseInfo
 */
public function GetBannerPhrasesFilter($params)
{
	
    $result = $this->__soapCall("GetBannerPhrasesFilter", array($params));
    return $result;
}


/**
 * :operationDescription

 * @return namesp1:ArrayOfRegionInfo
 */
public function GetRegions()
{
	
    $result = $this->__soapCall("GetRegions", array());
    return $result;
}


/**
 * :operationDescription
 * @param namesp1:NewReportInfo $params
 * @return xsd:int
 */
public function CreateNewReport($params)
{
	
    $result = $this->__soapCall("CreateNewReport", array($params));
    return $result;
}


/**
 * :operationDescription
 * @param namesp1:NewForecastInfo $params
 * @return xsd:int
 */
public function CreateNewForecast($params)
{
	
    $result = $this->__soapCall("CreateNewForecast", array($params));
    return $result;
}


/**
 * :operationDescription
 * @param xsd:int $params
 * @return namesp1:GetForecastInfo
 */
public function GetForecast($params)
{
	
    $result = $this->__soapCall("GetForecast", array($params));
    return $result;
}


/**
 * :operationDescription

 * @return namesp1:ArrayOfRubricInfo
 */
public function GetRubrics()
{
	
    $result = $this->__soapCall("GetRubrics", array());
    return $result;
}


/**
 * :operationDescription

 * @return namesp1:ArrayOfTimeZoneInfo
 */
public function GetTimeZones()
{
	
    $result = $this->__soapCall("GetTimeZones", array());
    return $result;
}


/**
 * :operationDescription

 * @return namesp1:ArrayOfForecastStatusInfo
 */
public function GetForecastList()
{
	
    $result = $this->__soapCall("GetForecastList", array());
    return $result;
}


/**
 * :operationDescription
 * @param namesp1:ArrayOfPhrasePriceInfo $params
 * @return xsd:int
 */
public function UpdatePrices($params)
{
	
    $result = $this->__soapCall("UpdatePrices", array($params));
    return $result;
}


/**
 * :operationDescription
 * @param namesp1:CampaignInfo $params
 * @return xsd:int
 */
public function CreateOrUpdateCampaign($params)
{
	
    $result = $this->__soapCall("CreateOrUpdateCampaign", array($params));
    return $result;
}


/**
 * :operationDescription
 * @param namesp1:ArrayOfBannerInfo $params
 * @return namesp1:ArrayOfInteger
 */
public function CreateOrUpdateBanners($params)
{
	
    $result = $this->__soapCall("CreateOrUpdateBanners", array($params));
    return $result;
}


/**
 * :operationDescription

 * @return namesp1:ArrayOfVersionDesc
 */
public function GetAvailableVersions()
{
	
    $result = $this->__soapCall("GetAvailableVersions", array());
    return $result;
}


/**
 * :operationDescription
 * @param namesp1:KeywordsSuggestionInfo $params
 * @return namesp1:ArrayOfString
 */
public function GetKeywordsSuggestion($params)
{
	
    $result = $this->__soapCall("GetKeywordsSuggestion", array($params));
    return $result;
}


/**
 * :operationDescription
 * @param namesp1:CreateNewSubclientRequest $params
 * @return namesp1:CreateNewSubclientResponse
 */
public function CreateNewSubclient($params)
{
	
    $result = $this->__soapCall("CreateNewSubclient", array($params));
    return $result;
}


/**
 * :operationDescription
 * @param namesp1:NewWordstatReportInfo $params
 * @return xsd:int
 */
public function CreateNewWordstatReport($params)
{
	
    $result = $this->__soapCall("CreateNewWordstatReport", array($params));
    return $result;
}


/**
 * :operationDescription

 * @return namesp1:ArrayOfWordstatReportStatusInfo
 */
public function GetWordstatReportList()
{
	
    $result = $this->__soapCall("GetWordstatReportList", array());
    return $result;
}


/**
 * :operationDescription
 * @param xsd:int $params
 * @return namesp1:ArrayOfWordstatReportInfo
 */
public function GetWordstatReport($params)
{
	
    $result = $this->__soapCall("GetWordstatReport", array($params));
    return $result;
}


/**
 * :operationDescription
 * @param namesp1:CampaignIDInfo $params
 * @return namesp1:ArrayOfStatGoalInfo
 */
public function GetStatGoals($params)
{
	
    $result = $this->__soapCall("GetStatGoals", array($params));
    return $result;
}

public static $classmap = array(
'NewReportFilterInfo' => 'AdvancedContextLib\Network\YandexDirect\V3\Service\NewReportFilterInfo',
'NewReportInfo' => 'AdvancedContextLib\Network\YandexDirect\V3\Service\NewReportInfo',
'TimeZoneInfo' => 'AdvancedContextLib\Network\YandexDirect\V3\Service\TimeZoneInfo',
'CampaignIDInfo' => 'AdvancedContextLib\Network\YandexDirect\V3\Service\CampaignIDInfo',
'CampaignInfo' => 'AdvancedContextLib\Network\YandexDirect\V3\Service\CampaignInfo',
'SmsNotificationInfo' => 'AdvancedContextLib\Network\YandexDirect\V3\Service\SmsNotificationInfo',
'EmailNotificationInfo' => 'AdvancedContextLib\Network\YandexDirect\V3\Service\EmailNotificationInfo',
'CampaignBalanceInfo' => 'AdvancedContextLib\Network\YandexDirect\V3\Service\CampaignBalanceInfo',
'ShortCampaignInfo' => 'AdvancedContextLib\Network\YandexDirect\V3\Service\ShortCampaignInfo',
'ClientsUnitInfo' => 'AdvancedContextLib\Network\YandexDirect\V3\Service\ClientsUnitInfo',
'RubricInfo' => 'AdvancedContextLib\Network\YandexDirect\V3\Service\RubricInfo',
'ForecastStatusInfo' => 'AdvancedContextLib\Network\YandexDirect\V3\Service\ForecastStatusInfo',
'ReportInfo' => 'AdvancedContextLib\Network\YandexDirect\V3\Service\ReportInfo',
'ContactInfo' => 'AdvancedContextLib\Network\YandexDirect\V3\Service\ContactInfo',
'RegionInfo' => 'AdvancedContextLib\Network\YandexDirect\V3\Service\RegionInfo',
'MapPoint' => 'AdvancedContextLib\Network\YandexDirect\V3\Service\MapPoint',
'PingAPI_XStructInfo' => 'AdvancedContextLib\Network\YandexDirect\V3\Service\PingAPI_XStructInfo',
'PingAPI_XInfo' => 'AdvancedContextLib\Network\YandexDirect\V3\Service\PingAPI_XInfo',
'TimeTargetInfo' => 'AdvancedContextLib\Network\YandexDirect\V3\Service\TimeTargetInfo',
'TimeTargetItem' => 'AdvancedContextLib\Network\YandexDirect\V3\Service\TimeTargetItem',
'CoverageInfo' => 'AdvancedContextLib\Network\YandexDirect\V3\Service\CoverageInfo',
'BannerPhrasesFilterRequestInfo' => 'AdvancedContextLib\Network\YandexDirect\V3\Service\BannerPhrasesFilterRequestInfo',
'PhrasePriceInfo' => 'AdvancedContextLib\Network\YandexDirect\V3\Service\PhrasePriceInfo',
'BannerPhraseInfo' => 'AdvancedContextLib\Network\YandexDirect\V3\Service\BannerPhraseInfo',
'BannerInfo' => 'AdvancedContextLib\Network\YandexDirect\V3\Service\BannerInfo',
'Sitelink' => 'AdvancedContextLib\Network\YandexDirect\V3\Service\Sitelink',
'RejectReason' => 'AdvancedContextLib\Network\YandexDirect\V3\Service\RejectReason',
'CampaignBidsInfo' => 'AdvancedContextLib\Network\YandexDirect\V3\Service\CampaignBidsInfo',
'GetCampaignsInfo' => 'AdvancedContextLib\Network\YandexDirect\V3\Service\GetCampaignsInfo',
'CampaignsFilterInfo' => 'AdvancedContextLib\Network\YandexDirect\V3\Service\CampaignsFilterInfo',
'BannersFilterInfo' => 'AdvancedContextLib\Network\YandexDirect\V3\Service\BannersFilterInfo',
'GetBannersInfo' => 'AdvancedContextLib\Network\YandexDirect\V3\Service\GetBannersInfo',
'NewForecastInfo' => 'AdvancedContextLib\Network\YandexDirect\V3\Service\NewForecastInfo',
'ForecastCommonInfo' => 'AdvancedContextLib\Network\YandexDirect\V3\Service\ForecastCommonInfo',
'GetForecastInfo' => 'AdvancedContextLib\Network\YandexDirect\V3\Service\GetForecastInfo',
'NewWordstatReportInfo' => 'AdvancedContextLib\Network\YandexDirect\V3\Service\NewWordstatReportInfo',
'WordstatReportStatusInfo' => 'AdvancedContextLib\Network\YandexDirect\V3\Service\WordstatReportStatusInfo',
'WordstatReportInfo' => 'AdvancedContextLib\Network\YandexDirect\V3\Service\WordstatReportInfo',
'WordstatItem' => 'AdvancedContextLib\Network\YandexDirect\V3\Service\WordstatItem',
'StatGoalInfo' => 'AdvancedContextLib\Network\YandexDirect\V3\Service\StatGoalInfo',
'AutoPriceInfo' => 'AdvancedContextLib\Network\YandexDirect\V3\Service\AutoPriceInfo',
'ClientInfo' => 'AdvancedContextLib\Network\YandexDirect\V3\Service\ClientInfo',
'ShortClientInfo' => 'AdvancedContextLib\Network\YandexDirect\V3\Service\ShortClientInfo',
'VersionDesc' => 'AdvancedContextLib\Network\YandexDirect\V3\Service\VersionDesc',
'KeywordsSuggestionInfo' => 'AdvancedContextLib\Network\YandexDirect\V3\Service\KeywordsSuggestionInfo',
'CreateNewSubclientRequest' => 'AdvancedContextLib\Network\YandexDirect\V3\Service\CreateNewSubclientRequest',
'CreateNewSubclientResponse' => 'AdvancedContextLib\Network\YandexDirect\V3\Service\CreateNewSubclientResponse',
);

protected $wsdl = 'http://soap.direct.yandex.ru/wsdl/v3/';

public function __construct($options) {
	$options["classmap"] = self::$classmap;
	parent::__construct($options);
}


}
/**
 * :classDescription
 */
class NewReportFilterInfo
{
/*
 * @var string
 */
public $PageType;
/*
 * @var string
 */
public $PositionType;
/*
 * @var ArrayOfInteger
 */
public $Banner;
/*
 * @var ArrayOfInteger
 */
public $Geo;
/*
 * @var ArrayOfString
 */
public $Phrase;
/*
 * @var ArrayOfString
 */
public $PageName;
/*
 * @var ArrayOfInteger
 */
public $StatGoals;



public function __construct($PageType = null, $PositionType = null, $Banner = null, $Geo = null, $Phrase = null, $PageName = null, $StatGoals = null)
{
$this->PageType = $PageType; $this->PositionType = $PositionType; $this->Banner = $Banner; $this->Geo = $Geo; $this->Phrase = $Phrase; $this->PageName = $PageName; $this->StatGoals = $StatGoals; 
}




public function getNamespace() { return 'API'; }

public function getXsiTypeName() { return ':xsiType'; }

/*
 * @return NewReportFilterInfo
 */
public static function create() { return new self(); }

public function setPageType($value){ $this->PageType = $value; return $this; }
public function setPositionType($value){ $this->PositionType = $value; return $this; }
public function setBanner($value){ $this->Banner = $value; return $this; }
public function setGeo($value){ $this->Geo = $value; return $this; }
public function setPhrase($value){ $this->Phrase = $value; return $this; }
public function setPageName($value){ $this->PageName = $value; return $this; }
public function setStatGoals($value){ $this->StatGoals = $value; return $this; }
}
/**
 * :classDescription
 */
class NewReportInfo
{
/*
 * @var int
 */
public $CampaignID;
/*
 * @var date
 */
public $StartDate;
/*
 * @var date
 */
public $EndDate;
/*
 * @var ArrayOfString
 */
public $GroupByColumns;
/*
 * @var NewReportFilterInfo
 */
public $Filter;
/*
 * @var int
 */
public $Limit;
/*
 * @var int
 */
public $Offset;
/*
 * @var string
 */
public $GroupByDate;
/*
 * @var ArrayOfString
 */
public $OrderBy;
/*
 * @var string
 */
public $TypeResultReport;
/*
 * @var int
 */
public $CompressReport;



public function __construct($CampaignID = null, $StartDate = null, $EndDate = null, $GroupByColumns = null, $Filter = null, $Limit = null, $Offset = null, $GroupByDate = null, $OrderBy = null, $TypeResultReport = null, $CompressReport = null)
{
$this->CampaignID = $CampaignID; $this->StartDate = $StartDate; $this->EndDate = $EndDate; $this->GroupByColumns = $GroupByColumns; $this->Filter = $Filter; $this->Limit = $Limit; $this->Offset = $Offset; $this->GroupByDate = $GroupByDate; $this->OrderBy = $OrderBy; $this->TypeResultReport = $TypeResultReport; $this->CompressReport = $CompressReport; 
}




public function getNamespace() { return 'API'; }

public function getXsiTypeName() { return ':xsiType'; }

/*
 * @return NewReportInfo
 */
public static function create() { return new self(); }

public function setCampaignID($value){ $this->CampaignID = $value; return $this; }
public function setStartDate($value){ $this->StartDate = $value; return $this; }
public function setEndDate($value){ $this->EndDate = $value; return $this; }
public function setGroupByColumns($value){ $this->GroupByColumns = $value; return $this; }
public function setFilter($value){ $this->Filter = $value; return $this; }
public function setLimit($value){ $this->Limit = $value; return $this; }
public function setOffset($value){ $this->Offset = $value; return $this; }
public function setGroupByDate($value){ $this->GroupByDate = $value; return $this; }
public function setOrderBy($value){ $this->OrderBy = $value; return $this; }
public function setTypeResultReport($value){ $this->TypeResultReport = $value; return $this; }
public function setCompressReport($value){ $this->CompressReport = $value; return $this; }
}
/**
 * :classDescription
 */
class TimeZoneInfo
{
/*
 * @var string
 */
public $TimeZone;
/*
 * @var int
 */
public $GMTOffset;
/*
 * @var string
 */
public $Name;



public function __construct($TimeZone = null, $GMTOffset = null, $Name = null)
{
$this->TimeZone = $TimeZone; $this->GMTOffset = $GMTOffset; $this->Name = $Name; 
}




public function getNamespace() { return 'API'; }

public function getXsiTypeName() { return ':xsiType'; }

/*
 * @return TimeZoneInfo
 */
public static function create() { return new self(); }

public function setTimeZone($value){ $this->TimeZone = $value; return $this; }
public function setGMTOffset($value){ $this->GMTOffset = $value; return $this; }
public function setName($value){ $this->Name = $value; return $this; }
}
/**
 * :classDescription
 */
class CampaignIDInfo
{
/*
 * @var int
 */
public $CampaignID;



public function __construct($CampaignID = null)
{
$this->CampaignID = $CampaignID; 
}




public function getNamespace() { return 'API'; }

public function getXsiTypeName() { return ':xsiType'; }

/*
 * @return CampaignIDInfo
 */
public static function create() { return new self(); }

public function setCampaignID($value){ $this->CampaignID = $value; return $this; }
}
/**
 * :classDescription
 */
class CampaignInfo
{
/*
 * @var string
 */
public $Login;
/*
 * @var int
 */
public $CampaignID;
/*
 * @var string
 */
public $Name;
/*
 * @var string
 */
public $FIO;
/*
 * @var date
 */
public $StartDate;
/*
 * @var float
 */
public $Sum;
/*
 * @var float
 */
public $Rest;
/*
 * @var int
 */
public $Shows;
/*
 * @var int
 */
public $Clicks;
/*
 * @var string
 */
public $Autobudget;
/*
 * @var float
 */
public $AutobudgetSum;
/*
 * @var float
 */
public $AutobudgetMaxPrice;
/*
 * @var SmsNotificationInfo
 */
public $SmsNotification;
/*
 * @var EmailNotificationInfo
 */
public $EmailNotification;
/*
 * @var string
 */
public $StatusBehavior;
/*
 * @var string
 */
public $Status;
/*
 * @var TimeTargetInfo
 */
public $TimeTarget;
/*
 * @var string
 */
public $StatusContextStop;
/*
 * @var string
 */
public $ContextLimit;
/*
 * @var int
 */
public $ContextLimitSum;
/*
 * @var int
 */
public $ContextPricePercent;
/*
 * @var string
 */
public $AutoOptimization;
/*
 * @var string
 */
public $StatusMetricaControl;
/*
 * @var string
 */
public $DisabledDomains;
/*
 * @var string
 */
public $DisabledIps;
/*
 * @var string
 */
public $StatusOpenStat;
/*
 * @var string
 */
public $ConsiderTimeTarget;
/*
 * @var string
 */
public $ManagerName;
/*
 * @var string
 */
public $AgencyName;
/*
 * @var string
 */
public $StatusShow;
/*
 * @var string
 */
public $StatusArchive;
/*
 * @var string
 */
public $StatusActivating;
/*
 * @var string
 */
public $StatusModerate;
/*
 * @var string
 */
public $IsActive;
/*
 * @var ArrayOfString
 */
public $MinusKeywords;
/*
 * @var string
 */
public $AddRelevantPhrases;
/*
 * @var int
 */
public $RelevantPhrasesBudgetLimit;



public function __construct($Login = null, $CampaignID = null, $Name = null, $FIO = null, $StartDate = null, $Sum = null, $Rest = null, $Shows = null, $Clicks = null, $Autobudget = null, $AutobudgetSum = null, $AutobudgetMaxPrice = null, $SmsNotification = null, $EmailNotification = null, $StatusBehavior = null, $Status = null, $TimeTarget = null, $StatusContextStop = null, $ContextLimit = null, $ContextLimitSum = null, $ContextPricePercent = null, $AutoOptimization = null, $StatusMetricaControl = null, $DisabledDomains = null, $DisabledIps = null, $StatusOpenStat = null, $ConsiderTimeTarget = null, $ManagerName = null, $AgencyName = null, $StatusShow = null, $StatusArchive = null, $StatusActivating = null, $StatusModerate = null, $IsActive = null, $MinusKeywords = null, $AddRelevantPhrases = null, $RelevantPhrasesBudgetLimit = null)
{
$this->Login = $Login; $this->CampaignID = $CampaignID; $this->Name = $Name; $this->FIO = $FIO; $this->StartDate = $StartDate; $this->Sum = $Sum; $this->Rest = $Rest; $this->Shows = $Shows; $this->Clicks = $Clicks; $this->Autobudget = $Autobudget; $this->AutobudgetSum = $AutobudgetSum; $this->AutobudgetMaxPrice = $AutobudgetMaxPrice; $this->SmsNotification = $SmsNotification; $this->EmailNotification = $EmailNotification; $this->StatusBehavior = $StatusBehavior; $this->Status = $Status; $this->TimeTarget = $TimeTarget; $this->StatusContextStop = $StatusContextStop; $this->ContextLimit = $ContextLimit; $this->ContextLimitSum = $ContextLimitSum; $this->ContextPricePercent = $ContextPricePercent; $this->AutoOptimization = $AutoOptimization; $this->StatusMetricaControl = $StatusMetricaControl; $this->DisabledDomains = $DisabledDomains; $this->DisabledIps = $DisabledIps; $this->StatusOpenStat = $StatusOpenStat; $this->ConsiderTimeTarget = $ConsiderTimeTarget; $this->ManagerName = $ManagerName; $this->AgencyName = $AgencyName; $this->StatusShow = $StatusShow; $this->StatusArchive = $StatusArchive; $this->StatusActivating = $StatusActivating; $this->StatusModerate = $StatusModerate; $this->IsActive = $IsActive; $this->MinusKeywords = $MinusKeywords; $this->AddRelevantPhrases = $AddRelevantPhrases; $this->RelevantPhrasesBudgetLimit = $RelevantPhrasesBudgetLimit; 
}




public function getNamespace() { return 'API'; }

public function getXsiTypeName() { return ':xsiType'; }

/*
 * @return CampaignInfo
 */
public static function create() { return new self(); }

public function setLogin($value){ $this->Login = $value; return $this; }
public function setCampaignID($value){ $this->CampaignID = $value; return $this; }
public function setName($value){ $this->Name = $value; return $this; }
public function setFIO($value){ $this->FIO = $value; return $this; }
public function setStartDate($value){ $this->StartDate = $value; return $this; }
public function setSum($value){ $this->Sum = $value; return $this; }
public function setRest($value){ $this->Rest = $value; return $this; }
public function setShows($value){ $this->Shows = $value; return $this; }
public function setClicks($value){ $this->Clicks = $value; return $this; }
public function setAutobudget($value){ $this->Autobudget = $value; return $this; }
public function setAutobudgetSum($value){ $this->AutobudgetSum = $value; return $this; }
public function setAutobudgetMaxPrice($value){ $this->AutobudgetMaxPrice = $value; return $this; }
public function setSmsNotification($value){ $this->SmsNotification = $value; return $this; }
public function setEmailNotification($value){ $this->EmailNotification = $value; return $this; }
public function setStatusBehavior($value){ $this->StatusBehavior = $value; return $this; }
public function setStatus($value){ $this->Status = $value; return $this; }
public function setTimeTarget($value){ $this->TimeTarget = $value; return $this; }
public function setStatusContextStop($value){ $this->StatusContextStop = $value; return $this; }
public function setContextLimit($value){ $this->ContextLimit = $value; return $this; }
public function setContextLimitSum($value){ $this->ContextLimitSum = $value; return $this; }
public function setContextPricePercent($value){ $this->ContextPricePercent = $value; return $this; }
public function setAutoOptimization($value){ $this->AutoOptimization = $value; return $this; }
public function setStatusMetricaControl($value){ $this->StatusMetricaControl = $value; return $this; }
public function setDisabledDomains($value){ $this->DisabledDomains = $value; return $this; }
public function setDisabledIps($value){ $this->DisabledIps = $value; return $this; }
public function setStatusOpenStat($value){ $this->StatusOpenStat = $value; return $this; }
public function setConsiderTimeTarget($value){ $this->ConsiderTimeTarget = $value; return $this; }
public function setManagerName($value){ $this->ManagerName = $value; return $this; }
public function setAgencyName($value){ $this->AgencyName = $value; return $this; }
public function setStatusShow($value){ $this->StatusShow = $value; return $this; }
public function setStatusArchive($value){ $this->StatusArchive = $value; return $this; }
public function setStatusActivating($value){ $this->StatusActivating = $value; return $this; }
public function setStatusModerate($value){ $this->StatusModerate = $value; return $this; }
public function setIsActive($value){ $this->IsActive = $value; return $this; }
public function setMinusKeywords($value){ $this->MinusKeywords = $value; return $this; }
public function setAddRelevantPhrases($value){ $this->AddRelevantPhrases = $value; return $this; }
public function setRelevantPhrasesBudgetLimit($value){ $this->RelevantPhrasesBudgetLimit = $value; return $this; }
}
/**
 * :classDescription
 */
class SmsNotificationInfo
{
/*
 * @var string
 */
public $MetricaSms;
/*
 * @var string
 */
public $ModerateResultSms;
/*
 * @var string
 */
public $MoneyInSms;
/*
 * @var string
 */
public $MoneyOutSms;
/*
 * @var string
 */
public $SmsTimeFrom;
/*
 * @var string
 */
public $SmsTimeTo;



public function __construct($MetricaSms = null, $ModerateResultSms = null, $MoneyInSms = null, $MoneyOutSms = null, $SmsTimeFrom = null, $SmsTimeTo = null)
{
$this->MetricaSms = $MetricaSms; $this->ModerateResultSms = $ModerateResultSms; $this->MoneyInSms = $MoneyInSms; $this->MoneyOutSms = $MoneyOutSms; $this->SmsTimeFrom = $SmsTimeFrom; $this->SmsTimeTo = $SmsTimeTo; 
}




public function getNamespace() { return 'API'; }

public function getXsiTypeName() { return ':xsiType'; }

/*
 * @return SmsNotificationInfo
 */
public static function create() { return new self(); }

public function setMetricaSms($value){ $this->MetricaSms = $value; return $this; }
public function setModerateResultSms($value){ $this->ModerateResultSms = $value; return $this; }
public function setMoneyInSms($value){ $this->MoneyInSms = $value; return $this; }
public function setMoneyOutSms($value){ $this->MoneyOutSms = $value; return $this; }
public function setSmsTimeFrom($value){ $this->SmsTimeFrom = $value; return $this; }
public function setSmsTimeTo($value){ $this->SmsTimeTo = $value; return $this; }
}
/**
 * :classDescription
 */
class EmailNotificationInfo
{
/*
 * @var string
 */
public $Email;
/*
 * @var int
 */
public $WarnPlaceInterval;
/*
 * @var int
 */
public $MoneyWarningValue;
/*
 * @var string
 */
public $SendAccNews;
/*
 * @var string
 */
public $SendWarn;



public function __construct($Email = null, $WarnPlaceInterval = null, $MoneyWarningValue = null, $SendAccNews = null, $SendWarn = null)
{
$this->Email = $Email; $this->WarnPlaceInterval = $WarnPlaceInterval; $this->MoneyWarningValue = $MoneyWarningValue; $this->SendAccNews = $SendAccNews; $this->SendWarn = $SendWarn; 
}




public function getNamespace() { return 'API'; }

public function getXsiTypeName() { return ':xsiType'; }

/*
 * @return EmailNotificationInfo
 */
public static function create() { return new self(); }

public function setEmail($value){ $this->Email = $value; return $this; }
public function setWarnPlaceInterval($value){ $this->WarnPlaceInterval = $value; return $this; }
public function setMoneyWarningValue($value){ $this->MoneyWarningValue = $value; return $this; }
public function setSendAccNews($value){ $this->SendAccNews = $value; return $this; }
public function setSendWarn($value){ $this->SendWarn = $value; return $this; }
}
/**
 * :classDescription
 */
class CampaignBalanceInfo
{
/*
 * @var int
 */
public $CampaignID;
/*
 * @var float
 */
public $Sum;
/*
 * @var float
 */
public $Rest;



public function __construct($CampaignID = null, $Sum = null, $Rest = null)
{
$this->CampaignID = $CampaignID; $this->Sum = $Sum; $this->Rest = $Rest; 
}




public function getNamespace() { return 'API'; }

public function getXsiTypeName() { return ':xsiType'; }

/*
 * @return CampaignBalanceInfo
 */
public static function create() { return new self(); }

public function setCampaignID($value){ $this->CampaignID = $value; return $this; }
public function setSum($value){ $this->Sum = $value; return $this; }
public function setRest($value){ $this->Rest = $value; return $this; }
}
/**
 * :classDescription
 */
class ShortCampaignInfo
{
/*
 * @var int
 */
public $CampaignID;
/*
 * @var string
 */
public $Login;
/*
 * @var string
 */
public $Name;
/*
 * @var date
 */
public $StartDate;
/*
 * @var float
 */
public $Sum;
/*
 * @var float
 */
public $Rest;
/*
 * @var int
 */
public $Shows;
/*
 * @var int
 */
public $Clicks;
/*
 * @var string
 */
public $Status;
/*
 * @var string
 */
public $StatusShow;
/*
 * @var string
 */
public $StatusArchive;
/*
 * @var string
 */
public $StatusActivating;
/*
 * @var string
 */
public $StatusModerate;
/*
 * @var string
 */
public $IsActive;
/*
 * @var string
 */
public $ManagerName;
/*
 * @var string
 */
public $AgencyName;



public function __construct($CampaignID = null, $Login = null, $Name = null, $StartDate = null, $Sum = null, $Rest = null, $Shows = null, $Clicks = null, $Status = null, $StatusShow = null, $StatusArchive = null, $StatusActivating = null, $StatusModerate = null, $IsActive = null, $ManagerName = null, $AgencyName = null)
{
$this->CampaignID = $CampaignID; $this->Login = $Login; $this->Name = $Name; $this->StartDate = $StartDate; $this->Sum = $Sum; $this->Rest = $Rest; $this->Shows = $Shows; $this->Clicks = $Clicks; $this->Status = $Status; $this->StatusShow = $StatusShow; $this->StatusArchive = $StatusArchive; $this->StatusActivating = $StatusActivating; $this->StatusModerate = $StatusModerate; $this->IsActive = $IsActive; $this->ManagerName = $ManagerName; $this->AgencyName = $AgencyName; 
}




public function getNamespace() { return 'API'; }

public function getXsiTypeName() { return ':xsiType'; }

/*
 * @return ShortCampaignInfo
 */
public static function create() { return new self(); }

public function setCampaignID($value){ $this->CampaignID = $value; return $this; }
public function setLogin($value){ $this->Login = $value; return $this; }
public function setName($value){ $this->Name = $value; return $this; }
public function setStartDate($value){ $this->StartDate = $value; return $this; }
public function setSum($value){ $this->Sum = $value; return $this; }
public function setRest($value){ $this->Rest = $value; return $this; }
public function setShows($value){ $this->Shows = $value; return $this; }
public function setClicks($value){ $this->Clicks = $value; return $this; }
public function setStatus($value){ $this->Status = $value; return $this; }
public function setStatusShow($value){ $this->StatusShow = $value; return $this; }
public function setStatusArchive($value){ $this->StatusArchive = $value; return $this; }
public function setStatusActivating($value){ $this->StatusActivating = $value; return $this; }
public function setStatusModerate($value){ $this->StatusModerate = $value; return $this; }
public function setIsActive($value){ $this->IsActive = $value; return $this; }
public function setManagerName($value){ $this->ManagerName = $value; return $this; }
public function setAgencyName($value){ $this->AgencyName = $value; return $this; }
}
/**
 * :classDescription
 */
class ClientsUnitInfo
{
/*
 * @var string
 */
public $Login;
/*
 * @var int
 */
public $UnitsRest;



public function __construct($Login = null, $UnitsRest = null)
{
$this->Login = $Login; $this->UnitsRest = $UnitsRest; 
}




public function getNamespace() { return 'API'; }

public function getXsiTypeName() { return ':xsiType'; }

/*
 * @return ClientsUnitInfo
 */
public static function create() { return new self(); }

public function setLogin($value){ $this->Login = $value; return $this; }
public function setUnitsRest($value){ $this->UnitsRest = $value; return $this; }
}
/**
 * :classDescription
 */
class RubricInfo
{
/*
 * @var int
 */
public $ParentID;
/*
 * @var int
 */
public $RubricID;
/*
 * @var string
 */
public $Url;
/*
 * @var string
 */
public $RubricFullName;
/*
 * @var string
 */
public $RubricName;



public function __construct($ParentID = null, $RubricID = null, $Url = null, $RubricFullName = null, $RubricName = null)
{
$this->ParentID = $ParentID; $this->RubricID = $RubricID; $this->Url = $Url; $this->RubricFullName = $RubricFullName; $this->RubricName = $RubricName; 
}




public function getNamespace() { return 'API'; }

public function getXsiTypeName() { return ':xsiType'; }

/*
 * @return RubricInfo
 */
public static function create() { return new self(); }

public function setParentID($value){ $this->ParentID = $value; return $this; }
public function setRubricID($value){ $this->RubricID = $value; return $this; }
public function setUrl($value){ $this->Url = $value; return $this; }
public function setRubricFullName($value){ $this->RubricFullName = $value; return $this; }
public function setRubricName($value){ $this->RubricName = $value; return $this; }
}
/**
 * :classDescription
 */
class ForecastStatusInfo
{
/*
 * @var int
 */
public $ForecastID;
/*
 * @var string
 */
public $StatusForecast;



public function __construct($ForecastID = null, $StatusForecast = null)
{
$this->ForecastID = $ForecastID; $this->StatusForecast = $StatusForecast; 
}




public function getNamespace() { return 'API'; }

public function getXsiTypeName() { return ':xsiType'; }

/*
 * @return ForecastStatusInfo
 */
public static function create() { return new self(); }

public function setForecastID($value){ $this->ForecastID = $value; return $this; }
public function setStatusForecast($value){ $this->StatusForecast = $value; return $this; }
}
/**
 * :classDescription
 */
class ReportInfo
{
/*
 * @var int
 */
public $ReportID;
/*
 * @var string
 */
public $Url;
/*
 * @var string
 */
public $StatusReport;



public function __construct($ReportID = null, $Url = null, $StatusReport = null)
{
$this->ReportID = $ReportID; $this->Url = $Url; $this->StatusReport = $StatusReport; 
}




public function getNamespace() { return 'API'; }

public function getXsiTypeName() { return ':xsiType'; }

/*
 * @return ReportInfo
 */
public static function create() { return new self(); }

public function setReportID($value){ $this->ReportID = $value; return $this; }
public function setUrl($value){ $this->Url = $value; return $this; }
public function setStatusReport($value){ $this->StatusReport = $value; return $this; }
}
/**
 * :classDescription
 */
class ContactInfo
{
/*
 * @var string
 */
public $ContactPerson;
/*
 * @var string
 */
public $Country;
/*
 * @var string
 */
public $CountryCode;
/*
 * @var string
 */
public $City;
/*
 * @var string
 */
public $Street;
/*
 * @var string
 */
public $House;
/*
 * @var string
 */
public $Build;
/*
 * @var string
 */
public $Apart;
/*
 * @var string
 */
public $CityCode;
/*
 * @var string
 */
public $Phone;
/*
 * @var string
 */
public $PhoneExt;
/*
 * @var string
 */
public $CompanyName;
/*
 * @var string
 */
public $IMClient;
/*
 * @var string
 */
public $IMLogin;
/*
 * @var string
 */
public $ExtraMessage;
/*
 * @var string
 */
public $ContactEmail;
/*
 * @var string
 */
public $WorkTime;
/*
 * @var string
 */
public $OGRN;
/*
 * @var MapPoint
 */
public $PointOnMap;



public function __construct($ContactPerson = null, $Country = null, $CountryCode = null, $City = null, $Street = null, $House = null, $Build = null, $Apart = null, $CityCode = null, $Phone = null, $PhoneExt = null, $CompanyName = null, $IMClient = null, $IMLogin = null, $ExtraMessage = null, $ContactEmail = null, $WorkTime = null, $OGRN = null, $PointOnMap = null)
{
$this->ContactPerson = $ContactPerson; $this->Country = $Country; $this->CountryCode = $CountryCode; $this->City = $City; $this->Street = $Street; $this->House = $House; $this->Build = $Build; $this->Apart = $Apart; $this->CityCode = $CityCode; $this->Phone = $Phone; $this->PhoneExt = $PhoneExt; $this->CompanyName = $CompanyName; $this->IMClient = $IMClient; $this->IMLogin = $IMLogin; $this->ExtraMessage = $ExtraMessage; $this->ContactEmail = $ContactEmail; $this->WorkTime = $WorkTime; $this->OGRN = $OGRN; $this->PointOnMap = $PointOnMap; 
}




public function getNamespace() { return 'API'; }

public function getXsiTypeName() { return ':xsiType'; }

/*
 * @return ContactInfo
 */
public static function create() { return new self(); }

public function setContactPerson($value){ $this->ContactPerson = $value; return $this; }
public function setCountry($value){ $this->Country = $value; return $this; }
public function setCountryCode($value){ $this->CountryCode = $value; return $this; }
public function setCity($value){ $this->City = $value; return $this; }
public function setStreet($value){ $this->Street = $value; return $this; }
public function setHouse($value){ $this->House = $value; return $this; }
public function setBuild($value){ $this->Build = $value; return $this; }
public function setApart($value){ $this->Apart = $value; return $this; }
public function setCityCode($value){ $this->CityCode = $value; return $this; }
public function setPhone($value){ $this->Phone = $value; return $this; }
public function setPhoneExt($value){ $this->PhoneExt = $value; return $this; }
public function setCompanyName($value){ $this->CompanyName = $value; return $this; }
public function setIMClient($value){ $this->IMClient = $value; return $this; }
public function setIMLogin($value){ $this->IMLogin = $value; return $this; }
public function setExtraMessage($value){ $this->ExtraMessage = $value; return $this; }
public function setContactEmail($value){ $this->ContactEmail = $value; return $this; }
public function setWorkTime($value){ $this->WorkTime = $value; return $this; }
public function setOGRN($value){ $this->OGRN = $value; return $this; }
public function setPointOnMap($value){ $this->PointOnMap = $value; return $this; }
}
/**
 * :classDescription
 */
class RegionInfo
{
/*
 * @var int
 */
public $RegionID;
/*
 * @var int
 */
public $ParentID;
/*
 * @var string
 */
public $RegionName;



public function __construct($RegionID = null, $ParentID = null, $RegionName = null)
{
$this->RegionID = $RegionID; $this->ParentID = $ParentID; $this->RegionName = $RegionName; 
}




public function getNamespace() { return 'API'; }

public function getXsiTypeName() { return ':xsiType'; }

/*
 * @return RegionInfo
 */
public static function create() { return new self(); }

public function setRegionID($value){ $this->RegionID = $value; return $this; }
public function setParentID($value){ $this->ParentID = $value; return $this; }
public function setRegionName($value){ $this->RegionName = $value; return $this; }
}
/**
 * :classDescription
 */
class MapPoint
{
/*
 * @var float
 */
public $x;
/*
 * @var float
 */
public $y;
/*
 * @var float
 */
public $x1;
/*
 * @var float
 */
public $y1;
/*
 * @var float
 */
public $x2;
/*
 * @var float
 */
public $y2;



public function __construct($x = null, $y = null, $x1 = null, $y1 = null, $x2 = null, $y2 = null)
{
$this->x = $x; $this->y = $y; $this->x1 = $x1; $this->y1 = $y1; $this->x2 = $x2; $this->y2 = $y2; 
}




public function getNamespace() { return 'API'; }

public function getXsiTypeName() { return ':xsiType'; }

/*
 * @return MapPoint
 */
public static function create() { return new self(); }

public function setX($value){ $this->x = $value; return $this; }
public function setY($value){ $this->y = $value; return $this; }
public function setX1($value){ $this->x1 = $value; return $this; }
public function setY1($value){ $this->y1 = $value; return $this; }
public function setX2($value){ $this->x2 = $value; return $this; }
public function setY2($value){ $this->y2 = $value; return $this; }
}
/**
 * :classDescription
 */
class PingAPI_XStructInfo
{
/*
 * @var string
 */
public $Field1;
/*
 * @var int
 */
public $Field2;



public function __construct($Field1 = null, $Field2 = null)
{
$this->Field1 = $Field1; $this->Field2 = $Field2; 
}




public function getNamespace() { return 'API'; }

public function getXsiTypeName() { return ':xsiType'; }

/*
 * @return PingAPI_XStructInfo
 */
public static function create() { return new self(); }

public function setField1($value){ $this->Field1 = $value; return $this; }
public function setField2($value){ $this->Field2 = $value; return $this; }
}
/**
 * :classDescription
 */
class PingAPI_XInfo
{
/*
 * @var int
 */
public $IntValue;
/*
 * @var date
 */
public $DateValue;
/*
 * @var string
 */
public $StrValue;
/*
 * @var ArrayOfInteger
 */
public $IntArray;
/*
 * @var ArrayOfString
 */
public $StrArray;
/*
 * @var ArrayOfPingAPI_XStructInfo
 */
public $StructArray;



public function __construct($IntValue = null, $DateValue = null, $StrValue = null, $IntArray = null, $StrArray = null, $StructArray = null)
{
$this->IntValue = $IntValue; $this->DateValue = $DateValue; $this->StrValue = $StrValue; $this->IntArray = $IntArray; $this->StrArray = $StrArray; $this->StructArray = $StructArray; 
}




public function getNamespace() { return 'API'; }

public function getXsiTypeName() { return ':xsiType'; }

/*
 * @return PingAPI_XInfo
 */
public static function create() { return new self(); }

public function setIntValue($value){ $this->IntValue = $value; return $this; }
public function setDateValue($value){ $this->DateValue = $value; return $this; }
public function setStrValue($value){ $this->StrValue = $value; return $this; }
public function setIntArray($value){ $this->IntArray = $value; return $this; }
public function setStrArray($value){ $this->StrArray = $value; return $this; }
public function setStructArray($value){ $this->StructArray = $value; return $this; }
}
/**
 * :classDescription
 */
class TimeTargetInfo
{
/*
 * @var string
 */
public $ShowOnHolidays;
/*
 * @var int
 */
public $HolidayShowFrom;
/*
 * @var int
 */
public $HolidayShowTo;
/*
 * @var ArrayOfTimeTargetItem
 */
public $DaysHours;
/*
 * @var string
 */
public $TimeZone;



public function __construct($ShowOnHolidays = null, $HolidayShowFrom = null, $HolidayShowTo = null, $DaysHours = null, $TimeZone = null)
{
$this->ShowOnHolidays = $ShowOnHolidays; $this->HolidayShowFrom = $HolidayShowFrom; $this->HolidayShowTo = $HolidayShowTo; $this->DaysHours = $DaysHours; $this->TimeZone = $TimeZone; 
}




public function getNamespace() { return 'API'; }

public function getXsiTypeName() { return ':xsiType'; }

/*
 * @return TimeTargetInfo
 */
public static function create() { return new self(); }

public function setShowOnHolidays($value){ $this->ShowOnHolidays = $value; return $this; }
public function setHolidayShowFrom($value){ $this->HolidayShowFrom = $value; return $this; }
public function setHolidayShowTo($value){ $this->HolidayShowTo = $value; return $this; }
public function setDaysHours($value){ $this->DaysHours = $value; return $this; }
public function setTimeZone($value){ $this->TimeZone = $value; return $this; }
}
/**
 * :classDescription
 */
class TimeTargetItem
{
/*
 * @var ArrayOfInteger
 */
public $Hours;
/*
 * @var ArrayOfInteger
 */
public $Days;



public function __construct($Hours = null, $Days = null)
{
$this->Hours = $Hours; $this->Days = $Days; 
}




public function getNamespace() { return 'API'; }

public function getXsiTypeName() { return ':xsiType'; }

/*
 * @return TimeTargetItem
 */
public static function create() { return new self(); }

public function setHours($value){ $this->Hours = $value; return $this; }
public function setDays($value){ $this->Days = $value; return $this; }
}
/**
 * :classDescription
 */
class CoverageInfo
{
/*
 * @var float
 */
public $Probability;
/*
 * @var float
 */
public $Price;



public function __construct($Probability = null, $Price = null)
{
$this->Probability = $Probability; $this->Price = $Price; 
}




public function getNamespace() { return 'API'; }

public function getXsiTypeName() { return ':xsiType'; }

/*
 * @return CoverageInfo
 */
public static function create() { return new self(); }

public function setProbability($value){ $this->Probability = $value; return $this; }
public function setPrice($value){ $this->Price = $value; return $this; }
}
/**
 * :classDescription
 */
class BannerPhrasesFilterRequestInfo
{
/*
 * @var ArrayOfInteger
 */
public $BannerIDS;
/*
 * @var ArrayOfString
 */
public $FieldsNames;
/*
 * @var string
 */
public $ConsiderTimeTarget;
/*
 * @var string
 */
public $RequestPrices;



public function __construct($BannerIDS = null, $FieldsNames = null, $ConsiderTimeTarget = null, $RequestPrices = null)
{
$this->BannerIDS = $BannerIDS; $this->FieldsNames = $FieldsNames; $this->ConsiderTimeTarget = $ConsiderTimeTarget; $this->RequestPrices = $RequestPrices; 
}




public function getNamespace() { return 'API'; }

public function getXsiTypeName() { return ':xsiType'; }

/*
 * @return BannerPhrasesFilterRequestInfo
 */
public static function create() { return new self(); }

public function setBannerIDS($value){ $this->BannerIDS = $value; return $this; }
public function setFieldsNames($value){ $this->FieldsNames = $value; return $this; }
public function setConsiderTimeTarget($value){ $this->ConsiderTimeTarget = $value; return $this; }
public function setRequestPrices($value){ $this->RequestPrices = $value; return $this; }
}
/**
 * :classDescription
 */
class PhrasePriceInfo
{
/*
 * @var int
 */
public $PhraseID;
/*
 * @var int
 */
public $BannerID;
/*
 * @var int
 */
public $CampaignID;
/*
 * @var float
 */
public $Price;
/*
 * @var string
 */
public $AutoBroker;
/*
 * @var string
 */
public $AutoBudgetPriority;
/*
 * @var float
 */
public $ContextPrice;



public function __construct($PhraseID = null, $BannerID = null, $CampaignID = null, $Price = null, $AutoBroker = null, $AutoBudgetPriority = null, $ContextPrice = null)
{
$this->PhraseID = $PhraseID; $this->BannerID = $BannerID; $this->CampaignID = $CampaignID; $this->Price = $Price; $this->AutoBroker = $AutoBroker; $this->AutoBudgetPriority = $AutoBudgetPriority; $this->ContextPrice = $ContextPrice; 
}




public function getNamespace() { return 'API'; }

public function getXsiTypeName() { return ':xsiType'; }

/*
 * @return PhrasePriceInfo
 */
public static function create() { return new self(); }

public function setPhraseID($value){ $this->PhraseID = $value; return $this; }
public function setBannerID($value){ $this->BannerID = $value; return $this; }
public function setCampaignID($value){ $this->CampaignID = $value; return $this; }
public function setPrice($value){ $this->Price = $value; return $this; }
public function setAutoBroker($value){ $this->AutoBroker = $value; return $this; }
public function setAutoBudgetPriority($value){ $this->AutoBudgetPriority = $value; return $this; }
public function setContextPrice($value){ $this->ContextPrice = $value; return $this; }
}
/**
 * :classDescription
 */
class BannerPhraseInfo
{
/*
 * @var string
 */
public $Phrase;
/*
 * @var string
 */
public $IsRubric;
/*
 * @var int
 */
public $Clicks;
/*
 * @var int
 */
public $FirstPlaceClicks;
/*
 * @var int
 */
public $PremiumClicks;
/*
 * @var int
 */
public $Shows;
/*
 * @var float
 */
public $Min;
/*
 * @var float
 */
public $Max;
/*
 * @var float
 */
public $PremiumMin;
/*
 * @var float
 */
public $PremiumMax;
/*
 * @var float
 */
public $Market;
/*
 * @var float
 */
public $CTR;
/*
 * @var float
 */
public $FirstPlaceCTR;
/*
 * @var float
 */
public $PremiumCTR;
/*
 * @var string
 */
public $LowCTRWarning;
/*
 * @var string
 */
public $LowCTR;
/*
 * @var float
 */
public $ContextPrice;
/*
 * @var ArrayOfCoverageInfo
 */
public $ContextCoverage;
/*
 * @var int
 */
public $BannerID;
/*
 * @var float
 */
public $Price;
/*
 * @var ArrayOfFloat
 */
public $Prices;
/*
 * @var ArrayOfCoverageInfo
 */
public $Coverage;
/*
 * @var string
 */
public $AutoBroker;
/*
 * @var int
 */
public $PhraseID;
/*
 * @var float
 */
public $CurrentOnSearch;
/*
 * @var int
 */
public $CampaignID;
/*
 * @var float
 */
public $MinPrice;
/*
 * @var string
 */
public $AutoBudgetPriority;
/*
 * @var string
 */
public $StatusPhraseModerate;
/*
 * @var string
 */
public $ContextLowCTR;



public function __construct($Phrase = null, $IsRubric = null, $Clicks = null, $FirstPlaceClicks = null, $PremiumClicks = null, $Shows = null, $Min = null, $Max = null, $PremiumMin = null, $PremiumMax = null, $Market = null, $CTR = null, $FirstPlaceCTR = null, $PremiumCTR = null, $LowCTRWarning = null, $LowCTR = null, $ContextPrice = null, $ContextCoverage = null, $BannerID = null, $Price = null, $Prices = null, $Coverage = null, $AutoBroker = null, $PhraseID = null, $CurrentOnSearch = null, $CampaignID = null, $MinPrice = null, $AutoBudgetPriority = null, $StatusPhraseModerate = null, $ContextLowCTR = null)
{
$this->Phrase = $Phrase; $this->IsRubric = $IsRubric; $this->Clicks = $Clicks; $this->FirstPlaceClicks = $FirstPlaceClicks; $this->PremiumClicks = $PremiumClicks; $this->Shows = $Shows; $this->Min = $Min; $this->Max = $Max; $this->PremiumMin = $PremiumMin; $this->PremiumMax = $PremiumMax; $this->Market = $Market; $this->CTR = $CTR; $this->FirstPlaceCTR = $FirstPlaceCTR; $this->PremiumCTR = $PremiumCTR; $this->LowCTRWarning = $LowCTRWarning; $this->LowCTR = $LowCTR; $this->ContextPrice = $ContextPrice; $this->ContextCoverage = $ContextCoverage; $this->BannerID = $BannerID; $this->Price = $Price; $this->Prices = $Prices; $this->Coverage = $Coverage; $this->AutoBroker = $AutoBroker; $this->PhraseID = $PhraseID; $this->CurrentOnSearch = $CurrentOnSearch; $this->CampaignID = $CampaignID; $this->MinPrice = $MinPrice; $this->AutoBudgetPriority = $AutoBudgetPriority; $this->StatusPhraseModerate = $StatusPhraseModerate; $this->ContextLowCTR = $ContextLowCTR; 
}




public function getNamespace() { return 'API'; }

public function getXsiTypeName() { return ':xsiType'; }

/*
 * @return BannerPhraseInfo
 */
public static function create() { return new self(); }

public function setPhrase($value){ $this->Phrase = $value; return $this; }
public function setIsRubric($value){ $this->IsRubric = $value; return $this; }
public function setClicks($value){ $this->Clicks = $value; return $this; }
public function setFirstPlaceClicks($value){ $this->FirstPlaceClicks = $value; return $this; }
public function setPremiumClicks($value){ $this->PremiumClicks = $value; return $this; }
public function setShows($value){ $this->Shows = $value; return $this; }
public function setMin($value){ $this->Min = $value; return $this; }
public function setMax($value){ $this->Max = $value; return $this; }
public function setPremiumMin($value){ $this->PremiumMin = $value; return $this; }
public function setPremiumMax($value){ $this->PremiumMax = $value; return $this; }
public function setMarket($value){ $this->Market = $value; return $this; }
public function setCTR($value){ $this->CTR = $value; return $this; }
public function setFirstPlaceCTR($value){ $this->FirstPlaceCTR = $value; return $this; }
public function setPremiumCTR($value){ $this->PremiumCTR = $value; return $this; }
public function setLowCTRWarning($value){ $this->LowCTRWarning = $value; return $this; }
public function setLowCTR($value){ $this->LowCTR = $value; return $this; }
public function setContextPrice($value){ $this->ContextPrice = $value; return $this; }
public function setContextCoverage($value){ $this->ContextCoverage = $value; return $this; }
public function setBannerID($value){ $this->BannerID = $value; return $this; }
public function setPrice($value){ $this->Price = $value; return $this; }
public function setPrices($value){ $this->Prices = $value; return $this; }
public function setCoverage($value){ $this->Coverage = $value; return $this; }
public function setAutoBroker($value){ $this->AutoBroker = $value; return $this; }
public function setPhraseID($value){ $this->PhraseID = $value; return $this; }
public function setCurrentOnSearch($value){ $this->CurrentOnSearch = $value; return $this; }
public function setCampaignID($value){ $this->CampaignID = $value; return $this; }
public function setMinPrice($value){ $this->MinPrice = $value; return $this; }
public function setAutoBudgetPriority($value){ $this->AutoBudgetPriority = $value; return $this; }
public function setStatusPhraseModerate($value){ $this->StatusPhraseModerate = $value; return $this; }
public function setContextLowCTR($value){ $this->ContextLowCTR = $value; return $this; }
}
/**
 * :classDescription
 */
class BannerInfo
{
/*
 * @var int
 */
public $BannerID;
/*
 * @var int
 */
public $CampaignID;
/*
 * @var string
 */
public $Title;
/*
 * @var string
 */
public $Text;
/*
 * @var string
 */
public $Href;
/*
 * @var string
 */
public $Domain;
/*
 * @var string
 */
public $Geo;
/*
 * @var ContactInfo
 */
public $ContactInfo;
/*
 * @var ArrayOfBannerPhraseInfo
 */
public $Phrases;
/*
 * @var string
 */
public $StatusActivating;
/*
 * @var string
 */
public $StatusArchive;
/*
 * @var string
 */
public $StatusBannerModerate;
/*
 * @var string
 */
public $StatusPhrasesModerate;
/*
 * @var string
 */
public $StatusPhoneModerate;
/*
 * @var string
 */
public $StatusShow;
/*
 * @var string
 */
public $IsActive;
/*
 * @var string
 */
public $StatusSitelinksModerate;
/*
 * @var ArrayOfSitelink
 */
public $Sitelinks;
/*
 * @var ArrayOfString
 */
public $AdWarnings;
/*
 * @var string
 */
public $FixedOnModeration;
/*
 * @var ArrayOfRejectReason
 */
public $ModerateRejectionReasons;



public function __construct($BannerID = null, $CampaignID = null, $Title = null, $Text = null, $Href = null, $Domain = null, $Geo = null, $ContactInfo = null, $Phrases = null, $StatusActivating = null, $StatusArchive = null, $StatusBannerModerate = null, $StatusPhrasesModerate = null, $StatusPhoneModerate = null, $StatusShow = null, $IsActive = null, $StatusSitelinksModerate = null, $Sitelinks = null, $AdWarnings = null, $FixedOnModeration = null, $ModerateRejectionReasons = null)
{
$this->BannerID = $BannerID; $this->CampaignID = $CampaignID; $this->Title = $Title; $this->Text = $Text; $this->Href = $Href; $this->Domain = $Domain; $this->Geo = $Geo; $this->ContactInfo = $ContactInfo; $this->Phrases = $Phrases; $this->StatusActivating = $StatusActivating; $this->StatusArchive = $StatusArchive; $this->StatusBannerModerate = $StatusBannerModerate; $this->StatusPhrasesModerate = $StatusPhrasesModerate; $this->StatusPhoneModerate = $StatusPhoneModerate; $this->StatusShow = $StatusShow; $this->IsActive = $IsActive; $this->StatusSitelinksModerate = $StatusSitelinksModerate; $this->Sitelinks = $Sitelinks; $this->AdWarnings = $AdWarnings; $this->FixedOnModeration = $FixedOnModeration; $this->ModerateRejectionReasons = $ModerateRejectionReasons; 
}




public function getNamespace() { return 'API'; }

public function getXsiTypeName() { return ':xsiType'; }

/*
 * @return BannerInfo
 */
public static function create() { return new self(); }

public function setBannerID($value){ $this->BannerID = $value; return $this; }
public function setCampaignID($value){ $this->CampaignID = $value; return $this; }
public function setTitle($value){ $this->Title = $value; return $this; }
public function setText($value){ $this->Text = $value; return $this; }
public function setHref($value){ $this->Href = $value; return $this; }
public function setDomain($value){ $this->Domain = $value; return $this; }
public function setGeo($value){ $this->Geo = $value; return $this; }
public function setContactInfo($value){ $this->ContactInfo = $value; return $this; }
public function setPhrases($value){ $this->Phrases = $value; return $this; }
public function setStatusActivating($value){ $this->StatusActivating = $value; return $this; }
public function setStatusArchive($value){ $this->StatusArchive = $value; return $this; }
public function setStatusBannerModerate($value){ $this->StatusBannerModerate = $value; return $this; }
public function setStatusPhrasesModerate($value){ $this->StatusPhrasesModerate = $value; return $this; }
public function setStatusPhoneModerate($value){ $this->StatusPhoneModerate = $value; return $this; }
public function setStatusShow($value){ $this->StatusShow = $value; return $this; }
public function setIsActive($value){ $this->IsActive = $value; return $this; }
public function setStatusSitelinksModerate($value){ $this->StatusSitelinksModerate = $value; return $this; }
public function setSitelinks($value){ $this->Sitelinks = $value; return $this; }
public function setAdWarnings($value){ $this->AdWarnings = $value; return $this; }
public function setFixedOnModeration($value){ $this->FixedOnModeration = $value; return $this; }
public function setModerateRejectionReasons($value){ $this->ModerateRejectionReasons = $value; return $this; }
}
/**
 * :classDescription
 */
class Sitelink
{
/*
 * @var string
 */
public $Title;
/*
 * @var string
 */
public $Href;



public function __construct($Title = null, $Href = null)
{
$this->Title = $Title; $this->Href = $Href; 
}




public function getNamespace() { return 'API'; }

public function getXsiTypeName() { return ':xsiType'; }

/*
 * @return Sitelink
 */
public static function create() { return new self(); }

public function setTitle($value){ $this->Title = $value; return $this; }
public function setHref($value){ $this->Href = $value; return $this; }
}
/**
 * :classDescription
 */
class RejectReason
{
/*
 * @var string
 */
public $Type;
/*
 * @var string
 */
public $Text;



public function __construct($Type = null, $Text = null)
{
$this->Type = $Type; $this->Text = $Text; 
}




public function getNamespace() { return 'API'; }

public function getXsiTypeName() { return ':xsiType'; }

/*
 * @return RejectReason
 */
public static function create() { return new self(); }

public function setType($value){ $this->Type = $value; return $this; }
public function setText($value){ $this->Text = $value; return $this; }
}
/**
 * :classDescription
 */
class CampaignBidsInfo
{
/*
 * @var int
 */
public $CampaignID;
/*
 * @var ArrayOfInteger
 */
public $BannerIDS;



public function __construct($CampaignID = null, $BannerIDS = null)
{
$this->CampaignID = $CampaignID; $this->BannerIDS = $BannerIDS; 
}




public function getNamespace() { return 'API'; }

public function getXsiTypeName() { return ':xsiType'; }

/*
 * @return CampaignBidsInfo
 */
public static function create() { return new self(); }

public function setCampaignID($value){ $this->CampaignID = $value; return $this; }
public function setBannerIDS($value){ $this->BannerIDS = $value; return $this; }
}
/**
 * :classDescription
 */
class GetCampaignsInfo
{
/*
 * @var ArrayOfString
 */
public $Logins;
/*
 * @var CampaignsFilterInfo
 */
public $Filter;



public function __construct($Logins = null, $Filter = null)
{
$this->Logins = $Logins; $this->Filter = $Filter; 
}




public function getNamespace() { return 'API'; }

public function getXsiTypeName() { return ':xsiType'; }

/*
 * @return GetCampaignsInfo
 */
public static function create() { return new self(); }

public function setLogins($value){ $this->Logins = $value; return $this; }
public function setFilter($value){ $this->Filter = $value; return $this; }
}
/**
 * :classDescription
 */
class CampaignsFilterInfo
{
/*
 * @var ArrayOfString
 */
public $StatusModerate;
/*
 * @var ArrayOfString
 */
public $IsActive;
/*
 * @var ArrayOfString
 */
public $StatusArchive;
/*
 * @var ArrayOfString
 */
public $StatusActivating;
/*
 * @var ArrayOfString
 */
public $StatusShow;



public function __construct($StatusModerate = null, $IsActive = null, $StatusArchive = null, $StatusActivating = null, $StatusShow = null)
{
$this->StatusModerate = $StatusModerate; $this->IsActive = $IsActive; $this->StatusArchive = $StatusArchive; $this->StatusActivating = $StatusActivating; $this->StatusShow = $StatusShow; 
}




public function getNamespace() { return 'API'; }

public function getXsiTypeName() { return ':xsiType'; }

/*
 * @return CampaignsFilterInfo
 */
public static function create() { return new self(); }

public function setStatusModerate($value){ $this->StatusModerate = $value; return $this; }
public function setIsActive($value){ $this->IsActive = $value; return $this; }
public function setStatusArchive($value){ $this->StatusArchive = $value; return $this; }
public function setStatusActivating($value){ $this->StatusActivating = $value; return $this; }
public function setStatusShow($value){ $this->StatusShow = $value; return $this; }
}
/**
 * :classDescription
 */
class BannersFilterInfo
{
/*
 * @var ArrayOfString
 */
public $StatusPhoneModerate;
/*
 * @var ArrayOfString
 */
public $StatusBannerModerate;
/*
 * @var ArrayOfString
 */
public $StatusPhrasesModerate;
/*
 * @var ArrayOfString
 */
public $StatusActivating;
/*
 * @var ArrayOfString
 */
public $StatusShow;
/*
 * @var ArrayOfString
 */
public $IsActive;
/*
 * @var ArrayOfString
 */
public $StatusArchive;



public function __construct($StatusPhoneModerate = null, $StatusBannerModerate = null, $StatusPhrasesModerate = null, $StatusActivating = null, $StatusShow = null, $IsActive = null, $StatusArchive = null)
{
$this->StatusPhoneModerate = $StatusPhoneModerate; $this->StatusBannerModerate = $StatusBannerModerate; $this->StatusPhrasesModerate = $StatusPhrasesModerate; $this->StatusActivating = $StatusActivating; $this->StatusShow = $StatusShow; $this->IsActive = $IsActive; $this->StatusArchive = $StatusArchive; 
}




public function getNamespace() { return 'API'; }

public function getXsiTypeName() { return ':xsiType'; }

/*
 * @return BannersFilterInfo
 */
public static function create() { return new self(); }

public function setStatusPhoneModerate($value){ $this->StatusPhoneModerate = $value; return $this; }
public function setStatusBannerModerate($value){ $this->StatusBannerModerate = $value; return $this; }
public function setStatusPhrasesModerate($value){ $this->StatusPhrasesModerate = $value; return $this; }
public function setStatusActivating($value){ $this->StatusActivating = $value; return $this; }
public function setStatusShow($value){ $this->StatusShow = $value; return $this; }
public function setIsActive($value){ $this->IsActive = $value; return $this; }
public function setStatusArchive($value){ $this->StatusArchive = $value; return $this; }
}
/**
 * :classDescription
 */
class GetBannersInfo
{
/*
 * @var ArrayOfInteger
 */
public $CampaignIDS;
/*
 * @var ArrayOfInteger
 */
public $BannerIDS;
/*
 * @var BannersFilterInfo
 */
public $Filter;



public function __construct($CampaignIDS = null, $BannerIDS = null, $Filter = null)
{
$this->CampaignIDS = $CampaignIDS; $this->BannerIDS = $BannerIDS; $this->Filter = $Filter; 
}




public function getNamespace() { return 'API'; }

public function getXsiTypeName() { return ':xsiType'; }

/*
 * @return GetBannersInfo
 */
public static function create() { return new self(); }

public function setCampaignIDS($value){ $this->CampaignIDS = $value; return $this; }
public function setBannerIDS($value){ $this->BannerIDS = $value; return $this; }
public function setFilter($value){ $this->Filter = $value; return $this; }
}
/**
 * :classDescription
 */
class NewForecastInfo
{
/*
 * @var ArrayOfInteger
 */
public $Categories;
/*
 * @var ArrayOfString
 */
public $Phrases;
/*
 * @var ArrayOfInteger
 */
public $GeoID;



public function __construct($Categories = null, $Phrases = null, $GeoID = null)
{
$this->Categories = $Categories; $this->Phrases = $Phrases; $this->GeoID = $GeoID; 
}




public function getNamespace() { return 'API'; }

public function getXsiTypeName() { return ':xsiType'; }

/*
 * @return NewForecastInfo
 */
public static function create() { return new self(); }

public function setCategories($value){ $this->Categories = $value; return $this; }
public function setPhrases($value){ $this->Phrases = $value; return $this; }
public function setGeoID($value){ $this->GeoID = $value; return $this; }
}
/**
 * :classDescription
 */
class ForecastCommonInfo
{
/*
 * @var int
 */
public $Geo;
/*
 * @var int
 */
public $Shows;
/*
 * @var int
 */
public $Clicks;
/*
 * @var int
 */
public $FirstPlaceClicks;
/*
 * @var int
 */
public $PremiumClicks;
/*
 * @var float
 */
public $Min;
/*
 * @var float
 */
public $Max;
/*
 * @var float
 */
public $PremiumMin;



public function __construct($Geo = null, $Shows = null, $Clicks = null, $FirstPlaceClicks = null, $PremiumClicks = null, $Min = null, $Max = null, $PremiumMin = null)
{
$this->Geo = $Geo; $this->Shows = $Shows; $this->Clicks = $Clicks; $this->FirstPlaceClicks = $FirstPlaceClicks; $this->PremiumClicks = $PremiumClicks; $this->Min = $Min; $this->Max = $Max; $this->PremiumMin = $PremiumMin; 
}




public function getNamespace() { return 'API'; }

public function getXsiTypeName() { return ':xsiType'; }

/*
 * @return ForecastCommonInfo
 */
public static function create() { return new self(); }

public function setGeo($value){ $this->Geo = $value; return $this; }
public function setShows($value){ $this->Shows = $value; return $this; }
public function setClicks($value){ $this->Clicks = $value; return $this; }
public function setFirstPlaceClicks($value){ $this->FirstPlaceClicks = $value; return $this; }
public function setPremiumClicks($value){ $this->PremiumClicks = $value; return $this; }
public function setMin($value){ $this->Min = $value; return $this; }
public function setMax($value){ $this->Max = $value; return $this; }
public function setPremiumMin($value){ $this->PremiumMin = $value; return $this; }
}
/**
 * :classDescription
 */
class GetForecastInfo
{
/*
 * @var ArrayOfBannerPhraseInfo
 */
public $Categories;
/*
 * @var ArrayOfBannerPhraseInfo
 */
public $Phrases;
/*
 * @var ForecastCommonInfo
 */
public $Common;



public function __construct($Categories = null, $Phrases = null, $Common = null)
{
$this->Categories = $Categories; $this->Phrases = $Phrases; $this->Common = $Common; 
}




public function getNamespace() { return 'API'; }

public function getXsiTypeName() { return ':xsiType'; }

/*
 * @return GetForecastInfo
 */
public static function create() { return new self(); }

public function setCategories($value){ $this->Categories = $value; return $this; }
public function setPhrases($value){ $this->Phrases = $value; return $this; }
public function setCommon($value){ $this->Common = $value; return $this; }
}
/**
 * :classDescription
 */
class NewWordstatReportInfo
{
/*
 * @var ArrayOfString
 */
public $Phrases;
/*
 * @var ArrayOfInteger
 */
public $GeoID;



public function __construct($Phrases = null, $GeoID = null)
{
$this->Phrases = $Phrases; $this->GeoID = $GeoID; 
}




public function getNamespace() { return 'API'; }

public function getXsiTypeName() { return ':xsiType'; }

/*
 * @return NewWordstatReportInfo
 */
public static function create() { return new self(); }

public function setPhrases($value){ $this->Phrases = $value; return $this; }
public function setGeoID($value){ $this->GeoID = $value; return $this; }
}
/**
 * :classDescription
 */
class WordstatReportStatusInfo
{
/*
 * @var int
 */
public $ReportID;
/*
 * @var string
 */
public $StatusReport;



public function __construct($ReportID = null, $StatusReport = null)
{
$this->ReportID = $ReportID; $this->StatusReport = $StatusReport; 
}




public function getNamespace() { return 'API'; }

public function getXsiTypeName() { return ':xsiType'; }

/*
 * @return WordstatReportStatusInfo
 */
public static function create() { return new self(); }

public function setReportID($value){ $this->ReportID = $value; return $this; }
public function setStatusReport($value){ $this->StatusReport = $value; return $this; }
}
/**
 * :classDescription
 */
class WordstatReportInfo
{
/*
 * @var string
 */
public $Phrase;
/*
 * @var ArrayOfInteger
 */
public $GeoID;
/*
 * @var ArrayOfWordstatItem
 */
public $SearchedWith;
/*
 * @var ArrayOfWordstatItem
 */
public $SearchedAlso;



public function __construct($Phrase = null, $GeoID = null, $SearchedWith = null, $SearchedAlso = null)
{
$this->Phrase = $Phrase; $this->GeoID = $GeoID; $this->SearchedWith = $SearchedWith; $this->SearchedAlso = $SearchedAlso; 
}




public function getNamespace() { return 'API'; }

public function getXsiTypeName() { return ':xsiType'; }

/*
 * @return WordstatReportInfo
 */
public static function create() { return new self(); }

public function setPhrase($value){ $this->Phrase = $value; return $this; }
public function setGeoID($value){ $this->GeoID = $value; return $this; }
public function setSearchedWith($value){ $this->SearchedWith = $value; return $this; }
public function setSearchedAlso($value){ $this->SearchedAlso = $value; return $this; }
}
/**
 * :classDescription
 */
class WordstatItem
{
/*
 * @var string
 */
public $Phrase;
/*
 * @var int
 */
public $Shows;



public function __construct($Phrase = null, $Shows = null)
{
$this->Phrase = $Phrase; $this->Shows = $Shows; 
}




public function getNamespace() { return 'API'; }

public function getXsiTypeName() { return ':xsiType'; }

/*
 * @return WordstatItem
 */
public static function create() { return new self(); }

public function setPhrase($value){ $this->Phrase = $value; return $this; }
public function setShows($value){ $this->Shows = $value; return $this; }
}
/**
 * :classDescription
 */
class StatGoalInfo
{
/*
 * @var int
 */
public $GoalID;
/*
 * @var string
 */
public $Name;



public function __construct($GoalID = null, $Name = null)
{
$this->GoalID = $GoalID; $this->Name = $Name; 
}




public function getNamespace() { return 'API'; }

public function getXsiTypeName() { return ':xsiType'; }

/*
 * @return StatGoalInfo
 */
public static function create() { return new self(); }

public function setGoalID($value){ $this->GoalID = $value; return $this; }
public function setName($value){ $this->Name = $value; return $this; }
}
/**
 * :classDescription
 */
class AutoPriceInfo
{
/*
 * @var int
 */
public $CampaignID;
/*
 * @var string
 */
public $Mode;
/*
 * @var float
 */
public $SinglePrice;
/*
 * @var string
 */
public $PriceBase;
/*
 * @var string
 */
public $ProcBase;
/*
 * @var float
 */
public $MaxPrice;
/*
 * @var int
 */
public $Proc;
/*
 * @var string
 */
public $UpdatePhrases;
/*
 * @var string
 */
public $UpdateCategories;



public function __construct($CampaignID = null, $Mode = null, $SinglePrice = null, $PriceBase = null, $ProcBase = null, $MaxPrice = null, $Proc = null, $UpdatePhrases = null, $UpdateCategories = null)
{
$this->CampaignID = $CampaignID; $this->Mode = $Mode; $this->SinglePrice = $SinglePrice; $this->PriceBase = $PriceBase; $this->ProcBase = $ProcBase; $this->MaxPrice = $MaxPrice; $this->Proc = $Proc; $this->UpdatePhrases = $UpdatePhrases; $this->UpdateCategories = $UpdateCategories; 
}




public function getNamespace() { return 'API'; }

public function getXsiTypeName() { return ':xsiType'; }

/*
 * @return AutoPriceInfo
 */
public static function create() { return new self(); }

public function setCampaignID($value){ $this->CampaignID = $value; return $this; }
public function setMode($value){ $this->Mode = $value; return $this; }
public function setSinglePrice($value){ $this->SinglePrice = $value; return $this; }
public function setPriceBase($value){ $this->PriceBase = $value; return $this; }
public function setProcBase($value){ $this->ProcBase = $value; return $this; }
public function setMaxPrice($value){ $this->MaxPrice = $value; return $this; }
public function setProc($value){ $this->Proc = $value; return $this; }
public function setUpdatePhrases($value){ $this->UpdatePhrases = $value; return $this; }
public function setUpdateCategories($value){ $this->UpdateCategories = $value; return $this; }
}
/**
 * :classDescription
 */
class ClientInfo
{
/*
 * @var string
 */
public $Phone;
/*
 * @var date
 */
public $DateCreate;
/*
 * @var string
 */
public $FIO;
/*
 * @var string
 */
public $Email;
/*
 * @var string
 */
public $Login;
/*
 * @var string
 */
public $StatusArch;
/*
 * @var float
 */
public $Discount;
/*
 * @var string
 */
public $Role;
/*
 * @var string
 */
public $NonResident;
/*
 * @var string
 */
public $SendNews;
/*
 * @var string
 */
public $SendAccNews;
/*
 * @var string
 */
public $SendWarn;
/*
 * @var ArrayOfString
 */
public $ManagersLogins;



public function __construct($Phone = null, $DateCreate = null, $FIO = null, $Email = null, $Login = null, $StatusArch = null, $Discount = null, $Role = null, $NonResident = null, $SendNews = null, $SendAccNews = null, $SendWarn = null, $ManagersLogins = null)
{
$this->Phone = $Phone; $this->DateCreate = $DateCreate; $this->FIO = $FIO; $this->Email = $Email; $this->Login = $Login; $this->StatusArch = $StatusArch; $this->Discount = $Discount; $this->Role = $Role; $this->NonResident = $NonResident; $this->SendNews = $SendNews; $this->SendAccNews = $SendAccNews; $this->SendWarn = $SendWarn; $this->ManagersLogins = $ManagersLogins; 
}




public function getNamespace() { return 'API'; }

public function getXsiTypeName() { return ':xsiType'; }

/*
 * @return ClientInfo
 */
public static function create() { return new self(); }

public function setPhone($value){ $this->Phone = $value; return $this; }
public function setDateCreate($value){ $this->DateCreate = $value; return $this; }
public function setFIO($value){ $this->FIO = $value; return $this; }
public function setEmail($value){ $this->Email = $value; return $this; }
public function setLogin($value){ $this->Login = $value; return $this; }
public function setStatusArch($value){ $this->StatusArch = $value; return $this; }
public function setDiscount($value){ $this->Discount = $value; return $this; }
public function setRole($value){ $this->Role = $value; return $this; }
public function setNonResident($value){ $this->NonResident = $value; return $this; }
public function setSendNews($value){ $this->SendNews = $value; return $this; }
public function setSendAccNews($value){ $this->SendAccNews = $value; return $this; }
public function setSendWarn($value){ $this->SendWarn = $value; return $this; }
public function setManagersLogins($value){ $this->ManagersLogins = $value; return $this; }
}
/**
 * :classDescription
 */
class ShortClientInfo
{
/*
 * @var string
 */
public $Login;
/*
 * @var string
 */
public $FIO;
/*
 * @var string
 */
public $Role;



public function __construct($Login = null, $FIO = null, $Role = null)
{
$this->Login = $Login; $this->FIO = $FIO; $this->Role = $Role; 
}




public function getNamespace() { return 'API'; }

public function getXsiTypeName() { return ':xsiType'; }

/*
 * @return ShortClientInfo
 */
public static function create() { return new self(); }

public function setLogin($value){ $this->Login = $value; return $this; }
public function setFIO($value){ $this->FIO = $value; return $this; }
public function setRole($value){ $this->Role = $value; return $this; }
}
/**
 * :classDescription
 */
class VersionDesc
{
/*
 * @var int
 */
public $VersionNumber;
/*
 * @var string
 */
public $LinkWSDL;
/*
 * @var date
 */
public $BorderDate;



public function __construct($VersionNumber = null, $LinkWSDL = null, $BorderDate = null)
{
$this->VersionNumber = $VersionNumber; $this->LinkWSDL = $LinkWSDL; $this->BorderDate = $BorderDate; 
}




public function getNamespace() { return 'API'; }

public function getXsiTypeName() { return ':xsiType'; }

/*
 * @return VersionDesc
 */
public static function create() { return new self(); }

public function setVersionNumber($value){ $this->VersionNumber = $value; return $this; }
public function setLinkWSDL($value){ $this->LinkWSDL = $value; return $this; }
public function setBorderDate($value){ $this->BorderDate = $value; return $this; }
}
/**
 * :classDescription
 */
class KeywordsSuggestionInfo
{
/*
 * @var ArrayOfString
 */
public $Keywords;



public function __construct($Keywords = null)
{
$this->Keywords = $Keywords; 
}




public function getNamespace() { return 'API'; }

public function getXsiTypeName() { return ':xsiType'; }

/*
 * @return KeywordsSuggestionInfo
 */
public static function create() { return new self(); }

public function setKeywords($value){ $this->Keywords = $value; return $this; }
}
/**
 * :classDescription
 */
class CreateNewSubclientRequest
{
/*
 * @var string
 */
public $Login;
/*
 * @var string
 */
public $AgencyLogin;
/*
 * @var string
 */
public $Name;
/*
 * @var string
 */
public $Surname;



public function __construct($Login = null, $AgencyLogin = null, $Name = null, $Surname = null)
{
$this->Login = $Login; $this->AgencyLogin = $AgencyLogin; $this->Name = $Name; $this->Surname = $Surname; 
}




public function getNamespace() { return 'API'; }

public function getXsiTypeName() { return ':xsiType'; }

/*
 * @return CreateNewSubclientRequest
 */
public static function create() { return new self(); }

public function setLogin($value){ $this->Login = $value; return $this; }
public function setAgencyLogin($value){ $this->AgencyLogin = $value; return $this; }
public function setName($value){ $this->Name = $value; return $this; }
public function setSurname($value){ $this->Surname = $value; return $this; }
}
/**
 * :classDescription
 */
class CreateNewSubclientResponse
{
/*
 * @var string
 */
public $Login;
/*
 * @var string
 */
public $Password;
/*
 * @var string
 */
public $FIO;
/*
 * @var string
 */
public $Email;
/*
 * @var int
 */
public $ClientID;



public function __construct($Login = null, $Password = null, $FIO = null, $Email = null, $ClientID = null)
{
$this->Login = $Login; $this->Password = $Password; $this->FIO = $FIO; $this->Email = $Email; $this->ClientID = $ClientID; 
}




public function getNamespace() { return 'API'; }

public function getXsiTypeName() { return ':xsiType'; }

/*
 * @return CreateNewSubclientResponse
 */
public static function create() { return new self(); }

public function setLogin($value){ $this->Login = $value; return $this; }
public function setPassword($value){ $this->Password = $value; return $this; }
public function setFIO($value){ $this->FIO = $value; return $this; }
public function setEmail($value){ $this->Email = $value; return $this; }
public function setClientID($value){ $this->ClientID = $value; return $this; }
}

<?php


namespace AdvancedContextLib\Network\YandexDirect\V3\Service;

use AdvancedContextLib\Network\YandexDirect\V3\Lib\SoapClient;


/**
 * 
 */
class CommonService extends SoapClient
{

	/**
	 * 
	 * @return 
	 */
	public function GetVersion()
	{

		$result = $this->__soapCall("GetVersion", array());
		return $result;
	}
	/**
	 * 
	 * @return 
	 */
	public function GetClientsList()
	{

		$result = $this->__soapCall("GetClientsList", array());
		return $result;
	}
	/**
	 * 
	 * @param ShortClientInfo $params Array
	 * @return 
	 */
	public function GetSubClients($params)
	{

		$result = $this->__soapCall("GetSubClients", array($params));
		return $result;
	}
	/**
	 * 
	 * @param AutoPriceInfo $params Array
	 * @return 
	 */
	public function SetAutoPrice($params)
	{

		$result = $this->__soapCall("SetAutoPrice", array($params));
		return $result;
	}
	/**
	 * 
	 * @param integer $params Array
	 * @return 
	 */
	public function DeleteReport($params)
	{

		$result = $this->__soapCall("DeleteReport", array($params));
		return $result;
	}
	/**
	 * 
	 * @param CampaignIDInfo $params Array
	 * @return 
	 */
	public function GetCampaignParams($params)
	{

		$result = $this->__soapCall("GetCampaignParams", array($params));
		return $result;
	}
	/**
	 * 
	 * @param integer $params Array
	 * @return 
	 */
	public function DeleteForecastReport($params)
	{

		$result = $this->__soapCall("DeleteForecastReport", array($params));
		return $result;
	}
	/**
	 * 
	 * @param CampaignBidsInfo $params Array
	 * @return 
	 */
	public function ModerateBanners($params)
	{

		$result = $this->__soapCall("ModerateBanners", array($params));
		return $result;
	}
	/**
	 * 
	 * @param CampaignBidsInfo $params Array
	 * @return 
	 */
	public function StopBanners($params)
	{

		$result = $this->__soapCall("StopBanners", array($params));
		return $result;
	}
	/**
	 * 
	 * @param CampaignBidsInfo $params Array
	 * @return 
	 */
	public function ResumeBanners($params)
	{

		$result = $this->__soapCall("ResumeBanners", array($params));
		return $result;
	}
	/**
	 * 
	 * @param CampaignBidsInfo $params Array
	 * @return 
	 */
	public function ArchiveBanners($params)
	{

		$result = $this->__soapCall("ArchiveBanners", array($params));
		return $result;
	}
	/**
	 * 
	 * @param CampaignBidsInfo $params Array
	 * @return 
	 */
	public function UnArchiveBanners($params)
	{

		$result = $this->__soapCall("UnArchiveBanners", array($params));
		return $result;
	}
	/**
	 * 
	 * @param CampaignBidsInfo $params Array
	 * @return 
	 */
	public function DeleteBanners($params)
	{

		$result = $this->__soapCall("DeleteBanners", array($params));
		return $result;
	}
	/**
	 * 
	 * @param CampaignIDInfo $params Array
	 * @return 
	 */
	public function StopCampaign($params)
	{

		$result = $this->__soapCall("StopCampaign", array($params));
		return $result;
	}
	/**
	 * 
	 * @param CampaignIDInfo $params Array
	 * @return 
	 */
	public function DeleteCampaign($params)
	{

		$result = $this->__soapCall("DeleteCampaign", array($params));
		return $result;
	}
	/**
	 * 
	 * @param CampaignIDInfo $params Array
	 * @return 
	 */
	public function UnArchiveCampaign($params)
	{

		$result = $this->__soapCall("UnArchiveCampaign", array($params));
		return $result;
	}
	/**
	 * 
	 * @param CampaignIDInfo $params Array
	 * @return 
	 */
	public function ArchiveCampaign($params)
	{

		$result = $this->__soapCall("ArchiveCampaign", array($params));
		return $result;
	}
	/**
	 * 
	 * @param CampaignIDInfo $params Array
	 * @return 
	 */
	public function ResumeCampaign($params)
	{

		$result = $this->__soapCall("ResumeCampaign", array($params));
		return $result;
	}
	/**
	 * 
	 * @return 
	 */
	public function GetReportList()
	{

		$result = $this->__soapCall("GetReportList", array());
		return $result;
	}
	/**
	 * 
	 * @param ArrayOfPingAPI_XInfo $params Array
	 * @return 
	 */
	public function PingAPI_X($params)
	{

		$result = $this->__soapCall("PingAPI_X", array($params));
		return $result;
	}
	/**
	 * 
	 * @return 
	 */
	public function PingAPI()
	{

		$result = $this->__soapCall("PingAPI", array());
		return $result;
	}
	/**
	 * 
	 * @param ArrayOfString $params Array
	 * @return 
	 */
	public function GetClientsUnits($params)
	{

		$result = $this->__soapCall("GetClientsUnits", array($params));
		return $result;
	}
	/**
	 * 
	 * @param ArrayOfString $params Array
	 * @return 
	 */
	public function GetClientInfo($params)
	{

		$result = $this->__soapCall("GetClientInfo", array($params));
		return $result;
	}
	/**
	 * 
	 * @param GetBannersInfo $params Array
	 * @return 
	 */
	public function GetBanners($params)
	{

		$result = $this->__soapCall("GetBanners", array($params));
		return $result;
	}
	/**
	 * 
	 * @param ArrayOfString $params Array
	 * @return 
	 */
	public function GetCampaignsList($params)
	{

		$result = $this->__soapCall("GetCampaignsList", array($params));
		return $result;
	}
	/**
	 * 
	 * @param GetCampaignsInfo $params Array
	 * @return 
	 */
	public function GetCampaignsListFilter($params)
	{

		$result = $this->__soapCall("GetCampaignsListFilter", array($params));
		return $result;
	}
	/**
	 * 
	 * @param ArrayOfInteger $params Array
	 * @return 
	 */
	public function GetBalance($params)
	{

		$result = $this->__soapCall("GetBalance", array($params));
		return $result;
	}
	/**
	 * 
	 * @param ArrayOfInteger $params Array
	 * @return 
	 */
	public function GetBannerPhrases($params)
	{

		$result = $this->__soapCall("GetBannerPhrases", array($params));
		return $result;
	}
	/**
	 * 
	 * @param BannerPhrasesFilterRequestInfo $params Array
	 * @return 
	 */
	public function GetBannerPhrasesFilter($params)
	{

		$result = $this->__soapCall("GetBannerPhrasesFilter", array($params));
		return $result;
	}
	/**
	 * 
	 * @return 
	 */
	public function GetRegions()
	{

		$result = $this->__soapCall("GetRegions", array());
		return $result;
	}
	/**
	 * 
	 * @param NewReportInfo $params Array
	 * @return 
	 */
	public function CreateNewReport($params)
	{

		$result = $this->__soapCall("CreateNewReport", array($params));
		return $result;
	}
	/**
	 * 
	 * @param NewForecastInfo $params Array
	 * @return 
	 */
	public function CreateNewForecast($params)
	{

		$result = $this->__soapCall("CreateNewForecast", array($params));
		return $result;
	}
	/**
	 * 
	 * @param integer $params Array
	 * @return 
	 */
	public function GetForecast($params)
	{

		$result = $this->__soapCall("GetForecast", array($params));
		return $result;
	}
	/**
	 * 
	 * @return 
	 */
	public function GetRubrics()
	{

		$result = $this->__soapCall("GetRubrics", array());
		return $result;
	}
	/**
	 * 
	 * @return 
	 */
	public function GetTimeZones()
	{

		$result = $this->__soapCall("GetTimeZones", array());
		return $result;
	}
	/**
	 * 
	 * @return 
	 */
	public function GetForecastList()
	{

		$result = $this->__soapCall("GetForecastList", array());
		return $result;
	}
	/**
	 * 
	 * @param ArrayOfPhrasePriceInfo $params Array
	 * @return 
	 */
	public function UpdatePrices($params)
	{

		$result = $this->__soapCall("UpdatePrices", array($params));
		return $result;
	}
	/**
	 * 
	 * @param CampaignInfo $params Array
	 * @return 
	 */
	public function CreateOrUpdateCampaign($params)
	{

		$result = $this->__soapCall("CreateOrUpdateCampaign", array($params));
		return $result;
	}
	/**
	 * 
	 * @param ArrayOfBannerInfo $params Array
	 * @return 
	 */
	public function CreateOrUpdateBanners($params)
	{

		$result = $this->__soapCall("CreateOrUpdateBanners", array($params));
		return $result;
	}
	/**
	 * 
	 * @return 
	 */
	public function GetAvailableVersions()
	{

		$result = $this->__soapCall("GetAvailableVersions", array());
		return $result;
	}
	/**
	 * 
	 * @param KeywordsSuggestionInfo $params Array
	 * @return 
	 */
	public function GetKeywordsSuggestion($params)
	{

		$result = $this->__soapCall("GetKeywordsSuggestion", array($params));
		return $result;
	}
	/**
	 * 
	 * @param CreateNewSubclientRequest $params Array
	 * @return 
	 */
	public function CreateNewSubclient($params)
	{

		$result = $this->__soapCall("CreateNewSubclient", array($params));
		return $result;
	}
	/**
	 * 
	 * @param NewWordstatReportInfo $params Array
	 * @return 
	 */
	public function CreateNewWordstatReport($params)
	{

		$result = $this->__soapCall("CreateNewWordstatReport", array($params));
		return $result;
	}
	/**
	 * 
	 * @return 
	 */
	public function GetWordstatReportList()
	{

		$result = $this->__soapCall("GetWordstatReportList", array());
		return $result;
	}
	/**
	 * 
	 * @param integer $params Array
	 * @return 
	 */
	public function GetWordstatReport($params)
	{

		$result = $this->__soapCall("GetWordstatReport", array($params));
		return $result;
	}
	/**
	 * 
	 * @param CampaignIDInfo $params Array
	 * @return 
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

	public function __construct($options) {
		$options['classmap'] = self::$classmap;
		parent::__construct($options);
	}

	public function getNamespace() { return 'API'; }
	public function getWsdl() { return 'http://soap.direct.yandex.ru/wsdl/v3/'; }
}





/**
 * 
 */
class NewReportFilterInfo 
{

	/**
	 * 
	 * @var string
	 */
	public $PageType;

	/**
	 * 
	 * @var string
	 */
	public $PositionType;

	/**
	 * 
	 * @var ArrayOfInteger
	 */
	public $Banner;

	/**
	 * 
	 * @var ArrayOfInteger
	 */
	public $Geo;

	/**
	 * 
	 * @var ArrayOfString
	 */
	public $Phrase;

	/**
	 * 
	 * @var ArrayOfString
	 */
	public $PageName;

	/**
	 * 
	 * @var ArrayOfInteger
	 */
	public $StatGoals;

	/**
	 * 
	 * @param string $PageType 
	 * @param string $PositionType 
	 * @param ArrayOfInteger $Banner 
	 * @param ArrayOfInteger $Geo 
	 * @param ArrayOfString $Phrase 
	 * @param ArrayOfString $PageName 
	 * @param ArrayOfInteger $StatGoals 
	 */
	public function __construct($PageType = null, $PositionType = null, $Banner = null, $Geo = null, $Phrase = null, $PageName = null, $StatGoals = null)
	{
		$this->setPageType($PageType);
		$this->setPositionType($PositionType);
		$this->setBanner($Banner);
		$this->setGeo($Geo);
		$this->setPhrase($Phrase);
		$this->setPageName($PageName);
		$this->setStatGoals($StatGoals);
	}

	/**
	 * Возвращает namespace структуры
	 *
	 * @return string
	 */
	public function getNamespace() { return 'API'; }

	/**
	 * @return NewReportFilterInfo
	 */
	public static function create() { return new self(); }

	/**
	 * Setter for PageType
	 * @param string $PageType 
	 * @return NewReportFilterInfo
	 */
	public function setPageType($PageType)
	{
		$this->PageType = $PageType;
		return $this;
	}

	/**
	 * Setter for PositionType
	 * @param string $PositionType 
	 * @return NewReportFilterInfo
	 */
	public function setPositionType($PositionType)
	{
		$this->PositionType = $PositionType;
		return $this;
	}

	/**
	 * Setter for Banner
	 * @param ArrayOfInteger $Banner 
	 * @return NewReportFilterInfo
	 */
	public function setBanner($Banner)
	{
		$this->Banner = $Banner;
		return $this;
	}

	/**
	 * Setter for Geo
	 * @param ArrayOfInteger $Geo 
	 * @return NewReportFilterInfo
	 */
	public function setGeo($Geo)
	{
		$this->Geo = $Geo;
		return $this;
	}

	/**
	 * Setter for Phrase
	 * @param ArrayOfString $Phrase 
	 * @return NewReportFilterInfo
	 */
	public function setPhrase($Phrase)
	{
		$this->Phrase = $Phrase;
		return $this;
	}

	/**
	 * Setter for PageName
	 * @param ArrayOfString $PageName 
	 * @return NewReportFilterInfo
	 */
	public function setPageName($PageName)
	{
		$this->PageName = $PageName;
		return $this;
	}

	/**
	 * Setter for StatGoals
	 * @param ArrayOfInteger $StatGoals 
	 * @return NewReportFilterInfo
	 */
	public function setStatGoals($StatGoals)
	{
		$this->StatGoals = $StatGoals;
		return $this;
	}
}



/**
 * 
 */
class NewReportInfo 
{

	/**
	 * 
	 * @var integer
	 */
	public $CampaignID;

	/**
	 * 
	 * @var string
	 */
	public $StartDate;

	/**
	 * 
	 * @var string
	 */
	public $EndDate;

	/**
	 * 
	 * @var ArrayOfString
	 */
	public $GroupByColumns;

	/**
	 * 
	 * @var NewReportFilterInfo
	 */
	public $Filter;

	/**
	 * 
	 * @var integer
	 */
	public $Limit;

	/**
	 * 
	 * @var integer
	 */
	public $Offset;

	/**
	 * 
	 * @var string
	 */
	public $GroupByDate;

	/**
	 * 
	 * @var ArrayOfString
	 */
	public $OrderBy;

	/**
	 * 
	 * @var string
	 */
	public $TypeResultReport;

	/**
	 * 
	 * @var integer
	 */
	public $CompressReport;

	/**
	 * 
	 * @param integer $CampaignID 
	 * @param string $StartDate 
	 * @param string $EndDate 
	 * @param ArrayOfString $GroupByColumns 
	 * @param NewReportFilterInfo $Filter 
	 * @param integer $Limit 
	 * @param integer $Offset 
	 * @param string $GroupByDate 
	 * @param ArrayOfString $OrderBy 
	 * @param string $TypeResultReport 
	 * @param integer $CompressReport 
	 */
	public function __construct($CampaignID = null, $StartDate = null, $EndDate = null, $GroupByColumns = null, $Filter = null, $Limit = null, $Offset = null, $GroupByDate = null, $OrderBy = null, $TypeResultReport = null, $CompressReport = null)
	{
		$this->setCampaignID($CampaignID);
		$this->setStartDate($StartDate);
		$this->setEndDate($EndDate);
		$this->setGroupByColumns($GroupByColumns);
		$this->setFilter($Filter);
		$this->setLimit($Limit);
		$this->setOffset($Offset);
		$this->setGroupByDate($GroupByDate);
		$this->setOrderBy($OrderBy);
		$this->setTypeResultReport($TypeResultReport);
		$this->setCompressReport($CompressReport);
	}

	/**
	 * Возвращает namespace структуры
	 *
	 * @return string
	 */
	public function getNamespace() { return 'API'; }

	/**
	 * @return NewReportInfo
	 */
	public static function create() { return new self(); }

	/**
	 * Setter for CampaignID
	 * @param integer $CampaignID 
	 * @return NewReportInfo
	 */
	public function setCampaignID($CampaignID)
	{
		$this->CampaignID = $CampaignID;
		return $this;
	}

	/**
	 * Setter for StartDate
	 * @param string $StartDate 
	 * @return NewReportInfo
	 */
	public function setStartDate($StartDate)
	{
		$this->StartDate = $StartDate;
		return $this;
	}

	/**
	 * Setter for EndDate
	 * @param string $EndDate 
	 * @return NewReportInfo
	 */
	public function setEndDate($EndDate)
	{
		$this->EndDate = $EndDate;
		return $this;
	}

	/**
	 * Setter for GroupByColumns
	 * @param ArrayOfString $GroupByColumns 
	 * @return NewReportInfo
	 */
	public function setGroupByColumns($GroupByColumns)
	{
		$this->GroupByColumns = $GroupByColumns;
		return $this;
	}

	/**
	 * Setter for Filter
	 * @param NewReportFilterInfo $Filter 
	 * @return NewReportInfo
	 */
	public function setFilter($Filter)
	{
		$this->Filter = $Filter;
		return $this;
	}

	/**
	 * Setter for Limit
	 * @param integer $Limit 
	 * @return NewReportInfo
	 */
	public function setLimit($Limit)
	{
		$this->Limit = $Limit;
		return $this;
	}

	/**
	 * Setter for Offset
	 * @param integer $Offset 
	 * @return NewReportInfo
	 */
	public function setOffset($Offset)
	{
		$this->Offset = $Offset;
		return $this;
	}

	/**
	 * Setter for GroupByDate
	 * @param string $GroupByDate 
	 * @return NewReportInfo
	 */
	public function setGroupByDate($GroupByDate)
	{
		$this->GroupByDate = $GroupByDate;
		return $this;
	}

	/**
	 * Setter for OrderBy
	 * @param ArrayOfString $OrderBy 
	 * @return NewReportInfo
	 */
	public function setOrderBy($OrderBy)
	{
		$this->OrderBy = $OrderBy;
		return $this;
	}

	/**
	 * Setter for TypeResultReport
	 * @param string $TypeResultReport 
	 * @return NewReportInfo
	 */
	public function setTypeResultReport($TypeResultReport)
	{
		$this->TypeResultReport = $TypeResultReport;
		return $this;
	}

	/**
	 * Setter for CompressReport
	 * @param integer $CompressReport 
	 * @return NewReportInfo
	 */
	public function setCompressReport($CompressReport)
	{
		$this->CompressReport = $CompressReport;
		return $this;
	}
}



/**
 * 
 */
class TimeZoneInfo 
{

	/**
	 * 
	 * @var string
	 */
	public $TimeZone;

	/**
	 * 
	 * @var integer
	 */
	public $GMTOffset;

	/**
	 * 
	 * @var string
	 */
	public $Name;

	/**
	 * 
	 * @param string $TimeZone 
	 * @param integer $GMTOffset 
	 * @param string $Name 
	 */
	public function __construct($TimeZone = null, $GMTOffset = null, $Name = null)
	{
		$this->setTimeZone($TimeZone);
		$this->setGMTOffset($GMTOffset);
		$this->setName($Name);
	}

	/**
	 * Возвращает namespace структуры
	 *
	 * @return string
	 */
	public function getNamespace() { return 'API'; }

	/**
	 * @return TimeZoneInfo
	 */
	public static function create() { return new self(); }

	/**
	 * Setter for TimeZone
	 * @param string $TimeZone 
	 * @return TimeZoneInfo
	 */
	public function setTimeZone($TimeZone)
	{
		$this->TimeZone = $TimeZone;
		return $this;
	}

	/**
	 * Setter for GMTOffset
	 * @param integer $GMTOffset 
	 * @return TimeZoneInfo
	 */
	public function setGMTOffset($GMTOffset)
	{
		$this->GMTOffset = $GMTOffset;
		return $this;
	}

	/**
	 * Setter for Name
	 * @param string $Name 
	 * @return TimeZoneInfo
	 */
	public function setName($Name)
	{
		$this->Name = $Name;
		return $this;
	}
}



/**
 * 
 */
class CampaignIDInfo 
{

	/**
	 * 
	 * @var integer
	 */
	public $CampaignID;

	/**
	 * 
	 * @param integer $CampaignID 
	 */
	public function __construct($CampaignID = null)
	{
		$this->setCampaignID($CampaignID);
	}

	/**
	 * Возвращает namespace структуры
	 *
	 * @return string
	 */
	public function getNamespace() { return 'API'; }

	/**
	 * @return CampaignIDInfo
	 */
	public static function create() { return new self(); }

	/**
	 * Setter for CampaignID
	 * @param integer $CampaignID 
	 * @return CampaignIDInfo
	 */
	public function setCampaignID($CampaignID)
	{
		$this->CampaignID = $CampaignID;
		return $this;
	}
}



/**
 * 
 */
class CampaignInfo 
{

	/**
	 * 
	 * @var string
	 */
	public $Login;

	/**
	 * 
	 * @var integer
	 */
	public $CampaignID;

	/**
	 * 
	 * @var string
	 */
	public $Name;

	/**
	 * 
	 * @var string
	 */
	public $FIO;

	/**
	 * 
	 * @var string
	 */
	public $StartDate;

	/**
	 * 
	 * @var double
	 */
	public $Sum;

	/**
	 * 
	 * @var double
	 */
	public $Rest;

	/**
	 * 
	 * @var integer
	 */
	public $Shows;

	/**
	 * 
	 * @var integer
	 */
	public $Clicks;

	/**
	 * 
	 * @var string
	 */
	public $Autobudget;

	/**
	 * 
	 * @var double
	 */
	public $AutobudgetSum;

	/**
	 * 
	 * @var double
	 */
	public $AutobudgetMaxPrice;

	/**
	 * 
	 * @var SmsNotificationInfo
	 */
	public $SmsNotification;

	/**
	 * 
	 * @var EmailNotificationInfo
	 */
	public $EmailNotification;

	/**
	 * 
	 * @var string
	 */
	public $StatusBehavior;

	/**
	 * 
	 * @var string
	 */
	public $Status;

	/**
	 * 
	 * @var TimeTargetInfo
	 */
	public $TimeTarget;

	/**
	 * 
	 * @var string
	 */
	public $StatusContextStop;

	/**
	 * 
	 * @var string
	 */
	public $ContextLimit;

	/**
	 * 
	 * @var integer
	 */
	public $ContextLimitSum;

	/**
	 * 
	 * @var integer
	 */
	public $ContextPricePercent;

	/**
	 * 
	 * @var string
	 */
	public $AutoOptimization;

	/**
	 * 
	 * @var string
	 */
	public $StatusMetricaControl;

	/**
	 * 
	 * @var string
	 */
	public $DisabledDomains;

	/**
	 * 
	 * @var string
	 */
	public $DisabledIps;

	/**
	 * 
	 * @var string
	 */
	public $StatusOpenStat;

	/**
	 * 
	 * @var string
	 */
	public $ConsiderTimeTarget;

	/**
	 * 
	 * @var string
	 */
	public $ManagerName;

	/**
	 * 
	 * @var string
	 */
	public $AgencyName;

	/**
	 * 
	 * @var string
	 */
	public $StatusShow;

	/**
	 * 
	 * @var string
	 */
	public $StatusArchive;

	/**
	 * 
	 * @var string
	 */
	public $StatusActivating;

	/**
	 * 
	 * @var string
	 */
	public $StatusModerate;

	/**
	 * 
	 * @var string
	 */
	public $IsActive;

	/**
	 * 
	 * @var ArrayOfString
	 */
	public $MinusKeywords;

	/**
	 * 
	 * @var string
	 */
	public $AddRelevantPhrases;

	/**
	 * 
	 * @var integer
	 */
	public $RelevantPhrasesBudgetLimit;

	/**
	 * 
	 * @param string $Login 
	 * @param integer $CampaignID 
	 * @param string $Name 
	 * @param string $FIO 
	 * @param string $StartDate 
	 * @param double $Sum 
	 * @param double $Rest 
	 * @param integer $Shows 
	 * @param integer $Clicks 
	 * @param string $Autobudget 
	 * @param double $AutobudgetSum 
	 * @param double $AutobudgetMaxPrice 
	 * @param SmsNotificationInfo $SmsNotification 
	 * @param EmailNotificationInfo $EmailNotification 
	 * @param string $StatusBehavior 
	 * @param string $Status 
	 * @param TimeTargetInfo $TimeTarget 
	 * @param string $StatusContextStop 
	 * @param string $ContextLimit 
	 * @param integer $ContextLimitSum 
	 * @param integer $ContextPricePercent 
	 * @param string $AutoOptimization 
	 * @param string $StatusMetricaControl 
	 * @param string $DisabledDomains 
	 * @param string $DisabledIps 
	 * @param string $StatusOpenStat 
	 * @param string $ConsiderTimeTarget 
	 * @param string $ManagerName 
	 * @param string $AgencyName 
	 * @param string $StatusShow 
	 * @param string $StatusArchive 
	 * @param string $StatusActivating 
	 * @param string $StatusModerate 
	 * @param string $IsActive 
	 * @param ArrayOfString $MinusKeywords 
	 * @param string $AddRelevantPhrases 
	 * @param integer $RelevantPhrasesBudgetLimit 
	 */
	public function __construct($Login = null, $CampaignID = null, $Name = null, $FIO = null, $StartDate = null, $Sum = null, $Rest = null, $Shows = null, $Clicks = null, $Autobudget = null, $AutobudgetSum = null, $AutobudgetMaxPrice = null, $SmsNotification = null, $EmailNotification = null, $StatusBehavior = null, $Status = null, $TimeTarget = null, $StatusContextStop = null, $ContextLimit = null, $ContextLimitSum = null, $ContextPricePercent = null, $AutoOptimization = null, $StatusMetricaControl = null, $DisabledDomains = null, $DisabledIps = null, $StatusOpenStat = null, $ConsiderTimeTarget = null, $ManagerName = null, $AgencyName = null, $StatusShow = null, $StatusArchive = null, $StatusActivating = null, $StatusModerate = null, $IsActive = null, $MinusKeywords = null, $AddRelevantPhrases = null, $RelevantPhrasesBudgetLimit = null)
	{
		$this->setLogin($Login);
		$this->setCampaignID($CampaignID);
		$this->setName($Name);
		$this->setFIO($FIO);
		$this->setStartDate($StartDate);
		$this->setSum($Sum);
		$this->setRest($Rest);
		$this->setShows($Shows);
		$this->setClicks($Clicks);
		$this->setAutobudget($Autobudget);
		$this->setAutobudgetSum($AutobudgetSum);
		$this->setAutobudgetMaxPrice($AutobudgetMaxPrice);
		$this->setSmsNotification($SmsNotification);
		$this->setEmailNotification($EmailNotification);
		$this->setStatusBehavior($StatusBehavior);
		$this->setStatus($Status);
		$this->setTimeTarget($TimeTarget);
		$this->setStatusContextStop($StatusContextStop);
		$this->setContextLimit($ContextLimit);
		$this->setContextLimitSum($ContextLimitSum);
		$this->setContextPricePercent($ContextPricePercent);
		$this->setAutoOptimization($AutoOptimization);
		$this->setStatusMetricaControl($StatusMetricaControl);
		$this->setDisabledDomains($DisabledDomains);
		$this->setDisabledIps($DisabledIps);
		$this->setStatusOpenStat($StatusOpenStat);
		$this->setConsiderTimeTarget($ConsiderTimeTarget);
		$this->setManagerName($ManagerName);
		$this->setAgencyName($AgencyName);
		$this->setStatusShow($StatusShow);
		$this->setStatusArchive($StatusArchive);
		$this->setStatusActivating($StatusActivating);
		$this->setStatusModerate($StatusModerate);
		$this->setIsActive($IsActive);
		$this->setMinusKeywords($MinusKeywords);
		$this->setAddRelevantPhrases($AddRelevantPhrases);
		$this->setRelevantPhrasesBudgetLimit($RelevantPhrasesBudgetLimit);
	}

	/**
	 * Возвращает namespace структуры
	 *
	 * @return string
	 */
	public function getNamespace() { return 'API'; }

	/**
	 * @return CampaignInfo
	 */
	public static function create() { return new self(); }

	/**
	 * Setter for Login
	 * @param string $Login 
	 * @return CampaignInfo
	 */
	public function setLogin($Login)
	{
		$this->Login = $Login;
		return $this;
	}

	/**
	 * Setter for CampaignID
	 * @param integer $CampaignID 
	 * @return CampaignInfo
	 */
	public function setCampaignID($CampaignID)
	{
		$this->CampaignID = $CampaignID;
		return $this;
	}

	/**
	 * Setter for Name
	 * @param string $Name 
	 * @return CampaignInfo
	 */
	public function setName($Name)
	{
		$this->Name = $Name;
		return $this;
	}

	/**
	 * Setter for FIO
	 * @param string $FIO 
	 * @return CampaignInfo
	 */
	public function setFIO($FIO)
	{
		$this->FIO = $FIO;
		return $this;
	}

	/**
	 * Setter for StartDate
	 * @param string $StartDate 
	 * @return CampaignInfo
	 */
	public function setStartDate($StartDate)
	{
		$this->StartDate = $StartDate;
		return $this;
	}

	/**
	 * Setter for Sum
	 * @param double $Sum 
	 * @return CampaignInfo
	 */
	public function setSum($Sum)
	{
		$this->Sum = $Sum;
		return $this;
	}

	/**
	 * Setter for Rest
	 * @param double $Rest 
	 * @return CampaignInfo
	 */
	public function setRest($Rest)
	{
		$this->Rest = $Rest;
		return $this;
	}

	/**
	 * Setter for Shows
	 * @param integer $Shows 
	 * @return CampaignInfo
	 */
	public function setShows($Shows)
	{
		$this->Shows = $Shows;
		return $this;
	}

	/**
	 * Setter for Clicks
	 * @param integer $Clicks 
	 * @return CampaignInfo
	 */
	public function setClicks($Clicks)
	{
		$this->Clicks = $Clicks;
		return $this;
	}

	/**
	 * Setter for Autobudget
	 * @param string $Autobudget 
	 * @return CampaignInfo
	 */
	public function setAutobudget($Autobudget)
	{
		$this->Autobudget = $Autobudget;
		return $this;
	}

	/**
	 * Setter for AutobudgetSum
	 * @param double $AutobudgetSum 
	 * @return CampaignInfo
	 */
	public function setAutobudgetSum($AutobudgetSum)
	{
		$this->AutobudgetSum = $AutobudgetSum;
		return $this;
	}

	/**
	 * Setter for AutobudgetMaxPrice
	 * @param double $AutobudgetMaxPrice 
	 * @return CampaignInfo
	 */
	public function setAutobudgetMaxPrice($AutobudgetMaxPrice)
	{
		$this->AutobudgetMaxPrice = $AutobudgetMaxPrice;
		return $this;
	}

	/**
	 * Setter for SmsNotification
	 * @param SmsNotificationInfo $SmsNotification 
	 * @return CampaignInfo
	 */
	public function setSmsNotification($SmsNotification)
	{
		$this->SmsNotification = $SmsNotification;
		return $this;
	}

	/**
	 * Setter for EmailNotification
	 * @param EmailNotificationInfo $EmailNotification 
	 * @return CampaignInfo
	 */
	public function setEmailNotification($EmailNotification)
	{
		$this->EmailNotification = $EmailNotification;
		return $this;
	}

	/**
	 * Setter for StatusBehavior
	 * @param string $StatusBehavior 
	 * @return CampaignInfo
	 */
	public function setStatusBehavior($StatusBehavior)
	{
		$this->StatusBehavior = $StatusBehavior;
		return $this;
	}

	/**
	 * Setter for Status
	 * @param string $Status 
	 * @return CampaignInfo
	 */
	public function setStatus($Status)
	{
		$this->Status = $Status;
		return $this;
	}

	/**
	 * Setter for TimeTarget
	 * @param TimeTargetInfo $TimeTarget 
	 * @return CampaignInfo
	 */
	public function setTimeTarget($TimeTarget)
	{
		$this->TimeTarget = $TimeTarget;
		return $this;
	}

	/**
	 * Setter for StatusContextStop
	 * @param string $StatusContextStop 
	 * @return CampaignInfo
	 */
	public function setStatusContextStop($StatusContextStop)
	{
		$this->StatusContextStop = $StatusContextStop;
		return $this;
	}

	/**
	 * Setter for ContextLimit
	 * @param string $ContextLimit 
	 * @return CampaignInfo
	 */
	public function setContextLimit($ContextLimit)
	{
		$this->ContextLimit = $ContextLimit;
		return $this;
	}

	/**
	 * Setter for ContextLimitSum
	 * @param integer $ContextLimitSum 
	 * @return CampaignInfo
	 */
	public function setContextLimitSum($ContextLimitSum)
	{
		$this->ContextLimitSum = $ContextLimitSum;
		return $this;
	}

	/**
	 * Setter for ContextPricePercent
	 * @param integer $ContextPricePercent 
	 * @return CampaignInfo
	 */
	public function setContextPricePercent($ContextPricePercent)
	{
		$this->ContextPricePercent = $ContextPricePercent;
		return $this;
	}

	/**
	 * Setter for AutoOptimization
	 * @param string $AutoOptimization 
	 * @return CampaignInfo
	 */
	public function setAutoOptimization($AutoOptimization)
	{
		$this->AutoOptimization = $AutoOptimization;
		return $this;
	}

	/**
	 * Setter for StatusMetricaControl
	 * @param string $StatusMetricaControl 
	 * @return CampaignInfo
	 */
	public function setStatusMetricaControl($StatusMetricaControl)
	{
		$this->StatusMetricaControl = $StatusMetricaControl;
		return $this;
	}

	/**
	 * Setter for DisabledDomains
	 * @param string $DisabledDomains 
	 * @return CampaignInfo
	 */
	public function setDisabledDomains($DisabledDomains)
	{
		$this->DisabledDomains = $DisabledDomains;
		return $this;
	}

	/**
	 * Setter for DisabledIps
	 * @param string $DisabledIps 
	 * @return CampaignInfo
	 */
	public function setDisabledIps($DisabledIps)
	{
		$this->DisabledIps = $DisabledIps;
		return $this;
	}

	/**
	 * Setter for StatusOpenStat
	 * @param string $StatusOpenStat 
	 * @return CampaignInfo
	 */
	public function setStatusOpenStat($StatusOpenStat)
	{
		$this->StatusOpenStat = $StatusOpenStat;
		return $this;
	}

	/**
	 * Setter for ConsiderTimeTarget
	 * @param string $ConsiderTimeTarget 
	 * @return CampaignInfo
	 */
	public function setConsiderTimeTarget($ConsiderTimeTarget)
	{
		$this->ConsiderTimeTarget = $ConsiderTimeTarget;
		return $this;
	}

	/**
	 * Setter for ManagerName
	 * @param string $ManagerName 
	 * @return CampaignInfo
	 */
	public function setManagerName($ManagerName)
	{
		$this->ManagerName = $ManagerName;
		return $this;
	}

	/**
	 * Setter for AgencyName
	 * @param string $AgencyName 
	 * @return CampaignInfo
	 */
	public function setAgencyName($AgencyName)
	{
		$this->AgencyName = $AgencyName;
		return $this;
	}

	/**
	 * Setter for StatusShow
	 * @param string $StatusShow 
	 * @return CampaignInfo
	 */
	public function setStatusShow($StatusShow)
	{
		$this->StatusShow = $StatusShow;
		return $this;
	}

	/**
	 * Setter for StatusArchive
	 * @param string $StatusArchive 
	 * @return CampaignInfo
	 */
	public function setStatusArchive($StatusArchive)
	{
		$this->StatusArchive = $StatusArchive;
		return $this;
	}

	/**
	 * Setter for StatusActivating
	 * @param string $StatusActivating 
	 * @return CampaignInfo
	 */
	public function setStatusActivating($StatusActivating)
	{
		$this->StatusActivating = $StatusActivating;
		return $this;
	}

	/**
	 * Setter for StatusModerate
	 * @param string $StatusModerate 
	 * @return CampaignInfo
	 */
	public function setStatusModerate($StatusModerate)
	{
		$this->StatusModerate = $StatusModerate;
		return $this;
	}

	/**
	 * Setter for IsActive
	 * @param string $IsActive 
	 * @return CampaignInfo
	 */
	public function setIsActive($IsActive)
	{
		$this->IsActive = $IsActive;
		return $this;
	}

	/**
	 * Setter for MinusKeywords
	 * @param ArrayOfString $MinusKeywords 
	 * @return CampaignInfo
	 */
	public function setMinusKeywords($MinusKeywords)
	{
		$this->MinusKeywords = $MinusKeywords;
		return $this;
	}

	/**
	 * Setter for AddRelevantPhrases
	 * @param string $AddRelevantPhrases 
	 * @return CampaignInfo
	 */
	public function setAddRelevantPhrases($AddRelevantPhrases)
	{
		$this->AddRelevantPhrases = $AddRelevantPhrases;
		return $this;
	}

	/**
	 * Setter for RelevantPhrasesBudgetLimit
	 * @param integer $RelevantPhrasesBudgetLimit 
	 * @return CampaignInfo
	 */
	public function setRelevantPhrasesBudgetLimit($RelevantPhrasesBudgetLimit)
	{
		$this->RelevantPhrasesBudgetLimit = $RelevantPhrasesBudgetLimit;
		return $this;
	}
}



/**
 * 
 */
class SmsNotificationInfo 
{

	/**
	 * 
	 * @var string
	 */
	public $MetricaSms;

	/**
	 * 
	 * @var string
	 */
	public $ModerateResultSms;

	/**
	 * 
	 * @var string
	 */
	public $MoneyInSms;

	/**
	 * 
	 * @var string
	 */
	public $MoneyOutSms;

	/**
	 * 
	 * @var string
	 */
	public $SmsTimeFrom;

	/**
	 * 
	 * @var string
	 */
	public $SmsTimeTo;

	/**
	 * 
	 * @param string $MetricaSms 
	 * @param string $ModerateResultSms 
	 * @param string $MoneyInSms 
	 * @param string $MoneyOutSms 
	 * @param string $SmsTimeFrom 
	 * @param string $SmsTimeTo 
	 */
	public function __construct($MetricaSms = null, $ModerateResultSms = null, $MoneyInSms = null, $MoneyOutSms = null, $SmsTimeFrom = null, $SmsTimeTo = null)
	{
		$this->setMetricaSms($MetricaSms);
		$this->setModerateResultSms($ModerateResultSms);
		$this->setMoneyInSms($MoneyInSms);
		$this->setMoneyOutSms($MoneyOutSms);
		$this->setSmsTimeFrom($SmsTimeFrom);
		$this->setSmsTimeTo($SmsTimeTo);
	}

	/**
	 * Возвращает namespace структуры
	 *
	 * @return string
	 */
	public function getNamespace() { return 'API'; }

	/**
	 * @return SmsNotificationInfo
	 */
	public static function create() { return new self(); }

	/**
	 * Setter for MetricaSms
	 * @param string $MetricaSms 
	 * @return SmsNotificationInfo
	 */
	public function setMetricaSms($MetricaSms)
	{
		$this->MetricaSms = $MetricaSms;
		return $this;
	}

	/**
	 * Setter for ModerateResultSms
	 * @param string $ModerateResultSms 
	 * @return SmsNotificationInfo
	 */
	public function setModerateResultSms($ModerateResultSms)
	{
		$this->ModerateResultSms = $ModerateResultSms;
		return $this;
	}

	/**
	 * Setter for MoneyInSms
	 * @param string $MoneyInSms 
	 * @return SmsNotificationInfo
	 */
	public function setMoneyInSms($MoneyInSms)
	{
		$this->MoneyInSms = $MoneyInSms;
		return $this;
	}

	/**
	 * Setter for MoneyOutSms
	 * @param string $MoneyOutSms 
	 * @return SmsNotificationInfo
	 */
	public function setMoneyOutSms($MoneyOutSms)
	{
		$this->MoneyOutSms = $MoneyOutSms;
		return $this;
	}

	/**
	 * Setter for SmsTimeFrom
	 * @param string $SmsTimeFrom 
	 * @return SmsNotificationInfo
	 */
	public function setSmsTimeFrom($SmsTimeFrom)
	{
		$this->SmsTimeFrom = $SmsTimeFrom;
		return $this;
	}

	/**
	 * Setter for SmsTimeTo
	 * @param string $SmsTimeTo 
	 * @return SmsNotificationInfo
	 */
	public function setSmsTimeTo($SmsTimeTo)
	{
		$this->SmsTimeTo = $SmsTimeTo;
		return $this;
	}
}



/**
 * 
 */
class EmailNotificationInfo 
{

	/**
	 * 
	 * @var string
	 */
	public $Email;

	/**
	 * 
	 * @var integer
	 */
	public $WarnPlaceInterval;

	/**
	 * 
	 * @var integer
	 */
	public $MoneyWarningValue;

	/**
	 * 
	 * @var string
	 */
	public $SendAccNews;

	/**
	 * 
	 * @var string
	 */
	public $SendWarn;

	/**
	 * 
	 * @param string $Email 
	 * @param integer $WarnPlaceInterval 
	 * @param integer $MoneyWarningValue 
	 * @param string $SendAccNews 
	 * @param string $SendWarn 
	 */
	public function __construct($Email = null, $WarnPlaceInterval = null, $MoneyWarningValue = null, $SendAccNews = null, $SendWarn = null)
	{
		$this->setEmail($Email);
		$this->setWarnPlaceInterval($WarnPlaceInterval);
		$this->setMoneyWarningValue($MoneyWarningValue);
		$this->setSendAccNews($SendAccNews);
		$this->setSendWarn($SendWarn);
	}

	/**
	 * Возвращает namespace структуры
	 *
	 * @return string
	 */
	public function getNamespace() { return 'API'; }

	/**
	 * @return EmailNotificationInfo
	 */
	public static function create() { return new self(); }

	/**
	 * Setter for Email
	 * @param string $Email 
	 * @return EmailNotificationInfo
	 */
	public function setEmail($Email)
	{
		$this->Email = $Email;
		return $this;
	}

	/**
	 * Setter for WarnPlaceInterval
	 * @param integer $WarnPlaceInterval 
	 * @return EmailNotificationInfo
	 */
	public function setWarnPlaceInterval($WarnPlaceInterval)
	{
		$this->WarnPlaceInterval = $WarnPlaceInterval;
		return $this;
	}

	/**
	 * Setter for MoneyWarningValue
	 * @param integer $MoneyWarningValue 
	 * @return EmailNotificationInfo
	 */
	public function setMoneyWarningValue($MoneyWarningValue)
	{
		$this->MoneyWarningValue = $MoneyWarningValue;
		return $this;
	}

	/**
	 * Setter for SendAccNews
	 * @param string $SendAccNews 
	 * @return EmailNotificationInfo
	 */
	public function setSendAccNews($SendAccNews)
	{
		$this->SendAccNews = $SendAccNews;
		return $this;
	}

	/**
	 * Setter for SendWarn
	 * @param string $SendWarn 
	 * @return EmailNotificationInfo
	 */
	public function setSendWarn($SendWarn)
	{
		$this->SendWarn = $SendWarn;
		return $this;
	}
}



/**
 * 
 */
class CampaignBalanceInfo 
{

	/**
	 * 
	 * @var integer
	 */
	public $CampaignID;

	/**
	 * 
	 * @var double
	 */
	public $Sum;

	/**
	 * 
	 * @var double
	 */
	public $Rest;

	/**
	 * 
	 * @param integer $CampaignID 
	 * @param double $Sum 
	 * @param double $Rest 
	 */
	public function __construct($CampaignID = null, $Sum = null, $Rest = null)
	{
		$this->setCampaignID($CampaignID);
		$this->setSum($Sum);
		$this->setRest($Rest);
	}

	/**
	 * Возвращает namespace структуры
	 *
	 * @return string
	 */
	public function getNamespace() { return 'API'; }

	/**
	 * @return CampaignBalanceInfo
	 */
	public static function create() { return new self(); }

	/**
	 * Setter for CampaignID
	 * @param integer $CampaignID 
	 * @return CampaignBalanceInfo
	 */
	public function setCampaignID($CampaignID)
	{
		$this->CampaignID = $CampaignID;
		return $this;
	}

	/**
	 * Setter for Sum
	 * @param double $Sum 
	 * @return CampaignBalanceInfo
	 */
	public function setSum($Sum)
	{
		$this->Sum = $Sum;
		return $this;
	}

	/**
	 * Setter for Rest
	 * @param double $Rest 
	 * @return CampaignBalanceInfo
	 */
	public function setRest($Rest)
	{
		$this->Rest = $Rest;
		return $this;
	}
}



/**
 * 
 */
class ShortCampaignInfo 
{

	/**
	 * 
	 * @var integer
	 */
	public $CampaignID;

	/**
	 * 
	 * @var string
	 */
	public $Login;

	/**
	 * 
	 * @var string
	 */
	public $Name;

	/**
	 * 
	 * @var string
	 */
	public $StartDate;

	/**
	 * 
	 * @var double
	 */
	public $Sum;

	/**
	 * 
	 * @var double
	 */
	public $Rest;

	/**
	 * 
	 * @var integer
	 */
	public $Shows;

	/**
	 * 
	 * @var integer
	 */
	public $Clicks;

	/**
	 * 
	 * @var string
	 */
	public $Status;

	/**
	 * 
	 * @var string
	 */
	public $StatusShow;

	/**
	 * 
	 * @var string
	 */
	public $StatusArchive;

	/**
	 * 
	 * @var string
	 */
	public $StatusActivating;

	/**
	 * 
	 * @var string
	 */
	public $StatusModerate;

	/**
	 * 
	 * @var string
	 */
	public $IsActive;

	/**
	 * 
	 * @var string
	 */
	public $ManagerName;

	/**
	 * 
	 * @var string
	 */
	public $AgencyName;

	/**
	 * 
	 * @param integer $CampaignID 
	 * @param string $Login 
	 * @param string $Name 
	 * @param string $StartDate 
	 * @param double $Sum 
	 * @param double $Rest 
	 * @param integer $Shows 
	 * @param integer $Clicks 
	 * @param string $Status 
	 * @param string $StatusShow 
	 * @param string $StatusArchive 
	 * @param string $StatusActivating 
	 * @param string $StatusModerate 
	 * @param string $IsActive 
	 * @param string $ManagerName 
	 * @param string $AgencyName 
	 */
	public function __construct($CampaignID = null, $Login = null, $Name = null, $StartDate = null, $Sum = null, $Rest = null, $Shows = null, $Clicks = null, $Status = null, $StatusShow = null, $StatusArchive = null, $StatusActivating = null, $StatusModerate = null, $IsActive = null, $ManagerName = null, $AgencyName = null)
	{
		$this->setCampaignID($CampaignID);
		$this->setLogin($Login);
		$this->setName($Name);
		$this->setStartDate($StartDate);
		$this->setSum($Sum);
		$this->setRest($Rest);
		$this->setShows($Shows);
		$this->setClicks($Clicks);
		$this->setStatus($Status);
		$this->setStatusShow($StatusShow);
		$this->setStatusArchive($StatusArchive);
		$this->setStatusActivating($StatusActivating);
		$this->setStatusModerate($StatusModerate);
		$this->setIsActive($IsActive);
		$this->setManagerName($ManagerName);
		$this->setAgencyName($AgencyName);
	}

	/**
	 * Возвращает namespace структуры
	 *
	 * @return string
	 */
	public function getNamespace() { return 'API'; }

	/**
	 * @return ShortCampaignInfo
	 */
	public static function create() { return new self(); }

	/**
	 * Setter for CampaignID
	 * @param integer $CampaignID 
	 * @return ShortCampaignInfo
	 */
	public function setCampaignID($CampaignID)
	{
		$this->CampaignID = $CampaignID;
		return $this;
	}

	/**
	 * Setter for Login
	 * @param string $Login 
	 * @return ShortCampaignInfo
	 */
	public function setLogin($Login)
	{
		$this->Login = $Login;
		return $this;
	}

	/**
	 * Setter for Name
	 * @param string $Name 
	 * @return ShortCampaignInfo
	 */
	public function setName($Name)
	{
		$this->Name = $Name;
		return $this;
	}

	/**
	 * Setter for StartDate
	 * @param string $StartDate 
	 * @return ShortCampaignInfo
	 */
	public function setStartDate($StartDate)
	{
		$this->StartDate = $StartDate;
		return $this;
	}

	/**
	 * Setter for Sum
	 * @param double $Sum 
	 * @return ShortCampaignInfo
	 */
	public function setSum($Sum)
	{
		$this->Sum = $Sum;
		return $this;
	}

	/**
	 * Setter for Rest
	 * @param double $Rest 
	 * @return ShortCampaignInfo
	 */
	public function setRest($Rest)
	{
		$this->Rest = $Rest;
		return $this;
	}

	/**
	 * Setter for Shows
	 * @param integer $Shows 
	 * @return ShortCampaignInfo
	 */
	public function setShows($Shows)
	{
		$this->Shows = $Shows;
		return $this;
	}

	/**
	 * Setter for Clicks
	 * @param integer $Clicks 
	 * @return ShortCampaignInfo
	 */
	public function setClicks($Clicks)
	{
		$this->Clicks = $Clicks;
		return $this;
	}

	/**
	 * Setter for Status
	 * @param string $Status 
	 * @return ShortCampaignInfo
	 */
	public function setStatus($Status)
	{
		$this->Status = $Status;
		return $this;
	}

	/**
	 * Setter for StatusShow
	 * @param string $StatusShow 
	 * @return ShortCampaignInfo
	 */
	public function setStatusShow($StatusShow)
	{
		$this->StatusShow = $StatusShow;
		return $this;
	}

	/**
	 * Setter for StatusArchive
	 * @param string $StatusArchive 
	 * @return ShortCampaignInfo
	 */
	public function setStatusArchive($StatusArchive)
	{
		$this->StatusArchive = $StatusArchive;
		return $this;
	}

	/**
	 * Setter for StatusActivating
	 * @param string $StatusActivating 
	 * @return ShortCampaignInfo
	 */
	public function setStatusActivating($StatusActivating)
	{
		$this->StatusActivating = $StatusActivating;
		return $this;
	}

	/**
	 * Setter for StatusModerate
	 * @param string $StatusModerate 
	 * @return ShortCampaignInfo
	 */
	public function setStatusModerate($StatusModerate)
	{
		$this->StatusModerate = $StatusModerate;
		return $this;
	}

	/**
	 * Setter for IsActive
	 * @param string $IsActive 
	 * @return ShortCampaignInfo
	 */
	public function setIsActive($IsActive)
	{
		$this->IsActive = $IsActive;
		return $this;
	}

	/**
	 * Setter for ManagerName
	 * @param string $ManagerName 
	 * @return ShortCampaignInfo
	 */
	public function setManagerName($ManagerName)
	{
		$this->ManagerName = $ManagerName;
		return $this;
	}

	/**
	 * Setter for AgencyName
	 * @param string $AgencyName 
	 * @return ShortCampaignInfo
	 */
	public function setAgencyName($AgencyName)
	{
		$this->AgencyName = $AgencyName;
		return $this;
	}
}



/**
 * 
 */
class ClientsUnitInfo 
{

	/**
	 * 
	 * @var string
	 */
	public $Login;

	/**
	 * 
	 * @var integer
	 */
	public $UnitsRest;

	/**
	 * 
	 * @param string $Login 
	 * @param integer $UnitsRest 
	 */
	public function __construct($Login = null, $UnitsRest = null)
	{
		$this->setLogin($Login);
		$this->setUnitsRest($UnitsRest);
	}

	/**
	 * Возвращает namespace структуры
	 *
	 * @return string
	 */
	public function getNamespace() { return 'API'; }

	/**
	 * @return ClientsUnitInfo
	 */
	public static function create() { return new self(); }

	/**
	 * Setter for Login
	 * @param string $Login 
	 * @return ClientsUnitInfo
	 */
	public function setLogin($Login)
	{
		$this->Login = $Login;
		return $this;
	}

	/**
	 * Setter for UnitsRest
	 * @param integer $UnitsRest 
	 * @return ClientsUnitInfo
	 */
	public function setUnitsRest($UnitsRest)
	{
		$this->UnitsRest = $UnitsRest;
		return $this;
	}
}



/**
 * 
 */
class RubricInfo 
{

	/**
	 * 
	 * @var integer
	 */
	public $ParentID;

	/**
	 * 
	 * @var integer
	 */
	public $RubricID;

	/**
	 * 
	 * @var string
	 */
	public $Url;

	/**
	 * 
	 * @var string
	 */
	public $RubricFullName;

	/**
	 * 
	 * @var string
	 */
	public $RubricName;

	/**
	 * 
	 * @param integer $ParentID 
	 * @param integer $RubricID 
	 * @param string $Url 
	 * @param string $RubricFullName 
	 * @param string $RubricName 
	 */
	public function __construct($ParentID = null, $RubricID = null, $Url = null, $RubricFullName = null, $RubricName = null)
	{
		$this->setParentID($ParentID);
		$this->setRubricID($RubricID);
		$this->setUrl($Url);
		$this->setRubricFullName($RubricFullName);
		$this->setRubricName($RubricName);
	}

	/**
	 * Возвращает namespace структуры
	 *
	 * @return string
	 */
	public function getNamespace() { return 'API'; }

	/**
	 * @return RubricInfo
	 */
	public static function create() { return new self(); }

	/**
	 * Setter for ParentID
	 * @param integer $ParentID 
	 * @return RubricInfo
	 */
	public function setParentID($ParentID)
	{
		$this->ParentID = $ParentID;
		return $this;
	}

	/**
	 * Setter for RubricID
	 * @param integer $RubricID 
	 * @return RubricInfo
	 */
	public function setRubricID($RubricID)
	{
		$this->RubricID = $RubricID;
		return $this;
	}

	/**
	 * Setter for Url
	 * @param string $Url 
	 * @return RubricInfo
	 */
	public function setUrl($Url)
	{
		$this->Url = $Url;
		return $this;
	}

	/**
	 * Setter for RubricFullName
	 * @param string $RubricFullName 
	 * @return RubricInfo
	 */
	public function setRubricFullName($RubricFullName)
	{
		$this->RubricFullName = $RubricFullName;
		return $this;
	}

	/**
	 * Setter for RubricName
	 * @param string $RubricName 
	 * @return RubricInfo
	 */
	public function setRubricName($RubricName)
	{
		$this->RubricName = $RubricName;
		return $this;
	}
}



/**
 * 
 */
class ForecastStatusInfo 
{

	/**
	 * 
	 * @var integer
	 */
	public $ForecastID;

	/**
	 * 
	 * @var string
	 */
	public $StatusForecast;

	/**
	 * 
	 * @param integer $ForecastID 
	 * @param string $StatusForecast 
	 */
	public function __construct($ForecastID = null, $StatusForecast = null)
	{
		$this->setForecastID($ForecastID);
		$this->setStatusForecast($StatusForecast);
	}

	/**
	 * Возвращает namespace структуры
	 *
	 * @return string
	 */
	public function getNamespace() { return 'API'; }

	/**
	 * @return ForecastStatusInfo
	 */
	public static function create() { return new self(); }

	/**
	 * Setter for ForecastID
	 * @param integer $ForecastID 
	 * @return ForecastStatusInfo
	 */
	public function setForecastID($ForecastID)
	{
		$this->ForecastID = $ForecastID;
		return $this;
	}

	/**
	 * Setter for StatusForecast
	 * @param string $StatusForecast 
	 * @return ForecastStatusInfo
	 */
	public function setStatusForecast($StatusForecast)
	{
		$this->StatusForecast = $StatusForecast;
		return $this;
	}
}



/**
 * 
 */
class ReportInfo 
{

	/**
	 * 
	 * @var integer
	 */
	public $ReportID;

	/**
	 * 
	 * @var string
	 */
	public $Url;

	/**
	 * 
	 * @var string
	 */
	public $StatusReport;

	/**
	 * 
	 * @param integer $ReportID 
	 * @param string $Url 
	 * @param string $StatusReport 
	 */
	public function __construct($ReportID = null, $Url = null, $StatusReport = null)
	{
		$this->setReportID($ReportID);
		$this->setUrl($Url);
		$this->setStatusReport($StatusReport);
	}

	/**
	 * Возвращает namespace структуры
	 *
	 * @return string
	 */
	public function getNamespace() { return 'API'; }

	/**
	 * @return ReportInfo
	 */
	public static function create() { return new self(); }

	/**
	 * Setter for ReportID
	 * @param integer $ReportID 
	 * @return ReportInfo
	 */
	public function setReportID($ReportID)
	{
		$this->ReportID = $ReportID;
		return $this;
	}

	/**
	 * Setter for Url
	 * @param string $Url 
	 * @return ReportInfo
	 */
	public function setUrl($Url)
	{
		$this->Url = $Url;
		return $this;
	}

	/**
	 * Setter for StatusReport
	 * @param string $StatusReport 
	 * @return ReportInfo
	 */
	public function setStatusReport($StatusReport)
	{
		$this->StatusReport = $StatusReport;
		return $this;
	}
}



/**
 * 
 */
class ContactInfo 
{

	/**
	 * 
	 * @var string
	 */
	public $ContactPerson;

	/**
	 * 
	 * @var string
	 */
	public $Country;

	/**
	 * 
	 * @var string
	 */
	public $CountryCode;

	/**
	 * 
	 * @var string
	 */
	public $City;

	/**
	 * 
	 * @var string
	 */
	public $Street;

	/**
	 * 
	 * @var string
	 */
	public $House;

	/**
	 * 
	 * @var string
	 */
	public $Build;

	/**
	 * 
	 * @var string
	 */
	public $Apart;

	/**
	 * 
	 * @var string
	 */
	public $CityCode;

	/**
	 * 
	 * @var string
	 */
	public $Phone;

	/**
	 * 
	 * @var string
	 */
	public $PhoneExt;

	/**
	 * 
	 * @var string
	 */
	public $CompanyName;

	/**
	 * 
	 * @var string
	 */
	public $IMClient;

	/**
	 * 
	 * @var string
	 */
	public $IMLogin;

	/**
	 * 
	 * @var string
	 */
	public $ExtraMessage;

	/**
	 * 
	 * @var string
	 */
	public $ContactEmail;

	/**
	 * 
	 * @var string
	 */
	public $WorkTime;

	/**
	 * 
	 * @var string
	 */
	public $OGRN;

	/**
	 * 
	 * @var MapPoint
	 */
	public $PointOnMap;

	/**
	 * 
	 * @param string $ContactPerson 
	 * @param string $Country 
	 * @param string $CountryCode 
	 * @param string $City 
	 * @param string $Street 
	 * @param string $House 
	 * @param string $Build 
	 * @param string $Apart 
	 * @param string $CityCode 
	 * @param string $Phone 
	 * @param string $PhoneExt 
	 * @param string $CompanyName 
	 * @param string $IMClient 
	 * @param string $IMLogin 
	 * @param string $ExtraMessage 
	 * @param string $ContactEmail 
	 * @param string $WorkTime 
	 * @param string $OGRN 
	 * @param MapPoint $PointOnMap 
	 */
	public function __construct($ContactPerson = null, $Country = null, $CountryCode = null, $City = null, $Street = null, $House = null, $Build = null, $Apart = null, $CityCode = null, $Phone = null, $PhoneExt = null, $CompanyName = null, $IMClient = null, $IMLogin = null, $ExtraMessage = null, $ContactEmail = null, $WorkTime = null, $OGRN = null, $PointOnMap = null)
	{
		$this->setContactPerson($ContactPerson);
		$this->setCountry($Country);
		$this->setCountryCode($CountryCode);
		$this->setCity($City);
		$this->setStreet($Street);
		$this->setHouse($House);
		$this->setBuild($Build);
		$this->setApart($Apart);
		$this->setCityCode($CityCode);
		$this->setPhone($Phone);
		$this->setPhoneExt($PhoneExt);
		$this->setCompanyName($CompanyName);
		$this->setIMClient($IMClient);
		$this->setIMLogin($IMLogin);
		$this->setExtraMessage($ExtraMessage);
		$this->setContactEmail($ContactEmail);
		$this->setWorkTime($WorkTime);
		$this->setOGRN($OGRN);
		$this->setPointOnMap($PointOnMap);
	}

	/**
	 * Возвращает namespace структуры
	 *
	 * @return string
	 */
	public function getNamespace() { return 'API'; }

	/**
	 * @return ContactInfo
	 */
	public static function create() { return new self(); }

	/**
	 * Setter for ContactPerson
	 * @param string $ContactPerson 
	 * @return ContactInfo
	 */
	public function setContactPerson($ContactPerson)
	{
		$this->ContactPerson = $ContactPerson;
		return $this;
	}

	/**
	 * Setter for Country
	 * @param string $Country 
	 * @return ContactInfo
	 */
	public function setCountry($Country)
	{
		$this->Country = $Country;
		return $this;
	}

	/**
	 * Setter for CountryCode
	 * @param string $CountryCode 
	 * @return ContactInfo
	 */
	public function setCountryCode($CountryCode)
	{
		$this->CountryCode = $CountryCode;
		return $this;
	}

	/**
	 * Setter for City
	 * @param string $City 
	 * @return ContactInfo
	 */
	public function setCity($City)
	{
		$this->City = $City;
		return $this;
	}

	/**
	 * Setter for Street
	 * @param string $Street 
	 * @return ContactInfo
	 */
	public function setStreet($Street)
	{
		$this->Street = $Street;
		return $this;
	}

	/**
	 * Setter for House
	 * @param string $House 
	 * @return ContactInfo
	 */
	public function setHouse($House)
	{
		$this->House = $House;
		return $this;
	}

	/**
	 * Setter for Build
	 * @param string $Build 
	 * @return ContactInfo
	 */
	public function setBuild($Build)
	{
		$this->Build = $Build;
		return $this;
	}

	/**
	 * Setter for Apart
	 * @param string $Apart 
	 * @return ContactInfo
	 */
	public function setApart($Apart)
	{
		$this->Apart = $Apart;
		return $this;
	}

	/**
	 * Setter for CityCode
	 * @param string $CityCode 
	 * @return ContactInfo
	 */
	public function setCityCode($CityCode)
	{
		$this->CityCode = $CityCode;
		return $this;
	}

	/**
	 * Setter for Phone
	 * @param string $Phone 
	 * @return ContactInfo
	 */
	public function setPhone($Phone)
	{
		$this->Phone = $Phone;
		return $this;
	}

	/**
	 * Setter for PhoneExt
	 * @param string $PhoneExt 
	 * @return ContactInfo
	 */
	public function setPhoneExt($PhoneExt)
	{
		$this->PhoneExt = $PhoneExt;
		return $this;
	}

	/**
	 * Setter for CompanyName
	 * @param string $CompanyName 
	 * @return ContactInfo
	 */
	public function setCompanyName($CompanyName)
	{
		$this->CompanyName = $CompanyName;
		return $this;
	}

	/**
	 * Setter for IMClient
	 * @param string $IMClient 
	 * @return ContactInfo
	 */
	public function setIMClient($IMClient)
	{
		$this->IMClient = $IMClient;
		return $this;
	}

	/**
	 * Setter for IMLogin
	 * @param string $IMLogin 
	 * @return ContactInfo
	 */
	public function setIMLogin($IMLogin)
	{
		$this->IMLogin = $IMLogin;
		return $this;
	}

	/**
	 * Setter for ExtraMessage
	 * @param string $ExtraMessage 
	 * @return ContactInfo
	 */
	public function setExtraMessage($ExtraMessage)
	{
		$this->ExtraMessage = $ExtraMessage;
		return $this;
	}

	/**
	 * Setter for ContactEmail
	 * @param string $ContactEmail 
	 * @return ContactInfo
	 */
	public function setContactEmail($ContactEmail)
	{
		$this->ContactEmail = $ContactEmail;
		return $this;
	}

	/**
	 * Setter for WorkTime
	 * @param string $WorkTime 
	 * @return ContactInfo
	 */
	public function setWorkTime($WorkTime)
	{
		$this->WorkTime = $WorkTime;
		return $this;
	}

	/**
	 * Setter for OGRN
	 * @param string $OGRN 
	 * @return ContactInfo
	 */
	public function setOGRN($OGRN)
	{
		$this->OGRN = $OGRN;
		return $this;
	}

	/**
	 * Setter for PointOnMap
	 * @param MapPoint $PointOnMap 
	 * @return ContactInfo
	 */
	public function setPointOnMap($PointOnMap)
	{
		$this->PointOnMap = $PointOnMap;
		return $this;
	}
}



/**
 * 
 */
class RegionInfo 
{

	/**
	 * 
	 * @var integer
	 */
	public $RegionID;

	/**
	 * 
	 * @var integer
	 */
	public $ParentID;

	/**
	 * 
	 * @var string
	 */
	public $RegionName;

	/**
	 * 
	 * @param integer $RegionID 
	 * @param integer $ParentID 
	 * @param string $RegionName 
	 */
	public function __construct($RegionID = null, $ParentID = null, $RegionName = null)
	{
		$this->setRegionID($RegionID);
		$this->setParentID($ParentID);
		$this->setRegionName($RegionName);
	}

	/**
	 * Возвращает namespace структуры
	 *
	 * @return string
	 */
	public function getNamespace() { return 'API'; }

	/**
	 * @return RegionInfo
	 */
	public static function create() { return new self(); }

	/**
	 * Setter for RegionID
	 * @param integer $RegionID 
	 * @return RegionInfo
	 */
	public function setRegionID($RegionID)
	{
		$this->RegionID = $RegionID;
		return $this;
	}

	/**
	 * Setter for ParentID
	 * @param integer $ParentID 
	 * @return RegionInfo
	 */
	public function setParentID($ParentID)
	{
		$this->ParentID = $ParentID;
		return $this;
	}

	/**
	 * Setter for RegionName
	 * @param string $RegionName 
	 * @return RegionInfo
	 */
	public function setRegionName($RegionName)
	{
		$this->RegionName = $RegionName;
		return $this;
	}
}



/**
 * 
 */
class MapPoint 
{

	/**
	 * 
	 * @var double
	 */
	public $x;

	/**
	 * 
	 * @var double
	 */
	public $y;

	/**
	 * 
	 * @var double
	 */
	public $x1;

	/**
	 * 
	 * @var double
	 */
	public $y1;

	/**
	 * 
	 * @var double
	 */
	public $x2;

	/**
	 * 
	 * @var double
	 */
	public $y2;

	/**
	 * 
	 * @param double $x 
	 * @param double $y 
	 * @param double $x1 
	 * @param double $y1 
	 * @param double $x2 
	 * @param double $y2 
	 */
	public function __construct($x = null, $y = null, $x1 = null, $y1 = null, $x2 = null, $y2 = null)
	{
		$this->setX($x);
		$this->setY($y);
		$this->setX1($x1);
		$this->setY1($y1);
		$this->setX2($x2);
		$this->setY2($y2);
	}

	/**
	 * Возвращает namespace структуры
	 *
	 * @return string
	 */
	public function getNamespace() { return 'API'; }

	/**
	 * @return MapPoint
	 */
	public static function create() { return new self(); }

	/**
	 * Setter for x
	 * @param double $x 
	 * @return MapPoint
	 */
	public function setX($x)
	{
		$this->x = $x;
		return $this;
	}

	/**
	 * Setter for y
	 * @param double $y 
	 * @return MapPoint
	 */
	public function setY($y)
	{
		$this->y = $y;
		return $this;
	}

	/**
	 * Setter for x1
	 * @param double $x1 
	 * @return MapPoint
	 */
	public function setX1($x1)
	{
		$this->x1 = $x1;
		return $this;
	}

	/**
	 * Setter for y1
	 * @param double $y1 
	 * @return MapPoint
	 */
	public function setY1($y1)
	{
		$this->y1 = $y1;
		return $this;
	}

	/**
	 * Setter for x2
	 * @param double $x2 
	 * @return MapPoint
	 */
	public function setX2($x2)
	{
		$this->x2 = $x2;
		return $this;
	}

	/**
	 * Setter for y2
	 * @param double $y2 
	 * @return MapPoint
	 */
	public function setY2($y2)
	{
		$this->y2 = $y2;
		return $this;
	}
}



/**
 * 
 */
class PingAPI_XStructInfo 
{

	/**
	 * 
	 * @var string
	 */
	public $Field1;

	/**
	 * 
	 * @var integer
	 */
	public $Field2;

	/**
	 * 
	 * @param string $Field1 
	 * @param integer $Field2 
	 */
	public function __construct($Field1 = null, $Field2 = null)
	{
		$this->setField1($Field1);
		$this->setField2($Field2);
	}

	/**
	 * Возвращает namespace структуры
	 *
	 * @return string
	 */
	public function getNamespace() { return 'API'; }

	/**
	 * @return PingAPI_XStructInfo
	 */
	public static function create() { return new self(); }

	/**
	 * Setter for Field1
	 * @param string $Field1 
	 * @return PingAPI_XStructInfo
	 */
	public function setField1($Field1)
	{
		$this->Field1 = $Field1;
		return $this;
	}

	/**
	 * Setter for Field2
	 * @param integer $Field2 
	 * @return PingAPI_XStructInfo
	 */
	public function setField2($Field2)
	{
		$this->Field2 = $Field2;
		return $this;
	}
}



/**
 * 
 */
class PingAPI_XInfo 
{

	/**
	 * 
	 * @var integer
	 */
	public $IntValue;

	/**
	 * 
	 * @var string
	 */
	public $DateValue;

	/**
	 * 
	 * @var string
	 */
	public $StrValue;

	/**
	 * 
	 * @var ArrayOfInteger
	 */
	public $IntArray;

	/**
	 * 
	 * @var ArrayOfString
	 */
	public $StrArray;

	/**
	 * 
	 * @var ArrayOfPingAPI_XStructInfo
	 */
	public $StructArray;

	/**
	 * 
	 * @param integer $IntValue 
	 * @param string $DateValue 
	 * @param string $StrValue 
	 * @param ArrayOfInteger $IntArray 
	 * @param ArrayOfString $StrArray 
	 * @param ArrayOfPingAPI_XStructInfo $StructArray 
	 */
	public function __construct($IntValue = null, $DateValue = null, $StrValue = null, $IntArray = null, $StrArray = null, $StructArray = null)
	{
		$this->setIntValue($IntValue);
		$this->setDateValue($DateValue);
		$this->setStrValue($StrValue);
		$this->setIntArray($IntArray);
		$this->setStrArray($StrArray);
		$this->setStructArray($StructArray);
	}

	/**
	 * Возвращает namespace структуры
	 *
	 * @return string
	 */
	public function getNamespace() { return 'API'; }

	/**
	 * @return PingAPI_XInfo
	 */
	public static function create() { return new self(); }

	/**
	 * Setter for IntValue
	 * @param integer $IntValue 
	 * @return PingAPI_XInfo
	 */
	public function setIntValue($IntValue)
	{
		$this->IntValue = $IntValue;
		return $this;
	}

	/**
	 * Setter for DateValue
	 * @param string $DateValue 
	 * @return PingAPI_XInfo
	 */
	public function setDateValue($DateValue)
	{
		$this->DateValue = $DateValue;
		return $this;
	}

	/**
	 * Setter for StrValue
	 * @param string $StrValue 
	 * @return PingAPI_XInfo
	 */
	public function setStrValue($StrValue)
	{
		$this->StrValue = $StrValue;
		return $this;
	}

	/**
	 * Setter for IntArray
	 * @param ArrayOfInteger $IntArray 
	 * @return PingAPI_XInfo
	 */
	public function setIntArray($IntArray)
	{
		$this->IntArray = $IntArray;
		return $this;
	}

	/**
	 * Setter for StrArray
	 * @param ArrayOfString $StrArray 
	 * @return PingAPI_XInfo
	 */
	public function setStrArray($StrArray)
	{
		$this->StrArray = $StrArray;
		return $this;
	}

	/**
	 * Setter for StructArray
	 * @param ArrayOfPingAPI_XStructInfo $StructArray 
	 * @return PingAPI_XInfo
	 */
	public function setStructArray($StructArray)
	{
		$this->StructArray = $StructArray;
		return $this;
	}
}



/**
 * 
 */
class TimeTargetInfo 
{

	/**
	 * 
	 * @var string
	 */
	public $ShowOnHolidays;

	/**
	 * 
	 * @var integer
	 */
	public $HolidayShowFrom;

	/**
	 * 
	 * @var integer
	 */
	public $HolidayShowTo;

	/**
	 * 
	 * @var ArrayOfTimeTargetItem
	 */
	public $DaysHours;

	/**
	 * 
	 * @var string
	 */
	public $TimeZone;

	/**
	 * 
	 * @param string $ShowOnHolidays 
	 * @param integer $HolidayShowFrom 
	 * @param integer $HolidayShowTo 
	 * @param ArrayOfTimeTargetItem $DaysHours 
	 * @param string $TimeZone 
	 */
	public function __construct($ShowOnHolidays = null, $HolidayShowFrom = null, $HolidayShowTo = null, $DaysHours = null, $TimeZone = null)
	{
		$this->setShowOnHolidays($ShowOnHolidays);
		$this->setHolidayShowFrom($HolidayShowFrom);
		$this->setHolidayShowTo($HolidayShowTo);
		$this->setDaysHours($DaysHours);
		$this->setTimeZone($TimeZone);
	}

	/**
	 * Возвращает namespace структуры
	 *
	 * @return string
	 */
	public function getNamespace() { return 'API'; }

	/**
	 * @return TimeTargetInfo
	 */
	public static function create() { return new self(); }

	/**
	 * Setter for ShowOnHolidays
	 * @param string $ShowOnHolidays 
	 * @return TimeTargetInfo
	 */
	public function setShowOnHolidays($ShowOnHolidays)
	{
		$this->ShowOnHolidays = $ShowOnHolidays;
		return $this;
	}

	/**
	 * Setter for HolidayShowFrom
	 * @param integer $HolidayShowFrom 
	 * @return TimeTargetInfo
	 */
	public function setHolidayShowFrom($HolidayShowFrom)
	{
		$this->HolidayShowFrom = $HolidayShowFrom;
		return $this;
	}

	/**
	 * Setter for HolidayShowTo
	 * @param integer $HolidayShowTo 
	 * @return TimeTargetInfo
	 */
	public function setHolidayShowTo($HolidayShowTo)
	{
		$this->HolidayShowTo = $HolidayShowTo;
		return $this;
	}

	/**
	 * Setter for DaysHours
	 * @param ArrayOfTimeTargetItem $DaysHours 
	 * @return TimeTargetInfo
	 */
	public function setDaysHours($DaysHours)
	{
		$this->DaysHours = $DaysHours;
		return $this;
	}

	/**
	 * Setter for TimeZone
	 * @param string $TimeZone 
	 * @return TimeTargetInfo
	 */
	public function setTimeZone($TimeZone)
	{
		$this->TimeZone = $TimeZone;
		return $this;
	}
}



/**
 * 
 */
class TimeTargetItem 
{

	/**
	 * 
	 * @var ArrayOfInteger
	 */
	public $Hours;

	/**
	 * 
	 * @var ArrayOfInteger
	 */
	public $Days;

	/**
	 * 
	 * @param ArrayOfInteger $Hours 
	 * @param ArrayOfInteger $Days 
	 */
	public function __construct($Hours = null, $Days = null)
	{
		$this->setHours($Hours);
		$this->setDays($Days);
	}

	/**
	 * Возвращает namespace структуры
	 *
	 * @return string
	 */
	public function getNamespace() { return 'API'; }

	/**
	 * @return TimeTargetItem
	 */
	public static function create() { return new self(); }

	/**
	 * Setter for Hours
	 * @param ArrayOfInteger $Hours 
	 * @return TimeTargetItem
	 */
	public function setHours($Hours)
	{
		$this->Hours = $Hours;
		return $this;
	}

	/**
	 * Setter for Days
	 * @param ArrayOfInteger $Days 
	 * @return TimeTargetItem
	 */
	public function setDays($Days)
	{
		$this->Days = $Days;
		return $this;
	}
}



/**
 * 
 */
class CoverageInfo 
{

	/**
	 * 
	 * @var double
	 */
	public $Probability;

	/**
	 * 
	 * @var double
	 */
	public $Price;

	/**
	 * 
	 * @param double $Probability 
	 * @param double $Price 
	 */
	public function __construct($Probability = null, $Price = null)
	{
		$this->setProbability($Probability);
		$this->setPrice($Price);
	}

	/**
	 * Возвращает namespace структуры
	 *
	 * @return string
	 */
	public function getNamespace() { return 'API'; }

	/**
	 * @return CoverageInfo
	 */
	public static function create() { return new self(); }

	/**
	 * Setter for Probability
	 * @param double $Probability 
	 * @return CoverageInfo
	 */
	public function setProbability($Probability)
	{
		$this->Probability = $Probability;
		return $this;
	}

	/**
	 * Setter for Price
	 * @param double $Price 
	 * @return CoverageInfo
	 */
	public function setPrice($Price)
	{
		$this->Price = $Price;
		return $this;
	}
}



/**
 * 
 */
class BannerPhrasesFilterRequestInfo 
{

	/**
	 * 
	 * @var ArrayOfInteger
	 */
	public $BannerIDS;

	/**
	 * 
	 * @var ArrayOfString
	 */
	public $FieldsNames;

	/**
	 * 
	 * @var string
	 */
	public $ConsiderTimeTarget;

	/**
	 * 
	 * @var string
	 */
	public $RequestPrices;

	/**
	 * 
	 * @param ArrayOfInteger $BannerIDS 
	 * @param ArrayOfString $FieldsNames 
	 * @param string $ConsiderTimeTarget 
	 * @param string $RequestPrices 
	 */
	public function __construct($BannerIDS = null, $FieldsNames = null, $ConsiderTimeTarget = null, $RequestPrices = null)
	{
		$this->setBannerIDS($BannerIDS);
		$this->setFieldsNames($FieldsNames);
		$this->setConsiderTimeTarget($ConsiderTimeTarget);
		$this->setRequestPrices($RequestPrices);
	}

	/**
	 * Возвращает namespace структуры
	 *
	 * @return string
	 */
	public function getNamespace() { return 'API'; }

	/**
	 * @return BannerPhrasesFilterRequestInfo
	 */
	public static function create() { return new self(); }

	/**
	 * Setter for BannerIDS
	 * @param ArrayOfInteger $BannerIDS 
	 * @return BannerPhrasesFilterRequestInfo
	 */
	public function setBannerIDS($BannerIDS)
	{
		$this->BannerIDS = $BannerIDS;
		return $this;
	}

	/**
	 * Setter for FieldsNames
	 * @param ArrayOfString $FieldsNames 
	 * @return BannerPhrasesFilterRequestInfo
	 */
	public function setFieldsNames($FieldsNames)
	{
		$this->FieldsNames = $FieldsNames;
		return $this;
	}

	/**
	 * Setter for ConsiderTimeTarget
	 * @param string $ConsiderTimeTarget 
	 * @return BannerPhrasesFilterRequestInfo
	 */
	public function setConsiderTimeTarget($ConsiderTimeTarget)
	{
		$this->ConsiderTimeTarget = $ConsiderTimeTarget;
		return $this;
	}

	/**
	 * Setter for RequestPrices
	 * @param string $RequestPrices 
	 * @return BannerPhrasesFilterRequestInfo
	 */
	public function setRequestPrices($RequestPrices)
	{
		$this->RequestPrices = $RequestPrices;
		return $this;
	}
}



/**
 * 
 */
class PhrasePriceInfo 
{

	/**
	 * 
	 * @var integer
	 */
	public $PhraseID;

	/**
	 * 
	 * @var integer
	 */
	public $BannerID;

	/**
	 * 
	 * @var integer
	 */
	public $CampaignID;

	/**
	 * 
	 * @var double
	 */
	public $Price;

	/**
	 * 
	 * @var string
	 */
	public $AutoBroker;

	/**
	 * 
	 * @var string
	 */
	public $AutoBudgetPriority;

	/**
	 * 
	 * @var double
	 */
	public $ContextPrice;

	/**
	 * 
	 * @param integer $PhraseID 
	 * @param integer $BannerID 
	 * @param integer $CampaignID 
	 * @param double $Price 
	 * @param string $AutoBroker 
	 * @param string $AutoBudgetPriority 
	 * @param double $ContextPrice 
	 */
	public function __construct($PhraseID = null, $BannerID = null, $CampaignID = null, $Price = null, $AutoBroker = null, $AutoBudgetPriority = null, $ContextPrice = null)
	{
		$this->setPhraseID($PhraseID);
		$this->setBannerID($BannerID);
		$this->setCampaignID($CampaignID);
		$this->setPrice($Price);
		$this->setAutoBroker($AutoBroker);
		$this->setAutoBudgetPriority($AutoBudgetPriority);
		$this->setContextPrice($ContextPrice);
	}

	/**
	 * Возвращает namespace структуры
	 *
	 * @return string
	 */
	public function getNamespace() { return 'API'; }

	/**
	 * @return PhrasePriceInfo
	 */
	public static function create() { return new self(); }

	/**
	 * Setter for PhraseID
	 * @param integer $PhraseID 
	 * @return PhrasePriceInfo
	 */
	public function setPhraseID($PhraseID)
	{
		$this->PhraseID = $PhraseID;
		return $this;
	}

	/**
	 * Setter for BannerID
	 * @param integer $BannerID 
	 * @return PhrasePriceInfo
	 */
	public function setBannerID($BannerID)
	{
		$this->BannerID = $BannerID;
		return $this;
	}

	/**
	 * Setter for CampaignID
	 * @param integer $CampaignID 
	 * @return PhrasePriceInfo
	 */
	public function setCampaignID($CampaignID)
	{
		$this->CampaignID = $CampaignID;
		return $this;
	}

	/**
	 * Setter for Price
	 * @param double $Price 
	 * @return PhrasePriceInfo
	 */
	public function setPrice($Price)
	{
		$this->Price = $Price;
		return $this;
	}

	/**
	 * Setter for AutoBroker
	 * @param string $AutoBroker 
	 * @return PhrasePriceInfo
	 */
	public function setAutoBroker($AutoBroker)
	{
		$this->AutoBroker = $AutoBroker;
		return $this;
	}

	/**
	 * Setter for AutoBudgetPriority
	 * @param string $AutoBudgetPriority 
	 * @return PhrasePriceInfo
	 */
	public function setAutoBudgetPriority($AutoBudgetPriority)
	{
		$this->AutoBudgetPriority = $AutoBudgetPriority;
		return $this;
	}

	/**
	 * Setter for ContextPrice
	 * @param double $ContextPrice 
	 * @return PhrasePriceInfo
	 */
	public function setContextPrice($ContextPrice)
	{
		$this->ContextPrice = $ContextPrice;
		return $this;
	}
}



/**
 * 
 */
class BannerPhraseInfo 
{

	/**
	 * 
	 * @var string
	 */
	public $Phrase;

	/**
	 * 
	 * @var string
	 */
	public $IsRubric;

	/**
	 * 
	 * @var integer
	 */
	public $Clicks;

	/**
	 * 
	 * @var integer
	 */
	public $FirstPlaceClicks;

	/**
	 * 
	 * @var integer
	 */
	public $PremiumClicks;

	/**
	 * 
	 * @var integer
	 */
	public $Shows;

	/**
	 * 
	 * @var double
	 */
	public $Min;

	/**
	 * 
	 * @var double
	 */
	public $Max;

	/**
	 * 
	 * @var double
	 */
	public $PremiumMin;

	/**
	 * 
	 * @var double
	 */
	public $PremiumMax;

	/**
	 * 
	 * @var double
	 */
	public $Market;

	/**
	 * 
	 * @var double
	 */
	public $CTR;

	/**
	 * 
	 * @var double
	 */
	public $FirstPlaceCTR;

	/**
	 * 
	 * @var double
	 */
	public $PremiumCTR;

	/**
	 * 
	 * @var string
	 */
	public $LowCTRWarning;

	/**
	 * 
	 * @var string
	 */
	public $LowCTR;

	/**
	 * 
	 * @var double
	 */
	public $ContextPrice;

	/**
	 * 
	 * @var ArrayOfCoverageInfo
	 */
	public $ContextCoverage;

	/**
	 * 
	 * @var integer
	 */
	public $BannerID;

	/**
	 * 
	 * @var double
	 */
	public $Price;

	/**
	 * 
	 * @var ArrayOfFloat
	 */
	public $Prices;

	/**
	 * 
	 * @var ArrayOfCoverageInfo
	 */
	public $Coverage;

	/**
	 * 
	 * @var string
	 */
	public $AutoBroker;

	/**
	 * 
	 * @var integer
	 */
	public $PhraseID;

	/**
	 * 
	 * @var double
	 */
	public $CurrentOnSearch;

	/**
	 * 
	 * @var integer
	 */
	public $CampaignID;

	/**
	 * 
	 * @var double
	 */
	public $MinPrice;

	/**
	 * 
	 * @var string
	 */
	public $AutoBudgetPriority;

	/**
	 * 
	 * @var string
	 */
	public $StatusPhraseModerate;

	/**
	 * 
	 * @var string
	 */
	public $ContextLowCTR;

	/**
	 * 
	 * @param string $Phrase 
	 * @param string $IsRubric 
	 * @param integer $Clicks 
	 * @param integer $FirstPlaceClicks 
	 * @param integer $PremiumClicks 
	 * @param integer $Shows 
	 * @param double $Min 
	 * @param double $Max 
	 * @param double $PremiumMin 
	 * @param double $PremiumMax 
	 * @param double $Market 
	 * @param double $CTR 
	 * @param double $FirstPlaceCTR 
	 * @param double $PremiumCTR 
	 * @param string $LowCTRWarning 
	 * @param string $LowCTR 
	 * @param double $ContextPrice 
	 * @param ArrayOfCoverageInfo $ContextCoverage 
	 * @param integer $BannerID 
	 * @param double $Price 
	 * @param ArrayOfFloat $Prices 
	 * @param ArrayOfCoverageInfo $Coverage 
	 * @param string $AutoBroker 
	 * @param integer $PhraseID 
	 * @param double $CurrentOnSearch 
	 * @param integer $CampaignID 
	 * @param double $MinPrice 
	 * @param string $AutoBudgetPriority 
	 * @param string $StatusPhraseModerate 
	 * @param string $ContextLowCTR 
	 */
	public function __construct($Phrase = null, $IsRubric = null, $Clicks = null, $FirstPlaceClicks = null, $PremiumClicks = null, $Shows = null, $Min = null, $Max = null, $PremiumMin = null, $PremiumMax = null, $Market = null, $CTR = null, $FirstPlaceCTR = null, $PremiumCTR = null, $LowCTRWarning = null, $LowCTR = null, $ContextPrice = null, $ContextCoverage = null, $BannerID = null, $Price = null, $Prices = null, $Coverage = null, $AutoBroker = null, $PhraseID = null, $CurrentOnSearch = null, $CampaignID = null, $MinPrice = null, $AutoBudgetPriority = null, $StatusPhraseModerate = null, $ContextLowCTR = null)
	{
		$this->setPhrase($Phrase);
		$this->setIsRubric($IsRubric);
		$this->setClicks($Clicks);
		$this->setFirstPlaceClicks($FirstPlaceClicks);
		$this->setPremiumClicks($PremiumClicks);
		$this->setShows($Shows);
		$this->setMin($Min);
		$this->setMax($Max);
		$this->setPremiumMin($PremiumMin);
		$this->setPremiumMax($PremiumMax);
		$this->setMarket($Market);
		$this->setCTR($CTR);
		$this->setFirstPlaceCTR($FirstPlaceCTR);
		$this->setPremiumCTR($PremiumCTR);
		$this->setLowCTRWarning($LowCTRWarning);
		$this->setLowCTR($LowCTR);
		$this->setContextPrice($ContextPrice);
		$this->setContextCoverage($ContextCoverage);
		$this->setBannerID($BannerID);
		$this->setPrice($Price);
		$this->setPrices($Prices);
		$this->setCoverage($Coverage);
		$this->setAutoBroker($AutoBroker);
		$this->setPhraseID($PhraseID);
		$this->setCurrentOnSearch($CurrentOnSearch);
		$this->setCampaignID($CampaignID);
		$this->setMinPrice($MinPrice);
		$this->setAutoBudgetPriority($AutoBudgetPriority);
		$this->setStatusPhraseModerate($StatusPhraseModerate);
		$this->setContextLowCTR($ContextLowCTR);
	}

	/**
	 * Возвращает namespace структуры
	 *
	 * @return string
	 */
	public function getNamespace() { return 'API'; }

	/**
	 * @return BannerPhraseInfo
	 */
	public static function create() { return new self(); }

	/**
	 * Setter for Phrase
	 * @param string $Phrase 
	 * @return BannerPhraseInfo
	 */
	public function setPhrase($Phrase)
	{
		$this->Phrase = $Phrase;
		return $this;
	}

	/**
	 * Setter for IsRubric
	 * @param string $IsRubric 
	 * @return BannerPhraseInfo
	 */
	public function setIsRubric($IsRubric)
	{
		$this->IsRubric = $IsRubric;
		return $this;
	}

	/**
	 * Setter for Clicks
	 * @param integer $Clicks 
	 * @return BannerPhraseInfo
	 */
	public function setClicks($Clicks)
	{
		$this->Clicks = $Clicks;
		return $this;
	}

	/**
	 * Setter for FirstPlaceClicks
	 * @param integer $FirstPlaceClicks 
	 * @return BannerPhraseInfo
	 */
	public function setFirstPlaceClicks($FirstPlaceClicks)
	{
		$this->FirstPlaceClicks = $FirstPlaceClicks;
		return $this;
	}

	/**
	 * Setter for PremiumClicks
	 * @param integer $PremiumClicks 
	 * @return BannerPhraseInfo
	 */
	public function setPremiumClicks($PremiumClicks)
	{
		$this->PremiumClicks = $PremiumClicks;
		return $this;
	}

	/**
	 * Setter for Shows
	 * @param integer $Shows 
	 * @return BannerPhraseInfo
	 */
	public function setShows($Shows)
	{
		$this->Shows = $Shows;
		return $this;
	}

	/**
	 * Setter for Min
	 * @param double $Min 
	 * @return BannerPhraseInfo
	 */
	public function setMin($Min)
	{
		$this->Min = $Min;
		return $this;
	}

	/**
	 * Setter for Max
	 * @param double $Max 
	 * @return BannerPhraseInfo
	 */
	public function setMax($Max)
	{
		$this->Max = $Max;
		return $this;
	}

	/**
	 * Setter for PremiumMin
	 * @param double $PremiumMin 
	 * @return BannerPhraseInfo
	 */
	public function setPremiumMin($PremiumMin)
	{
		$this->PremiumMin = $PremiumMin;
		return $this;
	}

	/**
	 * Setter for PremiumMax
	 * @param double $PremiumMax 
	 * @return BannerPhraseInfo
	 */
	public function setPremiumMax($PremiumMax)
	{
		$this->PremiumMax = $PremiumMax;
		return $this;
	}

	/**
	 * Setter for Market
	 * @param double $Market 
	 * @return BannerPhraseInfo
	 */
	public function setMarket($Market)
	{
		$this->Market = $Market;
		return $this;
	}

	/**
	 * Setter for CTR
	 * @param double $CTR 
	 * @return BannerPhraseInfo
	 */
	public function setCTR($CTR)
	{
		$this->CTR = $CTR;
		return $this;
	}

	/**
	 * Setter for FirstPlaceCTR
	 * @param double $FirstPlaceCTR 
	 * @return BannerPhraseInfo
	 */
	public function setFirstPlaceCTR($FirstPlaceCTR)
	{
		$this->FirstPlaceCTR = $FirstPlaceCTR;
		return $this;
	}

	/**
	 * Setter for PremiumCTR
	 * @param double $PremiumCTR 
	 * @return BannerPhraseInfo
	 */
	public function setPremiumCTR($PremiumCTR)
	{
		$this->PremiumCTR = $PremiumCTR;
		return $this;
	}

	/**
	 * Setter for LowCTRWarning
	 * @param string $LowCTRWarning 
	 * @return BannerPhraseInfo
	 */
	public function setLowCTRWarning($LowCTRWarning)
	{
		$this->LowCTRWarning = $LowCTRWarning;
		return $this;
	}

	/**
	 * Setter for LowCTR
	 * @param string $LowCTR 
	 * @return BannerPhraseInfo
	 */
	public function setLowCTR($LowCTR)
	{
		$this->LowCTR = $LowCTR;
		return $this;
	}

	/**
	 * Setter for ContextPrice
	 * @param double $ContextPrice 
	 * @return BannerPhraseInfo
	 */
	public function setContextPrice($ContextPrice)
	{
		$this->ContextPrice = $ContextPrice;
		return $this;
	}

	/**
	 * Setter for ContextCoverage
	 * @param ArrayOfCoverageInfo $ContextCoverage 
	 * @return BannerPhraseInfo
	 */
	public function setContextCoverage($ContextCoverage)
	{
		$this->ContextCoverage = $ContextCoverage;
		return $this;
	}

	/**
	 * Setter for BannerID
	 * @param integer $BannerID 
	 * @return BannerPhraseInfo
	 */
	public function setBannerID($BannerID)
	{
		$this->BannerID = $BannerID;
		return $this;
	}

	/**
	 * Setter for Price
	 * @param double $Price 
	 * @return BannerPhraseInfo
	 */
	public function setPrice($Price)
	{
		$this->Price = $Price;
		return $this;
	}

	/**
	 * Setter for Prices
	 * @param ArrayOfFloat $Prices 
	 * @return BannerPhraseInfo
	 */
	public function setPrices($Prices)
	{
		$this->Prices = $Prices;
		return $this;
	}

	/**
	 * Setter for Coverage
	 * @param ArrayOfCoverageInfo $Coverage 
	 * @return BannerPhraseInfo
	 */
	public function setCoverage($Coverage)
	{
		$this->Coverage = $Coverage;
		return $this;
	}

	/**
	 * Setter for AutoBroker
	 * @param string $AutoBroker 
	 * @return BannerPhraseInfo
	 */
	public function setAutoBroker($AutoBroker)
	{
		$this->AutoBroker = $AutoBroker;
		return $this;
	}

	/**
	 * Setter for PhraseID
	 * @param integer $PhraseID 
	 * @return BannerPhraseInfo
	 */
	public function setPhraseID($PhraseID)
	{
		$this->PhraseID = $PhraseID;
		return $this;
	}

	/**
	 * Setter for CurrentOnSearch
	 * @param double $CurrentOnSearch 
	 * @return BannerPhraseInfo
	 */
	public function setCurrentOnSearch($CurrentOnSearch)
	{
		$this->CurrentOnSearch = $CurrentOnSearch;
		return $this;
	}

	/**
	 * Setter for CampaignID
	 * @param integer $CampaignID 
	 * @return BannerPhraseInfo
	 */
	public function setCampaignID($CampaignID)
	{
		$this->CampaignID = $CampaignID;
		return $this;
	}

	/**
	 * Setter for MinPrice
	 * @param double $MinPrice 
	 * @return BannerPhraseInfo
	 */
	public function setMinPrice($MinPrice)
	{
		$this->MinPrice = $MinPrice;
		return $this;
	}

	/**
	 * Setter for AutoBudgetPriority
	 * @param string $AutoBudgetPriority 
	 * @return BannerPhraseInfo
	 */
	public function setAutoBudgetPriority($AutoBudgetPriority)
	{
		$this->AutoBudgetPriority = $AutoBudgetPriority;
		return $this;
	}

	/**
	 * Setter for StatusPhraseModerate
	 * @param string $StatusPhraseModerate 
	 * @return BannerPhraseInfo
	 */
	public function setStatusPhraseModerate($StatusPhraseModerate)
	{
		$this->StatusPhraseModerate = $StatusPhraseModerate;
		return $this;
	}

	/**
	 * Setter for ContextLowCTR
	 * @param string $ContextLowCTR 
	 * @return BannerPhraseInfo
	 */
	public function setContextLowCTR($ContextLowCTR)
	{
		$this->ContextLowCTR = $ContextLowCTR;
		return $this;
	}
}



/**
 * 
 */
class BannerInfo 
{

	/**
	 * 
	 * @var integer
	 */
	public $BannerID;

	/**
	 * 
	 * @var integer
	 */
	public $CampaignID;

	/**
	 * 
	 * @var string
	 */
	public $Title;

	/**
	 * 
	 * @var string
	 */
	public $Text;

	/**
	 * 
	 * @var string
	 */
	public $Href;

	/**
	 * 
	 * @var string
	 */
	public $Domain;

	/**
	 * 
	 * @var string
	 */
	public $Geo;

	/**
	 * 
	 * @var ContactInfo
	 */
	public $ContactInfo;

	/**
	 * 
	 * @var ArrayOfBannerPhraseInfo
	 */
	public $Phrases;

	/**
	 * 
	 * @var string
	 */
	public $StatusActivating;

	/**
	 * 
	 * @var string
	 */
	public $StatusArchive;

	/**
	 * 
	 * @var string
	 */
	public $StatusBannerModerate;

	/**
	 * 
	 * @var string
	 */
	public $StatusPhrasesModerate;

	/**
	 * 
	 * @var string
	 */
	public $StatusPhoneModerate;

	/**
	 * 
	 * @var string
	 */
	public $StatusShow;

	/**
	 * 
	 * @var string
	 */
	public $IsActive;

	/**
	 * 
	 * @var string
	 */
	public $StatusSitelinksModerate;

	/**
	 * 
	 * @var ArrayOfSitelink
	 */
	public $Sitelinks;

	/**
	 * 
	 * @var ArrayOfString
	 */
	public $AdWarnings;

	/**
	 * 
	 * @var string
	 */
	public $FixedOnModeration;

	/**
	 * 
	 * @var ArrayOfRejectReason
	 */
	public $ModerateRejectionReasons;

	/**
	 * 
	 * @param integer $BannerID 
	 * @param integer $CampaignID 
	 * @param string $Title 
	 * @param string $Text 
	 * @param string $Href 
	 * @param string $Domain 
	 * @param string $Geo 
	 * @param ContactInfo $ContactInfo 
	 * @param ArrayOfBannerPhraseInfo $Phrases 
	 * @param string $StatusActivating 
	 * @param string $StatusArchive 
	 * @param string $StatusBannerModerate 
	 * @param string $StatusPhrasesModerate 
	 * @param string $StatusPhoneModerate 
	 * @param string $StatusShow 
	 * @param string $IsActive 
	 * @param string $StatusSitelinksModerate 
	 * @param ArrayOfSitelink $Sitelinks 
	 * @param ArrayOfString $AdWarnings 
	 * @param string $FixedOnModeration 
	 * @param ArrayOfRejectReason $ModerateRejectionReasons 
	 */
	public function __construct($BannerID = null, $CampaignID = null, $Title = null, $Text = null, $Href = null, $Domain = null, $Geo = null, $ContactInfo = null, $Phrases = null, $StatusActivating = null, $StatusArchive = null, $StatusBannerModerate = null, $StatusPhrasesModerate = null, $StatusPhoneModerate = null, $StatusShow = null, $IsActive = null, $StatusSitelinksModerate = null, $Sitelinks = null, $AdWarnings = null, $FixedOnModeration = null, $ModerateRejectionReasons = null)
	{
		$this->setBannerID($BannerID);
		$this->setCampaignID($CampaignID);
		$this->setTitle($Title);
		$this->setText($Text);
		$this->setHref($Href);
		$this->setDomain($Domain);
		$this->setGeo($Geo);
		$this->setContactInfo($ContactInfo);
		$this->setPhrases($Phrases);
		$this->setStatusActivating($StatusActivating);
		$this->setStatusArchive($StatusArchive);
		$this->setStatusBannerModerate($StatusBannerModerate);
		$this->setStatusPhrasesModerate($StatusPhrasesModerate);
		$this->setStatusPhoneModerate($StatusPhoneModerate);
		$this->setStatusShow($StatusShow);
		$this->setIsActive($IsActive);
		$this->setStatusSitelinksModerate($StatusSitelinksModerate);
		$this->setSitelinks($Sitelinks);
		$this->setAdWarnings($AdWarnings);
		$this->setFixedOnModeration($FixedOnModeration);
		$this->setModerateRejectionReasons($ModerateRejectionReasons);
	}

	/**
	 * Возвращает namespace структуры
	 *
	 * @return string
	 */
	public function getNamespace() { return 'API'; }

	/**
	 * @return BannerInfo
	 */
	public static function create() { return new self(); }

	/**
	 * Setter for BannerID
	 * @param integer $BannerID 
	 * @return BannerInfo
	 */
	public function setBannerID($BannerID)
	{
		$this->BannerID = $BannerID;
		return $this;
	}

	/**
	 * Setter for CampaignID
	 * @param integer $CampaignID 
	 * @return BannerInfo
	 */
	public function setCampaignID($CampaignID)
	{
		$this->CampaignID = $CampaignID;
		return $this;
	}

	/**
	 * Setter for Title
	 * @param string $Title 
	 * @return BannerInfo
	 */
	public function setTitle($Title)
	{
		$this->Title = $Title;
		return $this;
	}

	/**
	 * Setter for Text
	 * @param string $Text 
	 * @return BannerInfo
	 */
	public function setText($Text)
	{
		$this->Text = $Text;
		return $this;
	}

	/**
	 * Setter for Href
	 * @param string $Href 
	 * @return BannerInfo
	 */
	public function setHref($Href)
	{
		$this->Href = $Href;
		return $this;
	}

	/**
	 * Setter for Domain
	 * @param string $Domain 
	 * @return BannerInfo
	 */
	public function setDomain($Domain)
	{
		$this->Domain = $Domain;
		return $this;
	}

	/**
	 * Setter for Geo
	 * @param string $Geo 
	 * @return BannerInfo
	 */
	public function setGeo($Geo)
	{
		$this->Geo = $Geo;
		return $this;
	}

	/**
	 * Setter for ContactInfo
	 * @param ContactInfo $ContactInfo 
	 * @return BannerInfo
	 */
	public function setContactInfo($ContactInfo)
	{
		$this->ContactInfo = $ContactInfo;
		return $this;
	}

	/**
	 * Setter for Phrases
	 * @param ArrayOfBannerPhraseInfo $Phrases 
	 * @return BannerInfo
	 */
	public function setPhrases($Phrases)
	{
		$this->Phrases = $Phrases;
		return $this;
	}

	/**
	 * Setter for StatusActivating
	 * @param string $StatusActivating 
	 * @return BannerInfo
	 */
	public function setStatusActivating($StatusActivating)
	{
		$this->StatusActivating = $StatusActivating;
		return $this;
	}

	/**
	 * Setter for StatusArchive
	 * @param string $StatusArchive 
	 * @return BannerInfo
	 */
	public function setStatusArchive($StatusArchive)
	{
		$this->StatusArchive = $StatusArchive;
		return $this;
	}

	/**
	 * Setter for StatusBannerModerate
	 * @param string $StatusBannerModerate 
	 * @return BannerInfo
	 */
	public function setStatusBannerModerate($StatusBannerModerate)
	{
		$this->StatusBannerModerate = $StatusBannerModerate;
		return $this;
	}

	/**
	 * Setter for StatusPhrasesModerate
	 * @param string $StatusPhrasesModerate 
	 * @return BannerInfo
	 */
	public function setStatusPhrasesModerate($StatusPhrasesModerate)
	{
		$this->StatusPhrasesModerate = $StatusPhrasesModerate;
		return $this;
	}

	/**
	 * Setter for StatusPhoneModerate
	 * @param string $StatusPhoneModerate 
	 * @return BannerInfo
	 */
	public function setStatusPhoneModerate($StatusPhoneModerate)
	{
		$this->StatusPhoneModerate = $StatusPhoneModerate;
		return $this;
	}

	/**
	 * Setter for StatusShow
	 * @param string $StatusShow 
	 * @return BannerInfo
	 */
	public function setStatusShow($StatusShow)
	{
		$this->StatusShow = $StatusShow;
		return $this;
	}

	/**
	 * Setter for IsActive
	 * @param string $IsActive 
	 * @return BannerInfo
	 */
	public function setIsActive($IsActive)
	{
		$this->IsActive = $IsActive;
		return $this;
	}

	/**
	 * Setter for StatusSitelinksModerate
	 * @param string $StatusSitelinksModerate 
	 * @return BannerInfo
	 */
	public function setStatusSitelinksModerate($StatusSitelinksModerate)
	{
		$this->StatusSitelinksModerate = $StatusSitelinksModerate;
		return $this;
	}

	/**
	 * Setter for Sitelinks
	 * @param ArrayOfSitelink $Sitelinks 
	 * @return BannerInfo
	 */
	public function setSitelinks($Sitelinks)
	{
		$this->Sitelinks = $Sitelinks;
		return $this;
	}

	/**
	 * Setter for AdWarnings
	 * @param ArrayOfString $AdWarnings 
	 * @return BannerInfo
	 */
	public function setAdWarnings($AdWarnings)
	{
		$this->AdWarnings = $AdWarnings;
		return $this;
	}

	/**
	 * Setter for FixedOnModeration
	 * @param string $FixedOnModeration 
	 * @return BannerInfo
	 */
	public function setFixedOnModeration($FixedOnModeration)
	{
		$this->FixedOnModeration = $FixedOnModeration;
		return $this;
	}

	/**
	 * Setter for ModerateRejectionReasons
	 * @param ArrayOfRejectReason $ModerateRejectionReasons 
	 * @return BannerInfo
	 */
	public function setModerateRejectionReasons($ModerateRejectionReasons)
	{
		$this->ModerateRejectionReasons = $ModerateRejectionReasons;
		return $this;
	}
}



/**
 * 
 */
class Sitelink 
{

	/**
	 * 
	 * @var string
	 */
	public $Title;

	/**
	 * 
	 * @var string
	 */
	public $Href;

	/**
	 * 
	 * @param string $Title 
	 * @param string $Href 
	 */
	public function __construct($Title = null, $Href = null)
	{
		$this->setTitle($Title);
		$this->setHref($Href);
	}

	/**
	 * Возвращает namespace структуры
	 *
	 * @return string
	 */
	public function getNamespace() { return 'API'; }

	/**
	 * @return Sitelink
	 */
	public static function create() { return new self(); }

	/**
	 * Setter for Title
	 * @param string $Title 
	 * @return Sitelink
	 */
	public function setTitle($Title)
	{
		$this->Title = $Title;
		return $this;
	}

	/**
	 * Setter for Href
	 * @param string $Href 
	 * @return Sitelink
	 */
	public function setHref($Href)
	{
		$this->Href = $Href;
		return $this;
	}
}



/**
 * 
 */
class RejectReason 
{

	/**
	 * 
	 * @var string
	 */
	public $Type;

	/**
	 * 
	 * @var string
	 */
	public $Text;

	/**
	 * 
	 * @param string $Type 
	 * @param string $Text 
	 */
	public function __construct($Type = null, $Text = null)
	{
		$this->setType($Type);
		$this->setText($Text);
	}

	/**
	 * Возвращает namespace структуры
	 *
	 * @return string
	 */
	public function getNamespace() { return 'API'; }

	/**
	 * @return RejectReason
	 */
	public static function create() { return new self(); }

	/**
	 * Setter for Type
	 * @param string $Type 
	 * @return RejectReason
	 */
	public function setType($Type)
	{
		$this->Type = $Type;
		return $this;
	}

	/**
	 * Setter for Text
	 * @param string $Text 
	 * @return RejectReason
	 */
	public function setText($Text)
	{
		$this->Text = $Text;
		return $this;
	}
}



/**
 * 
 */
class CampaignBidsInfo 
{

	/**
	 * 
	 * @var integer
	 */
	public $CampaignID;

	/**
	 * 
	 * @var ArrayOfInteger
	 */
	public $BannerIDS;

	/**
	 * 
	 * @param integer $CampaignID 
	 * @param ArrayOfInteger $BannerIDS 
	 */
	public function __construct($CampaignID = null, $BannerIDS = null)
	{
		$this->setCampaignID($CampaignID);
		$this->setBannerIDS($BannerIDS);
	}

	/**
	 * Возвращает namespace структуры
	 *
	 * @return string
	 */
	public function getNamespace() { return 'API'; }

	/**
	 * @return CampaignBidsInfo
	 */
	public static function create() { return new self(); }

	/**
	 * Setter for CampaignID
	 * @param integer $CampaignID 
	 * @return CampaignBidsInfo
	 */
	public function setCampaignID($CampaignID)
	{
		$this->CampaignID = $CampaignID;
		return $this;
	}

	/**
	 * Setter for BannerIDS
	 * @param ArrayOfInteger $BannerIDS 
	 * @return CampaignBidsInfo
	 */
	public function setBannerIDS($BannerIDS)
	{
		$this->BannerIDS = $BannerIDS;
		return $this;
	}
}



/**
 * 
 */
class GetCampaignsInfo 
{

	/**
	 * 
	 * @var ArrayOfString
	 */
	public $Logins;

	/**
	 * 
	 * @var CampaignsFilterInfo
	 */
	public $Filter;

	/**
	 * 
	 * @param ArrayOfString $Logins 
	 * @param CampaignsFilterInfo $Filter 
	 */
	public function __construct($Logins = null, $Filter = null)
	{
		$this->setLogins($Logins);
		$this->setFilter($Filter);
	}

	/**
	 * Возвращает namespace структуры
	 *
	 * @return string
	 */
	public function getNamespace() { return 'API'; }

	/**
	 * @return GetCampaignsInfo
	 */
	public static function create() { return new self(); }

	/**
	 * Setter for Logins
	 * @param ArrayOfString $Logins 
	 * @return GetCampaignsInfo
	 */
	public function setLogins($Logins)
	{
		$this->Logins = $Logins;
		return $this;
	}

	/**
	 * Setter for Filter
	 * @param CampaignsFilterInfo $Filter 
	 * @return GetCampaignsInfo
	 */
	public function setFilter($Filter)
	{
		$this->Filter = $Filter;
		return $this;
	}
}



/**
 * 
 */
class CampaignsFilterInfo 
{

	/**
	 * 
	 * @var ArrayOfString
	 */
	public $StatusModerate;

	/**
	 * 
	 * @var ArrayOfString
	 */
	public $IsActive;

	/**
	 * 
	 * @var ArrayOfString
	 */
	public $StatusArchive;

	/**
	 * 
	 * @var ArrayOfString
	 */
	public $StatusActivating;

	/**
	 * 
	 * @var ArrayOfString
	 */
	public $StatusShow;

	/**
	 * 
	 * @param ArrayOfString $StatusModerate 
	 * @param ArrayOfString $IsActive 
	 * @param ArrayOfString $StatusArchive 
	 * @param ArrayOfString $StatusActivating 
	 * @param ArrayOfString $StatusShow 
	 */
	public function __construct($StatusModerate = null, $IsActive = null, $StatusArchive = null, $StatusActivating = null, $StatusShow = null)
	{
		$this->setStatusModerate($StatusModerate);
		$this->setIsActive($IsActive);
		$this->setStatusArchive($StatusArchive);
		$this->setStatusActivating($StatusActivating);
		$this->setStatusShow($StatusShow);
	}

	/**
	 * Возвращает namespace структуры
	 *
	 * @return string
	 */
	public function getNamespace() { return 'API'; }

	/**
	 * @return CampaignsFilterInfo
	 */
	public static function create() { return new self(); }

	/**
	 * Setter for StatusModerate
	 * @param ArrayOfString $StatusModerate 
	 * @return CampaignsFilterInfo
	 */
	public function setStatusModerate($StatusModerate)
	{
		$this->StatusModerate = $StatusModerate;
		return $this;
	}

	/**
	 * Setter for IsActive
	 * @param ArrayOfString $IsActive 
	 * @return CampaignsFilterInfo
	 */
	public function setIsActive($IsActive)
	{
		$this->IsActive = $IsActive;
		return $this;
	}

	/**
	 * Setter for StatusArchive
	 * @param ArrayOfString $StatusArchive 
	 * @return CampaignsFilterInfo
	 */
	public function setStatusArchive($StatusArchive)
	{
		$this->StatusArchive = $StatusArchive;
		return $this;
	}

	/**
	 * Setter for StatusActivating
	 * @param ArrayOfString $StatusActivating 
	 * @return CampaignsFilterInfo
	 */
	public function setStatusActivating($StatusActivating)
	{
		$this->StatusActivating = $StatusActivating;
		return $this;
	}

	/**
	 * Setter for StatusShow
	 * @param ArrayOfString $StatusShow 
	 * @return CampaignsFilterInfo
	 */
	public function setStatusShow($StatusShow)
	{
		$this->StatusShow = $StatusShow;
		return $this;
	}
}



/**
 * 
 */
class BannersFilterInfo 
{

	/**
	 * 
	 * @var ArrayOfString
	 */
	public $StatusPhoneModerate;

	/**
	 * 
	 * @var ArrayOfString
	 */
	public $StatusBannerModerate;

	/**
	 * 
	 * @var ArrayOfString
	 */
	public $StatusPhrasesModerate;

	/**
	 * 
	 * @var ArrayOfString
	 */
	public $StatusActivating;

	/**
	 * 
	 * @var ArrayOfString
	 */
	public $StatusShow;

	/**
	 * 
	 * @var ArrayOfString
	 */
	public $IsActive;

	/**
	 * 
	 * @var ArrayOfString
	 */
	public $StatusArchive;

	/**
	 * 
	 * @param ArrayOfString $StatusPhoneModerate 
	 * @param ArrayOfString $StatusBannerModerate 
	 * @param ArrayOfString $StatusPhrasesModerate 
	 * @param ArrayOfString $StatusActivating 
	 * @param ArrayOfString $StatusShow 
	 * @param ArrayOfString $IsActive 
	 * @param ArrayOfString $StatusArchive 
	 */
	public function __construct($StatusPhoneModerate = null, $StatusBannerModerate = null, $StatusPhrasesModerate = null, $StatusActivating = null, $StatusShow = null, $IsActive = null, $StatusArchive = null)
	{
		$this->setStatusPhoneModerate($StatusPhoneModerate);
		$this->setStatusBannerModerate($StatusBannerModerate);
		$this->setStatusPhrasesModerate($StatusPhrasesModerate);
		$this->setStatusActivating($StatusActivating);
		$this->setStatusShow($StatusShow);
		$this->setIsActive($IsActive);
		$this->setStatusArchive($StatusArchive);
	}

	/**
	 * Возвращает namespace структуры
	 *
	 * @return string
	 */
	public function getNamespace() { return 'API'; }

	/**
	 * @return BannersFilterInfo
	 */
	public static function create() { return new self(); }

	/**
	 * Setter for StatusPhoneModerate
	 * @param ArrayOfString $StatusPhoneModerate 
	 * @return BannersFilterInfo
	 */
	public function setStatusPhoneModerate($StatusPhoneModerate)
	{
		$this->StatusPhoneModerate = $StatusPhoneModerate;
		return $this;
	}

	/**
	 * Setter for StatusBannerModerate
	 * @param ArrayOfString $StatusBannerModerate 
	 * @return BannersFilterInfo
	 */
	public function setStatusBannerModerate($StatusBannerModerate)
	{
		$this->StatusBannerModerate = $StatusBannerModerate;
		return $this;
	}

	/**
	 * Setter for StatusPhrasesModerate
	 * @param ArrayOfString $StatusPhrasesModerate 
	 * @return BannersFilterInfo
	 */
	public function setStatusPhrasesModerate($StatusPhrasesModerate)
	{
		$this->StatusPhrasesModerate = $StatusPhrasesModerate;
		return $this;
	}

	/**
	 * Setter for StatusActivating
	 * @param ArrayOfString $StatusActivating 
	 * @return BannersFilterInfo
	 */
	public function setStatusActivating($StatusActivating)
	{
		$this->StatusActivating = $StatusActivating;
		return $this;
	}

	/**
	 * Setter for StatusShow
	 * @param ArrayOfString $StatusShow 
	 * @return BannersFilterInfo
	 */
	public function setStatusShow($StatusShow)
	{
		$this->StatusShow = $StatusShow;
		return $this;
	}

	/**
	 * Setter for IsActive
	 * @param ArrayOfString $IsActive 
	 * @return BannersFilterInfo
	 */
	public function setIsActive($IsActive)
	{
		$this->IsActive = $IsActive;
		return $this;
	}

	/**
	 * Setter for StatusArchive
	 * @param ArrayOfString $StatusArchive 
	 * @return BannersFilterInfo
	 */
	public function setStatusArchive($StatusArchive)
	{
		$this->StatusArchive = $StatusArchive;
		return $this;
	}
}



/**
 * 
 */
class GetBannersInfo 
{

	/**
	 * 
	 * @var ArrayOfInteger
	 */
	public $CampaignIDS;

	/**
	 * 
	 * @var ArrayOfInteger
	 */
	public $BannerIDS;

	/**
	 * 
	 * @var BannersFilterInfo
	 */
	public $Filter;

	/**
	 * 
	 * @param ArrayOfInteger $CampaignIDS 
	 * @param ArrayOfInteger $BannerIDS 
	 * @param BannersFilterInfo $Filter 
	 */
	public function __construct($CampaignIDS = null, $BannerIDS = null, $Filter = null)
	{
		$this->setCampaignIDS($CampaignIDS);
		$this->setBannerIDS($BannerIDS);
		$this->setFilter($Filter);
	}

	/**
	 * Возвращает namespace структуры
	 *
	 * @return string
	 */
	public function getNamespace() { return 'API'; }

	/**
	 * @return GetBannersInfo
	 */
	public static function create() { return new self(); }

	/**
	 * Setter for CampaignIDS
	 * @param ArrayOfInteger $CampaignIDS 
	 * @return GetBannersInfo
	 */
	public function setCampaignIDS($CampaignIDS)
	{
		$this->CampaignIDS = $CampaignIDS;
		return $this;
	}

	/**
	 * Setter for BannerIDS
	 * @param ArrayOfInteger $BannerIDS 
	 * @return GetBannersInfo
	 */
	public function setBannerIDS($BannerIDS)
	{
		$this->BannerIDS = $BannerIDS;
		return $this;
	}

	/**
	 * Setter for Filter
	 * @param BannersFilterInfo $Filter 
	 * @return GetBannersInfo
	 */
	public function setFilter($Filter)
	{
		$this->Filter = $Filter;
		return $this;
	}
}



/**
 * 
 */
class NewForecastInfo 
{

	/**
	 * 
	 * @var ArrayOfInteger
	 */
	public $Categories;

	/**
	 * 
	 * @var ArrayOfString
	 */
	public $Phrases;

	/**
	 * 
	 * @var ArrayOfInteger
	 */
	public $GeoID;

	/**
	 * 
	 * @param ArrayOfInteger $Categories 
	 * @param ArrayOfString $Phrases 
	 * @param ArrayOfInteger $GeoID 
	 */
	public function __construct($Categories = null, $Phrases = null, $GeoID = null)
	{
		$this->setCategories($Categories);
		$this->setPhrases($Phrases);
		$this->setGeoID($GeoID);
	}

	/**
	 * Возвращает namespace структуры
	 *
	 * @return string
	 */
	public function getNamespace() { return 'API'; }

	/**
	 * @return NewForecastInfo
	 */
	public static function create() { return new self(); }

	/**
	 * Setter for Categories
	 * @param ArrayOfInteger $Categories 
	 * @return NewForecastInfo
	 */
	public function setCategories($Categories)
	{
		$this->Categories = $Categories;
		return $this;
	}

	/**
	 * Setter for Phrases
	 * @param ArrayOfString $Phrases 
	 * @return NewForecastInfo
	 */
	public function setPhrases($Phrases)
	{
		$this->Phrases = $Phrases;
		return $this;
	}

	/**
	 * Setter for GeoID
	 * @param ArrayOfInteger $GeoID 
	 * @return NewForecastInfo
	 */
	public function setGeoID($GeoID)
	{
		$this->GeoID = $GeoID;
		return $this;
	}
}



/**
 * 
 */
class ForecastCommonInfo 
{

	/**
	 * 
	 * @var integer
	 */
	public $Geo;

	/**
	 * 
	 * @var integer
	 */
	public $Shows;

	/**
	 * 
	 * @var integer
	 */
	public $Clicks;

	/**
	 * 
	 * @var integer
	 */
	public $FirstPlaceClicks;

	/**
	 * 
	 * @var integer
	 */
	public $PremiumClicks;

	/**
	 * 
	 * @var double
	 */
	public $Min;

	/**
	 * 
	 * @var double
	 */
	public $Max;

	/**
	 * 
	 * @var double
	 */
	public $PremiumMin;

	/**
	 * 
	 * @param integer $Geo 
	 * @param integer $Shows 
	 * @param integer $Clicks 
	 * @param integer $FirstPlaceClicks 
	 * @param integer $PremiumClicks 
	 * @param double $Min 
	 * @param double $Max 
	 * @param double $PremiumMin 
	 */
	public function __construct($Geo = null, $Shows = null, $Clicks = null, $FirstPlaceClicks = null, $PremiumClicks = null, $Min = null, $Max = null, $PremiumMin = null)
	{
		$this->setGeo($Geo);
		$this->setShows($Shows);
		$this->setClicks($Clicks);
		$this->setFirstPlaceClicks($FirstPlaceClicks);
		$this->setPremiumClicks($PremiumClicks);
		$this->setMin($Min);
		$this->setMax($Max);
		$this->setPremiumMin($PremiumMin);
	}

	/**
	 * Возвращает namespace структуры
	 *
	 * @return string
	 */
	public function getNamespace() { return 'API'; }

	/**
	 * @return ForecastCommonInfo
	 */
	public static function create() { return new self(); }

	/**
	 * Setter for Geo
	 * @param integer $Geo 
	 * @return ForecastCommonInfo
	 */
	public function setGeo($Geo)
	{
		$this->Geo = $Geo;
		return $this;
	}

	/**
	 * Setter for Shows
	 * @param integer $Shows 
	 * @return ForecastCommonInfo
	 */
	public function setShows($Shows)
	{
		$this->Shows = $Shows;
		return $this;
	}

	/**
	 * Setter for Clicks
	 * @param integer $Clicks 
	 * @return ForecastCommonInfo
	 */
	public function setClicks($Clicks)
	{
		$this->Clicks = $Clicks;
		return $this;
	}

	/**
	 * Setter for FirstPlaceClicks
	 * @param integer $FirstPlaceClicks 
	 * @return ForecastCommonInfo
	 */
	public function setFirstPlaceClicks($FirstPlaceClicks)
	{
		$this->FirstPlaceClicks = $FirstPlaceClicks;
		return $this;
	}

	/**
	 * Setter for PremiumClicks
	 * @param integer $PremiumClicks 
	 * @return ForecastCommonInfo
	 */
	public function setPremiumClicks($PremiumClicks)
	{
		$this->PremiumClicks = $PremiumClicks;
		return $this;
	}

	/**
	 * Setter for Min
	 * @param double $Min 
	 * @return ForecastCommonInfo
	 */
	public function setMin($Min)
	{
		$this->Min = $Min;
		return $this;
	}

	/**
	 * Setter for Max
	 * @param double $Max 
	 * @return ForecastCommonInfo
	 */
	public function setMax($Max)
	{
		$this->Max = $Max;
		return $this;
	}

	/**
	 * Setter for PremiumMin
	 * @param double $PremiumMin 
	 * @return ForecastCommonInfo
	 */
	public function setPremiumMin($PremiumMin)
	{
		$this->PremiumMin = $PremiumMin;
		return $this;
	}
}



/**
 * 
 */
class GetForecastInfo 
{

	/**
	 * 
	 * @var ArrayOfBannerPhraseInfo
	 */
	public $Categories;

	/**
	 * 
	 * @var ArrayOfBannerPhraseInfo
	 */
	public $Phrases;

	/**
	 * 
	 * @var ForecastCommonInfo
	 */
	public $Common;

	/**
	 * 
	 * @param ArrayOfBannerPhraseInfo $Categories 
	 * @param ArrayOfBannerPhraseInfo $Phrases 
	 * @param ForecastCommonInfo $Common 
	 */
	public function __construct($Categories = null, $Phrases = null, $Common = null)
	{
		$this->setCategories($Categories);
		$this->setPhrases($Phrases);
		$this->setCommon($Common);
	}

	/**
	 * Возвращает namespace структуры
	 *
	 * @return string
	 */
	public function getNamespace() { return 'API'; }

	/**
	 * @return GetForecastInfo
	 */
	public static function create() { return new self(); }

	/**
	 * Setter for Categories
	 * @param ArrayOfBannerPhraseInfo $Categories 
	 * @return GetForecastInfo
	 */
	public function setCategories($Categories)
	{
		$this->Categories = $Categories;
		return $this;
	}

	/**
	 * Setter for Phrases
	 * @param ArrayOfBannerPhraseInfo $Phrases 
	 * @return GetForecastInfo
	 */
	public function setPhrases($Phrases)
	{
		$this->Phrases = $Phrases;
		return $this;
	}

	/**
	 * Setter for Common
	 * @param ForecastCommonInfo $Common 
	 * @return GetForecastInfo
	 */
	public function setCommon($Common)
	{
		$this->Common = $Common;
		return $this;
	}
}



/**
 * 
 */
class NewWordstatReportInfo 
{

	/**
	 * 
	 * @var ArrayOfString
	 */
	public $Phrases;

	/**
	 * 
	 * @var ArrayOfInteger
	 */
	public $GeoID;

	/**
	 * 
	 * @param ArrayOfString $Phrases 
	 * @param ArrayOfInteger $GeoID 
	 */
	public function __construct($Phrases = null, $GeoID = null)
	{
		$this->setPhrases($Phrases);
		$this->setGeoID($GeoID);
	}

	/**
	 * Возвращает namespace структуры
	 *
	 * @return string
	 */
	public function getNamespace() { return 'API'; }

	/**
	 * @return NewWordstatReportInfo
	 */
	public static function create() { return new self(); }

	/**
	 * Setter for Phrases
	 * @param ArrayOfString $Phrases 
	 * @return NewWordstatReportInfo
	 */
	public function setPhrases($Phrases)
	{
		$this->Phrases = $Phrases;
		return $this;
	}

	/**
	 * Setter for GeoID
	 * @param ArrayOfInteger $GeoID 
	 * @return NewWordstatReportInfo
	 */
	public function setGeoID($GeoID)
	{
		$this->GeoID = $GeoID;
		return $this;
	}
}



/**
 * 
 */
class WordstatReportStatusInfo 
{

	/**
	 * 
	 * @var integer
	 */
	public $ReportID;

	/**
	 * 
	 * @var string
	 */
	public $StatusReport;

	/**
	 * 
	 * @param integer $ReportID 
	 * @param string $StatusReport 
	 */
	public function __construct($ReportID = null, $StatusReport = null)
	{
		$this->setReportID($ReportID);
		$this->setStatusReport($StatusReport);
	}

	/**
	 * Возвращает namespace структуры
	 *
	 * @return string
	 */
	public function getNamespace() { return 'API'; }

	/**
	 * @return WordstatReportStatusInfo
	 */
	public static function create() { return new self(); }

	/**
	 * Setter for ReportID
	 * @param integer $ReportID 
	 * @return WordstatReportStatusInfo
	 */
	public function setReportID($ReportID)
	{
		$this->ReportID = $ReportID;
		return $this;
	}

	/**
	 * Setter for StatusReport
	 * @param string $StatusReport 
	 * @return WordstatReportStatusInfo
	 */
	public function setStatusReport($StatusReport)
	{
		$this->StatusReport = $StatusReport;
		return $this;
	}
}



/**
 * 
 */
class WordstatReportInfo 
{

	/**
	 * 
	 * @var string
	 */
	public $Phrase;

	/**
	 * 
	 * @var ArrayOfInteger
	 */
	public $GeoID;

	/**
	 * 
	 * @var ArrayOfWordstatItem
	 */
	public $SearchedWith;

	/**
	 * 
	 * @var ArrayOfWordstatItem
	 */
	public $SearchedAlso;

	/**
	 * 
	 * @param string $Phrase 
	 * @param ArrayOfInteger $GeoID 
	 * @param ArrayOfWordstatItem $SearchedWith 
	 * @param ArrayOfWordstatItem $SearchedAlso 
	 */
	public function __construct($Phrase = null, $GeoID = null, $SearchedWith = null, $SearchedAlso = null)
	{
		$this->setPhrase($Phrase);
		$this->setGeoID($GeoID);
		$this->setSearchedWith($SearchedWith);
		$this->setSearchedAlso($SearchedAlso);
	}

	/**
	 * Возвращает namespace структуры
	 *
	 * @return string
	 */
	public function getNamespace() { return 'API'; }

	/**
	 * @return WordstatReportInfo
	 */
	public static function create() { return new self(); }

	/**
	 * Setter for Phrase
	 * @param string $Phrase 
	 * @return WordstatReportInfo
	 */
	public function setPhrase($Phrase)
	{
		$this->Phrase = $Phrase;
		return $this;
	}

	/**
	 * Setter for GeoID
	 * @param ArrayOfInteger $GeoID 
	 * @return WordstatReportInfo
	 */
	public function setGeoID($GeoID)
	{
		$this->GeoID = $GeoID;
		return $this;
	}

	/**
	 * Setter for SearchedWith
	 * @param ArrayOfWordstatItem $SearchedWith 
	 * @return WordstatReportInfo
	 */
	public function setSearchedWith($SearchedWith)
	{
		$this->SearchedWith = $SearchedWith;
		return $this;
	}

	/**
	 * Setter for SearchedAlso
	 * @param ArrayOfWordstatItem $SearchedAlso 
	 * @return WordstatReportInfo
	 */
	public function setSearchedAlso($SearchedAlso)
	{
		$this->SearchedAlso = $SearchedAlso;
		return $this;
	}
}



/**
 * 
 */
class WordstatItem 
{

	/**
	 * 
	 * @var string
	 */
	public $Phrase;

	/**
	 * 
	 * @var integer
	 */
	public $Shows;

	/**
	 * 
	 * @param string $Phrase 
	 * @param integer $Shows 
	 */
	public function __construct($Phrase = null, $Shows = null)
	{
		$this->setPhrase($Phrase);
		$this->setShows($Shows);
	}

	/**
	 * Возвращает namespace структуры
	 *
	 * @return string
	 */
	public function getNamespace() { return 'API'; }

	/**
	 * @return WordstatItem
	 */
	public static function create() { return new self(); }

	/**
	 * Setter for Phrase
	 * @param string $Phrase 
	 * @return WordstatItem
	 */
	public function setPhrase($Phrase)
	{
		$this->Phrase = $Phrase;
		return $this;
	}

	/**
	 * Setter for Shows
	 * @param integer $Shows 
	 * @return WordstatItem
	 */
	public function setShows($Shows)
	{
		$this->Shows = $Shows;
		return $this;
	}
}



/**
 * 
 */
class StatGoalInfo 
{

	/**
	 * 
	 * @var integer
	 */
	public $GoalID;

	/**
	 * 
	 * @var string
	 */
	public $Name;

	/**
	 * 
	 * @param integer $GoalID 
	 * @param string $Name 
	 */
	public function __construct($GoalID = null, $Name = null)
	{
		$this->setGoalID($GoalID);
		$this->setName($Name);
	}

	/**
	 * Возвращает namespace структуры
	 *
	 * @return string
	 */
	public function getNamespace() { return 'API'; }

	/**
	 * @return StatGoalInfo
	 */
	public static function create() { return new self(); }

	/**
	 * Setter for GoalID
	 * @param integer $GoalID 
	 * @return StatGoalInfo
	 */
	public function setGoalID($GoalID)
	{
		$this->GoalID = $GoalID;
		return $this;
	}

	/**
	 * Setter for Name
	 * @param string $Name 
	 * @return StatGoalInfo
	 */
	public function setName($Name)
	{
		$this->Name = $Name;
		return $this;
	}
}



/**
 * 
 */
class AutoPriceInfo 
{

	/**
	 * 
	 * @var integer
	 */
	public $CampaignID;

	/**
	 * 
	 * @var string
	 */
	public $Mode;

	/**
	 * 
	 * @var double
	 */
	public $SinglePrice;

	/**
	 * 
	 * @var string
	 */
	public $PriceBase;

	/**
	 * 
	 * @var string
	 */
	public $ProcBase;

	/**
	 * 
	 * @var double
	 */
	public $MaxPrice;

	/**
	 * 
	 * @var integer
	 */
	public $Proc;

	/**
	 * 
	 * @var string
	 */
	public $UpdatePhrases;

	/**
	 * 
	 * @var string
	 */
	public $UpdateCategories;

	/**
	 * 
	 * @param integer $CampaignID 
	 * @param string $Mode 
	 * @param double $SinglePrice 
	 * @param string $PriceBase 
	 * @param string $ProcBase 
	 * @param double $MaxPrice 
	 * @param integer $Proc 
	 * @param string $UpdatePhrases 
	 * @param string $UpdateCategories 
	 */
	public function __construct($CampaignID = null, $Mode = null, $SinglePrice = null, $PriceBase = null, $ProcBase = null, $MaxPrice = null, $Proc = null, $UpdatePhrases = null, $UpdateCategories = null)
	{
		$this->setCampaignID($CampaignID);
		$this->setMode($Mode);
		$this->setSinglePrice($SinglePrice);
		$this->setPriceBase($PriceBase);
		$this->setProcBase($ProcBase);
		$this->setMaxPrice($MaxPrice);
		$this->setProc($Proc);
		$this->setUpdatePhrases($UpdatePhrases);
		$this->setUpdateCategories($UpdateCategories);
	}

	/**
	 * Возвращает namespace структуры
	 *
	 * @return string
	 */
	public function getNamespace() { return 'API'; }

	/**
	 * @return AutoPriceInfo
	 */
	public static function create() { return new self(); }

	/**
	 * Setter for CampaignID
	 * @param integer $CampaignID 
	 * @return AutoPriceInfo
	 */
	public function setCampaignID($CampaignID)
	{
		$this->CampaignID = $CampaignID;
		return $this;
	}

	/**
	 * Setter for Mode
	 * @param string $Mode 
	 * @return AutoPriceInfo
	 */
	public function setMode($Mode)
	{
		$this->Mode = $Mode;
		return $this;
	}

	/**
	 * Setter for SinglePrice
	 * @param double $SinglePrice 
	 * @return AutoPriceInfo
	 */
	public function setSinglePrice($SinglePrice)
	{
		$this->SinglePrice = $SinglePrice;
		return $this;
	}

	/**
	 * Setter for PriceBase
	 * @param string $PriceBase 
	 * @return AutoPriceInfo
	 */
	public function setPriceBase($PriceBase)
	{
		$this->PriceBase = $PriceBase;
		return $this;
	}

	/**
	 * Setter for ProcBase
	 * @param string $ProcBase 
	 * @return AutoPriceInfo
	 */
	public function setProcBase($ProcBase)
	{
		$this->ProcBase = $ProcBase;
		return $this;
	}

	/**
	 * Setter for MaxPrice
	 * @param double $MaxPrice 
	 * @return AutoPriceInfo
	 */
	public function setMaxPrice($MaxPrice)
	{
		$this->MaxPrice = $MaxPrice;
		return $this;
	}

	/**
	 * Setter for Proc
	 * @param integer $Proc 
	 * @return AutoPriceInfo
	 */
	public function setProc($Proc)
	{
		$this->Proc = $Proc;
		return $this;
	}

	/**
	 * Setter for UpdatePhrases
	 * @param string $UpdatePhrases 
	 * @return AutoPriceInfo
	 */
	public function setUpdatePhrases($UpdatePhrases)
	{
		$this->UpdatePhrases = $UpdatePhrases;
		return $this;
	}

	/**
	 * Setter for UpdateCategories
	 * @param string $UpdateCategories 
	 * @return AutoPriceInfo
	 */
	public function setUpdateCategories($UpdateCategories)
	{
		$this->UpdateCategories = $UpdateCategories;
		return $this;
	}
}



/**
 * 
 */
class ClientInfo 
{

	/**
	 * 
	 * @var string
	 */
	public $Phone;

	/**
	 * 
	 * @var string
	 */
	public $DateCreate;

	/**
	 * 
	 * @var string
	 */
	public $FIO;

	/**
	 * 
	 * @var string
	 */
	public $Email;

	/**
	 * 
	 * @var string
	 */
	public $Login;

	/**
	 * 
	 * @var string
	 */
	public $StatusArch;

	/**
	 * 
	 * @var double
	 */
	public $Discount;

	/**
	 * 
	 * @var string
	 */
	public $Role;

	/**
	 * 
	 * @var string
	 */
	public $NonResident;

	/**
	 * 
	 * @var string
	 */
	public $SendNews;

	/**
	 * 
	 * @var string
	 */
	public $SendAccNews;

	/**
	 * 
	 * @var string
	 */
	public $SendWarn;

	/**
	 * 
	 * @var ArrayOfString
	 */
	public $ManagersLogins;

	/**
	 * 
	 * @param string $Phone 
	 * @param string $DateCreate 
	 * @param string $FIO 
	 * @param string $Email 
	 * @param string $Login 
	 * @param string $StatusArch 
	 * @param double $Discount 
	 * @param string $Role 
	 * @param string $NonResident 
	 * @param string $SendNews 
	 * @param string $SendAccNews 
	 * @param string $SendWarn 
	 * @param ArrayOfString $ManagersLogins 
	 */
	public function __construct($Phone = null, $DateCreate = null, $FIO = null, $Email = null, $Login = null, $StatusArch = null, $Discount = null, $Role = null, $NonResident = null, $SendNews = null, $SendAccNews = null, $SendWarn = null, $ManagersLogins = null)
	{
		$this->setPhone($Phone);
		$this->setDateCreate($DateCreate);
		$this->setFIO($FIO);
		$this->setEmail($Email);
		$this->setLogin($Login);
		$this->setStatusArch($StatusArch);
		$this->setDiscount($Discount);
		$this->setRole($Role);
		$this->setNonResident($NonResident);
		$this->setSendNews($SendNews);
		$this->setSendAccNews($SendAccNews);
		$this->setSendWarn($SendWarn);
		$this->setManagersLogins($ManagersLogins);
	}

	/**
	 * Возвращает namespace структуры
	 *
	 * @return string
	 */
	public function getNamespace() { return 'API'; }

	/**
	 * @return ClientInfo
	 */
	public static function create() { return new self(); }

	/**
	 * Setter for Phone
	 * @param string $Phone 
	 * @return ClientInfo
	 */
	public function setPhone($Phone)
	{
		$this->Phone = $Phone;
		return $this;
	}

	/**
	 * Setter for DateCreate
	 * @param string $DateCreate 
	 * @return ClientInfo
	 */
	public function setDateCreate($DateCreate)
	{
		$this->DateCreate = $DateCreate;
		return $this;
	}

	/**
	 * Setter for FIO
	 * @param string $FIO 
	 * @return ClientInfo
	 */
	public function setFIO($FIO)
	{
		$this->FIO = $FIO;
		return $this;
	}

	/**
	 * Setter for Email
	 * @param string $Email 
	 * @return ClientInfo
	 */
	public function setEmail($Email)
	{
		$this->Email = $Email;
		return $this;
	}

	/**
	 * Setter for Login
	 * @param string $Login 
	 * @return ClientInfo
	 */
	public function setLogin($Login)
	{
		$this->Login = $Login;
		return $this;
	}

	/**
	 * Setter for StatusArch
	 * @param string $StatusArch 
	 * @return ClientInfo
	 */
	public function setStatusArch($StatusArch)
	{
		$this->StatusArch = $StatusArch;
		return $this;
	}

	/**
	 * Setter for Discount
	 * @param double $Discount 
	 * @return ClientInfo
	 */
	public function setDiscount($Discount)
	{
		$this->Discount = $Discount;
		return $this;
	}

	/**
	 * Setter for Role
	 * @param string $Role 
	 * @return ClientInfo
	 */
	public function setRole($Role)
	{
		$this->Role = $Role;
		return $this;
	}

	/**
	 * Setter for NonResident
	 * @param string $NonResident 
	 * @return ClientInfo
	 */
	public function setNonResident($NonResident)
	{
		$this->NonResident = $NonResident;
		return $this;
	}

	/**
	 * Setter for SendNews
	 * @param string $SendNews 
	 * @return ClientInfo
	 */
	public function setSendNews($SendNews)
	{
		$this->SendNews = $SendNews;
		return $this;
	}

	/**
	 * Setter for SendAccNews
	 * @param string $SendAccNews 
	 * @return ClientInfo
	 */
	public function setSendAccNews($SendAccNews)
	{
		$this->SendAccNews = $SendAccNews;
		return $this;
	}

	/**
	 * Setter for SendWarn
	 * @param string $SendWarn 
	 * @return ClientInfo
	 */
	public function setSendWarn($SendWarn)
	{
		$this->SendWarn = $SendWarn;
		return $this;
	}

	/**
	 * Setter for ManagersLogins
	 * @param ArrayOfString $ManagersLogins 
	 * @return ClientInfo
	 */
	public function setManagersLogins($ManagersLogins)
	{
		$this->ManagersLogins = $ManagersLogins;
		return $this;
	}
}



/**
 * 
 */
class ShortClientInfo 
{

	/**
	 * 
	 * @var string
	 */
	public $Login;

	/**
	 * 
	 * @var string
	 */
	public $FIO;

	/**
	 * 
	 * @var string
	 */
	public $Role;

	/**
	 * 
	 * @param string $Login 
	 * @param string $FIO 
	 * @param string $Role 
	 */
	public function __construct($Login = null, $FIO = null, $Role = null)
	{
		$this->setLogin($Login);
		$this->setFIO($FIO);
		$this->setRole($Role);
	}

	/**
	 * Возвращает namespace структуры
	 *
	 * @return string
	 */
	public function getNamespace() { return 'API'; }

	/**
	 * @return ShortClientInfo
	 */
	public static function create() { return new self(); }

	/**
	 * Setter for Login
	 * @param string $Login 
	 * @return ShortClientInfo
	 */
	public function setLogin($Login)
	{
		$this->Login = $Login;
		return $this;
	}

	/**
	 * Setter for FIO
	 * @param string $FIO 
	 * @return ShortClientInfo
	 */
	public function setFIO($FIO)
	{
		$this->FIO = $FIO;
		return $this;
	}

	/**
	 * Setter for Role
	 * @param string $Role 
	 * @return ShortClientInfo
	 */
	public function setRole($Role)
	{
		$this->Role = $Role;
		return $this;
	}
}



/**
 * 
 */
class VersionDesc 
{

	/**
	 * 
	 * @var integer
	 */
	public $VersionNumber;

	/**
	 * 
	 * @var string
	 */
	public $LinkWSDL;

	/**
	 * 
	 * @var string
	 */
	public $BorderDate;

	/**
	 * 
	 * @param integer $VersionNumber 
	 * @param string $LinkWSDL 
	 * @param string $BorderDate 
	 */
	public function __construct($VersionNumber = null, $LinkWSDL = null, $BorderDate = null)
	{
		$this->setVersionNumber($VersionNumber);
		$this->setLinkWSDL($LinkWSDL);
		$this->setBorderDate($BorderDate);
	}

	/**
	 * Возвращает namespace структуры
	 *
	 * @return string
	 */
	public function getNamespace() { return 'API'; }

	/**
	 * @return VersionDesc
	 */
	public static function create() { return new self(); }

	/**
	 * Setter for VersionNumber
	 * @param integer $VersionNumber 
	 * @return VersionDesc
	 */
	public function setVersionNumber($VersionNumber)
	{
		$this->VersionNumber = $VersionNumber;
		return $this;
	}

	/**
	 * Setter for LinkWSDL
	 * @param string $LinkWSDL 
	 * @return VersionDesc
	 */
	public function setLinkWSDL($LinkWSDL)
	{
		$this->LinkWSDL = $LinkWSDL;
		return $this;
	}

	/**
	 * Setter for BorderDate
	 * @param string $BorderDate 
	 * @return VersionDesc
	 */
	public function setBorderDate($BorderDate)
	{
		$this->BorderDate = $BorderDate;
		return $this;
	}
}



/**
 * 
 */
class KeywordsSuggestionInfo 
{

	/**
	 * 
	 * @var ArrayOfString
	 */
	public $Keywords;

	/**
	 * 
	 * @param ArrayOfString $Keywords 
	 */
	public function __construct($Keywords = null)
	{
		$this->setKeywords($Keywords);
	}

	/**
	 * Возвращает namespace структуры
	 *
	 * @return string
	 */
	public function getNamespace() { return 'API'; }

	/**
	 * @return KeywordsSuggestionInfo
	 */
	public static function create() { return new self(); }

	/**
	 * Setter for Keywords
	 * @param ArrayOfString $Keywords 
	 * @return KeywordsSuggestionInfo
	 */
	public function setKeywords($Keywords)
	{
		$this->Keywords = $Keywords;
		return $this;
	}
}



/**
 * 
 */
class CreateNewSubclientRequest 
{

	/**
	 * 
	 * @var string
	 */
	public $Login;

	/**
	 * 
	 * @var string
	 */
	public $AgencyLogin;

	/**
	 * 
	 * @var string
	 */
	public $Name;

	/**
	 * 
	 * @var string
	 */
	public $Surname;

	/**
	 * 
	 * @param string $Login 
	 * @param string $AgencyLogin 
	 * @param string $Name 
	 * @param string $Surname 
	 */
	public function __construct($Login = null, $AgencyLogin = null, $Name = null, $Surname = null)
	{
		$this->setLogin($Login);
		$this->setAgencyLogin($AgencyLogin);
		$this->setName($Name);
		$this->setSurname($Surname);
	}

	/**
	 * Возвращает namespace структуры
	 *
	 * @return string
	 */
	public function getNamespace() { return 'API'; }

	/**
	 * @return CreateNewSubclientRequest
	 */
	public static function create() { return new self(); }

	/**
	 * Setter for Login
	 * @param string $Login 
	 * @return CreateNewSubclientRequest
	 */
	public function setLogin($Login)
	{
		$this->Login = $Login;
		return $this;
	}

	/**
	 * Setter for AgencyLogin
	 * @param string $AgencyLogin 
	 * @return CreateNewSubclientRequest
	 */
	public function setAgencyLogin($AgencyLogin)
	{
		$this->AgencyLogin = $AgencyLogin;
		return $this;
	}

	/**
	 * Setter for Name
	 * @param string $Name 
	 * @return CreateNewSubclientRequest
	 */
	public function setName($Name)
	{
		$this->Name = $Name;
		return $this;
	}

	/**
	 * Setter for Surname
	 * @param string $Surname 
	 * @return CreateNewSubclientRequest
	 */
	public function setSurname($Surname)
	{
		$this->Surname = $Surname;
		return $this;
	}
}



/**
 * 
 */
class CreateNewSubclientResponse 
{

	/**
	 * 
	 * @var string
	 */
	public $Login;

	/**
	 * 
	 * @var string
	 */
	public $Password;

	/**
	 * 
	 * @var string
	 */
	public $FIO;

	/**
	 * 
	 * @var string
	 */
	public $Email;

	/**
	 * 
	 * @var integer
	 */
	public $ClientID;

	/**
	 * 
	 * @param string $Login 
	 * @param string $Password 
	 * @param string $FIO 
	 * @param string $Email 
	 * @param integer $ClientID 
	 */
	public function __construct($Login = null, $Password = null, $FIO = null, $Email = null, $ClientID = null)
	{
		$this->setLogin($Login);
		$this->setPassword($Password);
		$this->setFIO($FIO);
		$this->setEmail($Email);
		$this->setClientID($ClientID);
	}

	/**
	 * Возвращает namespace структуры
	 *
	 * @return string
	 */
	public function getNamespace() { return 'API'; }

	/**
	 * @return CreateNewSubclientResponse
	 */
	public static function create() { return new self(); }

	/**
	 * Setter for Login
	 * @param string $Login 
	 * @return CreateNewSubclientResponse
	 */
	public function setLogin($Login)
	{
		$this->Login = $Login;
		return $this;
	}

	/**
	 * Setter for Password
	 * @param string $Password 
	 * @return CreateNewSubclientResponse
	 */
	public function setPassword($Password)
	{
		$this->Password = $Password;
		return $this;
	}

	/**
	 * Setter for FIO
	 * @param string $FIO 
	 * @return CreateNewSubclientResponse
	 */
	public function setFIO($FIO)
	{
		$this->FIO = $FIO;
		return $this;
	}

	/**
	 * Setter for Email
	 * @param string $Email 
	 * @return CreateNewSubclientResponse
	 */
	public function setEmail($Email)
	{
		$this->Email = $Email;
		return $this;
	}

	/**
	 * Setter for ClientID
	 * @param integer $ClientID 
	 * @return CreateNewSubclientResponse
	 */
	public function setClientID($ClientID)
	{
		$this->ClientID = $ClientID;
		return $this;
	}
}


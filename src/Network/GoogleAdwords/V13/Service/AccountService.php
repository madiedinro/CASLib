<?php


namespace AdvancedContextLib\Network\GoogleAdwords\V13\Service;

use AdvancedContextLib\Network\GoogleAdwords\V13\Lib\SoapClient;


/**
 * 
 */
class AccountService extends SoapClient
{

	/**
	 * 
	 * @param Budget $budget 
	 * @return 
	 */
	public function addBudget($budget)
	{

		$parameters = new addBudget($budget);
		$result = $this->__soapCall("addBudget", array($parameters));
		return $result;
	}
	/**
	 * 
	 * @param string $loginEmail 
	 * @param string $password 
	 * @param string $languagePreference 
	 * @param EmailPromotionsPreferences $emailPrefs 
	 * @param string $currencyCode 
	 * @param Address $primaryAddress 
	 * @param string $descriptiveName 
	 * @param string $timeZoneId 
	 * @return 
	 */
	public function createClientAccount($loginEmail, $password, $languagePreference, $emailPrefs, $currencyCode, $primaryAddress, $descriptiveName, $timeZoneId)
	{

		$parameters = new createClientAccount($loginEmail, $password, $languagePreference, $emailPrefs, $currencyCode, $primaryAddress, $descriptiveName, $timeZoneId);
		$result = $this->__soapCall("createClientAccount", array($parameters));
		return $result->createClientAccountReturn;
	}
	/**
	 * 
	 * @return 
	 */
	public function getAccountInfo()
	{

		$parameters = new getAccountInfo();
		$result = $this->__soapCall("getAccountInfo", array($parameters));
		return $result->getAccountInfoReturn;
	}
	/**
	 * 
	 * @return 
	 */
	public function getBudgets()
	{

		$parameters = new getBudgets();
		$result = $this->__soapCall("getBudgets", array($parameters));
		return $result->getBudgetsReturn;
	}
	/**
	 * 
	 * @return 
	 */
	public function getClientAccountInfos()
	{

		$parameters = new getClientAccountInfos();
		$result = $this->__soapCall("getClientAccountInfos", array($parameters));
		return $result->getClientAccountInfosReturn;
	}
	/**
	 * 
	 * @return 
	 */
	public function getClientAccounts()
	{

		$parameters = new getClientAccounts();
		$result = $this->__soapCall("getClientAccounts", array($parameters));
		return $result->getClientAccountsReturn;
	}
	/**
	 * 
	 * @return 
	 */
	public function getMccAlerts()
	{

		$parameters = new getMccAlerts();
		$result = $this->__soapCall("getMccAlerts", array($parameters));
		return $result->getMccAlertsReturn;
	}
	/**
	 * 
	 * @return 
	 */
	public function getOrders()
	{

		$parameters = new getOrders();
		$result = $this->__soapCall("getOrders", array($parameters));
		return $result->getOrdersReturn;
	}
	/**
	 * 
	 * @param AccountInfo $accountInfo 
	 * @return 
	 */
	public function updateAccountInfo($accountInfo)
	{

		$parameters = new updateAccountInfo($accountInfo);
		$result = $this->__soapCall("updateAccountInfo", array($parameters));
		return $result;
	}
	/**
	 * 
	 * @param Budget $oldBudget 
	 * @param Budget $newBudget 
	 * @return 
	 */
	public function updateBudget($oldBudget, $newBudget)
	{

		$parameters = new updateBudget($oldBudget, $newBudget);
		$result = $this->__soapCall("updateBudget", array($parameters));
		return $result;
	}


	public static $classmap = array(
		'AccountInfo' => 'AdvancedContextLib\Network\GoogleAdwords\V13\Service\AccountInfo',
		'Address' => 'AdvancedContextLib\Network\GoogleAdwords\V13\Service\Address',
		'ApiError' => 'AdvancedContextLib\Network\GoogleAdwords\V13\Service\ApiError',
		'ApiException' => 'AdvancedContextLib\Network\GoogleAdwords\V13\Service\ApiException',
		'Budget' => 'AdvancedContextLib\Network\GoogleAdwords\V13\Service\Budget',
		'ClientAccountInfo' => 'AdvancedContextLib\Network\GoogleAdwords\V13\Service\ClientAccountInfo',
		'EmailPromotionsPreferences' => 'AdvancedContextLib\Network\GoogleAdwords\V13\Service\EmailPromotionsPreferences',
		'MccAlert' => 'AdvancedContextLib\Network\GoogleAdwords\V13\Service\MccAlert',
		'NetworkTarget' => 'AdvancedContextLib\Network\GoogleAdwords\V13\Service\NetworkTarget',
		'Order' => 'AdvancedContextLib\Network\GoogleAdwords\V13\Service\Order',
		'MccAlertPriority' => 'AdvancedContextLib\Network\GoogleAdwords\V13\Service\MccAlertPriority',
		'MccAlertType' => 'AdvancedContextLib\Network\GoogleAdwords\V13\Service\MccAlertType',
		'NetworkType' => 'AdvancedContextLib\Network\GoogleAdwords\V13\Service\NetworkType',
		'addBudget' => 'AdvancedContextLib\Network\GoogleAdwords\V13\Service\addBudget',
		'addBudgetResponse' => 'AdvancedContextLib\Network\GoogleAdwords\V13\Service\addBudgetResponse',
		'applicationToken' => 'AdvancedContextLib\Network\GoogleAdwords\V13\Service\applicationToken',
		'clientCustomerId' => 'AdvancedContextLib\Network\GoogleAdwords\V13\Service\clientCustomerId',
		'clientEmail' => 'AdvancedContextLib\Network\GoogleAdwords\V13\Service\clientEmail',
		'createClientAccount' => 'AdvancedContextLib\Network\GoogleAdwords\V13\Service\createClientAccount',
		'createClientAccountResponse' => 'AdvancedContextLib\Network\GoogleAdwords\V13\Service\createClientAccountResponse',
		'developerToken' => 'AdvancedContextLib\Network\GoogleAdwords\V13\Service\developerToken',
		'email' => 'AdvancedContextLib\Network\GoogleAdwords\V13\Service\email',
		'fault' => 'AdvancedContextLib\Network\GoogleAdwords\V13\Service\fault',
		'getAccountInfo' => 'AdvancedContextLib\Network\GoogleAdwords\V13\Service\getAccountInfo',
		'getAccountInfoResponse' => 'AdvancedContextLib\Network\GoogleAdwords\V13\Service\getAccountInfoResponse',
		'getBudgets' => 'AdvancedContextLib\Network\GoogleAdwords\V13\Service\getBudgets',
		'getBudgetsResponse' => 'AdvancedContextLib\Network\GoogleAdwords\V13\Service\getBudgetsResponse',
		'getClientAccountInfos' => 'AdvancedContextLib\Network\GoogleAdwords\V13\Service\getClientAccountInfos',
		'getClientAccountInfosResponse' => 'AdvancedContextLib\Network\GoogleAdwords\V13\Service\getClientAccountInfosResponse',
		'getClientAccounts' => 'AdvancedContextLib\Network\GoogleAdwords\V13\Service\getClientAccounts',
		'getClientAccountsResponse' => 'AdvancedContextLib\Network\GoogleAdwords\V13\Service\getClientAccountsResponse',
		'getMccAlerts' => 'AdvancedContextLib\Network\GoogleAdwords\V13\Service\getMccAlerts',
		'getMccAlertsResponse' => 'AdvancedContextLib\Network\GoogleAdwords\V13\Service\getMccAlertsResponse',
		'getOrders' => 'AdvancedContextLib\Network\GoogleAdwords\V13\Service\getOrders',
		'getOrdersResponse' => 'AdvancedContextLib\Network\GoogleAdwords\V13\Service\getOrdersResponse',
		'operations' => 'AdvancedContextLib\Network\GoogleAdwords\V13\Service\operations',
		'password' => 'AdvancedContextLib\Network\GoogleAdwords\V13\Service\password',
		'requestId' => 'AdvancedContextLib\Network\GoogleAdwords\V13\Service\requestId',
		'responseTime' => 'AdvancedContextLib\Network\GoogleAdwords\V13\Service\responseTime',
		'units' => 'AdvancedContextLib\Network\GoogleAdwords\V13\Service\units',
		'updateAccountInfo' => 'AdvancedContextLib\Network\GoogleAdwords\V13\Service\updateAccountInfo',
		'updateAccountInfoResponse' => 'AdvancedContextLib\Network\GoogleAdwords\V13\Service\updateAccountInfoResponse',
		'updateBudget' => 'AdvancedContextLib\Network\GoogleAdwords\V13\Service\updateBudget',
		'updateBudgetResponse' => 'AdvancedContextLib\Network\GoogleAdwords\V13\Service\updateBudgetResponse',
		'useragent' => 'AdvancedContextLib\Network\GoogleAdwords\V13\Service\useragent',
	);

	public function __construct($options) {
		$options['classmap'] = self::$classmap;
		parent::__construct($options);
	}

	public function getNamespace() { return 'https://adwords.google.com/api/adwords/v13/reseller'; }
	public function getWsdl() { return '/Users/dmitryrodin/projects/contextlib/data/wsdl/AccountService.wsdl'; }
}





/**
 * 
 */
class AccountInfo 
{

	/**
	 * 
	 * @var Address
	 */
	public $billingAddress;

	/**
	 * 
	 * @var string
	 */
	public $currencyCode;

	/**
	 * 
	 * @var double
	 */
	public $customerId;

	/**
	 * 
	 * @var NetworkTarget
	 */
	public $defaultNetworkTargeting;

	/**
	 * 
	 * @var string
	 */
	public $descriptiveName;

	/**
	 * 
	 * @var EmailPromotionsPreferences
	 */
	public $emailPromotionsPreferences;

	/**
	 * 
	 * @var string
	 */
	public $languagePreference;

	/**
	 * 
	 * @var Address
	 */
	public $primaryAddress;

	/**
	 * 
	 * @var string
	 */
	public $primaryBusinessCategory;

	/**
	 * 
	 * @var double
	 */
	public $timeZoneEffectiveDate;

	/**
	 * 
	 * @var string
	 */
	public $timeZoneId;

	/**
	 * 
	 * @param Address $billingAddress 
	 * @param string $currencyCode 
	 * @param double $customerId 
	 * @param NetworkTarget $defaultNetworkTargeting 
	 * @param string $descriptiveName 
	 * @param EmailPromotionsPreferences $emailPromotionsPreferences 
	 * @param string $languagePreference 
	 * @param Address $primaryAddress 
	 * @param string $primaryBusinessCategory 
	 * @param double $timeZoneEffectiveDate 
	 * @param string $timeZoneId 
	 */
	public function __construct($billingAddress = null, $currencyCode = null, $customerId = null, $defaultNetworkTargeting = null, $descriptiveName = null, $emailPromotionsPreferences = null, $languagePreference = null, $primaryAddress = null, $primaryBusinessCategory = null, $timeZoneEffectiveDate = null, $timeZoneId = null)
	{
		$this->setBillingAddress($billingAddress);
		$this->setCurrencyCode($currencyCode);
		$this->setCustomerId($customerId);
		$this->setDefaultNetworkTargeting($defaultNetworkTargeting);
		$this->setDescriptiveName($descriptiveName);
		$this->setEmailPromotionsPreferences($emailPromotionsPreferences);
		$this->setLanguagePreference($languagePreference);
		$this->setPrimaryAddress($primaryAddress);
		$this->setPrimaryBusinessCategory($primaryBusinessCategory);
		$this->setTimeZoneEffectiveDate($timeZoneEffectiveDate);
		$this->setTimeZoneId($timeZoneId);
	}

	/**
	 * Возвращает namespace структуры
	 *
	 * @return string
	 */
	public function getNamespace() { return 'https://adwords.google.com/api/adwords/v13/reseller'; }

	/**
	 * @return AccountInfo
	 */
	public static function create() { return new self(); }

	/**
	 * Setter for billingAddress
	 * @param Address $billingAddress 
	 * @return AccountInfo
	 */
	public function setBillingAddress($billingAddress)
	{
		$this->billingAddress = $billingAddress;
		return $this;
	}

	/**
	 * Setter for currencyCode
	 * @param string $currencyCode 
	 * @return AccountInfo
	 */
	public function setCurrencyCode($currencyCode)
	{
		$this->currencyCode = $currencyCode;
		return $this;
	}

	/**
	 * Setter for customerId
	 * @param double $customerId 
	 * @return AccountInfo
	 */
	public function setCustomerId($customerId)
	{
		$this->customerId = $customerId;
		return $this;
	}

	/**
	 * Setter for defaultNetworkTargeting
	 * @param NetworkTarget $defaultNetworkTargeting 
	 * @return AccountInfo
	 */
	public function setDefaultNetworkTargeting($defaultNetworkTargeting)
	{
		$this->defaultNetworkTargeting = $defaultNetworkTargeting;
		return $this;
	}

	/**
	 * Setter for descriptiveName
	 * @param string $descriptiveName 
	 * @return AccountInfo
	 */
	public function setDescriptiveName($descriptiveName)
	{
		$this->descriptiveName = $descriptiveName;
		return $this;
	}

	/**
	 * Setter for emailPromotionsPreferences
	 * @param EmailPromotionsPreferences $emailPromotionsPreferences 
	 * @return AccountInfo
	 */
	public function setEmailPromotionsPreferences($emailPromotionsPreferences)
	{
		$this->emailPromotionsPreferences = $emailPromotionsPreferences;
		return $this;
	}

	/**
	 * Setter for languagePreference
	 * @param string $languagePreference 
	 * @return AccountInfo
	 */
	public function setLanguagePreference($languagePreference)
	{
		$this->languagePreference = $languagePreference;
		return $this;
	}

	/**
	 * Setter for primaryAddress
	 * @param Address $primaryAddress 
	 * @return AccountInfo
	 */
	public function setPrimaryAddress($primaryAddress)
	{
		$this->primaryAddress = $primaryAddress;
		return $this;
	}

	/**
	 * Setter for primaryBusinessCategory
	 * @param string $primaryBusinessCategory 
	 * @return AccountInfo
	 */
	public function setPrimaryBusinessCategory($primaryBusinessCategory)
	{
		$this->primaryBusinessCategory = $primaryBusinessCategory;
		return $this;
	}

	/**
	 * Setter for timeZoneEffectiveDate
	 * @param double $timeZoneEffectiveDate 
	 * @return AccountInfo
	 */
	public function setTimeZoneEffectiveDate($timeZoneEffectiveDate)
	{
		$this->timeZoneEffectiveDate = $timeZoneEffectiveDate;
		return $this;
	}

	/**
	 * Setter for timeZoneId
	 * @param string $timeZoneId 
	 * @return AccountInfo
	 */
	public function setTimeZoneId($timeZoneId)
	{
		$this->timeZoneId = $timeZoneId;
		return $this;
	}
}



/**
 * 
 */
class Address 
{

	/**
	 * 
	 * @var string
	 */
	public $addressLine1;

	/**
	 * 
	 * @var string
	 */
	public $addressLine2;

	/**
	 * 
	 * @var string
	 */
	public $city;

	/**
	 * 
	 * @var string
	 */
	public $companyName;

	/**
	 * 
	 * @var string
	 */
	public $countryCode;

	/**
	 * 
	 * @var string
	 */
	public $emailAddress;

	/**
	 * 
	 * @var string
	 */
	public $faxNumber;

	/**
	 * 
	 * @var string
	 */
	public $name;

	/**
	 * 
	 * @var string
	 */
	public $phoneNumber;

	/**
	 * 
	 * @var string
	 */
	public $postalCode;

	/**
	 * 
	 * @var string
	 */
	public $state;

	/**
	 * 
	 * @param string $addressLine1 
	 * @param string $addressLine2 
	 * @param string $city 
	 * @param string $companyName 
	 * @param string $countryCode 
	 * @param string $emailAddress 
	 * @param string $faxNumber 
	 * @param string $name 
	 * @param string $phoneNumber 
	 * @param string $postalCode 
	 * @param string $state 
	 */
	public function __construct($addressLine1 = null, $addressLine2 = null, $city = null, $companyName = null, $countryCode = null, $emailAddress = null, $faxNumber = null, $name = null, $phoneNumber = null, $postalCode = null, $state = null)
	{
		$this->setAddressLine1($addressLine1);
		$this->setAddressLine2($addressLine2);
		$this->setCity($city);
		$this->setCompanyName($companyName);
		$this->setCountryCode($countryCode);
		$this->setEmailAddress($emailAddress);
		$this->setFaxNumber($faxNumber);
		$this->setName($name);
		$this->setPhoneNumber($phoneNumber);
		$this->setPostalCode($postalCode);
		$this->setState($state);
	}

	/**
	 * Возвращает namespace структуры
	 *
	 * @return string
	 */
	public function getNamespace() { return 'https://adwords.google.com/api/adwords/v13/reseller'; }

	/**
	 * @return Address
	 */
	public static function create() { return new self(); }

	/**
	 * Setter for addressLine1
	 * @param string $addressLine1 
	 * @return Address
	 */
	public function setAddressLine1($addressLine1)
	{
		$this->addressLine1 = $addressLine1;
		return $this;
	}

	/**
	 * Setter for addressLine2
	 * @param string $addressLine2 
	 * @return Address
	 */
	public function setAddressLine2($addressLine2)
	{
		$this->addressLine2 = $addressLine2;
		return $this;
	}

	/**
	 * Setter for city
	 * @param string $city 
	 * @return Address
	 */
	public function setCity($city)
	{
		$this->city = $city;
		return $this;
	}

	/**
	 * Setter for companyName
	 * @param string $companyName 
	 * @return Address
	 */
	public function setCompanyName($companyName)
	{
		$this->companyName = $companyName;
		return $this;
	}

	/**
	 * Setter for countryCode
	 * @param string $countryCode 
	 * @return Address
	 */
	public function setCountryCode($countryCode)
	{
		$this->countryCode = $countryCode;
		return $this;
	}

	/**
	 * Setter for emailAddress
	 * @param string $emailAddress 
	 * @return Address
	 */
	public function setEmailAddress($emailAddress)
	{
		$this->emailAddress = $emailAddress;
		return $this;
	}

	/**
	 * Setter for faxNumber
	 * @param string $faxNumber 
	 * @return Address
	 */
	public function setFaxNumber($faxNumber)
	{
		$this->faxNumber = $faxNumber;
		return $this;
	}

	/**
	 * Setter for name
	 * @param string $name 
	 * @return Address
	 */
	public function setName($name)
	{
		$this->name = $name;
		return $this;
	}

	/**
	 * Setter for phoneNumber
	 * @param string $phoneNumber 
	 * @return Address
	 */
	public function setPhoneNumber($phoneNumber)
	{
		$this->phoneNumber = $phoneNumber;
		return $this;
	}

	/**
	 * Setter for postalCode
	 * @param string $postalCode 
	 * @return Address
	 */
	public function setPostalCode($postalCode)
	{
		$this->postalCode = $postalCode;
		return $this;
	}

	/**
	 * Setter for state
	 * @param string $state 
	 * @return Address
	 */
	public function setState($state)
	{
		$this->state = $state;
		return $this;
	}
}



/**
 * 
 */
class ApiError 
{

	/**
	 * 
	 * @var integer
	 */
	public $code;

	/**
	 * 
	 * @var string
	 */
	public $detail;

	/**
	 * 
	 * @var string
	 */
	public $field;

	/**
	 * 
	 * @var integer
	 */
	public $index;

	/**
	 * 
	 * @var boolean
	 */
	public $isExemptable;

	/**
	 * 
	 * @var integer
	 */
	public $textIndex;

	/**
	 * 
	 * @var integer
	 */
	public $textLength;

	/**
	 * 
	 * @var string
	 */
	public $trigger;

	/**
	 * 
	 * @param integer $code 
	 * @param string $detail 
	 * @param string $field 
	 * @param integer $index 
	 * @param boolean $isExemptable 
	 * @param integer $textIndex 
	 * @param integer $textLength 
	 * @param string $trigger 
	 */
	public function __construct($code = null, $detail = null, $field = null, $index = null, $isExemptable = null, $textIndex = null, $textLength = null, $trigger = null)
	{
		$this->setCode($code);
		$this->setDetail($detail);
		$this->setField($field);
		$this->setIndex($index);
		$this->setIsExemptable($isExemptable);
		$this->setTextIndex($textIndex);
		$this->setTextLength($textLength);
		$this->setTrigger($trigger);
	}

	/**
	 * Возвращает namespace структуры
	 *
	 * @return string
	 */
	public function getNamespace() { return 'https://adwords.google.com/api/adwords/v13/reseller'; }

	/**
	 * @return ApiError
	 */
	public static function create() { return new self(); }

	/**
	 * Setter for code
	 * @param integer $code 
	 * @return ApiError
	 */
	public function setCode($code)
	{
		$this->code = $code;
		return $this;
	}

	/**
	 * Setter for detail
	 * @param string $detail 
	 * @return ApiError
	 */
	public function setDetail($detail)
	{
		$this->detail = $detail;
		return $this;
	}

	/**
	 * Setter for field
	 * @param string $field 
	 * @return ApiError
	 */
	public function setField($field)
	{
		$this->field = $field;
		return $this;
	}

	/**
	 * Setter for index
	 * @param integer $index 
	 * @return ApiError
	 */
	public function setIndex($index)
	{
		$this->index = $index;
		return $this;
	}

	/**
	 * Setter for isExemptable
	 * @param boolean $isExemptable 
	 * @return ApiError
	 */
	public function setIsExemptable($isExemptable)
	{
		$this->isExemptable = $isExemptable;
		return $this;
	}

	/**
	 * Setter for textIndex
	 * @param integer $textIndex 
	 * @return ApiError
	 */
	public function setTextIndex($textIndex)
	{
		$this->textIndex = $textIndex;
		return $this;
	}

	/**
	 * Setter for textLength
	 * @param integer $textLength 
	 * @return ApiError
	 */
	public function setTextLength($textLength)
	{
		$this->textLength = $textLength;
		return $this;
	}

	/**
	 * Setter for trigger
	 * @param string $trigger 
	 * @return ApiError
	 */
	public function setTrigger($trigger)
	{
		$this->trigger = $trigger;
		return $this;
	}
}



/**
 * 
 */
class ApiException 
{

	/**
	 * 
	 * @var integer
	 */
	public $code;

	/**
	 * 
	 * @var ApiError
	 */
	public $errors;

	/**
	 * 
	 * @var boolean
	 */
	public $internal;

	/**
	 * 
	 * @var string
	 */
	public $message;

	/**
	 * 
	 * @var string
	 */
	public $trigger;

	/**
	 * 
	 * @param integer $code 
	 * @param ApiError $errors 
	 * @param boolean $internal 
	 * @param string $message 
	 * @param string $trigger 
	 */
	public function __construct($code = null, $errors = null, $internal = null, $message = null, $trigger = null)
	{
		$this->setCode($code);
		$this->setErrors($errors);
		$this->setInternal($internal);
		$this->setMessage($message);
		$this->setTrigger($trigger);
	}

	/**
	 * Возвращает namespace структуры
	 *
	 * @return string
	 */
	public function getNamespace() { return 'https://adwords.google.com/api/adwords/v13/reseller'; }

	/**
	 * @return ApiException
	 */
	public static function create() { return new self(); }

	/**
	 * Setter for code
	 * @param integer $code 
	 * @return ApiException
	 */
	public function setCode($code)
	{
		$this->code = $code;
		return $this;
	}

	/**
	 * Setter for errors
	 * @param ApiError $errors 
	 * @return ApiException
	 */
	public function setErrors($errors)
	{
		$this->errors = $errors;
		return $this;
	}

	/**
	 * Setter for internal
	 * @param boolean $internal 
	 * @return ApiException
	 */
	public function setInternal($internal)
	{
		$this->internal = $internal;
		return $this;
	}

	/**
	 * Setter for message
	 * @param string $message 
	 * @return ApiException
	 */
	public function setMessage($message)
	{
		$this->message = $message;
		return $this;
	}

	/**
	 * Setter for trigger
	 * @param string $trigger 
	 * @return ApiException
	 */
	public function setTrigger($trigger)
	{
		$this->trigger = $trigger;
		return $this;
	}
}



/**
 * 
 */
class Budget 
{

	/**
	 * 
	 * @var double
	 */
	public $amount;

	/**
	 * 
	 * @var string
	 */
	public $endDate;

	/**
	 * 
	 * @var string
	 */
	public $orderId;

	/**
	 * 
	 * @var string
	 */
	public $startDate;

	/**
	 * 
	 * @param double $amount 
	 * @param string $endDate 
	 * @param string $orderId 
	 * @param string $startDate 
	 */
	public function __construct($amount = null, $endDate = null, $orderId = null, $startDate = null)
	{
		$this->setAmount($amount);
		$this->setEndDate($endDate);
		$this->setOrderId($orderId);
		$this->setStartDate($startDate);
	}

	/**
	 * Возвращает namespace структуры
	 *
	 * @return string
	 */
	public function getNamespace() { return 'https://adwords.google.com/api/adwords/v13/reseller'; }

	/**
	 * @return Budget
	 */
	public static function create() { return new self(); }

	/**
	 * Setter for amount
	 * @param double $amount 
	 * @return Budget
	 */
	public function setAmount($amount)
	{
		$this->amount = $amount;
		return $this;
	}

	/**
	 * Setter for endDate
	 * @param string $endDate 
	 * @return Budget
	 */
	public function setEndDate($endDate)
	{
		$this->endDate = $endDate;
		return $this;
	}

	/**
	 * Setter for orderId
	 * @param string $orderId 
	 * @return Budget
	 */
	public function setOrderId($orderId)
	{
		$this->orderId = $orderId;
		return $this;
	}

	/**
	 * Setter for startDate
	 * @param string $startDate 
	 * @return Budget
	 */
	public function setStartDate($startDate)
	{
		$this->startDate = $startDate;
		return $this;
	}
}



/**
 * 
 */
class ClientAccountInfo 
{

	/**
	 * 
	 * @var string
	 */
	public $emailAddress;

	/**
	 * 
	 * @var boolean
	 */
	public $isCustomerManager;

	/**
	 * 
	 * @param string $emailAddress 
	 * @param boolean $isCustomerManager 
	 */
	public function __construct($emailAddress = null, $isCustomerManager = null)
	{
		$this->setEmailAddress($emailAddress);
		$this->setIsCustomerManager($isCustomerManager);
	}

	/**
	 * Возвращает namespace структуры
	 *
	 * @return string
	 */
	public function getNamespace() { return 'https://adwords.google.com/api/adwords/v13/reseller'; }

	/**
	 * @return ClientAccountInfo
	 */
	public static function create() { return new self(); }

	/**
	 * Setter for emailAddress
	 * @param string $emailAddress 
	 * @return ClientAccountInfo
	 */
	public function setEmailAddress($emailAddress)
	{
		$this->emailAddress = $emailAddress;
		return $this;
	}

	/**
	 * Setter for isCustomerManager
	 * @param boolean $isCustomerManager 
	 * @return ClientAccountInfo
	 */
	public function setIsCustomerManager($isCustomerManager)
	{
		$this->isCustomerManager = $isCustomerManager;
		return $this;
	}
}



/**
 * 
 */
class EmailPromotionsPreferences 
{

	/**
	 * 
	 * @var boolean
	 */
	public $accountPerformanceEnabled;

	/**
	 * 
	 * @var boolean
	 */
	public $disapprovedAdsEnabled;

	/**
	 * 
	 * @var boolean
	 */
	public $marketResearchEnabled;

	/**
	 * 
	 * @var boolean
	 */
	public $newsletterEnabled;

	/**
	 * 
	 * @var boolean
	 */
	public $promotionsEnabled;

	/**
	 * 
	 * @param boolean $accountPerformanceEnabled 
	 * @param boolean $disapprovedAdsEnabled 
	 * @param boolean $marketResearchEnabled 
	 * @param boolean $newsletterEnabled 
	 * @param boolean $promotionsEnabled 
	 */
	public function __construct($accountPerformanceEnabled = null, $disapprovedAdsEnabled = null, $marketResearchEnabled = null, $newsletterEnabled = null, $promotionsEnabled = null)
	{
		$this->setAccountPerformanceEnabled($accountPerformanceEnabled);
		$this->setDisapprovedAdsEnabled($disapprovedAdsEnabled);
		$this->setMarketResearchEnabled($marketResearchEnabled);
		$this->setNewsletterEnabled($newsletterEnabled);
		$this->setPromotionsEnabled($promotionsEnabled);
	}

	/**
	 * Возвращает namespace структуры
	 *
	 * @return string
	 */
	public function getNamespace() { return 'https://adwords.google.com/api/adwords/v13/reseller'; }

	/**
	 * @return EmailPromotionsPreferences
	 */
	public static function create() { return new self(); }

	/**
	 * Setter for accountPerformanceEnabled
	 * @param boolean $accountPerformanceEnabled 
	 * @return EmailPromotionsPreferences
	 */
	public function setAccountPerformanceEnabled($accountPerformanceEnabled)
	{
		$this->accountPerformanceEnabled = $accountPerformanceEnabled;
		return $this;
	}

	/**
	 * Setter for disapprovedAdsEnabled
	 * @param boolean $disapprovedAdsEnabled 
	 * @return EmailPromotionsPreferences
	 */
	public function setDisapprovedAdsEnabled($disapprovedAdsEnabled)
	{
		$this->disapprovedAdsEnabled = $disapprovedAdsEnabled;
		return $this;
	}

	/**
	 * Setter for marketResearchEnabled
	 * @param boolean $marketResearchEnabled 
	 * @return EmailPromotionsPreferences
	 */
	public function setMarketResearchEnabled($marketResearchEnabled)
	{
		$this->marketResearchEnabled = $marketResearchEnabled;
		return $this;
	}

	/**
	 * Setter for newsletterEnabled
	 * @param boolean $newsletterEnabled 
	 * @return EmailPromotionsPreferences
	 */
	public function setNewsletterEnabled($newsletterEnabled)
	{
		$this->newsletterEnabled = $newsletterEnabled;
		return $this;
	}

	/**
	 * Setter for promotionsEnabled
	 * @param boolean $promotionsEnabled 
	 * @return EmailPromotionsPreferences
	 */
	public function setPromotionsEnabled($promotionsEnabled)
	{
		$this->promotionsEnabled = $promotionsEnabled;
		return $this;
	}
}



/**
 * 
 */
class MccAlert 
{

	/**
	 * 
	 * @var string
	 */
	public $clientCompanyName;

	/**
	 * 
	 * @var double
	 */
	public $clientCustomerId;

	/**
	 * 
	 * @var string
	 */
	public $clientLogin;

	/**
	 * 
	 * @var string
	 */
	public $clientName;

	/**
	 * 
	 * @var MccAlertPriority
	 */
	public $priority;

	/**
	 * 
	 * @var string
	 */
	public $triggerTime;

	/**
	 * 
	 * @var MccAlertType
	 */
	public $type;

	/**
	 * 
	 * @param string $clientCompanyName 
	 * @param double $clientCustomerId 
	 * @param string $clientLogin 
	 * @param string $clientName 
	 * @param MccAlertPriority $priority 
	 * @param string $triggerTime 
	 * @param MccAlertType $type 
	 */
	public function __construct($clientCompanyName = null, $clientCustomerId = null, $clientLogin = null, $clientName = null, $priority = null, $triggerTime = null, $type = null)
	{
		$this->setClientCompanyName($clientCompanyName);
		$this->setClientCustomerId($clientCustomerId);
		$this->setClientLogin($clientLogin);
		$this->setClientName($clientName);
		$this->setPriority($priority);
		$this->setTriggerTime($triggerTime);
		$this->setType($type);
	}

	/**
	 * Возвращает namespace структуры
	 *
	 * @return string
	 */
	public function getNamespace() { return 'https://adwords.google.com/api/adwords/v13/reseller'; }

	/**
	 * @return MccAlert
	 */
	public static function create() { return new self(); }

	/**
	 * Setter for clientCompanyName
	 * @param string $clientCompanyName 
	 * @return MccAlert
	 */
	public function setClientCompanyName($clientCompanyName)
	{
		$this->clientCompanyName = $clientCompanyName;
		return $this;
	}

	/**
	 * Setter for clientCustomerId
	 * @param double $clientCustomerId 
	 * @return MccAlert
	 */
	public function setClientCustomerId($clientCustomerId)
	{
		$this->clientCustomerId = $clientCustomerId;
		return $this;
	}

	/**
	 * Setter for clientLogin
	 * @param string $clientLogin 
	 * @return MccAlert
	 */
	public function setClientLogin($clientLogin)
	{
		$this->clientLogin = $clientLogin;
		return $this;
	}

	/**
	 * Setter for clientName
	 * @param string $clientName 
	 * @return MccAlert
	 */
	public function setClientName($clientName)
	{
		$this->clientName = $clientName;
		return $this;
	}

	/**
	 * Setter for priority
	 * @param MccAlertPriority $priority 
	 * @return MccAlert
	 */
	public function setPriority($priority)
	{
		$this->priority = $priority;
		return $this;
	}

	/**
	 * Setter for triggerTime
	 * @param string $triggerTime 
	 * @return MccAlert
	 */
	public function setTriggerTime($triggerTime)
	{
		$this->triggerTime = $triggerTime;
		return $this;
	}

	/**
	 * Setter for type
	 * @param MccAlertType $type 
	 * @return MccAlert
	 */
	public function setType($type)
	{
		$this->type = $type;
		return $this;
	}
}



/**
 * 
 */
class NetworkTarget 
{

	/**
	 * 
	 * @var NetworkType
	 */
	public $networkTypes;

	/**
	 * 
	 * @param NetworkType $networkTypes 
	 */
	public function __construct($networkTypes = null)
	{
		$this->setNetworkTypes($networkTypes);
	}

	/**
	 * Возвращает namespace структуры
	 *
	 * @return string
	 */
	public function getNamespace() { return 'https://adwords.google.com/api/adwords/v13/reseller'; }

	/**
	 * @return NetworkTarget
	 */
	public static function create() { return new self(); }

	/**
	 * Setter for networkTypes
	 * @param NetworkType $networkTypes 
	 * @return NetworkTarget
	 */
	public function setNetworkTypes($networkTypes)
	{
		$this->networkTypes = $networkTypes;
		return $this;
	}
}



/**
 * 
 */
class Order 
{

	/**
	 * 
	 * @var string
	 */
	public $currency;

	/**
	 * 
	 * @var string
	 */
	public $orderId;

	/**
	 * 
	 * @var string
	 */
	public $orderName;

	/**
	 * 
	 * @param string $currency 
	 * @param string $orderId 
	 * @param string $orderName 
	 */
	public function __construct($currency = null, $orderId = null, $orderName = null)
	{
		$this->setCurrency($currency);
		$this->setOrderId($orderId);
		$this->setOrderName($orderName);
	}

	/**
	 * Возвращает namespace структуры
	 *
	 * @return string
	 */
	public function getNamespace() { return 'https://adwords.google.com/api/adwords/v13/reseller'; }

	/**
	 * @return Order
	 */
	public static function create() { return new self(); }

	/**
	 * Setter for currency
	 * @param string $currency 
	 * @return Order
	 */
	public function setCurrency($currency)
	{
		$this->currency = $currency;
		return $this;
	}

	/**
	 * Setter for orderId
	 * @param string $orderId 
	 * @return Order
	 */
	public function setOrderId($orderId)
	{
		$this->orderId = $orderId;
		return $this;
	}

	/**
	 * Setter for orderName
	 * @param string $orderName 
	 * @return Order
	 */
	public function setOrderName($orderName)
	{
		$this->orderName = $orderName;
		return $this;
	}
}



/**
 * 
 */
class MccAlertPriority 
{


	/**
	 * Возвращает namespace структуры
	 *
	 * @return string
	 */
	public function getNamespace() { return 'https://adwords.google.com/api/adwords/v13/reseller'; }

	/**
	 * @return MccAlertPriority
	 */
	public static function create() { return new self(); }
}



/**
 * 
 */
class MccAlertType 
{


	/**
	 * Возвращает namespace структуры
	 *
	 * @return string
	 */
	public function getNamespace() { return 'https://adwords.google.com/api/adwords/v13/reseller'; }

	/**
	 * @return MccAlertType
	 */
	public static function create() { return new self(); }
}



/**
 * 
 */
class NetworkType 
{


	/**
	 * Возвращает namespace структуры
	 *
	 * @return string
	 */
	public function getNamespace() { return 'https://adwords.google.com/api/adwords/v13/reseller'; }

	/**
	 * @return NetworkType
	 */
	public static function create() { return new self(); }
}



/**
 * 
 */
class addBudget 
{

	/**
	 * 
	 * @var Budget
	 */
	public $budget;

	/**
	 * 
	 * @param Budget $budget 
	 */
	public function __construct($budget = null)
	{
		$this->setBudget($budget);
	}

	/**
	 * Возвращает namespace структуры
	 *
	 * @return string
	 */
	public function getNamespace() { return 'https://adwords.google.com/api/adwords/v13/reseller'; }

	/**
	 * @return addBudget
	 */
	public static function create() { return new self(); }

	/**
	 * Setter for budget
	 * @param Budget $budget 
	 * @return addBudget
	 */
	public function setBudget($budget)
	{
		$this->budget = $budget;
		return $this;
	}
}



/**
 * 
 */
class addBudgetResponse 
{


	/**
	 * Возвращает namespace структуры
	 *
	 * @return string
	 */
	public function getNamespace() { return 'https://adwords.google.com/api/adwords/v13/reseller'; }

	/**
	 * @return addBudgetResponse
	 */
	public static function create() { return new self(); }
}



/**
 * 
 */
class applicationToken 
{


	/**
	 * Возвращает namespace структуры
	 *
	 * @return string
	 */
	public function getNamespace() { return 'https://adwords.google.com/api/adwords/v13/reseller'; }

	/**
	 * @return applicationToken
	 */
	public static function create() { return new self(); }
}



/**
 * 
 */
class clientCustomerId 
{


	/**
	 * Возвращает namespace структуры
	 *
	 * @return string
	 */
	public function getNamespace() { return 'https://adwords.google.com/api/adwords/v13/reseller'; }

	/**
	 * @return clientCustomerId
	 */
	public static function create() { return new self(); }
}



/**
 * 
 */
class clientEmail 
{


	/**
	 * Возвращает namespace структуры
	 *
	 * @return string
	 */
	public function getNamespace() { return 'https://adwords.google.com/api/adwords/v13/reseller'; }

	/**
	 * @return clientEmail
	 */
	public static function create() { return new self(); }
}



/**
 * 
 */
class createClientAccount 
{

	/**
	 * 
	 * @var string
	 */
	public $loginEmail;

	/**
	 * 
	 * @var string
	 */
	public $password;

	/**
	 * 
	 * @var string
	 */
	public $languagePreference;

	/**
	 * 
	 * @var EmailPromotionsPreferences
	 */
	public $emailPrefs;

	/**
	 * 
	 * @var string
	 */
	public $currencyCode;

	/**
	 * 
	 * @var Address
	 */
	public $primaryAddress;

	/**
	 * 
	 * @var string
	 */
	public $descriptiveName;

	/**
	 * 
	 * @var string
	 */
	public $timeZoneId;

	/**
	 * 
	 * @param string $loginEmail 
	 * @param string $password 
	 * @param string $languagePreference 
	 * @param EmailPromotionsPreferences $emailPrefs 
	 * @param string $currencyCode 
	 * @param Address $primaryAddress 
	 * @param string $descriptiveName 
	 * @param string $timeZoneId 
	 */
	public function __construct($loginEmail = null, $password = null, $languagePreference = null, $emailPrefs = null, $currencyCode = null, $primaryAddress = null, $descriptiveName = null, $timeZoneId = null)
	{
		$this->setLoginEmail($loginEmail);
		$this->setPassword($password);
		$this->setLanguagePreference($languagePreference);
		$this->setEmailPrefs($emailPrefs);
		$this->setCurrencyCode($currencyCode);
		$this->setPrimaryAddress($primaryAddress);
		$this->setDescriptiveName($descriptiveName);
		$this->setTimeZoneId($timeZoneId);
	}

	/**
	 * Возвращает namespace структуры
	 *
	 * @return string
	 */
	public function getNamespace() { return 'https://adwords.google.com/api/adwords/v13/reseller'; }

	/**
	 * @return createClientAccount
	 */
	public static function create() { return new self(); }

	/**
	 * Setter for loginEmail
	 * @param string $loginEmail 
	 * @return createClientAccount
	 */
	public function setLoginEmail($loginEmail)
	{
		$this->loginEmail = $loginEmail;
		return $this;
	}

	/**
	 * Setter for password
	 * @param string $password 
	 * @return createClientAccount
	 */
	public function setPassword($password)
	{
		$this->password = $password;
		return $this;
	}

	/**
	 * Setter for languagePreference
	 * @param string $languagePreference 
	 * @return createClientAccount
	 */
	public function setLanguagePreference($languagePreference)
	{
		$this->languagePreference = $languagePreference;
		return $this;
	}

	/**
	 * Setter for emailPrefs
	 * @param EmailPromotionsPreferences $emailPrefs 
	 * @return createClientAccount
	 */
	public function setEmailPrefs($emailPrefs)
	{
		$this->emailPrefs = $emailPrefs;
		return $this;
	}

	/**
	 * Setter for currencyCode
	 * @param string $currencyCode 
	 * @return createClientAccount
	 */
	public function setCurrencyCode($currencyCode)
	{
		$this->currencyCode = $currencyCode;
		return $this;
	}

	/**
	 * Setter for primaryAddress
	 * @param Address $primaryAddress 
	 * @return createClientAccount
	 */
	public function setPrimaryAddress($primaryAddress)
	{
		$this->primaryAddress = $primaryAddress;
		return $this;
	}

	/**
	 * Setter for descriptiveName
	 * @param string $descriptiveName 
	 * @return createClientAccount
	 */
	public function setDescriptiveName($descriptiveName)
	{
		$this->descriptiveName = $descriptiveName;
		return $this;
	}

	/**
	 * Setter for timeZoneId
	 * @param string $timeZoneId 
	 * @return createClientAccount
	 */
	public function setTimeZoneId($timeZoneId)
	{
		$this->timeZoneId = $timeZoneId;
		return $this;
	}
}



/**
 * 
 */
class createClientAccountResponse 
{

	/**
	 * 
	 * @var AccountInfo
	 */
	public $createClientAccountReturn;

	/**
	 * 
	 * @param AccountInfo $createClientAccountReturn 
	 */
	public function __construct($createClientAccountReturn = null)
	{
		$this->setCreateClientAccountReturn($createClientAccountReturn);
	}

	/**
	 * Возвращает namespace структуры
	 *
	 * @return string
	 */
	public function getNamespace() { return 'https://adwords.google.com/api/adwords/v13/reseller'; }

	/**
	 * @return createClientAccountResponse
	 */
	public static function create() { return new self(); }

	/**
	 * Setter for createClientAccountReturn
	 * @param AccountInfo $createClientAccountReturn 
	 * @return createClientAccountResponse
	 */
	public function setCreateClientAccountReturn($createClientAccountReturn)
	{
		$this->createClientAccountReturn = $createClientAccountReturn;
		return $this;
	}
}



/**
 * 
 */
class developerToken 
{


	/**
	 * Возвращает namespace структуры
	 *
	 * @return string
	 */
	public function getNamespace() { return 'https://adwords.google.com/api/adwords/v13/reseller'; }

	/**
	 * @return developerToken
	 */
	public static function create() { return new self(); }
}



/**
 * 
 */
class email 
{


	/**
	 * Возвращает namespace структуры
	 *
	 * @return string
	 */
	public function getNamespace() { return 'https://adwords.google.com/api/adwords/v13/reseller'; }

	/**
	 * @return email
	 */
	public static function create() { return new self(); }
}



/**
 * 
 */
class fault 
{


	/**
	 * Возвращает namespace структуры
	 *
	 * @return string
	 */
	public function getNamespace() { return 'https://adwords.google.com/api/adwords/v13/reseller'; }

	/**
	 * @return fault
	 */
	public static function create() { return new self(); }
}



/**
 * 
 */
class getAccountInfo 
{


	/**
	 * Возвращает namespace структуры
	 *
	 * @return string
	 */
	public function getNamespace() { return 'https://adwords.google.com/api/adwords/v13/reseller'; }

	/**
	 * @return getAccountInfo
	 */
	public static function create() { return new self(); }
}



/**
 * 
 */
class getAccountInfoResponse 
{

	/**
	 * 
	 * @var AccountInfo
	 */
	public $getAccountInfoReturn;

	/**
	 * 
	 * @param AccountInfo $getAccountInfoReturn 
	 */
	public function __construct($getAccountInfoReturn = null)
	{
		$this->setGetAccountInfoReturn($getAccountInfoReturn);
	}

	/**
	 * Возвращает namespace структуры
	 *
	 * @return string
	 */
	public function getNamespace() { return 'https://adwords.google.com/api/adwords/v13/reseller'; }

	/**
	 * @return getAccountInfoResponse
	 */
	public static function create() { return new self(); }

	/**
	 * Setter for getAccountInfoReturn
	 * @param AccountInfo $getAccountInfoReturn 
	 * @return getAccountInfoResponse
	 */
	public function setGetAccountInfoReturn($getAccountInfoReturn)
	{
		$this->getAccountInfoReturn = $getAccountInfoReturn;
		return $this;
	}
}



/**
 * 
 */
class getBudgets 
{


	/**
	 * Возвращает namespace структуры
	 *
	 * @return string
	 */
	public function getNamespace() { return 'https://adwords.google.com/api/adwords/v13/reseller'; }

	/**
	 * @return getBudgets
	 */
	public static function create() { return new self(); }
}



/**
 * 
 */
class getBudgetsResponse 
{

	/**
	 * 
	 * @var Budget
	 */
	public $getBudgetsReturn;

	/**
	 * 
	 * @param Budget $getBudgetsReturn 
	 */
	public function __construct($getBudgetsReturn = null)
	{
		$this->setGetBudgetsReturn($getBudgetsReturn);
	}

	/**
	 * Возвращает namespace структуры
	 *
	 * @return string
	 */
	public function getNamespace() { return 'https://adwords.google.com/api/adwords/v13/reseller'; }

	/**
	 * @return getBudgetsResponse
	 */
	public static function create() { return new self(); }

	/**
	 * Setter for getBudgetsReturn
	 * @param Budget $getBudgetsReturn 
	 * @return getBudgetsResponse
	 */
	public function setGetBudgetsReturn($getBudgetsReturn)
	{
		$this->getBudgetsReturn = $getBudgetsReturn;
		return $this;
	}
}



/**
 * 
 */
class getClientAccountInfos 
{


	/**
	 * Возвращает namespace структуры
	 *
	 * @return string
	 */
	public function getNamespace() { return 'https://adwords.google.com/api/adwords/v13/reseller'; }

	/**
	 * @return getClientAccountInfos
	 */
	public static function create() { return new self(); }
}



/**
 * 
 */
class getClientAccountInfosResponse 
{

	/**
	 * 
	 * @var ClientAccountInfo
	 */
	public $getClientAccountInfosReturn;

	/**
	 * 
	 * @param ClientAccountInfo $getClientAccountInfosReturn 
	 */
	public function __construct($getClientAccountInfosReturn = null)
	{
		$this->setGetClientAccountInfosReturn($getClientAccountInfosReturn);
	}

	/**
	 * Возвращает namespace структуры
	 *
	 * @return string
	 */
	public function getNamespace() { return 'https://adwords.google.com/api/adwords/v13/reseller'; }

	/**
	 * @return getClientAccountInfosResponse
	 */
	public static function create() { return new self(); }

	/**
	 * Setter for getClientAccountInfosReturn
	 * @param ClientAccountInfo $getClientAccountInfosReturn 
	 * @return getClientAccountInfosResponse
	 */
	public function setGetClientAccountInfosReturn($getClientAccountInfosReturn)
	{
		$this->getClientAccountInfosReturn = $getClientAccountInfosReturn;
		return $this;
	}
}



/**
 * 
 */
class getClientAccounts 
{


	/**
	 * Возвращает namespace структуры
	 *
	 * @return string
	 */
	public function getNamespace() { return 'https://adwords.google.com/api/adwords/v13/reseller'; }

	/**
	 * @return getClientAccounts
	 */
	public static function create() { return new self(); }
}



/**
 * 
 */
class getClientAccountsResponse 
{

	/**
	 * 
	 * @var string
	 */
	public $getClientAccountsReturn;

	/**
	 * 
	 * @param string $getClientAccountsReturn 
	 */
	public function __construct($getClientAccountsReturn = null)
	{
		$this->setGetClientAccountsReturn($getClientAccountsReturn);
	}

	/**
	 * Возвращает namespace структуры
	 *
	 * @return string
	 */
	public function getNamespace() { return 'https://adwords.google.com/api/adwords/v13/reseller'; }

	/**
	 * @return getClientAccountsResponse
	 */
	public static function create() { return new self(); }

	/**
	 * Setter for getClientAccountsReturn
	 * @param string $getClientAccountsReturn 
	 * @return getClientAccountsResponse
	 */
	public function setGetClientAccountsReturn($getClientAccountsReturn)
	{
		$this->getClientAccountsReturn = $getClientAccountsReturn;
		return $this;
	}
}



/**
 * 
 */
class getMccAlerts 
{


	/**
	 * Возвращает namespace структуры
	 *
	 * @return string
	 */
	public function getNamespace() { return 'https://adwords.google.com/api/adwords/v13/reseller'; }

	/**
	 * @return getMccAlerts
	 */
	public static function create() { return new self(); }
}



/**
 * 
 */
class getMccAlertsResponse 
{

	/**
	 * 
	 * @var MccAlert
	 */
	public $getMccAlertsReturn;

	/**
	 * 
	 * @param MccAlert $getMccAlertsReturn 
	 */
	public function __construct($getMccAlertsReturn = null)
	{
		$this->setGetMccAlertsReturn($getMccAlertsReturn);
	}

	/**
	 * Возвращает namespace структуры
	 *
	 * @return string
	 */
	public function getNamespace() { return 'https://adwords.google.com/api/adwords/v13/reseller'; }

	/**
	 * @return getMccAlertsResponse
	 */
	public static function create() { return new self(); }

	/**
	 * Setter for getMccAlertsReturn
	 * @param MccAlert $getMccAlertsReturn 
	 * @return getMccAlertsResponse
	 */
	public function setGetMccAlertsReturn($getMccAlertsReturn)
	{
		$this->getMccAlertsReturn = $getMccAlertsReturn;
		return $this;
	}
}



/**
 * 
 */
class getOrders 
{


	/**
	 * Возвращает namespace структуры
	 *
	 * @return string
	 */
	public function getNamespace() { return 'https://adwords.google.com/api/adwords/v13/reseller'; }

	/**
	 * @return getOrders
	 */
	public static function create() { return new self(); }
}



/**
 * 
 */
class getOrdersResponse 
{

	/**
	 * 
	 * @var Order
	 */
	public $getOrdersReturn;

	/**
	 * 
	 * @param Order $getOrdersReturn 
	 */
	public function __construct($getOrdersReturn = null)
	{
		$this->setGetOrdersReturn($getOrdersReturn);
	}

	/**
	 * Возвращает namespace структуры
	 *
	 * @return string
	 */
	public function getNamespace() { return 'https://adwords.google.com/api/adwords/v13/reseller'; }

	/**
	 * @return getOrdersResponse
	 */
	public static function create() { return new self(); }

	/**
	 * Setter for getOrdersReturn
	 * @param Order $getOrdersReturn 
	 * @return getOrdersResponse
	 */
	public function setGetOrdersReturn($getOrdersReturn)
	{
		$this->getOrdersReturn = $getOrdersReturn;
		return $this;
	}
}



/**
 * 
 */
class operations 
{


	/**
	 * Возвращает namespace структуры
	 *
	 * @return string
	 */
	public function getNamespace() { return 'https://adwords.google.com/api/adwords/v13/reseller'; }

	/**
	 * @return operations
	 */
	public static function create() { return new self(); }
}



/**
 * 
 */
class password 
{


	/**
	 * Возвращает namespace структуры
	 *
	 * @return string
	 */
	public function getNamespace() { return 'https://adwords.google.com/api/adwords/v13/reseller'; }

	/**
	 * @return password
	 */
	public static function create() { return new self(); }
}



/**
 * 
 */
class requestId 
{


	/**
	 * Возвращает namespace структуры
	 *
	 * @return string
	 */
	public function getNamespace() { return 'https://adwords.google.com/api/adwords/v13/reseller'; }

	/**
	 * @return requestId
	 */
	public static function create() { return new self(); }
}



/**
 * 
 */
class responseTime 
{


	/**
	 * Возвращает namespace структуры
	 *
	 * @return string
	 */
	public function getNamespace() { return 'https://adwords.google.com/api/adwords/v13/reseller'; }

	/**
	 * @return responseTime
	 */
	public static function create() { return new self(); }
}



/**
 * 
 */
class units 
{


	/**
	 * Возвращает namespace структуры
	 *
	 * @return string
	 */
	public function getNamespace() { return 'https://adwords.google.com/api/adwords/v13/reseller'; }

	/**
	 * @return units
	 */
	public static function create() { return new self(); }
}



/**
 * 
 */
class updateAccountInfo 
{

	/**
	 * 
	 * @var AccountInfo
	 */
	public $accountInfo;

	/**
	 * 
	 * @param AccountInfo $accountInfo 
	 */
	public function __construct($accountInfo = null)
	{
		$this->setAccountInfo($accountInfo);
	}

	/**
	 * Возвращает namespace структуры
	 *
	 * @return string
	 */
	public function getNamespace() { return 'https://adwords.google.com/api/adwords/v13/reseller'; }

	/**
	 * @return updateAccountInfo
	 */
	public static function create() { return new self(); }

	/**
	 * Setter for accountInfo
	 * @param AccountInfo $accountInfo 
	 * @return updateAccountInfo
	 */
	public function setAccountInfo($accountInfo)
	{
		$this->accountInfo = $accountInfo;
		return $this;
	}
}



/**
 * 
 */
class updateAccountInfoResponse 
{


	/**
	 * Возвращает namespace структуры
	 *
	 * @return string
	 */
	public function getNamespace() { return 'https://adwords.google.com/api/adwords/v13/reseller'; }

	/**
	 * @return updateAccountInfoResponse
	 */
	public static function create() { return new self(); }
}



/**
 * 
 */
class updateBudget 
{

	/**
	 * 
	 * @var Budget
	 */
	public $oldBudget;

	/**
	 * 
	 * @var Budget
	 */
	public $newBudget;

	/**
	 * 
	 * @param Budget $oldBudget 
	 * @param Budget $newBudget 
	 */
	public function __construct($oldBudget = null, $newBudget = null)
	{
		$this->setOldBudget($oldBudget);
		$this->setNewBudget($newBudget);
	}

	/**
	 * Возвращает namespace структуры
	 *
	 * @return string
	 */
	public function getNamespace() { return 'https://adwords.google.com/api/adwords/v13/reseller'; }

	/**
	 * @return updateBudget
	 */
	public static function create() { return new self(); }

	/**
	 * Setter for oldBudget
	 * @param Budget $oldBudget 
	 * @return updateBudget
	 */
	public function setOldBudget($oldBudget)
	{
		$this->oldBudget = $oldBudget;
		return $this;
	}

	/**
	 * Setter for newBudget
	 * @param Budget $newBudget 
	 * @return updateBudget
	 */
	public function setNewBudget($newBudget)
	{
		$this->newBudget = $newBudget;
		return $this;
	}
}



/**
 * 
 */
class updateBudgetResponse 
{


	/**
	 * Возвращает namespace структуры
	 *
	 * @return string
	 */
	public function getNamespace() { return 'https://adwords.google.com/api/adwords/v13/reseller'; }

	/**
	 * @return updateBudgetResponse
	 */
	public static function create() { return new self(); }
}



/**
 * 
 */
class useragent 
{


	/**
	 * Возвращает namespace структуры
	 *
	 * @return string
	 */
	public function getNamespace() { return 'https://adwords.google.com/api/adwords/v13/reseller'; }

	/**
	 * @return useragent
	 */
	public static function create() { return new self(); }
}


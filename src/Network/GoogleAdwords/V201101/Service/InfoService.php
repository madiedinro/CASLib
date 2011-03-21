<?php

namespace AdvancedContextLib\Network\GoogleAdwords\V201101\Service;

use AdvancedContextLib\Network\GoogleAdwords\V201101\Lib\SoapClient;

/**
 * :classDescription
 */
class InfoService extends SoapClient
{

/**
 * :operationDescription

 * @return InfoServiceGetResponse
 */
public function get($selector)
{
	$input = new InfoServiceGet($selector);
    $result = $this->__soapCall("get", array($input));
    return $result->rval;
}

public static $classmap = array(
'AuthenticationError.Reason' => 'AdvancedContextLib\Network\GoogleAdwords\V201101\Service\AuthenticationErrorReason',
'AuthenticationError' => 'AdvancedContextLib\Network\GoogleAdwords\V201101\Service\AuthenticationError',
'AuthorizationError' => 'AdvancedContextLib\Network\GoogleAdwords\V201101\Service\AuthorizationError',
'ClientTermsError' => 'AdvancedContextLib\Network\GoogleAdwords\V201101\Service\ClientTermsError',
'DateRange' => 'AdvancedContextLib\Network\GoogleAdwords\V201101\Service\DateRange',
'EntityNotFound' => 'AdvancedContextLib\Network\GoogleAdwords\V201101\Service\EntityNotFound',
'InternalApiError' => 'AdvancedContextLib\Network\GoogleAdwords\V201101\Service\InternalApiError',
'NotEmptyError' => 'AdvancedContextLib\Network\GoogleAdwords\V201101\Service\NotEmptyError',
'NotWhitelistedError' => 'AdvancedContextLib\Network\GoogleAdwords\V201101\Service\NotWhitelistedError',
'NullError' => 'AdvancedContextLib\Network\GoogleAdwords\V201101\Service\NullError',
'OperatorError' => 'AdvancedContextLib\Network\GoogleAdwords\V201101\Service\OperatorError',
'QuotaCheckError' => 'AdvancedContextLib\Network\GoogleAdwords\V201101\Service\QuotaCheckError',
'RateExceededError' => 'AdvancedContextLib\Network\GoogleAdwords\V201101\Service\RateExceededError',
'ReadOnlyError' => 'AdvancedContextLib\Network\GoogleAdwords\V201101\Service\ReadOnlyError',
'RequestError' => 'AdvancedContextLib\Network\GoogleAdwords\V201101\Service\RequestError',
'RequiredError' => 'AdvancedContextLib\Network\GoogleAdwords\V201101\Service\RequiredError',
'SizeLimitError' => 'AdvancedContextLib\Network\GoogleAdwords\V201101\Service\SizeLimitError',
'SoapHeader' => 'AdvancedContextLib\Network\GoogleAdwords\V201101\Service\SoapHeader',
'SoapResponseHeader' => 'AdvancedContextLib\Network\GoogleAdwords\V201101\Service\SoapResponseHeader',
'ApiError' => 'AdvancedContextLib\Network\GoogleAdwords\V201101\Service\ApiError',
'ApiException' => 'AdvancedContextLib\Network\GoogleAdwords\V201101\Service\ApiException',
'ApplicationException' => 'AdvancedContextLib\Network\GoogleAdwords\V201101\Service\ApplicationException',
'get' => 'AdvancedContextLib\Network\GoogleAdwords\V201101\Service\InfoServiceGet',
'getResponse' => 'AdvancedContextLib\Network\GoogleAdwords\V201101\Service\InfoServiceGetResponse',
'ApiExceptionFault' => 'AdvancedContextLib\Network\GoogleAdwords\V201101\Service\InfoServiceApiExceptionFault',
'RequestHeader' => 'AdvancedContextLib\Network\GoogleAdwords\V201101\Service\InfoServiceRequestHeader',
'ResponseHeader' => 'AdvancedContextLib\Network\GoogleAdwords\V201101\Service\InfoServiceResponseHeader',
'ApiUsageError.Reason' => 'AdvancedContextLib\Network\GoogleAdwords\V201101\Service\ApiUsageErrorReason',
'ApiUsageError' => 'AdvancedContextLib\Network\GoogleAdwords\V201101\Service\ApiUsageError',
'ApiUsageRecord' => 'AdvancedContextLib\Network\GoogleAdwords\V201101\Service\ApiUsageRecord',
'InfoSelector' => 'AdvancedContextLib\Network\GoogleAdwords\V201101\Service\InfoSelector',
'ApiUsageInfo' => 'AdvancedContextLib\Network\GoogleAdwords\V201101\Service\ApiUsageInfo',
);

protected $wsdl = 'https://adwords.google.com/api/adwords/info/v201101/InfoService?wsdl';

public function __construct($options) {
	$options["classmap"] = self::$classmap;
	parent::__construct($options);
}


}
/**
 * :classDescription
 */
class AuthenticationErrorReason
{
const AUTHENTICATION_FAILED = 'AUTHENTICATION_FAILED';
const CLIENT_CUSTOMER_ID_IS_REQUIRED = 'CLIENT_CUSTOMER_ID_IS_REQUIRED';
const CLIENT_EMAIL_REQUIRED = 'CLIENT_EMAIL_REQUIRED';
const CLIENT_CUSTOMER_ID_INVALID = 'CLIENT_CUSTOMER_ID_INVALID';
const CLIENT_EMAIL_INVALID = 'CLIENT_EMAIL_INVALID';
const CLIENT_EMAIL_FAILED_TO_AUTHENTICATE = 'CLIENT_EMAIL_FAILED_TO_AUTHENTICATE';
const CUSTOMER_NOT_FOUND = 'CUSTOMER_NOT_FOUND';
const GOOGLE_ACCOUNT_DELETED = 'GOOGLE_ACCOUNT_DELETED';
const GOOGLE_ACCOUNT_COOKIE_INVALID = 'GOOGLE_ACCOUNT_COOKIE_INVALID';
const FAILED_TO_AUTHENTICATE_GOOGLE_ACCOUNT = 'FAILED_TO_AUTHENTICATE_GOOGLE_ACCOUNT';
const GOOGLE_ACCOUNT_USER_AND_ADS_USER_MISMATCH = 'GOOGLE_ACCOUNT_USER_AND_ADS_USER_MISMATCH';
const LOGIN_COOKIE_REQUIRED = 'LOGIN_COOKIE_REQUIRED';
const NOT_ADS_USER = 'NOT_ADS_USER';
const OAUTH_TOKEN_INVALID = 'OAUTH_TOKEN_INVALID';
const OAUTH_TOKEN_EXPIRED = 'OAUTH_TOKEN_EXPIRED';
const OAUTH_TOKEN_DISABLED = 'OAUTH_TOKEN_DISABLED';
const OAUTH_TOKEN_REVOKED = 'OAUTH_TOKEN_REVOKED';
const OAUTH_TOKEN_HEADER_INVALID = 'OAUTH_TOKEN_HEADER_INVALID';
const LOGIN_COOKIE_INVALID = 'LOGIN_COOKIE_INVALID';
const FAILED_TO_RETRIEVE_LOGIN_COOKIE = 'FAILED_TO_RETRIEVE_LOGIN_COOKIE';
const USER_ID_INVALID = 'USER_ID_INVALID';


	public function getNamespace() {
		return 'https://adwords.google.com/api/adwords/cm/v201101';
	}

	public function getXsiTypeName() {
		return ':xsiType';
	}
}
/**
 * :classDescription
 */
class AuthenticationError extends ApiError
{
/*
 * @var AuthenticationErrorReason
 */
public $reason;



public function __construct($reason = null, $fieldPath = null, $trigger = null, $errorString = null, $ApiErrorType = null)
{
$this->reason = $reason; $this->fieldPath = $fieldPath; $this->trigger = $trigger; $this->errorString = $errorString; $this->ApiErrorType = $ApiErrorType; 
}




public function getNamespace() { return 'https://adwords.google.com/api/adwords/cm/v201101'; }

public function getXsiTypeName() { return ':xsiType'; }

/*
 * @return AuthenticationError extends ApiError
 */
public static function create() { return new self(); }

public function setReason($value){ $this->reason = $value; return $this; }
public function setFieldPath($value){ $this->fieldPath = $value; return $this; }
public function setTrigger($value){ $this->trigger = $value; return $this; }
public function setErrorString($value){ $this->errorString = $value; return $this; }
public function setApiErrorType($value){ $this->ApiErrorType = $value; return $this; }
}
/**
 * :classDescription
 */
class AuthorizationError extends ApiError
{
/*
 * @var AuthorizationErrorReason
 */
public $reason;



public function __construct($reason = null, $fieldPath = null, $trigger = null, $errorString = null, $ApiErrorType = null)
{
$this->reason = $reason; $this->fieldPath = $fieldPath; $this->trigger = $trigger; $this->errorString = $errorString; $this->ApiErrorType = $ApiErrorType; 
}




public function getNamespace() { return 'https://adwords.google.com/api/adwords/cm/v201101'; }

public function getXsiTypeName() { return ':xsiType'; }

/*
 * @return AuthorizationError extends ApiError
 */
public static function create() { return new self(); }

public function setReason($value){ $this->reason = $value; return $this; }
public function setFieldPath($value){ $this->fieldPath = $value; return $this; }
public function setTrigger($value){ $this->trigger = $value; return $this; }
public function setErrorString($value){ $this->errorString = $value; return $this; }
public function setApiErrorType($value){ $this->ApiErrorType = $value; return $this; }
}
/**
 * :classDescription
 */
class ClientTermsError extends ApiError
{
/*
 * @var ClientTermsErrorReason
 */
public $reason;



public function __construct($reason = null, $fieldPath = null, $trigger = null, $errorString = null, $ApiErrorType = null)
{
$this->reason = $reason; $this->fieldPath = $fieldPath; $this->trigger = $trigger; $this->errorString = $errorString; $this->ApiErrorType = $ApiErrorType; 
}




public function getNamespace() { return 'https://adwords.google.com/api/adwords/cm/v201101'; }

public function getXsiTypeName() { return ':xsiType'; }

/*
 * @return ClientTermsError extends ApiError
 */
public static function create() { return new self(); }

public function setReason($value){ $this->reason = $value; return $this; }
public function setFieldPath($value){ $this->fieldPath = $value; return $this; }
public function setTrigger($value){ $this->trigger = $value; return $this; }
public function setErrorString($value){ $this->errorString = $value; return $this; }
public function setApiErrorType($value){ $this->ApiErrorType = $value; return $this; }
}
/**
 * :classDescription
 */
class DateRange
{
/*
 * @var string
 */
public $min;
/*
 * @var string
 */
public $max;



public function __construct($min = null, $max = null)
{
$this->min = $min; $this->max = $max; 
}




public function getNamespace() { return 'https://adwords.google.com/api/adwords/cm/v201101'; }

public function getXsiTypeName() { return ':xsiType'; }

/*
 * @return DateRange
 */
public static function create() { return new self(); }

public function setMin($value){ $this->min = $value; return $this; }
public function setMax($value){ $this->max = $value; return $this; }
}
/**
 * :classDescription
 */
class EntityNotFound extends ApiError
{
/*
 * @var EntityNotFoundReason
 */
public $reason;



public function __construct($reason = null, $fieldPath = null, $trigger = null, $errorString = null, $ApiErrorType = null)
{
$this->reason = $reason; $this->fieldPath = $fieldPath; $this->trigger = $trigger; $this->errorString = $errorString; $this->ApiErrorType = $ApiErrorType; 
}




public function getNamespace() { return 'https://adwords.google.com/api/adwords/cm/v201101'; }

public function getXsiTypeName() { return ':xsiType'; }

/*
 * @return EntityNotFound extends ApiError
 */
public static function create() { return new self(); }

public function setReason($value){ $this->reason = $value; return $this; }
public function setFieldPath($value){ $this->fieldPath = $value; return $this; }
public function setTrigger($value){ $this->trigger = $value; return $this; }
public function setErrorString($value){ $this->errorString = $value; return $this; }
public function setApiErrorType($value){ $this->ApiErrorType = $value; return $this; }
}
/**
 * :classDescription
 */
class InternalApiError extends ApiError
{
/*
 * @var InternalApiErrorReason
 */
public $reason;



public function __construct($reason = null, $fieldPath = null, $trigger = null, $errorString = null, $ApiErrorType = null)
{
$this->reason = $reason; $this->fieldPath = $fieldPath; $this->trigger = $trigger; $this->errorString = $errorString; $this->ApiErrorType = $ApiErrorType; 
}




public function getNamespace() { return 'https://adwords.google.com/api/adwords/cm/v201101'; }

public function getXsiTypeName() { return ':xsiType'; }

/*
 * @return InternalApiError extends ApiError
 */
public static function create() { return new self(); }

public function setReason($value){ $this->reason = $value; return $this; }
public function setFieldPath($value){ $this->fieldPath = $value; return $this; }
public function setTrigger($value){ $this->trigger = $value; return $this; }
public function setErrorString($value){ $this->errorString = $value; return $this; }
public function setApiErrorType($value){ $this->ApiErrorType = $value; return $this; }
}
/**
 * :classDescription
 */
class NotEmptyError extends ApiError
{
/*
 * @var NotEmptyErrorReason
 */
public $reason;



public function __construct($reason = null, $fieldPath = null, $trigger = null, $errorString = null, $ApiErrorType = null)
{
$this->reason = $reason; $this->fieldPath = $fieldPath; $this->trigger = $trigger; $this->errorString = $errorString; $this->ApiErrorType = $ApiErrorType; 
}




public function getNamespace() { return 'https://adwords.google.com/api/adwords/cm/v201101'; }

public function getXsiTypeName() { return ':xsiType'; }

/*
 * @return NotEmptyError extends ApiError
 */
public static function create() { return new self(); }

public function setReason($value){ $this->reason = $value; return $this; }
public function setFieldPath($value){ $this->fieldPath = $value; return $this; }
public function setTrigger($value){ $this->trigger = $value; return $this; }
public function setErrorString($value){ $this->errorString = $value; return $this; }
public function setApiErrorType($value){ $this->ApiErrorType = $value; return $this; }
}
/**
 * :classDescription
 */
class NotWhitelistedError extends ApiError
{
/*
 * @var NotWhitelistedErrorReason
 */
public $reason;



public function __construct($reason = null, $fieldPath = null, $trigger = null, $errorString = null, $ApiErrorType = null)
{
$this->reason = $reason; $this->fieldPath = $fieldPath; $this->trigger = $trigger; $this->errorString = $errorString; $this->ApiErrorType = $ApiErrorType; 
}




public function getNamespace() { return 'https://adwords.google.com/api/adwords/cm/v201101'; }

public function getXsiTypeName() { return ':xsiType'; }

/*
 * @return NotWhitelistedError extends ApiError
 */
public static function create() { return new self(); }

public function setReason($value){ $this->reason = $value; return $this; }
public function setFieldPath($value){ $this->fieldPath = $value; return $this; }
public function setTrigger($value){ $this->trigger = $value; return $this; }
public function setErrorString($value){ $this->errorString = $value; return $this; }
public function setApiErrorType($value){ $this->ApiErrorType = $value; return $this; }
}
/**
 * :classDescription
 */
class NullError extends ApiError
{
/*
 * @var NullErrorReason
 */
public $reason;



public function __construct($reason = null, $fieldPath = null, $trigger = null, $errorString = null, $ApiErrorType = null)
{
$this->reason = $reason; $this->fieldPath = $fieldPath; $this->trigger = $trigger; $this->errorString = $errorString; $this->ApiErrorType = $ApiErrorType; 
}




public function getNamespace() { return 'https://adwords.google.com/api/adwords/cm/v201101'; }

public function getXsiTypeName() { return ':xsiType'; }

/*
 * @return NullError extends ApiError
 */
public static function create() { return new self(); }

public function setReason($value){ $this->reason = $value; return $this; }
public function setFieldPath($value){ $this->fieldPath = $value; return $this; }
public function setTrigger($value){ $this->trigger = $value; return $this; }
public function setErrorString($value){ $this->errorString = $value; return $this; }
public function setApiErrorType($value){ $this->ApiErrorType = $value; return $this; }
}
/**
 * :classDescription
 */
class OperatorError extends ApiError
{
/*
 * @var OperatorErrorReason
 */
public $reason;



public function __construct($reason = null, $fieldPath = null, $trigger = null, $errorString = null, $ApiErrorType = null)
{
$this->reason = $reason; $this->fieldPath = $fieldPath; $this->trigger = $trigger; $this->errorString = $errorString; $this->ApiErrorType = $ApiErrorType; 
}




public function getNamespace() { return 'https://adwords.google.com/api/adwords/cm/v201101'; }

public function getXsiTypeName() { return ':xsiType'; }

/*
 * @return OperatorError extends ApiError
 */
public static function create() { return new self(); }

public function setReason($value){ $this->reason = $value; return $this; }
public function setFieldPath($value){ $this->fieldPath = $value; return $this; }
public function setTrigger($value){ $this->trigger = $value; return $this; }
public function setErrorString($value){ $this->errorString = $value; return $this; }
public function setApiErrorType($value){ $this->ApiErrorType = $value; return $this; }
}
/**
 * :classDescription
 */
class QuotaCheckError extends ApiError
{
/*
 * @var QuotaCheckErrorReason
 */
public $reason;



public function __construct($reason = null, $fieldPath = null, $trigger = null, $errorString = null, $ApiErrorType = null)
{
$this->reason = $reason; $this->fieldPath = $fieldPath; $this->trigger = $trigger; $this->errorString = $errorString; $this->ApiErrorType = $ApiErrorType; 
}




public function getNamespace() { return 'https://adwords.google.com/api/adwords/cm/v201101'; }

public function getXsiTypeName() { return ':xsiType'; }

/*
 * @return QuotaCheckError extends ApiError
 */
public static function create() { return new self(); }

public function setReason($value){ $this->reason = $value; return $this; }
public function setFieldPath($value){ $this->fieldPath = $value; return $this; }
public function setTrigger($value){ $this->trigger = $value; return $this; }
public function setErrorString($value){ $this->errorString = $value; return $this; }
public function setApiErrorType($value){ $this->ApiErrorType = $value; return $this; }
}
/**
 * :classDescription
 */
class RateExceededError extends ApiError
{
/*
 * @var RateExceededErrorReason
 */
public $reason;
/*
 * @var string
 */
public $rateName;
/*
 * @var string
 */
public $rateScope;
/*
 * @var int
 */
public $retryAfterSeconds;



public function __construct($reason = null, $rateName = null, $rateScope = null, $retryAfterSeconds = null, $fieldPath = null, $trigger = null, $errorString = null, $ApiErrorType = null)
{
$this->reason = $reason; $this->rateName = $rateName; $this->rateScope = $rateScope; $this->retryAfterSeconds = $retryAfterSeconds; $this->fieldPath = $fieldPath; $this->trigger = $trigger; $this->errorString = $errorString; $this->ApiErrorType = $ApiErrorType; 
}




public function getNamespace() { return 'https://adwords.google.com/api/adwords/cm/v201101'; }

public function getXsiTypeName() { return ':xsiType'; }

/*
 * @return RateExceededError extends ApiError
 */
public static function create() { return new self(); }

public function setReason($value){ $this->reason = $value; return $this; }
public function setRateName($value){ $this->rateName = $value; return $this; }
public function setRateScope($value){ $this->rateScope = $value; return $this; }
public function setRetryAfterSeconds($value){ $this->retryAfterSeconds = $value; return $this; }
public function setFieldPath($value){ $this->fieldPath = $value; return $this; }
public function setTrigger($value){ $this->trigger = $value; return $this; }
public function setErrorString($value){ $this->errorString = $value; return $this; }
public function setApiErrorType($value){ $this->ApiErrorType = $value; return $this; }
}
/**
 * :classDescription
 */
class ReadOnlyError extends ApiError
{
/*
 * @var ReadOnlyErrorReason
 */
public $reason;



public function __construct($reason = null, $fieldPath = null, $trigger = null, $errorString = null, $ApiErrorType = null)
{
$this->reason = $reason; $this->fieldPath = $fieldPath; $this->trigger = $trigger; $this->errorString = $errorString; $this->ApiErrorType = $ApiErrorType; 
}




public function getNamespace() { return 'https://adwords.google.com/api/adwords/cm/v201101'; }

public function getXsiTypeName() { return ':xsiType'; }

/*
 * @return ReadOnlyError extends ApiError
 */
public static function create() { return new self(); }

public function setReason($value){ $this->reason = $value; return $this; }
public function setFieldPath($value){ $this->fieldPath = $value; return $this; }
public function setTrigger($value){ $this->trigger = $value; return $this; }
public function setErrorString($value){ $this->errorString = $value; return $this; }
public function setApiErrorType($value){ $this->ApiErrorType = $value; return $this; }
}
/**
 * :classDescription
 */
class RequestError extends ApiError
{
/*
 * @var RequestErrorReason
 */
public $reason;



public function __construct($reason = null, $fieldPath = null, $trigger = null, $errorString = null, $ApiErrorType = null)
{
$this->reason = $reason; $this->fieldPath = $fieldPath; $this->trigger = $trigger; $this->errorString = $errorString; $this->ApiErrorType = $ApiErrorType; 
}




public function getNamespace() { return 'https://adwords.google.com/api/adwords/cm/v201101'; }

public function getXsiTypeName() { return ':xsiType'; }

/*
 * @return RequestError extends ApiError
 */
public static function create() { return new self(); }

public function setReason($value){ $this->reason = $value; return $this; }
public function setFieldPath($value){ $this->fieldPath = $value; return $this; }
public function setTrigger($value){ $this->trigger = $value; return $this; }
public function setErrorString($value){ $this->errorString = $value; return $this; }
public function setApiErrorType($value){ $this->ApiErrorType = $value; return $this; }
}
/**
 * :classDescription
 */
class RequiredError extends ApiError
{
/*
 * @var RequiredErrorReason
 */
public $reason;



public function __construct($reason = null, $fieldPath = null, $trigger = null, $errorString = null, $ApiErrorType = null)
{
$this->reason = $reason; $this->fieldPath = $fieldPath; $this->trigger = $trigger; $this->errorString = $errorString; $this->ApiErrorType = $ApiErrorType; 
}




public function getNamespace() { return 'https://adwords.google.com/api/adwords/cm/v201101'; }

public function getXsiTypeName() { return ':xsiType'; }

/*
 * @return RequiredError extends ApiError
 */
public static function create() { return new self(); }

public function setReason($value){ $this->reason = $value; return $this; }
public function setFieldPath($value){ $this->fieldPath = $value; return $this; }
public function setTrigger($value){ $this->trigger = $value; return $this; }
public function setErrorString($value){ $this->errorString = $value; return $this; }
public function setApiErrorType($value){ $this->ApiErrorType = $value; return $this; }
}
/**
 * :classDescription
 */
class SizeLimitError extends ApiError
{
/*
 * @var SizeLimitErrorReason
 */
public $reason;



public function __construct($reason = null, $fieldPath = null, $trigger = null, $errorString = null, $ApiErrorType = null)
{
$this->reason = $reason; $this->fieldPath = $fieldPath; $this->trigger = $trigger; $this->errorString = $errorString; $this->ApiErrorType = $ApiErrorType; 
}




public function getNamespace() { return 'https://adwords.google.com/api/adwords/cm/v201101'; }

public function getXsiTypeName() { return ':xsiType'; }

/*
 * @return SizeLimitError extends ApiError
 */
public static function create() { return new self(); }

public function setReason($value){ $this->reason = $value; return $this; }
public function setFieldPath($value){ $this->fieldPath = $value; return $this; }
public function setTrigger($value){ $this->trigger = $value; return $this; }
public function setErrorString($value){ $this->errorString = $value; return $this; }
public function setApiErrorType($value){ $this->ApiErrorType = $value; return $this; }
}
/**
 * :classDescription
 */
class SoapHeader
{
/*
 * @var string
 */
public $authToken;
/*
 * @var string
 */
public $clientCustomerId;
/*
 * @var string
 */
public $clientEmail;
/*
 * @var string
 */
public $developerToken;
/*
 * @var string
 */
public $userAgent;
/*
 * @var boolean
 */
public $validateOnly;
/*
 * @var boolean
 */
public $partialFailure;



public function __construct($authToken = null, $clientCustomerId = null, $clientEmail = null, $developerToken = null, $userAgent = null, $validateOnly = null, $partialFailure = null)
{
$this->authToken = $authToken; $this->clientCustomerId = $clientCustomerId; $this->clientEmail = $clientEmail; $this->developerToken = $developerToken; $this->userAgent = $userAgent; $this->validateOnly = $validateOnly; $this->partialFailure = $partialFailure; 
}




public function getNamespace() { return 'https://adwords.google.com/api/adwords/cm/v201101'; }

public function getXsiTypeName() { return ':xsiType'; }

/*
 * @return SoapHeader
 */
public static function create() { return new self(); }

public function setAuthToken($value){ $this->authToken = $value; return $this; }
public function setClientCustomerId($value){ $this->clientCustomerId = $value; return $this; }
public function setClientEmail($value){ $this->clientEmail = $value; return $this; }
public function setDeveloperToken($value){ $this->developerToken = $value; return $this; }
public function setUserAgent($value){ $this->userAgent = $value; return $this; }
public function setValidateOnly($value){ $this->validateOnly = $value; return $this; }
public function setPartialFailure($value){ $this->partialFailure = $value; return $this; }
}
/**
 * :classDescription
 */
class SoapResponseHeader
{
/*
 * @var string
 */
public $requestId;
/*
 * @var long
 */
public $operations;
/*
 * @var long
 */
public $responseTime;
/*
 * @var long
 */
public $units;



public function __construct($requestId = null, $operations = null, $responseTime = null, $units = null)
{
$this->requestId = $requestId; $this->operations = $operations; $this->responseTime = $responseTime; $this->units = $units; 
}




public function getNamespace() { return 'https://adwords.google.com/api/adwords/cm/v201101'; }

public function getXsiTypeName() { return ':xsiType'; }

/*
 * @return SoapResponseHeader
 */
public static function create() { return new self(); }

public function setRequestId($value){ $this->requestId = $value; return $this; }
public function setOperations($value){ $this->operations = $value; return $this; }
public function setResponseTime($value){ $this->responseTime = $value; return $this; }
public function setUnits($value){ $this->units = $value; return $this; }
}
/**
 * :classDescription
 */
class ApiError
{
/*
 * @var string
 */
public $fieldPath;
/*
 * @var string
 */
public $trigger;
/*
 * @var string
 */
public $errorString;
/*
 * @var string
 */
public $ApiErrorType;



public function __construct($fieldPath = null, $trigger = null, $errorString = null, $ApiErrorType = null)
{
$this->fieldPath = $fieldPath; $this->trigger = $trigger; $this->errorString = $errorString; $this->ApiErrorType = $ApiErrorType; 
}


protected $_parameterMap = array (
	'ApiError.Type' => 'ApiErrorType',

);

public function __set($var, $value) {
	$this->{$this->_parameterMap[$var]} = $value;
}

public function __get($var) {
	return array_key_exists($var, $this->_parameterMap) ? $this->{$this->_parameterMap[$var]} : null;
}

protected function getParameterMap() {
	return $this->_parameterMap;
}



public function getNamespace() { return 'https://adwords.google.com/api/adwords/cm/v201101'; }

public function getXsiTypeName() { return ':xsiType'; }

/*
 * @return ApiError
 */
public static function create() { return new self(); }

public function setFieldPath($value){ $this->fieldPath = $value; return $this; }
public function setTrigger($value){ $this->trigger = $value; return $this; }
public function setErrorString($value){ $this->errorString = $value; return $this; }
public function setApiErrorType($value){ $this->ApiErrorType = $value; return $this; }
}
/**
 * :classDescription
 */
class ApiException extends ApplicationException
{
/*
 * @var ApiError
 */
public $errors;



public function __construct($errors = null, $message = null, $ApplicationExceptionType = null)
{
$this->errors = $errors; $this->message = $message; $this->ApplicationExceptionType = $ApplicationExceptionType; 
}




public function getNamespace() { return 'https://adwords.google.com/api/adwords/cm/v201101'; }

public function getXsiTypeName() { return ':xsiType'; }

/*
 * @return ApiException extends ApplicationException
 */
public static function create() { return new self(); }

public function setErrors($value){ $this->errors = $value; return $this; }
public function setMessage($value){ $this->message = $value; return $this; }
public function setApplicationExceptionType($value){ $this->ApplicationExceptionType = $value; return $this; }
}
/**
 * :classDescription
 */
class ApplicationException
{
/*
 * @var string
 */
public $message;
/*
 * @var string
 */
public $ApplicationExceptionType;



public function __construct($message = null, $ApplicationExceptionType = null)
{
$this->message = $message; $this->ApplicationExceptionType = $ApplicationExceptionType; 
}


protected $_parameterMap = array (
	'ApplicationException.Type' => 'ApplicationExceptionType',

);

public function __set($var, $value) {
	$this->{$this->_parameterMap[$var]} = $value;
}

public function __get($var) {
	return array_key_exists($var, $this->_parameterMap) ? $this->{$this->_parameterMap[$var]} : null;
}

protected function getParameterMap() {
	return $this->_parameterMap;
}



public function getNamespace() { return 'https://adwords.google.com/api/adwords/cm/v201101'; }

public function getXsiTypeName() { return ':xsiType'; }

/*
 * @return ApplicationException
 */
public static function create() { return new self(); }

public function setMessage($value){ $this->message = $value; return $this; }
public function setApplicationExceptionType($value){ $this->ApplicationExceptionType = $value; return $this; }
}
/**
 * :classDescription
 */
class InfoServiceGet
{
/*
 * @var InfoSelector
 */
public $selector;



public function __construct($selector = null)
{
$this->selector = $selector; 
}




public function getNamespace() { return 'https://adwords.google.com/api/adwords/info/v201101'; }

public function getXsiTypeName() { return ':xsiType'; }

/*
 * @return InfoServiceGet
 */
public static function create() { return new self(); }

public function setSelector($value){ $this->selector = $value; return $this; }
}
/**
 * :classDescription
 */
class InfoServiceGetResponse
{
/*
 * @var ApiUsageInfo
 */
public $rval;



public function __construct($rval = null)
{
$this->rval = $rval; 
}




public function getNamespace() { return 'https://adwords.google.com/api/adwords/info/v201101'; }

public function getXsiTypeName() { return ':xsiType'; }

/*
 * @return InfoServiceGetResponse
 */
public static function create() { return new self(); }

public function setRval($value){ $this->rval = $value; return $this; }
}
/**
 * :classDescription
 */
class InfoServiceApiExceptionFault
{



public function __construct()
{

}




public function getNamespace() { return 'https://adwords.google.com/api/adwords/info/v201101'; }

public function getXsiTypeName() { return ':xsiType'; }

/*
 * @return InfoServiceApiExceptionFault
 */
public static function create() { return new self(); }


}
/**
 * :classDescription
 */
class InfoServiceRequestHeader
{



public function __construct()
{

}




public function getNamespace() { return 'https://adwords.google.com/api/adwords/info/v201101'; }

public function getXsiTypeName() { return ':xsiType'; }

/*
 * @return InfoServiceRequestHeader
 */
public static function create() { return new self(); }


}
/**
 * :classDescription
 */
class InfoServiceResponseHeader
{



public function __construct()
{

}




public function getNamespace() { return 'https://adwords.google.com/api/adwords/info/v201101'; }

public function getXsiTypeName() { return ':xsiType'; }

/*
 * @return InfoServiceResponseHeader
 */
public static function create() { return new self(); }


}
/**
 * :classDescription
 */
class ApiUsageErrorReason
{
const INVALID_DATE_RANGE = 'INVALID_DATE_RANGE';
const SERVICE_NAME_NOT_SPECIFIED = 'SERVICE_NAME_NOT_SPECIFIED';
const METHOD_NAME_NOT_SPECIFIED = 'METHOD_NAME_NOT_SPECIFIED';
const OPERATOR_NOT_SPECIFIED = 'OPERATOR_NOT_SPECIFIED';
const INVALID_CLIENT_EMAIL = 'INVALID_CLIENT_EMAIL';
const INVALID_TOKEN_HEADER = 'INVALID_TOKEN_HEADER';


	public function getNamespace() {
		return 'https://adwords.google.com/api/adwords/info/v201101';
	}

	public function getXsiTypeName() {
		return ':xsiType';
	}
}
/**
 * :classDescription
 */
class ApiUsageError extends ApiError
{
/*
 * @var ApiUsageErrorReason
 */
public $reason;



public function __construct($reason = null, $fieldPath = null, $trigger = null, $errorString = null, $ApiErrorType = null)
{
$this->reason = $reason; $this->fieldPath = $fieldPath; $this->trigger = $trigger; $this->errorString = $errorString; $this->ApiErrorType = $ApiErrorType; 
}




public function getNamespace() { return 'https://adwords.google.com/api/adwords/info/v201101'; }

public function getXsiTypeName() { return ':xsiType'; }

/*
 * @return ApiUsageError extends ApiError
 */
public static function create() { return new self(); }

public function setReason($value){ $this->reason = $value; return $this; }
public function setFieldPath($value){ $this->fieldPath = $value; return $this; }
public function setTrigger($value){ $this->trigger = $value; return $this; }
public function setErrorString($value){ $this->errorString = $value; return $this; }
public function setApiErrorType($value){ $this->ApiErrorType = $value; return $this; }
}
/**
 * :classDescription
 */
class ApiUsageRecord
{
/*
 * @var string
 */
public $clientEmail;
/*
 * @var long
 */
public $cost;



public function __construct($clientEmail = null, $cost = null)
{
$this->clientEmail = $clientEmail; $this->cost = $cost; 
}




public function getNamespace() { return 'https://adwords.google.com/api/adwords/info/v201101'; }

public function getXsiTypeName() { return ':xsiType'; }

/*
 * @return ApiUsageRecord
 */
public static function create() { return new self(); }

public function setClientEmail($value){ $this->clientEmail = $value; return $this; }
public function setCost($value){ $this->cost = $value; return $this; }
}
/**
 * :classDescription
 */
class InfoSelector
{
/*
 * @var string
 */
public $serviceName;
/*
 * @var string
 */
public $methodName;
/*
 * @var Operator
 */
public $operator;
/*
 * @var DateRange
 */
public $dateRange;
/*
 * @var string
 */
public $clientEmails;
/*
 * @var ApiUsageType
 */
public $apiUsageType;



public function __construct($serviceName = null, $methodName = null, $operator = null, $dateRange = null, $clientEmails = null, $apiUsageType = null)
{
$this->serviceName = $serviceName; $this->methodName = $methodName; $this->operator = $operator; $this->dateRange = $dateRange; $this->clientEmails = $clientEmails; $this->apiUsageType = $apiUsageType; 
}




public function getNamespace() { return 'https://adwords.google.com/api/adwords/info/v201101'; }

public function getXsiTypeName() { return ':xsiType'; }

/*
 * @return InfoSelector
 */
public static function create() { return new self(); }

public function setServiceName($value){ $this->serviceName = $value; return $this; }
public function setMethodName($value){ $this->methodName = $value; return $this; }
public function setOperator($value){ $this->operator = $value; return $this; }
public function setDateRange($value){ $this->dateRange = $value; return $this; }
public function setClientEmails($value){ $this->clientEmails = $value; return $this; }
public function setApiUsageType($value){ $this->apiUsageType = $value; return $this; }
}
/**
 * :classDescription
 */
class ApiUsageInfo
{
/*
 * @var ApiUsageRecord
 */
public $apiUsageRecords;
/*
 * @var long
 */
public $cost;



public function __construct($apiUsageRecords = null, $cost = null)
{
$this->apiUsageRecords = $apiUsageRecords; $this->cost = $cost; 
}




public function getNamespace() { return 'https://adwords.google.com/api/adwords/info/v201101'; }

public function getXsiTypeName() { return ':xsiType'; }

/*
 * @return ApiUsageInfo
 */
public static function create() { return new self(); }

public function setApiUsageRecords($value){ $this->apiUsageRecords = $value; return $this; }
public function setCost($value){ $this->cost = $value; return $this; }
}

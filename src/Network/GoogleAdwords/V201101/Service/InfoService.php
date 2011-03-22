<?php

namespace AdvancedContextLib\Network\GoogleAdwords\V201101\Service;

//use ;

/**
 * Use this service to retrieve API usage information, such as the API units
spent over a given date range. See the {@link InfoSelector} documentation for
details.
 */
class InfoService extends \AdvancedContextLib\Network\GoogleAdwords\V201101\Lib\SoapClient
{

/**
 * Returns the API usage information based on the selection criteria specified in
the selector.

@param selector Specifies the type of usage information to return.
@return The API usage information.
@throws ApiException when there is at least one error with the request.
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

public function __construct($options) {
	$options['classmap'] = self::$classmap;
	parent::__construct($options);
}

public function getNamespace() { return 'https://adwords.google.com/api/adwords/info/v201101'; }
public function getWsdl() { return 'https://adwords.google.com/api/adwords/info/v201101/InfoService?wsdl'; }
}
/**
 * The single reason for the authentication failure.
 */
class AuthenticationErrorReason
{
/**
 * Authentication of the request failed.
 */
const AUTHENTICATION_FAILED = 'AUTHENTICATION_FAILED';
/**
 * Client Customer Id is required if CustomerIdMode is set to CLIENT_EXTERNAL_CUSTOMER_ID.
 */
const CLIENT_CUSTOMER_ID_IS_REQUIRED = 'CLIENT_CUSTOMER_ID_IS_REQUIRED';
/**
 * Client Email is required if CustomerIdMode is set to CLIENT_EXTERNAL_EMAIL_FIELD.
 */
const CLIENT_EMAIL_REQUIRED = 'CLIENT_EMAIL_REQUIRED';
/**
 * Client customer Id is not a number.
 */
const CLIENT_CUSTOMER_ID_INVALID = 'CLIENT_CUSTOMER_ID_INVALID';
/**
 * Client customer Id is not a number.
 */
const CLIENT_EMAIL_INVALID = 'CLIENT_EMAIL_INVALID';
/**
 * Client email is not a valid customer email.
 */
const CLIENT_EMAIL_FAILED_TO_AUTHENTICATE = 'CLIENT_EMAIL_FAILED_TO_AUTHENTICATE';
/**
 * No customer found for the customer id provided in the header.
 */
const CUSTOMER_NOT_FOUND = 'CUSTOMER_NOT_FOUND';
/**
 * Client's Google Account is deleted.
 */
const GOOGLE_ACCOUNT_DELETED = 'GOOGLE_ACCOUNT_DELETED';
/**
 * Google account login token in the cookie is invalid.
 */
const GOOGLE_ACCOUNT_COOKIE_INVALID = 'GOOGLE_ACCOUNT_COOKIE_INVALID';
/**
 * problem occurred during Google account authentication.
 */
const FAILED_TO_AUTHENTICATE_GOOGLE_ACCOUNT = 'FAILED_TO_AUTHENTICATE_GOOGLE_ACCOUNT';
/**
 * The user in the google account login token does not match the UserId in the cookie.
 */
const GOOGLE_ACCOUNT_USER_AND_ADS_USER_MISMATCH = 'GOOGLE_ACCOUNT_USER_AND_ADS_USER_MISMATCH';
/**
 * Login cookie is required for authentication.
 */
const LOGIN_COOKIE_REQUIRED = 'LOGIN_COOKIE_REQUIRED';
/**
 * User in the cookie is not a valid Ads user.
 */
const NOT_ADS_USER = 'NOT_ADS_USER';
/**
 * Oauth token in the header is not valid.
 */
const OAUTH_TOKEN_INVALID = 'OAUTH_TOKEN_INVALID';
/**
 * Oauth token in the header has expired.
 */
const OAUTH_TOKEN_EXPIRED = 'OAUTH_TOKEN_EXPIRED';
/**
 * Oauth token in the header has been disabled.
 */
const OAUTH_TOKEN_DISABLED = 'OAUTH_TOKEN_DISABLED';
/**
 * Oauth token in the header has been revoked.
 */
const OAUTH_TOKEN_REVOKED = 'OAUTH_TOKEN_REVOKED';
/**
 * Oauth token HTTP header is malformed.
 */
const OAUTH_TOKEN_HEADER_INVALID = 'OAUTH_TOKEN_HEADER_INVALID';
/**
 * Login cookie is not valid.
 */
const LOGIN_COOKIE_INVALID = 'LOGIN_COOKIE_INVALID';
/**
 * Failed to decrypt the login cookie.
 */
const FAILED_TO_RETRIEVE_LOGIN_COOKIE = 'FAILED_TO_RETRIEVE_LOGIN_COOKIE';
/**
 * User Id in the header is not a valid id.
 */
const USER_ID_INVALID = 'USER_ID_INVALID';


	public function getNamespace() { return 'https://adwords.google.com/api/adwords/cm/v201101'; }
	public function getXsiTypeName() { return ':xsiType'; }
}
/**
 * Errors returned when Authentication failed.
 */
class AuthenticationError extends ApiError
{
/**
 * The error reason represented by an enum.
 * @var AuthenticationErrorReason
 */
public $reason;
 /**
 * The OGNL field path to identify cause of error.
 * @var string
 */
public $fieldPath;
 /**
 * The data that caused the error.
 * @var string
 */
public $trigger;
 /**
 * A simple string representation of the error and reason.
 * @var string
 */
public $errorString;
 /**
 * This field indicates the subtype of ApiError of this instance.  It is ignored
on input, and instead xsi:type should be specified.
 * @var string
 */
public $ApiErrorType;


public function __construct($reason = null, $fieldPath = null, $trigger = null, $errorString = null, $ApiErrorType = null)
{
parent::__construct($fieldPath,$trigger,$errorString,$ApiErrorType);
$this->reason = $reason; 
}


	public function getNamespace() { return 'https://adwords.google.com/api/adwords/cm/v201101'; }
	public function getXsiTypeName() { return ':xsiType'; }

/**
 * @return AuthenticationError extends ApiError
 */
public static function create() { return new self(); }

public function setReason($value){ $this->reason = $value; return $this; }
}
/**
 * Errors that are thrown due to an authorization problem.
 */
class AuthorizationError extends ApiError
{
/**
 * The error reason represented by an enum.
 * @var AuthorizationErrorReason
 */
public $reason;
 /**
 * The OGNL field path to identify cause of error.
 * @var string
 */
public $fieldPath;
 /**
 * The data that caused the error.
 * @var string
 */
public $trigger;
 /**
 * A simple string representation of the error and reason.
 * @var string
 */
public $errorString;
 /**
 * This field indicates the subtype of ApiError of this instance.  It is ignored
on input, and instead xsi:type should be specified.
 * @var string
 */
public $ApiErrorType;


public function __construct($reason = null, $fieldPath = null, $trigger = null, $errorString = null, $ApiErrorType = null)
{
parent::__construct($fieldPath,$trigger,$errorString,$ApiErrorType);
$this->reason = $reason; 
}


	public function getNamespace() { return 'https://adwords.google.com/api/adwords/cm/v201101'; }
	public function getXsiTypeName() { return ':xsiType'; }

/**
 * @return AuthorizationError extends ApiError
 */
public static function create() { return new self(); }

public function setReason($value){ $this->reason = $value; return $this; }
}
/**
 * Encapsulates the errors thrown during client terms checks for adwords.
 */
class ClientTermsError extends ApiError
{
/**
 * 
 * @var ClientTermsErrorReason
 */
public $reason;
 /**
 * The OGNL field path to identify cause of error.
 * @var string
 */
public $fieldPath;
 /**
 * The data that caused the error.
 * @var string
 */
public $trigger;
 /**
 * A simple string representation of the error and reason.
 * @var string
 */
public $errorString;
 /**
 * This field indicates the subtype of ApiError of this instance.  It is ignored
on input, and instead xsi:type should be specified.
 * @var string
 */
public $ApiErrorType;


public function __construct($reason = null, $fieldPath = null, $trigger = null, $errorString = null, $ApiErrorType = null)
{
parent::__construct($fieldPath,$trigger,$errorString,$ApiErrorType);
$this->reason = $reason; 
}


	public function getNamespace() { return 'https://adwords.google.com/api/adwords/cm/v201101'; }
	public function getXsiTypeName() { return ':xsiType'; }

/**
 * @return ClientTermsError extends ApiError
 */
public static function create() { return new self(); }

public function setReason($value){ $this->reason = $value; return $this; }
}
/**
 * Represents a range of dates that has either an upper or a lower bound.
The format for the date is YYYYMMDD.
 */
class DateRange
{
/**
 * the lower bound of this date range, inclusive.
 * @var string
 */
public $min;
 /**
 * the upper bound of this date range, inclusive.
 * @var string
 */
public $max;


public function __construct($min = null, $max = null)
{

$this->min = $min;  $this->max = $max; 
}


	public function getNamespace() { return 'https://adwords.google.com/api/adwords/cm/v201101'; }
	public function getXsiTypeName() { return ':xsiType'; }

/**
 * @return DateRange
 */
public static function create() { return new self(); }

public function setMin($value){ $this->min = $value; return $this; }
public function setMax($value){ $this->max = $value; return $this; }
}
/**
 * An id did not correspond to an entity, or it referred to an entity which does not belong to the
customer.
 */
class EntityNotFound extends ApiError
{
/**
 * Reason for this error.
 * @var EntityNotFoundReason
 */
public $reason;
 /**
 * The OGNL field path to identify cause of error.
 * @var string
 */
public $fieldPath;
 /**
 * The data that caused the error.
 * @var string
 */
public $trigger;
 /**
 * A simple string representation of the error and reason.
 * @var string
 */
public $errorString;
 /**
 * This field indicates the subtype of ApiError of this instance.  It is ignored
on input, and instead xsi:type should be specified.
 * @var string
 */
public $ApiErrorType;


public function __construct($reason = null, $fieldPath = null, $trigger = null, $errorString = null, $ApiErrorType = null)
{
parent::__construct($fieldPath,$trigger,$errorString,$ApiErrorType);
$this->reason = $reason; 
}


	public function getNamespace() { return 'https://adwords.google.com/api/adwords/cm/v201101'; }
	public function getXsiTypeName() { return ':xsiType'; }

/**
 * @return EntityNotFound extends ApiError
 */
public static function create() { return new self(); }

public function setReason($value){ $this->reason = $value; return $this; }
}
/**
 * Indicates that a server-side error has occured. {@code InternalApiError}s
are generally not the result of an invalid request or message sent by the
client.
 */
class InternalApiError extends ApiError
{
/**
 * The error reason represented by an enum.
 * @var InternalApiErrorReason
 */
public $reason;
 /**
 * The OGNL field path to identify cause of error.
 * @var string
 */
public $fieldPath;
 /**
 * The data that caused the error.
 * @var string
 */
public $trigger;
 /**
 * A simple string representation of the error and reason.
 * @var string
 */
public $errorString;
 /**
 * This field indicates the subtype of ApiError of this instance.  It is ignored
on input, and instead xsi:type should be specified.
 * @var string
 */
public $ApiErrorType;


public function __construct($reason = null, $fieldPath = null, $trigger = null, $errorString = null, $ApiErrorType = null)
{
parent::__construct($fieldPath,$trigger,$errorString,$ApiErrorType);
$this->reason = $reason; 
}


	public function getNamespace() { return 'https://adwords.google.com/api/adwords/cm/v201101'; }
	public function getXsiTypeName() { return ':xsiType'; }

/**
 * @return InternalApiError extends ApiError
 */
public static function create() { return new self(); }

public function setReason($value){ $this->reason = $value; return $this; }
}
/**
 * A list of all errors associated with the @NotEmpty constraints.
 */
class NotEmptyError extends ApiError
{
/**
 * The error reason represented by an enum.
 * @var NotEmptyErrorReason
 */
public $reason;
 /**
 * The OGNL field path to identify cause of error.
 * @var string
 */
public $fieldPath;
 /**
 * The data that caused the error.
 * @var string
 */
public $trigger;
 /**
 * A simple string representation of the error and reason.
 * @var string
 */
public $errorString;
 /**
 * This field indicates the subtype of ApiError of this instance.  It is ignored
on input, and instead xsi:type should be specified.
 * @var string
 */
public $ApiErrorType;


public function __construct($reason = null, $fieldPath = null, $trigger = null, $errorString = null, $ApiErrorType = null)
{
parent::__construct($fieldPath,$trigger,$errorString,$ApiErrorType);
$this->reason = $reason; 
}


	public function getNamespace() { return 'https://adwords.google.com/api/adwords/cm/v201101'; }
	public function getXsiTypeName() { return ':xsiType'; }

/**
 * @return NotEmptyError extends ApiError
 */
public static function create() { return new self(); }

public function setReason($value){ $this->reason = $value; return $this; }
}
/**
 * Indicates that the customer is not whitelisted for accessing the API.
 */
class NotWhitelistedError extends ApiError
{
/**
 * The error reason represented by an enum.
 * @var NotWhitelistedErrorReason
 */
public $reason;
 /**
 * The OGNL field path to identify cause of error.
 * @var string
 */
public $fieldPath;
 /**
 * The data that caused the error.
 * @var string
 */
public $trigger;
 /**
 * A simple string representation of the error and reason.
 * @var string
 */
public $errorString;
 /**
 * This field indicates the subtype of ApiError of this instance.  It is ignored
on input, and instead xsi:type should be specified.
 * @var string
 */
public $ApiErrorType;


public function __construct($reason = null, $fieldPath = null, $trigger = null, $errorString = null, $ApiErrorType = null)
{
parent::__construct($fieldPath,$trigger,$errorString,$ApiErrorType);
$this->reason = $reason; 
}


	public function getNamespace() { return 'https://adwords.google.com/api/adwords/cm/v201101'; }
	public function getXsiTypeName() { return ':xsiType'; }

/**
 * @return NotWhitelistedError extends ApiError
 */
public static function create() { return new self(); }

public function setReason($value){ $this->reason = $value; return $this; }
}
/**
 * Errors associated with contents not null constraint.
 */
class NullError extends ApiError
{
/**
 * The error reason represented by an enum.
 * @var NullErrorReason
 */
public $reason;
 /**
 * The OGNL field path to identify cause of error.
 * @var string
 */
public $fieldPath;
 /**
 * The data that caused the error.
 * @var string
 */
public $trigger;
 /**
 * A simple string representation of the error and reason.
 * @var string
 */
public $errorString;
 /**
 * This field indicates the subtype of ApiError of this instance.  It is ignored
on input, and instead xsi:type should be specified.
 * @var string
 */
public $ApiErrorType;


public function __construct($reason = null, $fieldPath = null, $trigger = null, $errorString = null, $ApiErrorType = null)
{
parent::__construct($fieldPath,$trigger,$errorString,$ApiErrorType);
$this->reason = $reason; 
}


	public function getNamespace() { return 'https://adwords.google.com/api/adwords/cm/v201101'; }
	public function getXsiTypeName() { return ':xsiType'; }

/**
 * @return NullError extends ApiError
 */
public static function create() { return new self(); }

public function setReason($value){ $this->reason = $value; return $this; }
}
/**
 * A list of all errors associated with the @SupportedOperators constraints.
 */
class OperatorError extends ApiError
{
/**
 * The error reason represented by an enum.
 * @var OperatorErrorReason
 */
public $reason;
 /**
 * The OGNL field path to identify cause of error.
 * @var string
 */
public $fieldPath;
 /**
 * The data that caused the error.
 * @var string
 */
public $trigger;
 /**
 * A simple string representation of the error and reason.
 * @var string
 */
public $errorString;
 /**
 * This field indicates the subtype of ApiError of this instance.  It is ignored
on input, and instead xsi:type should be specified.
 * @var string
 */
public $ApiErrorType;


public function __construct($reason = null, $fieldPath = null, $trigger = null, $errorString = null, $ApiErrorType = null)
{
parent::__construct($fieldPath,$trigger,$errorString,$ApiErrorType);
$this->reason = $reason; 
}


	public function getNamespace() { return 'https://adwords.google.com/api/adwords/cm/v201101'; }
	public function getXsiTypeName() { return ':xsiType'; }

/**
 * @return OperatorError extends ApiError
 */
public static function create() { return new self(); }

public function setReason($value){ $this->reason = $value; return $this; }
}
/**
 * Encapsulates the errors thrown during developer quota checks.
 */
class QuotaCheckError extends ApiError
{
/**
 * 
 * @var QuotaCheckErrorReason
 */
public $reason;
 /**
 * The OGNL field path to identify cause of error.
 * @var string
 */
public $fieldPath;
 /**
 * The data that caused the error.
 * @var string
 */
public $trigger;
 /**
 * A simple string representation of the error and reason.
 * @var string
 */
public $errorString;
 /**
 * This field indicates the subtype of ApiError of this instance.  It is ignored
on input, and instead xsi:type should be specified.
 * @var string
 */
public $ApiErrorType;


public function __construct($reason = null, $fieldPath = null, $trigger = null, $errorString = null, $ApiErrorType = null)
{
parent::__construct($fieldPath,$trigger,$errorString,$ApiErrorType);
$this->reason = $reason; 
}


	public function getNamespace() { return 'https://adwords.google.com/api/adwords/cm/v201101'; }
	public function getXsiTypeName() { return ':xsiType'; }

/**
 * @return QuotaCheckError extends ApiError
 */
public static function create() { return new self(); }

public function setReason($value){ $this->reason = $value; return $this; }
}
/**
 * Signals that a call failed because a measured rate exceeded.
 */
class RateExceededError extends ApiError
{
/**
 * The error reason represented by an enum.
 * @var RateExceededErrorReason
 */
public $reason;
 /**
 * Cause of the rate exceeded error.
 * @var string
 */
public $rateName;
 /**
 * The scope of the rate (ACCOUNT/DEVELOPER).
 * @var string
 */
public $rateScope;
 /**
 * The amount of time (in seconds) the client should wait before retrying the request.
 * @var integer
 */
public $retryAfterSeconds;
 /**
 * The OGNL field path to identify cause of error.
 * @var string
 */
public $fieldPath;
 /**
 * The data that caused the error.
 * @var string
 */
public $trigger;
 /**
 * A simple string representation of the error and reason.
 * @var string
 */
public $errorString;
 /**
 * This field indicates the subtype of ApiError of this instance.  It is ignored
on input, and instead xsi:type should be specified.
 * @var string
 */
public $ApiErrorType;


public function __construct($reason = null, $rateName = null, $rateScope = null, $retryAfterSeconds = null, $fieldPath = null, $trigger = null, $errorString = null, $ApiErrorType = null)
{
parent::__construct($fieldPath,$trigger,$errorString,$ApiErrorType);
$this->reason = $reason;  $this->rateName = $rateName;  $this->rateScope = $rateScope;  $this->retryAfterSeconds = $retryAfterSeconds; 
}


	public function getNamespace() { return 'https://adwords.google.com/api/adwords/cm/v201101'; }
	public function getXsiTypeName() { return ':xsiType'; }

/**
 * @return RateExceededError extends ApiError
 */
public static function create() { return new self(); }

public function setReason($value){ $this->reason = $value; return $this; }
public function setRateName($value){ $this->rateName = $value; return $this; }
public function setRateScope($value){ $this->rateScope = $value; return $this; }
public function setRetryAfterSeconds($value){ $this->retryAfterSeconds = $value; return $this; }
}
/**
 * A list of all errors associated with the @ReadOnly constraint.
 */
class ReadOnlyError extends ApiError
{
/**
 * The error reason represented by an enum.
 * @var ReadOnlyErrorReason
 */
public $reason;
 /**
 * The OGNL field path to identify cause of error.
 * @var string
 */
public $fieldPath;
 /**
 * The data that caused the error.
 * @var string
 */
public $trigger;
 /**
 * A simple string representation of the error and reason.
 * @var string
 */
public $errorString;
 /**
 * This field indicates the subtype of ApiError of this instance.  It is ignored
on input, and instead xsi:type should be specified.
 * @var string
 */
public $ApiErrorType;


public function __construct($reason = null, $fieldPath = null, $trigger = null, $errorString = null, $ApiErrorType = null)
{
parent::__construct($fieldPath,$trigger,$errorString,$ApiErrorType);
$this->reason = $reason; 
}


	public function getNamespace() { return 'https://adwords.google.com/api/adwords/cm/v201101'; }
	public function getXsiTypeName() { return ':xsiType'; }

/**
 * @return ReadOnlyError extends ApiError
 */
public static function create() { return new self(); }

public function setReason($value){ $this->reason = $value; return $this; }
}
/**
 * Encapsulates the generic errors thrown when there's an error with user
request.
 */
class RequestError extends ApiError
{
/**
 * 
 * @var RequestErrorReason
 */
public $reason;
 /**
 * The OGNL field path to identify cause of error.
 * @var string
 */
public $fieldPath;
 /**
 * The data that caused the error.
 * @var string
 */
public $trigger;
 /**
 * A simple string representation of the error and reason.
 * @var string
 */
public $errorString;
 /**
 * This field indicates the subtype of ApiError of this instance.  It is ignored
on input, and instead xsi:type should be specified.
 * @var string
 */
public $ApiErrorType;


public function __construct($reason = null, $fieldPath = null, $trigger = null, $errorString = null, $ApiErrorType = null)
{
parent::__construct($fieldPath,$trigger,$errorString,$ApiErrorType);
$this->reason = $reason; 
}


	public function getNamespace() { return 'https://adwords.google.com/api/adwords/cm/v201101'; }
	public function getXsiTypeName() { return ':xsiType'; }

/**
 * @return RequestError extends ApiError
 */
public static function create() { return new self(); }

public function setReason($value){ $this->reason = $value; return $this; }
}
/**
 * Errors due to missing required field.
 */
class RequiredError extends ApiError
{
/**
 * The error reason represented by an enum.
 * @var RequiredErrorReason
 */
public $reason;
 /**
 * The OGNL field path to identify cause of error.
 * @var string
 */
public $fieldPath;
 /**
 * The data that caused the error.
 * @var string
 */
public $trigger;
 /**
 * A simple string representation of the error and reason.
 * @var string
 */
public $errorString;
 /**
 * This field indicates the subtype of ApiError of this instance.  It is ignored
on input, and instead xsi:type should be specified.
 * @var string
 */
public $ApiErrorType;


public function __construct($reason = null, $fieldPath = null, $trigger = null, $errorString = null, $ApiErrorType = null)
{
parent::__construct($fieldPath,$trigger,$errorString,$ApiErrorType);
$this->reason = $reason; 
}


	public function getNamespace() { return 'https://adwords.google.com/api/adwords/cm/v201101'; }
	public function getXsiTypeName() { return ':xsiType'; }

/**
 * @return RequiredError extends ApiError
 */
public static function create() { return new self(); }

public function setReason($value){ $this->reason = $value; return $this; }
}
/**
 * Indicates that the number of entries in the request or response exceeds the system limit.
 */
class SizeLimitError extends ApiError
{
/**
 * The error reason represented by an enum.
 * @var SizeLimitErrorReason
 */
public $reason;
 /**
 * The OGNL field path to identify cause of error.
 * @var string
 */
public $fieldPath;
 /**
 * The data that caused the error.
 * @var string
 */
public $trigger;
 /**
 * A simple string representation of the error and reason.
 * @var string
 */
public $errorString;
 /**
 * This field indicates the subtype of ApiError of this instance.  It is ignored
on input, and instead xsi:type should be specified.
 * @var string
 */
public $ApiErrorType;


public function __construct($reason = null, $fieldPath = null, $trigger = null, $errorString = null, $ApiErrorType = null)
{
parent::__construct($fieldPath,$trigger,$errorString,$ApiErrorType);
$this->reason = $reason; 
}


	public function getNamespace() { return 'https://adwords.google.com/api/adwords/cm/v201101'; }
	public function getXsiTypeName() { return ':xsiType'; }

/**
 * @return SizeLimitError extends ApiError
 */
public static function create() { return new self(); }

public function setReason($value){ $this->reason = $value; return $this; }
}
/**
 * Defines the required and optional elements within the header of a SOAP request.
 */
class SoapHeader
{
/**
 * Authentication token from Google ClientLogin API. Developers need to authenticate themselves
with that API before they can send a request to AdWords API. This header identifies either the
MCC manager acting on behalf of their client, or the advertiser managing their own account.
 * @var string
 */
public $authToken;
 /**
 * Optional header: the customer id of the client of the MCC manager. Applicable only
if an MCC manager, as identified by authToken, is acting on behalf of their client.
 * @var string
 */
public $clientCustomerId;
 /**
 * Optional header: the login email of a client of the MCC manager. Applicable only
if an MCC manager, as identified by authToken, is acting on behalf of their client.
 * @var string
 */
public $clientEmail;
 /**
 * Developer token to identify that the person making the call has enough
quota.
 * @var string
 */
public $developerToken;
 /**
 * UserAgent is used to track distribution of API client programs and
application usage. The client is responsible for putting in a meaningful
value for tracking purposes. To be clear this is not the same as an HTTP
user agent.
 * @var string
 */
public $userAgent;
 /**
 * Used to validate the request without executing it.
 * @var boolean
 */
public $validateOnly;
 /**
 * If true, API will try to commit as many error free operations as possible and
report the other operations' errors.

Ignored for non-mutate calls.
 * @var boolean
 */
public $partialFailure;


public function __construct($authToken = null, $clientCustomerId = null, $clientEmail = null, $developerToken = null, $userAgent = null, $validateOnly = null, $partialFailure = null)
{

$this->authToken = $authToken;  $this->clientCustomerId = $clientCustomerId;  $this->clientEmail = $clientEmail;  $this->developerToken = $developerToken;  $this->userAgent = $userAgent;  $this->validateOnly = $validateOnly;  $this->partialFailure = $partialFailure; 
}


	public function getNamespace() { return 'https://adwords.google.com/api/adwords/cm/v201101'; }
	public function getXsiTypeName() { return ':xsiType'; }

/**
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
 * Defines the elements within the header of a SOAP response.
 */
class SoapResponseHeader
{
/**
 * Unique id that identifies this request. If developers have any support issues, sending us
this id will enable us to find their request more easily.
 * @var string
 */
public $requestId;
 /**
 * Number of operations performed for this SOAP request.
 * @var double
 */
public $operations;
 /**
 * Elapsed time in milliseconds between the AdWords API receiving the request and sending the
response.
 * @var double
 */
public $responseTime;
 /**
 * Total number of API units the SOAP request used.
 * @var double
 */
public $units;


public function __construct($requestId = null, $operations = null, $responseTime = null, $units = null)
{

$this->requestId = $requestId;  $this->operations = $operations;  $this->responseTime = $responseTime;  $this->units = $units; 
}


	public function getNamespace() { return 'https://adwords.google.com/api/adwords/cm/v201101'; }
	public function getXsiTypeName() { return ':xsiType'; }

/**
 * @return SoapResponseHeader
 */
public static function create() { return new self(); }

public function setRequestId($value){ $this->requestId = $value; return $this; }
public function setOperations($value){ $this->operations = $value; return $this; }
public function setResponseTime($value){ $this->responseTime = $value; return $this; }
public function setUnits($value){ $this->units = $value; return $this; }
}
/**
 * The API error base class that provides details about an error that occurred
while processing a service request.

The OGNL field path is provided for parsers to identify the request data
element that may have caused the error.
 */
class ApiError
{
/**
 * The OGNL field path to identify cause of error.
 * @var string
 */
public $fieldPath;
 /**
 * The data that caused the error.
 * @var string
 */
public $trigger;
 /**
 * A simple string representation of the error and reason.
 * @var string
 */
public $errorString;
 /**
 * This field indicates the subtype of ApiError of this instance.  It is ignored
on input, and instead xsi:type should be specified.
 * @var string
 */
public $ApiErrorType;


public function __construct($fieldPath = null, $trigger = null, $errorString = null, $ApiErrorType = null)
{

$this->fieldPath = $fieldPath;  $this->trigger = $trigger;  $this->errorString = $errorString;  $this->ApiErrorType = $ApiErrorType; 
}


private $_parameterMap = array (
	'ApiError.Type' => 'ApiErrorType',

);

public function __set($var, $value) { $this->{$this->_parameterMap[$var]} = $value; }
public function __get($var) { return array_key_exists($var, $this->_parameterMap) ? $this->{$this->_parameterMap[$var]} : null; }
protected function getParameterMap() { return $this->_parameterMap; }

	public function getNamespace() { return 'https://adwords.google.com/api/adwords/cm/v201101'; }
	public function getXsiTypeName() { return ':xsiType'; }

/**
 * @return ApiError
 */
public static function create() { return new self(); }

public function setFieldPath($value){ $this->fieldPath = $value; return $this; }
public function setTrigger($value){ $this->trigger = $value; return $this; }
public function setErrorString($value){ $this->errorString = $value; return $this; }
public function setApiErrorType($value){ $this->ApiErrorType = $value; return $this; }
}
/**
 * Exception class for holding a list of service errors.
 */
class ApiException extends ApplicationException
{
/**
 * List of errors.
 * @var ApiError
 */
public $errors;
 /**
 * Error message.
 * @var string
 */
public $message;
 /**
 * This field indicates the subtype of ApplicationException of this instance.  It is ignored
on input, and instead xsi:type should be specified.
 * @var string
 */
public $ApplicationExceptionType;


public function __construct($errors = null, $message = null, $ApplicationExceptionType = null)
{
parent::__construct($message,$ApplicationExceptionType);
$this->errors = $errors; 
}


	public function getNamespace() { return 'https://adwords.google.com/api/adwords/cm/v201101'; }
	public function getXsiTypeName() { return ':xsiType'; }

/**
 * @return ApiException extends ApplicationException
 */
public static function create() { return new self(); }

public function setErrors($value){ $this->errors = $value; return $this; }
}
/**
 * Base class for exceptions.
 */
class ApplicationException
{
/**
 * Error message.
 * @var string
 */
public $message;
 /**
 * This field indicates the subtype of ApplicationException of this instance.  It is ignored
on input, and instead xsi:type should be specified.
 * @var string
 */
public $ApplicationExceptionType;


public function __construct($message = null, $ApplicationExceptionType = null)
{

$this->message = $message;  $this->ApplicationExceptionType = $ApplicationExceptionType; 
}


private $_parameterMap = array (
	'ApplicationException.Type' => 'ApplicationExceptionType',

);

public function __set($var, $value) { $this->{$this->_parameterMap[$var]} = $value; }
public function __get($var) { return array_key_exists($var, $this->_parameterMap) ? $this->{$this->_parameterMap[$var]} : null; }
protected function getParameterMap() { return $this->_parameterMap; }

	public function getNamespace() { return 'https://adwords.google.com/api/adwords/cm/v201101'; }
	public function getXsiTypeName() { return ':xsiType'; }

/**
 * @return ApplicationException
 */
public static function create() { return new self(); }

public function setMessage($value){ $this->message = $value; return $this; }
public function setApplicationExceptionType($value){ $this->ApplicationExceptionType = $value; return $this; }
}
/**
 * Returns the API usage information based on the selection criteria specified in
the selector.

@param selector Specifies the type of usage information to return.
@return The API usage information.
@throws ApiException when there is at least one error with the request.
 */
class InfoServiceGet
{
/**
 * This field is required and should not be {@code null}.
 * @var InfoSelector
 */
public $selector;


public function __construct($selector = null)
{

$this->selector = $selector; 
}


	public function getNamespace() { return 'https://adwords.google.com/api/adwords/info/v201101'; }
	public function getXsiTypeName() { return ':xsiType'; }

/**
 * @return InfoServiceGet
 */
public static function create() { return new self(); }

public function setSelector($value){ $this->selector = $value; return $this; }
}
/**
 * 
 */
class InfoServiceGetResponse
{
/**
 * 
 * @var ApiUsageInfo
 */
public $rval;


public function __construct($rval = null)
{

$this->rval = $rval; 
}


	public function getNamespace() { return 'https://adwords.google.com/api/adwords/info/v201101'; }
	public function getXsiTypeName() { return ':xsiType'; }

/**
 * @return InfoServiceGetResponse
 */
public static function create() { return new self(); }

public function setRval($value){ $this->rval = $value; return $this; }
}
/**
 * A fault element of type ApiException.
 */
class InfoServiceApiExceptionFault
{


public function __construct()
{


}


	public function getNamespace() { return 'https://adwords.google.com/api/adwords/info/v201101'; }
	public function getXsiTypeName() { return ':xsiType'; }

/**
 * @return InfoServiceApiExceptionFault
 */
public static function create() { return new self(); }


}
/**
 * 
 */
class InfoServiceRequestHeader
{


public function __construct()
{


}


	public function getNamespace() { return 'https://adwords.google.com/api/adwords/info/v201101'; }
	public function getXsiTypeName() { return ':xsiType'; }

/**
 * @return InfoServiceRequestHeader
 */
public static function create() { return new self(); }


}
/**
 * 
 */
class InfoServiceResponseHeader
{


public function __construct()
{


}


	public function getNamespace() { return 'https://adwords.google.com/api/adwords/info/v201101'; }
	public function getXsiTypeName() { return ':xsiType'; }

/**
 * @return InfoServiceResponseHeader
 */
public static function create() { return new self(); }


}
/**
 * Enum used to represent the errors
 */
class ApiUsageErrorReason
{
/**
 * Selector validation failed.
 */
const INVALID_DATE_RANGE = 'INVALID_DATE_RANGE';
/**
 * 
 */
const SERVICE_NAME_NOT_SPECIFIED = 'SERVICE_NAME_NOT_SPECIFIED';
/**
 * 
 */
const METHOD_NAME_NOT_SPECIFIED = 'METHOD_NAME_NOT_SPECIFIED';
/**
 * 
 */
const OPERATOR_NOT_SPECIFIED = 'OPERATOR_NOT_SPECIFIED';
/**
 * 
 */
const INVALID_CLIENT_EMAIL = 'INVALID_CLIENT_EMAIL';
/**
 * Customer passed in an invalid token in the header.
 */
const INVALID_TOKEN_HEADER = 'INVALID_TOKEN_HEADER';


	public function getNamespace() { return 'https://adwords.google.com/api/adwords/info/v201101'; }
	public function getXsiTypeName() { return ':xsiType'; }
}
/**
 * Represents possible error codes in InfoService.
 */
class ApiUsageError extends ApiError
{
/**
 * The error reason represented by an enum.
 * @var ApiUsageErrorReason
 */
public $reason;
 /**
 * The OGNL field path to identify cause of error.
 * @var string
 */
public $fieldPath;
 /**
 * The data that caused the error.
 * @var string
 */
public $trigger;
 /**
 * A simple string representation of the error and reason.
 * @var string
 */
public $errorString;
 /**
 * This field indicates the subtype of ApiError of this instance.  It is ignored
on input, and instead xsi:type should be specified.
 * @var string
 */
public $ApiErrorType;


public function __construct($reason = null, $fieldPath = null, $trigger = null, $errorString = null, $ApiErrorType = null)
{
parent::__construct($fieldPath,$trigger,$errorString,$ApiErrorType);
$this->reason = $reason; 
}


	public function getNamespace() { return 'https://adwords.google.com/api/adwords/info/v201101'; }
	public function getXsiTypeName() { return ':xsiType'; }

/**
 * @return ApiUsageError extends ApiError
 */
public static function create() { return new self(); }

public function setReason($value){ $this->reason = $value; return $this; }
}
/**
 * Data record for per client API units.
 */
class ApiUsageRecord
{
/**
 * The email address of the client
 * @var string
 */
public $clientEmail;
 /**
 * The cost of the API
 * @var double
 */
public $cost;


public function __construct($clientEmail = null, $cost = null)
{

$this->clientEmail = $clientEmail;  $this->cost = $cost; 
}


	public function getNamespace() { return 'https://adwords.google.com/api/adwords/info/v201101'; }
	public function getXsiTypeName() { return ':xsiType'; }

/**
 * @return ApiUsageRecord
 */
public static function create() { return new self(); }

public function setClientEmail($value){ $this->clientEmail = $value; return $this; }
public function setCost($value){ $this->cost = $value; return $this; }
}
/**
 * Specifies the type of API usage information to be returned. API usage information
returned is based on the {@link #apiUsageType API usage type} specified. All returned
values are specific to the developer token being used to call InfoService.get.

For each of the apiUsageType values, other InfoSelector
fields must also be set as described below:


FREE_USAGE_API_UNITS_PER_MONTH : Returns the number of allocated

free API units for this entire month. Specify only the apiUsageType parameter.
TOTAL_USAGE_API_UNITS_PER_MONTH : Returns the total number of allocated API
units for this entire month. Includes both free and paid API units. Specify only the
apiUsageType parameter.
OPERATION_COUNT : Returns the number of operations recorded over the given
date range. The given dates are inclusive; to get the operation count for a single day,
supply it as both the start and end date. Specify the apiUsageType and
dateRange parameters.
UNIT_COUNT : Returns the number of API units recorded.

Specify the apiUsageType and dateRange parameters to retrieve
the units recorded over the given date range.
Specify the apiUsageType, serviceName, methodName and dateRange to
retrieve the units recorded over the given date range for a specified method.


UNIT_COUNT_FOR_CLIENTS :  Returns the number of API units recorded for a
subset of clients over the given date range. The given dates are inclusive; to get
the unit count for a single day, supply it as both the start and end date. Specify the
apiUsageType, dateRange and clientEmails parameters.
METHOD_COST : Returns the cost, in API units per operation, of the given
method on a specific date. Methods default to a cost of 1. Specify the apiUsageType,
dateRange (start date and end date should be the same), serviceName, methodName,
operator parameters.

 */
class InfoSelector
{
/**
 * The name of the service.
 * @var string
 */
public $serviceName;
 /**
 * The method whose cost has been queried.
 * @var string
 */
public $methodName;
 /**
 * Specifies the operator. This is applicable when the method is a "mutate" method.
 * @var Operator
 */
public $operator;
 /**
 * Date range to get the API usage for. The given dates are inclusive; to get the usage
information for a single day, supply it as both the start and end date.
 * @var DateRange
 */
public $dateRange;
 /**
 * List of login emails used to identify the clients to retrieve the API usage for. If the list
is null or empty, return the API usage for all clients.
 * @var string
 */
public $clientEmails;
 /**
 * The API usage type information that needs to be fetched.
This field is required and should not be {@code null}.
 * @var ApiUsageType
 */
public $apiUsageType;


public function __construct($serviceName = null, $methodName = null, $operator = null, $dateRange = null, $clientEmails = null, $apiUsageType = null)
{

$this->serviceName = $serviceName;  $this->methodName = $methodName;  $this->operator = $operator;  $this->dateRange = $dateRange;  $this->clientEmails = $clientEmails;  $this->apiUsageType = $apiUsageType; 
}


	public function getNamespace() { return 'https://adwords.google.com/api/adwords/info/v201101'; }
	public function getXsiTypeName() { return ':xsiType'; }

/**
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
 * Represents the API usage information.
 */
class ApiUsageInfo
{
/**
 * The list of API usage for the specific clients.
 * @var ApiUsageRecord
 */
public $apiUsageRecords;
 /**
 * The cost is set when the API usage is been fetched for all clients.
 * @var double
 */
public $cost;


public function __construct($apiUsageRecords = null, $cost = null)
{

$this->apiUsageRecords = $apiUsageRecords;  $this->cost = $cost; 
}


	public function getNamespace() { return 'https://adwords.google.com/api/adwords/info/v201101'; }
	public function getXsiTypeName() { return ':xsiType'; }

/**
 * @return ApiUsageInfo
 */
public static function create() { return new self(); }

public function setApiUsageRecords($value){ $this->apiUsageRecords = $value; return $this; }
public function setCost($value){ $this->cost = $value; return $this; }
}

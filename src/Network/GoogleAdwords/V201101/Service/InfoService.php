<?php


namespace AdvancedContextLib\Network\GoogleAdwords\V201101\Service;

use AdvancedContextLib\Network\GoogleAdwords\V201101\Lib\SoapClient;


/**
 * Use this service to retrieve API usage information, such as the API units
 * spent over a given date range. See the {@link InfoSelector} documentation for
 * details.
 */
class InfoService extends SoapClient
{

	/**
	 * Returns the API usage information based on the selection criteria specified in
	 * the selector.
	 * 
	 * ###param selector Specifies the type of usage information to return.
	 * ###return The API usage information.
	 * ###throws ApiException when there is at least one error with the request.
	 * @param InfoSelector $selector This field is required and should not be {@code null}.
	 * @return 
	 */
	public function get($selector)
	{

		$parameters = new get($selector);
		$result = $this->__soapCall("get", array($parameters));
		return $result->rval;
	}


	public static $classmap = array(
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
		'AuthenticationError.Reason' => 'AdvancedContextLib\Network\GoogleAdwords\V201101\Service\AuthenticationErrorReason',
		'AuthorizationError.Reason' => 'AdvancedContextLib\Network\GoogleAdwords\V201101\Service\AuthorizationErrorReason',
		'ClientTermsError.Reason' => 'AdvancedContextLib\Network\GoogleAdwords\V201101\Service\ClientTermsErrorReason',
		'EntityNotFound.Reason' => 'AdvancedContextLib\Network\GoogleAdwords\V201101\Service\EntityNotFoundReason',
		'InternalApiError.Reason' => 'AdvancedContextLib\Network\GoogleAdwords\V201101\Service\InternalApiErrorReason',
		'NotEmptyError.Reason' => 'AdvancedContextLib\Network\GoogleAdwords\V201101\Service\NotEmptyErrorReason',
		'NotWhitelistedError.Reason' => 'AdvancedContextLib\Network\GoogleAdwords\V201101\Service\NotWhitelistedErrorReason',
		'NullError.Reason' => 'AdvancedContextLib\Network\GoogleAdwords\V201101\Service\NullErrorReason',
		'Operator' => 'AdvancedContextLib\Network\GoogleAdwords\V201101\Service\Operator',
		'OperatorError.Reason' => 'AdvancedContextLib\Network\GoogleAdwords\V201101\Service\OperatorErrorReason',
		'QuotaCheckError.Reason' => 'AdvancedContextLib\Network\GoogleAdwords\V201101\Service\QuotaCheckErrorReason',
		'RateExceededError.Reason' => 'AdvancedContextLib\Network\GoogleAdwords\V201101\Service\RateExceededErrorReason',
		'ReadOnlyError.Reason' => 'AdvancedContextLib\Network\GoogleAdwords\V201101\Service\ReadOnlyErrorReason',
		'RequestError.Reason' => 'AdvancedContextLib\Network\GoogleAdwords\V201101\Service\RequestErrorReason',
		'RequiredError.Reason' => 'AdvancedContextLib\Network\GoogleAdwords\V201101\Service\RequiredErrorReason',
		'SizeLimitError.Reason' => 'AdvancedContextLib\Network\GoogleAdwords\V201101\Service\SizeLimitErrorReason',
		'ApiUsageError' => 'AdvancedContextLib\Network\GoogleAdwords\V201101\Service\ApiUsageError',
		'ApiUsageRecord' => 'AdvancedContextLib\Network\GoogleAdwords\V201101\Service\ApiUsageRecord',
		'InfoSelector' => 'AdvancedContextLib\Network\GoogleAdwords\V201101\Service\InfoSelector',
		'ApiUsageInfo' => 'AdvancedContextLib\Network\GoogleAdwords\V201101\Service\ApiUsageInfo',
		'ApiUsageError.Reason' => 'AdvancedContextLib\Network\GoogleAdwords\V201101\Service\ApiUsageErrorReason',
		'ApiUsageType' => 'AdvancedContextLib\Network\GoogleAdwords\V201101\Service\ApiUsageType',
		'get' => 'AdvancedContextLib\Network\GoogleAdwords\V201101\Service\get',
		'getResponse' => 'AdvancedContextLib\Network\GoogleAdwords\V201101\Service\getResponse',
		'ApiExceptionFault' => 'AdvancedContextLib\Network\GoogleAdwords\V201101\Service\ApiExceptionFault',
		'RequestHeader' => 'AdvancedContextLib\Network\GoogleAdwords\V201101\Service\RequestHeader',
		'ResponseHeader' => 'AdvancedContextLib\Network\GoogleAdwords\V201101\Service\ResponseHeader',
	);

	public function __construct($options) {
		$options['classmap'] = self::$classmap;
		parent::__construct($options);
	}

	public function getNamespace() { return 'https://adwords.google.com/api/adwords/info/v201101'; }
	public function getWsdl() { return 'https://adwords.google.com/api/adwords/info/v201101/InfoService?wsdl'; }
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
	 * 
	 * @param AuthenticationErrorReason $reason The error reason represented by an enum.
	 * @param string $fieldPath The OGNL field path to identify cause of error.
	 * @param string $trigger The data that caused the error.
	 * @param string $errorString A simple string representation of the error and reason.
	 * @param string $ApiErrorType This field indicates the subtype of ApiError of this instance.  It is ignoredon input, and instead xsi:type should be specified.
	 */
	public function __construct($reason = null, $fieldPath = null, $trigger = null, $errorString = null, $ApiErrorType = null)
	{
		parent::__construct($fieldPath, $trigger, $errorString, $ApiErrorType);
		$this->setReason($reason);
	}

	/**
	 * Возвращает namespace структуры
	 *
	 * @return string
	 */
	public function getNamespace() { return 'https://adwords.google.com/api/adwords/cm/v201101'; }

	/**
	 * @return AuthenticationError
	 */
	public static function create() { return new self(); }

	/**
	 * Setter for reason
	 * @param AuthenticationErrorReason $reason The error reason represented by an enum.
	 * @return AuthenticationError
	 */
	public function setReason($reason)
	{
		$this->reason = $reason;
		return $this;
	}
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
	 * 
	 * @param AuthorizationErrorReason $reason The error reason represented by an enum.
	 * @param string $fieldPath The OGNL field path to identify cause of error.
	 * @param string $trigger The data that caused the error.
	 * @param string $errorString A simple string representation of the error and reason.
	 * @param string $ApiErrorType This field indicates the subtype of ApiError of this instance.  It is ignoredon input, and instead xsi:type should be specified.
	 */
	public function __construct($reason = null, $fieldPath = null, $trigger = null, $errorString = null, $ApiErrorType = null)
	{
		parent::__construct($fieldPath, $trigger, $errorString, $ApiErrorType);
		$this->setReason($reason);
	}

	/**
	 * Возвращает namespace структуры
	 *
	 * @return string
	 */
	public function getNamespace() { return 'https://adwords.google.com/api/adwords/cm/v201101'; }

	/**
	 * @return AuthorizationError
	 */
	public static function create() { return new self(); }

	/**
	 * Setter for reason
	 * @param AuthorizationErrorReason $reason The error reason represented by an enum.
	 * @return AuthorizationError
	 */
	public function setReason($reason)
	{
		$this->reason = $reason;
		return $this;
	}
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
	 * 
	 * @param ClientTermsErrorReason $reason 
	 * @param string $fieldPath The OGNL field path to identify cause of error.
	 * @param string $trigger The data that caused the error.
	 * @param string $errorString A simple string representation of the error and reason.
	 * @param string $ApiErrorType This field indicates the subtype of ApiError of this instance.  It is ignoredon input, and instead xsi:type should be specified.
	 */
	public function __construct($reason = null, $fieldPath = null, $trigger = null, $errorString = null, $ApiErrorType = null)
	{
		parent::__construct($fieldPath, $trigger, $errorString, $ApiErrorType);
		$this->setReason($reason);
	}

	/**
	 * Возвращает namespace структуры
	 *
	 * @return string
	 */
	public function getNamespace() { return 'https://adwords.google.com/api/adwords/cm/v201101'; }

	/**
	 * @return ClientTermsError
	 */
	public static function create() { return new self(); }

	/**
	 * Setter for reason
	 * @param ClientTermsErrorReason $reason 
	 * @return ClientTermsError
	 */
	public function setReason($reason)
	{
		$this->reason = $reason;
		return $this;
	}
}



/**
 * Represents a range of dates that has either an upper or a lower bound.
 * The format for the date is YYYYMMDD.
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

	/**
	 * 
	 * @param string $min the lower bound of this date range, inclusive.
	 * @param string $max the upper bound of this date range, inclusive.
	 */
	public function __construct($min = null, $max = null)
	{
		$this->setMin($min);
		$this->setMax($max);
	}

	/**
	 * Возвращает namespace структуры
	 *
	 * @return string
	 */
	public function getNamespace() { return 'https://adwords.google.com/api/adwords/cm/v201101'; }

	/**
	 * @return DateRange
	 */
	public static function create() { return new self(); }

	/**
	 * Setter for min
	 * @param string $min the lower bound of this date range, inclusive.
	 * @return DateRange
	 */
	public function setMin($min)
	{
		$this->min = $min;
		return $this;
	}

	/**
	 * Setter for max
	 * @param string $max the upper bound of this date range, inclusive.
	 * @return DateRange
	 */
	public function setMax($max)
	{
		$this->max = $max;
		return $this;
	}
}



/**
 * An id did not correspond to an entity, or it referred to an entity which does not belong to the
 * customer.
 */
class EntityNotFound extends ApiError 
{

	/**
	 * Reason for this error.
	 * @var EntityNotFoundReason
	 */
	public $reason;

	/**
	 * 
	 * @param EntityNotFoundReason $reason Reason for this error.
	 * @param string $fieldPath The OGNL field path to identify cause of error.
	 * @param string $trigger The data that caused the error.
	 * @param string $errorString A simple string representation of the error and reason.
	 * @param string $ApiErrorType This field indicates the subtype of ApiError of this instance.  It is ignoredon input, and instead xsi:type should be specified.
	 */
	public function __construct($reason = null, $fieldPath = null, $trigger = null, $errorString = null, $ApiErrorType = null)
	{
		parent::__construct($fieldPath, $trigger, $errorString, $ApiErrorType);
		$this->setReason($reason);
	}

	/**
	 * Возвращает namespace структуры
	 *
	 * @return string
	 */
	public function getNamespace() { return 'https://adwords.google.com/api/adwords/cm/v201101'; }

	/**
	 * @return EntityNotFound
	 */
	public static function create() { return new self(); }

	/**
	 * Setter for reason
	 * @param EntityNotFoundReason $reason Reason for this error.
	 * @return EntityNotFound
	 */
	public function setReason($reason)
	{
		$this->reason = $reason;
		return $this;
	}
}



/**
 * Indicates that a server-side error has occured. {@code InternalApiError}s
 * are generally not the result of an invalid request or message sent by the
 * client.
 */
class InternalApiError extends ApiError 
{

	/**
	 * The error reason represented by an enum.
	 * @var InternalApiErrorReason
	 */
	public $reason;

	/**
	 * 
	 * @param InternalApiErrorReason $reason The error reason represented by an enum.
	 * @param string $fieldPath The OGNL field path to identify cause of error.
	 * @param string $trigger The data that caused the error.
	 * @param string $errorString A simple string representation of the error and reason.
	 * @param string $ApiErrorType This field indicates the subtype of ApiError of this instance.  It is ignoredon input, and instead xsi:type should be specified.
	 */
	public function __construct($reason = null, $fieldPath = null, $trigger = null, $errorString = null, $ApiErrorType = null)
	{
		parent::__construct($fieldPath, $trigger, $errorString, $ApiErrorType);
		$this->setReason($reason);
	}

	/**
	 * Возвращает namespace структуры
	 *
	 * @return string
	 */
	public function getNamespace() { return 'https://adwords.google.com/api/adwords/cm/v201101'; }

	/**
	 * @return InternalApiError
	 */
	public static function create() { return new self(); }

	/**
	 * Setter for reason
	 * @param InternalApiErrorReason $reason The error reason represented by an enum.
	 * @return InternalApiError
	 */
	public function setReason($reason)
	{
		$this->reason = $reason;
		return $this;
	}
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
	 * 
	 * @param NotEmptyErrorReason $reason The error reason represented by an enum.
	 * @param string $fieldPath The OGNL field path to identify cause of error.
	 * @param string $trigger The data that caused the error.
	 * @param string $errorString A simple string representation of the error and reason.
	 * @param string $ApiErrorType This field indicates the subtype of ApiError of this instance.  It is ignoredon input, and instead xsi:type should be specified.
	 */
	public function __construct($reason = null, $fieldPath = null, $trigger = null, $errorString = null, $ApiErrorType = null)
	{
		parent::__construct($fieldPath, $trigger, $errorString, $ApiErrorType);
		$this->setReason($reason);
	}

	/**
	 * Возвращает namespace структуры
	 *
	 * @return string
	 */
	public function getNamespace() { return 'https://adwords.google.com/api/adwords/cm/v201101'; }

	/**
	 * @return NotEmptyError
	 */
	public static function create() { return new self(); }

	/**
	 * Setter for reason
	 * @param NotEmptyErrorReason $reason The error reason represented by an enum.
	 * @return NotEmptyError
	 */
	public function setReason($reason)
	{
		$this->reason = $reason;
		return $this;
	}
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
	 * 
	 * @param NotWhitelistedErrorReason $reason The error reason represented by an enum.
	 * @param string $fieldPath The OGNL field path to identify cause of error.
	 * @param string $trigger The data that caused the error.
	 * @param string $errorString A simple string representation of the error and reason.
	 * @param string $ApiErrorType This field indicates the subtype of ApiError of this instance.  It is ignoredon input, and instead xsi:type should be specified.
	 */
	public function __construct($reason = null, $fieldPath = null, $trigger = null, $errorString = null, $ApiErrorType = null)
	{
		parent::__construct($fieldPath, $trigger, $errorString, $ApiErrorType);
		$this->setReason($reason);
	}

	/**
	 * Возвращает namespace структуры
	 *
	 * @return string
	 */
	public function getNamespace() { return 'https://adwords.google.com/api/adwords/cm/v201101'; }

	/**
	 * @return NotWhitelistedError
	 */
	public static function create() { return new self(); }

	/**
	 * Setter for reason
	 * @param NotWhitelistedErrorReason $reason The error reason represented by an enum.
	 * @return NotWhitelistedError
	 */
	public function setReason($reason)
	{
		$this->reason = $reason;
		return $this;
	}
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
	 * 
	 * @param NullErrorReason $reason The error reason represented by an enum.
	 * @param string $fieldPath The OGNL field path to identify cause of error.
	 * @param string $trigger The data that caused the error.
	 * @param string $errorString A simple string representation of the error and reason.
	 * @param string $ApiErrorType This field indicates the subtype of ApiError of this instance.  It is ignoredon input, and instead xsi:type should be specified.
	 */
	public function __construct($reason = null, $fieldPath = null, $trigger = null, $errorString = null, $ApiErrorType = null)
	{
		parent::__construct($fieldPath, $trigger, $errorString, $ApiErrorType);
		$this->setReason($reason);
	}

	/**
	 * Возвращает namespace структуры
	 *
	 * @return string
	 */
	public function getNamespace() { return 'https://adwords.google.com/api/adwords/cm/v201101'; }

	/**
	 * @return NullError
	 */
	public static function create() { return new self(); }

	/**
	 * Setter for reason
	 * @param NullErrorReason $reason The error reason represented by an enum.
	 * @return NullError
	 */
	public function setReason($reason)
	{
		$this->reason = $reason;
		return $this;
	}
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
	 * 
	 * @param OperatorErrorReason $reason The error reason represented by an enum.
	 * @param string $fieldPath The OGNL field path to identify cause of error.
	 * @param string $trigger The data that caused the error.
	 * @param string $errorString A simple string representation of the error and reason.
	 * @param string $ApiErrorType This field indicates the subtype of ApiError of this instance.  It is ignoredon input, and instead xsi:type should be specified.
	 */
	public function __construct($reason = null, $fieldPath = null, $trigger = null, $errorString = null, $ApiErrorType = null)
	{
		parent::__construct($fieldPath, $trigger, $errorString, $ApiErrorType);
		$this->setReason($reason);
	}

	/**
	 * Возвращает namespace структуры
	 *
	 * @return string
	 */
	public function getNamespace() { return 'https://adwords.google.com/api/adwords/cm/v201101'; }

	/**
	 * @return OperatorError
	 */
	public static function create() { return new self(); }

	/**
	 * Setter for reason
	 * @param OperatorErrorReason $reason The error reason represented by an enum.
	 * @return OperatorError
	 */
	public function setReason($reason)
	{
		$this->reason = $reason;
		return $this;
	}
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
	 * 
	 * @param QuotaCheckErrorReason $reason 
	 * @param string $fieldPath The OGNL field path to identify cause of error.
	 * @param string $trigger The data that caused the error.
	 * @param string $errorString A simple string representation of the error and reason.
	 * @param string $ApiErrorType This field indicates the subtype of ApiError of this instance.  It is ignoredon input, and instead xsi:type should be specified.
	 */
	public function __construct($reason = null, $fieldPath = null, $trigger = null, $errorString = null, $ApiErrorType = null)
	{
		parent::__construct($fieldPath, $trigger, $errorString, $ApiErrorType);
		$this->setReason($reason);
	}

	/**
	 * Возвращает namespace структуры
	 *
	 * @return string
	 */
	public function getNamespace() { return 'https://adwords.google.com/api/adwords/cm/v201101'; }

	/**
	 * @return QuotaCheckError
	 */
	public static function create() { return new self(); }

	/**
	 * Setter for reason
	 * @param QuotaCheckErrorReason $reason 
	 * @return QuotaCheckError
	 */
	public function setReason($reason)
	{
		$this->reason = $reason;
		return $this;
	}
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
	 * 
	 * @param RateExceededErrorReason $reason The error reason represented by an enum.
	 * @param string $rateName Cause of the rate exceeded error.
	 * @param string $rateScope The scope of the rate (ACCOUNT/DEVELOPER).
	 * @param integer $retryAfterSeconds The amount of time (in seconds) the client should wait before retrying the request.
	 * @param string $fieldPath The OGNL field path to identify cause of error.
	 * @param string $trigger The data that caused the error.
	 * @param string $errorString A simple string representation of the error and reason.
	 * @param string $ApiErrorType This field indicates the subtype of ApiError of this instance.  It is ignoredon input, and instead xsi:type should be specified.
	 */
	public function __construct($reason = null, $rateName = null, $rateScope = null, $retryAfterSeconds = null, $fieldPath = null, $trigger = null, $errorString = null, $ApiErrorType = null)
	{
		parent::__construct($fieldPath, $trigger, $errorString, $ApiErrorType);
		$this->setReason($reason);
		$this->setRateName($rateName);
		$this->setRateScope($rateScope);
		$this->setRetryAfterSeconds($retryAfterSeconds);
	}

	/**
	 * Возвращает namespace структуры
	 *
	 * @return string
	 */
	public function getNamespace() { return 'https://adwords.google.com/api/adwords/cm/v201101'; }

	/**
	 * @return RateExceededError
	 */
	public static function create() { return new self(); }

	/**
	 * Setter for reason
	 * @param RateExceededErrorReason $reason The error reason represented by an enum.
	 * @return RateExceededError
	 */
	public function setReason($reason)
	{
		$this->reason = $reason;
		return $this;
	}

	/**
	 * Setter for rateName
	 * @param string $rateName Cause of the rate exceeded error.
	 * @return RateExceededError
	 */
	public function setRateName($rateName)
	{
		$this->rateName = $rateName;
		return $this;
	}

	/**
	 * Setter for rateScope
	 * @param string $rateScope The scope of the rate (ACCOUNT/DEVELOPER).
	 * @return RateExceededError
	 */
	public function setRateScope($rateScope)
	{
		$this->rateScope = $rateScope;
		return $this;
	}

	/**
	 * Setter for retryAfterSeconds
	 * @param integer $retryAfterSeconds The amount of time (in seconds) the client should wait before retrying the request.
	 * @return RateExceededError
	 */
	public function setRetryAfterSeconds($retryAfterSeconds)
	{
		$this->retryAfterSeconds = $retryAfterSeconds;
		return $this;
	}
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
	 * 
	 * @param ReadOnlyErrorReason $reason The error reason represented by an enum.
	 * @param string $fieldPath The OGNL field path to identify cause of error.
	 * @param string $trigger The data that caused the error.
	 * @param string $errorString A simple string representation of the error and reason.
	 * @param string $ApiErrorType This field indicates the subtype of ApiError of this instance.  It is ignoredon input, and instead xsi:type should be specified.
	 */
	public function __construct($reason = null, $fieldPath = null, $trigger = null, $errorString = null, $ApiErrorType = null)
	{
		parent::__construct($fieldPath, $trigger, $errorString, $ApiErrorType);
		$this->setReason($reason);
	}

	/**
	 * Возвращает namespace структуры
	 *
	 * @return string
	 */
	public function getNamespace() { return 'https://adwords.google.com/api/adwords/cm/v201101'; }

	/**
	 * @return ReadOnlyError
	 */
	public static function create() { return new self(); }

	/**
	 * Setter for reason
	 * @param ReadOnlyErrorReason $reason The error reason represented by an enum.
	 * @return ReadOnlyError
	 */
	public function setReason($reason)
	{
		$this->reason = $reason;
		return $this;
	}
}



/**
 * Encapsulates the generic errors thrown when there&#039;s an error with user
 * request.
 */
class RequestError extends ApiError 
{

	/**
	 * 
	 * @var RequestErrorReason
	 */
	public $reason;

	/**
	 * 
	 * @param RequestErrorReason $reason 
	 * @param string $fieldPath The OGNL field path to identify cause of error.
	 * @param string $trigger The data that caused the error.
	 * @param string $errorString A simple string representation of the error and reason.
	 * @param string $ApiErrorType This field indicates the subtype of ApiError of this instance.  It is ignoredon input, and instead xsi:type should be specified.
	 */
	public function __construct($reason = null, $fieldPath = null, $trigger = null, $errorString = null, $ApiErrorType = null)
	{
		parent::__construct($fieldPath, $trigger, $errorString, $ApiErrorType);
		$this->setReason($reason);
	}

	/**
	 * Возвращает namespace структуры
	 *
	 * @return string
	 */
	public function getNamespace() { return 'https://adwords.google.com/api/adwords/cm/v201101'; }

	/**
	 * @return RequestError
	 */
	public static function create() { return new self(); }

	/**
	 * Setter for reason
	 * @param RequestErrorReason $reason 
	 * @return RequestError
	 */
	public function setReason($reason)
	{
		$this->reason = $reason;
		return $this;
	}
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
	 * 
	 * @param RequiredErrorReason $reason The error reason represented by an enum.
	 * @param string $fieldPath The OGNL field path to identify cause of error.
	 * @param string $trigger The data that caused the error.
	 * @param string $errorString A simple string representation of the error and reason.
	 * @param string $ApiErrorType This field indicates the subtype of ApiError of this instance.  It is ignoredon input, and instead xsi:type should be specified.
	 */
	public function __construct($reason = null, $fieldPath = null, $trigger = null, $errorString = null, $ApiErrorType = null)
	{
		parent::__construct($fieldPath, $trigger, $errorString, $ApiErrorType);
		$this->setReason($reason);
	}

	/**
	 * Возвращает namespace структуры
	 *
	 * @return string
	 */
	public function getNamespace() { return 'https://adwords.google.com/api/adwords/cm/v201101'; }

	/**
	 * @return RequiredError
	 */
	public static function create() { return new self(); }

	/**
	 * Setter for reason
	 * @param RequiredErrorReason $reason The error reason represented by an enum.
	 * @return RequiredError
	 */
	public function setReason($reason)
	{
		$this->reason = $reason;
		return $this;
	}
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
	 * 
	 * @param SizeLimitErrorReason $reason The error reason represented by an enum.
	 * @param string $fieldPath The OGNL field path to identify cause of error.
	 * @param string $trigger The data that caused the error.
	 * @param string $errorString A simple string representation of the error and reason.
	 * @param string $ApiErrorType This field indicates the subtype of ApiError of this instance.  It is ignoredon input, and instead xsi:type should be specified.
	 */
	public function __construct($reason = null, $fieldPath = null, $trigger = null, $errorString = null, $ApiErrorType = null)
	{
		parent::__construct($fieldPath, $trigger, $errorString, $ApiErrorType);
		$this->setReason($reason);
	}

	/**
	 * Возвращает namespace структуры
	 *
	 * @return string
	 */
	public function getNamespace() { return 'https://adwords.google.com/api/adwords/cm/v201101'; }

	/**
	 * @return SizeLimitError
	 */
	public static function create() { return new self(); }

	/**
	 * Setter for reason
	 * @param SizeLimitErrorReason $reason The error reason represented by an enum.
	 * @return SizeLimitError
	 */
	public function setReason($reason)
	{
		$this->reason = $reason;
		return $this;
	}
}



/**
 * Defines the required and optional elements within the header of a SOAP request.
 */
class SoapHeader 
{

	/**
	 * Authentication token from Google ClientLogin API. Developers need to authenticate themselveswith that API before they can send a request to AdWords API. This header identifies either theMCC manager acting on behalf of their client, or the advertiser managing their own account.
	 * @var string
	 */
	public $authToken;

	/**
	 * Optional header: the customer id of the client of the MCC manager. Applicable onlyif an MCC manager, as identified by authToken, is acting on behalf of their client.
	 * @var string
	 */
	public $clientCustomerId;

	/**
	 * Optional header: the login email of a client of the MCC manager. Applicable onlyif an MCC manager, as identified by authToken, is acting on behalf of their client.
	 * @var string
	 */
	public $clientEmail;

	/**
	 * Developer token to identify that the person making the call has enoughquota.
	 * @var string
	 */
	public $developerToken;

	/**
	 * UserAgent is used to track distribution of API client programs andapplication usage. The client is responsible for putting in a meaningfulvalue for tracking purposes. To be clear this is not the same as an HTTPuser agent.
	 * @var string
	 */
	public $userAgent;

	/**
	 * Used to validate the request without executing it.
	 * @var boolean
	 */
	public $validateOnly;

	/**
	 * If true, API will try to commit as many error free operations as possible andreport the other operations&#039; errors.Ignored for non-mutate calls.
	 * @var boolean
	 */
	public $partialFailure;

	/**
	 * 
	 * @param string $authToken Authentication token from Google ClientLogin API. Developers need to authenticate themselveswith that API before they can send a request to AdWords API. This header identifies either theMCC manager acting on behalf of their client, or the advertiser managing their own account.
	 * @param string $clientCustomerId Optional header: the customer id of the client of the MCC manager. Applicable onlyif an MCC manager, as identified by authToken, is acting on behalf of their client.
	 * @param string $clientEmail Optional header: the login email of a client of the MCC manager. Applicable onlyif an MCC manager, as identified by authToken, is acting on behalf of their client.
	 * @param string $developerToken Developer token to identify that the person making the call has enoughquota.
	 * @param string $userAgent UserAgent is used to track distribution of API client programs andapplication usage. The client is responsible for putting in a meaningfulvalue for tracking purposes. To be clear this is not the same as an HTTPuser agent.
	 * @param boolean $validateOnly Used to validate the request without executing it.
	 * @param boolean $partialFailure If true, API will try to commit as many error free operations as possible andreport the other operations&#039; errors.Ignored for non-mutate calls.
	 */
	public function __construct($authToken = null, $clientCustomerId = null, $clientEmail = null, $developerToken = null, $userAgent = null, $validateOnly = null, $partialFailure = null)
	{
		$this->setAuthToken($authToken);
		$this->setClientCustomerId($clientCustomerId);
		$this->setClientEmail($clientEmail);
		$this->setDeveloperToken($developerToken);
		$this->setUserAgent($userAgent);
		$this->setValidateOnly($validateOnly);
		$this->setPartialFailure($partialFailure);
	}

	/**
	 * Возвращает namespace структуры
	 *
	 * @return string
	 */
	public function getNamespace() { return 'https://adwords.google.com/api/adwords/cm/v201101'; }

	/**
	 * @return SoapHeader
	 */
	public static function create() { return new self(); }

	/**
	 * Setter for authToken
	 * @param string $authToken Authentication token from Google ClientLogin API. Developers need to authenticate themselveswith that API before they can send a request to AdWords API. This header identifies either theMCC manager acting on behalf of their client, or the advertiser managing their own account.
	 * @return SoapHeader
	 */
	public function setAuthToken($authToken)
	{
		$this->authToken = $authToken;
		return $this;
	}

	/**
	 * Setter for clientCustomerId
	 * @param string $clientCustomerId Optional header: the customer id of the client of the MCC manager. Applicable onlyif an MCC manager, as identified by authToken, is acting on behalf of their client.
	 * @return SoapHeader
	 */
	public function setClientCustomerId($clientCustomerId)
	{
		$this->clientCustomerId = $clientCustomerId;
		return $this;
	}

	/**
	 * Setter for clientEmail
	 * @param string $clientEmail Optional header: the login email of a client of the MCC manager. Applicable onlyif an MCC manager, as identified by authToken, is acting on behalf of their client.
	 * @return SoapHeader
	 */
	public function setClientEmail($clientEmail)
	{
		$this->clientEmail = $clientEmail;
		return $this;
	}

	/**
	 * Setter for developerToken
	 * @param string $developerToken Developer token to identify that the person making the call has enoughquota.
	 * @return SoapHeader
	 */
	public function setDeveloperToken($developerToken)
	{
		$this->developerToken = $developerToken;
		return $this;
	}

	/**
	 * Setter for userAgent
	 * @param string $userAgent UserAgent is used to track distribution of API client programs andapplication usage. The client is responsible for putting in a meaningfulvalue for tracking purposes. To be clear this is not the same as an HTTPuser agent.
	 * @return SoapHeader
	 */
	public function setUserAgent($userAgent)
	{
		$this->userAgent = $userAgent;
		return $this;
	}

	/**
	 * Setter for validateOnly
	 * @param boolean $validateOnly Used to validate the request without executing it.
	 * @return SoapHeader
	 */
	public function setValidateOnly($validateOnly)
	{
		$this->validateOnly = $validateOnly;
		return $this;
	}

	/**
	 * Setter for partialFailure
	 * @param boolean $partialFailure If true, API will try to commit as many error free operations as possible andreport the other operations&#039; errors.Ignored for non-mutate calls.
	 * @return SoapHeader
	 */
	public function setPartialFailure($partialFailure)
	{
		$this->partialFailure = $partialFailure;
		return $this;
	}
}



/**
 * Defines the elements within the header of a SOAP response.
 */
class SoapResponseHeader 
{

	/**
	 * Unique id that identifies this request. If developers have any support issues, sending usthis id will enable us to find their request more easily.
	 * @var string
	 */
	public $requestId;

	/**
	 * Number of operations performed for this SOAP request.
	 * @var double
	 */
	public $operations;

	/**
	 * Elapsed time in milliseconds between the AdWords API receiving the request and sending theresponse.
	 * @var double
	 */
	public $responseTime;

	/**
	 * Total number of API units the SOAP request used.
	 * @var double
	 */
	public $units;

	/**
	 * 
	 * @param string $requestId Unique id that identifies this request. If developers have any support issues, sending usthis id will enable us to find their request more easily.
	 * @param double $operations Number of operations performed for this SOAP request.
	 * @param double $responseTime Elapsed time in milliseconds between the AdWords API receiving the request and sending theresponse.
	 * @param double $units Total number of API units the SOAP request used.
	 */
	public function __construct($requestId = null, $operations = null, $responseTime = null, $units = null)
	{
		$this->setRequestId($requestId);
		$this->setOperations($operations);
		$this->setResponseTime($responseTime);
		$this->setUnits($units);
	}

	/**
	 * Возвращает namespace структуры
	 *
	 * @return string
	 */
	public function getNamespace() { return 'https://adwords.google.com/api/adwords/cm/v201101'; }

	/**
	 * @return SoapResponseHeader
	 */
	public static function create() { return new self(); }

	/**
	 * Setter for requestId
	 * @param string $requestId Unique id that identifies this request. If developers have any support issues, sending usthis id will enable us to find their request more easily.
	 * @return SoapResponseHeader
	 */
	public function setRequestId($requestId)
	{
		$this->requestId = $requestId;
		return $this;
	}

	/**
	 * Setter for operations
	 * @param double $operations Number of operations performed for this SOAP request.
	 * @return SoapResponseHeader
	 */
	public function setOperations($operations)
	{
		$this->operations = $operations;
		return $this;
	}

	/**
	 * Setter for responseTime
	 * @param double $responseTime Elapsed time in milliseconds between the AdWords API receiving the request and sending theresponse.
	 * @return SoapResponseHeader
	 */
	public function setResponseTime($responseTime)
	{
		$this->responseTime = $responseTime;
		return $this;
	}

	/**
	 * Setter for units
	 * @param double $units Total number of API units the SOAP request used.
	 * @return SoapResponseHeader
	 */
	public function setUnits($units)
	{
		$this->units = $units;
		return $this;
	}
}



/**
 * The API error base class that provides details about an error that occurred
 * while processing a service request.
 * 
 * The OGNL field path is provided for parsers to identify the request data
 * element that may have caused the error.
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
	 * This field indicates the subtype of ApiError of this instance.  It is ignoredon input, and instead xsi:type should be specified.
	 * @var string
	 */
	public $ApiErrorType;

	/**
	 * 
	 * @param string $fieldPath The OGNL field path to identify cause of error.
	 * @param string $trigger The data that caused the error.
	 * @param string $errorString A simple string representation of the error and reason.
	 * @param string $ApiErrorType This field indicates the subtype of ApiError of this instance.  It is ignoredon input, and instead xsi:type should be specified.
	 */
	public function __construct($fieldPath = null, $trigger = null, $errorString = null, $ApiErrorType = null)
	{
		$this->setFieldPath($fieldPath);
		$this->setTrigger($trigger);
		$this->setErrorString($errorString);
		$this->setApiErrorType($ApiErrorType);
	}

	/**
	 * Возвращает namespace структуры
	 *
	 * @return string
	 */
	public function getNamespace() { return 'https://adwords.google.com/api/adwords/cm/v201101'; }

	/**
	 * @return ApiError
	 */
	public static function create() { return new self(); }

	/**
	 * Setter for fieldPath
	 * @param string $fieldPath The OGNL field path to identify cause of error.
	 * @return ApiError
	 */
	public function setFieldPath($fieldPath)
	{
		$this->fieldPath = $fieldPath;
		return $this;
	}

	/**
	 * Setter for trigger
	 * @param string $trigger The data that caused the error.
	 * @return ApiError
	 */
	public function setTrigger($trigger)
	{
		$this->trigger = $trigger;
		return $this;
	}

	/**
	 * Setter for errorString
	 * @param string $errorString A simple string representation of the error and reason.
	 * @return ApiError
	 */
	public function setErrorString($errorString)
	{
		$this->errorString = $errorString;
		return $this;
	}

	/**
	 * Setter for ApiErrorType
	 * @param string $ApiErrorType This field indicates the subtype of ApiError of this instance.  It is ignoredon input, and instead xsi:type should be specified.
	 * @return ApiError
	 */
	public function setApiErrorType($ApiErrorType)
	{
		$this->ApiErrorType = $ApiErrorType;
		return $this;
	}

	/**
	 * Wsdl to php parameter map
	 */
	private $_parameterMap = array (
		'ApiError.Type' => 'ApiErrorType',
	);

	public function __set($var, $value)
	{
		$this->{'set'.ucfirst($this->_parameterMap[$var])}($value);
	}

	public function __get($var)
	{
		return array_key_exists($var, $this->_parameterMap) ? $this->{$this->_parameterMap[$var]} : null;
	}

	private function getParameterMap()
	{
		return $this->_parameterMap;
	}
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
	 * 
	 * @param ApiError $errors List of errors.
	 * @param string $message Error message.
	 * @param string $ApplicationExceptionType This field indicates the subtype of ApplicationException of this instance.  It is ignoredon input, and instead xsi:type should be specified.
	 */
	public function __construct($errors = null, $message = null, $ApplicationExceptionType = null)
	{
		parent::__construct($message, $ApplicationExceptionType);
		$this->setErrors($errors);
	}

	/**
	 * Возвращает namespace структуры
	 *
	 * @return string
	 */
	public function getNamespace() { return 'https://adwords.google.com/api/adwords/cm/v201101'; }

	/**
	 * @return ApiException
	 */
	public static function create() { return new self(); }

	/**
	 * Setter for errors
	 * @param ApiError $errors List of errors.
	 * @return ApiException
	 */
	public function setErrors($errors)
	{
		$this->errors = $errors;
		return $this;
	}
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
	 * This field indicates the subtype of ApplicationException of this instance.  It is ignoredon input, and instead xsi:type should be specified.
	 * @var string
	 */
	public $ApplicationExceptionType;

	/**
	 * 
	 * @param string $message Error message.
	 * @param string $ApplicationExceptionType This field indicates the subtype of ApplicationException of this instance.  It is ignoredon input, and instead xsi:type should be specified.
	 */
	public function __construct($message = null, $ApplicationExceptionType = null)
	{
		$this->setMessage($message);
		$this->setApplicationExceptionType($ApplicationExceptionType);
	}

	/**
	 * Возвращает namespace структуры
	 *
	 * @return string
	 */
	public function getNamespace() { return 'https://adwords.google.com/api/adwords/cm/v201101'; }

	/**
	 * @return ApplicationException
	 */
	public static function create() { return new self(); }

	/**
	 * Setter for message
	 * @param string $message Error message.
	 * @return ApplicationException
	 */
	public function setMessage($message)
	{
		$this->message = $message;
		return $this;
	}

	/**
	 * Setter for ApplicationExceptionType
	 * @param string $ApplicationExceptionType This field indicates the subtype of ApplicationException of this instance.  It is ignoredon input, and instead xsi:type should be specified.
	 * @return ApplicationException
	 */
	public function setApplicationExceptionType($ApplicationExceptionType)
	{
		$this->ApplicationExceptionType = $ApplicationExceptionType;
		return $this;
	}

	/**
	 * Wsdl to php parameter map
	 */
	private $_parameterMap = array (
		'ApplicationException.Type' => 'ApplicationExceptionType',
	);

	public function __set($var, $value)
	{
		$this->{'set'.ucfirst($this->_parameterMap[$var])}($value);
	}

	public function __get($var)
	{
		return array_key_exists($var, $this->_parameterMap) ? $this->{$this->_parameterMap[$var]} : null;
	}

	private function getParameterMap()
	{
		return $this->_parameterMap;
	}
}



/**
 * The single reason for the authentication failure.
 */
class AuthenticationErrorReason 
{


	/**
	 * Возвращает namespace структуры
	 *
	 * @return string
	 */
	public function getNamespace() { return 'https://adwords.google.com/api/adwords/cm/v201101'; }

	/**
	 * @return AuthenticationErrorReason
	 */
	public static function create() { return new self(); }
}



/**
 * The reasons for the database error.
 */
class AuthorizationErrorReason 
{


	/**
	 * Возвращает namespace структуры
	 *
	 * @return string
	 */
	public function getNamespace() { return 'https://adwords.google.com/api/adwords/cm/v201101'; }

	/**
	 * @return AuthorizationErrorReason
	 */
	public static function create() { return new self(); }
}



/**
 * Enums for the various reasons an error can be thrown as a result of
 * ClientTerms violation.
 */
class ClientTermsErrorReason 
{


	/**
	 * Возвращает namespace структуры
	 *
	 * @return string
	 */
	public function getNamespace() { return 'https://adwords.google.com/api/adwords/cm/v201101'; }

	/**
	 * @return ClientTermsErrorReason
	 */
	public static function create() { return new self(); }
}



/**
 * 
 */
class EntityNotFoundReason 
{


	/**
	 * Возвращает namespace структуры
	 *
	 * @return string
	 */
	public function getNamespace() { return 'https://adwords.google.com/api/adwords/cm/v201101'; }

	/**
	 * @return EntityNotFoundReason
	 */
	public static function create() { return new self(); }
}



/**
 * The single reason for the internal API error.
 */
class InternalApiErrorReason 
{


	/**
	 * Возвращает namespace структуры
	 *
	 * @return string
	 */
	public function getNamespace() { return 'https://adwords.google.com/api/adwords/cm/v201101'; }

	/**
	 * @return InternalApiErrorReason
	 */
	public static function create() { return new self(); }
}



/**
 * The reasons for the validation error.
 */
class NotEmptyErrorReason 
{


	/**
	 * Возвращает namespace структуры
	 *
	 * @return string
	 */
	public function getNamespace() { return 'https://adwords.google.com/api/adwords/cm/v201101'; }

	/**
	 * @return NotEmptyErrorReason
	 */
	public static function create() { return new self(); }
}



/**
 * The single reason for the whitelist error.
 */
class NotWhitelistedErrorReason 
{


	/**
	 * Возвращает namespace структуры
	 *
	 * @return string
	 */
	public function getNamespace() { return 'https://adwords.google.com/api/adwords/cm/v201101'; }

	/**
	 * @return NotWhitelistedErrorReason
	 */
	public static function create() { return new self(); }
}



/**
 * The reasons for the validation error.
 */
class NullErrorReason 
{


	/**
	 * Возвращает namespace структуры
	 *
	 * @return string
	 */
	public function getNamespace() { return 'https://adwords.google.com/api/adwords/cm/v201101'; }

	/**
	 * @return NullErrorReason
	 */
	public static function create() { return new self(); }
}



/**
 * This represents an operator that may be presented to an adsapi service.
 */
class Operator 
{


	/**
	 * Возвращает namespace структуры
	 *
	 * @return string
	 */
	public function getNamespace() { return 'https://adwords.google.com/api/adwords/cm/v201101'; }

	/**
	 * @return Operator
	 */
	public static function create() { return new self(); }
}



/**
 * The reasons for the validation error.
 */
class OperatorErrorReason 
{


	/**
	 * Возвращает namespace структуры
	 *
	 * @return string
	 */
	public function getNamespace() { return 'https://adwords.google.com/api/adwords/cm/v201101'; }

	/**
	 * @return OperatorErrorReason
	 */
	public static function create() { return new self(); }
}



/**
 * Enums for all the reasons an error can be thrown to the user during
 * billing quota checks.
 */
class QuotaCheckErrorReason 
{


	/**
	 * Возвращает namespace структуры
	 *
	 * @return string
	 */
	public function getNamespace() { return 'https://adwords.google.com/api/adwords/cm/v201101'; }

	/**
	 * @return QuotaCheckErrorReason
	 */
	public static function create() { return new self(); }
}



/**
 * The reason for the rate exceeded error.
 */
class RateExceededErrorReason 
{


	/**
	 * Возвращает namespace структуры
	 *
	 * @return string
	 */
	public function getNamespace() { return 'https://adwords.google.com/api/adwords/cm/v201101'; }

	/**
	 * @return RateExceededErrorReason
	 */
	public static function create() { return new self(); }
}



/**
 * The reasons for the target error.
 */
class ReadOnlyErrorReason 
{


	/**
	 * Возвращает namespace структуры
	 *
	 * @return string
	 */
	public function getNamespace() { return 'https://adwords.google.com/api/adwords/cm/v201101'; }

	/**
	 * @return ReadOnlyErrorReason
	 */
	public static function create() { return new self(); }
}



/**
 * 
 */
class RequestErrorReason 
{


	/**
	 * Возвращает namespace структуры
	 *
	 * @return string
	 */
	public function getNamespace() { return 'https://adwords.google.com/api/adwords/cm/v201101'; }

	/**
	 * @return RequestErrorReason
	 */
	public static function create() { return new self(); }
}



/**
 * The reasons for the target error.
 */
class RequiredErrorReason 
{


	/**
	 * Возвращает namespace структуры
	 *
	 * @return string
	 */
	public function getNamespace() { return 'https://adwords.google.com/api/adwords/cm/v201101'; }

	/**
	 * @return RequiredErrorReason
	 */
	public static function create() { return new self(); }
}



/**
 * The reasons for Ad Scheduling errors.
 */
class SizeLimitErrorReason 
{


	/**
	 * Возвращает namespace структуры
	 *
	 * @return string
	 */
	public function getNamespace() { return 'https://adwords.google.com/api/adwords/cm/v201101'; }

	/**
	 * @return SizeLimitErrorReason
	 */
	public static function create() { return new self(); }
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
	 * 
	 * @param ApiUsageErrorReason $reason The error reason represented by an enum.
	 * @param string $fieldPath The OGNL field path to identify cause of error.
	 * @param string $trigger The data that caused the error.
	 * @param string $errorString A simple string representation of the error and reason.
	 * @param string $ApiErrorType This field indicates the subtype of ApiError of this instance.  It is ignoredon input, and instead xsi:type should be specified.
	 */
	public function __construct($reason = null, $fieldPath = null, $trigger = null, $errorString = null, $ApiErrorType = null)
	{
		parent::__construct($fieldPath, $trigger, $errorString, $ApiErrorType);
		$this->setReason($reason);
	}

	/**
	 * Возвращает namespace структуры
	 *
	 * @return string
	 */
	public function getNamespace() { return 'https://adwords.google.com/api/adwords/info/v201101'; }

	/**
	 * @return ApiUsageError
	 */
	public static function create() { return new self(); }

	/**
	 * Setter for reason
	 * @param ApiUsageErrorReason $reason The error reason represented by an enum.
	 * @return ApiUsageError
	 */
	public function setReason($reason)
	{
		$this->reason = $reason;
		return $this;
	}
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

	/**
	 * 
	 * @param string $clientEmail The email address of the client
	 * @param double $cost The cost of the API
	 */
	public function __construct($clientEmail = null, $cost = null)
	{
		$this->setClientEmail($clientEmail);
		$this->setCost($cost);
	}

	/**
	 * Возвращает namespace структуры
	 *
	 * @return string
	 */
	public function getNamespace() { return 'https://adwords.google.com/api/adwords/info/v201101'; }

	/**
	 * @return ApiUsageRecord
	 */
	public static function create() { return new self(); }

	/**
	 * Setter for clientEmail
	 * @param string $clientEmail The email address of the client
	 * @return ApiUsageRecord
	 */
	public function setClientEmail($clientEmail)
	{
		$this->clientEmail = $clientEmail;
		return $this;
	}

	/**
	 * Setter for cost
	 * @param double $cost The cost of the API
	 * @return ApiUsageRecord
	 */
	public function setCost($cost)
	{
		$this->cost = $cost;
		return $this;
	}
}



/**
 * Specifies the type of API usage information to be returned. API usage information
 * returned is based on the {@link #apiUsageType API usage type} specified. All returned
 * values are specific to the developer token being used to call InfoService.get.
 * 
 * For each of the apiUsageType values, other InfoSelector
 * fields must also be set as described below:
 * 
 * 
 * FREE_USAGE_API_UNITS_PER_MONTH : Returns the number of allocated
 * 
 * free API units for this entire month. Specify only the apiUsageType parameter.
 * TOTAL_USAGE_API_UNITS_PER_MONTH : Returns the total number of allocated API
 * units for this entire month. Includes both free and paid API units. Specify only the
 * apiUsageType parameter.
 * OPERATION_COUNT : Returns the number of operations recorded over the given
 * date range. The given dates are inclusive; to get the operation count for a single day,
 * supply it as both the start and end date. Specify the apiUsageType and
 * dateRange parameters.
 * UNIT_COUNT : Returns the number of API units recorded.
 * 
 * Specify the apiUsageType and dateRange parameters to retrieve
 * the units recorded over the given date range.
 * Specify the apiUsageType, serviceName, methodName and dateRange to
 * retrieve the units recorded over the given date range for a specified method.
 * 
 * 
 * UNIT_COUNT_FOR_CLIENTS :  Returns the number of API units recorded for a
 * subset of clients over the given date range. The given dates are inclusive; to get
 * the unit count for a single day, supply it as both the start and end date. Specify the
 * apiUsageType, dateRange and clientEmails parameters.
 * METHOD_COST : Returns the cost, in API units per operation, of the given
 * method on a specific date. Methods default to a cost of 1. Specify the apiUsageType,
 * dateRange (start date and end date should be the same), serviceName, methodName,
 * operator parameters.
 * 
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
	 * Specifies the operator. This is applicable when the method is a &quot;mutate&quot; method.
	 * @var Operator
	 */
	public $operator;

	/**
	 * Date range to get the API usage for. The given dates are inclusive; to get the usageinformation for a single day, supply it as both the start and end date.
	 * @var DateRange
	 */
	public $dateRange;

	/**
	 * List of login emails used to identify the clients to retrieve the API usage for. If the listis null or empty, return the API usage for all clients.
	 * @var string
	 */
	public $clientEmails;

	/**
	 * The API usage type information that needs to be fetched.This field is required and should not be {@code null}.
	 * @var ApiUsageType
	 */
	public $apiUsageType;

	/**
	 * 
	 * @param string $serviceName The name of the service.
	 * @param string $methodName The method whose cost has been queried.
	 * @param Operator $operator Specifies the operator. This is applicable when the method is a &quot;mutate&quot; method.
	 * @param DateRange $dateRange Date range to get the API usage for. The given dates are inclusive; to get the usageinformation for a single day, supply it as both the start and end date.
	 * @param string $clientEmails List of login emails used to identify the clients to retrieve the API usage for. If the listis null or empty, return the API usage for all clients.
	 * @param ApiUsageType $apiUsageType The API usage type information that needs to be fetched.This field is required and should not be {@code null}.
	 */
	public function __construct($serviceName = null, $methodName = null, $operator = null, $dateRange = null, $clientEmails = null, $apiUsageType = null)
	{
		$this->setServiceName($serviceName);
		$this->setMethodName($methodName);
		$this->setOperator($operator);
		$this->setDateRange($dateRange);
		$this->setClientEmails($clientEmails);
		$this->setApiUsageType($apiUsageType);
	}

	/**
	 * Возвращает namespace структуры
	 *
	 * @return string
	 */
	public function getNamespace() { return 'https://adwords.google.com/api/adwords/info/v201101'; }

	/**
	 * @return InfoSelector
	 */
	public static function create() { return new self(); }

	/**
	 * Setter for serviceName
	 * @param string $serviceName The name of the service.
	 * @return InfoSelector
	 */
	public function setServiceName($serviceName)
	{
		$this->serviceName = $serviceName;
		return $this;
	}

	/**
	 * Setter for methodName
	 * @param string $methodName The method whose cost has been queried.
	 * @return InfoSelector
	 */
	public function setMethodName($methodName)
	{
		$this->methodName = $methodName;
		return $this;
	}

	/**
	 * Setter for operator
	 * @param Operator $operator Specifies the operator. This is applicable when the method is a &quot;mutate&quot; method.
	 * @return InfoSelector
	 */
	public function setOperator($operator)
	{
		$this->operator = $operator;
		return $this;
	}

	/**
	 * Setter for dateRange
	 * @param DateRange $dateRange Date range to get the API usage for. The given dates are inclusive; to get the usageinformation for a single day, supply it as both the start and end date.
	 * @return InfoSelector
	 */
	public function setDateRange($dateRange)
	{
		$this->dateRange = $dateRange;
		return $this;
	}

	/**
	 * Setter for clientEmails
	 * @param string $clientEmails List of login emails used to identify the clients to retrieve the API usage for. If the listis null or empty, return the API usage for all clients.
	 * @return InfoSelector
	 */
	public function setClientEmails($clientEmails)
	{
		$this->clientEmails = $clientEmails;
		return $this;
	}

	/**
	 * Setter for apiUsageType
	 * @param ApiUsageType $apiUsageType The API usage type information that needs to be fetched.This field is required and should not be {@code null}.
	 * @return InfoSelector
	 */
	public function setApiUsageType($apiUsageType)
	{
		$this->apiUsageType = $apiUsageType;
		return $this;
	}
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

	/**
	 * 
	 * @param ApiUsageRecord $apiUsageRecords The list of API usage for the specific clients.
	 * @param double $cost The cost is set when the API usage is been fetched for all clients.
	 */
	public function __construct($apiUsageRecords = null, $cost = null)
	{
		$this->setApiUsageRecords($apiUsageRecords);
		$this->setCost($cost);
	}

	/**
	 * Возвращает namespace структуры
	 *
	 * @return string
	 */
	public function getNamespace() { return 'https://adwords.google.com/api/adwords/info/v201101'; }

	/**
	 * @return ApiUsageInfo
	 */
	public static function create() { return new self(); }

	/**
	 * Setter for apiUsageRecords
	 * @param ApiUsageRecord $apiUsageRecords The list of API usage for the specific clients.
	 * @return ApiUsageInfo
	 */
	public function setApiUsageRecords($apiUsageRecords)
	{
		$this->apiUsageRecords = $apiUsageRecords;
		return $this;
	}

	/**
	 * Setter for cost
	 * @param double $cost The cost is set when the API usage is been fetched for all clients.
	 * @return ApiUsageInfo
	 */
	public function setCost($cost)
	{
		$this->cost = $cost;
		return $this;
	}
}



/**
 * Enum used to represent the errors
 */
class ApiUsageErrorReason 
{


	/**
	 * Возвращает namespace структуры
	 *
	 * @return string
	 */
	public function getNamespace() { return 'https://adwords.google.com/api/adwords/info/v201101'; }

	/**
	 * @return ApiUsageErrorReason
	 */
	public static function create() { return new self(); }
}



/**
 * Enum to represent the type of API usage.
 */
class ApiUsageType 
{


	/**
	 * Возвращает namespace структуры
	 *
	 * @return string
	 */
	public function getNamespace() { return 'https://adwords.google.com/api/adwords/info/v201101'; }

	/**
	 * @return ApiUsageType
	 */
	public static function create() { return new self(); }
}



/**
 * Returns the API usage information based on the selection criteria specified in
 * the selector.
 * 
 * ###param selector Specifies the type of usage information to return.
 * ###return The API usage information.
 * ###throws ApiException when there is at least one error with the request.
 */
class get 
{

	/**
	 * This field is required and should not be {@code null}.
	 * @var InfoSelector
	 */
	public $selector;

	/**
	 * 
	 * @param InfoSelector $selector This field is required and should not be {@code null}.
	 */
	public function __construct($selector = null)
	{
		$this->setSelector($selector);
	}

	/**
	 * Возвращает namespace структуры
	 *
	 * @return string
	 */
	public function getNamespace() { return 'https://adwords.google.com/api/adwords/info/v201101'; }

	/**
	 * @return get
	 */
	public static function create() { return new self(); }

	/**
	 * Setter for selector
	 * @param InfoSelector $selector This field is required and should not be {@code null}.
	 * @return get
	 */
	public function setSelector($selector)
	{
		$this->selector = $selector;
		return $this;
	}
}



/**
 * 
 */
class getResponse 
{

	/**
	 * 
	 * @var ApiUsageInfo
	 */
	public $rval;

	/**
	 * 
	 * @param ApiUsageInfo $rval 
	 */
	public function __construct($rval = null)
	{
		$this->setRval($rval);
	}

	/**
	 * Возвращает namespace структуры
	 *
	 * @return string
	 */
	public function getNamespace() { return 'https://adwords.google.com/api/adwords/info/v201101'; }

	/**
	 * @return getResponse
	 */
	public static function create() { return new self(); }

	/**
	 * Setter for rval
	 * @param ApiUsageInfo $rval 
	 * @return getResponse
	 */
	public function setRval($rval)
	{
		$this->rval = $rval;
		return $this;
	}
}



/**
 * A fault element of type ApiException.
 */
class ApiExceptionFault 
{


	/**
	 * Возвращает namespace структуры
	 *
	 * @return string
	 */
	public function getNamespace() { return 'https://adwords.google.com/api/adwords/info/v201101'; }

	/**
	 * @return ApiExceptionFault
	 */
	public static function create() { return new self(); }
}



/**
 * 
 */
class RequestHeader 
{


	/**
	 * Возвращает namespace структуры
	 *
	 * @return string
	 */
	public function getNamespace() { return 'https://adwords.google.com/api/adwords/info/v201101'; }

	/**
	 * @return RequestHeader
	 */
	public static function create() { return new self(); }
}



/**
 * 
 */
class ResponseHeader 
{


	/**
	 * Возвращает namespace структуры
	 *
	 * @return string
	 */
	public function getNamespace() { return 'https://adwords.google.com/api/adwords/info/v201101'; }

	/**
	 * @return ResponseHeader
	 */
	public static function create() { return new self(); }
}


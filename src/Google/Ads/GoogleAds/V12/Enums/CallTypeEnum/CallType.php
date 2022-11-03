<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v12/enums/call_type.proto

namespace Google\Ads\GoogleAds\V12\Enums\CallTypeEnum;

use UnexpectedValueException;

/**
 * Possible types of property from where the call was made.
 *
 * Protobuf type <code>google.ads.googleads.v12.enums.CallTypeEnum.CallType</code>
 */
class CallType
{
    /**
     * Not specified.
     *
     * Generated from protobuf enum <code>UNSPECIFIED = 0;</code>
     */
    const UNSPECIFIED = 0;
    /**
     * Used for return value only. Represents value unknown in this version.
     *
     * Generated from protobuf enum <code>UNKNOWN = 1;</code>
     */
    const UNKNOWN = 1;
    /**
     * The phone call was manually dialed.
     *
     * Generated from protobuf enum <code>MANUALLY_DIALED = 2;</code>
     */
    const MANUALLY_DIALED = 2;
    /**
     * The phone call was a mobile click-to-call.
     *
     * Generated from protobuf enum <code>HIGH_END_MOBILE_SEARCH = 3;</code>
     */
    const HIGH_END_MOBILE_SEARCH = 3;

    private static $valueToName = [
        self::UNSPECIFIED => 'UNSPECIFIED',
        self::UNKNOWN => 'UNKNOWN',
        self::MANUALLY_DIALED => 'MANUALLY_DIALED',
        self::HIGH_END_MOBILE_SEARCH => 'HIGH_END_MOBILE_SEARCH',
    ];

    public static function name($value)
    {
        if (!isset(self::$valueToName[$value])) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no name defined for value %s', __CLASS__, $value));
        }
        return self::$valueToName[$value];
    }


    public static function value($name)
    {
        $const = __CLASS__ . '::' . strtoupper($name);
        if (!defined($const)) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no value defined for name %s', __CLASS__, $name));
        }
        return constant($const);
    }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(CallType::class, \Google\Ads\GoogleAds\V12\Enums\CallTypeEnum_CallType::class);


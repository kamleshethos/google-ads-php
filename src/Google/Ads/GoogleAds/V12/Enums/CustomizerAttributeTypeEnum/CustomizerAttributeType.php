<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v12/enums/customizer_attribute_type.proto

namespace Google\Ads\GoogleAds\V12\Enums\CustomizerAttributeTypeEnum;

use UnexpectedValueException;

/**
 * The possible types of a customizer attribute.
 *
 * Protobuf type <code>google.ads.googleads.v12.enums.CustomizerAttributeTypeEnum.CustomizerAttributeType</code>
 */
class CustomizerAttributeType
{
    /**
     * The status has not been specified.
     *
     * Generated from protobuf enum <code>UNSPECIFIED = 0;</code>
     */
    const UNSPECIFIED = 0;
    /**
     * The received value is not known in this version.
     *
     * Generated from protobuf enum <code>UNKNOWN = 1;</code>
     */
    const UNKNOWN = 1;
    /**
     * Text customizer.
     *
     * Generated from protobuf enum <code>TEXT = 2;</code>
     */
    const TEXT = 2;
    /**
     * Number customizer.
     *
     * Generated from protobuf enum <code>NUMBER = 3;</code>
     */
    const NUMBER = 3;
    /**
     * Price customizer consisting of a number and a currency.
     *
     * Generated from protobuf enum <code>PRICE = 4;</code>
     */
    const PRICE = 4;
    /**
     * Percentage customizer consisting of a number and a '%'.
     *
     * Generated from protobuf enum <code>PERCENT = 5;</code>
     */
    const PERCENT = 5;

    private static $valueToName = [
        self::UNSPECIFIED => 'UNSPECIFIED',
        self::UNKNOWN => 'UNKNOWN',
        self::TEXT => 'TEXT',
        self::NUMBER => 'NUMBER',
        self::PRICE => 'PRICE',
        self::PERCENT => 'PERCENT',
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
class_alias(CustomizerAttributeType::class, \Google\Ads\GoogleAds\V12\Enums\CustomizerAttributeTypeEnum_CustomizerAttributeType::class);


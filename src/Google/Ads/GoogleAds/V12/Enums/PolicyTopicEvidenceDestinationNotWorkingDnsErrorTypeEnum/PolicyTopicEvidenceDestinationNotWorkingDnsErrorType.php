<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v12/enums/policy_topic_evidence_destination_not_working_dns_error_type.proto

namespace Google\Ads\GoogleAds\V12\Enums\PolicyTopicEvidenceDestinationNotWorkingDnsErrorTypeEnum;

use UnexpectedValueException;

/**
 * The possible policy topic evidence destination not working DNS error types.
 *
 * Protobuf type <code>google.ads.googleads.v12.enums.PolicyTopicEvidenceDestinationNotWorkingDnsErrorTypeEnum.PolicyTopicEvidenceDestinationNotWorkingDnsErrorType</code>
 */
class PolicyTopicEvidenceDestinationNotWorkingDnsErrorType
{
    /**
     * No value has been specified.
     *
     * Generated from protobuf enum <code>UNSPECIFIED = 0;</code>
     */
    const UNSPECIFIED = 0;
    /**
     * The received value is not known in this version.
     * This is a response-only value.
     *
     * Generated from protobuf enum <code>UNKNOWN = 1;</code>
     */
    const UNKNOWN = 1;
    /**
     * Host name not found in DNS when fetching landing page.
     *
     * Generated from protobuf enum <code>HOSTNAME_NOT_FOUND = 2;</code>
     */
    const HOSTNAME_NOT_FOUND = 2;
    /**
     * Google internal crawler issue when communicating with DNS. This error
     * doesn't mean the landing page doesn't work. Google will recrawl the
     * landing page.
     *
     * Generated from protobuf enum <code>GOOGLE_CRAWLER_DNS_ISSUE = 3;</code>
     */
    const GOOGLE_CRAWLER_DNS_ISSUE = 3;

    private static $valueToName = [
        self::UNSPECIFIED => 'UNSPECIFIED',
        self::UNKNOWN => 'UNKNOWN',
        self::HOSTNAME_NOT_FOUND => 'HOSTNAME_NOT_FOUND',
        self::GOOGLE_CRAWLER_DNS_ISSUE => 'GOOGLE_CRAWLER_DNS_ISSUE',
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
class_alias(PolicyTopicEvidenceDestinationNotWorkingDnsErrorType::class, \Google\Ads\GoogleAds\V12\Enums\PolicyTopicEvidenceDestinationNotWorkingDnsErrorTypeEnum_PolicyTopicEvidenceDestinationNotWorkingDnsErrorType::class);


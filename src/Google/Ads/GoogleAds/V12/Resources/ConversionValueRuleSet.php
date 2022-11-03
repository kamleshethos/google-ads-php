<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v12/resources/conversion_value_rule_set.proto

namespace Google\Ads\GoogleAds\V12\Resources;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A conversion value rule set
 *
 * Generated from protobuf message <code>google.ads.googleads.v12.resources.ConversionValueRuleSet</code>
 */
class ConversionValueRuleSet extends \Google\Protobuf\Internal\Message
{
    /**
     * Immutable. The resource name of the conversion value rule set.
     * Conversion value rule set resource names have the form:
     * `customers/{customer_id}/conversionValueRuleSets/{conversion_value_rule_set_id}`
     *
     * Generated from protobuf field <code>string resource_name = 1 [(.google.api.field_behavior) = IMMUTABLE, (.google.api.resource_reference) = {</code>
     */
    protected $resource_name = '';
    /**
     * Output only. The ID of the conversion value rule set.
     *
     * Generated from protobuf field <code>int64 id = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $id = 0;
    /**
     * Resource names of rules within the rule set.
     *
     * Generated from protobuf field <code>repeated string conversion_value_rules = 3 [(.google.api.resource_reference) = {</code>
     */
    private $conversion_value_rules;
    /**
     * Defines dimensions for Value Rule conditions. The condition types of value
     * rules within this value rule set must be of these dimensions. The first
     * entry in this list is the primary dimension of the included value rules.
     * When using value rule primary dimension segmentation, conversion values
     * will be segmented into the values adjusted by value rules and the original
     * values, if some value rules apply.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v12.enums.ValueRuleSetDimensionEnum.ValueRuleSetDimension dimensions = 4;</code>
     */
    private $dimensions;
    /**
     * Output only. The resource name of the conversion value rule set's owner customer.
     * When the value rule set is inherited from a manager
     * customer, owner_customer will be the resource name of the manager whereas
     * the customer in the resource_name will be of the requesting serving
     * customer.
     * ** Read-only **
     *
     * Generated from protobuf field <code>string owner_customer = 5 [(.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.resource_reference) = {</code>
     */
    protected $owner_customer = '';
    /**
     * Immutable. Defines the scope where the conversion value rule set is attached.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v12.enums.ValueRuleSetAttachmentTypeEnum.ValueRuleSetAttachmentType attachment_type = 6 [(.google.api.field_behavior) = IMMUTABLE];</code>
     */
    protected $attachment_type = 0;
    /**
     * The resource name of the campaign when the conversion value rule
     * set is attached to a campaign.
     *
     * Generated from protobuf field <code>string campaign = 7 [(.google.api.resource_reference) = {</code>
     */
    protected $campaign = '';
    /**
     * Output only. The status of the conversion value rule set.
     * ** Read-only **
     *
     * Generated from protobuf field <code>.google.ads.googleads.v12.enums.ConversionValueRuleSetStatusEnum.ConversionValueRuleSetStatus status = 8 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $status = 0;
    /**
     * Immutable. The conversion action categories of the conversion value rule set.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v12.enums.ConversionActionCategoryEnum.ConversionActionCategory conversion_action_categories = 9 [(.google.api.field_behavior) = IMMUTABLE];</code>
     */
    private $conversion_action_categories;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $resource_name
     *           Immutable. The resource name of the conversion value rule set.
     *           Conversion value rule set resource names have the form:
     *           `customers/{customer_id}/conversionValueRuleSets/{conversion_value_rule_set_id}`
     *     @type int|string $id
     *           Output only. The ID of the conversion value rule set.
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $conversion_value_rules
     *           Resource names of rules within the rule set.
     *     @type array<int>|\Google\Protobuf\Internal\RepeatedField $dimensions
     *           Defines dimensions for Value Rule conditions. The condition types of value
     *           rules within this value rule set must be of these dimensions. The first
     *           entry in this list is the primary dimension of the included value rules.
     *           When using value rule primary dimension segmentation, conversion values
     *           will be segmented into the values adjusted by value rules and the original
     *           values, if some value rules apply.
     *     @type string $owner_customer
     *           Output only. The resource name of the conversion value rule set's owner customer.
     *           When the value rule set is inherited from a manager
     *           customer, owner_customer will be the resource name of the manager whereas
     *           the customer in the resource_name will be of the requesting serving
     *           customer.
     *           ** Read-only **
     *     @type int $attachment_type
     *           Immutable. Defines the scope where the conversion value rule set is attached.
     *     @type string $campaign
     *           The resource name of the campaign when the conversion value rule
     *           set is attached to a campaign.
     *     @type int $status
     *           Output only. The status of the conversion value rule set.
     *           ** Read-only **
     *     @type array<int>|\Google\Protobuf\Internal\RepeatedField $conversion_action_categories
     *           Immutable. The conversion action categories of the conversion value rule set.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V12\Resources\ConversionValueRuleSet::initOnce();
        parent::__construct($data);
    }

    /**
     * Immutable. The resource name of the conversion value rule set.
     * Conversion value rule set resource names have the form:
     * `customers/{customer_id}/conversionValueRuleSets/{conversion_value_rule_set_id}`
     *
     * Generated from protobuf field <code>string resource_name = 1 [(.google.api.field_behavior) = IMMUTABLE, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getResourceName()
    {
        return $this->resource_name;
    }

    /**
     * Immutable. The resource name of the conversion value rule set.
     * Conversion value rule set resource names have the form:
     * `customers/{customer_id}/conversionValueRuleSets/{conversion_value_rule_set_id}`
     *
     * Generated from protobuf field <code>string resource_name = 1 [(.google.api.field_behavior) = IMMUTABLE, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setResourceName($var)
    {
        GPBUtil::checkString($var, True);
        $this->resource_name = $var;

        return $this;
    }

    /**
     * Output only. The ID of the conversion value rule set.
     *
     * Generated from protobuf field <code>int64 id = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int|string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Output only. The ID of the conversion value rule set.
     *
     * Generated from protobuf field <code>int64 id = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int|string $var
     * @return $this
     */
    public function setId($var)
    {
        GPBUtil::checkInt64($var);
        $this->id = $var;

        return $this;
    }

    /**
     * Resource names of rules within the rule set.
     *
     * Generated from protobuf field <code>repeated string conversion_value_rules = 3 [(.google.api.resource_reference) = {</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getConversionValueRules()
    {
        return $this->conversion_value_rules;
    }

    /**
     * Resource names of rules within the rule set.
     *
     * Generated from protobuf field <code>repeated string conversion_value_rules = 3 [(.google.api.resource_reference) = {</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setConversionValueRules($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->conversion_value_rules = $arr;

        return $this;
    }

    /**
     * Defines dimensions for Value Rule conditions. The condition types of value
     * rules within this value rule set must be of these dimensions. The first
     * entry in this list is the primary dimension of the included value rules.
     * When using value rule primary dimension segmentation, conversion values
     * will be segmented into the values adjusted by value rules and the original
     * values, if some value rules apply.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v12.enums.ValueRuleSetDimensionEnum.ValueRuleSetDimension dimensions = 4;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getDimensions()
    {
        return $this->dimensions;
    }

    /**
     * Defines dimensions for Value Rule conditions. The condition types of value
     * rules within this value rule set must be of these dimensions. The first
     * entry in this list is the primary dimension of the included value rules.
     * When using value rule primary dimension segmentation, conversion values
     * will be segmented into the values adjusted by value rules and the original
     * values, if some value rules apply.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v12.enums.ValueRuleSetDimensionEnum.ValueRuleSetDimension dimensions = 4;</code>
     * @param array<int>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setDimensions($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::ENUM, \Google\Ads\GoogleAds\V12\Enums\ValueRuleSetDimensionEnum\ValueRuleSetDimension::class);
        $this->dimensions = $arr;

        return $this;
    }

    /**
     * Output only. The resource name of the conversion value rule set's owner customer.
     * When the value rule set is inherited from a manager
     * customer, owner_customer will be the resource name of the manager whereas
     * the customer in the resource_name will be of the requesting serving
     * customer.
     * ** Read-only **
     *
     * Generated from protobuf field <code>string owner_customer = 5 [(.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getOwnerCustomer()
    {
        return $this->owner_customer;
    }

    /**
     * Output only. The resource name of the conversion value rule set's owner customer.
     * When the value rule set is inherited from a manager
     * customer, owner_customer will be the resource name of the manager whereas
     * the customer in the resource_name will be of the requesting serving
     * customer.
     * ** Read-only **
     *
     * Generated from protobuf field <code>string owner_customer = 5 [(.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setOwnerCustomer($var)
    {
        GPBUtil::checkString($var, True);
        $this->owner_customer = $var;

        return $this;
    }

    /**
     * Immutable. Defines the scope where the conversion value rule set is attached.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v12.enums.ValueRuleSetAttachmentTypeEnum.ValueRuleSetAttachmentType attachment_type = 6 [(.google.api.field_behavior) = IMMUTABLE];</code>
     * @return int
     */
    public function getAttachmentType()
    {
        return $this->attachment_type;
    }

    /**
     * Immutable. Defines the scope where the conversion value rule set is attached.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v12.enums.ValueRuleSetAttachmentTypeEnum.ValueRuleSetAttachmentType attachment_type = 6 [(.google.api.field_behavior) = IMMUTABLE];</code>
     * @param int $var
     * @return $this
     */
    public function setAttachmentType($var)
    {
        GPBUtil::checkEnum($var, \Google\Ads\GoogleAds\V12\Enums\ValueRuleSetAttachmentTypeEnum\ValueRuleSetAttachmentType::class);
        $this->attachment_type = $var;

        return $this;
    }

    /**
     * The resource name of the campaign when the conversion value rule
     * set is attached to a campaign.
     *
     * Generated from protobuf field <code>string campaign = 7 [(.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getCampaign()
    {
        return $this->campaign;
    }

    /**
     * The resource name of the campaign when the conversion value rule
     * set is attached to a campaign.
     *
     * Generated from protobuf field <code>string campaign = 7 [(.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setCampaign($var)
    {
        GPBUtil::checkString($var, True);
        $this->campaign = $var;

        return $this;
    }

    /**
     * Output only. The status of the conversion value rule set.
     * ** Read-only **
     *
     * Generated from protobuf field <code>.google.ads.googleads.v12.enums.ConversionValueRuleSetStatusEnum.ConversionValueRuleSetStatus status = 8 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Output only. The status of the conversion value rule set.
     * ** Read-only **
     *
     * Generated from protobuf field <code>.google.ads.googleads.v12.enums.ConversionValueRuleSetStatusEnum.ConversionValueRuleSetStatus status = 8 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int $var
     * @return $this
     */
    public function setStatus($var)
    {
        GPBUtil::checkEnum($var, \Google\Ads\GoogleAds\V12\Enums\ConversionValueRuleSetStatusEnum\ConversionValueRuleSetStatus::class);
        $this->status = $var;

        return $this;
    }

    /**
     * Immutable. The conversion action categories of the conversion value rule set.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v12.enums.ConversionActionCategoryEnum.ConversionActionCategory conversion_action_categories = 9 [(.google.api.field_behavior) = IMMUTABLE];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getConversionActionCategories()
    {
        return $this->conversion_action_categories;
    }

    /**
     * Immutable. The conversion action categories of the conversion value rule set.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v12.enums.ConversionActionCategoryEnum.ConversionActionCategory conversion_action_categories = 9 [(.google.api.field_behavior) = IMMUTABLE];</code>
     * @param array<int>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setConversionActionCategories($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::ENUM, \Google\Ads\GoogleAds\V12\Enums\ConversionActionCategoryEnum\ConversionActionCategory::class);
        $this->conversion_action_categories = $arr;

        return $this;
    }

}


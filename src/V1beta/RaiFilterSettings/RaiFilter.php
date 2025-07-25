<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/modelarmor/v1beta/service.proto

namespace Google\Cloud\ModelArmor\V1beta\RaiFilterSettings;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Responsible AI filter.
 *
 * Generated from protobuf message <code>google.cloud.modelarmor.v1beta.RaiFilterSettings.RaiFilter</code>
 */
class RaiFilter extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. Type of responsible AI filter.
     *
     * Generated from protobuf field <code>.google.cloud.modelarmor.v1beta.RaiFilterType filter_type = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $filter_type = 0;
    /**
     * Optional. Confidence level for this RAI filter.
     * During data sanitization, if data is classified under this filter with a
     * confidence level equal to or greater than the specified level, a positive
     * match is reported. If the confidence level is unspecified (i.e., 0), the
     * system will use a reasonable default level based on the `filter_type`.
     *
     * Generated from protobuf field <code>.google.cloud.modelarmor.v1beta.DetectionConfidenceLevel confidence_level = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $confidence_level = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $filter_type
     *           Required. Type of responsible AI filter.
     *     @type int $confidence_level
     *           Optional. Confidence level for this RAI filter.
     *           During data sanitization, if data is classified under this filter with a
     *           confidence level equal to or greater than the specified level, a positive
     *           match is reported. If the confidence level is unspecified (i.e., 0), the
     *           system will use a reasonable default level based on the `filter_type`.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Modelarmor\V1Beta\Service::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. Type of responsible AI filter.
     *
     * Generated from protobuf field <code>.google.cloud.modelarmor.v1beta.RaiFilterType filter_type = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return int
     */
    public function getFilterType()
    {
        return $this->filter_type;
    }

    /**
     * Required. Type of responsible AI filter.
     *
     * Generated from protobuf field <code>.google.cloud.modelarmor.v1beta.RaiFilterType filter_type = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param int $var
     * @return $this
     */
    public function setFilterType($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\ModelArmor\V1beta\RaiFilterType::class);
        $this->filter_type = $var;

        return $this;
    }

    /**
     * Optional. Confidence level for this RAI filter.
     * During data sanitization, if data is classified under this filter with a
     * confidence level equal to or greater than the specified level, a positive
     * match is reported. If the confidence level is unspecified (i.e., 0), the
     * system will use a reasonable default level based on the `filter_type`.
     *
     * Generated from protobuf field <code>.google.cloud.modelarmor.v1beta.DetectionConfidenceLevel confidence_level = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return int
     */
    public function getConfidenceLevel()
    {
        return $this->confidence_level;
    }

    /**
     * Optional. Confidence level for this RAI filter.
     * During data sanitization, if data is classified under this filter with a
     * confidence level equal to or greater than the specified level, a positive
     * match is reported. If the confidence level is unspecified (i.e., 0), the
     * system will use a reasonable default level based on the `filter_type`.
     *
     * Generated from protobuf field <code>.google.cloud.modelarmor.v1beta.DetectionConfidenceLevel confidence_level = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param int $var
     * @return $this
     */
    public function setConfidenceLevel($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\ModelArmor\V1beta\DetectionConfidenceLevel::class);
        $this->confidence_level = $var;

        return $this;
    }

}



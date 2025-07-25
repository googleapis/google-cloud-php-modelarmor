<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/modelarmor/v1beta/service.proto

namespace Google\Cloud\ModelArmor\V1beta;

use UnexpectedValueException;

/**
 * Confidence levels for detectors.
 * Higher value maps to a greater confidence level. To enforce stricter level a
 * lower value should be used.
 *
 * Protobuf type <code>google.cloud.modelarmor.v1beta.DetectionConfidenceLevel</code>
 */
class DetectionConfidenceLevel
{
    /**
     * Same as LOW_AND_ABOVE.
     *
     * Generated from protobuf enum <code>DETECTION_CONFIDENCE_LEVEL_UNSPECIFIED = 0;</code>
     */
    const DETECTION_CONFIDENCE_LEVEL_UNSPECIFIED = 0;
    /**
     * Highest chance of a false positive.
     *
     * Generated from protobuf enum <code>LOW_AND_ABOVE = 1;</code>
     */
    const LOW_AND_ABOVE = 1;
    /**
     * Some chance of false positives.
     *
     * Generated from protobuf enum <code>MEDIUM_AND_ABOVE = 2;</code>
     */
    const MEDIUM_AND_ABOVE = 2;
    /**
     * Low chance of false positives.
     *
     * Generated from protobuf enum <code>HIGH = 3;</code>
     */
    const HIGH = 3;

    private static $valueToName = [
        self::DETECTION_CONFIDENCE_LEVEL_UNSPECIFIED => 'DETECTION_CONFIDENCE_LEVEL_UNSPECIFIED',
        self::LOW_AND_ABOVE => 'LOW_AND_ABOVE',
        self::MEDIUM_AND_ABOVE => 'MEDIUM_AND_ABOVE',
        self::HIGH => 'HIGH',
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


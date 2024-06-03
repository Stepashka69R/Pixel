<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/analytics/data/v1alpha/data.proto

namespace Google\Analytics\Data\V1alpha\DimensionExpression;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Used to combine dimension values to a single dimension.
 *
 * Generated from protobuf message <code>google.analytics.data.v1alpha.DimensionExpression.ConcatenateExpression</code>
 */
class ConcatenateExpression extends \Google\Protobuf\Internal\Message
{
    /**
     * Names of dimensions. The names must refer back to names in the dimensions
     * field of the request.
     *
     * Generated from protobuf field <code>repeated string dimension_names = 1;</code>
     */
    private $dimension_names;
    /**
     * The delimiter placed between dimension names.
     * Delimiters are often single characters such as "|" or "," but can be
     * longer strings. If a dimension value contains the delimiter, both will be
     * present in response with no distinction. For example if dimension 1 value
     * = "US,FR", dimension 2 value = "JP", and delimiter = ",", then the
     * response will contain "US,FR,JP".
     *
     * Generated from protobuf field <code>string delimiter = 2;</code>
     */
    private $delimiter = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string[]|\Google\Protobuf\Internal\RepeatedField $dimension_names
     *           Names of dimensions. The names must refer back to names in the dimensions
     *           field of the request.
     *     @type string $delimiter
     *           The delimiter placed between dimension names.
     *           Delimiters are often single characters such as "|" or "," but can be
     *           longer strings. If a dimension value contains the delimiter, both will be
     *           present in response with no distinction. For example if dimension 1 value
     *           = "US,FR", dimension 2 value = "JP", and delimiter = ",", then the
     *           response will contain "US,FR,JP".
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Analytics\Data\V1Alpha\Data::initOnce();
        parent::__construct($data);
    }

    /**
     * Names of dimensions. The names must refer back to names in the dimensions
     * field of the request.
     *
     * Generated from protobuf field <code>repeated string dimension_names = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getDimensionNames()
    {
        return $this->dimension_names;
    }

    /**
     * Names of dimensions. The names must refer back to names in the dimensions
     * field of the request.
     *
     * Generated from protobuf field <code>repeated string dimension_names = 1;</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setDimensionNames($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->dimension_names = $arr;

        return $this;
    }

    /**
     * The delimiter placed between dimension names.
     * Delimiters are often single characters such as "|" or "," but can be
     * longer strings. If a dimension value contains the delimiter, both will be
     * present in response with no distinction. For example if dimension 1 value
     * = "US,FR", dimension 2 value = "JP", and delimiter = ",", then the
     * response will contain "US,FR,JP".
     *
     * Generated from protobuf field <code>string delimiter = 2;</code>
     * @return string
     */
    public function getDelimiter()
    {
        return $this->delimiter;
    }

    /**
     * The delimiter placed between dimension names.
     * Delimiters are often single characters such as "|" or "," but can be
     * longer strings. If a dimension value contains the delimiter, both will be
     * present in response with no distinction. For example if dimension 1 value
     * = "US,FR", dimension 2 value = "JP", and delimiter = ",", then the
     * response will contain "US,FR,JP".
     *
     * Generated from protobuf field <code>string delimiter = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setDelimiter($var)
    {
        GPBUtil::checkString($var, True);
        $this->delimiter = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ConcatenateExpression::class, \Google\Analytics\Data\V1alpha\DimensionExpression_ConcatenateExpression::class);


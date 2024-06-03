<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/analytics/data/v1beta/data.proto

namespace Google\Analytics\Data\V1beta;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The compatibility for a single dimension.
 *
 * Generated from protobuf message <code>google.analytics.data.v1beta.DimensionCompatibility</code>
 */
class DimensionCompatibility extends \Google\Protobuf\Internal\Message
{
    /**
     * The dimension metadata contains the API name for this compatibility
     * information. The dimension metadata also contains other helpful information
     * like the UI name and description.
     *
     * Generated from protobuf field <code>.google.analytics.data.v1beta.DimensionMetadata dimension_metadata = 1;</code>
     */
    private $dimension_metadata = null;
    /**
     * The compatibility of this dimension. If the compatibility is COMPATIBLE,
     * this dimension can be successfully added to the report.
     *
     * Generated from protobuf field <code>.google.analytics.data.v1beta.Compatibility compatibility = 2;</code>
     */
    private $compatibility = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Analytics\Data\V1beta\DimensionMetadata $dimension_metadata
     *           The dimension metadata contains the API name for this compatibility
     *           information. The dimension metadata also contains other helpful information
     *           like the UI name and description.
     *     @type int $compatibility
     *           The compatibility of this dimension. If the compatibility is COMPATIBLE,
     *           this dimension can be successfully added to the report.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Analytics\Data\V1Beta\Data::initOnce();
        parent::__construct($data);
    }

    /**
     * The dimension metadata contains the API name for this compatibility
     * information. The dimension metadata also contains other helpful information
     * like the UI name and description.
     *
     * Generated from protobuf field <code>.google.analytics.data.v1beta.DimensionMetadata dimension_metadata = 1;</code>
     * @return \Google\Analytics\Data\V1beta\DimensionMetadata|null
     */
    public function getDimensionMetadata()
    {
        return isset($this->dimension_metadata) ? $this->dimension_metadata : null;
    }

    public function hasDimensionMetadata()
    {
        return isset($this->dimension_metadata);
    }

    public function clearDimensionMetadata()
    {
        unset($this->dimension_metadata);
    }

    /**
     * The dimension metadata contains the API name for this compatibility
     * information. The dimension metadata also contains other helpful information
     * like the UI name and description.
     *
     * Generated from protobuf field <code>.google.analytics.data.v1beta.DimensionMetadata dimension_metadata = 1;</code>
     * @param \Google\Analytics\Data\V1beta\DimensionMetadata $var
     * @return $this
     */
    public function setDimensionMetadata($var)
    {
        GPBUtil::checkMessage($var, \Google\Analytics\Data\V1beta\DimensionMetadata::class);
        $this->dimension_metadata = $var;

        return $this;
    }

    /**
     * The compatibility of this dimension. If the compatibility is COMPATIBLE,
     * this dimension can be successfully added to the report.
     *
     * Generated from protobuf field <code>.google.analytics.data.v1beta.Compatibility compatibility = 2;</code>
     * @return int
     */
    public function getCompatibility()
    {
        return isset($this->compatibility) ? $this->compatibility : 0;
    }

    public function hasCompatibility()
    {
        return isset($this->compatibility);
    }

    public function clearCompatibility()
    {
        unset($this->compatibility);
    }

    /**
     * The compatibility of this dimension. If the compatibility is COMPATIBLE,
     * this dimension can be successfully added to the report.
     *
     * Generated from protobuf field <code>.google.analytics.data.v1beta.Compatibility compatibility = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setCompatibility($var)
    {
        GPBUtil::checkEnum($var, \Google\Analytics\Data\V1beta\Compatibility::class);
        $this->compatibility = $var;

        return $this;
    }

}


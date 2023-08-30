<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/datastore/v1/query.proto

namespace Google\Cloud\Datastore\V1\AggregationQuery\Aggregation;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Average of the values of the requested property.
 * * Only numeric values will be aggregated. All non-numeric values
 * including `NULL` are skipped.
 * * If the aggregated values contain `NaN`, returns `NaN`. Infinity math
 * follows IEEE-754 standards.
 * * If the aggregated value set is empty, returns `NULL`.
 * * Always returns the result as a double.
 *
 * Generated from protobuf message <code>google.datastore.v1.AggregationQuery.Aggregation.Avg</code>
 */
class Avg extends \Google\Protobuf\Internal\Message
{
    /**
     * The property to aggregate on.
     *
     * Generated from protobuf field <code>.google.datastore.v1.PropertyReference property = 1;</code>
     */
    private $property = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\Datastore\V1\PropertyReference $property
     *           The property to aggregate on.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Datastore\V1\Query::initOnce();
        parent::__construct($data);
    }

    /**
     * The property to aggregate on.
     *
     * Generated from protobuf field <code>.google.datastore.v1.PropertyReference property = 1;</code>
     * @return \Google\Cloud\Datastore\V1\PropertyReference|null
     */
    public function getProperty()
    {
        return $this->property;
    }

    public function hasProperty()
    {
        return isset($this->property);
    }

    public function clearProperty()
    {
        unset($this->property);
    }

    /**
     * The property to aggregate on.
     *
     * Generated from protobuf field <code>.google.datastore.v1.PropertyReference property = 1;</code>
     * @param \Google\Cloud\Datastore\V1\PropertyReference $var
     * @return $this
     */
    public function setProperty($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Datastore\V1\PropertyReference::class);
        $this->property = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Avg::class, \Google\Cloud\Datastore\V1\AggregationQuery_Aggregation_Avg::class);

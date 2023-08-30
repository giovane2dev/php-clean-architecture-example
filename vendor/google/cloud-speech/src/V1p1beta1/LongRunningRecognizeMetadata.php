<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/speech/v1p1beta1/cloud_speech.proto

namespace Google\Cloud\Speech\V1p1beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Describes the progress of a long-running `LongRunningRecognize` call. It is
 * included in the `metadata` field of the `Operation` returned by the
 * `GetOperation` call of the `google::longrunning::Operations` service.
 *
 * Generated from protobuf message <code>google.cloud.speech.v1p1beta1.LongRunningRecognizeMetadata</code>
 */
class LongRunningRecognizeMetadata extends \Google\Protobuf\Internal\Message
{
    /**
     * Approximate percentage of audio processed thus far. Guaranteed to be 100
     * when the audio is fully processed and the results are available.
     *
     * Generated from protobuf field <code>int32 progress_percent = 1;</code>
     */
    private $progress_percent = 0;
    /**
     * Time when the request was received.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp start_time = 2;</code>
     */
    private $start_time = null;
    /**
     * Time of the most recent processing update.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp last_update_time = 3;</code>
     */
    private $last_update_time = null;
    /**
     * Output only. The URI of the audio file being transcribed. Empty if the
     * audio was sent as byte content.
     *
     * Generated from protobuf field <code>string uri = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $uri = '';
    /**
     * Output only. A copy of the TranscriptOutputConfig if it was set in the
     * request.
     *
     * Generated from protobuf field <code>.google.cloud.speech.v1p1beta1.TranscriptOutputConfig output_config = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $output_config = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $progress_percent
     *           Approximate percentage of audio processed thus far. Guaranteed to be 100
     *           when the audio is fully processed and the results are available.
     *     @type \Google\Protobuf\Timestamp $start_time
     *           Time when the request was received.
     *     @type \Google\Protobuf\Timestamp $last_update_time
     *           Time of the most recent processing update.
     *     @type string $uri
     *           Output only. The URI of the audio file being transcribed. Empty if the
     *           audio was sent as byte content.
     *     @type \Google\Cloud\Speech\V1p1beta1\TranscriptOutputConfig $output_config
     *           Output only. A copy of the TranscriptOutputConfig if it was set in the
     *           request.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Speech\V1P1Beta1\CloudSpeech::initOnce();
        parent::__construct($data);
    }

    /**
     * Approximate percentage of audio processed thus far. Guaranteed to be 100
     * when the audio is fully processed and the results are available.
     *
     * Generated from protobuf field <code>int32 progress_percent = 1;</code>
     * @return int
     */
    public function getProgressPercent()
    {
        return $this->progress_percent;
    }

    /**
     * Approximate percentage of audio processed thus far. Guaranteed to be 100
     * when the audio is fully processed and the results are available.
     *
     * Generated from protobuf field <code>int32 progress_percent = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setProgressPercent($var)
    {
        GPBUtil::checkInt32($var);
        $this->progress_percent = $var;

        return $this;
    }

    /**
     * Time when the request was received.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp start_time = 2;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getStartTime()
    {
        return $this->start_time;
    }

    public function hasStartTime()
    {
        return isset($this->start_time);
    }

    public function clearStartTime()
    {
        unset($this->start_time);
    }

    /**
     * Time when the request was received.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp start_time = 2;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setStartTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->start_time = $var;

        return $this;
    }

    /**
     * Time of the most recent processing update.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp last_update_time = 3;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getLastUpdateTime()
    {
        return $this->last_update_time;
    }

    public function hasLastUpdateTime()
    {
        return isset($this->last_update_time);
    }

    public function clearLastUpdateTime()
    {
        unset($this->last_update_time);
    }

    /**
     * Time of the most recent processing update.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp last_update_time = 3;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setLastUpdateTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->last_update_time = $var;

        return $this;
    }

    /**
     * Output only. The URI of the audio file being transcribed. Empty if the
     * audio was sent as byte content.
     *
     * Generated from protobuf field <code>string uri = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getUri()
    {
        return $this->uri;
    }

    /**
     * Output only. The URI of the audio file being transcribed. Empty if the
     * audio was sent as byte content.
     *
     * Generated from protobuf field <code>string uri = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setUri($var)
    {
        GPBUtil::checkString($var, True);
        $this->uri = $var;

        return $this;
    }

    /**
     * Output only. A copy of the TranscriptOutputConfig if it was set in the
     * request.
     *
     * Generated from protobuf field <code>.google.cloud.speech.v1p1beta1.TranscriptOutputConfig output_config = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Cloud\Speech\V1p1beta1\TranscriptOutputConfig|null
     */
    public function getOutputConfig()
    {
        return $this->output_config;
    }

    public function hasOutputConfig()
    {
        return isset($this->output_config);
    }

    public function clearOutputConfig()
    {
        unset($this->output_config);
    }

    /**
     * Output only. A copy of the TranscriptOutputConfig if it was set in the
     * request.
     *
     * Generated from protobuf field <code>.google.cloud.speech.v1p1beta1.TranscriptOutputConfig output_config = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Cloud\Speech\V1p1beta1\TranscriptOutputConfig $var
     * @return $this
     */
    public function setOutputConfig($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Speech\V1p1beta1\TranscriptOutputConfig::class);
        $this->output_config = $var;

        return $this;
    }

}


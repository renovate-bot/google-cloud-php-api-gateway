<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/apigateway/v1/apigateway.proto

namespace Google\Cloud\ApiGateway\V1\ApiConfig;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A lightweight description of a file.
 *
 * Generated from protobuf message <code>google.cloud.apigateway.v1.ApiConfig.File</code>
 */
class File extends \Google\Protobuf\Internal\Message
{
    /**
     * The file path (full or relative path). This is typically the path of the
     * file when it is uploaded.
     *
     * Generated from protobuf field <code>string path = 1;</code>
     */
    protected $path = '';
    /**
     * The bytes that constitute the file.
     *
     * Generated from protobuf field <code>bytes contents = 2;</code>
     */
    protected $contents = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $path
     *           The file path (full or relative path). This is typically the path of the
     *           file when it is uploaded.
     *     @type string $contents
     *           The bytes that constitute the file.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Apigateway\V1\Apigateway::initOnce();
        parent::__construct($data);
    }

    /**
     * The file path (full or relative path). This is typically the path of the
     * file when it is uploaded.
     *
     * Generated from protobuf field <code>string path = 1;</code>
     * @return string
     */
    public function getPath()
    {
        return $this->path;
    }

    /**
     * The file path (full or relative path). This is typically the path of the
     * file when it is uploaded.
     *
     * Generated from protobuf field <code>string path = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setPath($var)
    {
        GPBUtil::checkString($var, True);
        $this->path = $var;

        return $this;
    }

    /**
     * The bytes that constitute the file.
     *
     * Generated from protobuf field <code>bytes contents = 2;</code>
     * @return string
     */
    public function getContents()
    {
        return $this->contents;
    }

    /**
     * The bytes that constitute the file.
     *
     * Generated from protobuf field <code>bytes contents = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setContents($var)
    {
        GPBUtil::checkString($var, False);
        $this->contents = $var;

        return $this;
    }

}



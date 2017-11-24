<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/privacy/dlp/v2beta1/storage.proto

namespace Google\Privacy\Dlp\V2beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A (kind, ID/name) pair used to construct a key path.
 * If either name or ID is set, the element is complete.
 * If neither is set, the element is incomplete.
 *
 * Generated from protobuf message <code>google.privacy.dlp.v2beta1.Key.PathElement</code>
 */
class Key_PathElement extends \Google\Protobuf\Internal\Message
{
    protected $id_type;
    /**
     * The kind of the entity.
     * A kind matching regex `__.*__` is reserved/read-only.
     * A kind must not contain more than 1500 bytes when UTF-8 encoded.
     * Cannot be `""`.
     *
     * Generated from protobuf field <code>string kind = 1;</code>
     */
    private $kind = '';

    public function __construct() {
        \GPBMetadata\Google\Privacy\Dlp\V2Beta1\Storage::initOnce();
        parent::__construct();
    }

    /**
     * The kind of the entity.
     * A kind matching regex `__.*__` is reserved/read-only.
     * A kind must not contain more than 1500 bytes when UTF-8 encoded.
     * Cannot be `""`.
     *
     * Generated from protobuf field <code>string kind = 1;</code>
     * @return string
     */
    public function getKind()
    {
        return $this->kind;
    }

    /**
     * The kind of the entity.
     * A kind matching regex `__.*__` is reserved/read-only.
     * A kind must not contain more than 1500 bytes when UTF-8 encoded.
     * Cannot be `""`.
     *
     * Generated from protobuf field <code>string kind = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setKind($var)
    {
        GPBUtil::checkString($var, True);
        $this->kind = $var;

        return $this;
    }

    /**
     * The auto-allocated ID of the entity.
     * Never equal to zero. Values less than zero are discouraged and may not
     * be supported in the future.
     *
     * Generated from protobuf field <code>int64 id = 2;</code>
     * @return int|string
     */
    public function getId()
    {
        return $this->readOneof(2);
    }

    /**
     * The auto-allocated ID of the entity.
     * Never equal to zero. Values less than zero are discouraged and may not
     * be supported in the future.
     *
     * Generated from protobuf field <code>int64 id = 2;</code>
     * @param int|string $var
     * @return $this
     */
    public function setId($var)
    {
        GPBUtil::checkInt64($var);
        $this->writeOneof(2, $var);

        return $this;
    }

    /**
     * The name of the entity.
     * A name matching regex `__.*__` is reserved/read-only.
     * A name must not be more than 1500 bytes when UTF-8 encoded.
     * Cannot be `""`.
     *
     * Generated from protobuf field <code>string name = 3;</code>
     * @return string
     */
    public function getName()
    {
        return $this->readOneof(3);
    }

    /**
     * The name of the entity.
     * A name matching regex `__.*__` is reserved/read-only.
     * A name must not be more than 1500 bytes when UTF-8 encoded.
     * Cannot be `""`.
     *
     * Generated from protobuf field <code>string name = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->writeOneof(3, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getIdType()
    {
        return $this->whichOneof("id_type");
    }

}


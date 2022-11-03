<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloudExtend\Dysms\V20170620\Models\QuerySmsTemplateListNewResponseBody\smsTemplates\smsTemplate\tags;

use AlibabaCloud\Tea\Model;

class tag extends Model {
    protected $_name = [
        'resourceId' => 'ResourceId',
        'tagKey' => 'TagKey',
        'resourceType' => 'ResourceType',
        'tagValue' => 'TagValue',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->resourceId) {
            $res['ResourceId'] = $this->resourceId;
        }
        if (null !== $this->tagKey) {
            $res['TagKey'] = $this->tagKey;
        }
        if (null !== $this->resourceType) {
            $res['ResourceType'] = $this->resourceType;
        }
        if (null !== $this->tagValue) {
            $res['TagValue'] = $this->tagValue;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return tag
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['ResourceId'])){
            $model->resourceId = $map['ResourceId'];
        }
        if(isset($map['TagKey'])){
            $model->tagKey = $map['TagKey'];
        }
        if(isset($map['ResourceType'])){
            $model->resourceType = $map['ResourceType'];
        }
        if(isset($map['TagValue'])){
            $model->tagValue = $map['TagValue'];
        }
        return $model;
    }
    /**
     * @var string
     */
    public $resourceId;

    /**
     * @var string
     */
    public $tagKey;

    /**
     * @var string
     */
    public $resourceType;

    /**
     * @var string
     */
    public $tagValue;

}

<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloudExtend\Dysms\V20170620\Models\QuerySmsTemplateListNewRequest;

use AlibabaCloud\Tea\Model;

class tagList extends Model {
    protected $_name = [
        'tagKey' => 'TagKey',
        'tagValue' => 'TagValue',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->tagKey) {
            $res['TagKey'] = $this->tagKey;
        }
        if (null !== $this->tagValue) {
            $res['TagValue'] = $this->tagValue;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return tagList
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['TagKey'])){
            $model->tagKey = $map['TagKey'];
        }
        if(isset($map['TagValue'])){
            $model->tagValue = $map['TagValue'];
        }
        return $model;
    }
    /**
     * @var string
     */
    public $tagKey;

    /**
     * @var string
     */
    public $tagValue;

}

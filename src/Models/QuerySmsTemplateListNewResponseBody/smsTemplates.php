<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloudExtend\Dysms\V20170620\Models\QuerySmsTemplateListNewResponseBody;

use AlibabaCloud\Tea\Model;

use AlibabaCloudExtend\Dysms\V20170620\Models\QuerySmsTemplateListNewResponseBody\smsTemplates\smsTemplate;

class smsTemplates extends Model {
    protected $_name = [
        'smsTemplate' => 'SmsTemplate',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->smsTemplate) {
            $res['SmsTemplate'] = [];
            if(null !== $this->smsTemplate && is_array($this->smsTemplate)){
                $n = 0;
                foreach($this->smsTemplate as $item){
                    $res['SmsTemplate'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        return $res;
    }
    /**
     * @param array $map
     * @return smsTemplates
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['SmsTemplate'])){
            if(!empty($map['SmsTemplate'])){
                $model->smsTemplate = [];
                $n = 0;
                foreach($map['SmsTemplate'] as $item) {
                    $model->smsTemplate[$n++] = null !== $item ? smsTemplate::fromMap($item) : $item;
                }
            }
        }
        return $model;
    }
    /**
     * @var smsTemplate[]
     */
    public $smsTemplate;

}

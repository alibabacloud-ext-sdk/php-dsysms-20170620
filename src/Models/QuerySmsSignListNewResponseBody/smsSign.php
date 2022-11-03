<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloudExtend\Dysms\V20170620\Models\QuerySmsSignListNewResponseBody;

use AlibabaCloud\Tea\Model;

class smsSign extends Model {
    protected $_name = [
        'smsSign' => 'SmsSign',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->smsSign) {
            $res['SmsSign'] = [];
            if(null !== $this->smsSign && is_array($this->smsSign)){
                $n = 0;
                foreach($this->smsSign as $item){
                    $res['SmsSign'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        return $res;
    }
    /**
     * @param array $map
     * @return smsSign
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['SmsSign'])){
            if(!empty($map['SmsSign'])){
                $model->smsSign = [];
                $n = 0;
                foreach($map['SmsSign'] as $item) {
                    $model->smsSign[$n++] = null !== $item ? \AlibabaCloudExtend\Dysms\V20170620\Models\QuerySmsSignListNewResponseBody\smsSign\smsSign::fromMap($item) : $item;
                }
            }
        }
        return $model;
    }
    /**
     * @var \AlibabaCloudExtend\Dysms\V20170620\Models\QuerySmsSignListNewResponseBody\smsSign\smsSign[]
     */
    public $smsSign;

}

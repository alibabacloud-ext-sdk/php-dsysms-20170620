<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloudExtend\Dysms\V20170620\Models;

use AlibabaCloud\Tea\Model;

class QuerySmsTemplateByCodeNewRequest extends Model {
    protected $_name = [
        'templateCode' => 'TemplateCode',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->templateCode) {
            $res['TemplateCode'] = $this->templateCode;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return QuerySmsTemplateByCodeNewRequest
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['TemplateCode'])){
            $model->templateCode = $map['TemplateCode'];
        }
        return $model;
    }
    /**
     * @var string
     */
    public $templateCode;

}

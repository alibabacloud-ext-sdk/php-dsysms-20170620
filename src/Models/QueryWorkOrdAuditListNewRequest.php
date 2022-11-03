<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloudExtend\Dysms\V20170620\Models;

use AlibabaCloud\Tea\Model;

class QueryWorkOrdAuditListNewRequest extends Model {
    protected $_name = [
        'orderId' => 'OrderId',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->orderId) {
            $res['OrderId'] = $this->orderId;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return QueryWorkOrdAuditListNewRequest
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['OrderId'])){
            $model->orderId = $map['OrderId'];
        }
        return $model;
    }
    /**
     * @var string
     */
    public $orderId;

}

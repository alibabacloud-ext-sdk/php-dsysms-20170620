<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloudExtend\Dysms\V20170620\Models;

use AlibabaCloud\Tea\Model;

use AlibabaCloudExtend\Dysms\V20170620\Models\QuerySmsSignListNewResponseBody\smsSign;

class QuerySmsSignListNewResponseBody extends Model {
    protected $_name = [
        'pageSize' => 'PageSize',
        'requestId' => 'RequestId',
        'total' => 'Total',
        'pageNo' => 'PageNo',
        'smsSign' => 'SmsSign',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->total) {
            $res['Total'] = $this->total;
        }
        if (null !== $this->pageNo) {
            $res['PageNo'] = $this->pageNo;
        }
        if (null !== $this->smsSign) {
            $res['SmsSign'] = null !== $this->smsSign ? $this->smsSign->toMap() : null;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return QuerySmsSignListNewResponseBody
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['PageSize'])){
            $model->pageSize = $map['PageSize'];
        }
        if(isset($map['RequestId'])){
            $model->requestId = $map['RequestId'];
        }
        if(isset($map['Total'])){
            $model->total = $map['Total'];
        }
        if(isset($map['PageNo'])){
            $model->pageNo = $map['PageNo'];
        }
        if(isset($map['SmsSign'])){
            $model->smsSign = smsSign::fromMap($map['SmsSign']);
        }
        return $model;
    }
    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $total;

    /**
     * @var int
     */
    public $pageNo;

    /**
     * @var smsSign
     */
    public $smsSign;

}

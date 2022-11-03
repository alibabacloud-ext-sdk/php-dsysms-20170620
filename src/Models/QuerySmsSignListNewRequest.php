<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloudExtend\Dysms\V20170620\Models;

use AlibabaCloud\Tea\Model;

class QuerySmsSignListNewRequest extends Model {
    protected $_name = [
        'pageNo' => 'PageNo',
        'pageSize' => 'PageSize',
        'serviceType' => 'ServiceType',
        'isGlobeSign' => 'IsGlobeSign',
        'auditState' => 'AuditState',
        'signName' => 'SignName',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->pageNo) {
            $res['PageNo'] = $this->pageNo;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->serviceType) {
            $res['ServiceType'] = $this->serviceType;
        }
        if (null !== $this->isGlobeSign) {
            $res['IsGlobeSign'] = $this->isGlobeSign;
        }
        if (null !== $this->auditState) {
            $res['AuditState'] = $this->auditState;
        }
        if (null !== $this->signName) {
            $res['SignName'] = $this->signName;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return QuerySmsSignListNewRequest
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['PageNo'])){
            $model->pageNo = $map['PageNo'];
        }
        if(isset($map['PageSize'])){
            $model->pageSize = $map['PageSize'];
        }
        if(isset($map['ServiceType'])){
            $model->serviceType = $map['ServiceType'];
        }
        if(isset($map['IsGlobeSign'])){
            $model->isGlobeSign = $map['IsGlobeSign'];
        }
        if(isset($map['AuditState'])){
            $model->auditState = $map['AuditState'];
        }
        if(isset($map['SignName'])){
            $model->signName = $map['SignName'];
        }
        return $model;
    }
    /**
     * @var int
     */
    public $pageNo;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $serviceType;

    /**
     * @var string
     */
    public $isGlobeSign;

    /**
     * @var string
     */
    public $auditState;

    /**
     * @var string
     */
    public $signName;

}

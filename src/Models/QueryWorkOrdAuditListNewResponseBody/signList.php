<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloudExtend\Dysms\V20170620\Models\QueryWorkOrdAuditListNewResponseBody;

use AlibabaCloud\Tea\Model;

use AlibabaCloudExtend\Dysms\V20170620\Models\QueryWorkOrdAuditListNewResponseBody\signList\param;

class signList extends Model {
    protected $_name = [
        'auditRemark' => 'AuditRemark',
        'ordId' => 'OrdId',
        'ordStatus' => 'OrdStatus',
        'auditResult' => 'AuditResult',
        'createDate' => 'CreateDate',
        'param' => 'Param',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->auditRemark) {
            $res['AuditRemark'] = $this->auditRemark;
        }
        if (null !== $this->ordId) {
            $res['OrdId'] = $this->ordId;
        }
        if (null !== $this->ordStatus) {
            $res['OrdStatus'] = $this->ordStatus;
        }
        if (null !== $this->auditResult) {
            $res['AuditResult'] = $this->auditResult;
        }
        if (null !== $this->createDate) {
            $res['CreateDate'] = $this->createDate;
        }
        if (null !== $this->param) {
            $res['Param'] = null !== $this->param ? $this->param->toMap() : null;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return signList
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['AuditRemark'])){
            $model->auditRemark = $map['AuditRemark'];
        }
        if(isset($map['OrdId'])){
            $model->ordId = $map['OrdId'];
        }
        if(isset($map['OrdStatus'])){
            $model->ordStatus = $map['OrdStatus'];
        }
        if(isset($map['AuditResult'])){
            $model->auditResult = $map['AuditResult'];
        }
        if(isset($map['CreateDate'])){
            $model->createDate = $map['CreateDate'];
        }
        if(isset($map['Param'])){
            $model->param = param::fromMap($map['Param']);
        }
        return $model;
    }
    /**
     * @var string
     */
    public $auditRemark;

    /**
     * @var string
     */
    public $ordId;

    /**
     * @var string
     */
    public $ordStatus;

    /**
     * @var string
     */
    public $auditResult;

    /**
     * @var string
     */
    public $createDate;

    /**
     * @var param
     */
    public $param;

}

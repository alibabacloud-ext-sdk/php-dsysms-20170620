<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloudExtend\Dysms\V20170620\Models\QuerySmsSignListNewResponseBody\smsSign;

use AlibabaCloud\Tea\Model;

class smsSign extends Model {
    protected $_name = [
        'sceneType' => 'SceneType',
        'operateDateStr' => 'OperateDateStr',
        'auditInfo' => 'AuditInfo',
        'orderId' => 'OrderId',
        'signName' => 'SignName',
        'remark' => 'Remark',
        'gmtCreateStr' => 'GmtCreateStr',
        'isDefaultSign' => 'IsDefaultSign',
        'serviceType' => 'ServiceType',
        'auditRemark' => 'AuditRemark',
        'id' => 'Id',
        'extendMessage' => 'ExtendMessage',
        'auditState' => 'AuditState',
        'signType' => 'SignType',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->sceneType) {
            $res['SceneType'] = $this->sceneType;
        }
        if (null !== $this->operateDateStr) {
            $res['OperateDateStr'] = $this->operateDateStr;
        }
        if (null !== $this->auditInfo) {
            $res['AuditInfo'] = $this->auditInfo;
        }
        if (null !== $this->orderId) {
            $res['OrderId'] = $this->orderId;
        }
        if (null !== $this->signName) {
            $res['SignName'] = $this->signName;
        }
        if (null !== $this->remark) {
            $res['Remark'] = $this->remark;
        }
        if (null !== $this->gmtCreateStr) {
            $res['GmtCreateStr'] = $this->gmtCreateStr;
        }
        if (null !== $this->isDefaultSign) {
            $res['IsDefaultSign'] = $this->isDefaultSign;
        }
        if (null !== $this->serviceType) {
            $res['ServiceType'] = $this->serviceType;
        }
        if (null !== $this->auditRemark) {
            $res['AuditRemark'] = $this->auditRemark;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->extendMessage) {
            $res['ExtendMessage'] = $this->extendMessage;
        }
        if (null !== $this->auditState) {
            $res['AuditState'] = $this->auditState;
        }
        if (null !== $this->signType) {
            $res['SignType'] = $this->signType;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return smsSign
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['SceneType'])){
            $model->sceneType = $map['SceneType'];
        }
        if(isset($map['OperateDateStr'])){
            $model->operateDateStr = $map['OperateDateStr'];
        }
        if(isset($map['AuditInfo'])){
            $model->auditInfo = $map['AuditInfo'];
        }
        if(isset($map['OrderId'])){
            $model->orderId = $map['OrderId'];
        }
        if(isset($map['SignName'])){
            $model->signName = $map['SignName'];
        }
        if(isset($map['Remark'])){
            $model->remark = $map['Remark'];
        }
        if(isset($map['GmtCreateStr'])){
            $model->gmtCreateStr = $map['GmtCreateStr'];
        }
        if(isset($map['IsDefaultSign'])){
            $model->isDefaultSign = $map['IsDefaultSign'];
        }
        if(isset($map['ServiceType'])){
            $model->serviceType = $map['ServiceType'];
        }
        if(isset($map['AuditRemark'])){
            $model->auditRemark = $map['AuditRemark'];
        }
        if(isset($map['Id'])){
            $model->id = $map['Id'];
        }
        if(isset($map['ExtendMessage'])){
            $model->extendMessage = $map['ExtendMessage'];
        }
        if(isset($map['AuditState'])){
            $model->auditState = $map['AuditState'];
        }
        if(isset($map['SignType'])){
            $model->signType = $map['SignType'];
        }
        return $model;
    }
    /**
     * @var int
     */
    public $sceneType;

    /**
     * @var string
     */
    public $operateDateStr;

    /**
     * @var string
     */
    public $auditInfo;

    /**
     * @var string
     */
    public $orderId;

    /**
     * @var string
     */
    public $signName;

    /**
     * @var string
     */
    public $remark;

    /**
     * @var string
     */
    public $gmtCreateStr;

    /**
     * @var bool
     */
    public $isDefaultSign;

    /**
     * @var int
     */
    public $serviceType;

    /**
     * @var string
     */
    public $auditRemark;

    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $extendMessage;

    /**
     * @var string
     */
    public $auditState;

    /**
     * @var string
     */
    public $signType;

}

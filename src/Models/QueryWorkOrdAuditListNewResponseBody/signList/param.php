<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloudExtend\Dysms\V20170620\Models\QueryWorkOrdAuditListNewResponseBody\signList;

use AlibabaCloud\Tea\Model;

class param extends Model {
    protected $_name = [
        'sceneType' => 'SceneType',
        'businessType' => 'BusinessType',
        'partnerId' => 'PartnerId',
        'id' => 'Id',
        'extendMessage' => 'ExtendMessage',
        'orderId' => 'OrderId',
        'signName' => 'SignName',
        'signType' => 'SignType',
        'remark' => 'Remark',
        'gmtCreateStr' => 'GmtCreateStr',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->sceneType) {
            $res['SceneType'] = $this->sceneType;
        }
        if (null !== $this->businessType) {
            $res['BusinessType'] = $this->businessType;
        }
        if (null !== $this->partnerId) {
            $res['PartnerId'] = $this->partnerId;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->extendMessage) {
            $res['ExtendMessage'] = $this->extendMessage;
        }
        if (null !== $this->orderId) {
            $res['OrderId'] = $this->orderId;
        }
        if (null !== $this->signName) {
            $res['SignName'] = $this->signName;
        }
        if (null !== $this->signType) {
            $res['SignType'] = $this->signType;
        }
        if (null !== $this->remark) {
            $res['Remark'] = $this->remark;
        }
        if (null !== $this->gmtCreateStr) {
            $res['GmtCreateStr'] = $this->gmtCreateStr;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return param
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['SceneType'])){
            $model->sceneType = $map['SceneType'];
        }
        if(isset($map['BusinessType'])){
            $model->businessType = $map['BusinessType'];
        }
        if(isset($map['PartnerId'])){
            $model->partnerId = $map['PartnerId'];
        }
        if(isset($map['Id'])){
            $model->id = $map['Id'];
        }
        if(isset($map['ExtendMessage'])){
            $model->extendMessage = $map['ExtendMessage'];
        }
        if(isset($map['OrderId'])){
            $model->orderId = $map['OrderId'];
        }
        if(isset($map['SignName'])){
            $model->signName = $map['SignName'];
        }
        if(isset($map['SignType'])){
            $model->signType = $map['SignType'];
        }
        if(isset($map['Remark'])){
            $model->remark = $map['Remark'];
        }
        if(isset($map['GmtCreateStr'])){
            $model->gmtCreateStr = $map['GmtCreateStr'];
        }
        return $model;
    }
    /**
     * @var int
     */
    public $sceneType;

    /**
     * @var int
     */
    public $businessType;

    /**
     * @var string
     */
    public $partnerId;

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
    public $orderId;

    /**
     * @var string
     */
    public $signName;

    /**
     * @var string
     */
    public $signType;

    /**
     * @var string
     */
    public $remark;

    /**
     * @var string
     */
    public $gmtCreateStr;

}

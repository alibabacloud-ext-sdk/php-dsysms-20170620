<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloudExtend\Dysms\V20170620\Models;

use AlibabaCloud\Tea\Model;

class QuerySmsTemplateByCodeNewResponseBody extends Model {
    protected $_name = [
        'requestId' => 'RequestId',
        'auditInfo' => 'AuditInfo',
        'templateRule' => 'TemplateRule',
        'smsContent' => 'SmsContent',
        'bizType' => 'BizType',
        'from' => 'From',
        'orderId' => 'OrderId',
        'gmtCreateStr' => 'GmtCreateStr',
        'templateCode' => 'TemplateCode',
        'auditRemarkInfo' => 'AuditRemarkInfo',
        'templateName' => 'TemplateName',
        'openTag' => 'OpenTag',
        'signType' => 'SignType',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->auditInfo) {
            $res['AuditInfo'] = $this->auditInfo;
        }
        if (null !== $this->templateRule) {
            $res['TemplateRule'] = $this->templateRule;
        }
        if (null !== $this->smsContent) {
            $res['SmsContent'] = $this->smsContent;
        }
        if (null !== $this->bizType) {
            $res['BizType'] = $this->bizType;
        }
        if (null !== $this->from) {
            $res['From'] = $this->from;
        }
        if (null !== $this->orderId) {
            $res['OrderId'] = $this->orderId;
        }
        if (null !== $this->gmtCreateStr) {
            $res['GmtCreateStr'] = $this->gmtCreateStr;
        }
        if (null !== $this->templateCode) {
            $res['TemplateCode'] = $this->templateCode;
        }
        if (null !== $this->auditRemarkInfo) {
            $res['AuditRemarkInfo'] = $this->auditRemarkInfo;
        }
        if (null !== $this->templateName) {
            $res['TemplateName'] = $this->templateName;
        }
        if (null !== $this->openTag) {
            $res['OpenTag'] = $this->openTag;
        }
        if (null !== $this->signType) {
            $res['SignType'] = $this->signType;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return QuerySmsTemplateByCodeNewResponseBody
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['RequestId'])){
            $model->requestId = $map['RequestId'];
        }
        if(isset($map['AuditInfo'])){
            $model->auditInfo = $map['AuditInfo'];
        }
        if(isset($map['TemplateRule'])){
            $model->templateRule = $map['TemplateRule'];
        }
        if(isset($map['SmsContent'])){
            $model->smsContent = $map['SmsContent'];
        }
        if(isset($map['BizType'])){
            $model->bizType = $map['BizType'];
        }
        if(isset($map['From'])){
            $model->from = $map['From'];
        }
        if(isset($map['OrderId'])){
            $model->orderId = $map['OrderId'];
        }
        if(isset($map['GmtCreateStr'])){
            $model->gmtCreateStr = $map['GmtCreateStr'];
        }
        if(isset($map['TemplateCode'])){
            $model->templateCode = $map['TemplateCode'];
        }
        if(isset($map['AuditRemarkInfo'])){
            $model->auditRemarkInfo = $map['AuditRemarkInfo'];
        }
        if(isset($map['TemplateName'])){
            $model->templateName = $map['TemplateName'];
        }
        if(isset($map['OpenTag'])){
            $model->openTag = $map['OpenTag'];
        }
        if(isset($map['SignType'])){
            $model->signType = $map['SignType'];
        }
        return $model;
    }
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $auditInfo;

    /**
     * @var string
     */
    public $templateRule;

    /**
     * @var string
     */
    public $smsContent;

    /**
     * @var string
     */
    public $bizType;

    /**
     * @var string
     */
    public $from;

    /**
     * @var string
     */
    public $orderId;

    /**
     * @var string
     */
    public $gmtCreateStr;

    /**
     * @var string
     */
    public $templateCode;

    /**
     * @var string
     */
    public $auditRemarkInfo;

    /**
     * @var string
     */
    public $templateName;

    /**
     * @var bool
     */
    public $openTag;

    /**
     * @var int
     */
    public $signType;

}

<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloudExtend\Dysms\V20170620\Models\QuerySmsTemplateListNewResponseBody\smsTemplates;

use AlibabaCloud\Tea\Model;

use AlibabaCloudExtend\Dysms\V20170620\Models\QuerySmsTemplateListNewResponseBody\smsTemplates\smsTemplate\tags;

class smsTemplate extends Model {
    protected $_name = [
        'isRecently' => 'IsRecently',
        'templateRule' => 'TemplateRule',
        'smsContent' => 'SmsContent',
        'bizType' => 'BizType',
        'isDefaultTemplate' => 'IsDefaultTemplate',
        'gmtCreateStr' => 'GmtCreateStr',
        'templateCode' => 'TemplateCode',
        'auditRemarkInfo' => 'AuditRemarkInfo',
        'templateName' => 'TemplateName',
        'id' => 'Id',
        'auditState' => 'AuditState',
        'signType' => 'SignType',
        'tags' => 'Tags',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->isRecently) {
            $res['IsRecently'] = $this->isRecently;
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
        if (null !== $this->isDefaultTemplate) {
            $res['IsDefaultTemplate'] = $this->isDefaultTemplate;
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
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->auditState) {
            $res['AuditState'] = $this->auditState;
        }
        if (null !== $this->signType) {
            $res['SignType'] = $this->signType;
        }
        if (null !== $this->tags) {
            $res['Tags'] = null !== $this->tags ? $this->tags->toMap() : null;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return smsTemplate
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['IsRecently'])){
            $model->isRecently = $map['IsRecently'];
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
        if(isset($map['IsDefaultTemplate'])){
            $model->isDefaultTemplate = $map['IsDefaultTemplate'];
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
        if(isset($map['Id'])){
            $model->id = $map['Id'];
        }
        if(isset($map['AuditState'])){
            $model->auditState = $map['AuditState'];
        }
        if(isset($map['SignType'])){
            $model->signType = $map['SignType'];
        }
        if(isset($map['Tags'])){
            $model->tags = tags::fromMap($map['Tags']);
        }
        return $model;
    }
    /**
     * @var bool
     */
    public $isRecently;

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
     * @var bool
     */
    public $isDefaultTemplate;

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
     * @var string
     */
    public $id;

    /**
     * @var string
     */
    public $auditState;

    /**
     * @var string
     */
    public $signType;

    /**
     * @var tags
     */
    public $tags;

}

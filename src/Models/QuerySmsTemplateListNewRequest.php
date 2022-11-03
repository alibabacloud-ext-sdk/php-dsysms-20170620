<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloudExtend\Dysms\V20170620\Models;

use AlibabaCloud\Tea\Model;

use AlibabaCloudExtend\Dysms\V20170620\Models\QuerySmsTemplateListNewRequest\tagList;

class QuerySmsTemplateListNewRequest extends Model {
    protected $_name = [
        'pageNo' => 'PageNo',
        'pageSize' => 'PageSize',
        'bizType' => 'BizType',
        'prodType' => 'ProdType',
        'tagList' => 'TagList',
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
        if (null !== $this->bizType) {
            $res['BizType'] = $this->bizType;
        }
        if (null !== $this->prodType) {
            $res['ProdType'] = $this->prodType;
        }
        if (null !== $this->tagList) {
            $res['TagList'] = [];
            if(null !== $this->tagList && is_array($this->tagList)){
                $n = 0;
                foreach($this->tagList as $item){
                    $res['TagList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        return $res;
    }
    /**
     * @param array $map
     * @return QuerySmsTemplateListNewRequest
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['PageNo'])){
            $model->pageNo = $map['PageNo'];
        }
        if(isset($map['PageSize'])){
            $model->pageSize = $map['PageSize'];
        }
        if(isset($map['BizType'])){
            if(!empty($map['BizType'])){
                $model->bizType = $map['BizType'];
            }
        }
        if(isset($map['ProdType'])){
            if(!empty($map['ProdType'])){
                $model->prodType = $map['ProdType'];
            }
        }
        if(isset($map['TagList'])){
            if(!empty($map['TagList'])){
                $model->tagList = [];
                $n = 0;
                foreach($map['TagList'] as $item) {
                    $model->tagList[$n++] = null !== $item ? tagList::fromMap($item) : $item;
                }
            }
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
     * @var string[]
     */
    public $bizType;

    /**
     * @var string[]
     */
    public $prodType;

    /**
     * @var tagList[]
     */
    public $tagList;

}

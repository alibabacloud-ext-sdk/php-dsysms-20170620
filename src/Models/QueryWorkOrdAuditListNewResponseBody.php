<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloudExtend\Dysms\V20170620\Models;

use AlibabaCloud\Tea\Model;

use AlibabaCloudExtend\Dysms\V20170620\Models\QueryWorkOrdAuditListNewResponseBody\signList;

class QueryWorkOrdAuditListNewResponseBody extends Model {
    protected $_name = [
        'requestId' => 'RequestId',
        'pageSize' => 'PageSize',
        'total' => 'Total',
        'pageNo' => 'PageNo',
        'signList' => 'List',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->total) {
            $res['Total'] = $this->total;
        }
        if (null !== $this->pageNo) {
            $res['PageNo'] = $this->pageNo;
        }
        if (null !== $this->signList) {
            $res['List'] = [];
            if(null !== $this->signList && is_array($this->signList)){
                $n = 0;
                foreach($this->signList as $item){
                    $res['List'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        return $res;
    }
    /**
     * @param array $map
     * @return QueryWorkOrdAuditListNewResponseBody
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['RequestId'])){
            $model->requestId = $map['RequestId'];
        }
        if(isset($map['PageSize'])){
            $model->pageSize = $map['PageSize'];
        }
        if(isset($map['Total'])){
            $model->total = $map['Total'];
        }
        if(isset($map['PageNo'])){
            $model->pageNo = $map['PageNo'];
        }
        if(isset($map['List'])){
            if(!empty($map['List'])){
                $model->signList = [];
                $n = 0;
                foreach($map['List'] as $item) {
                    $model->signList[$n++] = null !== $item ? signList::fromMap($item) : $item;
                }
            }
        }
        return $model;
    }
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var int
     */
    public $total;

    /**
     * @var int
     */
    public $pageNo;

    /**
     * @var signList[]
     */
    public $signList;

}

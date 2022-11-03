<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloudExtend\Dysms\V20170620;

use Darabonba\OpenApi\OpenApiClient;
use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;

use AlibabaCloudExtend\Dysms\V20170620\Models\QueryWorkOrdAuditListNewRequest;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use AlibabaCloudExtend\Dysms\V20170620\Models\QueryWorkOrdAuditListNewResponse;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use AlibabaCloudExtend\Dysms\V20170620\Models\QuerySmsSignListNewRequest;
use AlibabaCloudExtend\Dysms\V20170620\Models\QuerySmsSignListNewResponse;
use AlibabaCloudExtend\Dysms\V20170620\Models\QuerySmsTemplateByCodeNewRequest;
use AlibabaCloudExtend\Dysms\V20170620\Models\QuerySmsTemplateByCodeNewResponse;
use AlibabaCloudExtend\Dysms\V20170620\Models\QuerySmsTemplateListNewRequest;
use AlibabaCloudExtend\Dysms\V20170620\Models\QuerySmsTemplateListNewResponse;

class Dysms extends OpenApiClient {
    public function __construct($config){
        parent::__construct($config);
        $this->_endpointRule = "central";
        $this->_endpointMap = [];
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint("dysms", $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
    }

    /**
     * @param string $productId
     * @param string $regionId
     * @param string $endpointRule
     * @param string $network
     * @param string $suffix
     * @param string[] $endpointMap
     * @param string $endpoint
     * @return string
     */
    public function getEndpoint($productId, $regionId, $endpointRule, $network, $suffix, $endpointMap, $endpoint){
        return Endpoint::getEndpointRules($productId, $regionId, $endpointRule, $network, $suffix);
    }

    /**
     * @param QueryWorkOrdAuditListNewRequest $request
     * @param RuntimeOptions $runtime
     * @return QueryWorkOrdAuditListNewResponse
     */
    public function queryWorkOrdAuditListNewWithOptions($request, $runtime){
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->orderId)) {
            $query["OrderId"] = $request->orderId;
        }
        $req = new OpenApiRequest([
            "query" => OpenApiUtilClient::query($query)
        ]);
        $params = new Params([
            "action" => "QueryWorkOrdAuditListNew",
            "version" => "2017-06-20",
            "protocol" => "HTTPS",
            "pathname" => "/",
            "method" => "POST",
            "authType" => "AK",
            "style" => "RPC",
            "reqBodyType" => "formData",
            "bodyType" => "json"
        ]);
        return QueryWorkOrdAuditListNewResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param QueryWorkOrdAuditListNewRequest $request
     * @return QueryWorkOrdAuditListNewResponse
     */
    public function queryWorkOrdAuditListNew($request){
        $runtime = new RuntimeOptions([]);
        return $this->queryWorkOrdAuditListNewWithOptions($request, $runtime);
    }

    /**
     * @param QuerySmsSignListNewRequest $request
     * @param RuntimeOptions $runtime
     * @return QuerySmsSignListNewResponse
     */
    public function querySmsSignListNewWithOptions($request, $runtime){
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->pageNo)) {
            $query["PageNo"] = $request->pageNo;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query["PageSize"] = $request->pageSize;
        }
        if (!Utils::isUnset($request->serviceType)) {
            $query["ServiceType"] = $request->serviceType;
        }
        if (!Utils::isUnset($request->isGlobeSign)) {
            $query["IsGlobeSign"] = $request->isGlobeSign;
        }
        if (!Utils::isUnset($request->auditState)) {
            $query["AuditState"] = $request->auditState;
        }
        if (!Utils::isUnset($request->signName)) {
            $query["SignName"] = $request->signName;
        }
        $req = new OpenApiRequest([
            "query" => OpenApiUtilClient::query($query)
        ]);
        $params = new Params([
            "action" => "QuerySmsSignListNew",
            "version" => "2017-06-20",
            "protocol" => "HTTPS",
            "pathname" => "/",
            "method" => "POST",
            "authType" => "AK",
            "style" => "RPC",
            "reqBodyType" => "formData",
            "bodyType" => "json"
        ]);
        return QuerySmsSignListNewResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param QuerySmsSignListNewRequest $request
     * @return QuerySmsSignListNewResponse
     */
    public function querySmsSignListNew($request){
        $runtime = new RuntimeOptions([]);
        return $this->querySmsSignListNewWithOptions($request, $runtime);
    }

    /**
     * @param QuerySmsTemplateByCodeNewRequest $request
     * @param RuntimeOptions $runtime
     * @return QuerySmsTemplateByCodeNewResponse
     */
    public function querySmsTemplateByCodeNewWithOptions($request, $runtime){
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->templateCode)) {
            $query["TemplateCode"] = $request->templateCode;
        }
        $req = new OpenApiRequest([
            "query" => OpenApiUtilClient::query($query)
        ]);
        $params = new Params([
            "action" => "QuerySmsTemplateByCodeNew",
            "version" => "2017-06-20",
            "protocol" => "HTTPS",
            "pathname" => "/",
            "method" => "POST",
            "authType" => "AK",
            "style" => "RPC",
            "reqBodyType" => "formData",
            "bodyType" => "json"
        ]);
        return QuerySmsTemplateByCodeNewResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param QuerySmsTemplateByCodeNewRequest $request
     * @return QuerySmsTemplateByCodeNewResponse
     */
    public function querySmsTemplateByCodeNew($request){
        $runtime = new RuntimeOptions([]);
        return $this->querySmsTemplateByCodeNewWithOptions($request, $runtime);
    }

    /**
     * @param QuerySmsTemplateListNewRequest $request
     * @param RuntimeOptions $runtime
     * @return QuerySmsTemplateListNewResponse
     */
    public function querySmsTemplateListNewWithOptions($request, $runtime){
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->pageNo)) {
            $query["PageNo"] = $request->pageNo;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query["PageSize"] = $request->pageSize;
        }
        if (!Utils::isUnset($request->bizType)) {
            $query["BizType"] = $request->bizType;
        }
        if (!Utils::isUnset($request->prodType)) {
            $query["ProdType"] = $request->prodType;
        }
        if (!Utils::isUnset($request->tagList)) {
            $query["TagListString"] = Utils::toJSONString($request->tagList);
        }
        $req = new OpenApiRequest([
            "query" => OpenApiUtilClient::query($query)
        ]);
        $params = new Params([
            "action" => "QuerySmsTemplateListNew",
            "version" => "2017-06-20",
            "protocol" => "HTTPS",
            "pathname" => "/",
            "method" => "POST",
            "authType" => "AK",
            "style" => "RPC",
            "reqBodyType" => "formData",
            "bodyType" => "json"
        ]);
        return QuerySmsTemplateListNewResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param QuerySmsTemplateListNewRequest $request
     * @return QuerySmsTemplateListNewResponse
     */
    public function querySmsTemplateListNew($request){
        $runtime = new RuntimeOptions([]);
        return $this->querySmsTemplateListNewWithOptions($request, $runtime);
    }
}

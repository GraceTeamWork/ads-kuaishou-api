<?php
/**
 * 查询图片信息
 * User: yueguang
 * Date: 2022/4/31
 * Time: 11:10
 */

namespace ksTool\File;

use kscore\Helper\RequestCheckUtil;
use kscore\Profile\RpcRequest;
use ksTool\CreativeWord\ToolsCreativeWordCreate;

class FileImageAdGet extends RpcRequest
{
    protected $url = '/v1/file/ad/image/get/';
    protected $method = 'GET';
    protected $content_type = 'application/json';

    /**
     * 广告主ID
     * @var int $advertiser_id
     */
    protected $advertiser_id;

    /**
     * 图片ids
     * @var array $image_ids
     */
    protected $image_ids;

    /**
     * @param mixed $args
     * @return $this
     */
    public function setArgs($args)
    {
        foreach ($args as $key => $value) {
            $this->params[$key] = $this->{$key} = $value;
        }
        return $this;
    }

    /**
     * @throws \kscore\Exception\InvalidParamException
     */
    public function check()
    {
        RequestCheckUtil::checkNotNull($this->advertiser_id, 'advertiser_id');
        RequestCheckUtil::checkNotNull($this->image_ids, 'image_ids');
    }
}

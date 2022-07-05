<?php
/**
 * 查看视频信息
 * User: yueguang
 * Date: 2022/4/31
 * Time: 11:17
 */

namespace ksTool\File;

use kscore\Helper\RequestCheckUtil;
use kscore\Profile\RpcRequest;
use ksTool\CreativeWord\ToolsCreativeWordCreate;

class FileVideoAdGet extends RpcRequest
{
    protected $url = '/v1/file/ad/video/get/';
    protected $method = 'GET';
    protected $content_type = 'application/json';

    /**
     * 广告主ID
     * @var string $advertiser_id
     */
    protected $advertiser_id;

    /**
     * 视频ids
     * @var array $video_ids
     */
    protected $video_ids;

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
        RequestCheckUtil::checkNotNull($this->video_ids, 'video_ids');
    }
}

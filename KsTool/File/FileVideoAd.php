<?php
/**
 * 上传视频
 * User: yueguang
 * Date: 2022/4/31
 * Time: 10:57
 */

namespace KsTool\File;

use Kscore\Helper\RequestCheckUtil;
use Kscore\Profile\RpcRequest;

class FileVideoAd extends RpcRequest
{
    protected $url = '/v2/file/ad/video/upload/';
    protected $method = 'POST';
    protected $content_type = 'multipart/form-data';
    protected $timeout = 600;

    /**
     * 广告主ID
     * @var string $advertiser_id
     */
    protected $advertiser_id;


    /**
     * 上传视频类型
     * @var string $type
     */
    protected $type = 1;

    /**
     * 视频的md5(用于服务端校验)
     * @var string $video_signature
     */
    protected $signature;

    /**
     * 视频文件,格式mp4、mpeg、3gp、avi
     * @var string $video_file
     */
    protected $file;

    /**
     * 视频文件名,
     * @var string $filename
     */
    protected $filename;

    /**
     * @return string
     */
    public function getAdvertiserId()
    {
        return $this->advertiser_id;
    }

    /**
     * @param string $advertiser_id
     * @return $this
     */
    public function setAdvertiserId($advertiser_id)
    {
        $this->params["advertiser_id"] = $advertiser_id;
        $this->advertiser_id = $advertiser_id;
        return $this;
    }

    /**
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param string $type
     * @return $this
     */
    public function setType($type)
    {
        $this->params["type"] = $type;
        $this->type = $type;
        return $this;
    }

    /**
     * @return string
     */
    public function getVideoSignature()
    {
        return $this->signature;
    }

    /**
     * @param string $signature
     * @return $this
     */
    public function setVideoSignature($signature)
    {
        $this->params["signature"] = $signature;
        $this->signature = $signature;
        return $this;
    }

    /**
     * @return string
     */
    public function getVideoFile()
    {
        return $this->file;
    }

    /**
     * @param string $video_file
     * @return $this
     */
    public function setVideoFile($file)
    {
        $this->params["file"] = '@' . $file;
        $this->file = $file;
        return $this;
    }

    /**
     * @return string
     */
    public function getFileName()
    {
        return $this->filename;
    }

    /**
     * @param string $upload_type
     * @return $this
     */
    public function setFileName($filename)
    {
        $this->params["photo_name"] = $filename;
        $this->filename = $filename;
        return $this;
    }

    /**
     * @throws \Kscore\Exception\InvalidParamException
     */
    public function check()
    {
        RequestCheckUtil::checkNotNull($this->advertiser_id, 'advertiser_id');
    }
}

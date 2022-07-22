<?php
/**
 * 广告图片
 * User: yueguang
 * Date: 2022/4/31
 * Time: 10:52
 */

namespace KsTool\File;

use Kscore\Helper\RequestCheckUtil;
use Kscore\Profile\RpcRequest;

class FileImageAd extends RpcRequest
{
    protected $url = '/v2/file/ad/image/upload/';
    protected $method = 'POST';
    protected $content_type = 'multipart/form-data';

    /**
     * 广告主ID
     * @var int $advertiser_id
     */
    protected $advertiser_id;

    /**
     * 上传图片类型
     * @var string $type
     */
    protected $type = 0;

    /**
     * 图片上传方式
     * 默认值: UPLOAD_BY_FILE
     * 允许值: "UPLOAD_BY_FILE", "UPLOAD_BY_URL"
     * @var string $upload_type
     */
    protected $upload_type = 'UPLOAD_BY_FILE';

    /**
     * 图片的md5(用于服务端校验)，upload_type为UPLOAD_BY_FILE必填
     * @var string $image_signature
     */
    protected $image_signature;

    /**
     * 图片文件,格式jpg, jpeg, png, bmp, gif, 大小1M内，upload_type为UPLOAD_BY_FILE必填
     * @var string $image_file
     */
    protected $image_file;

    /**
     * 图片url地址，如http://xxx.xxx，upload_type为UPLOAD_BY_URL必填
     * @var string $image_url
     */
    protected $image_url;

    /**
     * 素材名，upload_type为UPLOAD_BY_FILE必填
     * @var string $filename
     */
    protected $file;

    /**
     * @return int
     */
    public function getAdvertiserId()
    {
        return $this->advertiser_id;
    }

    /**
     * @param int $advertiser_id
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
    public function getUploadType()
    {
        return $this->upload_type;
    }

    /**
     * @param string $upload_type
     * @return $this
     */
    public function setUploadType($upload_type)
    {
        $this->params["upload_type"] = $upload_type;
        $this->upload_type = $upload_type;
        return $this;
    }

    /**
     * @return string
     */
    public function getImageSignature()
    {
        return $this->signature;
    }

    /**
     * @param string $signature
     * @return $this
     */
    public function setImageSignature($signature)
    {
        $this->params["signature"] = $signature;
        $this->signature = $signature;
        return $this;
    }

    /**
     * @return string
     */
    public function getImageFile()
    {
        return $this->file;
    }

    /**
     * @param string $file
     * @return $this
     */
    public function setImageFile($file)
    {
        $this->params["file"] = '@' . $file;
        $this->file = $file;
        return $this;
    }

    /**
     * @return string
     */
    public function getImageUrl()
    {
        return $this->url;
    }

    /**
     * @param string $url
     * @return $this
     */
    public function setImageUrl($image_url)
    {
        $this->params["url"] = $image_url;
        $this->image_url = $image_url;
        return $this;
    }

    /**
     * @throws \Kscore\Exception\InvalidParamException
     */
    public function check()
    {
        RequestCheckUtil::checkNotNull($this->advertiser_id, 'advertiser_id');
        if ($this->upload_type == 2) {
            RequestCheckUtil::checkNotNull($this->image_url, 'image_url');
        } else {
            RequestCheckUtil::checkNotNull($this->signature, 'signature');
            RequestCheckUtil::checkNotNull($this->file, 'file');
        }
    }
}

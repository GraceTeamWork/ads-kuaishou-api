<?php

namespace KsTool\QueryTool;

use Kscore\Profile\BaseModule;

class Module extends BaseModule
{
    // 获取行动号召按钮
    public function getActionBar()
    {
        return new GetActionBar($this->client);
    }

    // 获取可选的推荐封面
    public function getKeyFrame()
    {
        return new GetKeyFrame($this->client);
    }


}

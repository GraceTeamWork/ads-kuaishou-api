<?php
/**
 * 账号服务
 * Created by PhpStorm.
 * User: yueguang
 * Date: 2022/4/14
 * Time: 16:56
 */

namespace KsAdvertiser;

use Kscore\Profile\BaseModule;

class Module extends BaseModule
{
    // 资金和流水管理-查询账号余额
    public function fundGet()
    {
        return new FundGet($this->client);
    }

    // 广告账户预算-获取账户日预算
    public function budgetGet()
    {
        return new BudgetGet($this->client);
    }

    // 广告账户预算-修改账户预算
    public function updateBudget()
    {
        return new UpdateBudget($this->client);
    }

    // 获取广告账户流水信息
    public function fundDailyStat()
    {
        return new FundDailyStat($this->client);
    }
}

# ads-kuaishou-api
- 快手 KUAISHOU API SDK

## Installation

```
composer require grace-team-work/ads-kuaishou-api
```

## Requirements

- PHP 5.4 +

## Directory Structure
```
core/                          sdk核心
```

## Example

```php
// 获取token, refresh_token
$auth = new KuaishouSdk\KuaishouAuth(APPID, SECRET);
print_r($auth->getAccessToken(AUTH_CODE));

// 刷新token
print_r($auth->refreshToken(REFRESH_TOKEN));
```

```php
// 调用示例
$client = new KuaishouSdk\KuaishouClient(TOKEN);
$args = [];
$req = $client::AdvertisingDelivery()->campaignGet()->setArgs($args)->send();
var_dump($req->getBody());
```

## Method introduction
账号服务模块       |执行方式
  ------------- | -------------
 查询账号余额      |$client::Advertiser()->fundGet()|  
 获取账户预算      |$client::Advertiser()->budgetGet()|  
 更新账户预算      |$client::Advertiser()->updateBudget()|  
 查询账户流水      |$client::Advertiser()->fundDailyStat()|  

广告计划模块       |执行方式
  ------------- | -------------
 获取广告计划       |$client::AdvertisingDelivery()->campaignGet()| 
 创建广告计划      |$client::AdvertisingDelivery()->campaignCreate()| 
 修改广告计划       | $client::AdvertisingDelivery()->campaignUpdate()| 
 广告组更新状态   | $client::AdvertisingDelivery()->campaignUpdateStatus()| 

广告创意|执行方式 
 ------------- | -------------
 获取创意列表| $client::AdvertisingOriginality()->CreativeGet()| 
 创建广告创意|$client::AdvertisingOriginality()->CreativeCreate() | 
 修改创意信息| $client::AdvertisingOriginality()->CreativeUpdate() | 
 更新创意状态| $client::AdvertisingOriginality()->CreativeUpdateStatus()| 
 
 广告组|执行方式 
  ------------- | -------------
  创建广告组| $client::AdvertisingPlan()->AdCreate()| 
  获取广告组|$client::AdvertisingPlan()->AdGet() | 
  修改广告组| $client::AdvertisingPlan()->AdUpdate()| 
  更新广告组出价|  $client::AdvertisingPlan()->AdUpdateBid() | 
  更新广告组预算| $client::AdvertisingPlan()->AdUpdateBudget() | 
  更新广告组状态| $client::AdvertisingPlan()->AdUpdateStatus()| 

 数据报表|执行方式 
 ------------- | -------------
 广告主数据（新版）|$client::Report()->advertiserGet()| 
 广告组数据（新版）|$client::Report()->campaignGet() | 
 广告计划数据（新版）|$client::Report()->adGet() | 
 广告创意数据（新版）|$client::Report()->creativeGet() |
 
## License

licensed under the [Apache License 2.0](https://www.apache.org/licenses/LICENSE-2.0.html)

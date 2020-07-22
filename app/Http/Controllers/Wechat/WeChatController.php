<?php

namespace App\Http\Controllers\Wechat;

use App\Http\Controllers\Controller;
use Log;
use Carbon\Carbon;

class WeChatController extends Controller
{
    private $app;
    private $client;

    public function __construct()
    {
        $this->app = app('wechat.official_account');
        $this->client = new \GuzzleHttp\Client();
    }

    /**
     * 处理微信的请求消息
     *
     * @return string
     */
    public function serve()
    {
        Log::info('request arrived.'); # 注意：Log 为 Laravel 组件，所以它记的日志去 Laravel 日志看，而不是 EasyWeChat 日志

        $this->app->server->push(function($message){
            return "欢迎关注 中文乐高！";
        });

        return $this->app->server->serve();
    }
}

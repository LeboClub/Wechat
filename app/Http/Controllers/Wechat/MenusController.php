<?php

namespace App\Http\Controllers\Wechat;

// use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MenusController extends Controller
{
    private $app;

    public function __construct()
    {
        $this->app = app('wechat.official_account');
    }

    public function show()
    {
        dd($this->app->menu->current());
    }

    public function create()
    {
        $this->delete();
        $buttons = [
            [
                "name"         => "乐会员",
                "sub_button"   => [
                    [
                        "type" => "view",
                        "name" => "我的资料",
                        "url"  => "#"
                    ],
                ],
            ],

        ];
        $this->app->menu->create($buttons);
        dd($this->app->menu->current());
    }

    public function delete()
    {
        $this->app->menu->delete(); // 全部
        return '微信菜单删除成功。';
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Carbon\Carbon;

class PagesController extends Controller
{
    public function index()
    {
        $deadline = Carbon::create(2020, 7, 22, 20, 0, 0, 'Asia/Shanghai');
        if ($deadline->gt(Carbon::now())) {
            $data = array(
                'title' => '距离 2021 年春节',
                'endTime' => '2020-07-22 20:00:00',
            );
            return view('countdown', compact('data'));
        }else {
            do {
                $luckyers = $this->lottery();
            } while (!isset($luckyers));
            return view('result', compact('luckyers'));
        }
    }

    public function countdown()
    {
        $data = array(
            'title' => '距离 2021 年春节',
            'endTime' => '2021-02-12 00:00:00',
        );
        return view('countdown', compact('data'));
    }

    public function lottery()
    {
        $luckyers = Cache::get('luckyers', function() {
            $app = app('wechat.official_account');
            // 设置抽奖截止时间
            $deadline = strtotime('2020-07-16 00:00:00');
            // 设置抽奖人数
            $quantity = 2;
            // 获取所有关注公众号用户列表
            $users = $app->user->list();
            // 获取用户总数
            $total = $users['count'];
            // 新建一个空数组，用来存获奖名单；
            $luckyers = array();
            // 选取 8 名中奖人
            for ($i = 0; $i < $quantity; $i++)
            {
                do {
                    $rand = rand(0, $total - 1);
                    $openid = $users['data']['openid'][$rand];
                    $user = $app->user->get($openid);

                // 检查用户合法性
                } while($user['subscribe_time'] > $deadline && !in_array($luckyers, $user));
                // 把合法用户加入获奖人名单
                array_push($luckyers, $user);
            }
            // 把结果放到缓存里，加速访问
            Cache::put('luckyers', $luckyers);
        });
        return $luckyers;
    }
}

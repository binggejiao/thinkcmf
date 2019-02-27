<?php
// +----------------------------------------------------------------------
// | ThinkCMF [ WE CAN DO IT MORE SIMPLE ]
// +----------------------------------------------------------------------
// | Copyright (c) 2013-2019 http://www.thinkcmf.com All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: 老猫 <thinkcmf@126.com>
// +----------------------------------------------------------------------
return [
    'before_content'     => [
        "type"        => 3,//钩子类型(默认为应用钩子;2:应用钩子;3:模板钩子;4:后台模板钩子)
        "name"        => '主要内容之前', // 钩子名称
        "description" => "主要内容之前", //钩子描述
        "once"        => 0 // 是否只执行一次
    ],
    'log_write_done'     => [
        "type"        => 1,//钩子类型(默认为应用钩子;1:核心钩子;2:应用钩子;3:模板钩子;4:后台模板钩子)
        "name"        => '日志写入完成', // 钩子名称
        "description" => "日志写入完成", //钩子描述
        "once"        => 0 // 是否只执行一次
    ],
    'switch_theme'       => [
        "type"        => 1,//钩子类型(默认为应用钩子;1:核心钩子;2:应用钩子;3:模板钩子;4:后台模板钩子)
        "name"        => '前台模板切换', // 钩子名称
        "description" => "前台模板切换", //钩子描述
        "once"        => 1 // 是否只执行一次
    ],
    'switch_admin_theme' => [
        "type"        => 1,//钩子类型(默认为应用钩子;1:核心钩子;2:应用钩子;3:模板钩子;4:后台模板钩子)
        "name"        => '后台模板切换', // 钩子名称
        "description" => "后台模板切换", //钩子描述
        "once"        => 1 // 是否只执行一次
    ],
    'captcha_image'      => [
        "type"        => 1,//钩子类型(默认为应用钩子;1:核心钩子;2:应用钩子;3:模板钩子;4:后台模板钩子)
        "name"        => '验证码图片', // 钩子名称
        "description" => "验证码图片", //钩子描述
        "once"        => 1 // 是否只执行一次
    ],
];
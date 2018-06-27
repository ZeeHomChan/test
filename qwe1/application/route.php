<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006~2018 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------

return [
    '__pattern__' => [
        'name' => '\w+',
    ],
    '[hello]'     => [
        ':id'   => ['index/hello', ['method' => 'get'], ['id' => '\d+']],
        ':name' => ['index/hello', ['method' => 'post']],
    ],
    'register'=>'index/User/register',
    'login'=>'index/User/login',
    'liuLan'=>'index/Mobile/liuLan',
	'fyxs'=>'index/Mobile/fyxs',
	'ckxj/:version'=>'index/Mobile/ckxj',
    'jrgwc/:version'=>'index/Shoppingcart/jrgwc',
    'ckgwc'=>'index/Shoppingcart/ckgwc',
    'gbsl/:version/:num'=>'index/Shoppingcart/gbsl',
    'scsp/:version'=>'index/Shoppingcart/scsp',
    'scdd'=>'index/Orderform/scdd',
    'ckdd'=>'index/Orderform/ckdd',
    'exit'=>'index/Exit/exit',
];

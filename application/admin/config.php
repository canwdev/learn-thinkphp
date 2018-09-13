<?php


return [
    'template' => [
        'view_suffix' => 'html',
    ],

    // 视图输出字符串内容替换
    'view_replace_str' => [
        '__PUBLIC__' => '/public/',
        '__ADMIN__' => '/static/admin',
        '__ROOT__' => '/',
    ]
];

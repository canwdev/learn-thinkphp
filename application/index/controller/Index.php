<?php
namespace app\index\controller;

class Index
{
    public function index($name = 'World')
    {
        return 'Index';
    }

    // http://tp.canw.com/index.php/index/index/hhh
    public function hhh($name = 'World')
    {
        return 'hhh';
    }

    protected function hello2()
    {
        return '只是protected方法!';
    }

    private function hello3()
    {
        return '这是private方法!';
    }
}

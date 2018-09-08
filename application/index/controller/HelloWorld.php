<?php
namespace app\index\controller;

class HelloWorld
{
    // http://tp.canw.com/index.php/index/hello_world
    public function index($name = 'World')
    {
        return 'Hello '.$name.'!';
    }
}

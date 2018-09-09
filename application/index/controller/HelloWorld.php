<?php
namespace app\index\controller;

class HelloWorld
{
    // http://tp.localhost.com/index.php/index/hello_world
    public function index($name = 'World')
    {
        return 'Hello '.$name.'!';
    }
}

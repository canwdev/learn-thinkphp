<?php

namespace app\admin\controller;

use think\Controller;

use app\admin\model\Admin as AdminModel;

class Admin extends Controller
{
    public function lst()
    {
        // 查询数据库
        $ret = db('admin')->field(array('id','name'))->select();
        $this->console($ret);

        $this->assign('adminList',$ret);

        return view('list');
    }

    // 新增管理员页面
    public function add()
    {
        // 是否post接收到数据
        if (request()->isPost()) {
            $data = input('post.');

            $this->console($data);

            // 在表admin中插入数据,成功一般返回1
            // $ret = db('admin')->insert($data);

            // 使用model模型层操作数据
            $admin = new AdminModel();
            $ret = $admin->addAdmin($data);

            // 判断返回结果，如果为1则添加成功
            if ($ret) {
                $this->success('添加管理员成功！', url('lst'));
            } else {
                $this->error('添加管理员失败！', url('lst'));
            }
        }
        return view();
    }

    public function edit()
    {
        return view();
    }

    // 自建控制台输出方法
    // https://stackoverflow.com/posts/37218530/revisions
    public function console($data, $context = 'PHP Debug in Console')
    {
        ob_start();
        $output = 'console.info( \'' . $context . ':\' );';
        $output .= 'console.log(' . json_encode($data) . ');';
        $output = sprintf('<script>%s</script>', $output);
        echo $output;
    }
}

<?php

namespace app\admin\controller;

use think\Controller;

// 引入Db数据库操作类
use \think\Db;

use app\admin\model\Admin as AdminModel;

class Admin extends Controller
{
  public function lst()
  {
    // 普通的数据查询语句，find()是查询一条，select()是查询全部。
    // $ret = Db::name('admin')->field(array('id','name'))->select();

    // 查询数据库(使用助手函数)，paginate(5)是分页器
    $ret = db('admin')->field(array('id', 'name'))->paginate(10);
    $this->console($ret);

    $this->assign('adminList', $ret);

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
        $this->success('添加管理员成功', url('lst'));
      } else {
        $this->error('添加管理员失败', url('lst'));
      }
    }
    return view();
  }

  public function edit($id)
  {
    $admin = db('admin')->field('id,name,password')->find($id);


    if (request()->isPost()) {
      $data = input('post.');
      $data['id'] = $id;

      if (!$data['name']) {
        $this->error('用户名不得为空');
      }

      if ($data['password']) {
        // 执行MD5加密
        $data['password'] = md5($data['password']);
      } else {
        $data['password'] = $admin['password'];
      }

      $ret = db('admin')->update($data);
      if ($ret !== false) {
        $this->success('修改成功', url('lst'));
      } else {
        $this->error('修改失败', url('lst'));
      }
      return;
    }


    if (!$admin) {
      $this->error('管理员不存在');
    }
    $this->assign('admin', $admin);
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

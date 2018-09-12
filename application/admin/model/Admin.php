<?php

namespace app\admin\model;

use think\Model;

class Admin extends Model
{
    // 用于添加数据库的Model层
    public function addAdmin($data)
    {
        if (empty($data) || !is_array($data)) {
            return false;
        } else {
            if($data['password']) {
                // 执行MD5加密
                $data['password']=md5($data['password']);
            }
            $ret = $this->save($data);
            return $ret;
        }
    }
}

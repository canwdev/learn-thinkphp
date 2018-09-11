<?php
namespace app\admin\model;
use think\Model;
class Admin extends Model
{
    public function addAdmin($data) {
        if (empty($data) || !is_array($data)) {
            return false;
        } else {
            $ret = $this->save($data);
            return $ret;
        }
    }
}

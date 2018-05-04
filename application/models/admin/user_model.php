<?php

/**
 * Created by PhpStorm.
 * User: huc
 * Date: 2018/5/4
 * Time: 11:15
 * Description: 用户操作类
 */
class user_model extends MY_Model
{
    public function get_client_list(){
        $sql = 'select * from dw_user limit 10';
        return $this->query_sql($sql);
    }
}
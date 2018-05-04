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
    public function get_client_list($data){
        $sql = 'select user_id,username,nick_name,addtime from dw_user limit '.$data['offset'].','.$data['limit'];
        return $this->query_sql($sql);
    }
}
<?php

/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/5/3
 * Time: 13:57
 * 用户Controller
 */
class User extends Admin_Controller
{
    public function __construct()
    {
        parent::__construct();

    }

    public function login(){

        $username = $this->input->post('username');
        log_message('info',$username);
        redirect('welcome');
        exit;
    }

}
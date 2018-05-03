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

    /**
     * Created by PhpStorm.
     * User: huc
     * Date: 2018/5/3
     * Time: 16:17
     * Description:登录方法
     */
    public function login(){

        $username = $this->input->post('username');
        $password = $this->input->post('password');

        if(empty($username)){
            redirect('welcome/index?'.$this->encrypt_url('is_show=1&message=用户名不能为空&username='.$username,$this->key_url_md_5));
            exit;
        }

        if(empty($password)){
            redirect('welcome/index?'.$this->encrypt_url('is_show=1&message=密码不能为空&username='.$username,$this->key_url_md_5));
            exit;
        }

        if($username!='admin'||$password!='admin'){
            redirect('welcome/index?'.$this->encrypt_url('is_show=1&message=用户名或密码错误&username='.$username,$this->key_url_md_5));
            exit;
        }

        $this->mdata['message'] = $username;
        redirect('welcome/indexPage');
        exit;

    }

}
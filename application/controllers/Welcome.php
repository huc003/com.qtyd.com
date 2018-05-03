<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends Admin_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
        $url_info = $this->geturl($_SERVER['QUERY_STRING'],$this->key_url_md_5);//接收所有参数

        $is_show=$url_info['is_show'];//解密对应参数
        $message = $url_info['message'];
        $username = $url_info['username'];

        $this->mdata['message'] = $message;
        $this->mdata['username'] = $username;
        $this->mdata['is_show'] = $is_show;
        $this->_view('login');
	}

    /**
     * Created by PhpStorm.
     * User: huc
     * Date: 2018/5/3
     * Time: 17:15
     * Description: 跳转首页
     */
	public function indexPage(){
        $this->_view('admin/index');
    }

    public function left(){
        $this->_view('left');
    }


    public function right(){
        $controller = $this->input->get('controller');
        log_message('info',$controller);
        redirect($controller);
        exit;
    }

    /**
     * Created by PhpStorm.
     * User: huc
     * Date: 2018/5/3
     * Time: 19:04
     * Description:加载默认的提示页面
     */
    public function defaultRight(){
        $this->_view('right');
    }
}

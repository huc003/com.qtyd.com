<?php

/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/5/3
 * Time: 14:14
 */
class My_Controller extends CI_Controller
{

}

class Admin_Controller extends My_Controller{

    public function __construct()
    {
        parent::__construct();
        $this->load->helpers('url');
    }

    var $mdata = array();

    function _view($template)
    {
        $this->mdata['tpl'] = $template;
        $this->load->view($template, $this->mdata);
    }
}
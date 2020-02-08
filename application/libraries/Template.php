<?php if (! defined('BASEPATH')) exit('No direct script access allowed');

class Template
{
    protected $_ci;

    function  __construct()
    {
        $this->_ci =&get_instance();
    }

    // admin template
    function admin($template,$data=NULL)
    {
        $data['_content']= $this->_ci->load->view($template,$data, TRUE);
        $data['_header']= $this->_ci->load->view('templates/admin/_header',$data, TRUE);
        $data['_sidemenu']= $this->_ci->load->view('templates/admin/_sidemenu',$data, TRUE);
        $data['_footer']= $this->_ci->load->view('templates/admin/_footer',$data, TRUE);
        $this->_ci->load->view('templates/admin/template.php',$data);
    }

    // top navbar template
    function topnavbar($template,$data=NULL)
    {
        $data['_content']= $this->_ci->load->view($template,$data, TRUE);
        $data['_header']= $this->_ci->load->view('templates/topnav/_header',$data, TRUE);
        $data['_footer']= $this->_ci->load->view('templates/topnav/_footer',$data, TRUE);
        $this->_ci->load->view('templates/topnav/template.php',$data);
    }

    // boxed template
    function boxed($template,$data=NULL)
    {
        $data['_content']= $this->_ci->load->view($template,$data, TRUE);
        $data['_header']= $this->_ci->load->view('manajer/menus/_header',$data, TRUE);
        $data['_sidemenu']= $this->_ci->load->view('manajer/menus/_sidemenu',$data, TRUE);
        $data['_footer']= $this->_ci->load->view('manajer/menus/_footer',$data, TRUE);
        $this->_ci->load->view('manajer/template.php',$data);
    }
}

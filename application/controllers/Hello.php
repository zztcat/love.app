<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    class Hello extends CI_Controller {
      public function index()
        {
            $this->load->helper('form');
            $this->load->view('login/login_head');
            $this->load->view('login/login_form');
            $this->load->view('login/login_footer');
        }
      public function login_in()
        {
              $this->load->helper('url');
              $this->load->helper('cookie');
              $this->load->database();
              if ($username = $this->input->post('username'))
              {
                  
                  $username = $this->input->post('username');
                  $passwd = $this->input->post('passwd');
                  //加载数据库
                  // set_cookie("islogin",'ok',3600);
                  $this->load->model('login_model');
                  $row = $this->login_model->add_login($username,$passwd);
                        if($row){
                              set_cookie("username",$username,3600);//保存cookie 方便登录 
                              set_cookie("islogin",'ok',3600);//确定是登录
                              // redirect('Login/index');
                              redirect('Login', 'refresh');
                        }
                        else{
                              echo "<script>alert('查询失败');</script>";
                              delete_cookie("username");
                              set_cookie("islogin",NULL);
                              redirect('Hello', 'refresh');
                        }
              }
              else
              {
                  delete_cookie("username");
                  set_cookie("islogin",NULL);
                  redirect('Hello/index');//重定向控制器
                  echo $username;
                  echo'小哥哥快去注册';
                //表单->控制器->模型->视图显示
              }
        }
     
    }
    
    
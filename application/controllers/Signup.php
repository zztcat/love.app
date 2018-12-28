<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Signup extends CI_Controller {
    public function index()
    {
        $this->load->helper('form');
        $this->load->view('signup/signup_head');
        $this->load->view('signup/signup_form');
        $this->load->view('signup/signup_footer');
    }
  public function signup_up()
    {
          $this->load->helper('url');
          if ($this->input->post('username'))
          {
                $this->load->model('signup_model','',TRUE);
                $username = $this->input->post('username');
                $row = $this->signup_model->add_sign($username);
                if($row){
                  echo "<script>alert('账号已存在，请重新注册');</script>";
                  redirect('signup', 'refresh');
                }
                else{
                  $this->signup_model->add_signup();
                  echo "<script>alert('注册成功，点击确定跳转登录页面');</script>";
                  redirect('Hello', 'refresh');
                }
               

          }
          else
          {
            echo'求你输入账号';
          }
    }

}

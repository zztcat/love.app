<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
    public function index()
    {
        $this->load->helper('form');
        $this->load->helper('url');
        $this->load->helper('cookie');
        $this->load->view('index/index_head');
        $this->load->view('index/index_form');
        $this->load->view('index/index_footer');

    } 
    public function index_in()
    {
        $this->load->helper('form');
        $this->load->helper('url');
        $this->load->helper('cookie');  
        $this->load->model('liuyan_model','',TRUE);
        $this->liuyan_model->add_indexin();
        // redirect('Login', 'refresh');
    }
    public function board()
    {
        $this->load->helper('form');
        $this->load->helper('url');
        $this->load->helper('cookie');
        $this->load->view('index/index_head');
        $this->load->view('index/index_board');
        $this->load->view('index/index_footer');

        // $this->load->model('getly_model','',TRUE);
        // $this->getly_model->add_get();
        // redirect('Login', 'refresh');
    }



}

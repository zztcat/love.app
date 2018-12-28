<?php 
class geyly_model extends CI_Model{
    function __construct()
    {
        parent::__construct ();
    }
    public function add_get()
    {
        date_default_timezone_set('UTC');
        $now = date("Y-m-d H:i:s");
        $username=get_cookie('username',TRUE);
        $liuyan=$this->input->post('liuyan');
        $data = array( 
            'username'  =>  $username,
            'title '    =>  $this->input->post('title'),
            'liuyan'    =>  $liuyan,
            'time'      =>  $now,
            );
        $rs = $this->db->insert('liuyan', $data);
        if ($rs) {
            echo "<script>alert('留言成功,真好鸭！'); location.href='".site_url('Login')."';</script>";
        } else {
            echo "<script>alert('留言失败，请重新留言吧!!'); location.href='".site_url('Login')."';</script>";
        }
    }
}
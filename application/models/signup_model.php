<?php 
class Signup_model extends CI_Model{
    function __construct()
    {
        parent::__construct ();
    }
    public function add_signup()
    {
        date_default_timezone_set('UTC');
        $now = date("Y-m-d H:i:s");

        $data = array( 
            'username'  =>  $this->input->post('username'),
            'passwd'    =>  $this->input->post('passwd'),
            'sex'       =>  $this->input->post('sex'),
            'tell'      =>  $this->input->post('tell'),
            'eamil'     =>  $this->input->post('eamil'),
            'time'      =>  $now,
            );

        $this->db->insert('signin', $data);
        echo  $this->db->platform();
    }
    public function add_sign($name)
    {
        date_default_timezone_set('UTC');
        $now = date("Y-m-d H:i:s");
        $arr=array(
        'username'  =>  $name,          //键是数据库的字段名
        );
        $query=$this->db->get_where('signin',$arr);//可以根据用户的名字和密码去查询数据库
        return  $query->row();          //查询的结果
    }
}


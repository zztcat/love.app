<?php 
class Login_model extends CI_Model{
    function __construct()
    {
        parent::__construct ();
    }
    public function add_login($name,$passwd)
    {
        date_default_timezone_set('UTC');
        $now = date("Y-m-d H:i:s");
        $arr=array(
        'username'  =>  $name,          //键是数据库的字段名
        'passwd'    =>  $passwd,        //键是数据库的字段名
        );
        $query=$this->db->get_where('signin',$arr);//可以根据用户的名字和密码去查询数据库
        return  $query->row();          //查询的结果
    }
}

      

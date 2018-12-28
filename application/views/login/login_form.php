<?php 
echo form_open('Hello/login_in');

echo form_label('账号','username');
$idata = array(
    'name'          =>      'username', 
    'id'            =>      'username', 
    'size'          =>      '8' ,
    'placeholder'   =>      '账号',
    'class'         =>      'form-control',
    'required'      =>      'required'//required必填属性加
);
echo form_input($idata);


echo form_label('密码','passwd');
$pdata = array(
    'name'          =>      'passwd', 
    'id'            =>      'passwd', 
    'size'          =>      '16',
    'placeholder'   =>      '密码',
    'class'         =>      'form-control',
    'type'          =>      'password',
    'required'      =>      'required'
);
echo form_input($pdata);


$subdata  = array(
    'name'       =>  'submit',
    'id'         =>  'submit',
    'value'      =>  'true',
    'type'       =>  'submit',
    'content'    =>  'Login in' ,
    'class'      =>  'form-button',
);
echo form_button($subdata);
$redata  = array(
    'name'       =>  'reset',
    'id'         =>  'reset',
    'value'      =>  'true',
    'type'       =>  'reset',
    'content'    =>  '取消' ,
    'class'      =>  'form-button',
);
echo form_button($redata);
echo form_close();
?>



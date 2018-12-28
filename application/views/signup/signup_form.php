<?php 
echo form_open('Signup/signup_up');

$label1 = array(
    'class'         =>      'btn btn-success',
);
echo form_label('账号','username');
$idata = array(
    'name'          =>       'username', 
    'id'            =>       'username', 
    'size'          =>       '8' ,
    'placeholder'   =>       '账号',
    'class'         =>       'form-control',
    'required'      =>       'required',
    'onkeyup'       =>       'myFunction()',
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
    'required'      =>      'required',
);
echo form_input($pdata);

echo form_label('性别','sex');
echo nl2br("\n");
$sexdata = array(
    'name'          =>      'sex', 
    'id'            =>      'sex', 
);
echo form_radio('sex', '男', TRUE);
echo form_label('男', '男', $sexdata);
echo form_radio('sex', '女', FALSE);
echo form_label('女', '女', $sexdata);


echo nl2br("\n");

echo form_label('电话','tell');
$pdata = array(
    'name'          =>      'tell', 
    'id'            =>      'tell', 
    'size'          =>      '16',
    'placeholder'   =>      'XXX-XXXX-XXXX',
    'class'         =>      'form-control',
    'type'          =>      'text',
    'required'      =>      'required',
);
echo form_input($pdata);


echo form_label('邮箱','eamil');
$edata = array(
    'name'          =>      'eamil', 
    'id'            =>      'eamil', 
    'size'          =>      '8',
    'placeholder'   =>      '邮箱',
    'class'         =>      'form-control',
    'type'          =>      'eamil',
    'required'      =>      'required',
);

echo form_input($edata);

echo form_submit('submit','注册',$label1);
$redata  = array(
    'name'       =>  'reset',
    'id'         =>  'reset',
    'value'      =>  'true',
    'type'       =>  'reset',
    'content'    =>  '取消' ,
    'class'      =>  'btn btn-default',
);
echo form_reset('reset','取消',$redata);

echo form_close();
?>
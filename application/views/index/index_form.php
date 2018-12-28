<div class="col-lg-8 col-md-6 col-lg-offset-2 col-md-offset-1"> 
		<h3 align="center">留言板</h3>
		<div >
<?php
echo form_open('Login/index_in');


echo form_label('标题','title');
$title = array(
    'name'          =>      'title', 
    'id'            =>      'title', 
    'size'          =>      '20' ,
    'placeholder'   =>      '请填写你标题',
    'class'         =>      'form-control',
    'required'      =>      'required'//required必填属性加
);
echo form_input($title);

$label = array(
    'class'         =>      'btn btn-success',
);
echo form_label('具体内容','liuyan');
$liuyan = array(
    'name'          =>      'liuyan', 
    'id'            =>      'liuyan', 
    'cols'          =>      '80',
    'rows'          =>      '6',
    'placeholder'   =>      '想说什么吗-------',
    'class'         =>      'form-control',
    'required'      =>      'required'//required必填属性加
);
echo form_textarea($liuyan);


$subdata  = array(
    'name'       =>  'submit',
    'id'         =>  'submit',
    'value'      =>  'true',
    'type'       =>  'submit',
    'content'    =>  '留言' ,
    'class'      =>  'btn btn-success',
);
echo form_button($subdata);
$redata  = array(
    'name'       =>  'reset',
    'id'         =>  'reset',
    'value'      =>  'true',
    'type'       =>  'reset',
    'content'    =>  '取消' ,
    'class'      =>  'btn btn-default',
);
echo form_button($redata);
echo form_close();
?>
			</div>
		</div>
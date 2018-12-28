<?php
	// if($_COOKIE['islogin']!='ok'){
	// 	redirect('Hello/index');
	// }
	$url=base_url();
	$cookie_name=get_cookie('username',TRUE);//调用cookie中的值，后面加上true 防xss 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.staticfile.org/twitter-bootstrap/4.1.0/css/bootstrap.min.css">
  <script src="https://cdn.staticfile.org/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://cdn.staticfile.org/popper.js/1.12.5/umd/popper.min.js"></script>
  <script src="https://cdn.staticfile.org/twitter-bootstrap/4.1.0/js/bootstrap.min.js"></script>    <title>恋人APP</title>
    <style type="text/css">
		.reply_btn{
			border:none;
			background:none;
			color:#337ab7;
		}
		.reply_btn:hover{
			border:none;
			cursor:pointer;
			text-decoration: underline;
			color: #ba1a09;
		}
	</style>
</head>
<body>
<!-- <div align="right" style="padding:15px 50px;background:#99FFCC;">
	<?php echo $cookie_name?><a href="http://ci.com">退出登录</a>
</div> -->
<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <a class="navbar-brand" href="#">欢迎&nbsp<?php echo $cookie_name?>&nbsp使用恋人APP</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">
	<li class="nav-item">
        <a class="nav-link" href="/index.php/Login">留言</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/index.php/Login/board">留言板</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="https://zztcat.cn">小游戏</a>
      </li>
	  <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
	  用户信息
      </a>
      <div class="dropdown-menu">
			  <a class="dropdown-item" href="#">修改密码</a>
        <a class="dropdown-item" href="#">修改信息</a>
        <a class="dropdown-item" href="#">绑定信息</a>
        <a class="dropdown-item" href="/">退出登录</a>
      </div>
    </li>   
    </ul>
  </div>  
</nav>
<!-- <nav class="navbar navbar-default" role="navigation">
	<div class="container-fluid"> 
	<div class="navbar-header">
		<button type="button" class="navbar-toggle" data-toggle="collapse"
				data-target="#example-navbar-collapse">
			<span class="sr-only">切换导航</span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		</button>
		<a class="navbar-brand" href="">欢迎&nbsp<?php echo $cookie_name?>&nbsp使用恋人APP</a>
	</div>
	<div class="collapse navbar-collapse" id="example-navbar-collapse">
		<ul class="nav navbar-nav">
			<li class="active"><a href="/index.php/Login">留言</a></li>
			<li><a href="/index.php/Login/board">留言板</a></li>
			<li><a href="https://zztcat.cn">小游戏</a></li>
			<li class="dropdown">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown">
					用户信息 <b class="caret"></b>
				</a>
				<ul class="dropdown-menu">
					<li><a href="#">修改信息</a></li>
					<li><a href="#">绑定信息</a></li>
					<li><a href="/">退出登录</a></li>
				</ul>
			</li>
		</ul>
	</div>
	</div>
</nav> -->
	

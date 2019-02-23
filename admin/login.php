<?php
session_start();
error_reporting(0);
if($_GET['act']=='logout'){
	unset($_SESSION);
	header("location: ./login.php");
	exit;
}
$tips='';
if($_POST['username'] && $_POST['password']){
	include('../data/beipy.inc.php');
	$admin_name = htmlspecialchars($_POST['username']);
	$admin_pass = md5ff(htmlspecialchars($_POST['password']));
	if($admin_name==$aik['admin_name']  && $admin_pass==$aik['admin_pass']){
		$_SESSION['admin_aik'] = 'http://beipy.com/';
		header("location: ./index.php");
		echo '<script>window.location.href="./index.php";</script>';
		exit;
	}else{
		$tips = '账号或密码错误！';
	}
}
function md5ff($str=1){
	return md5($str.'ff371');
}
?>
<!--
Ho~　★★★★★★
　　○★★★★★★★○  
　　★★　　　 　★★  
　★★　∩　　∩　 ★★  
　★★　　　●　 　★★  
　★★　　　　　　★★  
　　★★　　　　★★  
　　　　★★★★　　　◢◤  
　　╭　〡〡〡〡　╮╱  
　　　—┘—┘└—└—
	作者：beipy@qq.com
	时间：2017-07-23
	版权归属：北漂鱼	
	描述：全网VIP视频在线解析。
	
-->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Beipy后台管理登录</title>
<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7" />
<META http-equiv=Content-Type content="text/html; charset=utf-8">
<link rel="shortcut icon" type="image/x-icon" href="./../favicon.ico">
<style>
		body,div,dl,dt,dd,ul,ol,li,h1,h2,h3,h4,h5,h6,pre,code,form,fieldset,legend,select,input,textarea,button,p,blockquote,th,td {margin:0; padding:0; outline:none;}
		body {
		 font-size:12px; 
		 font-family: "微软雅黑";
		 color:#343434; 
		 position: relative;
		 background-image: url(images/a.jpg);
		 background-position: center top;
	    background-repeat: no-repeat;
	    background-attachment: fixed;
	    -webkit-background-size: cover;
	    -moz-background-size: cover;
	    -o-background-size: cover;
	    background-size: cover;
		}
		a{ color:#343434; text-decoration:none}
		a:hover{color:#F00;text-decoration:underline}
		img{border:0;vertical-align:top;}
		h3{font-size:14px;}
		ul,ol,li{list-style:none;line-height:180%;}
		table{border-collapse:collapse; border-spacing:0;}
		input,button,select {color:#000; font:100% arial; vertical-align:middle; overflow:visible;}
		select {height:20px; line-height:20px;}
		.cl{clear:both; height:0px; overflow:hidden;}
		.cl5{clear:both; height:5px; overflow:hidden;}
		.in{ background-color:#FFC}
		input{ outline:none;}
		.tablecss{background:#D6E0EF;margin:0px auto;word-break:break-all;}
		.tablecss tr{background:#ffffff;}
		.tablecss td{ padding:5px 5px; font-size:12px;*border:0px;}
		.tablecss textarea{font-family:Courier New;padding:1px 3px 1px 3px;}
		.tablecss input{padding:1px 2px 1px 2px;}
		.tablecss tr.header td{ padding:5px 7px 5px 7px; background-color:#fff; color:#0093ff;border-bottom:1px solid #E6E6E6;}
		.tablecss tr.header td a{ color:#FFF;}
		#footer{ text-align:center; clear:both; padding:10px auto; margin:20px; overflow:hidden; height:40px; line-height:18px;color:#036}
		#footer a{color:#03C}
		.inp:focus{
    		border-color:#0093ff;
		}
		.inp{margin:0 auto;height:35px; width:230px; font-size:14px;line-height:25px;border-radius:16px;text-indent:0.5em;border:none;border:1px solid #fff;background: #e9e9e9; }
		.inp-htn{height:35px; width:170px;background:#0093ff;color:#fff;border:none;border-radius:16px;}
		.inp-htn:focus{
			background:#61b3ff;
		}
		.logo-box{
			width: 100%;
			height: 40px;
			color: #FFFFFF;
			line-height: 40px;
			margin-top:20px;
		}
		.logo-box a{
			color: #FFFFFF;
			
		}
		.logo-box ul{
			list-style: none;
			float: right;
			height: 40px;
			overflow: hidden;
			line-height: 40px;
			margin-right:50px;
		}
		.logo-box ul li{
			float: left;
			line-height: 40px;
			margin: 0 8px;
		}
		.logo-box ul li a{
			padding: 5px 12px;
			border-radius: 20px;
		}
		.logo-box ul li a:hover{
			background: #0093FF;
			color: #fff;
			text-decoration:none
		}
		.logo-img{
			margin-left: 50px;
			display: inline-block;
			width: 133px;
			height: 50px;
			background:url(images/z-logo.png)no-repeat ;
		}
</style>
<meta name="robots" content="noindex, nofollow" />
<script type="text/javascript">
function ck(){
    if(document.getElementById('username').value==''){
		alert('请输入用户名！');
		document.getElementById('username').focus();
		return false;
	}else if(document.getElementById('password').value==''){
		alert('请输入密码！');
		document.getElementById('password').focus();
		return false;
	}else{
		return true;
	}
}
</script>

</head>
<body>
	<div class="logo-box">
	<a href="#" class="logo-img"></a>
	<ul>
		<li><a href="../">返回首页</a></li>
		<li><a href="http://beipy.com" target="_blank">开发者</a></li>
		<li><a href="http://mail.qq.com/cgi-bin/qm_share?t=qm_mailme&email=07G2uqOqk6Ki-bC8vg" target="_blank">意见反馈</a></li>
	</ul>
</div>
<div class="mt2"></div>

<form name="loginform" method="post" action="" onsubmit="return ck();" style="padding:0;">
	<table border="0" cellspacing="1" cellpadding="0" width="400" class="tablecss" style="margin-top:250px; overflow:hidden;border-radius: 10px;">
<tr class="header">
			<td colspan="4" align="center" style=" height:50px; font-size:18px; font-weight:bold;    background-color: #ecf1fc;">北漂鱼影院系统登陆</td>
</tr>
		<tr style="height:100px;" align="center">
		  <td align="center" valign="middle">
		  	<input name="username" type="text" class="inp" id="username" value="" size="30" maxlength="32" placeholder="管理名称" autocomplete="off">
		  	<br/>
		  	
		  </td>
		</tr>
		<tr>
		  <td align="center" valign="middle">
		  	<input name="password" type="password" class="inp" placeholder="密&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;码" id="password" value="" size="30" maxlength="64">
		  	<br/>
		  </td>
		</tr>
		<tr>
		  <td align="center" valign="middle">
		  	<p style="width:236px;text-align:left;color:#8d8d8d;" >
		  		
			  	<span class="gray tips">默认用户名:beipy 默认密码:beipy.com</span>
		  	</p>
		  </td>
		</tr>
		<tr>
			<input name="act" type="hidden" value="go" /><input type="hidden" name="token" value="<?php echo md5(time())?>"/>   
		  <td align="center" colspan="4"><div class="cl5"></div><input type="submit" name="go" class="inp-htn" value="登 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;录">
<div class="cl5"></div>

<div style="height:30px; color:#F00; text-align:center; line-height:30px;"><?php echo $tips?></div>

<?php include('foot.php'); ?>
          </td>
		</tr>
	</table>
<div class="mt2"></div>
</form>
<div class="mt"></div> 
<div class="cl10"></div>

</body>
</html>
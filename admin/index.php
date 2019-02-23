<?php include('config.php');include('admincore.php');?>
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
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<?php include('inc.php'); ?>
		<style>
			.zhuangtai-box{
				width: 100%;
				height: 30%;
				background: url(images/zu.png);
				position: relative;
				background-position: center top;
				background-size:contain;
				border-radius:0 ;
				text-align: center;
			}
			.zhuangtai-box > .zhuangtai-tit{
				color: #FFFFFF;
				position: absolute;
				top:50%;
				left: 41%;
				font-family: "微软雅黑";
				font-size: 30px;
				display: inline-block;
			}
			.zhuangtai-tit:hover{
				text-decoration:none;
			}
			.tishi-houtai{
				text-align:center; 
				font-size:14px; 
				margin-bottom:15px; 
			}
			.tishi-houtai p{
				display:inline-block;
				padding:10px 20px;
				color: #fb5c5c;
				background:#f8fafc ;
				border-radius: 20px;
			}
			.tishi-houtai p span{
				display: inline-block;
				width: 20px;
				height: 20px;
				border-radius: 50%;
				background: #fb5c5c;
				color:#FFFFFF; 
				margin-right:10px ;
			}
			.tishi-houtai p a{
				margin-left:10px ;
				color: #fff;
				font-size: 14px;
				background: #fb5c5c;
				border-radius: 20px;
				display: inline-block;
				padding: 3px 10px;
			}
			.tishi-houtai p a:hover{
				text-decoration: none;
				background: #0093FF;
			}
		</style>
	</head>
	<body>
		<?php $nav ='home';include('head.php'); ?>
		
		<div id="hd_main">
			<div class="zhuangtai-box">
				<a class="zhuangtai-tit">
					后台文件配置状态检测
				</a>
				
			</div>
			<!--内容-->
		   <div style="margin-top:20px ;">
		   	<?php $path = $_SERVER['SCRIPT_NAME'];
		   		if($aik['admin_name']=='beipy' && $aik['admin_pass']=='8099cb8e23c7375f2166c5dce7d715fd'){
			   		echo '<div class="tishi-houtai"><p><span>!</span>您的账号密码为系统默认，请尽快修改<a href="./setting.php">立即修改></a></p></div>';	
				}
			    if(strpos($path,'/admin/')>-1){
				   echo '<div class="tishi-houtai"><p><span>!</span>北漂鱼提醒您：您的后台目录默认为 域名/admin ，为了安全请尽快修改后台目录</p></div>';	
				}
			
		   ?>
		   
		    <table width="600" border="0" class="tablecss" cellspacing="0" cellpadding="0" align="center">
				<tr>
				   <td colspan="2" align="center">欢迎使用北漂鱼解析管理系统！</td>
				</tr>
			  	<tr>
				    <td align="right">当前使用版：</td>
				    <td><span>北漂鱼解析系统版本V1.1</span></td>
			  	</tr>
			  	<tr>
				    <td width="213" align="right">服务器操作系统：</td>
				    <td width="387"><?php $os = explode(" ", php_uname()); echo $os[0];?> (<?php if('/'==DIRECTORY_SEPARATOR){echo $os[2];}else{echo $os[1];} ?>)</td>
			  	</tr>
			    <tr>
				    <td width="213" align="right">服务器解译引擎：</td>
				    <td width="387"><?php echo $_SERVER['SERVER_SOFTWARE'];?></td>
			  	</tr>
			  	<tr>
				    <td width="213" align="right">PHP版本：</td>
				    <td width="387"><?php echo PHP_VERSION?></td>
			  	</tr>
			  	<tr>
				    <td align="right">域名：</td>
				    <td><?php echo $_SERVER['HTTP_HOST']?></td>
			  	</tr>
			  	<tr>
				    <td align="right">allow_url_fopen：</td>
				    <td><?php echo ini_get('allow_url_fopen') ? '<span class="green">支持</span>' : '<span class="red">不支持</span>'?></td>
			  	</tr>
			  	<tr>
				    <td align="right">curl_init：</td>
				    <td><?php if ( function_exists('curl_init') ){ echo '<span class="green">支持</span>' ;}else{ echo '<span class="red">不支持</span>';}?></td>
			  	</tr>
				<tr>
			   		<td align="right">/data/目录权限检测：</td>
			    	<td><?php echo is_writable('../data/') ? '<span class="green">可写</span>' : '<span class="red">不可写</span>'?></td>
			  	</tr>  
			</table>
		   </div>
		</div>
<!--		<?php include('foot.php'); ?>-->
	</body>
</html>
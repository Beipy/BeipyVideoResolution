<!--全局设置-->
<?php 
include('config.php'); 
$tips = '';
include('admincore.php');?>
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
		<script type="text/javascript" src="./js/jquery.js"></script>
		<script type="text/javascript" src="./js/jquery.dragsort-0.4.min.js"></script>
	</head>
<body>
	<?php $nav = 'setting';include('head.php'); ?>
	
	<div id="hd_main">
		<div class="hd_bj">
			<div class="hd_bt">
			</div> 
			<div align="center"><?php echo $tips?></div>
			 
			<form name="configform" id="configform" action="./setting.php?act=setting&t=<?php echo time()?>" method="post" onsubmit="return subck()">
				<table width="90%"  align="center" cellpadding="5" cellspacing="1" class="tablecss" >
					<tr class="thead">
						<td colspan="10" align="left" style="color: #0093FF;font-weight: bold;font-size: 16px;">基本设置</td>
					</tr>
					<tr>
					  <td width="125" align="right" valign="middle" class="s_title">网站名称：</td>
					  <td width="690" valign="middle">
					  	<input name="edit" id="edit" type="hidden" value="1" />
					  	<input type="text" name="aik[sitename]" class="shuru" value="<?php echo $aik['sitename']?>" size="50" >
					  	<span class="gray tips">如：北漂鱼全网解析</span>
					  </td>
					</tr>
					<tr>
					    <td width="125" align="right" valign="middle" class="s_title">网站域名：</td>
					    <td width="690" valign="middle">
					    	<input type="text" name="aik[pcdomain]" class="shuru" id="aik_pcdomain" value="<?php echo $aik['pcdomain']?>" size="50">
					      <span class="gray tips">网站域名，如 http://tv.beipy.com </span>
					    </td>
					</tr>
					<tr>
					    <td width="125" align="right" valign="middle" class="s_title">首页标题：</td>
					    <td valign="top">
					    	<input type="text" name="aik[title]" class="shuru" value="<?php echo $aik['title']?>" size="50">
					      <span class="gray tips">显示在首页标题上，一般不超过80个字符</span>
					    </td>
					</tr>
					<tr>
					    <td width="125" align="right" valign="middle" class="s_title">首页关键字：</td>
					    <td valign="top"><span class="gray tips">关键字请用英文逗号分开，一般不超过100个字符</span><br>
					    	<textarea name="aik[keywords]" cols="150" rows="3"><?php echo $aik['keywords']?></textarea>
					    </td>
					</tr>
					<tr>
					    <td width="125" align="right" valign="middle" class="s_title">首页描述：</td>
					    <td valign="top">
					    	<span class="gray tips">一般不超过200个字符</span>
					    	<div class="cl5"></div>
					    	<textarea name="aik[description]" cols="150" rows="3"><?php echo $aik['description']?></textarea>
					    </td>
					</tr>
					<tr>
					    <td width="125" align="right" valign="middle" class="s_title">微博：</td>
					    <td valign="top">
					    	<input type="text" name="aik[weibourl]" placeholder="请输入您的微博链接" class="shuru" value="<?php echo $aik['weibourl']?>" size="50"><br/>
					    	
					    </td>
					</tr>
					<tr>
					    <td width="125" align="right" valign="middle" class="s_title">首页公告：</td>
					    <td valign="top">
					    	<span class="gray tips">一般不超过100个字符</span>
					    	<div class="cl5"></div>
					    	<textarea name="aik[gonggao]" cols="150" rows="2"><?php echo $aik['gonggao']?></textarea><br/>
					    	<span class="gray tips">公告链接，无链接地址请留空！</span>
					    	<div class="cl5"></div>
					    	<textarea name="aik[gonggaourl]" cols="75" rows="2"><?php echo $aik['gonggaourl']?></textarea>
					    </td>
					</tr>
					<tr>
						<td width="125" align="right" valign="middle" class="s_title">默认播放视频：</td>
						<td valign="top">页面打开默认播放视频<font color="red">（第一条是默认调用接口）</font><div class="cl5"></div>
						    <input type="text" name="aik[maurl]" class="shuru" placeholder="视频链接：" value="<?php echo $aik['maurl']?>" size=100" >
						</td>
					</tr>
					<tr>
						
					    <td width="125" align="right" valign="middle" class="s_title">电影解析接口：</td>
					   		
					    <td valign="top">请将解析接口分别填入下列空中<font color="red">（第一条是默认调用接口）</font><div class="cl5"></div>
					    	<input type="text" name="aik[jiekou1name]" class="shuru" placeholder="名称：" value="<?php echo $aik['jiekou1name']?>" size=20" ><input type="text" name="aik[jiekou1]" placeholder="接口url：" class="shuru" value="<?php echo $aik['jiekou1']?>" size="80" ><br/>
							<input type="text" name="aik[jiekou2name]" class="shuru" placeholder="名称：" value="<?php echo $aik['jiekou2name']?>" size=20" ><input type="text" name="aik[jiekou2]" placeholder="接口url：" class="shuru" value="<?php echo $aik['jiekou2']?>" size="80" ><br/>
							<input type="text" name="aik[jiekou3name]" class="shuru" placeholder="名称：" value="<?php echo $aik['jiekou3name']?>" size=20" ><input type="text" name="aik[jiekou3]" placeholder="接口url：" class="shuru" value="<?php echo $aik['jiekou3']?>" size="80" ><br/>
							<input type="text" name="aik[jiekou4name]" class="shuru" placeholder="名称：" value="<?php echo $aik['jiekou4name']?>" size=20" ><input type="text" name="aik[jiekou4]" placeholder="接口url：" class="shuru" value="<?php echo $aik['jiekou4']?>" size="80" ><br/>
							<input type="text" name="aik[jiekou5name]" class="shuru" placeholder="名称：" value="<?php echo $aik['jiekou5name']?>" size=20" ><input type="text" name="aik[jiekou5]" placeholder="接口url：" class="shuru" value="<?php echo $aik['jiekou5']?>" size="80" ><br/>
							<input type="text" name="aik[jiekou6name]" class="shuru" placeholder="名称：" value="<?php echo $aik['jiekou6name']?>" size=20" ><input type="text" name="aik[jiekou6]" placeholder="接口url：" class="shuru" value="<?php echo $aik['jiekou6']?>" size="80" ><br/>
							<input type="text" name="aik[jiekou7name]" class="shuru" placeholder="名称：" value="<?php echo $aik['jiekou7name']?>" size=20" ><input type="text" name="aik[jiekou7]" placeholder="接口url：" class="shuru" value="<?php echo $aik['jiekou7']?>" size="80" ><br/>
							<input type="text" name="aik[jiekou8name]" class="shuru" placeholder="名称：" value="<?php echo $aik['jiekou8name']?>" size=20" ><input type="text" name="aik[jiekou8]" placeholder="接口url：" class="shuru" value="<?php echo $aik['jiekou8']?>" size="80" ><br/>
							<input type="text" name="aik[jiekou9name]" class="shuru" placeholder="名称：" value="<?php echo $aik['jiekou9name']?>" size=20" ><input type="text" name="aik[jiekou9]" placeholder="接口url：" class="shuru" value="<?php echo $aik['jiekou9']?>" size="80" ><br/>
							<input type="text" name="aik[jiekou10name]" class="shuru" placeholder="名称：" value="<?php echo $aik['jiekou10name']?>" size=20" ><input type="text" name="aik[jiekou10]" placeholder="接口url：" class="shuru" value="<?php echo $aik['jiekou10']?>" size="80" ><br/>
					    </td>
					</tr>
					<tr>
					    <td width="125" align="right" valign="middle" class="s_title">导航设置：</td>
					    <td valign="top">
					    	<span class="gray tips">不添加可留空。新增导航链接，图标：请添加在li下面'<xmp style="display: inline-block;background: #FA584E;color: #fff;font-size: 9px;"><span class="ico-new"></span></xmp>'</span>
					    	<div class="cl5"></div>
					    	<textarea name="aik[topnav]" cols="150" rows="5"><?php echo $aik['topnav']?></textarea>
					    </td>
					</tr>
					<tr>
					    <td width="125" align="right" valign="middle" class="s_title">侧滑广告：</td>
					    <td valign="top">
					    	<div class="cl5"></div>
					    	<textarea name="aik[ch1]" cols="150" rows="5" placeholder="不开启请留空。"><?php echo $aik['ch1']?></textarea>
					    </td>
					</tr>
					<tr>
					    <td width="125" align="right" valign="middle" class="s_title">播放器下方广告：</td>
					    <td valign="top">
					    	<div class="cl5"></div>
					    	<textarea name="aik[guanggao]" cols="150" rows="5" placeholder="不开启请留空。"><?php echo $aik['guanggao']?></textarea>
					    	
					    </td>
					</tr>
					<tr>
					    <td width="125" align="right" valign="middle" class="s_title">畅言配置：</td>
					    <td valign="top">
					    	<span class="gray tips">可自定义配置，如无需配置请留空<a href="http://changyan.kuaizhan.com" target="_blank">畅言配置点击</a></span>
					    	<div class="cl5"></div>
					    	<textarea name="aik[changyan]" cols="150" rows="5"><?php echo $aik['changyan']?></textarea>
					    </td>
					</tr>
					<tr>
					    <td width="125" align="right" valign="middle" class="s_title">友情链接：</td>
					    <td valign="top">
					    	<textarea name="aik[homelink]" cols="150" rows="5"><?php echo $aik['homelink']?></textarea>
					    </td>
					</tr>
					<tr>
					    <td width="125" align="right" valign="middle" class="s_title">ICP备案号：</td>
					    <td width="690" valign="middle">
					    	<input type="text" name="aik[icp]" id="aik_path" value="<?php echo $aik['icp']?>" size="50">
					    </td>
					</tr>
					<tr>
					    <td width="125" align="right" valign="middle" class="s_title">版权说明：</td>
					    <td valign="top">
					    	<textarea name="aik[foot]" cols="150" rows="5"><?php echo $aik['foot']?></textarea>
					    </td>
					</tr>
					<tr>
					    <td width="125" align="right" valign="middle" class="s_title">统计信息：</td>
					    <td valign="top">
					    	<textarea name="aik[tongji]" cols="150" rows="5"><?php $aik['tongji'] = str_replace("\\'","'",$aik['tongji']);echo htmlspecialchars($aik['tongji'])?></textarea>
					    </td>
					</tr>
					<td colspan="10" align="left" style="color: #0093FF;font-weight: bold;font-size: 16px;">账号设置</td>
						
						<tr>
						    <td width="125" align="right" valign="middle" class="s_title">登录账号：</td>
						    <td valign="top"><input type="text" name="aik[admin_name]" value="<?php echo $aik['admin_name']?>" size="30">
						   	<span class="gray tips"></span></td>
						</tr>
						<tr>
						    <td width="125" align="right" valign="middle" class="s_title">登录密码：</td>
						    <td valign="top"><input type="text" name="aik[admin_pass]" value="" size="30">
						    <span class="gray tips">不修改请留空</span></td>
						</tr>
						<tr>
						    <td width="125" align="right" valign="middle" class="s_title">管理员邮箱：</td>
						    <td valign="top"><input type="text" name="aik[admin_email]" value="<?php echo $aik['admin_email']?>" size="30"></td>
						</tr>
					
				</table>
				<!--核心提交-->
				<div align="center" style="margin: 20 auto; display: inline-block;width: 100%;">
						<input name="edit" type="hidden" value="1" />
						<input id="configSave" type="submit" class="nth" onclick="return getsort()" value="保 &nbsp;&nbsp;&nbsp;&nbsp;存">
				</div>	
			</form>
			<script type="text/javascript">
				$(".sxlist:first").dragsort();
			</script>
		</div>
	</div>
<!--<?php include('foot.php'); ?>-->
</body>
</html>
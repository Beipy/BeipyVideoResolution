<footer class="footer">
	<div class="branding">
		<!--友情链接-->
			<div class="branding_link">
				<section class="container">
					<?php echo $aik['homelink'];?>
				</section>
			</div>
		<!--友情链接结束-->
		<!--居中部分-->
		<hr style="display: block;height: 1px;margin-bottom: 10px;background-color: #4f4f4f;    margin-top: 0px;margin-bottom: 20px;border: 0;"/>
		<div class="container footer-tit">
				<div class="counter">
				『您是本站第<img border="0" src="http://cc.amazingcounters.com/counter.php?i=3217952&c=9654169" alt="AmazingCounters.com">位访客』
			</div>		
			<p><?php echo $aik['foot'];?></p>
			
			<p>管理员邮箱：<?php echo $aik['admin_email'];?>&nbsp; <a class="foot-tt" href="http://www.miitbeian.gov.cn" ><img style="vertical-align: middle;" src="img/beian.png"/><?php echo $aik['icp'];?></a>&nbsp; </p>
			<p>Copyright&nbsp;&copy;&nbsp;2017~2019&nbsp;	<a href="http://beipy.com" target="_blank" style="color:#888;">beipy.com</a>版权所有 当前版本号：V2.6</p>
			<p class="toot-tto"><?php echo $aik['tongji'];?></p>
			<!--统计展示-->
		</div>
	</div>
 </footer>
<!--侧滑-->
<section class="ch">
	<div class="rollbar-weibo" title="新浪微博关注一下我">
		<a class="rollbar-weibo" href="<?php echo $aik['weibourl'];?>" target="_blank"></a>
	</div>
	<div class="rollbar-weix" title="关注微信公众号"><div class="weixinx"></div></div>
	<div class="rollbar-erweima" title="下载手机app"><div class="erweims"></div></div>
	<div class="rollbar-item" title="返回顶部"><a class="rollbar-top"  href="#top"></a></div>
</section>
<section class="ch1">
	<?php echo $aik['ch1'];?>
</section>

<script type="text/javascript">
		//判断F12审查元素
function fuckyou() {
	window.close(); //关闭当前窗口(防抽)
	window.location = "about:blank"; //将当前窗口跳转置空白页
}

function ck() {
	console.profile();
	console.profileEnd();
	//我们判断一下profiles里面有没有东西，如果有，肯定有人按F12了，没错！！
	if(console.clear) {
		console.clear()
	};
	if(typeof console.profiles == "object") {
		return console.profiles.length > 0;
	}
}

function hehe() {
	if((window.console && (console.firebug || console.table && /firebug/i.test(console.table()))) || (typeof opera == 'object' && typeof opera.postError == 'function' && console.profile.length > 0)) {
		fuckyou();
	}
	if(typeof console.profiles == "object" && console.profiles.length > 0) {
		fuckyou();
	}
}
hehe();
window.onresize = function() {
	if((window.outerHeight - window.innerHeight) > 200)
		//判断当前窗口内页高度和窗口高度，如果差值大于200，那么呵呵
		fuckyou();
}
</script>

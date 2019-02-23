<div id="header">
  <div class="con">
    <h1 class="logo png">
    	<a href="./" title="北漂鱼影院管理系统"></a>
    </h1>
    <div class="aik_info">
    	<a href="../" target="_blank">网站首页</a>，欢迎您，<?php echo $aik['admin_name']?>，<a href="./login.php?act=logout">退出</a>
    </div>
    <ul class="aik_nav">
			<li><a href="./"<?php echo $nav=='home'?' class="this"':''?> title="后台状态"><span style="color:#cfcfd1">● </span>后台状态</a></li>
			<li><a href="./setting.php"<?php echo $nav=='setting'?' class="this"':''?> title="全局设置"><span style="color:#cfcfd1">● </span>全局设置</a></li>
			<li><a href="http://beipy.com" target="_blank" title="官网"><span style="color:#cfcfd1">● </span>官网</a></li>
      <li><a href="http://www.beipy.com" target="_blank" title="Beipy Show"><span style="color:#cfcfd1">● </span>Beipy Show博客</a></li>
    </ul>
    
    <!--版权-->
    <div class="admin-banquan">
    	<?php include('foot.php'); ?>
    </div>
  </div>
</div>
<!--右侧顶部-->
<div id="head-right">
	
</div>
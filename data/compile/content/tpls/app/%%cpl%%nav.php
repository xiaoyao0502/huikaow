<div class="headerBox">
	<div class="header">
		<div class="headerLeft">欢迎来到，慧考网</div>
		<div class="headerRight clearFix">
			<p>微信</p>|
			<p style="background-image: url(app/core/styles/images/header_05.png);">微博</p>|
			<p style="background-image: url(app/core/styles/images/header_07.png);">购物车</p>
			<?php if($this->tpl_var['_user']['userid']){ ?>
			您好（<?php echo $this->tpl_var['_user']['username']; ?>）&nbsp;&nbsp;<a href="index.php?user-center">用户中心</a><?php if($this->tpl_var['_user']['teacher_subjects']){ ?>&nbsp;&nbsp;<?php } elseif($this->tpl_var['_user']['groupid'] == 1){ ?>&nbsp;&nbsp;<a href="index.php?core-master">后台管理</a><?php } ?>&nbsp;&nbsp;<a href="index.php?user-app-logout">退出</a>
			<?php } else { ?>
			<a href="index.php?user-center">登录/注册</a>
			<?php } ?>
		</div>
	</div>
</div>
<div class="headerMainBox">
	<div class="headerMain">
		<a class="logo"><img src="app/core/styles/images/index_pic1_03.png"></a>
		<div class="headerBtn">
			<a id="h1" class="headerBtnAdd" href="index.php">首页</a>
			<a id="h2" class="">慧考课程</a>
			<a id="h3" class="">免费试用</a>
			<a id="h4" class="" href="index.php?app-app-about_us">关于我们</a>
		</div>
		<p class="headerPhone"></p>
	</div>
</div>

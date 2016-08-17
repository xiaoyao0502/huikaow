<?php $this->_compileInclude('header'); ?>
<body>
<div class="loginBox">
	<div class="loginHalf">
		<div><a><img src="app/core/styles/images/login_03.png"></a></div>
	</div>
	<div class="login">
		<p class="loginTitle">登录慧考网</p>
		<div class="loginInner clearFix">
		<form class="form-horizontal logform" method="post" action="index.php?user-app-login">
			<div class="loginInnerLeft">
				<input class="input-xlarge" type="text" name="args[username]" datatype="userName" needle="needle" msg="请你输入手机号" value="peadmin"/>
				<input class="input-xlarge" type="password" name="args[userpassword]" datatype="password" needle="needle" msg="请你输入密码" value="peadmin"/>
				<input type="hidden" value="1" name="userlogin"/>
				<div class="login_forget"><a>忘记密码？</a></div>
				<button style="margin-top: 20px;" type="submit">登    录</button>
				<div class="login_forget" style="text-align: center;">还没有慧考网账号？<a href="index.php?user-app-register" style="margin-left: 10px;">立即注册</a></div>
			</div>
			<div class="loginInnerRight">
				<p>使用其他合作网站账号登录</p>
				<div>
					<a><img src="app/core/styles/images/login_07.png"></a>
					<a><img src="app/core/styles/images/login_09.png"></a>
				</div>
				<h6><img src="app/core/styles/images/login_14.png"></h6>
				<p style="margin-top: 5px;">使用其他合作网站账号登录</p>
			</div>
		</form>
		</div>
<?php $this->_compileInclude('foot'); ?>
</div>
</div>
</body>
</html>
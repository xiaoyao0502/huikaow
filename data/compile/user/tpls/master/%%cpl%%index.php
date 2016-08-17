<?php $this->_compileInclude('header'); ?>
<body>
<?php $this->_compileInclude('nav'); ?>
<div class="container-fluid">
	<div class="row-fluid">
		<div class="span2">
			<?php $this->_compileInclude('menu'); ?>
		</div>
		<div class="span10">
			<ul class="breadcrumb">
				<li><a href="index.php?core-master">全局</a> <span class="divider">/</span></li>
				<li class="active">首页</li>
			</ul>
			<div class="row-fluid">
				<div class="span6">
					<div class="well">
						<h5>
							开发者信息
						</h5>
						<p>
							QQ:1210275422 官方站：<a href="http://www.huikaowang.com">http://www.huikaowang.com</a> 本版版本号：<?php echo PE_VERSION; ?>
						</p>
					</div>
				</div>
				<div class="span6">
					<div class="well">
						<h5>
							使用帮助
						</h5>
						<p>
							帮助论坛：<a href="http://www.huikaowang.com/bbs/">http://www.huikaowang.com/bbs/</a>
						</p>
						<p>
							微信公众号：慧考网
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</body>
</html>
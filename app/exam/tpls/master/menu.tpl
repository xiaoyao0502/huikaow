<div class="accordion" id="accordion-13465">
	<!-- <div class="accordion-group">
		<div class="accordion-heading">
			<a class="accordion-toggle" data-parent="#accordion-13465" data-toggle="collapse" href="#accordion-element-707348">考试设计 </a>
		</div>
		<div class="accordion-body{x2;if:$method == 'basic'} in{x2;endif} collapse" id="accordion-element-707348">
			<div class="accordion-inner">
				<ul class="unstyled">
					<li><a href="?{x2;$_app}-master-basic">考场列表</a></li>
		    		<li><a href="?{x2;$_app}-master-basic-area">地区设置</a></li>
		    		<li><a href="?{x2;$_app}-master-basic-subject">课程管理</a></li>
		    		<li><a href="?{x2;$_app}-master-basic-questype">题型管理</a></li>
				</ul>
			</div>
		</div>
	</div> -->
	<div class="accordion-group">
		<div class="accordion-heading">
			<a class="accordion-toggle" data-parent="#accordion-13465" data-toggle="collapse" href="#accordion-element-2120761">课程开通 </a>
		</div>
		<div class="accordion-body{x2;if:$method == 'users'} in{x2;endif} collapse" id="accordion-element-2120761">
			<div class="accordion-inner">
				<ul class="unstyled">
					<li><a href="index.php?{x2;$_app}-master-users">开通课程</a></li>
					<li><a href="index.php?{x2;$_app}-master-users-batopen">批量开通</a></li>
				</ul>
			</div>
		</div>
	</div>
	<div class="accordion-group">
		<div class="accordion-heading">
			<a class="accordion-toggle" data-parent="#accordion-13465" data-toggle="collapse" href="#accordion-element-212076">试题管理 </a>
		</div>
		<div class="accordion-body{x2;if:$method == 'questions' || $method == 'rowsquestions' || $method == 'basic'} in{x2;endif} collapse" id="accordion-element-212076">
			<div class="accordion-inner">
				<ul class="unstyled">
		    		<li><a href="index.php?{x2;$_app}-master-basic-subject">课程管理</a></li>
		    		<li><a href="index.php?{x2;$_app}-master-basic-questype">题型管理</a></li>
					<li><a href="index.php?{x2;$_app}-master-questions">普通试题管理</a></li>
					<!-- <li><a href="index.php?{x2;$_app}-master-rowsquestions">题帽题管理</a></li> -->
				</ul>
			</div>
		</div>
	</div>
	<div class="accordion-group">
		<div class="accordion-heading">
			<a class="accordion-toggle" data-parent="#accordion-13465" data-toggle="collapse" href="#accordion-element-212096">试卷管理 </a>
		</div>
		<div class="accordion-body{x2;if:$method == 'exams'} in{x2;endif} collapse" id="accordion-element-212096">
			<div class="accordion-inner">
				<ul class="unstyled">
					<li><a href="index.php?{x2;$_app}-master-exams">试卷列表</a></li>
					<li><a href="index.php?{x2;$_app}-master-exams-autopage">随机组卷</a></li>
					<li><a href="index.php?{x2;$_app}-master-exams-selfpage">章节组卷</a></li>
					<li><a href="index.php?{x2;$_app}-master-exams-temppage">即时组卷</a></li>
				</ul>
			</div>
		</div>
	</div>
	<div class="accordion-group">
		<div class="accordion-heading">
			<a class="accordion-toggle" data-parent="#accordion-13465" data-toggle="collapse" href="#accordion-element-212090">回收站 </a>
		</div>
		<div class="accordion-body{x2;if:$method == 'recyle'} in{x2;endif} collapse" id="accordion-element-212090">
			<div class="accordion-inner">
				<ul class="unstyled">
					<li><a href="index.php?{x2;$_app}-master-recyle">普通试题</a></li>
					<!-- <li><a href="index.php?{x2;$_app}-master-recyle-rows">题帽题</a></li> -->
					<li><a href="index.php?{x2;$_app}-master-recyle-knows">章节</a></li>
				</ul>
			</div>
		</div>
	</div>
	<div class="accordion-group">
		<div class="accordion-heading">
			<a class="accordion-toggle" data-parent="#accordion-13465" data-toggle="collapse" href="#accordion-element-2120901">批量工具 </a>
		</div>
		<div class="accordion-body{x2;if:$method == 'tools'} in{x2;endif} collapse" id="accordion-element-2120901">
			<div class="accordion-inner">
				<ul class="unstyled">
					<li><a href="index.php?{x2;$_app}-master-tools">删除试题</a></li>
					<li><a href="index.php?{x2;$_app}-master-tools-clearhistory">清空考试记录</a></li>
					<li><a href="index.php?{x2;$_app}-master-tools-clearsession">清理会话</a></li>
				</ul>
			</div>
		</div>
	</div>
</div>
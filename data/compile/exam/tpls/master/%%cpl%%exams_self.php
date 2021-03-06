<?php if(!$this->tpl_var['userhash']){ ?>
<?php $this->_compileInclude('header'); ?>
<body>
<?php $this->_compileInclude('nav'); ?>
<div class="container-fluid">
	<div class="row-fluid">
		<div class="span2">
			<?php $this->_compileInclude('menu'); ?>
		</div>
		<div class="span10" id="datacontent">
<?php } ?>
			<ul class="breadcrumb">
				<li><a href="index.php?<?php echo $this->tpl_var['_app']; ?>-master"><?php echo $this->tpl_var['apps'][$this->tpl_var['_app']]['appname']; ?></a> <span class="divider">/</span></li>
				<li><a href="index.php?<?php echo $this->tpl_var['_app']; ?>-master-exams&page=<?php echo $this->tpl_var['page']; ?><?php echo $this->tpl_var['u']; ?>">试卷管理</a> <span class="divider">/</span></li>
				<li class="active">手工组卷</li>
			</ul>
			<ul class="nav nav-tabs">
				<li class="active">
					<a href="#">手工组卷</a>
				</li>
				<li class="pull-right">
					<a href="index.php?<?php echo $this->tpl_var['_app']; ?>-master-exams&page=<?php echo $this->tpl_var['page']; ?><?php echo $this->tpl_var['u']; ?>">试卷管理</a>
				</li>
			</ul>
	        <form action="index.php?exam-master-exams-selfpage" method="post" class="form-horizontal">
				<div class="control-group">
					<label class="control-label">试卷名称：</label>
					<div class="controls">
			  			<input type="text" name="args[exam]" value="" needle="needle" msg="您必须为该试卷输入一个名称"/>
			  			<span class="red_note">*如为章节测试 名称则为此章节的第一套或第N套</span>
					</div>
				</div>
				<!-- <div class="control-group">
					<label class="control-label">评卷方式</label>
					<div class="controls">
						<label class="radio inline">
							<input name="args[examdecide]" type="radio" value="1"/>教师评卷
						</label>
						<label class="radio inline">
							<input name="args[examdecide]" type="radio" value="0" checked/>学生自评
						</label>
						<span class="help-block">教师评卷时有主观题则需要教师在后台评分后才能显示分数，无主观题自动显示分数。</span>
					</div>
				</div> -->
				<div class="control-group">
					<label class="control-label">考试课程：</label>
				  	<div class="controls">
					  	<select class="combox" target="isectionselect" refUrl="?exam-master-questions-ajax-getsectionsbysubjectid&subjectid={value}" autocomplete="off" id="selectedsubjectid" msg="请选择课程" needle="needle" min="1" name="args[examsubject]" onchange="javascript:loadsubjectsetting(this);">
						  	<option value="">请选择课程</option>
						  	<?php $sid = 0;
 foreach($this->tpl_var['subjects'] as $key => $subject){ 
 $sid++; ?>
						  	<option value="<?php echo $subject['subjectid']; ?>"><?php echo $subject['subject']; ?></option>
						  	<?php } ?>
					  	</select>
					  	<select class="combox" id="isectionselect" msg="请选择科目" needle="needle" target="iknowsselect" refUrl="?exam-master-questions-ajax-getknowsbysectionid&sectionid={value}" name="args[examsectionid]">
				  			<option value="0">选择科目</option>
				  		</select>
				  		<select class="combox" id="iknowsselect" msg="请选择章节" needle="needle" name="args[examknowsid]">
				  		<option value="0">选择章节</option>
				  		</select>
					</div>
				</div>
				<div class="control-group">
					<label class="control-label">试卷类型：</label>
				  	<div class="controls">
					  	<!-- <select class="combox" autocomplete="off" min="1" name="args[exam_type]">
						  	<option value="1">章节测试</option>
						  	<option value="2">押题</option>
					  	</select> -->
					  	<span class="control-label red_note">章节测试</span>
					  	<input type="hidden" name="args[exam_type]" value="1" />
					</div>
				</div>
				<!-- <div class="control-group">
					<label class="control-label">考试时间：</label>
			  		<div class="controls">
			  			<input type="text" name="args[examsetting][examtime]" value="60" size="4" needle="needle" class="inline"/> 分钟
					</div>
				</div>
				<div class="control-group">
					<label class="control-label">来源：</label>
			  		<div class="controls">
			  			<input type="text" name="args[examsetting][comfrom]" value="" size="4" />
					</div>
				</div>
				<div class="control-group">
					<label class="control-label">试卷总分：</label>
			  		<div class="controls">
			  			<input type="text" name="args[examsetting][score]" value="" size="4" needle="needle" msg="你要为本考卷设置总分" datatype="number"/>
					</div>
				</div>
				<div class="control-group">
					<label class="control-label">及格线：</label>
			  		<div class="controls">
			  			<input type="text" name="args[examsetting][passscore]" value="" size="4" needle="needle" msg="你要为本考卷设置一个及格分数线" datatype="number"/>
					</div>
				</div> -->
				<div class="control-group">
					<label class="control-label">题型排序</label>
					<div class="controls">
						<div class="sortable btn-group">
							<?php $qid = 0;
 foreach($this->tpl_var['questypes'] as $key => $questype){ 
 $qid++; ?>
							<a class="btn questpanel panel_<?php echo $questype['questid']; ?>"><?php echo $questype['questype']; ?><input type="hidden" name="args[examsetting][questypelite][<?php echo $questype['questid']; ?>]" value="1" class="questypepanelinput" id="panel_<?php echo $questype['questid']; ?>"/></a>
							<?php } ?>
						</div>
					</div>
					<div class="controls">拖拽进行题型排序</div>
				</div>
				<?php $qid = 0;
 foreach($this->tpl_var['questypes'] as $key => $questype){ 
 $qid++; ?>
				<div class="control-group questpanel panel_<?php echo $questype['questid']; ?>">
					<label class="control-label"><?php echo $questype['questype']; ?>：</label>
					<div class="controls">
						<span class="info">共&nbsp;</span>
						<input id="iselectallnumber_<?php echo $questype['questid']; ?>" type="text" class="input-mini" needle="needle" name="args[examsetting][questype][<?php echo $questype['questid']; ?>][number]" value="0" size="2" msg="您必须填写总题数"/>
						<span class="info">&nbsp;题，<!-- 每题&nbsp;</span><input class="input-mini" needle="needle" type="text" name="args[examsetting][questype][<?php echo $questype['questid']; ?>][score]" value="0" size="2" msg="您必须填写每题的分值"/>
						<span class="info">&nbsp;分，-->描述&nbsp;</span><input class="input-mini" type="text" name="args[examsetting][questype][<?php echo $questype['questid']; ?>][describe]" value="" size="12"/>
						<span class="info">&nbsp;已选题数：<a id="ialreadyselectnumber_<?php echo $key; ?>">0</a>&nbsp;&nbsp;题</span>
						<span class="info">&nbsp;<a class="selfmodal btn" href="javascript:;" data-target="#modal" url="index.php?exam-master-exams-selected&questionids={iselectquestions_<?php echo $key; ?>}&rowsquestionids={iselectrowsquestions_<?php echo $key; ?>}" valuefrom="iselectquestions_<?php echo $key; ?>|iselectrowsquestions_<?php echo $key; ?>">看题</a></span>
						<span class="info">&nbsp;<a class="selfmodal btn" href="javascript:;" data-target="#modal" url="index.php?exam-master-exams-selectquestions&search[questionsubjectid]={selectedsubjectid}&search[questionknowsid]={iknowsselect}&search[questiontype]=<?php echo $key; ?>&questionids={iselectquestions_<?php echo $key; ?>}&rowsquestionids={iselectrowsquestions_<?php echo $key; ?>}&useframe=1" valuefrom="iselectquestions_<?php echo $key; ?>|iselectrowsquestions_<?php echo $key; ?>|selectedsubjectid|iknowsselect">选题</a></span>
	  					<input type="hidden" value="" id="iselectquestions_<?php echo $key; ?>" name="args[examquestions][<?php echo $key; ?>][questions]" />
	  					<input type="hidden" value="" id="iselectrowsquestions_<?php echo $key; ?>" name="args[examquestions][<?php echo $key; ?>][rowsquestions]" />
					</div>
				</div>
				<?php } ?>
				<div class="control-group">
					<div class="controls">
					  	<button class="btn btn-primary" type="submit">提交</button>
						<input type="hidden" name="submitsetting" value="1"/>
					</div>
				</div>
			</form>
			<div aria-hidden="true" id="modal" class="modal hide fade" role="dialog" aria-labelledby="#myModalLabel">
				<div class="modal-header">
					<button aria-hidden="true" class="close" type="button" data-dismiss="modal">×</button>
					<h3 id="myModalLabel">
						试题列表
					</h3>
				</div>
				<div class="modal-body" id="modal-body">asdasdasdasdsa</div>
				<div class="modal-footer">
					 <button aria-hidden="true" class="btn" data-dismiss="modal">完成</button>
				</div>
			</div>
<?php if(!$this->tpl_var['userhash']){ ?>
		</div>
	</div>
</div>
<script>
function loadsubjectsetting(obj)
{
	$.getJSON('index.php?exam-master-basic-getsubjectquestype&subjectid='+$(obj).val()+'&'+Math.random(),function(data){$('.questpanel').hide();for(x in data){$('.panel_'+data[x]).show();}});
}
</script>
</body>
</html>
<?php } ?>
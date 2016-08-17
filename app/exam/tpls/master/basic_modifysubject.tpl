{x2;if:!$userhash}
{x2;include:header}
<body>
{x2;include:nav}
<div class="container-fluid">
	<div class="row-fluid">
		<div class="span2">
			{x2;include:menu}
		</div>
		<div class="span10" id="datacontent">
{x2;endif}
			<ul class="breadcrumb">
				<li><a href="index.php?{x2;$_app}-master">{x2;$apps[$_app]['appname']}</a> <span class="divider">/</span></li>
				<li class="active">课程管理</li>
			</ul>
			<ul class="nav nav-tabs">
				<li class="active">
					<a href="#">修改课程</a>
				</li>
			</ul>
	        <form action="index.php?exam-master-basic-modifysubject" method="post" class="form-horizontal">
				<fieldset>
					<div class="control-group">
						<label for="subject" class="control-label">课程名称：</label>
						<div class="controls">
							<input name="args[subject]" id="subject" type="text" size="30" value="{x2;$subject['subject']}" needle="needle" msg="您必须输入一个课程名称" />
						</div>
					</div>
					<div class="control-group">
						<label for="subject" class="control-label">课程题型：</label>
						<div class="controls">
							{x2;tree:$questypes,questype,qid}
							<label class="checkbox inline">
				          		<input type="checkbox" name="args[subjectsetting][questypes][{x2;v:questype['questid']}]" value="1"{x2;if:$subject['subjectsetting']['questypes'][v:questype['questid']]} checked{x2;endif}/> {x2;v:questype['questype']}
				          	</label>
				          	{x2;endtree}
						</div>
					</div>
					<div class="control-group">
					  	<div class="controls">
						  	<button class="btn btn-primary" type="submit">提交</button>
							<input type="hidden" name="modifysubject" value="1"/>
							<input type="hidden" name="subjectid" value="{x2;$subject['subjectid']}"/>
							<input type="hidden" name="page" value="{x2;$page}"/>
						</div>
					</div>
				</fieldset>
			</form>
{x2;if:!$userhash}
		</div>
	</div>
</div>
</body>
</html>
{x2;endif}
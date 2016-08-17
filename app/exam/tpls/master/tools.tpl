{x2;include:header}
<body>
{x2;include:nav}
<div class="container-fluid">
	<div class="row-fluid">
		<div class="span2">
			{x2;include:menu}
		</div>
		<div class="span10">
			<ul class="breadcrumb">
				<li><a href="index.php?{x2;$_app}-master">{x2;$apps[$_app]['appname']}</a> <span class="divider">/</span></li>
				<li class="active">批量删除试题</li>
			</ul>
			<div class="row-fluid">
				<div class="span12">
					<div class="well">
						<form action="index.php?exam-master-tools-clearquestions" method="post" id="qstool">
							<table class="table">
								<thead>
					                <tr>
								        <th colspan="2">批量删除普通试题</th>
								        <th></th>
								        <th></th>
								        <th></th>
								        <th></th>
					                </tr>
					            </thead>
								<tr>
									<td>
										录入时间：
									</td>
									<td>
										<input class="input-small datetimepicker" data-date="{x2;date:TIME,'Y-m-d'}" data-date-format="yyyy-mm-dd" type="text" name="search[stime]" size="10" id="stime" value="{x2;$search['stime']}"/> - <input class="input-small datetimepicker" data-date="{x2;date:TIME,'Y-m-d'}" data-date-format="yyyy-mm-dd" size="10" type="text" name="search[etime]" id="etime" value="{x2;$search['etime']}"/>
									</td>
									<td>
										课程：
									</td>
									<td>
						        		<select name="search[questionsubjectid]" class="combox input-medium" target="sectionselect" refUrl="?exam-master-questions-ajax-getsectionsbysubjectid&subjectid={value}">
							        		<option value="0">选择课程</option>
									  		{x2;tree:$subjects,subject,sid}
									  		<option value="{x2;v:subject['subjectid']}"{x2;if:v:subject['subjectid'] == $search['questionsubjectid']} selected{x2;endif}>{x2;v:subject['subject']}</option>
									  		{x2;endtree}
								  		</select>
						        	</td>
						        	<td>
										科目：
									</td>
									<td>
								  		<select name="search[questionsectionid]" class="combox input-medium" id="sectionselect" target="knowsselect" refUrl="?exam-master-questions-ajax-getknowsbysectionid&sectionid={value}">
								  		<option value="0">选择科目</option>
								  		{x2;if:$sections}
								  		{x2;tree:$sections,section,sid}
								  		<option value="{x2;v:section['sectionid']}"{x2;if:v:section['sectionid'] == $search['questionsectionid']} selected{x2;endif}>{x2;v:section['section']}</option>
								  		{x2;endtree}
								  		{x2;endif}
								  		</select>
						        	</td>
						        	<td>
										章节：
									</td>
									<td>
								  		<select name="search[questionknowsid]" id="knowsselect" class="input-medium">
									  		<option value="">选择章节</option>
									  		{x2;if:$knows}
									  		{x2;tree:$knows,know,kid}
									  		<option value="{x2;v:know['knowsid']}"{x2;if:v:know['knowsid'] == $search['questionknowsid']} selected{x2;endif}>{x2;v:know['knows']}</option>
									  		{x2;endtree}
									  		{x2;endif}
								  		</select>
						        	</td>
								</tr>
								<tr>
									<td>
										录入人：
									</td>
						        	<td>
						        		<input class="input-small" name="search[username]" size="25" type="text" value="{x2;$search['username']}"/>
						        	</td>
						        	<td>
										试题类型：
									</td>
									<td>
										<select name="search[questiontype]" class="input-medium">
									  		<option value="0">类型不限</option>
									  		{x2;tree:$questypes,questype,qid}
									  		<option value="{x2;v:questype['questid']}">{x2;v:questype['questype']}</option>
									  		{x2;endtree}
								  		</select>
									</td>
									<td>
										难度：
									</td>
									<td>
										<select name="search[questionlevel]" class="input-medium">
									  		<option value="0">难度不限</option>
											<option value="1"{x2;if:$search['questionlevel'] == 1} checked{x2;endif}>易</option>
											<option value="2"{x2;if:$search['questionlevel'] == 2} checked{x2;endif}>中</option>
											<option value="3"{x2;if:$search['questionlevel'] == 3} checked{x2;endif}>难</option>
								  		</select>
									</td>
									<td>
										<button class="btn btn-primary" type="submit">删除</button>
										<input type="hidden" value="1" name="search[argsmodel]" />
									</td>
									<td colspan="4"></td>
								</tr>
							</table>
						</form>
					</div>
				</div>
			</div>
			<div class="row-fluid">
				<div class="span12">
					<div class="well">
						<form action="index.php?exam-master-tools-clearquestionrows" method="post" id="qrtool">
							<table class="table">
								<thead>
					                <tr>
								        <th colspan="2">批量删除题冒题</th>
								        <th></th>
								        <th></th>
								        <th></th>
								        <th></th>
					                </tr>
					            </thead>
								<tr>
									<td>
										录入时间：
									</td>
									<td>
										<input class="input-small datetimepicker" data-date="{x2;date:TIME,'Y-m-d'}" data-date-format="yyyy-mm-dd" type="text" name="search[stime]" size="10" id="stime" value="{x2;$search['stime']}"/> - <input class="input-small datetimepicker" data-date="{x2;date:TIME,'Y-m-d'}" data-date-format="yyyy-mm-dd" size="10" type="text" name="search[etime]" id="etime" value="{x2;$search['etime']}"/>
									</td>
									<td>
										课程：
									</td>
									<td>
						        		<select name="search[questionsubjectid]" class="combox input-medium" target="qrsectionselect" refUrl="?exam-master-questions-ajax-getsectionsbysubjectid&subjectid={value}">
						        		<option value="0">选择课程</option>
								  		{x2;tree:$subjects,subject,sid}
								  		<option value="{x2;v:subject['subjectid']}"{x2;if:v:subject['subjectid'] == $search['questionsubjectid']} selected{x2;endif}>{x2;v:subject['subject']}</option>
								  		{x2;endtree}
								  		</select>
						        	</td>
						        	<td>
										科目：
									</td>
									<td>
								  		<select name="search[questionsectionid]" class="combox input-medium" id="qrsectionselect" target="qrknowsselect" refUrl="?exam-master-questions-ajax-getknowsbysectionid&sectionid={value}">
								  		<option value="0">选择科目</option>
								  		{x2;if:$sections}
								  		{x2;tree:$sections,section,sid}
								  		<option value="{x2;v:section['sectionid']}"{x2;if:v:section['sectionid'] == $search['questionsectionid']} selected{x2;endif}>{x2;v:section['section']}</option>
								  		{x2;endtree}
								  		{x2;endif}
								  		</select>
						        	</td>
						        	<td>
										章节：
									</td>
									<td>
								  		<select name="search[questionknowsid]" id="qrknowsselect" class="input-medium">
									  		<option value="">选择章节</option>
									  		{x2;if:$knows}
									  		{x2;tree:$knows,know,kid}
									  		<option value="{x2;v:know['knowsid']}"{x2;if:v:know['knowsid'] == $search['questionknowsid']} selected{x2;endif}>{x2;v:know['knows']}</option>
									  		{x2;endtree}
									  		{x2;endif}
								  		</select>
						        	</td>
								</tr>
								<tr>
									<td>
										录入人：
									</td>
						        	<td>
						        		<input class="input-small" name="search[username]" size="25" type="text" value="{x2;$search['username']}"/>
						        	</td>
						        	<td>
										试题类型：
									</td>
									<td>
										<select name="search[questiontype]" class="input-medium">
									  		<option value="0">类型不限</option>
									  		{x2;tree:$questypes,questype,qid}
									  		<option value="{x2;v:questype['questid']}">{x2;v:questype['questype']}</option>
									  		{x2;endtree}
								  		</select>
									</td>
									<td>
										难度：
									</td>
									<td>
										<select name="search[qrlevel]" class="input-medium">
									  		<option value="0">难度不限</option>
											<option value="1"{x2;if:$search['qrlevel'] == 1} selected{x2;endif}>易</option>
											<option value="2"{x2;if:$search['qrlevel'] == 2} selected{x2;endif}>中</option>
											<option value="3"{x2;if:$search['qrlevel'] == 3} selected{x2;endif}>难</option>
								  		</select>
									</td>
									<td>
										<button class="btn btn-primary" type="submit">删除</button>
										<input type="hidden" value="1" name="search[argsmodel]" />
									</td>
									<td colspan="4"></td>
								</tr>
							</table>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</body>
</html>
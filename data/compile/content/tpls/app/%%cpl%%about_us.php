
<?php $this->_compileInclude('header'); ?>
<body>
<?php $this->_compileInclude('nav'); ?>
<!--header-->
<div style="width: 100%; height: 300px; background: url(app/core/styles/images/about_02.png) no-repeat center 0;"></div>
<div class="content">
	<!--<script>
		$(function(){
			$(".listTitle a").click(function(){
				$(this).addClass("listAdd").siblings().removeClass("listAdd");
				var n = $(".listTitle a").index(this);
				$(".list").hide();
				$(".list").eq(n).show();
			});

		})
	</script>-->
	<div class="listBox">
		<div class="listTitle">
			<a id="a1" class="listAdd" >公司介绍</a>
			<a id="a2" class="">团队介绍</a>
			<a id="a3" class="">合作伙伴</a>
			<a id="a4" class="">工作机会</a>
			<a id="a5" class="">联系我们</a>
			<a id="a6" class="">服务中心</a>
		</div>
		<div id="list1" class="list clearFix" style="display: block;">
			<div class="aboutLeft">
			  <div class="list_title">公司介绍</div>
				<?php echo html_entity_decode($this->ev->stripSlashes($this->tpl_var['contents']['data'][0]['contenttext'])); ?>
			</div>
			<div class="aboutRight">
			  <img src="app/core/styles/images/about_05.png">
			  <div class="contentTop">
			    <div class="contentTopBtn" style="border: none 0; padding-left: 70px; background-image: url(app/core/styles/images/index_pic1_17.png); margin-left: 20px;">购买<span>— 轻松通过考试</span></div>
			  </div>
			</div>
		</div>
		<div id="list2" class="list clearFix" style="display: none;">
			<div class="aboutLeft" style="width: 100%;">
				<div class="list_title">团队介绍</div>
				<?php echo html_entity_decode($this->ev->stripSlashes($this->tpl_var['contents']['data'][1]['contenttext'])); ?>
			</div>
		</div>
		<div id="list3" class="list clearFix" style="display: none;">
			<!-- <div class="aboutLeft" style="width: 100%;">
				<div class="list_title">合作伙伴</div>
				<div class="friendsBox clearFix">
					<div><img src="app/core/styles/images/friends_03.png"></div>
					<div><img src="app/core/styles/images/friends_05.png"></div>
					<div><img src="app/core/styles/images/friends_07.png"></div>
					<div style="border-right: none 0;"><img src="app/core/styles/images/friends_11.png"></div>
					<div><img src="app/core/styles/images/friends_19.png"></div>
					<div><img src="app/core/styles/images/friends_21.png"></div>
					<div><img src="app/core/styles/images/friends_23.png"></div>
					<div style="border-right: none 0;"><img src="app/core/styles/images/friends_25.png"></div>
					<div><img src="app/core/styles/images/friends_28.png"></div>
					<div><img src="app/core/styles/images/friends_35.png"></div>
					<div><img src="app/core/styles/images/friends_37.png"></div>
					<div style="border-right: none 0;"><img src="app/core/styles/images/friends_39.png"></div>
					<div><img src="app/core/styles/images/friends_40.png"></div>
					<div><img src="app/core/styles/images/friends_41.png"></div>
					<div><img src="app/core/styles/images/friends_48.png"></div>
					<div style="border-right: none 0;"><img src="app/core/styles/images/friends_49.png"></div>
					<div><img src="app/core/styles/images/friends_51.png"></div>
					<div><img src="app/core/styles/images/friends_53.png"></div>
					<div><img src="app/core/styles/images/friends_55.png"></div>
					<div style="border-right: none 0;"><img src="app/core/styles/images/friends_03.png"></div>
				</div>
			</div> -->
		  	<div class="aboutLeft" style="width: 100%;">
			    <div class="list_title">合作伙伴</div>
			    <div class="friendsBox clearFix">
						<?php echo html_entity_decode($this->ev->stripSlashes($this->tpl_var['contents']['data'][2]['contenttext'])); ?>
			    </div>
			  </div>
		</div>
		<div id="list4" class="list clearFix" style="display: none;">
			<!-- <div class="aboutLeft"> -->
				<!-- <div class="list_title">工作机会</div> -->
				<!-- <h6 class="aboutH6">品牌传播策略总监<br>
			品牌策略部以帮助企业制定发展战略及销售策略，为品牌设计做前期的研究与指引为主要工作范畴<br><br>
			主要职责<br>
			1.负责客户品牌传播风险及机会的管理，负责与利益相关者进行沟通。利益相关者包括（但不仅限于）企业员工、媒体、企业界影响力人事、新闻界、各种团体及公众等；<br>
			2.主管品牌传播、公共关系、媒体关系及与品牌传播相关的公共事务；<br>
			3.建立、维护传播媒介资源及一切与传播相关资源；<br>
			4.及时了解领导品牌的成功经验、运用各种专业工具、方法，推广、服务客户品牌发展；<br>
			5.制定品牌传播策略及计划，负责规划、组织品牌传播的相关会议及活动;<br>
			6.以身作则，遵守公司规章制度，做好团队建设、文化传导、专业提升、为公司培养优秀的品牌传播服务的团队管理人才；<br>
			7.完成上级交给的其他工作.<br><br>
			职位要求<br>
			1.广告学、市场营销、心理学等专业本科及以上学历<br>
			2.八年以上品牌建设、咨询行业工作经验，五年以上策划团队管理经验，有甲方品牌管理部门工作背景；<br>
			3.熟练操作PPT、word、excel等办公软件；<br>
			4.熟悉国内外品牌运作模式、市场发展情况，和国内品牌资询行业发展现状；<br>
			5.具备丰富的独立带领团队为大型客户提供品牌咨询、品牌建设相关服务的经验。<br>
			6.对现代企业战略管理和品牌战略有深刻的认识和理解，并形成有效的知识体系与方法;<br>
			7.深厚的中文文字功底和策划文案写作能力，良好的英文读写能力；<br>
			8.优秀的决策力和解决复杂问题的能力，善于沟通协调，责任心强，有团队合作精神；<br>
			9.较强团队领导力，能承受多任务处理的工作压力，适应经常出差；</h6>
			</div> -->
			<div class="aboutLeft" style="width: 100%;">
			  <div class="list_title">工作机会</div>
				 <?php echo html_entity_decode($this->ev->stripSlashes($this->tpl_var['contents']['data'][3]['contenttext'])); ?>
				 <!-- <?php echo html_entity_decode($this->ev->stripSlashes($this->tpl_var['contents']['data'][2]['contenttext'])); ?> -->
			</div>
		</div>
		<div id="list5" class="list clearFix" style="display: none;">
			<div class="list_title">联系我们</div>
			<!-- <img src="app/core/styles/images/map_03.png" style="display: block; margin-top: 30px;"> -->
			<?php echo html_entity_decode($this->ev->stripSlashes($this->tpl_var['contents']['data'][4]['contenttext'])); ?>
		</div>
		<div id="list6" class="list clearFix" style="display: none;">
			<div class="aboutLeft">
			      <div class="clearFix">
			        <div class="list_title" style=" float: left;">支付宝支付</div>
			        <div class="list_title" style=" float: left; margin-left: 40px;">微信支付</div>
			        <div class="list_title" style=" float: left; margin-left: 40px;">银联快捷支付</div>
			        <div class="list_title" style=" float: left; margin-left: 40px;">银行汇款</div>
			      </div>
			      <img src="app/core/styles/images/center_03.png" style="margin-top: 50px;">
						<?php echo html_entity_decode($this->ev->stripSlashes($this->tpl_var['contents']['data'][5]['contenttext'])); ?>
			    </div>
			    <div class="aboutRight">
			      <img src="app/core/styles/images/about_05.png">
			      <div class="contentTop">
			        <div class="contentTopBtn" style="border: none 0; padding-left: 70px; background-image: url(app/core/styles/images/index_pic1_17.png); margin-left: 20px;">购买<span>— 轻松通过考试</span></div>
			      </div>
			    </div>
		</div>
</div>
</div>
 <?php $this->_compileInclude('foot'); ?>
</body>
</html>
<script type="text/javascript">
  $(".headerBtn a").attr("class","");
  $("#h4").attr("class","headerBtnAdd");
  $('#a2').click(function(){
		  $('.listTitle a').attr("class","");
  		$('#a2').attr("class","listAdd");
		  $('.list').css("display","none");
		  $('#list2').css("display","block");
	});
  $('#a1').click(function(){
		  $('.listTitle a').attr("class","");
  		$('#a1').attr("class","listAdd");
		  $('.list').css("display","none");
		  $('#list1').css("display","block");
	});
  $('#a3').click(function(){
		  $('.listTitle a').attr("class","");
  		$('#a3').attr("class","listAdd");
		  $('.list').css("display","none");
		  $('#list3').css("display","block");
	});
  $('#a4').click(function(){
		  $('.listTitle a').attr("class","");
  		$('#a4').attr("class","listAdd");
		  $('.list').css("display","none");
		  $('#list4').css("display","block");
	});
  $('#a5').click(function(){
		  $('.listTitle a').attr("class","");
  		$('#a5').attr("class","listAdd");
		  $('.list').css("display","none");
		  $('#list5').css("display","block");
	});
  $('#a6').click(function(){
		  $('.listTitle a').attr("class","");
  		$('#a6').attr("class","listAdd");
		  $('.list').css("display","none");
		  $('#list6').css("display","block");
	});
  // $('#a6').click(function(){
	// 	  $('.listTitle a').attr("class","");
	// 	  $('#a6').attr("class","listAdd");
	// 		$("#list").load("app/content/tpls/app/about_serve.tpl");
	// });
</script>

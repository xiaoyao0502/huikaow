<?php $this->_compileInclude('header'); ?>
<body style="background-color: #f2f2f2;">
<?php $this->_compileInclude('nav'); ?>
<div class="content">
	<div class="testTopBox">
		<div class="testMain">
			<p>Cynthia</p>
			<h3>我的余额：<span>489.00</span><a data-reveal-id="myModal01">立即充值</a></h3>
			<a>编辑个人资料</a>
			<div><img src="app/core/styles/images/kaoqian_03.png"><a data-reveal-id="myModal">编辑头像</a></div>
		</div>
		<div class="testBottom">
			<p>专属客服 </p>
			<span>姓名：<b>慧考网售后小轩</b></span>
			<span>电话：<b>010-58468869</b></span>
			<span>QQ：<b>2067277605</b></span>
			<span style="border: none 0;">邮箱：<b>2067277605@qq.com</b></span>
			<a>安全退出</a>
		</div>
	</div>
	<script>
		$(function(){
			$(".testBottomTitle a").click(function(){
				$(this).addClass("testAdd").siblings().removeClass("testAdd");
				var n = $(".testBottomTitle a").index(this);
				$(".testLastBox").hide();
				$(".testLastBox").eq(n).show();
			})
		})
	</script>
	<div class="testBottomBox">
		<div class="testBottomTitle">
			<a class="testAdd">我的课程</a><a>我的合同</a><a>章节测试</a><a>模拟试题</a><a>考前押题</a><a style="border-right: none 0; width: 200px;">投诉建议</a>
		</div>
		<div class="testLastBox" style="display: block;">
			<dl>
				<dt style="background-image: none; border-bottom: 1px solid #ddd; padding-left: 0; text-align: center;" class="clearFix">
					<p style="width: 133px; float: left; border-right: 1px solid #fff;">订单号</p>
					<p style="width: 200px; float: left; border-right: 1px solid #fff;">订单时间</p>
					<p style="width: 200px; float: left; border-right: 1px solid #fff;">课程金额</p>
					<p style="width: 200px; float: left; border-right: 1px solid #fff;">订单状态</p>
					<p style="width: 200px; float: left; border-right: 1px solid #fff;">课程信息</p>
					<p style="width: 200px; float: left;">配套视频显示</p>
				</dt>
				<dd class="clearFix">
					<p style="width: 133px; float: left; border-right: 1px solid #ddd;">12358965781253</p>
					<p style="width: 200px; float: left; border-right: 1px solid #ddd;">2016.7.11   10:28:34</p>
					<p style="width: 200px; float: left; border-right: 1px solid #ddd; color: #fda609;">￥870.00</p>
					<p style="width: 200px; float: left; border-right: 1px solid #ddd;">支付成功</p>
					<p style="width: 200px;"><a style="background: none; padding: 0;">查看课程详情</a></p>
					<p style="width: 200px; border: none 0;"><a style="background-image: url(app/core/styles/images/dddd_03.png); padding-left: 50px; overflow:hidden; text-overflow:ellipsis; white-space:nowrap;">银行业法律…</a></p>
				</dd>
				<dd class="clearFix">
					<p style="width: 133px; float: left; border-right: 1px solid #ddd;">12358965781253</p>
					<p style="width: 200px; float: left; border-right: 1px solid #ddd;">2016.7.11   10:28:34</p>
					<p style="width: 200px; float: left; border-right: 1px solid #ddd; color: #fda609;">￥870.00</p>
					<p style="width: 200px; float: left; border-right: 1px solid #ddd;">支付成功</p>
					<p style="width: 200px;"><a style="background: none; padding: 0;">查看课程详情</a></p>
					<p style="width: 200px; border: none 0;"><a style="background-image: url(app/core/styles/images/dddd_03.png); padding-left: 50px; overflow:hidden; text-overflow:ellipsis; white-space:nowrap;">银行业法律…</a></p>
				</dd>
				<dd class="clearFix">
					<p style="width: 133px; float: left; border-right: 1px solid #ddd;">12358965781253</p>
					<p style="width: 200px; float: left; border-right: 1px solid #ddd;">2016.7.11   10:28:34</p>
					<p style="width: 200px; float: left; border-right: 1px solid #ddd; color: #fda609;">￥870.00</p>
					<p style="width: 200px; float: left; border-right: 1px solid #ddd;">支付成功</p>
					<p style="width: 200px;"><a style="background: none; padding: 0;">查看课程详情</a></p>
					<p style="width: 200px; border: none 0;"><a style="background-image: url(app/core/styles/images/dddd_03.png); padding-left: 50px; overflow:hidden; text-overflow:ellipsis; white-space:nowrap;">银行业法律…</a></p>
				</dd>
				<dd class="clearFix" style="border-bottom: none 0;">
					<p style="width: 133px; line-height: 80px; float: left; border-right: 1px solid #ddd;">12358965781253</p>
					<p style="width: 200px; line-height: 80px; float: left; border-right: 1px solid #ddd;">2016.7.11   10:28:34</p>
					<p style="width: 200px; line-height: 80px; float: left; border-right: 1px solid #ddd; color: #fda609;">￥870.00</p>
					<p style="width: 200px; line-height: 80px; float: left; border-right: 1px solid #ddd;">支付成功</p>
					<p style="width: 200px; line-height: 80px;"><a style="background: none; padding: 0;">查看课程详情</a></p>
					<p style="width: 200px; border: none 0;">
						<a style="background-image: url(app/core/styles/images/dddd_03.png); padding-left: 50px; overflow:hidden; text-overflow:ellipsis; white-space:nowrap;">银行业法律…</a>
						<a style="background-image: url(app/core/styles/images/dddd_03.png); padding-left: 50px; overflow:hidden; text-overflow:ellipsis; white-space:nowrap;">银行业法律…</a>
					</p>
				</dd>
			</dl>
			<dl style="margin-top: 20px;">
				<dt style="background-image: none; border-bottom: 1px solid #ddd; padding-left: 0; text-align: center;" class="clearFix">
					<p style="width: 133px; float: left; border-right: 1px solid #fff;">订单号</p>
					<p style="width: 200px; float: left; border-right: 1px solid #fff;">订单时间</p>
					<p style="width: 200px; float: left; border-right: 1px solid #fff;">课程金额</p>
					<p style="width: 200px; float: left; border-right: 1px solid #fff;">订单状态</p>
					<p style="width: 200px; float: left; border-right: 1px solid #fff;">课程信息</p>
					<p style="width: 200px; float: left;">配套视频显示</p>
				</dt>
				<dd class="clearFix">
					<p style="width: 133px; float: left; border-right: 1px solid #ddd;">12358965781253</p>
					<p style="width: 200px; float: left; border-right: 1px solid #ddd;">2016.7.11   10:28:34</p>
					<p style="width: 200px; float: left; border-right: 1px solid #ddd; color: #fda609;">￥870.00</p>
					<p style="width: 200px; float: left; border-right: 1px solid #ddd;">支付成功</p>
					<p style="width: 200px;"><a style="background: none; padding: 0;">查看课程详情</a></p>
					<p style="width: 200px; border: none 0;"><a style="background-image: url(app/core/styles/images/dddd_03.png); padding-left: 50px; overflow:hidden; text-overflow:ellipsis; white-space:nowrap;">银行业法律…</a></p>
				</dd>
				<dd class="clearFix">
					<p style="width: 133px; float: left; border-right: 1px solid #ddd;">12358965781253</p>
					<p style="width: 200px; float: left; border-right: 1px solid #ddd;">2016.7.11   10:28:34</p>
					<p style="width: 200px; float: left; border-right: 1px solid #ddd; color: #fda609;">￥870.00</p>
					<p style="width: 200px; float: left; border-right: 1px solid #ddd;">支付成功</p>
					<p style="width: 200px;"><a style="background: none; padding: 0;">查看课程详情</a></p>
					<p style="width: 200px; border: none 0;"><a style="background-image: url(app/core/styles/images/dddd_03.png); padding-left: 50px; overflow:hidden; text-overflow:ellipsis; white-space:nowrap;">银行业法律…</a></p>
				</dd>
				<dd class="clearFix">
					<p style="width: 133px; float: left; border-right: 1px solid #ddd;">12358965781253</p>
					<p style="width: 200px; float: left; border-right: 1px solid #ddd;">2016.7.11   10:28:34</p>
					<p style="width: 200px; float: left; border-right: 1px solid #ddd; color: #fda609;">￥870.00</p>
					<p style="width: 200px; float: left; border-right: 1px solid #ddd;">支付成功</p>
					<p style="width: 200px;"><a style="background: none; padding: 0;">查看课程详情</a></p>
					<p style="width: 200px; border: none 0;"><a style="background-image: url(app/core/styles/images/dddd_03.png); padding-left: 50px; overflow:hidden; text-overflow:ellipsis; white-space:nowrap;">银行业法律…</a></p>
				</dd>
				<dd class="clearFix" style="border-bottom: none 0;">
					<p style="width: 133px; line-height: 80px; float: left; border-right: 1px solid #ddd;">12358965781253</p>
					<p style="width: 200px; line-height: 80px; float: left; border-right: 1px solid #ddd;">2016.7.11   10:28:34</p>
					<p style="width: 200px; line-height: 80px; float: left; border-right: 1px solid #ddd; color: #fda609;">￥870.00</p>
					<p style="width: 200px; line-height: 80px; float: left; border-right: 1px solid #ddd;">支付成功</p>
					<p style="width: 200px; line-height: 80px;"><a style="background: none; padding: 0;">查看课程详情</a></p>
					<p style="width: 200px; border: none 0;">
						<a style="background-image: url(app/core/styles/images/dddd_03.png); padding-left: 50px; overflow:hidden; text-overflow:ellipsis; white-space:nowrap;">银行业法律…</a>
						<a style="background-image: url(app/core/styles/images/dddd_03.png); padding-left: 50px; overflow:hidden; text-overflow:ellipsis; white-space:nowrap;">银行业法律…</a>
					</p>
				</dd>
			</dl>
			<div class="listRL">
				1-20条，共57条
				<a>首页</a>
				<a>上一页</a>
				<a>下一页</a>
				<a>尾页</a>
			</div>
		</div>
		<div class="testLastBox">
			<script>
				$(function(){
					$(".mnn").hover(function(){
						$(this).children("div").show();
					},function(){
						$(this).children("div").hide();
					});
				})
			</script>
			<style>
			.testLastBox dd .special a{
				display: block;
				width: 80px;
				margin: 0 auto;
				padding: 0;
				background-image: none;
				text-decoration: underline;
				line-height: 30px;
			}

			</style>
			<dl>
				<dt style="background-image: url(app/core/styles/images/kaooo_03.png);">《证券投资基金基础知识》 2016/07/16 押题
					<a style="margin-left: 50px; background: url(app/core/styles/images/kaooo_05.png) no-repeat 0 center; padding: 5px 25px; color: #666;">协议条款</a>
					<a class="mnn" style="margin-left: 50px; padding: 5px 25px; color: #666; position: relative;">设置期数
						<div style="position: absolute; display: none; left: 0; top: -10px; line-height: 30px; padding-top: 10px; border: 1px solid #ddd; width: 100px; background-color: #fff; text-align: center;">
							设置期数
							<span>[2016-10-17]</span>
							<span>[2016-10-17]</span>
							<span>[2016-10-17]</span>
						</div>
					</a>
				</dt>
				<dd class="clearFix" style="border-bottom: none 0;">
					<p style="width: 935px; line-height: 150px;"><span>2016/07/16（第一套）押题</span><span>开通日期：<b>2016/03/06</b></span><span>考试时间：<b>2016/07/16</b> </span><span>剩余课时：<b>共66小时，剩余56时5分31秒</b></span></p>
					<p style="width: 200px; border-right: none 0;" class="special"><a data-reveal-id="myModal03" style="margin-top: 15px;">申请加时</a><a data-reveal-id="myModal05">申请发票</a><a data-reveal-id="myModal02">申请重学</a><a data-reveal-id="myModal04">申请退款</a></p>
				</dd>
			</dl>
			<dl style="margin-top: 20px;">
				<dt>《证券投资基金基础知识》 2016/07/16 押题</dt>
				<dd class="clearFix" style="border-bottom: none 0;">
					<p style="width: 935px; line-height: 150px;"><span>2016/07/16（第一套）押题</span><span>开通日期：<b>2016/03/06</b></span><span>考试时间：<b>2016/07/16</b> </span><span>剩余课时：<b>共66小时，剩余56时5分31秒</b></span></p>
					<p style="width: 200px; border-right: none 0;" class="special"><a style="margin-top: 15px;">申请加时</a><a>申请发票</a><a>申请重学</a><a>申请退款</a></p>
				</dd>
			</dl>
			<dl style="margin-top: 20px;">
				<dt>《证券投资基金基础知识》 2016/07/16 押题</dt>
				<dd class="clearFix" style="border-bottom: none 0;">
					<p style="width: 935px; line-height: 150px;"><span>2016/07/16（第一套）押题</span><span>开通日期：<b>2016/03/06</b></span><span>考试时间：<b>2016/07/16</b> </span><span>剩余课时：<b>共66小时，剩余56时5分31秒</b></span></p>
					<p style="width: 200px; border-right: none 0;" class="special"><a style="margin-top: 15px;">申请加时</a><a>申请发票</a><a>申请重学</a><a>申请退款</a></p>
				</dd>
			</dl>
		</div>
		<div class="testLastBox">
			<dl>
				<dt>《证券投资基金基础知识》 2016/07/16 押题</dt>
				<dd class="clearFix">
					<p style="width: 535px;">2016/07/16（第一套）押题</p>
					<p style="width: 200px;"><a>开始押题</a></p>
					<p style="width: 200px;"><a style="background-image: url(../../images/kaoqian_03_05.png);">错题回顾</a></p>
					<p style="width: 200px; border: none 0;"><a style="background-image: url(../../images/kaoqian_03_07.png);">标注回顾</a></p>
				</dd>
				<dd class="clearFix">
					<p style="width: 535px;">2016/07/16（第一套）押题</p>
					<p style="width: 200px;"><a>开始押题</a></p>
					<p style="width: 200px;"><a style="background-image: url(../../images/kaoqian_03_05.png);">错题回顾</a></p>
					<p style="width: 200px; border: none 0;"><a style="background-image: url(../../images/kaoqian_03_07.png);">标注回顾</a></p>
				</dd>
				<dd class="clearFix" style="border-bottom: none 0;">
					<p style="width: 535px;">2016/07/16（第一套）押题</p>
					<p style="width: 200px;"><a>开始押题</a></p>
					<p style="width: 200px;"><a style="background-image: url(../../images/kaoqian_03_05.png);">错题回顾</a></p>
					<p style="width: 200px; border: none 0;"><a style="background-image: url(../../images/kaoqian_03_07.png);">标注回顾</a></p>
				</dd>
			</dl>
			<dl style="margin-top: 20px;">
				<dt>《证券投资基金基础知识》 2016/07/16 押题</dt>
				<dd class="clearFix">
					<p style="width: 535px;">2016/07/16（第一套）押题</p>
					<p style="width: 200px;"><a>开始押题</a></p>
					<p style="width: 200px;"><a style="background-image: url(../../images/kaoqian_03_05.png);">错题回顾</a></p>
					<p style="width: 200px; border: none 0;"><a style="background-image: url(../../images/kaoqian_03_07.png);">标注回顾</a></p>
				</dd>
				<dd class="clearFix">
					<p style="width: 535px;">2016/07/16（第一套）押题</p>
					<p style="width: 200px;"><a>开始押题</a></p>
					<p style="width: 200px;"><a style="background-image: url(../../images/kaoqian_03_05.png);">错题回顾</a></p>
					<p style="width: 200px; border: none 0;"><a style="background-image: url(../../images/kaoqian_03_07.png);">标注回顾</a></p>
				</dd>
				<dd class="clearFix" style="border-bottom: none 0;">
					<p style="width: 535px;">2016/07/16（第一套）押题</p>
					<p style="width: 200px;"><a>开始押题</a></p>
					<p style="width: 200px;"><a style="background-image: url(../../images/kaoqian_03_05.png);">错题回顾</a></p>
					<p style="width: 200px; border: none 0;"><a style="background-image: url(../../images/kaoqian_03_07.png);">标注回顾</a></p>
				</dd>
			</dl>
		</div>
		<div class="testLastBox">
			<dl>
				<dt>《证券投资基金基础知识》 2016/07/16 押题</dt>
				<dd class="clearFix">
					<p style="width: 535px;">2016/07/16（第一套）押题</p>
					<p style="width: 200px;"><a>开始押题</a></p>
					<p style="width: 200px;"><a style="background-image: url(../../images/kaoqian_03_05.png);">错题回顾</a></p>
					<p style="width: 200px; border: none 0;"><a style="background-image: url(../../images/kaoqian_03_07.png);">标注回顾</a></p>
				</dd>
				<dd class="clearFix">
					<p style="width: 535px;">2016/07/16（第一套）押题</p>
					<p style="width: 200px;"><a>开始押题</a></p>
					<p style="width: 200px;"><a style="background-image: url(../../images/kaoqian_03_05.png);">错题回顾</a></p>
					<p style="width: 200px; border: none 0;"><a style="background-image: url(../../images/kaoqian_03_07.png);">标注回顾</a></p>
				</dd>
				<dd class="clearFix" style="border-bottom: none 0;">
					<p style="width: 535px;">2016/07/16（第一套）押题</p>
					<p style="width: 200px;"><a>开始押题</a></p>
					<p style="width: 200px;"><a style="background-image: url(../../images/kaoqian_03_05.png);">错题回顾</a></p>
					<p style="width: 200px; border: none 0;"><a style="background-image: url(../../images/kaoqian_03_07.png);">标注回顾</a></p>
				</dd>
			</dl>
		</div>
		<div class="testLastBox">
			<dl>
				<dt>《证券投资基金基础知识》 2016/07/16 押题</dt>
				<dd class="clearFix">
					<p style="width: 535px;">2016/07/16（第一套）押题</p>
					<p style="width: 200px;"><a>开始押题</a></p>
					<p style="width: 200px;"><a style="background-image: url(../../images/kaoqian_03_05.png);">错题回顾</a></p>
					<p style="width: 200px; border: none 0;"><a style="background-image: url(../../images/kaoqian_03_07.png);">标注回顾</a></p>
				</dd>
				<dd class="clearFix">
					<p style="width: 535px;">2016/07/16（第一套）押题</p>
					<p style="width: 200px;"><a>开始押题</a></p>
					<p style="width: 200px;"><a style="background-image: url(../../images/kaoqian_03_05.png);">错题回顾</a></p>
					<p style="width: 200px; border: none 0;"><a style="background-image: url(../../images/kaoqian_03_07.png);">标注回顾</a></p>
				</dd>
				<dd class="clearFix" style="border-bottom: none 0;">
					<p style="width: 535px;">2016/07/16（第一套）押题</p>
					<p style="width: 200px;"><a>开始押题</a></p>
					<p style="width: 200px;"><a style="background-image: url(../../images/kaoqian_03_05.png);">错题回顾</a></p>
					<p style="width: 200px; border: none 0;"><a style="background-image: url(../../images/kaoqian_03_07.png);">标注回顾</a></p>
				</dd>
			</dl>
			<dl style="margin-top: 20px;">
				<dt>《证券投资基金基础知识》 2016/07/16 押题</dt>
				<dd class="clearFix">
					<p style="width: 535px;">2016/07/16（第一套）押题</p>
					<p style="width: 200px;"><a>开始押题</a></p>
					<p style="width: 200px;"><a style="background-image: url(../../images/kaoqian_03_05.png);">错题回顾</a></p>
					<p style="width: 200px; border: none 0;"><a style="background-image: url(../../images/kaoqian_03_07.png);">标注回顾</a></p>
				</dd>
				<dd class="clearFix">
					<p style="width: 535px;">2016/07/16（第一套）押题</p>
					<p style="width: 200px;"><a>开始押题</a></p>
					<p style="width: 200px;"><a style="background-image: url(../../images/kaoqian_03_05.png);">错题回顾</a></p>
					<p style="width: 200px; border: none 0;"><a style="background-image: url(../../images/kaoqian_03_07.png);">标注回顾</a></p>
				</dd>
				<dd class="clearFix" style="border-bottom: none 0;">
					<p style="width: 535px;">2016/07/16（第一套）押题</p>
					<p style="width: 200px;"><a>开始押题</a></p>
					<p style="width: 200px;"><a style="background-image: url(../../images/kaoqian_03_05.png);">错题回顾</a></p>
					<p style="width: 200px; border: none 0;"><a style="background-image: url(../../images/kaoqian_03_07.png);">标注回顾</a></p>
				</dd>
			</dl>
		</div>
		<div class="testLastBox clearFix" style="height: 220px;">
			<div class="testLast01">
				<p>投诉与建议</p>
				<span>您的参与将帮助我们改进产品及服务！如果您对慧考网有任何建议或不满意，欢迎您的批评指正！</span>
			</div>
			<div class="testLast02">
				<input type="text" placeholder="您的姓名" />
				<input type="text" placeholder="您的手机" />
				<input type="text" placeholder="电子邮箱" />
			</div>
			<div class="testLast03">
				<textarea placeholder="您的姓名" /></textarea>
				<a>提交</a>
			</div>
		</div>
		
		
		
		
		
		
		
		
		
	</div>
	<div class="contentPartTitle" style="margin-top: 70px;">
		<span style="background-image: url(app/core/styles/images/dddddeee_03.png); background-color: #f2f2f2;"></span>
	</div>
	<div class="detailsPlus">
			<div class="detailsPlusDiv clearFix">
				<div style="margin-left: 0; background-color: #fff;">
					<p><img src="app/core/styles/images/details_18.png"></p>
					<span>证券从业（入门）</span>
				</div>
				<div style="background-color: #fff;">
					<p><img src="app/core/styles/images/details_20.png"></p>
					<span>证券从业（专业）</span>
				</div>
				<div style="background-color: #fff;">
					<p><img src="app/core/styles/images/details_22.png"></p>
					<span>期货从业</span>
				</div>
				<div style="background-color: #fff;">
					<p><img src="app/core/styles/images/details_25.png"></p>
					<span>基金从业资格考试</span>
				</div>
			</div>
		</div>
</div>
<?php $this->_compileInclude('foot'); ?>
<div id="myModal" class="reveal-modal">
    <a class="reveal-close close-reveal-modal" style="color: #fff; top: 17px;">&#215;</a>
    <div class="examTitle">修改头像</div>
    <div class="examDiv" style="padding: 20px 50px; display: block;">
    	<div class="examForm clearFix">
    		<p>当前头像</p>
    		<div style="float: left;"><img src="../../images/kaoqian_03.png"></div>
    	</div>
    	<div class="examForm clearFix">
    		<p>新头像</p>
    		<div style="float: left; width: 300px; font-size: 14px; color: #999; line-height: 25px;"> <a style="color: #666; background-color: #ddd; padding: 5px 15px; margin-right: 10px;">选择文件</a>未选择任何文件<br>仅支持JPG、GIF、PNG、JPEG、BMP格式，文件小于4M</div>
    	</div>
    </div>
    <div class="examBtn">
    	<a class="close-reveal-modal">提交</a>
    </div>
</div>
<div id="myModal01" class="reveal-modal">
    <a class="reveal-close close-reveal-modal" style="color: #fff; top: 17px;">&#215;</a>
    <div class="examTitle">在线充值</div>
    <div class="examDiv" style="padding: 20px 50px; display: block;">
    	<div class="examForm clearFix">
    		<p>在线充值</p>
    		<input type="text" placeholder="请输入充值金额" />
    	</div>
    	<div class="examForm clearFix">
    		<p>支付方式</p>
    		<script>
    			$(function(){
    				$(".examForm div").click(function(){
    					$(".examForm div").children().css('display','none');
    					$(this).children().css('display','block');
    				});
    			})
    		</script>
    		<div style="float: left; width:101px ; height: 42px; border: 1px solid #ddd; background: url(app/core/styles/images/select1_03.png) no-repeat center center; cursor: pointer;"><span style=" display: none; width: 100%; height: 100%; background-image: url(../../images/select_03.png);"></span></div>
    		<div style="float: left; width:101px ; height: 42px; border: 1px solid #ddd; background: url(app/core/styles/images/select1_05.png) no-repeat center center; margin-left: 20px; cursor: pointer;"><span style=" display: none; width: 100%; height: 100%; background-image: url(../../images/select_03.png);"></span></div>
    		<div style="float: left; width:101px ; height: 42px; border: 1px solid #ddd; background: url(app/core/styles/images/select1_07.png) no-repeat center center; margin-left: 20px; cursor: pointer;"><span style=" display: none; width: 100%; height: 100%; background-image: url(../../images/select_03.png);"></span></div>
    	</div>
    </div>
    <div class="examBtn">
    	<a class="close-reveal-modal">立即充值</a>
    </div>
</div>
<script>
		$(function(){
			$(".examTitle a").click(function(){
				$(this).addClass("examAdd").siblings().removeClass("examAdd");
				var n = $(this).parent().children("a").index(this);
				$(this).parent().siblings(".examDiv").hide();
				$(this).parent().siblings(".examDiv").eq(n).show();
			})
		})
	</script>
<div id="myModal05" class="reveal-modal">
    <a class="reveal-close close-reveal-modal" style="color: #fff; top: 17px;">&#215;</a>
    <div class="examTitle" style="padding-left: 0;">
    	<a class="examAdd">申请发票</a><a>申请记录</a>
    </div>
    <div class="examDiv" style="padding: 20px 50px; display: block;">
    	<div class="examForm clearFix">
    		<p>发票类型</p>
    		<select>
			  <option value ="volvo">公司</option>
			  <option value ="saab">单位</option>
			  <option value="opel">学校</option>
			  <option value="audi">家</option>
			</select>
    	</div>
    	<div class="examForm clearFix">
    		<p>发票项目</p>
    		<select>
			  <option value ="volvo">培训费</option>
			  <option value ="saab">培训费</option>
			  <option value="opel">培训费</option>
			  <option value="audi">培训费</option>
			</select>
    	</div>
    	<div class="examForm clearFix">
    		<p>发票名称</p>
    		<input type="text" placeholder="请输入发票名称" />
    	</div>
    	<div class="examForm clearFix">
    		<p>发票金额</p>
    		<input type="text" placeholder="请输入发票名称" />
    	</div>
    	<div class="examForm clearFix">
    		<p>申请原因</p>
    		<textarea type="text" placeholder="请输入发票名称"></textarea>
    	</div>
    </div>
    <div class="examDiv" style="padding: 20px 50px;">
    	<div class="examForm clearFix" style="border: 1px solid #ddd;">
    		<p style="padding:5px 20px; padding-left: 50px; background: url(../../images/kkuuu_03.png) no-repeat 10px center;">2016-07-20</p>
    		<p style="padding:5px 0; float: right;">审核通过</p>
    	</div>
    	<div class="examForm clearFix" style="border: 1px solid #ddd;">
    		<p style="padding:5px 20px; padding-left: 50px; background: url(../../images/kkuuu_03.png) no-repeat 10px center;">2016-07-20</p>
    		<p style="padding:5px 0; float: right;">审核通过</p>
    	</div>
    	<div class="examForm clearFix" style="border: 1px solid #ddd;">
    		<p style="padding:5px 20px; padding-left: 50px; background: url(../../images/kkuuu_03.png) no-repeat 10px center;">2016-07-20</p>
    		<p style="padding:5px 0; float: right;">审核通过</p>
    		<h6 style="clear: both; line-height: 30px; font-weight: normal; font-size: 12px; color: #999; border-top: 1px solid #ddd; padding:10px;">您填写的信息不足，请重新申请！</h6>
    	</div>
    </div>
    <div class="examBtn">
    	<a class="close-reveal-modal">提交</a>
    	<a class="close-reveal-modal">取消</a>
    </div>
</div>
<div id="myModal02" class="reveal-modal">
    <a class="reveal-close close-reveal-modal" style="color: #fff; top: 17px;">&#215;</a>
    <div class="examTitle" style="padding-left: 0;">
    	<a class="examAdd">申请重学</a><a>申请记录</a>
    </div>
    <div class="examDiv" style="padding: 20px 50px; display: block;">
    	<div class="examForm clearFix" style="border: 1px solid #ddd;">
    		<p style="padding:5px 20px; padding-left: 50px; background: url(../../images/kkuuu_03.png) no-repeat 10px center;">2016-07-20</p>
    		<p style="padding:5px 0; float: right;">审核通过</p>
    	</div>
    	<div class="examForm clearFix" style="border: 1px solid #ddd;">
    		<p style="padding:5px 20px; padding-left: 50px; background: url(../../images/kkuuu_03.png) no-repeat 10px center;">2016-07-20</p>
    		<p style="padding:5px 0; float: right;">审核通过</p>
    	</div>
    	<div class="examForm clearFix" style="border: 1px solid #ddd;">
    		<p style="padding:5px 20px; padding-left: 50px; background: url(../../images/kkuuu_03.png) no-repeat 10px center;">2016-07-20</p>
    		<p style="padding:5px 0; float: right;">审核通过</p>
    		<h6 style="clear: both; line-height: 30px; font-weight: normal; font-size: 12px; color: #999; border-top: 1px solid #ddd; padding:10px;">您填写的信息不足，请重新申请！</h6>
    	</div>
    </div>
    <div class="examDiv" style="padding: 20px 50px;">
    	<div class="examForm clearFix" style="border: 1px solid #ddd;">
    		<p style="padding:5px 20px; padding-left: 50px; background: url(../../images/kkuuu_03.png) no-repeat 10px center;">2016-07-20</p>
    		<p style="padding:5px 0; float: right;">审核通过</p>
    	</div>
    	<div class="examForm clearFix" style="border: 1px solid #ddd;">
    		<p style="padding:5px 20px; padding-left: 50px; background: url(../../images/kkuuu_03.png) no-repeat 10px center;">2016-07-20</p>
    		<p style="padding:5px 0; float: right;">审核通过</p>
    	</div>
    	<div class="examForm clearFix" style="border: 1px solid #ddd;">
    		<p style="padding:5px 20px; padding-left: 50px; background: url(../../images/kkuuu_03.png) no-repeat 10px center;">2016-07-20</p>
    		<p style="padding:5px 0; float: right;">审核通过</p>
    		<h6 style="clear: both; line-height: 30px; font-weight: normal; font-size: 12px; color: #999; border-top: 1px solid #ddd; padding:10px;">您填写的信息不足，请重新申请！</h6>
    	</div>
    </div>
    <div class="examBtn">
    	<a class="close-reveal-modal">提交</a>
    	<a class="close-reveal-modal">取消</a>
    </div>
</div>
<div id="myModal03" class="reveal-modal">
    <a class="reveal-close close-reveal-modal" style="color: #fff; top: 17px;">&#215;</a>
    <div class="examTitle" style="padding-left: 0;">
    	<a class="examAdd">申请加时</a><a>申请记录</a>
    </div>
    <div class="examDiv" style="padding: 20px 50px; display: block;">
    	<div class="examForm clearFix">
    		<p>加时数量</p>
    		<select>
			  <option value ="volvo">10小时</option>
			  <option value ="saab">10小时</option>
			  <option value="opel">10小时</option>
			  <option value="audi">10小时</option>
			</select>
    	</div>
    	<div class="examForm clearFix">
    		<p>申请原因</p>
    		<textarea type="text" placeholder="请输入发票名称"></textarea>
    	</div>
    </div>
    <div class="examDiv" style="padding: 20px 50px;">
    	<div class="examForm clearFix" style="border: 1px solid #ddd;">
    		<p style="padding:5px 20px; padding-left: 50px; background: url(../../images/kkuuu_03.png) no-repeat 10px center;">2016-07-20</p>
    		<p style="padding:5px 0; float: right;">审核通过</p>
    	</div>
    	<div class="examForm clearFix" style="border: 1px solid #ddd;">
    		<p style="padding:5px 20px; padding-left: 50px; background: url(../../images/kkuuu_03.png) no-repeat 10px center;">2016-07-20</p>
    		<p style="padding:5px 0; float: right;">审核通过</p>
    	</div>
    	<div class="examForm clearFix" style="border: 1px solid #ddd;">
    		<p style="padding:5px 20px; padding-left: 50px; background: url(../../images/kkuuu_03.png) no-repeat 10px center;">2016-07-20</p>
    		<p style="padding:5px 0; float: right;">审核通过</p>
    		<h6 style="clear: both; line-height: 30px; font-weight: normal; font-size: 12px; color: #999; border-top: 1px solid #ddd; padding:10px;">您填写的信息不足，请重新申请！</h6>
    	</div>
    </div>
    <div class="examBtn">
    	<a class="close-reveal-modal">提交</a>
    	<a class="close-reveal-modal">取消</a>
    </div>
</div>
<div id="myModal04" class="reveal-modal">
    <a class="reveal-close close-reveal-modal" style="color: #fff; top: 17px;">&#215;</a>
    <div class="examTitle" style="padding-left: 0;">
    	<a class="examAdd">申请退款</a><a>申请记录</a>
    </div>
    <div class="examDiv" style="padding: 20px 50px; display: block;">
    	<div class="examForm clearFix">
    		<p>课程名称</p>
    		<input type="text" placeholder="请输入课程名称" />
    	</div>
    	<div class="examForm clearFix">
    		<p>银行名称</p>
    		<input type="text" placeholder="请输入银行名称" />
    	</div>
    	<div class="examForm clearFix">
    		<p>银行账号</p>
    		<input type="text" placeholder="请输入银行卡号" />
    	</div>
    	<div class="examForm clearFix">
    		<p>收款人姓名</p>
    		<input type="text" placeholder="请输入收款人姓名" />
    	</div>
    	<div class="examForm clearFix">
    		<p>收款人电话</p>
    		<input type="text" placeholder="请输入收款人电话" />
    	</div>
    	<div class="examForm clearFix">
    		<p>申请原因</p>
    		<textarea type="text" placeholder="请输入发票名称"></textarea>
    	</div>
    </div>
    <div class="examDiv" style="padding: 20px 50px;">
    	<div class="examForm clearFix" style="border: 1px solid #ddd;">
    		<p style="padding:5px 20px; padding-left: 50px; background: url(../../images/kkuuu_03.png) no-repeat 10px center;">2016-07-20</p>
    		<p style="padding:5px 0; float: right;">审核通过</p>
    	</div>
    	<div class="examForm clearFix" style="border: 1px solid #ddd;">
    		<p style="padding:5px 20px; padding-left: 50px; background: url(../../images/kkuuu_03.png) no-repeat 10px center;">2016-07-20</p>
    		<p style="padding:5px 0; float: right;">审核通过</p>
    	</div>
    	<div class="examForm clearFix" style="border: 1px solid #ddd;">
    		<p style="padding:5px 20px; padding-left: 50px; background: url(../../images/kkuuu_03.png) no-repeat 10px center;">2016-07-20</p>
    		<p style="padding:5px 0; float: right;">审核通过</p>
    		<h6 style="clear: both; line-height: 30px; font-weight: normal; font-size: 12px; color: #999; border-top: 1px solid #ddd; padding:10px;">您填写的信息不足，请重新申请！</h6>
    	</div>
    </div>
    <div class="examBtn">
    	<a class="close-reveal-modal">提交</a>
    	<a class="close-reveal-modal">取消</a>
    </div>
</div>
</body>
</html>
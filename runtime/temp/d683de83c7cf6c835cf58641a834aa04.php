<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:40:"/home/web//app/work/view/index/main.html";i:1514269629;s:41:"/home/web//app/work/view/public/base.html";i:1514269629;}*/ ?>
<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">	
	<meta http-equiv="content-type" content="text/html;charset=utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
	<title>中睿盛通管理系统</title>
	<meta name="keywords" content="中睿盛通管理系统">
	<meta name="description" content="中睿盛通管理系统">	
	<meta name="author" content="Lazycat">
	
	<!--字体Icon-->
	<link rel="stylesheet" type="text/css" href="__CSS__/metronic/assets/global/plugins/font-awesome/css/font-awesome.min.css" />
	<link rel="stylesheet" type="text/css" href="__CSS__/metronic/assets/global/plugins/simple-line-icons/simple-line-icons.min.css" />
	
	<link rel="stylesheet" type="text/css" href="__CSS__/metronic/assets/global/plugins/bootstrap/css/bootstrap.min.css" />
	<link rel="stylesheet" type="text/css" href="__CSS__/metronic/assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css" />		
	<!--消息提示-->
	<link rel="stylesheet" type="text/css" href="__CSS__/metronic/assets/global/plugins/bootstrap-toastr/toastr.min.css" />	
	<!--模态框-->
	<link rel="stylesheet" type="text/css" href="__CSS__/metronic/assets/global/plugins/bootstrap-modal/css/bootstrap-modal-bs3patch.css" />
	<link rel="stylesheet" type="text/css" href="__CSS__/metronic/assets/global/plugins/bootstrap-modal/css/bootstrap-modal.css" />	
	<link rel="stylesheet" type="text/css" href="__CSS__/metronic/assets/global/plugins/jquery.magnific-popup/dist/magnific-popup.css" />		
	<!--日期相关-->
	<link rel="stylesheet" type="text/css" href="__CSS__/metronic/assets/global/plugins/bootstrap-datepicker/css/bootstrap-datepicker.min.css" />	
	<link rel="stylesheet" type="text/css" href="__CSS__/metronic/assets/global/plugins/bootstrap-datetimepicker/css/bootstrap-datetimepicker.min.css" />		
	<!--code editor-->
	<link rel="stylesheet" type="text/css" href="__CSS__/metronic/assets/global/plugins/codemirror/lib/codemirror.css" />	
	<link rel="stylesheet" type="text/css" href="__CSS__/metronic/assets/global/plugins/codemirror/theme/neat.css" />	
	<link rel="stylesheet" type="text/css" href="__CSS__/metronic/assets/global/plugins/codemirror/theme/ambiance.css" />	
	<link rel="stylesheet" type="text/css" href="__CSS__/metronic/assets/global/plugins/codemirror/theme/material.css" />	
	<link rel="stylesheet" type="text/css" href="__CSS__/metronic/assets/global/plugins/codemirror/theme/neo.css" />	
	
	<link rel="stylesheet" type="text/css" href="__CSS__/metronic/assets/global/css/components.min.css" />
	<link rel="stylesheet" type="text/css" href="__CSS__/metronic/assets/global/css/plugins.min.css" />
	<link rel="stylesheet" type="text/css" href="__CSS__/metronic/assets/layouts/layout/css/layout.css" />
	<link rel="stylesheet" type="text/css" href="__CSS__/metronic/assets/layouts/layout/css/themes/darkblue.min.css" />
	<link rel="stylesheet" type="text/css" href="__CSS__/work/css.css" />
	
<style>
	.s_main{width:100%;overflow:hidden;}
	.s_main .red{background:#fff7f8;height:160px;margin-bottom:16px;}
	.s_main .lan{background:#f7fcff;height:160px;margin-bottom:16px;}
	.s_main .huang{background:#fffcf7;height:160px;margin-bottom:16px;}
	.s_main.red span a{color:#ec6670 !important;}
	.s_main.lan span a{color:#66b9ed !important;}
	.s_main.huang span a{color:#f3c477 !important;}
	.s_user{width:15%;float:left;overflow:hidden;}
	.sxx{float:left;height:160px;width:13.5%;}
	.slogo{width:70px; height:70px; border-radius: 50% !important; margin: 30px auto 10px auto;}
	.sl1{background:#ec6670 url(/static/images/work/home-suser.png) no-repeat center;}
	.sl2{background:#66b9ed url(/static/images/work/home-sdai.png) no-repeat center;}
	.sl3{background:#f3c477 url(/static/images/work/home-scp.png) no-repeat center;}
	.sxx span{font-size:20px;width:100%; display: inline-block; height:110px; line-height:130px; text-align: center;}
	.sxx h4,.s_user h3{font-size:16px; color:#666;height:25px;line-height:25px;text-align: center;}
</style>

</head>
<body class="bg-white" id="<?php echo \think\Request::instance()->controller(); ?>-<?php echo \think\Request::instance()->action(); ?>">
	<!--[if lt IE 10]>
	<div class="alert alert-warning md0 dn browser-low-tip">
		<button type="button" class="close" data-dismiss="alert" aria-hidden="true" onclick="close_browser_low_tip(this)">&times;</button>
		<i class="fa fa-warning sign"></i><strong>浏览器版本过低！</strong> 请使用谷歌浏览器(Chrome)、火狐浏览器(FireFox)、360浏览器、搜狗浏览器、腾讯浏览器(TT)、IE10以上、苹果浏览器(Safari)等浏览器浏览本站才可体验最佳效果。
	</div>
	<script>		
		function close_browser_low_tip(obj){
			$(obj).parent().remove();
		}
	</script>
	<![endif]-->

	<div class="m20">
	<!--导航菜单-->
	<!--搜索-->
	
	<div class="s_main">
		<div class="s_main">
			<div class="s_main red">
				<div class="s_user">
					<div class="slogo sl1"></div>
					<h3>用户</h3>
				</div>
				<div class="sxx">
					<span><a href="javascript:void(0); " data-id="80" data-url="/personmember" onclick="window.parent.openMenu($(this),'个人用户')"><?php echo $noAuditPerson; ?></a></span>
					<h4>个人用户认证待审核数</h4>
				</div>
				<div class="sxx">
					<span><a href="javascript:void(0); "  data-id="82" data-url="/enterprisemember" onclick="window.parent.openMenu($(this),'企业用户')"><?php echo $noAuditEnterprise; ?></a></span>
					<h4>企业用户认证待审核数</h4>
				</div>
				<div class="sxx">
					<span><a href="javascript:void(0); " data-id="213" data-url="/alliance" onclick="window.parent.openMenu($(this),'联盟商家')"><?php echo $noAuditAlliance; ?></a></span>
					<h4>联盟商认证待审核数</h4>
				</div>
				<div class="sxx">
					<span><a href="javascript:void(0); " data-id="216" data-url="/Application" onclick="window.parent.openMenu($(this),'申请调额管理')"><?php echo $noAuditApplication; ?></a></span>
					<h4>申请调额待审核数</h4>
				</div>
				<div class="sxx">
					<span><a href="javascript:void(0); " data-id="171" data-url="/Workorder" onclick="window.parent.openMenu($(this),'工单列表')"><?php echo $noDealWorkOrder; ?></a></span>
					<h4>工单待处理数</h4>
				</div>
			</div>

			<div class="s_main lan">
				<div class="s_user">
					<div class="slogo sl2"></div>
					<h3>代理</h3>
				</div>
				<div class="sxx">
					<span><a href="javascript:void(0); " data-id="108" data-url="/agentorder" onclick="window.parent.openMenu($(this),'购买代理审核')"><?php echo $buyAgent; ?></a></span>
					<h4>购买代理待审核数</h4>
				</div>
				<div class="sxx">
					<span><a href="javascript:void(0); " data-id="228" data-url="/Agentbankcard" onclick="window.parent.openMenu($(this),'银行卡管理')"><?php echo $agentBankcard; ?></a></span>
					<h4>代理银行卡待审核数</h4>
				</div>
				<div class="sxx">
					<span><a href="javascript:void(0); " data-id="267" data-url="/Agentwithdrawcash" onclick="window.parent.openMenu($(this),'代理现金提现')"><?php echo $agentWithdrawCash; ?></a></span>
					<h4>代理现金提现待审核数</h4>
				</div>
				<div class="sxx">
					<span><a href="javascript:void(0); " data-id="270" data-url="/Agentwithdrawlurpak" onclick="window.parent.openMenu($(this),'代理云积分提现')"><?php echo $agentWithdrawLurpak; ?></a></span>
					<h4>代理云积分提现待审核数</h4>
				</div>
			</div>

			<div class="s_main huang">
				<div class="s_user">
					<div class="slogo sl3"></div>
					<h3>交易</h3>
				</div>
				<div class="sxx">
					<span><a href="javascript:void(0); " data-id="100" data-url="/banktransfer" onclick="window.parent.openMenu($(this),'线下转账审核')"><?php echo $bankTransfer; ?></a></span>
					<h4>线下转账待审核数</h4>
				</div>
				<div class="sxx">
					<span><a href="javascript:void(0); " data-id="69" data-url="/withdrawcash" onclick="window.parent.openMenu($(this),'现金提现')"><?php echo $withdrawCash; ?></a></span>
					<h4>用户现金提现待审核数</h4>
				</div>
				<div class="sxx">
					<span><a href="javascript:void(0); " data-id="147" data-url="/withdrawlurpak" onclick="window.parent.openMenu($(this),'云积分提现')"><?php echo $withdrawLurpak; ?></a></span>
					<h4>用户云积分提现待审核数</h4>
				</div>
				<div class="sxx">
					<span><a href="javascript:void(0); " data-id="90" data-url="/Stockdistribute" onclick="window.parent.openMenu($(this),'库存积分分发')"><?php echo $noAuditStockDistribut; ?></a></span>
					<h4>库存积分分发待审核数</h4>
				</div>
			</div>

		</div>

	</div>
	
	<!--图表-->
	<div class="row">	
		<div class="col-xs-6">
			<div class="portlet light bordered">
				<div class="portlet-title">
					<div class="caption">
						<span class="caption-subject bold uppercase font-dark">基础数据</span>
						<span class="caption-helper">最近7天</span>
					</div>
					<div class="actions">
					</div>
				</div>
				<div class="portlet-body" style="height: 500px;">
					<div id="total_base" class="CSSAnimationChart clearfix"></div>
				</div>
			</div>				
		</div>
		<div class="col-xs-6">
			<div class="portlet light bordered">
				<div class="portlet-title">
					<div class="caption">
						<span class="caption-subject bold uppercase font-dark">用户数据</span>
						<span class="caption-helper member-count-day">统计日期</span>
					</div>
					<div class="actions">
					</div>
				</div>
				<div class="portlet-body" style="height: 500px;">
					<div id="member_pie" class="CSSAnimationChart clearfix"></div>
				</div>
			</div>	
		
		</div>		
	</div>

    	
	<!--自定义内容-->
	</div>
	
	<!--模态框-->
	<div id="#ajax-modal" class="modal fade ajax-modal" tabindex="-1" data-backdrop="static">
		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
			<h4 class="modal-title">提示</h4>
		</div>	
		<div class="modal-body">
			
		</div>
		<div class="modal-footer hide">
			<span class="btns"></span>
			<button type="button" data-dismiss="modal" class="btn btn-outline dark pull-left">关闭</button>
		</div>
	</div>
	
	<!--ajax-form-->
	<div id="ajax_form" class="hide"></div>
	
	<!-- 上传图片 -->
	<form enctype="multipart/form-data" id="form-upload" data-url="/upload/images" class="hide">
		<input id="file" name="file" type="file" value="" />
		<input type="hidden" id="width" name="width" value="">
		<input type="hidden" id="height" name="height" value="">
		<input type="hidden" id="type" name="type" value="">	
		<input type="hidden" id="field" name="field" value="">
		<input type="hidden" id="field1" name="field1" value="">
		<input type="hidden" id="field2" name="field2" value="">
	</form>	
	
	<div class="hide tmp"></div>
	
	<!--[if lt IE 9]>
		<script type="text/javascript" src="__CSS__/metronic/assets/global/plugins/respond.min.js"></script>
		<script type="text/javascript" src="__CSS__/metronic/assets/global/plugins/excanvas.min.js"></script>
	<![endif]-->
	<script type="text/javascript" src="__CSS__/metronic/assets/global/plugins/jquery.min.js"></script>
	<script type="text/javascript" src="__CSS__/metronic/assets/global/plugins/bootstrap/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="__CSS__/metronic/assets/global/plugins/js.cookie.min.js"></script>
	<script type="text/javascript" src="__CSS__/metronic/assets/global/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js"></script>
	<script type="text/javascript" src="__CSS__/metronic/assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js"></script>
	<script type="text/javascript" src="__CSS__/metronic/assets/global/plugins/jquery.blockui.min.js"></script>
	<script type="text/javascript" src="__CSS__/metronic/assets/global/plugins/bootstrap-toastr/toastr.min.js"></script>
	<script type="text/javascript" src="__CSS__/metronic/assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js"></script>    
	<script type="text/javascript" src="__CSS__/metronic/assets/global/plugins/bootstrap-modal/js/bootstrap-modalmanager.js"></script>    
	<script type="text/javascript" src="__CSS__/metronic/assets/global/plugins/bootstrap-modal/js/bootstrap-modal.js"></script>    
	<script type="text/javascript" src="__CSS__/metronic/assets/global/plugins/jquery.magnific-popup/dist/jquery.magnific-popup.min.js"></script> 
	<script type="text/javascript" src="__CSS__/metronic/assets/global/plugins/jquery-ui/jquery-ui.min.js"></script> 
	<!--幻灯片背景-->
	<script type="text/javascript" src="__CSS__/metronic/assets/global/plugins/backstretch/jquery.backstretch.min.js"></script>	
	<!--日期相关-->	
	<script type="text/javascript" src="__CSS__/metronic/assets/global/plugins/bootbox/bootbox.min.js"></script>
	<script type="text/javascript" src="__CSS__/metronic/assets/global/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
	<script type="text/javascript" src="__CSS__/metronic/assets/global/plugins/bootstrap-datepicker/locales/bootstrap-datepicker.zh-CN.min.js"></script>
	<script type="text/javascript" src="__CSS__/metronic/assets/global/plugins/bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js"></script> 
	<script type="text/javascript" src="__CSS__/metronic/assets/global/plugins/bootstrap-datetimepicker/js/locales/bootstrap-datetimepicker.zh-CN.js"></script>
	<!-- code editor -->
	<script type="text/javascript" src="__CSS__/metronic/assets/global/plugins/codemirror/lib/codemirror.js"></script>
	<!--图片base64上传-->
	<script type="text/javascript" src="__JS__/plugins/localResizeIMG/dist/lrz.bundle.js"></script>
	<!--百度编辑器-->
	<script type="text/javascript" src="__JS__/plugins/ueditor/ueditor_mintoolbar.config.js"></script>
	<script type="text/javascript" src="__JS__/plugins/ueditor/ueditor.all.min.js"></script>
	<script type="text/javascript" src="__JS__/plugins/ueditor/lang/zh-cn/zh-cn.js"></script>
	
	<script type="text/javascript" src="__JS__/plugins/jquery.form.js"></script>
	<script type="text/javascript" src="__JS__/work/apps.js"></script>
	<script>
		if($('.nav-title').size() >0){
			var baseUrl = '/<?php echo \think\Request::instance()->controller(); ?>/<?php echo \think\Request::instance()->action(); ?>';
			$('.nav-title li').removeClass('active').parent().find('li[data-baseUrl="'+ baseUrl +'"]').addClass('active');
			
			if($('.nav-title li.active').size() == 0 && $('.nav-title li[data-otherUrl="'+ baseUrl +'"]').size() > 0){
				$('.nav-title li[data-otherUrl="'+ baseUrl +'"]').removeClass('hide').addClass('active');
			}
		}
	</script>
	
	
<script type="text/javascript" src="__JS__/plugins/amcharts/amcharts/amcharts.js"></script>
<script type="text/javascript" src="__JS__/plugins/amcharts/amcharts/serial.js"></script>
<script type="text/javascript" src="__JS__/plugins/amcharts/amcharts/pie.js"></script>
<script>
	/*
	ajax_post({
		url:'/api/api',
		data:{
			member_pie:{openid:1,apiurl:''},
			total_base:{openid:1,apiurl:''}
		},
		success:function(ret){
			console.log(ret);
			if(ret.member_pie.code == 1){
				$('.member-count-day').html(ret.member_pie.data.day);
	            var chart;
	            var legend;
	
	            var chartData = [
	                {
	                    "country": "消费商",
	                    "value": ret.member_pie.data.member_level1_count
	                },
	                {
	                    "country": "盛客",
	                    "value": ret.member_pie.data.member_level2_count
	                },
	                {
	                    "country": "盛投",
	                    "value": ret.member_pie.data.member_level3_count
	                },
	                {
	                    "country": "V",
	                    "value": ret.member_pie.data.member_level4_count
	                },
	                {
	                    "country": "VI",
	                    "value": ret.member_pie.data.member_level5_count
	                },
	                {
	                    "country": "VIP",
	                    "value": ret.member_pie.data.member_level6_count
	                },	
	            ];
	
	            AmCharts.ready(function () {
	                // PIE CHART
	                chart = new AmCharts.AmPieChart();
	                chart.dataProvider = chartData;
	                chart.titleField = "country";
	                chart.valueField = "value";
	                chart.outlineColor = "#FFFFFF";
	                chart.outlineAlpha = 0.8;
	                chart.outlineThickness = 2;
	                chart.balloonText = "[[title]]<br><span style='font-size:14px'><b>[[value]]</b> ([[percents]]%)</span>";
	                // this makes the chart 3D
	                chart.depth3D = 15;
	                chart.angle = 30;
	
	                // WRITE
	                chart.write("member_pie");
	            });				
			}
			
			
			if(ret.total_base.code==1){
				var e = [];
				for(i=ret.total_base.data.length -1;i>=0;i--){
					var tmp = {
						date: ret.total_base.data[i].day,
						distance: ret.total_base.data[i].withdraw_cash_add_total,
						//townName: "云积分换换",
						//townName2: "云积分换换",
						townSize: 10,
						latitude: (parseFloat(ret.total_base.data[i].lurpak_conver) / 10000).toFixed(2),
						duration: (parseFloat(ret.total_base.data[i].integration_add) / 10000).toFixed(2)
					};
					
					e.push(tmp);
				}
				e.push({date:ret.total_base.next_day});
				console.log(e);
				
				AmCharts.makeChart("total_base", {
					type: "serial",
					fontSize: 12,
					fontFamily: "Open Sans",
					dataDateFormat: "YYYY-MM-DD",
					dataProvider: e,
					addClassNames: !0,
					startDuration: 1,
					color: "#6c7b88",
					marginLeft: 0,
					categoryField: "date",
					categoryAxis: {
						parseDates: !0,
						minPeriod: "DD",
						autoGridCount: !1,
						gridCount: 50,
						gridAlpha: .1,
						gridColor: "#FFFFFF",
						axisColor: "#555555",
						dateFormats: [{
							period: "DD",
							format: "DD"
						},
						{
							period: "WW",
							format: "MMM DD"
						},
						{
							period: "MM",
							format: "MMM"
						},
						{
							period: "YYYY",
							format: "YYYY"
						}]
					},
					valueAxes: [{
						id: "a1",
						title: "提现金额（元）",
						gridAlpha: 0,
						axisAlpha: 0
					},
					{
						id: "a2",
						position: "right",
						gridAlpha: 0,
						axisAlpha: 0,
						labelsEnabled: !1
					},
					{
						id: "a3",
						title: "积分（万）",
						position: "right",
						gridAlpha: 0,
						axisAlpha: 0,
						inside: !0,

					}],
					graphs: [{
						id: "g1",
						valueField: "distance",
						title: "提现金额",
						type: "column",
						fillAlphas: .7,
						valueAxis: "a1",
						balloonText: "[[value]] 元",
						legendValueText: "[[value]] 元",
						legendPeriodValueText: "total: [[value.sum]] 元",
						lineColor: "#08a3cc",
						alphaField: "alpha"
					},
					{
						id: "g2",
						valueField: "latitude",
						classNameField: "bulletClass",
						title: "云积分转换",
						type: "line",
						valueAxis: "a2",
						lineColor: "#786c56",
						lineThickness: 1,
						legendValueText: "[[value]] 万",
						legendPeriodValueText: "total: [[value.sum]] 万",
						//descriptionField: "townName",
						bullet: "round",
						bulletSizeField: "townSize",
						bulletBorderColor: "#02617a",
						bulletBorderAlpha: 1,
						bulletBorderThickness: 2,
						bulletColor: "#89c4f4",
						//labelText: "[[townName2]]",
						labelPosition: "right",
						balloonText: "云积分转换:[[value]] 万",
						showBalloon: !0,
						animationPlayed: !0
					},
					{
						id: "g3",
						title: "新增积分",
						valueField: "duration",
						type: "line",
						valueAxis: "a3",
						lineAlpha: .8,
						lineColor: "#e26a6a",
						balloonText: "新增积分:[[value]] 万",
						legendPeriodValueText: "total: [[value.sum]] 万",
						lineThickness: 1,
						legendValueText: "[[value]] 万",
						bullet: "square",
						bulletBorderColor: "#e26a6a",
						bulletBorderThickness: 1,
						bulletBorderAlpha: .8,
						dashLengthField: "dashLength",
						animationPlayed: !0
					}],
					chartCursor: {
						zoomable: !1,
						categoryBalloonDateFormat: "YYYY-MM-DD",
						cursorAlpha: 0,
						categoryBalloonColor: "#e26a6a",
						categoryBalloonAlpha: .8,
						valueBalloonsEnabled: !1
					},
					legend: {
						bulletType: "round",
						equalWidths: !1,
						valueWidth: 120,
						useGraphSettings: !0,
						color: "#6c7b88"
					}
				});				
			}
		}
	});
	*/
</script>

	<!--页脚-->
</body>
</html>
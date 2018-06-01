<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:41:"/home/web//app/work/view/login/index.html";i:1514269629;s:41:"/home/web//app/work/view/public/base.html";i:1514269629;}*/ ?>
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
	<!--样式-->
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
	
<form class="form-horizontal" id="form-login" action="/login/checkLogin" onsubmit="return sendForm($(this))">
	<div class="login-box">
		<div class="portlet light ">
			<div class="portlet-title">
				<h4 class="text-center t_hot" onclick="stopSao();">雇员登录</h4>
				<h4 class="text-center" onclick="myqcode();">扫码登录</h4>
			</div>
			<div class="portlet-body form">
				<div class="sss">
					<div class="form-body m20">
						<div class="form-group">
							<div class="input-icon input-icon-lg">
								<i class="fa fa-user"></i>
								<input type="text" name="username" class="form-control input-lg" placeholder="雇员账号" maxlength="30"> 
							</div>
						</div>
						<div class="form-group">
							<div class="input-icon input-icon-lg">
								<i class="fa fa-key"></i>
								<input type="password" name="password" class="form-control input-lg" placeholder="登录密码" maxlength="30"> 
							</div>
						</div>
						
						<div class="row">
							<div class="col-xs-6">
								<div class="form-group">
									<div class="input-icon input-icon-lg">
										<i class="fa fa-key"></i>
										<input type="text" name="vcode" class="form-control input-lg" placeholder="验证码" maxlength="5">
									</div>
								</div>								
							</div>
							<div class="col-xs-6 refVcode" onclick="refVcode($(this))">
								<?php echo captcha_img(); ?>
							</div>
						</div>

					</div>

					<div class="form-actions text-center">
						<button type="submit" class="btn red btn-lg btn-block"><i class="fa fa-key"></i> 登录</button>
					</div>
				</div>
				<div class="sss">
				<div class="form-body m20" style="padding-bottom: 0;">
					<div class="eer">
						<img src="<?php echo url('login/qcode'); ?>" onclick="myqcode();" class="img-responsive">
					</div>
					<span class="elogin" id="ref-code">请使用中睿盛通work端扫码登录</span>
				</div>
				</div>

			</div>
		</div>
	</div>


</form>


    	
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
	
	
<script type="text/javascript" src="__JS__/work/rand-bg.js"></script>
<script>
	$(document).ready(function(){
		$('.sss').eq(1).hide();
		$('.portlet-title h4').click(function(){
			var n=$('.portlet-title h4').index(this);
			$('.portlet-title h4').removeClass('t_hot')
			$(this).addClass('t_hot')
			$('.sss').hide().eq(n).show();
		});
		
		var time1;
		var time;	
	});


	function sendForm(obj){
		submitForm({
			formid:'#form-login',
			success:function(ret){				
				if(ret.code == 1){
					location.href = '/';
				}else if(ret.code == 10){
					$('.refVcode').click();
					ret.code = 0;
				}
				toast(ret);

			}
		});
		return false;
	}



//	$().ready(function(){
//		time1 = setInterval(saoMa,3000);//3秒,检查是否登录
//		time = setTimeout(function(){
//			$("#ref-code").html("二维码失效，请点击二维码刷新");
//			clearInterval(time1);
//		},30000);//30秒后启动
//	});

	function myqcode(){
		$("#ref-code").html("请使用中睿盛通work端扫码登录");
		time1 = setInterval(saoMa,3000);
		time = setTimeout(function(){
			$("#ref-code").html("二维码失效，请点击二维码刷新");
			clearInterval(time1);
		},60000);
		$(".img-responsive").attr('src','/login/qcode?'+Math.random());
	}

	function stopSao(){
		clearInterval(time1);
	}

	function saoMa(){
		$.ajax({
			type: 'post',
			url: "<?php echo url('login/scanCodeLogin'); ?>",
			data: '',
			dataType: 'json',
			success: function (ret) {
				if(ret.code == 1){
					location.href = '/';
					toast(ret);
				}
			},
		});
	}
</script>

	<!--页脚-->
</body>
</html>
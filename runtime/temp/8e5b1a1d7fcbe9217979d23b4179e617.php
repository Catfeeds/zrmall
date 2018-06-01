<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:46:"/home/web//app/work/view/clearcache/index.html";i:1514269629;s:41:"/home/web//app/work/view/public/base.html";i:1514269629;}*/ ?>
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
	
	<div class="note note-info">
		<div class="pull-right">
			<div class="btn btn-info" onclick="clearCache(1)">清除缓存</div>
		</div>
		<h4 class="block">清除配置缓存</h4>
		<p>清除配置缓存，启用新的配置参数</p>
	</div>
	
	<div class="note note-danger">
		<div class="pull-right">
			<div class="btn btn-info" onclick="clearCache(1)">清除缓存</div>
		</div>
		<h4 class="block">清除所有缓存</h4>
		<p>执行此操作将会清除掉所有缓存数据，可能会对各种业务流程有影响，请慎重操作！</p>
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
	
	
<script>
	function clearCache(t){
		vmodal({
			title:'清除缓存',
			msg:'<h3 class="text-center">正的要清除缓存吗？</h3><div class="text-center">请确认不影响各业务流程后再执行此项操作！</div>',
			footer:'show',
			footerBtn:'<button type="button" class="btn btn-outline red btn-ok">确定</button>',
			width:650,
		},function(){
			$('.ajax-modal .btn-ok').click(function(){
				ajax_post({
					url:'/clearcache/clear',
					data:{type:t},
					success:function(ret){
						toast(ret);
						$('.ajax-modal').modal('hide');
					}
				});
			});
		});		
	}
</script>

	<!--页脚-->
</body>
</html>
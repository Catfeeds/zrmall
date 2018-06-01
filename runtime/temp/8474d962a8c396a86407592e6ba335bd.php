<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:41:"/home/web//app/work/view/index/index.html";i:1514269629;}*/ ?>
<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">	
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title>中睿盛通管理系统</title>
	<meta name="keywords" content="中睿盛通管理系统">
	<meta name="description" content="中睿盛通管理系统">	
	<meta name="author" content="Lazycat">
	<link rel="stylesheet" type="text/css" href="__CSS__/metronic/assets/global/plugins/font-awesome/css/font-awesome.min.css" />
	<link rel="stylesheet" type="text/css" href="__CSS__/metronic/assets/global/plugins/simple-line-icons/simple-line-icons.min.css" />
	<link rel="stylesheet" type="text/css" href="__CSS__/metronic/assets/global/plugins/bootstrap/css/bootstrap.min.css" />
	<link rel="stylesheet" type="text/css" href="__CSS__/metronic/assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css" />
	<link rel="stylesheet" type="text/css" href="__CSS__/metronic/assets/global/css/components.min.css" />
	<link rel="stylesheet" type="text/css" href="__CSS__/metronic/assets/global/css/plugins.min.css" />
	<link rel="stylesheet" type="text/css" href="__CSS__/metronic/assets/layouts/layout/css/layout.css" />
	<link rel="stylesheet" type="text/css" href="__CSS__/metronic/assets/layouts/layout/css/themes/darkblue.min.css" />
	<link rel="stylesheet" type="text/css" href="__CSS__/work/css.css" />
</head>
<body style="overflow: hidden;">
	<!--TOPBAR-->
    <div class="topbar fixed-top">
    	<div class="crow">
    		<div class="col-15">
    			<div class="logo">
	    			<a href="/" target="_top">
	    				<img src="<?php echo config('cfg.work')['logo']; ?>" alt="logo" height="40">
	    			</a>
    			</div>
    		</div>
    		<div class="col-70">
    			<ul class="menu-box">
    				<?php if(is_array($menu) || $menu instanceof \think\Collection || $menu instanceof \think\Paginator): $i = 0; $__LIST__ = $menu;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
    				<li class="<?php echo $i==1?'active':''; ?>" data-id="<?php echo $vo['id']; ?>" onclick="firstMenu($(this))"><i class="<?php echo $vo['icon']; ?>"></i><?php echo $vo['name']; ?></li>
    				<?php endforeach; endif; else: echo "" ;endif; ?>
    			</ul>
    		</div>
    		<div class="col-15">
    			<div class="user">
    				<img src="/static/images/work/face.jpg" class="img-circle" width="35" height="35" alt="头像"> <?php echo \think\Session::get('admin.name'); ?>（<?php echo \think\Session::get('admin.account'); ?>），<a href="/login/logout" target="_top">退出</a>
    			</div>
    		</div>
    	</div>

    </div>
    <!-- END TOPBAR -->
    
    <!-- PAGE BODY-->
    <div class="p-content">
    	<div class="crow2">
    		<div id="p-sidebar" style="width:15%;overflow:auto;">
    			<div style="height: 10px;"></div>    			
    			
    			<?php if(is_array($menu) || $menu instanceof \think\Collection || $menu instanceof \think\Paginator): $k = 0; $__LIST__ = $menu;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$ls): $mod = ($k % 2 );++$k;?>
    			<div class="menu-box <?php echo $k==1?'active':''; ?>" data-id="<?php echo $ls['id']; ?>">
	    			<?php if(is_array($ls['dlist']) || $ls['dlist'] instanceof \think\Collection || $ls['dlist'] instanceof \think\Paginator): $i = 0; $__LIST__ = $ls['dlist'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
	    			<div class="us"><?php echo $vo['icon'] ? '<i class="'.$vo['icon'].'"></i>':''; ?> <?php echo $vo['name']; ?></div>
	    			<ul>
	    				<?php if(is_array($vo['dlist']) || $vo['dlist'] instanceof \think\Collection || $vo['dlist'] instanceof \think\Paginator): $i = 0; $__LIST__ = $vo['dlist'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$ds): $mod = ($i % 2 );++$i;?>
	    				<li class="<?php echo $i==1?'active':''; ?>">
	    					<?php if(!(empty($ds['target']) || (($ds['target'] instanceof \think\Collection || $ds['target'] instanceof \think\Paginator ) && $ds['target']->isEmpty()))): ?>
	    					<a href="<?php echo $ds['url']; ?>" target="<?php echo $ds['target']; ?>"><?php echo $ds['icon'] ? '<i class="'.$ds['icon'].'"></i>':''; ?> <?php echo $ds['name']; ?></a>
	    					<?php else: ?>
	    					<a href="javascript:void(0)" data-url="<?php echo $ds['url']; ?>" data-id="<?php echo $ds['id']; ?>" onclick="openMenu($(this))"><?php echo $ds['icon'] ? '<i class="'.$ds['icon'].'"></i>':''; ?> <?php echo $ds['name']; ?></a>
	    					<?php endif; ?>
	    				</li>
	    				<?php endforeach; endif; else: echo "" ;endif; ?>
	    			</ul>
	    			<?php endforeach; endif; else: echo "" ;endif; ?>
    			</div>
    			<?php endforeach; endif; else: echo "" ;endif; ?>
    		</div>
    		<div id="p-iframe" style="width:87%" class="bg-white">
    			<div class="p-bar">
    				<div class="action">
    					<div class="btn red btn-outline btn-sm" onclick="refIframe()"><i class="icon-refresh"></i>刷新</div>
    				</div>
    				<ul class="p-bar-list">
    					<li data-id="9" onclick="winActive($(this))" class="active">数据概览</li>
    				</ul>
    			</div>
    			<div class="clearfix"></div>
    			
    			<div class="iframe-list">
    				<div id="iframe-box" data-id="9" class="active">    				
    					<iframe name="mainFrame" id="mainFrame" frameborder="0" src="/index/main"></iframe>
    					<!--<iframe name="mainFrame" id="mainFrame" frameborder="0" src="/reportcategory/download"></iframe>-->
    				</div>
    			</div>
    			
    		</div>
    	</div>
    </div> 
    <!-- END PAGE BODY-->
    	
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
	<script type="text/javascript" src="__CSS__/metronic/assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js"></script>    
	
	<script>
		var height 	= $(window).height();
		var width	= $(window).width();
		$('#p-sidebar').css({width:200});
		$('#p-iframe').css({height:height-50,width:width-200});
		$('body #iframe-box').css({height:height-50-45,width:width-200});
		$('#p-sidebar').css({height:height-50});
		restMenu();
		$(window).on('resize', function () {
			var height 	= $(window).height();
			var width	= $(window).width();
			$('#p-sidebar').css({width:200});
			$('#p-iframe').css({height:height-50,width:width-200});
			$('body #iframe-box').css({height:height-50-45,width:width-200});
			$('#p-sidebar').css({height:height-50});
    	}).resize();
    	
    	function firstMenu(obj){
    		var data = obj.data();
    		obj.addClass('active').siblings().removeClass('active');
    		
    		$('#p-sidebar .menu-box').removeClass('active');
    		$('#p-sidebar .menu-box[data-id="'+ data.id +'"]').addClass('active').find('li:first a').click();
    	}
    	
    	function openMenu(obj,textname){
    		var data	= obj.data();
    		var t		= $('.p-bar-list li[data-id="'+ data.id +'"]');
    		if(t.size() > 0){
    			t.click();
    		}else{
				var tagname = obj.parent().get(0).tagName;
				if(tagname == 'SPAN'){
					var bar = '<li class="active" data-id="'+ data.id +'" onclick="winActive($(this))">'+ textname +' <i class="fa fa-times" onclick="winClose($(this))"></i></li>';
				}else {
					var bar = '<li class="active" data-id="'+ data.id +'" onclick="winActive($(this))">'+ obj.text() +' <i class="fa fa-times" onclick="winClose($(this))"></i></li>';
				}
				$('.p-bar-list li').removeClass('active');
				$('.p-bar-list').append(bar);
				
				var style = $('.iframe-list > div.active').attr('style');
				var iframe = '<div id="iframe-box" data-id="'+ data.id +'" class="active" style="'+ style +'"><iframe name="mainFrame" frameborder="0" src="'+ data.url +'"></iframe></div>';
				$('.iframe-list > div').removeClass('active');
				$('.iframe-list').append(iframe);
    		}
    		
    		restMenu();
    	}
    	
    	function winActive(obj){
    		var data = obj.data();    		
    		obj.addClass('active').siblings().removeClass('active');
    		
    		var t = $('.iframe-list [data-id="'+ data.id +'"]');
    		t.addClass('active').siblings().removeClass('active');
    		restMenu();
    	}
    	
    	function winClose(obj){
    		var data = obj.parent().data();
    		var prev_id = obj.closest('li').prev().addClass('active').data('id');
    		obj.closest('li').remove();
    		$('.iframe-list [data-id="'+ prev_id +'"]').addClass('active');
    		$('.iframe-list [data-id="'+ data.id +'"]').remove();

    	}
    	
    	function restMenu(){
    		var id 		= $('.p-bar-list li.active').data('id');
    		var second 	= $('#p-sidebar [data-id="'+ id +'"]').closest('.menu-box');
    		second.addClass('active').siblings().removeClass('active');
    		second.find('li').removeClass('active');
    		$('#p-sidebar [data-id="'+ id +'"]').closest('li').addClass('active');    		
    		$('.topbar [data-id="'+ second.data('id') +'"]').addClass('active').siblings().removeClass('active');
    	}
    	
    	function refIframe(){
    		var obj = $('.iframe-list #iframe-box.active iframe');
    		var src = obj.attr('src');
    		obj.attr('src',src);
    	}
	</script>
</body>
</html>
<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:57:"/home/web//resources/template/v1/welcome/index/index.html";i:1514269621;s:57:"/home/web//resources/template/v1/welcome/public/base.html";i:1514269621;}*/ ?>
<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
<!-- BEGIN HEAD -->

<head>
    <meta charset="utf-8" />
    <title>中睿商城 | 中睿商城</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <meta content="" name="description" />
    <meta content="" name="author" />
    <meta name="renderer" content="webkit">
    <?php if(!(empty($headers) || (($headers instanceof \think\Collection || $headers instanceof \think\Paginator ) && $headers->isEmpty()))): if(is_array($headers) || $headers instanceof \think\Collection || $headers instanceof \think\Paginator): $i = 0; $__LIST__ = $headers;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
            <meta content=<?php echo $vo; ?> name="headers-<?php echo $key; ?>">
        <?php endforeach; endif; else: echo "" ;endif; endif; ?>
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="/static/web/assets/global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <link href="/static/web/assets/global/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css" />

    <link href="/static/web/assets/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- BEGIN PAGE LEVEL PLUGINS -->
    <link href="/static/web/assets/global/plugins/bootstrap-select/css/bootstrap-select.min.css" rel="stylesheet" type="text/css" />
    <!-- END PAGE LEVEL PLUGINS -->

    <link href="/static/web/assets/global/plugins/bootstrap-toastr/toastr.min.css" rel="stylesheet" type="text/css" />

    <!-- BEGIN THEME GLOBAL STYLES -->
    <link href="/static/web/assets/global/css/components.min.css" rel="stylesheet" id="style_components" type="text/css" />
    <link href="/static/web/assets/global/css/plugins.min.css" rel="stylesheet" type="text/css" />
    <!-- END THEME GLOBAL STYLES -->

    <!-- BEGIN THEME LAYOUT STYLES -->
    <link href="/static/web/assets/layouts/layout/css/layout.min.css" rel="stylesheet" type="text/css" />
    <link href="/static/web/assets/layouts/layout/css/themes/darkblue.min.css" rel="stylesheet" type="text/css" id="style_color" />
    <!-- END THEME LAYOUT STYLES -->

    <!-- BEGIN PAGE LEVEL PLUGINS -->
    <link href="/static/web/assets/global/plugins/bootstrap-daterangepicker/daterangepicker.min.css" rel="stylesheet" type="text/css" />
    <link href="/static/web/assets/global/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.min.css" rel="stylesheet" type="text/css" />
    <!-- END PAGE LEVEL PLUGINS -->
    <!-- BEGIN PAGE LEVEL PLUGINS时间日期插件 -->
    <!--<script src="/static/web/assets/global/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js" type="text/javascript"></script>-->
    <!-- END  -->

    <!-- 自定义样式区域 -->
    <link href="/static/web/css/common.css" rel="stylesheet" type="text/css" />
    <link href="/static/web/css/css.css" rel="stylesheet" type="text/css" />
    <link href="/static/web/css/style.css" rel="stylesheet" type="text/css" />

</head>
<!-- END HEAD -->

<body>
<div class="common_page">
    <!-- 页面头部 -->
    <div class="over bg_white">
        <div class="login">
            <img class="fl mt12 w140" src="/static/web/images/logo.jpg">
            <span class="login_xx">您好！欢迎光临中睿商城！</span>
            <?php if(empty(session('user'))): ?>
                <a href="<?php echo url('/user/register'); ?>" class="fs14 mr14 fr">用户注册</a>
                <span class="fs14 mr14 fr color-red1">|</span>
                <a href="<?php echo url('/user/login'); ?>" class="fs14 mr14 fr">用户登陆</a>
                <span class="fs14 mr14 fr color-red1">|</span>
            <?php else: ?>
                <a href="<?php echo url('/user/logout'); ?>" class="fs14 mr14 fr">退出登录</a>
                <span class="fs14 mr14 fr color-red1">|</span>
            <?php endif; ?>
            <a href="<?php echo domain('settled'); ?>" class="fs14 mr14 fr">申请入驻</a>
            <span class="fs14 mr14 fr color-red1">|</span>
            <a href="<?php echo domain('seller'); ?>" class="fs14 mr14 fr">商家中心</a>
        </div>
    </div>
    
<!-- 页面内容 -->
<div class="content_page" style="background:#ffd3c4 url(/static/web/images/shop/icon_sjrz_zc.png) no-repeat center; min-height: 720px;    background-position-y: -50px;">

</div>

</div>
<footer class="footer_set">
    <div class="container">
        <div class="row pt30 pb30">
            <div class="col-xs-3 media">
                <div class="media-left media-middle">
                    <img src="/static/web/images/icon/footer_01.png">
                </div>
                <div class="media-body media-middle">
                    <h4 class="mt0">正品保证</h4>
                    <h5 class="mb0">正品行货 放心选购</h5>
                </div>
            </div>
            <div class="col-xs-3 media">
                <div class="media-left media-middle">
                    <img src="/static/web/images/icon/footer_02.png">
                </div>
                <div class="media-body media-middle">
                    <h4 class="mt0">消费奖励</h4>
                    <h5 class="mb0">购物奖励积分</h5>
                </div>
            </div>
            <div class="col-xs-3 media">
                <div class="media-left media-middle">
                    <img src="/static/web/images/icon/footer_03.png">
                </div>
                <div class="media-body media-middle">
                    <h4 class="mt0">售后无忧</h4>
                    <h5 class="mb0">天无理由退款</h5>
                </div>
            </div>
            <div class="col-xs-3 media">
                <div class="media-left media-middle">
                    <img src="/static/web/images/icon/footer_04.png">
                </div>
                <div class="media-body media-middle">
                    <h4 class="mt0">帮助中心</h4>
                    <h5 class="mb0">您的购物指南</h5>
                </div>
            </div>
        </div>
    </div>
    <p class="text-center mg0 line30 solid_t color999 line36">
        Copyright © 2017 广东韵铭网络科技有限公司 All Rights Reserved   粤ICP备14014641号   经营许可证编号：粤B2-20160716
    </p>
</footer>
<!-- END FOOTER -->
<!--[if lt IE 9]>
<script src="/static/web//assets/global/plugins/respond.min.js"></script>
<script src="/static/web//assets/global/plugins/excanvas.min.js"></script>
<![endif]-->
<!-- BEGIN CORE PLUGINS -->
<script src="/static/web/assets/global/plugins/jquery.min.js" type="text/javascript"></script>
<script src="/static/web/assets/global/plugins/bootstrap-toastr/toastr.min.js" type="text/javascript"></script>
<!--<script src="/static/web//assets/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>-->
<!--<script src="/static/web//assets/global/plugins/js.cookie.min.js" type="text/javascript"></script>-->
<!--<script src="/static/web//assets/global/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js" type="text/javascript"></script>-->
<!--<script src="/static/web//assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>-->
<!--<script src="/static/web//assets/global/plugins/jquery.blockui.min.js" type="text/javascript"></script>-->
<!--<script src="/static/web//assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js" type="text/javascript"></script>-->
<!-- END CORE PLUGINS -->
<!-- BEGIN PAGE LEVEL PLUGINS -->
<!--<script src="/static/web//assets/global/plugins/bootstrap-select/js/bootstrap-select.min.js" type="text/javascript"></script>-->
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN THEME GLOBAL SCRIPTS -->
<!--<script src="/static/web//assets/global/scripts/app.min.js" type="text/javascript"></script>-->
<!-- END THEME GLOBAL SCRIPTS -->
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<!--<script src="/static/web//assets/pages/scripts/components-bootstrap-select.min.js" type="text/javascript"></script>-->
<!-- END PAGE LEVEL SCRIPTS -->
<!-- BEGIN PAGE LEVEL PLUGINS时间日期插件 -->
<!--<script src="/static/web//assets/global/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js" type="text/javascript"></script>-->
<!-- END  -->
<script src="/static/web/js/public.js"></script>

</body>
</html>

<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:43:"/home/web//app/work/view/config/fields.html";i:1514269629;}*/ ?>
<form class="form-horizontal" id="form-add-<?php echo \think\Request::instance()->param('group_id'); ?>" action="/<?php echo \think\Request::instance()->controller(); ?>/save" onsubmit="return sendForm($(this))">
<?php if(!(empty($list) || (($list instanceof \think\Collection || $list instanceof \think\Paginator ) && $list->isEmpty()))): ?>
	<?php echo buildform(array(
			'field'		=>$list,
	),$config); ?>	
	
	<?php echo buildform(array(
		'field'		=>array(
			array(
				'formtype'		=>'hidden',
				'name'			=>'group_id',
				'value'			=>request()->param('group_id'),
			),
			array(
				'formtype'		=>'button',
				'btns'			=>[['提交','btn btn-danger btn-150px','submit']],
			),
		),
	)); endif; ?>	
</form>

<script>
	image_zoom();
</script>
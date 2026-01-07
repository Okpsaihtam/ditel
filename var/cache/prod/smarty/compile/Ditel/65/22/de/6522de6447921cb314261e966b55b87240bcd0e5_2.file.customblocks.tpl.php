<?php
/* Smarty version 4.3.4, created on 2026-01-05 15:06:27
  from '/home/www/public/themes/Ditel/modules/ptm_multiblocks/views/templates/hook/customblocks.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_695bc5634cf311_77082989',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6522de6447921cb314261e966b55b87240bcd0e5' => 
    array (
      0 => '/home/www/public/themes/Ditel/modules/ptm_multiblocks/views/templates/hook/customblocks.tpl',
      1 => 1586469600,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_695bc5634cf311_77082989 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home/www/public/vendor/smarty/smarty/libs/plugins/modifier.count.php','function'=>'smarty_modifier_count',),));
?>

<?php if ((isset($_smarty_tpl->tpl_vars['customblocks']->value)) && smarty_modifier_count($_smarty_tpl->tpl_vars['customblocks']->value)) {
$_smarty_tpl->_assignInScope('controllerName', $_GET['controller']);
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['customblocks']->value, 'customblock');
$_smarty_tpl->tpl_vars['customblock']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['customblock']->value) {
$_smarty_tpl->tpl_vars['customblock']->do_else = false;
?>
  <?php if ($_smarty_tpl->tpl_vars['customblock']->value['hook'] == $_smarty_tpl->tpl_vars['currentHook']->value) {?>
  <div class="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['currentHook']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
_container <?php if ($_smarty_tpl->tpl_vars['currentHook']->value == 'displayFooter') {?>col-md-4<?php }?>">
	<?php $_smarty_tpl->_assignInScope('pages', unserialize($_smarty_tpl->tpl_vars['customblock']->value['visibility']));?>
		<?php if ($_smarty_tpl->tpl_vars['is_logged']->value && ($_smarty_tpl->tpl_vars['customblock']->value['target_group'] == 2 || $_smarty_tpl->tpl_vars['customblock']->value['target_group'] == 1)) {?>
			<?php if (call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'in_array' ][ 0 ], array( $_smarty_tpl->tpl_vars['customblock']->value['hook'],$_smarty_tpl->tpl_vars['noVisibilityAvailable']->value ))) {?>
				<?php echo $_smarty_tpl->tpl_vars['customblock']->value['html_code'];?>

			<?php } elseif (call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'in_array' ][ 0 ], array( $_smarty_tpl->tpl_vars['controllerName']->value,$_smarty_tpl->tpl_vars['pages']->value )) || call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'in_array' ][ 0 ], array( "other",$_smarty_tpl->tpl_vars['pages']->value ))) {?>
				<?php echo $_smarty_tpl->tpl_vars['customblock']->value['html_code'];?>

			<?php }?>
		<?php } elseif (!$_smarty_tpl->tpl_vars['is_logged']->value && ($_smarty_tpl->tpl_vars['customblock']->value['target_group'] == 3 || $_smarty_tpl->tpl_vars['customblock']->value['target_group'] == 1)) {?>
			<?php if (call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'in_array' ][ 0 ], array( $_smarty_tpl->tpl_vars['customblock']->value['hook'],$_smarty_tpl->tpl_vars['noVisibilityAvailable']->value ))) {?>
				<?php echo $_smarty_tpl->tpl_vars['customblock']->value['html_code'];?>

			<?php } elseif (call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'in_array' ][ 0 ], array( $_smarty_tpl->tpl_vars['controllerName']->value,$_smarty_tpl->tpl_vars['pages']->value )) || call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'in_array' ][ 0 ], array( "other",$_smarty_tpl->tpl_vars['pages']->value ))) {?>
				<?php echo $_smarty_tpl->tpl_vars['customblock']->value['html_code'];?>

			<?php }?>
		<?php }?>
    </div>
  <?php }?>
  <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
}

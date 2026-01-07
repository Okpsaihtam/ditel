<?php
/* Smarty version 4.3.4, created on 2026-01-06 09:44:14
  from '/home/www/public/modules/creativeelements/views/templates/admin/ce_fonts/helpers/list/list_content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_695ccb5ed1a955_58642269',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a1e316afa24fa96677c3af5f9cd8d4f31ea260d5' => 
    array (
      0 => '/home/www/public/modules/creativeelements/views/templates/admin/ce_fonts/helpers/list/list_content.tpl',
      1 => 1652220000,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_695ccb5ed1a955_58642269 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1850504622695ccb5ed176c9_53582717', "td_content");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "helpers/list/list_content.tpl");
}
/* {block "td_content"} */
class Block_1850504622695ccb5ed176c9_53582717 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'td_content' => 
  array (
    0 => 'Block_1850504622695ccb5ed176c9_53582717',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<?php if ('preview' === $_smarty_tpl->tpl_vars['key']->value) {?>
		<style><?php echo str_replace('{{BASE}}',(defined('__PS_BASE_URI__') ? constant('__PS_BASE_URI__') : null),$_smarty_tpl->tpl_vars['tr']->value[$_smarty_tpl->tpl_vars['key']->value]);?>
</style>
		<span style="font-family: '<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['tr']->value[$_smarty_tpl->tpl_vars['key']->value]->family,'html','UTF-8' ));?>
'; font-size: 16px;">
			Creative Elements Module Is Making The Web Beautiful!
		</span>
	<?php } else { ?>
		<?php 
$_smarty_tpl->inheritance->callParent($_smarty_tpl, $this, '{$smarty.block.parent}');
?>

	<?php }
}
}
/* {/block "td_content"} */
}

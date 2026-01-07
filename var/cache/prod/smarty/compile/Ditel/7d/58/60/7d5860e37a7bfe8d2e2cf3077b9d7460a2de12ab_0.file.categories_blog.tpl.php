<?php
/* Smarty version 4.3.4, created on 2026-01-06 09:45:05
  from '/home/www/public/modules/ybc_blog/views/templates/hook/categories_blog.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_695ccb91354692_18616094',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7d5860e37a7bfe8d2e2cf3077b9d7460a2de12ab' => 
    array (
      0 => '/home/www/public/modules/ybc_blog/views/templates/hook/categories_blog.tpl',
      1 => 1656021600,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_695ccb91354692_18616094 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['blockCategTree']->value) {?>
    <ul class="tree-category">
        <li class="form-control-label text-right main-category" style="list-style: none;"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Main category','mod'=>'ybc_blog'),$_smarty_tpl ) );?>
</li>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['blockCategTree']->value[0]['children'], 'child', false, NULL, 'blockCategTree', array (
  'last' => true,
  'iteration' => true,
  'total' => true,
));
$_smarty_tpl->tpl_vars['child']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['child']->value) {
$_smarty_tpl->tpl_vars['child']->do_else = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_blockCategTree']->value['iteration']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_blockCategTree']->value['last'] = $_smarty_tpl->tpl_vars['__smarty_foreach_blockCategTree']->value['iteration'] === $_smarty_tpl->tpl_vars['__smarty_foreach_blockCategTree']->value['total'];
?>
			<?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_blockCategTree']->value['last']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_blockCategTree']->value['last'] : null)) {?>
				<?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['branche_tpl_path_input']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('node'=>$_smarty_tpl->tpl_vars['child']->value,'last'=>'true'), 0, true);
?>
			<?php } else { ?>
				<?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['branche_tpl_path_input']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('node'=>$_smarty_tpl->tpl_vars['child']->value), 0, true);
?>
			<?php }?>
		<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </ul>
<?php }
}
}

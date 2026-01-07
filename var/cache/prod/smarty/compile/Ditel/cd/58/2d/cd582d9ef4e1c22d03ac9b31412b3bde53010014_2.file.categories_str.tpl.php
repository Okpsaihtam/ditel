<?php
/* Smarty version 4.3.4, created on 2026-01-05 15:47:42
  from '/home/www/public/modules/ybc_blog/views/templates/hook/categories_str.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_695bcf0ea6a352_84658978',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cd582d9ef4e1c22d03ac9b31412b3bde53010014' => 
    array (
      0 => '/home/www/public/modules/ybc_blog/views/templates/hook/categories_str.tpl',
      1 => 1656021600,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_695bcf0ea6a352_84658978 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['categories']->value && count($_smarty_tpl->tpl_vars['categories']->value) > 1) {?>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categories']->value, 'category');
$_smarty_tpl->tpl_vars['category']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['category']->value) {
$_smarty_tpl->tpl_vars['category']->do_else = false;
?>
        <?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['category']->value['title'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
<br />
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
} elseif ((isset($_smarty_tpl->tpl_vars['categories']->value[0]['title']))) {?>
    <?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['categories']->value[0]['title'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>

<?php }
}
}

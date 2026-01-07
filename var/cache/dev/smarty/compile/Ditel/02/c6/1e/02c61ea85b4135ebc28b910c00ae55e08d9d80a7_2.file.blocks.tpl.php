<?php
/* Smarty version 4.3.4, created on 2026-01-05 14:49:55
  from '/home/www/public/modules/ybc_blog/views/templates/hook/blocks.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_695bc183d4f426_43728105',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '02c61ea85b4135ebc28b910c00ae55e08d9d80a7' => 
    array (
      0 => '/home/www/public/modules/ybc_blog/views/templates/hook/blocks.tpl',
      1 => 1656021600,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_695bc183d4f426_43728105 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['display_slidebar']->value) {?>
    <div class="ybc_blog_sidebar <?php if (!$_smarty_tpl->tpl_vars['blog_config']->value['YBC_BLOG_SIDEBAR_ENABLED_ON_MOBILE']) {?> hide_mobile<?php }?>">
        <?php if (!$_smarty_tpl->tpl_vars['blog_config']->value['YBC_BLOG_SIDEBAR_ON_MOBILE']) {?>
            <div class="ybc-navigation-blog"><?php if ($_smarty_tpl->tpl_vars['blog_config']->value['YBC_BLOG_NAVIGATION_TITLE']) {
echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['blog_config']->value['YBC_BLOG_NAVIGATION_TITLE'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Blog navigation','mod'=>'ybc_blog'),$_smarty_tpl ) );
}?></div>
            <div class="ybc-navigation-blog-content">
        <?php }?>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['sidebars_postion']->value, 'position');
$_smarty_tpl->tpl_vars['position']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['position']->value) {
$_smarty_tpl->tpl_vars['position']->do_else = false;
?>
            <?php echo $_smarty_tpl->tpl_vars['sidebars']->value[$_smarty_tpl->tpl_vars['position']->value];?>

        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        <?php if (!$_smarty_tpl->tpl_vars['blog_config']->value['YBC_BLOG_SIDEBAR_ON_MOBILE']) {?>
        </div>
        <?php }?>
    </div>
<?php }
}
}

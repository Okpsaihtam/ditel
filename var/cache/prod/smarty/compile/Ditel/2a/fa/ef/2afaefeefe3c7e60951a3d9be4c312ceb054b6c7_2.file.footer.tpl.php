<?php
/* Smarty version 4.3.4, created on 2026-01-05 15:06:27
  from '/home/www/public/modules/ybc_blog/views/templates/hook/footer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_695bc5638ef817_43589030',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2afaefeefe3c7e60951a3d9be4c312ceb054b6c7' => 
    array (
      0 => '/home/www/public/modules/ybc_blog/views/templates/hook/footer.tpl',
      1 => 1656021600,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_695bc5638ef817_43589030 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
 type="text/javascript">
    ybc_blog_like_url = '<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'addslashes' ][ 0 ], array( $_smarty_tpl->tpl_vars['like_url']->value ));?>
';
    ybc_like_error ='<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'addslashes' ][ 0 ], array( $_smarty_tpl->tpl_vars['ybc_like_error']->value )),'quotes','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
'
    YBC_BLOG_GALLERY_SPEED = <?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['YBC_BLOG_GALLERY_SPEED']->value )), ENT_QUOTES, 'UTF-8');?>
;
    YBC_BLOG_SLIDER_SPEED = <?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['YBC_BLOG_SLIDER_SPEED']->value )), ENT_QUOTES, 'UTF-8');?>
;
    YBC_BLOG_GALLERY_SKIN = '<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'addslashes' ][ 0 ], array( $_smarty_tpl->tpl_vars['YBC_BLOG_GALLERY_SKIN']->value )),'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
';
    YBC_BLOG_GALLERY_AUTO_PLAY = <?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['YBC_BLOG_GALLERY_AUTO_PLAY']->value )), ENT_QUOTES, 'UTF-8');?>
;
<?php echo '</script'; ?>
><?php }
}

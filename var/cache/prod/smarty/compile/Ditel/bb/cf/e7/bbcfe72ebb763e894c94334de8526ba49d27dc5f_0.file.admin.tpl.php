<?php
/* Smarty version 4.3.4, created on 2026-01-06 09:44:57
  from '/home/www/public/modules/ybc_blog/views/templates/hook/admin.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_695ccb89114493_53811262',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bbcfe72ebb763e894c94334de8526ba49d27dc5f' => 
    array (
      0 => '/home/www/public/modules/ybc_blog/views/templates/hook/admin.tpl',
      1 => 1656021600,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_695ccb89114493_53811262 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['ybc_blog_error_message']->value) {?>
    <?php echo $_smarty_tpl->tpl_vars['ybc_blog_error_message']->value;?>

<?php }
echo '<script'; ?>
 type="text/javascript"> 
    var ybc_blog_ajax_url = '<?php echo $_smarty_tpl->tpl_vars['ybc_blog_ajax_url']->value;?>
'; 
    var ybc_blog_author_ajax_url ='<?php echo $_smarty_tpl->tpl_vars['ybc_blog_author_ajax_url']->value;?>
';
    var ybc_blog_default_lang = <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['ybc_blog_default_lang']->value ));?>
;
    var ybc_blog_is_updating = <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['ybc_blog_is_updating']->value ));?>
;                            
    var ybc_blog_is_config_page = <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['ybc_blog_is_config_page']->value ));?>
;
    var ybc_blog_invalid_file = '<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['ybc_blog_invalid_file']->value,'html','UTF-8' ));?>
';
    var send_mail_label='<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Also send this response to customer via email','js'=>1,'mod'=>'ybc_blog'),$_smarty_tpl ) );?>
';
<?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['ybc_blog_module_dir']->value,'html','UTF-8' ));?>
views/js/admin.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['ybc_blog_module_dir']->value,'html','UTF-8' ));?>
views/js/other.js"><?php echo '</script'; ?>
>
<div class="bootstrap">
    <div class="row">
        <div class="col-lg-12">
            <div class="row">
                <div class="ybc_blog_form_content_admin <?php if ($_smarty_tpl->tpl_vars['control']->value) {?> ybc_blog_form_<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['control']->value,'html','UTF-8' ));
}?>">
                    <?php echo $_smarty_tpl->tpl_vars['ybc_blog_sidebar']->value;?>

                    <div class="blog_center_content col-lg-10<?php if ($_smarty_tpl->tpl_vars['control']->value) {?> ybc_blog<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['control']->value,'html','UTF-8' ));
}?>">
                        <?php echo $_smarty_tpl->tpl_vars['ybc_blog_body_html']->value;?>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div><?php }
}

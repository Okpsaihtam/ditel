<?php
/* Smarty version 4.3.4, created on 2026-01-05 15:06:27
  from '/home/www/public/modules/ybc_blog/views/templates/hook/head.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_695bc563315361_60846260',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0bf4143c1d0029726b648f0d7e084d18d4c315cf' => 
    array (
      0 => '/home/www/public/modules/ybc_blog/views/templates/hook/head.tpl',
      1 => 1656021600,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_695bc563315361_60846260 (Smarty_Internal_Template $_smarty_tpl) {
if ((isset($_smarty_tpl->tpl_vars['add_tmce']->value)) && $_smarty_tpl->tpl_vars['add_tmce']->value) {
echo '<script'; ?>
 type="text/javascript" src="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['url_path']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
views/js/tinymce/tinymce.min.js"><?php echo '</script'; ?>
>
<?php }?>   
<?php echo '<script'; ?>
 type="text/javascript">
var unlike_text ="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Unlike this post','mod'=>'ybc_blog'),$_smarty_tpl ) );?>
";
var like_text ="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Like this post','mod'=>'ybc_blog'),$_smarty_tpl ) );?>
";
var baseAdminDir ='<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['baseAdminDir']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
';
var ybc_blog_product_category ='<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['ybc_blog_product_category']->value )), ENT_QUOTES, 'UTF-8');?>
';
var ybc_blog_polls_g_recaptcha = false;
<?php echo '</script'; ?>
>
<?php if ($_smarty_tpl->tpl_vars['link_current']->value) {?>
<link href="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['link_current']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" rel="canonical" />
<?php }
if ((isset($_smarty_tpl->tpl_vars['css']->value)) && $_smarty_tpl->tpl_vars['css']->value) {?>
    <style><?php echo $_smarty_tpl->tpl_vars['css']->value;?>
</style>
<?php }
if ((isset($_smarty_tpl->tpl_vars['blog_post_header']->value))) {?>
    <meta property="og:app_id"        content="id_app" />
    <meta property="og:type"          content="article" />
    <meta property="og:title"         content="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['blog_post_header']->value['title'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" />
    <meta property="og:image"         content="<?php if ($_smarty_tpl->tpl_vars['blog_post_header']->value['image']) {
echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['blog_post_header']->value['image'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');
} else {
echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['blog_post_header']->value['thumb'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');
}?>" />
    <meta property="og:description"   content="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( preg_replace('!<[^>]*?>!', ' ', (string) $_smarty_tpl->tpl_vars['blog_post_header']->value['short_description']),'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" />
    <meta itemprop="author"           content="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( ucfirst($_smarty_tpl->tpl_vars['blog_post_header']->value['firstname']),'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
 <?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( ucfirst($_smarty_tpl->tpl_vars['blog_post_header']->value['lastname']),'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"/>
    <meta property="og:url"           content="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['blog_post_header']->value['link'],'quotes','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" />
    <meta name="twitter:card"         content="summary_large_image" />
    <?php if ($_smarty_tpl->tpl_vars['blog_post_header']->value['enabled'] == -2) {?>
        <meta name="robots" content="noindex, follow" />
    <?php }
}?> 
<?php if ($_smarty_tpl->tpl_vars['YBC_BLOG_CAPTCHA_TYPE']->value == 'google') {?>
    <?php echo '<script'; ?>
 type="text/javascript">
        var YBC_BLOG_CAPTCHA_SITE_KEY = '<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['YBC_BLOG_CAPTCHA_SITE_KEY']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
';
        var ybc_polls_lonloadCallback = function() {
            ybc_blog_polls_g_recaptcha = grecaptcha.render(document.getElementById('ybc_blog_polls_g_recaptcha'), {
                'sitekey':YBC_BLOG_CAPTCHA_SITE_KEY,
                'theme':'light'
            });
        };
        var ybc_comment_lonloadCallback = function() {
            grecaptcha.render(document.getElementById('ybc_blog_comment_g_recaptcha'), {
                'sitekey':YBC_BLOG_CAPTCHA_SITE_KEY,
                'theme':'light'
            });
        };
    <?php echo '</script'; ?>
>
<?php }
if ($_smarty_tpl->tpl_vars['YBC_BLOG_CAPTCHA_TYPE']->value == 'google3') {?>
    <?php echo '<script'; ?>
 type="text/javascript">
        var YBC_BLOG_CAPTCHA_SITE_KEY = '<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['YBC_BLOG_CAPTCHA_SITE_KEY']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
';
        
        var ybc_polls_lonloadCallback = function() {
             grecaptcha.ready(function() {
                grecaptcha.execute(YBC_BLOG_CAPTCHA_SITE_KEY, {action: 'homepage'}).then(function(token) {
                    $('#ybc_blog_polls_g_recaptcha').val(token);
             });
          });
        };
        var ybc_comment_lonloadCallback = function() {
            grecaptcha.ready(function() {
                grecaptcha.execute(YBC_BLOG_CAPTCHA_SITE_KEY, {action: 'homepage'}).then(function(token) {
                    $('#ybc_blog_comment_g_recaptcha').val(token);
                });
            });
        };
        
    <?php echo '</script'; ?>
>
    
<?php }
}
}

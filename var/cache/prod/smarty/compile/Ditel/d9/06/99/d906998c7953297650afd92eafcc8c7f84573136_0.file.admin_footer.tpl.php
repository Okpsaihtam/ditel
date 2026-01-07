<?php
/* Smarty version 4.3.4, created on 2026-01-05 15:09:47
  from '/home/www/public/modules/ybc_blog/views/templates/hook/admin_footer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_695bc62b1d3705_06196594',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd906998c7953297650afd92eafcc8c7f84573136' => 
    array (
      0 => '/home/www/public/modules/ybc_blog/views/templates/hook/admin_footer.tpl',
      1 => 1656021600,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_695bc62b1d3705_06196594 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
 type="text/javascript">
var link_ajax='<?php echo $_smarty_tpl->tpl_vars['link_ajax']->value;?>
';
$(document).ready(function(){
    $.ajax({
        url: link_ajax,
        data: 'action=getCountMessageYbcBlog',
        type: 'post',
        dataType: 'json',                
        success: function(json){ 
            if(parseInt(json.count) >0)
            {
                if($('#subtab-AdminYbcBlogComment span').length)
                    $('#subtab-AdminYbcBlogComment span').append('<span class="count_messages ">'+json.count+'</span>'); 
                else
                    $('#subtab-AdminYbcBlogComment a').append('<span class="count_messages ">'+json.count+'</span>');
            }
            else
            {
                if($('#subtab-AdminYbcBlogComment span').length)
                    $('#subtab-AdminYbcBlogComment span').append('<span class="count_messages hide">'+json.count+'</span>'); 
                else
                    $('#subtab-AdminYbcBlogComment a').append('<span class="count_messages hide">'+json.count+'</span>');
            }
                                                              
        },
    });
});
<?php echo '</script'; ?>
><?php }
}

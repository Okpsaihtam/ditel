<?php
/* Smarty version 4.3.4, created on 2026-01-05 14:49:55
  from '/home/www/public/modules/ets_megamenu/views/templates/hook/header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_695bc18362fb49_37002991',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5f164821dee31aa8b0ea2cc4109c7ad10b1f6b94' => 
    array (
      0 => '/home/www/public/modules/ets_megamenu/views/templates/hook/header.tpl',
      1 => 1752567564,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_695bc18362fb49_37002991 (Smarty_Internal_Template $_smarty_tpl) {
if ((isset($_smarty_tpl->tpl_vars['mm_css']->value)) && $_smarty_tpl->tpl_vars['mm_css']->value) {?>
<style><?php echo $_smarty_tpl->tpl_vars['mm_css']->value;?>
</style>
<?php }
echo '<script'; ?>
 type="text/javascript">
    var Days_text = '<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Day(s)','mod'=>'ets_megamenu','js'=>1),$_smarty_tpl ) );?>
';
    var Hours_text = '<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Hr(s)','mod'=>'ets_megamenu','js'=>1),$_smarty_tpl ) );?>
';
    var Mins_text = '<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Min(s)','mod'=>'ets_megamenu','js'=>1),$_smarty_tpl ) );?>
';
    var Sec_text = '<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Sec(s)','mod'=>'ets_megamenu','js'=>1),$_smarty_tpl ) );?>
';
<?php echo '</script'; ?>
><?php }
}

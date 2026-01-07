<?php
/* Smarty version 4.3.4, created on 2026-01-05 15:09:47
  from '/home/www/public/admin564yalcuf/themes/default/template/content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_695bc62b0d39f9_37841864',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '223a9598503d4dd78bc7295e4814f872ebcf6bff' => 
    array (
      0 => '/home/www/public/admin564yalcuf/themes/default/template/content.tpl',
      1 => 1752566154,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_695bc62b0d39f9_37841864 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="ajax_confirmation" class="alert alert-success hide"></div>
<div id="ajaxBox" style="display:none"></div>
<div id="content-message-box"></div>

<?php if ((isset($_smarty_tpl->tpl_vars['content']->value))) {?>
	<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

<?php }
}
}

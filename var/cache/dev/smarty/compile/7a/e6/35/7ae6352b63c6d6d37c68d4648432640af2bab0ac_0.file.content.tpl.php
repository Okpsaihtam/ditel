<?php
/* Smarty version 4.3.4, created on 2026-01-05 14:50:06
  from '/home/www/public/admin564yalcuf/themes/new-theme/template/content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_695bc18e669059_54870072',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7ae6352b63c6d6d37c68d4648432640af2bab0ac' => 
    array (
      0 => '/home/www/public/admin564yalcuf/themes/new-theme/template/content.tpl',
      1 => 1752566156,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_695bc18e669059_54870072 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div id="ajax_confirmation" class="alert alert-success" style="display: none;"></div>
<div id="content-message-box"></div>


<?php if ((isset($_smarty_tpl->tpl_vars['content']->value))) {?>
  <?php echo $_smarty_tpl->tpl_vars['content']->value;?>

<?php }
}
}

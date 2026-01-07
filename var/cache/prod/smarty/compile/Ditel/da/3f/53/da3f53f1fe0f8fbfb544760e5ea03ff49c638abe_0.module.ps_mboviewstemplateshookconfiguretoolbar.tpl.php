<?php
/* Smarty version 4.3.4, created on 2026-01-06 09:44:57
  from 'module:ps_mboviewstemplateshookconfiguretoolbar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_695ccb89169ba8_21054309',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'da3f53f1fe0f8fbfb544760e5ea03ff49c638abe' => 
    array (
      0 => 'module:ps_mboviewstemplateshookconfiguretoolbar.tpl',
      1 => 1752566262,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_695ccb89169ba8_21054309 (Smarty_Internal_Template $_smarty_tpl) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['configure_toolbar_extra_buttons']->value, 'configure_toolbar_extra_button');
$_smarty_tpl->tpl_vars['configure_toolbar_extra_button']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['configure_toolbar_extra_button']->value) {
$_smarty_tpl->tpl_vars['configure_toolbar_extra_button']->do_else = false;
?>
  <li>
    <a
      class="toolbar_btn btn-secondary"
      href="<?php echo $_smarty_tpl->tpl_vars['configure_toolbar_extra_button']->value['url'];?>
"
      title="<?php echo $_smarty_tpl->tpl_vars['configure_toolbar_extra_button']->value['title'];?>
"
    >
      <div><?php echo $_smarty_tpl->tpl_vars['configure_toolbar_extra_button']->value['title'];?>
</div>
    </a>
  </li>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}

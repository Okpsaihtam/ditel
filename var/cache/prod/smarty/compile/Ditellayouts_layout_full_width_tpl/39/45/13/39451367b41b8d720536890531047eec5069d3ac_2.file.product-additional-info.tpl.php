<?php
/* Smarty version 4.3.4, created on 2026-01-05 19:28:59
  from '/home/www/public/themes/Ditel/templates/catalog/_partials/product-additional-info.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_695c02ebc2b3a2_33399877',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '39451367b41b8d720536890531047eec5069d3ac' => 
    array (
      0 => '/home/www/public/themes/Ditel/templates/catalog/_partials/product-additional-info.tpl',
      1 => 1586469600,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_695c02ebc2b3a2_33399877 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="product-additional-info">
  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductAdditionalInfo','product'=>$_smarty_tpl->tpl_vars['product']->value),$_smarty_tpl ) );?>

</div>
<?php }
}

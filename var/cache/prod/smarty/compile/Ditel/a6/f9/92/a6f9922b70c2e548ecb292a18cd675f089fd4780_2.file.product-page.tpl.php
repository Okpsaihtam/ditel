<?php
/* Smarty version 4.3.4, created on 2026-01-05 19:28:59
  from '/home/www/public/modules/stripe_official/views/templates/hook/product-page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_695c02ebcba772_74053153',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a6f9922b70c2e548ecb292a18cd675f089fd4780' => 
    array (
      0 => '/home/www/public/modules/stripe_official/views/templates/hook/product-page.tpl',
      1 => 1760515346,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'module:stripe_official/views/templates/front/express_checkout.tpl' => 1,
  ),
),false)) {
function content_695c02ebcba772_74053153 (Smarty_Internal_Template $_smarty_tpl) {
?><input type="hidden" name="stripe_id_product_attribute" id="stripe_product_attribute_info" value="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['id_product_attribute']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"/>
<input type="hidden" name="stripe_product_quantity" id="stripe_product_quantity" value="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['product_quantity']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"/>
<input type="hidden" name="stripe_product_out_of_stock" id="stripe_product_out_of_stock" value="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['out_of_stock'],'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"/>

<!-- Include the Stripe Express Checkout template -->
<?php $_smarty_tpl->_subTemplateRender("module:stripe_official/views/templates/front/express_checkout.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}

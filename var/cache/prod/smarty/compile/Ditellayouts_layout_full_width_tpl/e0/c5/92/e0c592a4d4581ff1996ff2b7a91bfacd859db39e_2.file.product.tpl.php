<?php
/* Smarty version 4.3.4, created on 2026-01-05 19:28:59
  from '/home/www/public/themes/Ditel/templates/catalog/product.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_695c02ebad7753_96410355',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e0c592a4d4581ff1996ff2b7a91bfacd859db39e' => 
    array (
      0 => '/home/www/public/themes/Ditel/templates/catalog/product.tpl',
      1 => 1656885600,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:catalog/_partials/product-cover-thumbnails.tpl' => 2,
    'file:catalog/_partials/product-prices.tpl' => 1,
    'file:catalog/_partials/product-customization.tpl' => 1,
    'file:catalog/_partials/product-variants.tpl' => 1,
    'file:catalog/_partials/miniatures/pack-product.tpl' => 1,
    'file:catalog/_partials/product-discounts.tpl' => 1,
    'file:catalog/_partials/product-additional-info.tpl' => 1,
    'file:catalog/_partials/product-add-to-cart.tpl' => 1,
    'file:catalog/_partials/miniatures/product.tpl' => 1,
    'file:catalog/_partials/product-images-modal.tpl' => 1,
  ),
),false)) {
function content_695c02ebad7753_96410355 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>
a

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1520853030695c02ebaa8d93_27161323', 'head_seo');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1536919901695c02ebaaa733_98451272', 'head');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1176948511695c02ebaaf369_12774873', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'head_seo'} */
class Block_1520853030695c02ebaa8d93_27161323 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head_seo' => 
  array (
    0 => 'Block_1520853030695c02ebaa8d93_27161323',
  ),
);
public $prepend = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <link rel="canonical" href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['canonical_url'], ENT_QUOTES, 'UTF-8');?>
">
<?php
}
}
/* {/block 'head_seo'} */
/* {block 'head'} */
class Block_1536919901695c02ebaaa733_98451272 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head' => 
  array (
    0 => 'Block_1536919901695c02ebaaa733_98451272',
  ),
);
public $append = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <meta property="og:type" content="product">
  <meta property="og:url" content="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['urls']->value['current_url'], ENT_QUOTES, 'UTF-8');?>
">
  <meta property="og:title" content="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['page']->value['meta']['title'], ENT_QUOTES, 'UTF-8');?>
">
  <meta property="og:site_name" content="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shop']->value['name'], ENT_QUOTES, 'UTF-8');?>
">
  <meta property="og:description" content="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['page']->value['meta']['description'], ENT_QUOTES, 'UTF-8');?>
">
  <meta property="og:image" content="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['cover']['large']['url'], ENT_QUOTES, 'UTF-8');?>
">
  <?php if ($_smarty_tpl->tpl_vars['product']->value['show_price']) {?>
    <meta property="product:pretax_price:amount" content="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['price_tax_exc'], ENT_QUOTES, 'UTF-8');?>
">
    <meta property="product:pretax_price:currency" content="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['currency']->value['iso_code'], ENT_QUOTES, 'UTF-8');?>
">
    <meta property="product:price:amount" content="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['price_amount'], ENT_QUOTES, 'UTF-8');?>
">
    <meta property="product:price:currency" content="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['currency']->value['iso_code'], ENT_QUOTES, 'UTF-8');?>
">
  <?php }?>
  <?php if ((isset($_smarty_tpl->tpl_vars['product']->value['weight'])) && ($_smarty_tpl->tpl_vars['product']->value['weight'] != 0)) {?>
  <meta property="product:weight:value" content="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['weight'], ENT_QUOTES, 'UTF-8');?>
">
  <meta property="product:weight:units" content="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['weight_unit'], ENT_QUOTES, 'UTF-8');?>
">
  <?php }
}
}
/* {/block 'head'} */
/* {block 'product_flags'} */
class Block_1445847469695c02ebaaff32_22119091 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                    <ul class="product-flags">
                      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product']->value['flags'], 'flag');
$_smarty_tpl->tpl_vars['flag']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['flag']->value) {
$_smarty_tpl->tpl_vars['flag']->do_else = false;
?>
                        <li class="product-flag <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['flag']->value['type'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['flag']->value['label'], ENT_QUOTES, 'UTF-8');?>
</li>
                      <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </ul>
                  <?php
}
}
/* {/block 'product_flags'} */
/* {block 'product_cover_thumbnails'} */
class Block_706129997695c02ebab2268_86977539 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                    <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-cover-thumbnails.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                  <?php
}
}
/* {/block 'product_cover_thumbnails'} */
/* {block 'page_content'} */
class Block_1998201893695c02ebaafcd7_42248516 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                  <!-- @todo: use include file='catalog/_partials/product-flags.tpl'} -->
                  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1445847469695c02ebaaff32_22119091', 'product_flags', $this->tplIndex);
?>

    
                  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_706129997695c02ebab2268_86977539', 'product_cover_thumbnails', $this->tplIndex);
?>

                      
                <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_94923759695c02ebaafa53_71156314 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

              <section class="page-content" id="content">
                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1998201893695c02ebaafcd7_42248516', 'page_content', $this->tplIndex);
?>

              </section>
            <?php
}
}
/* {/block 'page_content_container'} */
/* {block 'page_title'} */
class Block_1326905693695c02ebabc966_90884146 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8');
}
}
/* {/block 'page_title'} */
/* {block 'page_header'} */
class Block_724411242695c02ebabc6f1_19530031 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                  <h1 class="h1" itemprop="name"><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1326905693695c02ebabc966_90884146', 'page_title', $this->tplIndex);
?>
</h1>
                <?php
}
}
/* {/block 'page_header'} */
/* {block 'page_header_container'} */
class Block_2114050677695c02ebabc3b2_48172378 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_724411242695c02ebabc6f1_19530031', 'page_header', $this->tplIndex);
?>

              <?php
}
}
/* {/block 'page_header_container'} */
/* {block 'product_prices'} */
class Block_689650545695c02ebabd5d7_19900559 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-prices.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
              <?php
}
}
/* {/block 'product_prices'} */
/* {block 'product_description'} */
class Block_1111871820695c02ebabdca7_28521921 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                  <div id="product-description-short-<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['id'], ENT_QUOTES, 'UTF-8');?>
" itemprop="description"><?php echo $_smarty_tpl->tpl_vars['product']->value['description'];?>
</div>
                <?php
}
}
/* {/block 'product_description'} */
/* {block 'product_customization'} */
class Block_259251804695c02ebabf157_10196953 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                    <?php $_smarty_tpl->_subTemplateRender("file:catalog/_partials/product-customization.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('customizations'=>$_smarty_tpl->tpl_vars['product']->value['customizations']), 0, false);
?>
                  <?php
}
}
/* {/block 'product_customization'} */
/* {block 'product_variants'} */
class Block_403655907695c02ebac1a97_84970008 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                        <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-variants.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                      <?php
}
}
/* {/block 'product_variants'} */
/* {block 'product_miniature'} */
class Block_795718455695c02ebac3ca2_29630938 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/miniatures/pack-product.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product'=>$_smarty_tpl->tpl_vars['product_pack']->value), 0, true);
?>
                              <?php
}
}
/* {/block 'product_miniature'} */
/* {block 'product_pack'} */
class Block_1879904981695c02ebac21b4_25133138 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                        <?php if ($_smarty_tpl->tpl_vars['packItems']->value) {?>
                          <section class="product-pack">
                            <p class="h4"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'This pack contains','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
</p>
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['packItems']->value, 'product_pack');
$_smarty_tpl->tpl_vars['product_pack']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['product_pack']->value) {
$_smarty_tpl->tpl_vars['product_pack']->do_else = false;
?>
                              <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_795718455695c02ebac3ca2_29630938', 'product_miniature', $this->tplIndex);
?>

                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        </section>
                        <?php }?>
                      <?php
}
}
/* {/block 'product_pack'} */
/* {block 'product_discounts'} */
class Block_1965811060695c02ebac4999_06660619 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                        <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-discounts.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                      <?php
}
}
/* {/block 'product_discounts'} */
/* {block 'product_additional_info'} */
class Block_1872861179695c02ebac5002_35348524 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                        <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-additional-info.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                      <?php
}
}
/* {/block 'product_additional_info'} */
/* {block 'product_refresh'} */
class Block_1856856711695c02ebac56c0_13536017 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'product_refresh'} */
/* {block 'product_add_to_cart'} */
class Block_1581288370695c02ebad0770_18062704 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                  <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-add-to-cart.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                <?php
}
}
/* {/block 'product_add_to_cart'} */
/* {block 'product_buy'} */
class Block_1164264548695c02ebac09b1_79291141 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                    <form action="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['urls']->value['pages']['cart'], ENT_QUOTES, 'UTF-8');?>
" method="post" id="add-to-cart-or-refresh">
                      <input type="hidden" name="token" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['static_token']->value, ENT_QUOTES, 'UTF-8');?>
">
                      <input type="hidden" name="id_product" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['id'], ENT_QUOTES, 'UTF-8');?>
" id="product_page_product_id">
                      <input type="hidden" name="id_customization" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['id_customization'], ENT_QUOTES, 'UTF-8');?>
" id="product_customization_id">
    
                      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_403655907695c02ebac1a97_84970008', 'product_variants', $this->tplIndex);
?>

    
                      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1879904981695c02ebac21b4_25133138', 'product_pack', $this->tplIndex);
?>

    
                      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1965811060695c02ebac4999_06660619', 'product_discounts', $this->tplIndex);
?>

    
                   
    
                      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1872861179695c02ebac5002_35348524', 'product_additional_info', $this->tplIndex);
?>

    
                                            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1856856711695c02ebac56c0_13536017', 'product_refresh', $this->tplIndex);
?>

            
    
                                    

              <div class="attachment">
                <table class="table">
					
					<?php ob_start();
echo htmlspecialchars((string) mb_strtoupper((string) $_smarty_tpl->tpl_vars['language']->value['iso_code'] ?? '', 'UTF-8'), ENT_QUOTES, 'UTF-8');
$_prefixVariable1 = ob_get_clean();
$_smarty_tpl->_assignInScope('lang_checker', ($_prefixVariable1).("_"));?>

					<?php $_smarty_tpl->_assignInScope('lang_checker_array', array('ES','EN'));?>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product']->value['attachments'], 'attachment');
$_smarty_tpl->tpl_vars['attachment']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['attachment']->value) {
$_smarty_tpl->tpl_vars['attachment']->do_else = false;
?>
					
                    <?php ob_start();
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['lang_checker']->value, ENT_QUOTES, 'UTF-8');
$_prefixVariable2 = ob_get_clean();
if (call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'strstr' ][ 0 ], array( $_smarty_tpl->tpl_vars['attachment']->value['file_name'],$_prefixVariable2 ))) {?>
                  
                          <tr>
                            <td>
                              <h4><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['attachment']->value['name'], ENT_QUOTES, 'UTF-8');?>
</h4>
                            </td>
                            <td>
                              
                              <a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('entity'=>'attachment','params'=>array('id_attachment'=>$_smarty_tpl->tpl_vars['attachment']->value['id_attachment'])),$_smarty_tpl ) );?>
" target="_blank" class="dl">
                              
                              <p><img src="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['urls']->value['img_url'], ENT_QUOTES, 'UTF-8');?>
/file.png" class="img-fluid"><?php ob_start();
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['attachment']->value['description'], ENT_QUOTES, 'UTF-8');
$_prefixVariable3 = ob_get_clean();
ob_start();
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['attachment']->value['description'] != '', ENT_QUOTES, 'UTF-8');
$_prefixVariable4 = ob_get_clean();
if ((isset($_prefixVariable3)) && $_prefixVariable4) {?> <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['attachment']->value['description'], ENT_QUOTES, 'UTF-8');?>
 <?php } else { ?> Télécharger<?php }?></p>
                              </a>
                            </td>
                          </tr>
                  	<?php }?>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </table>
              </div>

                  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1581288370695c02ebad0770_18062704', 'product_add_to_cart', $this->tplIndex);
?>

        </form>
                  <?php
}
}
/* {/block 'product_buy'} */
/* {block 'product_flags'} */
class Block_466605965695c02ebad1b33_58497433 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                    <ul class="product-flags">
                      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product']->value['flags'], 'flag');
$_smarty_tpl->tpl_vars['flag']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['flag']->value) {
$_smarty_tpl->tpl_vars['flag']->do_else = false;
?>
                        <li class="product-flag <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['flag']->value['type'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['flag']->value['label'], ENT_QUOTES, 'UTF-8');?>
</li>
                      <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </ul>
                  <?php
}
}
/* {/block 'product_flags'} */
/* {block 'product_cover_thumbnails'} */
class Block_88579554695c02ebad2cd6_51530656 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                    <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-cover-thumbnails.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
                  <?php
}
}
/* {/block 'product_cover_thumbnails'} */
/* {block 'page_content'} */
class Block_798454336695c02ebad18e7_70448537 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                  <!-- @todo: use include file='catalog/_partials/product-flags.tpl'} -->
                  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_466605965695c02ebad1b33_58497433', 'product_flags', $this->tplIndex);
?>

    
                  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_88579554695c02ebad2cd6_51530656', 'product_cover_thumbnails', $this->tplIndex);
?>

                      
                <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_660669517695c02ebad1643_04462495 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

              <section class="page-content" id="content">
                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_798454336695c02ebad18e7_70448537', 'page_content', $this->tplIndex);
?>

              </section>
            <?php
}
}
/* {/block 'page_content_container'} */
/* {block 'product_miniature'} */
class Block_827199302695c02ebad4747_16419867 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                    <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/miniatures/product.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product'=>$_smarty_tpl->tpl_vars['product_accessory']->value), 0, true);
?>
                  <?php
}
}
/* {/block 'product_miniature'} */
/* {block 'product_accessories'} */
class Block_1592890701695c02ebad36e7_81759865 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <?php if ($_smarty_tpl->tpl_vars['accessories']->value) {?>
            <section class="product-accessories clearfix">
              <p class="h5 text-uppercase"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'You might also like','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
</p>
              <div class="products">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['accessories']->value, 'product_accessory');
$_smarty_tpl->tpl_vars['product_accessory']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['product_accessory']->value) {
$_smarty_tpl->tpl_vars['product_accessory']->do_else = false;
?>
                  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_827199302695c02ebad4747_16419867', 'product_miniature', $this->tplIndex);
?>

                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
              </div>
            </section>
          <?php }?>
        <?php
}
}
/* {/block 'product_accessories'} */
/* {block 'product_footer'} */
class Block_1970920393695c02ebad5329_32014712 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayFooterProduct','product'=>$_smarty_tpl->tpl_vars['product']->value,'category'=>$_smarty_tpl->tpl_vars['category']->value),$_smarty_tpl ) );?>

        <?php
}
}
/* {/block 'product_footer'} */
/* {block 'product_images_modal'} */
class Block_1788402170695c02ebad5f34_96740144 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-images-modal.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        <?php
}
}
/* {/block 'product_images_modal'} */
/* {block 'page_footer'} */
class Block_1200631455695c02ebad6812_80008496 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

              <!-- Footer content -->
            <?php
}
}
/* {/block 'page_footer'} */
/* {block 'page_footer_container'} */
class Block_1308433423695c02ebad65c9_55577203 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <footer class="page-footer">
            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1200631455695c02ebad6812_80008496', 'page_footer', $this->tplIndex);
?>

          </footer>
        <?php
}
}
/* {/block 'page_footer_container'} */
/* {block 'content'} */
class Block_1176948511695c02ebaaf369_12774873 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1176948511695c02ebaaf369_12774873',
  ),
  'page_content_container' => 
  array (
    0 => 'Block_94923759695c02ebaafa53_71156314',
    1 => 'Block_660669517695c02ebad1643_04462495',
  ),
  'page_content' => 
  array (
    0 => 'Block_1998201893695c02ebaafcd7_42248516',
    1 => 'Block_798454336695c02ebad18e7_70448537',
  ),
  'product_flags' => 
  array (
    0 => 'Block_1445847469695c02ebaaff32_22119091',
    1 => 'Block_466605965695c02ebad1b33_58497433',
  ),
  'product_cover_thumbnails' => 
  array (
    0 => 'Block_706129997695c02ebab2268_86977539',
    1 => 'Block_88579554695c02ebad2cd6_51530656',
  ),
  'page_header_container' => 
  array (
    0 => 'Block_2114050677695c02ebabc3b2_48172378',
  ),
  'page_header' => 
  array (
    0 => 'Block_724411242695c02ebabc6f1_19530031',
  ),
  'page_title' => 
  array (
    0 => 'Block_1326905693695c02ebabc966_90884146',
  ),
  'product_prices' => 
  array (
    0 => 'Block_689650545695c02ebabd5d7_19900559',
  ),
  'product_description' => 
  array (
    0 => 'Block_1111871820695c02ebabdca7_28521921',
  ),
  'product_customization' => 
  array (
    0 => 'Block_259251804695c02ebabf157_10196953',
  ),
  'product_buy' => 
  array (
    0 => 'Block_1164264548695c02ebac09b1_79291141',
  ),
  'product_variants' => 
  array (
    0 => 'Block_403655907695c02ebac1a97_84970008',
  ),
  'product_pack' => 
  array (
    0 => 'Block_1879904981695c02ebac21b4_25133138',
  ),
  'product_miniature' => 
  array (
    0 => 'Block_795718455695c02ebac3ca2_29630938',
    1 => 'Block_827199302695c02ebad4747_16419867',
  ),
  'product_discounts' => 
  array (
    0 => 'Block_1965811060695c02ebac4999_06660619',
  ),
  'product_additional_info' => 
  array (
    0 => 'Block_1872861179695c02ebac5002_35348524',
  ),
  'product_refresh' => 
  array (
    0 => 'Block_1856856711695c02ebac56c0_13536017',
  ),
  'product_add_to_cart' => 
  array (
    0 => 'Block_1581288370695c02ebad0770_18062704',
  ),
  'product_accessories' => 
  array (
    0 => 'Block_1592890701695c02ebad36e7_81759865',
  ),
  'product_footer' => 
  array (
    0 => 'Block_1970920393695c02ebad5329_32014712',
  ),
  'product_images_modal' => 
  array (
    0 => 'Block_1788402170695c02ebad5f34_96740144',
  ),
  'page_footer_container' => 
  array (
    0 => 'Block_1308433423695c02ebad65c9_55577203',
  ),
  'page_footer' => 
  array (
    0 => 'Block_1200631455695c02ebad6812_80008496',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


  <div class="row">
    <div class="col-lg-9" id="left_col_home">
      <section id="main" itemscope itemtype="https://schema.org/Product">
        <meta itemprop="url" content="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['url'], ENT_QUOTES, 'UTF-8');?>
">
    
        <div class="row">
          <div class="col-sm-12 mobile">
            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_94923759695c02ebaafa53_71156314', 'page_content_container', $this->tplIndex);
?>

            </div>
            <div class="col-md-9">
              <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2114050677695c02ebabc3b2_48172378', 'page_header_container', $this->tplIndex);
?>

              <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_689650545695c02ebabd5d7_19900559', 'product_prices', $this->tplIndex);
?>

    
              <div class="product-information">
                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1111871820695c02ebabdca7_28521921', 'product_description', $this->tplIndex);
?>

    
                <?php if ($_smarty_tpl->tpl_vars['product']->value['is_customizable'] && count($_smarty_tpl->tpl_vars['product']->value['customizations']['fields'])) {?>
                  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_259251804695c02ebabf157_10196953', 'product_customization', $this->tplIndex);
?>

                <?php }?>
    
                <div class="product-actions">
                  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1164264548695c02ebac09b1_79291141', 'product_buy', $this->tplIndex);
?>

                </div>
    
                            </div>
          </div>

                    <div class="col-md-3 desktop">
            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_660669517695c02ebad1643_04462495', 'page_content_container', $this->tplIndex);
?>

            </div>
        </div>
    
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1592890701695c02ebad36e7_81759865', 'product_accessories', $this->tplIndex);
?>

    
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1970920393695c02ebad5329_32014712', 'product_footer', $this->tplIndex);
?>

    
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1788402170695c02ebad5f34_96740144', 'product_images_modal', $this->tplIndex);
?>

    
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1308433423695c02ebad65c9_55577203', 'page_footer_container', $this->tplIndex);
?>

      </section>
    </div>
  <div class="col-lg-3" id="right-column">
    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayRightColumn"),$_smarty_tpl ) );?>

  </div>
  </div>

<?php
}
}
/* {/block 'content'} */
}

<?php
/* Smarty version 4.3.4, created on 2026-01-05 15:06:27
  from '/home/www/public/themes/Ditel/templates/cms/page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_695bc56338bde0_51172259',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e8470f88cfc2626e4c44ba18f34616581c20cf6b' => 
    array (
      0 => '/home/www/public/themes/Ditel/templates/cms/page.tpl',
      1 => 1659304800,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_695bc56338bde0_51172259 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>
x




<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_481413653695bc563387789_46718213', 'page_title');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_60715157695bc5633885f9_18584546', 'page_content_container');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'page.tpl');
}
/* {block 'page_title'} */
class Block_481413653695bc563387789_46718213 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_title' => 
  array (
    0 => 'Block_481413653695bc563387789_46718213',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['cms']->value['meta_title'], ENT_QUOTES, 'UTF-8');?>

<?php
}
}
/* {/block 'page_title'} */
/* {block 'cms_content'} */
class Block_661611951695bc563388c18_60474717 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php echo $_smarty_tpl->tpl_vars['cms']->value['content'];?>

    <?php
}
}
/* {/block 'cms_content'} */
/* {block 'hook_cms_dispute_information'} */
class Block_1548720543695bc563389452_97508780 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayCMSDisputeInformation'),$_smarty_tpl ) );?>

    <?php
}
}
/* {/block 'hook_cms_dispute_information'} */
/* {block 'hook_cms_print_button'} */
class Block_1213317761695bc563389f67_78085650 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayCMSPrintButton'),$_smarty_tpl ) );?>

    <?php
}
}
/* {/block 'hook_cms_print_button'} */
/* {block 'page_content_container'} */
class Block_60715157695bc5633885f9_18584546 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content_container' => 
  array (
    0 => 'Block_60715157695bc5633885f9_18584546',
  ),
  'cms_content' => 
  array (
    0 => 'Block_661611951695bc563388c18_60474717',
  ),
  'hook_cms_dispute_information' => 
  array (
    0 => 'Block_1548720543695bc563389452_97508780',
  ),
  'hook_cms_print_button' => 
  array (
    0 => 'Block_1213317761695bc563389f67_78085650',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <section id="content" class="page-content page-cms page-cms-<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['cms']->value['id'], ENT_QUOTES, 'UTF-8');?>
">

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_661611951695bc563388c18_60474717', 'cms_content', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1548720543695bc563389452_97508780', 'hook_cms_dispute_information', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1213317761695bc563389f67_78085650', 'hook_cms_print_button', $this->tplIndex);
?>


    <?php if ($_smarty_tpl->tpl_vars['cms']->value['id_cms_category'] == 3 || $_smarty_tpl->tpl_vars['cms']->value['id_cms_category'] == 4 || $_smarty_tpl->tpl_vars['cms']->value['id_cms_category'] == 5 || $_smarty_tpl->tpl_vars['cms']->value['id_cms_category'] == 6 || $_smarty_tpl->tpl_vars['cms']->value['id_cms_category'] == 7) {?>
    <div id="btn-cms"><a class="bouton-orange" href="https://www.ditel.fr/faq.html">Retour</a></div>
    <?php }?>
  </section>
<?php
}
}
/* {/block 'page_content_container'} */
}

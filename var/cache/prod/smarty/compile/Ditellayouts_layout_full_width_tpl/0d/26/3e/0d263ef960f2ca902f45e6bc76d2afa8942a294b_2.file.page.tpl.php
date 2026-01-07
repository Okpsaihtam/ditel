<?php
/* Smarty version 4.3.4, created on 2026-01-05 15:33:20
  from '/home/www/public/themes/Ditel/templates/page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_695bcbb092cb30_06979383',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0d263ef960f2ca902f45e6bc76d2afa8942a294b' => 
    array (
      0 => '/home/www/public/themes/Ditel/templates/page.tpl',
      1 => 1586469600,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_695bcbb092cb30_06979383 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_940545179695bcbb0928b15_01703218', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'page_title'} */
class Block_1640308817695bcbb0929267_72552750 extends Smarty_Internal_Block
{
public $callsChild = 'true';
public $hide = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <header class="page-header">
          <h1><?php 
$_smarty_tpl->inheritance->callChild($_smarty_tpl, $this);
?>
</h1>
        </header>
      <?php
}
}
/* {/block 'page_title'} */
/* {block 'page_header_container'} */
class Block_1536406959695bcbb0928ea7_85222764 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1640308817695bcbb0929267_72552750', 'page_title', $this->tplIndex);
?>

    <?php
}
}
/* {/block 'page_header_container'} */
/* {block 'page_content_top'} */
class Block_1632582099695bcbb092b882_82706995 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'page_content'} */
class Block_1217402972695bcbb092bc20_24503722 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Page content -->
        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_466423300695bcbb092b566_34094210 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-content card card-block">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1632582099695bcbb092b882_82706995', 'page_content_top', $this->tplIndex);
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1217402972695bcbb092bc20_24503722', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
/* {block 'page_footer'} */
class Block_621490779695bcbb092c402_85077904 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Footer content -->
        <?php
}
}
/* {/block 'page_footer'} */
/* {block 'page_footer_container'} */
class Block_1892621796695bcbb092c1a9_03311805 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <footer class="page-footer">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_621490779695bcbb092c402_85077904', 'page_footer', $this->tplIndex);
?>

      </footer>
    <?php
}
}
/* {/block 'page_footer_container'} */
/* {block 'content'} */
class Block_940545179695bcbb0928b15_01703218 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_940545179695bcbb0928b15_01703218',
  ),
  'page_header_container' => 
  array (
    0 => 'Block_1536406959695bcbb0928ea7_85222764',
  ),
  'page_title' => 
  array (
    0 => 'Block_1640308817695bcbb0929267_72552750',
  ),
  'page_content_container' => 
  array (
    0 => 'Block_466423300695bcbb092b566_34094210',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_1632582099695bcbb092b882_82706995',
  ),
  'page_content' => 
  array (
    0 => 'Block_1217402972695bcbb092bc20_24503722',
  ),
  'page_footer_container' => 
  array (
    0 => 'Block_1892621796695bcbb092c1a9_03311805',
  ),
  'page_footer' => 
  array (
    0 => 'Block_621490779695bcbb092c402_85077904',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


  <section id="main">

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1536406959695bcbb0928ea7_85222764', 'page_header_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_466423300695bcbb092b566_34094210', 'page_content_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1892621796695bcbb092c1a9_03311805', 'page_footer_container', $this->tplIndex);
?>


  </section>

<?php
}
}
/* {/block 'content'} */
}

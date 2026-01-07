<?php
/* Smarty version 4.3.4, created on 2026-01-05 15:06:27
  from '/home/www/public/themes/Ditel/templates/page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_695bc5633b5c35_04410290',
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
function content_695bc5633b5c35_04410290 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_983179240695bc5633b1f45_27412186', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'page_title'} */
class Block_1179751092695bc5633b2694_58971070 extends Smarty_Internal_Block
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
class Block_378169348695bc5633b22d4_87640377 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1179751092695bc5633b2694_58971070', 'page_title', $this->tplIndex);
?>

    <?php
}
}
/* {/block 'page_header_container'} */
/* {block 'page_content_top'} */
class Block_1037084116695bc5633b47b2_82366481 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'page_content'} */
class Block_1795320055695bc5633b4b82_59082321 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Page content -->
        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_210801661695bc5633b4492_62319614 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-content card card-block">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1037084116695bc5633b47b2_82366481', 'page_content_top', $this->tplIndex);
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1795320055695bc5633b4b82_59082321', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
/* {block 'page_footer'} */
class Block_1779516702695bc5633b5369_51010972 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Footer content -->
        <?php
}
}
/* {/block 'page_footer'} */
/* {block 'page_footer_container'} */
class Block_1283971974695bc5633b5104_13393085 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <footer class="page-footer">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1779516702695bc5633b5369_51010972', 'page_footer', $this->tplIndex);
?>

      </footer>
    <?php
}
}
/* {/block 'page_footer_container'} */
/* {block 'content'} */
class Block_983179240695bc5633b1f45_27412186 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_983179240695bc5633b1f45_27412186',
  ),
  'page_header_container' => 
  array (
    0 => 'Block_378169348695bc5633b22d4_87640377',
  ),
  'page_title' => 
  array (
    0 => 'Block_1179751092695bc5633b2694_58971070',
  ),
  'page_content_container' => 
  array (
    0 => 'Block_210801661695bc5633b4492_62319614',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_1037084116695bc5633b47b2_82366481',
  ),
  'page_content' => 
  array (
    0 => 'Block_1795320055695bc5633b4b82_59082321',
  ),
  'page_footer_container' => 
  array (
    0 => 'Block_1283971974695bc5633b5104_13393085',
  ),
  'page_footer' => 
  array (
    0 => 'Block_1779516702695bc5633b5369_51010972',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


  <section id="main">

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_378169348695bc5633b22d4_87640377', 'page_header_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_210801661695bc5633b4492_62319614', 'page_content_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1283971974695bc5633b5104_13393085', 'page_footer_container', $this->tplIndex);
?>


  </section>

<?php
}
}
/* {/block 'content'} */
}

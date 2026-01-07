<?php
/* Smarty version 4.3.4, created on 2026-01-05 15:33:20
  from '/home/www/public/themes/Ditel/templates/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_695bcbb08faa81_16212177',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b3c2055d8615aba0956ace3a950967a5cfe3e365' => 
    array (
      0 => '/home/www/public/themes/Ditel/templates/index.tpl',
      1 => 1586469600,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_695bcbb08faa81_16212177 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_687618581695bcbb08f39e0_17132854', 'page_content_container');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'page.tpl');
}
/* {block 'page_content_top'} */
class Block_811588274695bcbb08f3fb9_12668496 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'hook_home'} */
class Block_1648607795695bcbb08f4d91_58691008 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <?php echo $_smarty_tpl->tpl_vars['HOOK_HOME']->value;?>

              <?php
}
}
/* {/block 'hook_home'} */
/* {block 'page_content'} */
class Block_1827197743695bcbb08f4769_58065667 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

              <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1648607795695bcbb08f4d91_58691008', 'hook_home', $this->tplIndex);
?>

            <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_687618581695bcbb08f39e0_17132854 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content_container' => 
  array (
    0 => 'Block_687618581695bcbb08f39e0_17132854',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_811588274695bcbb08f3fb9_12668496',
  ),
  'page_content' => 
  array (
    0 => 'Block_1827197743695bcbb08f4769_58065667',
  ),
  'hook_home' => 
  array (
    0 => 'Block_1648607795695bcbb08f4d91_58691008',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-home">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_811588274695bcbb08f3fb9_12668496', 'page_content_top', $this->tplIndex);
?>

        
        <div class="row">
          <div class="col-md-9" id="left_col_home">
            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1827197743695bcbb08f4769_58065667', 'page_content', $this->tplIndex);
?>

          </div>

          <div class="col-md-3" id="right_col_home">
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayRightColumn"),$_smarty_tpl ) );?>

          </div>
        </div>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
}

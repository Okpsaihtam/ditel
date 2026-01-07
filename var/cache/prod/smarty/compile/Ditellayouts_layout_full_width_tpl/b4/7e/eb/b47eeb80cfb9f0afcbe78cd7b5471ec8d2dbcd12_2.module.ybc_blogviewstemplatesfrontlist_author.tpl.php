<?php
/* Smarty version 4.3.4, created on 2026-01-05 23:31:57
  from 'module:ybc_blogviewstemplatesfrontlist_author.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_695c3bddea56b4_11633913',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b47eeb80cfb9f0afcbe78cd7b5471ec8d2dbcd12' => 
    array (
      0 => 'module:ybc_blogviewstemplatesfrontlist_author.tpl',
      1 => 1656021600,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_695c3bddea56b4_11633913 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_763213588695c3bdde183b7_34246625', "content");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "page.tpl");
}
/* {block "content"} */
class Block_763213588695c3bdde183b7_34246625 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_763213588695c3bdde183b7_34246625',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home/www/public/vendor/smarty/smarty/libs/plugins/modifier.count.php','function'=>'smarty_modifier_count',),));
?>

    <div class="row">
        <?php if ((isset($_smarty_tpl->tpl_vars['blog_config']->value['YBC_BLOG_SIDEBAR_POSITION'])) && $_smarty_tpl->tpl_vars['blog_config']->value['YBC_BLOG_SIDEBAR_POSITION'] == 'left') {?>
            <div id="left-column" class="col-xs-12 col-sm-4 col-md-3">
              <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"blogSidebar"),$_smarty_tpl ) );?>

            </div>
        <?php }?>
        <div id="content-wrapper" class="<?php if ((isset($_smarty_tpl->tpl_vars['blog_config']->value['YBC_BLOG_SIDEBAR_POSITION'])) && $_smarty_tpl->tpl_vars['blog_config']->value['YBC_BLOG_SIDEBAR_POSITION'] == 'left') {?>left-column col-xs-12 col-sm-8 col-md-9<?php } elseif ((isset($_smarty_tpl->tpl_vars['blog_config']->value['YBC_BLOG_SIDEBAR_POSITION'])) && $_smarty_tpl->tpl_vars['blog_config']->value['YBC_BLOG_SIDEBAR_POSITION'] == 'right') {?>right-column col-xs-12 col-sm-8 col-md-9<?php }?>">
            <div class="ybc_blog_layout_<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['blog_layout']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
 ybc-blog-wrapper ybc-blog-wrapper-blog-list<?php if ((isset($_smarty_tpl->tpl_vars['blog_config']->value['YBC_BLOG_AUTO_LOAD'])) && $_smarty_tpl->tpl_vars['blog_config']->value['YBC_BLOG_AUTO_LOAD']) {?> loadmore<?php }?> ybc-page-auhors">
                <?php if ($_smarty_tpl->tpl_vars['authors']->value) {?>
                    <?php if (!(isset($_smarty_tpl->tpl_vars['date_format']->value)) || (isset($_smarty_tpl->tpl_vars['date_format']->value)) && !$_smarty_tpl->tpl_vars['date_format']->value) {
$_smarty_tpl->_assignInScope('date_format', 'F jS Y');
}?>
                    <div class="page_blog block ybc_block_author <?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['blog_config']->value['YBC_BLOG_RTL_CLASS'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
 page_author">
                        <h4 class="title_blog title_block"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Authors','mod'=>'ybc_blog'),$_smarty_tpl ) );?>
</h4>
                        <?php $_smarty_tpl->_assignInScope('product_row', call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['blog_config']->value['YBC_BLOG_HOME_PER_ROW'] )));?>
                        <ul class="block_content ybc-blog-list">
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['authors']->value, 'author');
$_smarty_tpl->tpl_vars['author']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['author']->value) {
$_smarty_tpl->tpl_vars['author']->do_else = false;
?>
                                <li> 
                                    <div class="ybc-blog-comment-content"> 
                                        <?php if ($_smarty_tpl->tpl_vars['author']->value['avata']) {?>
                                            <div class="author_avata_show">
                                                <img class="author_avata" src="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['author']->value['avata'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" />
                                            </div>
                                        <?php }?>
                                        <div class="author_infor">
                                            <a class="ybc_title_block" href="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['author']->value['link'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['author']->value['information']['name'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
 (<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( smarty_modifier_count($_smarty_tpl->tpl_vars['author']->value['posts']) )), ENT_QUOTES, 'UTF-8');?>
 <?php if (count($_smarty_tpl->tpl_vars['author']->value['posts']) > 1) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'posts','mod'=>'ybc_blog'),$_smarty_tpl ) );
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'post','mod'=>'ybc_blog'),$_smarty_tpl ) );
}?>)</a> 
                                            <div class="ybc_author_desc">
                                                <?php echo $_smarty_tpl->tpl_vars['author']->value['information']['description'];?>

                                            </div>
                                            <a class="view_post" href="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['author']->value['link'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
">
                                                <?php if (count($_smarty_tpl->tpl_vars['author']->value['posts']) > 1) {?>
                                                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'View posts','mod'=>'ybc_blog'),$_smarty_tpl ) );?>

                                                <?php } else { ?>
                                                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'View post','mod'=>'ybc_blog'),$_smarty_tpl ) );?>

                                                <?php }?>
                                            </a>
                                        </div>
                                    </div>
                                </li>
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        </ul>
                        <?php if ($_smarty_tpl->tpl_vars['blog_paggination']->value) {?>
                            <div class="blog-paggination">
                                <?php echo $_smarty_tpl->tpl_vars['blog_paggination']->value;?>

                            </div>
                        <?php }?>
                        <?php if ((isset($_smarty_tpl->tpl_vars['blog_config']->value['YBC_BLOG_AUTO_LOAD'])) && $_smarty_tpl->tpl_vars['blog_config']->value['YBC_BLOG_AUTO_LOAD']) {?>
                            <div class="ets_blog_loading">
                                <span id="squaresWaveG">
                                    <span id="squaresWaveG_1" class="squaresWaveG"></span>
                                    <span id="squaresWaveG_2" class="squaresWaveG"></span>
                                    <span id="squaresWaveG_3" class="squaresWaveG"></span>
                                    <span id="squaresWaveG_4" class="squaresWaveG"></span>
                                    <span id="squaresWaveG_5" class="squaresWaveG"></span>
                                </span>
                            </div>
                            <div class="clearfix"></div>
                        <?php }?>
                    </div>
                <?php }?>
            </div>               
        </div>
        <?php if ((isset($_smarty_tpl->tpl_vars['blog_config']->value['YBC_BLOG_SIDEBAR_POSITION'])) && $_smarty_tpl->tpl_vars['blog_config']->value['YBC_BLOG_SIDEBAR_POSITION'] == 'right') {?>
            <div id="right-column" class="col-xs-12 col-sm-4 col-md-3">
              <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"blogSidebar"),$_smarty_tpl ) );?>

            </div>
        <?php }?>
    </div>
<?php
}
}
/* {/block "content"} */
}

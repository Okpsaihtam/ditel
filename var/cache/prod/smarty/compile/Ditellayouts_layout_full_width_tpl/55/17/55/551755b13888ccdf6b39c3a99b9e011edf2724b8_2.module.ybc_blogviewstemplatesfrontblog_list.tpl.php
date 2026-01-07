<?php
/* Smarty version 4.3.4, created on 2026-01-05 15:47:42
  from 'module:ybc_blogviewstemplatesfrontblog_list.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_695bcf0eca56a7_44383136',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '551755b13888ccdf6b39c3a99b9e011edf2724b8' => 
    array (
      0 => 'module:ybc_blogviewstemplatesfrontblog_list.tpl',
      1 => 1656021600,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_695bcf0eca56a7_44383136 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_378225559695bcf0ec576b4_07082495', "content");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "page.tpl");
}
/* {block "content"} */
class Block_378225559695bcf0ec576b4_07082495 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_378225559695bcf0ec576b4_07082495',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="row">
    <?php if ((isset($_smarty_tpl->tpl_vars['blog_config']->value['YBC_BLOG_SIDEBAR_POSITION'])) && $_smarty_tpl->tpl_vars['blog_config']->value['YBC_BLOG_SIDEBAR_POSITION'] == 'left') {?>
        <div id="left-column" class="col-xs-12 col-sm-4 col-md-3">
          <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"blogSidebar"),$_smarty_tpl ) );?>

        </div>
    <?php }?>
    <div id="content-wrapper" class="<?php if ((isset($_smarty_tpl->tpl_vars['blog_config']->value['YBC_BLOG_SIDEBAR_POSITION'])) && $_smarty_tpl->tpl_vars['blog_config']->value['YBC_BLOG_SIDEBAR_POSITION'] == 'left') {?>left-column col-xs-12 col-sm-8 col-md-9<?php } elseif ((isset($_smarty_tpl->tpl_vars['blog_config']->value['YBC_BLOG_SIDEBAR_POSITION'])) && $_smarty_tpl->tpl_vars['blog_config']->value['YBC_BLOG_SIDEBAR_POSITION'] == 'right') {?>right-column col-xs-12 col-sm-8 col-md-9<?php }?>">
        <div class="ybc_blog_layout_<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['blog_layout']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
 ybc-blog-wrapper ybc-blog-wrapper-blog-list<?php if ((isset($_smarty_tpl->tpl_vars['blog_config']->value['YBC_BLOG_AUTO_LOAD'])) && $_smarty_tpl->tpl_vars['blog_config']->value['YBC_BLOG_AUTO_LOAD']) {?> loadmore<?php }?> <?php if ($_smarty_tpl->tpl_vars['blog_latest']->value) {?>ybc-page-latest<?php } elseif ($_smarty_tpl->tpl_vars['blog_category']->value) {?>ybc-page-category<?php } elseif ($_smarty_tpl->tpl_vars['blog_tag']->value) {?>ybc-page-tag<?php } elseif ($_smarty_tpl->tpl_vars['blog_search']->value) {?>ybc-page-search<?php } elseif ($_smarty_tpl->tpl_vars['author']->value) {?>ybc-page-author<?php } else { ?>ybc-page-home<?php }?>">
            <?php if ($_smarty_tpl->tpl_vars['is_main_page']->value) {?>
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'blogSlidersBlock'),$_smarty_tpl ) );?>

            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['blog_category']->value) {?>
                <?php if ((isset($_smarty_tpl->tpl_vars['blog_category']->value['enabled'])) && $_smarty_tpl->tpl_vars['blog_category']->value['enabled']) {?>
                    <div class="blog-category <?php if ($_smarty_tpl->tpl_vars['blog_category']->value['image']) {?>has-blog-image<?php }?>">
                        <?php if ($_smarty_tpl->tpl_vars['blog_category']->value['image']) {?>
                            <div class="ybc_item_img<?php if ((isset($_smarty_tpl->tpl_vars['blog_config']->value['YBC_BLOG_LAZY_LOAD'])) && $_smarty_tpl->tpl_vars['blog_config']->value['YBC_BLOG_LAZY_LOAD']) {?> ybc_item_img_ladyload<?php }?>">
                                <?php if ($_smarty_tpl->tpl_vars['blog_config']->value['YBC_BLOG_CATEGORY_ENABLE_POST_SLIDESHOW']) {?>
                                    <a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['link']->value->getMediaLink(((string)(defined('_PS_YBC_BLOG_IMG_') ? constant('_PS_YBC_BLOG_IMG_') : null))."category/".((string)(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['blog_category']->value['image'],'htmlall','UTF-8' ))))), ENT_QUOTES, 'UTF-8');?>
" class="prettyPhoto">
                                <?php }?>        
                                        <img src="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['link']->value->getMediaLink(((string)(defined('_PS_YBC_BLOG_IMG_') ? constant('_PS_YBC_BLOG_IMG_') : null))."category/".((string)(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['blog_category']->value['image'],'htmlall','UTF-8' ))))), ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['blog_category']->value['title'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['blog_category']->value['title'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" <?php if ((isset($_smarty_tpl->tpl_vars['blog_config']->value['YBC_BLOG_LAZY_LOAD'])) && $_smarty_tpl->tpl_vars['blog_config']->value['YBC_BLOG_LAZY_LOAD']) {?> data-original="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['link']->value->getMediaLink(((string)(defined('_PS_YBC_BLOG_IMG_') ? constant('_PS_YBC_BLOG_IMG_') : null))."category/".((string)(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['blog_category']->value['image'],'htmlall','UTF-8' ))))), ENT_QUOTES, 'UTF-8');?>
" class="lazyload"<?php }?> />
                                  <?php if ((isset($_smarty_tpl->tpl_vars['blog_config']->value['YBC_BLOG_LAZY_LOAD'])) && $_smarty_tpl->tpl_vars['blog_config']->value['YBC_BLOG_LAZY_LOAD']) {?>
                                 <svg width="<?php echo htmlspecialchars((string) Configuration::get(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( 'YBC_BLOG_IMAGE_CATEGORY_WIDTH','html','UTF-8' ))), ENT_QUOTES, 'UTF-8');?>
" height="<?php echo htmlspecialchars((string) Configuration::get(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( 'YBC_BLOG_IMAGE_CATEGORY_HEIGHT','html','UTF-8' ))), ENT_QUOTES, 'UTF-8');?>
" style="width: 100%;height: auto">
                                 </svg>
                                 <?php }?>
                                 <?php if ($_smarty_tpl->tpl_vars['blog_config']->value['YBC_BLOG_CATEGORY_ENABLE_POST_SLIDESHOW']) {?>
                                    </a>
                                 <?php }?>
                                <?php if ((isset($_smarty_tpl->tpl_vars['blog_config']->value['YBC_BLOG_LAZY_LOAD'])) && $_smarty_tpl->tpl_vars['blog_config']->value['YBC_BLOG_LAZY_LOAD']) {?>
                                    <div class="loader_lady_custom"></div>
                                <?php }?>
                            </div>
                        <?php }?>
                        <h1 class="page-heading product-listing"><?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['blog_category']->value['title'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
</h1>            
                        <?php if ($_smarty_tpl->tpl_vars['blog_category']->value['description']) {?>
                            <div class="blog-category-desc">
                                <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['blog_category']->value['description'] ));?>

                            </div>
                        <?php }?>
                    </div>
                <?php } else { ?>
                    <p class="alert alert-warning"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'This category is not available','mod'=>'ybc_blog'),$_smarty_tpl ) );?>
</p>
                <?php }?>
            <?php } elseif ($_smarty_tpl->tpl_vars['blog_latest']->value) {?>
               <h1 class="page-heading product-listing"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Latest posts','mod'=>'ybc_blog'),$_smarty_tpl ) );?>
</h1>
            <?php } elseif ($_smarty_tpl->tpl_vars['blog_popular']->value) {?>
               <h1 class="page-heading product-listing"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Popular posts','mod'=>'ybc_blog'),$_smarty_tpl ) );?>
</h1>
            <?php } elseif ($_smarty_tpl->tpl_vars['blog_featured']->value) {?>
               <h1 class="page-heading product-listing"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Featured posts','mod'=>'ybc_blog'),$_smarty_tpl ) );?>
</h1>
            <?php } elseif ($_smarty_tpl->tpl_vars['blog_tag']->value) {?>
                <h1 class="page-heading product-listing"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Tag: ','mod'=>'ybc_blog'),$_smarty_tpl ) );?>
"<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( ucfirst($_smarty_tpl->tpl_vars['blog_tag']->value),'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"</h1>
            <?php } elseif ($_smarty_tpl->tpl_vars['blog_search']->value) {?>
                <h1 class="page-heading product-listing"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Search: ','mod'=>'ybc_blog'),$_smarty_tpl ) );?>
"<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( ucfirst(str_replace('+',' ',$_smarty_tpl->tpl_vars['blog_search']->value)),'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"</h1>
            <?php } elseif ($_smarty_tpl->tpl_vars['author']->value) {?>
                <?php if ((isset($_smarty_tpl->tpl_vars['author']->value['disabled'])) && $_smarty_tpl->tpl_vars['author']->value['disabled']) {?>
                    <p class="alert alert-warning"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'This author is not available','mod'=>'ybc_blog'),$_smarty_tpl ) );?>
</p>
                <?php } else { ?>
                    <?php if ((isset($_smarty_tpl->tpl_vars['blog_config']->value['YBC_BLOG_AUTHOR_INFORMATION'])) && $_smarty_tpl->tpl_vars['blog_config']->value['YBC_BLOG_AUTHOR_INFORMATION']) {?>
                        
                        <?php if ((isset($_smarty_tpl->tpl_vars['author']->value['description'])) && $_smarty_tpl->tpl_vars['author']->value['description']) {?>
                            <div class="ybc-block-author ybc-block-author-avata">
                                <?php if ($_smarty_tpl->tpl_vars['author']->value['avata']) {?>
                                    <div class="avata_img">
                                        <img class="avata" src="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['link']->value->getMediaLink(((string)(defined('_PS_YBC_BLOG_IMG_') ? constant('_PS_YBC_BLOG_IMG_') : null))."avata/".((string)(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['author']->value['avata'],'html','UTF-8' ))))), ENT_QUOTES, 'UTF-8');?>
"/>
                                    </div>
                                <?php }?>
                                <div class="ybc-des-and-author">
                                    <div class="ybc-author-name">
                                        <h1 class="page-heading product-listing">
                                            <a href="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['author']->value['author_link'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
">
                                                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Author','mod'=>'ybc_blog'),$_smarty_tpl ) );?>
: <?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['author']->value['name'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>

                                            </a>
                                        </h1>
                                    </div>
                                    <?php if ((isset($_smarty_tpl->tpl_vars['author']->value['description'])) && $_smarty_tpl->tpl_vars['author']->value['description']) {?>
                                        <div class="ybc-author-description">
                                            <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'nl2br' ][ 0 ], array( $_smarty_tpl->tpl_vars['author']->value['description'] ));?>

                                        </div>
                                    <?php }?>
                                </div>
                            </div>
                        <?php } else { ?>
                            <div class="ybc-author-name">
                                <h1 class="page-heading product-listing">
                                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Author','mod'=>'ybc_blog'),$_smarty_tpl ) );?>
: <?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['author']->value['name'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>

                                </h1>
                            </div>
                        <?php }?>
                    <?php } else { ?>
                    <h1 class="page-heading product-listing"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Author: ','mod'=>'ybc_blog'),$_smarty_tpl ) );?>
"<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['author']->value['name'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"</h1>
                    <?php }?>
                <?php }?>
            <?php } elseif ($_smarty_tpl->tpl_vars['month']->value) {?>
                <h1 class="page-heading product-listing"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Posted in : ','mod'=>'ybc_blog'),$_smarty_tpl ) );?>
"<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['month']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"</h1>
            <?php } elseif ($_smarty_tpl->tpl_vars['year']->value) {?>
                <h1 class="page-heading product-listing"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Posted in: ','mod'=>'ybc_blog'),$_smarty_tpl ) );?>
"<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['year']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"</h1>
            <?php }?>
            
            <?php if (!($_smarty_tpl->tpl_vars['blog_category']->value && (!(isset($_smarty_tpl->tpl_vars['blog_category']->value['enabled'])) || (isset($_smarty_tpl->tpl_vars['blog_category']->value['enabled'])) && !$_smarty_tpl->tpl_vars['blog_category']->value['enabled'])) && ($_smarty_tpl->tpl_vars['blog_category']->value || $_smarty_tpl->tpl_vars['blog_tag']->value || $_smarty_tpl->tpl_vars['blog_search']->value || $_smarty_tpl->tpl_vars['author']->value || $_smarty_tpl->tpl_vars['is_main_page']->value || $_smarty_tpl->tpl_vars['blog_latest']->value || $_smarty_tpl->tpl_vars['blog_featured']->value || $_smarty_tpl->tpl_vars['blog_popular']->value || $_smarty_tpl->tpl_vars['month']->value || $_smarty_tpl->tpl_vars['year']->value) && (!$_smarty_tpl->tpl_vars['author']->value || ($_smarty_tpl->tpl_vars['author']->value && !(isset($_smarty_tpl->tpl_vars['author']->value['disabled']))))) {?>
                <?php if ((isset($_smarty_tpl->tpl_vars['blog_posts']->value)) && $_smarty_tpl->tpl_vars['blog_posts']->value) {?>
                    <div>
                        <div id="js-post-list-top" class="row post-selection">
                            <div class="col-md-6 hidden-sm-down total-products">&nbsp;</div>
                            <div class="col-md-6">
                                <span class="col-sm-3 col-md-3 hidden-sm-down sort-by"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Sort by:','mod'=>'ybc_blog'),$_smarty_tpl ) );?>
</span>
                                <div class="col-sm-9 col-xs-8 col-md-9 products-sort-order dropdown">
                                    <select class="select" name="ybc_sort_by_posts">
                                        <option value="id_post" selected="selected"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Latest post','mod'=>'ybc_blog'),$_smarty_tpl ) );?>
</option>
                                        <option value="sort_order"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Sort order','mod'=>'ybc_blog'),$_smarty_tpl ) );?>
</option>
                                        <option value="click_number"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Popular post','mod'=>'ybc_blog'),$_smarty_tpl ) );?>
</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="ets_blog_loading sort">
                            <span id="squaresWaveG">
                                <span id="squaresWaveG_1" class="squaresWaveG"></span>
                                <span id="squaresWaveG_2" class="squaresWaveG"></span>
                                <span id="squaresWaveG_3" class="squaresWaveG"></span>
                                <span id="squaresWaveG_4" class="squaresWaveG"></span>
                                <span id="squaresWaveG_5" class="squaresWaveG"></span>
                            </span>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <ul class="ybc-blog-list row <?php if ($_smarty_tpl->tpl_vars['is_main_page']->value) {?>blog-main-page<?php }?>">
                        <?php $_smarty_tpl->_assignInScope('first_post', true);?>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['blog_posts']->value, 'post');
$_smarty_tpl->tpl_vars['post']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['post']->value) {
$_smarty_tpl->tpl_vars['post']->do_else = false;
?>            
                            <li>                         
                                <div class="post-wrapper">
                                    <?php if ($_smarty_tpl->tpl_vars['is_main_page']->value && $_smarty_tpl->tpl_vars['first_post']->value && ($_smarty_tpl->tpl_vars['blog_layout']->value == 'large_list' || $_smarty_tpl->tpl_vars['blog_layout']->value == 'large_grid')) {?>
                                        <?php if ($_smarty_tpl->tpl_vars['post']->value['image']) {?>
                                            <a class="ybc_item_img<?php if ((isset($_smarty_tpl->tpl_vars['blog_config']->value['YBC_BLOG_LAZY_LOAD'])) && $_smarty_tpl->tpl_vars['blog_config']->value['YBC_BLOG_LAZY_LOAD']) {?> ybc_item_img_ladyload<?php }?>" href="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['post']->value['link'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
">
                                                <img title="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['post']->value['title'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" src="<?php if ((isset($_smarty_tpl->tpl_vars['blog_config']->value['YBC_BLOG_LAZY_LOAD'])) && $_smarty_tpl->tpl_vars['blog_config']->value['YBC_BLOG_LAZY_LOAD']) {
echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['link']->value->getMediaLink(((string)(defined('_MODULE_DIR_') ? constant('_MODULE_DIR_') : null))."ybc_blog/views/img/bg-grey.png"),'html','UTF-8' )), ENT_QUOTES, 'UTF-8');
} else {
echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['post']->value['image'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');
}?>" alt="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['post']->value['title'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" <?php if ((isset($_smarty_tpl->tpl_vars['blog_config']->value['YBC_BLOG_LAZY_LOAD'])) && $_smarty_tpl->tpl_vars['blog_config']->value['YBC_BLOG_LAZY_LOAD']) {?> data-original="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['post']->value['image'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" class="lazyload"<?php }?> />
                                                <?php if ((isset($_smarty_tpl->tpl_vars['blog_config']->value['YBC_BLOG_LAZY_LOAD'])) && $_smarty_tpl->tpl_vars['blog_config']->value['YBC_BLOG_LAZY_LOAD']) {?>
                                                 <svg width="<?php echo htmlspecialchars((string) Configuration::get(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( 'YBC_BLOG_IMAGE_BLOG_WIDTH','html','UTF-8' ))), ENT_QUOTES, 'UTF-8');?>
" height="<?php echo htmlspecialchars((string) Configuration::get(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( 'YBC_BLOG_IMAGE_BLOG_HEIGHT','html','UTF-8' ))), ENT_QUOTES, 'UTF-8');?>
" style="width: 100%;height: auto">
                                                 </svg>
                                                 <?php }?>
                                            </a>                              
                                        <?php } elseif ($_smarty_tpl->tpl_vars['post']->value['thumb']) {?>
                                            <a class="ybc_item_img<?php if ((isset($_smarty_tpl->tpl_vars['blog_config']->value['YBC_BLOG_LAZY_LOAD'])) && $_smarty_tpl->tpl_vars['blog_config']->value['YBC_BLOG_LAZY_LOAD']) {?> ybc_item_img_ladyload<?php }?>" href="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['post']->value['link'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
">
                                                <img title="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['post']->value['title'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" src="<?php if ((isset($_smarty_tpl->tpl_vars['blog_config']->value['YBC_BLOG_LAZY_LOAD'])) && $_smarty_tpl->tpl_vars['blog_config']->value['YBC_BLOG_LAZY_LOAD']) {
echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['link']->value->getMediaLink(((string)(defined('_MODULE_DIR_') ? constant('_MODULE_DIR_') : null))."ybc_blog/views/img/bg-grey.png"),'html','UTF-8' )), ENT_QUOTES, 'UTF-8');
} else {
echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['post']->value['thumb'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');
}?>" alt="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['post']->value['title'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" <?php if ((isset($_smarty_tpl->tpl_vars['blog_config']->value['YBC_BLOG_LAZY_LOAD'])) && $_smarty_tpl->tpl_vars['blog_config']->value['YBC_BLOG_LAZY_LOAD']) {?> data-original="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['post']->value['thumb'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" class="lazyload"<?php }?> />
                                                <?php if ((isset($_smarty_tpl->tpl_vars['blog_config']->value['YBC_BLOG_LAZY_LOAD'])) && $_smarty_tpl->tpl_vars['blog_config']->value['YBC_BLOG_LAZY_LOAD']) {?>
                                                 <svg width="<?php echo htmlspecialchars((string) Configuration::get(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( 'YBC_BLOG_IMAGE_BLOG_THUMB_WIDTH','html','UTF-8' ))), ENT_QUOTES, 'UTF-8');?>
" height="<?php echo htmlspecialchars((string) Configuration::get(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( 'YBC_BLOG_IMAGE_BLOG_THUMB_HEIGHT','html','UTF-8' ))), ENT_QUOTES, 'UTF-8');?>
" style="width: 100%;height: auto">
                                                 </svg>
                                                 <?php }?>
                                            </a>
                                        <?php }?>
                                        <?php $_smarty_tpl->_assignInScope('first_post', false);?>
                                    <?php } elseif ($_smarty_tpl->tpl_vars['post']->value['thumb']) {?>
                                        <a class="ybc_item_img<?php if ((isset($_smarty_tpl->tpl_vars['blog_config']->value['YBC_BLOG_LAZY_LOAD'])) && $_smarty_tpl->tpl_vars['blog_config']->value['YBC_BLOG_LAZY_LOAD']) {?> ybc_item_img_ladyload<?php }?>" href="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['post']->value['link'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
">
                                            <img title="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['post']->value['title'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" src="<?php if ((isset($_smarty_tpl->tpl_vars['blog_config']->value['YBC_BLOG_LAZY_LOAD'])) && $_smarty_tpl->tpl_vars['blog_config']->value['YBC_BLOG_LAZY_LOAD']) {
echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['link']->value->getMediaLink(((string)(defined('_MODULE_DIR_') ? constant('_MODULE_DIR_') : null))."ybc_blog/views/img/bg-grey.png"),'html','UTF-8' )), ENT_QUOTES, 'UTF-8');
} else {
echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['post']->value['thumb'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');
}?>" alt="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['post']->value['title'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" <?php if ((isset($_smarty_tpl->tpl_vars['blog_config']->value['YBC_BLOG_LAZY_LOAD'])) && $_smarty_tpl->tpl_vars['blog_config']->value['YBC_BLOG_LAZY_LOAD']) {?> data-original="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['post']->value['thumb'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" class="lazyload"<?php }?> />
                                            <?php if ((isset($_smarty_tpl->tpl_vars['blog_config']->value['YBC_BLOG_LAZY_LOAD'])) && $_smarty_tpl->tpl_vars['blog_config']->value['YBC_BLOG_LAZY_LOAD']) {?>
                                                 <svg width="<?php echo htmlspecialchars((string) Configuration::get(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( 'YBC_BLOG_IMAGE_BLOG_THUMB_WIDTH','html','UTF-8' ))), ENT_QUOTES, 'UTF-8');?>
" height="<?php echo htmlspecialchars((string) Configuration::get(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( 'YBC_BLOG_IMAGE_BLOG_THUMB_HEIGHT','html','UTF-8' ))), ENT_QUOTES, 'UTF-8');?>
" style="width: 100%;height: auto">
                                                 </svg>
                                                 <?php }?>
                                        </a>
                                    <?php }?>
                                    <div class="ybc-blog-wrapper-content">
                                    <div class="ybc-blog-wrapper-content-main">
                                        <a class="ybc_title_block" href="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['post']->value['link'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['post']->value['title'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
</a>
                                        <?php if ($_smarty_tpl->tpl_vars['show_categories']->value && $_smarty_tpl->tpl_vars['post']->value['categories']) {?>
                                            <div class="ybc-blog-sidear-post-meta"> 
                                                <?php if (!$_smarty_tpl->tpl_vars['date_format']->value) {
$_smarty_tpl->_assignInScope('date_format', 'F jS Y');
}?>
                                                <?php if ($_smarty_tpl->tpl_vars['show_categories']->value && $_smarty_tpl->tpl_vars['post']->value['categories']) {?>
                                                    <div class="ybc-blog-categories">
                                                        <?php $_smarty_tpl->_assignInScope('ik', 0);?>
                                                        <?php $_smarty_tpl->_assignInScope('totalCat', count($_smarty_tpl->tpl_vars['post']->value['categories']));?>
                                                        <span class="be-label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Posted in','mod'=>'ybc_blog'),$_smarty_tpl ) );?>
: </span>
                                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['post']->value['categories'], 'cat');
$_smarty_tpl->tpl_vars['cat']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['cat']->value) {
$_smarty_tpl->tpl_vars['cat']->do_else = false;
?>
                                                            <?php $_smarty_tpl->_assignInScope('ik', $_smarty_tpl->tpl_vars['ik']->value+1);?>                                        
                                                            <a href="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['cat']->value['link'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( ucfirst($_smarty_tpl->tpl_vars['cat']->value['title']),'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
</a><?php if ($_smarty_tpl->tpl_vars['ik']->value < $_smarty_tpl->tpl_vars['totalCat']->value) {?>, <?php }?>
                                                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                                    </div>
                                                <?php }?>
                                            </div> 
                                        <?php }?>
                                        <div class="ybc-blog-latest-toolbar">	
        									<?php if ($_smarty_tpl->tpl_vars['show_views']->value) {?>                    
                                                    <span class="ybc-blog-latest-toolbar-views" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Page views','mod'=>'ybc_blog'),$_smarty_tpl ) );?>
">
                                                        <?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['post']->value['click_number'] )), ENT_QUOTES, 'UTF-8');?>

                                                        <?php if ($_smarty_tpl->tpl_vars['post']->value['click_number'] != 1) {?><span>
                                                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Views','mod'=>'ybc_blog'),$_smarty_tpl ) );?>
</span>
                                                        <?php } else { ?>
                                                            <span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'View','mod'=>'ybc_blog'),$_smarty_tpl ) );?>
</span>
                                                        <?php }?>
                                                    </span>
                                            <?php }?> 
                                            <?php if ($_smarty_tpl->tpl_vars['allow_rating']->value && $_smarty_tpl->tpl_vars['post']->value['total_review']) {?>
                                                 <div class="blog_rating_wrapper">
                                                     
                                                     <span class="total_views"><?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['post']->value['total_review'] )), ENT_QUOTES, 'UTF-8');?>
</span>
                                                     <span>
                                                        <?php if ($_smarty_tpl->tpl_vars['post']->value['total_review'] != 1) {?>
                                                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Comments','mod'=>'ybc_blog'),$_smarty_tpl ) );?>

                                                        <?php } else { ?>
                                                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Comment','mod'=>'ybc_blog'),$_smarty_tpl ) );?>

                                                        <?php }?>
                                                    </span>
                                                    <?php if ($_smarty_tpl->tpl_vars['allow_rating']->value && (isset($_smarty_tpl->tpl_vars['post']->value['everage_rating'])) && $_smarty_tpl->tpl_vars['post']->value['everage_rating']) {?>
                                                        <?php $_smarty_tpl->_assignInScope('everage_rating', $_smarty_tpl->tpl_vars['post']->value['everage_rating']);?>
                                                        <div class="blog-extra-item be-rating-block item">
                                                            <div class="blog_rating_wrapper">
                                                                <div class="ybc_blog_review" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Average rating','mod'=>'ybc_blog'),$_smarty_tpl ) );?>
">
                                                                    <?php
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? $_smarty_tpl->tpl_vars['everage_rating']->value+1 - (1) : 1-($_smarty_tpl->tpl_vars['everage_rating']->value)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = 1, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration === 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration === $_smarty_tpl->tpl_vars['i']->total;?>
                                                                        <?php if ($_smarty_tpl->tpl_vars['i']->value <= $_smarty_tpl->tpl_vars['everage_rating']->value) {?>
                                                                            <div class="star star_on"></div>
                                                                        <?php } else { ?>
                                                                            <div class="star star_on_<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['i']->value-$_smarty_tpl->tpl_vars['everage_rating']->value)*call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( 10 )), ENT_QUOTES, 'UTF-8');?>
"></div>
                                                                        <?php }?>
                                                                    <?php }
}
?>
                                                                    <?php if ($_smarty_tpl->tpl_vars['everage_rating']->value < 5) {?>
                                                                        <?php
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? 5+1 - ($_smarty_tpl->tpl_vars['everage_rating']->value+1) : $_smarty_tpl->tpl_vars['everage_rating']->value+1-(5)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['everage_rating']->value+1, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration === 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration === $_smarty_tpl->tpl_vars['i']->total;?>
                                                                            <div class="star"></div>
                                                                        <?php }
}
?>
                                                                    <?php }?>
                                                                    <meta itemprop="worstRating" content="0"/>
                                                                    (<span class="ybc-blog-rating-value"  itemprop="ratingValue"><?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( number_format((float)$_smarty_tpl->tpl_vars['everage_rating']->value,1,'.',''),'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
</span>)
                                                                    <meta itemprop="bestRating" content="5"/>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    <?php }?> 
                                                 </div>
                                            <?php }?>
                                            <?php if ($_smarty_tpl->tpl_vars['allow_like']->value) {?>
                                                <span title="<?php if ($_smarty_tpl->tpl_vars['post']->value['liked']) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Liked','mod'=>'ybc_blog'),$_smarty_tpl ) );
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Like this post','mod'=>'ybc_blog'),$_smarty_tpl ) );
}?>" class="item ybc-blog-like-span ybc-blog-like-span-<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['post']->value['id_post'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
 <?php if ($_smarty_tpl->tpl_vars['post']->value['liked']) {?>active<?php }?>"  data-id-post="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['post']->value['id_post'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
">                        
                                                    <span class="blog-post-total-like ben_<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['post']->value['id_post'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['post']->value['likes'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
</span>
                                                    <span class="blog-post-like-text blog-post-like-text-<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['post']->value['id_post'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"><span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Liked','mod'=>'ybc_blog'),$_smarty_tpl ) );?>
</span></span>
                                                </span> 
                                            <?php }?>                     
                                            
                                        </div>
                                        <div class="blog_description">
                                             <?php if ($_smarty_tpl->tpl_vars['post']->value['short_description']) {?>
                                                <p><?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'truncate' ][ 0 ], array( strip_tags((string) $_smarty_tpl->tpl_vars['post']->value['short_description']),500,'...' )),'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
</p>
                                            <?php } elseif ($_smarty_tpl->tpl_vars['post']->value['description']) {?>
                                                <p><?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'truncate' ][ 0 ], array( strip_tags((string) $_smarty_tpl->tpl_vars['post']->value['description']),500,'...' )),'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
</p>
                                            <?php }?>                                  
                                        </div>
                                        <a class="read_more" href="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['post']->value['link'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"><?php if ($_smarty_tpl->tpl_vars['blog_config']->value['YBC_BLOG_TEXT_READMORE']) {
echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['blog_config']->value['YBC_BLOG_TEXT_READMORE'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Read More','mod'=>'ybc_blog'),$_smarty_tpl ) );
}?></a>
                                      </div>
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
                        <div class="ets_blog_loading autoload">
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
                <?php } else { ?>
                    <p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No posts found','mod'=>'ybc_blog'),$_smarty_tpl ) );?>
</p>
                <?php }?>
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

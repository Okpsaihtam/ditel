<?php
/* Smarty version 4.3.4, created on 2026-01-05 19:28:59
  from '/home/www/public/modules/ybc_blog/views/templates/hook/product-post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_695c02ebd475a6_27758019',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b8436d33be956a4f3bcab90ed806ce3360e8d3aa' => 
    array (
      0 => '/home/www/public/modules/ybc_blog/views/templates/hook/product-post.tpl',
      1 => 1656021600,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_695c02ebd475a6_27758019 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
 type="text/javascript">
    var number_product_related_per_row =<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['blog_config']->value['YBC_BLOG_RELATED_PRODUCT_ROW'] )), ENT_QUOTES, 'UTF-8');?>
;
    var number_post_related_per_row =<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['blog_config']->value['YBC_BLOG_RELATED_POST_ROW_IN_PRODUCT'] )), ENT_QUOTES, 'UTF-8');?>
;
<?php echo '</script'; ?>
>
<?php if ($_smarty_tpl->tpl_vars['posts']->value) {?>
    <div class="ybc-blog-related-posts on_product ybc_blog_related_posts_type_<?php if ($_smarty_tpl->tpl_vars['blog_config']->value['YBC_BLOG_PRODUCT_POST_TYPE']) {
echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['blog_config']->value['YBC_BLOG_PRODUCT_POST_TYPE'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');
} else { ?>default<?php }?>">
        <h4 class="title_blog"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Related articles','mod'=>'ybc_blog'),$_smarty_tpl ) );?>
</h4>
        <div class="ybc-blog-related-posts-wrapper">
            <?php $_smarty_tpl->_assignInScope('post_row', call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['blog_config']->value['YBC_BLOG_RELATED_POST_ROW_IN_PRODUCT'] )));?>
            <ul class="ybc-blog-related-posts-list dt-<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['post_row']->value )), ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->tpl_vars['blog_config']->value['YBC_BLOG_PRODUCT_POST_TYPE'] == 'carousel') {?> owl-carousel<?php }?>">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['posts']->value, 'rpost');
$_smarty_tpl->tpl_vars['rpost']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['rpost']->value) {
$_smarty_tpl->tpl_vars['rpost']->do_else = false;
?>                                            
                    <li class="ybc-blog-related-posts-list-li col-xs-12 col-sm-4 col-lg-<?php echo htmlspecialchars((string) 12/call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['post_row']->value )), ENT_QUOTES, 'UTF-8');?>
 thumbnail-container">
                        <?php if ($_smarty_tpl->tpl_vars['rpost']->value['thumb']) {?>
                            <a class="ybc_item_img<?php if ((isset($_smarty_tpl->tpl_vars['blog_config']->value['YBC_BLOG_LAZY_LOAD'])) && $_smarty_tpl->tpl_vars['blog_config']->value['YBC_BLOG_LAZY_LOAD']) {?> ybc_item_img_ladyload<?php }?>" href="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['rpost']->value['link'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
">
                                <img src="<?php if ((isset($_smarty_tpl->tpl_vars['blog_config']->value['YBC_BLOG_LAZY_LOAD'])) && $_smarty_tpl->tpl_vars['blog_config']->value['YBC_BLOG_LAZY_LOAD']) {
echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['link']->value->getMediaLink(((string)(defined('_MODULE_DIR_') ? constant('_MODULE_DIR_') : null))."ybc_blog/views/img/bg-grey.png"),'html','UTF-8' )), ENT_QUOTES, 'UTF-8');
} else {
echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['rpost']->value['thumb'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');
}?>" alt="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['rpost']->value['title'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" <?php if ((isset($_smarty_tpl->tpl_vars['blog_config']->value['YBC_BLOG_LAZY_LOAD'])) && $_smarty_tpl->tpl_vars['blog_config']->value['YBC_BLOG_LAZY_LOAD']) {?> data-original="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['rpost']->value['thumb'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" class="lazyload"<?php }?> />
                                <?php if ((isset($_smarty_tpl->tpl_vars['blog_config']->value['YBC_BLOG_LAZY_LOAD'])) && $_smarty_tpl->tpl_vars['blog_config']->value['YBC_BLOG_LAZY_LOAD']) {?>
                                    <div class="loader_lady_custom"></div>
                                <?php }?>
                            </a>   
                                                                             
                        <?php }?>
                        <a class="ybc_title_block" href="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['rpost']->value['link'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['rpost']->value['title'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
</a>
                        <div class="ybc-blog-sidear-post-meta">
                            <?php if ($_smarty_tpl->tpl_vars['rpost']->value['categories']) {?>
                                <?php $_smarty_tpl->_assignInScope('ik', 0);?>
                                <?php $_smarty_tpl->_assignInScope('totalCat', count($_smarty_tpl->tpl_vars['rpost']->value['categories']));?>                        
                                <div class="ybc-blog-categories">
                                    <span class="be-label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Posted in','mod'=>'ybc_blog'),$_smarty_tpl ) );?>
: </span>
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rpost']->value['categories'], 'cat');
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
                            <span class="post-date"><?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( date($_smarty_tpl->tpl_vars['date_format']->value,strtotime($_smarty_tpl->tpl_vars['rpost']->value['datetime_added'])),'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
</span>
                        </div>
                        <?php if ($_smarty_tpl->tpl_vars['allowComments']->value || $_smarty_tpl->tpl_vars['show_views']->value || $_smarty_tpl->tpl_vars['allow_like']->value) {?>
                            <div class="ybc-blog-latest-toolbar">                                         
                                <?php if ($_smarty_tpl->tpl_vars['show_views']->value) {?>
                                    <span class="ybc-blog-latest-toolbar-views">
                                        <?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['rpost']->value['click_number'] )), ENT_QUOTES, 'UTF-8');?>

                                        <?php if ($_smarty_tpl->tpl_vars['rpost']->value['click_number'] != 1) {?>
                                            <span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'views','mod'=>'ybc_blog'),$_smarty_tpl ) );?>
</span>
                                        <?php } else { ?>
                                            <span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'view','mod'=>'ybc_blog'),$_smarty_tpl ) );?>
</span>
                                        <?php }?>
                                    </span> 
                                <?php }?>                       
                                <?php if ($_smarty_tpl->tpl_vars['allow_like']->value) {?>
                                    <span class="ybc-blog-like-span ybc-blog-like-span-<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['rpost']->value['id_post'] )), ENT_QUOTES, 'UTF-8');?>
 <?php if ((isset($_smarty_tpl->tpl_vars['rpost']->value['liked'])) && $_smarty_tpl->tpl_vars['rpost']->value['liked']) {?>active<?php }?>"  data-id-post="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['rpost']->value['id_post'] )), ENT_QUOTES, 'UTF-8');?>
">                        
                                        <span class="ben_<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['rpost']->value['id_post'] )), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['rpost']->value['likes'] )), ENT_QUOTES, 'UTF-8');?>
</span>
                                        <span class="blog-post-like-text blog-post-like-text-<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['rpost']->value['id_post'] )), ENT_QUOTES, 'UTF-8');?>
">
                                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Liked','mod'=>'ybc_blog'),$_smarty_tpl ) );?>

                                        </span>
                                    </span>  
                                <?php }?>
                                <?php if ($_smarty_tpl->tpl_vars['allowComments']->value && $_smarty_tpl->tpl_vars['rpost']->value['comments_num'] > 0) {?>
                                    <span class="ybc-blog-latest-toolbar-comments"><?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['rpost']->value['comments_num'] )), ENT_QUOTES, 'UTF-8');?>

                                        <?php if ($_smarty_tpl->tpl_vars['rpost']->value['comments_num'] != 1) {?>
                                            <span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'comments','mod'=>'ybc_blog'),$_smarty_tpl ) );?>
</span>
                                        <?php } else { ?>
                                            <span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'comment','mod'=>'ybc_blog'),$_smarty_tpl ) );?>
</span>
                                        <?php }?>
                                    </span> 
                                <?php }?>
                            </div>
                        <?php }?> 
                        <?php if ($_smarty_tpl->tpl_vars['display_desc']->value) {?>
                            <?php if ($_smarty_tpl->tpl_vars['rpost']->value['short_description']) {?>
                                <div class="blog_description"><?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'truncate' ][ 0 ], array( strip_tags((string) $_smarty_tpl->tpl_vars['rpost']->value['short_description']),120,'...' )),'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
</div>
                            <?php } elseif ($_smarty_tpl->tpl_vars['rpost']->value['description']) {?>
                                <div class="blog_description"><?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'truncate' ][ 0 ], array( strip_tags((string) $_smarty_tpl->tpl_vars['rpost']->value['description']),120,'...' )),'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
</div>
                            <?php }?>
                        <?php }?>
                        <a class="read_more" href="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['rpost']->value['link'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"><?php if ($_smarty_tpl->tpl_vars['blog_config']->value['YBC_BLOG_TEXT_READMORE']) {
echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['blog_config']->value['YBC_BLOG_TEXT_READMORE'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Read More','mod'=>'ybc_blog'),$_smarty_tpl ) );
}?></a>    
                    </li>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>                        
            </ul>
        </div>
    </div>
<?php }
}
}

<?php
/* Smarty version 4.3.4, created on 2026-01-05 14:49:55
  from '/home/www/public/modules/ybc_blog/views/templates/hook/latest_posts_block.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_695bc183d1b9e1_77550415',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3e9eb2cf35c1719f078847ea5a2131a75da2854e' => 
    array (
      0 => '/home/www/public/modules/ybc_blog/views/templates/hook/latest_posts_block.tpl',
      1 => 1656021600,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_695bc183d1b9e1_77550415 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['posts']->value) {?>
    <div class="block ybc_block_latest <?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['blog_config']->value['YBC_BLOG_RTL_CLASS'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
 <?php if ((isset($_smarty_tpl->tpl_vars['page']->value)) && $_smarty_tpl->tpl_vars['page']->value) {?>page_<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['page']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');
} else { ?>page_blog<?php }?> <?php if ((isset($_smarty_tpl->tpl_vars['page']->value)) && $_smarty_tpl->tpl_vars['page']->value == 'home') {
if ((isset($_smarty_tpl->tpl_vars['blog_config']->value['YBC_BLOG_HOME_POST_TYPE'])) && $_smarty_tpl->tpl_vars['blog_config']->value['YBC_BLOG_HOME_POST_TYPE'] == 'default' || count($_smarty_tpl->tpl_vars['posts']->value) <= 1) {?> ybc_block_default<?php } else { ?> ybc_block_slider<?php }
} else {
if ((isset($_smarty_tpl->tpl_vars['blog_config']->value['YBC_BLOG_SIDEBAR_POST_TYPE'])) && $_smarty_tpl->tpl_vars['blog_config']->value['YBC_BLOG_SIDEBAR_POST_TYPE'] == 'default' || count($_smarty_tpl->tpl_vars['posts']->value) <= 1) {?> ybc_block_default<?php } else { ?> ybc_block_slider<?php }
}?>">
        <h4 class="title_blog title_block"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Latest posts','mod'=>'ybc_blog'),$_smarty_tpl ) );?>
</h4>
        <?php $_smarty_tpl->_assignInScope('product_row', call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['blog_config']->value['YBC_BLOG_HOME_PER_ROW'] )));?>
        <div class="block_content row">
            <ul class="owl-rtl <?php if (count($_smarty_tpl->tpl_vars['posts']->value) > 1) {
if ((isset($_smarty_tpl->tpl_vars['page']->value)) && $_smarty_tpl->tpl_vars['page']->value == 'home' && $_smarty_tpl->tpl_vars['blog_config']->value['YBC_BLOG_HOME_POST_TYPE'] != 'default') {?>owl-carousel<?php } elseif ((!(isset($_smarty_tpl->tpl_vars['page']->value)) || ((isset($_smarty_tpl->tpl_vars['page']->value)) && $_smarty_tpl->tpl_vars['page']->value != 'home')) && $_smarty_tpl->tpl_vars['blog_config']->value['YBC_BLOG_SIDEBAR_POST_TYPE'] != 'default') {?>owl-carousel<?php }
}?>">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['posts']->value, 'post');
$_smarty_tpl->tpl_vars['post']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['post']->value) {
$_smarty_tpl->tpl_vars['post']->do_else = false;
?>
                    <li <?php if ($_smarty_tpl->tpl_vars['page']->value == 'home') {?>class="col-xs-12 col-sm-4 col-lg-<?php echo htmlspecialchars((string) 12/call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['product_row']->value )), ENT_QUOTES, 'UTF-8');?>
"<?php }?>> 
                        <?php if ($_smarty_tpl->tpl_vars['post']->value['thumb']) {?>
                            <a class="ybc_item_img" href="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['post']->value['link'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
">
                                <img src="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['post']->value['thumb'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['post']->value['title'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['post']->value['title'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" />
                            </a>
                        <?php }?>
                        <div class="ybc-blog-latest-post-content">
                            <a class="ybc_title_block" href="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['post']->value['link'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['post']->value['title'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
</a>
                            <div class="ybc-blog-sidear-post-meta">
                                <?php if ((isset($_smarty_tpl->tpl_vars['post']->value['categories'])) && $_smarty_tpl->tpl_vars['post']->value['categories']) {?>
                                    <div class="ybc-blog-categories">
                                        <?php $_smarty_tpl->_assignInScope('ik', 0);?>
                                        <?php $_smarty_tpl->_assignInScope('totalCat', count($_smarty_tpl->tpl_vars['post']->value['categories']));?>                        
                                        <div class="be-categories">
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
</a><?php if ($_smarty_tpl->tpl_vars['ik']->value < $_smarty_tpl->tpl_vars['totalCat']->value) {?><span class="comma">, </span><?php }?>
                                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                        </div>
                                    </div>
                                <?php }?>
                                <span class="post-date"><?php if ((isset($_smarty_tpl->tpl_vars['blog_config']->value['YBC_BLOG_DATE_FORMAT'])) && $_smarty_tpl->tpl_vars['blog_config']->value['YBC_BLOG_DATE_FORMAT']) {
echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( date($_smarty_tpl->tpl_vars['blog_config']->value['YBC_BLOG_DATE_FORMAT'],strtotime($_smarty_tpl->tpl_vars['post']->value['datetime_added'])),'html','UTF-8' )), ENT_QUOTES, 'UTF-8');
} else {
echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( date('F jS Y',strtotime($_smarty_tpl->tpl_vars['post']->value['datetime_added'])),'html','UTF-8' )), ENT_QUOTES, 'UTF-8');
}?></span>
                            </div>
                            <?php if ($_smarty_tpl->tpl_vars['allowComments']->value || $_smarty_tpl->tpl_vars['show_views']->value || $_smarty_tpl->tpl_vars['allow_like']->value) {?> 
                                <div class="ybc-blog-latest-toolbar">
                                    <?php if ($_smarty_tpl->tpl_vars['show_views']->value) {?>
                                        <span class="ybc-blog-latest-toolbar-views"><?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['post']->value['click_number'] )), ENT_QUOTES, 'UTF-8');?>
 <?php if ($_smarty_tpl->tpl_vars['post']->value['click_number'] != 1) {?><span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'views','mod'=>'ybc_blog'),$_smarty_tpl ) );?>
</span><?php } else { ?><span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'view','mod'=>'ybc_blog'),$_smarty_tpl ) );?>
</span><?php }?></span> 
                                    <?php }?>   
                                    <?php if ($_smarty_tpl->tpl_vars['allowComments']->value && $_smarty_tpl->tpl_vars['post']->value['comments_num'] > 0) {?>
                                        <span class="ybc-blog-latest-toolbar-comments"><?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['post']->value['comments_num'] )), ENT_QUOTES, 'UTF-8');?>
 <?php if ($_smarty_tpl->tpl_vars['post']->value['comments_num'] != 1) {?><span>
                                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'comments','mod'=>'ybc_blog'),$_smarty_tpl ) );?>
</span><?php } else { ?><span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'comment','mod'=>'ybc_blog'),$_smarty_tpl ) );?>
</span><?php }?></span> 
                                    <?php }?>                                 
                                    <?php if ($_smarty_tpl->tpl_vars['allow_like']->value) {?>
                                        <span title="<?php if ($_smarty_tpl->tpl_vars['post']->value['liked']) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Liked','mod'=>'ybc_blog'),$_smarty_tpl ) );
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Like this post','mod'=>'ybc_blog'),$_smarty_tpl ) );
}?>" class="ybc-blog-like-span ybc-blog-like-span-<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['post']->value['id_post'] )), ENT_QUOTES, 'UTF-8');?>
 <?php if ($_smarty_tpl->tpl_vars['post']->value['liked']) {?>active<?php }?>"  data-id-post="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['post']->value['id_post'] )), ENT_QUOTES, 'UTF-8');?>
">                        
                                            <span class="ben_<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['post']->value['id_post'] )), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['post']->value['likes'] )), ENT_QUOTES, 'UTF-8');?>
</span>
                                            <span class="blog-post-like-text blog-post-like-text-<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['post']->value['id_post'] )), ENT_QUOTES, 'UTF-8');?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Liked','mod'=>'ybc_blog'),$_smarty_tpl ) );?>
</span>
                                            
                                        </span> 
                                    <?php }?>
                                    
                                </div>
                            <?php }?> 
                            <?php if ($_smarty_tpl->tpl_vars['display_desc']->value) {?>                          
                                <?php if ($_smarty_tpl->tpl_vars['post']->value['short_description']) {?>
                                    <div class="blog_description"><p>
                                        <?php if ((isset($_smarty_tpl->tpl_vars['blog_config']->value['YBC_BLOG_POST_EXCERPT_LENGTH'])) && (int)$_smarty_tpl->tpl_vars['blog_config']->value['YBC_BLOG_POST_EXCERPT_LENGTH'] > 0) {?>
                                            <?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'truncate' ][ 0 ], array( strip_tags((string) $_smarty_tpl->tpl_vars['post']->value['short_description']),(int)$_smarty_tpl->tpl_vars['blog_config']->value['YBC_BLOG_POST_EXCERPT_LENGTH'],'...' )),'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>

                                        <?php } else { ?>
                                            <?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( strip_tags((string) $_smarty_tpl->tpl_vars['post']->value['short_description']),'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>

                                        <?php }?></p>
                                    </div>
                                <?php } elseif ($_smarty_tpl->tpl_vars['post']->value['description']) {?>
                                    <div class="blog_description">
                                        <?php if ((isset($_smarty_tpl->tpl_vars['blog_config']->value['YBC_BLOG_POST_EXCERPT_LENGTH'])) && (int)$_smarty_tpl->tpl_vars['blog_config']->value['YBC_BLOG_POST_EXCERPT_LENGTH'] > 0) {?>
                                            <?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'truncate' ][ 0 ], array( strip_tags((string) $_smarty_tpl->tpl_vars['post']->value['description']),120,'...' )),'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>

                                        <?php } else { ?>
                                            <?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( strip_tags((string) $_smarty_tpl->tpl_vars['post']->value['description']),'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>

                                        <?php }?>                                
                                    </div>
                                <?php }?>
                            <?php }?>
                            <a class="read_more" href="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['post']->value['link'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"><?php if ($_smarty_tpl->tpl_vars['blog_config']->value['YBC_BLOG_TEXT_READMORE']) {
echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['blog_config']->value['YBC_BLOG_TEXT_READMORE'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Read More','mod'=>'ybc_blog'),$_smarty_tpl ) );
}?></a>
                            
                            
                        </div>
                    </li>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </ul>
            <?php if ($_smarty_tpl->tpl_vars['blog_config']->value['YBC_BLOG_DISPLAY_BUTTON_ALL_HOMEPAGE'] || $_smarty_tpl->tpl_vars['page']->value != 'home') {?>
                <div class="blog_view_all_button">
                    <a href="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['latest_link']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" class="view_all_link"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'View all latest posts','mod'=>'ybc_blog'),$_smarty_tpl ) );?>
</a>
                </div>
            <?php }?>
        </div>
        <div class="clear"></div>
    </div>
    
<?php }
}
}

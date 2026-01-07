<?php
/* Smarty version 4.3.4, created on 2026-01-05 19:19:52
  from 'module:ybc_blogviewstemplatesfrontsingle_post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_695c00c8ad50c1_74311321',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '72a36c8b2eabb72caead49734388b1d867572d03' => 
    array (
      0 => 'module:ybc_blogviewstemplatesfrontsingle_post.tpl',
      1 => 1656021600,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_695c00c8ad50c1_74311321 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_203624519695c00c89c7be4_53910132', 'product_activation');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1933091120695c00c89d80a7_28629716', "content");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "page.tpl");
}
/* {block 'product_activation'} */
class Block_203624519695c00c89c7be4_53910132 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_activation' => 
  array (
    0 => 'Block_203624519695c00c89c7be4_53910132',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<?php if ($_smarty_tpl->tpl_vars['blog_post']->value['enabled'] == -2 && (isset($_GET['preview']))) {?>
    <div class="alert alert-warning row" role="alert">
        <div class="container">
          <div class="row">
                <div class="col-sm-12">
                    <i class="material-icons float-xs-left icon-preview">&#xE001;</i>
                    <p class="alert-text"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'This post is not visible to your customers.','mod'=>'ybc_blog'),$_smarty_tpl ) );?>
</p>
              </div>
          </div>
        </div>
    </div>
<?php }
}
}
/* {/block 'product_activation'} */
/* {block "content"} */
class Block_1933091120695c00c89d80a7_28629716 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1933091120695c00c89d80a7_28629716',
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
    <?php if ($_smarty_tpl->tpl_vars['blog_config']->value['YBC_BLOG_CAPTCHA_TYPE'] == 'google3') {?>
        <?php echo '<script'; ?>
 src="https://www.google.com/recaptcha/api.js?render=<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['blog_config']->value['YBC_BLOG_CAPTCHA_SITE_KEY3'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"><?php echo '</script'; ?>
>
    <?php }?>
    <?php if ((isset($_smarty_tpl->tpl_vars['blog_post']->value['enabled'])) && ($_smarty_tpl->tpl_vars['blog_post']->value['enabled'] == 1 || $_smarty_tpl->tpl_vars['blog_post']->value['pending'] == 1 || ($_smarty_tpl->tpl_vars['blog_post']->value['enabled'] == -2 && (isset($_GET['preview']))))) {?>
        <?php echo '<script'; ?>
 type="text/javascript">
            ybc_blog_report_url = '<?php echo $_smarty_tpl->tpl_vars['report_url']->value;?>
';
            ybc_blog_report_warning ="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Do you want to report this comment?','mod'=>'ybc_blog'),$_smarty_tpl ) );?>
";
            ybc_blog_error = "<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'There was a problem while submitting your report. Try again later','mod'=>'ybc_blog'),$_smarty_tpl ) );?>
";
            ybc_blog_delete_comment ="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Do you want to delete this comment?','mod'=>'ybc_blog'),$_smarty_tpl ) );?>
";  
            prettySkin = '<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'addslashes' ][ 0 ], array( $_smarty_tpl->tpl_vars['prettySkin']->value )),'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
';
            var placeholder_reply= "<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Enter your message...','mod'=>'ybc_blog'),$_smarty_tpl ) );?>
";
            prettyAutoPlay = false;
            var number_product_related_per_row =<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['blog_config']->value['YBC_BLOG_RELATED_PRODUCT_ROW'] )), ENT_QUOTES, 'UTF-8');?>
;
            var number_post_related_per_row =<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['blog_config']->value['YBC_BLOG_RELATED_POST_ROW'] )), ENT_QUOTES, 'UTF-8');?>
;
            var YBC_BLOG_LABEL_TABLE_OF_CONTENT ='<?php if ((isset($_smarty_tpl->tpl_vars['blog_config']->value['YBC_BLOG_LABEL_TABLE_OF_CONTENT'])) && $_smarty_tpl->tpl_vars['blog_config']->value['YBC_BLOG_LABEL_TABLE_OF_CONTENT']) {
echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['blog_config']->value['YBC_BLOG_LABEL_TABLE_OF_CONTENT'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Table of contents','mod'=>'ybc_blog','js'=>1),$_smarty_tpl ) );
}?>'
        <?php echo '</script'; ?>
>
        <?php if ($_smarty_tpl->tpl_vars['blog_post']->value['enabled'] == -1) {?>
            <div class="alert alert-warning">
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Your post is in preview process, it will be published once our moderator approve it','mod'=>'ybc_blog'),$_smarty_tpl ) );?>

            </div>
        <?php }?>
        <div class="ybc_blog_layout_<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['blog_layout']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
 ybc-blog-wrapper-detail" itemscope itemType="http://schema.org/newsarticle">
            <div itemprop="publisher" itemtype="http://schema.org/Organization" itemscope="">
                <meta itemprop="name" content="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( Configuration::get('PS_SHOP_NAME'),'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" />
                <?php if (Configuration::get('PS_LOGO')) {?>
                    <div itemprop="logo" itemscope itemtype="http://schema.org/ImageObject">
                        <meta itemprop="url" content="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['blog_config']->value['YBC_BLOG_SHOP_URI'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
img/<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( Configuration::get('PS_LOGO'),'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" />
                        <meta itemprop="width" content="200px" />
                        <meta itemprop="height" content="100px" />
                    </div>
                <?php }?>
            </div> 
            <?php if ($_smarty_tpl->tpl_vars['blog_post']->value['image']) {?>
                <div class="ybc_blog_img_wrapper" itemprop="image" itemscope itemtype="http://schema.org/ImageObject">
                    <?php if ($_smarty_tpl->tpl_vars['enable_slideshow']->value) {?><a href="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['blog_post']->value['image'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" class="prettyPhoto"><?php }?>
                    <div class="ybc_image-single<?php if ((isset($_smarty_tpl->tpl_vars['blog_config']->value['YBC_BLOG_LAZY_LOAD'])) && $_smarty_tpl->tpl_vars['blog_config']->value['YBC_BLOG_LAZY_LOAD']) {?> ybc_item_img_ladyload<?php }?>">                            
                        <img title="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['blog_post']->value['title'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" src="<?php if ((isset($_smarty_tpl->tpl_vars['blog_config']->value['YBC_BLOG_LAZY_LOAD'])) && $_smarty_tpl->tpl_vars['blog_config']->value['YBC_BLOG_LAZY_LOAD']) {
echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['link']->value->getMediaLink(((string)(defined('_MODULE_DIR_') ? constant('_MODULE_DIR_') : null))."ybc_blog/views/img/bg-grey.png"),'html','UTF-8' )), ENT_QUOTES, 'UTF-8');
} else {
echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['blog_post']->value['image'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');
}?>" alt="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['blog_post']->value['title'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" itemprop="url" <?php if ((isset($_smarty_tpl->tpl_vars['blog_config']->value['YBC_BLOG_LAZY_LOAD'])) && $_smarty_tpl->tpl_vars['blog_config']->value['YBC_BLOG_LAZY_LOAD']) {?> data-original="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['blog_post']->value['image'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" class="lazyload"<?php }?>/>
                    </div>
                    <meta itemprop="width" content="600px" />
                    <meta itemprop="height" content="300px" />
                    <?php if ($_smarty_tpl->tpl_vars['enable_slideshow']->value) {?></a><?php }?>
                </div>                        
             <?php }?>
             <div class="ybc-blog-wrapper-content<?php if ((isset($_smarty_tpl->tpl_vars['blog_config']->value['YBC_BLOG_SIDEBAR_POSITION'])) && $_smarty_tpl->tpl_vars['blog_config']->value['YBC_BLOG_SIDEBAR_POSITION'] == 'left') {?> content-right<?php } else { ?> content-left<?php }?>" >
            <?php if ($_smarty_tpl->tpl_vars['blog_post']->value) {?>
                <h1 class="page-heading product-listing" itemprop="mainEntityOfPage"><span  class="title_cat" itemprop="headline"><?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['blog_post']->value['title'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
</span></h1>
                <div class="post-details">
                    <div class="blog-extra">
                        <div class="ybc-blog-latest-toolbar">
                            <?php if ($_smarty_tpl->tpl_vars['show_views']->value) {?>                  
                                <span title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Page views','mod'=>'ybc_blog'),$_smarty_tpl ) );?>
" class="ybc-blog-latest-toolbar-views">
                                    <?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['blog_post']->value['click_number'] )), ENT_QUOTES, 'UTF-8');?>
 
                                    <?php if ($_smarty_tpl->tpl_vars['blog_post']->value['click_number'] != 1) {?>
                                        <span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Views','mod'=>'ybc_blog'),$_smarty_tpl ) );?>
</span>
                                    <?php } else { ?>
                                        <span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'View','mod'=>'ybc_blog'),$_smarty_tpl ) );?>
</span>
                                    <?php }?>
                                </span>
                            <?php }?> 
                            <?php if ($_smarty_tpl->tpl_vars['allow_like']->value) {?>
                                <span title="<?php if ($_smarty_tpl->tpl_vars['likedPost']->value) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Unlike this post','mod'=>'ybc_blog'),$_smarty_tpl ) );
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Like this post','mod'=>'ybc_blog'),$_smarty_tpl ) );
}?>" class="ybc-blog-like-span ybc-blog-like-span-<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['blog_post']->value['id_post'] )), ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->tpl_vars['likedPost']->value) {?> active<?php }?>"  data-id-post="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['blog_post']->value['id_post'] )), ENT_QUOTES, 'UTF-8');?>
">
                                    <span class="ben_<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['blog_post']->value['id_post'] )), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['blog_post']->value['likes'] )), ENT_QUOTES, 'UTF-8');?>
</span>
                                    <span class="blog-post-like-text blog-post-like-text-<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['blog_post']->value['id_post'] )), ENT_QUOTES, 'UTF-8');?>
"><span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Liked','mod'=>'ybc_blog'),$_smarty_tpl ) );?>
</span></span>
                                </span>  
                            <?php }?>
                            <?php if ($_smarty_tpl->tpl_vars['allow_rating']->value && $_smarty_tpl->tpl_vars['everage_rating']->value) {?>                      
                                <div class="blog_rating_wrapper">                            
                                    <?php if ($_smarty_tpl->tpl_vars['total_review']->value) {?>
                                        <span title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Comments','mod'=>'ybc_blog'),$_smarty_tpl ) );?>
" class="blog_rating_reviews">
                                             <span class="total_views"><?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['total_review']->value )), ENT_QUOTES, 'UTF-8');?>
</span>
                                             <span>
                                                <?php if ($_smarty_tpl->tpl_vars['total_review']->value != 1) {?>
                                                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Comments','mod'=>'ybc_blog'),$_smarty_tpl ) );?>

                                                <?php } else { ?>
                                                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Comment','mod'=>'ybc_blog'),$_smarty_tpl ) );?>

                                                <?php }?>
                                            </span>
                                        </span>
                                    <?php }?>
                                    <div title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Average rating','mod'=>'ybc_blog'),$_smarty_tpl ) );?>
" class="ybc_blog_review">
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
                                        <?php if (Ceil($_smarty_tpl->tpl_vars['everage_rating']->value) < 5) {?>
                                            <?php
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? 5+1 - (ceil($_smarty_tpl->tpl_vars['everage_rating']->value)+1) : ceil($_smarty_tpl->tpl_vars['everage_rating']->value)+1-(5)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = ceil($_smarty_tpl->tpl_vars['everage_rating']->value)+1, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration === 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration === $_smarty_tpl->tpl_vars['i']->total;?>
                                                <div class="star"></div>
                                            <?php }
}
?>
                                        <?php }?>
                                        <span class="ybc-blog-rating-value">(<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['everage_rating']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
)</span>                                               
                                    </div>
                                </div>
                            <?php }?>  
                            <?php if ($_smarty_tpl->tpl_vars['show_date']->value) {?>
                                <?php if (!$_smarty_tpl->tpl_vars['date_format']->value) {
$_smarty_tpl->_assignInScope('date_format', 'F jS Y');
}?>
                                <span class="post-date">
                                    <span class="be-label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Posted on','mod'=>'ybc_blog'),$_smarty_tpl ) );?>
: </span>
                                    <span><?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( date($_smarty_tpl->tpl_vars['date_format']->value,strtotime($_smarty_tpl->tpl_vars['blog_post']->value['datetime_added'])),'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
</span>
                                    <meta itemprop="datePublished" content="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( date('Y-m-d',strtotime($_smarty_tpl->tpl_vars['blog_post']->value['datetime_added'])),'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" />
                                    <meta itemprop="dateModified" content="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( date('Y-m-d',strtotime($_smarty_tpl->tpl_vars['blog_post']->value['datetime_modified'])),'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" />
                                </span>
                            <?php }?>
                            <?php if ($_smarty_tpl->tpl_vars['show_author']->value && (isset($_smarty_tpl->tpl_vars['blog_post']->value['employee'])) && $_smarty_tpl->tpl_vars['blog_post']->value['employee']) {?>
                                <div class="author-block" itemprop="author" itemscope itemtype="http://schema.org/Person">
                                    <span class="post-author-label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'By ','mod'=>'ybc_blog'),$_smarty_tpl ) );?>
</span>
                                    <a itemprop="url" href="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['blog_post']->value['author_link'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
">
                                        <span class="post-author-name" itemprop="name">
                                            <?php if ((isset($_smarty_tpl->tpl_vars['blog_post']->value['employee']['name'])) && $_smarty_tpl->tpl_vars['blog_post']->value['employee']['name']) {?>
                                                <?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( ucfirst($_smarty_tpl->tpl_vars['blog_post']->value['employee']['name']),'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>

                                            <?php } else { ?>
                                                <?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( ucfirst($_smarty_tpl->tpl_vars['blog_post']->value['employee']['firstname']),'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
 <?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( ucfirst($_smarty_tpl->tpl_vars['blog_post']->value['employee']['lastname']),'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>

                                            <?php }?>
                                        </span>
                                    </a>
                                </div>
                            <?php }?>
                            <?php if ((isset($_smarty_tpl->tpl_vars['blog_post']->value['link_edit'])) && $_smarty_tpl->tpl_vars['blog_post']->value['link_edit']) {?>
                                <a class="ybc-block-post-edit" href="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['blog_post']->value['link_edit'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Edit','mod'=>'ybc_blog'),$_smarty_tpl ) );?>
"><i class="fa fa-pencil" aria-hidden="true"></i>&nbsp;<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Edit','mod'=>'ybc_blog'),$_smarty_tpl ) );?>
</a>
                            <?php }?>
                            
                        </div>
                        <div class="ybc-blog-tags-social"> 
                        <?php if ($_smarty_tpl->tpl_vars['use_google_share']->value || $_smarty_tpl->tpl_vars['use_facebook_share']->value || $_smarty_tpl->tpl_vars['use_twitter_share']->value || $_smarty_tpl->tpl_vars['blog_config']->value['YBC_BLOG_ENABLE_PINTEREST_SHARE'] || $_smarty_tpl->tpl_vars['blog_config']->value['YBC_BLOG_ENABLE_LIKED_SHARE']) {?>
                            <div class="blog-extra-item blog-extra-facebook-share">
                                <ul>
                                    <?php if ($_smarty_tpl->tpl_vars['use_facebook_share']->value) {?>
                                        <li class="facebook icon-gray">
                                            <a target="_blank" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Share','mod'=>'ybc_blog'),$_smarty_tpl ) );?>
" class="text-hide" href="http://www.facebook.com/sharer.php?u=<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['post_url']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Share','mod'=>'ybc_blog'),$_smarty_tpl ) );?>
</a>
                                        </li>
                                    <?php }?>
                                    <?php if ($_smarty_tpl->tpl_vars['use_twitter_share']->value) {?>
                                        <li class="twitter icon-gray">
                                            <a target="_blank" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Twitter','mod'=>'ybc_blog'),$_smarty_tpl ) );?>
" class="text-hide" href="https://twitter.com/intent/tweet?text=<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['blog_post']->value['title'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
 <?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['post_url']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Twitter','mod'=>'ybc_blog'),$_smarty_tpl ) );?>
</a>
                                        </li>
                                    <?php }?>
                                    <?php if ($_smarty_tpl->tpl_vars['blog_config']->value['YBC_BLOG_ENABLE_PINTEREST_SHARE']) {?>
                                        <li class="pinterest icon-gray">
                                            <a target="_blank" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Pinterest','mod'=>'ybc_blog'),$_smarty_tpl ) );?>
" class="text-hide" href="http://www.pinterest.com/pin/create/button/?media=<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['blog_post']->value['image'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
&url=<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['post_url']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Pinterest','mod'=>'ybc_blog'),$_smarty_tpl ) );?>
</a>
                                        </li>
                                    <?php }?>
                                    <?php if ($_smarty_tpl->tpl_vars['blog_config']->value['YBC_BLOG_ENABLE_LIKED_SHARE']) {?>
                                        <li class="linkedin icon-gray">
                                            <a target="_blank" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'LinkedIn','mod'=>'ybc_blog'),$_smarty_tpl ) );?>
" class="text-hide" href="https://www.linkedin.com/shareArticle?mini=true&url=<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['post_url']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
&title=<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['blog_post']->value['title'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
&summary=<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'truncate' ][ 0 ], array( strip_tags((string) $_smarty_tpl->tpl_vars['blog_post']->value['short_description']),500 )),'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
&source=LinkedIn"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'LinkedIn','mod'=>'ybc_blog'),$_smarty_tpl ) );?>
</a>
                                        </li>
                                    <?php }?>
                                    <?php if ($_smarty_tpl->tpl_vars['blog_config']->value['YBC_BLOG_ENABLE_TUMBLR_SHARE']) {?>
                                        <li class="tumblr icon-gray">
                                            <a target="_blank" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Tumblr','mod'=>'ybc_blog'),$_smarty_tpl ) );?>
" class="text-hide" href="http://www.tumblr.com/share/link?url=<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['post_url']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Tumblr','mod'=>'ybc_blog'),$_smarty_tpl ) );?>
</a>
                                        </li>
                                    <?php }?>
                                </ul>
                            </div>   
                        <?php }?>          
                    </div>               
                    </div>                           
                    <div class="blog_description<?php if ($_smarty_tpl->tpl_vars['enable_slideshow']->value) {?> popup_image<?php }?> <?php if ((isset($_smarty_tpl->tpl_vars['blog_config']->value['YBC_BLOG_ALLOW_TABLE_OF_CONTENT'])) && $_smarty_tpl->tpl_vars['blog_config']->value['YBC_BLOG_ALLOW_TABLE_OF_CONTENT']) {?> ybc_create_table_content<?php }?>">
                        <div class="ets_begin_heading_table">&nbsp;</div>
                        <?php if ($_smarty_tpl->tpl_vars['blog_post']->value['description']) {?>
                            <?php echo $_smarty_tpl->tpl_vars['blog_post']->value['description'];?>

                        <?php } else { ?>
                            <?php echo $_smarty_tpl->tpl_vars['blog_post']->value['short_description'];?>

                        <?php }?>
                        <div class="ets_end_heading_table">&nbsp;</div>
                    </div>
                    <?php if ($_smarty_tpl->tpl_vars['blog_config']->value['YBC_BLOG_ENABLE_POLLS'] && $_smarty_tpl->tpl_vars['allowPolls']->value) {?>
                        <form>
                            <div class="form-polls">
                                <div class="form-group polls-title noactive">
                                    <?php if ($_smarty_tpl->tpl_vars['blog_config']->value['YBC_BLOG_POLLS_TEXT']) {?>
                                        <span><?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['blog_config']->value['YBC_BLOG_POLLS_TEXT'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
</span>
                                    <?php } else { ?>
                                        <span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Was this blog post helpful to you?','mod'=>'ybc_blog'),$_smarty_tpl ) );?>
</span>
                                    <?php }?>
                                    <label for="polls_post_1" <?php if ($_smarty_tpl->tpl_vars['polls_class']->value && $_smarty_tpl->tpl_vars['polls_class']->value->polls == 1) {?>class="disabled"<?php }?>>
                                        <i class="fa fa-thumbs-o-up"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Yes','mod'=>'ybc_blog'),$_smarty_tpl ) );?>
 <span id="polls_post_helpful_yes">(<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['polls_post_helpful_yes']->value )), ENT_QUOTES, 'UTF-8');?>
)</span> 
                                        <input id="polls_post_1" type="radio" name="polls_post" value="1" <?php if ($_smarty_tpl->tpl_vars['polls_class']->value && $_smarty_tpl->tpl_vars['polls_class']->value->polls == 1) {?>disabled="disabled"<?php }?>/>
                                    </label>
                                    <label for="polls_post_0" <?php if ($_smarty_tpl->tpl_vars['polls_class']->value && $_smarty_tpl->tpl_vars['polls_class']->value->polls == 0) {?>class="disabled"<?php }?>>
                                        <i class="fa fa-thumbs-o-down"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No','mod'=>'ybc_blog'),$_smarty_tpl ) );?>
<span id="polls_post_helpful_no">(<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['polls_post_helpful_no']->value )), ENT_QUOTES, 'UTF-8');?>
)</span> 
                                        <input id="polls_post_0" type="radio" name="polls_post" value="0" <?php if ($_smarty_tpl->tpl_vars['polls_class']->value && $_smarty_tpl->tpl_vars['polls_class']->value->polls == 0) {?>disabled="disabled"<?php }?>/>
                                    </label>
                                </div>
                                <div class="form-polls-body hidden">
                                    <div class="form-group polls-name">
                                        <input name="polls_name" id="polls_name" placeholder="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Your name','mod'=>'ybc_blog'),$_smarty_tpl ) );?>
" value="<?php if ($_smarty_tpl->tpl_vars['polls_customer']->value) {
echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['polls_customer']->value->lastname,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
 <?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['polls_customer']->value->firstname,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');
}?>" <?php if ($_smarty_tpl->tpl_vars['polls_customer']->value) {?>readonly="true"<?php }?>/>
                                    </div>
                                    <div class="form-group polls-email">
                                        <input name="polls_email" id="polls_email" placeholder="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Your email','mod'=>'ybc_blog'),$_smarty_tpl ) );?>
" <?php if ($_smarty_tpl->tpl_vars['polls_customer']->value) {?>readonly="true"<?php }?> value="<?php if ($_smarty_tpl->tpl_vars['polls_customer']->value) {
echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['polls_customer']->value->email,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');
}?>"/>
                                    </div>
                                    <div class="form-group polls-feedback">
                                        <textarea name="polls_feedback" id="polls_feedback" placeholder="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Please leave us your feedback','mod'=>'ybc_blog'),$_smarty_tpl ) );?>
"></textarea>
                                    </div>
                                    <?php if ($_smarty_tpl->tpl_vars['blog_config']->value['YBC_BLOG_ENABLE_POLLS_CAPCHA']) {?>
                                        <?php if ($_smarty_tpl->tpl_vars['blog_config']->value['YBC_BLOG_CAPTCHA_TYPE'] !== 'google' && $_smarty_tpl->tpl_vars['blog_config']->value['YBC_BLOG_CAPTCHA_TYPE'] !== 'google3') {?>
                                            <div class="form-group polls-capcha">
                                               <span class="poll-capcha-wrapper">
                                                    <img rel="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['blog_poll_random_code']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" class="ybc-captcha-img-data" id="ybc-blog-polls-capcha-img" src="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['polls_capcha_image']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Security code','mod'=>'ybc_blog'),$_smarty_tpl ) );?>
" />
                                                    <input placeholder="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Secure code','mod'=>'ybc_blog'),$_smarty_tpl ) );?>
" class="form-control" name="polls_capcha_code" type="text" id="polls-capcha" value="" />
                                                    <span id="ybc-blog-polls-capcha-refesh" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Refresh code','mod'=>'ybc_blog'),$_smarty_tpl ) );?>
"></span>
                                                </span>
                                            </div>
                                        <?php } else { ?>
                                            <?php if ($_smarty_tpl->tpl_vars['blog_config']->value['YBC_BLOG_CAPTCHA_TYPE'] == 'google') {?>
                                                <?php echo '<script'; ?>
 src="https://www.google.com/recaptcha/api.js?onload=ybc_polls_lonloadCallback&render=explicit" async defer><?php echo '</script'; ?>
>
                                                <div id="ybc_blog_polls_g_recaptcha" class="ybc_blog_g_recaptcha" ></div>
                                            <?php }?>
                                            <?php if ($_smarty_tpl->tpl_vars['blog_config']->value['YBC_BLOG_CAPTCHA_TYPE'] == 'google3') {?>
                                                <input type="hidden" id="ybc_blog_polls_g_recaptcha" name="g-recaptcha-response" />
                                                <?php echo '<script'; ?>
 type="text/javascript">
                                                    ybc_polls_lonloadCallback();
                                                <?php echo '</script'; ?>
>
                                            <?php }?>
                                        <?php }?>
                                    <?php }?>
                                    <div class="form_action_footer">
                                        <input type="hidden" value="1" name="polls_submit"/>
                                        <button type="submit" name="polls_submit"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Submit','mod'=>'ybc_blog'),$_smarty_tpl ) );?>
</button>
                                        <button type="button" name="polls_cancel" style="margin-right: 10px;"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Cancel','mod'=>'ybc_blog'),$_smarty_tpl ) );?>
</button>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </form>
                    <?php }?>
                    <?php if (($_smarty_tpl->tpl_vars['show_tags']->value && $_smarty_tpl->tpl_vars['blog_post']->value['tags']) || ($_smarty_tpl->tpl_vars['show_categories']->value && $_smarty_tpl->tpl_vars['blog_post']->value['categories'])) {?>
                    <div class="extra_tag_cat">
                        <?php if ($_smarty_tpl->tpl_vars['show_tags']->value && $_smarty_tpl->tpl_vars['blog_post']->value['tags']) {?>
                            <div class="ybc-blog-tags">
                                <?php $_smarty_tpl->_assignInScope('ik', 0);?>
                                <?php $_smarty_tpl->_assignInScope('totalTag', count($_smarty_tpl->tpl_vars['blog_post']->value['tags']));?>
                                <span class="be-label">
                                    <?php if ($_smarty_tpl->tpl_vars['totalTag']->value > 1) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Tags','mod'=>'ybc_blog'),$_smarty_tpl ) );?>

                                    <?php } else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Tag','mod'=>'ybc_blog'),$_smarty_tpl ) );
}?>: 
                                </span>
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['blog_post']->value['tags'], 'tag');
$_smarty_tpl->tpl_vars['tag']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['tag']->value) {
$_smarty_tpl->tpl_vars['tag']->do_else = false;
?>
                                    <?php $_smarty_tpl->_assignInScope('ik', $_smarty_tpl->tpl_vars['ik']->value+1);?>                                        
                                    <a href="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['tag']->value['link'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( ucfirst($_smarty_tpl->tpl_vars['tag']->value['tag']),'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
</a><?php if ($_smarty_tpl->tpl_vars['ik']->value < $_smarty_tpl->tpl_vars['totalTag']->value) {?>, <?php }?>
                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                            </div>
                        <?php }?>
                        <?php if ($_smarty_tpl->tpl_vars['show_categories']->value && $_smarty_tpl->tpl_vars['blog_post']->value['categories']) {?>
                            <div class="ybc-blog-categories">
                                <?php $_smarty_tpl->_assignInScope('ik', 0);?>
                                <?php $_smarty_tpl->_assignInScope('totalCat', count($_smarty_tpl->tpl_vars['blog_post']->value['categories']));?>                        
                                <div class="be-categories">
                                    <span class="be-label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Posted in','mod'=>'ybc_blog'),$_smarty_tpl ) );?>
: </span>
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['blog_post']->value['categories'], 'cat');
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
                            </div>
                        <?php }?> 
                    </div>
                    <?php }?>
                    <?php if ((isset($_smarty_tpl->tpl_vars['blog_config']->value['YBC_BLOG_AUTHOR_INFORMATION'])) && $_smarty_tpl->tpl_vars['blog_config']->value['YBC_BLOG_AUTHOR_INFORMATION'] && (isset($_smarty_tpl->tpl_vars['blog_post']->value['employee']['description'])) && $_smarty_tpl->tpl_vars['blog_post']->value['employee']['description']) {?>
                        <div class="ybc-block-author ybc-block-author-avata <?php if ($_smarty_tpl->tpl_vars['blog_post']->value['employee']['avata']) {?> ybc-block-author-avata<?php }?>">
                            <?php if ($_smarty_tpl->tpl_vars['blog_post']->value['employee']['avata']) {?>
                                <div class="avata_img">
                                    <img class="avata" src="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['link']->value->getMediaLink(((string)(defined('_PS_YBC_BLOG_IMG_') ? constant('_PS_YBC_BLOG_IMG_') : null))."avata/".((string)(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['blog_post']->value['employee']['avata'],'htmlall','UTF-8' ))))), ENT_QUOTES, 'UTF-8');?>
"/>
                                </div>
                                
                            <?php }?>
                            <div class="ybc-des-and-author">
                                <div class="ybc-author-name">
                                    <a href="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['blog_post']->value['author_link'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
">
                                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Author','mod'=>'ybc_blog'),$_smarty_tpl ) );?>
: <?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['blog_post']->value['employee']['name'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>

                                    </a>
                                </div>
                                <?php if ((isset($_smarty_tpl->tpl_vars['blog_post']->value['employee']['description'])) && $_smarty_tpl->tpl_vars['blog_post']->value['employee']['description']) {?>
                                    <div class="ybc-author-description">
                                        <?php echo $_smarty_tpl->tpl_vars['blog_post']->value['employee']['description'];?>

                                    </div>
                                <?php }?>
                            </div>
                        </div>
                    <?php }?>
                    <?php if ($_smarty_tpl->tpl_vars['display_related_products']->value && $_smarty_tpl->tpl_vars['blog_post']->value['products']) {?>
                        <div id="ybc-blog-related-products" class="" >
                            <h4 class="title_blog">
                                <?php if (count($_smarty_tpl->tpl_vars['blog_post']->value['products']) > 1) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Related products ','mod'=>'ybc_blog'),$_smarty_tpl ) );?>

                                <?php } else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Related product','mod'=>'ybc_blog'),$_smarty_tpl ) );
}?>
                            </h4>
                            <div class="ybc-blog-related-products-wrapper ybc-blog-related-products-list">
                                <?php $_smarty_tpl->_assignInScope('product_row', call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['blog_config']->value['YBC_BLOG_RELATED_PRODUCT_ROW'] )));?>
                                <ul class="dt-<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['product_row']->value )), ENT_QUOTES, 'UTF-8');?>
 blog-product-list product_list grid row ybc_related_products_type_<?php if ($_smarty_tpl->tpl_vars['blog_related_product_type']->value) {
echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['blog_related_product_type']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');
} else { ?>default<?php }?>">
                                    <?php $_smarty_tpl->_assignInScope('product_row', call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['blog_config']->value['YBC_BLOG_RELATED_PRODUCT_ROW'] )));?>
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['blog_post']->value['products'], 'product');
$_smarty_tpl->tpl_vars['product']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->do_else = false;
?>
                                        <li class="ajax_block_product col-xs-12 col-sm-4 col-lg-<?php echo htmlspecialchars((string) 12/call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['product_row']->value )), ENT_QUOTES, 'UTF-8');?>
">
                                            <div class="product-container" itemprop="offers" itemscop itemtype="https://schema.org/Offer">
                                                <div class="left-block">
                                                    <a class="ybc_item_img<?php if ((isset($_smarty_tpl->tpl_vars['blog_config']->value['YBC_BLOG_LAZY_LOAD'])) && $_smarty_tpl->tpl_vars['blog_config']->value['YBC_BLOG_LAZY_LOAD']) {?> ybc_item_img_ladyload<?php }?>" href="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['link'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
">
                                                        <img src="<?php if ((isset($_smarty_tpl->tpl_vars['blog_config']->value['YBC_BLOG_LAZY_LOAD'])) && $_smarty_tpl->tpl_vars['blog_config']->value['YBC_BLOG_LAZY_LOAD']) {
echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['link']->value->getMediaLink(((string)(defined('_MODULE_DIR_') ? constant('_MODULE_DIR_') : null))."ybc_blog/views/img/bg-grey.png"),'html','UTF-8' )), ENT_QUOTES, 'UTF-8');
} else {
echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['img_url'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');
}?>" alt="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['name'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" <?php if ((isset($_smarty_tpl->tpl_vars['blog_config']->value['YBC_BLOG_LAZY_LOAD'])) && $_smarty_tpl->tpl_vars['blog_config']->value['YBC_BLOG_LAZY_LOAD']) {?> data-original="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['img_url'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" data-src="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['img_url'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" class="lazyload"<?php }?> />
                                                        <?php if ((isset($_smarty_tpl->tpl_vars['blog_config']->value['YBC_BLOG_LAZY_LOAD'])) && $_smarty_tpl->tpl_vars['blog_config']->value['YBC_BLOG_LAZY_LOAD']) {?>
                                                            <div class="loader_lady_custom"></div>
                                                        <?php }?>
                                                    </a>
                                                </div>
                                                <div class="right-block">
                                                    <h5><a href="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['link'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['name'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
</a></h5>
                                                    <?php if ($_smarty_tpl->tpl_vars['show_price']->value) {?>
                                                        <div class="blog-product-extra content_price">
                                                            <?php if ($_smarty_tpl->tpl_vars['product']->value['price'] != $_smarty_tpl->tpl_vars['product']->value['old_price']) {?>
                                                                <span class="bp-price-old old-price"><span class="bp-price-old-label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Old price: ','mod'=>'ybc_blog'),$_smarty_tpl ) );?>
</span><span class="bp-price-old-display"><?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['old_price'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
</span></span>
                                                            <?php }?>
                                                            <span class="bp-price price product-price"><span class="bp-price-label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Price:  ','mod'=>'ybc_blog'),$_smarty_tpl ) );?>
</span><span class="bp-price-display" itemprop="price" content="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['price'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['price'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
</span></span>
                                                            <?php if ($_smarty_tpl->tpl_vars['product']->value['price'] != $_smarty_tpl->tpl_vars['product']->value['old_price']) {?>
                                                                <span class="bp-percent price-percent-reduction"><span class="bp-percent-label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Discount: ','mod'=>'ybc_blog'),$_smarty_tpl ) );?>
</span><span class="bp-percent-display"><?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['discount_percent'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'%','mod'=>'ybc_blog'),$_smarty_tpl ) );?>
</span></span>
                                                                <span class="bp-save"><span class="bp-save-label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Save up: ','mod'=>'ybc_blog'),$_smarty_tpl ) );?>
</span><span class="bp-save-display">-<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['discount_amount'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
</span></span>
                                                            <?php }?>
                                                        </div>
                                                    <?php }?>
                                                    <?php if ($_smarty_tpl->tpl_vars['product']->value['short_description']) {?>
                                                        <div class="blog-product-desc">
                                                            <?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'truncate' ][ 0 ], array( strip_tags((string) $_smarty_tpl->tpl_vars['product']->value['short_description']),80,'...' )),'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>

                                                        </div>
                                                    <?php }?>
                                                </div>
                                            </div>
                                        </li>
                                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                </ul>
                            </div>
                        </div>
                    <?php }?>
                    <div class="ybc-blog-wrapper-comment"> 
                        <?php if ($_smarty_tpl->tpl_vars['allowComments']->value) {?>
                            <?php if ($_smarty_tpl->tpl_vars['allowComments']->value == 2) {?>
                                <div id="fb-root"></div>
                                <?php echo '<script'; ?>
 async defer crossorigin="anonymous" src="https://connect.facebook.net/<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['langLocale']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
/sdk.js#xfbml=1&version=v8.0" nonce="xHtLYTmH"><?php echo '</script'; ?>
>
                                <h4 class="title_blog"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Facebook comment','mod'=>'ybc_blog'),$_smarty_tpl ) );?>
</h4>
                                <div class="fb-comments" data-width="760" data-href="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['post_url']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" data-numposts="5" data-width=""></div>
                            <?php } else { ?> 
                            <div class="ybc_comment_form_blog">
                                <h4 class="title_blog"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Leave a comment','mod'=>'ybc_blog'),$_smarty_tpl ) );?>
</h4>
                                <div class="ybc-blog-form-comment" id="ybc-blog-form-comment">                   
                                    <?php if ($_smarty_tpl->tpl_vars['hasLoggedIn']->value || $_smarty_tpl->tpl_vars['allowGuestsComments']->value) {?>
                                        <form action="#ybc-blog-form-comment" method="post">
                                            <?php if ((isset($_smarty_tpl->tpl_vars['comment_edit']->value->id)) && $_smarty_tpl->tpl_vars['comment_edit']->value->id && !$_smarty_tpl->tpl_vars['justAdded']->value) {?>
                                                <input type="hidden" value="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['comment_edit']->value->id )), ENT_QUOTES, 'UTF-8');?>
" name="id_comment" />
                                            <?php }?>
                                            <?php if (!$_smarty_tpl->tpl_vars['hasLoggedIn']->value) {?> 
                                                <div class="blog-comment-row blog-name">
                                                    <label for="bc-name"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Name','mod'=>'ybc_blog'),$_smarty_tpl ) );?>
</label>
                                                    <input class="form-control" name="name_customer" id="bc-name" type="text" value="<?php if ((isset($_smarty_tpl->tpl_vars['name_customer']->value))) {
echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['name_customer']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');
} elseif ((isset($_smarty_tpl->tpl_vars['comment_edit']->value->name)) && !$_smarty_tpl->tpl_vars['justAdded']->value) {
echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['comment_edit']->value->name,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');
}?>" />
                                                </div>
                                                <div class="blog-comment-row blog-email">
                                                    <label for="bc-email"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Email','mod'=>'ybc_blog'),$_smarty_tpl ) );?>
</label>
                                                    <input class="form-control" name="email_customer" id="bc-email" type="text" value="<?php if ((isset($_smarty_tpl->tpl_vars['email_customer']->value))) {
echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['email_customer']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');
} elseif ((isset($_smarty_tpl->tpl_vars['comment_edit']->value->email)) && !$_smarty_tpl->tpl_vars['justAdded']->value) {
echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['comment_edit']->value->email,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');
}?>" />
                                                </div>
                                            <?php }?>
                                            <div class="blog-comment-row blog-title">
                                                <label for="bc-subject"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Subject ','mod'=>'ybc_blog'),$_smarty_tpl ) );?>
</label>
                                                <input class="form-control" name="subject" id="bc-subject" type="text" value="<?php if ((isset($_smarty_tpl->tpl_vars['subject']->value))) {
echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['subject']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');
} elseif ((isset($_smarty_tpl->tpl_vars['comment_edit']->value->subject)) && !$_smarty_tpl->tpl_vars['justAdded']->value) {
echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['comment_edit']->value->subject,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');
}?>" />
                                            </div>                                
                                            <div class="blog-comment-row blog-content-comment">
                                                <label for="bc-comment"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Comment ','mod'=>'ybc_blog'),$_smarty_tpl ) );?>
</label>
                                                <textarea   class="form-control" name="comment" id="bc-comment"><?php if ((isset($_smarty_tpl->tpl_vars['comment']->value))) {
echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['comment']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');
} elseif ((isset($_smarty_tpl->tpl_vars['comment_edit']->value->comment)) && !$_smarty_tpl->tpl_vars['justAdded']->value) {
echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['comment_edit']->value->comment,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');
}?></textarea>
                                            </div>
                                            <div class="blog-comment-row flex_space_between flex-bottom">
                                                <?php if ($_smarty_tpl->tpl_vars['allow_rating']->value || $_smarty_tpl->tpl_vars['use_capcha']->value) {?>
                                                    <div class="blog-rate-capcha">
                                                        <?php if ($_smarty_tpl->tpl_vars['allow_rating']->value) {?>                            
                                                            <div class="blog-rate-post">
                                                                <label><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Rating: ','mod'=>'ybc_blog'),$_smarty_tpl ) );?>
</label>
                                                                <div class="blog_rating_box">
                                                                    <?php if ($_smarty_tpl->tpl_vars['default_rating']->value > 0 && $_smarty_tpl->tpl_vars['default_rating']->value < 5) {?>
                                                                        <input id="blog_rating" type="hidden" name="rating" value="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['default_rating']->value )), ENT_QUOTES, 'UTF-8');?>
" />
                                                                        <?php
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? $_smarty_tpl->tpl_vars['default_rating']->value+1 - (1) : 1-($_smarty_tpl->tpl_vars['default_rating']->value)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = 1, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration === 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration === $_smarty_tpl->tpl_vars['i']->total;?>
                                                                            <div rel="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['i']->value )), ENT_QUOTES, 'UTF-8');?>
" class="star star_on blog_rating_star blog_rating_star_<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['i']->value )), ENT_QUOTES, 'UTF-8');?>
"></div>
                                                                        <?php }
}
?>
                                                                        <?php
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? 5+1 - ($_smarty_tpl->tpl_vars['default_rating']->value+1) : $_smarty_tpl->tpl_vars['default_rating']->value+1-(5)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['default_rating']->value+1, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration === 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration === $_smarty_tpl->tpl_vars['i']->total;?>
                                                                            <div rel="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['i']->value )), ENT_QUOTES, 'UTF-8');?>
" class="star blog_rating_star blog_rating_star_<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['i']->value )), ENT_QUOTES, 'UTF-8');?>
"></div>
                                                                        <?php }
}
?>
                                                                    <?php } else { ?>
                                                                        <input id="blog_rating" type="hidden" name="rating" value="5" />
                                                                        <?php
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? 5+1 - (1) : 1-(5)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = 1, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration === 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration === $_smarty_tpl->tpl_vars['i']->total;?>
                                                                            <div rel="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['i']->value )), ENT_QUOTES, 'UTF-8');?>
" class="star star_on blog_rating_star blog_rating_star_<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['i']->value )), ENT_QUOTES, 'UTF-8');?>
"></div>
                                                                        <?php }
}
?>
                                                                    <?php }?>
                                                                </div>
                                                            </div>
                                                        <?php }?>
                                                        <?php if ($_smarty_tpl->tpl_vars['use_capcha']->value) {?>
                                                            <?php if ($_smarty_tpl->tpl_vars['blog_config']->value['YBC_BLOG_CAPTCHA_TYPE'] !== 'google' && $_smarty_tpl->tpl_vars['blog_config']->value['YBC_BLOG_CAPTCHA_TYPE'] !== 'google3') {?>
                                                                <div class="blog-capcha">
                                                                    <label for="bc-capcha"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Security code: ','mod'=>'ybc_blog'),$_smarty_tpl ) );?>
</label>
                                                                    <span class="bc-capcha-wrapper">
                                                                        <img rel="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['blog_random_code']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" class="ybc-captcha-img-data" id="ybc-blog-capcha-img" src="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['capcha_image']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Security code','mod'=>'ybc_blog'),$_smarty_tpl ) );?>
" />
                                                                        <input class="form-control" name="capcha_code" type="text" id="bc-capcha" value="" />
                                                                        <span id="ybc-blog-capcha-refesh" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Refresh code','mod'=>'ybc_blog'),$_smarty_tpl ) );?>
"></span>
                                                                    </span>
                                                                </div>
                                                            <?php } else { ?>
                                                                <?php if ($_smarty_tpl->tpl_vars['blog_config']->value['YBC_BLOG_CAPTCHA_TYPE'] == 'google') {?>
                                                                    <?php echo '<script'; ?>
 src="https://www.google.com/recaptcha/api.js?onload=ybc_comment_lonloadCallback&render=explicit" async defer><?php echo '</script'; ?>
>
                                                                    <div id="ybc_blog_comment_g_recaptcha" class="ybc_blog_g_recaptcha" ></div>
                                                                <?php }?>
                                                                <?php if ($_smarty_tpl->tpl_vars['blog_config']->value['YBC_BLOG_CAPTCHA_TYPE'] == 'google3') {?>
                                                                    <input type="hidden" id="ybc_blog_comment_g_recaptcha" name="g-recaptcha-response" />
                                                                    <?php echo '<script'; ?>
 type="text/javascript">
                                                                        ybc_comment_lonloadCallback();
                                                                    <?php echo '</script'; ?>
>
                                                                <?php }?>
                                                            <?php }?>
                                                        <?php }?>
                                                    </div>
                                                <?php }?>   
                                                <div class="blog-submit-form">                                                    
                                                    <?php if (!Configuration::get('YBC_BLOG_DISPLAY_GDPR_NOTIFICATION')) {?>
                                                        <div class="blog-submit">
                                                            <input class="button" type="submit" value="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Submit Comment','mod'=>'ybc_blog'),$_smarty_tpl ) );?>
" name="bcsubmit" />
                                                        </div>
                                                    <?php }?>   
                                                </div>            
                                                <?php if ($_smarty_tpl->tpl_vars['blog_errors']->value && is_array($_smarty_tpl->tpl_vars['blog_errors']->value) && !(isset($_smarty_tpl->tpl_vars['replyCommentsave']->value))) {?>
                                                    <div class="alert alert-danger ybc_alert-danger">
                                                        <button class="close" type="button" data-dismiss="alert">×</button>
                                                        <ul>
                                                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['blog_errors']->value, 'error');
$_smarty_tpl->tpl_vars['error']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['error']->value) {
$_smarty_tpl->tpl_vars['error']->do_else = false;
?>
                                                                <li><?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['error']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
</li>
                                                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                                        </ul>
                                                    </div>
                                                <?php }?>                                            
                                            </div> 
                                            <div class="blog-comment-row">                                            
                                                <div class="blog-submit-form">
                                                    <?php if (Configuration::get('YBC_BLOG_DISPLAY_GDPR_NOTIFICATION')) {?>
                                                        <label for="check_gpdr">
                                                            <input id="check_gpdr" type="checkbox" type="check_gpdr" value="1"/>&nbsp;<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['text_gdpr']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>

                                                            <a href="<?php if (Configuration::get('YBC_BLOG_TEXT_GDPR_NOTIFICATION_URL_MORE',$_smarty_tpl->tpl_vars['id_lang']->value)) {
echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( Configuration::get('YBC_BLOG_TEXT_GDPR_NOTIFICATION_URL_MORE',$_smarty_tpl->tpl_vars['id_lang']->value),'html','UTF-8' )), ENT_QUOTES, 'UTF-8');
} else { ?>#<?php }?>"><?php if (Configuration::get('YBC_BLOG_TEXT_GDPR_NOTIFICATION_TEXT_MORE',$_smarty_tpl->tpl_vars['id_lang']->value)) {
echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( Configuration::get('YBC_BLOG_TEXT_GDPR_NOTIFICATION_TEXT_MORE',$_smarty_tpl->tpl_vars['id_lang']->value),'html','UTF-8' )), ENT_QUOTES, 'UTF-8');
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'View more details here','mod'=>'ybc_blog'),$_smarty_tpl ) );
}?></a>
                                                        </label>
                                                        <div class="blog-submit">
                                                            <input class="button" type="submit" disabled="disabled" value="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Submit Comment','mod'=>'ybc_blog'),$_smarty_tpl ) );?>
" name="bcsubmit" />
                                                        </div>
                                                    <?php }?>   
                                                </div>  
                                            </div>                                            
                                            <?php if ($_smarty_tpl->tpl_vars['blog_success']->value && !$_smarty_tpl->tpl_vars['replyCommentsaveok']->value) {?>
                                                <p class="alert alert-success ybc_alert-success">
                                                <button class="close" type="button" data-dismiss="alert">×</button>    
                                                <?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['blog_success']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>

                                                </p>
                                            <?php }?>
                                        </form>
                                    <?php } else { ?>
                                        <p class="alert alert-warning"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Log in to post comments','mod'=>'ybc_blog'),$_smarty_tpl ) );?>
</p>
                                    <?php }?>
                                </div> 
                            </div>
                            <?php if (count($_smarty_tpl->tpl_vars['comments']->value)) {?>
                                <div class="ybc_blog-comments-list">
                                <h4 class="title_blog"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Comments','mod'=>'ybc_blog'),$_smarty_tpl ) );?>
</h4>
                                    <ul id="blog-comments-list" class="blog-comments-list">
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['comments']->value, 'comment');
$_smarty_tpl->tpl_vars['comment']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['comment']->value) {
$_smarty_tpl->tpl_vars['comment']->do_else = false;
?>
                                                <li id="blog_comment_line_<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['comment']->value['id_comment'] )), ENT_QUOTES, 'UTF-8');?>
" class="blog-comment-line"  >
                                                                                                                
                                                <div class="ybc-blog-detail-comment">
                                                    <h5 class="comment-subject"><?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['comment']->value['subject'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
</h5>
                                                    <?php if ($_smarty_tpl->tpl_vars['comment']->value['name']) {?><span class="comment-by"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'By: ','mod'=>'ybc_blog'),$_smarty_tpl ) );?>
<b><?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( ucfirst($_smarty_tpl->tpl_vars['comment']->value['name']),'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
</b></span><?php }?>
                                                    <span class="comment-time"><span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'On','mod'=>'ybc_blog'),$_smarty_tpl ) );?>
 </span><?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( date($_smarty_tpl->tpl_vars['date_format']->value,strtotime($_smarty_tpl->tpl_vars['comment']->value['datetime_added'])),'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
</span>
                                                    <?php if ($_smarty_tpl->tpl_vars['allow_rating']->value && $_smarty_tpl->tpl_vars['comment']->value['rating'] > 0) {?>
                                                        <div class="comment-rating" >
                                                            <span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Rating: ','mod'=>'ybc_blog'),$_smarty_tpl ) );?>
</span>
                                                            <div class="ybc_blog_review">
                                                                <?php
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? $_smarty_tpl->tpl_vars['comment']->value['rating']+1 - (1) : 1-($_smarty_tpl->tpl_vars['comment']->value['rating'])+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = 1, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration === 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration === $_smarty_tpl->tpl_vars['i']->total;?>
                                                                    <div class="star star_on"></div>
                                                                <?php }
}
?>
                                                                <?php if ($_smarty_tpl->tpl_vars['comment']->value['rating'] < 5) {?>
                                                                    <?php
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? 5+1 - ($_smarty_tpl->tpl_vars['comment']->value['rating']+1) : $_smarty_tpl->tpl_vars['comment']->value['rating']+1-(5)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['comment']->value['rating']+1, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration === 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration === $_smarty_tpl->tpl_vars['i']->total;?>
                                                                        <div class="star"></div>
                                                                    <?php }
}
?>
                                                                <?php }?> 
                                                                <span class="ybc-blog-everage-rating"> <?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( number_format((float)$_smarty_tpl->tpl_vars['comment']->value['rating'],1,'.',''),'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
</span>                                     
                                                            </div>
                                                        </div>
                                                    <?php }?> 
                                                    <div class="ybc-block-report-reply-edit-delete">
                                                        <?php if ($_smarty_tpl->tpl_vars['allow_report_comment']->value) {?>
                                                            <?php if (!($_smarty_tpl->tpl_vars['reportedComments']->value && is_array($_smarty_tpl->tpl_vars['reportedComments']->value) && in_array($_smarty_tpl->tpl_vars['comment']->value['id_comment'],$_smarty_tpl->tpl_vars['reportedComments']->value))) {?>
                                                                <span class="ybc-block-comment-report comment-report-<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['comment']->value['id_comment'] )), ENT_QUOTES, 'UTF-8');?>
" rel="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['comment']->value['id_comment'] )), ENT_QUOTES, 'UTF-8');?>
"><i class="fa fa-bolt" aria-hidden="true" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Report this comment as abused','mod'=>'ybc_blog'),$_smarty_tpl ) );?>
"></i></span>
                                                            <?php }?>
                                                        <?php }?>
                                                        <?php if ((isset($_smarty_tpl->tpl_vars['comment']->value['reply'])) && $_smarty_tpl->tpl_vars['comment']->value['reply']) {?>
                                                            <span class="ybc-block-comment-reply comment-reply-<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['comment']->value['id_comment'] )), ENT_QUOTES, 'UTF-8');?>
" rel="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['comment']->value['id_comment'] )), ENT_QUOTES, 'UTF-8');?>
"><i class="fa fa-reply" aria-hidden="true" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Reply','mod'=>'ybc_blog'),$_smarty_tpl ) );?>
"></i></span>
                                                        <?php }?>
                                                        <?php if ((isset($_smarty_tpl->tpl_vars['comment']->value['url_edit']))) {?>
                                                            <a class="ybc-block-comment-edit comment-edit-<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['comment']->value['id_comment'] )), ENT_QUOTES, 'UTF-8');?>
" href="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['comment']->value['url_edit'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"><i class="fa fa-pencil" aria-hidden="true" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Edit this comment','mod'=>'ybc_blog'),$_smarty_tpl ) );?>
"></i></a>
                                                        <?php }?>
                                                        <?php if ((isset($_smarty_tpl->tpl_vars['comment']->value['url_delete']))) {?>
                                                            <a class="ybc-block-comment-delete delete-edit-<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['comment']->value['id_comment'] )), ENT_QUOTES, 'UTF-8');?>
" href="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['comment']->value['url_delete'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"><i class="fa fa-trash" aria-hidden="true" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Delete this comment','mod'=>'ybc_blog'),$_smarty_tpl ) );?>
"></i></a>
                                                        <?php }?>
                                                    </div>
                                                    <?php if ($_smarty_tpl->tpl_vars['comment']->value['comment']) {?><p class="comment-content"><?php echo $_smarty_tpl->tpl_vars['comment']->value['comment'];?>
</p><?php }?>
                                                    <?php if ($_smarty_tpl->tpl_vars['comment']->value['replies']) {?>
                                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['comment']->value['replies'], 'reply');
$_smarty_tpl->tpl_vars['reply']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['reply']->value) {
$_smarty_tpl->tpl_vars['reply']->do_else = false;
?>
                                                            <p class="comment-reply">
                                                                <span class="ybc-blog-replied-by">
                                                                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Replied by: ','mod'=>'ybc_blog'),$_smarty_tpl ) );?>

                                                                    <span class="ybc-blog-replied-by-name">
                                                                        <?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( ucfirst($_smarty_tpl->tpl_vars['reply']->value['name']),'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>

                                                                    </span>              
                                                                </span>
                                                                <span class="comment-time"><span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'On','mod'=>'ybc_blog'),$_smarty_tpl ) );?>
 </span><?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( date($_smarty_tpl->tpl_vars['date_format']->value,strtotime($_smarty_tpl->tpl_vars['reply']->value['datetime_added'])),'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
</span>
                                                                <span class="ybc-blog-reply-content">
                                                                    <?php echo $_smarty_tpl->tpl_vars['reply']->value['reply'];?>

                                                                </span>
                                                            </p>
                                                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                                    <?php }?>
                                                    <?php if ((isset($_smarty_tpl->tpl_vars['replyCommentsave']->value)) && $_smarty_tpl->tpl_vars['replyCommentsave']->value == $_smarty_tpl->tpl_vars['comment']->value['id_comment']) {?>
                                                        <?php if ((isset($_smarty_tpl->tpl_vars['replyCommentsaveok']->value)) && $_smarty_tpl->tpl_vars['blog_success']->value) {?>
                                                            <p class="alert alert-success ybc_alert-success">
                                                            <button class="close" type="button" data-dismiss="alert">×</button><?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['blog_success']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>

                                                            </p>
                                                        <?php } else { ?>
                                                            <?php if ((isset($_smarty_tpl->tpl_vars['comment']->value['reply'])) && $_smarty_tpl->tpl_vars['comment']->value['reply']) {?>
                                                                <form class="form_reply_comment" action="#blog_comment_line_<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['comment']->value['id_comment'] )), ENT_QUOTES, 'UTF-8');?>
" method="post">
                                                                    <?php if ($_smarty_tpl->tpl_vars['blog_errors']->value && is_array($_smarty_tpl->tpl_vars['blog_errors']->value) && (isset($_smarty_tpl->tpl_vars['replyCommentsave']->value))) {?>
                                                                        <div class="alert alert-danger ybc_alert-danger">
                                                                            <button class="close" type="button" data-dismiss="alert">×</button>
                                                                            <ul >
                                                                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['blog_errors']->value, 'error');
$_smarty_tpl->tpl_vars['error']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['error']->value) {
$_smarty_tpl->tpl_vars['error']->do_else = false;
?>
                                                                                    <li><?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['error']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
</li>
                                                                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                                                            </ul>
                                                                        </div>
                                                                    <?php }?>
                                                                    <input type="hidden" name="replyCommentsave" value="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['comment']->value['id_comment'] )), ENT_QUOTES, 'UTF-8');?>
" />
                                                                    <textarea name="reply_comwent_text" placeholder="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Enter your message...','mod'=>'ybc_blog'),$_smarty_tpl ) );?>
"><?php echo $_smarty_tpl->tpl_vars['reply_comwent_text']->value;?>
</textarea>
                                                                    <input type="submit" value="Send" /> 
                                                                </form>
                                                            <?php } else { ?>
                                                                <?php if ($_smarty_tpl->tpl_vars['blog_errors']->value && is_array($_smarty_tpl->tpl_vars['blog_errors']->value) && (isset($_smarty_tpl->tpl_vars['replyCommentsave']->value))) {?>
                                                                    <div class="alert alert-danger ybc_alert-danger">
                                                                        <button class="close" type="button" data-dismiss="alert">×</button>
                                                                        <ul >
                                                                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['blog_errors']->value, 'error');
$_smarty_tpl->tpl_vars['error']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['error']->value) {
$_smarty_tpl->tpl_vars['error']->do_else = false;
?>
                                                                                <li><?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['error']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
</li>
                                                                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                                                        </ul>
                                                                    </div>
                                                                <?php }?>
                                                            <?php }?>
                                                        <?php }?>
                                                    <?php }?>
                                                </div>
                                                </li>
                                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                    </ul> 
                                    <?php if ((isset($_smarty_tpl->tpl_vars['link_view_all_comment']->value))) {?>
                                        <div class="blog_view_all_button">
                                            <a href="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['link_view_all_comment']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" class="view_all_link"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'View all comments','mod'=>'ybc_blog'),$_smarty_tpl ) );?>
</a>
                                        </div>
                                    <?php }?>
                                </div>
                            <?php }?>                 
                            <?php }?>
                        <?php }?>
                    </div>            
                </div>
                <?php } else { ?>
                    <p class="warning"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No posts found','mod'=>'ybc_blog'),$_smarty_tpl ) );?>
</p>
                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['blog_post']->value['related_posts']) {?>
                    <div class="ybc-blog-related-posts ybc_blog_related_posts_type_<?php if ($_smarty_tpl->tpl_vars['blog_related_posts_type']->value) {
echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['blog_related_posts_type']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');
} else { ?>default<?php }?>">
                        <h4 class="title_blog"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Related posts','mod'=>'ybc_blog'),$_smarty_tpl ) );?>
</h4>
                        <div class="ybc-blog-related-posts-wrapper">
                            <?php $_smarty_tpl->_assignInScope('post_row', call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['blog_config']->value['YBC_BLOG_RELATED_POST_ROW'] )));?>
                            <ul class="ybc-blog-related-posts-list dt-<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['post_row']->value )), ENT_QUOTES, 'UTF-8');?>
">
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['blog_post']->value['related_posts'], 'rpost');
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
">
                                                        <?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['rpost']->value['likes'] )), ENT_QUOTES, 'UTF-8');?>

                                                        </span>
                                                        <span class="blog-post-like-text blog-post-like-text-<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['rpost']->value['id_post'] )), ENT_QUOTES, 'UTF-8');?>
">
                                                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Liked','mod'=>'ybc_blog'),$_smarty_tpl ) );?>

                                                        </span>
                                                    </span>  
                                                <?php }?>
                                                <?php if ($_smarty_tpl->tpl_vars['allowComments']->value) {?>
                                                    <?php if ($_smarty_tpl->tpl_vars['rpost']->value['comments_num'] > 0) {?>                                                                
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
                <?php }?>
            </div>        
        </div>
    <?php } else { ?>
        <p class="alert alert-warning"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'This blog post is not available','mod'=>'ybc_blog'),$_smarty_tpl ) );?>
</p>
    <?php }?>
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

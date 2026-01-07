<?php
/* Smarty version 4.3.4, created on 2026-01-05 15:47:42
  from '/home/www/public/modules/ybc_blog/views/templates/hook/slider_block.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_695bcf0ed675e0_64249918',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0eb48491f2fae2e7914015625bc90003c42131f3' => 
    array (
      0 => '/home/www/public/modules/ybc_blog/views/templates/hook/slider_block.tpl',
      1 => 1656021600,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_695bcf0ed675e0_64249918 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['slides']->value) {?>
    <div class="bybc-blog-slider 
    <?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['blog_config']->value['YBC_BLOG_RTL_CLASS'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
 
    <?php if ($_smarty_tpl->tpl_vars['blog_config']->value['YBC_BLOG_SLIDER_DISPLAY_THUMBNAIL'] == false) {?> disable_thumbnail<?php }?>
    <?php if ((isset($_smarty_tpl->tpl_vars['blog_config']->value['YBC_BLOG_SLIDER_DISPLAY_CAPTION'])) && $_smarty_tpl->tpl_vars['blog_config']->value['YBC_BLOG_SLIDER_DISPLAY_CAPTION']) {?>caption-enabled<?php } else { ?>caption-disabled<?php }?> 
    <?php if ((isset($_smarty_tpl->tpl_vars['blog_config']->value['YBC_BLOG_SLIDER_DISPLAY_NAV'])) && $_smarty_tpl->tpl_vars['blog_config']->value['YBC_BLOG_SLIDER_DISPLAY_NAV']) {?>nav-enabled<?php } else { ?>nav-disabled<?php }?>">
        <div class="block_content">
            <div class="ybc-blog-slider loading slider-wrapper theme-<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['nivoTheme']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
 <?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['blog_config']->value['YBC_BLOG_DISPLAY_TYPE'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
">
                <?php if ($_smarty_tpl->tpl_vars['blog_config']->value['YBC_BLOG_DISPLAY_TYPE'] != 'carousel') {?>
                <div class="loading_img">
                    <img src="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['loading_img']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'loading','mod'=>'ybc_blog'),$_smarty_tpl ) );?>
" />
                </div>
                <?php }?>
                <div id="ybc_slider" class="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['blog_config']->value['YBC_BLOG_DISPLAY_TYPE'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
">                     
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['slides']->value, 'slide');
$_smarty_tpl->tpl_vars['slide']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['slide']->value) {
$_smarty_tpl->tpl_vars['slide']->do_else = false;
?>
                        <?php if ($_smarty_tpl->tpl_vars['slide']->value['url']) {?><a href="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['slide']->value['url'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"><?php }?>
                            <?php if ($_smarty_tpl->tpl_vars['blog_config']->value['YBC_BLOG_DISPLAY_TYPE'] == 'carousel') {?>
                            <div class="slider_big_image">
                            <?php }?>
                                <div class="ybc_slider_image<?php if ((isset($_smarty_tpl->tpl_vars['blog_config']->value['YBC_BLOG_LAZY_LOAD'])) && $_smarty_tpl->tpl_vars['blog_config']->value['YBC_BLOG_LAZY_LOAD']) {?> ybc_item_img_ladyload<?php }?>">
                                    <?php if ($_smarty_tpl->tpl_vars['blog_config']->value['YBC_BLOG_DISPLAY_TYPE'] == 'carousel') {?>
                                        <img src="<?php if ((isset($_smarty_tpl->tpl_vars['blog_config']->value['YBC_BLOG_LAZY_LOAD'])) && $_smarty_tpl->tpl_vars['blog_config']->value['YBC_BLOG_LAZY_LOAD']) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['link']->value->getMediaLink(((string)(defined('_MODULE_DIR_') ? constant('_MODULE_DIR_') : null))."ybc_blog/views/img/bg-grey.png"), ENT_QUOTES, 'UTF-8');
} else {
echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['slide']->value['image'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');
}?>" alt="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['slide']->value['caption'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['slide']->value['caption'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"  <?php if ((isset($_smarty_tpl->tpl_vars['blog_config']->value['YBC_BLOG_LAZY_LOAD'])) && $_smarty_tpl->tpl_vars['blog_config']->value['YBC_BLOG_LAZY_LOAD']) {?>
                                        data-original="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['slide']->value['image'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" class="lazyload"<?php }?>/>
                                    <?php } else { ?>
                                        <img src="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['slide']->value['image'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['slide']->value['caption'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['slide']->value['caption'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" />
                                    <?php }?>
                                    
                                    <?php if ((isset($_smarty_tpl->tpl_vars['blog_config']->value['YBC_BLOG_LAZY_LOAD'])) && $_smarty_tpl->tpl_vars['blog_config']->value['YBC_BLOG_LAZY_LOAD']) {?>
                                    <div class="loader_lady_custom"></div>
                                    <?php }?>
                                </div>
                            <?php if ($_smarty_tpl->tpl_vars['blog_config']->value['YBC_BLOG_DISPLAY_TYPE'] == 'carousel') {?>
                                <div class="nivo-caption">
                                    <?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['slide']->value['caption'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>

                                </div>
                            </div>
                            <?php }?>
                        <?php if ($_smarty_tpl->tpl_vars['slide']->value['url']) {?></a><?php }?>
                        
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>                
                </div>                
            </div>
            <?php if ($_smarty_tpl->tpl_vars['blog_config']->value['YBC_BLOG_SLIDER_DISPLAY_THUMBNAIL'] == true && $_smarty_tpl->tpl_vars['blog_config']->value['YBC_BLOG_DISPLAY_TYPE'] == 'carousel') {?>
                <div class="ybc-blog-thumbnail-list <?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['blog_config']->value['YBC_BLOG_DISPLAY_TYPE'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->tpl_vars['blog_config']->value['YBC_BLOG_SLIDER_DISPLAY_NAV'] == true) {?> enable_dots<?php }?>">
                    <div class="ybc-blog-thumbnail-items">
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['slides']->value, 'slide');
$_smarty_tpl->tpl_vars['slide']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['slide']->value) {
$_smarty_tpl->tpl_vars['slide']->do_else = false;
?>
                            <div class="ybc-blog-thumbnail-item" style="position: related;">
                                <div class="ybc_slider_image<?php if ((isset($_smarty_tpl->tpl_vars['blog_config']->value['YBC_BLOG_LAZY_LOAD'])) && $_smarty_tpl->tpl_vars['blog_config']->value['YBC_BLOG_LAZY_LOAD']) {?> ybc_item_img_ladyload<?php }?>">
                                    <img src="<?php if ((isset($_smarty_tpl->tpl_vars['blog_config']->value['YBC_BLOG_LAZY_LOAD'])) && $_smarty_tpl->tpl_vars['blog_config']->value['YBC_BLOG_LAZY_LOAD']) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['link']->value->getMediaLink(((string)(defined('_MODULE_DIR_') ? constant('_MODULE_DIR_') : null))."ybc_blog/views/img/bg-grey.png"), ENT_QUOTES, 'UTF-8');
} else {
echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['slide']->value['image'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');
}?>" alt="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['slide']->value['caption'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['slide']->value['caption'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"  <?php if ((isset($_smarty_tpl->tpl_vars['blog_config']->value['YBC_BLOG_LAZY_LOAD'])) && $_smarty_tpl->tpl_vars['blog_config']->value['YBC_BLOG_LAZY_LOAD']) {?> 
                                    data-original="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['slide']->value['image'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" class="lazyload"<?php }?>/>
                                    <?php if ((isset($_smarty_tpl->tpl_vars['blog_config']->value['YBC_BLOG_LAZY_LOAD'])) && $_smarty_tpl->tpl_vars['blog_config']->value['YBC_BLOG_LAZY_LOAD']) {?>
                                    <div class="loader_lady_custom"></div>
                                    <?php }?>
                                </div>
                            </div>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </div>
                </div>
            <?php }?>
        </div>
    </div>
    <?php echo '<script'; ?>
 type="text/javascript">
        var sliderAutoPlay = <?php if ($_smarty_tpl->tpl_vars['nivoAutoPlay']->value) {?>true<?php } else { ?>false<?php }?>; 
        var YBC_BLOG_SLIDER_DISPLAY_NAV = <?php $_prefixVariable1 = true;
$_tmp_array = isset($_smarty_tpl->tpl_vars['blog_config']) ? $_smarty_tpl->tpl_vars['blog_config']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array['YBC_BLOG_SLIDER_DISPLAY_NAV'] = $_prefixVariable1;
$_smarty_tpl->_assignInScope('blog_config', $_tmp_array);
if ($_prefixVariable1) {?>true<?php } else { ?>false<?php }?>;      
    <?php echo '</script'; ?>
>
<?php }
}
}

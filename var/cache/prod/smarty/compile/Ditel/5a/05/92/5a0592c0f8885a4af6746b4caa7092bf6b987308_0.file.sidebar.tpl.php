<?php
/* Smarty version 4.3.4, created on 2026-01-06 09:44:57
  from '/home/www/public/modules/ybc_blog/views/templates/hook/sidebar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_695ccb89016c42_87012022',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5a0592c0f8885a4af6746b4caa7092bf6b987308' => 
    array (
      0 => '/home/www/public/modules/ybc_blog/views/templates/hook/sidebar.tpl',
      1 => 1656021600,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_695ccb89016c42_87012022 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="ybc-left-panel col-lg-2">
    <div class="list-group">
        <?php if ($_smarty_tpl->tpl_vars['list']->value) {?>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['list']->value, 'tab');
$_smarty_tpl->tpl_vars['tab']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['tab']->value) {
$_smarty_tpl->tpl_vars['tab']->do_else = false;
?>
                <?php if ($_smarty_tpl->tpl_vars['tab']->value['hasAccess']) {?>
                    <?php if ($_smarty_tpl->tpl_vars['tab']->value['id'] != 'ybc_tab_other_modules') {?>
                    <a class="<?php if ($_smarty_tpl->tpl_vars['active']->value == $_smarty_tpl->tpl_vars['tab']->value['id'] || ($_smarty_tpl->tpl_vars['tab']->value['id'] == 'ybc_tab_comment' && $_smarty_tpl->tpl_vars['active']->value == 'ybc_tab_comment_reply') || ($_smarty_tpl->tpl_vars['tab']->value['id'] == 'ybc_tab_employees' && ($_smarty_tpl->tpl_vars['active']->value == 'ybc_tab_customer' || $_smarty_tpl->tpl_vars['active']->value == 'ybc_tab_author'))) {?>active<?php }?> list-group-item" href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['tab']->value['url'],'html','UTF-8' ));?>
" id="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['tab']->value['id'],'html','UTF-8' ));?>
"><?php if ((isset($_smarty_tpl->tpl_vars['tab']->value['icon']))) {?><i class="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['tab']->value['icon'],'html','UTF-8' ));?>
"></i> <?php }
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['tab']->value['label'],'html','UTF-8' ));
if ((isset($_smarty_tpl->tpl_vars['tab']->value['total_result'])) && $_smarty_tpl->tpl_vars['tab']->value['total_result']) {?> (<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['tab']->value['total_result'] ));?>
)<?php }?></a>
                    <?php } else { ?>
                        <div class="li_othermodules">
                            <a class="<?php if ((isset($_smarty_tpl->tpl_vars['tab']->value['hasRefs'])) && $_smarty_tpl->tpl_vars['tab']->value['hasRefs']) {?>refs_othermodules<?php } else { ?>link_othermodules<?php }?>" href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['tab']->value['url'],'html','UTF-8' ));?>
" <?php if ((isset($_smarty_tpl->tpl_vars['tab']->value['hasRefs'])) && $_smarty_tpl->tpl_vars['tab']->value['hasRefs']) {?>target="_blank"<?php }?>>
                                <span class="tab-title"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['tab']->value['label'],'html','UTF-8' ));?>
</span>
                                <span class="tab-sub-title"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['tab']->value['subtitle'],'html','UTF-8' ));?>
</span>
                            </a>
                        </div>
                    <?php }?>
                <?php } else { ?>
                    <style>
                    
                        #subtab-<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['tab']->value['controller'],'html','UTF-8' ));?>
{
                            display:none;
                        }
                    
                    </style>
                <?php }?>
                
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        <?php }?>
    </div>
</div><?php }
}

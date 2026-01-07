<?php
/* Smarty version 4.3.4, created on 2026-01-05 14:49:55
  from '/home/www/public/modules/ets_megamenu/views/templates/hook/megamenu.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_695bc183c113d7_88792802',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cf705de847430006d6e87869fcdd30967268c3ba' => 
    array (
      0 => '/home/www/public/modules/ets_megamenu/views/templates/hook/megamenu.tpl',
      1 => 1752567564,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_695bc183c113d7_88792802 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['menusHTML']->value) {?>
    <div class="ets_mm_megamenu 
        <?php if ((isset($_smarty_tpl->tpl_vars['mm_config']->value['ETS_MM_LAYOUT'])) && $_smarty_tpl->tpl_vars['mm_config']->value['ETS_MM_LAYOUT']) {?>layout_<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['mm_config']->value['ETS_MM_LAYOUT'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');
}?> 
        <?php if ((isset($_smarty_tpl->tpl_vars['mm_config']->value['ETS_MM_SHOW_ICON_VERTICAL'])) && $_smarty_tpl->tpl_vars['mm_config']->value['ETS_MM_SHOW_ICON_VERTICAL']) {?> show_icon_in_mobile<?php }?> 
        <?php if ((isset($_smarty_tpl->tpl_vars['mm_config']->value['ETS_MM_SKIN'])) && $_smarty_tpl->tpl_vars['mm_config']->value['ETS_MM_SKIN']) {?>skin_<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['mm_config']->value['ETS_MM_SKIN'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');
}?>  
        <?php if ((isset($_smarty_tpl->tpl_vars['mm_config']->value['ETS_MM_TRANSITION_EFFECT'])) && $_smarty_tpl->tpl_vars['mm_config']->value['ETS_MM_TRANSITION_EFFECT']) {?>transition_<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['mm_config']->value['ETS_MM_TRANSITION_EFFECT'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');
}?>   
        <?php if ((isset($_smarty_tpl->tpl_vars['mm_config']->value['ETS_MOBILE_MM_TYPE'])) && $_smarty_tpl->tpl_vars['mm_config']->value['ETS_MOBILE_MM_TYPE']) {?>transition_<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['mm_config']->value['ETS_MOBILE_MM_TYPE'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');
}?> 
        <?php if ((isset($_smarty_tpl->tpl_vars['mm_config']->value['ETS_MM_CUSTOM_CLASS'])) && $_smarty_tpl->tpl_vars['mm_config']->value['ETS_MM_CUSTOM_CLASS']) {
echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['mm_config']->value['ETS_MM_CUSTOM_CLASS'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');
}?> 
        <?php if ((isset($_smarty_tpl->tpl_vars['mm_config']->value['ETS_MM_STICKY_ENABLED'])) && $_smarty_tpl->tpl_vars['mm_config']->value['ETS_MM_STICKY_ENABLED']) {?>sticky_enabled<?php } else { ?>sticky_disabled<?php }?> 
        <?php if ((isset($_smarty_tpl->tpl_vars['mm_config']->value['ETS_MM_ACTIVE_ENABLED'])) && $_smarty_tpl->tpl_vars['mm_config']->value['ETS_MM_ACTIVE_ENABLED']) {?>enable_active_menu<?php }?> 
        <?php if ((isset($_smarty_tpl->tpl_vars['mm_layout_direction']->value)) && $_smarty_tpl->tpl_vars['mm_layout_direction']->value) {
echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['mm_layout_direction']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');
} else { ?>ets-dir-ltr<?php }?>
        <?php if ((isset($_smarty_tpl->tpl_vars['mm_config']->value['ETS_MM_HOOK_TO'])) && $_smarty_tpl->tpl_vars['mm_config']->value['ETS_MM_HOOK_TO'] == 'customhook') {?>hook-custom<?php } else { ?>hook-default<?php }?>
        <?php if ((isset($_smarty_tpl->tpl_vars['mm_multiLayout']->value)) && $_smarty_tpl->tpl_vars['mm_multiLayout']->value) {?>multi_layout<?php } else { ?>single_layout<?php }?>
        <?php if ((isset($_smarty_tpl->tpl_vars['mm_config']->value['ETS_MM_STICKY_DISMOBILE'])) && $_smarty_tpl->tpl_vars['mm_config']->value['ETS_MM_STICKY_DISMOBILE']) {?> disable_sticky_mobile <?php }?>
        <?php if ((isset($_smarty_tpl->tpl_vars['mm_config']->value['ETS_MM_DISPLAY_SUBMENU_BY_CLICK'])) && $_smarty_tpl->tpl_vars['mm_config']->value['ETS_MM_DISPLAY_SUBMENU_BY_CLICK']) {?> click_open_submenu<?php } else { ?> hover <?php }?>
        <?php if ((isset($_smarty_tpl->tpl_vars['mm_config']->value['ETS_MM_MENU_ALIGNMENT'])) && $_smarty_tpl->tpl_vars['mm_config']->value['ETS_MM_MENU_ALIGNMENT']) {?> mm_menu_<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['mm_config']->value['ETS_MM_MENU_ALIGNMENT'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
 <?php }?>
        "
        data-bggray="<?php if ((isset($_smarty_tpl->tpl_vars['mm_config']->value['ETS_MM_ACTIVE_BG_GRAY'])) && $_smarty_tpl->tpl_vars['mm_config']->value['ETS_MM_ACTIVE_BG_GRAY']) {?>bg_gray<?php }?>"
        >
        <div class="ets_mm_megamenu_content">
            <div class="container">
                <div class="ets_mm_megamenu_content_content">
                    <div class="ybc-menu-toggle ybc-menu-btn closed">
                        <span class="ybc-menu-button-toggle_icon">
                            <i class="icon-bar"></i>
                            <i class="icon-bar"></i>
                            <i class="icon-bar"></i>
                        </span>
                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Menu','mod'=>'ets_megamenu'),$_smarty_tpl ) );?>

                    </div>
                    <?php echo $_smarty_tpl->tpl_vars['menusHTML']->value;?>

                </div>
            </div>
        </div>
    </div>
<?php }
}
}

<?php
/* Smarty version 4.3.4, created on 2026-01-06 09:44:57
  from '/home/www/public/modules/ybc_blog/views/templates/hook/list_helper.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_695ccb890e59d9_21182903',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1ec93338b73f6315241e3f0e4e4aef14db45d31a' => 
    array (
      0 => '/home/www/public/modules/ybc_blog/views/templates/hook/list_helper.tpl',
      1 => 1656021600,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_695ccb890e59d9_21182903 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
 type="text/javascript">
var text_update_position='<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Successfully updated','mod'=>'ybc_blog'),$_smarty_tpl ) );?>
';
<?php echo '</script'; ?>
>
<div class="panel ybc-blog-panel<?php if ((isset($_smarty_tpl->tpl_vars['class']->value))) {?> <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['class']->value,'html','UTF-8' ));
}?>">
    <div class="panel-heading">
        <?php if ((isset($_smarty_tpl->tpl_vars['icon']->value)) && $_smarty_tpl->tpl_vars['icon']->value) {?>
            <i class="icon <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['icon']->value,'html','UTF-8' ));?>
"></i>
        <?php }?>
        <?php echo $_smarty_tpl->tpl_vars['title']->value;?>

        <?php if ((isset($_smarty_tpl->tpl_vars['totalRecords']->value)) && $_smarty_tpl->tpl_vars['totalRecords']->value > 0) {?><span class="badge"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['totalRecords']->value ));?>
</span><?php }?>
        <span class="panel-heading-action">
            <?php if (!(isset($_smarty_tpl->tpl_vars['show_add_new']->value)) || (isset($_smarty_tpl->tpl_vars['show_add_new']->value)) && $_smarty_tpl->tpl_vars['show_add_new']->value) {?>            
                <a class="list-toolbar-btn" href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['currentIndex']->value,'html','UTF-8' ));?>
">
                    <span data-placement="top" data-html="true" data-original-title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Add new','mod'=>'ybc_blog'),$_smarty_tpl ) );?>
" class="label-tooltip" data-toggle="tooltip" title="">
        				<i class="process-icon-new"></i>
                    </span>
                </a>            
            <?php }?>
            <?php if ((isset($_smarty_tpl->tpl_vars['preview_link']->value)) && $_smarty_tpl->tpl_vars['preview_link']->value) {?>            
                <a target="_blank" class="list-toolbar-btn" href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['preview_link']->value,'html','UTF-8' ));?>
">
                    <span data-placement="top" data-html="true" data-original-title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Preview ','mod'=>'ybc_blog'),$_smarty_tpl ) );?>
 (<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['title']->value,'html','UTF-8' ));?>
)" class="label-tooltip" data-toggle="tooltip" title="">
        				<i style="margin-left: 5px;" class="icon-search-plus"></i>
                    </span>
                </a>            
            <?php }?>
        </span>
    </div>
    <?php if ($_smarty_tpl->tpl_vars['fields_list']->value) {?>
        <div class="table-responsive clearfix">
            <form method="post" action="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['currentIndex']->value,'html','UTF-8' ));?>
&list=true">
                <table class="table configuration">
                    <thead>
                        <tr class="nodrag nodrop">
                            <?php if ($_smarty_tpl->tpl_vars['name']->value == 'ybc_comment' && count($_smarty_tpl->tpl_vars['field_values']->value)) {?>
                                <?php echo '<script'; ?>
 type="text/javascript">
                                    var detele_confirm ="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Do you want to delete this item?','mod'=>'ybc_blog'),$_smarty_tpl ) );?>
";
                                <?php echo '</script'; ?>
>
                                <th class="fixed-width-xs">
                                    <span class="title_box">
                                        <input value="" class="message_readed_all" type="checkbox" />
                                    </span>
                                </th>
                            <?php }?>
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['fields_list']->value, 'field', false, 'index');
$_smarty_tpl->tpl_vars['field']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['index']->value => $_smarty_tpl->tpl_vars['field']->value) {
$_smarty_tpl->tpl_vars['field']->do_else = false;
?>
                                <th class="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['index']->value,'html','UTF-8' ));?>
">
                                    <span class="title_box">
                                        <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['field']->value['title'],'html','UTF-8' ));?>

                                        <?php if ((isset($_smarty_tpl->tpl_vars['field']->value['sort'])) && $_smarty_tpl->tpl_vars['field']->value['sort']) {?>
                                            <a href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['currentIndex']->value,'html','UTF-8' ));?>
&sort=<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['index']->value,'html','UTF-8' ));?>
&sort_type=desc&list=true<?php echo $_smarty_tpl->tpl_vars['filter_params']->value;?>
" <?php if ((isset($_smarty_tpl->tpl_vars['sort']->value)) && $_smarty_tpl->tpl_vars['sort']->value == $_smarty_tpl->tpl_vars['index']->value && (isset($_smarty_tpl->tpl_vars['sort_type']->value)) && $_smarty_tpl->tpl_vars['sort_type']->value == 'desc') {?> class="active"<?php }?>><i class="icon-caret-down"></i></a>
                                            <a href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['currentIndex']->value,'html','UTF-8' ));?>
&sort=<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['index']->value,'html','UTF-8' ));?>
&sort_type=asc&list=true<?php echo $_smarty_tpl->tpl_vars['filter_params']->value;?>
" <?php if ((isset($_smarty_tpl->tpl_vars['sort']->value)) && $_smarty_tpl->tpl_vars['sort']->value == $_smarty_tpl->tpl_vars['index']->value && (isset($_smarty_tpl->tpl_vars['sort_type']->value)) && $_smarty_tpl->tpl_vars['sort_type']->value == 'asc') {?> class="active"<?php }?>><i class="icon-caret-up"></i></a>
                                        <?php }?>
                                    </span>
                                </th>                            
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                            <?php if ($_smarty_tpl->tpl_vars['show_action']->value) {?>
                                <th style="text-align: center;"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Action','mod'=>'ybc_blog'),$_smarty_tpl ) );?>
</th>
                            <?php }?>
                        </tr>
                        <?php if ($_smarty_tpl->tpl_vars['show_toolbar']->value) {?>
                            <tr class="nodrag nodrop filter row_hover">
                                <?php if ($_smarty_tpl->tpl_vars['name']->value == 'ybc_comment' && count($_smarty_tpl->tpl_vars['field_values']->value)) {?>
                                    <th>&nbsp;</th>
                                <?php }?>
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['fields_list']->value, 'field', false, 'index');
$_smarty_tpl->tpl_vars['field']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['index']->value => $_smarty_tpl->tpl_vars['field']->value) {
$_smarty_tpl->tpl_vars['field']->do_else = false;
?>
                                    <th class="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['index']->value,'html','UTF-8' ));?>
">
                                        <?php if ((isset($_smarty_tpl->tpl_vars['field']->value['filter'])) && $_smarty_tpl->tpl_vars['field']->value['filter']) {?>
                                            <?php if ($_smarty_tpl->tpl_vars['field']->value['type'] == 'text') {?>
                                                <input class="filter" name="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['index']->value,'html','UTF-8' ));?>
" type="text" <?php if ((isset($_smarty_tpl->tpl_vars['field']->value['width']))) {?>style="width: <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['field']->value['width'] ));?>
px;"<?php }?> <?php if ((isset($_smarty_tpl->tpl_vars['field']->value['active']))) {?>value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['field']->value['active'],'html','UTF-8' ));?>
"<?php }?>/>
                                            <?php }?>
                                            <?php if ($_smarty_tpl->tpl_vars['field']->value['type'] == 'select' || $_smarty_tpl->tpl_vars['field']->value['type'] == 'active') {?>
                                                <select  <?php if ((isset($_smarty_tpl->tpl_vars['field']->value['width']))) {?>style="width: <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['field']->value['width'] ));?>
px;"<?php }?>  name="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['index']->value,'html','UTF-8' ));?>
">
                                                    <?php if ($_smarty_tpl->tpl_vars['index']->value != 'has_post') {?>
                                                        <option value=""> -- </option>
                                                    <?php }?>
                                                    <?php if ((isset($_smarty_tpl->tpl_vars['field']->value['filter_list']['list'])) && $_smarty_tpl->tpl_vars['field']->value['filter_list']['list']) {?>
                                                        <?php $_smarty_tpl->_assignInScope('id_option', $_smarty_tpl->tpl_vars['field']->value['filter_list']['id_option']);?>
                                                        <?php $_smarty_tpl->_assignInScope('value', $_smarty_tpl->tpl_vars['field']->value['filter_list']['value']);?>
                                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['field']->value['filter_list']['list'], 'option');
$_smarty_tpl->tpl_vars['option']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['option']->value) {
$_smarty_tpl->tpl_vars['option']->do_else = false;
?>
                                                            <option <?php if (($_smarty_tpl->tpl_vars['field']->value['active'] !== '' && $_smarty_tpl->tpl_vars['field']->value['active'] == $_smarty_tpl->tpl_vars['option']->value[$_smarty_tpl->tpl_vars['id_option']->value]) || ($_smarty_tpl->tpl_vars['field']->value['active'] == '' && $_smarty_tpl->tpl_vars['index']->value == 'has_post' && $_smarty_tpl->tpl_vars['option']->value[$_smarty_tpl->tpl_vars['id_option']->value] == 1)) {?> selected="selected"<?php }?> value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['option']->value[$_smarty_tpl->tpl_vars['id_option']->value],'html','UTF-8' ));?>
"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['option']->value[$_smarty_tpl->tpl_vars['value']->value],'html','UTF-8' ));?>
</option>
                                                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                                    <?php }?>
                                                </select>                                            
                                            <?php }?>
                                            <?php if ($_smarty_tpl->tpl_vars['field']->value['type'] == 'int') {?>
                                                <label for="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['index']->value,'html','UTF-8' ));?>
_min"><input type="text" placeholder="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Min','mod'=>'ybc_blog'),$_smarty_tpl ) );?>
" name="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['index']->value,'html','UTF-8' ));?>
_min" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['field']->value['active']['min'],'html','UTF-8' ));?>
" /></label>
                                                <label for="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['index']->value,'html','UTF-8' ));?>
_max"><input type="text" placeholder="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Max','mod'=>'ybc_blog'),$_smarty_tpl ) );?>
" name="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['index']->value,'html','UTF-8' ));?>
_max" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['field']->value['active']['max'],'html','UTF-8' ));?>
" /></label>
                                            <?php }?>
                                        <?php } elseif (($_smarty_tpl->tpl_vars['field']->value['type'] == 'text' && (isset($_smarty_tpl->tpl_vars['index']->value)) && $_smarty_tpl->tpl_vars['index']->value == 'input_box')) {?>
                                            <div class="md-checkbox">
                                                <label>
                                                  <input id="bulk_action_select_all" onclick="$('table').find('td input:checkbox').prop('checked', $(this).prop('checked')); ybc_blog_updateBulkMenu();" value="" type="checkbox" />
                                                  <i class="md-checkbox-control"></i>
                                                </label>
                                            </div>
                                        <?php } else { ?>
                                           <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>' -- ','mod'=>'ybc_blog'),$_smarty_tpl ) );?>

                                        <?php }?>
                                    </th>
                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                <?php if ($_smarty_tpl->tpl_vars['show_action']->value) {?>
                                    <th class="actions">
                                        <span class="pull-right">
                                            <input type="hidden" name="post_filter" value="yes" />
                                            <?php if ($_smarty_tpl->tpl_vars['show_reset']->value) {?><a  class="btn btn-warning"  href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['currentIndex']->value,'html','UTF-8' ));?>
&list=true"><i class="icon-eraser"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Reset','mod'=>'ybc_blog'),$_smarty_tpl ) );?>
</a><?php }?>
                                            <button class="btn btn-default" name="ybc_submit_<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['name']->value,'html','UTF-8' ));?>
" id="ybc_submit_<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['name']->value,'html','UTF-8' ));?>
" type="submit">
            									<i class="icon-search"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Filter','mod'=>'ybc_blog'),$_smarty_tpl ) );?>

            								</button>
                                        </span>
                                    </th>
                                <?php }?>
                            </tr>
                        <?php }?>
                    </thead>
                    <?php if ($_smarty_tpl->tpl_vars['field_values']->value) {?>
                    <tbody id="list-<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['name']->value,'html','UTF-8' ));?>
">
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['field_values']->value, 'row');
$_smarty_tpl->tpl_vars['row']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->do_else = false;
?>
                            <tr <?php if ($_smarty_tpl->tpl_vars['name']->value == 'ybc_post') {?>id="posts-<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['row']->value['id_post'] ));?>
"<?php }?> <?php if ($_smarty_tpl->tpl_vars['name']->value == 'ybc_category') {?>id="cateogires-<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['row']->value['id_category'] ));?>
"<?php }?> <?php if ($_smarty_tpl->tpl_vars['name']->value == 'ybc_slide') {?>id="slides-<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['row']->value['id_slide'] ));?>
"<?php }?> <?php if ($_smarty_tpl->tpl_vars['name']->value == 'ybc_gallery') {?>id="galleries-<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['row']->value['id_gallery'] ));?>
"<?php }?> <?php if ((isset($_smarty_tpl->tpl_vars['row']->value['viewed'])) && !$_smarty_tpl->tpl_vars['row']->value['viewed']) {?>class="no-viewed"<?php }?>>
                                <?php if ($_smarty_tpl->tpl_vars['name']->value == 'ybc_comment') {?>
                                    <td class="message-more-action">
                                        <input type="checkbox" name="message_readed[<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['row']->value['id_comment'] ));?>
]" class="message_readed" value="1" data-approved="<?php if ($_smarty_tpl->tpl_vars['row']->value['approved']) {?>1<?php } else { ?>0<?php }?>" data-viewed="<?php if ($_smarty_tpl->tpl_vars['row']->value['viewed']) {?>1<?php } else { ?>0<?php }?>"/>
                                    </td> 
                                <?php }?> 
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['fields_list']->value, 'field', false, 'key');
$_smarty_tpl->tpl_vars['field']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['field']->value) {
$_smarty_tpl->tpl_vars['field']->do_else = false;
?>                             
                                    <td class="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['key']->value,'html','UTF-8' ));?>
 <?php if ((isset($_smarty_tpl->tpl_vars['sort']->value)) && $_smarty_tpl->tpl_vars['sort']->value == $_smarty_tpl->tpl_vars['key']->value && (isset($_smarty_tpl->tpl_vars['sort_type']->value)) && $_smarty_tpl->tpl_vars['sort_type']->value == 'asc' && (isset($_smarty_tpl->tpl_vars['field']->value['update_position'])) && $_smarty_tpl->tpl_vars['field']->value['update_position']) {?>pointer dragHandle center<?php }?>" >
                                        <?php if ((isset($_smarty_tpl->tpl_vars['field']->value['rating_field'])) && $_smarty_tpl->tpl_vars['field']->value['rating_field']) {?>
                                            <?php if ((isset($_smarty_tpl->tpl_vars['row']->value[$_smarty_tpl->tpl_vars['key']->value])) && $_smarty_tpl->tpl_vars['row']->value[$_smarty_tpl->tpl_vars['key']->value] > 0) {?>
                                                <?php
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? (int)$_smarty_tpl->tpl_vars['row']->value[$_smarty_tpl->tpl_vars['key']->value]+1 - (1) : 1-((int)$_smarty_tpl->tpl_vars['row']->value[$_smarty_tpl->tpl_vars['key']->value])+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = 1, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration === 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration === $_smarty_tpl->tpl_vars['i']->total;?>
                                                    <div class="star star_on"></div>
                                                <?php }
}
?>
                                                <?php if ((int)$_smarty_tpl->tpl_vars['row']->value[$_smarty_tpl->tpl_vars['key']->value] < 5) {?>
                                                    <?php
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? 5+1 - ((int)$_smarty_tpl->tpl_vars['row']->value[$_smarty_tpl->tpl_vars['key']->value]+1) : (int)$_smarty_tpl->tpl_vars['row']->value[$_smarty_tpl->tpl_vars['key']->value]+1-(5)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = (int)$_smarty_tpl->tpl_vars['row']->value[$_smarty_tpl->tpl_vars['key']->value]+1, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration === 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration === $_smarty_tpl->tpl_vars['i']->total;?>
                                                        <div class="star"></div>
                                                    <?php }
}
?>
                                                <?php }?>
                                            <?php } else { ?>
                                                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>' -- ','mod'=>'ybc_blog'),$_smarty_tpl ) );?>

                                            <?php }?>
                                        <?php } elseif ($_smarty_tpl->tpl_vars['field']->value['type'] != 'active') {?>
                                            <?php if ($_smarty_tpl->tpl_vars['key']->value == 'input_box') {?>
                                                <input type="checkbox" name="bulk_<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['name']->value,'html','UTF-8' ));?>
[<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['row']->value[$_smarty_tpl->tpl_vars['identifier']->value],'html','UTF-8' ));?>
]" value="1"  />
                                            <?php } else { ?>
                                                <?php if ((isset($_smarty_tpl->tpl_vars['field']->value['update_position'])) && $_smarty_tpl->tpl_vars['field']->value['update_position']) {?>
                                                    <div class="dragGroup">
                                                    <span class="positions">
                                                <?php }?>
                                                <?php if ((isset($_smarty_tpl->tpl_vars['row']->value[$_smarty_tpl->tpl_vars['key']->value])) && !is_array($_smarty_tpl->tpl_vars['row']->value[$_smarty_tpl->tpl_vars['key']->value])) {
if ((isset($_smarty_tpl->tpl_vars['field']->value['strip_tag'])) && !$_smarty_tpl->tpl_vars['field']->value['strip_tag']) {
echo $_smarty_tpl->tpl_vars['row']->value[$_smarty_tpl->tpl_vars['key']->value];
} else {
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'truncate' ][ 0 ], array( strip_tags((string) $_smarty_tpl->tpl_vars['row']->value[$_smarty_tpl->tpl_vars['key']->value]),120,'...' )),'html','UTF-8' ));
}
}?>
                                                <?php if ((isset($_smarty_tpl->tpl_vars['row']->value[$_smarty_tpl->tpl_vars['key']->value])) && is_array($_smarty_tpl->tpl_vars['row']->value[$_smarty_tpl->tpl_vars['key']->value]) && (isset($_smarty_tpl->tpl_vars['row']->value[$_smarty_tpl->tpl_vars['key']->value]['image_field'])) && $_smarty_tpl->tpl_vars['row']->value[$_smarty_tpl->tpl_vars['key']->value]['image_field']) {?>
                                                    <a class="ybc_fancy" href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['row']->value[$_smarty_tpl->tpl_vars['key']->value]['img_url'],'html','UTF-8' ));?>
"><img style="<?php if ((isset($_smarty_tpl->tpl_vars['row']->value[$_smarty_tpl->tpl_vars['key']->value]['height'])) && $_smarty_tpl->tpl_vars['row']->value[$_smarty_tpl->tpl_vars['key']->value]['height']) {?>max-height: <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['row']->value[$_smarty_tpl->tpl_vars['key']->value]['height'] ));?>
px;<?php }
if ((isset($_smarty_tpl->tpl_vars['row']->value[$_smarty_tpl->tpl_vars['key']->value]['width'])) && $_smarty_tpl->tpl_vars['row']->value[$_smarty_tpl->tpl_vars['key']->value]['width']) {?>max-width: <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['row']->value[$_smarty_tpl->tpl_vars['key']->value]['width'] ));?>
px;<?php }?>" src="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['row']->value[$_smarty_tpl->tpl_vars['key']->value]['img_url'],'html','UTF-8' ));?>
" /></a>
                                                <?php }?> 
                                                <?php if ((isset($_smarty_tpl->tpl_vars['field']->value['update_position'])) && $_smarty_tpl->tpl_vars['field']->value['update_position']) {?>
                                                    </div>
                                                    </div>
                                                <?php }?>  
                                            <?php }?>                                     
                                        <?php } else { ?>
                                            <?php if ($_smarty_tpl->tpl_vars['name']->value == 'ybc_post') {?>                                            
                                                <?php if ((isset($_smarty_tpl->tpl_vars['row']->value[$_smarty_tpl->tpl_vars['key']->value])) && $_smarty_tpl->tpl_vars['row']->value[$_smarty_tpl->tpl_vars['key']->value]) {?>
                                                    <?php if ($_smarty_tpl->tpl_vars['row']->value[$_smarty_tpl->tpl_vars['key']->value] == -1) {?>
                                                        <a href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['currentIndex']->value,'html','UTF-8' ));?>
&<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['identifier']->value,'html','UTF-8' ));?>
=<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['row']->value[$_smarty_tpl->tpl_vars['identifier']->value],'html','UTF-8' ));?>
&change_enabled=1&field=<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['key']->value,'html','UTF-8' ));?>
" class="list-action field-<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['key']->value,'html','UTF-8' ));?>
 list-action-enable action-disabled  list-item-<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['row']->value[$_smarty_tpl->tpl_vars['identifier']->value],'html','UTF-8' ));?>
" data-id="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['row']->value[$_smarty_tpl->tpl_vars['identifier']->value],'html','UTF-8' ));?>
" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Click to mark as published','mod'=>'ybc_blog'),$_smarty_tpl ) );?>
"><i class="icon-clock-o"></i></a>
                                                        <?php if ((isset($_smarty_tpl->tpl_vars['row']->value['status_author'])) && $_smarty_tpl->tpl_vars['row']->value['status_author'] == -1 && $_smarty_tpl->tpl_vars['key']->value == 'enabled') {?><span style="color:black;"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Hidden','mod'=>'ybc_blog'),$_smarty_tpl ) );?>
</span><?php }?>
                                                    <?php } elseif ($_smarty_tpl->tpl_vars['row']->value[$_smarty_tpl->tpl_vars['key']->value] == 2 && (isset($_smarty_tpl->tpl_vars['row']->value['datetime_active']))) {?>
                                                        <a href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['currentIndex']->value,'html','UTF-8' ));?>
&<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['identifier']->value,'html','UTF-8' ));?>
=<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['row']->value[$_smarty_tpl->tpl_vars['identifier']->value],'html','UTF-8' ));?>
&change_enabled=1&field=<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['key']->value,'html','UTF-8' ));?>
" class="list-action field-<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['key']->value,'html','UTF-8' ));?>
 list-action-enable action-disabled  list-item-<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['row']->value[$_smarty_tpl->tpl_vars['identifier']->value],'html','UTF-8' ));?>
" data-id="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['row']->value[$_smarty_tpl->tpl_vars['identifier']->value],'html','UTF-8' ));?>
" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Click to mark as published','mod'=>'ybc_blog'),$_smarty_tpl ) );?>
"><i class="icon-clock-o"></i></a>
                                                        <span style="color:black;">(<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['row']->value['datetime_active'],'html','UTF-8' ));?>
)</span><?php if ((isset($_smarty_tpl->tpl_vars['row']->value['status_author'])) && $_smarty_tpl->tpl_vars['row']->value['status_author'] == -1 && $_smarty_tpl->tpl_vars['key']->value == 'enabled') {?><span style="color:black;"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Hidden','mod'=>'ybc_blog'),$_smarty_tpl ) );?>
</span><?php }?>
                                                    <?php } elseif ($_smarty_tpl->tpl_vars['row']->value[$_smarty_tpl->tpl_vars['key']->value] == -2) {?>
                                                        <a href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['currentIndex']->value,'html','UTF-8' ));?>
&<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['identifier']->value,'html','UTF-8' ));?>
=<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['row']->value[$_smarty_tpl->tpl_vars['identifier']->value],'html','UTF-8' ));?>
&change_enabled=1&field=<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['key']->value,'html','UTF-8' ));?>
" class="list-action field-<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['key']->value,'html','UTF-8' ));?>
 list-action-enable action-draft  list-item-<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['row']->value[$_smarty_tpl->tpl_vars['identifier']->value],'html','UTF-8' ));?>
" data-id="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['row']->value[$_smarty_tpl->tpl_vars['identifier']->value],'html','UTF-8' ));?>
" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Click to mark as published','mod'=>'ybc_blog'),$_smarty_tpl ) );?>
"><i class="fa fa-eye"></i></a>
                                                    <?php } else { ?>
                                                        <a href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['currentIndex']->value,'html','UTF-8' ));?>
&<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['identifier']->value,'html','UTF-8' ));?>
=<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['row']->value[$_smarty_tpl->tpl_vars['identifier']->value],'html','UTF-8' ));?>
&change_enabled=0&field=<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['key']->value,'html','UTF-8' ));?>
" class="list-action field-<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['key']->value,'html','UTF-8' ));?>
 list-action-enable action-enabled list-item-<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['row']->value[$_smarty_tpl->tpl_vars['identifier']->value],'html','UTF-8' ));?>
" data-id="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['row']->value[$_smarty_tpl->tpl_vars['identifier']->value],'html','UTF-8' ));?>
" title="<?php if ($_smarty_tpl->tpl_vars['key']->value == 'is_featured') {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Click to unmark featured','mod'=>'ybc_blog'),$_smarty_tpl ) );
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Click to mark as disabled','mod'=>'ybc_blog'),$_smarty_tpl ) );
}?>"><i class="icon-check"></i></a>
                                                        <?php if ((isset($_smarty_tpl->tpl_vars['row']->value['status_author'])) && $_smarty_tpl->tpl_vars['row']->value['status_author'] == -1 && $_smarty_tpl->tpl_vars['key']->value == 'enabled') {?><span style="color:black;"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Hidden','mod'=>'ybc_blog'),$_smarty_tpl ) );?>
</span><?php }?>
                                                    <?php }?>
                                                <?php } else { ?>
                                                    <a href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['currentIndex']->value,'html','UTF-8' ));?>
&<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['identifier']->value,'html','UTF-8' ));?>
=<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['row']->value[$_smarty_tpl->tpl_vars['identifier']->value],'html','UTF-8' ));?>
&change_enabled=1&field=<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['key']->value,'html','UTF-8' ));?>
" class="list-action field-<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['key']->value,'html','UTF-8' ));?>
 list-action-enable action-disabled  list-item-<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['row']->value[$_smarty_tpl->tpl_vars['identifier']->value],'html','UTF-8' ));?>
" data-id="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['row']->value[$_smarty_tpl->tpl_vars['identifier']->value],'html','UTF-8' ));?>
" title="<?php if ($_smarty_tpl->tpl_vars['key']->value == 'is_featured') {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Click to mark as featured','mod'=>'ybc_blog'),$_smarty_tpl ) );
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Click to publish','mod'=>'ybc_blog'),$_smarty_tpl ) );
}?>"><i class="icon-remove"></i></a>
                                                    <?php if ((isset($_smarty_tpl->tpl_vars['row']->value['status_author'])) && $_smarty_tpl->tpl_vars['row']->value['status_author'] == -1 && $_smarty_tpl->tpl_vars['key']->value == 'enabled') {?><span style="color:black;"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Hidden','mod'=>'ybc_blog'),$_smarty_tpl ) );?>
</span><?php }?>
                                                <?php }?>
                                            <?php } elseif ($_smarty_tpl->tpl_vars['name']->value == 'ybc_blog_employee' || $_smarty_tpl->tpl_vars['name']->value == 'ybc_blog_customer') {?>
                                                <?php if ($_smarty_tpl->tpl_vars['key']->value != 'has_post') {?>
                                                    <?php if (!(isset($_smarty_tpl->tpl_vars['row']->value['id_profile'])) || ((isset($_smarty_tpl->tpl_vars['row']->value['id_profile'])) && $_smarty_tpl->tpl_vars['row']->value['id_profile'] != 1)) {?>
                                                        <?php if ((isset($_smarty_tpl->tpl_vars['row']->value[$_smarty_tpl->tpl_vars['key']->value])) && $_smarty_tpl->tpl_vars['row']->value[$_smarty_tpl->tpl_vars['key']->value]) {?>
                                                            <?php if ($_smarty_tpl->tpl_vars['row']->value[$_smarty_tpl->tpl_vars['key']->value] == 1) {?>
                                                                <a href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['currentIndex']->value,'html','UTF-8' ));?>
&<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['identifier']->value,'html','UTF-8' ));?>
=<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['row']->value[$_smarty_tpl->tpl_vars['identifier']->value],'html','UTF-8' ));?>
&change_enabled=0&field=<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['key']->value,'html','UTF-8' ));?>
" class="list-action field-<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['key']->value,'html','UTF-8' ));?>
 list-action-enable action-enabled list-item-<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['row']->value[$_smarty_tpl->tpl_vars['identifier']->value],'html','UTF-8' ));?>
" data-id="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['row']->value[$_smarty_tpl->tpl_vars['identifier']->value],'html','UTF-8' ));?>
" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Click to suspend','mod'=>'ybc_blog'),$_smarty_tpl ) );?>
"><i class="icon-check"></i></a>
                                                            <?php } else { ?>
                                                                <a href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['currentIndex']->value,'html','UTF-8' ));?>
&<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['identifier']->value,'html','UTF-8' ));?>
=<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['row']->value[$_smarty_tpl->tpl_vars['identifier']->value],'html','UTF-8' ));?>
&change_enabled=1&field=<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['key']->value,'html','UTF-8' ));?>
" class="list-action field-<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['key']->value,'html','UTF-8' ));?>
 list-action-enable action-disabled  list-item-<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['row']->value[$_smarty_tpl->tpl_vars['identifier']->value],'html','UTF-8' ));?>
" data-id="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['row']->value[$_smarty_tpl->tpl_vars['identifier']->value],'html','UTF-8' ));?>
" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Click to active','mod'=>'ybc_blog'),$_smarty_tpl ) );?>
"><i class="icon-remove"></i><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Hide posts','mod'=>'ybc_blog'),$_smarty_tpl ) );?>
</a>
                                                            <?php }?>
                                                        <?php } else { ?>
                                                            <a href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['currentIndex']->value,'html','UTF-8' ));?>
&<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['identifier']->value,'html','UTF-8' ));?>
=<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['row']->value[$_smarty_tpl->tpl_vars['identifier']->value],'html','UTF-8' ));?>
&change_enabled=1&field=<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['key']->value,'html','UTF-8' ));?>
" class="list-action field-<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['key']->value,'html','UTF-8' ));?>
 list-action-enable action-disabled  list-item-<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['row']->value[$_smarty_tpl->tpl_vars['identifier']->value],'html','UTF-8' ));?>
" data-id="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['row']->value[$_smarty_tpl->tpl_vars['identifier']->value],'html','UTF-8' ));?>
" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Click to active','mod'=>'ybc_blog'),$_smarty_tpl ) );?>
"><i class="icon-remove"></i></a>
                                                        <?php }?>
                                                    <?php } else { ?>
                                                        <span  class="list-action list-action-enable action-enabled"><i class="icon-check"></i></span>
                                                    <?php }?>
                                                <?php } else { ?>
                                                    <?php if ((isset($_smarty_tpl->tpl_vars['row']->value[$_smarty_tpl->tpl_vars['key']->value])) && $_smarty_tpl->tpl_vars['row']->value[$_smarty_tpl->tpl_vars['key']->value]) {?>
                                                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Yes','mod'=>'ybc_blog'),$_smarty_tpl ) );?>

                                                    <?php } else { ?>
                                                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No','mod'=>'ybc_blog'),$_smarty_tpl ) );?>

                                                    <?php }?>
                                                <?php }?>
                                            <?php } elseif ($_smarty_tpl->tpl_vars['name']->value == 'ybc_comment') {?>
                                                <?php if ($_smarty_tpl->tpl_vars['key']->value == 'approved') {?>
                                                    <?php if ((isset($_smarty_tpl->tpl_vars['row']->value[$_smarty_tpl->tpl_vars['key']->value])) && $_smarty_tpl->tpl_vars['row']->value[$_smarty_tpl->tpl_vars['key']->value]) {?>
                                                        <a href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['currentIndex']->value,'html','UTF-8' ));?>
&<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['identifier']->value,'html','UTF-8' ));?>
=<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['row']->value[$_smarty_tpl->tpl_vars['identifier']->value],'html','UTF-8' ));?>
&change_enabled=0&field=<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['key']->value,'html','UTF-8' ));?>
" class="list-action field-<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['key']->value,'html','UTF-8' ));?>
 list-action-enable action-enabled list-item-<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['row']->value[$_smarty_tpl->tpl_vars['identifier']->value],'html','UTF-8' ));?>
" data-id="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['row']->value[$_smarty_tpl->tpl_vars['identifier']->value],'html','UTF-8' ));?>
" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Click to mark as unapproved','mod'=>'ybc_blog'),$_smarty_tpl ) );?>
"><i class="icon-check"></i></a>
                                                    <?php } else { ?>
                                                        <a href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['currentIndex']->value,'html','UTF-8' ));?>
&<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['identifier']->value,'html','UTF-8' ));?>
=<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['row']->value[$_smarty_tpl->tpl_vars['identifier']->value],'html','UTF-8' ));?>
&change_enabled=1&field=<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['key']->value,'html','UTF-8' ));?>
" class="list-action field-<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['key']->value,'html','UTF-8' ));?>
 list-action-enable action-disabled  list-item-<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['row']->value[$_smarty_tpl->tpl_vars['identifier']->value],'html','UTF-8' ));?>
" data-id="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['row']->value[$_smarty_tpl->tpl_vars['identifier']->value],'html','UTF-8' ));?>
" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Click to mark as approved','mod'=>'ybc_blog'),$_smarty_tpl ) );?>
"><i class="icon-remove"></i></a>
                                                    <?php }?>
                                                <?php } else { ?>
                                                    <?php if ((isset($_smarty_tpl->tpl_vars['row']->value[$_smarty_tpl->tpl_vars['key']->value])) && $_smarty_tpl->tpl_vars['row']->value[$_smarty_tpl->tpl_vars['key']->value]) {?>
                                                        <a href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['currentIndex']->value,'html','UTF-8' ));?>
&<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['identifier']->value,'html','UTF-8' ));?>
=<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['row']->value[$_smarty_tpl->tpl_vars['identifier']->value],'html','UTF-8' ));?>
&change_enabled=0&field=<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['key']->value,'html','UTF-8' ));?>
" class="list-action field-<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['key']->value,'html','UTF-8' ));?>
 list-action-enable action-enabled list-item-<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['row']->value[$_smarty_tpl->tpl_vars['identifier']->value],'html','UTF-8' ));?>
" data-id="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['row']->value[$_smarty_tpl->tpl_vars['identifier']->value],'html','UTF-8' ));?>
" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Click to unreport','mod'=>'ybc_blog'),$_smarty_tpl ) );?>
"><i class="icon-check"></i></a>
                                                    <?php } else { ?>
                                                        <a href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['currentIndex']->value,'html','UTF-8' ));?>
&<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['identifier']->value,'html','UTF-8' ));?>
=<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['row']->value[$_smarty_tpl->tpl_vars['identifier']->value],'html','UTF-8' ));?>
&change_enabled=1&field=<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['key']->value,'html','UTF-8' ));?>
" class="list-action field-<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['key']->value,'html','UTF-8' ));?>
 list-action-enable action-disabled  list-item-<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['row']->value[$_smarty_tpl->tpl_vars['identifier']->value],'html','UTF-8' ));?>
" data-id="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['row']->value[$_smarty_tpl->tpl_vars['identifier']->value],'html','UTF-8' ));?>
" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Click to mark as reported','mod'=>'ybc_blog'),$_smarty_tpl ) );?>
"><i class="icon-remove"></i></a>
                                                    <?php }?>
                                                <?php }?>
                                            <?php } elseif ($_smarty_tpl->tpl_vars['name']->value == 'ybc_gallery') {?>
                                                <?php if ($_smarty_tpl->tpl_vars['key']->value == 'is_featured') {?>
                                                    <?php if ((isset($_smarty_tpl->tpl_vars['row']->value[$_smarty_tpl->tpl_vars['key']->value])) && $_smarty_tpl->tpl_vars['row']->value[$_smarty_tpl->tpl_vars['key']->value]) {?>
                                                        <a href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['currentIndex']->value,'html','UTF-8' ));?>
&<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['identifier']->value,'html','UTF-8' ));?>
=<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['row']->value[$_smarty_tpl->tpl_vars['identifier']->value],'html','UTF-8' ));?>
&change_enabled=0&field=<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['key']->value,'html','UTF-8' ));?>
" class="list-action field-<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['key']->value,'html','UTF-8' ));?>
 list-action-enable action-enabled list-item-<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['row']->value[$_smarty_tpl->tpl_vars['identifier']->value],'html','UTF-8' ));?>
" data-id="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['row']->value[$_smarty_tpl->tpl_vars['identifier']->value],'html','UTF-8' ));?>
" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Click to unmark featured','mod'=>'ybc_blog'),$_smarty_tpl ) );?>
"><i class="icon-check"></i></a>
                                                    <?php } else { ?>
                                                        <a href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['currentIndex']->value,'html','UTF-8' ));?>
&<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['identifier']->value,'html','UTF-8' ));?>
=<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['row']->value[$_smarty_tpl->tpl_vars['identifier']->value],'html','UTF-8' ));?>
&change_enabled=1&field=<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['key']->value,'html','UTF-8' ));?>
" class="list-action field-<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['key']->value,'html','UTF-8' ));?>
 list-action-enable action-disabled  list-item-<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['row']->value[$_smarty_tpl->tpl_vars['identifier']->value],'html','UTF-8' ));?>
" data-id="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['row']->value[$_smarty_tpl->tpl_vars['identifier']->value],'html','UTF-8' ));?>
" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Click to mark as featured','mod'=>'ybc_blog'),$_smarty_tpl ) );?>
"><i class="icon-remove"></i></a>
                                                    <?php }?>
                                                <?php } else { ?>
                                                    <?php if ((isset($_smarty_tpl->tpl_vars['row']->value[$_smarty_tpl->tpl_vars['key']->value])) && $_smarty_tpl->tpl_vars['row']->value[$_smarty_tpl->tpl_vars['key']->value]) {?>
                                                        <a href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['currentIndex']->value,'html','UTF-8' ));?>
&<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['identifier']->value,'html','UTF-8' ));?>
=<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['row']->value[$_smarty_tpl->tpl_vars['identifier']->value],'html','UTF-8' ));?>
&change_enabled=0&field=<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['key']->value,'html','UTF-8' ));?>
" class="list-action field-<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['key']->value,'html','UTF-8' ));?>
 list-action-enable action-enabled list-item-<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['row']->value[$_smarty_tpl->tpl_vars['identifier']->value],'html','UTF-8' ));?>
" data-id="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['row']->value[$_smarty_tpl->tpl_vars['identifier']->value],'html','UTF-8' ));?>
" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Click to disable','mod'=>'ybc_blog'),$_smarty_tpl ) );?>
"><i class="icon-check"></i></a>
                                                    <?php } else { ?>
                                                        <a href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['currentIndex']->value,'html','UTF-8' ));?>
&<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['identifier']->value,'html','UTF-8' ));?>
=<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['row']->value[$_smarty_tpl->tpl_vars['identifier']->value],'html','UTF-8' ));?>
&change_enabled=1&field=<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['key']->value,'html','UTF-8' ));?>
" class="list-action field-<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['key']->value,'html','UTF-8' ));?>
 list-action-enable action-disabled  list-item-<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['row']->value[$_smarty_tpl->tpl_vars['identifier']->value],'html','UTF-8' ));?>
" data-id="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['row']->value[$_smarty_tpl->tpl_vars['identifier']->value],'html','UTF-8' ));?>
" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Click to enable','mod'=>'ybc_blog'),$_smarty_tpl ) );?>
"><i class="icon-remove"></i></a>
                                                    <?php }?>
                                                <?php }?>
                                            <?php } elseif ($_smarty_tpl->tpl_vars['name']->value == 'ybc_polls') {?>
                                                <?php if ((isset($_smarty_tpl->tpl_vars['row']->value[$_smarty_tpl->tpl_vars['key']->value])) && $_smarty_tpl->tpl_vars['row']->value[$_smarty_tpl->tpl_vars['key']->value]) {?>
                                                    <a name="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['name']->value,'html','UTF-8' ));?>
"  href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['currentIndex']->value,'html','UTF-8' ));?>
&<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['identifier']->value,'html','UTF-8' ));?>
=<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['row']->value[$_smarty_tpl->tpl_vars['identifier']->value],'html','UTF-8' ));?>
&change_enabled=0&field=<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['key']->value,'html','UTF-8' ));?>
" class="list-action field-<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['key']->value,'html','UTF-8' ));?>
 list-action-enable action-enabled list-item-<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['row']->value[$_smarty_tpl->tpl_vars['identifier']->value],'html','UTF-8' ));?>
" data-id="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['row']->value[$_smarty_tpl->tpl_vars['identifier']->value],'html','UTF-8' ));?>
" title="<?php if ($_smarty_tpl->tpl_vars['key']->value == 'reported') {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Click to unreport','mod'=>'ybc_blog'),$_smarty_tpl ) );
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Click to mark this as unhelpful','mod'=>'ybc_blog'),$_smarty_tpl ) );
}?>"><i class="icon-check"></i></a>
                                                <?php } else { ?>
                                                    <a name="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['name']->value,'html','UTF-8' ));?>
" href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['currentIndex']->value,'html','UTF-8' ));?>
&<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['identifier']->value,'html','UTF-8' ));?>
=<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['row']->value[$_smarty_tpl->tpl_vars['identifier']->value],'html','UTF-8' ));?>
&change_enabled=1&field=<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['key']->value,'html','UTF-8' ));?>
" class="list-action field-<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['key']->value,'html','UTF-8' ));?>
 list-action-enable action-disabled  list-item-<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['row']->value[$_smarty_tpl->tpl_vars['identifier']->value],'html','UTF-8' ));?>
" data-id="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['row']->value[$_smarty_tpl->tpl_vars['identifier']->value],'html','UTF-8' ));?>
" title="<?php if ($_smarty_tpl->tpl_vars['key']->value == 'reported') {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Click to mark as reported','mod'=>'ybc_blog'),$_smarty_tpl ) );
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Click to mark this as helpful','mod'=>'ybc_blog'),$_smarty_tpl ) );
}?>"><i class="icon-remove"></i></a>
                                                <?php }?>
                                            <?php } else { ?>
                                                <?php if ((isset($_smarty_tpl->tpl_vars['row']->value[$_smarty_tpl->tpl_vars['key']->value])) && $_smarty_tpl->tpl_vars['row']->value[$_smarty_tpl->tpl_vars['key']->value]) {?>
                                                    <a name="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['name']->value,'html','UTF-8' ));?>
"  href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['currentIndex']->value,'html','UTF-8' ));?>
&<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['identifier']->value,'html','UTF-8' ));?>
=<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['row']->value[$_smarty_tpl->tpl_vars['identifier']->value],'html','UTF-8' ));?>
&change_enabled=0&field=<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['key']->value,'html','UTF-8' ));?>
" class="list-action field-<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['key']->value,'html','UTF-8' ));?>
 list-action-enable action-enabled list-item-<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['row']->value[$_smarty_tpl->tpl_vars['identifier']->value],'html','UTF-8' ));?>
" data-id="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['row']->value[$_smarty_tpl->tpl_vars['identifier']->value],'html','UTF-8' ));?>
" title="<?php if ($_smarty_tpl->tpl_vars['key']->value == 'reported') {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Click to unreport','mod'=>'ybc_blog'),$_smarty_tpl ) );
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Click to Disabled','mod'=>'ybc_blog'),$_smarty_tpl ) );
}?>"><i class="icon-check"></i></a>
                                                <?php } else { ?>
                                                    <a name="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['name']->value,'html','UTF-8' ));?>
" href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['currentIndex']->value,'html','UTF-8' ));?>
&<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['identifier']->value,'html','UTF-8' ));?>
=<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['row']->value[$_smarty_tpl->tpl_vars['identifier']->value],'html','UTF-8' ));?>
&change_enabled=1&field=<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['key']->value,'html','UTF-8' ));?>
" class="list-action field-<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['key']->value,'html','UTF-8' ));?>
 list-action-enable action-disabled  list-item-<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['row']->value[$_smarty_tpl->tpl_vars['identifier']->value],'html','UTF-8' ));?>
" data-id="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['row']->value[$_smarty_tpl->tpl_vars['identifier']->value],'html','UTF-8' ));?>
" title="<?php if ($_smarty_tpl->tpl_vars['key']->value == 'reported') {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Click to mark as reported','mod'=>'ybc_blog'),$_smarty_tpl ) );
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Click to Enabled','mod'=>'ybc_blog'),$_smarty_tpl ) );
}?>"><i class="icon-remove"></i></a>
                                                <?php }?>
                                            <?php }?>
                                        <?php }?>
                                    </td>
                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                <?php if ($_smarty_tpl->tpl_vars['show_action']->value) {?>
                                    <td class="text-right">                                
                                            <div class="btn-group-action">
                                                <div class="btn-group pull-right">
                                                    <?php if ($_smarty_tpl->tpl_vars['name']->value != 'ybc_polls') {?>
                                                        <?php if ((isset($_smarty_tpl->tpl_vars['row']->value['child_view_url'])) && $_smarty_tpl->tpl_vars['row']->value['child_view_url']) {?>
                                                            <a class="btn btn-default" href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['row']->value['child_view_url'],'html','UTF-8' ));?>
"><?php if ($_smarty_tpl->tpl_vars['name']->value == "ybc_category") {?><i class="icon-search-plus"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Sub categories','mod'=>'ybc_blog'),$_smarty_tpl ) );
} else { ?><i class="icon-search-plus"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'View','mod'=>'ybc_blog'),$_smarty_tpl ) );
}?></a>
                                                        <?php } else { ?>
                                                            <a class="edit btn btn-default" href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['currentIndex']->value,'html','UTF-8' ));?>
&<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['identifier']->value,'html','UTF-8' ));?>
=<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['row']->value[$_smarty_tpl->tpl_vars['identifier']->value],'html','UTF-8' ));?>
"><i class="icon-pencil"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Edit','mod'=>'ybc_blog'),$_smarty_tpl ) );?>
</a>
                                                        <?php }?>
                                                    <?php if (in_array('delete',$_smarty_tpl->tpl_vars['actions']->value) || ((isset($_smarty_tpl->tpl_vars['row']->value['view_url'])) && $_smarty_tpl->tpl_vars['row']->value['view_url']) || ((isset($_smarty_tpl->tpl_vars['row']->value['view_post_url'])) && $_smarty_tpl->tpl_vars['row']->value['view_post_url']) || ((isset($_smarty_tpl->tpl_vars['row']->value['delete_post_url'])) && $_smarty_tpl->tpl_vars['row']->value['delete_post_url'])) {?>
                                                        <button data-toggle="dropdown" class="btn btn-default dropdown-toggle">
                                    						<i class="icon-caret-down"></i>&nbsp;
                                    					</button>
                                                        <ul class="dropdown-menu">
                                                            <?php if (in_array('approve',$_smarty_tpl->tpl_vars['actions']->value) && !$_smarty_tpl->tpl_vars['row']->value['approved']) {?>
                                                                <li><a onclick="return confirm('<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Do you want to approve this item?','mod'=>'ybc_blog'),$_smarty_tpl ) );?>
');" href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['currentIndex']->value,'html','UTF-8' ));?>
&<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['identifier']->value,'html','UTF-8' ));?>
=<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['row']->value[$_smarty_tpl->tpl_vars['identifier']->value],'html','UTF-8' ));?>
&approve=yes"><i class="icon-check"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Approve','mod'=>'ybc_blog'),$_smarty_tpl ) );?>
</a></li>
                                                                <li class="divider"></li>
                                                            <?php }?>
                                                            <?php if ((isset($_smarty_tpl->tpl_vars['row']->value['child_view_url'])) && $_smarty_tpl->tpl_vars['row']->value['child_view_url']) {?>
                                                                <li><a class="edit" href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['currentIndex']->value,'html','UTF-8' ));?>
&<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['identifier']->value,'html','UTF-8' ));?>
=<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['row']->value[$_smarty_tpl->tpl_vars['identifier']->value],'html','UTF-8' ));?>
"><i class="icon-pencil"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Edit','mod'=>'ybc_blog'),$_smarty_tpl ) );?>
</a></li>
                                                                <li class="divider"></li>
                                                            <?php }?>
                                                            <?php if ((isset($_smarty_tpl->tpl_vars['row']->value['view_url'])) && $_smarty_tpl->tpl_vars['row']->value['view_url']) {?>
                                                                <li><a target="_blank" href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['row']->value['view_url'],'html','UTF-8' ));?>
"><i class="icon icon-external-link" aria-hidden="true"></i> <?php if ((isset($_smarty_tpl->tpl_vars['row']->value['view_text'])) && $_smarty_tpl->tpl_vars['row']->value['view_text']) {?> <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['row']->value['view_text'],'html','UTF-8' ));
} else { ?> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'View','mod'=>'ybc_blog'),$_smarty_tpl ) );
}?></a></li>
                                                                <li class="divider"></li>
                                                            <?php }?>
                                                            <?php if ((isset($_smarty_tpl->tpl_vars['row']->value['view_post_url'])) && $_smarty_tpl->tpl_vars['row']->value['view_post_url']) {?>
                                                                <li><a target="_blank" href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['row']->value['view_post_url'],'html','UTF-8' ));?>
"><i class="icon-search-plus"></i><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'View posts','mod'=>'ybc_blog'),$_smarty_tpl ) );?>
</a></li>
                                                                <li class="divider"></li>
                                                            <?php }?>
                                                            <?php if ((isset($_smarty_tpl->tpl_vars['row']->value['delete_post_url'])) && $_smarty_tpl->tpl_vars['row']->value['delete_post_url']) {?>
                                                                <li><a onclick="return confirm('<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Do you want to delete posts?','mod'=>'ybc_blog'),$_smarty_tpl ) );?>
');" href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['row']->value['delete_post_url'],'html','UTF-8' ));?>
"><i class="icon-trash"></i><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Delete all posts','mod'=>'ybc_blog'),$_smarty_tpl ) );?>
</a></li>
                                                                <li class="divider"></li>
                                                            <?php }?>
                                                            <?php if (in_array('delete',$_smarty_tpl->tpl_vars['actions']->value)) {?>
                                                                <li><a onclick="return confirm('<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Do you want to delete this item?','mod'=>'ybc_blog'),$_smarty_tpl ) );?>
');" href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['currentIndex']->value,'html','UTF-8' ));?>
&<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['identifier']->value,'html','UTF-8' ));?>
=<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['row']->value[$_smarty_tpl->tpl_vars['identifier']->value],'html','UTF-8' ));?>
&del=yes"><i class="icon-trash"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Delete','mod'=>'ybc_blog'),$_smarty_tpl ) );?>
</a></li>
                                                            <?php }?>
                                                        </ul>
                                                    <?php }?>
                                                    <?php } else { ?>
                                                        <a class="edit btn btn-default" onclick="return confirm('<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Do you want to delete this item?','mod'=>'ybc_blog'),$_smarty_tpl ) );?>
');" href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['currentIndex']->value,'html','UTF-8' ));?>
&<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['identifier']->value,'html','UTF-8' ));?>
=<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['row']->value[$_smarty_tpl->tpl_vars['identifier']->value],'html','UTF-8' ));?>
&del=yes"><i class="icon-trash"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Delete','mod'=>'ybc_blog'),$_smarty_tpl ) );?>
</a>
                                                        <button data-toggle="dropdown" class="btn btn-default dropdown-toggle">
                                    						<i class="icon-caret-down"></i>&nbsp;
                                    					</button>
                                                        <ul class="dropdown-menu">
                                                            <li><a class="send_mail_form" href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['currentIndex']->value,'html','UTF-8' ));?>
&<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['identifier']->value,'html','UTF-8' ));?>
=<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['row']->value[$_smarty_tpl->tpl_vars['identifier']->value],'html','UTF-8' ));?>
&sendmailform=yes"><i class="icon-email"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Send email','mod'=>'ybc_blog'),$_smarty_tpl ) );?>
</a></li>
                                                            <li class="divider"></li>
                                                            <?php if ((isset($_smarty_tpl->tpl_vars['row']->value['id_user'])) && $_smarty_tpl->tpl_vars['row']->value['id_user']) {?>
                                                                <li><a href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['row']->value['link_customer'],'html','UTF-8' ));?>
"><i class="icon-user"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'View customer','mod'=>'ybc_blog'),$_smarty_tpl ) );?>
</a></li>
                                                                <li class="divider"></li>
                                                            <?php }?> 
                                                        </ul>
                                                    <?php }?>
                                                </div>
                                            </div>
                                     </td>
                                <?php }?>
                            </tr>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>                    
                    </tbody>
                    <?php }?>
                </table>
                <?php if ((isset($_smarty_tpl->tpl_vars['show_bulk_action']->value)) && $_smarty_tpl->tpl_vars['show_bulk_action']->value) {?>
                    <div id="catalog-actions" class="col order-first">
                        <div class="row">
                            <div class="col">
                                <div class="d-inline-block hide">
                                    <div class="btn-group dropdown bulk-catalog">
                                        <button id="product_bulk_menu" class="btn btn-outline-secondary dropdown-toggle" data-toggle="dropdown" aria-expanded="true" style="color:black;">
                                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Bulk actions','mod'=>'ybc_blog'),$_smarty_tpl ) );?>

                                            <i class="icon-caret-up"></i>
                                        </button>
                                        <div class="dropdown-menu" x-placement="bottom-start" style="position: absolute; transform: translate3d(0px, 35px, 0px); top: 0px; left: 0px; will-change: transform;">
                                            <div class="dropdown-divider"></div>
                                            <button class="dropdown-item" name="submitBulkEnabled" type="submit" style="border:none;background:none" onclick="return confirm('<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Do you want to enable selected item?','mod'=>'ybc_blog','js'=>1),$_smarty_tpl ) );?>
');">
                                                <i class="icon-check" aria-hidden="true"></i>
                                                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Enable selection','mod'=>'ybc_blog'),$_smarty_tpl ) );?>

                                            </button>
                                            <button class="dropdown-item" name="submitBulkDiasabled" type="submit" style="border:none;background:none" onclick="return confirm('<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Do you want to disable selected item?','mod'=>'ybc_blog','js'=>1),$_smarty_tpl ) );?>
');">
                                                <i class="icon-remove" aria-hidden="true"></i>
                                                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Disable selection','mod'=>'ybc_blog'),$_smarty_tpl ) );?>

                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php }?>
                <?php if (!$_smarty_tpl->tpl_vars['field_values']->value) {?>
                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No items found','mod'=>'ybc_blog'),$_smarty_tpl ) );?>

                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['name']->value == 'ybc_comment') {?>
                    <select id="bulk_action_message" name="bulk_action_message" style="display:none;width: 200px;">
                        <option value=""><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Bulk actions','mod'=>'ybc_blog'),$_smarty_tpl ) );?>
</option>
                        <option value="mark_as_approved"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Approved','mod'=>'ybc_blog'),$_smarty_tpl ) );?>
</option>
                        <option value="mark_as_unapproved"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Unapproved','mod'=>'ybc_blog'),$_smarty_tpl ) );?>
</option>
                        <option value="mark_as_read"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Mark as read','mod'=>'ybc_blog'),$_smarty_tpl ) );?>
</option>
                        <option value="mark_as_unread"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Mark as unread','mod'=>'ybc_blog'),$_smarty_tpl ) );?>
</option>
                        <option value="delete_selected"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Delete selected','mod'=>'ybc_blog'),$_smarty_tpl ) );?>
</option>
                    </select>
                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['paggination']->value) {?>
                    <div class="ybc_paggination" style="margin-top: 10px;">
                        <?php echo $_smarty_tpl->tpl_vars['paggination']->value;?>

                    </div>
                <?php }?>
            </form>
        </div>
    <?php }?>
</div>
</span>
<?php if ($_smarty_tpl->tpl_vars['name']->value == 'ybc_polls') {?>
    <div class="popup-form-send-email-polls">
        <div class="popup-form-send-email-polls-content">
        </div>
    </div>
<?php }
echo '<script'; ?>
 type="text/javascript">
    function ybc_blog_updateBulkMenu()
    {
        $('tbody input[type="checkbox"]').parent().removeClass('checked');
        $('tbody input[type="checkbox"]:checked').parent().addClass('checked');
        if($('tbody input[type="checkbox"]:checked').length) {
            $('#product_bulk_menu').removeAttr('disabled').parents('.d-inline-block').removeClass('hide');
        } else {
            $('#product_bulk_menu').attr('disabled','disabled').parents('.d-inline-block').addClass('hide');
        }
    }
    $(document).ready(function(){
       $(document).on('click','tbody input[type="checkbox"]',function(){
            ybc_blog_updateBulkMenu();
        }); 
    });
<?php echo '</script'; ?>
><?php }
}

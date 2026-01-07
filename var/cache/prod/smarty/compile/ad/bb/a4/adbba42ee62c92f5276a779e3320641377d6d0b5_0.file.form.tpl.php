<?php
/* Smarty version 4.3.4, created on 2026-01-06 09:45:05
  from '/home/www/public/modules/ybc_blog/views/templates/admin/_configure/helpers/form/form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_695ccb914d0dd1_84517982',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'adbba42ee62c92f5276a779e3320641377d6d0b5' => 
    array (
      0 => '/home/www/public/modules/ybc_blog/views/templates/admin/_configure/helpers/form/form.tpl',
      1 => 1656021600,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_695ccb914d0dd1_84517982 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1545349149695ccb914422c2_29354784', "input");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_173258484695ccb9146b081_18548922', "field");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1015955672695ccb914885e2_91908020', "footer");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_64050062695ccb9149e830_90305700', "legend");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_351744981695ccb914a8398_52446872', "input_row");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1295763903695ccb914ca499_38918381', "label");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "helpers/form/form.tpl");
}
/* {block "input"} */
class Block_1545349149695ccb914422c2_29354784 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'input' => 
  array (
    0 => 'Block_1545349149695ccb914422c2_29354784',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home/www/public/vendor/smarty/smarty/libs/plugins/modifier.count.php','function'=>'smarty_modifier_count',),));
?>

    <?php if ($_smarty_tpl->tpl_vars['input']->value['type'] == 'switch') {?>
    	<span class="switch prestashop-switch fixed-width-lg">
    		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['input']->value['values'], 'value');
$_smarty_tpl->tpl_vars['value']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->do_else = false;
?>
    		<input type="radio" name="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['input']->value['name'],'html','UTF-8' ));?>
"<?php if ($_smarty_tpl->tpl_vars['value']->value['value'] == 1) {?> id="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['input']->value['name'],'html','UTF-8' ));?>
_on"<?php } else { ?> id="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['input']->value['name'],'html','UTF-8' ));?>
_off"<?php }?> value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['value']->value['value'],'html','UTF-8' ));?>
"<?php if ($_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']] == $_smarty_tpl->tpl_vars['value']->value['value']) {?> checked="checked"<?php }
if ((isset($_smarty_tpl->tpl_vars['input']->value['disabled'])) && $_smarty_tpl->tpl_vars['input']->value['disabled']) {?> disabled="disabled"<?php }?>/>
    		<label <?php if ($_smarty_tpl->tpl_vars['value']->value['value'] == 1) {?> for="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['input']->value['name'],'html','UTF-8' ));?>
_on"<?php } else { ?> for="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['input']->value['name'],'html','UTF-8' ));?>
_off"<?php }?>><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['value']->value['label'],'html','UTF-8' ));?>
</label>
    		<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    		<a class="slide-button btn"></a>
    	</span>
    <?php } elseif ($_smarty_tpl->tpl_vars['input']->value['type'] == 'checkbox') {?>
            <?php if ((isset($_smarty_tpl->tpl_vars['input']->value['values']['query'])) && $_smarty_tpl->tpl_vars['input']->value['values']['query']) {?>
                <?php $_smarty_tpl->_assignInScope('id_checkbox', (($_smarty_tpl->tpl_vars['input']->value['name']).('_')).('all'));?>
                <?php $_smarty_tpl->_assignInScope('checkall', true);?>
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['input']->value['values']['query'], 'value');
$_smarty_tpl->tpl_vars['value']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->do_else = false;
?>
    				<?php if (!((isset($_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']])) && is_array($_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']]) && $_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']] && in_array($_smarty_tpl->tpl_vars['value']->value['value'],$_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']]))) {?> 
                        <?php $_smarty_tpl->_assignInScope('checkall', false);?>
                    <?php }?>
    			<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?> 
                <div class="checkbox_all checkbox">
					<label for="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['id_checkbox']->value,'html','UTF-8' ));?>
"><input type="checkbox" name="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['input']->value['name'],'html','UTF-8' ));?>
[]" id="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['id_checkbox']->value,'html','UTF-8' ));?>
" <?php if ((isset($_smarty_tpl->tpl_vars['value']->value['value']))) {?> value="0"<?php }
if ($_smarty_tpl->tpl_vars['checkall']->value) {?> checked="checked"<?php }?> /><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Select/Unselect all','mod'=>'ybc_blog'),$_smarty_tpl ) );?>
</label>
				</div>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['input']->value['values']['query'], 'value');
$_smarty_tpl->tpl_vars['value']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->do_else = false;
?>
    				<?php $_smarty_tpl->_assignInScope('id_checkbox', call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( (($_smarty_tpl->tpl_vars['input']->value['name']).('_')).($_smarty_tpl->tpl_vars['value']->value[$_smarty_tpl->tpl_vars['input']->value['values']['id']]),'html','UTF-8' )));?>
    				<div class="checkbox<?php if ((isset($_smarty_tpl->tpl_vars['input']->value['expand'])) && strtolower($_smarty_tpl->tpl_vars['input']->value['expand']['default']) == 'show') {?> hidden<?php }?>">
    					<label for="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['id_checkbox']->value,'html','UTF-8' ));?>
"><input type="checkbox" name="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['input']->value['name'],'html','UTF-8' ));?>
[]" id="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['id_checkbox']->value,'html','UTF-8' ));?>
" <?php if ((isset($_smarty_tpl->tpl_vars['value']->value['value']))) {?> value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['value']->value['value'],'html','UTF-8' ));?>
"<?php }
if ((isset($_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']])) && is_array($_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']]) && $_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']] && in_array($_smarty_tpl->tpl_vars['value']->value['value'],$_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']])) {?> checked="checked"<?php }?> /><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['value']->value[$_smarty_tpl->tpl_vars['input']->value['values']['name']],'html','UTF-8' ));?>
</label>
    				</div>
    			<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?> 
            <?php }?>
    <?php } elseif ($_smarty_tpl->tpl_vars['input']->value['type'] == 'file_lang') {?>
		<?php if (smarty_modifier_count($_smarty_tpl->tpl_vars['languages']->value) > 1) {?>
		  <div class="form-group">
		<?php }?>
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['languages']->value, 'language');
$_smarty_tpl->tpl_vars['language']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['language']->value) {
$_smarty_tpl->tpl_vars['language']->do_else = false;
?>
				<?php if (smarty_modifier_count($_smarty_tpl->tpl_vars['languages']->value) > 1) {?>
					<div class="translatable-field lang-<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['language']->value['id_lang'] ));?>
" <?php if ($_smarty_tpl->tpl_vars['language']->value['id_lang'] != $_smarty_tpl->tpl_vars['defaultFormLanguage']->value) {?>style="display:none"<?php }?>>
				<?php }?>
					<div class="col-lg-9">
						<div class="dummyfile input-group sass">
							<input id="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['input']->value['name'],'html','UTF-8' ));?>
_<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['language']->value['id_lang'] ));?>
" type="file" name="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['input']->value['name'],'html','UTF-8' ));?>
_<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['language']->value['id_lang'] ));?>
" class="hide-file-upload" />
							<span class="input-group-addon"><i class="icon-file"></i></span>
							<input id="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['input']->value['name'],'html','UTF-8' ));?>
_<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['language']->value['id_lang'] ));?>
-name" type="text" class="disabled" name="filename" readonly />
							<span class="input-group-btn">
								<button id="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['input']->value['name'],'html','UTF-8' ));?>
_<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['language']->value['id_lang'] ));?>
-selectbutton" type="button" name="submitAddAttachments" class="btn btn-default">
									<i class="icon-folder-open"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Choose a file','d'=>'Admin.Actions'),$_smarty_tpl ) );?>

								</button>
							</span>
						</div>
                        <?php if ((isset($_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']])) && $_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']] && $_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']][$_smarty_tpl->tpl_vars['language']->value['id_lang']]) {?>
                            <label class="control-label col-lg-3 uploaded_image_label" style="font-style: italic;"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Uploaded image: ','mod'=>'ybc_blog'),$_smarty_tpl ) );?>
</label>
                            <div class="col-lg-9 uploaded_img_wrapper">
                        		<a  class="ybc_fancy" href="<?php if ($_smarty_tpl->tpl_vars['input']->value['name'] == 'thumb') {
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['image_baseurl_thumb']->value,'html','UTF-8' ));
} else {
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['image_baseurl']->value,'html','UTF-8' ));
}
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']][$_smarty_tpl->tpl_vars['language']->value['id_lang']],'html','UTF-8' ));?>
"><img title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Click to see full size image','mod'=>'ybc_blog'),$_smarty_tpl ) );?>
" style="display: inline-block; max-width: 200px;" src="<?php if ($_smarty_tpl->tpl_vars['input']->value['name'] == 'thumb') {
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['image_baseurl_thumb']->value,'html','UTF-8' ));
} else {
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['image_baseurl']->value,'html','UTF-8' ));
}
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']][$_smarty_tpl->tpl_vars['language']->value['id_lang']],'html','UTF-8' ));?>
" /></a>
                                <?php if ($_smarty_tpl->tpl_vars['input']->value['name'] == 'thumb' && (isset($_smarty_tpl->tpl_vars['thumb_del_link']->value)) && $_smarty_tpl->tpl_vars['thumb_del_link']->value && !((isset($_smarty_tpl->tpl_vars['input']->value['required'])) && $_smarty_tpl->tpl_vars['input']->value['required'])) {?>
                                    <a class="delete_url"  style="display: inline-block; text-decoration: none!important;" href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['thumb_del_link']->value,'html','UTF-8' ));?>
&id_lang=<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['language']->value['id_lang'] ));?>
"><span style="color: #666"><i style="font-size: 20px;" class="process-icon-delete"></i></span></a>
                                <?php }?>
                                <?php if ($_smarty_tpl->tpl_vars['input']->value['name'] == 'image' && (isset($_smarty_tpl->tpl_vars['img_del_link']->value)) && $_smarty_tpl->tpl_vars['img_del_link']->value && !((isset($_smarty_tpl->tpl_vars['input']->value['required'])) && $_smarty_tpl->tpl_vars['input']->value['required'])) {?>
                                    <a class="delete_url"  style="display: inline-block; text-decoration: none!important;" href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['img_del_link']->value,'html','UTF-8' ));?>
&id_lang=<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['language']->value['id_lang'] ));?>
"><span style="color: #666"><i style="font-size: 20px;" class="process-icon-delete"></i></span></a>
                                <?php }?>
                            </div>
						<?php }?>
					</div>
				<?php if (smarty_modifier_count($_smarty_tpl->tpl_vars['languages']->value) > 1) {?>
					<div class="col-lg-2">
						<button type="button" class="btn btn-default dropdown-toggle" tabindex="-1" data-toggle="dropdown">
							<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['language']->value['iso_code'],'html','UTF-8' ));?>

							<span class="caret"></span>
						</button>
						<ul class="dropdown-menu">
							<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['languages']->value, 'lang');
$_smarty_tpl->tpl_vars['lang']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['lang']->value) {
$_smarty_tpl->tpl_vars['lang']->do_else = false;
?>
							<li><a href="javascript:hideOtherLanguage(<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['lang']->value['id_lang'] ));?>
);" tabindex="-1"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['lang']->value['name'],'html','UTF-8' ));?>
</a></li>
							<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
						</ul>
					</div>
				<?php }?>
				<?php if (smarty_modifier_count($_smarty_tpl->tpl_vars['languages']->value) > 1) {?>
					</div>
				<?php }?>
				<?php echo '<script'; ?>
>
				$(document).ready(function(){
					$("#<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['input']->value['name'],'html','UTF-8' ));?>
_<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['language']->value['id_lang'] ));?>
-selectbutton").click(function(e){
						$("#<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['input']->value['name'],'html','UTF-8' ));?>
_<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['language']->value['id_lang'] ));?>
").trigger('click');
					});
					$("#<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['input']->value['name'],'html','UTF-8' ));?>
_<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['language']->value['id_lang'] ));?>
").change(function(e){
						var val = $(this).val();
						var file = val.split(/[\\/]/);
						$("#<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['input']->value['name'],'html','UTF-8' ));?>
_<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['language']->value['id_lang'] ));?>
-name").val(file[file.length-1]);
					});
				});
			<?php echo '</script'; ?>
>
			<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		<?php if (smarty_modifier_count($_smarty_tpl->tpl_vars['languages']->value) > 1) {?>
		  </div>
		<?php }?>
    <?php } else { ?>
        <?php 
$_smarty_tpl->inheritance->callParent($_smarty_tpl, $this, '{$smarty.block.parent}');
?>
               
    <?php }?>            
<?php
}
}
/* {/block "input"} */
/* {block "field"} */
class Block_173258484695ccb9146b081_18548922 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'field' => 
  array (
    0 => 'Block_173258484695ccb9146b081_18548922',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php if ($_smarty_tpl->tpl_vars['input']->value['type'] != 'select_category' && $_smarty_tpl->tpl_vars['input']->value['type'] != 'profile_employee' && $_smarty_tpl->tpl_vars['input']->value['type'] != 'blog_categories' && $_smarty_tpl->tpl_vars['input']->value['type'] != 'products_search' && $_smarty_tpl->tpl_vars['input']->value['name'] != 'url_alias') {?>
        <?php 
$_smarty_tpl->inheritance->callParent($_smarty_tpl, $this, '{$smarty.block.parent}');
?>

    	<?php if ($_smarty_tpl->tpl_vars['input']->value['type'] == 'file' && (!(isset($_smarty_tpl->tpl_vars['input']->value['imageType'])) || (isset($_smarty_tpl->tpl_vars['input']->value['imageType'])) && $_smarty_tpl->tpl_vars['input']->value['imageType'] != 'thumb') && (isset($_smarty_tpl->tpl_vars['display_img']->value)) && $_smarty_tpl->tpl_vars['display_img']->value) {?>
            <label class="control-label col-lg-3 uploaded_image_label" style="font-style: italic;"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Uploaded image: ','mod'=>'ybc_blog'),$_smarty_tpl ) );?>
</label>
            <div class="col-lg-9 uploaded_img_wrapper">
        		<a  class="ybc_fancy" href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['display_img']->value,'html','UTF-8' ));?>
"><img title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Click to see full size image','mod'=>'ybc_blog'),$_smarty_tpl ) );?>
" style="display: inline-block; max-width: 200px;" src="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['display_img']->value,'html','UTF-8' ));?>
" /></a>
                <?php if ((isset($_smarty_tpl->tpl_vars['img_del_link']->value)) && $_smarty_tpl->tpl_vars['img_del_link']->value && !((isset($_smarty_tpl->tpl_vars['input']->value['required'])) && $_smarty_tpl->tpl_vars['input']->value['required'])) {?>
                    <a class="delete_url" style="display: inline-block; text-decoration: none!important;" href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['img_del_link']->value,'html','UTF-8' ));?>
"><span style="color: #666"><i style="font-size: 20px;" class="process-icon-delete"></i></span></a>
                <?php }?>
            </div>
        <?php } elseif ($_smarty_tpl->tpl_vars['input']->value['type'] == 'file' && (isset($_smarty_tpl->tpl_vars['input']->value['imageType'])) && $_smarty_tpl->tpl_vars['input']->value['imageType'] == 'thumb' && (isset($_smarty_tpl->tpl_vars['display_thumb']->value)) && $_smarty_tpl->tpl_vars['display_thumb']->value) {?>
    	    <label class="control-label col-lg-3 uploaded_image_label" style="font-style: italic;"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Uploaded image: ','mod'=>'ybc_blog'),$_smarty_tpl ) );?>
</label>
            <div class="col-lg-9 uploaded_img_wrapper">
        		<a  class="ybc_fancy" href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['display_thumb']->value,'html','UTF-8' ));?>
"><img title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Click to see full size image','mod'=>'ybc_blog'),$_smarty_tpl ) );?>
" style="display: inline-block; max-width: 200px;" src="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['display_thumb']->value,'html','UTF-8' ));?>
" /></a>
                <?php if ((isset($_smarty_tpl->tpl_vars['thumb_del_link']->value)) && $_smarty_tpl->tpl_vars['thumb_del_link']->value && !((isset($_smarty_tpl->tpl_vars['input']->value['required'])) && $_smarty_tpl->tpl_vars['input']->value['required'])) {?>
                    <a class="delete_url"  style="display: inline-block; text-decoration: none!important;" href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['thumb_del_link']->value,'html','UTF-8' ));?>
"><span style="color: #666"><i style="font-size: 20px;" class="process-icon-delete"></i></span></a>
                <?php }?>
            </div>
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['input']->value['name'] == 'YBC_BLOG_ENABLE_RSS') {?>
            <span class="link_rss rss_setting">
                <label class="link-rss-label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'RSS feed URLs','mod'=>'ybc_blog'),$_smarty_tpl ) );?>
:</label>
                <span class="link-rss-lang">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['urls_rss']->value, 'url_rss');
$_smarty_tpl->tpl_vars['url_rss']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['url_rss']->value) {
$_smarty_tpl->tpl_vars['url_rss']->do_else = false;
?>
                        <span>
                            <img src="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['url_rss']->value['img'],'html','UTF-8' ));?>
"/><a href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['url_rss']->value['link'],'html','UTF-8' ));?>
" target="_blank">&nbsp;<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['url_rss']->value['link'],'html','UTF-8' ));?>
</a>
                        </span>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </span>
            </span>
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['input']->value['name'] == 'YBC_BLOG_ENABLE_SITEMAP') {?>
            <span class="link_sitemap sitemap_setting">
                <label class="link-sitemap-label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Sitemap URLs','mod'=>'ybc_blog'),$_smarty_tpl ) );?>
</label>
                <br />
                <span class="main-sitemap"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Main sitemap','mod'=>'ybc_blog'),$_smarty_tpl ) );?>
:&nbsp;<a href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['url_sitemap']->value,'html','UTF-8' ));?>
" target="_blank"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['url_sitemap']->value,'html','UTF-8' ));?>
</a></span>
                <span class="link-sitemap-lang">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['urls_sitemap']->value, 'url_sitemap');
$_smarty_tpl->tpl_vars['url_sitemap']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['url_sitemap']->value) {
$_smarty_tpl->tpl_vars['url_sitemap']->do_else = false;
?>
                        <span>
                            <img src="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['url_sitemap']->value['img'],'html','UTF-8' ));?>
"/><a href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['url_sitemap']->value['link'],'html','UTF-8' ));?>
" target="_blank">&nbsp;<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['url_sitemap']->value['link'],'html','UTF-8' ));?>
</a><br />
                        </span>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </span>
            </span>
        <?php }?>
    <?php } else { ?>
        <?php if ($_smarty_tpl->tpl_vars['input']->value['type'] == 'select_category') {?>
            <div class="col-lg-9">
                <select id="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['input']->value['name'],'html','UTF-8' ));?>
" class=" fixed-width-xl" name="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['input']->value['name'],'html','UTF-8' ));?>
">
                    <?php echo $_smarty_tpl->tpl_vars['input']->value['blogCategoryotpionsHtml'];?>

                </select>
            </div>
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['input']->value['type'] == 'blog_categories') {?>
            <div class="col-lg-9">
                <ul style="float: left; padding: 0; margin-top: 5px;">
                    <?php echo $_smarty_tpl->tpl_vars['input']->value['html_content'];?>

                </ul>
                <?php if ((isset($_smarty_tpl->tpl_vars['input']->value['desc'])) && $_smarty_tpl->tpl_vars['input']->value['desc']) {?>
                    <p class="help-block"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['input']->value['desc'],'html','UTF-8' ));?>
 </p>
                <?php }?>
            </div>
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['input']->value['type'] == 'profile_employee') {?>
            <div class="col-lg-9">
                <ul style="float: left; padding: 0; margin-top: 5px">
                    <?php if ($_smarty_tpl->tpl_vars['input']->value['profiles']) {?>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['input']->value['profiles'], 'profile');
$_smarty_tpl->tpl_vars['profile']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['profile']->value) {
$_smarty_tpl->tpl_vars['profile']->do_else = false;
?>
                            <?php if ($_smarty_tpl->tpl_vars['profile']->value['title']) {?>
                                <li style="list-style: none;"><input <?php if (in_array($_smarty_tpl->tpl_vars['profile']->value['id'],$_smarty_tpl->tpl_vars['input']->value['selected_profile'])) {?> checked="checked" <?php }?> style="margin: 2px 7px 0 5px; float: left;" type="checkbox" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['profile']->value['id'],'html','UTF-8' ));?>
" name="profile_employee[]" id="ybc_input_profile_employee_<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( str_replace(' ','_',$_smarty_tpl->tpl_vars['profile']->value['id']),'html','UTF-8' ));?>
" /><label for="ybc_input_profile_employee_<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['profile']->value['id'],'html','UTF-8' ));?>
"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['profile']->value['title'],'html','UTF-8' ));?>
</label></li>
                            <?php }?>                            
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    <?php }?>
                </ul>
            </div>
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['input']->value['name'] == "url_alias") {?>
    		<?php echo '<script'; ?>
 type="text/javascript">
        		<?php if ((isset($_smarty_tpl->tpl_vars['PS_ALLOW_ACCENTED_CHARS_URL']->value)) && $_smarty_tpl->tpl_vars['PS_ALLOW_ACCENTED_CHARS_URL']->value) {?>
        			var PS_ALLOW_ACCENTED_CHARS_URL = 1;
        		<?php } else { ?>
        			var PS_ALLOW_ACCENTED_CHARS_URL = 0;
        		<?php }?>
            <?php echo '</script'; ?>
>
            <?php 
$_smarty_tpl->inheritance->callParent($_smarty_tpl, $this, '{$smarty.block.parent}');
?>

 	    <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['input']->value['type'] == 'products_search') {?>
            <div class="col-lg-9">
                <div id="ajax_choose_product">
                    <input type="hidden" name="inputAccessories" id="inputAccessories" value="<?php if ($_smarty_tpl->tpl_vars['input']->value['selected_products']) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['input']->value['selected_products'], 'accessory');
$_smarty_tpl->tpl_vars['accessory']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['accessory']->value) {
$_smarty_tpl->tpl_vars['accessory']->do_else = false;
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['accessory']->value['id_product'] ));?>
-<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}?>" />
			        <input type="hidden" name="nameAccessories" id="nameAccessories" value="<?php if ($_smarty_tpl->tpl_vars['input']->value['selected_products']) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['input']->value['selected_products'], 'accessory');
$_smarty_tpl->tpl_vars['accessory']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['accessory']->value) {
$_smarty_tpl->tpl_vars['accessory']->do_else = false;
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['accessory']->value['name'],'html','UTF-8' ));?>
¤<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}?>" />
			
    				<div class="input-group">
    					<input type="text" id="product_autocomplete_input" name="product_autocomplete_input" placeholder="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Search product by name, reference or ID','mod'=>'ybc_blog'),$_smarty_tpl ) );?>
" />
    					<span class="input-group-addon"><i class="icon-search"></i></span>
    				</div>
                    <div id="divAccessories">
                        <?php if ($_smarty_tpl->tpl_vars['input']->value['selected_products']) {?>    
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['input']->value['selected_products'], 'accessory');
$_smarty_tpl->tpl_vars['accessory']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['accessory']->value) {
$_smarty_tpl->tpl_vars['accessory']->do_else = false;
?>
                    			<div class="form-control-static form-control-static_<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['accessory']->value['id_product'] ));?>
">
                    				<button type="button" class="btn btn-default" onclick="ybcDelAccessory(<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['accessory']->value['id_product'] ));?>
);" name="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['accessory']->value['id_product'] ));?>
">
                    					<i class="icon-remove text-danger"></i>
                    				</button>
                                    <img src="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['accessory']->value['link_image'],'html','UTF-8' ));?>
" style="width:32px;" />
                    				<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['accessory']->value['name'],'html','UTF-8' ));
if (!empty($_smarty_tpl->tpl_vars['accessory']->value['reference'])) {
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['accessory']->value['reference'],'html','UTF-8' ));
}?>
                    			</div>
                			<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>    		     	
                        <?php }?>		
        			</div>
    			</div>
                <p class="help-block"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Related products are displayed on post details page','mod'=>'ybc_blog'),$_smarty_tpl ) );?>
</p>
            </div>
        <?php }?>
    <?php }
}
}
/* {/block "field"} */
/* {block "footer"} */
class Block_1015955672695ccb914885e2_91908020 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_1015955672695ccb914885e2_91908020',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home/www/public/vendor/smarty/smarty/libs/plugins/function.counter.php','function'=>'smarty_function_counter',),));
?>

    <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'form_submit_btn', null, null);
echo smarty_function_counter(array('name'=>'form_submit_btn'),$_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
	<?php if ((isset($_smarty_tpl->tpl_vars['fieldset']->value['form']['submit'])) || (isset($_smarty_tpl->tpl_vars['fieldset']->value['form']['buttons']))) {?>
		<div class="panel-footer">
            <?php if ((isset($_smarty_tpl->tpl_vars['cancel_url']->value)) && $_smarty_tpl->tpl_vars['cancel_url']->value) {?>
                <a class="btn btn-default" href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['cancel_url']->value,'html','UTF-8' ));?>
"><i class="process-icon-cancel"></i><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Back','mod'=>'ybc_blog'),$_smarty_tpl ) );?>
</a>
            <?php }?>
            <?php if ((isset($_smarty_tpl->tpl_vars['fieldset']->value['form']['submit'])) && !empty($_smarty_tpl->tpl_vars['fieldset']->value['form']['submit'])) {?>
                <div class="img_loading_wrapper">
                                    </div>
    			<button type="submit" value="1"	id="<?php if ((isset($_smarty_tpl->tpl_vars['fieldset']->value['form']['submit']['id']))) {
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['fieldset']->value['form']['submit']['id'],'html','UTF-8' ));
} else {
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['table']->value,'html','UTF-8' ));?>
_form_submit_btn<?php }
if ($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'form_submit_btn') > 1) {?>_<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( ($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'form_submit_btn')-1) ));
}?>" name="<?php if ((isset($_smarty_tpl->tpl_vars['fieldset']->value['form']['submit']['name']))) {
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['fieldset']->value['form']['submit']['name'],'html','UTF-8' ));
} else {
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['submit_action']->value,'html','UTF-8' ));
}
if ((isset($_smarty_tpl->tpl_vars['fieldset']->value['form']['submit']['stay'])) && $_smarty_tpl->tpl_vars['fieldset']->value['form']['submit']['stay']) {?>AndStay<?php }?>" class="<?php if ((isset($_smarty_tpl->tpl_vars['fieldset']->value['form']['submit']['class']))) {
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['fieldset']->value['form']['submit']['class'],'html','UTF-8' ));
} else { ?>btn btn-default pull-right<?php }?>">
    				<i class="<?php if ((isset($_smarty_tpl->tpl_vars['fieldset']->value['form']['submit']['icon']))) {
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['fieldset']->value['form']['submit']['icon'],'html','UTF-8' ));
} else { ?>process-icon-save<?php }?>"></i> <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['fieldset']->value['form']['submit']['title'],'html','UTF-8' ));?>

    			</button>
			<?php }?>
            <?php if ((isset($_smarty_tpl->tpl_vars['fieldset']->value['form']['buttons']))) {?>
                <a class="link_preview_post" href="http://localhost/ps1760/en/blog/post/2-test.html" target="_blank">&nbsp;&nbsp;</a>
    			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['fieldset']->value['form']['buttons'], 'btn', false, 'k');
$_smarty_tpl->tpl_vars['btn']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['btn']->value) {
$_smarty_tpl->tpl_vars['btn']->do_else = false;
?>
    				<?php if ((isset($_smarty_tpl->tpl_vars['btn']->value['href'])) && trim($_smarty_tpl->tpl_vars['btn']->value['href']) != '') {?>
    					<a href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['btn']->value['href'],'html','UTF-8' ));?>
" <?php if ((isset($_smarty_tpl->tpl_vars['btn']->value['id']))) {?>id="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['btn']->value['id'],'html','UTF-8' ));?>
"<?php }?> class="btn btn-default<?php if ((isset($_smarty_tpl->tpl_vars['btn']->value['class']))) {?> <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['btn']->value['class'],'html','UTF-8' ));
}?>" <?php if ((isset($_smarty_tpl->tpl_vars['btn']->value['js'])) && $_smarty_tpl->tpl_vars['btn']->value['js']) {?> onclick="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['btn']->value['js'],'html','UTF-8' ));?>
"<?php }?>><?php if ((isset($_smarty_tpl->tpl_vars['btn']->value['icon']))) {?><i class="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['btn']->value['icon'],'html','UTF-8' ));?>
" ></i> <?php }
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['btn']->value['title'],'html','UTF-8' ));?>
</a>
    				<?php } else { ?>
    					<button type="<?php if ((isset($_smarty_tpl->tpl_vars['btn']->value['type']))) {
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['btn']->value['type'],'html','UTF-8' ));
} else { ?>button<?php }?>" <?php if ((isset($_smarty_tpl->tpl_vars['btn']->value['id']))) {?>id="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['btn']->value['id'],'html','UTF-8' ));?>
"<?php }?> class="btn btn-default<?php if ((isset($_smarty_tpl->tpl_vars['btn']->value['class']))) {?> <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['btn']->value['class'],'html','UTF-8' ));
}?>" name="<?php if ((isset($_smarty_tpl->tpl_vars['btn']->value['name']))) {
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['btn']->value['name'],'html','UTF-8' ));
} else { ?>submitOptions<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['table']->value,'html','UTF-8' ));
}?>"<?php if ((isset($_smarty_tpl->tpl_vars['btn']->value['js'])) && $_smarty_tpl->tpl_vars['btn']->value['js']) {?> onclick="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['btn']->value['js'],'html','UTF-8' ));?>
"<?php }?>><?php if ((isset($_smarty_tpl->tpl_vars['btn']->value['icon']))) {?><i class="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['btn']->value['icon'],'html','UTF-8' ));?>
" ></i> <?php }
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['btn']->value['title'],'html','UTF-8' ));?>
</button>
    				<?php }?>
    			<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
			<?php }?>
		</div>
	<?php }
}
}
/* {/block "footer"} */
/* {block "legend"} */
class Block_64050062695ccb9149e830_90305700 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'legend' => 
  array (
    0 => 'Block_64050062695ccb9149e830_90305700',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<div class="panel-heading">
		<?php if ((isset($_smarty_tpl->tpl_vars['field']->value['image'])) && (isset($_smarty_tpl->tpl_vars['field']->value['title']))) {?><img src="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['field']->value['image'],'html','UTF-8' ));?>
" alt="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['field']->value['title'],'html','UTF-8' ));?>
" /><?php }?>
		<?php if ((isset($_smarty_tpl->tpl_vars['field']->value['icon']))) {?><i class="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['field']->value['icon'],'html','UTF-8' ));?>
"></i><?php }?>
		<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['field']->value['title'],'html','UTF-8' ));?>

        <?php if ((isset($_smarty_tpl->tpl_vars['addNewUrl']->value)) || ((isset($_smarty_tpl->tpl_vars['preview_link']->value)) && $_smarty_tpl->tpl_vars['preview_link']->value)) {?>
            <span class="panel-heading-action">  
                <?php if ((isset($_smarty_tpl->tpl_vars['preview_link']->value)) && $_smarty_tpl->tpl_vars['preview_link']->value) {?>            
                    <a target="_blank" class="list-toolbar-btn" href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['preview_link']->value,'html','UTF-8' ));?>
">
                        <span data-placement="top" data-html="true" data-original-title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'View post ','mod'=>'ybc_blog'),$_smarty_tpl ) );?>
" class="label-tooltip" data-toggle="tooltip" title="">
            				<i style="margin-left: 5px;" class="icon-search-plus"></i>
                        </span>
                    </a>            
                <?php }?>   
                <?php if ((isset($_smarty_tpl->tpl_vars['addNewUrl']->value))) {?>                     
                    <a class="list-toolbar-btn ybc-blog-add-new" href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['addNewUrl']->value,'html','UTF-8' ));?>
">
                        <span data-placement="top" data-html="true" data-original-title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Add new item ','mod'=>'ybc_blog'),$_smarty_tpl ) );?>
" class="label-tooltip" data-toggle="tooltip" title="">
            				<i class="process-icon-new"></i>
                        </span>
                    </a> 
                <?php }?>
                         
            </span>
        <?php }?>
        
         <?php if ((isset($_smarty_tpl->tpl_vars['post_key']->value)) && $_smarty_tpl->tpl_vars['post_key']->value) {?><input type="hidden" name="post_key" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['post_key']->value,'html','UTF-8' ));?>
" /><?php }?>
	</div>
    <?php if ((isset($_smarty_tpl->tpl_vars['configTabs']->value)) && $_smarty_tpl->tpl_vars['configTabs']->value) {?>
        <ul>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['configTabs']->value, 'tab', false, 'tabId');
$_smarty_tpl->tpl_vars['tab']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['tabId']->value => $_smarty_tpl->tpl_vars['tab']->value) {
$_smarty_tpl->tpl_vars['tab']->do_else = false;
?>
                <li class="confi_tab config_tab_<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['tabId']->value,'html','UTF-8' ));?>
" data-tab-id="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['tabId']->value,'html','UTF-8' ));?>
"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['tab']->value,'html','UTF-8' ));?>
</li>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </ul>
    <?php }?>
    <?php if ((isset($_smarty_tpl->tpl_vars['tab_post']->value)) && $_smarty_tpl->tpl_vars['tab_post']->value) {?>
        <ul class="tab_post">
            <li class="confi_tab config_tab_basic active" data-tab-id="basic"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Basic content','mod'=>'ybc_blog'),$_smarty_tpl ) );?>
</li>
            <li class="confi_tab config_tab_seo" data-tab-id="seo"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Seo','mod'=>'ybc_blog'),$_smarty_tpl ) );?>
</li>
            <li class="confi_tab config_tab_option" data-tab-id="option"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Options','mod'=>'ybc_blog'),$_smarty_tpl ) );?>
</li>
        </ul>
    <?php }?>
    <?php if ((isset($_smarty_tpl->tpl_vars['tab_category']->value)) && $_smarty_tpl->tpl_vars['tab_category']->value) {?>
        <ul class="tab_post">
            <li class="confi_tab config_tab_basic active" data-tab-id="basic"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Basic info','mod'=>'ybc_blog'),$_smarty_tpl ) );?>
</li>
            <li class="confi_tab config_tab_seo" data-tab-id="seo"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Seo','mod'=>'ybc_blog'),$_smarty_tpl ) );?>
</li>
        </ul>
    <?php }
}
}
/* {/block "legend"} */
/* {block "input_row"} */
class Block_351744981695ccb914a8398_52446872 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'input_row' => 
  array (
    0 => 'Block_351744981695ccb914a8398_52446872',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php if ($_smarty_tpl->tpl_vars['input']->value['name'] == 'YBC_BLOG_SIDEBAR_POSITION' || $_smarty_tpl->tpl_vars['input']->value['name'] == 'YBC_BLOG_HOME_POST_TYPE') {?>
        <h3 class="title-elements"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Configuration','mod'=>'ybc_blog'),$_smarty_tpl ) );?>
</h3>
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['input']->value['name'] == 'YBC_BLOG_SHOW_LATEST_NEWS_BLOCK') {?>
        <ul id="sidebar-positions" class="sidebar-positions">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['position_sidebar']->value, 'position', false, 'key');
$_smarty_tpl->tpl_vars['position']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['position']->value) {
$_smarty_tpl->tpl_vars['position']->do_else = false;
?>
                <?php $_smarty_tpl->_assignInScope('sidebar', $_smarty_tpl->tpl_vars['sidebars']->value[$_smarty_tpl->tpl_vars['position']->value]);?>
                <?php if ((isset($_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['sidebar']->value['name']]))) {?>
                    <?php $_smarty_tpl->_assignInScope('value_text', $_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['sidebar']->value['name']]);?>
                <?php } else { ?>
                    <?php $_smarty_tpl->_assignInScope('value_text', 0);?>
                <?php }?>
                <li id="sidebar-position-<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['position']->value,'html','UTF-8' ));?>
">
                    <div>
                        <div class="title-sidebar"> 
                        <span class="position_number" >
                            <span>
                            <?php echo $_smarty_tpl->tpl_vars['key']->value+call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( 1 ));?>

                            </span>
                        </span>
                        <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['sidebar']->value['title'],'html','UTF-8' ));?>
 
                        </div>
                                                    <div class="setting" data-setting="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['position']->value,'html','UTF-8' ));?>
"><i class="icon-AdminAdmin"></i><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Setting','mod'=>'ybc_blog'),$_smarty_tpl ) );?>
</div>
                            <label class="ets_sl_switch<?php if ($_smarty_tpl->tpl_vars['value_text']->value) {?> active<?php }?>">
                                <input class="ets_sl_slider" type="checkbox" <?php if ($_smarty_tpl->tpl_vars['value_text']->value) {?>checked ="checked"<?php }?> value="1" data-field="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['sidebar']->value['name'],'html','UTF-8' ));?>
"/>
                                <span class="ets_sl_slider_label on"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'On','mod'=>'ybc_blog'),$_smarty_tpl ) );?>
</span>
                                <span class="ets_sl_slider_label off"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Off','mod'=>'ybc_blog'),$_smarty_tpl ) );?>
</span>
                            </label>
                                                
                    </div>
                </li>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </ul>
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['input']->value['name'] == 'YBC_BLOG_SHOW_LATEST_BLOCK_HOME') {?>
        <ul id="sidebar-positions" class="sidebar-positions">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['position_homepages']->value, 'position', false, 'key');
$_smarty_tpl->tpl_vars['position']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['position']->value) {
$_smarty_tpl->tpl_vars['position']->do_else = false;
?>
                <?php $_smarty_tpl->_assignInScope('homepage', $_smarty_tpl->tpl_vars['homepages']->value[$_smarty_tpl->tpl_vars['position']->value]);?>
                <?php $_smarty_tpl->_assignInScope('value_text', $_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['homepage']->value['name']]);?>
                <li id="sidebar-position-<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['position']->value,'html','UTF-8' ));?>
">
                    <div>
                        <div class="title-sidebar">
                            <span class="position_number" >
                                <span>
                                    <?php echo $_smarty_tpl->tpl_vars['key']->value+call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( 1 ));?>

                                </span>
                            </span>
                            <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['homepage']->value['title'],'html','UTF-8' ));?>

                        </div>
                        <div class="setting" data-setting="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['position']->value,'html','UTF-8' ));?>
"><i class="icon-AdminAdmin"></i><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Setting','mod'=>'ybc_blog'),$_smarty_tpl ) );?>
</div>
                        <label class="ets_sl_switch<?php if ($_smarty_tpl->tpl_vars['value_text']->value) {?> active<?php }?>">
                            <input class="ets_sl_slider" type="checkbox" <?php if ($_smarty_tpl->tpl_vars['value_text']->value) {?> checked ="checked"<?php }?> value="1" data-field="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['homepage']->value['name'],'html','UTF-8' ));?>
" />
                            <span class="ets_sl_slider_label on"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'On','mod'=>'ybc_blog'),$_smarty_tpl ) );?>
</span>
                            <span class="ets_sl_slider_label off"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Off','mod'=>'ybc_blog'),$_smarty_tpl ) );?>
</span>
                        </label>
                    </div>
                </li>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </ul>
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['input']->value['name'] == 'YBC_BLOG_SHOW_LATEST_BLOCK_HOME' || $_smarty_tpl->tpl_vars['input']->value['name'] == 'YBC_BLOG_SHOW_POPULAR_BLOCK_HOME' || $_smarty_tpl->tpl_vars['input']->value['name'] == 'YBC_BLOG_SHOW_FEATURED_BLOCK_HOME' || $_smarty_tpl->tpl_vars['input']->value['name'] == "YBC_BLOG_SHOW_CATEGORY_BLOCK_HOME" || $_smarty_tpl->tpl_vars['input']->value['name'] == "YBC_BLOG_SHOW_GALLERY_BLOCK_HOME" || $_smarty_tpl->tpl_vars['input']->value['name'] == "YBC_BLOG_SHOW_LATEST_NEWS_BLOCK" || $_smarty_tpl->tpl_vars['input']->value['name'] == 'YBC_BLOG_SHOW_FEATURED_BLOCK' || $_smarty_tpl->tpl_vars['input']->value['name'] == 'YBC_BLOG_SHOW_POPULAR_POST_BLOCK' || $_smarty_tpl->tpl_vars['input']->value['name'] == 'YBC_BLOG_SHOW_GALLERY_BLOCK' || $_smarty_tpl->tpl_vars['input']->value['name'] == 'YBC_BLOG_SHOW_ARCHIVES_BLOCK' || $_smarty_tpl->tpl_vars['input']->value['name'] == 'YBC_BLOG_SHOW_CATEGORIES_BLOCK' || $_smarty_tpl->tpl_vars['input']->value['name'] == 'YBC_BLOG_SHOW_SEARCH_BLOCK' || $_smarty_tpl->tpl_vars['input']->value['name'] == 'YBC_BLOG_SHOW_TAGS_BLOCK' || $_smarty_tpl->tpl_vars['input']->value['name'] == 'YBC_BLOG_SHOW_COMMENT_BLOCK' || $_smarty_tpl->tpl_vars['input']->value['name'] == 'YBC_BLOG_SHOW_AUTHOR_BLOCK' || $_smarty_tpl->tpl_vars['input']->value['name'] == 'YBC_BLOG_ENABLE_RSS_SIDEBAR' || $_smarty_tpl->tpl_vars['input']->value['name'] == 'YBC_BLOG_SHOW_HTML_BOX') {?>
        <div class="ybc-form-group-sidebar<?php if ((isset($_smarty_tpl->tpl_vars['input']->value['form_group_class']))) {?> <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['input']->value['form_group_class'],'html','UTF-8' ));
}?>">
            <div class="ets_table">
            <div class="ets_table-cell">
            <div class="ybc-form-group-sidebar-wapper">
            <span class="close-setting-sidebar"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Close','mod'=>'ybc_blog'),$_smarty_tpl ) );?>
</span>
            <div class="setting-title" ><i class="icon-AdminAdmin"></i><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Setting','mod'=>'ybc_blog'),$_smarty_tpl ) );?>
</div>
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['input']->value['name'] == 'YBC_BLOG_ENABLE_MAIL') {?>
        <p><strong><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Send email to Administrator and Authors: ','mod'=>'ybc_blog'),$_smarty_tpl ) );?>
</strong></p>
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['input']->value['name'] == 'YBC_BLOG_ENABLE_MAIL_NEW_COMMENT') {?>
        <p><strong><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Send email to Users/Customers:','mod'=>'ybc_blog'),$_smarty_tpl ) );?>
</strong></p>
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['input']->value['type'] == 'image') {?>
        <div class="form-group">
            <div class="label-text"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['input']->value['label'],'html','UTF-8' ));?>
</div> 
            <label class="control-label col-lg-3 required"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Width','mod'=>'ybc_blog'),$_smarty_tpl ) );?>
</label>
            <div class="col-lg-9">
                <div class="input-group ">
                    <input id="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['input']->value['name'],'html','UTF-8' ));?>
_WIDTH" class="" type="text" required="required" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']]['width'] ));?>
" name="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['input']->value['name'],'html','UTF-8' ));?>
_WIDTH" />
                    <span class="input-group-addon"> px </span>
                </div>
                <p class="help-block"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Valid values: 50 - 3000','mod'=>'ybc_blog'),$_smarty_tpl ) );?>
 </p>
            </div>
            <label class="control-label col-lg-3 required"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Height','mod'=>'ybc_blog'),$_smarty_tpl ) );?>
</label>
            <div class="col-lg-9">
                <div class="input-group ">
                    <input id="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['input']->value['name'],'html','UTF-8' ));?>
_HEIGHT" class="" type="text" required="required" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']]['height'] ));?>
" name="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['input']->value['name'],'html','UTF-8' ));?>
_HEIGHT" />
                    <span class="input-group-addon"> px </span>
                </div>
                <p class="help-block"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Valid values: 50 - 3000','mod'=>'ybc_blog'),$_smarty_tpl ) );?>
 </p>
            </div>
        </div>
    <?php } elseif (((isset($_smarty_tpl->tpl_vars['isConfigForm']->value)) && $_smarty_tpl->tpl_vars['isConfigForm']->value) || ((isset($_smarty_tpl->tpl_vars['tab_post']->value)) && $_smarty_tpl->tpl_vars['tab_post']->value) || (isset($_smarty_tpl->tpl_vars['tab_category']->value)) && $_smarty_tpl->tpl_vars['tab_category']->value) {?>
    <div class="ybc-form-group<?php if ((isset($_smarty_tpl->tpl_vars['input']->value['tab'])) && $_smarty_tpl->tpl_vars['input']->value['tab']) {?> ybc-blog-tab-<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['input']->value['tab'],'html','UTF-8' ));
}?>">            
        <?php 
$_smarty_tpl->inheritance->callParent($_smarty_tpl, $this, '{$smarty.block.parent}');
?>

        <?php if ((isset($_smarty_tpl->tpl_vars['input']->value['info'])) && $_smarty_tpl->tpl_vars['input']->value['info']) {?>
            <div class="ybc_tc_info alert alert-warning"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['input']->value['info'],'html','UTF-8' ));?>
</div>
        <?php }?>
    </div>
    <?php } else { ?>
        <?php 
$_smarty_tpl->inheritance->callParent($_smarty_tpl, $this, '{$smarty.block.parent}');
?>

    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['input']->value['name'] == 'YBC_BLOG_CUSTOMER_EMAIL_APPROVED_POST') {?>
        <div class="alert alert-info">
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'You can edit or translate all email templates using a text editor such as Notepad, PhpStorm, etc. All email template files are located in this folder: ','mod'=>'ybc_blog'),$_smarty_tpl ) );?>
 <span class="ybc_folder"><strong>modules/ybc_blog/mails/</strong></span>
        </div>
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['input']->value['name'] == 'datetime_active') {?>
        <?php if ((isset($_smarty_tpl->tpl_vars['form_author_post']->value))) {?>
            <div class="ybc_form_author_post">
            <?php if ($_smarty_tpl->tpl_vars['form_author_post']->value) {?>
                <?php echo $_smarty_tpl->tpl_vars['form_author_post']->value;?>

            <?php }?>
            </div>
        <?php }?>
        <?php if ((isset($_smarty_tpl->tpl_vars['check_suspend']->value)) && $_smarty_tpl->tpl_vars['check_suspend']->value) {?>
            <div class="ybc-form-group ybc-blog-tab-basic">
                <div class="alert alert-warning">
                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'This post is hidden on the front office because its author is suspended','mod'=>'ybc_blog'),$_smarty_tpl ) );?>

                </div>
            </div>
        <?php }?>
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['input']->value['name'] == "YBC_BLOG_LATEST_POST_NUMBER_HOME" || $_smarty_tpl->tpl_vars['input']->value['name'] == 'YBC_BLOG_POPULAR_POST_NUMBER_HOME' || $_smarty_tpl->tpl_vars['input']->value['name'] == 'YBC_BLOG_FEATURED_POST_NUMBER_HOME' || $_smarty_tpl->tpl_vars['input']->value['name'] == 'YBC_BLOG_CATEGORY_POST_NUMBER_HOME' || $_smarty_tpl->tpl_vars['input']->value['name'] == 'YBC_BLOG_GALLERY_POST_NUMBER_HOME' || $_smarty_tpl->tpl_vars['input']->value['name'] == 'YBC_BLOG_LATES_POST_NUMBER' || $_smarty_tpl->tpl_vars['input']->value['name'] == 'YBC_BLOG_PUPULAR_POST_NUMBER' || $_smarty_tpl->tpl_vars['input']->value['name'] == 'YBC_BLOG_FEATURED_POST_NUMBER' || $_smarty_tpl->tpl_vars['input']->value['name'] == 'YBC_BLOG_GALLERY_POST_NUMBER' || $_smarty_tpl->tpl_vars['input']->value['name'] == 'YBC_BLOG_EXPAND_ARCHIVES_BLOCK' || $_smarty_tpl->tpl_vars['input']->value['name'] == 'YBC_BLOG_SHOW_CATEGORIES_BLOCK' || $_smarty_tpl->tpl_vars['input']->value['name'] == 'YBC_BLOG_SHOW_SEARCH_BLOCK' || $_smarty_tpl->tpl_vars['input']->value['name'] == 'YBC_BLOG_TAGS_NUMBER' || $_smarty_tpl->tpl_vars['input']->value['name'] == 'YBC_BLOG_COMMENT_LENGTH' || $_smarty_tpl->tpl_vars['input']->value['name'] == 'YBC_BLOG_AUTHOR_NUMBER' || $_smarty_tpl->tpl_vars['input']->value['name'] == 'YBC_BLOG_ENABLE_RSS_SIDEBAR' || $_smarty_tpl->tpl_vars['input']->value['name'] == 'YBC_BLOG_CONTENT_HTML_BOX') {?>
            <div class="popup_footer">
                <button class="module_form_submit_btn_sidebar btn btn-default pull-right" type="button">
                    <i class="process-icon-save"></i>
                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Save','mod'=>'ybc_blog'),$_smarty_tpl ) );?>

                </button>
            </div>
        </div>
        </div>
        </div>
        </div>
    <?php }
}
}
/* {/block "input_row"} */
/* {block "label"} */
class Block_1295763903695ccb914ca499_38918381 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'label' => 
  array (
    0 => 'Block_1295763903695ccb914ca499_38918381',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<?php if ((isset($_smarty_tpl->tpl_vars['input']->value['label']))) {?>
		<label class="control-label col-lg-3<?php if ((((isset($_smarty_tpl->tpl_vars['input']->value['required'])) && $_smarty_tpl->tpl_vars['input']->value['required']) || ((isset($_smarty_tpl->tpl_vars['input']->value['required2'])) && $_smarty_tpl->tpl_vars['input']->value['required2'])) && $_smarty_tpl->tpl_vars['input']->value['type'] != 'radio') {?> required<?php }?>">
			<?php if ((isset($_smarty_tpl->tpl_vars['input']->value['hint']))) {?>
			<span class="label-tooltip" data-toggle="tooltip" data-html="true" title="<?php if (is_array($_smarty_tpl->tpl_vars['input']->value['hint'])) {?>
						<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['input']->value['hint'], 'hint');
$_smarty_tpl->tpl_vars['hint']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['hint']->value) {
$_smarty_tpl->tpl_vars['hint']->do_else = false;
?>
							<?php if (is_array($_smarty_tpl->tpl_vars['hint']->value)) {?>
								<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['hint']->value['text'],'html','UTF-8' ));?>

							<?php } else { ?>
								<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['hint']->value,'html','UTF-8' ));?>

							<?php }?>
						<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
					<?php } else { ?>
						<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['input']->value['hint'],'html','UTF-8' ));?>

					<?php }?>">
			<?php }?>
			<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['input']->value['label'],'html','UTF-8' ));?>

			<?php if ((isset($_smarty_tpl->tpl_vars['input']->value['hint']))) {?>
			</span>
			<?php }?>
		</label>
	<?php }
}
}
/* {/block "label"} */
}

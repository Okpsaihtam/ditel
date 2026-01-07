<?php
/* Smarty version 4.3.4, created on 2026-01-06 09:44:11
  from '/home/www/public/modules/creativeelements/views/templates/admin/admin.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_695ccb5b3e0a56_05251670',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bcf2eac6e042c1e25ee5ca36855691d40f95891b' => 
    array (
      0 => '/home/www/public/modules/creativeelements/views/templates/admin/admin.tpl',
      1 => 1652220000,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_695ccb5b3e0a56_05251670 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'ce_preview_breadcrumb' => 
  array (
    'compiled_filepath' => '/home/www/public/var/cache/prod/smarty/compile/bc/f2/ea/bcf2eac6e042c1e25ee5ca36855691d40f95891b_0.file.admin.tpl.php',
    'uid' => 'bcf2eac6e042c1e25ee5ca36855691d40f95891b',
    'call_name' => 'smarty_template_function_ce_preview_breadcrumb_1715853656695ccb5b3a8e16_87563817',
  ),
  'ce_add_custom_font' => 
  array (
    'compiled_filepath' => '/home/www/public/var/cache/prod/smarty/compile/bc/f2/ea/bcf2eac6e042c1e25ee5ca36855691d40f95891b_0.file.admin.tpl.php',
    'uid' => 'bcf2eac6e042c1e25ee5ca36855691d40f95891b',
    'call_name' => 'smarty_template_function_ce_add_custom_font_1715853656695ccb5b3a8e16_87563817',
  ),
));
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'ce_warning_multistore', null, null);?><span id="ce-warning-multistore"></span><?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'ce_alert', null, null);?><div class="alert alert-%s">%s</div><?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'ce_undefined_position', null, null);?>
	<?php echo ce__('Undefined Position!');?>

	<a href="http://docs.webshopworks.com/creative-elements/79-troubleshooting/337-undefined-position" class="ce-read-more"><?php echo ce__('Learn More');?>
</a>
<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'ce_action_link', null, null);?><a href="%s" target="%s"><i class="icon-%s"></i> %s</a><?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'ce_modal_license_status', null, null);
echo ce__('License Status:');?>
 <span class="text-success"><?php echo ce__('Active');?>
</span><?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'ce_modal_license', null, null);?>
	<form name="activate" action="%s" method="post">
		<div class="modal-body">%s</div>
		<div class="modal-footer">
			<button type="submit" class="btn btn-primary"><i class="icon-file-text"></i>&nbsp; %s</button>
		</div>
	</form>
<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'ce_modal_replace_url', null, null);?>
	<form name="replace_url" class="form-horizontal">
		<div class="modal-body">
			<input type="hidden" name="ajax" value="1">
			<input type="hidden" name="action" value="replace_url">
			<div class="alert alert-warning">%s</div>
			<div class="form-group">
				<div class="col-sm-6">
					<input type="url" placeholder="%s" class="form-control" name="from" required>
				</div>
				<div class="col-sm-6">
					<input type="url" placeholder="%s" class="form-control" name="to" required>
				</div>
			</div>
			<div class="help-block">%s</div>
		</div>
		<div class="modal-footer">
			<button type="submit" class="btn btn-primary"><i class="icon-refresh"></i>&nbsp; %s</button>
		</div>
	</form>
<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>



<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'ce_inline_script', null, null);?>
	<?php echo '<script'; ?>
 data-cfasync="false">
	%s
	<?php echo '</script'; ?>
>
<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>


<?php }
/* smarty_template_function_ce_preview_breadcrumb_1715853656695ccb5b3a8e16_87563817 */
if (!function_exists('smarty_template_function_ce_preview_breadcrumb_1715853656695ccb5b3a8e16_87563817')) {
function smarty_template_function_ce_preview_breadcrumb_1715853656695ccb5b3a8e16_87563817(Smarty_Internal_Template $_smarty_tpl,$params) {
$params = array_merge(array('links'=>array()), $params);
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_Variable($value, $_smarty_tpl->isRenderingCache);
}
?>

	<?php $_smarty_tpl->_assignInScope('last', array_pop($_smarty_tpl->tpl_vars['links']->value));?>
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['links']->value, 'link');
$_smarty_tpl->tpl_vars['link']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['link']->value) {
$_smarty_tpl->tpl_vars['link']->do_else = false;
?>
		<a><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'cleanHtml' ][ 0 ], array( $_smarty_tpl->tpl_vars['link']->value['title'] ));?>
</a><span class="navigation-pipe">&gt;</span>
	<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'cleanHtml' ][ 0 ], array( $_smarty_tpl->tpl_vars['last']->value['title'] ));?>

<?php
}}
/*/ smarty_template_function_ce_preview_breadcrumb_1715853656695ccb5b3a8e16_87563817 */
/* smarty_template_function_ce_add_custom_font_1715853656695ccb5b3a8e16_87563817 */
if (!function_exists('smarty_template_function_ce_add_custom_font_1715853656695ccb5b3a8e16_87563817')) {
function smarty_template_function_ce_add_custom_font_1715853656695ccb5b3a8e16_87563817(Smarty_Internal_Template $_smarty_tpl,$params) {
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_Variable($value, $_smarty_tpl->isRenderingCache);
}
?>

	<div class="elementor-metabox-content">
		<div class="elementor-field font_face elementor-field-repeater">
			<?php echo '<script'; ?>
 type="text/template" id="tmpl-elementor-add-font">
				<div class="repeater-block block-visible">
					<span class="repeater-title ce-hidden" data-default="<?php echo ce__('Settings');?>
" data-selector=".font_weight"><?php echo ce__('Settings');?>
</span>
					<span class="elementor-repeater-tool-btn close-repeater-row" title="<?php echo ce__('Close');?>
">
						<i aria-hidden="true" class="icon-times"></i> <?php echo ce__('Close');?>

					</span>
					<span class="elementor-repeater-tool-btn toggle-repeater-row" title="<?php echo ce__('Edit');?>
">
						<i aria-hidden="true" class="icon-edit"></i> <?php echo ce__('Edit');?>

					</span>
					<span class="elementor-repeater-tool-btn remove-repeater-row" data-confirm="<?php echo ce__('Are you sure?');?>
" title="<?php echo ce__('Delete');?>
">
						<i aria-hidden="true" class="icon-trash"></i> <?php echo ce__('Delete');?>

					</span>
					<div class="repeater-content form-table">
						<div class="repeater-content-top">
							<div class="elementor-field font_face elementor-field-select">
								<p class="elementor-field-label">
									<label for="font_face[__counter__][font_weight]"><?php echo ce__('Weight');?>
:</label>
								</p>
								<select class="font_weight" id="font_face[__counter__][font_weight]" name="font_face[__counter__][font_weight]">
									<option value="normal"><?php echo ce__('Normal');?>
</option>
									<option value="bold"><?php echo ce__('Bold');?>
</option>
									<option value="100">100</option>
									<option value="200">200</option>
									<option value="300">300</option>
									<option value="400">400</option>
									<option value="500">500</option>
									<option value="600">600</option>
									<option value="700">700</option>
									<option value="800">800</option>
									<option value="900">900</option>
								</select>
							</div>
							<div class="elementor-field font_face elementor-field-select">
								<p class="elementor-field-label">
									<label for="font_face[__counter__][font_style]"><?php echo ce__('Style');?>
:</label>
								</p>
								<select class="font_style" id="font_face[__counter__][font_style]" name="font_face[__counter__][font_style]">
									<option value="normal"><?php echo ce__('Normal');?>
</option>
									<option value="italic"><?php echo ce__('Italic');?>
</option>
									<option value="oblique"><?php echo ce__('Oblique');?>
</option>
								</select>
							</div>
							<div class="inline-preview">Creative Elements Module is Making The Web Beautiful!</div>
							<div class="elementor-field font_face elementor-field-toolbar">
								<span class="elementor-repeater-tool-btn close-repeater-row" title="<?php echo ce__('Close');?>
">
									<i aria-hidden="true" class="icon-times"></i> <?php echo ce__('Close');?>

								</span>
								<span class="elementor-repeater-tool-btn toggle-repeater-row" title="<?php echo ce__('Edit');?>
">
									<i aria-hidden="true" class="icon-edit"></i> <?php echo ce__('Edit');?>

								</span>
								<span class="elementor-repeater-tool-btn remove-repeater-row" data-confirm="Are you sure?" title="<?php echo ce__('Delete');?>
">
									<i aria-hidden="true" class="icon-trash"></i> <?php echo ce__('Delete');?>

								</span>
							</div>
						</div>
						<div class="repeater-content-bottom">
							<div class="elementor-field font_face elementor-field-file">
								<p class="elementor-field-label">
									<label for="font_face[__counter__][woff]file"><?php echo sprintf(ce__('%s File'),'WOFF');?>
</label>
								</p>
								<input class="hidden" name="font_face[__counter__][woff][file]" type="file" accept=".woff,font/woff">
								<input class="elementor-field-input" name="font_face[__counter__][woff][url]" placeholder="<?php echo ce__('The Web Open Font Format, Used by Modern Browsers');?>
" type="text">
								<input class="elementor-button elementor-upload-btn" data-ext="woff" data-preview_anchor="none" data-remove_text="<?php echo ce__('Delete');?>
" data-upload_text="<?php echo ce__('Upload');?>
" id="font_face[__counter__][woff]" name="font_face[__counter__][woff]" type="button">
							</div>
							<div class="elementor-field font_face elementor-field-file">
								<p class="elementor-field-label">
									<label for="font_face[__counter__][woff2]file"><?php echo sprintf(ce__('%s File'),'WOFF2');?>
</label>
								</p>
								<input class="hidden" name="font_face[__counter__][woff2][file]" type="file" accept=".woff2,font/woff2">
								<input class="elementor-field-input" name="font_face[__counter__][woff2][url]" placeholder="<?php echo ce__('The Web Open Font Format 2, Used by Super Modern Browsers');?>
" type="text">
								<input class="elementor-button elementor-upload-btn" data-ext="woff2" data-preview_anchor="none" data-remove_text="<?php echo ce__('Delete');?>
" data-upload_text="<?php echo ce__('Upload');?>
" id="font_face[__counter__][woff2]" name="font_face[__counter__][woff2]" type="button">
							</div>
							<div class="elementor-field font_face elementor-field-file">
								<p class="elementor-field-label">
									<label for="font_face[__counter__][ttf]file"><?php echo sprintf(ce__('%s File'),'TTF');?>
</label>
								</p>
								<input class="hidden" name="font_face[__counter__][ttf][file]" type="file" accept=".ttf,font/ttf">
								<input class="elementor-field-input" name="font_face[__counter__][ttf][url]" placeholder="<?php echo ce__('TrueType Fonts, Used for better supporting Safari, Android, iOS');?>
" type="text">
								<input class="elementor-button elementor-upload-btn" data-ext="ttf" data-preview_anchor="none" data-remove_text="<?php echo ce__('Delete');?>
" data-upload_text="<?php echo ce__('Upload');?>
" id="font_face[__counter__][ttf]" name="font_face[__counter__][ttf]" type="button">
							</div>
							<div class="elementor-field font_face elementor-field-file">
								<p class="elementor-field-label">
									<label for="font_face[__counter__][otf]file"><?php echo sprintf(ce__('%s File'),'OTF');?>
</label>
								</p>
								<input class="hidden" name="font_face[__counter__][otf][file]" type="file" accept=".otf,font/otf">
								<input class="elementor-field-input" name="font_face[__counter__][otf][url]" placeholder="<?php echo ce__('OpenType Fonts, Used for better supporting Safari, Android, iOS');?>
" type="text">
								<input class="elementor-button elementor-upload-btn" data-ext="otf" data-preview_anchor="none" data-remove_text="<?php echo ce__('Delete');?>
" data-upload_text="<?php echo ce__('Upload');?>
" id="font_face[__counter__][otf]" name="font_face[__counter__][otf]" type="button">
							</div>
						</div>
					</div>
				</div>
			<?php echo '</script'; ?>
>
			<input type="button" class="elementor-button add-repeater-row" value="<?php echo ce__('Add Font Variation');?>
" data-template-id="tmpl-elementor-add-font">
		</div>
	</div>
<?php
}}
/*/ smarty_template_function_ce_add_custom_font_1715853656695ccb5b3a8e16_87563817 */
}

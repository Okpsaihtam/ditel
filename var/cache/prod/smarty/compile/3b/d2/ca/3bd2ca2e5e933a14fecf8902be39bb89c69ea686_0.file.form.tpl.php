<?php
/* Smarty version 4.3.4, created on 2026-01-06 09:44:03
  from '/home/www/public/modules/creativeelements/views/templates/admin/ce_content/helpers/form/form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_695ccb53bcc7b7_82520166',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3bd2ca2e5e933a14fecf8902be39bb89c69ea686' => 
    array (
      0 => '/home/www/public/modules/creativeelements/views/templates/admin/ce_content/helpers/form/form.tpl',
      1 => 1652220000,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_695ccb53bcc7b7_82520166 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2119258581695ccb53bc6038_77829317', "input_row");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "helpers/form/form.tpl");
}
/* {block "input_row"} */
class Block_2119258581695ccb53bc6038_77829317 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'input_row' => 
  array (
    0 => 'Block_2119258581695ccb53bc6038_77829317',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<?php 
$_smarty_tpl->inheritance->callParent($_smarty_tpl, $this, '{$smarty.block.parent}');
?>

	<?php if ('hook' == $_smarty_tpl->tpl_vars['input']->value['name']) {?>
		<?php echo '<script'; ?>
>
		var $hook = $('#hook').attr('type', 'hidden');
		var $select = $('<select name="hook">').html(
			'<option value="displayHome">displayHome</option>' +
			'<option value="displayTop">displayTop</option>' +
			'<option value="displayBanner">displayBanner</option>' +
			'<option value="displayNav1">displayNav1</option>' +
			'<option value="displayNav2">displayNav2</option>' +
			'<option value="displayNavFullWidth">displayNavFullWidth</option>' +
			'<option value="displayTopColumn">displayTopColumn</option>' +
			'<option value="displayLeftColumn">displayLeftColumn</option>' +
			'<option value="displayRightColumn">displayRightColumn</option>' +
			'<option value="displayFooterBefore">displayFooterBefore</option>' +
			'<option value="displayFooter">displayFooter</option>' +
			'<option value="displayFooterAfter">displayFooterAfter</option>' +
			'<option value="displayAfterBodyOpeningTag">displayAfterBodyOpeningTag</option>' +
			'<option value="displayShoppingCart">displayShoppingCart</option>' +
			'<option value="displayShoppingCartFooter">displayShoppingCartFooter</option>' +
			'<option value="displayFooterProduct">displayFooterProduct</option>' +
			'<option value="displayNotFound">displayNotFound</option>'
		).insertAfter($hook);

		if (!$select.find('[value="'+$hook.val()+'"]').length) {
			$('<option>', {
				value: $hook.val(),
				html: $hook.val()
			}).appendTo($select);
		}

		$select.select2({
			tags: true,
			createTag: function(params) {
				return {
					id: params.term,
					text: params.term,
					newOption: true
				};
			},
			templateResult: function(data) {
				var $result = $('<span>').text(data.text);

				if (data.newOption) {
					$result.append(" <i>(custom)</i>");
				}
				return $result;
			}
		}).val($hook.val())
			.trigger('change.select2')
		;
		<?php echo '</script'; ?>
>
	<?php }
}
}
/* {/block "input_row"} */
}

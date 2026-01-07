/**
* 2016 - 2017 Presta Theme Maker
*
* NOTICE OF LICENSE
*
* This file is licenced under the Software License Agreement.
* With the purchase or the installation of the software in your application
* you accept the licence agreement.
*
* You must not modify, adapt or create derivative works of this source code.
*
* DISCLAIMER
*
* Do not edit or add to this file if you wish to upgrade PrestaShop to newer
* versions in the future.
*
*  @author    Presta Theme Maker <presta.theme.maker@gmail.com>
*  @copyright 2016 - 2017 Presta Theme Maker
*  @license   Do not distribute this module without permission from the author
*/
$(document).ready(function() {
	var selHook = $("#hook").val();
	showMultiBlocksOptions(selHook);

	// display header hook needs spcials treat
	checkHeaderHook(selHook);

	$("#hook").on('change', function() {
		var getHook = $(this).val();
		showMultiBlocksOptions(getHook);

		// display header hook needs spcials treat
		checkHeaderHook(getHook);
	});
});

function checkHeaderHook(hook) {
	if (hook == 'header') {
		$('.javascript_code_snippet').show();
		$('.html_code_container').hide();
	} else {
		$('.html_code_container').show();
		$('.javascript_code_snippet').hide();
	}
}

function showMultiBlocksOptions(hook) {
	if (hook == "" || hook == "undefined" || hook == "displayPDFinvoice"
	     || hook == "displayInvoiceLegalFreeText") {
		$(".visibility-wrapper, .ssl-wrapper, .target_group-wrapper").fadeOut('fast');
	} else if (hook == "displayFooterProduct" || hook == "displayLeftColumnProduct" 
	    || hook == "displayRightColumnProduct" || hook == "displayShoppingCart" 
	    || hook == "displayShoppingCartFooter" || hook == "displayHome" || hook == "displayProductButtons" || hook == "header") {
		$(".visibility-wrapper").fadeOut('fast');
		$(".target_group-wrapper").fadeIn('slow');
	} else if (hook == "displayMaintenance" || hook == "displayMyAccountBlock" 
	            || hook == "displayCustomerAccount" || hook == "displayCustomerAccountForm" 
	            || hook == "displayCustomerAccountFormTop") {
		$(".visibility-wrapper, .target_group-wrapper").fadeOut('fast');
	} else {
		$(".visibility-wrapper, .target_group-wrapper").fadeIn('slow');
	}
}

function addClass(id){
	tinyMCE.execCommand("mceToggleEditor", false, id);
}

function removeClass(id){
	tinyMCE.execCommand("mceToggleEditor", false, id);
}
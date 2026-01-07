<?php
/**
* 2016 - 2018 PrestaBuilder
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
*  @author    PrestaBuilder <prestabuilder@gmail.com>
*  @copyright 2016 - 2018 PrestaBuilder
*  @license   Do not distribute this module without permission from the author
*/

include_once('../../config/config.inc.php');
include_once('../../init.php');
include_once('ptm_multiblocks.php');

$ptm_multiblocks = new Ptm_MultiBlocks();

if (!Tools::isSubmit('secure_key') || Tools::getValue('secure_key') != $ptm_multiblocks->secure_key || !Tools::getValue('action'))
	die(1);

if (Tools::getValue('action') == 'updateMultiblocksPosition')
{
	if (Tools::getValue('customblocks')) {
		$customblocks = Tools::getValue('customblocks');
		foreach ($customblocks as $position => $id_multiblock) 
			Db::getInstance()->execute('
				UPDATE `'._DB_PREFIX_.'ptm_multiblocks` SET `position` = '.(int)$position.' 
				WHERE `id_multiblock` = '.(int)$id_multiblock
			);
	}

	// modify ps and third party modules positions
	if (Tools::getValue('customblocks_pshook')) {
		$pshooks = Tools::getValue('customblocks_pshook');

		foreach ($pshooks as $position => $data) {
			list($id_module, $id_hook) = explode("#", $data);
			Db::getInstance()->execute('
				UPDATE `'._DB_PREFIX_.'hook_module` SET `position` = '.(int)$position.'
				WHERE `id_module` = '.(int)$id_module .' AND `id_hook` = '.(int)$id_hook
			);
		}
	}

	$ptm_multiblocks->clearCache();
}

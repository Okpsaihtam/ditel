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

include_once(_PS_MODULE_DIR_.'ptm_multiblocks/ptm_multiblocks.php');

class PTMMultiBlocksModel extends ObjectModel
{
	public $hook;
	public $target_group;
	public $visibility;
	public $active;
	public $position;
	public $id_shop;
	public $hook_name;
	// lang fields
	public $html_code;
	public $js_code;

	protected static $_table = 'ptm_multiblocks';
	protected static $_moduleName = 'ptm_multiblocks';
	protected $module;

	/**
	 * @see ObjectModel::$definition
	 */
	public static $definition = array(
		'table' => 'ptm_multiblocks',
		'primary' => 'id_multiblock',
		'multilang' => true,
		'fields' => array(
			'hook' 	=> array('type' => self::TYPE_STRING, 'validate' => 'isCleanHtml', 'size' => 100, 'required' => true),
			'target_group' => array('type' => self::TYPE_BOOL, 'validate' => 'isunsignedInt', 'required' => false), 
			'visibility' => array('type' => self::TYPE_STRING, 'validate' => 'isCleanHtml', 'required' => false),
			'active' => array('type' => self::TYPE_BOOL, 'validate' => 'isBool', 'required' => false),
			'position' => array('type' => self::TYPE_INT, 'validate' => 'isunsignedInt', 'required' => false),
			'id_shop' => array('type' => self::TYPE_STRING, 'validate' => 'isunsignedInt', 'size' => 10),
			'hook_name' => array('type' => self::TYPE_STRING, 'validate' => 'isCleanHtml', 'size' => 100, 'required' => true, 'lang' => false),

			// Lang fields
			'html_code' => array('type' => self::TYPE_HTML, 'lang' => true, 'size' => 50000),
			'js_code' => array('type' => self::TYPE_HTML, 'lang' => true, 'size' => 50000)
		)
	);

	public	function __construct($id_multiblock = null, $id_lang = null, $id_shop = null, Context $context = null)
	{
		parent::__construct($id_multiblock, $id_lang, $id_shop);

		$this->module = new Ptm_MultiBlocks();
	}

	public function add($autodate = true, $null_values = false)
	{
		return parent::add($autodate, $null_values);
	}

	public function delete()
	{
		$res = true;

		$res &= $this->reOrderPositions();

		$res &= Db::getInstance()->execute('
		        DELETE FROM `'._DB_PREFIX_. self::$_table .'` WHERE `id_multiblock` = '.(int)$this->id);

		$res &= parent::delete();
		return $res;
	}

	public function reOrderPositions()
	{
		$id_multiblock = $this->id;
		$context = Context::getContext();
		$id_shop = $context->shop->id;

		$max = self::getMaxPositionByShopId($id_shop);

		if ((int)$max == (int)$id_multiblock)
			return true;

		$rows = Db::getInstance(_PS_USE_SQL_SLAVE_)->executeS('
			SELECT `position`, `id_multiblock` 
			FROM `'._DB_PREFIX_.self::$_table .'`
			WHERE `id_shop` = '.(int)$id_shop.' AND `position` > '.(int)$this->position
		);

		foreach ($rows as $row) {
			$current_row = new PTMMultiBlocksModel($row['id_multiblock']);
			--$current_row->position;
			$current_row->update();
			unset($current_row);
		}

		return true;
	}

	/**
	 * Get max position
	 *
	 * @param int  $id_shop  Shop ID
	 *
	 * @return int
	 */
	public static function getMaxPositionByShopId($id_shop)
	{
		return Db::getInstance(_PS_USE_SQL_SLAVE_)->executeS('
			SELECT MAX(`position`) FROM `'._DB_PREFIX_.self::$_table .'` 
			WHERE `id_shop` = '.(int)$id_shop
		);
	}

	/**
	 * Get all custom blocks
	 *
	 */
	public static function getCustomBlocksForFrontEnd($active = false, $hookName = false)
    {
        $context = Context::getContext();
        $id_shop = $context->shop->id;
        $id_lang = $context->language->id;

        $sql = 'SELECT t.`id_multiblock`, t.`hook`, t.`target_group`, t.`visibility`, 
        		t.`position`, t.`active`, t.`hook_name`, tl.`html_code`, tl.`js_code`  
	            FROM '._DB_PREFIX_.self::$_table .' t 
	            LEFT JOIN '._DB_PREFIX_.self::$_table . '_lang tl ON (t.id_multiblock = tl.id_multiblock) 
	            WHERE t.id_shop = '.(int)$id_shop.' AND tl.id_lang = '.(int)$id_lang.
	            ($hookName ? ' AND t.`hook` = "'. pSQL($hookName) .'"' : '') .
	            ($active ? ' AND t.`active` = '. (int)$active : '') .
	            ' ORDER BY t.position';

        $customblocks = Db::getInstance(_PS_USE_SQL_SLAVE_)->executeS($sql);

        return $customblocks;
    }

    /**
	 * Get all texts
	 *
	 * @param  boolean  $active  Active
	 */
	public function getCustomBlocks($categoriseHooks = false)
    {
        $context = Context::getContext();
        $id_shop = $context->shop->id;
        $id_lang = $context->language->id;

        $sql = 'SELECT t.`id_multiblock`, t.`hook`, t.`target_group`, t.`visibility`, 
        		t.`position`, t.`active`, t.`hook_name`, tl.`html_code`, tl.`js_code`, m.`id_module`, 
        		m.`name` as modulename, h.`id_hook` 
	            FROM '._DB_PREFIX_.self::$_table .' t 
	            LEFT JOIN '._DB_PREFIX_.self::$_table . '_lang tl ON (t.id_multiblock = tl.id_multiblock) 
	            LEFT JOIN '._DB_PREFIX_.'hook h ON (h.name = t.hook) 
	            LEFT JOIN '._DB_PREFIX_.'hook_module hm ON (h.id_hook = hm.id_hook)  
	            LEFT JOIN '._DB_PREFIX_.'module m ON (hm.id_module = m.id_module) 
	            WHERE (t.id_shop = '.(int)$id_shop.' AND hm.id_shop = '.(int)$id_shop.') AND tl.id_lang = '.(int)$id_lang.
	            ' GROUP BY hm.id_module, hm.id_hook, t.id_multiblock ORDER BY t.hook, hm.position, t.position';
        $customblocks = Db::getInstance(_PS_USE_SQL_SLAVE_)->executeS($sql);

        if (false !== $categoriseHooks) {
        	return $this->_getCustomBlocksByHook($customblocks);
        }

        return $customblocks;
    }

	public static function getAssociatedIdsShop($id_multiblock)
	{
		$result = Db::getInstance(_PS_USE_SQL_SLAVE_)->executeS('
			SELECT `id_shop` FROM `'._DB_PREFIX_.self::$_table .'`
			WHERE `id_multiblock` = '.(int)$id_multiblock
		);

		if (!is_array($result))
			return false;

		$return = array();

		foreach ($result as $id_shop)
			$return[] = (int)$id_shop['id_shop'];

		return $return;
	}

	/**
	 * Get next position
	 */
	public static function getNextPosition()
    {
    	$context = Context::getContext();
        $id_shop = $context->shop->id;

        $row = Db::getInstance(_PS_USE_SQL_SLAVE_)->getRow('
            SELECT MAX(`position`) AS `next_position`
            FROM `'._DB_PREFIX_.self::$_table .'` WHERE `id_shop` = '.(int)$id_shop
        );

        return (++$row['next_position']);
    }

    /**
     * Get text by Id
     *
     * @param int $id_multiblock  Text ID
     *
     * @return array
     */
    public static function isExists($id_multiblock)
    {
        $req = 'SELECT `id_multiblock` FROM `'._DB_PREFIX_.self::$_table .'` WHERE id_multiblock = '.(int)$id_multiblock; 
        $row = Db::getInstance(_PS_USE_SQL_SLAVE_)->getRow($req);
        return ($row);
    }

    /**
     * Get Prestashop and 3rd party modules hooked within the same hook
     *
     * @param string $hook  Hook name
     *
     * @return array
     */
    public static function getPSAndThirdPartySimilarHookedModules($hook)
    {
    	$context = Context::getContext();
        $id_shop = $context->shop->id;

        $hooks = Db::getInstance(_PS_USE_SQL_SLAVE_)->executeS('
            SELECT  h.name as hook, hm.id_hook as hm_id_hook, m.name as hook_name, hm.position, hm.id_module as hm_id_module, hm.id_shop   
            FROM '._DB_PREFIX_.'hook h 
            LEFT JOIN '._DB_PREFIX_.'hook_module hm ON (h.id_hook = hm.id_hook) 
            LEFT JOIN '._DB_PREFIX_.'module m ON (hm.id_module = m.id_module) 
            WHERE (h.name = "'. pSQL($hook) .'" AND m.name != "'. self::$_table .'") AND hm.id_shop = '.(int)$id_shop.' AND m.`active` = 1'.
            ' ORDER BY hm.position'
        );

        foreach ($hooks as $key => $hook) {
        	$hooks[$key]['pshook'] = 1;
        }

        return $hooks;
    }

    /**
     * Get module's hook id
     */
    public static function getModuleId()
    {
    	$id_module = Db::getInstance(_PS_USE_SQL_SLAVE_)->executeS('
            SELECT id_module FROM '._DB_PREFIX_.'module WHERE name = "'. pSQL(self::$_moduleName) .'"');

        return $id_module[0]['id_module'];
    }

    /**
     * Merge custom blocks with PS/3rd party modules in a hook list
     */
    private function _getCustomBlocksByHook($customblocks)
    {
    	$blocks = [];

    	if (count($customblocks)) {
    		$listOfHooks = [];
    		foreach ($customblocks as $key => $customblock) {
		    	$listOfHooks[$customblock['hook']][] = $customblock;
		    }

		    $removeDuplicateLines = [];
		    foreach ($listOfHooks as $hook => $hooks) {
			    foreach ($hooks as $key => $block) {
			    	if (!in_array($block['modulename'], $removeDuplicateLines) 
			    	    || $block['modulename'] == 'ptm_multiblocks') {
					    // add logo to hooks list
						$block['icon'] = _MODULE_DIR_ . $block['modulename'] .'/logo.png';
			    		
			    		if ($block['modulename'] == 'ptm_multiblocks') {
			    			$block['status'] = $this->module->displayStatus(
			                        $block['id_multiblock'], 
			                        $block['active']);
				    		$blocks[$hook]['customblocksgroup'][] = $block;
			    		} else {
					    	$blocks[$hook][$key] = $block;
			    		}
			    		$removeDuplicateLines[]  = $block['modulename'];
			    	}
			    }
		    }
    	}

    	return $blocks;
    }
}

{*
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
*}

{if isset($customblocks) && $customblocks|count}
{assign var='controllerName' value=$smarty.get.controller}
{foreach from=$customblocks item=customblock}
  {if $customblock.hook == $currentHook}
  <div class="{$currentHook|escape:'htmlall':'UTF-8'}_container">
	{assign var=pages value=$customblock.visibility|unserialize}
		{if $is_logged && ($customblock.target_group == 2 OR $customblock.target_group == 1)}
			{if $customblock.hook|in_array:$noVisibilityAvailable}
				{$customblock.html_code nofilter}
			{else if $controllerName|in_array:$pages || "other"|in_array:$pages}
				{$customblock.html_code nofilter}
			{/if}
		{else if !$is_logged && ($customblock.target_group == 3 OR $customblock.target_group == 1)}
			{if $customblock.hook|in_array:$noVisibilityAvailable}
				{$customblock.html_code nofilter}
			{else if $controllerName|in_array:$pages || "other"|in_array:$pages}
				{$customblock.html_code nofilter}
			{/if}
		{/if}
    </div>
  {/if}
  {/foreach}
{/if}
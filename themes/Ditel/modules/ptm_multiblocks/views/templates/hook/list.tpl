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


<div class="panel text-center">
	<a class="add_custom_block btn btn-default" href="{$link->getAdminLink('AdminModules')}&configure=ptm_multiblocks&addMultiBlock=1">{l s='Add a new custom block' mod='ptm_multiblocks'}</a>
</div>

{if $customblocks}
  {foreach from=$customblocks key=hook item=customblock}
	<div class="panel">
		<h3><i class="icon-list-ul"></i> {$hook|escape:'html':'UTF-8'} {l s='hook' mod='ptm_multiblocks'}
		<span class="panel-heading-action">
			<a class="list-toolbar-btn" href="{$link->getAdminLink('AdminModules')}&configure=ptm_multiblocks&addMultiBlock=1&selectedHook={$hook|escape:'html':'UTF-8'}">
				<span title="" data-toggle="tooltip" class="label-tooltip" data-original-title="{l s='Add new' mod='ptm_multiblocks'}" data-html="true">
					<i class="process-icon-new "></i>
				</span>
			</a>
		</span>
		</h3>
		<div class="custom-blocks-content">
			<div id="customblocks_{$hook|escape:'html':'UTF-8'}">
				{foreach from=$customblock key=key item=block}
				  	{if isset($key) && $key === "customblocksgroup"}
					<div id="customblocks_pshook_{$block.0.id_module}#{$block.0.id_hook}" class="panel bg_parent">
					{else}
					<div id="customblocks_pshook_{$block.id_module}#{$block.id_hook}" class="panel">
					{/if}
						<div class="row">
							<div class="col-lg-1">
								<span><i class="icon-arrows "></i></span>
							</div>
				  			{if isset($key) && $key === "customblocksgroup"}
								<div class="col-md-11">
									<div id="subCustomblocks_{$hook|escape:'html':'UTF-8'}" class="panel">
										{foreach from=$block item=custom}
											<div id="customblocks_{$custom.id_multiblock}" class="panel clearfix">
												<div class="col-lg-1">
													<span><i class="icon-arrows "></i></span>
												</div>
												<div class="col-md-7 text-left"> 
													{if $custom.icon}
														<img class="custom_img" src="{$custom.icon}" /> 
													{/if}
													
													{$custom.hook_name|escape:'html':'UTF-8'}
									           	</div>
												<div class="col-md-4">
													<div class="btn-group-action pull-right">
														<a class="btn {$custom.status.href_class}" href="{$custom.status.link}" title="{$custom.status.title|escape:'html':'UTF-8'}"><i class="{$custom.status.icon_class}"></i> {$custom.status.title|escape:'html':'UTF-8'}</a>

														<a class="btn btn-default"
															href="{$link->getAdminLink('AdminModules')}&configure=ptm_multiblocks&id_multiblock={$custom.id_multiblock}">
															<i class="icon-edit"></i>
															{l s='Edit' mod='ptm_multiblocks'}
														</a>
														<a class="btn btn-default"
															href="{$link->getAdminLink('AdminModules')}&configure=ptm_multiblocks&delete_id_multiblock={$custom.id_multiblock}">
															<i class="icon-trash"></i>
															{l s='Delete' mod='ptm_multiblocks'}
														</a>
													</div>
												</div>
								           	</div>
										{/foreach}
									</div>
								</div>
						  	{else}
							  	<div class="col-md-7 text-left"> 
									{if $block.icon}
										<img class="custom_img" src="{$block.icon}" /> 
									{/if}

									{$block.modulename|escape:'html':'UTF-8'}
					           	</div>
								<div class="col-md-4"> </div>
				  			{/if}
						</div>
					</div>
				{/foreach}
			</div>
		</div>
	</div>
  {/foreach}
{/if}
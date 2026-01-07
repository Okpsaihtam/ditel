{*
 * PrestaChamps
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Commercial License
 * you can't distribute, modify or sell this code
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file
 * If you need help please contact leo@prestachamps.com
 *
 * @author    PrestaChamps <leo@prestachamps.com>
 * @copyright PrestaChamps
 * @license   commercial
 *}
<div class="row" id="{$imageType}-imgs">
    <div class="col-sm-4">
        <div class="btn-group" role="group">
            <a href="#" class="btn btn-primary img-start" onclick="regenerate('{$imageType}')"
               {if $imageCount ==0}disabled{/if}>
                <i class="icon icon-retweet" aria-hidden="true"></i>
                {$imageType}
            </a>
            <a href="#" class="btn btn-success img-pause" {if $imageCount ==0}disabled{/if}
               onclick="resume('{$imageType}')">
                <i class="icon icon-play" aria-hidden="true"></i>
            </a>
            <a href="#" class="btn btn-warning img-stop" onclick="stop('{$imageType}')" disabled=""
               title="{l s='Stop regeneration' mod='webpgenerator'}">
                <i class="icon icon-pause"></i>
            </a>
        </div>
    </div>
    <div class="col-sm-4">
        <span class="img-completed">0</span>/<span class="img-total">{$imageCount}</span>
    </div>
    <div class="col-sm-4">
        <div class="progress">
            <div class="progress-bar" role="progressbar" aria-valuenow="0"
                 aria-valuemin="0" aria-valuemax="100" style="width:0">
                <span class="sr-percent">0</span>%
            </div>
        </div>
    </div>
</div>
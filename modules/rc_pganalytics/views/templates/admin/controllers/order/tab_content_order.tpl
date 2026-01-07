{*
* NOTICE OF LICENSE
*
* This source file is subject to a trade license awarded by
* Garamo Online L.T.D.
*
* Any use, reproduction, modification or distribution
* of this source file without the written consent of
* Garamo Online L.T.D It Is prohibited.
*
*  @author    ReactionCode <info@reactioncode.com>
*  @copyright 2015-2020 Garamo Online L.T.D
*  @license   Commercial license
*}
{addJsDef rcGaToken=$rcToken}
{addJsDef rcGaModuleUrl=$moduleUrl}
{addJsDef rcOrderId=$rc_order_id}
{addJsDef rcOrderIdShop=$rc_order_id_shop}
{addJsDef rcTrackingReport=$tracking_report}
{addJsDef rcTrackingStatuses=$tracking_statuses}
<div class="tab-pane" id="rcga-tracking">
    <h4 class="visible-print">
        {l s='Tracking Status' mod='rc_pganalytics'}
        {if $tracking_report}
            <i class="icon-check-circle-o"></i>
        {else}
            <i class="icon-times-circle-o"></i>
        {/if}
    </h4>
    <div class="well">
        <div class="rc-messages">
            <p class="js-rcga-st-status alert alert-warning hidden">
                {l s='This order has been included in the control table at installation process to avoid duplicates with old tracking modules, so maybe the transaction is not registered on GA' mod='rc_pganalytics'}.<br>
                <strong>{l s='If you want to send this order to GA, click on' mod='rc_pganalytics'} "{l s='Remove from Control Table' mod='rc_pganalytics'}" {l s='button to enable the manual send' mod='rc_pganalytics'}</strong>
            </p>
            <p class="js-rcga-not-send alert alert-danger hidden">
                {l s='This order has not been sent to GA' mod='rc_pganalytics'}.<br>
                <strong>{l s='Change the order status to send it automatically or click the' mod='rc_pganalytics'} "{l s='Force Send to GA' mod='rc_pganalytics'}" {l s='button' mod='rc_pganalytics'}</strong>
            </p>
        </div>
        <dl class="js-rcga-order-detail list-detail hidden">
            <dt>Transaction sent</dt>
            <dd class="js-rcga-detail-sent"></dd>
            <dt>Sent By</dt>
            <dd class="js-rcga-detail-by"></dd>
        </dl>
    </div>
    <div class="tracking-options">
        <button type="button" class="js-rcga-send btn btn-primary hidden">{l s='Force Send to GA' mod='rc_pganalytics'}</button>
        <button type="button" class="js-rcga-remove btn btn-danger hidden">{l s='Remove from Control Table' mod='rc_pganalytics'}</button>
    </div>
</div>
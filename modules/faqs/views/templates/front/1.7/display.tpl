{extends file='page.tpl'}

{block name='left_column'}
    {if $faq || $questions || $search_val}
        {if $layout == 'layouts/layout-left-column.tpl' || $layout == 'layouts/layout-both-columns.tpl'}
            <div id="left-column" class="col-xs-12 col-sm-3">
                {hook h="displayFaqsLeftColumn" module="faqs"}
            </div>
        {/if}
    {/if}
{/block}

{block name='page_content'}
    {if !$faq && !$questions && !$search_val}
        <div class="gomakoil_faq_page">
            {if isset($mostFaq) && $mostFaq}
                <section class="most_faqs faqs-card-block">
                    <h1 class="title_home_page_fag">{l s='Featured Questions'  mod='faqs'}</h1>
                    <div class="content_home_page_fag">
                        {assign var='count_most' value=0}
                        {foreach from=$mostFaq item=most}
                            {if ($most['association'] && !$most['hide_faq']) || !$most['association']}
                                {$count_most = $count_most + 1}

                                <div class="questions change_item{if $most['as_url']} as_url{/if}" >

                                    {if $most['by_customer'] && $customer_questions_config['icon']}
                                        {if $customer_questions_config['popup']}
                                            <div class="user-assoc-popup">
                                                <div><b>{l s='Asked by:'  mod='faqs'}</b> {$most['name']|escape:'htmlall':'UTF-8'}</div>
                                                <div><b>{l s='Date:'  mod='faqs'}</b> {$most['date_add']|escape:'htmlall':'UTF-8'}</div>
                                            </div>
                                        {/if}

                                        <i class="m-user-1 left-side-icon"></i>
                                    {else}
                                        <i class="m-file-2 left-side-icon"></i>
                                    {/if}

                                    {if $most['as_url']}
                                        <i class="m-external-link-symbol"></i>
                                    {else}
                                        <i class="m-arrow-point-to-right"></i>
                                    {/if}

                                    {if $rewrite_settings}
                                        <a href="{$faqUrl|escape:'htmlall':'UTF-8'}{$most['link_rewrite_cat']|escape:'htmlall':'UTF-8'}/{$most['link_rewrite']|escape:'htmlall':'UTF-8'}.html" class="icon_fag"><i class="m-link-2"></i></a>
                                    {else}
                                        <a href="{$faqUrl|escape:'htmlall':'UTF-8'}&category={$most['link_rewrite_cat']|escape:'htmlall':'UTF-8'}&question={$most['link_rewrite']|escape:'htmlall':'UTF-8'}" class="icon_fag"><i class="m-link-2"></i></a>
                                    {/if}

                                    <span>{$most['question']|substr:0:250|strip_tags|escape:'htmlall':'UTF-8'}{if strlen($most['question']) > 250} . . .{/if}</span>
                                </div>

                                {if !$most['as_url']}
                                    <div class="answer_faq">
                                        {$most['answer']|escape:'htmlall':'UTF-8' nofilter}
                                    </div>
                                {/if}

                                <hr/>
                            {/if}
                        {/foreach}
                    </div>
                </section>
            {/if}

            <section class="topic_faqs faqs-card-block">
                <h1 class="title_home_page_fag">{l s='Faq Sections'  mod='faqs'}</h1>
                <div class="content_home_page_cat">
                    {assign var='category_blocks_count' value=0}

                    {foreach from=$faqCategories item=faqCategory}

                        {if $faqCategory['faqs']}
                            {$category_blocks_count = $category_blocks_count + 1}
                            <div class="category_block {if $category_blocks_count % 2 !== 0}odd{/if} {if (count($faqCategories) % 2 !== 0 && $category_blocks_count === count($faqCategories)) || (count($faqCategories) % 2 === 0 &&
                                                            ($category_blocks_count === count($faqCategories) || $category_blocks_count === count($faqCategories) - 1))}last_category_block
                                                       {/if}">

                                {if $rewrite_settings}
                                    <a class="category_name_home_page name_{$faqCategory['id_gomakoil_faq_category']|escape:'htmlall':'UTF-8'} change_item" style="color: {$faqCategory['color']|escape:'htmlall':'UTF-8'}"  href="{$faqUrl|escape:'htmlall':'UTF-8'}{$faqCategory['link_rewrite']|escape:'htmlall':'UTF-8'}.html">
                                        {$faqCategory['name']|escape:'htmlall':'UTF-8'}
                                    </a>
                                {else}
                                    <a class="category_name_home_page name_{$faqCategory['id_gomakoil_faq_category']|escape:'htmlall':'UTF-8'} change_item" style="color: {$faqCategory['color']|escape:'htmlall':'UTF-8'}"  href="{$faqUrl|escape:'htmlall':'UTF-8'}&category={$faqCategory['link_rewrite']|escape:'htmlall':'UTF-8'}">
                                        {$faqCategory['name']|escape:'htmlall':'UTF-8'}
                                    </a>
                                {/if}

                                <div class="all_questions">
                                        {assign var='current_question_index' value = 0}
                                        {foreach from=$faqCategory['faqs'] item=question}
                                            {if ($question['association'] && !$question['hide_faq']) || !$question['association']}
                                                    {$current_question_index = $current_question_index + 1}
                                                    {if count($faqCategory['faqs']) > 3}
                                                        {if $current_question_index <= 3}
                                                            <div class="questions change_item{if $question['as_url']} as_url{/if}">

                                                                {if $question['by_customer'] && $customer_questions_config['icon']}
                                                                    {if $customer_questions_config['popup']}
                                                                        <div class="user-assoc-popup">
                                                                            <div><b>{l s='Asked by:'  mod='faqs'}</b> {$question['name']|escape:'htmlall':'UTF-8'}</div>
                                                                            <div><b>{l s='Date:'  mod='faqs'}</b> {$question['date_add']|escape:'htmlall':'UTF-8'}</div>
                                                                        </div>
                                                                    {/if}

                                                                    <i class="m-user-1 left-side-icon"></i>
                                                                {else}
                                                                    <i class="m-file-2 left-side-icon"></i>
                                                                {/if}

                                                                {if $question['as_url']}
                                                                    <i class="m-external-link-symbol"></i>
                                                                {else}
                                                                    <i class="m-arrow-point-to-right"></i>
                                                                {/if}

                                                                {if $rewrite_settings}
                                                                    <a href="{$faqUrl|escape:'htmlall':'UTF-8'}{$faqCategory['link_rewrite']|escape:'htmlall':'UTF-8'}/{$question['link_rewrite']|escape:'htmlall':'UTF-8'}.html" class="icon_fag"><i class="m-link-2"></i></a>
                                                                {else}
                                                                    <a href="{$faqUrl|escape:'htmlall':'UTF-8'}&category={$faqCategory['link_rewrite']|escape:'htmlall':'UTF-8'}&question={$question['link_rewrite']|escape:'htmlall':'UTF-8'}" class="icon_fag"><i class="m-link-2"></i></a>
                                                                {/if}

                                                                {$question['question']|substr:0:250|strip_tags|escape:'htmlall':'UTF-8'}{if strlen($question['question']) > 250} . . .{/if}
                                                            </div>

                                                            {if !$question['as_url']}
                                                                <div class="answer_faq">
                                                                    {$question['answer']|escape:'htmlall':'UTF-8' nofilter}
                                                                </div>
                                                            {/if}
                                                            <hr/>

                                                            {if $current_question_index === 3}

                                                                {if $rewrite_settings}
                                                                    <a class="more_faq_cat" href="{$faqUrl|escape:'htmlall':'UTF-8'}{$faqCategory['link_rewrite']|escape:'htmlall':'UTF-8'}.html">{l s='Show More >>'  mod='faqs'}</a>
                                                                {else}
                                                                    <a class="more_faq_cat" href="{$faqUrl|escape:'htmlall':'UTF-8'}&category={$faqCategory['link_rewrite']|escape:'htmlall':'UTF-8'}" style="color: {$faqCategory['color']|escape:'htmlall':'UTF-8'}" >{l s='Show More >>'  mod='faqs'}</a>
                                                                {/if}

                                                            {/if}
                                                        {/if}
                                                    {else}
                                                        <div class="questions change_item{if $question['as_url']} as_url{/if}" >
                                                            {if $question['by_customer'] && $customer_questions_config['icon']}
                                                                {if $customer_questions_config['popup']}
                                                                    <div class="user-assoc-popup">
                                                                        <div><b>{l s='Asked by:'  mod='faqs'}</b> {$question['name']|escape:'htmlall':'UTF-8'}</div>
                                                                        <div><b>{l s='Date:'  mod='faqs'}</b> {$question['date_add']|escape:'htmlall':'UTF-8'}</div>
                                                                    </div>
                                                                {/if}

                                                                <i class="m-user-1 left-side-icon"></i>
                                                            {else}
                                                                <i class="m-file-2 left-side-icon"></i>
                                                            {/if}

                                                            {if $question['as_url']}
                                                                <i class="m-external-link-symbol"></i>
                                                            {else}
                                                                <i class="m-arrow-point-to-right"></i>
                                                            {/if}

                                                            {if $rewrite_settings}
                                                                <a href="{$faqUrl|escape:'htmlall':'UTF-8'}{$faqCategory['link_rewrite']|escape:'htmlall':'UTF-8'}/{$question['link_rewrite']|escape:'htmlall':'UTF-8'}.html" class="icon_fag"><i class="m-link-2"></i></a>
                                                            {else}
                                                                <a href="{$faqUrl|escape:'htmlall':'UTF-8'}&category={$faqCategory['link_rewrite']|escape:'htmlall':'UTF-8'}&question={$question['link_rewrite']|escape:'htmlall':'UTF-8'}" class="icon_fag"><i class="m-link-2"></i></a>
                                                            {/if}

                                                            {$question['question']|substr:0:250|strip_tags|escape:'htmlall':'UTF-8'}{if strlen($question['question']) > 250} . . .{/if}
                                                        </div>

                                                        {if !$question['as_url']}
                                                            <div class="answer_faq">
                                                                {$question['answer']|escape:'htmlall':'UTF-8' nofilter}
                                                            </div>
                                                        {/if}
                                                        <hr/>
                                                    {/if}
                                            {/if}
                                        {/foreach}
                                </div>
                            </div>
                        {/if}
                    {/foreach}
                    <div style="clear: both"></div>
                </div>
            </section>
        </div>
    {else}
        <div id="center_column_fag" class="center_column_fag" >
            <div class="gomakoil_faq_page">

                {if $questions['content']}
                    <section class="faq faq_cat faqs-card-block">
                        <h1 class="title_category_page" style="color: {$questions['color']|escape:'htmlall':'UTF-8'}" > {$questions['name']|escape:'htmlall':'UTF-8'} </h1>
                        {assign var='count_question' value=0}
                        {foreach from=$questions['content'] item=question}
                            {if ($question['association'] && !$question['hide_faq']) || !$question['association']}
                                {$count_question = $count_question + 1}
                                <div class="questions change_item{if $question['as_url']} as_url{/if}"  >
                                    {if $question['by_customer'] && $customer_questions_config['icon']}
                                        {if $customer_questions_config['popup']}
                                            <div class="user-assoc-popup">
                                                <div><b>{l s='Asked by:'  mod='faqs'}</b> {$question['name']|escape:'htmlall':'UTF-8'}</div>
                                                <div><b>{l s='Date:'  mod='faqs'}</b> {$question['date_add']|escape:'htmlall':'UTF-8'}</div>
                                            </div>
                                        {/if}

                                        <i class="m-user-1 left-side-icon"></i>
                                    {else}
                                        <i class="m-file-2 left-side-icon"></i>
                                    {/if}

                                    {if $question['as_url']}
                                        <i class="m-external-link-symbol"></i>
                                    {else}
                                        <i class="m-arrow-point-to-right"></i>
                                    {/if}

                                    {if $rewrite_settings}
                                        <a href="{$faqUrl|escape:'htmlall':'UTF-8'}{$smarty.get.category|escape:'htmlall':'UTF-8'}/{$question['link_rewrite']|escape:'htmlall':'UTF-8'}.html" class="icon_fag"><i class="m-link-2"></i></a>
                                    {else}
                                        <a href="{$faqUrl|escape:'htmlall':'UTF-8'}&category={$smarty.get.category|escape:'htmlall':'UTF-8'}&question={$question['link_rewrite']|escape:'htmlall':'UTF-8'}" class="icon_fag"><i class="m-link-2"></i></a>
                                    {/if}

                                    {$question['question']|strip_tags|substr:0:250|escape:'htmlall':'UTF-8'}{if strlen($question['question']) > 250} . . .{/if}
                                </div>

                                {if !$question['as_url']}
                                    <div class="answer_faq">
                                        {$question['answer']|escape:'htmlall':'UTF-8' nofilter}
                                    </div>
                                {/if}
                                <hr/>
                            {/if}
                        {/foreach}
                    </section>
                {/if}

                {if $search_val}
                    <section class="faqs-card-block">
                        <h1 class="title_category_page">{l s='Search'  mod='faqs'} "{$search_val|escape:'htmlall':'UTF-8'}"</h1>
                        {if $search}
                            {assign var='count_question' value=0}
                            {foreach from=$search item=question}
                                {if ($question['association'] && !$question['hide_faq']) || !$question['association']}
                                    {$count_question = $count_question + 1}
                                    <div class="questions change_item{if $question['as_url']} as_url{/if}"  >
                                        {if $question['by_customer'] && $customer_questions_config['icon']}
                                            {if $customer_questions_config['popup']}
                                                <div class="user-assoc-popup">
                                                    <div><b>{l s='Asked by:'  mod='faqs'}</b> {$question['name']|escape:'htmlall':'UTF-8'}</div>
                                                    <div><b>{l s='Date:'  mod='faqs'}</b> {$question['date_add']|escape:'htmlall':'UTF-8'}</div>
                                                </div>
                                            {/if}

                                            <i class="m-user-1 left-side-icon"></i>
                                        {else}
                                            <i class="m-file-2 left-side-icon"></i>
                                        {/if}

                                        {if $question['as_url']}
                                            <i class="m-external-link-symbol"></i>
                                        {else}
                                            <i class="m-arrow-point-to-right"></i>
                                        {/if}

                                        {if $rewrite_settings}
                                            <a href="{$faqUrl|escape:'htmlall':'UTF-8'}{$question['link_rewrite_cat']|escape:'htmlall':'UTF-8'}/{$question['link_rewrite']|escape:'htmlall':'UTF-8'}.html" class="icon_fag"><i class="m-link-2"></i></a>
                                        {else}
                                            <a href="{$faqUrl|escape:'htmlall':'UTF-8'}&category={$question['link_rewrite_cat']|escape:'htmlall':'UTF-8'}&question={$question['link_rewrite']|escape:'htmlall':'UTF-8'}" class="icon_fag"><i class="m-link-2"></i></a>
                                        {/if}

                                        {$question['question']|strip_tags|substr:0:250|escape:'htmlall':'UTF-8'}{if strlen($question['question']) > 250} . . .{/if}
                                    </div>

                                    {if !$question['as_url']}
                                        <div class="answer_faq">
                                            {$question['answer']|escape:'htmlall':'UTF-8' nofilter}
                                        </div>
                                    {/if}
                                    <hr/>
                                {/if}
                            {/foreach}
                        {else}
                            <div class="no_questions">{l s='No results were found for your search'  mod='faqs'} "{$search_val|escape:'htmlall':'UTF-8'}"</div>
                        {/if}
                    </section>
                {/if}

                {if $faq}
                    {if ($faq['association']) || !$faq['association']}
                        <section class="faq faqs-card-block">
                            <h1 class="title_faq_page"> {$faq['question']|strip_tags|escape:'htmlall':'UTF-8'} </h1>
                            <hr/>
                            <div class="answer">
                                {$faq['answer']|escape:'htmlall':'UTF-8' nofilter}
                            </div>
                        </section>
                    {/if}
                {/if}
            </div>
        </div>
    {/if}
{/block}

{block name="right_column"}
    {if $faq || $questions || $search_val}
        {if $layout == 'layouts/layout-right-column.tpl'}
            <div id="right-column" class="col-xs-12 col-sm-4 col-md-3">
                {hook h="displayFaqsRightColumn" module="faqs"}
            </div>
        {/if}
    {/if}
{/block}


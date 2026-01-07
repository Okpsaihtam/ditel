(function () {
    $(document).ready(function () {
        window.onload = function () {
            if (window.addEventListener) {
                window.addEventListener("DOMMouseScroll", mouse_wheel, false);
            }

            window.onmousewheel = document.onmousewheel = mouse_wheel;
        };

        var mouse_wheel = function (event) {
            if (false === !!event) event = window.event;
            direction = ((event.wheelDelta) ? event.wheelDelta / 120 : event.detail / -3) || false;
        };

        /**
         * Roll out answer
         */
        $(".gomakoil_faq_page .questions").click(function (e) {
            e.preventDefault();

            var answer_page_link = $(this).find(".icon_fag");
            var answer_block = $(this).next();

            if ($(this).hasClass('as_url')) {
                location.href = answer_page_link.attr('href');
                return false;
            }

            if ($(this).hasClass('active')) {
                $(this).removeClass('active');
                answer_page_link.hide();
            } else {
                $(this).addClass('active');
                answer_page_link.fadeIn();
            }

            answer_block.slideToggle("slow");
        });

        /**
         * Prioritize inner link to full question over anchor wrapper
         */
        var link_to_full_question_icon = "a.icon_fag";
        $(link_to_full_question_icon).click(function(event) {
            event.stopPropagation();
        });

        /**
         *
         * Apply Focus/Blur specific styles to main search input field
         */
        var faqs_search_input = "#search_faqs_input";
        var faqs_search_input_group = "#search_faqs_input_group";

        $(document).on("focus", faqs_search_input, function(event) {
            event.preventDefault();
            $(faqs_search_input_group).addClass("search-faqs-input-focused");
        });

        $(document).on("blur", faqs_search_input, function(event) {
            event.preventDefault();
            $(faqs_search_input_group).removeClass("search-faqs-input-focused");
        });

        /**
         *
         *Set height of every category block to be equal to tallest block
         */
        var category_block = ".category_block";
        var category_block_height = getCategoryBlockMaxHeight();
        $(category_block).css("min-height", category_block_height);


        var asked_by_user_icon = ".questions.change_item .m-user-1";
        var asked_by_user_popup_msg = ".questions.change_item .user-assoc-popup";

        $(asked_by_user_icon).hover(function() {
            $(this).siblings(asked_by_user_popup_msg).show();
        }, function() {
            $(this).siblings(asked_by_user_popup_msg).hide();
        });

        positionPopupDialogue();
        $(window).resize(function() {
            positionPopupDialogue();
        });
    });

    function positionPopupDialogue() {
        var asked_by_user_popup_msg = ".questions.change_item .user-assoc-popup";
        var faqs_block_width = $(".gomakoil_faq_page").outerWidth();
        var popup_dialogue_width = $(asked_by_user_popup_msg).outerWidth() + 15;

        if ($(window).width() <= (faqs_block_width + popup_dialogue_width)) {
            $(asked_by_user_popup_msg).addClass("display-right");
        } else {
            $(asked_by_user_popup_msg).removeClass("display-right");
        }
    }

    /**
     * @returns {string}
     * Height of tallest category block
     */
    function getCategoryBlockMaxHeight() {
        var category_block = ".category_block";
        var category_block_max_height = 100;

        $.each($(category_block), function() {
            var height = $(this).height();

            if (height > category_block_max_height) {
                category_block_max_height = height;
            }
        });

        return (category_block_max_height + 30) + "px";
    }
})();

function searchFags(val, url) {
    if (val.length > 0) {
        location = url + val;
    }
}


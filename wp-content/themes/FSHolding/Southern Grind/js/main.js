(function ($) {

    $(function () {

        // OUR STORY VIDEO
        $('.video_clicker').on('click', function () {
            $(this).hide();
            $(this).next().attr('src', "http://www.youtube.com/embed/gH7cmIGQvXg?autoplay=1&rel=0").show();
        });

        // BAD MONKEY PAGE

        // Share func.
        var share = new Share(".share_button", {
            title: "Build Your Own Bad Monkey",
            image: $('.final_image:first').attr('src'),
            networks: {
                facebook: {},
                pinterest: {},
                twitter: {},
                google_plus: {enabled: false},
                email: {enabled: false}
            }
        });

        $('.share_button').hide();


        var total_price = $('.bad_monkey_page .total_price');
        if (total_price.length > 0) {
            total_price.html("$" + parseFloat(total_price.attr("data-base")));
        }

        // Option selection
        $('.option').on('click', function () {
            var type = $(this).parent().attr("data-type");
            type = type.charAt(0).toUpperCase() + type.slice(1)

            _gaq.push(['_trackEvent', 'Button', 'Click', type + ": " + $(this).attr('data-name')]);

            var oldPC = parseFloat($(this).siblings('.selected').attr("data-price-change")) || 0;
            $(this).siblings('.selected').removeClass('selected');
            var newPC = parseFloat($(this).attr("data-price-change"));
            $(this).addClass('selected');

            total_price.html("$" + ( parseFloat(total_price.html().slice(1)) + newPC - oldPC ));

            $('.final_image:visible').fadeOut(300);
            $('.share_button').hide();

            if (history.pushState) {
                var q = setUrlEncodedKey($(this).parent().attr('data-type'), $(this).attr('data-name'));
                var newurl = window.location.protocol + "//" + window.location.host + window.location.pathname + q;
                window.history.pushState({path: newurl}, '', newurl);
            } else {
                var q = setUrlEncodedKey($(this).parent().attr('data-type'), $(this).attr('data-name'), $('meta[property="og:url"]').attr('content').split("?")[1]);
                var newurl = window.location.protocol + "//" + window.location.host + window.location.pathname + q;
                $('meta[property="og:url"]').attr('content', newurl);
            }
        });

        // Reset button
        $('.bad_monkey_page .reset_blade').on('click', function () {
            _gaq.push(['_trackEvent', 'Button', 'Click', 'Reset Blade']);

            $('.option.selected').removeClass('selected');
            total_price.html("$" + parseFloat(total_price.attr("data-base")));
            $('.final_image:visible').fadeOut(300);
            $('.share_button').hide();

            $('html, body').animate({scrollTop: $('.section_heading:first').offset().top});

            if (history.pushState) {
                var q = window.location.search;

                q = setUrlEncodedKey("blade", "", q);
                q = setUrlEncodedKey("handle", "", q);
                q = setUrlEncodedKey("finish", "", q);

                var newurl = window.location.protocol + "//" + window.location.host + window.location.pathname + q;
                window.history.pushState({path: newurl}, '', newurl);
            } else {
                var q = $('meta[property="og:url"]').attr('content').split("?")[1];

                q = setUrlEncodedKey("blade", "", q);
                q = setUrlEncodedKey("handle", "", q);
                q = setUrlEncodedKey("finish", "", q);

                var newurl = window.location.protocol + "//" + window.location.host + window.location.pathname + q;

                $('meta[property="og:url"]').attr('content', newurl);
            }
        });

        // Build blade
        $('.bad_monkey_page .build_blade').on('click', function () {
            _gaq.push(['_trackEvent', 'Button', 'Click', 'Build Blade']);


            if ($('.blade_options .selected').length == 0 || $('.handle_options .selected').length == 0 || $('.finish_options .selected').length == 0) {
                return;
            }


            var class_name = $('.blade_options .selected').attr('data-name') + "_" + $('.handle_options .selected').attr('data-name') + "_" + $('.finish_options .selected').attr('data-name');

            $('.final_image:not(.' + class_name + ')').fadeOut(300, function () {
                $('.final_image.' + class_name).fadeIn(300);
            });
            $('.bad_monkey_page .download_blade').attr('href', $('.final_image.' + class_name).attr('data-url'));
            $('.share_button').show();
            share.config.image = $('.final_image.' + class_name).attr('src');
            share.config.networks.facebook.image = $('.final_image.' + class_name).attr('src');
            share.config.networks.pinterest.image = $('.final_image.' + class_name).attr('src');

            if (history.pushState) {
                share.config.url = window.location.href;
                share.config.networks.facebook.url = window.location.href;
                share.config.networks.pinterest.url = window.location.href;
                share.config.networks.twitter.url = window.location.href;
            } else {
                share.config.url = $('meta[property="og:url"]').attr('content');
                share.config.networks.facebook.url = $('meta[property="og:url"]').attr('content');
                share.config.networks.pinterest.url = $('meta[property="og:url"]').attr('content');
                share.config.networks.twitter.url = $('meta[property="og:url"]').attr('content');
            }

            $('html, body').animate({scrollTop: $('.finished_knife').offset().top + $('.finished_knife').height() - window.innerHeight})

        });

        // Query param check
        if (getUrlEncodedKey('blade') && getUrlEncodedKey('blade') != "") {
            $('.option[data-name="' + getUrlEncodedKey('blade') + '"]').addClass('selected');
        }

        if (getUrlEncodedKey('finish') && getUrlEncodedKey('finish') != "") {
            $('.option[data-name="' + getUrlEncodedKey('finish') + '"]').addClass('selected');
        }

        if (getUrlEncodedKey('handle') && getUrlEncodedKey('handle') != "") {
            $('.option[data-name="' + getUrlEncodedKey('handle') + '"]').addClass('selected');
        }

        if ($('.blade_options .selected').length > 0 && $('.handle_options .selected').length > 0 && $('.finish_options .selected').length > 0) {
            var class_name = $('.blade_options .selected').attr('data-name') + "_" + $('.handle_options .selected').attr('data-name') + "_" + $('.finish_options .selected').attr('data-name');
            $('.final_image.' + class_name).show();
            $('.bad_monkey_page .download_blade').attr('href', $('.final_image.' + class_name).attr('data-url'));
            $('.share_button').show();
        }

        $('.bad_monkey_page .download_blade').on('click', function () {
            if ($('.blade_options .selected').length == 0 || $('.handle_options .selected').length == 0 || $('.finish_options .selected').length == 0) {
                return;
            }
            var class_name = $('.blade_options .selected').attr('data-name') + "_" + $('.handle_options .selected').attr('data-name') + "_" + $('.finish_options .selected').attr('data-name');
            $('.final_image:not(.' + class_name + ')').fadeOut(300, function () {
                $('.final_image.' + class_name).fadeIn(300);
            });
            $('.bad_monkey_page .download_blade').attr('href', $('.final_image.' + class_name).attr('data-url'));
            $('.share_button').show();
            _gaq.push(['_trackEvent', 'Button', 'Click', 'Place Order']);
        });

        $('.bad_monkey_page .share_button').on('click', function () {
            _gaq.push(['_trackEvent', 'Button', 'Click', 'Social Share']);
        });

        // END BAD MONKEY PAGE

        // Cancel footer category clicks
        $('li.menu-item-type-taxonomy a').on('click', function (e) {
            e.preventDefault();
            return false;
        });

        // Try validation:
        $("#myform").validate();

        // Sign Up Form items:
        $('#id_email').attr("placeholder", "Enter your email address");
        $('#e2ma_signup_submit_button').attr("value", "Sign Up");

    });

// gives value of query param
    function getUrlEncodedKey(key) {
        var query = window.location.search;
        var re = new RegExp("[?|&]" + key + "=(.*?)&");
        var matches = re.exec(query + "&");
        if (!matches || matches.length < 2)
            return "";
        return decodeURIComponent(matches[1].replace("+", " "));
    }

// returns url with new param value
    function setUrlEncodedKey(key, value, query) {
        query = query || window.location.search;
        var q = query + "&";
        var re = new RegExp("[?|&]" + key + "=.*?&");
        if (!re.test(q))
            q += key + "=" + encodeURI(value);
        else
            q = q.replace(re, "&" + key + "=" + encodeURIComponent(value) + "&");
        q = q.trimStart("&").trimEnd("&");
        return q[0] == "?" ? q : q = "?" + q;
    }

    String.prototype.trimEnd = function (c) {
        if (c)
            return this.replace(new RegExp(c.escapeRegExp() + "*$"), '');
        return this.replace(/\s+$/, '');
    }

    String.prototype.trimStart = function (c) {
        if (c)
            return this.replace(new RegExp("^" + c.escapeRegExp() + "*"), '');
        return this.replace(/^\s+/, '');
    }

    String.prototype.escapeRegExp = function () {
        return this.replace(/[.*+?^${}()|[\]\/\\]/g, "\\$0");
    };


})(jQuery);



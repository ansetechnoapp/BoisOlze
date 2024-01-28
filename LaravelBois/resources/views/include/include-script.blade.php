<link rel="stylesheet" id="rs-plugin-settings-css"
        href="wp-content/plugins/revslider/public/assets/css/rs6ca88.css?ver=6.5.24" media="all" />
<script type="text/javascript">
    (function() {
        var porto_init_yith_search = function() {
            (function($) {
                var search_loader_url = 'wp-content/themes/porto/images/ajax-loader%402x.gif';
                var ajax_url = '../../wp-admin/admin-ajaxd41d.html?';

                var yith_search = $('.yith-ajaxsearchform-container1381794153 .yith-s').yithautocomplete({
                    minChars: 3,
                    appendTo: '.yith-ajaxsearchform-container1381794153',
                    serviceUrl: function() {
                        var val = $('.yith-ajaxsearchform-container1381794153 .cat').val();
                        if (val != '0') {
                            return ajax_url + 'action=yith_ajax_search_products' +
                                '&product_cat=' + val;
                        } else {
                            return ajax_url + 'action=yith_ajax_search_products';
                        }
                    },
                    onSearchStart: function() {
                        $(this).css('background', 'url(' + search_loader_url +
                            ') no-repeat 97% center');
                        $(this).css('background-size', '16px 16px');
                    },
                    onSearchComplete: function() {
                        $(this).css('background', 'transparent');
                    },

                    onSelect: function(suggestion) {
                        if (suggestion.id != -1) {
                            window.location.href = suggestion.url;
                        }
                    },
                    formatResult: function(suggestion, currentValue) {
                        var pattern = '(' + $.YithAutocomplete.utils.escapeRegExChars(
                            currentValue) + ')';
                        var html = '';

                        if (typeof suggestion.img !== 'undefined') {
                            html += suggestion.img;
                        }

                        html += '<div class="yith_wcas_result_content"><div class="title">';
                        html += suggestion.value.replace(new RegExp(pattern, 'gi'),
                            '<strong>$1<\/strong>');
                        html += '</div>';

                        if (typeof suggestion.div_badge_open !== 'undefined') {
                            html += suggestion.div_badge_open;
                        }

                        if (typeof suggestion.on_sale !== 'undefined') {
                            html += suggestion.on_sale;
                        }

                        if (typeof suggestion.featured !== 'undefined') {
                            html += suggestion.featured;
                        }

                        if (typeof suggestion.div_badge_close !== 'undefined') {
                            html += suggestion.div_badge_close;
                        }

                        if (typeof suggestion.price !== 'undefined' && suggestion.price != '') {
                            html += ' ' + suggestion.price;
                        }

                        if (typeof suggestion.excerpt !== 'undefined') {
                            html += ' ' + suggestion.excerpt.replace(new RegExp(pattern, 'gi'),
                                '<strong>$1<\/strong>');
                        }

                        html += '</div>';

                        return html;
                    }
                });

                $('.yith-ajaxsearchform-container1381794153 .cat').on('change', function() {
                    $('.yith-ajaxsearchform-container1381794153 .yith-s').focus();
                });
            })(window.jQuery);
        };

        if (window.theme && theme.isLoaded) {
            porto_init_yith_search();
        } else {
            window.addEventListener('load', porto_init_yith_search);
        }
    })();
</script>
<script>
    window.RS_MODULES = window.RS_MODULES || {};
    window.RS_MODULES.modules = window.RS_MODULES.modules || {};
    window.RS_MODULES.waiting = window.RS_MODULES.waiting || [];
    window.RS_MODULES.defered = true;
    window.RS_MODULES.moduleWaiting = window.RS_MODULES.moduleWaiting || {};
    window.RS_MODULES.type = 'compiled';
</script>
<script type="text/javascript">
    (function() {
        var c = document.body.className;
        c = c.replace(/woocommerce-no-js/, 'woocommerce-js');
        document.body.className = c;
    })();
</script>
<script type="text/template" id="tmpl-unavailable-variation-template">
	<p>Dieses Produkt ist leider nicht verfügbar. Bitte wähle eine andere Kombination.</p>
	</script>


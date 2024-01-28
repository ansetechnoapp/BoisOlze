document.documentElement.className =
     document.documentElement.className + " yes-js js_active js";
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
window._wpemojiSettings = {
     baseUrl: "https://s.w.org/images/core/emoji/14.0.0/72x72/",
     ext: ".png",
     svgUrl: "https://s.w.org/images/core/emoji/14.0.0/svg/",
     svgExt: ".svg",
     source: {
          concatemoji:
               "https://www.holzelektro.com/wp-includes/js/wp-emoji-release.min.js?ver=6.0.3",
     },
};
/*! This file is auto-generated */
!(function (e, a, t) {
     var n,
          r,
          o,
          i = a.createElement("canvas"),
          p = i.getContext && i.getContext("2d");
     function s(e, t) {
          var a = String.fromCharCode,
               e =
                    (p.clearRect(0, 0, i.width, i.height),
                    p.fillText(a.apply(this, e), 0, 0),
                    i.toDataURL());
          return (
               p.clearRect(0, 0, i.width, i.height),
               p.fillText(a.apply(this, t), 0, 0),
               e === i.toDataURL()
          );
     }
     function c(e) {
          var t = a.createElement("script");
          (t.src = e),
               (t.defer = t.type = "text/javascript"),
               a.getElementsByTagName("head")[0].appendChild(t);
     }
     for (
          o = Array("flag", "emoji"),
               t.supports = {
                    everything: !0,
                    everythingExceptFlag: !0,
               },
               r = 0;
          r < o.length;
          r++
     )
          (t.supports[o[r]] = (function (e) {
               if (!p || !p.fillText) return !1;
               switch (
                    ((p.textBaseline = "top"), (p.font = "600 32px Arial"), e)
               ) {
                    case "flag":
                         return s(
                              [127987, 65039, 8205, 9895, 65039],
                              [127987, 65039, 8203, 9895, 65039]
                         )
                              ? !1
                              : !s(
                                     [55356, 56826, 55356, 56819],
                                     [55356, 56826, 8203, 55356, 56819]
                                ) &&
                                     !s(
                                          [
                                               55356, 57332, 56128, 56423,
                                               56128, 56418, 56128, 56421,
                                               56128, 56430, 56128, 56423,
                                               56128, 56447,
                                          ],
                                          [
                                               55356, 57332, 8203, 56128, 56423,
                                               8203, 56128, 56418, 8203, 56128,
                                               56421, 8203, 56128, 56430, 8203,
                                               56128, 56423, 8203, 56128, 56447,
                                          ]
                                     );
                    case "emoji":
                         return !s(
                              [129777, 127995, 8205, 129778, 127999],
                              [129777, 127995, 8203, 129778, 127999]
                         );
               }
               return !1;
          })(o[r])),
               (t.supports.everything =
                    t.supports.everything && t.supports[o[r]]),
               "flag" !== o[r] &&
                    (t.supports.everythingExceptFlag =
                         t.supports.everythingExceptFlag && t.supports[o[r]]);
     (t.supports.everythingExceptFlag =
          t.supports.everythingExceptFlag && !t.supports.flag),
          (t.DOMReady = !1),
          (t.readyCallback = function () {
               t.DOMReady = !0;
          }),
          t.supports.everything ||
               ((n = function () {
                    t.readyCallback();
               }),
               a.addEventListener
                    ? (a.addEventListener("DOMContentLoaded", n, !1),
                      e.addEventListener("load", n, !1))
                    : (e.attachEvent("onload", n),
                      a.attachEvent("onreadystatechange", function () {
                           "complete" === a.readyState && t.readyCallback();
                      })),
               (e = t.source || {}).concatemoji
                    ? c(e.concatemoji)
                    : e.wpemoji && e.twemoji && (c(e.twemoji), c(e.wpemoji)));
})(window, document, window._wpemojiSettings);
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
WebFontConfig = {
     google: {
          families: [
               "Open+Sans:400,500,600,700,800",
               "Poppins:400,500,600,700,800",
          ],
     },
};
(function (d) {
     var wf = d.createElement("script"),
          s = d.scripts[0];
     wf.src = "wp-content/themes/porto/js/libs/webfont.js";
     wf.async = true;
     s.parentNode.insertBefore(wf, s);
})(document);
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
function setREVStartSize(e) {
     //window.requestAnimationFrame(function() {
     window.RSIW = window.RSIW === undefined ? window.innerWidth : window.RSIW;
     window.RSIH = window.RSIH === undefined ? window.innerHeight : window.RSIH;
     try {
          var pw = document.getElementById(e.c).parentNode.offsetWidth,
               newh;
          pw =
               pw === 0 ||
               isNaN(pw) ||
               e.l == "fullwidth" ||
               e.layout == "fullwidth"
                    ? window.RSIW
                    : pw;
          e.tabw = e.tabw === undefined ? 0 : parseInt(e.tabw);
          e.thumbw = e.thumbw === undefined ? 0 : parseInt(e.thumbw);
          e.tabh = e.tabh === undefined ? 0 : parseInt(e.tabh);
          e.thumbh = e.thumbh === undefined ? 0 : parseInt(e.thumbh);
          e.tabhide = e.tabhide === undefined ? 0 : parseInt(e.tabhide);
          e.thumbhide = e.thumbhide === undefined ? 0 : parseInt(e.thumbhide);
          e.mh =
               e.mh === undefined || e.mh == "" || e.mh === "auto"
                    ? 0
                    : parseInt(e.mh, 0);
          if (e.layout === "fullscreen" || e.l === "fullscreen")
               newh = Math.max(e.mh, window.RSIH);
          else {
               e.gw = Array.isArray(e.gw) ? e.gw : [e.gw];
               for (var i in e.rl)
                    if (e.gw[i] === undefined || e.gw[i] === 0)
                         e.gw[i] = e.gw[i - 1];
               e.gh =
                    e.el === undefined ||
                    e.el === "" ||
                    (Array.isArray(e.el) && e.el.length == 0)
                         ? e.gh
                         : e.el;
               e.gh = Array.isArray(e.gh) ? e.gh : [e.gh];
               for (var i in e.rl)
                    if (e.gh[i] === undefined || e.gh[i] === 0)
                         e.gh[i] = e.gh[i - 1];

               var nl = new Array(e.rl.length),
                    ix = 0,
                    sl;
               e.tabw = e.tabhide >= pw ? 0 : e.tabw;
               e.thumbw = e.thumbhide >= pw ? 0 : e.thumbw;
               e.tabh = e.tabhide >= pw ? 0 : e.tabh;
               e.thumbh = e.thumbhide >= pw ? 0 : e.thumbh;
               for (var i in e.rl) nl[i] = e.rl[i] < window.RSIW ? 0 : e.rl[i];
               sl = nl[0];
               for (var i in nl)
                    if (sl > nl[i] && nl[i] > 0) {
                         sl = nl[i];
                         ix = i;
                    }
               var m =
                    pw > e.gw[ix] + e.tabw + e.thumbw
                         ? 1
                         : (pw - (e.tabw + e.thumbw)) / e.gw[ix];
               newh = e.gh[ix] * m + (e.tabh + e.thumbh);
          }
          var el = document.getElementById(e.c);
          if (el !== null && el) el.style.height = newh + "px";
          el = document.getElementById(e.c + "_wrapper");
          if (el !== null && el) {
               el.style.height = newh + "px";
               el.style.display = "block";
          }
     } catch (e) {
          console.log("Failure at Presize of Slider:" + e);
     }
     //});
}
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
window.dataLayer = window.dataLayer || [];
function gtag() {
     dataLayer.push(arguments);
}
gtag("js", new Date());

gtag("config", "UA-238669973-1");
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
window.dataLayer = window.dataLayer || [];
function gtag() {
     dataLayer.push(arguments);
}
gtag("js", new Date());

gtag("config", "AW-10781161021");
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
gtag("event", "conversion", {
     send_to: "AW-10781161021/oS9vCNGw6dgDEL3s7ZQo",
     value: 1.0,
     currency: "USD",
     transaction_id: "",
});
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
(function () {
     var porto_init_yith_search = function () {
          (function ($) {
               var search_loader_url =
                    "wp-content/themes/porto/images/ajax-loader%402x.gif";
               var ajax_url = "wp-admin/admin-ajaxd41d.html?";

               var yith_search = $(
                    ".yith-ajaxsearchform-container1294444268 .yith-s"
               ).yithautocomplete({
                    minChars: 3,
                    appendTo: ".yith-ajaxsearchform-container1294444268",
                    serviceUrl: function () {
                         var val = $(
                              ".yith-ajaxsearchform-container1294444268 .cat"
                         ).val();
                         if (val != "0") {
                              return (
                                   ajax_url +
                                   "action=yith_ajax_search_products" +
                                   "&product_cat=" +
                                   val
                              );
                         } else {
                              return (
                                   ajax_url + "action=yith_ajax_search_products"
                              );
                         }
                    },
                    onSearchStart: function () {
                         $(this).css(
                              "background",
                              "url(" +
                                   search_loader_url +
                                   ") no-repeat 97% center"
                         );
                         $(this).css("background-size", "16px 16px");
                    },
                    onSearchComplete: function () {
                         $(this).css("background", "transparent");
                    },

                    onSelect: function (suggestion) {
                         if (suggestion.id != -1) {
                              window.location.href = suggestion.url;
                         }
                    },
                    formatResult: function (suggestion, currentValue) {
                         var pattern =
                              "(" +
                              $.YithAutocomplete.utils.escapeRegExChars(
                                   currentValue
                              ) +
                              ")";
                         var html = "";

                         if (typeof suggestion.img !== "undefined") {
                              html += suggestion.img;
                         }

                         html +=
                              '<div class="yith_wcas_result_content"><div class="title">';
                         html += suggestion.value.replace(
                              new RegExp(pattern, "gi"),
                              "<strong>$1</strong>"
                         );
                         html += "</div>";

                         if (typeof suggestion.div_badge_open !== "undefined") {
                              html += suggestion.div_badge_open;
                         }

                         if (typeof suggestion.on_sale !== "undefined") {
                              html += suggestion.on_sale;
                         }

                         if (typeof suggestion.featured !== "undefined") {
                              html += suggestion.featured;
                         }

                         if (
                              typeof suggestion.div_badge_close !== "undefined"
                         ) {
                              html += suggestion.div_badge_close;
                         }

                         if (
                              typeof suggestion.price !== "undefined" &&
                              suggestion.price != ""
                         ) {
                              html += " " + suggestion.price;
                         }

                         if (typeof suggestion.excerpt !== "undefined") {
                              html +=
                                   " " +
                                   suggestion.excerpt.replace(
                                        new RegExp(pattern, "gi"),
                                        "<strong>$1</strong>"
                                   );
                         }

                         html += "</div>";

                         return html;
                    },
               });

               $(".yith-ajaxsearchform-container1294444268 .cat").on(
                    "change",
                    function () {
                         $(
                              ".yith-ajaxsearchform-container1294444268 .yith-s"
                         ).focus();
                    }
               );
          })(window.jQuery);
     };

     if (window.theme && theme.isLoaded) {
          porto_init_yith_search();
     } else {
          window.addEventListener("load", porto_init_yith_search);
     }
})();
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
setREVStartSize({
     c: "rev_slider_1_1",
     rl: [1240, 1024, 778, 480],
     el: [650],
     gw: [1920],
     gh: [650],
     type: "standard",
     justify: "",
     layout: "fullwidth",
     mh: "0",
});
if (
     window.RS_MODULES !== undefined &&
     window.RS_MODULES.modules !== undefined &&
     window.RS_MODULES.modules["revslider11"] !== undefined
) {
     window.RS_MODULES.modules["revslider11"].once = false;
     window.revapi1 = undefined;
     if (window.RS_MODULES.checkMinimal !== undefined)
          window.RS_MODULES.checkMinimal();
}
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
(function () {
     var porto_init_yith_search = function () {
          (function ($) {
               var search_loader_url =
                    "wp-content/themes/porto/images/ajax-loader%402x.gif";
               var ajax_url = "wp-admin/admin-ajaxd41d.html?";

               var yith_search = $(
                    ".yith-ajaxsearchform-container1667185076 .yith-s"
               ).yithautocomplete({
                    minChars: 3,
                    appendTo: ".yith-ajaxsearchform-container1667185076",
                    serviceUrl: function () {
                         var val = $(
                              ".yith-ajaxsearchform-container1667185076 .cat"
                         ).val();
                         if (val != "0") {
                              return (
                                   ajax_url +
                                   "action=yith_ajax_search_products" +
                                   "&product_cat=" +
                                   val
                              );
                         } else {
                              return (
                                   ajax_url + "action=yith_ajax_search_products"
                              );
                         }
                    },
                    onSearchStart: function () {
                         $(this).css(
                              "background",
                              "url(" +
                                   search_loader_url +
                                   ") no-repeat 97% center"
                         );
                         $(this).css("background-size", "16px 16px");
                    },
                    onSearchComplete: function () {
                         $(this).css("background", "transparent");
                    },

                    onSelect: function (suggestion) {
                         if (suggestion.id != -1) {
                              window.location.href = suggestion.url;
                         }
                    },
                    formatResult: function (suggestion, currentValue) {
                         var pattern =
                              "(" +
                              $.YithAutocomplete.utils.escapeRegExChars(
                                   currentValue
                              ) +
                              ")";
                         var html = "";

                         if (typeof suggestion.img !== "undefined") {
                              html += suggestion.img;
                         }

                         html +=
                              '<div class="yith_wcas_result_content"><div class="title">';
                         html += suggestion.value.replace(
                              new RegExp(pattern, "gi"),
                              "<strong>$1</strong>"
                         );
                         html += "</div>";

                         if (typeof suggestion.div_badge_open !== "undefined") {
                              html += suggestion.div_badge_open;
                         }

                         if (typeof suggestion.on_sale !== "undefined") {
                              html += suggestion.on_sale;
                         }

                         if (typeof suggestion.featured !== "undefined") {
                              html += suggestion.featured;
                         }

                         if (
                              typeof suggestion.div_badge_close !== "undefined"
                         ) {
                              html += suggestion.div_badge_close;
                         }

                         if (
                              typeof suggestion.price !== "undefined" &&
                              suggestion.price != ""
                         ) {
                              html += " " + suggestion.price;
                         }

                         if (typeof suggestion.excerpt !== "undefined") {
                              html +=
                                   " " +
                                   suggestion.excerpt.replace(
                                        new RegExp(pattern, "gi"),
                                        "<strong>$1</strong>"
                                   );
                         }

                         html += "</div>";

                         return html;
                    },
               });

               $(".yith-ajaxsearchform-container1667185076 .cat").on(
                    "change",
                    function () {
                         $(
                              ".yith-ajaxsearchform-container1667185076 .yith-s"
                         ).focus();
                    }
               );
          })(window.jQuery);
     };

     if (window.theme && theme.isLoaded) {
          porto_init_yith_search();
     } else {
          window.addEventListener("load", porto_init_yith_search);
     }
})();
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
window.RS_MODULES = window.RS_MODULES || {};
window.RS_MODULES.modules = window.RS_MODULES.modules || {};
window.RS_MODULES.waiting = window.RS_MODULES.waiting || [];
window.RS_MODULES.defered = true;
window.RS_MODULES.moduleWaiting = window.RS_MODULES.moduleWaiting || {};
window.RS_MODULES.type = "compiled";
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
(function () {
     var c = document.body.className;
     c = c.replace(/woocommerce-no-js/, "woocommerce-js");
     document.body.className = c;
})();
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
if (typeof revslider_showDoubleJqueryError === "undefined") {
     function revslider_showDoubleJqueryError(sliderID) {
          console.log(
               "You have some jquery.js library include that comes after the Slider Revolution files js inclusion."
          );
          console.log("To fix this, you can:");
          console.log(
               "1. Set 'Module General Options' -> 'Advanced' -> 'jQuery & OutPut Filters' -> 'Put JS to Body' to on"
          );
          console.log("2. Find the double jQuery.js inclusion and remove it");
          return "Double Included jQuery Library";
     }
}
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
if ("off" === jQuery.cookie("porto_ads_status")) {
} else {
     jQuery(".porto-block-html-top > div")
          .removeClass("d-none")
          .append('<button class="mfp-close"></button>');
}
jQuery("body").on("click", ".porto-block-html-top .mfp-close", function () {
     jQuery(this).parent().fadeOut();
     jQuery.cookie("porto_ads_status", "off", {
          expires: 7,
     });
});
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
var dokan = {
     ajaxurl: "https://www.holzelektro.com/wp-admin/admin-ajax.php",
     nonce: "f10d4e1527",
     ajax_loader:
          "https://www.holzelektro.com/wp-content/plugins/dokan-lite/assets/images/ajax-loader.gif",
     seller: {
          available: "Available",
          notAvailable: "Not Available",
     },
     delete_confirm: "Are you sure?",
     wrong_message: "Something went wrong. Please try again.",
     vendor_percentage: "100",
     commission_type: "percentage",
     rounding_precision: "6",
     mon_decimal_point: ",",
     product_types: ["simple"],
     loading_img:
          "https://www.holzelektro.com/wp-content/plugins/dokan-lite/assets/images/loading.gif",
     store_product_search_nonce: "f005f17d45",
     i18n_download_permission:
          "Are you sure you want to revoke access to this download?",
     i18n_download_access:
          "Could not grant access - the user may already have permission for this file or billing email is not set. Ensure the billing email is set, and the order has been saved.",
     maximum_tags_select_length: "-1",
     modal_header_color: "#F05025",
     rest: {
          root: "https://www.holzelektro.com/wp-json/",
          nonce: "b42785550b",
          version: "dokan/v1",
     },
     api: null,
     libs: [],
     routeComponents: { default: null },
     routes: [],
     urls: {
          assetsUrl:
               "https://www.holzelektro.com/wp-content/plugins/dokan-lite/assets",
     },
};
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
var dokan_helper = {
     i18n_date_format: "F j, Y",
     i18n_time_format: "g:i a",
     week_starts_day: "1",
     reverse_withdrawal: { enabled: false },
     daterange_picker_local: {
          toLabel: "To",
          firstDay: 1,
          fromLabel: "From",
          separator: " - ",
          weekLabel: "W",
          applyLabel: "Apply",
          cancelLabel: "Clear",
          customRangeLabel: "Custom",
          daysOfWeek: ["Su", "Mo", "Tu", "We", "Th", "Fr", "Sa"],
          monthNames: [
               "January",
               "February",
               "March",
               "April",
               "May",
               "June",
               "July",
               "August",
               "September",
               "October",
               "November",
               "December",
          ],
     },
};
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
var wc_add_to_cart_params = {
     ajax_url: "/wp-admin/admin-ajax.php",
     wc_ajax_url: "/?wc-ajax=%%endpoint%%",
     i18n_view_cart: "Warenkorb anzeigen",
     cart_url: "https://www.holzelektro.com/warenkorb/",
     is_cart: "",
     cart_redirect_after_add: "no",
};
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
var cnArgs = {
     ajaxUrl: "https://www.holzelektro.com/wp-admin/admin-ajax.php",
     nonce: "5195d10ee7",
     hideEffect: "fade",
     position: "bottom",
     onScroll: "0",
     onScrollOffset: "100",
     onClick: "0",
     cookieName: "cookie_notice_accepted",
     cookieTime: "2592000",
     cookieTimeRejected: "2592000",
     globalCookie: "0",
     redirection: "0",
     cache: "0",
     refuse: "0",
     revokeCookies: "0",
     revokeCookiesOpt: "automatic",
     secure: "1",
};
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
var yith_woocompare = {
     ajaxurl: "/?wc-ajax=%%endpoint%%",
     actionadd: "yith-woocompare-add-product",
     actionremove: "yith-woocompare-remove-product",
     actionview: "yith-woocompare-view-table",
     actionreload: "yith-woocompare-reload-product",
     added_label: "Added",
     table_title: "Product Comparison",
     auto_open: "yes",
     loader: "https://www.holzelektro.com/wp-content/plugins/yith-woocommerce-compare/assets/images/loader.gif",
     button_text: "Vergleicher",
     cookie_name: "yith_woocompare_list",
     close_label: "Close",
};
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
var wcfm_datepicker_params = {
     closeText: "Done",
     currentText: "Today",
     monthNames: [
          "Januar",
          "Februar",
          "M\u00e4rz",
          "April",
          "Mai",
          "Juni",
          "Juli",
          "August",
          "September",
          "Oktober",
          "November",
          "Dezember",
     ],
     monthNamesShort: [
          "Jan",
          "Feb",
          "Mrz",
          "Apr",
          "Mai",
          "Jun",
          "Jul",
          "Aug",
          "Sep",
          "Okt",
          "Nov",
          "Dez",
     ],
     monthStatus: "Show a different month",
     dayNames: [
          "Sonntag",
          "Montag",
          "Dienstag",
          "Mittwoch",
          "Donnerstag",
          "Freitag",
          "Samstag",
     ],
     dayNamesShort: ["So", "Mo", "Di", "Mi", "Do", "Fr", "Sa"],
     dayNamesMin: ["S", "M", "D", "M", "D", "F", "S"],
     dateFormat: "MM dd, yy",
     firstDay: "1",
     isRTL: "",
};
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
jQuery(function (jQuery) {
     jQuery.datepicker.setDefaults({
          closeText: "Schlie\u00dfen",
          currentText: "Heute",
          monthNames: [
               "Januar",
               "Februar",
               "M\u00e4rz",
               "April",
               "Mai",
               "Juni",
               "Juli",
               "August",
               "September",
               "Oktober",
               "November",
               "Dezember",
          ],
          monthNamesShort: [
               "Jan",
               "Feb",
               "Mrz",
               "Apr",
               "Mai",
               "Jun",
               "Jul",
               "Aug",
               "Sep",
               "Okt",
               "Nov",
               "Dez",
          ],
          nextText: "Weiter",
          prevText: "Vorherige",
          dayNames: [
               "Sonntag",
               "Montag",
               "Dienstag",
               "Mittwoch",
               "Donnerstag",
               "Freitag",
               "Samstag",
          ],
          dayNamesShort: ["So", "Mo", "Di", "Mi", "Do", "Fr", "Sa"],
          dayNamesMin: ["S", "M", "D", "M", "D", "F", "S"],
          dateFormat: "MM d, yy",
          firstDay: 1,
          isRTL: false,
     });
});
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
var wcfm_notification_sound = {
     file: "https://www.holzelektro.com/wp-content/plugins/wc-frontend-manager/assets/sounds/notification.mp3",
};
var wcfm_core_dashboard_messages = {
     product_approve_confirm:
          "Sind Sie sicher und m\u00f6chten dieses 'Produkt' genehmigen / ver\u00f6ffentlichen?",
     product_reject_confirm:
          "Are you sure and want to reject this 'Product'?\nReason:",
     product_archive_confirm:
          "Are you sure and want to archive this 'Product'?",
     multiblock_delete_confirm:
          "Are you sure and want to delete this 'Block'?\nYou can't undo this action ...",
     article_delete_confirm:
          "Sind Sie sicher und m\u00f6chten diesen 'Artikel' l\u00f6schen?\nSie k\u00f6nnen diese Aktion nicht r\u00fcckg\u00e4ngig machen ...",
     product_delete_confirm:
          "Sind Sie sicher und m\u00f6chten dieses 'Produkt\" l\u00f6schen?\nSie k\u00f6nnen diese Aktion nicht r\u00fcckg\u00e4ngig machen ...",
     message_delete_confirm:
          "Sind Sie sicher und m\u00f6chten diese 'Nachricht\" l\u00f6schen?\nSie k\u00f6nnen diese Aktion nicht r\u00fcckg\u00e4ngig machen ...",
     order_delete_confirm:
          "Sind Sie sicher und m\u00f6chten diese 'Bestellung' l\u00f6schen?\nSie k\u00f6nnen diese Aktion nicht r\u00fcckg\u00e4ngig machen ...",
     enquiry_delete_confirm:
          "Are you sure and want to delete this 'Enquiry'?\nYou can't undo this action ...",
     support_delete_confirm:
          "Are you sure and want to delete this 'Support Ticket'?\nYou can't undo this action ...",
     follower_delete_confirm:
          "Are you sure and want to delete this 'Follower'?\nYou can't undo this action ...",
     following_delete_confirm:
          "Are you sure and want to delete this 'Following'?\nYou can't undo this action ...",
     resource_delete_confirm:
          "Are you sure and want to delete this 'Resource'?\nYou can't undo this action ...",
     auction_bid_delete_confirm:
          "Are you sure and want to delete this 'Bid'?\nYou can't undo this action ...",
     order_mark_complete_confirm:
          'Sind Sie sicher und m\u00f6chten diese Bestellung als "Vollst\u00e4ndig" kennzeichnen?',
     booking_mark_complete_confirm:
          "Sind Sie sicher und m\u00f6chten diese Buchung als best\u00e4tigt markieren?",
     booking_mark_decline_confirm:
          "Are you sure and want to 'Mark as Declined' this Booking?",
     appointment_mark_complete_confirm:
          "Sind Sie sicher und m\u00f6chten diesen Termin als 'Als abgeschlossen markieren' markieren?",
     add_new: "Hinzuf\u00fcgen",
     select_all: "W\u00e4hlen Sie Alle",
     select_none: "Nichts ausgew\u00e4hlt",
     any_attribute: "Irgendein",
     add_attribute_term:
          "Geben Sie einen Namen f\u00fcr die neue Eigenschaft ein:",
     wcfmu_upgrade_notice:
          "Bitte aktualisieren Sie Ihren WC Frontend Manager auf die Ultimate Version und nutzen Sie diese Funktion.",
     pdf_invoice_upgrade_notice:
          "Installieren Sie WC Frontend Manager Ultimate und WooCommerce PDF-Rechnungen & Lieferscheine, um diese Funktion in Anspruch zu nehmen.",
     wcfm_bulk_action_no_option:
          "Bitte w\u00e4hlen Sie zuerst ein Element aus !!",
     wcfm_bulk_action_confirm:
          "Bist du sicher, dass du das tun willst?\n Diese Aktion kann nicht mehr R\u00fcckg\u00e4ngig gemacht werden.",
     review_status_update_confirm: "Bist du sicher, dass du das tun willst?",
     everywhere: "\u00dcberall sonst",
     required_message: "Dieses Feld ist erforderlich.",
     choose_select2: "W\u00e4hle ",
     category_attribute_mapping: "All Attributes",
     search_page_select2: "Search for a page ...",
     search_attribute_select2: "Search for an attribute ...",
     search_product_select2: "Filter by product ...",
     search_taxonomy_select2: "Filter by category ...",
     choose_category_select2: "Choose Categories ...",
     choose_listings_select2: "Choose Listings ...",
     choose_tags_select2: "Choose Tags ...",
     choose_vendor_select2: "Choose  ...",
     no_category_select2: "Keine Kategorien",
     select2_searching: "Searching ...",
     select2_no_result: "No matching result found.",
     select2_loading_more: "Loading ...",
     select2_minimum_input: "Minimum input character ",
     wcfm_product_popup_next: "N\u00e4chste",
     wcfm_product_popup_previous: "Vorherige",
     wcfm_multiblick_addnew_help: "Add New Block",
     wcfm_multiblick_remove_help: "Remove Block",
     wcfm_multiblick_collapse_help: "Toggle Block",
     wcfm_multiblick_sortable_help: "Drag to re-arrange blocks",
     sell_this_item_confirm: "Do you want to add this item(s) to your store?",
     bulk_no_itm_selected: "Please select some product first!",
     user_non_logged_in: "Please login to the site first!",
     shiping_method_not_selected: "Please select a shipping method",
     shiping_method_not_found: "Shipping method not found",
     shiping_zone_not_found: "Shipping zone not found",
     shipping_method_del_confirm:
          "Are you sure you want to delete this 'Shipping Method'?\nYou can't undo this action ...",
     variation_auto_generate_confirm:
          "Are you sure you want to link all variations? This will create a new variation for each and every possible combination of variation attributes (max 50 per run).",
};
var wcfm_params = {
     ajax_url: "/wp-admin/admin-ajax.php",
     wc_ajax_url: "/wp-admin/admin-ajax.php",
     shop_url: "https://www.holzelektro.com/shop/",
     wcfm_is_allow_wcfm: "",
     wcfm_is_vendor: "",
     is_user_logged_in: "",
     wcfm_allow_tinymce_options:
          "undo redo | insert | styleselect | bold italic | alignleft aligncenter alignright alignjustify |  bullist numlist outdent indent | link image | ltr rtl",
     unread_message: "0",
     unread_enquiry: "0",
     wcfm_is_allow_new_message_check: "",
     wcfm_new_message_check_duration: "60000",
     wcfm_is_desktop_notification: "1",
     is_mobile_desktop_notification: "",
     wcfm_is_allow_external_product_analytics: "",
     is_mobile: "1",
     is_tablet: "",
     wcfm_ajax_nonce: "021777216c",
};
var wcfm_enquiry_manage_messages = {
     no_name: "Name erforderlich.",
     no_email: "G\u00fcltige E-Mail erforderlich.",
     no_enquiry: "Bitte geben Sie Ihre Anfrage vor dem Absenden ein.",
     no_reply: "Please insert your reply before submit.",
     enquiry_saved: "Ihre Anfrage wurde erfolgreich gesendet.",
     enquiry_published: "Anfrageantwort erfolgreich ver\u00f6ffentlicht.",
     enquiry_reply_saved: "Your reply successfully sent.",
};
var wcfmu_products_manage_messages = {
     no_title: "Bitte geben Sie einen Produkttitel ein.",
     no_excerpt: "Please insert Product Short Description before submit.",
     no_description: "Please insert Product Description before submit.",
     sku_unique: "Produktnummer muss einmalig sein.",
     variation_sku_unique: "Varianten Produktnummer muss einmalig sein.",
     product_saved: "Produkt erfolgreich gespeichert.",
     product_pending:
          "Produkt wurde erfolgreich zur \u00dcberpr\u00fcfung gesendet.",
     product_published: "Produkt erfolgreich ver\u00f6ffentlicht.",
     set_stock: "Set Stock",
     increase_stock: "Increase Stock",
     regular_price: "Regul\u00e4rer Preis",
     regular_price_increase: "Regular price increase by",
     regular_price_decrease: "Regular price decrease by",
     sales_price: "Angebotspreis",
     sales_price_increase: "Sale price increase by",
     sales_price_decrease: "Sale price decrease by",
     length: "L\u00e4nge",
     width: "Breite",
     height: "H\u00f6he",
     weight: "Gewicht",
     download_limit: "Download Limit",
     download_expiry: "Download Expiry",
};
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
var js_porto_vars = {
     rtl: "",
     theme_url: "https://www.holzelektro.com/wp-content/themes/porto",
     ajax_url: "https://www.holzelektro.com/wp-admin/admin-ajax.php",
     change_logo: "",
     container_width: "1200",
     grid_gutter_width: "20",
     show_sticky_header: "1",
     show_sticky_header_tablet: "1",
     show_sticky_header_mobile: "1",
     ajax_loader_url:
          "//www.holzelektro.com/wp-content/themes/porto/images/ajax-loader@2x.gif",
     category_ajax: "1",
     compare_popup: "1",
     compare_popup_title: "Sie f\u00fcgen einfach eine Vergleichsliste hinzu.",
     prdctfltr_ajax: "",
     slider_loop: "1",
     slider_autoplay: "1",
     slider_autoheight: "1",
     slider_speed: "5000",
     slider_nav: "",
     slider_nav_hover: "1",
     slider_margin: "",
     slider_dots: "1",
     slider_animatein: "",
     slider_animateout: "",
     product_thumbs_count: "4",
     product_zoom: "1",
     product_zoom_mobile: "1",
     product_image_popup: "1",
     zoom_type: "inner",
     zoom_scroll: "1",
     zoom_lens_size: "200",
     zoom_lens_shape: "square",
     zoom_contain_lens: "1",
     zoom_lens_border: "1",
     zoom_border_color: "#888888",
     zoom_border: "0",
     screen_lg: "1220",
     mfp_counter: "%curr% von %total%",
     mfp_img_error: '<a href="%url%">The image</a> could not be loaded.',
     mfp_ajax_error: '<a href="%url%">The content</a> could not be loaded.',
     popup_close: "Close",
     popup_prev: "Previous",
     popup_next: "Next",
     request_error:
          "The requested content cannot be loaded.<br/>Please try again later.",
     loader_text: "Loading...",
     submenu_back: "Back",
     porto_nonce: "765c6f380a",
     use_skeleton_screen: ["shop", "product", "quickview", "blog"],
     user_edit_pages: "",
     quickview_skeleton:
          '<div class="quickview-wrap skeleton-body product"><div class="row"><div class="col-lg-6 summary-before"></div><div class="col-lg-6 summary entry-summary"></div></div></div>',
};
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
var _wpUtilSettings = {
     ajax: { url: "/wp-admin/admin-ajax.php" },
};

////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
var wc_add_to_cart_variation_params = {
     wc_ajax_url: "/?wc-ajax=%%endpoint%%",
     i18n_no_matching_variations_text:
          "Es entsprechen leider keine Produkte deiner Auswahl. Bitte w\u00e4hle eine andere Kombination.",
     i18n_make_a_selection_text:
          "Bitte w\u00e4hle die Produktoptionen, bevor du den Artikel in den Warenkorb legst.",
     i18n_unavailable_text:
          "Dieses Produkt ist leider nicht verf\u00fcgbar. Bitte w\u00e4hle eine andere Kombination.",
};

////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
var tpj = jQuery;

var revapi1;

if (window.RS_MODULES === undefined) window.RS_MODULES = {};
if (RS_MODULES.modules === undefined) RS_MODULES.modules = {};
RS_MODULES.modules["revslider11"] = {
     once:
          RS_MODULES.modules["revslider11"] !== undefined
               ? RS_MODULES.modules["revslider11"].once
               : undefined,
     init: function () {
          window.revapi1 =
               window.revapi1 === undefined ||
               window.revapi1 === null ||
               window.revapi1.length === 0
                    ? document.getElementById("rev_slider_1_1")
                    : window.revapi1;
          if (
               window.revapi1 === null ||
               window.revapi1 === undefined ||
               window.revapi1.length == 0
          ) {
               window.revapi1initTry =
                    window.revapi1initTry === undefined
                         ? 0
                         : window.revapi1initTry + 1;
               if (window.revapi1initTry < 20)
                    requestAnimationFrame(function () {
                         RS_MODULES.modules["revslider11"].init();
                    });
               return;
          }
          window.revapi1 = jQuery(window.revapi1);
          if (window.revapi1.revolution == undefined) {
               revslider_showDoubleJqueryError("rev_slider_1_1");
               return;
          }
          revapi1.revolutionInit({
               revapi: "revapi1",
               DPR: "dpr",
               sliderLayout: "fullwidth",
               visibilityLevels: "1240,1024,778,480",
               gridwidth: 1920,
               gridheight: 650,
               lazyType: "smart",
               perspective: 600,
               perspectiveType: "global",
               editorheight: "650,768,960,720",
               responsiveLevels: "1240,1024,778,480",
               progressBar: { disableProgressBar: true },
               navigation: {
                    onHoverStop: false,
               },
               viewPort: {
                    global: true,
                    globalDist: "-200px",
                    enable: false,
               },
               fallbacks: {
                    allowHTML5AutoPlayOnAndroid: true,
               },
          });
     },
}; // End of RevInitScript

if (window.RS_MODULES.checkMinimal !== undefined) {
     window.RS_MODULES.checkMinimal();
}
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
var yith_wcan_shortcodes = {
     query_param: "yith_wcan",
     supported_taxonomies: [
          "product_cat",
          "product_tag",
          "pa_brand",
          "pa_color",
          "pa_marke",
          "pa_size",
     ],
     content: "#main",
     change_browser_url: "1",
     instant_filters: "1",
     ajax_filters: "1",
     reload_on_back: "1",
     show_clear_filter: "",
     scroll_top: "",
     scroll_target: "",
     modal_on_mobile: "",
     session_param: "",
     show_current_children: "",
     loader: "",
     toggles_open_on_modal: "",
     mobile_media_query: "991",
     base_url: "https://www.holzelektro.com/",
     terms_per_page: "10",
     currency_format: {
          symbol: "&euro;",
          decimal: ",",
          thousand: " ",
          precision: 2,
          format: "%v%s",
     },
     labels: {
          empty_option: "Alle",
          search_placeholder: "Suchen...",
          no_items: "Kein Artikel gefunden",
          show_more: "%d mehr anzeigen",
          close: "Schlie\u00dfen",
          save: "Save",
          show_results: "Ergebnisse anzeigen",
          clear_selection: "L\u00f6schen",
          clear_all_selections: "Alle l\u00f6schen",
     },
};

////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
jQuery(function ($) {
     $(document).on("skeleton-loaded", function () {
          $(document).trigger("yith_wcan_init_shortcodes");
     });
});
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
var vcData = { currentTheme: { slug: "porto" } };
var porto_live_search = { nonce: "cc632048e8" };
var woocommerce_params = {
     ajax_url: "/wp-admin/admin-ajax.php",
     wc_ajax_url: "/?wc-ajax=%%endpoint%%",
};
var wpcf7 = {
     api: {
          root: "https://www.holzelektro.com/wp-json/",
          namespace: "contact-form-7/v1",
     },
};
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

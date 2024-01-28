const product_list = [
    {
        image: "Buchenholzbriketts-PINI-KAY-Premium-960kg-1-300x300.jpg",
        image2: "Buchenholzbriketts-PINI-KAY-Premium-960kg-2-300x300.jpg",
        price: "849,00",
        name: "PINI KAY Buchenholzbriketts Premium 960kg",
        id: "2337",
        image_link: "pini-kay-buchenholzbriketts-premium-960kg",
    },
    {
        image: "RUF-Buchenholzbriketts-960kg-1-300x300.jpg",
        image2: "RUF-Buchenholzbriketts-960kg-2-300x300.jpg",
        price: "729,00",
        name: "RUF Buchenholzbriketts 960kg",
        id: "2355",
        image_link: "ruf-buchenholzbriketts-960kg",
    },
    {
        image: "GERMAN-FLAMES-Holzpellets-6mm-ENplusA1-990kg-Palette-1-300x300.jpg",
        image2: "GERMAN-FLAMES-Holzpellets-6mm-ENplusA1-990kg-Palette-2-300x300.jpg",
        price: "549,00",
        name: "GERMAN FLAMES Holzpellets 6mm ENplusA1, 990kg Palette",
        id: "3103",
        image_link: "german-flames-holzpellets-6mm-enplusa1-990kg-palette",
    },
    {
        image: "HEIZFUXX-Holzpellets-Grey-6mm-ENplusA1-65-x-15kg-Palette-1-300x300.jpg",
        image2: "HEIZFUXX-Holzpellets-Grey-6mm-ENplusA1-65-x-15kg-Palette-2-300x300.jpg",
        price: "699,00",
        name: "HEIZFUXX Holzpellets Grey 6mm ENplusA1, 65 x 15kg Palette",
        id: "3163",
        image_link: "heizfuxx-holzpellets-grey-6mm-enplusa1-65-x-15kg-palette",
    },
    {
        image: "Brennholz-Buche-25-cm-2-Raummeter-Palette-1-300x300.jpg",
        image2: "Brennholz-Buche-25-cm-2-Raummeter-Palette-2-300x300.jpg",
        price: "419,00",
        name: "Brennholz Buche 25 cm 2 RM",
        id: "2442",
        image_link: "brennholz-buche-25-cm-2-rm",
    },
    {
        image: "REKORD-Braunkohlebriketts-als-Palette-Folie-90-x-10-kg-11-300x300.jpg",
        image2: "REKORD-Braunkohlebriketts-als-Palette-Folie-90-x-10-kg-12-300x300.jpg",
        price: "499,00",
        name: "REKORD Braunkohlebriketts als Palette Folie (90 x 10 kg)",
        id: "2297",
        image_link: "rekord-braunkohlebriketts-als-palette-folie-90-x-10-kg",
    },
    {
        image: "EPH-Holzpellets-im-Papiersack-ENplusA1-65-x-15kg-Palette-1-300x300.jpg",
        image2: "EPH-Holzpellets-im-Papiersack-ENplusA1-65-x-15kg-Palette-2-300x300.jpg",
        price: "379,99",
        name: "EPH Holzpellets im Papiersack, ENplusA1, 65 x 15kg Palette",
        id: "3132",
        image_link: "eph-holzpellets-im-papiersack-enplusa1-65-x-15kg-palette",
    },
    {
        image: "HOYER-Holzpellets-6mm-ENplusA1-66-x-15kg-Palette-1-300x300.jpg",
        image2: "HOYER-Holzpellets-6mm-ENplusA1-66-x-15kg-Palette-2-300x300.jpg",
        price: "699,00",
        name: "HOYER Holzpellets 6mm ENplusA1, 66 x 15kg Palette",
        id: "3100",
        image_link: "hoyer-holzpellets-6mm-enplusa1-66-x-15kg-palette",
    },
    {
        image: "Brennholz-Buche-20-25-cm-1-Raummeter-Palette-1-300x300.jpg",
        image2: "Brennholz-Buche-20-25-cm-1-Raummeter-Palette-2-300x300.jpg",
        price: "259,00",
        name: "Brennholz Buche 25 cm 1 RM",
        id: "2433",
        image_link: "brennholz-buche-25-cm-1-rm",
    },
];

const listContainer = document.querySelector(".woocommerce.columns-6");
let listHTML = "";
listHTML += `
  <style>
@media all {
     *,
     *::before,
     *::after {
          box-sizing: border-box;
     }
     a {
          color: #e2001a;
          text-decoration: none;
     }
     a:hover {
          color: #b50015;
     }
     ::-moz-focus-inner {
          padding: 0;
          border-style: none;
     }
}

@media all {
     a:hover {
          color: var(--porto-primary-light-5);
     }
     a:active,
     a:focus {
          color: var(--porto-primary-dark-5);
     }
     .buttons {
          transition: color 0.15s, background-color 0.15s, border-color 0.15s,
               box-shadow 0.15s, transform 0.2s;
          cursor: pointer;
     }
     .buttons {
          display: inline-block;
          text-align: center;
          font-weight: 400;
          vertical-align: middle;
          touch-action: manipulation;
          padding: 8px 12px;
          white-space: nowrap;
          line-height: 1.5;
          -webkit-user-select: none;
          -ms-user-select: none;
          user-select: none;
     }
     .buttons:disabled {
          cursor: default;
     }
     .buttons:hover {
          text-decoration: none;
     }
     .buttons {
          background-color: var(--porto-primary-color);
          border-color: var(--porto-primary-color);
          color: var(--porto-primary-color-inverse);
     }
     .buttons:active,
     .buttons:focus,
     .buttons:hover {
          background-color: var(--porto-primary-dark-5);
          border-color: var(--porto-primary-dark-5);
          color: var(--porto-primary-color-inverse);
     }
     body a {
          outline: none !important;
     }
}

@media all {
     .add-links .add_to_cart_buttons {
          position: relative;
          display: inline-block;
          cursor: pointer;
          font-size: inherit;
          text-align: center;
          vertical-align: top;
          transition: opacity 0.25s, background-color 0.25s, color 0.25s,
               border-color 0.25s, left 0.25s, right 0.25s;
          background-color: var(--porto-shop-add-links-bg-color);
          border: 1px solid
               var(--porto-shop-add-links-border-color, transparent);
          color: var(--porto-shop-add-links-color, #212529);
     }
     .add-links .buttons:focus,
     .add-links .buttons:hover,
     li.product-default:hover .add-links .add_to_cart_buttons {
          background-color: var(--porto-primary-color);
          border-color: var(--porto-primary-color);
          color: var(--porto-primary-color-inverse, #fff);
     }
     .add-links .add_to_cart_buttons {
          padding: 0 0.625rem;
          font-size: 0.75rem;
          font-weight: 600;
          text-transform: uppercase;
          z-index: 1;
          white-space: nowrap;
     }
     .add-links .add_to_cart_buttons:before {
          content: "";
          font-family: "Font Awesome 5 Free";
          font-weight: 900;
          margin-right: 5px;
          position: relative;
          float: left;
     }
     .product-type-simple .add-links .add_to_cart_buttons:before {
          font-family: "Porto";
          content: "";
          font-size: 1rem;
          font-weight: 600;
          font-size: 0.9375rem;
     }
     .add-links .add_to_cart_buttons {
          height: 36px;
          line-height: 34px;
          min-width: 36px;
     }
     ul.products .add-links .buttons {
          overflow: hidden;
     }
     li.product-col .add_to_cart_buttons {
          font-family: var(--porto-add-to-cart-ff), var(--porto-body-ff),
               sans-serif;
     }
}
/*! CSS Used from: Embedded */
.add-links .add_to_cart_buttons {
     padding: 0 1.2em;
     color: #6f6e6b;
}
ul.products .product-col .add-links > *:hover,
ul.products .product-col .add-links > *:active,
ul.products .product-col .add-links > *:focus {
     background-color: #2b2b2d;
     border-color: #2b2b2d;
}
/*! CSS Used fontfaces */
@font-face {
     font-family: "Font Awesome 5 Free";
     font-style: normal;
     font-weight: 400;
     font-display: block;
     src: url(http://localhost/Projet_Laravel/projetBois/projetBoisLaravel/wp-content/plugins/dokan-lite/assets/vendors/font-awesome/webfonts/fa-regular-400.eot);
     src: url(http://localhost/Projet_Laravel/projetBois/projetBoisLaravel/wp-content/plugins/dokan-lite/assets/vendors/font-awesome/webfonts/fa-regular-400d41d.eot#iefix)
               format("embedded-opentype"),
          url(http://localhost/Projet_Laravel/projetBois/projetBoisLaravel/wp-content/plugins/dokan-lite/assets/vendors/font-awesome/webfonts/fa-regular-400.woff2)
               format("woff2"),
          url(http://localhost/Projet_Laravel/projetBois/projetBoisLaravel/wp-content/plugins/dokan-lite/assets/vendors/font-awesome/webfonts/fa-regular-400.woff)
               format("woff"),
          url(http://localhost/Projet_Laravel/projetBois/projetBoisLaravel/wp-content/plugins/dokan-lite/assets/vendors/font-awesome/webfonts/fa-regular-400.ttf)
               format("truetype"),
          url(http://localhost/Projet_Laravel/projetBois/projetBoisLaravel/wp-content/plugins/dokan-lite/assets/vendors/font-awesome/webfonts/fa-regular-400.svg#fontawesome)
               format("svg");
}
@font-face {
     font-family: "Font Awesome 5 Free";
     font-style: normal;
     font-weight: 900;
     font-display: block;
     src: url(http://localhost/Projet_Laravel/projetBois/projetBoisLaravel/wp-content/plugins/dokan-lite/assets/vendors/font-awesome/webfonts/fa-solid-900.eot);
     src: url(http://localhost/Projet_Laravel/projetBois/projetBoisLaravel/wp-content/plugins/dokan-lite/assets/vendors/font-awesome/webfonts/fa-solid-900d41d.eot#iefix)
               format("embedded-opentype"),
          url(http://localhost/Projet_Laravel/projetBois/projetBoisLaravel/wp-content/plugins/dokan-lite/assets/vendors/font-awesome/webfonts/fa-solid-900.woff2)
               format("woff2"),
          url(http://localhost/Projet_Laravel/projetBois/projetBoisLaravel/wp-content/plugins/dokan-lite/assets/vendors/font-awesome/webfonts/fa-solid-900.woff)
               format("woff"),
          url(http://localhost/Projet_Laravel/projetBois/projetBoisLaravel/wp-content/plugins/dokan-lite/assets/vendors/font-awesome/webfonts/fa-solid-900.ttf)
               format("truetype"),
          url(http://localhost/Projet_Laravel/projetBois/projetBoisLaravel/wp-content/plugins/dokan-lite/assets/vendors/font-awesome/webfonts/fa-solid-900.svg#fontawesome)
               format("svg");
}
@font-face {
     font-family: "Font Awesome 5 Free";
     font-style: normal;
     font-weight: 300;
     src: url(http://localhost/Projet_Laravel/projetBois/projetBoisLaravel/wp-content/plugins/wc-frontend-manager/assets/fonts/font-awesome/webfonts/fa-light-300.eot);
     src: url(http://localhost/Projet_Laravel/projetBois/projetBoisLaravel/wp-content/plugins/wc-frontend-manager/assets/fonts/font-awesome/webfonts/fa-light-300d41d.eot#iefix)
               format("embedded-opentype"),
          url(http://localhost/Projet_Laravel/projetBois/projetBoisLaravel/wp-content/plugins/wc-frontend-manager/assets/fonts/font-awesome/webfonts/fa-light-300.woff2)
               format("woff2"),
          url(http://localhost/Projet_Laravel/projetBois/projetBoisLaravel/wp-content/plugins/wc-frontend-manager/assets/fonts/font-awesome/webfonts/fa-light-300.woff)
               format("woff"),
          url(http://localhost/Projet_Laravel/projetBois/projetBoisLaravel/wp-content/plugins/wc-frontend-manager/assets/fonts/font-awesome/webfonts/fa-light-300.ttf)
               format("truetype"),
          url(http://localhost/Projet_Laravel/projetBois/projetBoisLaravel/wp-content/plugins/wc-frontend-manager/assets/fonts/font-awesome/webfonts/fa-light-300.svg#fontawesome)
               format("svg");
}
@font-face {
     font-family: "Font Awesome 5 Free";
     font-style: normal;
     font-weight: 400;
     src: url("http://localhost/Projet_Laravel/projetBois/projetBoisLaravel/wp-content/plugins/wc-frontend-manager/assets/fonts/font-awesome/webfonts/fa-regular-400.eot");
     src: url("http://localhost/Projet_Laravel/projetBois/projetBoisLaravel/wp-content/plugins/wc-frontend-manager/assets/fonts/font-awesome/webfonts/fa-regular-400d41d.eot#iefix")
               format("embedded-opentype"),
          url("http://localhost/Projet_Laravel/projetBois/projetBoisLaravel/wp-content/plugins/wc-frontend-manager/assets/fonts/font-awesome/webfonts/fa-regular-400.woff2")
               format("woff2"),
          url("http://localhost/Projet_Laravel/projetBois/projetBoisLaravel/wp-content/plugins/wc-frontend-manager/assets/fonts/font-awesome/webfonts/fa-regular-400.woff")
               format("woff"),
          url("http://localhost/Projet_Laravel/projetBois/projetBoisLaravel/wp-content/plugins/wc-frontend-manager/assets/fonts/font-awesome/webfonts/fa-regular-400.ttf")
               format("truetype"),
          url("http://localhost/Projet_Laravel/projetBois/projetBoisLaravel/wp-content/plugins/wc-frontend-manager/assets/fonts/font-awesome/webfonts/fa-regular-400.svg#fontawesome")
               format("svg");
}
@font-face {
     font-family: "Font Awesome 5 Free";
     font-style: normal;
     font-weight: 900;
     src: url("http://localhost/Projet_Laravel/projetBois/projetBoisLaravel/wp-content/plugins/wc-frontend-manager/assets/fonts/font-awesome/webfonts/fa-solid-900.eot");
     src: url("http://localhost/Projet_Laravel/projetBois/projetBoisLaravel/wp-content/plugins/wc-frontend-manager/assets/fonts/font-awesome/webfonts/fa-solid-900d41d.eot#iefix")
               format("embedded-opentype"),
          url("http://localhost/Projet_Laravel/projetBois/projetBoisLaravel/wp-content/plugins/wc-frontend-manager/assets/fonts/font-awesome/webfonts/fa-solid-900.woff2")
               format("woff2"),
          url("http://localhost/Projet_Laravel/projetBois/projetBoisLaravel/wp-content/plugins/wc-frontend-manager/assets/fonts/font-awesome/webfonts/fa-solid-900.woff")
               format("woff"),
          url("http://localhost/Projet_Laravel/projetBois/projetBoisLaravel/wp-content/plugins/wc-frontend-manager/assets/fonts/font-awesome/webfonts/fa-solid-900.ttf")
               format("truetype"),
          url("http://localhost/Projet_Laravel/projetBois/projetBoisLaravel/wp-content/plugins/wc-frontend-manager/assets/fonts/font-awesome/webfonts/fa-solid-900.svg#fontawesome")
               format("svg");
}
@font-face {
     font-family: "Font Awesome 5 Free";
     font-style: normal;
     font-weight: 400;
     font-display: block;
     src: url("http://localhost/Projet_Laravel/projetBois/projetBoisLaravel/wp-content/themes/porto/fonts/fontawesome/fa-regular-400.eot");
     src: url("http://localhost/Projet_Laravel/projetBois/projetBoisLaravel/wp-content/themes/porto/fonts/fontawesome/fa-regular-400d41d.eot#iefix")
               format("embedded-opentype"),
          url("http://localhost/Projet_Laravel/projetBois/projetBoisLaravel/wp-content/themes/porto/fonts/fontawesome/fa-regular-400.woff2")
               format("woff2"),
          url("http://localhost/Projet_Laravel/projetBois/projetBoisLaravel/wp-content/themes/porto/fonts/fontawesome/fa-regular-400.woff")
               format("woff"),
          url("http://localhost/Projet_Laravel/projetBois/projetBoisLaravel/wp-content/themes/porto/fonts/fontawesome/fa-regular-400.ttf")
               format("truetype"),
          url("http://localhost/Projet_Laravel/projetBois/projetBoisLaravel/wp-content/themes/porto/fonts/fontawesome/fa-regular-400.svg#fontawesome")
               format("svg");
}
@font-face {
     font-family: "Font Awesome 5 Free";
     font-style: normal;
     font-weight: 900;
     font-display: block;
     src: url("http://localhost/Projet_Laravel/projetBois/projetBoisLaravel/wp-content/themes/porto/fonts/fontawesome/fa-solid-900.eot");
     src: url("http://localhost/Projet_Laravel/projetBois/projetBoisLaravel/wp-content/themes/porto/fonts/fontawesome/fa-solid-900d41d.eot#iefix")
               format("embedded-opentype"),
          url("http://localhost/Projet_Laravel/projetBois/projetBoisLaravel/wp-content/themes/porto/fonts/fontawesome/fa-solid-900.woff2")
               format("woff2"),
          url("http://localhost/Projet_Laravel/projetBois/projetBoisLaravel/wp-content/themes/porto/fonts/fontawesome/fa-solid-900.woff")
               format("woff"),
          url("http://localhost/Projet_Laravel/projetBois/projetBoisLaravel/wp-content/themes/porto/fonts/fontawesome/fa-solid-900.ttf")
               format("truetype"),
          url("http://localhost/Projet_Laravel/projetBois/projetBoisLaravel/wp-content/themes/porto/fonts/fontawesome/fa-solid-900.svg#fontawesome")
               format("svg");
}
</style>`;
listHTML += `<ul
  class="products products-container products-slider owl-carousel show-nav-middle show-nav-hover pcols-lg-6 pcols-md-4 pcols-xs-3 pcols-ls-2 pwidth-lg-6 pwidth-md-5 pwidth-xs-3 pwidth-ls-2 is-shortcode"
  data-plugin-options='{"themeConfig":true,"lg":6,"md":4,"xs":3,"ls":2,"nav":true,"autoplay":false}'
  data-product_layout="product-default"
>`;
for (const product of product_list) {
    listHTML += `
    
    <li
     class="product-col product-default product type-product post-2337 status-publish first instock product_cat-holzbriketts has-post-thumbnail shipping-taxable purchasable product-type-simple"
>
     <div class="product-inner">
          <div class="product-image">
               <a
                    href="ref=${product.image_link}/"
                    aria-label="product"
               >
                    <div class="inner img-effect">
                         <img
                              width="300"
                              height="300"
                              src="wp-content/uploads/2022/07/${product.image}"
                              class="wp-post-image"
                              alt=""
                         /><img
                              width="300"
                              height="300"
                              src="wp-content/uploads/2022/07/${product.image2}"
                              class="hover-image"
                              alt=""
                              loading="lazy"
                         />
                    </div>
               </a>
               <a
                    href="index798d.html?id=2337&amp;action=yith-woocompare-add-product"
                    class="compare yith-compare on-image"
                    title="Vergleicher"
                    data-product_id="2337"
                    >Vergleicher</a
               >
          </div>

          <div class="product-content">
               <a
                    class="product-loop-title"
                    href="ref=${product.image_link}/"
               >
                    <h3 class="woocommerce-loop-product__title">
                    ${product.name}
                    </h3>
               </a>

               <div class="rating-wrap">
                    <div class="rating-content">
                         <div class="star-rating" title="0">
                              <span style="width: 0%"
                                   ><strong class="rating">0</strong> out of
                                   5</span
                              >
                         </div>
                    </div>
               </div>

               <span class="price"
                    ><span class="woocommerce-Price-amount amount"
                         ><bdi
                              >${product.price}<span
                                   class="woocommerce-Price-currencySymbol"
                                   >&euro;</span
                              ></bdi
                         ></span
                    ></span
               >

               <div class="add-links-wrap">
                    <div class="add-links clearfix">
                         <a
                              class="viewcart-style-2 buttons product_type_simple add_to_cart_buttons ajax_add_to_cart"
                              data-quantity="1"
                              data-product_id="${product.id}"
                              aria-label="${product.name}"
                              data-price="${product.price}"
                              data-image="${product.image}"
                              data-image2="${product.image2}"
                              rel="nofollow"
                              >In den Warenkorb</a
                         >
                         <div
                              class="yith-wcwl-add-to-wishlist add-to-wishlist-2337 wishlist-fragment on-first-load"
                              data-fragment-ref="2337"
                              data-fragment-options='{"base_url":"","in_default_wishlist":false,"is_single":false,"show_exists":false,"product_id":2337,"parent_product_id":2337,"product_type":"simple","show_view":false,"browse_wishlist_text":"Wunschliste durchsuchen","already_in_wishslist_text":"Das Produkt ist bereits auf Ihrer Wunschliste!","product_added_text":"Produkt hinzugef\u00fcgt!","heading_icon":"fa-heart-o","available_multi_wishlist":false,"disable_wishlist":false,"show_count":false,"ajax_loading":false,"loop_position":"after_add_to_cart","item":"add_to_wishlist"}'
                         >
                              <!-- ADD TO WISHLIST -->

                              <div class="yith-wcwl-add-button">
                                   <a
                                        href="indexade4.html?add_to_wishlist=2337&amp;_wpnonce=5d3180c348"
                                        class="add_to_wishlist single_add_to_wishlist"
                                        data-product-id="2337"
                                        data-product-type="simple"
                                        data-original-product-id="2337"
                                        data-title="Zur Wunschliste hinzufügen"
                                        rel="nofollow"
                                   >
                                        <i
                                             class="yith-wcwl-icon fa fa-heart-o"
                                        ></i>
                                        <span>Zur Wunschliste hinzufügen</span>
                                   </a>
                              </div>

                              <!-- COUNT TEXT -->
                         </div>
                         <div
                              class="quickview"
                              data-id="2337"
                              title="Quick View"
                         >
                              Quick View
                         </div>
                         <a
                              href="index798d.html?id=2337&amp;action=yith-woocompare-add-product"
                              class="compare yith-compare button"
                              title="Vergleicher"
                              data-product_id="2337"
                              >Vergleicher</a
                         >
                    </div>
               </div>
          </div>
     </div>
</li>
    `;
}
listHTML += `</ul>`;

listContainer.innerHTML = listHTML;

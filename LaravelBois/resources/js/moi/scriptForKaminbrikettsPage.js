const product_list =[
     {
         "prod_id": "2289",
         "name": "REKORD Braunkohlebriketts (25 kg)",
         "price": "499,00€",
         "mini-desc": "Produkt-Highlights:\r\nHeizwert : 19 MJ/kg\r\nAsche : 4,5 %\r\nAnwendung : Heizen\r\nEinzelpack : 25 kg",
         "categories": "KAMINBRIKETTS",
         "desc": "Heizwert : 19 MJ/kg\r\nAsche : 4,5 %\r\nAnwendung : Heizen\r\nAnwendungsbereich : Kaminofen, Kachelofen, Festbrennstoffkessel\r\nMenge : 40 Bündel à 25 kg\r\nEinzelgebinde : 25 kg à 44 Steine\r\nVersandgewicht : 1070 kg\r\nGröße : 1200 mm x 800 mm x 1060 mm",
         "img": "REKORD-Braunkohlebriketts-als-Palette-40-x-25-kg-11-150x150.jpg",
         "img1": "REKORD-Braunkohlebriketts-als-Palette-40-x-25-kg-13-150x150.jpg",
         "img2": "REKORD-Braunkohlebriketts-als-Palette-40-x-25-kg-14-150x150.jpg",
         "img3": "REKORD-Braunkohlebriketts-als-Palette-40-x-25-kg-15-150x150.jpg",
         "image_link": "rekord-braunkohlebriketts-25-kg"
     },
     {
         "prod_id": "2297",
         "name": "REKORD Braunkohlebriketts als Palette Folie (90 x 10 kg)",
         "price": "499,00€",
         "mini-desc": "Produkt-Highlights:\r\nHeizwert : 19 MJ/kg\r\nAsche : 4,5 %\r\nAnwendung : Heizen\r\nMenge : 90 Pakete à 10 kg\r\nEinzelpack : 10 kg à 18 Steine",
         "categories": "KAMINBRIKETTS",
         "desc": "Heizwert : 19 MJ/kg\r\nAsche : 4,5 %\r\nAnwendung : Heizen\r\nAnwendungsbereich : Kaminofen, Kachelofen, Festbrennstoffkessel\r\nMenge : 90 Pakete à 10 kg\r\nEinzelpack : 10 kg à 18 Steine\r\nVersandgewicht : 965 kg\r\nGröße : 1200 mm x 800 mm x 1250 mm",
         "img": "REKORD-Braunkohlebriketts-als-Palette-Folie-90-x-10-kg-11-150x150.jpg",
         "img1": "REKORD-Braunkohlebriketts-als-Palette-Folie-90-x-10-kg-12-150x150.jpg",
         "img2": "REKORD-Braunkohlebriketts-als-Palette-Folie-90-x-10-kg-13-150x150.jpg",
         "img3": "REKORD-Braunkohlebriketts-als-Palette-Folie-90-x-10-kg-14-150x150.jpg",
         "image_link": "rekord-braunkohlebriketts-als-palette-folie-90-x-10-kg"
     },
     {
         "prod_id": "2304",
         "name": "REKORD Braunkohlebriketts Palette Tüte (90 x 10 kg)",
         "price": "499,00€",
         "mini-desc": "Produkt-Highlights:\r\nHeizwert : 19 MJ/kg\r\nAsche : 4,5 %\r\nAnwendung : Heizen\r\nMenge : 90 Pakete à 10 kg\r\nEinzelpack : 10 kg à 18 Steine",
         "categories": "KAMINBRIKETTS",
         "desc": "Heizwert : 19 MJ/kg\r\nAsche : 4,5 %\r\nAnwendung : Heizen\r\nAnwendungsbereich : Kaminofen, Kachelofen, Festbrennstoffkessel\r\nMenge : 90 Pakete à 10 kg\r\nEinzelpack : 10 kg à 18 Steine\r\nVersandgewicht : 965 kg\r\nGröße : 1200 mm x 800 mm x 1270 mm",
         "img": "REKORD-Braunkohlebriketts-Palette-Tuete-90-x-10-kg-11-150x150.jpg",
         "img1": "REKORD-Braunkohlebriketts-Palette-Tuete-90-x-10-kg-12-150x150.jpg",
         "img2": "REKORD-Braunkohlebriketts-Palette-Tuete-90-x-10-kg-13-150x150.jpg",
         "img3": "REKORD-Braunkohlebriketts-Palette-Tuete-90-x-10-kg-14-150x150.jpg",
         "image_link": "rekord-braunkohlebriketts-palette-tuete-90-x-10-kg"
     }
 ];



const listContainer = document.querySelector('.products.products-container.grid.pcols-lg-5.pcols-md-4.pcols-xs-3.pcols-ls-2.pwidth-lg-5.pwidth-md-4.pwidth-xs-2.pwidth-ls-1');
  let listHTML = "";
  
  for (const product of product_list) {
    listHTML += `
    <li class="product-col product-default product type-product post-3123 status-publish first instock product_cat-holzpellets has-post-thumbnail shipping-taxable purchasable product-type-simple">
    <div class="product-inner">

         <div class="product-image">

              <a href="ref=${product.image_link}/ " aria-label="product">
                   <div class="inner img-effect">
                   <img width="300" height="300" src="wp-content/uploads/2022/07/${product.image}" class=" wp-post-image" alt="">
                   <img width="300" height="300" src="wp-content/uploads/2022/07/${product.image2}" class="hover-image" alt="" loading="lazy"></div>
              </a>
              <a href="https://www.holzelektro.com?id=3123&amp;action=yith-woocompare-add-product" 
              class="compare yith-compare on-image" title="Vergleicher" data-product_id="3123">Vergleicher</a>
         </div>

         <div class="product-content">

              <a class="product-loop-title" href="ref=${product.image_link}/    ">
                   <h3 class="woocommerce-loop-product__title">${product.name}</h3>
              </a>



              <div class="rating-wrap">
                   <div class="rating-content">
                        <div class="star-rating" title="" data-bs-original-title="0"><span style="width:0%"><strong class="rating">0</strong> out of 5</span></div>
                   </div>
              </div>


              <span class="price"><span class="woocommerce-Price-amount amount"><bdi>${product.price}<span class="woocommerce-Price-currencySymbol">€</span></bdi></span></span>

              <div class="add-links-wrap">
                   <div class="add-links clearfix">
                        <a 
                        href="?add-to-cart=3123" 
                        data-quantity="1" 
                        class="viewcart-style-2 button product_type_simple add_to_cart_button ajax_add_to_cart" 
                        data-product_id="${product.id}" 
                        data-product_sku="" 
                        aria-label="„DRAGON Holzpellets 6mm ENplusA1, 65 x 15kg Palette“ zu deinem Warenkorb hinzufügen" 
                        rel="nofollow">In den Warenkorb</a>
                        <div class="yith-wcwl-add-to-wishlist add-to-wishlist-3123  wishlist-fragment on-first-load" 
                        data-fragment-ref="3123"
                        data-fragment-options="{&quot;base_url&quot;:&quot;&quot;,&quot;in_default_wishlist&quot;:false,&quot;is_single&quot;:false,&quot;show_exists&quot;:false,&quot;product_id&quot;:3123,&quot;parent_product_id&quot;:3123,&quot;product_type&quot;:&quot;simple&quot;,&quot;show_view&quot;:false,&quot;browse_wishlist_text&quot;:&quot;Wunschliste durchsuchen&quot;,&quot;already_in_wishslist_text&quot;:&quot;Das Produkt ist bereits auf Ihrer Wunschliste!&quot;,&quot;product_added_text&quot;:&quot;Produkt hinzugef\u00fcgt!&quot;,&quot;heading_icon&quot;:&quot;fa-heart-o&quot;,&quot;available_multi_wishlist&quot;:false,&quot;disable_wishlist&quot;:false,&quot;show_count&quot;:false,&quot;ajax_loading&quot;:false,&quot;loop_position&quot;:&quot;after_add_to_cart&quot;,&quot;item&quot;:&quot;add_to_wishlist&quot;}">

                             <!-- ADD TO WISHLIST -->

                             <div class="yith-wcwl-add-button">
                                  <a href="?add_to_wishlist=3123&amp;_wpnonce=5d3180c348" class="add_to_wishlist single_add_to_wishlist" data-product-id="3123" data-product-type="simple" data-original-product-id="3123" data-title="Zur Wunschliste hinzufügen" rel="nofollow">
                                       <i class="yith-wcwl-icon fa fa-heart-o"></i> <span>Zur Wunschliste hinzufügen</span>
                                  </a>
                             </div>

                             <!-- COUNT TEXT -->
                             

                        </div>
                        <div class="quickview" data-id="3123" title="Quick View">Quick View</div><a href="https://www.holzelektro.com?id=3123&amp;action=yith-woocompare-add-product" class="compare yith-compare button" title="Vergleicher" data-product_id="3123">Vergleicher</a>
                   </div>
              </div>
         </div>
    </div>
</li>
    `;
  }
  
  listContainer.innerHTML = listHTML;


  


  
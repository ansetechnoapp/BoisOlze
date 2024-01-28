var cartId = "cart";

///sa marche
var localAdapter = {
     saveCart: function (object) {
          var stringified = JSON.stringify(object);
          localStorage.setItem(cartId, stringified);
          return true;
     },
     getCart: function () {
          let cart = localStorage.getItem(cartId);
          if (cart == null) {
               return [];
          } else {
               return JSON.parse(cart);
          }
     },
     clearCart: function () {
          localStorage.removeItem(cartId);
     },
};
///sa marche
var storage = localAdapter;
///sa marche
var helpers = {
     itemData: function (object) {
          var count = object.getAttribute("data-quantity"),
               patt = new RegExp("^[1-9]([0-9]+)?$");
          var count2 = (count.value =
               patt.test(count.value) === true ? parseInt(count.value) : 1);
          var item = {
               name: object.getAttribute("aria-label"),
               price: object.getAttribute("data-price"),
               id: object.getAttribute("data-product_id"),
               image: object.getAttribute("data-image"),
               count: count2,
               total:
                    parseInt(object.getAttribute("data-price")) *
                    parseInt(count.value),
          };
          console.log(item)
          return item;
     },
};
///sa marche
var cart = {
     items: [],

     addItem: function (item) {
          if (this.containsItem(item.id) === false) {
               this.items.push({
                    id: item.id,
                    name: item.name,
                    price: item.price,
                    image: item.image,
                    quantity: item.count,
                    total: item.price * item.count,
               });

               storage.saveCart(this.items);
          } else {
               this.updateItem(item);
          }
          this.total += item.price * item.count;
          this.count += item.count;
     },
     containsItem: function (id) {
          if (this.items === undefined) {
               return false;
          }

          for (var i = 0; i < this.items.length; i++) {
               var _item = this.items[i];

               if (id == _item.id) {
                    return true;
               }
          }
          return false;
     },
};
///sa marche
///sa marche
var products = document.querySelectorAll(
     "a[data-product_id].viewcart-style-2.buttons.product_type_simple.add_to_cart_buttons.ajax_add_to_cart"
);
[].forEach.call(products, function (product) {
     product.addEventListener("click", function (e) {
          e.preventDefault();

          let item = helpers.itemData(product);
          cart.addItem(item);
     });
});
///sa marche
function removeProduit(product_id) {
     let cart = localAdapter.getCart();
     cart = cart.filter((p) => p.id != product_id);
     localAdapter.saveCart(cart);
}
///sa marche
///sa marche
function totalPriceProduct() {
     let objJson = localAdapter.getCart();
     let total = 0;
     for (let i = 0; i < objJson.length; i++) {
          total += parseInt(objJson[i].price);
     }
     return total;
}
///sa marche
window.addEventListener("DOMContentLoaded", function (e) {
     ///sa marche
     if (storage.getCart()) {
          let objJson = localAdapter.getCart();

          for (let i = 0; i < objJson.length; i++) {
               let htmlContent = `
            <ul class="cart_list product_list_widget scrollbar-inner">
                 <li class="woocommerce-mini-cart-item mini_cart_item">
                      <div class="product-image">
                           <div class="inner">
                                <a
                                     href="https://www.holzelektro.com/ref/pini-kay-buchenholzbriketts-premium-960kg/"
                                     aria-label="product"
                                >
                                     <img
                                          width="150"
                                          height="150"
                                          src="wp-content/uploads/2022/07/${objJson[i].image}"
                                          class="attachment-woocommerce_gallery_thumbnail size-woocommerce_gallery_thumbnail"
                                          alt=""
                                          decoding="async"
                                          loading="lazy"
                                     />
                                </a>
                           </div>
                      </div>
                      <div class="product-details">
                           <a
                                href="https://www.holzelektro.com/ref/pini-kay-buchenholzbriketts-premium-960kg/"
                                class="text-v-dark"
                           >
                                ${objJson[i].name}
                           </a>
                           <dl class="variation">
                                <dt class="variation-Vendor">Vendor:</dt>
                                <dd class="variation-Vendor"></dd>
                           </dl>
                           <span class="quantity"
                                >1 ×
                                <span class="woocommerce-Price-amount amount"
                                     ><bdi
                                          >${objJson[i].price},00<span
                                               class="woocommerce-Price-currencySymbol"
                                               >€</span
                                          ></bdi
                                     ></span
                                ></span
                           >
                           <a
                                onclick="removeProduit(${objJson[i].id})"
                                class="remove remove-product"
                                aria-label="Dieses Produkt entfernen"
                                data-cart_id="806fec5af7f5b48b8a31a003e171f3fb"
                                data-product_sku=""
                           ></a>
                      </div>
                      <div class="ajax-loading"></div>
                 </li>
            </ul>
            `;
               document
                    .querySelector(
                         "div>#mini-cart .cart-popup.widget_shopping_cart h3"
                    )
                    .insertAdjacentHTML("afterend", htmlContent);
              
          }
          ///sa marche

          let htmlcontentPrix = `<bdi
          >${totalPriceProduct()},00<span
               class="woocommerce-Price-currencySymbol"
               >€</span
          ></bdi
     >`;
          document
               .querySelector(
                    "div>#mini-cart .cart-popup.widget_shopping_cart .woocommerce-mini-cart__total.total .woocommerce-Price-amount.amount"
               )
               .insertAdjacentHTML("afterbegin", htmlcontentPrix);
     } else {
          helpers.emptyView();
     }
});

let cartId = "cart";

///sa marche
let localAdapter = {
    saveCart: function (object) {
        let stringified = JSON.stringify(object);
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
let storage = localAdapter;

///sa marche
let helpers = {
    itemData: function (object) {
        let count = object.getAttribute("data-quantity"),
            patt = new RegExp("^[1-9]([0-9]+)?$");
        let count2 = (count.value =
            patt.test(count.value) === true ? parseInt(count.value) : 1);
        let price1 = object.getAttribute("data-price");
        let item = {
            name: object.getAttribute("aria-label"),
            price: price1,
            id: object.getAttribute("data-product_id"),
            image: object.getAttribute("data-image"),
            count: count2,
        };
        return item;
    },
};
///sa marche
let cart = {
    items: [],

    addItem: function (item) {
        if (this.containsItem(item.id) === false) {
            this.items.push({
                id: item.id,
                name: item.name,
                price: item.price,
                image: item.image,
                quantity: item.count,
                total: parseInt(item.count) * parseInt(item.price),
            });

            storage.saveCart(this.items);
        } else {
            this.updateItem(item);
        }
        this.total += item.price * item.count;
        this.count += item.count;
        updateItemCart();
    },
    containsItem: function (id) {
        if (this.items === undefined) {
            return false;
        }

        for (let i = 0; i < this.items.length; i++) {
            let cartItem = this.items[i];

            if (id == cartItem.id) {
                return true;
            }
        }
        return false;
    },

    updateItem: function (object) {
        for (let i = 0; i < this.items.length; i++) {
            let cartItem = this.items[i];
           
            if (object.id === cartItem.id) {
                cartItem.quantity = parseInt(object.count);
                cartItem.total =
                    parseInt(cartItem.quantity) * parseInt(cartItem.price);
                this.items[i] = cartItem;
                storage.saveCart(this.items);
            }
        }
    },
};
///sa marche

function preViewConfirmeAddProd(object) {
    const preViewConfirmeAddProd = document.querySelector('div.loader.success-message-container');
    let name = object.getAttribute("aria-label");
    let img = object.getAttribute("data-image");
    let objJson = localAdapter.getCart();
    preViewConfirmeAddProd.innerHTML = "";
        let htmlContent = "";
        htmlContent += ` 
        <div class="msg-box">
            <div class="msg">You've just added this product to the cart:
                <p class="product-name text-color-primary"> ${name} </p>
            </div>
            <img src="https://www.holzelektro.com/wp-content/uploads/2022/07/${img}">
        </div>
        <button class="button btn-primay viewcart" data-link="">
            View Cart
        </button>
        <button class="button btn-primay continue_shopping">
            Continue
        </button>
     `

            preViewConfirmeAddProd.innerHTML = htmlContent;
    // code pour afficher la vue de confirmation
    let confirmView = document.querySelector('.after-loading-success-message.style-2');
    confirmView.style.display = "block";
  
    setTimeout(function() {
      confirmView.style.display = "none";
    }, 6000);
  }
  
///pour ajouter un produit dans le localstorage lors d'un click
const buttons = document.querySelectorAll(
    ".add-links-wrap > .add-links.clearfix"
);

buttons.forEach((button) => {
    button.addEventListener("click", (event) => {
        event.preventDefault();
        let item = helpers.itemData(event.target);
        cart.addItem(item);
        preViewConfirmeAddProd(event.target)
    });
});
///pour ajouter un produit dans le localstorage lors d'un click
function removeProduit(product_id) {
    let cart = localAdapter.getCart();
    cart = cart.filter((p) => p.id != product_id);
    localAdapter.saveCart(cart);
    updateItemCart();
}
///sa marche
///sa marche
function totalPriceProduct() {
    let objJson = localAdapter.getCart();
    let total = 0;
    for (let i = 0; i < objJson.length; i++) {
        total += parseInt(objJson[i].total);
    }
    return total;
}
///sa marche

// fonction qui retourne la somme des quantité de produit stockées dans le localStorage
function getQtyCount() {
    let objJson = localAdapter.getCart();
    let total = 0;
    for (let i = 0; i < objJson.length; i++) {
        total += parseInt(objJson[i].quantity);
    }
    return total;
}

// fonction qui retourne le nombre de tâches stockées dans le localStorage
function getTaskCount() {
         // récupération des tâches
    const tasks = storage.getCart();
    // retour du nombre de tâches
    number = tasks.length;

    document.querySelector(".cart-items").innerHTML = getQtyCount();

    if (number === 0) {
        let htmlContent = `
          <div class="widget_shopping_cart_content">

          <h3>Shopping Cart</h3>
          <ul class="cart_list product_list_widget scrollbar-inner ">
               
                    <li class="woocommerce-mini-cart__empty-message empty">
                         Es befinden sich keine Produkte im Warenkorb.		</li>
          
               
          </ul><!-- end product list -->
          
          
          </div>

            `;
        document.querySelector(".widget_shopping_cart_content").innerHTML =
            htmlContent;
    }
}

function updateItemCart() {
    if (storage.getCart()) {
        let cartList = document.querySelector(
            "div>#mini-cart .cart-popup.widget_shopping_cart > .widget_shopping_cart_content"
        );
        let objJson = localAdapter.getCart();
        cartList.innerHTML = "";
        let htmlContent = "";
        htmlContent += `
          <h3>Shopping Cart</h3>
          <ul class="cart_list product_list_widget scrollbar-inner">
               
          `;
        for (let i = 0; i < objJson.length; i++) {
            htmlContent += `
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
                          <dl class="letiation">
                               <dt class="letiation-Vendor">Vendor:</dt>
                               <dd class="letiation-Vendor"></dd>
                          </dl>
                          <span class="quantity"
                               >${objJson[i].quantity} ×
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
                               class="" 
                               aria-label="Dieses Produkt entfernen"
                               data-cart_id="806fec5af7f5b48b8a31a003e171f3fb"
                               style='box-sizing: border-box;
                               text-decoration: none solid rgb(226, 0, 26);
                               top: 10px;
                               right: -8px;
                               padding: 0px;
                               position: absolute;
                               text-align: center;
                               width: 23px;
                               height: 20px;
                               background-color: rgb(255, 255, 255);
                               border-radius: 50%;
                               box-shadow: rgba(0, 0, 0, 0.4) 0px 2px 6px 0px;
                               z-index: 3;
                               content: "x";
                               padding-left: 2px;
                               padding-bottom: 25px; 
                               cursor: pointer;

'
                          >x</a>
                     </div>
                     <div class="ajax-loading"></div>
                 </li>

            `;
        }
        htmlContent += `</ul>

          <p class="woocommerce-mini-cart__total total">
               <strong>Zwischensumme:</strong>
               <span class="woocommerce-Price-amount amount"
                    ><bdi
                         >${totalPriceProduct()},00<span
                              class="woocommerce-Price-currencySymbol"
                              >€</span
                         ></bdi
                    ></span
               >
          </p>

          <p class="" style='    box-sizing : border-box; 
          margin-top : 0px; 
          margin-bottom : 0px; 
          margin : 0px; 
          padding : 0px 0px 10px; 
          padding-left : 0px; 
          padding-right : 0px; 
      '>
               <a
                    href="https://www.holzelektro.com/warenkorb/"
                    class=""
                    style='    cursor : pointer; 
    box-sizing : border-box; 
    color : rgb(34, 37, 41); 
    text-decoration : none solid rgb(34, 37, 41); 
    transition : color 0.15s ease 0s, background-color 0.15s ease 0s, border-color 0.15s ease 0s, box-shadow 0.15s ease 0s, transform 0.2s ease 0s; 
    display : inline-block; 
    text-align : center; 
    font-weight : 600; 
    vertical-align : middle; 
    touch-action : manipulation; 
    padding : 14px 24px; 
    white-space : nowrap; 
    line-height : 18px; 
    user-select : none; 
    background-color : rgb(241, 241, 241); 
    border-color : rgb(201, 0, 24); 
    outline : rgb(255, 0, 0) solid 2px; 
    font : 600 12px / 18px Poppins, "Open Sans", sans-serif; 
    letter-spacing : 0.3px; 
    text-transform : uppercase; 
    border-radius : 2px; 
    float : none; 
    width : 257.333px; 
    margin-bottom : 10px; 
    background : rgb(241, 241, 241) none repeat scroll 0% 0% / auto padding-box border-box; 
'
                    >Warenkorb anzeigen</a
               >
               <a
     href="https://www.holzelektro.com/zurkasse/"
     class=""
     style='    cursor : pointer; 
    box-sizing : border-box; 
    color : rgb(255, 255, 255); 
    text-decoration : none solid rgb(255, 255, 255); 
    transition : color 0.15s ease 0s, background-color 0.15s ease 0s, border-color 0.15s ease 0s, box-shadow 0.15s ease 0s, transform 0.2s ease 0s; 
    display : inline-block; 
    text-align : center; 
    font-weight : 600; 
    vertical-align : middle; 
    touch-action : manipulation; 
    padding : 14px 24px; 
    white-space : nowrap; 
    line-height : 18px; 
    user-select : none; 
    background-color : rgb(53, 58, 64); 
    border-color : rgb(255, 255, 255); 
    outline : rgb(255, 0, 0) solid 2px; 
    font : 600 12px / 18px Poppins, "Open Sans", sans-serif; 
    letter-spacing : 0.3px; 
    text-transform : uppercase; 
    border-radius : 2px; 
    float : none; 
    width : 257.333px; 
    margin-bottom : 10px; 
    background : rgb(53, 58, 64) none repeat scroll 0% 0% / auto padding-box border-box; 
    border : 0px none rgb(255, 255, 255); 
    box-shadow : none; 

'
     >Kasse</a
>

          </p>
   `;

        cartList.innerHTML = htmlContent;
        getTaskCount();
    }
}

const inclimentcart = document.querySelector(
    ".single_add_to_cart_button.button.alt"
);

if (inclimentcart) {
    inclimentcart.addEventListener("click", function (e) {
        e.preventDefault();
        let price1 = document
            .querySelector(
                "div.summary.entry-summary.col-md-7 > p > span > bdi"
            )
            .innerText.replace("€", "");
        let count1 = document.querySelector(".input-text.qty.text").value;
        let item = {
            name: document.querySelector(
                "div.summary.entry-summary.col-md-7 > h2"
            ).innerText,
            price: price1,
            id: document.querySelector(
                "div.summary.entry-summary.col-md-7 > form > button"
            ).value,
            image: document
                .querySelector("div.owl-item.active.selected > div > img")
                .src.replace(
                    "http://localhost/Projet_Laravel/projetBois/projetBoisLaravel/wp-content/uploads/2022/07/",
                    ""
                ),
            count: count1,
        };
        cart.addItem(item);
    });
}

window.addEventListener("DOMContentLoaded", function (e) {
    updateItemCart();
});

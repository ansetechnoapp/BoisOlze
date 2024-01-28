<!DOCTYPE html>
<html lang="de-DE">

<x-ref.head></x-ref.head>
<body data-rsssl=1 class="product-template-default single single-product postid-2652 wp-embed-responsive theme-porto woocommerce woocommerce-page woocommerce-no-js yith-wcan-free single-add-to-cart login-popup full blog-1 wpb-js-composer js-comp-ver-6.9.0 vc_responsive dokan-theme-porto">

	<div class="page-wrapper"><!-- page wrapper -->
		
								<!-- header wrapper -->
			<div class="header-wrapper">
								

	<header id="header" class="header-builder">
	
	<div class="header-main"><div class="header-row container"><div class="header-col header-left"><a class="mobile-toggle" href="#" aria-label="Mobile Menu"><i class="fas fa-bars"></i></a>		<div class="logo">
		<a href="https://www.holzelektro.com/" title="Heizen &amp; Klima Günstig kaufen - "  rel="home">
		<img class="img-responsive sticky-logo sticky-retina-logo" width="220" height="60" src="http://www.holzelektro.com/wp-content/uploads/2022/07/Logo-Holzelektro.png" alt="Heizen &amp; Klima Günstig kaufen" /><img class="img-responsive standard-logo retina-logo" width="220" height="60" src="http://www.holzelektro.com/wp-content/uploads/2022/07/Logo-Holzelektro.png" alt="Heizen &amp; Klima Günstig kaufen" />	</a>
			</div>
		</div><div class="header-col header-right"><div class="searchform-popup"><a class="search-toggle" href="#"><i class="fas fa-search"></i><span class="search-text">Search</span></a>
<form role="search" method="get" id="yith-ajaxsearchform" action="https://www.holzelektro.com/" class="yith-ajaxsearchform-container yith-ajaxsearchform-container167557562 searchform searchform-cats">
	<fieldset>
		<span class="text"><input name="s" id="yith-s" class="yith-s" type="text" value="" placeholder="Suche&hellip;" /></span>
		<select  name='product_cat' id='product_cat' class='cat' >
	<option value='0'>Alle Kategorien</option>
	<option class="level-0" value="ventilatoren">Ventilatoren</option>
	<option class="level-0" value="kamine-oefen">Kamine &amp; Öfen</option>
	<option class="level-1" value="elektrokamine">&nbsp;&nbsp;&nbsp;Elektrokamine</option>
	<option class="level-1" value="pelletoefen">&nbsp;&nbsp;&nbsp;Pelletöfen</option>
	<option class="level-1" value="kaminoefen">&nbsp;&nbsp;&nbsp;Kaminöfen</option>
	<option class="level-0" value="heiz-klima">Heiz &amp; Klima</option>
	<option class="level-1" value="klimageraete">&nbsp;&nbsp;&nbsp;Klimageräte</option>
	<option class="level-1" value="luftreiniger">&nbsp;&nbsp;&nbsp;Luftreiniger</option>
	<option class="level-1" value="heizluefter">&nbsp;&nbsp;&nbsp;Heizlüfter</option>
	<option class="level-0" value="brennstoffe">Brennstoffe</option>
	<option class="level-1" value="brennholz">&nbsp;&nbsp;&nbsp;Brennholz</option>
	<option class="level-1" value="holzpellets">&nbsp;&nbsp;&nbsp;Holzpellets</option>
	<option class="level-1" value="holzbriketts">&nbsp;&nbsp;&nbsp;Holzbriketts</option>
	<option class="level-1" value="kaminbriketts">&nbsp;&nbsp;&nbsp;Kaminbriketts</option>
</select>
		<span class="button-wrap"><button class="btn" id="yith-searchsubmit" title="Suche" type="submit"><i class="fas fa-search"></i></button></span>
		<input type="hidden" name="post_type" value="product" />
			</fieldset>
</form>

<script type="text/javascript">
( function() {
	var porto_init_yith_search = function() {
		( function( $ ) {
			var search_loader_url = 'https://www.holzelektro.com/wp-content/themes/porto/images/ajax-loader@2x.gif';
						var ajax_url = 'https://www.holzelektro.com/wp-admin/admin-ajax.php?';

			var yith_search = $('.yith-ajaxsearchform-container167557562 .yith-s').yithautocomplete({
				minChars: 3,
				appendTo: '.yith-ajaxsearchform-container167557562',
				serviceUrl: function() {
										var val = $('.yith-ajaxsearchform-container167557562 .cat').val();
										if (val != '0') {
						return ajax_url + 'action=yith_ajax_search_products' + '&product_cat=' + val;
					} else {
						return ajax_url + 'action=yith_ajax_search_products';
					}
				},
				onSearchStart: function(){
					$(this).css('background', 'url('+search_loader_url+') no-repeat 97% center');
					$(this).css('background-size', '16px 16px');
				},
				onSearchComplete: function(){
					$(this).css('background', 'transparent');
				},

				onSelect: function (suggestion) {
					if( suggestion.id != -1 ) {
						window.location.href = suggestion.url;
					}
				},
				formatResult: function (suggestion, currentValue) {
					var pattern = '(' + $.YithAutocomplete.utils.escapeRegExChars(currentValue) + ')';
					var html = '';

					if ( typeof suggestion.img !== 'undefined' ) {
						html += suggestion.img;
					}

					html += '<div class="yith_wcas_result_content"><div class="title">';
					html += suggestion.value.replace(new RegExp(pattern, 'gi'), '<strong>$1<\/strong>');
					html += '</div>';

					if ( typeof suggestion.div_badge_open !== 'undefined' ) {
						html += suggestion.div_badge_open;
					}

					if ( typeof suggestion.on_sale !== 'undefined' ) {
						html += suggestion.on_sale;
					}

					if ( typeof suggestion.featured !== 'undefined' ) {
						html += suggestion.featured;
					}

					if ( typeof suggestion.div_badge_close !== 'undefined' ) {
						html += suggestion.div_badge_close;
					}

					if ( typeof suggestion.price !== 'undefined' && suggestion.price != '' ) {
						html += ' ' + suggestion.price;
					}

					if ( typeof suggestion.excerpt !== 'undefined' ) {
						html += ' ' +  suggestion.excerpt.replace(new RegExp(pattern, 'gi'), '<strong>$1<\/strong>');
					}

					html += '</div>';

					return html;
				}
			});

			$('.yith-ajaxsearchform-container167557562 .cat').on('change', function() {
				$('.yith-ajaxsearchform-container167557562 .yith-s').focus();
			});
		} )( window.jQuery );
	};

	if ( window.theme && theme.isLoaded ) {
		porto_init_yith_search();
	} else {
		window.addEventListener( 'load', porto_init_yith_search );
	}
} )();
</script>
</div><div class="custom-html ms-5 me-4 d-none d-lg-block"></div><div class="custom-html"><a href="https://holzelektro.com/meinkonto/" class="my-account" title="Mein Konto"><i class="porto-icon-user-2"></i></a></div><div class="custom-html me-1"><a href="https://holzelektro.com/merkzettel/" class="wishlist" title="Merkzettel"><i class="porto-icon-wishlist-2"></i></a></div>		<div id="mini-cart" class="mini-cart minicart-arrow-alt minicart-offcanvas">
			<div class="cart-head">
			<span class="cart-icon"><i class="minicart-icon porto-icon-cart-thick"></i><span class="cart-items">998</span></span><span class="cart-items-text">998 Artikel</span>			</div>
			<div class="cart-popup widget_shopping_cart">
				<div class="widget_shopping_cart_content">
									<div class="cart-loading"></div>
								</div>
			</div>
		<div class="minicart-overlay"><svg viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg"><defs><style>.minicart-svg{fill:none;stroke:#fff;stroke-linecap:round;stroke-linejoin:round;stroke-width:2px;}</style></defs><title/><g id="cross"><line class="minicart-svg" x1="7" x2="25" y1="7" y2="25"/><line class="minicart-svg" x1="7" x2="25" y1="25" y2="7"/></g></svg></div>		</div>
		</div></div></div><div class="header-bottom main-menu-wrap"><div class="header-row container"><div class="header-col header-left"><ul id="menu-main-menu" class="main-menu mega-menu menu-hover-line show-arrow"><li id="nav-menu-item-2265" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-product-parent narrow"><a href="https://www.holzelektro.com/">Startseite</a></li>
<li id="nav-menu-item-3712" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat current-product-ancestor menu-item-has-children has-sub narrow"><a href="https://www.holzelektro.com/kategorie/heiz-klima/">Heiz &amp; Klima</a>
<div class="popup"><div class="inner" style=""><ul class="sub-menu">
	<li id="nav-menu-item-3053" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat" data-cols="1"><a href="https://www.holzelektro.com/kategorie/heiz-klima/heizluefter/">Heizlüfter</a></li>
	<li id="nav-menu-item-3054" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat" data-cols="1"><a href="https://www.holzelektro.com/kategorie/heiz-klima/heizstrahler/">Heizstrahler</a></li>
	<li id="nav-menu-item-2263" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat" data-cols="1"><a href="https://www.holzelektro.com/kategorie/heiz-klima/klimageraete/">Klimageräte</a></li>
	<li id="nav-menu-item-3052" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat current-product-ancestor current-menu-parent current-product-parent active" data-cols="1"><a href="https://www.holzelektro.com/kategorie/heiz-klima/luftreiniger/">Luftreiniger</a></li>
	<li id="nav-menu-item-2261" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat" data-cols="1"><a href="https://www.holzelektro.com/kategorie/heiz-klima/luftbefeuchter/">Luftbefeuchter</a></li>
	<li id="nav-menu-item-2260" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat" data-cols="1"><a href="https://www.holzelektro.com/kategorie/heiz-klima/luftentfeuchter/">Luftentfeuchter</a></li>
</ul></div></div>
</li>
<li id="nav-menu-item-2259" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat narrow"><a href="https://www.holzelektro.com/kategorie/ventilatoren/">Ventilatoren</a></li>
<li id="nav-menu-item-2258" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-has-children has-sub narrow"><a href="https://www.holzelektro.com/kategorie/kamine-oefen/">Kamine &amp; Öfen</a>
<div class="popup"><div class="inner" style=""><ul class="sub-menu">
	<li id="nav-menu-item-2257" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat" data-cols="1"><a href="https://www.holzelektro.com/kategorie/kamine-oefen/elektrokamine/">Elektrokamine</a></li>
	<li id="nav-menu-item-2248" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat" data-cols="1"><a href="https://www.holzelektro.com/kategorie/kamine-oefen/pelletoefen/">Pelletöfen</a></li>
	<li id="nav-menu-item-2256" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat" data-cols="1"><a href="https://www.holzelektro.com/kategorie/kamine-oefen/kaminoefen/">Kaminöfen</a></li>
	<li id="nav-menu-item-2254" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat" data-cols="1"><a href="https://www.holzelektro.com/kategorie/kamine-oefen/kamineinsaetze/">Kamineinsätze</a></li>
	<li id="nav-menu-item-2255" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat" data-cols="1"><a href="https://www.holzelektro.com/kategorie/kamine-oefen/kaminbausaetze/">Kaminbausätze</a></li>
	<li id="nav-menu-item-2253" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat" data-cols="1"><a href="https://www.holzelektro.com/kategorie/kamine-oefen/kuechenoefen/">Küchenöfen</a></li>
</ul></div></div>
</li>
<li id="nav-menu-item-4316" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-has-children has-sub narrow"><a href="https://www.holzelektro.com/kategorie/brennstoffe/">Brennstoffe</a>
<div class="popup"><div class="inner" style=""><ul class="sub-menu">
	<li id="nav-menu-item-2251" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat" data-cols="1"><a href="https://www.holzelektro.com/kategorie/brennstoffe/brennholz/">Brennholz</a></li>
	<li id="nav-menu-item-2250" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat" data-cols="1"><a href="https://www.holzelektro.com/kategorie/brennstoffe/holzpellets/">Holzpellets</a></li>
	<li id="nav-menu-item-2249" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat" data-cols="1"><a href="https://www.holzelektro.com/kategorie/brennstoffe/holzbriketts/">Holzbriketts</a></li>
	<li id="nav-menu-item-2286" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat" data-cols="1"><a href="https://www.holzelektro.com/kategorie/brennstoffe/kaminbriketts/">Kaminbriketts</a></li>
</ul></div></div>
</li>
</ul></div><div class="header-col header-right"></div></div></div>	</header>

							</div>
			<!-- end header wrapper -->
		
		
				<section class="page-top page-header-6">
		<div class="container hide-title">
	<div class="row">
		<div class="col-lg-12 clearfix">
			<div class="pt-right d-none">
				<h1 class="page-title">Philips AC1214/10 Luftreiniger für 63 m² Räume</h1>
							</div>
							<div class="breadcrumbs-wrap pt-left">
					<span class="yoast-breadcrumbs"><span><a href="https://www.holzelektro.com/">Startseite</a> &raquo; <span><a href="https://www.holzelektro.com/shop/">Shop</a> &raquo; <span class="breadcrumb_last" aria-current="page">Philips AC1214/10 Luftreiniger für 63 m² Räume</span></span></span></span>				</div>
								</div>
	</div>
</div>
	</section>
	
		<div id="main" class="column1 boxed"><!-- main -->

			<div class="container">
			<div class="row main-content-wrap">

			<!-- main content -->
			<div class="main-content col-lg-12">

			
	<div id="primary" class="content-area"><main id="content" class="site-main">

					
			<div class="woocommerce-notices-wrapper"></div>
<div id="product-2652" class="product type-product post-2652 status-publish first instock product_cat-luftreiniger has-post-thumbnail shipping-taxable purchasable product-type-simple product-layout-default">

	<div class="product-summary-wrap">
					<div class="row">
				<div class="summary-before col-md-5">
							<div class="labels"></div><div class="product-images images">
	<div class="product-image-slider owl-carousel show-nav-hover has-ccols ccols-1"><div class="img-thumbnail"><div class="inner"><img width="600" height="600" src="https://www.holzelektro.com/wp-content/uploads/2022/07/Philips-AC1214-10-Luftreiniger-fur-63-m²-Raume-1-600x600.jpg" class="woocommerce-main-image img-responsive" alt="" loading="lazy" href="https://www.holzelektro.com/wp-content/uploads/2022/07/Philips-AC1214-10-Luftreiniger-fur-63-m²-Raume-1.jpg" title="Philips-AC1214-10-Luftreiniger-fur-63-m²-Raume-1.jpg" srcset="https://www.holzelektro.com/wp-content/uploads/2022/07/Philips-AC1214-10-Luftreiniger-fur-63-m²-Raume-1-600x600.jpg 600w, https://www.holzelektro.com/wp-content/uploads/2022/07/Philips-AC1214-10-Luftreiniger-fur-63-m²-Raume-1-400x400.jpg 400w" sizes="(max-width: 600px) 100vw, 600px" /></div></div><div class="img-thumbnail"><div class="inner"><img width="600" height="599" src="https://www.holzelektro.com/wp-content/uploads/2022/07/Philips-AC1214-10-Luftreiniger-fur-63-m²-Raume-2-600x599.jpg" class="img-responsive" alt="" loading="lazy" href="https://www.holzelektro.com/wp-content/uploads/2022/07/Philips-AC1214-10-Luftreiniger-fur-63-m²-Raume-2.jpg" srcset="https://www.holzelektro.com/wp-content/uploads/2022/07/Philips-AC1214-10-Luftreiniger-fur-63-m²-Raume-2-600x599.jpg 600w, https://www.holzelektro.com/wp-content/uploads/2022/07/Philips-AC1214-10-Luftreiniger-fur-63-m²-Raume-2-400x399.jpg 400w" sizes="(max-width: 600px) 100vw, 600px" /></div></div><div class="img-thumbnail"><div class="inner"><img width="600" height="600" src="https://www.holzelektro.com/wp-content/uploads/2022/07/Philips-AC1214-10-Luftreiniger-fur-63-m²-Raume-3-600x600.jpg" class="img-responsive" alt="" loading="lazy" href="https://www.holzelektro.com/wp-content/uploads/2022/07/Philips-AC1214-10-Luftreiniger-fur-63-m²-Raume-3.jpg" srcset="https://www.holzelektro.com/wp-content/uploads/2022/07/Philips-AC1214-10-Luftreiniger-fur-63-m²-Raume-3-600x600.jpg 600w, https://www.holzelektro.com/wp-content/uploads/2022/07/Philips-AC1214-10-Luftreiniger-fur-63-m²-Raume-3-400x400.jpg 400w" sizes="(max-width: 600px) 100vw, 600px" /></div></div><div class="img-thumbnail"><div class="inner"><img width="600" height="600" src="https://www.holzelektro.com/wp-content/uploads/2022/07/Philips-AC1214-10-Luftreiniger-fur-63-m²-Raume-4-600x600.jpg" class="img-responsive" alt="" loading="lazy" href="https://www.holzelektro.com/wp-content/uploads/2022/07/Philips-AC1214-10-Luftreiniger-fur-63-m²-Raume-4.jpg" srcset="https://www.holzelektro.com/wp-content/uploads/2022/07/Philips-AC1214-10-Luftreiniger-fur-63-m²-Raume-4-600x600.jpg 600w, https://www.holzelektro.com/wp-content/uploads/2022/07/Philips-AC1214-10-Luftreiniger-fur-63-m²-Raume-4-400x400.jpg 400w" sizes="(max-width: 600px) 100vw, 600px" /></div></div><div class="img-thumbnail"><div class="inner"><img width="600" height="600" src="https://www.holzelektro.com/wp-content/uploads/2022/07/Philips-AC1214-10-Luftreiniger-fur-63-m²-Raume-5-600x600.jpg" class="img-responsive" alt="" loading="lazy" href="https://www.holzelektro.com/wp-content/uploads/2022/07/Philips-AC1214-10-Luftreiniger-fur-63-m²-Raume-5.jpg" srcset="https://www.holzelektro.com/wp-content/uploads/2022/07/Philips-AC1214-10-Luftreiniger-fur-63-m²-Raume-5-600x600.jpg 600w, https://www.holzelektro.com/wp-content/uploads/2022/07/Philips-AC1214-10-Luftreiniger-fur-63-m²-Raume-5-400x400.jpg 400w" sizes="(max-width: 600px) 100vw, 600px" /></div></div><div class="img-thumbnail"><div class="inner"><img width="600" height="600" src="https://www.holzelektro.com/wp-content/uploads/2022/07/Philips-AC1214-10-Luftreiniger-fur-63-m²-Raume-6-600x600.jpg" class="img-responsive" alt="" loading="lazy" href="https://www.holzelektro.com/wp-content/uploads/2022/07/Philips-AC1214-10-Luftreiniger-fur-63-m²-Raume-6.jpg" srcset="https://www.holzelektro.com/wp-content/uploads/2022/07/Philips-AC1214-10-Luftreiniger-fur-63-m²-Raume-6-600x600.jpg 600w, https://www.holzelektro.com/wp-content/uploads/2022/07/Philips-AC1214-10-Luftreiniger-fur-63-m²-Raume-6-400x400.jpg 400w" sizes="(max-width: 600px) 100vw, 600px" /></div></div></div><span class="zoom" data-index="0"><i class="porto-icon-plus"></i></span></div>

<div class="product-thumbnails thumbnails">
	<div class="product-thumbs-slider owl-carousel has-ccols ccols-4"><div class="img-thumbnail"><img class="woocommerce-main-thumb img-responsive" alt="Philips-AC1214-10-Luftreiniger-fur-63-m²-Raume-1.jpg" src="https://www.holzelektro.com/wp-content/uploads/2022/07/Philips-AC1214-10-Luftreiniger-fur-63-m²-Raume-1-150x150.jpg" /></div><div class="img-thumbnail"><img class="img-responsive" alt="Philips-AC1214-10-Luftreiniger-fur-63-m²-Raume-2.jpg" src="https://www.holzelektro.com/wp-content/uploads/2022/07/Philips-AC1214-10-Luftreiniger-fur-63-m²-Raume-2-150x150.jpg" /></div><div class="img-thumbnail"><img class="img-responsive" alt="Philips-AC1214-10-Luftreiniger-fur-63-m²-Raume-3.jpg" src="https://www.holzelektro.com/wp-content/uploads/2022/07/Philips-AC1214-10-Luftreiniger-fur-63-m²-Raume-3-150x150.jpg" /></div><div class="img-thumbnail"><img class="img-responsive" alt="Philips-AC1214-10-Luftreiniger-fur-63-m²-Raume-4.jpg" src="https://www.holzelektro.com/wp-content/uploads/2022/07/Philips-AC1214-10-Luftreiniger-fur-63-m²-Raume-4-150x150.jpg" /></div><div class="img-thumbnail"><img class="img-responsive" alt="Philips-AC1214-10-Luftreiniger-fur-63-m²-Raume-5.jpg" src="https://www.holzelektro.com/wp-content/uploads/2022/07/Philips-AC1214-10-Luftreiniger-fur-63-m²-Raume-5-150x150.jpg" /></div><div class="img-thumbnail"><img class="img-responsive" alt="Philips-AC1214-10-Luftreiniger-fur-63-m²-Raume-6.jpg" src="https://www.holzelektro.com/wp-content/uploads/2022/07/Philips-AC1214-10-Luftreiniger-fur-63-m²-Raume-6-150x150.jpg" /></div></div></div>
						</div>

			<div class="summary entry-summary col-md-7">
							<h2 class="product_title entry-title">
		Philips AC1214/10 Luftreiniger für 63 m² Räume	</h2>

<div class="woocommerce-product-rating">
	<div class="star-rating" title="0">
		<span style="width:0%">
						<strong class="rating">0</strong> out of 5		</span>
	</div>
								<div class="review-link noreview">
				<a href="#review_form" class="woocommerce-write-review-link" rel="nofollow">( Es gibt noch keine Bewertungen. )</a>
			</div>
					</div>
<p class="price"><span class="woocommerce-Price-amount amount"><bdi>179,00<span class="woocommerce-Price-currencySymbol">&euro;</span></bdi></span></p>

<div class="description woocommerce-product-details__short-description">
	<p><strong>Produkt-Highlights:</strong><br />
Hochwertige Filter entfernen Pollen, Staub, Bakterien, Viren bis 0,02µm<br />
App zur Steuerung des Geräts + Infos zur Luftqualität (iOS + Android)<br />
AeraSense informiert digital + per Farbsignal über aktuelle Luftqualität<br />
Luftreinigungsrate: 270 m³/h, reinigt effektiv Räume bis zu 63 m²<br />
4 Reinigungsmodi und 4 Geschwindigkeitsstufen</p>
</div>
<div class="product_meta">

	
	
	<span class="posted_in">Kategorie: <a href="https://www.holzelektro.com/kategorie/heiz-klima/luftreiniger/" rel="tag">Luftreiniger</a></span>
	
	
</div>

	
	<form class="cart" action="https://www.holzelektro.com/ref/philips-ac1214-10-luftreiniger-fuer-63-m²-raeume/" method="post" enctype='multipart/form-data'>
		
			<div class="quantity buttons_added">
				<button type="button" value="-" class="minus">-</button>
		<input
			type="number"
			id="quantity_63555631804e1"
			class="input-text qty text"
			step="1"
			min="1"
			max=""
			name="quantity"
			value="1"
			title="Menge"
			size="4"
			placeholder=""			inputmode="numeric" />
		<button type="button" value="+" class="plus">+</button>
			</div>
	
		<button type="submit" name="add-to-cart" value="2652" class="single_add_to_cart_button button alt">In den Warenkorb</button>

		<a href="https://www.holzelektro.com/warenkorb/" tabindex="1" class="wc-action-btn view-cart-btn button wc-forward">Warenkorb anzeigen</a>	</form>

	
			<div class="wcfm_ele_wrapper wcfm_catalog_enquiry_button_wrapper">
				<div class="wcfm-clearfix"></div>
				<a href="#" class="wcfm_catalog_enquiry " data-store="1" data-product="2652" style="margin-right:10px;"><span class="wcfmfa fa-question-circle"></span>&nbsp;&nbsp;<span class="add_enquiry_label">Stellen Sie eine Frage</span></a>
												<div class="wcfm-clearfix"></div>
			</div>
			
<div
	class="yith-wcwl-add-to-wishlist add-to-wishlist-2652 exists wishlist-fragment on-first-load"
	data-fragment-ref="2652"
	data-fragment-options="{&quot;base_url&quot;:&quot;&quot;,&quot;in_default_wishlist&quot;:true,&quot;is_single&quot;:true,&quot;show_exists&quot;:false,&quot;product_id&quot;:2652,&quot;parent_product_id&quot;:2652,&quot;product_type&quot;:&quot;simple&quot;,&quot;show_view&quot;:true,&quot;browse_wishlist_text&quot;:&quot;Wunschliste durchsuchen&quot;,&quot;already_in_wishslist_text&quot;:&quot;Das Produkt ist bereits auf Ihrer Wunschliste!&quot;,&quot;product_added_text&quot;:&quot;Produkt hinzugef\u00fcgt!&quot;,&quot;heading_icon&quot;:&quot;fa-heart-o&quot;,&quot;available_multi_wishlist&quot;:false,&quot;disable_wishlist&quot;:false,&quot;show_count&quot;:false,&quot;ajax_loading&quot;:false,&quot;loop_position&quot;:&quot;after_add_to_cart&quot;,&quot;item&quot;:&quot;add_to_wishlist&quot;}"
>
			
			<!-- ADD TO WISHLIST -->
			
<!-- BROWSE WISHLIST MESSAGE -->
<div class="yith-wcwl-wishlistexistsbrowse" data-product-id="2652" data-original-product-id="2652">
	<span class="feedback">
		<i class="yith-wcwl-icon fa fa-heart"></i>		Das Produkt ist bereits auf Ihrer Wunschliste!	</span>
	<a href="https://www.holzelektro.com/merkzettel/" rel="nofollow" data-title="Wunschliste durchsuchen">
				Wunschliste durchsuchen	</a>
</div>

			<!-- COUNT TEXT -->
			
			</div>
<a href="https://www.holzelektro.com/?id=2652&amp;action=yith-woocompare-view-table" class="compare yith-compare button added" title="Already Added" data-product_id="2652">Already Added</a>						</div>

					</div><!-- .summary -->
		</div>

	
	<div class="woocommerce-tabs woocommerce-tabs-hlvni5r4 skeleton-loading resp-htabs" id="product-tab">
				<script type="text/template">"\t\t<ul class=\"resp-tabs-list\" role=\"tablist\">\n\t\t\t\t\t\t\t<li class=\"description_tab\" id=\"tab-title-description\" role=\"tab\" aria-controls=\"tab-description\">\n\t\t\t\t\tBeschreibung\t\t\t\t<\/li>\n\t\t\t\t\t\t\t\t<li class=\"reviews_tab\" id=\"tab-title-reviews\" role=\"tab\" aria-controls=\"tab-reviews\">\n\t\t\t\t\tBewertungen (0)\t\t\t\t<\/li>\n\t\t\t\t\t\t\t\t<li class=\"seller_tab\" id=\"tab-title-seller\" role=\"tab\" aria-controls=\"tab-seller\">\n\t\t\t\t\tVendor Info\t\t\t\t<\/li>\n\t\t\t\t\t\t\t\t<li class=\"more_seller_product_tab\" id=\"tab-title-more_seller_product\" role=\"tab\" aria-controls=\"tab-more_seller_product\">\n\t\t\t\t\tMore Products\t\t\t\t<\/li>\n\t\t\t\t\t\t\t\t<li class=\"wcfm_policies_tab_tab\" id=\"tab-title-wcfm_policies_tab\" role=\"tab\" aria-controls=\"tab-wcfm_policies_tab\">\n\t\t\t\t\tStore Policies\t\t\t\t<\/li>\n\t\t\t\t\t\t\t\t<li class=\"wcfm_enquiry_tab_tab\" id=\"tab-title-wcfm_enquiry_tab\" role=\"tab\" aria-controls=\"tab-wcfm_enquiry_tab\">\n\t\t\t\t\tAnfragen\t\t\t\t<\/li>\n\t\t\t\t\n\t\t<\/ul>\n\t\t<div class=\"resp-tabs-container\">\n\t\t\t\n\t\t\t\t<div class=\"tab-content\" id=\"tab-description\">\n\t\t\t\t\t\n\t<h2>Beschreibung<\/h2>\n\n<p><strong><span style=\"font-size: 22px;\">Technische Daten<\/span><\/strong><\/p>\n<p><strong>Allgemein<\/strong><br \/>\nWeitere Vorteile : 99,97 % Filterung, Luftreiniger per Fernbedienung steuern, AeraSense-Technologie, 3 automatische Modi<\/p>\n<p><strong>Handhabung &amp; Komfort<\/strong><br \/>\nBetriebsart : elektrisch<br \/>\nArt Bedienung : Fernbedienung, Touch-Bedienung<\/p>\n<p><strong>Farbe &amp; Material<\/strong><br \/>\nFarbe : wei\u00df<br \/>\nHerstellerfarbbezeichnung : wei\u00df<br \/>\nMaterial Geh\u00e4use : ABS-Kunststoff<\/p>\n<p><strong>Technische Daten<\/strong><br \/>\nSpannung : 220-240 V<br \/>\nFrequenz : 50\/60 Hz<br \/>\nKabell\u00e4nge : 1,8 m<br \/>\nGeeignete Raumgr\u00f6\u00dfe : 63 m\u00b2<br \/>\nCADR (Clean Air Delivery Rate) Staub : 270 m\u00b3\/h<br \/>\nLautst\u00e4rke bei h\u00f6chster Stufe : 62 dB<\/p>\n<p><strong>Programme &amp; Funktionen<\/strong><br \/>\nFunktionen Luftreiniger : Allergie-Modus, Nachtmodus<br \/>\nArt Sensor : Luftqualit\u00e4tssensor<br \/>\nApp-Funktionen : Raumluftqualit\u00e4t von unterwegs kontrollieren<br \/>\nKompatible Betriebssysteme : Android, iOS<br \/>\nSchutzfunktionen : Kindersicherung<br \/>\nAnzahl Ventilationsstufen : 4<br \/>\nFilterung von : Pollen, Staub, Bakterien, Viren, Gase, Ger\u00fcche<\/p>\n<p><strong>Ausstattung<\/strong><br \/>\nMitgeliefertes Zubeh\u00f6r : Aktivkohlefilter, NanoProtect-Filter<\/p>\n<p><strong>Reinigung &amp; Pflege<\/strong><br \/>\nFiltersystem : Aktivkohlefilter, HEPA-Filter<\/p>\n<p><strong>Ma\u00dfe &amp; Gewicht<\/strong><br \/>\nH\u00f6he : 54,3 cm<br \/>\nBreite : 32,5 cm<br \/>\nTiefe : 21 cm<br \/>\nGewicht : 5,21 kg<\/p>\n<p><strong>Wissenswertes<\/strong><br \/>\nSprachen Bedienungs-\/Aufbauanleitung : Englisch (EN), Tschechisch (CS), Ungarisch (HU), Polnisch (PL), Rum\u00e4nisch (RO), Deutsch (DE)<\/p>\n\t\t\t\t<\/div>\n\n\t\t\t\n\t\t\t\t<div class=\"tab-content\" id=\"tab-reviews\">\n\t\t\t\t\t<div id=\"reviews\" class=\"woocommerce-Reviews\">\n\t<div id=\"comments\">\n\t\t<h2 class=\"woocommerce-Reviews-title\">\n\t\tBewertungen\t\t<\/h2>\n\n\t\t\n\t\t\t<p class=\"woocommerce-noreviews\">Es gibt noch keine Bewertungen.<\/p>\n\n\t\t\t<\/div>\n\n\t<hr class=\"tall\">\n\n\t\n\t\t<div id=\"review_form_wrapper\">\n\t\t\t<div id=\"review_form\">\n\t\t\t\t\t<div id=\"respond\" class=\"comment-respond\">\n\t\t<h3 id=\"reply-title\" class=\"comment-reply-title\">Schreibe die erste Bewertung f\u00fcr &#8222;Philips AC1214\/10 Luftreiniger f\u00fcr 63 m\u00b2 R\u00e4ume&#8220; <small><a rel=\"nofollow\" id=\"cancel-comment-reply-link\" href=\"\/ref\/philips-ac1214-10-luftreiniger-fuer-63-m%c2%b2-raeume\/#respond\" style=\"display:none;\">Antworten abbrechen<\/a><\/small><\/h3><form action=\"https:\/\/www.holzelektro.com\/wp-comments-post.php\" method=\"post\" id=\"commentform\" class=\"comment-form\" novalidate><div class=\"comment-form-rating\"><label for=\"rating\">Deine Bewertung&nbsp;<span class=\"required\">*<\/span><\/label><select name=\"rating\" id=\"rating\" required>\n\t\t\t\t\t\t\t<option value=\"\">Bewertung&hellip;<\/option>\n\t\t\t\t\t\t\t<option value=\"5\">Ausgezeichnet<\/option>\n\t\t\t\t\t\t\t<option value=\"4\">Gut<\/option>\n\t\t\t\t\t\t\t<option value=\"3\">Durchschnittlich<\/option>\n\t\t\t\t\t\t\t<option value=\"2\">Nicht ganz schlecht<\/option>\n\t\t\t\t\t\t\t<option value=\"1\">Sehr schlecht<\/option>\n\t\t\t\t\t\t<\/select><\/div><p class=\"comment-form-comment\"><label for=\"comment\">Deine Bewertung <span class=\"required\">*<\/span><\/label><textarea id=\"comment\" name=\"comment\" cols=\"45\" rows=\"8\" required><\/textarea><\/p><p class=\"comment-form-author\"><label for=\"author\">Name&nbsp;<span class=\"required\">*<\/span><\/label><input id=\"author\" name=\"author\" type=\"text\" value=\"\" size=\"30\" required \/><\/p>\n<p class=\"comment-form-email\"><label for=\"email\">E-Mail&nbsp;<span class=\"required\">*<\/span><\/label><input id=\"email\" name=\"email\" type=\"email\" value=\"\" size=\"30\" required \/><\/p>\n<p class=\"comment-form-cookies-consent\"><input id=\"wp-comment-cookies-consent\" name=\"wp-comment-cookies-consent\" type=\"checkbox\" value=\"yes\" \/> <label for=\"wp-comment-cookies-consent\">Meinen Namen, meine E-Mail-Adresse und meine Website in diesem Browser speichern, bis ich wieder kommentiere.<\/label><\/p>\n<p class=\"form-submit\"><input name=\"submit\" type=\"submit\" id=\"submit\" class=\"submit\" value=\"Senden\" \/> <input type='hidden' name='comment_post_ID' value='2652' id='comment_post_ID' \/>\n<input type='hidden' name='comment_parent' id='comment_parent' value='0' \/>\n<\/p><\/form>\t<\/div><!-- #respond -->\n\t\t\t\t<\/div>\n\t\t<\/div>\n\t\n\t<div class=\"clear\"><\/div>\n<\/div>\n\t\t\t\t<\/div>\n\n\t\t\t\n\t\t\t\t<div class=\"tab-content\" id=\"tab-seller\">\n\t\t\t\t\t\n<h2>Vendor Information<\/h2>\n\n<ul class=\"list-unstyled\">\n    \n                <li class=\"store-address\">\n            <span><b>Address:<\/b><\/span>\n            <span class=\"details\">\n                            <\/span>\n        <\/li>\n    \n    <li class=\"clearfix\">\n        No ratings found yet!    <\/li>\n\n    <\/ul>\n\t\t\t\t<\/div>\n\n\t\t\t\n\t\t\t\t<div class=\"tab-content\" id=\"tab-more_seller_product\">\n\t\t\t\t\t<ul class=\"products products-container grid pcols-lg-5 pcols-md-4 pcols-xs-3 pcols-ls-2 pwidth-lg-5 pwidth-md-4 pwidth-xs-2 pwidth-ls-1\"\n\t data-product_layout=\"product-default\">\n\n<li class=\"product-col product-default product type-product post-2433 status-publish first instock product_cat-brennholz has-post-thumbnail shipping-taxable purchasable product-type-simple\">\n<div class=\"product-inner\">\n\t\n\t<div class=\"product-image\">\n\n\t\t<a  href=\"https:\/\/www.holzelektro.com\/ref\/brennholz-buche-25-cm-1-rm\/\" aria-label=\"product\">\n\t\t\t<div class=\"inner img-effect\"><img width=\"300\" height=\"300\" src=\"https:\/\/www.holzelektro.com\/wp-content\/uploads\/2022\/07\/Brennholz-Buche-20-25-cm-1-Raummeter-Palette-1-300x300.jpg\" class=\" wp-post-image\" alt=\"\" \/><img width=\"300\" height=\"300\" src=\"https:\/\/www.holzelektro.com\/wp-content\/uploads\/2022\/07\/Brennholz-Buche-20-25-cm-1-Raummeter-Palette-2-300x300.jpg\" class=\"hover-image\" alt=\"\" loading=\"lazy\" \/><\/div>\t\t<\/a>\n\t\t<a href=\"https:\/\/www.holzelektro.com?id=2433&#038;action=yith-woocompare-view-table\" class=\"compare yith-compare on-image added\" title=\"Already Added\" data-product_id=\"2433\">Already Added<\/a>\t<\/div>\n\n\t<div class=\"product-content\">\n\t\t\n\t\t\t<a class=\"product-loop-title\"  href=\"https:\/\/www.holzelektro.com\/ref\/brennholz-buche-25-cm-1-rm\/\">\n\t<h3 class=\"woocommerce-loop-product__title\">Brennholz Buche 25 cm 1 RM<\/h3>\t<\/a>\n\t\n\t\t\n\n<div class=\"rating-wrap\">\n\t<div class=\"rating-content\"><div class=\"star-rating\" title=\"0\"><span style=\"width:0%\"><strong class=\"rating\">0<\/strong> out of 5<\/span><\/div><\/div>\n<\/div>\n\n\n\t<span class=\"price\"><span class=\"woocommerce-Price-amount amount\"><bdi>259,00<span class=\"woocommerce-Price-currencySymbol\">&euro;<\/span><\/bdi><\/span><\/span>\n\n\t\t<div class=\"add-links-wrap\">\n\t<div class=\"add-links clearfix\">\n\t\t<a href=\"?add-to-cart=2433\" data-quantity=\"1\" class=\"viewcart-style-2 button product_type_simple add_to_cart_button ajax_add_to_cart\" data-product_id=\"2433\" data-product_sku=\"\" aria-label=\"\u201eBrennholz Buche 25 cm 1 RM\u201c zu deinem Warenkorb hinzuf\u00fcgen\" rel=\"nofollow\">In den Warenkorb<\/a>\n<div\n\tclass=\"yith-wcwl-add-to-wishlist add-to-wishlist-2433  wishlist-fragment on-first-load\"\n\tdata-fragment-ref=\"2433\"\n\tdata-fragment-options=\"{&quot;base_url&quot;:&quot;&quot;,&quot;in_default_wishlist&quot;:false,&quot;is_single&quot;:true,&quot;show_exists&quot;:false,&quot;product_id&quot;:2433,&quot;parent_product_id&quot;:2433,&quot;product_type&quot;:&quot;simple&quot;,&quot;show_view&quot;:true,&quot;browse_wishlist_text&quot;:&quot;Wunschliste durchsuchen&quot;,&quot;already_in_wishslist_text&quot;:&quot;Das Produkt ist bereits auf Ihrer Wunschliste!&quot;,&quot;product_added_text&quot;:&quot;Produkt hinzugef\\u00fcgt!&quot;,&quot;heading_icon&quot;:&quot;fa-heart-o&quot;,&quot;available_multi_wishlist&quot;:false,&quot;disable_wishlist&quot;:false,&quot;show_count&quot;:false,&quot;ajax_loading&quot;:false,&quot;loop_position&quot;:&quot;after_add_to_cart&quot;,&quot;item&quot;:&quot;add_to_wishlist&quot;}\"\n>\n\t\t\t\n\t\t\t<!-- ADD TO WISHLIST -->\n\t\t\t\n<div class=\"yith-wcwl-add-button\">\n\t\t<a\n\t\thref=\"?add_to_wishlist=2433&#038;_wpnonce=200850d838\"\n\t\tclass=\"add_to_wishlist single_add_to_wishlist\"\n\t\tdata-product-id=\"2433\"\n\t\tdata-product-type=\"simple\"\n\t\tdata-original-product-id=\"2433\"\n\t\tdata-title=\"Zur Wunschliste hinzuf\u00fcgen\"\n\t\trel=\"nofollow\"\n\t>\n\t\t<i class=\"yith-wcwl-icon fa fa-heart-o\"><\/i>\t\t<span>Zur Wunschliste hinzuf\u00fcgen<\/span>\n\t<\/a>\n<\/div>\n\n\t\t\t<!-- COUNT TEXT -->\n\t\t\t\n\t\t\t<\/div>\n<div class=\"quickview\" data-id=\"2433\" title=\"Quick View\">Quick View<\/div><a href=\"https:\/\/www.holzelektro.com?id=2433&#038;action=yith-woocompare-view-table\" class=\"compare yith-compare button added\" title=\"Already Added\" data-product_id=\"2433\">Already Added<\/a>\t<\/div>\n\t<\/div>\n\t<\/div>\n<\/div>\n<\/li>\n\n<li class=\"product-col product-default product type-product post-2642 status-publish instock product_cat-klimageraete has-post-thumbnail shipping-taxable purchasable product-type-simple\">\n<div class=\"product-inner\">\n\t\n\t<div class=\"product-image\">\n\n\t\t<a  href=\"https:\/\/www.holzelektro.com\/ref\/home-deluxe-mokli-xl-mobile-klimaanlage-4-in-1-klimageraet\/\" aria-label=\"product\">\n\t\t\t<div class=\"inner img-effect\"><img width=\"300\" height=\"300\" src=\"https:\/\/www.holzelektro.com\/wp-content\/uploads\/2022\/07\/HOME-DELUXE-MOKLI-XL-Mobile-Klimaanlage-4-in-1-Klimagerat-1-300x300.jpg\" class=\" wp-post-image\" alt=\"\" loading=\"lazy\" \/><img width=\"300\" height=\"300\" src=\"https:\/\/www.holzelektro.com\/wp-content\/uploads\/2022\/07\/HOME-DELUXE-MOKLI-XL-Mobile-Klimaanlage-4-in-1-Klimagerat-2-300x300.jpg\" class=\"hover-image\" alt=\"\" loading=\"lazy\" \/><\/div>\t\t<\/a>\n\t\t<a href=\"https:\/\/www.holzelektro.com?id=2642&#038;action=yith-woocompare-add-product\" class=\"compare yith-compare on-image\" title=\"Vergleicher\" data-product_id=\"2642\">Vergleicher<\/a>\t<\/div>\n\n\t<div class=\"product-content\">\n\t\t\n\t\t\t<a class=\"product-loop-title\"  href=\"https:\/\/www.holzelektro.com\/ref\/home-deluxe-mokli-xl-mobile-klimaanlage-4-in-1-klimageraet\/\">\n\t<h3 class=\"woocommerce-loop-product__title\">HOME DELUXE MOKLI XL &#8211; Mobile Klimaanlage, 4-in-1-Klimager\u00e4t<\/h3>\t<\/a>\n\t\n\t\t\n\n<div class=\"rating-wrap\">\n\t<div class=\"rating-content\"><div class=\"star-rating\" title=\"0\"><span style=\"width:0%\"><strong class=\"rating\">0<\/strong> out of 5<\/span><\/div><\/div>\n<\/div>\n\n\n\t<span class=\"price\"><span class=\"woocommerce-Price-amount amount\"><bdi>269,00<span class=\"woocommerce-Price-currencySymbol\">&euro;<\/span><\/bdi><\/span><\/span>\n\n\t\t<div class=\"add-links-wrap\">\n\t<div class=\"add-links clearfix\">\n\t\t<a href=\"?add-to-cart=2642\" data-quantity=\"1\" class=\"viewcart-style-2 button product_type_simple add_to_cart_button ajax_add_to_cart\" data-product_id=\"2642\" data-product_sku=\"\" aria-label=\"\u201eHOME DELUXE MOKLI XL - Mobile Klimaanlage, 4-in-1-Klimager\u00e4t\u201c zu deinem Warenkorb hinzuf\u00fcgen\" rel=\"nofollow\">In den Warenkorb<\/a>\n<div\n\tclass=\"yith-wcwl-add-to-wishlist add-to-wishlist-2642  wishlist-fragment on-first-load\"\n\tdata-fragment-ref=\"2642\"\n\tdata-fragment-options=\"{&quot;base_url&quot;:&quot;&quot;,&quot;in_default_wishlist&quot;:false,&quot;is_single&quot;:true,&quot;show_exists&quot;:false,&quot;product_id&quot;:2642,&quot;parent_product_id&quot;:2642,&quot;product_type&quot;:&quot;simple&quot;,&quot;show_view&quot;:true,&quot;browse_wishlist_text&quot;:&quot;Wunschliste durchsuchen&quot;,&quot;already_in_wishslist_text&quot;:&quot;Das Produkt ist bereits auf Ihrer Wunschliste!&quot;,&quot;product_added_text&quot;:&quot;Produkt hinzugef\\u00fcgt!&quot;,&quot;heading_icon&quot;:&quot;fa-heart-o&quot;,&quot;available_multi_wishlist&quot;:false,&quot;disable_wishlist&quot;:false,&quot;show_count&quot;:false,&quot;ajax_loading&quot;:false,&quot;loop_position&quot;:&quot;after_add_to_cart&quot;,&quot;item&quot;:&quot;add_to_wishlist&quot;}\"\n>\n\t\t\t\n\t\t\t<!-- ADD TO WISHLIST -->\n\t\t\t\n<div class=\"yith-wcwl-add-button\">\n\t\t<a\n\t\thref=\"?add_to_wishlist=2642&#038;_wpnonce=200850d838\"\n\t\tclass=\"add_to_wishlist single_add_to_wishlist\"\n\t\tdata-product-id=\"2642\"\n\t\tdata-product-type=\"simple\"\n\t\tdata-original-product-id=\"2642\"\n\t\tdata-title=\"Zur Wunschliste hinzuf\u00fcgen\"\n\t\trel=\"nofollow\"\n\t>\n\t\t<i class=\"yith-wcwl-icon fa fa-heart-o\"><\/i>\t\t<span>Zur Wunschliste hinzuf\u00fcgen<\/span>\n\t<\/a>\n<\/div>\n\n\t\t\t<!-- COUNT TEXT -->\n\t\t\t\n\t\t\t<\/div>\n<div class=\"quickview\" data-id=\"2642\" title=\"Quick View\">Quick View<\/div><a href=\"https:\/\/www.holzelektro.com?id=2642&#038;action=yith-woocompare-add-product\" class=\"compare yith-compare button\" title=\"Vergleicher\" data-product_id=\"2642\">Vergleicher<\/a>\t<\/div>\n\t<\/div>\n\t<\/div>\n<\/div>\n<\/li>\n\n<li class=\"product-col product-default product type-product post-2666 status-publish instock product_cat-klimageraete has-post-thumbnail shipping-taxable purchasable product-type-simple\">\n<div class=\"product-inner\">\n\t\n\t<div class=\"product-image\">\n\n\t\t<a  href=\"https:\/\/www.holzelektro.com\/ref\/aeg-axp35u538cw-chillflex-pro-mobiles-klimageraet\/\" aria-label=\"product\">\n\t\t\t<div class=\"inner img-effect\"><img width=\"300\" height=\"300\" src=\"https:\/\/www.holzelektro.com\/wp-content\/uploads\/2022\/07\/AEG-AXP35U538CW-ChillFlex-Pro-Mobiles-Klimagerat-1-300x300.jpg\" class=\" wp-post-image\" alt=\"\" loading=\"lazy\" \/><img width=\"300\" height=\"300\" src=\"https:\/\/www.holzelektro.com\/wp-content\/uploads\/2022\/07\/AEG-AXP35U538CW-ChillFlex-Pro-Mobiles-Klimagerat-2-300x300.jpg\" class=\"hover-image\" alt=\"\" loading=\"lazy\" \/><\/div>\t\t<\/a>\n\t\t<a href=\"https:\/\/www.holzelektro.com?id=2666&#038;action=yith-woocompare-add-product\" class=\"compare yith-compare on-image\" title=\"Vergleicher\" data-product_id=\"2666\">Vergleicher<\/a>\t<\/div>\n\n\t<div class=\"product-content\">\n\t\t\n\t\t\t<a class=\"product-loop-title\"  href=\"https:\/\/www.holzelektro.com\/ref\/aeg-axp35u538cw-chillflex-pro-mobiles-klimageraet\/\">\n\t<h3 class=\"woocommerce-loop-product__title\">AEG AXP35U538CW ChillFlex Pro Mobiles Klimager\u00e4t<\/h3>\t<\/a>\n\t\n\t\t\n\n<div class=\"rating-wrap\">\n\t<div class=\"rating-content\"><div class=\"star-rating\" title=\"0\"><span style=\"width:0%\"><strong class=\"rating\">0<\/strong> out of 5<\/span><\/div><\/div>\n<\/div>\n\n\n\t<span class=\"price\"><span class=\"woocommerce-Price-amount amount\"><bdi>349,00<span class=\"woocommerce-Price-currencySymbol\">&euro;<\/span><\/bdi><\/span><\/span>\n\n\t\t<div class=\"add-links-wrap\">\n\t<div class=\"add-links clearfix\">\n\t\t<a href=\"?add-to-cart=2666\" data-quantity=\"1\" class=\"viewcart-style-2 button product_type_simple add_to_cart_button ajax_add_to_cart\" data-product_id=\"2666\" data-product_sku=\"\" aria-label=\"\u201eAEG AXP35U538CW ChillFlex Pro Mobiles Klimager\u00e4t\u201c zu deinem Warenkorb hinzuf\u00fcgen\" rel=\"nofollow\">In den Warenkorb<\/a>\n<div\n\tclass=\"yith-wcwl-add-to-wishlist add-to-wishlist-2666  wishlist-fragment on-first-load\"\n\tdata-fragment-ref=\"2666\"\n\tdata-fragment-options=\"{&quot;base_url&quot;:&quot;&quot;,&quot;in_default_wishlist&quot;:false,&quot;is_single&quot;:true,&quot;show_exists&quot;:false,&quot;product_id&quot;:2666,&quot;parent_product_id&quot;:2666,&quot;product_type&quot;:&quot;simple&quot;,&quot;show_view&quot;:true,&quot;browse_wishlist_text&quot;:&quot;Wunschliste durchsuchen&quot;,&quot;already_in_wishslist_text&quot;:&quot;Das Produkt ist bereits auf Ihrer Wunschliste!&quot;,&quot;product_added_text&quot;:&quot;Produkt hinzugef\\u00fcgt!&quot;,&quot;heading_icon&quot;:&quot;fa-heart-o&quot;,&quot;available_multi_wishlist&quot;:false,&quot;disable_wishlist&quot;:false,&quot;show_count&quot;:false,&quot;ajax_loading&quot;:false,&quot;loop_position&quot;:&quot;after_add_to_cart&quot;,&quot;item&quot;:&quot;add_to_wishlist&quot;}\"\n>\n\t\t\t\n\t\t\t<!-- ADD TO WISHLIST -->\n\t\t\t\n<div class=\"yith-wcwl-add-button\">\n\t\t<a\n\t\thref=\"?add_to_wishlist=2666&#038;_wpnonce=200850d838\"\n\t\tclass=\"add_to_wishlist single_add_to_wishlist\"\n\t\tdata-product-id=\"2666\"\n\t\tdata-product-type=\"simple\"\n\t\tdata-original-product-id=\"2666\"\n\t\tdata-title=\"Zur Wunschliste hinzuf\u00fcgen\"\n\t\trel=\"nofollow\"\n\t>\n\t\t<i class=\"yith-wcwl-icon fa fa-heart-o\"><\/i>\t\t<span>Zur Wunschliste hinzuf\u00fcgen<\/span>\n\t<\/a>\n<\/div>\n\n\t\t\t<!-- COUNT TEXT -->\n\t\t\t\n\t\t\t<\/div>\n<div class=\"quickview\" data-id=\"2666\" title=\"Quick View\">Quick View<\/div><a href=\"https:\/\/www.holzelektro.com?id=2666&#038;action=yith-woocompare-add-product\" class=\"compare yith-compare button\" title=\"Vergleicher\" data-product_id=\"2666\">Vergleicher<\/a>\t<\/div>\n\t<\/div>\n\t<\/div>\n<\/div>\n<\/li>\n\n<li class=\"product-col product-default product type-product post-2641 status-publish instock product_cat-klimageraete has-post-thumbnail shipping-taxable purchasable product-type-simple\">\n<div class=\"product-inner\">\n\t\n\t<div class=\"product-image\">\n\n\t\t<a  href=\"https:\/\/www.holzelektro.com\/ref\/delonghi-pac-n82-eco-mobiles-klimageraet-eek-a\/\" aria-label=\"product\">\n\t\t\t<div class=\"inner img-effect\"><img width=\"300\" height=\"300\" src=\"https:\/\/www.holzelektro.com\/wp-content\/uploads\/2022\/07\/DELONGHI-PAC-N82-ECO-Mobiles-Klimagerat-EEK-A-1-300x300.jpg\" class=\" wp-post-image\" alt=\"\" loading=\"lazy\" \/><img width=\"300\" height=\"300\" src=\"https:\/\/www.holzelektro.com\/wp-content\/uploads\/2022\/07\/DELONGHI-PAC-N82-ECO-Mobiles-Klimagerat-EEK-A-2-300x300.jpg\" class=\"hover-image\" alt=\"\" loading=\"lazy\" \/><\/div>\t\t<\/a>\n\t\t<a href=\"https:\/\/www.holzelektro.com?id=2641&#038;action=yith-woocompare-add-product\" class=\"compare yith-compare on-image\" title=\"Vergleicher\" data-product_id=\"2641\">Vergleicher<\/a>\t<\/div>\n\n\t<div class=\"product-content\">\n\t\t\n\t\t\t<a class=\"product-loop-title\"  href=\"https:\/\/www.holzelektro.com\/ref\/delonghi-pac-n82-eco-mobiles-klimageraet-eek-a\/\">\n\t<h3 class=\"woocommerce-loop-product__title\">DELONGHI PAC N82 ECO, Mobiles Klimager\u00e4t, EEK: A<\/h3>\t<\/a>\n\t\n\t\t\n\n<div class=\"rating-wrap\">\n\t<div class=\"rating-content\"><div class=\"star-rating\" title=\"0\"><span style=\"width:0%\"><strong class=\"rating\">0<\/strong> out of 5<\/span><\/div><\/div>\n<\/div>\n\n\n\t<span class=\"price\"><span class=\"woocommerce-Price-amount amount\"><bdi>379,00<span class=\"woocommerce-Price-currencySymbol\">&euro;<\/span><\/bdi><\/span><\/span>\n\n\t\t<div class=\"add-links-wrap\">\n\t<div class=\"add-links clearfix\">\n\t\t<a href=\"?add-to-cart=2641\" data-quantity=\"1\" class=\"viewcart-style-2 button product_type_simple add_to_cart_button ajax_add_to_cart\" data-product_id=\"2641\" data-product_sku=\"\" aria-label=\"\u201eDELONGHI PAC N82 ECO, Mobiles Klimager\u00e4t, EEK: A\u201c zu deinem Warenkorb hinzuf\u00fcgen\" rel=\"nofollow\">In den Warenkorb<\/a>\n<div\n\tclass=\"yith-wcwl-add-to-wishlist add-to-wishlist-2641  wishlist-fragment on-first-load\"\n\tdata-fragment-ref=\"2641\"\n\tdata-fragment-options=\"{&quot;base_url&quot;:&quot;&quot;,&quot;in_default_wishlist&quot;:false,&quot;is_single&quot;:true,&quot;show_exists&quot;:false,&quot;product_id&quot;:2641,&quot;parent_product_id&quot;:2641,&quot;product_type&quot;:&quot;simple&quot;,&quot;show_view&quot;:true,&quot;browse_wishlist_text&quot;:&quot;Wunschliste durchsuchen&quot;,&quot;already_in_wishslist_text&quot;:&quot;Das Produkt ist bereits auf Ihrer Wunschliste!&quot;,&quot;product_added_text&quot;:&quot;Produkt hinzugef\\u00fcgt!&quot;,&quot;heading_icon&quot;:&quot;fa-heart-o&quot;,&quot;available_multi_wishlist&quot;:false,&quot;disable_wishlist&quot;:false,&quot;show_count&quot;:false,&quot;ajax_loading&quot;:false,&quot;loop_position&quot;:&quot;after_add_to_cart&quot;,&quot;item&quot;:&quot;add_to_wishlist&quot;}\"\n>\n\t\t\t\n\t\t\t<!-- ADD TO WISHLIST -->\n\t\t\t\n<div class=\"yith-wcwl-add-button\">\n\t\t<a\n\t\thref=\"?add_to_wishlist=2641&#038;_wpnonce=200850d838\"\n\t\tclass=\"add_to_wishlist single_add_to_wishlist\"\n\t\tdata-product-id=\"2641\"\n\t\tdata-product-type=\"simple\"\n\t\tdata-original-product-id=\"2641\"\n\t\tdata-title=\"Zur Wunschliste hinzuf\u00fcgen\"\n\t\trel=\"nofollow\"\n\t>\n\t\t<i class=\"yith-wcwl-icon fa fa-heart-o\"><\/i>\t\t<span>Zur Wunschliste hinzuf\u00fcgen<\/span>\n\t<\/a>\n<\/div>\n\n\t\t\t<!-- COUNT TEXT -->\n\t\t\t\n\t\t\t<\/div>\n<div class=\"quickview\" data-id=\"2641\" title=\"Quick View\">Quick View<\/div><a href=\"https:\/\/www.holzelektro.com?id=2641&#038;action=yith-woocompare-add-product\" class=\"compare yith-compare button\" title=\"Vergleicher\" data-product_id=\"2641\">Vergleicher<\/a>\t<\/div>\n\t<\/div>\n\t<\/div>\n<\/div>\n<\/li>\n\n<li class=\"product-col product-default product type-product post-2664 status-publish last instock product_cat-klimageraete has-post-thumbnail shipping-taxable purchasable product-type-simple\">\n<div class=\"product-inner\">\n\t\n\t<div class=\"product-image\">\n\n\t\t<a  href=\"https:\/\/www.holzelektro.com\/ref\/comfee-mpph-09crn7-mobile-klimaanlage-bis-32m%c2%b2-weiss\/\" aria-label=\"product\">\n\t\t\t<div class=\"inner img-effect\"><img width=\"300\" height=\"300\" src=\"https:\/\/www.holzelektro.com\/wp-content\/uploads\/2022\/07\/Comfee-MPPH-09CRN7-Mobile-Klimaanlage-bis-32m\u00b2-weis-1-300x300.jpg\" class=\" wp-post-image\" alt=\"\" loading=\"lazy\" \/><img width=\"300\" height=\"300\" src=\"https:\/\/www.holzelektro.com\/wp-content\/uploads\/2022\/07\/Comfee-MPPH-09CRN7-Mobile-Klimaanlage-bis-32m\u00b2-weis-2-300x300.jpg\" class=\"hover-image\" alt=\"\" loading=\"lazy\" \/><\/div>\t\t<\/a>\n\t\t<a href=\"https:\/\/www.holzelektro.com?id=2664&#038;action=yith-woocompare-add-product\" class=\"compare yith-compare on-image\" title=\"Vergleicher\" data-product_id=\"2664\">Vergleicher<\/a>\t<\/div>\n\n\t<div class=\"product-content\">\n\t\t\n\t\t\t<a class=\"product-loop-title\"  href=\"https:\/\/www.holzelektro.com\/ref\/comfee-mpph-09crn7-mobile-klimaanlage-bis-32m%c2%b2-weiss\/\">\n\t<h3 class=\"woocommerce-loop-product__title\">Comfee MPPH-09CRN7 Mobile Klimaanlage, bis 32m\u00b2, wei\u00df<\/h3>\t<\/a>\n\t\n\t\t\n\n<div class=\"rating-wrap\">\n\t<div class=\"rating-content\"><div class=\"star-rating\" title=\"0\"><span style=\"width:0%\"><strong class=\"rating\">0<\/strong> out of 5<\/span><\/div><\/div>\n<\/div>\n\n\n\t<span class=\"price\"><span class=\"woocommerce-Price-amount amount\"><bdi>179,00<span class=\"woocommerce-Price-currencySymbol\">&euro;<\/span><\/bdi><\/span><\/span>\n\n\t\t<div class=\"add-links-wrap\">\n\t<div class=\"add-links clearfix\">\n\t\t<a href=\"?add-to-cart=2664\" data-quantity=\"1\" class=\"viewcart-style-2 button product_type_simple add_to_cart_button ajax_add_to_cart\" data-product_id=\"2664\" data-product_sku=\"\" aria-label=\"\u201eComfee MPPH-09CRN7 Mobile Klimaanlage, bis 32m\u00b2, wei\u00df\u201c zu deinem Warenkorb hinzuf\u00fcgen\" rel=\"nofollow\">In den Warenkorb<\/a>\n<div\n\tclass=\"yith-wcwl-add-to-wishlist add-to-wishlist-2664  wishlist-fragment on-first-load\"\n\tdata-fragment-ref=\"2664\"\n\tdata-fragment-options=\"{&quot;base_url&quot;:&quot;&quot;,&quot;in_default_wishlist&quot;:false,&quot;is_single&quot;:true,&quot;show_exists&quot;:false,&quot;product_id&quot;:2664,&quot;parent_product_id&quot;:2664,&quot;product_type&quot;:&quot;simple&quot;,&quot;show_view&quot;:true,&quot;browse_wishlist_text&quot;:&quot;Wunschliste durchsuchen&quot;,&quot;already_in_wishslist_text&quot;:&quot;Das Produkt ist bereits auf Ihrer Wunschliste!&quot;,&quot;product_added_text&quot;:&quot;Produkt hinzugef\\u00fcgt!&quot;,&quot;heading_icon&quot;:&quot;fa-heart-o&quot;,&quot;available_multi_wishlist&quot;:false,&quot;disable_wishlist&quot;:false,&quot;show_count&quot;:false,&quot;ajax_loading&quot;:false,&quot;loop_position&quot;:&quot;after_add_to_cart&quot;,&quot;item&quot;:&quot;add_to_wishlist&quot;}\"\n>\n\t\t\t\n\t\t\t<!-- ADD TO WISHLIST -->\n\t\t\t\n<div class=\"yith-wcwl-add-button\">\n\t\t<a\n\t\thref=\"?add_to_wishlist=2664&#038;_wpnonce=200850d838\"\n\t\tclass=\"add_to_wishlist single_add_to_wishlist\"\n\t\tdata-product-id=\"2664\"\n\t\tdata-product-type=\"simple\"\n\t\tdata-original-product-id=\"2664\"\n\t\tdata-title=\"Zur Wunschliste hinzuf\u00fcgen\"\n\t\trel=\"nofollow\"\n\t>\n\t\t<i class=\"yith-wcwl-icon fa fa-heart-o\"><\/i>\t\t<span>Zur Wunschliste hinzuf\u00fcgen<\/span>\n\t<\/a>\n<\/div>\n\n\t\t\t<!-- COUNT TEXT -->\n\t\t\t\n\t\t\t<\/div>\n<div class=\"quickview\" data-id=\"2664\" title=\"Quick View\">Quick View<\/div><a href=\"https:\/\/www.holzelektro.com?id=2664&#038;action=yith-woocompare-add-product\" class=\"compare yith-compare button\" title=\"Vergleicher\" data-product_id=\"2664\">Vergleicher<\/a>\t<\/div>\n\t<\/div>\n\t<\/div>\n<\/div>\n<\/li>\n\n<li class=\"product-col product-default product type-product post-2524 status-publish first instock product_cat-brennholz has-post-thumbnail shipping-taxable purchasable product-type-simple\">\n<div class=\"product-inner\">\n\t\n\t<div class=\"product-image\">\n\n\t\t<a  href=\"https:\/\/www.holzelektro.com\/ref\/brennholz-laubholzmix-25-cm-2-rm\/\" aria-label=\"product\">\n\t\t\t<div class=\"inner img-effect\"><img width=\"300\" height=\"300\" src=\"https:\/\/www.holzelektro.com\/wp-content\/uploads\/2022\/07\/Brennholz-Laubholzmix-25-cm-2-RM-1-300x300.jpg\" class=\" wp-post-image\" alt=\"\" loading=\"lazy\" \/><img width=\"300\" height=\"300\" src=\"https:\/\/www.holzelektro.com\/wp-content\/uploads\/2022\/07\/Brennholz-Laubholzmix-25-cm-2-RM-2-300x300.jpg\" class=\"hover-image\" alt=\"\" loading=\"lazy\" \/><\/div>\t\t<\/a>\n\t\t<a href=\"https:\/\/www.holzelektro.com?id=2524&#038;action=yith-woocompare-add-product\" class=\"compare yith-compare on-image\" title=\"Vergleicher\" data-product_id=\"2524\">Vergleicher<\/a>\t<\/div>\n\n\t<div class=\"product-content\">\n\t\t\n\t\t\t<a class=\"product-loop-title\"  href=\"https:\/\/www.holzelektro.com\/ref\/brennholz-laubholzmix-25-cm-2-rm\/\">\n\t<h3 class=\"woocommerce-loop-product__title\">Brennholz Laubholzmix 25 cm 2 RM<\/h3>\t<\/a>\n\t\n\t\t\n\n<div class=\"rating-wrap\">\n\t<div class=\"rating-content\"><div class=\"star-rating\" title=\"0\"><span style=\"width:0%\"><strong class=\"rating\">0<\/strong> out of 5<\/span><\/div><\/div>\n<\/div>\n\n\n\t<span class=\"price\"><span class=\"woocommerce-Price-amount amount\"><bdi>399,00<span class=\"woocommerce-Price-currencySymbol\">&euro;<\/span><\/bdi><\/span><\/span>\n\n\t\t<div class=\"add-links-wrap\">\n\t<div class=\"add-links clearfix\">\n\t\t<a href=\"?add-to-cart=2524\" data-quantity=\"1\" class=\"viewcart-style-2 button product_type_simple add_to_cart_button ajax_add_to_cart\" data-product_id=\"2524\" data-product_sku=\"\" aria-label=\"\u201eBrennholz Laubholzmix 25 cm 2 RM\u201c zu deinem Warenkorb hinzuf\u00fcgen\" rel=\"nofollow\">In den Warenkorb<\/a>\n<div\n\tclass=\"yith-wcwl-add-to-wishlist add-to-wishlist-2524 exists wishlist-fragment on-first-load\"\n\tdata-fragment-ref=\"2524\"\n\tdata-fragment-options=\"{&quot;base_url&quot;:&quot;&quot;,&quot;in_default_wishlist&quot;:true,&quot;is_single&quot;:true,&quot;show_exists&quot;:false,&quot;product_id&quot;:2524,&quot;parent_product_id&quot;:2524,&quot;product_type&quot;:&quot;simple&quot;,&quot;show_view&quot;:true,&quot;browse_wishlist_text&quot;:&quot;Wunschliste durchsuchen&quot;,&quot;already_in_wishslist_text&quot;:&quot;Das Produkt ist bereits auf Ihrer Wunschliste!&quot;,&quot;product_added_text&quot;:&quot;Produkt hinzugef\\u00fcgt!&quot;,&quot;heading_icon&quot;:&quot;fa-heart-o&quot;,&quot;available_multi_wishlist&quot;:false,&quot;disable_wishlist&quot;:false,&quot;show_count&quot;:false,&quot;ajax_loading&quot;:false,&quot;loop_position&quot;:&quot;after_add_to_cart&quot;,&quot;item&quot;:&quot;add_to_wishlist&quot;}\"\n>\n\t\t\t\n\t\t\t<!-- ADD TO WISHLIST -->\n\t\t\t\n<!-- BROWSE WISHLIST MESSAGE -->\n<div class=\"yith-wcwl-wishlistexistsbrowse\" data-product-id=\"2524\" data-original-product-id=\"2524\">\n\t<span class=\"feedback\">\n\t\t<i class=\"yith-wcwl-icon fa fa-heart\"><\/i>\t\tDas Produkt ist bereits auf Ihrer Wunschliste!\t<\/span>\n\t<a href=\"https:\/\/www.holzelektro.com\/merkzettel\/\" rel=\"nofollow\" data-title=\"Wunschliste durchsuchen\">\n\t\t\t\tWunschliste durchsuchen\t<\/a>\n<\/div>\n\n\t\t\t<!-- COUNT TEXT -->\n\t\t\t\n\t\t\t<\/div>\n<div class=\"quickview\" data-id=\"2524\" title=\"Quick View\">Quick View<\/div><a href=\"https:\/\/www.holzelektro.com?id=2524&#038;action=yith-woocompare-add-product\" class=\"compare yith-compare button\" title=\"Vergleicher\" data-product_id=\"2524\">Vergleicher<\/a>\t<\/div>\n\t<\/div>\n\t<\/div>\n<\/div>\n<\/li>\n<\/ul>\n\t\t\t\t<\/div>\n\n\t\t\t\n\t\t\t\t<div class=\"tab-content\" id=\"tab-wcfm_policies_tab\">\n\t\t\t\t\t\t\t<div class=\"wcfm-product-policies\">\r\n\t\t  \t\t  \r\n\t\t\t\t\t\t\r\n\t\t\t\t\t<\/div>\r\n\t\t\t\t\t\t<\/div>\n\n\t\t\t\n\t\t\t\t<div class=\"tab-content\" id=\"tab-wcfm_enquiry_tab\">\n\t\t\t\t\t\r\n\t\r\n\t<h2 class=\"wcfm-enquiries-heading\">Allgemeine Anfragen<\/h2>\r\n\t\r\n\t\t\t<p class=\"woocommerce-noreviews wcfm-noenquiries\">Bisher gibt es keine Anfragen.<\/p>\r\n\t\t\r\n\r\n\r\n\t\t\r\n\t\t\t\t<\/div>\n\n\t\t\t\t\t<\/div>\n\n\t\t\n\t\t<script>\n\t\t\t( function() {\n\t\t\t\tvar porto_init_desc_tab = function() {\n\t\t\t\t\t( function( $ ) {\n\t\t\t\t\t\tvar $tabs = $('.woocommerce-tabs-hlvni5r4');\n\n\t\t\t\t\t\tfunction init_tabs($tabs) {\n\t\t\t\t\t\t\t$tabs.easyResponsiveTabs({\n\t\t\t\t\t\t\t\ttype: 'default', \/\/Types: default, vertical, accordion\n\t\t\t\t\t\t\t\twidth: 'auto', \/\/auto or any width like 600px\n\t\t\t\t\t\t\t\tfit: true,   \/\/ 100% fit in a container\n\t\t\t\t\t\t\t\tactivate: function(event) { \/\/ Callback function if tab is switched\n\t\t\t\t\t\t\t\t}\n\t\t\t\t\t\t\t});\n\t\t\t\t\t\t}\n\t\t\t\t\t\tif (!$.fn.easyResponsiveTabs) {\n\t\t\t\t\t\t\tvar js_src = \"https:\/\/www.holzelektro.com\/wp-content\/themes\/porto\/js\/libs\/easy-responsive-tabs.min.js\";\n\t\t\t\t\t\t\tif (!$('script[src=\"' + js_src + '\"]').length) {\n\t\t\t\t\t\t\t\tvar js = document.createElement('script');\n\t\t\t\t\t\t\t\t$(js).appendTo('body').on('load', function() {\n\t\t\t\t\t\t\t\t\tinit_tabs($tabs);\n\t\t\t\t\t\t\t\t}).attr('src', js_src);\n\t\t\t\t\t\t\t}\n\t\t\t\t\t\t} else {\n\t\t\t\t\t\t\tinit_tabs($tabs);\n\t\t\t\t\t\t}\n\n\t\t\t\t\t\tvar $review_content = $tabs.find('#tab-reviews'),\n\t\t\t\t\t\t\t$review_title1 = $tabs.find('h2[aria-controls=tab_item-1]'),\n\t\t\t\t\t\t\t$review_title2 = $tabs.find('li[aria-controls=tab_item-1]');\n\n\t\t\t\t\t\tfunction goReviewTab(target) {\n\t\t\t\t\t\t\tvar recalc_pos = false;\n\t\t\t\t\t\t\tif ($review_content.length && $review_content.css('display') == 'none') {\n\t\t\t\t\t\t\t\trecalc_pos = true;\n\t\t\t\t\t\t\t\tif ($review_title1.length && $review_title1.css('display') != 'none')\n\t\t\t\t\t\t\t\t\t$review_title1.click();\n\t\t\t\t\t\t\t\telse if ($review_title2.length && $review_title2.closest('ul').css('display') != 'none')\n\t\t\t\t\t\t\t\t\t$review_title2.click();\n\t\t\t\t\t\t\t}\n\n\t\t\t\t\t\t\tvar delay = recalc_pos ? 400 : 0;\n\t\t\t\t\t\t\tsetTimeout(function() {\n\t\t\t\t\t\t\t\t$('html, body').stop().animate({\n\t\t\t\t\t\t\t\t\tscrollTop: target.offset().top - theme.StickyHeader.sticky_height - theme.adminBarHeight() - 14\n\t\t\t\t\t\t\t\t}, 600, 'easeOutQuad');\n\t\t\t\t\t\t\t}, delay);\n\t\t\t\t\t\t}\n\n\t\t\t\t\t\tfunction goAccordionTab(target) {\n\t\t\t\t\t\t\tsetTimeout(function() {\n\t\t\t\t\t\t\t\tvar label = target.attr('aria-controls');\n\t\t\t\t\t\t\t\tvar $tab_content = $tabs.find('.resp-tab-content[aria-labelledby=\"' + label + '\"]');\n\t\t\t\t\t\t\t\tif ($tab_content.length && $tab_content.css('display') != 'none') {\n\t\t\t\t\t\t\t\t\tvar offset = target.offset().top - theme.StickyHeader.sticky_height - theme.adminBarHeight() - 14;\n\t\t\t\t\t\t\t\t\tif (offset < $(window).scrollTop())\n\t\t\t\t\t\t\t\t\t$('html, body').stop().animate({\n\t\t\t\t\t\t\t\t\t\tscrollTop: offset\n\t\t\t\t\t\t\t\t\t}, 600, 'easeOutQuad');\n\t\t\t\t\t\t\t\t}\n\t\t\t\t\t\t\t}, 500);\n\t\t\t\t\t\t}\n\n\t\t\t\t\t\t\t\t\t\t\t\t\/\/ go to reviews, write a review\n\t\t\t\t\t\t$('.woocommerce-review-link, .woocommerce-write-review-link').on('click', function(e) {\n\t\t\t\t\t\t\tvar target = $(this.hash);\n\t\t\t\t\t\t\tif (target.length) {\n\t\t\t\t\t\t\t\te.preventDefault();\n\n\t\t\t\t\t\t\t\tgoReviewTab(target);\n\n\t\t\t\t\t\t\t\treturn false;\n\t\t\t\t\t\t\t}\n\t\t\t\t\t\t});\n\t\t\t\t\t\t\/\/ Open review form if accessed via anchor\n\t\t\t\t\t\tif ( window.location.hash == '#review_form' || window.location.hash == '#reviews' || window.location.hash.indexOf('#comment-') != -1 ) {\n\t\t\t\t\t\t\tvar target = $(window.location.hash);\n\t\t\t\t\t\t\tif (target.length) {\n\t\t\t\t\t\t\t\tgoReviewTab(target);\n\t\t\t\t\t\t\t}\n\t\t\t\t\t\t}\n\t\t\t\t\t\t\n\t\t\t\t\t\t$tabs.find('h2.resp-accordion').on('click', function(e) {\n\t\t\t\t\t\t\tgoAccordionTab($(this));\n\t\t\t\t\t\t});\n\t\t\t\t\t} )( window.jQuery );\n\t\t\t\t};\n\n\t\t\t\tif ( window.theme && theme.isLoaded ) {\n\t\t\t\t\tporto_init_desc_tab();\n\t\t\t\t} else {\n\t\t\t\t\twindow.addEventListener( 'load', porto_init_desc_tab );\n\t\t\t\t}\n\t\t\t} )();\n\t\t<\/script>\n\t\t"</script>
			</div>

			<div class="tab-content skeleton-body"></div>
	

</div><!-- #product-2652 -->



		
	</main></div>
	

</div><!-- end main content -->

<div class="sidebar-overlay"></div>

	</div>
	</div>

	<div class="related products">
		<div class="container">
							<h2 class="slider-title">Ähnliche Produkte</h2>
			
			<div class="slider-wrapper">

				<ul class="products products-container products-slider owl-carousel show-dots-title-right pcols-lg-6 pcols-md-4 pcols-xs-3 pcols-ls-2 pwidth-lg-6 pwidth-md-5 pwidth-xs-3 pwidth-ls-2"
		data-plugin-options="{&quot;themeConfig&quot;:true,&quot;lg&quot;:6,&quot;md&quot;:4,&quot;xs&quot;:3,&quot;ls&quot;:2,&quot;dots&quot;:true}" data-product_layout="product-default">

				
					
<li class="product-col product-default product type-product post-3583 status-publish first instock product_cat-luftreiniger has-post-thumbnail shipping-taxable purchasable product-type-simple">
<div class="product-inner">
	
	<div class="product-image">

		<a  href="https://www.holzelektro.com/ref/v_breath-luftreiniger-schwarz/" aria-label="product">
			<div class="inner img-effect"><img width="300" height="300" src="https://www.holzelektro.com/wp-content/uploads/2022/07/V_Breath-Luftreiniger-schwarz-1-300x300.jpg" class=" wp-post-image" alt="" loading="lazy" /><img width="300" height="300" src="https://www.holzelektro.com/wp-content/uploads/2022/07/V_Breath-Luftreiniger-schwarz-2-300x300.jpg" class="hover-image" alt="" loading="lazy" /></div>		</a>
		<a href="https://www.holzelektro.com/?id=3583&amp;action=yith-woocompare-add-product" class="compare yith-compare on-image" title="Vergleicher" data-product_id="3583">Vergleicher</a>	</div>

	<div class="product-content">
		
			<a class="product-loop-title"  href="https://www.holzelektro.com/ref/v_breath-luftreiniger-schwarz/">
	<h3 class="woocommerce-loop-product__title">V_Breath Luftreiniger, schwarz</h3>	</a>
	
		

<div class="rating-wrap">
	<div class="rating-content"><div class="star-rating" title="0"><span style="width:0%"><strong class="rating">0</strong> out of 5</span></div></div>
</div>


	<span class="price"><span class="woocommerce-Price-amount amount"><bdi>499,00<span class="woocommerce-Price-currencySymbol">&euro;</span></bdi></span></span>

		<div class="add-links-wrap">
	<div class="add-links clearfix">
		<a href="https://www.holzelektro.com/ref/philips-ac1214-10-luftreiniger-fuer-63-m²-raeume/?add-to-cart=3583" data-quantity="1" class="viewcart-style-2 button product_type_simple add_to_cart_button ajax_add_to_cart" data-product_id="3583" data-product_sku="" aria-label="„V_Breath Luftreiniger, schwarz“ zu deinem Warenkorb hinzufügen" rel="nofollow">In den Warenkorb</a>
<div
	class="yith-wcwl-add-to-wishlist add-to-wishlist-3583  wishlist-fragment on-first-load"
	data-fragment-ref="3583"
	data-fragment-options="{&quot;base_url&quot;:&quot;&quot;,&quot;in_default_wishlist&quot;:false,&quot;is_single&quot;:false,&quot;show_exists&quot;:false,&quot;product_id&quot;:3583,&quot;parent_product_id&quot;:3583,&quot;product_type&quot;:&quot;simple&quot;,&quot;show_view&quot;:false,&quot;browse_wishlist_text&quot;:&quot;Wunschliste durchsuchen&quot;,&quot;already_in_wishslist_text&quot;:&quot;Das Produkt ist bereits auf Ihrer Wunschliste!&quot;,&quot;product_added_text&quot;:&quot;Produkt hinzugef\u00fcgt!&quot;,&quot;heading_icon&quot;:&quot;fa-heart-o&quot;,&quot;available_multi_wishlist&quot;:false,&quot;disable_wishlist&quot;:false,&quot;show_count&quot;:false,&quot;ajax_loading&quot;:false,&quot;loop_position&quot;:&quot;after_add_to_cart&quot;,&quot;item&quot;:&quot;add_to_wishlist&quot;}"
>
			
			<!-- ADD TO WISHLIST -->
			
<div class="yith-wcwl-add-button">
		<a
		href="https://www.holzelektro.com/ref/philips-ac1214-10-luftreiniger-fuer-63-m²-raeume/?add_to_wishlist=3583&amp;_wpnonce=200850d838"
		class="add_to_wishlist single_add_to_wishlist"
		data-product-id="3583"
		data-product-type="simple"
		data-original-product-id="3583"
		data-title="Zur Wunschliste hinzufügen"
		rel="nofollow"
	>
		<i class="yith-wcwl-icon fa fa-heart-o"></i>		<span>Zur Wunschliste hinzufügen</span>
	</a>
</div>

			<!-- COUNT TEXT -->
			
			</div>
<div class="quickview" data-id="3583" title="Quick View">Quick View</div><a href="https://www.holzelektro.com/?id=3583&amp;action=yith-woocompare-add-product" class="compare yith-compare button" title="Vergleicher" data-product_id="3583">Vergleicher</a>	</div>
	</div>
	</div>
</div>
</li>

				
					
<li class="product-col product-default product type-product post-3581 status-publish instock product_cat-luftreiniger has-post-thumbnail shipping-taxable purchasable product-type-simple">
<div class="product-inner">
	
	<div class="product-image">

		<a  href="https://www.holzelektro.com/ref/v_breath-luftreiniger-rosegoldfarben/" aria-label="product">
			<div class="inner img-effect"><img width="300" height="300" src="https://www.holzelektro.com/wp-content/uploads/2022/07/V_Breath-Luftreiniger-rosegoldfarben-1-300x300.jpg" class=" wp-post-image" alt="" loading="lazy" /><img width="300" height="300" src="https://www.holzelektro.com/wp-content/uploads/2022/07/V_Breath-Luftreiniger-rosegoldfarben-2-300x300.jpg" class="hover-image" alt="" loading="lazy" /></div>		</a>
		<a href="https://www.holzelektro.com/?id=3581&amp;action=yith-woocompare-view-table" class="compare yith-compare on-image added" title="Already Added" data-product_id="3581">Already Added</a>	</div>

	<div class="product-content">
		
			<a class="product-loop-title"  href="https://www.holzelektro.com/ref/v_breath-luftreiniger-rosegoldfarben/">
	<h3 class="woocommerce-loop-product__title">V_Breath Luftreiniger, roségoldfarben</h3>	</a>
	
		

<div class="rating-wrap">
	<div class="rating-content"><div class="star-rating" title="0"><span style="width:0%"><strong class="rating">0</strong> out of 5</span></div></div>
</div>


	<span class="price"><span class="woocommerce-Price-amount amount"><bdi>499,00<span class="woocommerce-Price-currencySymbol">&euro;</span></bdi></span></span>

		<div class="add-links-wrap">
	<div class="add-links clearfix">
		<a href="https://www.holzelektro.com/ref/philips-ac1214-10-luftreiniger-fuer-63-m²-raeume/?add-to-cart=3581" data-quantity="1" class="viewcart-style-2 button product_type_simple add_to_cart_button ajax_add_to_cart" data-product_id="3581" data-product_sku="" aria-label="„V_Breath Luftreiniger, roségoldfarben“ zu deinem Warenkorb hinzufügen" rel="nofollow">In den Warenkorb</a>
<div
	class="yith-wcwl-add-to-wishlist add-to-wishlist-3581 exists wishlist-fragment on-first-load"
	data-fragment-ref="3581"
	data-fragment-options="{&quot;base_url&quot;:&quot;&quot;,&quot;in_default_wishlist&quot;:true,&quot;is_single&quot;:false,&quot;show_exists&quot;:false,&quot;product_id&quot;:3581,&quot;parent_product_id&quot;:3581,&quot;product_type&quot;:&quot;simple&quot;,&quot;show_view&quot;:false,&quot;browse_wishlist_text&quot;:&quot;Wunschliste durchsuchen&quot;,&quot;already_in_wishslist_text&quot;:&quot;Das Produkt ist bereits auf Ihrer Wunschliste!&quot;,&quot;product_added_text&quot;:&quot;Produkt hinzugef\u00fcgt!&quot;,&quot;heading_icon&quot;:&quot;fa-heart-o&quot;,&quot;available_multi_wishlist&quot;:false,&quot;disable_wishlist&quot;:false,&quot;show_count&quot;:false,&quot;ajax_loading&quot;:false,&quot;loop_position&quot;:&quot;after_add_to_cart&quot;,&quot;item&quot;:&quot;add_to_wishlist&quot;}"
>
			
			<!-- ADD TO WISHLIST -->
			
<!-- BROWSE WISHLIST MESSAGE -->
<div class="yith-wcwl-wishlistexistsbrowse" data-product-id="3581" data-original-product-id="3581">
	<span class="feedback">
		<i class="yith-wcwl-icon fa fa-heart"></i>		Das Produkt ist bereits auf Ihrer Wunschliste!	</span>
	<a href="https://www.holzelektro.com/merkzettel/" rel="nofollow" data-title="Wunschliste durchsuchen">
				Wunschliste durchsuchen	</a>
</div>

			<!-- COUNT TEXT -->
			
			</div>
<div class="quickview" data-id="3581" title="Quick View">Quick View</div><a href="https://www.holzelektro.com/?id=3581&amp;action=yith-woocompare-view-table" class="compare yith-compare button added" title="Already Added" data-product_id="3581">Already Added</a>	</div>
	</div>
	</div>
</div>
</li>

				
					
<li class="product-col product-default product type-product post-2659 status-publish instock product_cat-luftreiniger has-post-thumbnail shipping-taxable purchasable product-type-simple">
<div class="product-inner">
	
	<div class="product-image">

		<a  href="https://www.holzelektro.com/ref/dyson-bp01-pure-cool-me-luftreiniger-weiss-silber/" aria-label="product">
			<div class="inner img-effect"><img width="300" height="300" src="https://www.holzelektro.com/wp-content/uploads/2022/07/dyson-BP01-Pure-Cool-Me-Luftreiniger-weis-silber-1-300x300.jpg" class=" wp-post-image" alt="" loading="lazy" /><img width="300" height="300" src="https://www.holzelektro.com/wp-content/uploads/2022/07/dyson-BP01-Pure-Cool-Me-Luftreiniger-weis-silber-2-300x300.jpg" class="hover-image" alt="" loading="lazy" /></div>		</a>
		<a href="https://www.holzelektro.com/?id=2659&amp;action=yith-woocompare-view-table" class="compare yith-compare on-image added" title="Already Added" data-product_id="2659">Already Added</a>	</div>

	<div class="product-content">
		
			<a class="product-loop-title"  href="https://www.holzelektro.com/ref/dyson-bp01-pure-cool-me-luftreiniger-weiss-silber/">
	<h3 class="woocommerce-loop-product__title">dyson BP01 Pure Cool Me Luftreiniger weiß/silber</h3>	</a>
	
		

<div class="rating-wrap">
	<div class="rating-content"><div class="star-rating" title="0"><span style="width:0%"><strong class="rating">0</strong> out of 5</span></div></div>
</div>


	<span class="price"><span class="woocommerce-Price-amount amount"><bdi>169,00<span class="woocommerce-Price-currencySymbol">&euro;</span></bdi></span></span>

		<div class="add-links-wrap">
	<div class="add-links clearfix">
		<a href="https://www.holzelektro.com/ref/philips-ac1214-10-luftreiniger-fuer-63-m²-raeume/?add-to-cart=2659" data-quantity="1" class="viewcart-style-2 button product_type_simple add_to_cart_button ajax_add_to_cart" data-product_id="2659" data-product_sku="" aria-label="„dyson BP01 Pure Cool Me Luftreiniger weiß/silber“ zu deinem Warenkorb hinzufügen" rel="nofollow">In den Warenkorb</a>
<div
	class="yith-wcwl-add-to-wishlist add-to-wishlist-2659 exists wishlist-fragment on-first-load"
	data-fragment-ref="2659"
	data-fragment-options="{&quot;base_url&quot;:&quot;&quot;,&quot;in_default_wishlist&quot;:true,&quot;is_single&quot;:false,&quot;show_exists&quot;:false,&quot;product_id&quot;:2659,&quot;parent_product_id&quot;:2659,&quot;product_type&quot;:&quot;simple&quot;,&quot;show_view&quot;:false,&quot;browse_wishlist_text&quot;:&quot;Wunschliste durchsuchen&quot;,&quot;already_in_wishslist_text&quot;:&quot;Das Produkt ist bereits auf Ihrer Wunschliste!&quot;,&quot;product_added_text&quot;:&quot;Produkt hinzugef\u00fcgt!&quot;,&quot;heading_icon&quot;:&quot;fa-heart-o&quot;,&quot;available_multi_wishlist&quot;:false,&quot;disable_wishlist&quot;:false,&quot;show_count&quot;:false,&quot;ajax_loading&quot;:false,&quot;loop_position&quot;:&quot;after_add_to_cart&quot;,&quot;item&quot;:&quot;add_to_wishlist&quot;}"
>
			
			<!-- ADD TO WISHLIST -->
			
<!-- BROWSE WISHLIST MESSAGE -->
<div class="yith-wcwl-wishlistexistsbrowse" data-product-id="2659" data-original-product-id="2659">
	<span class="feedback">
		<i class="yith-wcwl-icon fa fa-heart"></i>		Das Produkt ist bereits auf Ihrer Wunschliste!	</span>
	<a href="https://www.holzelektro.com/merkzettel/" rel="nofollow" data-title="Wunschliste durchsuchen">
				Wunschliste durchsuchen	</a>
</div>

			<!-- COUNT TEXT -->
			
			</div>
<div class="quickview" data-id="2659" title="Quick View">Quick View</div><a href="https://www.holzelektro.com/?id=2659&amp;action=yith-woocompare-view-table" class="compare yith-compare button added" title="Already Added" data-product_id="2659">Already Added</a>	</div>
	</div>
	</div>
</div>
</li>

				
					
<li class="product-col product-default product type-product post-2648 status-publish last instock product_cat-luftreiniger has-post-thumbnail shipping-taxable purchasable product-type-simple">
<div class="product-inner">
	
	<div class="product-image">

		<a  href="https://www.holzelektro.com/ref/rowenta-pu6080-intense-pure-air-connect-xl-luftreiniger-fuer-140-m²-grosse-raeume/" aria-label="product">
			<div class="inner img-effect"><img width="300" height="300" src="https://www.holzelektro.com/wp-content/uploads/2022/07/Rowenta-Luftreiniger-PU6080-Intense-Pure-Air-Connect-XL-fur-140-m²-grose-Raume-1-300x300.jpg" class=" wp-post-image" alt="" loading="lazy" /><img width="300" height="300" src="https://www.holzelektro.com/wp-content/uploads/2022/07/Rowenta-Luftreiniger-PU6080-Intense-Pure-Air-Connect-XL-fur-140-m²-grose-Raume-2-300x300.jpg" class="hover-image" alt="" loading="lazy" /></div>		</a>
		<a href="https://www.holzelektro.com/?id=2648&amp;action=yith-woocompare-add-product" class="compare yith-compare on-image" title="Vergleicher" data-product_id="2648">Vergleicher</a>	</div>

	<div class="product-content">
		
			<a class="product-loop-title"  href="https://www.holzelektro.com/ref/rowenta-pu6080-intense-pure-air-connect-xl-luftreiniger-fuer-140-m²-grosse-raeume/">
	<h3 class="woocommerce-loop-product__title">Rowenta PU6080 Intense Pure Air Connect XL Luftreiniger, für 140 m² große Räume</h3>	</a>
	
		

<div class="rating-wrap">
	<div class="rating-content"><div class="star-rating" title="0"><span style="width:0%"><strong class="rating">0</strong> out of 5</span></div></div>
</div>


	<span class="price"><span class="woocommerce-Price-amount amount"><bdi>249,00<span class="woocommerce-Price-currencySymbol">&euro;</span></bdi></span></span>

		<div class="add-links-wrap">
	<div class="add-links clearfix">
		<a href="https://www.holzelektro.com/ref/philips-ac1214-10-luftreiniger-fuer-63-m²-raeume/?add-to-cart=2648" data-quantity="1" class="viewcart-style-2 button product_type_simple add_to_cart_button ajax_add_to_cart" data-product_id="2648" data-product_sku="" aria-label="„Rowenta PU6080 Intense Pure Air Connect XL Luftreiniger, für 140 m² große Räume“ zu deinem Warenkorb hinzufügen" rel="nofollow">In den Warenkorb</a>
<div
	class="yith-wcwl-add-to-wishlist add-to-wishlist-2648 exists wishlist-fragment on-first-load"
	data-fragment-ref="2648"
	data-fragment-options="{&quot;base_url&quot;:&quot;&quot;,&quot;in_default_wishlist&quot;:true,&quot;is_single&quot;:false,&quot;show_exists&quot;:false,&quot;product_id&quot;:2648,&quot;parent_product_id&quot;:2648,&quot;product_type&quot;:&quot;simple&quot;,&quot;show_view&quot;:false,&quot;browse_wishlist_text&quot;:&quot;Wunschliste durchsuchen&quot;,&quot;already_in_wishslist_text&quot;:&quot;Das Produkt ist bereits auf Ihrer Wunschliste!&quot;,&quot;product_added_text&quot;:&quot;Produkt hinzugef\u00fcgt!&quot;,&quot;heading_icon&quot;:&quot;fa-heart-o&quot;,&quot;available_multi_wishlist&quot;:false,&quot;disable_wishlist&quot;:false,&quot;show_count&quot;:false,&quot;ajax_loading&quot;:false,&quot;loop_position&quot;:&quot;after_add_to_cart&quot;,&quot;item&quot;:&quot;add_to_wishlist&quot;}"
>
			
			<!-- ADD TO WISHLIST -->
			
<!-- BROWSE WISHLIST MESSAGE -->
<div class="yith-wcwl-wishlistexistsbrowse" data-product-id="2648" data-original-product-id="2648">
	<span class="feedback">
		<i class="yith-wcwl-icon fa fa-heart"></i>		Das Produkt ist bereits auf Ihrer Wunschliste!	</span>
	<a href="https://www.holzelektro.com/merkzettel/" rel="nofollow" data-title="Wunschliste durchsuchen">
				Wunschliste durchsuchen	</a>
</div>

			<!-- COUNT TEXT -->
			
			</div>
<div class="quickview" data-id="2648" title="Quick View">Quick View</div><a href="https://www.holzelektro.com/?id=2648&amp;action=yith-woocompare-add-product" class="compare yith-compare button" title="Vergleicher" data-product_id="2648">Vergleicher</a>	</div>
	</div>
	</div>
</div>
</li>

				
					
<li class="product-col product-default product type-product post-2658 status-publish first instock product_cat-luftreiniger has-post-thumbnail shipping-taxable purchasable product-type-simple">
<div class="product-inner">
	
	<div class="product-image">

		<a  href="https://www.holzelektro.com/ref/dyson-tp02-pure-cool-link-luftreiniger-weiss-silber/" aria-label="product">
			<div class="inner img-effect"><img width="300" height="300" src="https://www.holzelektro.com/wp-content/uploads/2022/07/dyson-TP02-Pure-Cool-Link-Luftreiniger-weis-silber-1-300x300.jpg" class=" wp-post-image" alt="" loading="lazy" /><img width="300" height="300" src="https://www.holzelektro.com/wp-content/uploads/2022/07/dyson-TP02-Pure-Cool-Link-Luftreiniger-weis-silber-2-300x300.jpg" class="hover-image" alt="" loading="lazy" /></div>		</a>
		<a href="https://www.holzelektro.com/?id=2658&amp;action=yith-woocompare-view-table" class="compare yith-compare on-image added" title="Already Added" data-product_id="2658">Already Added</a>	</div>

	<div class="product-content">
		
			<a class="product-loop-title"  href="https://www.holzelektro.com/ref/dyson-tp02-pure-cool-link-luftreiniger-weiss-silber/">
	<h3 class="woocommerce-loop-product__title">dyson TP02 Pure Cool Link Luftreiniger weiß/silber</h3>	</a>
	
		

<div class="rating-wrap">
	<div class="rating-content"><div class="star-rating" title="0"><span style="width:0%"><strong class="rating">0</strong> out of 5</span></div></div>
</div>


	<span class="price"><span class="woocommerce-Price-amount amount"><bdi>499,00<span class="woocommerce-Price-currencySymbol">&euro;</span></bdi></span></span>

		<div class="add-links-wrap">
	<div class="add-links clearfix">
		<a href="https://www.holzelektro.com/ref/philips-ac1214-10-luftreiniger-fuer-63-m²-raeume/?add-to-cart=2658" data-quantity="1" class="viewcart-style-2 button product_type_simple add_to_cart_button ajax_add_to_cart" data-product_id="2658" data-product_sku="" aria-label="„dyson TP02 Pure Cool Link Luftreiniger weiß/silber“ zu deinem Warenkorb hinzufügen" rel="nofollow">In den Warenkorb</a>
<div
	class="yith-wcwl-add-to-wishlist add-to-wishlist-2658 exists wishlist-fragment on-first-load"
	data-fragment-ref="2658"
	data-fragment-options="{&quot;base_url&quot;:&quot;&quot;,&quot;in_default_wishlist&quot;:true,&quot;is_single&quot;:false,&quot;show_exists&quot;:false,&quot;product_id&quot;:2658,&quot;parent_product_id&quot;:2658,&quot;product_type&quot;:&quot;simple&quot;,&quot;show_view&quot;:false,&quot;browse_wishlist_text&quot;:&quot;Wunschliste durchsuchen&quot;,&quot;already_in_wishslist_text&quot;:&quot;Das Produkt ist bereits auf Ihrer Wunschliste!&quot;,&quot;product_added_text&quot;:&quot;Produkt hinzugef\u00fcgt!&quot;,&quot;heading_icon&quot;:&quot;fa-heart-o&quot;,&quot;available_multi_wishlist&quot;:false,&quot;disable_wishlist&quot;:false,&quot;show_count&quot;:false,&quot;ajax_loading&quot;:false,&quot;loop_position&quot;:&quot;after_add_to_cart&quot;,&quot;item&quot;:&quot;add_to_wishlist&quot;}"
>
			
			<!-- ADD TO WISHLIST -->
			
<!-- BROWSE WISHLIST MESSAGE -->
<div class="yith-wcwl-wishlistexistsbrowse" data-product-id="2658" data-original-product-id="2658">
	<span class="feedback">
		<i class="yith-wcwl-icon fa fa-heart"></i>		Das Produkt ist bereits auf Ihrer Wunschliste!	</span>
	<a href="https://www.holzelektro.com/merkzettel/" rel="nofollow" data-title="Wunschliste durchsuchen">
				Wunschliste durchsuchen	</a>
</div>

			<!-- COUNT TEXT -->
			
			</div>
<div class="quickview" data-id="2658" title="Quick View">Quick View</div><a href="https://www.holzelektro.com/?id=2658&amp;action=yith-woocompare-view-table" class="compare yith-compare button added" title="Already Added" data-product_id="2658">Already Added</a>	</div>
	</div>
	</div>
</div>
</li>

				
					
<li class="product-col product-default product type-product post-2653 status-publish instock product_cat-luftreiniger has-post-thumbnail shipping-taxable purchasable product-type-simple">
<div class="product-inner">
	
	<div class="product-image">

		<a  href="https://www.holzelektro.com/ref/philips-ac4550-10-luftreiniger-fuer-104-m²-raeume-allergiemodus/" aria-label="product">
			<div class="inner img-effect"><img width="300" height="300" src="https://www.holzelektro.com/wp-content/uploads/2022/07/Philips-AC4550-10-Luftreiniger-fur-104-m²-Raume-Allergiemodus-1-300x300.jpg" class=" wp-post-image" alt="" loading="lazy" /><img width="300" height="300" src="https://www.holzelektro.com/wp-content/uploads/2022/07/Philips-AC4550-10-Luftreiniger-fur-104-m²-Raume-Allergiemodus-2-300x300.jpg" class="hover-image" alt="" loading="lazy" /></div>		</a>
		<a href="https://www.holzelektro.com/?id=2653&amp;action=yith-woocompare-view-table" class="compare yith-compare on-image added" title="Already Added" data-product_id="2653">Already Added</a>	</div>

	<div class="product-content">
		
			<a class="product-loop-title"  href="https://www.holzelektro.com/ref/philips-ac4550-10-luftreiniger-fuer-104-m²-raeume-allergiemodus/">
	<h3 class="woocommerce-loop-product__title">Philips AC4550/10 Luftreiniger für 104 m² Räume, Allergiemodus</h3>	</a>
	
		

<div class="rating-wrap">
	<div class="rating-content"><div class="star-rating" title="0"><span style="width:0%"><strong class="rating">0</strong> out of 5</span></div></div>
</div>


	<span class="price"><span class="woocommerce-Price-amount amount"><bdi>349,00<span class="woocommerce-Price-currencySymbol">&euro;</span></bdi></span></span>

		<div class="add-links-wrap">
	<div class="add-links clearfix">
		<a href="https://www.holzelektro.com/ref/philips-ac1214-10-luftreiniger-fuer-63-m²-raeume/?add-to-cart=2653" data-quantity="1" class="viewcart-style-2 button product_type_simple add_to_cart_button ajax_add_to_cart" data-product_id="2653" data-product_sku="" aria-label="„Philips AC4550/10 Luftreiniger für 104 m² Räume, Allergiemodus“ zu deinem Warenkorb hinzufügen" rel="nofollow">In den Warenkorb</a>
<div
	class="yith-wcwl-add-to-wishlist add-to-wishlist-2653 exists wishlist-fragment on-first-load"
	data-fragment-ref="2653"
	data-fragment-options="{&quot;base_url&quot;:&quot;&quot;,&quot;in_default_wishlist&quot;:true,&quot;is_single&quot;:false,&quot;show_exists&quot;:false,&quot;product_id&quot;:2653,&quot;parent_product_id&quot;:2653,&quot;product_type&quot;:&quot;simple&quot;,&quot;show_view&quot;:false,&quot;browse_wishlist_text&quot;:&quot;Wunschliste durchsuchen&quot;,&quot;already_in_wishslist_text&quot;:&quot;Das Produkt ist bereits auf Ihrer Wunschliste!&quot;,&quot;product_added_text&quot;:&quot;Produkt hinzugef\u00fcgt!&quot;,&quot;heading_icon&quot;:&quot;fa-heart-o&quot;,&quot;available_multi_wishlist&quot;:false,&quot;disable_wishlist&quot;:false,&quot;show_count&quot;:false,&quot;ajax_loading&quot;:false,&quot;loop_position&quot;:&quot;after_add_to_cart&quot;,&quot;item&quot;:&quot;add_to_wishlist&quot;}"
>
			
			<!-- ADD TO WISHLIST -->
			
<!-- BROWSE WISHLIST MESSAGE -->
<div class="yith-wcwl-wishlistexistsbrowse" data-product-id="2653" data-original-product-id="2653">
	<span class="feedback">
		<i class="yith-wcwl-icon fa fa-heart"></i>		Das Produkt ist bereits auf Ihrer Wunschliste!	</span>
	<a href="https://www.holzelektro.com/merkzettel/" rel="nofollow" data-title="Wunschliste durchsuchen">
				Wunschliste durchsuchen	</a>
</div>

			<!-- COUNT TEXT -->
			
			</div>
<div class="quickview" data-id="2653" title="Quick View">Quick View</div><a href="https://www.holzelektro.com/?id=2653&amp;action=yith-woocompare-view-table" class="compare yith-compare button added" title="Already Added" data-product_id="2653">Already Added</a>	</div>
	</div>
	</div>
</div>
</li>

				
					
<li class="product-col product-default product type-product post-2660 status-publish instock product_cat-luftreiniger has-post-thumbnail shipping-taxable purchasable product-type-simple">
<div class="product-inner">
	
	<div class="product-image">

		<a  href="https://www.holzelektro.com/ref/dyson-dp04-pure-cool-luftreiniger-weiss-silber/" aria-label="product">
			<div class="inner img-effect"><img width="300" height="300" src="https://www.holzelektro.com/wp-content/uploads/2022/07/dyson-DP04-Pure-Cool-Luftreiniger-weis-silber-1-300x300.jpg" class=" wp-post-image" alt="" loading="lazy" /><img width="300" height="300" src="https://www.holzelektro.com/wp-content/uploads/2022/07/dyson-DP04-Pure-Cool-Luftreiniger-weis-silber-2-300x300.jpg" class="hover-image" alt="" loading="lazy" /></div>		</a>
		<a href="https://www.holzelektro.com/?id=2660&amp;action=yith-woocompare-view-table" class="compare yith-compare on-image added" title="Already Added" data-product_id="2660">Already Added</a>	</div>

	<div class="product-content">
		
			<a class="product-loop-title"  href="https://www.holzelektro.com/ref/dyson-dp04-pure-cool-luftreiniger-weiss-silber/">
	<h3 class="woocommerce-loop-product__title">dyson DP04 Pure Cool Luftreiniger weiß/silber</h3>	</a>
	
		

<div class="rating-wrap">
	<div class="rating-content"><div class="star-rating" title="0"><span style="width:0%"><strong class="rating">0</strong> out of 5</span></div></div>
</div>


	<span class="price"><span class="woocommerce-Price-amount amount"><bdi>349,00<span class="woocommerce-Price-currencySymbol">&euro;</span></bdi></span></span>

		<div class="add-links-wrap">
	<div class="add-links clearfix">
		<a href="https://www.holzelektro.com/ref/philips-ac1214-10-luftreiniger-fuer-63-m²-raeume/?add-to-cart=2660" data-quantity="1" class="viewcart-style-2 button product_type_simple add_to_cart_button ajax_add_to_cart" data-product_id="2660" data-product_sku="" aria-label="„dyson DP04 Pure Cool Luftreiniger weiß/silber“ zu deinem Warenkorb hinzufügen" rel="nofollow">In den Warenkorb</a>
<div
	class="yith-wcwl-add-to-wishlist add-to-wishlist-2660 exists wishlist-fragment on-first-load"
	data-fragment-ref="2660"
	data-fragment-options="{&quot;base_url&quot;:&quot;&quot;,&quot;in_default_wishlist&quot;:true,&quot;is_single&quot;:false,&quot;show_exists&quot;:false,&quot;product_id&quot;:2660,&quot;parent_product_id&quot;:2660,&quot;product_type&quot;:&quot;simple&quot;,&quot;show_view&quot;:false,&quot;browse_wishlist_text&quot;:&quot;Wunschliste durchsuchen&quot;,&quot;already_in_wishslist_text&quot;:&quot;Das Produkt ist bereits auf Ihrer Wunschliste!&quot;,&quot;product_added_text&quot;:&quot;Produkt hinzugef\u00fcgt!&quot;,&quot;heading_icon&quot;:&quot;fa-heart-o&quot;,&quot;available_multi_wishlist&quot;:false,&quot;disable_wishlist&quot;:false,&quot;show_count&quot;:false,&quot;ajax_loading&quot;:false,&quot;loop_position&quot;:&quot;after_add_to_cart&quot;,&quot;item&quot;:&quot;add_to_wishlist&quot;}"
>
			
			<!-- ADD TO WISHLIST -->
			
<!-- BROWSE WISHLIST MESSAGE -->
<div class="yith-wcwl-wishlistexistsbrowse" data-product-id="2660" data-original-product-id="2660">
	<span class="feedback">
		<i class="yith-wcwl-icon fa fa-heart"></i>		Das Produkt ist bereits auf Ihrer Wunschliste!	</span>
	<a href="https://www.holzelektro.com/merkzettel/" rel="nofollow" data-title="Wunschliste durchsuchen">
				Wunschliste durchsuchen	</a>
</div>

			<!-- COUNT TEXT -->
			
			</div>
<div class="quickview" data-id="2660" title="Quick View">Quick View</div><a href="https://www.holzelektro.com/?id=2660&amp;action=yith-woocompare-view-table" class="compare yith-compare button added" title="Already Added" data-product_id="2660">Already Added</a>	</div>
	</div>
	</div>
</div>
</li>

				
					
<li class="product-col product-default product type-product post-2649 status-publish last instock product_cat-luftreiniger has-post-thumbnail shipping-taxable purchasable product-type-simple">
<div class="product-inner">
	
	<div class="product-image">

		<a  href="https://www.holzelektro.com/ref/philips-ac0820-10-luftreiniger-fuer-49-m²-raeume/" aria-label="product">
			<div class="inner img-effect"><img width="300" height="300" src="https://www.holzelektro.com/wp-content/uploads/2022/07/Philips-AC0820-10-Luftreiniger-fur-49-m²-Raume-1-300x300.jpg" class=" wp-post-image" alt="" loading="lazy" /><img width="300" height="300" src="https://www.holzelektro.com/wp-content/uploads/2022/07/Philips-AC0820-10-Luftreiniger-fur-49-m²-Raume-2-300x300.jpg" class="hover-image" alt="" loading="lazy" /></div>		</a>
		<a href="https://www.holzelektro.com/?id=2649&amp;action=yith-woocompare-view-table" class="compare yith-compare on-image added" title="Already Added" data-product_id="2649">Already Added</a>	</div>

	<div class="product-content">
		
			<a class="product-loop-title"  href="https://www.holzelektro.com/ref/philips-ac0820-10-luftreiniger-fuer-49-m²-raeume/">
	<h3 class="woocommerce-loop-product__title">Philips AC0820/10 Luftreiniger, für 49 m² Räume</h3>	</a>
	
		

<div class="rating-wrap">
	<div class="rating-content"><div class="star-rating" title="0"><span style="width:0%"><strong class="rating">0</strong> out of 5</span></div></div>
</div>


	<span class="price"><span class="woocommerce-Price-amount amount"><bdi>79,00<span class="woocommerce-Price-currencySymbol">&euro;</span></bdi></span></span>

		<div class="add-links-wrap">
	<div class="add-links clearfix">
		<a href="https://www.holzelektro.com/ref/philips-ac1214-10-luftreiniger-fuer-63-m²-raeume/?add-to-cart=2649" data-quantity="1" class="viewcart-style-2 button product_type_simple add_to_cart_button ajax_add_to_cart" data-product_id="2649" data-product_sku="" aria-label="„Philips AC0820/10 Luftreiniger, für 49 m² Räume“ zu deinem Warenkorb hinzufügen" rel="nofollow">In den Warenkorb</a>
<div
	class="yith-wcwl-add-to-wishlist add-to-wishlist-2649 exists wishlist-fragment on-first-load"
	data-fragment-ref="2649"
	data-fragment-options="{&quot;base_url&quot;:&quot;&quot;,&quot;in_default_wishlist&quot;:true,&quot;is_single&quot;:false,&quot;show_exists&quot;:false,&quot;product_id&quot;:2649,&quot;parent_product_id&quot;:2649,&quot;product_type&quot;:&quot;simple&quot;,&quot;show_view&quot;:false,&quot;browse_wishlist_text&quot;:&quot;Wunschliste durchsuchen&quot;,&quot;already_in_wishslist_text&quot;:&quot;Das Produkt ist bereits auf Ihrer Wunschliste!&quot;,&quot;product_added_text&quot;:&quot;Produkt hinzugef\u00fcgt!&quot;,&quot;heading_icon&quot;:&quot;fa-heart-o&quot;,&quot;available_multi_wishlist&quot;:false,&quot;disable_wishlist&quot;:false,&quot;show_count&quot;:false,&quot;ajax_loading&quot;:false,&quot;loop_position&quot;:&quot;after_add_to_cart&quot;,&quot;item&quot;:&quot;add_to_wishlist&quot;}"
>
			
			<!-- ADD TO WISHLIST -->
			
<!-- BROWSE WISHLIST MESSAGE -->
<div class="yith-wcwl-wishlistexistsbrowse" data-product-id="2649" data-original-product-id="2649">
	<span class="feedback">
		<i class="yith-wcwl-icon fa fa-heart"></i>		Das Produkt ist bereits auf Ihrer Wunschliste!	</span>
	<a href="https://www.holzelektro.com/merkzettel/" rel="nofollow" data-title="Wunschliste durchsuchen">
				Wunschliste durchsuchen	</a>
</div>

			<!-- COUNT TEXT -->
			
			</div>
<div class="quickview" data-id="2649" title="Quick View">Quick View</div><a href="https://www.holzelektro.com/?id=2649&amp;action=yith-woocompare-view-table" class="compare yith-compare button added" title="Already Added" data-product_id="2649">Already Added</a>	</div>
	</div>
	</div>
</div>
</li>

				
					
<li class="product-col product-default product type-product post-2651 status-publish first instock product_cat-luftreiniger has-post-thumbnail shipping-taxable purchasable product-type-simple">
<div class="product-inner">
	
	<div class="product-image">

		<a  href="https://www.holzelektro.com/ref/philips-ac5659-10-luftreiniger-fuer-130-m²-raeume/" aria-label="product">
			<div class="inner img-effect"><img width="300" height="300" src="https://www.holzelektro.com/wp-content/uploads/2022/07/Philips-AC5659-10-Luftreiniger-fur-130-m²-Raume-1-300x300.jpg" class=" wp-post-image" alt="" loading="lazy" /><img width="300" height="300" src="https://www.holzelektro.com/wp-content/uploads/2022/07/Philips-AC5659-10-Luftreiniger-fur-130-m²-Raume-2-300x300.jpg" class="hover-image" alt="" loading="lazy" /></div>		</a>
		<a href="https://www.holzelektro.com/?id=2651&amp;action=yith-woocompare-view-table" class="compare yith-compare on-image added" title="Already Added" data-product_id="2651">Already Added</a>	</div>

	<div class="product-content">
		
			<a class="product-loop-title"  href="https://www.holzelektro.com/ref/philips-ac5659-10-luftreiniger-fuer-130-m²-raeume/">
	<h3 class="woocommerce-loop-product__title">Philips AC5659/10 Luftreiniger für 130 m² Räume</h3>	</a>
	
		

<div class="rating-wrap">
	<div class="rating-content"><div class="star-rating" title="0"><span style="width:0%"><strong class="rating">0</strong> out of 5</span></div></div>
</div>


	<span class="price"><span class="woocommerce-Price-amount amount"><bdi>799,00<span class="woocommerce-Price-currencySymbol">&euro;</span></bdi></span></span>

		<div class="add-links-wrap">
	<div class="add-links clearfix">
		<a href="https://www.holzelektro.com/ref/philips-ac1214-10-luftreiniger-fuer-63-m²-raeume/?add-to-cart=2651" data-quantity="1" class="viewcart-style-2 button product_type_simple add_to_cart_button ajax_add_to_cart" data-product_id="2651" data-product_sku="" aria-label="„Philips AC5659/10 Luftreiniger für 130 m² Räume“ zu deinem Warenkorb hinzufügen" rel="nofollow">In den Warenkorb</a>
<div
	class="yith-wcwl-add-to-wishlist add-to-wishlist-2651 exists wishlist-fragment on-first-load"
	data-fragment-ref="2651"
	data-fragment-options="{&quot;base_url&quot;:&quot;&quot;,&quot;in_default_wishlist&quot;:true,&quot;is_single&quot;:false,&quot;show_exists&quot;:false,&quot;product_id&quot;:2651,&quot;parent_product_id&quot;:2651,&quot;product_type&quot;:&quot;simple&quot;,&quot;show_view&quot;:false,&quot;browse_wishlist_text&quot;:&quot;Wunschliste durchsuchen&quot;,&quot;already_in_wishslist_text&quot;:&quot;Das Produkt ist bereits auf Ihrer Wunschliste!&quot;,&quot;product_added_text&quot;:&quot;Produkt hinzugef\u00fcgt!&quot;,&quot;heading_icon&quot;:&quot;fa-heart-o&quot;,&quot;available_multi_wishlist&quot;:false,&quot;disable_wishlist&quot;:false,&quot;show_count&quot;:false,&quot;ajax_loading&quot;:false,&quot;loop_position&quot;:&quot;after_add_to_cart&quot;,&quot;item&quot;:&quot;add_to_wishlist&quot;}"
>
			
			<!-- ADD TO WISHLIST -->
			
<!-- BROWSE WISHLIST MESSAGE -->
<div class="yith-wcwl-wishlistexistsbrowse" data-product-id="2651" data-original-product-id="2651">
	<span class="feedback">
		<i class="yith-wcwl-icon fa fa-heart"></i>		Das Produkt ist bereits auf Ihrer Wunschliste!	</span>
	<a href="https://www.holzelektro.com/merkzettel/" rel="nofollow" data-title="Wunschliste durchsuchen">
				Wunschliste durchsuchen	</a>
</div>

			<!-- COUNT TEXT -->
			
			</div>
<div class="quickview" data-id="2651" title="Quick View">Quick View</div><a href="https://www.holzelektro.com/?id=2651&amp;action=yith-woocompare-view-table" class="compare yith-compare button added" title="Already Added" data-product_id="2651">Already Added</a>	</div>
	</div>
	</div>
</div>
</li>

				
					
<li class="product-col product-default product type-product post-2657 status-publish instock product_cat-luftreiniger has-post-thumbnail shipping-taxable purchasable product-type-simple">
<div class="product-inner">
	
	<div class="product-image">

		<a  href="https://www.holzelektro.com/ref/dyson-hp02-pure-hotcool-link-luftreiniger-weiss-silber/" aria-label="product">
			<div class="inner img-effect"><img width="300" height="300" src="https://www.holzelektro.com/wp-content/uploads/2022/07/dyson-HP02-pure-hotcool-link-Luftreiniger-weis-silber-1-300x300.jpg" class=" wp-post-image" alt="" loading="lazy" /><img width="300" height="300" src="https://www.holzelektro.com/wp-content/uploads/2022/07/dyson-HP02-pure-hotcool-link-Luftreiniger-weis-silber-2-300x300.jpg" class="hover-image" alt="" loading="lazy" /></div>		</a>
		<a href="https://www.holzelektro.com/?id=2657&amp;action=yith-woocompare-view-table" class="compare yith-compare on-image added" title="Already Added" data-product_id="2657">Already Added</a>	</div>

	<div class="product-content">
		
			<a class="product-loop-title"  href="https://www.holzelektro.com/ref/dyson-hp02-pure-hotcool-link-luftreiniger-weiss-silber/">
	<h3 class="woocommerce-loop-product__title">dyson HP02 pure hot+cool link Luftreiniger weiß/silber</h3>	</a>
	
		

<div class="rating-wrap">
	<div class="rating-content"><div class="star-rating" title="0"><span style="width:0%"><strong class="rating">0</strong> out of 5</span></div></div>
</div>


	<span class="price"><span class="woocommerce-Price-amount amount"><bdi>279,00<span class="woocommerce-Price-currencySymbol">&euro;</span></bdi></span></span>

		<div class="add-links-wrap">
	<div class="add-links clearfix">
		<a href="https://www.holzelektro.com/ref/philips-ac1214-10-luftreiniger-fuer-63-m²-raeume/?add-to-cart=2657" data-quantity="1" class="viewcart-style-2 button product_type_simple add_to_cart_button ajax_add_to_cart" data-product_id="2657" data-product_sku="" aria-label="„dyson HP02 pure hot+cool link Luftreiniger weiß/silber“ zu deinem Warenkorb hinzufügen" rel="nofollow">In den Warenkorb</a>
<div
	class="yith-wcwl-add-to-wishlist add-to-wishlist-2657 exists wishlist-fragment on-first-load"
	data-fragment-ref="2657"
	data-fragment-options="{&quot;base_url&quot;:&quot;&quot;,&quot;in_default_wishlist&quot;:true,&quot;is_single&quot;:false,&quot;show_exists&quot;:false,&quot;product_id&quot;:2657,&quot;parent_product_id&quot;:2657,&quot;product_type&quot;:&quot;simple&quot;,&quot;show_view&quot;:false,&quot;browse_wishlist_text&quot;:&quot;Wunschliste durchsuchen&quot;,&quot;already_in_wishslist_text&quot;:&quot;Das Produkt ist bereits auf Ihrer Wunschliste!&quot;,&quot;product_added_text&quot;:&quot;Produkt hinzugef\u00fcgt!&quot;,&quot;heading_icon&quot;:&quot;fa-heart-o&quot;,&quot;available_multi_wishlist&quot;:false,&quot;disable_wishlist&quot;:false,&quot;show_count&quot;:false,&quot;ajax_loading&quot;:false,&quot;loop_position&quot;:&quot;after_add_to_cart&quot;,&quot;item&quot;:&quot;add_to_wishlist&quot;}"
>
			
			<!-- ADD TO WISHLIST -->
			
<!-- BROWSE WISHLIST MESSAGE -->
<div class="yith-wcwl-wishlistexistsbrowse" data-product-id="2657" data-original-product-id="2657">
	<span class="feedback">
		<i class="yith-wcwl-icon fa fa-heart"></i>		Das Produkt ist bereits auf Ihrer Wunschliste!	</span>
	<a href="https://www.holzelektro.com/merkzettel/" rel="nofollow" data-title="Wunschliste durchsuchen">
				Wunschliste durchsuchen	</a>
</div>

			<!-- COUNT TEXT -->
			
			</div>
<div class="quickview" data-id="2657" title="Quick View">Quick View</div><a href="https://www.holzelektro.com/?id=2657&amp;action=yith-woocompare-view-table" class="compare yith-compare button added" title="Already Added" data-product_id="2657">Already Added</a>	</div>
	</div>
	</div>
</div>
</li>

				
					
<li class="product-col product-default product type-product post-2654 status-publish instock product_cat-luftreiniger has-post-thumbnail shipping-taxable purchasable product-type-simple">
<div class="product-inner">
	
	<div class="product-image">

		<a  href="https://www.holzelektro.com/ref/dyson-tp04-pure-cool-luftreiniger-weiss-silber/" aria-label="product">
			<div class="inner img-effect"><img width="300" height="300" src="https://www.holzelektro.com/wp-content/uploads/2022/07/dyson-TP04-Pure-Cool-Luftreiniger-weis-silber-1-300x300.jpg" class=" wp-post-image" alt="" loading="lazy" /><img width="300" height="300" src="https://www.holzelektro.com/wp-content/uploads/2022/07/dyson-TP04-Pure-Cool-Luftreiniger-weis-silber-2-300x300.jpg" class="hover-image" alt="" loading="lazy" /></div>		</a>
		<a href="https://www.holzelektro.com/?id=2654&amp;action=yith-woocompare-view-table" class="compare yith-compare on-image added" title="Already Added" data-product_id="2654">Already Added</a>	</div>

	<div class="product-content">
		
			<a class="product-loop-title"  href="https://www.holzelektro.com/ref/dyson-tp04-pure-cool-luftreiniger-weiss-silber/">
	<h3 class="woocommerce-loop-product__title">dyson TP04 Pure Cool Luftreiniger weiß/silber</h3>	</a>
	
		

<div class="rating-wrap">
	<div class="rating-content"><div class="star-rating" title="0"><span style="width:0%"><strong class="rating">0</strong> out of 5</span></div></div>
</div>


	<span class="price"><span class="woocommerce-Price-amount amount"><bdi>399,00<span class="woocommerce-Price-currencySymbol">&euro;</span></bdi></span></span>

		<div class="add-links-wrap">
	<div class="add-links clearfix">
		<a href="https://www.holzelektro.com/ref/philips-ac1214-10-luftreiniger-fuer-63-m²-raeume/?add-to-cart=2654" data-quantity="1" class="viewcart-style-2 button product_type_simple add_to_cart_button ajax_add_to_cart" data-product_id="2654" data-product_sku="" aria-label="„dyson TP04 Pure Cool Luftreiniger weiß/silber“ zu deinem Warenkorb hinzufügen" rel="nofollow">In den Warenkorb</a>
<div
	class="yith-wcwl-add-to-wishlist add-to-wishlist-2654 exists wishlist-fragment on-first-load"
	data-fragment-ref="2654"
	data-fragment-options="{&quot;base_url&quot;:&quot;&quot;,&quot;in_default_wishlist&quot;:true,&quot;is_single&quot;:false,&quot;show_exists&quot;:false,&quot;product_id&quot;:2654,&quot;parent_product_id&quot;:2654,&quot;product_type&quot;:&quot;simple&quot;,&quot;show_view&quot;:false,&quot;browse_wishlist_text&quot;:&quot;Wunschliste durchsuchen&quot;,&quot;already_in_wishslist_text&quot;:&quot;Das Produkt ist bereits auf Ihrer Wunschliste!&quot;,&quot;product_added_text&quot;:&quot;Produkt hinzugef\u00fcgt!&quot;,&quot;heading_icon&quot;:&quot;fa-heart-o&quot;,&quot;available_multi_wishlist&quot;:false,&quot;disable_wishlist&quot;:false,&quot;show_count&quot;:false,&quot;ajax_loading&quot;:false,&quot;loop_position&quot;:&quot;after_add_to_cart&quot;,&quot;item&quot;:&quot;add_to_wishlist&quot;}"
>
			
			<!-- ADD TO WISHLIST -->
			
<!-- BROWSE WISHLIST MESSAGE -->
<div class="yith-wcwl-wishlistexistsbrowse" data-product-id="2654" data-original-product-id="2654">
	<span class="feedback">
		<i class="yith-wcwl-icon fa fa-heart"></i>		Das Produkt ist bereits auf Ihrer Wunschliste!	</span>
	<a href="https://www.holzelektro.com/merkzettel/" rel="nofollow" data-title="Wunschliste durchsuchen">
				Wunschliste durchsuchen	</a>
</div>

			<!-- COUNT TEXT -->
			
			</div>
<div class="quickview" data-id="2654" title="Quick View">Quick View</div><a href="https://www.holzelektro.com/?id=2654&amp;action=yith-woocompare-view-table" class="compare yith-compare button added" title="Already Added" data-product_id="2654">Already Added</a>	</div>
	</div>
	</div>
</div>
</li>

				
					
<li class="product-col product-default product type-product post-3576 status-publish last instock product_cat-luftreiniger has-post-thumbnail shipping-taxable purchasable product-type-simple">
<div class="product-inner">
	
	<div class="product-image">

		<a  href="https://www.holzelektro.com/ref/dusbad-uvc-luftfilter-lumair-anthrazit/" aria-label="product">
			<div class="inner img-effect"><img width="300" height="300" src="https://www.holzelektro.com/wp-content/uploads/2022/07/DUSBAD-UVC-Luftfilter-Lumair-anthrazit-300x300.jpg" class=" wp-post-image" alt="" loading="lazy" /><img width="300" height="300" src="https://www.holzelektro.com/wp-content/uploads/2022/07/DUSBAD-UVC-Luftfilter-Lumair-300x300.jpg" class="hover-image" alt="" loading="lazy" /></div>		</a>
		<a href="https://www.holzelektro.com/?id=3576&amp;action=yith-woocompare-view-table" class="compare yith-compare on-image added" title="Already Added" data-product_id="3576">Already Added</a>	</div>

	<div class="product-content">
		
			<a class="product-loop-title"  href="https://www.holzelektro.com/ref/dusbad-uvc-luftfilter-lumair-anthrazit/">
	<h3 class="woocommerce-loop-product__title">DUSBAD UVC-Luftfilter Lumair, anthrazit</h3>	</a>
	
		

<div class="rating-wrap">
	<div class="rating-content"><div class="star-rating" title="0"><span style="width:0%"><strong class="rating">0</strong> out of 5</span></div></div>
</div>


	<span class="price"><span class="woocommerce-Price-amount amount"><bdi>999,00<span class="woocommerce-Price-currencySymbol">&euro;</span></bdi></span></span>

		<div class="add-links-wrap">
	<div class="add-links clearfix">
		<a href="https://www.holzelektro.com/ref/philips-ac1214-10-luftreiniger-fuer-63-m²-raeume/?add-to-cart=3576" data-quantity="1" class="viewcart-style-2 button product_type_simple add_to_cart_button ajax_add_to_cart" data-product_id="3576" data-product_sku="" aria-label="„DUSBAD UVC-Luftfilter Lumair, anthrazit“ zu deinem Warenkorb hinzufügen" rel="nofollow">In den Warenkorb</a>
<div
	class="yith-wcwl-add-to-wishlist add-to-wishlist-3576  wishlist-fragment on-first-load"
	data-fragment-ref="3576"
	data-fragment-options="{&quot;base_url&quot;:&quot;&quot;,&quot;in_default_wishlist&quot;:false,&quot;is_single&quot;:false,&quot;show_exists&quot;:false,&quot;product_id&quot;:3576,&quot;parent_product_id&quot;:3576,&quot;product_type&quot;:&quot;simple&quot;,&quot;show_view&quot;:false,&quot;browse_wishlist_text&quot;:&quot;Wunschliste durchsuchen&quot;,&quot;already_in_wishslist_text&quot;:&quot;Das Produkt ist bereits auf Ihrer Wunschliste!&quot;,&quot;product_added_text&quot;:&quot;Produkt hinzugef\u00fcgt!&quot;,&quot;heading_icon&quot;:&quot;fa-heart-o&quot;,&quot;available_multi_wishlist&quot;:false,&quot;disable_wishlist&quot;:false,&quot;show_count&quot;:false,&quot;ajax_loading&quot;:false,&quot;loop_position&quot;:&quot;after_add_to_cart&quot;,&quot;item&quot;:&quot;add_to_wishlist&quot;}"
>
			
			<!-- ADD TO WISHLIST -->
			
<div class="yith-wcwl-add-button">
		<a
		href="https://www.holzelektro.com/ref/philips-ac1214-10-luftreiniger-fuer-63-m²-raeume/?add_to_wishlist=3576&amp;_wpnonce=200850d838"
		class="add_to_wishlist single_add_to_wishlist"
		data-product-id="3576"
		data-product-type="simple"
		data-original-product-id="3576"
		data-title="Zur Wunschliste hinzufügen"
		rel="nofollow"
	>
		<i class="yith-wcwl-icon fa fa-heart-o"></i>		<span>Zur Wunschliste hinzufügen</span>
	</a>
</div>

			<!-- COUNT TEXT -->
			
			</div>
<div class="quickview" data-id="3576" title="Quick View">Quick View</div><a href="https://www.holzelektro.com/?id=3576&amp;action=yith-woocompare-view-table" class="compare yith-compare button added" title="Already Added" data-product_id="3576">Already Added</a>	</div>
	</div>
	</div>
</div>
</li>

				
					
<li class="product-col product-default product type-product post-2647 status-publish first instock product_cat-luftreiniger has-post-thumbnail shipping-taxable purchasable product-type-simple">
<div class="product-inner">
	
	<div class="product-image">

		<a  href="https://www.holzelektro.com/ref/dyson-hp04-pure-hotcool-luftreinigerheizluefterventilator-weiss-silber/" aria-label="product">
			<div class="inner img-effect"><img width="300" height="300" src="https://www.holzelektro.com/wp-content/uploads/2022/07/dyson-HP04-Pure-HotCool-LuftreinigerHeizlufterVentilator-weis-silber-1-300x300.jpg" class=" wp-post-image" alt="" loading="lazy" /><img width="300" height="300" src="https://www.holzelektro.com/wp-content/uploads/2022/07/dyson-HP04-Pure-HotCool-LuftreinigerHeizlufterVentilator-weis-silber-2-300x300.jpg" class="hover-image" alt="" loading="lazy" /></div>		</a>
		<a href="https://www.holzelektro.com/?id=2647&amp;action=yith-woocompare-view-table" class="compare yith-compare on-image added" title="Already Added" data-product_id="2647">Already Added</a>	</div>

	<div class="product-content">
		
			<a class="product-loop-title"  href="https://www.holzelektro.com/ref/dyson-hp04-pure-hotcool-luftreinigerheizluefterventilator-weiss-silber/">
	<h3 class="woocommerce-loop-product__title">dyson HP04 Pure Hot+Cool Luftreiniger+Heizlüfter+Ventilator weiß/silber</h3>	</a>
	
		

<div class="rating-wrap">
	<div class="rating-content"><div class="star-rating" title="0"><span style="width:0%"><strong class="rating">0</strong> out of 5</span></div></div>
</div>


	<span class="price"><span class="woocommerce-Price-amount amount"><bdi>649,00<span class="woocommerce-Price-currencySymbol">&euro;</span></bdi></span></span>

		<div class="add-links-wrap">
	<div class="add-links clearfix">
		<a href="https://www.holzelektro.com/ref/philips-ac1214-10-luftreiniger-fuer-63-m²-raeume/?add-to-cart=2647" data-quantity="1" class="viewcart-style-2 button product_type_simple add_to_cart_button ajax_add_to_cart" data-product_id="2647" data-product_sku="" aria-label="„dyson HP04 Pure Hot+Cool Luftreiniger+Heizlüfter+Ventilator weiß/silber“ zu deinem Warenkorb hinzufügen" rel="nofollow">In den Warenkorb</a>
<div
	class="yith-wcwl-add-to-wishlist add-to-wishlist-2647 exists wishlist-fragment on-first-load"
	data-fragment-ref="2647"
	data-fragment-options="{&quot;base_url&quot;:&quot;&quot;,&quot;in_default_wishlist&quot;:true,&quot;is_single&quot;:false,&quot;show_exists&quot;:false,&quot;product_id&quot;:2647,&quot;parent_product_id&quot;:2647,&quot;product_type&quot;:&quot;simple&quot;,&quot;show_view&quot;:false,&quot;browse_wishlist_text&quot;:&quot;Wunschliste durchsuchen&quot;,&quot;already_in_wishslist_text&quot;:&quot;Das Produkt ist bereits auf Ihrer Wunschliste!&quot;,&quot;product_added_text&quot;:&quot;Produkt hinzugef\u00fcgt!&quot;,&quot;heading_icon&quot;:&quot;fa-heart-o&quot;,&quot;available_multi_wishlist&quot;:false,&quot;disable_wishlist&quot;:false,&quot;show_count&quot;:false,&quot;ajax_loading&quot;:false,&quot;loop_position&quot;:&quot;after_add_to_cart&quot;,&quot;item&quot;:&quot;add_to_wishlist&quot;}"
>
			
			<!-- ADD TO WISHLIST -->
			
<!-- BROWSE WISHLIST MESSAGE -->
<div class="yith-wcwl-wishlistexistsbrowse" data-product-id="2647" data-original-product-id="2647">
	<span class="feedback">
		<i class="yith-wcwl-icon fa fa-heart"></i>		Das Produkt ist bereits auf Ihrer Wunschliste!	</span>
	<a href="https://www.holzelektro.com/merkzettel/" rel="nofollow" data-title="Wunschliste durchsuchen">
				Wunschliste durchsuchen	</a>
</div>

			<!-- COUNT TEXT -->
			
			</div>
<div class="quickview" data-id="2647" title="Quick View">Quick View</div><a href="https://www.holzelektro.com/?id=2647&amp;action=yith-woocompare-view-table" class="compare yith-compare button added" title="Already Added" data-product_id="2647">Already Added</a>	</div>
	</div>
	</div>
</div>
</li>

				
					
<li class="product-col product-default product type-product post-2650 status-publish instock product_cat-luftreiniger has-post-thumbnail shipping-taxable purchasable product-type-simple">
<div class="product-inner">
	
	<div class="product-image">

		<a  href="https://www.holzelektro.com/ref/philips-ac2729-10-series-2000i-2-in-1-luftreiniger-und-befeuchter-app-bis-zu-60m²/" aria-label="product">
			<div class="inner img-effect"><img width="300" height="300" src="https://www.holzelektro.com/wp-content/uploads/2022/07/Philips-AC2729-10-Series-2000i-2-in-1-Luftreiniger-und-befeuchter-App-bis-zu-60m²-1-300x300.jpg" class=" wp-post-image" alt="" loading="lazy" /><img width="300" height="300" src="https://www.holzelektro.com/wp-content/uploads/2022/07/Philips-AC2729-10-Series-2000i-2-in-1-Luftreiniger-und-befeuchter-App-bis-zu-60m²-2-300x300.jpg" class="hover-image" alt="" loading="lazy" /></div>		</a>
		<a href="https://www.holzelektro.com/?id=2650&amp;action=yith-woocompare-view-table" class="compare yith-compare on-image added" title="Already Added" data-product_id="2650">Already Added</a>	</div>

	<div class="product-content">
		
			<a class="product-loop-title"  href="https://www.holzelektro.com/ref/philips-ac2729-10-series-2000i-2-in-1-luftreiniger-und-befeuchter-app-bis-zu-60m²/">
	<h3 class="woocommerce-loop-product__title">Philips AC2729/10 Series 2000i 2-in-1 Luftreiniger und -befeuchter, App, bis zu 60m²</h3>	</a>
	
		

<div class="rating-wrap">
	<div class="rating-content"><div class="star-rating" title="0"><span style="width:0%"><strong class="rating">0</strong> out of 5</span></div></div>
</div>


	<span class="price"><span class="woocommerce-Price-amount amount"><bdi>249,00<span class="woocommerce-Price-currencySymbol">&euro;</span></bdi></span></span>

		<div class="add-links-wrap">
	<div class="add-links clearfix">
		<a href="https://www.holzelektro.com/ref/philips-ac1214-10-luftreiniger-fuer-63-m²-raeume/?add-to-cart=2650" data-quantity="1" class="viewcart-style-2 button product_type_simple add_to_cart_button ajax_add_to_cart" data-product_id="2650" data-product_sku="" aria-label="„Philips AC2729/10 Series 2000i 2-in-1 Luftreiniger und -befeuchter, App, bis zu 60m²“ zu deinem Warenkorb hinzufügen" rel="nofollow">In den Warenkorb</a>
<div
	class="yith-wcwl-add-to-wishlist add-to-wishlist-2650 exists wishlist-fragment on-first-load"
	data-fragment-ref="2650"
	data-fragment-options="{&quot;base_url&quot;:&quot;&quot;,&quot;in_default_wishlist&quot;:true,&quot;is_single&quot;:false,&quot;show_exists&quot;:false,&quot;product_id&quot;:2650,&quot;parent_product_id&quot;:2650,&quot;product_type&quot;:&quot;simple&quot;,&quot;show_view&quot;:false,&quot;browse_wishlist_text&quot;:&quot;Wunschliste durchsuchen&quot;,&quot;already_in_wishslist_text&quot;:&quot;Das Produkt ist bereits auf Ihrer Wunschliste!&quot;,&quot;product_added_text&quot;:&quot;Produkt hinzugef\u00fcgt!&quot;,&quot;heading_icon&quot;:&quot;fa-heart-o&quot;,&quot;available_multi_wishlist&quot;:false,&quot;disable_wishlist&quot;:false,&quot;show_count&quot;:false,&quot;ajax_loading&quot;:false,&quot;loop_position&quot;:&quot;after_add_to_cart&quot;,&quot;item&quot;:&quot;add_to_wishlist&quot;}"
>
			
			<!-- ADD TO WISHLIST -->
			
<!-- BROWSE WISHLIST MESSAGE -->
<div class="yith-wcwl-wishlistexistsbrowse" data-product-id="2650" data-original-product-id="2650">
	<span class="feedback">
		<i class="yith-wcwl-icon fa fa-heart"></i>		Das Produkt ist bereits auf Ihrer Wunschliste!	</span>
	<a href="https://www.holzelektro.com/merkzettel/" rel="nofollow" data-title="Wunschliste durchsuchen">
				Wunschliste durchsuchen	</a>
</div>

			<!-- COUNT TEXT -->
			
			</div>
<div class="quickview" data-id="2650" title="Quick View">Quick View</div><a href="https://www.holzelektro.com/?id=2650&amp;action=yith-woocompare-view-table" class="compare yith-compare button added" title="Already Added" data-product_id="2650">Already Added</a>	</div>
	</div>
	</div>
</div>
</li>

				
					
<li class="product-col product-default product type-product post-2661 status-publish instock product_cat-luftreiniger has-post-thumbnail shipping-taxable purchasable product-type-simple">
<div class="product-inner">
	
	<div class="product-image">

		<a  href="https://www.holzelektro.com/ref/philips-ac3036-10-series-3000i-luftreiniger-fuer-104-m²-raeume/" aria-label="product">
			<div class="inner img-effect"><img width="300" height="300" src="https://www.holzelektro.com/wp-content/uploads/2022/07/Philips-AC3036-10-Series-3000i-Luftreiniger-fur-104-m²-Raume-1-300x300.jpg" class=" wp-post-image" alt="" loading="lazy" /><img width="300" height="300" src="https://www.holzelektro.com/wp-content/uploads/2022/07/Philips-AC3036-10-Series-3000i-Luftreiniger-fur-104-m²-Raume-2-300x300.jpg" class="hover-image" alt="" loading="lazy" /></div>		</a>
		<a href="https://www.holzelektro.com/?id=2661&amp;action=yith-woocompare-view-table" class="compare yith-compare on-image added" title="Already Added" data-product_id="2661">Already Added</a>	</div>

	<div class="product-content">
		
			<a class="product-loop-title"  href="https://www.holzelektro.com/ref/philips-ac3036-10-series-3000i-luftreiniger-fuer-104-m²-raeume/">
	<h3 class="woocommerce-loop-product__title">Philips AC3036/10 Series 3000i Luftreiniger für 104 m² Räume</h3>	</a>
	
		

<div class="rating-wrap">
	<div class="rating-content"><div class="star-rating" title="0"><span style="width:0%"><strong class="rating">0</strong> out of 5</span></div></div>
</div>


	<span class="price"><span class="woocommerce-Price-amount amount"><bdi>289,00<span class="woocommerce-Price-currencySymbol">&euro;</span></bdi></span></span>

		<div class="add-links-wrap">
	<div class="add-links clearfix">
		<a href="https://www.holzelektro.com/ref/philips-ac1214-10-luftreiniger-fuer-63-m²-raeume/?add-to-cart=2661" data-quantity="1" class="viewcart-style-2 button product_type_simple add_to_cart_button ajax_add_to_cart" data-product_id="2661" data-product_sku="" aria-label="„Philips AC3036/10 Series 3000i Luftreiniger für 104 m² Räume“ zu deinem Warenkorb hinzufügen" rel="nofollow">In den Warenkorb</a>
<div
	class="yith-wcwl-add-to-wishlist add-to-wishlist-2661 exists wishlist-fragment on-first-load"
	data-fragment-ref="2661"
	data-fragment-options="{&quot;base_url&quot;:&quot;&quot;,&quot;in_default_wishlist&quot;:true,&quot;is_single&quot;:false,&quot;show_exists&quot;:false,&quot;product_id&quot;:2661,&quot;parent_product_id&quot;:2661,&quot;product_type&quot;:&quot;simple&quot;,&quot;show_view&quot;:false,&quot;browse_wishlist_text&quot;:&quot;Wunschliste durchsuchen&quot;,&quot;already_in_wishslist_text&quot;:&quot;Das Produkt ist bereits auf Ihrer Wunschliste!&quot;,&quot;product_added_text&quot;:&quot;Produkt hinzugef\u00fcgt!&quot;,&quot;heading_icon&quot;:&quot;fa-heart-o&quot;,&quot;available_multi_wishlist&quot;:false,&quot;disable_wishlist&quot;:false,&quot;show_count&quot;:false,&quot;ajax_loading&quot;:false,&quot;loop_position&quot;:&quot;after_add_to_cart&quot;,&quot;item&quot;:&quot;add_to_wishlist&quot;}"
>
			
			<!-- ADD TO WISHLIST -->
			
<!-- BROWSE WISHLIST MESSAGE -->
<div class="yith-wcwl-wishlistexistsbrowse" data-product-id="2661" data-original-product-id="2661">
	<span class="feedback">
		<i class="yith-wcwl-icon fa fa-heart"></i>		Das Produkt ist bereits auf Ihrer Wunschliste!	</span>
	<a href="https://www.holzelektro.com/merkzettel/" rel="nofollow" data-title="Wunschliste durchsuchen">
				Wunschliste durchsuchen	</a>
</div>

			<!-- COUNT TEXT -->
			
			</div>
<div class="quickview" data-id="2661" title="Quick View">Quick View</div><a href="https://www.holzelektro.com/?id=2661&amp;action=yith-woocompare-view-table" class="compare yith-compare button added" title="Already Added" data-product_id="2661">Already Added</a>	</div>
	</div>
	</div>
</div>
</li>

				
					
<li class="product-col product-default product type-product post-2655 status-publish last instock product_cat-luftreiniger has-post-thumbnail shipping-taxable purchasable product-type-simple">
<div class="product-inner">
	
	<div class="product-image">

		<a  href="https://www.holzelektro.com/ref/dyson-tp04-pure-cool-luftreiniger-schwarz-nickel/" aria-label="product">
			<div class="inner img-effect"><img width="300" height="300" src="https://www.holzelektro.com/wp-content/uploads/2022/07/dyson-TP04-Pure-Cool-Luftreiniger-schwarz-nickel-1-300x300.jpg" class=" wp-post-image" alt="" loading="lazy" /><img width="300" height="300" src="https://www.holzelektro.com/wp-content/uploads/2022/07/dyson-TP04-Pure-Cool-Luftreiniger-schwarz-nickel-2-300x300.jpg" class="hover-image" alt="" loading="lazy" /></div>		</a>
		<a href="https://www.holzelektro.com/?id=2655&amp;action=yith-woocompare-view-table" class="compare yith-compare on-image added" title="Already Added" data-product_id="2655">Already Added</a>	</div>

	<div class="product-content">
		
			<a class="product-loop-title"  href="https://www.holzelektro.com/ref/dyson-tp04-pure-cool-luftreiniger-schwarz-nickel/">
	<h3 class="woocommerce-loop-product__title">dyson TP04 Pure Cool Luftreiniger schwarz/nickel</h3>	</a>
	
		

<div class="rating-wrap">
	<div class="rating-content"><div class="star-rating" title="0"><span style="width:0%"><strong class="rating">0</strong> out of 5</span></div></div>
</div>


	<span class="price"><span class="woocommerce-Price-amount amount"><bdi>399,00<span class="woocommerce-Price-currencySymbol">&euro;</span></bdi></span></span>

		<div class="add-links-wrap">
	<div class="add-links clearfix">
		<a href="https://www.holzelektro.com/ref/philips-ac1214-10-luftreiniger-fuer-63-m²-raeume/?add-to-cart=2655" data-quantity="1" class="viewcart-style-2 button product_type_simple add_to_cart_button ajax_add_to_cart" data-product_id="2655" data-product_sku="" aria-label="„dyson TP04 Pure Cool Luftreiniger schwarz/nickel“ zu deinem Warenkorb hinzufügen" rel="nofollow">In den Warenkorb</a>
<div
	class="yith-wcwl-add-to-wishlist add-to-wishlist-2655 exists wishlist-fragment on-first-load"
	data-fragment-ref="2655"
	data-fragment-options="{&quot;base_url&quot;:&quot;&quot;,&quot;in_default_wishlist&quot;:true,&quot;is_single&quot;:false,&quot;show_exists&quot;:false,&quot;product_id&quot;:2655,&quot;parent_product_id&quot;:2655,&quot;product_type&quot;:&quot;simple&quot;,&quot;show_view&quot;:false,&quot;browse_wishlist_text&quot;:&quot;Wunschliste durchsuchen&quot;,&quot;already_in_wishslist_text&quot;:&quot;Das Produkt ist bereits auf Ihrer Wunschliste!&quot;,&quot;product_added_text&quot;:&quot;Produkt hinzugef\u00fcgt!&quot;,&quot;heading_icon&quot;:&quot;fa-heart-o&quot;,&quot;available_multi_wishlist&quot;:false,&quot;disable_wishlist&quot;:false,&quot;show_count&quot;:false,&quot;ajax_loading&quot;:false,&quot;loop_position&quot;:&quot;after_add_to_cart&quot;,&quot;item&quot;:&quot;add_to_wishlist&quot;}"
>
			
			<!-- ADD TO WISHLIST -->
			
<!-- BROWSE WISHLIST MESSAGE -->
<div class="yith-wcwl-wishlistexistsbrowse" data-product-id="2655" data-original-product-id="2655">
	<span class="feedback">
		<i class="yith-wcwl-icon fa fa-heart"></i>		Das Produkt ist bereits auf Ihrer Wunschliste!	</span>
	<a href="https://www.holzelektro.com/merkzettel/" rel="nofollow" data-title="Wunschliste durchsuchen">
				Wunschliste durchsuchen	</a>
</div>

			<!-- COUNT TEXT -->
			
			</div>
<div class="quickview" data-id="2655" title="Quick View">Quick View</div><a href="https://www.holzelektro.com/?id=2655&amp;action=yith-woocompare-view-table" class="compare yith-compare button added" title="Already Added" data-product_id="2655">Already Added</a>	</div>
	</div>
	</div>
</div>
</li>

				
				</ul>
			</div>
		</div>
	</div>
	
		
		
			
			</div><!-- end main -->

			
			<div class="footer-wrapper">

																							
						<div id="footer" class="footer footer-1"
>
			<div class="footer-main">
			<div class="container">
				
									<div class="row">
														<div class="col-lg-3">
									<aside id="contact-info-widget-2" class="widget contact-info"><h3 class="widget-title">SERVICE</h3>		<div class="contact-info contact-info-block">
						<ul class="contact-details">
																	<li><i class="far fa-envelope"></i> <strong>E-Mail:</strong> <span><a href="mailto:service@holzelektro.com">service@holzelektro.com</a></span></li>									<li><i class="far fa-clock"></i> <strong>Öffnungszeiten:</strong> <span>Mo.-Sa.: 10:00 - 21:00 Uhr</span></li>			</ul>
					</div>

		</aside><aside id="follow-us-widget-2" class="widget follow-us">		<div class="share-links">
										<a href="#"  rel="nofollow noopener noreferrer" target="_blank" title="Facebook" class="share-facebook">Facebook</a>
								<a href="#"  rel="nofollow noopener noreferrer" target="_blank" title="Twitter" class="share-twitter">Twitter</a>
								<a href="#"  rel="nofollow noopener noreferrer" target="_blank" title="Instagram" class="share-instagram">Instagram</a>
									</div>

		</aside>								</div>
																<div class="col-lg-3">
									<aside id="text-8" class="widget widget_text"><h3 class="widget-title">Unternehmen</h3>			<div class="textwidget"><ul>
<li><a href="https://www.holzelektro.com/agb/">AGB</a></li>
<li><a href="https://www.holzelektro.com/impressum/">Impressum</a></li>
<li><a href="https://www.holzelektro.com/datenschutz/">Datenschutz</a></li>
<li><a href="https://www.holzelektro.com/cookies/">Cookies</a></li>
</ul>
</div>
		</aside>								</div>
																<div class="col-lg-3">
									<aside id="block-5" class="widget widget_block">
<h4>SERVICE &amp; VERSAND</h4>
</aside><aside id="block-6" class="widget widget_block widget_text">
<p><a href="https://www.holzelektro.com/zahlungsarten/">Zahlungsarten</a><br><a href="https://www.holzelektro.com/retoure-widerruf/">Retoure &amp; Widerruf</a><br><a href="https://www.holzelektro.com/versandkosten-lieferzeit/">Versandkosten &amp; Lieferzeit</a></p>
</aside>								</div>
																<div class="col-lg-3">
									<aside id="text-7" class="widget widget_text"><h3 class="widget-title">Newsletter</h3>			<div class="textwidget"><p>Get all the latest Jetzt kostenlos zum Newsletter anmelden und profitieren.</p>
<div role="form" class="wpcf7" id="wpcf7-f1512-o1" lang="en-US" dir="ltr">
<div class="screen-reader-response"><p role="status" aria-live="polite" aria-atomic="true"></p> <ul></ul></div>
<form action="https://www.holzelektro.com/ref/philips-ac1214-10-luftreiniger-fuer-63-m²-raeume/#wpcf7-f1512-o1" method="post" class="wpcf7-form init" novalidate="novalidate" data-status="init">
<div style="display: none;">
<input type="hidden" name="_wpcf7" value="1512" />
<input type="hidden" name="_wpcf7_version" value="5.6.4" />
<input type="hidden" name="_wpcf7_locale" value="en_US" />
<input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f1512-o1" />
<input type="hidden" name="_wpcf7_container_post" value="0" />
<input type="hidden" name="_wpcf7_posted_data_hash" value="" />
</div>
<div class="widget_wysija_cont widget_wysija">
<div class="wysija-paragraph">
        <span class="wpcf7-form-control-wrap" data-name="your-email"><input type="email" name="your-email" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email form-control wysija-input" aria-required="true" aria-invalid="false" placeholder="E-mail" /></span>
    </div>
<div>
        <input type="submit" value="Senden" class="wpcf7-form-control has-spinner wpcf7-submit btn btn-primary wysija-submit" />
    </div>
</div>
<div class="wpcf7-response-output" aria-hidden="true"></div></form></div>
</div>
		</aside>								</div>
													</div>
				
							</div>
		</div>
	
	<div class="footer-bottom">
	<div class="container">
				<div class="footer-left">
						<span class="footer-copyright">© 2022 Holz &amp; Elektro.</span>		</div>
		
		
					<div class="footer-right"><aside id="block-10" class="widget widget_block widget_media_image">
<figure class="wp-block-image size-full"><a href="https://www.holzelektro.com/zahlungsarten/"><img loading="lazy" width="270" height="40" src="https://www.holzelektro.com/wp-content/uploads/2022/07/paiement-securise.png" alt="" class="wp-image-3090"/></a></figure>
</aside></div>
			</div>
</div>
</div>
										
				
			</div>
					
		
	</div><!-- end wrapper -->
	@include('include/ref/foot')</body>

</html>
@include('front.product.head')
<body class="product-template-default single single-product postid-629 woocommerce woocommerce-page woocommerce-no-js apus-body-loading image-lazy-loading body-footer-mobile v1 wpb-js-composer js-comp-ver-5.4.5 vc_responsive">
    <div id="fb-root"></div>
	<script>(function(d, s, id) {
	  var js, fjs = d.getElementsByTagName(s)[0];
	  if (d.getElementById(id)) return;
	  js = d.createElement(s); js.id = id;
	  js.src = 'https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v3.1&appId=193235458069917&autoLogAppEvents=1';
	  fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));
	</script>

	<div class="apus-page-loading">
        <div class="apus-loader-inner" style=""></div>
    </div>
    <div id="wrapper-container" class="wrapper-container">
		
        @include('front.components.header')
		
		<section id="apus-breadscrumb" class="apus-breadscrumb woo-breadcrumb no-title  woo-detail ">
			<div class="container">
				<div class="wrapper-breads ">
					<div class="wrapper-breads-inner">
						<ol class="breadcrumb" itemprop="breadcrumb">
							<li><a href="{{ route('home') }}"><i class="fa fa-home" aria-hidden="true"></i>Trang Chủ</a></li>
							<li><a href="{{ route('shop') }}">Shop</a></li>
							<li>{{ $product->name }}</li>
						</ol>
					</div>
				</div>
			</div>
		</section>
		
		<div id="apus-main-content">
            <section id="main-container" class="layout-detail-product container">
                <div class="row">
                    <div id="main-content" class="archive-shop col-xs-12 col-md-12 col-sm-12 col-xs-12">
                        <div id="primary" class="content-area">
                            <div id="content" class="site-content" role="main">
                                <div id="product-629" class="details-product post-629 product type-product status-publish has-post-thumbnail product_cat-furniture product_tag-furniture product_tag-hats product_tag-tie first instock featured shipping-taxable purchasable product-type-variable has-default-attributes">
                                    @include('front.product.top-content')
									
									@include('front.product.woo-tab')
                                    
                                    @include('front.product.relate-product')
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        
		@include('front.components.footer')
    </div>
    <script type="application/ld+json">{"@context":"https:\/\/schema.org\/","@graph":[{"@context":"https:\/\/schema.org\/","@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":"1","item":{"name":"Home","@id":"http:\/\/demoapus-wp.com\/famita\/famita-fashion"}},{"@type":"ListItem","position":"2","item":{"name":"Furniture","@id":"http:\/\/demoapus-wp.com\/famita\/famita-fashion\/product-category\/furniture\/"}},{"@type":"ListItem","position":"3","item":{"name":"Leather shopper bag"}}]},{"@context":"https:\/\/schema.org\/","@type":"Product","@id":"http:\/\/demoapus-wp.com\/famita\/famita-fashion\/product\/leather-shopper-bag\/","name":"Leather shopper bag","image":"http:\/\/demoapus-wp.com\/famita\/famita-fashion\/wp-content\/uploads\/2018\/07\/p4-1.jpg","description":"Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\u2019s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source.","sku":"","offers":[{"@type":"AggregateOffer","lowPrice":"20.00","highPrice":"34.00","priceCurrency":"USD","availability":"https:\/\/schema.org\/InStock","url":"http:\/\/demoapus-wp.com\/famita\/famita-fashion\/product\/leather-shopper-bag\/","seller":{"@type":"Organization","name":"Famita","url":"http:\/\/demoapus-wp.com\/famita\/famita-fashion"}}],"aggregateRating":{"@type":"AggregateRating","ratingValue":"4.00","reviewCount":"1"}}]}</script>
    <script>
        (function() {
            function addEventListener(element, event, handler) {
                if (element.addEventListener) {
                    element.addEventListener(event, handler, false);
                } else if (element.attachEvent) {
                    element.attachEvent('on' + event, handler);
                }
            }

            function maybePrefixUrlField() {
                if (this.value.trim() !== '' && this.value.indexOf('http') !== 0) {
                    this.value = "http://" + this.value;
                }
            }

            var urlFields = document.querySelectorAll('.mc4wp-form input[type="url"]');
            if (urlFields && urlFields.length > 0) {
                for (var j = 0; j < urlFields.length; j++) {
                    addEventListener(urlFields[j], 'blur', maybePrefixUrlField);
                }
            } /* test if browser supports date fields */
            var testInput = document.createElement('input');
            testInput.setAttribute('type', 'date');
            if (testInput.type !== 'date') {

                /* add placeholder & pattern to all date fields */
                var dateFields = document.querySelectorAll('.mc4wp-form input[type="date"]');
                for (var i = 0; i < dateFields.length; i++) {
                    if (!dateFields[i].placeholder) {
                        dateFields[i].placeholder = 'YYYY-MM-DD';
                    }
                    if (!dateFields[i].pattern) {
                        dateFields[i].pattern = '[0-9]{4}-(0[1-9]|1[012])-(0[1-9]|1[0-9]|2[0-9]|3[01])';
                    }
                }
            }

        })();
    </script>
    
    <script type="text/javascript">
        var c = document.body.className;
        c = c.replace(/woocommerce-no-js/, 'woocommerce-js');
        document.body.className = c;
    </script>
    <link rel='stylesheet' id='js_composer_front-css' href='{{ asset('') }}/front.assets/wp-content/plugins/js_composer/assets/css/js_composer.min5243.css?ver=5.4.5' type='text/css' media='all' />
    <script type='text/javascript' src='{{ asset('') }}/front.assets/wp-content/themes/famita/js/typeahead.bundle.min.js'></script>
    <script type='text/javascript' src='{{ asset('') }}/front.assets/wp-content/themes/famita/js/handlebars.min.js'></script>
    <script type='text/javascript' src='{{ asset('') }}/front.assets/wp-includes/js/comment-reply.min37cb.js?ver=4.9.7'></script>
    <script type='text/javascript' src='{{ asset('') }}/front.assets/wp-content/themes/famita/js/bootstrap.min8337.js?ver=20150330'></script>
    <script type='text/javascript' src='{{ asset('') }}/front.assets/wp-content/themes/famita/js/slick.minee8b.js?ver=1.8.0'></script>
    <script type='text/javascript'>
        /* <![CDATA[ */
        var famita_countdown_opts = {
            "days": "Days",
            "hours": "Hours",
            "mins": "Mins",
            "secs": "Secs"
        };
        /* ]]> */
    </script>
    <script type='text/javascript' src='{{ asset('') }}/front.assets/wp-content/themes/famita/js/countdownf945.js?ver=20150315'></script>
    <script type='text/javascript' src='{{ asset('') }}/front.assets/wp-content/themes/famita/js/magnific/jquery.magnific-popup.minf488.js?ver=1.1.0'></script>
    <script type='text/javascript' src='{{ asset('') }}/front.assets/wp-content/themes/famita/js/jquery.unveilf488.js?ver=1.1.0'></script>
    <script type='text/javascript' src='{{ asset('') }}/front.assets/wp-content/themes/famita/js/perfect-scrollbar.jquery.mind0c7.js?ver=0.6.12'></script>
    <script type='text/javascript'>
        /* <![CDATA[ */
        var famita_ajax = {
            "ajaxurl": "http:\/\/demoapus-wp.com\/famita\/famita-fashion\/wp-admin\/admin-ajax.php",
            "previous": "Previous",
            "next": "Next"
        };
        /* ]]> */
    </script>
    <script type='text/javascript' src='{{ asset('') }}/front.assets/wp-content/themes/famita/js/functions8337.js?ver=20150330'></script>
    <script type='text/javascript'>
        (function(html) {
            html.className = html.className.replace(/\bno-js\b/, 'js')
        })(document.documentElement);
    </script>
    <script type='text/javascript'>
        /* <![CDATA[ */
        var wpcf7 = {
            "apiSettings": {
                "root": "http:\/\/demoapus-wp.com\/famita\/famita-fashion\/wp-json\/contact-form-7\/v1",
                "namespace": "contact-form-7\/v1"
            },
            "recaptcha": {
                "messages": {
                    "empty": "Please verify that you are not a robot."
                }
            }
        };
        /* ]]> */
    </script>
    <script type='text/javascript' src='{{ asset('') }}/front.assets/wp-content/plugins/contact-form-7/includes/js/scriptsce52.js?ver=5.0.2'></script>
    <script type='text/javascript' src='{{ asset('') }}/front.assets/wp-content/plugins/woocommerce/assets/js/zoom/jquery.zoom.min5a35.js?ver=1.7.21'></script>
    <script type='text/javascript' src='{{ asset('') }}/front.assets/wp-content/plugins/js_composer/assets/lib/bower/flexslider/jquery.flexslider-min5243.js?ver=5.4.5'></script>
    <script type='text/javascript' src='{{ asset('') }}/front.assets/wp-content/plugins/woocommerce/assets/js/photoswipe/photoswipe.min0235.js?ver=4.1.1'></script>
    <script type='text/javascript' src='{{ asset('') }}/front.assets/wp-content/plugins/woocommerce/assets/js/photoswipe/photoswipe-ui-default.min0235.js?ver=4.1.1'></script>
    <script type='text/javascript'>
        /* <![CDATA[ */
        var wc_single_product_params = {
            "i18n_required_rating_text": "Please select a rating",
            "review_rating_required": "yes",
            "flexslider": {
                "rtl": false,
                "animation": "slide",
                "smoothHeight": true,
                "directionNav": false,
                "controlNav": "thumbnails",
                "slideshow": false,
                "animationSpeed": 500,
                "animationLoop": false,
                "allowOneSlide": false
            },
            "zoom_enabled": "1",
            "zoom_options": [],
            "photoswipe_enabled": "1",
            "photoswipe_options": {
                "shareEl": false,
                "closeOnScroll": false,
                "history": false,
                "hideAnimationDuration": 0,
                "showAnimationDuration": 0
            },
            "flexslider_enabled": "1"
        };
        /* ]]> */
    </script>
    <script type='text/javascript' src='{{ asset('') }}/front.assets/wp-content/plugins/woocommerce/assets/js/frontend/single-product.mincd45.js?ver=3.4.3'></script>
    <script type='text/javascript' src='{{ asset('') }}/front.assets/wp-content/plugins/woocommerce/assets/js/jquery-blockui/jquery.blockUI.min44fd.js?ver=2.70'></script>
    <script type='text/javascript' src='{{ asset('') }}/front.assets/wp-content/plugins/woocommerce/assets/js/js-cookie/js.cookie.min6b25.js?ver=2.1.4'></script>
    <script type='text/javascript'>
        /* <![CDATA[ */
        var woocommerce_params = {
            "ajax_url": "\/famita\/famita-fashion\/wp-admin\/admin-ajax.php",
            "wc_ajax_url": "\/famita\/famita-fashion\/?wc-ajax=%%endpoint%%"
        };
        /* ]]> */
    </script>
    <script type='text/javascript' src='{{ asset('') }}/front.assets/wp-content/plugins/woocommerce/assets/js/frontend/woocommerce.mincd45.js?ver=3.4.3'></script>
    <script type='text/javascript'>
        /* <![CDATA[ */
        var wc_cart_fragments_params = {
            "ajax_url": "\/famita\/famita-fashion\/wp-admin\/admin-ajax.php",
            "wc_ajax_url": "\/famita\/famita-fashion\/?wc-ajax=%%endpoint%%",
            "cart_hash_key": "wc_cart_hash_8ec8180b9ec436d9a0dfc05b5ef47fa1",
            "fragment_name": "wc_fragments_8ec8180b9ec436d9a0dfc05b5ef47fa1"
        };
        /* ]]> */
    </script>
    <script type='text/javascript' src='{{ asset('') }}/front.assets/wp-content/plugins/woocommerce/assets/js/frontend/cart-fragments.mincd45.js?ver=3.4.3'></script>
    <script type='text/javascript'>
        /* <![CDATA[ */
        var yith_woocompare = {
            "ajaxurl": "\/famita\/famita-fashion\/?wc-ajax=%%endpoint%%",
            "actionadd": "yith-woocompare-add-product",
            "actionremove": "yith-woocompare-remove-product",
            "actionview": "yith-woocompare-view-table",
            "actionreload": "yith-woocompare-reload-product",
            "added_label": "Added",
            "table_title": "Product Comparison",
            "auto_open": "yes",
            "loader": "http:\/\/demoapus-wp.com\/famita\/famita-fashion\/wp-content\/plugins\/yith-woocommerce-compare\/assets\/images\/loader.gif",
            "button_text": "Compare",
            "cookie_name": "yith_woocompare_list",
            "close_label": "Close"
        };
        /* ]]> */
    </script>
    <script type='text/javascript' src='{{ asset('') }}/front.assets/wp-content/plugins/yith-woocommerce-compare/assets/js/woocompare.min254d.js?ver=2.3.1'></script>
    <script type='text/javascript' src='{{ asset('') }}/front.assets/wp-content/plugins/yith-woocommerce-compare/assets/js/jquery.colorbox-min13ac.js?ver=1.4.21'></script>
    <script type='text/javascript' src='{{ asset('') }}/front.assets/wp-content/plugins/woocommerce/assets/js/prettyPhoto/jquery.prettyPhoto.min005e.js?ver=3.1.6'></script>
    <script type='text/javascript' src='{{ asset('') }}/front.assets/wp-content/plugins/yith-woocommerce-wishlist/assets/js/jquery.selectBox.min7359.js?ver=1.2.0'></script>
    <script type='text/javascript'>
        /* <![CDATA[ */
        var yith_wcwl_l10n = {
            "ajax_url": "\/famita\/famita-fashion\/wp-admin\/admin-ajax.php",
            "redirect_to_cart": "no",
            "multi_wishlist": "",
            "hide_add_button": "1",
            "is_user_logged_in": "",
            "ajax_loader_url": "http:\/\/demoapus-wp.com\/famita\/famita-fashion\/wp-content\/plugins\/yith-woocommerce-wishlist\/assets\/images\/ajax-loader.gif",
            "remove_from_wishlist_after_add_to_cart": "yes",
            "labels": {
                "cookie_disabled": "We are sorry, but this feature is available only if cookies are enabled on your browser.",
                "added_to_cart_message": "<div class=\"woocommerce-message\">Product correctly added to cart<\/div>"
            },
            "actions": {
                "add_to_wishlist_action": "add_to_wishlist",
                "remove_from_wishlist_action": "remove_from_wishlist",
                "move_to_another_wishlist_action": "move_to_another_wishlsit",
                "reload_wishlist_and_adding_elem_action": "reload_wishlist_and_adding_elem"
            }
        };
        /* ]]> */
    </script>
    <script type='text/javascript' src='{{ asset('') }}/front.assets/wp-content/plugins/yith-woocommerce-wishlist/assets/js/jquery.yith-wcwl605a.js?ver=2.2.2'></script>
    <script type='text/javascript' src='{{ asset('') }}/front.assets/wp-content/themes/famita/js/gmap3af8e.js?ver=6.0.0'></script>
    <script type='text/javascript' src='{{ asset('') }}/front.assets/wp-content/themes/famita/js/sticky-kit8337.js?ver=20150330'></script>
    <script type='text/javascript'>
        /* <![CDATA[ */
        var famita_woo_options = {
            "ajaxurl": "http:\/\/demoapus-wp.com\/famita\/famita-fashion\/wp-admin\/admin-ajax.php",
            "enable_search": "1",
            "template": "<a href=\"\" class=\"media autocompleate-media\"><div class=\"media-left\"><img src=\"\" class=\"media-object\" height=\"100\" width=\"100\"><\/div><div class=\"media-body\"><h4><\/h4><p class=\"price\"><\/p><\/div><\/a>",
            "empty_msg": "Unable to find any products that match the currenty query",
            "success": "<div class=\"woocommerce-message\">Products was successfully added to your cart. <a class=\"button btn btn-primary btn-inverse wc-forward\" href=\"http:\/\/demoapus-wp.com\/famita\/famita-fashion\/cart\/\">View Cart<\/a><\/div>",
            "empty": "<div class=\"woocommerce-error\">No Products selected.<\/div>",
            "nonce": "38d1760032",
            "view_more_text": "View More",
            "view_less_text": "View Less",
            "_preset": ""
        };
        /* ]]> */
    </script>
    <script type='text/javascript' src='{{ asset('') }}/front.assets/wp-content/themes/famita/js/woocommerce8337.js?ver=20150330'></script>
    <script type='text/javascript' src='{{ asset('') }}/front.assets/wp-includes/js/underscore.min4511.js?ver=1.8.3'></script>
    <script type='text/javascript'>
        /* <![CDATA[ */
        var _wpUtilSettings = {
            "ajax": {
                "url": "\/famita\/famita-fashion\/wp-admin\/admin-ajax.php"
            }
        };
        /* ]]> */
    </script>
    <script type='text/javascript' src='{{ asset('') }}/front.assets/wp-includes/js/wp-util.min37cb.js?ver=4.9.7'></script>
    <script type='text/javascript'>
        /* <![CDATA[ */
        var wc_add_to_cart_variation_params = {
            "wc_ajax_url": "\/famita\/famita-fashion\/?wc-ajax=%%endpoint%%",
            "i18n_no_matching_variations_text": "Sorry, no products matched your selection. Please choose a different combination.",
            "i18n_make_a_selection_text": "Please select some product options before adding this product to your cart.",
            "i18n_unavailable_text": "Sorry, this product is unavailable. Please choose a different combination."
        };
        /* ]]> */
    </script>
    <script type='text/javascript' src='{{ asset('') }}/front.assets/wp-content/plugins/woocommerce/assets/js/frontend/add-to-cart-variation.mincd45.js?ver=3.4.3'></script>
    <script type='text/javascript' src='{{ asset('') }}/front.assets/wp-content/plugins/variation-swatches-for-woocommerce/assets/js/frontendd0f1.js?ver=20160615'></script>
    <script type='text/javascript' src='{{ asset('') }}/front.assets/wp-includes/js/wp-embed.min37cb.js?ver=4.9.7'></script>
    <script type='text/javascript' src='{{ asset('') }}/front.assets/wp-content/plugins/js_composer/assets/js/dist/js_composer_front.min5243.js?ver=5.4.5'></script>
    <script async="async" type='text/javascript' src='{{ asset('') }}/front.assets/wp-content/plugins/akismet/_inc/formfa0c.js?ver=4.0.3'></script>
    <script type='text/javascript'>
        /* <![CDATA[ */
        var mc4wp_forms_config = [];
        /* ]]> */
    </script>
    <script type='text/javascript' src='{{ asset('') }}/front.assets/wp-content/plugins/mailchimp-for-wp/assets/js/forms-api.min3a05.js?ver=4.2.2'></script>
    
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	
	<script>
		var colors = {!! $colors !!}
		var sizes = [
			"s",
			"m",
			"l",
			"xl",
			"2xl",
			"3xl"
		]
		
		var products = []
		
		colors.forEach(function(item, index){
			//console.log(item)
			sizes.forEach( (itemSize, indexSize) => {
				
				let productItem = {
					"attributes": {
						"attribute_pa_size": itemSize,
						"attribute_pa_colors": item['data_value']
					},
					"display_price": 20,
					"display_regular_price": 20,
					"image_id": "656",
					"is_downloadable": false,
					"is_in_stock": true,
					"is_purchasable": true,
					"is_sold_individually": "no",
					"is_virtual": false,
					"max_qty": "",
					"min_qty": 1,
					"sku": "",
					"variation_description": "",
					"variation_id": 648,
					"variation_is_active": true,
					"variation_is_visible": true
				}
				
				products.push(productItem)
			})
		})
		
		//console.log(products)
		
		var myJSON = JSON.stringify(products);	
		
		$(".variations_form").attr("data-product_variations", myJSON)
		
		function switchColor(thiz){
			console.log(thiz.getAttribute('data-code'))
			
			let colorCode = thiz.getAttribute('data-code')
			
			$(".bgImg").each(function(){
				$(this).css("background-color", "#" + colorCode)
			})
			
			$("input[name='color_code']").val(colorCode)
		}
		
		function getUrlParameter(sParam) {
			var sPageURL = decodeURIComponent(window.location.search.substring(1)),
				sURLVariables = sPageURL.split('&'),
				sParameterName,
				i;

			for (i = 0; i < sURLVariables.length; i++) {
				sParameterName = sURLVariables[i].split('=');

				if (sParameterName[0] === sParam) {
					return sParameterName[1] === undefined ? true : sParameterName[1];
				}
			}
		}
		
		//let sellerId = getUrlParameter('seller_id')
		
		//$("#seller_id").val(sellerId)


        function copyLinkForSeller(element) {
            /* Get the text field */
            var copyText = document.getElementById("linkForSeller");

            /* Select the text field */
            copyText.select();

            /* Copy the text inside the text field */
            document.execCommand("copy");
        }

	</script>
</body>
</html>
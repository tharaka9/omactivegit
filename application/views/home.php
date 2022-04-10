<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">

    <title>Wolmart - Bootstrap eCommerce Template</title>

    <meta name="keywords" content="HTML5 Template" />
    <meta name="description" content="Wolmart - Bootstrap eCommerce Template">
    <meta name="author" content="D-THEMES">



	<?php include "include/headerscript1.php"; ?>



</head>

<body class="home">
    <div class="page-wrapper">

		<?php include "include/menu1.php"; ?>

        <!-- Start of Main-->
        <main class="main">
            <div class="container">
                <div class="intro-wrapper">
                    <div class="row">
                        <div class="col-md-8 mb-4">
                            <div class="owl-carousel owl-theme row gutter-no cols-1 animation-slider owl-dot-inner"
                                data-owl-options="{
                                'nav': false,
                                'dots': true,
                                'items': 1,
                                'autoplay': false
                            }">
                                <div class="intro-slide intro-slide1 banner banner-fixed br-sm"
                                    style="background-image: url(assets/images/demos/demo5/slides/slide-1.jpg); background-color: #5D5E62;">
                                    <div class="banner-content x-50 w-100 text-center">
                                        <h3 class="banner-title text-white text-uppercase slide-animate"
                                            data-animation-options="{'name': 'zoomIn', 'duration': '1s'}">Comfort</h3>
                                        <figure class="slide-animate" data-animation-options="{
                                            'name': 'fadeInDownShorter', 'duration': '1s', 'delay': '1s'
                                        }">
                                            <img src="assets/images/demos/demo5/slides/bicycle.png" alt="Bicycle"
                                                width="495" height="307" />
                                        </figure>
                                        <p class="ls-25 slide-animate" data-animation-options="{
                                            'name': 'fadeInUpShorter', 'duration': '1s', 'delay': '1s'
                                        }">Get Free Shipping on all orders over <strong
                                                class="text-secondary">$99.00</strong></p>
                                        <a href="shop-banner-sidebar.html"
                                            class="btn btn-white btn-link btn-underline btn-icon-right slide-animate"
                                            data-animation-options="{
                                                'name': 'fadeInUpShorter', 'duration': '1s', 'delay': '1s'
                                            }">
                                            Discover Now<i class="w-icon-long-arrow-right"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="intro-slide intro-slide2 banner banner-fixed br-sm"
                                    style="background-image: url(assets/images/demos/demo5/slides/slide-2.jpg); background-color: #EBEDEC;">
                                    <div class="banner-content y-50">
                                        <div class="slide-animate" data-animation-options="{
                                            'name': 'fadeInRightShorter', 'duration': '1s'
                                        }">
                                            <h5 class="banner-subtitle text-uppercase text-primary ls-25">New Arrivals
                                            </h5>
                                            <h3 class="banner-title text-capitalize ls-25 mb-0">Men's Fashion</h3>
                                            <div class="banner-price-info text-default font-weight-bold mb-6 ls-50">
                                                Start at <span class="text-secondary">$12.00</span>
                                            </div>
                                            <a href="shop-banner-sidebar.html" class="btn btn-dark btn-rounded">Shop
                                                Now</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="intro-slide intro-slide3 banner banner-fixed br-sm"
                                    style="background-image: url(assets/images/demos/demo5/slides/slide-3.jpg); background-color: #E0E0DE;">
                                    <div class="banner-content text-right y-50">
                                        <div class="slide-animate" data-animation-options="{
                                            'name': 'fadeInUpShorter', 'duration': '1s'
                                        }">
                                            <h5 class="banner-subtitle text-primary text-uppercase">Best Sellers</h5>
                                            <h3 class="banner-title text-capitalize lh-1 ls-25">New
                                                Sneaker<br>Collection</h3>
                                            <div class="banner-price-info text-uppercase text-default">
                                                <strong class="text-dark">Up To 10%</strong> Discount
                                            </div>
                                            <a href="shop-banner-sidebar.html" class="btn btn-dark btn-rounded">Shop
                                                Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="row">
                                <div class="col-md-12 col-xs-6 mb-4">
                                    <div class="category-banner banner banner-fixed br-sm">
                                        <figure>
                                            <img src="assets/images/demos/demo5/categories/1-1.jpg" alt="Category"
                                                width="330" height="239" style="background-color: #605959;" />
                                        </figure>
                                        <div class="banner-content">
                                            <h3 class="banner-title text-white text-capitalize ls-25">New
                                                Lifestyle<br>Collection</h3>
                                            <h5 class="banner-subtitle text-white text-capitalize ls-25">Discount</h5>
                                            <div class="banner-price-info text-white text-uppercase ls-25">25% Off</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12 col-xs-6 mb-4">
                                    <div class="category-banner banner banner-fixed br-sm">
                                        <figure>
                                            <img src="assets/images/demos/demo5/categories/1-2.jpg" alt="Category"
                                                width="330" height="239" style="background-color: #eff5f5;" />
                                        </figure>
                                        <div class="banner-content">
                                            <h3 class="banner-title text-white text-capitalize ls-25 mb-3">Online
                                                Classic<br>Yoga Sale</h3>
                                            <del class="old-price text-white ls-25">$499.99</del>
                                            <div class="new-price text-secondary ls-25">$299.99</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End of Intro-wrapper -->

                <div class="owl-carousel owl-theme row cols-md-4 cols-sm-3 cols-1 icon-box-wrapper appear-animate br-sm bg-white"
                    data-owl-options="{
                    'nav': false,
                    'dots': false,
                    'loop': true,
                    'margin': 30,
                    'autoplay': true,
                    'autoplayTimeout': 4000,
                    'responsive': {
                        '0': {
                            'items': 1
                        },
                        '576': {
                            'items': 2
                        },
                        '768': {
                            'items': 2
                        },
                        '992': {
                            'items': 3
                        },
                        '1200': {
                            'items': 4
                        }
                    }
                    }">
                    <div class="icon-box icon-box-side text-dark">
                        <span class="icon-box-icon icon-shipping">
                            <i class="w-icon-truck"></i>
                        </span>
                        <div class="icon-box-content">
                            <h4 class="icon-box-title font-weight-bolder ls-normal">Free Shipping & Returns</h4>
                            <p class="text-default">For all orders over $99</p>
                        </div>
                    </div>
                    <div class="icon-box icon-box-side text-dark">
                        <span class="icon-box-icon icon-payment">
                            <i class="w-icon-bag"></i>
                        </span>
                        <div class="icon-box-content">
                            <h4 class="icon-box-title font-weight-bolder ls-normal">Secure Payment</h4>
                            <p class="text-default">We ensure secure payment</p>
                        </div>
                    </div>
                    <div class="icon-box icon-box-side text-dark icon-box-money">
                        <span class="icon-box-icon icon-money">
                            <i class="w-icon-money"></i>
                        </span>
                        <div class="icon-box-content">
                            <h4 class="icon-box-title font-weight-bolder ls-normal">Money Back Guarantee</h4>
                            <p class="text-default">Any back within 30 days</p>
                        </div>
                    </div>
                    <div class="icon-box icon-box-side text-dark icon-box-chat">
                        <span class="icon-box-icon icon-chat">
                            <i class="w-icon-chat"></i>
                        </span>
                        <div class="icon-box-content">
                            <h4 class="icon-box-title font-weight-bolder ls-normal">Customer Support</h4>
                            <p class="text-default">Call or email us 24/7</p>
                        </div>
                    </div>
                </div>
                <!-- End of Iocn Box Wrapper -->

                <div class="title-link-wrapper title-deals appear-animate mb-4">
                    <h2 class="title title-link">Deals Of The Day</h2>
                    <div
                        class="product-countdown-container font-size-sm text-white bg-secondary align-items-center mr-auto">
                        <label>Offer Ends in: </label>
                        <div class="product-countdown countdown-compact ml-1 font-weight-bold" data-until="+10d"
                            data-relative="true" data-compact="true">10days,00:00:00</div>
                    </div>
                    <a href="#" class="ml-0">More Products<i class="w-icon-long-arrow-right"></i></a>
                </div>
                <div class="owl-carousel owl-theme appear-animate row cols-lg-5 cols-md-4 cols-sm-3 cols-2 mb-6"
                    data-owl-options="{
                    'nav': false,
                    'dots': true,
                    'margin': 20,
                    'responsive': {
                        '0': {
                            'items': 2
                        },
                        '576': {
                            'items': 3
                        },
                        '768': {
                            'items': 4
                        },
                        '992': {
                            'items': 5
                        }
                    }
                }">
                    <div class="product-wrap">
                        <div class="product text-center">
                            <figure class="product-media">
                                <a href="product-default.html">
                                    <img src="assets/images/demos/demo5/products/1-1-1.jpg" alt="Product" width="300"
                                        height="338">
                                    <img src="assets/images/demos/demo5/products/1-1-2.jpg" alt="Product" width="300"
                                        height="338">
                                </a>
                                <div class="product-action-vertical">
                                    <a href="#" class="btn-product-icon btn-cart w-icon-cart" title="Add to cart"></a>
                                    <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                        title="Add to wishlist"></a>
                                    <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                        title="Quickview"></a>
                                    <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                        title="Add to Compare"></a>
                                </div>
                            </figure>
                            <div class="product-details">
                                <h4 class="product-name"><a href="product-default.html">Leather Stripe Watch</a></h4>
                                <div class="ratings-container">
                                    <div class="ratings-full">
                                        <span class="ratings" style="width: 80%;"></span>
                                        <span class="tooltiptext tooltip-top"></span>
                                    </div>
                                    <a href="product-default.html" class="rating-reviews">(1 Reviews)</a>
                                </div>
                                <div class="product-price">
                                    <ins class="new-price">$189.00</ins><del class="old-price">$199.89</del>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End of Product Wrap -->
                    <div class="product-wrap">
                        <div class="product text-center">
                            <figure class="product-media">
                                <a href="product-default.html">
                                    <img src="assets/images/demos/demo5/products/1-2.jpg" alt="Product" width="300"
                                        height="338">
                                </a>
                                <div class="product-action-vertical">
                                    <a href="#" class="btn-product-icon btn-cart w-icon-cart" title="Add to cart"></a>
                                    <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                        title="Add to wishlist"></a>
                                    <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                        title="Quickview"></a>
                                    <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                        title="Add to Compare"></a>
                                </div>
                            </figure>
                            <div class="product-details">
                                <h4 class="product-name"><a href="product-default.html">Running Machine</a></h4>
                                <div class="ratings-container">
                                    <div class="ratings-full">
                                        <span class="ratings" style="width: 60%;"></span>
                                        <span class="tooltiptext tooltip-top"></span>
                                    </div>
                                    <a href="product-default.html" class="rating-reviews">(1 Reviews)</a>
                                </div>
                                <div class="product-price">
                                    <ins class="new-price">$27.00</ins><del class="old-price">$28.99</del>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End of Product Wrap -->
                    <div class="product-wrap">
                        <div class="product text-center">
                            <figure class="product-media">
                                <a href="product-default.html">
                                    <img src="assets/images/demos/demo5/products/1-3.jpg" alt="Product" width="300"
                                        height="338">
                                </a>
                                <div class="product-action-vertical">
                                    <a href="#" class="btn-product-icon btn-cart w-icon-cart" title="Add to cart"></a>
                                    <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                        title="Add to wishlist"></a>
                                    <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                        title="Quickview"></a>
                                    <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                        title="Add to Compare"></a>
                                </div>
                            </figure>
                            <div class="product-details">
                                <h4 class="product-name"><a href="product-default.html">Men's Black Watch</a></h4>
                                <div class="ratings-container">
                                    <div class="ratings-full">
                                        <span class="ratings" style="width: 100%;"></span>
                                        <span class="tooltiptext tooltip-top"></span>
                                    </div>
                                    <a href="product-default.html" class="rating-reviews">(5 Reviews)</a>
                                </div>
                                <div class="product-price">
                                    <ins class="new-price">$75.00</ins><del class="old-price">$79.00</del>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End of Product Wrap -->
                    <div class="product-wrap">
                        <div class="product text-center">
                            <figure class="product-media">
                                <a href="product-default.html">
                                    <img src="assets/images/demos/demo5/products/1-4-1.jpg" alt="Product" width="300"
                                        height="338">
                                    <img src="assets/images/demos/demo5/products/1-4-2.jpg" alt="Product" width="300"
                                        height="338">
                                </a>
                                <div class="product-action-vertical">
                                    <a href="#" class="btn-product-icon btn-cart w-icon-cart" title="Add to cart"></a>
                                    <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                        title="Add to wishlist"></a>
                                    <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                        title="Quickview"></a>
                                    <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                        title="Add to Compare"></a>
                                </div>
                            </figure>
                            <div class="product-details">
                                <h4 class="product-name"><a href="product-default.html">Summer Sports Shoes</a></h4>
                                <div class="ratings-container">
                                    <div class="ratings-full">
                                        <span class="ratings" style="width: 100%;"></span>
                                        <span class="tooltiptext tooltip-top"></span>
                                    </div>
                                    <a href="product-default.html" class="rating-reviews">(8 Reviews)</a>
                                </div>
                                <div class="product-price">
                                    <ins class="new-price">$85.99</ins><del class="old-price">$88.00</del>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End of Product Wrap -->
                    <div class="product-wrap">
                        <div class="product text-center">
                            <figure class="product-media">
                                <a href="product-default.html">
                                    <img src="assets/images/demos/demo5/products/1-5.jpg" alt="Product" width="300"
                                        height="338">
                                </a>
                                <div class="product-action-vertical">
                                    <a href="#" class="btn-product-icon btn-cart w-icon-cart" title="Add to cart"></a>
                                    <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                        title="Add to wishlist"></a>
                                    <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                        title="Quickview"></a>
                                    <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                        title="Add to Compare"></a>
                                </div>
                            </figure>
                            <div class="product-details">
                                <h4 class="product-name"><a href="product-default.html">Best Pedestrian Bag</a></h4>
                                <div class="ratings-container">
                                    <div class="ratings-full">
                                        <span class="ratings" style="width: 80%;"></span>
                                        <span class="tooltiptext tooltip-top"></span>
                                    </div>
                                    <a href="product-default.html" class="rating-reviews">(4 Reviews)</a>
                                </div>
                                <div class="product-price">
                                    <ins class="new-price">$48.55</ins><del class="old-price">$49.00</del>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End of Product Wrap -->
                </div>
                <!-- End of Prodcut Deals Wrapper -->

                <div class="owl-carousel owl-theme icon-category-wrapper appear-animate row cols-xl-8 cols-lg-7 cols-md-6 cols-sm-4 cols-xs-3 cols-2 mb-10 pb-2"
                    data-owl-options="{
                    'nav': false,
                    'dots': true,
                    'margin': 20,
                    'responsive': {
                        '0': {
                            'items': 2
                        },
                        '480': {
                            'items': 3
                        },
                        '768': {
                            'items': 5
                        },
                        '992': {
                            'items': 6
                        },
                        '1200': {
                            'items': 8
                        }
                    }
                }">
                    <div class="category category-icon">
                        <a href="shop-banner-sidebar.html">
                            <figure class="category-media">
                                <i class="w-icon-tshirt"></i>
                            </figure>
                        </a>
                        <div class="category-content">
                            <h4 class="category-name"><a href="shop-banner-sidebar.html">Fashion</a></h4>
                        </div>
                    </div>
                    <div class="category category-icon">
                        <a href="shop-banner-sidebar.html">
                            <figure class="category-media">
                                <i class="w-icon-sofa"></i>
                            </figure>
                        </a>
                        <div class="category-content">
                            <h4 class="category-name"><a href="shop-banner-sidebar.html">Furniture</a></h4>
                        </div>
                    </div>
                    <div class="category category-icon">
                        <a href="shop-banner-sidebar.html">
                            <figure class="category-media">
                                <i class="w-icon-basketball"></i>
                            </figure>
                        </a>
                        <div class="category-content">
                            <h4 class="category-name"><a href="shop-banner-sidebar.html">Sports</a></h4>
                        </div>
                    </div>
                    <div class="category category-icon">
                        <a href="shop-banner-sidebar.html">
                            <figure class="category-media">
                                <i class="w-icon-bow"></i>
                            </figure>
                        </a>
                        <div class="category-content">
                            <h4 class="category-name"><a href="shop-banner-sidebar.html">Toys</a></h4>
                        </div>
                    </div>
                    <div class="category category-icon">
                        <a href="shop-banner-sidebar.html">
                            <figure class="category-media">
                                <i class="w-icon-camera"></i>
                            </figure>
                        </a>
                        <div class="category-content">
                            <h4 class="category-name"><a href="shop-banner-sidebar.html">Cameras</a></h4>
                        </div>
                    </div>
                    <div class="category category-icon">
                        <a href="shop-banner-sidebar.html">
                            <figure class="category-media">
                                <i class="w-icon-gamepad"></i>
                            </figure>
                        </a>
                        <div class="category-content">
                            <h4 class="category-name"><a href="shop-banner-sidebar.html">Games</a></h4>
                        </div>
                    </div>
                    <div class="category category-icon">
                        <a href="shop-banner-sidebar.html">
                            <figure class="category-media">
                                <i class="w-icon-headphone"></i>
                            </figure>
                        </a>
                        <div class="category-content">
                            <h4 class="category-name"><a href="shop-banner-sidebar.html">Headphones</a></h4>
                        </div>
                    </div>
                    <div class="category category-icon">
                        <a href="shop-banner-sidebar.html">
                            <figure class="category-media">
                                <i class="w-icon-mobile"></i>
                            </figure>
                        </a>
                        <div class="category-content">
                            <h4 class="category-name"><a href="shop-banner-sidebar.html">Smartphones</a></h4>
                        </div>
                    </div>
                </div>
                <!-- End of Icon Category Wrapper -->

                <div class="category-banner-wrapper appear-animate row mb-5">
                    <div class="col-md-6 mb-4">
                        <div class="banner banner-fixed br-sm">
                            <figure>
                                <img src="assets/images/demos/demo5/categories/2-1.jpg" alt="Category Banner"
                                    width="680" height="180" style="background-color: #EAEAEA;" />
                            </figure>
                            <div class="banner-content y-50">
                                <h5 class="banner-subtitle text-capitalize font-weight-normal ls-25">From Online Store
                                </h5>
                                <h3 class="banner-title text-capitalize ls-10">Cosmetic Sale</h3>
                                <a href="shop-banner-sidebar.html"
                                    class="btn btn-dark btn-link btn-underline btn-icon-right">
                                    Discover Now<i class="w-icon-long-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 mb-4">
                        <div class="banner banner-fixed br-sm">
                            <figure>
                                <img src="assets/images/demos/demo5/categories/2-2.jpg" alt="Category Banner"
                                    width="680" height="180" style="background-color: #565960;" />
                            </figure>
                            <div class="banner-content y-50">
                                <h5 class="banner-subtitle text-white text-capitalize font-weight-normal ls-25">Season
                                    Collection</h5>
                                <h3 class="banner-title text-white text-capitalize">New Fashion Style</h3>
                                <a href="shop-banner-sidebar.html"
                                    class="btn btn-white btn-link btn-underline btn-icon-right">
                                    Discover Now<i class="w-icon-long-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End of Category Banner Wrapper -->

                <div class="title-link-wrapper mb-4">
                    <h2 class="title title-link title-vendor appear-animate pt-2 pb-2">Top Weekly Vendors</h2>
                </div>
                <div class="owl-carousel owl-theme row cols-xl-4 cols-md-3 cols-sm-2 cols-1 vendor-wrapper appear-animate mb-10 pb-2"
                    data-owl-options="{
                    'nav': false,
                    'dots': true,
                    'margin': 20,
                    'responsive': {
                        '0': {
                            'items': 1
                        },
                        '576': {
                            'items': 2
                        },
                        '768': {
                            'items': 3
                        },
                        '992': {
                            'items': 4
                        }
                    }
                }">
                    <div class="vendor-widget mb-0">
                        <div class="vendor-widget-banner">
                            <figure class="vendor-banner">
                                <a href="vendor-dokan-store.html">
                                    <img src="assets/images/demos/demo3/vendors/1.jpg" alt="Vendor Banner" width="1200"
                                        height="390" style="background-color: #ECE7DF;" />
                                </a>
                            </figure>
                            <div class="vendor-details">
                                <figure class="vendor-logo">
                                    <a href="vendor-dokan-store.html">
                                        <img src="assets/images/demos/demo3/vendors/brand-1.jpg" alt="Vendor Logo"
                                            width="90" height="90" />
                                    </a>
                                </figure>
                                <div class="vendor-personal">
                                    <h4 class="vendor-name">
                                        <a href="vendor-dokan-store.html">OAIO Store</a>
                                    </h4>
                                    <span class="vendor-product-count">27 Products</span>
                                </div>
                            </div>
                        </div>
                        <!-- End of Vendor Widget Banner -->
                    </div>
                    <div class="vendor-widget mb-0">
                        <div class="vendor-widget-banner">
                            <figure class="vendor-banner">
                                <a href="vendor-dokan-store.html">
                                    <img src="assets/images/demos/demo3/vendors/2.jpg" alt="Vendor Banner" width="1200"
                                        height="390" style="background-color: #293936;" />
                                </a>
                            </figure>
                            <div class="vendor-details">
                                <figure class="vendor-logo">
                                    <a href="vendor-dokan-store.html">
                                        <img src="assets/images/demos/demo3/vendors/brand-2.jpg" alt="Vendor Logo"
                                            width="90" height="90" />
                                    </a>
                                </figure>
                                <div class="vendor-personal">
                                    <h4 class="vendor-name">
                                        <a href="vendor-dokan-store.html">Trident Store</a>
                                    </h4>
                                    <span class="vendor-product-count">11 Products</span>
                                </div>
                            </div>
                        </div>
                        <!-- End of Vendor Widget Banner -->
                    </div>
                    <div class="vendor-widget mb-0">
                        <div class="vendor-widget-banner">
                            <figure class="vendor-banner">
                                <a href="vendor-dokan-store.html">
                                    <img src="assets/images/demos/demo3/vendors/3.jpg" alt="Vendor Banner" width="1200"
                                        height="390" style="background-color: #B8CDCE;" />
                                </a>
                            </figure>
                            <div class="vendor-details">
                                <figure class="vendor-logo">
                                    <a href="vendor-dokan-store.html">
                                        <img src="assets/images/demos/demo3/vendors/brand-3.jpg" alt="Vendor Logo"
                                            width="90" height="90" />
                                    </a>
                                </figure>
                                <div class="vendor-personal">
                                    <h4 class="vendor-name">
                                        <a href="vendor-dokan-store.html">Pam Store</a>
                                    </h4>
                                    <span class="vendor-product-count">16 Products</span>
                                </div>
                            </div>
                        </div>
                        <!-- End of Vendor Widget Banner -->
                    </div>
                    <div class="vendor-widget mb-0">
                        <div class="vendor-widget-banner">
                            <figure class="vendor-banner">
                                <a href="vendor-dokan-store.html">
                                    <img src="assets/images/demos/demo5/vendors/4.jpg" alt="Vendor Banner" width="1200"
                                        height="390" style="background-color: #F5F5F5;" />
                                </a>
                            </figure>
                            <div class="vendor-details">
                                <figure class="vendor-logo">
                                    <a href="vendor-dokan-store.html">
                                        <img src="assets/images/demos/demo3/vendors/brand-4.jpg" alt="Vendor Logo"
                                            width="90" height="90" />
                                    </a>
                                </figure>
                                <div class="vendor-personal">
                                    <h4 class="vendor-name">
                                        <a href="vendor-dokan-store.html">K Group Store</a>
                                    </h4>
                                    <span class="vendor-product-count">25 Products</span>
                                </div>
                            </div>
                        </div>
                        <!-- End of Vendor Widget Banner -->
                    </div>
                </div>
                <!-- End of Vendor Wrapper -->
            </div>
            <!-- End of Container -->


            <div class="container mt-10 pt-2">

                <div class="title-link-wrapper appear-animate mb-4">
                    <h2 class="title title-link pt-1">Apparels &amp; Clothings</h2>
                    <a href="shop-boxed-banner.html">More Products<i class="w-icon-long-arrow-right"></i></a>
                </div>
                <div class="owl-carousel owl-theme products-apparel appear-animate row cols-lg-5 cols-md-4 cols-sm-3 cols-2 mb-7"
                    data-owl-options="{
                    'nav': false,
                    'dots': true,
                    'margin': 20,
                    'responsive': {
                        '0': {
                            'items': 2
                        },
                        '576': {
                            'items': 3
                        },
                        '768': {
                            'items': 4
                        },
                        '992': {
                            'items': 5
                        }
                    }
                }">
                    <div class="product-wrap">
                        <div class="product text-center">
                            <figure class="product-media">
                                <a href="product-default.html">
                                    <img src="assets/images/demos/demo5/products/3-1-1.jpg" alt="Product" width="300"
                                        height="338">
                                    <img src="assets/images/demos/demo5/products/3-1-2.jpg" alt="Product" width="300"
                                        height="338">
                                </a>
                                <div class="product-action-vertical">
                                    <a href="#" class="btn-product-icon btn-cart w-icon-cart" title="Add to cart"></a>
                                    <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                        title="Add to wishlist"></a>
                                    <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                        title="Quickview"></a>
                                    <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                        title="Add to Compare"></a>
                                </div>
                            </figure>
                            <div class="product-details">
                                <h4 class="product-name"><a href="product-default.html">Multi Function Watch</a></h4>
                                <div class="ratings-container">
                                    <div class="ratings-full">
                                        <span class="ratings" style="width: 80%;"></span>
                                        <span class="tooltiptext tooltip-top"></span>
                                    </div>
                                    <a href="product-default.html" class="rating-reviews">(1 Reviews)</a>
                                </div>
                                <div class="product-price">
                                    <ins class="new-price">$170.00</ins>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End of Product Wrap -->
                    <div class="product-wrap">
                        <div class="product text-center">
                            <figure class="product-media">
                                <a href="product-default.html">
                                    <img src="assets/images/demos/demo5/products/3-2.jpg" alt="Product" width="300"
                                        height="338">
                                </a>
                                <div class="product-action-vertical">
                                    <a href="#" class="btn-product-icon btn-cart w-icon-cart" title="Add to cart"></a>
                                    <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                        title="Add to wishlist"></a>
                                    <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                        title="Quickview"></a>
                                    <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                        title="Add to Compare"></a>
                                </div>
                            </figure>
                            <div class="product-details">
                                <h4 class="product-name"><a href="product-default.html">Men's Suede Belt</a></h4>
                                <div class="ratings-container">
                                    <div class="ratings-full">
                                        <span class="ratings" style="width: 60%;"></span>
                                        <span class="tooltiptext tooltip-top"></span>
                                    </div>
                                    <a href="product-default.html" class="rating-reviews">(1 Reviews)</a>
                                </div>
                                <div class="product-price">
                                    <ins class="new-price">$39.00</ins>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End of Product Wrap -->
                    <div class="product-wrap">
                        <div class="product text-center">
                            <figure class="product-media">
                                <a href="product-default.html">
                                    <img src="assets/images/demos/demo5/products/3-3.jpg" alt="Product" width="300"
                                        height="338">
                                </a>
                                <div class="product-action-vertical">
                                    <a href="#" class="btn-product-icon btn-cart w-icon-cart" title="Add to cart"></a>
                                    <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                        title="Add to wishlist"></a>
                                    <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                        title="Quickview"></a>
                                    <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                        title="Add to Compare"></a>
                                </div>
                            </figure>
                            <div class="product-details">
                                <h4 class="product-name"><a href="product-default.html">Gold Watch</a></h4>
                                <div class="ratings-container">
                                    <div class="ratings-full">
                                        <span class="ratings" style="width: 100%;"></span>
                                        <span class="tooltiptext tooltip-top"></span>
                                    </div>
                                    <a href="product-default.html" class="rating-reviews">(5 Reviews)</a>
                                </div>
                                <div class="product-price">
                                    <ins class="new-price">$210.00</ins>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End of Product Wrap -->
                    <div class="product-wrap">
                        <div class="product text-center">
                            <figure class="product-media">
                                <a href="product-default.html">
                                    <img src="assets/images/demos/demo5/products/3-4-1.jpg" alt="Product" width="300"
                                        height="338">
                                    <img src="assets/images/demos/demo5/products/3-4-2.jpg" alt="Product" width="300"
                                        height="338">
                                </a>
                                <div class="product-action-vertical">
                                    <a href="#" class="btn-product-icon btn-cart w-icon-cart" title="Add to cart"></a>
                                    <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                        title="Add to wishlist"></a>
                                    <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                        title="Quickview"></a>
                                    <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                        title="Add to Compare"></a>
                                </div>
                            </figure>
                            <div class="product-details">
                                <h4 class="product-name"><a href="product-default.html">Portable Charger</a></h4>
                                <div class="ratings-container">
                                    <div class="ratings-full">
                                        <span class="ratings" style="width: 100%;"></span>
                                        <span class="tooltiptext tooltip-top"></span>
                                    </div>
                                    <a href="product-default.html" class="rating-reviews">(8 Reviews)</a>
                                </div>
                                <div class="product-price">
                                    <ins class="new-price">$25.00</ins>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End of Product Wrap -->
                    <div class="product-wrap">
                        <div class="product text-center">
                            <figure class="product-media">
                                <a href="product-default.html">
                                    <img src="assets/images/demos/demo5/products/3-5.jpg" alt="Product" width="300"
                                        height="338">
                                </a>
                                <div class="product-action-vertical">
                                    <a href="#" class="btn-product-icon btn-cart w-icon-cart" title="Add to cart"></a>
                                    <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                        title="Add to wishlist"></a>
                                    <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                        title="Quickview"></a>
                                    <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                        title="Add to Compare"></a>
                                </div>
                            </figure>
                            <div class="product-details">
                                <h4 class="product-name"><a href="product-default.html">Headkerchief</a></h4>
                                <div class="ratings-container">
                                    <div class="ratings-full">
                                        <span class="ratings" style="width: 80%;"></span>
                                        <span class="tooltiptext tooltip-top"></span>
                                    </div>
                                    <a href="product-default.html" class="rating-reviews">(4 Reviews)</a>
                                </div>
                                <div class="product-price">
                                    <ins class="new-price">$28.99</ins>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End of Product Wrap -->
                </div>
                <!-- End of Prodcut Wrapper -->

                <div class="row grid grid-float appear-animate">
                    <div class="col-lg-6 grid-item height-x2 grid-item-lg">
                        <div class="banner banner-fixed br-sm">
                            <figure>
                                <img src="assets/images/demos/demo5/banners/2-1.jpg" alt="Banner" width="680"
                                    height="420" style="background-color: #242529;" />
                            </figure>
                            <div class="banner-content text-center x-50 w-100 pl-4 pr-4">
                                <h5 class="banner-subtitle text-uppercase text-secondary font-weight-bold ls-25 mb-1">
                                    From Samsung</h5>
                                <h3 class="banner-title text-capitalize text-white mb-0">Introducing Galaxy Note 10</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 grid-item height-x1 grid-item-md">
                        <div class="banner banner-fixed br-sm">
                            <figure>
                                <img src="assets/images/demos/demo5/banners/2-2.jpg" alt="Banner" width="680"
                                    height="200" style="background-color: #EEEEF0;" />
                            </figure>
                            <div class="banner-content y-50">
                                <h5 class="banner-subtitle font-weight-normal text-uppercase mb-0">New Arrivals</h5>
                                <h3 class="banner-title text-capitalize ls-25">Gymnastic Apparatus</h3>
                                <div class="banner-price-info text-default font-weight-normal">
                                    Up to <strong class="text-primary text-uppercase">25% Off</strong>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 grid-item height-x1 grid-item-sm">
                        <div class="banner banner-fixed br-sm">
                            <figure>
                                <img src="assets/images/demos/demo5/banners/2-3.jpg" alt="Banner" width="330"
                                    height="200" style="background-color: #519DD9;" />
                            </figure>
                            <div class="banner-content text-center x-50 y-50 w-100">
                                <h3 class="banner-title text-white text-uppercase mb-1 font-weight-bolder">Hey!</h3>
                                <p class="text-white mb-0">Spend $60 and get Free US main-land delivery</p>
                                <p class="text-white mb-0">(Order under $60 only /$4.75)</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 grid-item height-x1 grid-item-sm">
                        <div class="banner banner-fixed br-sm">
                            <figure>
                                <img src="assets/images/demos/demo5/banners/2-4.jpg" alt="Banner" width="330"
                                    height="200" style="background-color: #5F5657;" />
                            </figure>
                            <div class="banner-content y-50">
                                <h3 class="banner-title text-white text-capitalize ls-25">Men's<br>Accessories</h3>
                                <del class="old-price text-white">$499.99</del>
                                <div class="new-price text-secondary ls-25">$299.99</div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End of Grid -->

                <div class="title-link-wrapper appear-animate mt-10 mb-4">
                    <h2 class="title title-link pt-1">Consumer Electronics</h2>
                    <a href="#" class="ls-normal">More Products<i class="w-icon-long-arrow-right"></i></a>
                </div>
                <div class="owl-carousel owl-theme row appear-animate cols-lg-5 cols-md-4 cols-sm-3 cols-2 mb-9"
                    data-owl-options="{
                    'nav': false,
                    'dots': true,
                    'margin': 20,
                    'responsive': {
                        '0': {
                            'items': 2
                        },
                        '576': {
                            'items': 3
                        },
                        '768': {
                            'items': 4
                        },
                        '992': {
                            'items': 5
                        }
                    }
                }">
                    <div class="product-wrap">
                        <div class="product text-center">
                            <figure class="product-media">
                                <a href="product-default.html">
                                    <img src="assets/images/demos/demo5/products/4-1-1.jpg" alt="Product" width="300"
                                        height="338">
                                    <img src="assets/images/demos/demo5/products/4-1-2.jpg" alt="Product" width="300"
                                        height="338">
                                </a>
                                <div class="product-action-vertical">
                                    <a href="#" class="btn-product-icon btn-cart w-icon-cart" title="Add to cart"></a>
                                    <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                        title="Add to wishlist"></a>
                                    <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                        title="Quickview"></a>
                                    <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                        title="Add to Compare"></a>
                                </div>
                            </figure>
                            <div class="product-details">
                                <h4 class="product-name"><a href="product-default.html">Red Cap Sound Marker</a></h4>
                                <div class="ratings-container">
                                    <div class="ratings-full">
                                        <span class="ratings" style="width: 80%;"></span>
                                        <span class="tooltiptext tooltip-top"></span>
                                    </div>
                                    <a href="product-default.html" class="rating-reviews">(1 Reviews)</a>
                                </div>
                                <div class="product-price">
                                    <ins class="new-price">$65.89 - $69.99</ins>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End of Product Wrap -->
                    <div class="product-wrap">
                        <div class="product text-center">
                            <figure class="product-media">
                                <a href="product-default.html">
                                    <img src="assets/images/demos/demo5/products/4-2.jpg" alt="Product" width="300"
                                        height="338">
                                </a>
                                <div class="product-action-vertical">
                                    <a href="#" class="btn-product-icon btn-cart w-icon-cart" title="Add to cart"></a>
                                    <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                        title="Add to wishlist"></a>
                                    <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                        title="Quickview"></a>
                                    <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                        title="Add to Compare"></a>
                                </div>
                            </figure>
                            <div class="product-details">
                                <h4 class="product-name"><a href="product-default.html">Men's Black Watch</a></h4>
                                <div class="ratings-container">
                                    <div class="ratings-full">
                                        <span class="ratings" style="width: 60%;"></span>
                                        <span class="tooltiptext tooltip-top"></span>
                                    </div>
                                    <a href="product-default.html" class="rating-reviews">(1 Reviews)</a>
                                </div>
                                <div class="product-price">
                                    <ins class="new-price">$75.00</ins><del class="old-price">$79.00</del>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End of Product Wrap -->
                    <div class="product-wrap">
                        <div class="product text-center">
                            <figure class="product-media">
                                <a href="product-default.html">
                                    <img src="assets/images/demos/demo5/products/4-3.jpg" alt="Product" width="300"
                                        height="338">
                                </a>
                                <div class="product-action-vertical">
                                    <a href="#" class="btn-product-icon btn-cart w-icon-cart" title="Add to cart"></a>
                                    <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                        title="Add to wishlist"></a>
                                    <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                        title="Quickview"></a>
                                    <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                        title="Add to Compare"></a>
                                </div>
                            </figure>
                            <div class="product-details">
                                <h4 class="product-name"><a href="product-default.html">Fabulous Sound Speaker</a></h4>
                                <div class="ratings-container">
                                    <div class="ratings-full">
                                        <span class="ratings" style="width: 100%;"></span>
                                        <span class="tooltiptext tooltip-top"></span>
                                    </div>
                                    <a href="product-default.html" class="rating-reviews">(5 Reviews)</a>
                                </div>
                                <div class="product-price">
                                    <ins class="new-price">$62.00</ins>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End of Product Wrap -->
                    <div class="product-wrap">
                        <div class="product text-center">
                            <figure class="product-media">
                                <a href="product-default.html">
                                    <img src="assets/images/demos/demo5/products/4-4-1.jpg" alt="Product" width="300"
                                        height="338">
                                    <img src="assets/images/demos/demo5/products/4-4-2.jpg" alt="Product" width="300"
                                        height="338">
                                </a>
                                <div class="product-action-vertical">
                                    <a href="#" class="btn-product-icon btn-cart w-icon-cart" title="Add to cart"></a>
                                    <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                        title="Add to wishlist"></a>
                                    <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                        title="Quickview"></a>
                                    <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                        title="Add to Compare"></a>
                                </div>
                            </figure>
                            <div class="product-details">
                                <h4 class="product-name"><a href="product-default.html">Mini Wireless Earphone</a></h4>
                                <div class="ratings-container">
                                    <div class="ratings-full">
                                        <span class="ratings" style="width: 100%;"></span>
                                        <span class="tooltiptext tooltip-top"></span>
                                    </div>
                                    <a href="product-default.html" class="rating-reviews">(8 Reviews)</a>
                                </div>
                                <div class="product-price">
                                    <ins class="new-price">$49.99</ins>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End of Product Wrap -->
                    <div class="product-wrap">
                        <div class="product text-center">
                            <figure class="product-media">
                                <a href="product-default.html">
                                    <img src="assets/images/demos/demo5/products/4-5.jpg" alt="Product" width="300"
                                        height="338">
                                </a>
                                <div class="product-action-vertical">
                                    <a href="#" class="btn-product-icon btn-cart w-icon-cart" title="Add to cart"></a>
                                    <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                        title="Add to wishlist"></a>
                                    <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                        title="Quickview"></a>
                                    <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                        title="Add to Compare"></a>
                                </div>
                            </figure>
                            <div class="product-details">
                                <h4 class="product-name"><a href="product-default.html">Good-Performance Humidifier</a>
                                </h4>
                                <div class="ratings-container">
                                    <div class="ratings-full">
                                        <span class="ratings" style="width: 80%;"></span>
                                        <span class="tooltiptext tooltip-top"></span>
                                    </div>
                                    <a href="product-default.html" class="rating-reviews">(4 Reviews)</a>
                                </div>
                                <div class="product-price">
                                    <ins class="new-price">$79.00</ins>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End of Product Wrap -->
                </div>
                <!-- End of Products -->

                <h2 class="title text-left title-client  mb-5 appear-animate">Our Clients</h2>
                <div class="owl-carousel owl-theme row cols-xl-8 cols-lg-6 cols-md-4 cols-sm-3 cols-2 brands-wrapper br-sm mb-10 appear-animate"
                    data-owl-options="{
                    'nav': false,
                    'dots': false,
                    'autoplay': false,
                    'autoplayTimeout': 4000,
                    'loop': true,
                    'margin': 20,
                    'responsive': {
                        '0': {
                            'items': 2
                        },
                        '576': {
                            'items': 3
                        },
                        '768': {
                            'items': 4
                        },
                        '992': {
                            'items': 6
                        },
                        '1200': {
                            'items': 8
                        }
                    }
                }">
                    <figure>
                        <img src="assets/images/demos/demo5/brands/1.png" alt="Brand" width="310" height="180" />
                    </figure>
                    <figure>
                        <img src="assets/images/demos/demo5/brands/2.png" alt="Brand" width="310" height="180" />
                    </figure>
                    <figure>
                        <img src="assets/images/demos/demo5/brands/3.png" alt="Brand" width="310" height="180" />
                    </figure>
                    <figure>
                        <img src="assets/images/demos/demo5/brands/4.png" alt="Brand" width="310" height="180" />
                    </figure>
                    <figure>
                        <img src="assets/images/demos/demo5/brands/5.png" alt="Brand" width="310" height="180" />
                    </figure>
                    <figure>
                        <img src="assets/images/demos/demo5/brands/6.png" alt="Brand" width="310" height="180" />
                    </figure>
                    <figure>
                        <img src="assets/images/demos/demo5/brands/7.png" alt="Brand" width="310" height="180" />
                    </figure>
                    <figure>
                        <img src="assets/images/demos/demo5/brands/8.png" alt="Brand" width="310" height="180" />
                    </figure>
                </div>
                <!-- End of Brands Wrapper -->

                <div class="title-link-wrapper appear-animate mb-4">
                    <h2 class="title title-link title-blog">From Our Blog</h2>
                    <a href="blog-listing.html" class="font-weight-bold font-size-normal ls-normal">View All
                        Articles</a>
                </div>
                <div class="owl-carousel owl-theme post-wrapper appear-animate row cols-lg-4 cols-md-3 cols-sm-2 cols-1 mb-3"
                    data-owl-options="{
                    'items': 4,
                    'nav': false,
                    'dots': true,
                    'loop': false,
                    'margin': 20,
                    'responsive': {
                        '0': {
                            'items': 1
                        },
                        '576': {
                            'items': 2
                        },
                        '768': {
                            'items': 3
                        },
                        '992': {
                            'items': 4,
                            'dots': false
                        }
                    }
                }">
                    <div class="post text-center overlay-zoom">
                        <figure class="post-media br-sm">
                            <a href="post-single.html">
                                <img src="assets/images/demos/demo5/blogs/1.jpg" alt="Post" width="280" height="180"
                                    style="background-color: #828896;" />
                            </a>
                        </figure>
                        <div class="post-details">
                            <div class="post-meta">
                                by <a href="#" class="post-author">John Doe</a>
                                - <a href="#" class="post-date mr-0">03.05.2021</a>
                            </div>
                            <h4 class="post-title"><a href="post-single.html">Aliquam tincidunt mauris eurisus</a></h4>
                            <a href="post-single.html" class="btn btn-link btn-dark btn-underline">Read More<i
                                    class="w-icon-long-arrow-right"></i></a>
                        </div>
                    </div>
                    <div class="post text-center overlay-zoom">
                        <figure class="post-media br-sm">
                            <a href="post-single.html">
                                <img src="assets/images/demos/demo5/blogs/2.jpg" alt="Post" width="280" height="180"
                                    style="background-color: #C7C7C5;" />
                            </a>
                        </figure>
                        <div class="post-details">
                            <div class="post-meta">
                                by <a href="#" class="post-author">John Doe</a>
                                - <a href="#" class="post-date mr-0">03.05.2021</a>
                            </div>
                            <h4 class="post-title"><a href="post-single.html">Cras ornare tristique elit</a></h4>
                            <a href="post-single.html" class="btn btn-link btn-dark btn-underline">Read More<i
                                    class="w-icon-long-arrow-right"></i></a>
                        </div>
                    </div>
                    <div class="post text-center overlay-zoom">
                        <figure class="post-media br-sm">
                            <a href="post-single.html">
                                <img src="assets/images/demos/demo5/blogs/3.jpg" alt="Post" width="280" height="180"
                                    style="background-color: #BDBDB5;" />
                            </a>
                        </figure>
                        <div class="post-details">
                            <div class="post-meta">
                                by <a href="#" class="post-author">John Doe</a>
                                - <a href="#" class="post-date mr-0">03.05.2021</a>
                            </div>
                            <h4 class="post-title"><a href="post-single.html">Vivamus vestibulum ntulla nec ante</a>
                            </h4>
                            <a href="post-single.html" class="btn btn-link btn-dark btn-underline">Read More<i
                                    class="w-icon-long-arrow-right"></i></a>
                        </div>
                    </div>
                    <div class="post text-center overlay-zoom">
                        <figure class="post-media br-sm">
                            <a href="post-single.html">
                                <img src="assets/images/demos/demo5/blogs/4.jpg" alt="Post" width="280" height="180"
                                    style="background-color: #546B73;" />
                            </a>
                        </figure>
                        <div class="post-details">
                            <div class="post-meta">
                                by <a href="#" class="post-author">John Doe</a>
                                - <a href="#" class="post-date mr-0">03.05.2021</a>
                            </div>
                            <h4 class="post-title"><a href="post-single.html">Fusce lacinia arcuet nulla</a></h4>
                            <a href="post-single.html" class="btn btn-link btn-dark btn-underline">Read More<i
                                    class="w-icon-long-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <!-- Post Wrapper -->

                <div class="title-link-wrapper appear-animate mb-4">
                    <h2 class="title title-link title-viewed">Recently Viewed</h2>
                    <a href="shop-list.html" class="font-weight-bold font-size-normal ls-normal">
                        More Products<i class="w-icon-long-arrow-right"></i></a>
                </div>
                <div class="owl-carousel owl-theme owl-shadow-carousel appear-animate row cols-xl-8 cols-lg-6 cols-md-4 cols-2 pb-2 mb-10"
                    data-owl-options="{
                    'nav': false,
                    'dots': true,
                    'margin': 20,
                    'responsive': {
                        '0': {
                            'items': 2
                        },
                        '576': {
                            'items': 3
                        },
                        '768': {
                            'items': 5
                        },
                        '992': {
                            'items': 6
                        },
                        '1200': {
                            'items': 8,
                            'dots': false
                        }
                    }
                }">
                    <div class="product-wrap">
                        <div class="product text-center product-absolute">
                            <figure class="product-media">
                                <a href="product-defaproduct-default.html">
                                    <img src="assets/images/demos/demo5/products/3-5.jpg" alt="Category image"
                                        width="130" height="146" style="background-color: #fff" />
                                </a>
                            </figure>
                            <h4 class="product-name">
                                <a href="product-default.html">Headkerchief</a>
                            </h4>
                        </div>
                    </div>
                    <!-- End of Product Wrap -->
                    <div class="product-wrap">
                        <div class="product text-center product-absolute">
                            <figure class="product-media">
                                <a href="product-defaproduct-default.html">
                                    <img src="assets/images/demos/demo5/products/1-1-1.jpg" alt="Category image"
                                        width="130" height="146" style="background-color: #fff" />
                                </a>
                            </figure>
                            <h4 class="product-name">
                                <a href="product-default.html">Leather Stripe Watch</a>
                            </h4>
                        </div>
                    </div>
                    <!-- End of Product Wrap -->
                    <div class="product-wrap">
                        <div class="product text-center product-absolute">
                            <figure class="product-media">
                                <a href="product-defaproduct-default.html">
                                    <img src="assets/images/demos/demo5/products/4-1-1.jpg" alt="Category image"
                                        width="130" height="146" style="background-color: #fff" />
                                </a>
                            </figure>
                            <h4 class="product-name">
                                <a href="product-default.html">Red Cap Sound Marker</a>
                            </h4>
                        </div>
                    </div>
                    <!-- End of Product Wrap -->
                    <div class="product-wrap">
                        <div class="product text-center product-absolute">
                            <figure class="product-media">
                                <a href="product-defaproduct-default.html">
                                    <img src="assets/images/demos/demo5/products/2-3.jpg" alt="Category image"
                                        width="130" height="146" style="background-color: #fff" />
                                </a>
                            </figure>
                            <h4 class="product-name">
                                <a href="product-default.html">Smartphone Electronic Charger</a>
                            </h4>
                        </div>
                    </div>
                    <!-- End of Product Wrap -->
                    <div class="product-wrap">
                        <div class="product text-center product-absolute">
                            <figure class="product-media">
                                <a href="product-defaproduct-default.html">
                                    <img src="assets/images/demos/demo5/products/2-5.jpg" alt="Category image"
                                        width="130" height="146" style="background-color: #fff" />
                                </a>
                            </figure>
                            <h4 class="product-name">
                                <a href="product-default.html">Blue Ski Boots</a>
                            </h4>
                        </div>
                    </div>
                    <!-- End of Product Wrap -->
                    <div class="product-wrap">
                        <div class="product text-center product-absolute">
                            <figure class="product-media">
                                <a href="product-defaproduct-default.html">
                                    <img src="assets/images/demos/demo5/products/2-8.jpg" alt="Category image"
                                        width="130" height="146" style="background-color: #fff" />
                                </a>
                            </figure>
                            <h4 class="product-name">
                                <a href="product-default.html">Soft Sound Marker</a>
                            </h4>
                        </div>
                    </div>
                    <!-- End of Product Wrap -->
                    <div class="product-wrap">
                        <div class="product text-center product-absolute">
                            <figure class="product-media">
                                <a href="product-defaproduct-default.html">
                                    <img src="assets/images/demos/demo5/products/3-1-1.jpg" alt="Category image"
                                        width="130" height="146" style="background-color: #fff" />
                                </a>
                            </figure>
                            <h4 class="product-name">
                                <a href="product-default.html">Multi function Watch</a>
                            </h4>
                        </div>
                    </div>
                    <!-- End of Product Wrap -->
                    <div class="product-wrap">
                        <div class="product text-center product-absolute">
                            <figure class="product-media">
                                <a href="product-defaproduct-default.html">
                                    <img src="assets/images/demos/demo5/products/1-2.jpg" alt="Category image"
                                        width="130" height="146" style="background-color: #fff" />
                                </a>
                            </figure>
                            <h4 class="product-name">
                                <a href="product-default.html">Running Machine</a>
                            </h4>
                        </div>
                    </div>
                    <!-- End of Product Wrap -->
                </div>
                <!-- End of Reviewed Producs -->
            </div>
        </main>
        <!-- End of Main -->

    </div>
    <!-- End of Page Wrapper -->

   


        <?php include "include/footercontent.php"; ?>

	</div>

	<!-- End of Page-wrapper-->
</body>


	<?php include "include/footerscript.php"; ?>


<script>

    $(document).ready(function(){

        $('.addtocart').click(function(e){

            e.preventDefault();

            var productID = $(this).attr('id'); 

            var qty = '1';



            addtocart(productID, qty);

            

        });

    });

</script>

</body>



</html>
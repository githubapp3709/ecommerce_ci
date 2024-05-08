<!doctype html>
<html class="no-js" lang="zxx">

<!-- Mirrored from html.weblearnbd.net/shofy-prv/shofy/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 15 Oct 2023 08:12:47 GMT -->

<head>
   <meta charset="utf-8">
   <meta http-equiv="x-ua-compatible" content="ie=edge">
   <title>Shofy - Multipurpose eCommerce HTML Template</title>
   <meta name="description" content="">
   <meta name="viewport" content="width=device-width, initial-scale=1">

   <!-- Place favicon.ico in the root directory -->
   <link rel="shortcut icon" type="image/x-icon" href="assets_front/img/logo/favicon.png">

   <?php $this->load->view('front/links'); ?>
   <!-- CSS here -->

</head>

<body>
   <!--[if lte IE 9]>
      <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
      <![endif]-->


   <!-- pre loader area start -->
   <!-- <div id="loading">
      <div id="loading-center">
         <div id="loading-center-absolute"> -->
   <!-- loading content here -->
   <!-- <div class="tp-preloader-content">
               <div class="tp-preloader-logo">
                  <div class="tp-preloader-circle">
                     <svg width="190" height="190" viewBox="0 0 380 380" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle stroke="#D9D9D9" cx="190" cy="190" r="180" stroke-width="6" stroke-linecap="round"></circle>
                        <circle stroke="red" cx="190" cy="190" r="180" stroke-width="6" stroke-linecap="round"></circle>
                     </svg>
                  </div>
                  <img src="assets_front/img/logo/preloader/preloader-icon.svg" alt="">
               </div>
               <h3 class="tp-preloader-title">Shofy</h3>
               <p class="tp-preloader-subtitle">Loading</p>
            </div>
         </div>
      </div>
   </div> -->
   <!-- pre loader area end -->

   <!-- back to top start -->
   <?php $this->load->view('front/header'); ?>
   <div id="header-sticky-2" class="tp-header-sticky-area">
      <div class="container">
         <div class="tp-mega-menu-wrapper p-relative">
            <div class="row align-items-center">
               <div class="col-xl-3 col-lg-3 col-md-3 col-6">
                  <div class="logo">
                     <a href="index.html">
                        <img src="assets_front/img/logo/logo.svg" alt="logo">
                     </a>
                  </div>
               </div>
               <div class="col-xl-6 col-lg-6 col-md-6 d-none d-md-block">
                  <div class="tp-header-sticky-menu main-menu menu-style-1">
                     <nav id="mobile-menu">
                        <ul>
                           <li class="has-dropdown has-mega-menu">
                              <a href="index.html">Home</a>
                              <div class="home-menu tp-submenu tp-mega-menu">
                                 <div class="row row-cols-1 row-cols-lg-4 row-cols-xl-5">
                                    <div class="col">
                                       <div class="home-menu-item ">
                                          <a href="index.html">
                                             <div class="home-menu-thumb p-relative fix">
                                                <img src="assets_front/img/menu/menu-home-1.jpg" alt="">
                                             </div>
                                             <div class="home-menu-content">
                                                <h5 class="home-menu-title">Electronics </h5>
                                             </div>
                                          </a>
                                       </div>
                                    </div>
                                    <div class="col">
                                       <div class="home-menu-item ">
                                          <a href="index-2.html">
                                             <div class="home-menu-thumb p-relative fix">
                                                <img src="assets_front/img/menu/menu-home-2.jpg" alt="">
                                             </div>
                                             <div class="home-menu-content">
                                                <h5 class="home-menu-title">Fashion</h5>
                                             </div>
                                          </a>
                                       </div>
                                    </div>
                                    <div class="col">
                                       <div class="home-menu-item ">
                                          <a href="index-3.html">
                                             <div class="home-menu-thumb p-relative fix">
                                                <img src="assets_front/img/menu/menu-home-3.jpg" alt="">
                                             </div>
                                             <div class="home-menu-content">
                                                <h5 class="home-menu-title">Beauty</h5>
                                             </div>
                                          </a>
                                       </div>
                                    </div>
                                    <div class="col">
                                       <div class="home-menu-item ">
                                          <a href="index-4.html">
                                             <div class="home-menu-thumb p-relative fix">
                                                <img src="assets_front/img/menu/menu-home-4.jpg" alt="">
                                             </div>
                                             <div class="home-menu-content">
                                                <h5 class="home-menu-title">Jewelry </h5>
                                             </div>
                                          </a>
                                       </div>
                                    </div>
                                    <div class="col">
                                       <div class="home-menu-item ">
                                          <a href="index-5.html">
                                             <div class="home-menu-thumb p-relative fix">
                                                <img src="assets_front/img/menu/menu-home-5.jpg" alt="">
                                             </div>
                                             <div class="home-menu-content">
                                                <h5 class="home-menu-title">Grocery</h5>
                                             </div>
                                          </a>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </li>
                           <li class="has-dropdown has-mega-menu">
                              <a href="shop.html">Shop</a>
                              <div class="shop-mega-menu tp-submenu tp-mega-menu">
                                 <div class="row">
                                    <div class="col-lg-2">
                                       <div class="shop-mega-menu-list">
                                          <a href="shop.html" class="shop-mega-menu-title">Shop Pages</a>
                                          <ul>
                                             <li><a href="shop-category.html">Grid Category</a></li>
                                             <li><a href="shop.html">Grid Layout</a></li>
                                             <li><a href="shop-list.html">List Layout</a></li>
                                             <li><a href="shop-masonary.html">Masonary Layout</a></li>
                                             <li><a href="shop-full-width.html">Full width Layout</a></li>
                                             <li><a href="shop-1600.html">1600px Layout</a></li>
                                             <li><a href="shop.html">Left Sidebar</a></li>
                                             <li><a href="shop-right-sidebar.html">Right Sidebar</a></li>
                                             <li><a href="shop-no-sidebar.html">Hidden Sidebar</a></li>
                                          </ul>
                                       </div>
                                    </div>
                                    <div class="col-lg-2">
                                       <div class="shop-mega-menu-list">
                                          <a href="shop.html" class="shop-mega-menu-title">Features</a>
                                          <ul>
                                             <li><a href="shop-filter-dropdown.html">Filter Dropdown</a></li>
                                             <li><a href="shop-filter-offcanvas.html">Filters Offcanvas</a></li>
                                             <li><a href="shop.html">Filters Sidebar</a></li>
                                             <li><a href="shop-load-more.html">Load More button</a></li>
                                             <li><a href="shop-infinite-scroll.html">Infinit scrolling</a></li>
                                             <li><a href="shop-list.html">Collections list</a></li>
                                             <li><a href="shop.html">Hidden search</a></li>
                                             <li><a href="shop.html">Search Full screen</a></li>
                                          </ul>
                                       </div>
                                    </div>
                                    <div class="col-lg-2">
                                       <div class="shop-mega-menu-list">
                                          <a href="shop.html" class="shop-mega-menu-title">Hover Style</a>
                                          <ul>
                                             <li><a href="shop.html">Hover Style 1</a></li>
                                             <li><a href="shop.html">Hover Style 2</a></li>
                                             <li><a href="shop.html">Hover Style 3</a></li>
                                             <li><a href="shop.html">Hover Style 4</a></li>
                                          </ul>
                                       </div>
                                    </div>
                                    <div class="col-lg-3">
                                       <div class="shop-mega-menu-img">
                                          <img src="assets_front/img/menu/product/menu-product-img-1.jpg" alt="">
                                          <div class="shop-mega-menu-btn">
                                             <a href="shop-category.html" class="tp-menu-showcase-btn tp-menu-showcase-btn-2">Phones</a>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-lg-3">
                                       <div class="shop-mega-menu-img">
                                          <img src="assets_front/img/menu/product/menu-product-img-2.jpg" alt="">
                                          <div class="shop-mega-menu-btn">
                                             <a href="shop-category.html" class="tp-menu-showcase-btn tp-menu-showcase-btn-2">Cameras</a>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </li>
                           <li class="has-dropdown has-mega-menu ">

                              <a href="shop.html">Products</a>
                              <ul class="tp-submenu tp-mega-menu mega-menu-style-2">
                                 <!-- first col -->
                                 <li class="has-dropdown">
                                    <a href="shop.html" class="mega-menu-title">Shop Page</a>
                                    <ul class="tp-submenu">
                                       <li><a href="shop-category.html">Only Categories</a></li>
                                       <li><a href="shop-filter-offcanvas.html">Shop Grid</a></li>
                                       <li><a href="shop.html">Shop Grid with Sideber</a></li>
                                       <li><a href="shop-list.html">Shop List</a></li>
                                       <li><a href="shop-category.html">Categories</a></li>
                                       <li><a href="product-details.html">Product Details</a></li>
                                       <li><a href="product-details-progress.html">Product Details Progress</a></li>
                                    </ul>
                                 </li>
                                 <!-- third col -->
                                 <li class="has-dropdown">
                                    <a href="product-details.html" class="mega-menu-title">Products</a>
                                    <ul class="tp-submenu">

                                       <li><a href="product-details.html">Product Simple</a></li>
                                       <li><a href="product-details-video.html">With Video</a></li>
                                       <li><a href="product-details-countdown.html">With Countdown Timer</a></li>
                                       <li><a href="product-details-presentation.html">Product Presentation</a></li>
                                       <li><a href="product-details-swatches.html">Variations Swatches</a></li>
                                       <li><a href="product-details-list.html">List View</a></li>
                                       <li><a href="product-details-gallery.html">Details Gallery</a></li>
                                       <li><a href="product-details-slider.html">With Slider</a></li>
                                    </ul>
                                 </li>
                                 <!-- third col -->
                                 <li class="has-dropdown">
                                    <a href="shop.html" class="mega-menu-title">eCommerce</a>
                                    <ul class="tp-submenu">
                                       <li><a href="cart.html">Shopping Cart</a></li>
                                       <li><a href="order.html">Track Your Order</a></li>
                                       <li><a href="compare.html">Compare</a></li>
                                       <li><a href="wishlist.html">Wishlist</a></li>
                                       <li><a href="checkout.html">Checkout</a></li>
                                       <li><a href="profile.html">My account</a></li>
                                    </ul>
                                 </li>

                                 <!-- second col -->
                                 <li class="has-dropdown">
                                    <a href="shop.html" class="mega-menu-title">More Pages</a>
                                    <ul class="tp-submenu">


                                       <li><a href="about.html">About</a></li>
                                       <li><a href="login.html">Login</a></li>
                                       <li><a href="register.html">Register</a></li>
                                       <li><a href="forgot.html">Forgot Password</a></li>
                                       <li><a href="404.html">404 Error</a></li>
                                    </ul>
                                 </li>

                              </ul>
                           </li>
                           <li><a href="coupon.html">Coupons</a></li>
                           <li class="has-dropdown">
                              <a href="blog.html">Blog</a>
                              <ul class="tp-submenu">
                                 <li><a href="blog.html">Blog Standard</a></li>
                                 <li><a href="blog-grid.html">Blog Grid</a></li>
                                 <li><a href="blog-list.html">Blog List</a></li>
                                 <li><a href="blog-details-2.html">Blog Details Full Width</a></li>
                                 <li><a href="blog-details.html">Blog Details</a></li>
                              </ul>
                           </li>
                           <li><a href="contact.html">Contact</a></li>
                        </ul>
                     </nav>
                  </div>
               </div>
               <div class="col-xl-3 col-lg-3 col-md-3 col-6">
                  <div class="tp-header-action d-flex align-items-center justify-content-end ml-50">
                     <div class="tp-header-action-item d-none d-lg-block">
                        <a href="compare.html" class="tp-header-action-btn">
                           <svg width="20" height="19" viewBox="0 0 20 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path d="M14.8396 17.3319V3.71411" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                              <path d="M19.1556 13L15.0778 17.0967L11 13" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                              <path d="M4.91115 1.00056V14.6183" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                              <path d="M0.833496 5.09667L4.91127 1L8.98905 5.09667" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                           </svg>
                        </a>
                     </div>
                     <div class="tp-header-action-item d-none d-lg-block">
                        <a href="wishlist.html" class="tp-header-action-btn">
                           <svg width="22" height="20" viewBox="0 0 22 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path fill-rule="evenodd" clip-rule="evenodd" d="M11.239 18.8538C13.4096 17.5179 15.4289 15.9456 17.2607 14.1652C18.5486 12.8829 19.529 11.3198 20.1269 9.59539C21.2029 6.25031 19.9461 2.42083 16.4289 1.28752C14.5804 0.692435 12.5616 1.03255 11.0039 2.20148C9.44567 1.03398 7.42754 0.693978 5.57894 1.28752C2.06175 2.42083 0.795919 6.25031 1.87187 9.59539C2.46978 11.3198 3.45021 12.8829 4.73806 14.1652C6.56988 15.9456 8.58917 17.5179 10.7598 18.8538L10.9949 19L11.239 18.8538Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                              <path d="M7.26062 5.05302C6.19531 5.39332 5.43839 6.34973 5.3438 7.47501" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                           </svg>
                           <span class="tp-header-action-badge">4</span>
                        </a>
                     </div>
                     <div class="tp-header-action-item">
                        <button type="button" class="tp-header-action-btn cartmini-open-btn">
                           <svg width="21" height="22" viewBox="0 0 21 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path fill-rule="evenodd" clip-rule="evenodd" d="M6.48626 20.5H14.8341C17.9004 20.5 20.2528 19.3924 19.5847 14.9348L18.8066 8.89359C18.3947 6.66934 16.976 5.81808 15.7311 5.81808H5.55262C4.28946 5.81808 2.95308 6.73341 2.4771 8.89359L1.69907 14.9348C1.13157 18.889 3.4199 20.5 6.48626 20.5Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                              <path d="M6.34902 5.5984C6.34902 3.21232 8.28331 1.27803 10.6694 1.27803V1.27803C11.8184 1.27316 12.922 1.72619 13.7362 2.53695C14.5504 3.3477 15.0081 4.44939 15.0081 5.5984V5.5984" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                              <path d="M7.70365 10.1018H7.74942" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                              <path d="M13.5343 10.1018H13.5801" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                           </svg>
                           <span class="tp-header-action-badge">13</span>
                        </button>
                     </div>
                     <div class="tp-header-action-item d-lg-none">
                        <button type="button" class="tp-header-action-btn tp-offcanvas-open-btn">
                           <svg xmlns="http://www.w3.org/2000/svg" width="30" height="16" viewBox="0 0 30 16">
                              <rect x="10" width="20" height="2" fill="currentColor" />
                              <rect x="5" y="7" width="25" height="2" fill="currentColor" />
                              <rect x="10" y="14" width="20" height="2" fill="currentColor" />
                           </svg>
                        </button>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>


   <main>

      <!-- slider area start -->
      <section class="tp-slider-area p-relative z-index-1">
         <div class="tp-slider-active tp-slider-variation swiper-container">
            <div class="swiper-wrapper">

               <?php if (!empty($banner)) {
                  foreach ($banner as $bann) { ?>

                     <div class="tp-slider-item tp-slider-height d-flex align-items-center swiper-slide green-dark-bg">
                        <div class="tp-slider-shape">
                           <img class="tp-slider-shape-1" src="assets_front/img/slider/shape/slider-shape-1.png" alt="slider-shape">
                           <img class="tp-slider-shape-2" src="assets_front/img/slider/shape/slider-shape-2.png" alt="slider-shape">
                           <img class="tp-slider-shape-3" src="assets_front/img/slider/shape/slider-shape-3.png" alt="slider-shape">
                           <img class="tp-slider-shape-4" src="assets_front/img/slider/shape/slider-shape-4.png" alt="slider-shape">
                        </div>
                        <div class="container">
                           <div class="row align-items-center">
                              <div class="col-xl-5 col-lg-6 col-md-6">
                                 <div class="tp-slider-content p-relative z-index-1">
                                    <span>Starting at <b>$274.00</b></span>
                                    <h3 class="tp-slider-title">The best tablet Collection 2023</h3>
                                    <p>Exclusive offer
                                       <span>-35%
                                          <svg width="94" height="20" viewBox="0 0 94 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                             <path d="M74.8576 4.63367L78.6048 5.11367C80.9097 5.35155 82.8309 5.75148 84.4483 5.97993L86.6581 6.31091L88.4262 6.63948C89.4684 6.81761 90.2699 6.9312 90.8805 6.99186C93.3213 7.24888 92.7011 6.63674 92.8183 6.12534C92.9355 5.61394 93.7175 5.37081 91.3267 4.45886C90.73 4.24001 89.9345 3.97481 88.8826 3.65818L87.1034 3.12577L84.8643 2.63282C83.236 2.28025 81.2402 1.82307 78.8684 1.52138L75.0177 0.981633C73.6188 0.823014 72.1417 0.730003 70.5389 0.582533C63.0297 0.0282543 55.4847 0.193022 48.0068 1.07459C39.9065 2.04304 31.9328 3.87384 24.2213 6.53586C18.0824 8.61764 12.1674 11.3089 6.56479 14.5692C4.88189 15.5255 3.25403 16.5756 1.68892 17.7145C0.568976 18.5077 -0.00964231 18.9932 0.0547097 19.0858C0.388606 19.6584 10.6194 13.1924 25.151 8.99361C32.789 6.72748 40.6283 5.20536 48.5593 4.44848C55.8569 3.76455 63.1992 3.69678 70.5082 4.24591L74.8223 4.62335" fill="currentColor" />
                                          </svg>
                                       </span>
                                       off this week
                                    </p>

                                    <div class="tp-slider-btn">
                                       <a href="shop.html" class="tp-btn tp-btn-2 tp-btn-white">Shop Now
                                          <svg width="17" height="14" viewBox="0 0 17 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                             <path d="M16 6.99976L1 6.99976" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                             <path d="M9.9502 0.975414L16.0002 6.99941L9.9502 13.0244" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                          </svg>
                                       </a>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-xl-7 col-lg-6 col-md-6">
                                 <div class="tp-slider-thumb text-end">
                                    <img src="uploads/<?= $bann->bann_image; ?>" alt="slider-img">
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <?php }
               }
                     ?>?>

            </div>
            <div class="tp-slider-arrow tp-swiper-arrow d-none d-lg-block">
               <button type="button" class="tp-slider-button-prev">
                  <svg width="8" height="14" viewBox="0 0 8 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                     <path d="M7 13L1 7L7 1" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                  </svg>
               </button>
               <button type="button" class="tp-slider-button-next">
                  <svg width="8" height="14" viewBox="0 0 8 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                     <path d="M1 13L7 7L1 1" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                  </svg>
               </button>
            </div>
            <div class="tp-slider-dot tp-swiper-dot"></div>
         </div>
      </section>
      <!-- slider area end -->

      <!-- product category area start -->
      <section class="tp-product-category pt-60 pb-15">
         <div class="container">
            <div class="row row-cols-xl-5 row-cols-lg-5 row-cols-md-4">

               <?php if (!empty($categ)) : foreach ($categ as $cat) : ?>

                     <div class="col">
                        <div class="tp-product-category-item text-center mb-40">
                           <div class="tp-product-category-thumb fix">
                              <a href="shop-category.html">
                                 <img src="uploads/<?= $cat->image ?>" alt="product-category">
                              </a>
                           </div>
                           <div class="tp-product-category-content">
                              <h3 class="tp-product-category-title">
                                 <a href="shop-category.html"><?= $cat->cate_name ?></a>
                              </h3>

                           </div>
                        </div>
                     </div>
               <?php endforeach;
               endif ?>

            </div>
         </div>
      </section>
      <!-- product category area end -->

      <!-- feature area start -->
      <section class="tp-feature-area tp-feature-border-radius pb-70">
         <div class="container">
            <div class="row gx-1 gy-1 gy-xl-0">
               <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
                  <div class="tp-feature-item d-flex align-items-start">
                     <div class="tp-feature-icon mr-15">
                        <span>
                           <svg width="33" height="27" viewBox="0 0 33 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path d="M10.7222 1H31.5555V19.0556H10.7222V1Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                              <path d="M10.7222 7.94446H5.16667L1.00001 12.1111V19.0556H10.7222V7.94446Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                              <path d="M25.3055 26C23.3879 26 21.8333 24.4454 21.8333 22.5278C21.8333 20.6101 23.3879 19.0555 25.3055 19.0555C27.2232 19.0555 28.7778 20.6101 28.7778 22.5278C28.7778 24.4454 27.2232 26 25.3055 26Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                              <path d="M7.25001 26C5.33235 26 3.77778 24.4454 3.77778 22.5278C3.77778 20.6101 5.33235 19.0555 7.25001 19.0555C9.16766 19.0555 10.7222 20.6101 10.7222 22.5278C10.7222 24.4454 9.16766 26 7.25001 26Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                           </svg>
                        </span>
                     </div>
                     <div class="tp-feature-content">
                        <h3 class="tp-feature-title">Free Delivary</h3>
                        <p>Orders from all item</p>
                     </div>
                  </div>
               </div>
               <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
                  <div class="tp-feature-item d-flex align-items-start">
                     <div class="tp-feature-icon mr-15">
                        <span>
                           <svg width="21" height="35" viewBox="0 0 21 35" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path d="M10.3636 1V34" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                              <path d="M17.8636 7H6.61365C5.22126 7 3.8859 7.55312 2.90134 8.53769C1.91677 9.52226 1.36365 10.8576 1.36365 12.25C1.36365 13.6424 1.91677 14.9777 2.90134 15.9623C3.8859 16.9469 5.22126 17.5 6.61365 17.5H14.1136C15.506 17.5 16.8414 18.0531 17.826 19.0377C18.8105 20.0223 19.3636 21.3576 19.3636 22.75C19.3636 24.1424 18.8105 25.4777 17.826 26.4623C16.8414 27.4469 15.506 28 14.1136 28H1.36365" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                           </svg>
                        </span>
                     </div>
                     <div class="tp-feature-content">
                        <h3 class="tp-feature-title">Return & Refunf</h3>
                        <p>Maney back guarantee</p>
                     </div>
                  </div>
               </div>
               <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
                  <div class="tp-feature-item d-flex align-items-start">
                     <div class="tp-feature-icon mr-15">
                        <span>
                           <svg width="31" height="30" viewBox="0 0 31 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <mask id="mask0_1211_583" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="31" height="30">
                                 <path fill-rule="evenodd" clip-rule="evenodd" d="M0 0H30.0024V29.9998H0V0Z" fill="white" />
                              </mask>
                              <g mask="url(#mask0_1211_583)">
                                 <path fill-rule="evenodd" clip-rule="evenodd" d="M13.4168 27.1116C14.3017 27.9756 15.7266 27.9651 16.6056 27.0816L17.6885 26.0017C18.5285 25.1632 19.6894 24.6848 20.8728 24.6848H22.4178C23.6687 24.6848 24.6856 23.6678 24.6856 22.4184V20.875C24.6856 19.6736 25.1506 18.5441 25.9995 17.6937L27.0795 16.6122C27.519 16.1713 27.7544 15.5998 27.7529 14.9938C27.7514 14.3894 27.513 13.8209 27.0825 13.3919L26.001 12.309C25.1506 11.4525 24.6856 10.3246 24.6856 9.12318V7.58277C24.6856 6.33184 23.6687 5.3149 22.4178 5.3149H20.8758C19.6744 5.3149 18.545 4.84842 17.6945 4.00397L16.6116 2.91954C15.7101 2.02709 14.2717 2.03159 13.3913 2.91804L12.3128 3.99947C11.4519 4.84992 10.3225 5.3149 9.12553 5.3149H7.58212C6.33269 5.3164 5.31575 6.33334 5.31575 7.58277V9.12018C5.31575 10.3216 4.84927 11.451 4.00332 12.303L2.93839 13.3694C2.92789 13.3814 2.91739 13.3904 2.90689 13.4009C2.02644 14.2874 2.03094 15.7258 2.91739 16.6062L4.00032 17.6892C4.84927 18.5411 5.31575 19.6706 5.31575 20.872V22.4184C5.31575 23.6678 6.33119 24.6848 7.58212 24.6848H9.12253C10.3255 24.6863 11.4549 25.1527 12.3053 26.0002L13.3868 27.0786C13.3958 27.0891 13.4063 27.0996 13.4168 27.1116ZM14.9972 30.0002C13.8468 30.0002 12.6963 29.5652 11.8159 28.6923C11.8039 28.6803 11.7919 28.6683 11.7799 28.6548L10.715 27.5914C10.2905 27.1699 9.72352 26.9359 9.12055 26.9344H7.58164C5.09029 26.9344 3.06541 24.908 3.06541 22.4182V20.8717C3.06541 20.2688 2.82992 19.7033 2.40694 19.2773L1.32851 18.2004C-0.423392 16.4575 -0.444391 13.6197 1.27601 11.8498C1.28951 11.8363 1.30301 11.8228 1.31651 11.8093L2.40844 10.7143C2.82992 10.2899 3.06541 9.72139 3.06541 9.11993V7.58252C3.06541 5.09266 5.09029 3.06628 7.58014 3.06478H9.12505C9.72652 3.06478 10.2935 2.82929 10.724 2.40482L11.7964 1.32938C13.5498 -0.436017 16.4161 -0.445016 18.1845 1.31288L19.281 2.40932C19.7054 2.83079 20.2724 3.06478 20.8754 3.06478H22.4173C24.9086 3.06478 26.935 5.09116 26.935 7.58252V9.12293C26.935 9.72439 27.169 10.2929 27.5935 10.7203L28.6704 11.7988C29.5239 12.6462 29.9978 13.7787 30.0023 14.9861C30.0068 16.1935 29.5404 17.329 28.6899 18.1854L27.5905 19.2818C27.169 19.7063 26.935 20.2718 26.935 20.8747V22.4182C26.935 24.908 24.9086 26.9344 22.4188 26.9344H20.8724C20.2784 26.9344 19.6979 27.1744 19.2765 27.5929L18.1995 28.6698C17.3191 29.5562 16.1581 30.0002 14.9972 30.0002Z" fill="currentColor" />
                              </g>
                              <path fill-rule="evenodd" clip-rule="evenodd" d="M11.145 19.9811C10.857 19.9811 10.569 19.8716 10.3501 19.6511C9.91058 19.2116 9.91058 18.5006 10.3501 18.0612L18.0596 10.3501C18.4991 9.91064 19.2115 9.91064 19.651 10.3501C20.0905 10.7896 20.0905 11.502 19.651 11.9415L11.94 19.6511C11.721 19.8716 11.433 19.9811 11.145 19.9811Z" fill="currentColor" />
                              <path fill-rule="evenodd" clip-rule="evenodd" d="M18.7544 20.2476C17.925 20.2476 17.247 19.5772 17.247 18.7477C17.247 17.9183 17.9115 17.2478 18.7409 17.2478H18.7544C19.5839 17.2478 20.2543 17.9183 20.2543 18.7477C20.2543 19.5772 19.5839 20.2476 18.7544 20.2476Z" fill="currentColor" />
                              <path fill-rule="evenodd" clip-rule="evenodd" d="M11.2548 12.748C10.4254 12.748 9.74744 12.0775 9.74744 11.2481C9.74744 10.4186 10.4119 9.74817 11.2413 9.74817H11.2548C12.0843 9.74817 12.7548 10.4186 12.7548 11.2481C12.7548 12.0775 12.0843 12.748 11.2548 12.748Z" fill="currentColor" />
                           </svg>
                        </span>
                     </div>
                     <div class="tp-feature-content">
                        <h3 class="tp-feature-title">Member Discount</h3>
                        <p>Onevery order over $140.00</p>
                     </div>
                  </div>
               </div>
               <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
                  <div class="tp-feature-item d-flex align-items-start">
                     <div class="tp-feature-icon mr-15">
                        <span>
                           <svg width="31" height="30" viewBox="0 0 31 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path d="M1.5 24.3333V15C1.5 11.287 2.975 7.72602 5.60051 5.10051C8.22602 2.475 11.787 1 15.5 1C19.213 1 22.774 2.475 25.3995 5.10051C28.025 7.72602 29.5 11.287 29.5 15V24.3333" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                              <path d="M29.5 25.8889C29.5 26.714 29.1722 27.5053 28.5888 28.0888C28.0053 28.6722 27.214 29 26.3889 29H24.8333C24.0082 29 23.2169 28.6722 22.6335 28.0888C22.05 27.5053 21.7222 26.714 21.7222 25.8889V21.2222C21.7222 20.3971 22.05 19.6058 22.6335 19.0223C23.2169 18.4389 24.0082 18.1111 24.8333 18.1111H29.5V25.8889ZM1.5 25.8889C1.5 26.714 1.82778 27.5053 2.41122 28.0888C2.99467 28.6722 3.78599 29 4.61111 29H6.16667C6.99179 29 7.78311 28.6722 8.36656 28.0888C8.95 27.5053 9.27778 26.714 9.27778 25.8889V21.2222C9.27778 20.3971 8.95 19.6058 8.36656 19.0223C7.78311 18.4389 6.99179 18.1111 6.16667 18.1111H1.5V25.8889Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                           </svg>
                        </span>
                     </div>
                     <div class="tp-feature-content">
                        <h3 class="tp-feature-title">Support 24/7</h3>
                        <p>Contact us 24 hours a day</p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- feature area end -->

      <!-- product area start -->
      <section class="tp-product-area pb-55">
         <div class="container">
            <div class="row align-items-end">
               <div class="col-xl-5 col-lg-6 col-md-5">
                  <div class="tp-section-title-wrapper mb-40">
                     <h3 class="tp-section-title">Trending Products

                        <svg width="114" height="35" viewBox="0 0 114 35" fill="none" xmlns="http://www.w3.org/2000/svg">
                           <path d="M112 23.275C1.84952 -10.6834 -7.36586 1.48086 7.50443 32.9053" stroke="currentColor" stroke-width="4" stroke-miterlimit="3.8637" stroke-linecap="round" />
                        </svg>
                     </h3>
                  </div>
               </div>
               <div class="col-xl-7 col-lg-6 col-md-7">
                  <div class="tp-product-tab tp-product-tab-border mb-45 tp-tab d-flex justify-content-md-end">
                     <ul class="nav nav-tabs justify-content-sm-end" id="productTab" role="tablist">
                        <li class="nav-item" role="presentation">
                           <button class="nav-link active" id="new-tab" data-bs-toggle="tab" data-bs-target="#new-tab-pane" type="button" role="tab" aria-controls="new-tab-pane" aria-selected="true">New
                              <span class="tp-product-tab-line">
                                 <svg width="52" height="13" viewBox="0 0 52 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1 8.97127C11.6061 -5.48521 33 3.99996 51 11.4635" stroke="currentColor" stroke-width="2" stroke-miterlimit="3.8637" stroke-linecap="round" />
                                 </svg>
                              </span>
                           </button>
                        </li>
                     </ul>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-xl-12">
                  <div class="tp-product-tab-content">
                     <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="new-tab-pane" role="tabpanel" aria-labelledby="new-tab" tabindex="0">
                           <div class="row">
                              <?php if (!empty($products)) :
                                 foreach ($products as $arr) :
                                    $cate_name = $this->HomeModel->category_name($arr->category)
                              ?>
                                    <div class="col-xl-3 col-lg-3 col-sm-6">
                                       <div class="tp-product-item p-relative transition-3 mb-25">
                                          <div class="tp-product-thumb p-relative fix m-img">
                                             <a href="product/<?= $arr->slug ?>">
                                                <img src="uploads/<?= $arr->pro_main_image; ?>" alt="product-electronic">
                                             </a>
                                          </div>
                                          <!-- product content -->
                                          <div class="tp-product-content">
                                             <div class="tp-product-category">
                                                <a href="product/<?= $arr->slug ?>"><?= $cate_name ?></a>
                                             </div>
                                             <h3 class="tp-product-title">
                                                <a href="product/<?= $arr->slug ?>">
                                                   <?= $arr->pro_name; ?>
                                                </a>
                                             </h3>
                                             <div class="tp-product-rating d-flex align-items-center">
                                                <div class="tp-product-rating-icon">
                                                   <span><i class="fa-solid fa-star"></i></span>
                                                   <span><i class="fa-solid fa-star"></i></span>
                                                   <span><i class="fa-solid fa-star"></i></span>
                                                   <span><i class="fa-solid fa-star"></i></span>
                                                   <span><i class="fa-solid fa-star-half-stroke"></i></span>
                                                </div>
                                                <div class="tp-product-rating-text">
                                                   <span>(7 Review)</span>
                                                </div>
                                             </div>
                                             <div class="tp-product-price-wrapper">
                                                <span class="tp-product-price old-price">₹ <?= number_format($arr->mrp, 2); ?></span>
                                                <span class="tp-product-price new-price">₹ <?= number_format($arr->selling_price, 2); ?></span>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                              <?php endforeach;
                              endif; ?>
                           </div>
                        </div>

                     </div>
                  </div>

               </div>
            </div>
         </div>
         </div>

         </div>
      </section>
      <!-- product area end -->



   </main>


   <!-- footer area start -->
   <footer>
      <div class="tp-footer-area" data-bg-color="footer-bg-grey">
         <div class="tp-footer-top pt-95 pb-40">
            <div class="container">
               <div class="row">
                  <div class="col-xl-4 col-lg-3 col-md-4 col-sm-6">
                     <div class="tp-footer-widget footer-col-1 mb-50">
                        <div class="tp-footer-widget-content">
                           <div class="tp-footer-logo">
                              <a href="index.html">
                                 <img src="assets_front/img/logo/logo.svg" alt="logo">
                              </a>
                           </div>
                           <p class="tp-footer-desc">We are a team of designers and developers that create high quality WordPress</p>
                           <div class="tp-footer-social">
                              <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                              <a href="#"><i class="fa-brands fa-twitter"></i></a>
                              <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                              <a href="#"><i class="fa-brands fa-vimeo-v"></i></a>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
                     <div class="tp-footer-widget footer-col-2 mb-50">
                        <h4 class="tp-footer-widget-title">My Account</h4>
                        <div class="tp-footer-widget-content">
                           <ul>
                              <li><a href="#">Track Orders</a></li>
                              <li><a href="#">Shipping</a></li>
                              <li><a href="#">Wishlist</a></li>
                              <li><a href="#">My Account</a></li>
                              <li><a href="#">Order History</a></li>
                              <li><a href="#">Returns</a></li>
                           </ul>
                        </div>
                     </div>
                  </div>
                  <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
                     <div class="tp-footer-widget footer-col-3 mb-50">
                        <h4 class="tp-footer-widget-title">Infomation</h4>
                        <div class="tp-footer-widget-content">
                           <ul>
                              <li><a href="#">Our Story</a></li>
                              <li><a href="#">Careers</a></li>
                              <li><a href="#">Privacy Policy</a></li>
                              <li><a href="#">Terms & Conditions</a></li>
                              <li><a href="#">Latest News</a></li>
                              <li><a href="#">Contact Us</a></li>
                           </ul>
                        </div>
                     </div>
                  </div>
                  <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
                     <div class="tp-footer-widget footer-col-4 mb-50">
                        <h4 class="tp-footer-widget-title">Talk To Us</h4>
                        <div class="tp-footer-widget-content">
                           <div class="tp-footer-talk mb-20">
                              <span>Got Questions? Call us</span>
                              <h4><a href="tel:670-413-90-762">+670 413 90 762</a></h4>
                           </div>
                           <div class="tp-footer-contact">
                              <div class="tp-footer-contact-item d-flex align-items-start">
                                 <div class="tp-footer-contact-icon">
                                    <span>
                                       <svg width="18" height="16" viewBox="0 0 18 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                          <path d="M1 5C1 2.2 2.6 1 5 1H13C15.4 1 17 2.2 17 5V10.6C17 13.4 15.4 14.6 13 14.6H5" stroke="currentColor" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                          <path d="M13 5.40039L10.496 7.40039C9.672 8.05639 8.32 8.05639 7.496 7.40039L5 5.40039" stroke="currentColor" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                          <path d="M1 11.4004H5.8" stroke="currentColor" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                          <path d="M1 8.19922H3.4" stroke="currentColor" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                       </svg>
                                    </span>
                                 </div>
                                 <div class="tp-footer-contact-content">
                                    <p><a href="https://html.weblearnbd.net/cdn-cgi/l/email-protection#f182999e9788b1828481819e8385df929e9c"><span class="__cf_email__" data-cfemail="95e6fdfaf3ecd5e6e0e5e5fae7e1bbf6faf8">[email&#160;protected]</span></a></p>
                                 </div>
                              </div>
                              <div class="tp-footer-contact-item d-flex align-items-start">
                                 <div class="tp-footer-contact-icon">
                                    <span>
                                       <svg width="17" height="20" viewBox="0 0 17 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                          <path d="M8.50001 10.9417C9.99877 10.9417 11.2138 9.72668 11.2138 8.22791C11.2138 6.72915 9.99877 5.51416 8.50001 5.51416C7.00124 5.51416 5.78625 6.72915 5.78625 8.22791C5.78625 9.72668 7.00124 10.9417 8.50001 10.9417Z" stroke="currentColor" stroke-width="1.5" />
                                          <path d="M1.21115 6.64496C2.92464 -0.887449 14.0841 -0.878751 15.7889 6.65366C16.7891 11.0722 14.0406 14.8123 11.6313 17.126C9.88298 18.8134 7.11704 18.8134 5.36006 17.126C2.95943 14.8123 0.210885 11.0635 1.21115 6.64496Z" stroke="currentColor" stroke-width="1.5" />
                                       </svg>
                                    </span>
                                 </div>
                                 <div class="tp-footer-contact-content">
                                    <p><a href="https://www.google.com/maps/place/Sleepy+Hollow+Rd,+Gouverneur,+NY+13642,+USA/@44.3304966,-75.4552367,17z/data=!3m1!4b1!4m6!3m5!1s0x4cccddac8972c5eb:0x56286024afff537a!8m2!3d44.3304928!4d-75.453048!16s%2Fg%2F1tdsjdj4" target="_blank">79 Sleepy Hollow St. <br> Jamaica, New York 1432</a></p>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="tp-footer-bottom">
            <div class="container">
               <div class="tp-footer-bottom-wrapper">
                  <div class="row align-items-center">
                     <div class="col-md-6">
                        <div class="tp-footer-copyright">
                           <p>© 2023 All Rights Reserved | HTML Template by <a href="index.html">Themepure</a>.</p>
                        </div>
                     </div>
                     <div class="col-md-6">
                        <div class="tp-footer-payment text-md-end">
                           <p>
                              <img src="assets_front/img/footer/footer-pay.png" alt="">
                           </p>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </footer>
   <!-- footer area end -->

   <?php $this->load->view('front/footer') ?>

   <!-- JS here -->


</body>

<!-- Mirrored from html.weblearnbd.net/shofy-prv/shofy/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 15 Oct 2023 08:14:29 GMT -->

</html>
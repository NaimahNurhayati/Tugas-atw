<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Meta -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">
  <meta name="keywords" content="MediaCenter, Template, eCommerce">
  <meta name="robots" content="all">
  <title>detail produk</title>

  <!-- Bootstrap Core CSS -->
  <link rel="stylesheet" href="{{url('public')}}/assets/css/bootstrap.min.css">

  <!-- Customizable CSS -->
  <link rel="stylesheet" href="{{url('public')}}/assets/css/main.css">
  <link rel="stylesheet" href="{{url('public')}}/assets/css/blue.css">
  <link rel="stylesheet" href="{{url('public')}}/assets/css/owl.carousel.css">
  <link rel="stylesheet" href="{{url('public')}}/assets/css/owl.transitions.css">
  <link rel="stylesheet" href="{{url('public')}}/assets/css/animate.min.css">
  <link rel="stylesheet" href="{{url('public')}}/assets/css/rateit.css">
  <link rel="stylesheet" href="{{url('public')}}/assets/css/bootstrap-select.min.css">
  <link href="{{url('public')}}/assets/css/lightbox.css" rel="stylesheet">

  <!-- Icons/Glyphs -->
  <link rel="stylesheet" href="{{url('public')}}/assets/css/font-awesome.css">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Barlow:200,300,300i,400,400i,500,500i,600,700,800" rel="stylesheet">
  <link href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,700' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,600,600italic,700,700italic,800' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
</head>

<body class="cnt-home">
  <!-- ============================================== HEADER ============================================== -->
  <header class="header-style-1">

    <!-- ============================================== TOP MENU ============================================== -->
    <div class="top-bar animate-dropdown">
      <div class="container">
        <div class="header-top-inner">
          <div class="cnt-account">
            <ul class="list-unstyled">
              <li class="myaccount"><a href="#"><span>My Account</span></a></li>
              <li class="login"><a href="{{url('/template.login')}}"><span>Login</span></a></li>
            </ul>
          </div>
          <!-- /.cnt-cart -->
          <div class="clearfix"></div>
        </div>
        <!-- /.header-top-inner -->
      </div>
      <!-- /.container -->
    </div>
    <!-- /.header-top -->
    <!-- ============================================== TOP MENU : END ============================================== -->
    <div class="main-header">
      <div class="container">
        <div class="row">
          <div class="col-xs-12 col-sm-12 col-md-3 logo-holder">
            <!-- ============================================================= LOGO ============================================================= -->
            <div class="logo"> <a href="{{url('/template')}}"> <img src="{{url('public')}}/assets/images/logo.png" alt="logo"> </a> </div>
            <!-- /.logo -->
            <!-- ============================================================= LOGO : END ============================================================= -->
          </div>
          <!-- /.logo-holder -->

          <div class="col-lg-7 col-md-6 col-sm-8 col-xs-12 top-search-holder">
            <!-- /.contact-row -->
            <!-- ============================================================= SEARCH AREA ============================================================= -->
            <div class="search-area">
              <form>
                <div class="control-group">
                  <ul class="categories-filter animate-dropdown">
                    <li class="dropdown"> <a class="dropdown-toggle" data-toggle="dropdown" href="category.html">Categories <b class="caret"></b></a>
                      <ul class="dropdown-menu" role="menu">
                        <li class="menu-header">Fashion</li>
                        <li role="presentation"><a role="menuitem" tabindex="-1" href="category.html">- Pakaian</a></li>
                        <li role="presentation"><a role="menuitem" tabindex="-1" href="category.html">- Kosmetik</a></li>
                        <li role="presentation"><a role="menuitem" tabindex="-1" href="category.html">- Aksesoris</a></li>
                        <li role="presentation"><a role="menuitem" tabindex="-1" href="category.html">- Hijab</a></li>
                        <li role="presentation"><a role="menuitem" tabindex="-1" href="category.html">- Flat Shoes</a></li>
                        <li role="presentation"><a role="menuitem" tabindex="-1" href="category.html">- Sepatu</a></li>
                      </ul>
                    </li>
                  </ul>
                  <input class="search-field" placeholder="Search here..." />
                  <a class="search-button" href="#"></a>
                </div>
              </form>
            </div>
            <!-- /.search-area -->
            <!-- ============================================================= SEARCH AREA : END ============================================================= -->
          </div>
          <!-- /.top-search-holder -->

          <div class="col-lg-2 col-md-3 col-sm-4 col-xs-12 animate-dropdown top-cart-row">
            <!-- ============================================================= SHOPPING CART DROPDOWN ============================================================= -->

            <div class="dropdown dropdown-cart"> <a href="#" class="dropdown-toggle lnk-cart" data-toggle="dropdown">
                <div class="items-cart-inner">
                  <div class="basket">
                    <div class="basket-item-count"><span class="count">2</span></div>
                    <div class="total-price-basket"> <span class="lbl">Shopping Cart</span> <span class="value">$4580</span> </div>
                  </div>
                </div>
              </a>
              <ul class="dropdown-menu">
                <li>
                  <div class="cart-item product-summary">
                    <div class="row">
                      <div class="col-xs-4">
                        <div class="image"> <a href="detail.html"><img src="{{url('public')}}/assets/images/products/p4.jpg" alt=""></a> </div>
                      </div>
                      <div class="col-xs-7">
                        <h3 class="name"><a href="index8a95.html?page-detail">Simple Product</a></h3>
                        <div class="price">$600.00</div>
                      </div>
                      <div class="col-xs-1 action"> <a href="#"><i class="fa fa-trash"></i></a> </div>
                    </div>
                  </div>
                  <!-- /.cart-item -->
                  <div class="clearfix"></div>
                  <hr>
                  <div class="clearfix cart-total">
                    <div class="pull-right"> <span class="text">Sub Total :</span><span class='price'>$600.00</span> </div>
                    <div class="clearfix"></div>
                    <a href="checkout.html" class="btn btn-upper btn-primary btn-block m-t-20">Checkout</a>
                  </div>
                  <!-- /.cart-total-->

                </li>
              </ul>
              <!-- /.dropdown-menu-->
            </div>
            <!-- /.dropdown-cart -->

            <!-- ============================================================= SHOPPING CART DROPDOWN : END============================================================= -->
          </div>
          <!-- /.top-cart-row -->
        </div>
        <!-- /.row -->

      </div>
      <!-- /.container -->

    </div>
    <!-- /.main-header -->

    <!-- ============================================== NAVBAR ============================================== -->
    <div class="header-nav animate-dropdown">
      <div class="container">
        <div class="yamm navbar navbar-default" role="navigation">
          <div class="navbar-header">
            <button data-target="#mc-horizontal-menu-collapse" data-toggle="collapse" class="navbar-toggle collapsed" type="button">
              <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
          </div>
          <div class="nav-bg-class">
            <div class="navbar-collapse collapse" id="mc-horizontal-menu-collapse">
              <div class="nav-outer">
                <ul class="nav navbar-nav">
                  <li class="active dropdown"> <a href="{{url('/template')}}">Home</a> </li>
                  <li class="dropdown"> <a href="{{url('/template.produk')}}">Produk</a> </li>
                </ul>
                <!-- /.navbar-nav -->
                <div class="clearfix"></div>
              </div>
              <!-- /.nav-outer -->
            </div>
            <!-- /.navbar-collapse -->

          </div>
          <!-- /.nav-bg-class -->
        </div>
        <!-- /.navbar-default -->
      </div>
      <!-- /.container-class -->

    </div>
    <!-- /.header-nav -->
    <!-- ============================================== NAVBAR : END ============================================== -->

  </header>
  <!-- ============================================== HEADER : END ============================================== -->
  <div class="breadcrumb">
    <div class="container">
      <div class="breadcrumb-inner">
        <ul class="list-inline list-unstyled">
          <li><a href="{{url('/template')}}">Home</a></li>
          <li><a href="{{url('/template.produk')}}">Produk</a></li>
          <li class='active'>Floral Print Buttoned</li>
        </ul>
      </div><!-- /.breadcrumb-inner -->
    </div><!-- /.container -->
  </div><!-- /.breadcrumb -->
  <div class="body-content outer-top-xs">
    <div class='container'>
      <div class='row single-product'>
        <div class='col-xs-12 col-sm-12 col-md-3 sidebar'>
          <div class="sidebar-module-container">
            <div class="home-banner outer-top-n outer-bottom-xs">
              <img src="{{url('public')}}/assets/images/banners/home-banner3.jpg" alt="Image">
            </div>



            <!-- ============================================== HOT DEALS ============================================== -->
            <div class="sidebar-widget hot-deals outer-bottom-xs">
              <h3 class="section-title">Hot deals</h3>
              <div class="owl-carousel sidebar-carousel custom-carousel owl-theme outer-top-ss">
                <div class="item">
                  <div class="products">
                    <div class="hot-deal-wrapper">
                      <div class="image">
                        <a href="#">
                          <img src="{{url('public')}}/assets/images/hot-deals/p13.jpg" alt="">
                          <img src="{{url('public')}}/assets/images/hot-deals/p13_hover.jpg" alt="" class="hover-image">
                        </a>
                      </div>
                      <div class="sale-offer-tag"><span>49%<br>
                          off</span></div>
                      <div class="timing-wrapper">
                        <div class="box-wrapper">
                          <div class="date box"> <span class="key">120</span> <span class="value">DAYS</span> </div>
                        </div>
                        <div class="box-wrapper">
                          <div class="hour box"> <span class="key">20</span> <span class="value">HRS</span> </div>
                        </div>
                        <div class="box-wrapper">
                          <div class="minutes box"> <span class="key">36</span> <span class="value">MINS</span> </div>
                        </div>
                        <div class="box-wrapper">
                          <div class="seconds box"> <span class="key">60</span> <span class="value">SEC</span> </div>
                        </div>
                      </div>
                    </div>
                    <!-- /.hot-deal-wrapper -->

                    <div class="product-info text-left m-t-20">
                      <h3 class="name"><a href="{{url('/template.detail')}}">Floral Print Buttoned</a></h3>
                      <div class="rating rateit-small"></div>
                      <div class="product-price"> <span class="price"> $600.00 </span> <span class="price-before-discount">$800.00</span> </div>
                      <!-- /.product-price -->

                    </div>
                    <!-- /.product-info -->

                    <div class="cart clearfix animate-effect">
                      <div class="action">
                        <div class="add-cart-button btn-group">
                          <button class="btn btn-primary icon" data-toggle="dropdown" type="button"> <i class="fa fa-shopping-cart"></i> </button>
                          <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                        </div>
                      </div>
                      <!-- /.action -->
                    </div>
                    <!-- /.cart -->
                  </div>
                </div>
                <div class="item">
                  <div class="products">
                    <div class="hot-deal-wrapper">
                      <div class="image">
                        <a href="#">
                          <img src="{{url('public')}}/assets/images/hot-deals/p14.jpg" alt="">
                          <img src="{{url('public')}}/assets/images/hot-deals/p14_hover.jpg" alt="" class="hover-image">
                        </a>
                      </div>
                      <div class="sale-offer-tag"><span>35%<br>
                          off</span></div>
                      <div class="timing-wrapper">
                        <div class="box-wrapper">
                          <div class="date box"> <span class="key">120</span> <span class="value">Days</span> </div>
                        </div>
                        <div class="box-wrapper">
                          <div class="hour box"> <span class="key">20</span> <span class="value">HRS</span> </div>
                        </div>
                        <div class="box-wrapper">
                          <div class="minutes box"> <span class="key">36</span> <span class="value">MINS</span> </div>
                        </div>
                        <div class="box-wrapper">
                          <div class="seconds box"> <span class="key">60</span> <span class="value">SEC</span> </div>
                        </div>
                      </div>
                    </div>
                    <!-- /.hot-deal-wrapper -->

                    <div class="product-info text-left m-t-20">
                      <h3 class="name"><a href="{{url('/template.produk')}}">Floral Print Buttoned</a></h3>
                      <div class="rating rateit-small"></div>
                      <div class="product-price"> <span class="price"> $600.00 </span> <span class="price-before-discount">$800.00</span> </div>
                      <!-- /.product-price -->

                    </div>
                    <!-- /.product-info -->

                    <div class="cart clearfix animate-effect">
                      <div class="action">
                        <div class="add-cart-button btn-group">
                          <button class="btn btn-primary icon" data-toggle="dropdown" type="button"> <i class="fa fa-shopping-cart"></i> </button>
                          <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                        </div>
                      </div>
                      <!-- /.action -->
                    </div>
                    <!-- /.cart -->
                  </div>
                </div>
                <div class="item">
                  <div class="products">
                    <div class="hot-deal-wrapper">
                      <div class="image">
                        <a href="#">
                          <img src="{{url('public')}}/assets/images/hot-deals/p15.jpg" alt="">
                          <img src="{{url('public')}}/assets/images/hot-deals/p15_hover.jpg" alt="" class="hover-image">
                        </a>
                      </div>
                      <div class="sale-offer-tag"><span>35%<br>
                          off</span></div>
                      <div class="timing-wrapper">
                        <div class="box-wrapper">
                          <div class="date box"> <span class="key">120</span> <span class="value">Days</span> </div>
                        </div>
                        <div class="box-wrapper">
                          <div class="hour box"> <span class="key">20</span> <span class="value">HRS</span> </div>
                        </div>
                        <div class="box-wrapper">
                          <div class="minutes box"> <span class="key">36</span> <span class="value">MINS</span> </div>
                        </div>
                        <div class="box-wrapper">
                          <div class="seconds box"> <span class="key">60</span> <span class="value">SEC</span> </div>
                        </div>
                      </div>
                    </div>
                    <!-- /.hot-deal-wrapper -->

                    <div class="product-info text-left m-t-20">
                      <h3 class="name"><a href="{{url('/template.produk')}}">Floral Print Buttoned</a></h3>
                      <div class="rating rateit-small"></div>
                      <div class="product-price"> <span class="price"> $600.00 </span> <span class="price-before-discount">$800.00</span> </div>
                      <!-- /.product-price -->

                    </div>
                    <!-- /.product-info -->

                    <div class="cart clearfix animate-effect">
                      <div class="action">
                        <div class="add-cart-button btn-group">
                          <button class="btn btn-primary icon" data-toggle="dropdown" type="button"> <i class="fa fa-shopping-cart"></i> </button>
                          <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                        </div>
                      </div>
                      <!-- /.action -->
                    </div>
                    <!-- /.cart -->
                  </div>
                </div>
              </div>
              <!-- /.sidebar-widget -->
            </div>
            <!-- ============================================== HOT DEALS: END ============================================== -->

            <!-- ============================================== NEWSLETTER ============================================== -->
            <!-- ============================================== NEWSLETTER: END ============================================== -->

            <!-- ============================================== Testimonials============================================== -->
            <div class="sidebar-widget  outer-top-vs ">
              <div id="advertisement" class="advertisement">
                <div class="item">
                  <div class="avatar"><img src="{{url('public')}}/assets/images/testimonials/member1.png" alt="Image"></div>
                  <div class="testimonials"><em>"</em> Vtae sodales aliq uam morbi non sem lacus port mollis. Nunc condime tum metus eud molest sed consectetuer.<em>"</em></div>
                  <div class="clients_author">John Doe <span>Abc Company</span> </div><!-- /.container-fluid -->
                </div><!-- /.item -->

                <div class="item">
                  <div class="avatar"><img src="{{url('public')}}/assets/images/testimonials/member3.png" alt="Image"></div>
                  <div class="testimonials"><em>"</em>Vtae sodales aliq uam morbi non sem lacus port mollis. Nunc condime tum metus eud molest sed consectetuer.<em>"</em></div>
                  <div class="clients_author">Stephen Doe <span>Xperia Designs</span> </div>
                </div><!-- /.item -->

                <div class="item">
                  <div class="avatar"><img src="{{url('public')}}/assets/images/testimonials/member2.png" alt="Image"></div>
                  <div class="testimonials"><em>"</em> Vtae sodales aliq uam morbi non sem lacus port mollis. Nunc condime tum metus eud molest sed consectetuer.<em>"</em></div>
                  <div class="clients_author">Saraha Smith <span>Datsun &amp; Co</span> </div><!-- /.container-fluid -->
                </div><!-- /.item -->

              </div><!-- /.owl-carousel -->
            </div>

            <!-- ============================================== Testimonials: END ============================================== -->



          </div>
        </div><!-- /.sidebar -->
        <div class='col-xs-12 col-sm-12 col-md-9 rht-col'>
          <div class="detail-block">
            <div class="row">

              <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 gallery-holder">
                <div class="product-item-holder size-big single-product-gallery small-gallery">

                  <div id="owl-single-product">
                    <div class="single-product-gallery-item" id="slide1">
                      <a data-lightbox="image-1" data-title="Gallery" href="{{url('public')}}/assets/images/products/p1.jpg">
                        <img class="img-responsive" alt="" src="{{url('public')}}/assets/images/blank.gif" data-echo="{{url('public')}}/assets/images/products/p1.jpg" />
                      </a>
                    </div><!-- /.single-product-gallery-item -->

                    <div class="single-product-gallery-item" id="slide2">
                      <a data-lightbox="image-1" data-title="Gallery" href="{{url('public')}}/assets/images/products/p2.jpg">
                        <img class="img-responsive" alt="" src="{{url('public')}}/assets/images/blank.gif" data-echo="{{url('public')}}/assets/images/products/p2.jpg" />
                      </a>
                    </div><!-- /.single-product-gallery-item -->

                    <div class="single-product-gallery-item" id="slide3">
                      <a data-lightbox="image-1" data-title="Gallery" href="{{url('public')}}/assets/images/products/p3.jpg">
                        <img class="img-responsive" alt="" src="{{url('public')}}/assets/images/blank.gif" data-echo="{{url('public')}}/assets/images/products/p3.jpg" />
                      </a>
                    </div><!-- /.single-product-gallery-item -->

                    <div class="single-product-gallery-item" id="slide4">
                      <a data-lightbox="image-1" data-title="Gallery" href="{{url('public')}}/assets/images/products/p4.jpg">
                        <img class="img-responsive" alt="" src="{{url('public')}}/assets/images/blank.gif" data-echo="{{url('public')}}/assets/images/products/p4.jpg" />
                      </a>
                    </div><!-- /.single-product-gallery-item -->

                    <div class="single-product-gallery-item" id="slide5">
                      <a data-lightbox="image-1" data-title="Gallery" href="{{url('public')}}/assets/images/products/p5.jpg">
                        <img class="img-responsive" alt="" src="{{url('public')}}/assets/images/blank.gif" data-echo="{{url('public')}}/assets/images/products/p5.jpg" />
                      </a>
                    </div><!-- /.single-product-gallery-item -->

                    <div class="single-product-gallery-item" id="slide6">
                      <a data-lightbox="image-1" data-title="Gallery" href="{{url('public')}}/assets/images/products/p6.jpg">
                        <img class="img-responsive" alt="" src="{{url('public')}}/assets/images/blank.gif" data-echo="{{url('public')}}/assets/images/products/p6.jpg" />
                      </a>
                    </div><!-- /.single-product-gallery-item -->

                    <div class="single-product-gallery-item" id="slide7">
                      <a data-lightbox="image-1" data-title="Gallery" href="assets/images/products/p7.jpg">
                        <img class="img-responsive" alt="" src="{{url('public')}}/assets/images/blank.gif" data-echo="{{url('public')}}/assets/images/products/p7.jpg" />
                      </a>
                    </div><!-- /.single-product-gallery-item -->

                    <div class="single-product-gallery-item" id="slide8">
                      <a data-lightbox="image-1" data-title="Gallery" href="{{url('public')}}/assets/images/products/p8.jpg">
                        <img class="img-responsive" alt="" src="{{url('public')}}/assets/images/blank.gif" data-echo="{{url('public')}}/assets/images/products/p8.jpg" />
                      </a>
                    </div><!-- /.single-product-gallery-item -->

                    <div class="single-product-gallery-item" id="slide9">
                      <a data-lightbox="image-1" data-title="Gallery" href="{{url('public')}}/assets/images/products/p9.jpg">
                        <img class="img-responsive" alt="" src="{{url('public')}}/assets/images/blank.gif" data-echo="{{url('public')}}/assets/images/products/p9.jpg" />
                      </a>
                    </div><!-- /.single-product-gallery-item -->

                  </div><!-- /.single-product-slider -->


                  <div class="single-product-gallery-thumbs gallery-thumbs">

                    <div id="owl-single-product-thumbnails">
                      <div class="item">
                        <a class="horizontal-thumb active" data-target="#owl-single-product" data-slide="1" href="#slide1">
                          <img class="img-responsive" alt="" src="{{url('public')}}/assets/images/blank.gif" data-echo="{{url('public')}}/assets/images/products/p1.jpg" />
                        </a>
                      </div>

                      <div class="item">
                        <a class="horizontal-thumb" data-target="#owl-single-product" data-slide="2" href="#slide2">
                          <img class="img-responsive" alt="" src="{{url('public')}}/assets/images/blank.gif" data-echo="{{url('public')}}/assets/images/products/p2.jpg" />
                        </a>
                      </div>
                      <div class="item">

                        <a class="horizontal-thumb" data-target="#owl-single-product" data-slide="3" href="#slide3">
                          <img class="img-responsive" alt="" src="{{url('public')}}/assets/images/blank.gif" data-echo="{{url('public')}}/assets/images/products/p3.jpg" />
                        </a>
                      </div>
                      <div class="item">

                        <a class="horizontal-thumb" data-target="#owl-single-product" data-slide="4" href="#slide4">
                          <img class="img-responsive" alt="" src="{{url('public')}}/assets/images/blank.gif" data-echo="{{url('public')}}/assets/images/products/p4.jpg" />
                        </a>
                      </div>
                      <div class="item">

                        <a class="horizontal-thumb" data-target="#owl-single-product" data-slide="5" href="#slide5">
                          <img class="img-responsive" alt="" src="{{url('public')}}/assets/images/blank.gif" data-echo="{{url('public')}}/assets/images/products/p5.jpg" />
                        </a>
                      </div>
                      <div class="item">

                        <a class="horizontal-thumb" data-target="#owl-single-product" data-slide="6" href="#slide6">
                          <img class="img-responsive" alt="" src="{{url('public')}}/assets/images/blank.gif" data-echo="{{url('public')}}/assets/images/products/p6.jpg" />
                        </a>
                      </div>
                      <div class="item">

                        <a class="horizontal-thumb" data-target="#owl-single-product" data-slide="7" href="#slide7">
                          <img class="img-responsive" alt="" src="{{url('public')}}/assets/images/blank.gif" data-echo="{{url('public')}}/assets/images/products/p7.jpg" />
                        </a>
                      </div>
                      <div class="item">

                        <a class="horizontal-thumb" data-target="#owl-single-product" data-slide="8" href="#slide8">
                          <img class="img-responsive" alt="" src="{{url('public')}}/assets/images/blank.gif" data-echo="{{url('public')}}/assets/images/products/p8.jpg" />
                        </a>
                      </div>
                      <div class="item">

                        <a class="horizontal-thumb" data-target="#owl-single-product" data-slide="9" href="#slide9">
                          <img class="img-responsive" alt="" src="{{url('public')}}/assets/images/blank.gif" data-echo="{{url('public')}}/assets/images/products/p9.jpg" />
                        </a>
                      </div>
                    </div><!-- /#owl-single-product-thumbnails -->



                  </div><!-- /.gallery-thumbs -->

                </div><!-- /.single-product-gallery -->
              </div><!-- /.gallery-holder -->
              <div class='col-sm-12 col-md-8 col-lg-8 product-info-block'>
                <div class="product-info">
                  <h1 class="name">Floral Print Buttoned</h1>

                  <div class="rating-reviews m-t-20">
                    <div class="row">
                      <div class="col-lg-12">
                        <div class="pull-left">
                          <div class="rating rateit-small"></div>
                        </div>
                        <div class="pull-left">
                          <div class="reviews">
                            <a href="#" class="lnk">(13 Reviews)</a>
                          </div>
                        </div>
                      </div>
                    </div><!-- /.row -->
                  </div><!-- /.rating-reviews -->

                  <div class="stock-container info-container m-t-10">
                    <div class="row">
                      <div class="col-lg-12">
                        <div class="pull-left">
                          <div class="stock-box">
                            <span class="label">Availability :</span>
                          </div>
                        </div>
                        <div class="pull-left">
                          <div class="stock-box">
                            <span class="value">In Stock</span>
                          </div>
                        </div>
                      </div>
                    </div><!-- /.row -->
                  </div><!-- /.stock-container -->

                  <div class="description-container m-t-20">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. </p>
                    <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                  </div><!-- /.description-container -->

                  <div class="price-container info-container m-t-30">
                    <div class="row">


                      <div class="col-sm-6 col-xs-6">
                        <div class="price-box">
                          <span class="price">$800.00</span>
                          <span class="price-strike">$900.00</span>
                        </div>
                      </div>

                      <div class="col-sm-6 col-xs-6">
                        <div class="favorite-button m-t-5">
                          <a class="btn btn-primary" data-toggle="tooltip" data-placement="right" title="Wishlist" href="#">
                            <i class="fa fa-heart"></i>
                          </a>
                          <a class="btn btn-primary" data-toggle="tooltip" data-placement="right" title="Add to Compare" href="#">
                            <i class="fa fa-signal"></i>
                          </a>
                          <a class="btn btn-primary" data-toggle="tooltip" data-placement="right" title="E-mail" href="#">
                            <i class="fa fa-envelope"></i>
                          </a>
                        </div>
                      </div>

                    </div><!-- /.row -->
                  </div><!-- /.price-container -->

                  <div class="quantity-container info-container">
                    <div class="row">

                      <div class="qty">
                        <span class="label">Qty :</span>
                      </div>

                      <div class="qty-count">
                        <div class="cart-quantity">
                          <div class="quant-input">
                            <div class="arrows">
                              <div class="arrow plus gradient"><span class="ir"><i class="icon fa fa-sort-asc"></i></span></div>
                              <div class="arrow minus gradient"><span class="ir"><i class="icon fa fa-sort-desc"></i></span></div>
                            </div>
                            <input type="text" value="1">
                          </div>
                        </div>
                      </div>

                      <div class="add-btn">
                        <a href="#" class="btn btn-primary"><i class="fa fa-shopping-cart inner-right-vs"></i> ADD TO CART</a>
                      </div>


                    </div><!-- /.row -->
                  </div><!-- /.quantity-container -->






                </div><!-- /.product-info -->
              </div><!-- /.col-sm-7 -->
            </div><!-- /.row -->
          </div>

          <div class="product-tabs inner-bottom-xs">
            <div class="row">
              <div class="col-sm-12 col-md-3 col-lg-3">
                <ul id="product-tabs" class="nav nav-tabs nav-tab-cell">
                  <li class="active"><a data-toggle="tab" href="#description">DESCRIPTION</a></li>
                  <li><a data-toggle="tab" href="#review">REVIEW</a></li>
                  <li><a data-toggle="tab" href="#tags">TAGS</a></li>
                </ul><!-- /.nav-tabs #product-tabs -->
              </div>
              <div class="col-sm-12 col-md-9 col-lg-9">

                <div class="tab-content">

                  <div id="description" class="tab-pane in active">
                    <div class="product-tab">
                      <p class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.<br><br> Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                    </div>
                  </div><!-- /.tab-pane -->

                  <div id="review" class="tab-pane">
                    <div class="product-tab">

                      <div class="product-reviews">
                        <h4 class="title">Customer Reviews</h4>

                        <div class="reviews">
                          <div class="review">
                            <div class="review-title"><span class="summary">We love this product</span><span class="date"><i class="fa fa-calendar"></i><span>1 days ago</span></span></div>
                            <div class="text">"Lorem ipsum dolor sit amet, consectetur adipiscing elit.Aliquam suscipit."</div>
                          </div>

                        </div><!-- /.reviews -->
                      </div><!-- /.product-reviews -->



                      <div class="product-add-review">
                        <h4 class="title">Write your own review</h4>
                        <div class="review-table">
                          <div class="table-responsive">
                            <table class="table">
                              <thead>
                                <tr>
                                  <th class="cell-label">&nbsp;</th>
                                  <th>1 star</th>
                                  <th>2 stars</th>
                                  <th>3 stars</th>
                                  <th>4 stars</th>
                                  <th>5 stars</th>
                                </tr>
                              </thead>
                              <tbody>
                                <tr>
                                  <td class="cell-label">Quality</td>
                                  <td><input type="radio" name="quality" class="radio" value="1"></td>
                                  <td><input type="radio" name="quality" class="radio" value="2"></td>
                                  <td><input type="radio" name="quality" class="radio" value="3"></td>
                                  <td><input type="radio" name="quality" class="radio" value="4"></td>
                                  <td><input type="radio" name="quality" class="radio" value="5"></td>
                                </tr>
                                <tr>
                                  <td class="cell-label">Price</td>
                                  <td><input type="radio" name="quality" class="radio" value="1"></td>
                                  <td><input type="radio" name="quality" class="radio" value="2"></td>
                                  <td><input type="radio" name="quality" class="radio" value="3"></td>
                                  <td><input type="radio" name="quality" class="radio" value="4"></td>
                                  <td><input type="radio" name="quality" class="radio" value="5"></td>
                                </tr>
                                <tr>
                                  <td class="cell-label">Value</td>
                                  <td><input type="radio" name="quality" class="radio" value="1"></td>
                                  <td><input type="radio" name="quality" class="radio" value="2"></td>
                                  <td><input type="radio" name="quality" class="radio" value="3"></td>
                                  <td><input type="radio" name="quality" class="radio" value="4"></td>
                                  <td><input type="radio" name="quality" class="radio" value="5"></td>
                                </tr>
                              </tbody>
                            </table><!-- /.table .table-bordered -->
                          </div><!-- /.table-responsive -->
                        </div><!-- /.review-table -->

                        <div class="review-form">
                          <div class="form-container">
                            <form class="cnt-form">

                              <div class="row">
                                <div class="col-sm-6">
                                  <div class="form-group">
                                    <label for="exampleInputName">Your Name <span class="astk">*</span></label>
                                    <input type="text" class="form-control txt" id="exampleInputName" placeholder="">
                                  </div><!-- /.form-group -->
                                  <div class="form-group">
                                    <label for="exampleInputSummary">Summary <span class="astk">*</span></label>
                                    <input type="text" class="form-control txt" id="exampleInputSummary" placeholder="">
                                  </div><!-- /.form-group -->
                                </div>

                                <div class="col-md-6">
                                  <div class="form-group">
                                    <label for="exampleInputReview">Review <span class="astk">*</span></label>
                                    <textarea class="form-control txt txt-review" id="exampleInputReview" rows="4" placeholder=""></textarea>
                                  </div><!-- /.form-group -->
                                </div>
                              </div><!-- /.row -->

                              <div class="action text-right">
                                <button class="btn btn-primary btn-upper">SUBMIT REVIEW</button>
                              </div><!-- /.action -->

                            </form><!-- /.cnt-form -->
                          </div><!-- /.form-container -->
                        </div><!-- /.review-form -->

                      </div><!-- /.product-add-review -->

                    </div><!-- /.product-tab -->
                  </div><!-- /.tab-pane -->

                  <div id="tags" class="tab-pane">
                    <div class="product-tag">

                      <h4 class="title">Product Tags</h4>
                      <form class="form-inline form-cnt">
                        <div class="form-container">

                          <div class="form-group">
                            <label for="exampleInputTag">Add Your Tags: </label>
                            <input type="email" id="exampleInputTag" class="form-control txt">


                          </div>

                          <button class="btn btn-upper btn-primary" type="submit">ADD TAGS</button>
                        </div><!-- /.form-container -->
                      </form><!-- /.form-cnt -->

                      <form class="form-inline form-cnt">
                        <div class="form-group">
                          <label>&nbsp;</label>
                          <span class="text col-md-offset-3">Use spaces to separate tags. Use single quotes (') for phrases.</span>
                        </div>
                      </form><!-- /.form-cnt -->

                    </div><!-- /.product-tab -->
                  </div><!-- /.tab-pane -->

                </div><!-- /.tab-content -->
              </div><!-- /.col -->
            </div><!-- /.row -->
          </div><!-- /.product-tabs -->

          <!-- ============================================== UPSELL PRODUCTS ============================================== -->
          <section class="section featured-product">
            <div class="row">
              <div class="col-lg-3">
                <h3 class="section-title">Upsell Products</h3>
                <div class="ad-imgs">
                  <img class="img-responsive" src="{{url('public')}}/assets/images/banners/home-banner1.jpg" alt="">
                  <img class="img-responsive" src="{{url('public')}}/assets/images/banners/home-banner2.jpg" alt="">
                </div>
              </div>
              <div class="col-lg-9">
                <div class="owl-carousel homepage-owl-carousel upsell-product custom-carousel owl-theme outer-top-xs">

                  <div class="item item-carousel">
                    <div class="products">

                      <div class="product">
                        <div class="product-image">
                          <div class="image">
                            <a href="{{url('/template.detail')}}"><img src="{{url('public')}}/assets/images/products/p1.jpg" alt=""></a>
                          </div><!-- /.image -->

                          <div class="tag sale"><span>sale</span></div>
                        </div><!-- /.product-image -->


                        <div class="product-info text-left">
                          <h3 class="name"><a href="{{url('/template.detail')}}">Floral Print Buttoned</a></h3>
                          <div class="rating rateit-small"></div>
                          <div class="description"></div>

                          <div class="product-price">
                            <span class="price">
                              $650.99 </span>
                            <span class="price-before-discount">$ 800</span>

                          </div><!-- /.product-price -->

                        </div><!-- /.product-info -->
                        <div class="cart clearfix animate-effect">
                          <div class="action">
                            <ul class="list-unstyled">
                              <li class="add-cart-button btn-group">
                                <button class="btn btn-primary icon" data-toggle="dropdown" type="button">
                                  <i class="fa fa-shopping-cart"></i>
                                </button>
                                <button class="btn btn-primary cart-btn" type="button">Add to cart</button>

                              </li>

                              <li class="lnk wishlist">
                                <a class="add-to-cart" href="{{url('/template.detail')}}" title="Wishlist">
                                  <i class="icon fa fa-heart"></i>
                                </a>
                              </li>

                              <li class="lnk">
                                <a class="add-to-cart" href="{{url('/template.detail')}}" title="Compare">
                                  <i class="fa fa-signal"></i>
                                </a>
                              </li>
                            </ul>
                          </div><!-- /.action -->
                        </div><!-- /.cart -->
                      </div><!-- /.product -->

                    </div><!-- /.products -->
                  </div><!-- /.item -->

                  <div class="item item-carousel">
                    <div class="products">

                      <div class="product">
                        <div class="product-image">
                          <div class="image">
                            <a href="{{url('/template.detail')}}"><img src="{{url('public')}}/assets/images/products/p2.jpg" alt=""></a>
                          </div><!-- /.image -->

                          <div class="tag sale"><span>sale</span></div>
                        </div><!-- /.product-image -->


                        <div class="product-info text-left">
                          <h3 class="name"><a href="{{url('/template.detail')}}">Floral Print Buttoned</a></h3>
                          <div class="rating rateit-small"></div>
                          <div class="description"></div>

                          <div class="product-price">
                            <span class="price">
                              $650.99 </span>
                            <span class="price-before-discount">$ 800</span>

                          </div><!-- /.product-price -->

                        </div><!-- /.product-info -->
                        <div class="cart clearfix animate-effect">
                          <div class="action">
                            <ul class="list-unstyled">
                              <li class="add-cart-button btn-group">
                                <button class="btn btn-primary icon" data-toggle="dropdown" type="button">
                                  <i class="fa fa-shopping-cart"></i>
                                </button>
                                <button class="btn btn-primary cart-btn" type="button">Add to cart</button>

                              </li>

                              <li class="lnk wishlist">
                                <a class="add-to-cart" href="{{url('/template.detail')}} title=" Wishlist">
                                  <i class="icon fa fa-heart"></i>
                                </a>
                              </li>

                              <li class="lnk">
                                <a class="add-to-cart" href="{{url('/template.detail')}}" title="Compare">
                                  <i class="fa fa-signal"></i>
                                </a>
                              </li>
                            </ul>
                          </div><!-- /.action -->
                        </div><!-- /.cart -->
                      </div><!-- /.product -->

                    </div><!-- /.products -->
                  </div><!-- /.item -->

                  <div class="item item-carousel">
                    <div class="products">

                      <div class="product">
                        <div class="product-image">
                          <div class="image">
                            <a href="{{url('/template.detail')}}"><img src="{{url('public')}}/assets/images/products/p3.jpg" alt=""></a>
                          </div><!-- /.image -->

                          <div class="tag hot"><span>hot</span></div>
                        </div><!-- /.product-image -->


                        <div class="product-info text-left">
                          <h3 class="name"><a href="{{url('/template.detail')}}">Floral Print Buttoned</a></h3>
                          <div class="rating rateit-small"></div>
                          <div class="description"></div>

                          <div class="product-price">
                            <span class="price">
                              $650.99 </span>
                            <span class="price-before-discount">$ 800</span>

                          </div><!-- /.product-price -->

                        </div><!-- /.product-info -->
                        <div class="cart clearfix animate-effect">
                          <div class="action">
                            <ul class="list-unstyled">
                              <li class="add-cart-button btn-group">
                                <button class="btn btn-primary icon" data-toggle="dropdown" type="button">
                                  <i class="fa fa-shopping-cart"></i>
                                </button>
                                <button class="btn btn-primary cart-btn" type="button">Add to cart</button>

                              </li>

                              <li class="lnk wishlist">
                                <a class="add-to-cart" href="{{url('/template.detail')}}" title="Wishlist">
                                  <i class="icon fa fa-heart"></i>
                                </a>
                              </li>

                              <li class="lnk">
                                <a class="add-to-cart" href="{{url('/template.detail')}}" title="Compare">
                                  <i class="fa fa-signal"></i>
                                </a>
                              </li>
                            </ul>
                          </div><!-- /.action -->
                        </div><!-- /.cart -->
                      </div><!-- /.product -->

                    </div><!-- /.products -->
                  </div><!-- /.item -->

                  <div class="item item-carousel">
                    <div class="products">

                      <div class="product">
                        <div class="product-image">
                          <div class="image">
                            <a href="{{url('/template.detail')}}"><img src="{{url('public')}}/assets/images/products/p4.jpg" alt=""></a>
                          </div><!-- /.image -->

                          <div class="tag new"><span>new</span></div>
                        </div><!-- /.product-image -->


                        <div class="product-info text-left">
                          <h3 class="name"><a href="{{url('/template.detail')}}">Floral Print Buttoned</a></h3>
                          <div class="rating rateit-small"></div>
                          <div class="description"></div>

                          <div class="product-price">
                            <span class="price">
                              $650.99 </span>
                            <span class="price-before-discount">$ 800</span>

                          </div><!-- /.product-price -->

                        </div><!-- /.product-info -->
                        <div class="cart clearfix animate-effect">
                          <div class="action">
                            <ul class="list-unstyled">
                              <li class="add-cart-button btn-group">
                                <button class="btn btn-primary icon" data-toggle="dropdown" type="button">
                                  <i class="fa fa-shopping-cart"></i>
                                </button>
                                <button class="btn btn-primary cart-btn" type="button">Add to cart</button>

                              </li>

                              <li class="lnk wishlist">
                                <a class="add-to-cart" href="{{url('/template.detail')}}" title="Wishlist">
                                  <i class="icon fa fa-heart"></i>
                                </a>
                              </li>

                              <li class="lnk">
                                <a class="add-to-cart" href="{{url('/template.detail')}}" title="Compare">
                                  <i class="fa fa-signal"></i>
                                </a>
                              </li>
                            </ul>
                          </div><!-- /.action -->
                        </div><!-- /.cart -->
                      </div><!-- /.product -->

                    </div><!-- /.products -->
                  </div><!-- /.item -->

                  <div class="item item-carousel">
                    <div class="products">

                      <div class="product">
                        <div class="product-image">
                          <div class="image">
                            <a href="{{url('/template.detail')}}"><img src="{{url('public')}}/assets/images/blank.gif" data-echo="{{url('public')}}/assets/images/products/p5.jpg" alt=""></a>
                          </div><!-- /.image -->

                          <div class="tag hot"><span>hot</span></div>
                        </div><!-- /.product-image -->


                        <div class="product-info text-left">
                          <h3 class="name"><a href="{{url('/template.detail')}}">Floral Print Buttoned</a></h3>
                          <div class="rating rateit-small"></div>
                          <div class="description"></div>

                          <div class="product-price">
                            <span class="price">
                              $650.99 </span>
                            <span class="price-before-discount">$ 800</span>

                          </div><!-- /.product-price -->

                        </div><!-- /.product-info -->
                        <div class="cart clearfix animate-effect">
                          <div class="action">
                            <ul class="list-unstyled">
                              <li class="add-cart-button btn-group">
                                <button class="btn btn-primary icon" data-toggle="dropdown" type="button">
                                  <i class="fa fa-shopping-cart"></i>
                                </button>
                                <button class="btn btn-primary cart-btn" type="button">Add to cart</button>

                              </li>

                              <li class="lnk wishlist">
                                <a class="add-to-cart" href="{{url('/template.detail')}}" title="Wishlist">
                                  <i class="icon fa fa-heart"></i>
                                </a>
                              </li>

                              <li class="lnk">
                                <a class="add-to-cart" href="{{url('/template.detail')}}" title="Compare">
                                  <i class="fa fa-signal"></i>
                                </a>
                              </li>
                            </ul>
                          </div><!-- /.action -->
                        </div><!-- /.cart -->
                      </div><!-- /.product -->

                    </div><!-- /.products -->
                  </div><!-- /.item -->

                  <div class="item item-carousel">
                    <div class="products">

                      <div class="product">
                        <div class="product-image">
                          <div class="image">
                            <a href="{{url('/template.detail')}}"><img src="{{url('public')}}/assets/images/blank.gif" data-echo="assets/images/products/p6.jpg" alt=""></a>
                          </div><!-- /.image -->

                          <div class="tag new"><span>new</span></div>
                        </div><!-- /.product-image -->


                        <div class="product-info text-left">
                          <h3 class="name"><a href="{{url('/template.detail')}}">Floral Print Buttoned</a></h3>
                          <div class="rating rateit-small"></div>
                          <div class="description"></div>

                          <div class="product-price">
                            <span class="price">
                              $650.99 </span>
                            <span class="price-before-discount">$ 800</span>

                          </div><!-- /.product-price -->

                        </div><!-- /.product-info -->
                        <div class="cart clearfix animate-effect">
                          <div class="action">
                            <ul class="list-unstyled">
                              <li class="add-cart-button btn-group">
                                <button class="btn btn-primary icon" data-toggle="dropdown" type="button">
                                  <i class="fa fa-shopping-cart"></i>
                                </button>
                                <button class="btn btn-primary cart-btn" type="button">Add to cart</button>

                              </li>

                              <li class="lnk wishlist">
                                <a class="add-to-cart" href="{{url('/template.detail')}}" title="Wishlist">
                                  <i class="icon fa fa-heart"></i>
                                </a>
                              </li>

                              <li class="lnk">
                                <a class="add-to-cart" href="{{url('/template.detail')}}" title="Compare">
                                  <i class="fa fa-signal"></i>
                                </a>
                              </li>
                            </ul>
                          </div><!-- /.action -->
                        </div><!-- /.cart -->
                      </div><!-- /.product -->

                    </div><!-- /.products -->
                  </div><!-- /.item -->
                </div><!-- /.home-owl-carousel -->
              </div>
            </div>
          </section><!-- /.section -->
          <!-- ============================================== UPSELL PRODUCTS : END ============================================== -->

        </div><!-- /.col -->
        <div class="clearfix"></div>
      </div><!-- /.row -->
      <!-- ============================================== BRANDS CAROUSEL ============================================== -->
      <div id="brands-carousel" class="logo-slider">

        <div class="logo-slider-inner">
          <div id="brand-slider" class="owl-carousel brand-slider custom-carousel owl-theme">
            <div class="item m-t-15">
              <a href="#" class="image">
                <img data-echo="{{url('public')}}/assets/images/brands/brand1.png" src="{{url('public')}}/assets/images/blank.gif" alt="">
              </a>
            </div>
            <!--/.item-->

            <div class="item m-t-10">
              <a href="#" class="image">
                <img data-echo="{{url('public')}}/assets/images/brands/brand2.png" src="{{url('public')}}/assets/images/blank.gif" alt="">
              </a>
            </div>
            <!--/.item-->

            <div class="item">
              <a href="#" class="image">
                <img data-echo="{{url('public')}}/assets/images/brands/brand3.png" src="{{url('public')}}/assets/images/blank.gif" alt="">
              </a>
            </div>
            <!--/.item-->

            <div class="item">
              <a href="#" class="image">
                <img data-echo="{{url('public')}}/assets/images/brands/brand4.png" src="{{url('public')}}/assets/images/blank.gif" alt="">
              </a>
            </div>
            <!--/.item-->

            <div class="item">
              <a href="#" class="image">
                <img data-echo="{{url('public')}}/assets/images/brands/brand5.png" src="{{url('public')}}/assets/images/blank.gif" alt="">
              </a>
            </div>
            <!--/.item-->

            <div class="item">
              <a href="#" class="image">
                <img data-echo="{{url('public')}}/assets/images/brands/brand6.png" src="{{url('public')}}/assets/images/blank.gif" alt="">
              </a>
            </div>
            <!--/.item-->

            <div class="item">
              <a href="#" class="image">
                <img data-echo="{{url('public')}}/assets/images/brands/brand2.png" src="{{url('public')}}/assets/images/blank.gif" alt="">
              </a>
            </div>
            <!--/.item-->

            <div class="item">
              <a href="#" class="image">
                <img data-echo="{{url('public')}}/assets/images/brands/brand4.png" src="{{url('public')}}/assets/images/blank.gif" alt="">
              </a>
            </div>
            <!--/.item-->

            <div class="item">
              <a href="#" class="image">
                <img data-echo="{{url('public')}}/assets/images/brands/brand1.png" src="{{url('public')}}/assets/images/blank.gif" alt="">
              </a>
            </div>
            <!--/.item-->

            <div class="item">
              <a href="#" class="image">
                <img data-echo="{{url('public')}}/assets/images/brands/brand5.png" src="{{url('public')}}/assets/images/blank.gif" alt="">
              </a>
            </div>
            <!--/.item-->
          </div><!-- /.owl-carousel #logo-slider -->
        </div><!-- /.logo-slider-inner -->

      </div><!-- /.logo-slider -->
      <!-- ============================================== BRANDS CAROUSEL : END ============================================== -->
    </div><!-- /.container -->
  </div><!-- /.body-content -->

  <!-- ============================================================= FOOTER ============================================================= -->

  <!-- ============================================== INFO BOXES ============================================== -->
  <div class="row our-features-box">
    <div class="container">
      <ul>
        <li>
          <div class="feature-box">
            <div class="icon-truck"></div>
            <div class="content-blocks">We ship worldwide</div>
          </div>
        </li>
        <li>
          <div class="feature-box">
            <div class="icon-support"></div>
            <div class="content-blocks">call
              +1 800 789 0000</div>
          </div>
        </li>
        <li>
          <div class="feature-box">
            <div class="icon-money"></div>
            <div class="content-blocks">Money Back Guarantee</div>
          </div>
        </li>
        <li>
          <div class="feature-box">
            <div class="icon-return"></div>
            <div class="content">30 days return</div>
          </div>
        </li>

      </ul>
    </div>
  </div>
  <!-- /.info-boxes -->
  <!-- ============================================== INFO BOXES : END ============================================== -->

  <!-- ============================================================= FOOTER ============================================================= -->
  <footer id="footer" class="footer color-bg">
    <div class="footer-bottom">
      <div class="container">
        <div class="row">
          <div class="col-xs-12 col-sm-6 col-md-3">
            <div class="address-block">

              <!-- /.module-heading -->

              <div class="module-body">
                <ul class="toggle-footer" style="">
                  <li class="media">
                    <div class="pull-left"> <span class="icon fa-stack fa-lg"> <i class="fa fa-map-marker fa-stack-1x fa-inverse"></i> </span> </div>
                    <div class="media-body">
                      <p>Indonesia</p>
                    </div>
                  </li>
                  <li class="media">
                    <div class="pull-left"> <span class="icon fa-stack fa-lg"> <i class="fa fa-mobile fa-stack-1x fa-inverse"></i> </span> </div>
                    <div class="media-body">
                      <p>+628534686xxxx<br>
                        +628979186xxxx</p>
                    </div>
                  </li>
                  <li class="media">
                    <div class="pull-left"> <span class="icon fa-stack fa-lg"> <i class="fa fa-envelope fa-stack-1x fa-inverse"></i> </span> </div>
                    <div class="media-body"> <span><a href="#">fashionwanita@gmail.com</a></span> </div>
                  </li>
                </ul>
              </div>
            </div>
            <!-- /.module-body -->
          </div>
          <!-- /.col -->

          <div class="col-xs-12 col-sm-6 col-md-3">
            <div class="module-heading">
              <h4 class="module-title">Customer Service</h4>
            </div>
            <!-- /.module-heading -->

            <div class="module-body">
              <ul class='list-unstyled'>
                <li class="first"><a href="#" title="Contact us">My Account</a></li>
                <li><a href="#" title="About us">Order History</a></li>
                <li><a href="#" title="faq">FAQ</a></li>
                <li><a href="#" title="Popular Searches">Specials</a></li>
                <li class="last"><a href="#" title="Where is my order?">Help Center</a></li>
              </ul>
            </div>
            <!-- /.module-body -->
          </div>
          <!-- /.col -->
          <div class="col-xs-12 col-sm-6 col-md-3">
            <div class="module-heading">
              <h4 class="module-title">Corporation</h4>
            </div>
            <!-- /.module-heading -->

            <div class="module-body">
              <ul class='list-unstyled'>
                <li class="first"><a title="Your Account" href="#">About us</a></li>
                <li><a title="Information" href="#">Customer Service</a></li>
                <li><a title="Addresses" href="#">Company</a></li>
                <li><a title="Addresses" href="#">Investor Relations</a></li>
                <li class="last"><a title="Orders History" href="#">Advanced Search</a></li>
              </ul>
            </div>
            <!-- /.module-body -->
          </div>
          <!-- /.col -->

          <div class="col-xs-12 col-sm-6 col-md-3">
            <div class="module-heading">
              <h4 class="module-title">Why Choose Us</h4>
            </div>
            <!-- /.module-heading -->

            <div class="module-body">
              <ul class='list-unstyled'>
                <li class="first"><a href="#" title="About us">Shopping Guide</a></li>
                <li><a href="#" title="Blog">Blog</a></li>
                <li><a href="#" title="Company">Company</a></li>
                <li><a href="#" title="Investor Relations">Investor Relations</a></li>
                <li class=" last"><a href="contact-us.html" title="Suppliers">Contact Us</a></li>
              </ul>
            </div>
            <!-- /.module-body -->
          </div>
        </div>
      </div>
    </div>
    <div class="copyright-bar">
      <div class="container">
        <div class="col-xs-12 col-sm-4 no-padding social">
          <ul class="link">
            <li class="fb pull-left"><a target="_blank" rel="nofollow" href="#" title="Facebook"></a></li>
            <li class="tw pull-left"><a target="_blank" rel="nofollow" href="#" title="Twitter"></a></li>
            <li class="googleplus pull-left"><a target="_blank" rel="nofollow" href="#" title="GooglePlus"></a></li>
            <li class="rss pull-left"><a target="_blank" rel="nofollow" href="#" title="RSS"></a></li>
            <li class="pintrest pull-left"><a target="_blank" rel="nofollow" href="#" title="PInterest"></a></li>
            <li class="linkedin pull-left"><a target="_blank" rel="nofollow" href="#" title="Linkedin"></a></li>
            <li class="youtube pull-left"><a target="_blank" rel="nofollow" href="#" title="Youtube"></a></li>
          </ul>
        </div>
        <div class="col-xs-12 col-sm-4 no-padding copyright"><a target="_blank" href="https://www.templateshub.net">Templates Hub</a> </div>
        <div class="col-xs-12 col-sm-4 no-padding">
          <div class="clearfix payment-methods">
            <ul>
              <li><img src="{{url('public')}}/assets/images/payments/1.png" alt=""></li>
              <li><img src="{{url('public')}}/assets/images/payments/2.png" alt=""></li>
              <li><img src="{{url('public')}}/assets/images/payments/3.png" alt=""></li>
              <li><img src="{{url('public')}}/assets/images/payments/4.png" alt=""></li>
              <li><img src="{{url('public')}}/assets/images/payments/5.png" alt=""></li>
            </ul>
          </div>
          <!-- /.payment-methods -->
        </div>
      </div>
    </div>
  </footer>
  <!-- ============================================================= FOOTER : END============================================================= -->

  <!-- For demo purposes – can be removed on production -->

  <!-- For demo purposes – can be removed on production : End -->

  <!-- JavaScripts placed at the end of the document so the pages load faster -->
  <script src="{{url('public')}}/assets/js/jquery-1.11.1.min.js"></script>

  <script src="{{url('public')}}/assets/js/bootstrap.min.js"></script>

  <script src="{{url('public')}}/assets/js/bootstrap-hover-dropdown.min.js"></script>
  <script src="{{url('public')}}/assets/js/owl.carousel.min.js"></script>

  <script src="{{url('public')}}/assets/js/echo.min.js"></script>
  <script src="{{url('public')}}/assets/js/jquery.easing-1.3.min.js"></script>
  <script src="{{url('public')}}/assets/js/bootstrap-slider.min.js"></script>
  <script src="{{url('public')}}/assets/js/jquery.rateit.min.js"></script>
  <script src="{{url('public')}}/assets/js/lightbox.min.js"></script>
  <script src="{{url('public')}}/assets/js/bootstrap-select.min.js"></script>
  <script src="{{url('public')}}/assets/js/wow.min.js"></script>
  <script src="{{url('public')}}/assets/js/scripts.js"></script>
</body>

</html>
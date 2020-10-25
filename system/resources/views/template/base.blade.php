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
  <title>fashion-wanita</title>

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
              <li class="login"><a href="{{url('/login')}}"><span>Login</span></a></li>
            </ul>
          </div>
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
                        <li role="presentation"><a role="menuitem" tabindex="-1" href="#">- Pakaian</a></li>
                        <li role="presentation"><a role="menuitem" tabindex="-1" href="#">- Kosmetik</a></li>
                        <li role="presentation"><a role="menuitem" tabindex="-1" href="#">- Aksesoris</a></li>
                        <li role="presentation"><a role="menuitem" tabindex="-1" href="#">- Hijab</a></li>
                        <li role="presentation"><a role="menuitem" tabindex="-1" href="#">- Flat Shoes</a></li>
                        <li role="presentation"><a role="menuitem" tabindex="-1" href="#">- Sepatu</a></li>
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
  <div class="body-content outer-top-vs" id="top-banner-and-menu">
    <div class="container">
      <div class="row">
        <!-- ============================================== SIDEBAR ============================================== -->
        <div class="col-xs-12 col-sm-12 col-md-3 sidebar">

          <!-- ================================== TOP NAVIGATION ================================== -->
          <div class="side-menu animate-dropdown outer-bottom-xs">
            <div class="head"><i class="icon fa fa-align-justify fa-fw"></i> Categories</div>
            <nav class="yamm megamenu-horizontal">
              <ul class="nav">
                <li class="dropdown menu-item"> <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon fa fa-shopping-bag" aria-hidden="true"></i>Pakaian</a>
                  <ul class="dropdown-menu mega-menu">
                    <li class="yamm-content">
                      <div class="row">
                        <div class="col-sm-12 col-md-3">
                          <ul class="links list-unstyled">
                            <li><a href="#">Gamis</a></li>
                            <li><a href="#">Blazer </a></li>
                            <li><a href="#">Jacket</a></li>
                            <li><a href="#">Dress</a></li>
                            <li><a href="#">Jeans</a></li>
                            <li><a href="#">Cardingan</a></li>
                            <li><a href="#">Shirts</a></li>
                          </ul>
                        </div>
                        <!-- /.col -->
                        <div class="col-sm-12 col-md-3">
                          <ul class="links list-unstyled">
                            <li><a href="#">Handbags</a></li>
                            <li><a href="#">Jwellery</a></li>
                            <li><a href="#">Swimwear </a></li>
                            <li><a href="#">Tops</a></li>
                            <li><a href="#">Flats</a></li>
                            <li><a href="#">Shoes</a></li>
                            <li><a href="#">Winter Wear</a></li>
                            <li><a href="#">Night Suits</a></li>
                          </ul>
                        </div>
                        <!-- /.col -->
                        <div class="col-sm-12 col-md-3">
                          <ul class="links list-unstyled">
                            <li><a href="#">Hijab</a></li>
                            <li><a href="#">Bergo</a></li>
                            <li><a href="#">Pasmina</a></li>
                            <li><a href="#">Rawis</a></li>
                            <li><a href="#">Khimar</a></li>
                            <li><a href="#">Serut</a></li>
                            <li><a href="#">Niqab</a></li>
                          </ul>
                        </div>
                        <!-- /.col -->
                        <div class="col-sm-12 col-md-3">
                          <ul class="links list-unstyled">
                            <li><a href="#">Sandals </a></li>
                            <li><a href="#">Shorts</a></li>
                            <li><a href="#">Dresses</a></li>
                            <li><a href="#">Jwellery</a></li>
                            <li><a href="#">Bags</a></li>
                            <li><a href="#">Night Dress</a></li>
                          </ul>
                        </div>
                        <!-- /.col -->
                      </div>
                      <!-- /.row -->
                    </li>
                    <!-- /.yamm-content -->
                  </ul>
                  <!-- /.dropdown-menu -->
                </li>
                <!-- /.menu-item -->

                <li class="dropdown menu-item"> <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon fa fa-laptop" aria-hidden="true"></i>Aksesoris/Perhiasan</a>
                  <!-- ================================== MEGAMENU VERTICAL ================================== -->
                  <ul class="dropdown-menu mega-menu">
                    <li class="yamm-content">
                      <div class="row">
                        <div class="col-xs-12 col-sm-12 col-lg-4">
                          <ul class="links list-unstyled">
                            <li><a href="#">Kalung</a></li>
                            <li><a href="#">Gelang</a></li>
                            <li><a href="#">Anting-Anting</a></li>
                            <li><a href="#">Cincin</a></li>
                            <li><a href="#">Jam Tangan</a></li>
                            <li><a href="#">Kacamata</a></li>
                            <li><a href="#">Tas</a></li>
                          </ul>
                        </div>
                        <!-- /.col -->
                        <div class="col-sm-12 col-md-3">
                          <ul class="links list-unstyled">
                            <li><a href="#">Handbags</a></li>
                            <li><a href="#">Jwellery</a></li>
                            <li><a href="#">Swimwear </a></li>
                            <li><a href="#">Tops</a></li>
                            <li><a href="#">Flats</a></li>
                            <li><a href="#">Shoes</a></li>
                            <li><a href="#">Winter Wear</a></li>
                            <li><a href="#">Night Suits</a></li>
                          </ul>
                        </div>
                        <!-- /.col -->
                        <div class="col-sm-12 col-md-3">
                          <ul class="links list-unstyled">
                            <li><a href="#">Hijab</a></li>
                            <li><a href="#">Bergo</a></li>
                            <li><a href="#">Pasmina</a></li>
                            <li><a href="#">Rawis</a></li>
                            <li><a href="#">Khimar</a></li>
                            <li><a href="#">Serut</a></li>
                            <li><a href="#">Niqab</a></li>
                          </ul>
                        </div>
                        <!-- /.col -->
                        <div class="col-sm-12 col-md-3">
                          <ul class="links list-unstyled">
                            <li><a href="#">Sandals </a></li>
                            <li><a href="#">Shorts</a></li>
                            <li><a href="#">Dresses</a></li>
                            <li><a href="#">Jwellery</a></li>
                            <li><a href="#">Bags</a></li>
                            <li><a href="#">Night Dress</a></li>
                          </ul>
                        </div>
                      </div>
                      <!-- /.row -->
                    </li>
                    <!-- /.yamm-content -->
                  </ul>
                  <!-- /.dropdown-menu -->
                  <!-- ================================== MEGAMENU VERTICAL ================================== -->
                </li>
                <!-- /.menu-item -->

                <li class="dropdown menu-item"> <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon fa fa-shopping-cart" aria-hidden="true"></i>Kosmetik</a>
                  <ul class="dropdown-menu mega-menu">
                    <li class="yamm-content">
                      <div class="row">
                        <div class="col-sm-12 col-md-3">
                          <ul class="links list-unstyled">
                            <li><a href="#">Lipstik</a></li>
                            <li><a href="#">Maskara</a></li>
                            <li><a href="#">Kuteks</a></li>
                            <li><a href="#">Bedak</a></li>
                            <li><a href="#">Foundation</a></li>
                            <li><a href="#">Eyeshadow</a></li>
                            <li><a href="#">Eyeliner</a></li>
                          </ul>
                        </div>
                        <!-- /.col -->
                        <div class="col-sm-12 col-md-3">
                          <ul class="links list-unstyled">
                            <li><a href="#">Handbags</a></li>
                            <li><a href="#">Jwellery</a></li>
                            <li><a href="#">Swimwear </a></li>
                            <li><a href="#">Tops</a></li>
                            <li><a href="#">Flats</a></li>
                            <li><a href="#">Shoes</a></li>
                            <li><a href="#">Winter Wear</a></li>
                            <li><a href="#">Night Suits</a></li>
                          </ul>
                        </div>
                        <!-- /.col -->
                        <div class="col-sm-12 col-md-3">
                          <ul class="links list-unstyled">
                            <li><a href="#">Toys &amp; Games</a></li>
                            <li><a href="#">Jeans</a></li>
                            <li><a href="#">Shirts</a></li>
                            <li><a href="#">Shoes</a></li>
                            <li><a href="#">School Bags</a></li>
                            <li><a href="#">Lunch Box</a></li>
                            <li><a href="#">Footwear</a></li>
                            <li><a href="#">Wipes</a></li>
                          </ul>
                        </div>
                        <!-- /.col -->
                        <div class="col-sm-12 col-md-3">
                          <ul class="links list-unstyled">
                            <li><a href="#">Sandals </a></li>
                            <li><a href="#">Shorts</a></li>
                            <li><a href="#">Dresses</a></li>
                            <li><a href="#">Jwellery</a></li>
                            <li><a href="#">Bags</a></li>
                            <li><a href="#">Night Dress</a></li>
                            <li><a href="#">Swim Wear</a></li>
                            <li><a href="#">Toys</a></li>
                          </ul>
                        </div>
                        <!-- /.col -->
                      </div>
                      <!-- /.row -->
                    </li>
                    <!-- /.yamm-content -->
                  </ul>
                  <!-- /.dropdown-menu -->
                </li>
                <!-- /.menu-item -->

                <li class="dropdown menu-item"> <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon fa fa-clock-o"></i>Flat Shoes</a>
                  <ul class="dropdown-menu mega-menu">
                    <li class="yamm-content">
                      <div class="row">
                        <div class="col-xs-12 col-sm-12 col-lg-4">
                          <ul>
                            <li><a href="#">Ballet flats </a></li>
                            <li><a href="#">Work flats</a></li>
                            <li><a href="#">Lace flats</a></li>
                            <li><a href="#">Loafer</a></li>
                            <li><a href="#"> Espadrilles</a></li>
                          </ul>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-lg-4">
                          <ul>
                            <li><a href="#">Routers &amp; Modems</a></li>
                            <li><a href="#">CPUs, Processors</a></li>
                            <li><a href="#">PC Gaming Store</a></li>
                            <li><a href="#">Graphics Cards</a></li>
                            <li><a href="#">Components</a></li>
                            <li><a href="#">Webcam</a></li>
                            <li><a href="#">Memory (RAM)</a></li>
                            <li><a href="#">Motherboards</a></li>
                            <li><a href="#">Keyboards</a></li>
                            <li><a href="#">Headphones</a></li>
                          </ul>
                        </div>
                        <div class="dropdown-banner-holder"> <a href="#"><img alt="" src="{{url('public')}}/assets/images/banners/banner-side.png" /></a> </div>
                      </div>
                      <!-- /.row -->
                    </li>
                    <!-- /.yamm-content -->
                  </ul>
                  <!-- /.dropdown-menu -->
                </li>
                <!-- /.menu-item -->

                <li class="dropdown menu-item"> <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon fa fa-diamond"></i>Hijab</a>
                  <ul class="dropdown-menu mega-menu">
                    <li class="yamm-content">
                      <div class="row">
                        <div class="col-sm-12 col-md-3">
                          <ul class="links list-unstyled">
                            <li><a href="#">Bergo</a></li>
                            <li><a href="#">Pasmina</a></li>
                            <li><a href="#">Rawis</a></li>
                            <li><a href="#">Khimar</a></li>
                            <li><a href="#">Serut</a></li>
                            <li><a href="#">Niqab</a></li>
                          </ul>
                        </div>
                        <!-- /.col -->
                        <div class="col-sm-12 col-md-3">
                          <ul class="links list-unstyled">
                            <li><a href="#">Handbags</a></li>
                            <li><a href="#">Jwellery</a></li>
                            <li><a href="#">Swimwear </a></li>
                            <li><a href="#">Tops</a></li>
                            <li><a href="#">Flats</a></li>
                            <li><a href="#">Shoes</a></li>
                            <li><a href="#">Winter Wear</a></li>
                            <li><a href="#">Night Suits</a></li>
                          </ul>
                        </div>
                        <!-- /.col -->
                        <div class="col-sm-12 col-md-3">
                          <ul class="links list-unstyled">
                            <li><a href="#">Toys &amp; Games</a></li>
                            <li><a href="#">Jeans</a></li>
                            <li><a href="#">Shirts</a></li>
                            <li><a href="#">Shoes</a></li>
                            <li><a href="#">School Bags</a></li>
                            <li><a href="#">Lunch Box</a></li>
                            <li><a href="#">Footwear</a></li>
                            <li><a href="#">Wipes</a></li>
                          </ul>
                        </div>
                        <!-- /.col -->
                        <div class="col-sm-12 col-md-3">
                          <ul class="links list-unstyled">
                            <li><a href="#">Sandals </a></li>
                            <li><a href="#">Shorts</a></li>
                            <li><a href="#">Dresses</a></li>
                            <li><a href="#">Jwellery</a></li>
                            <li><a href="#">Bags</a></li>
                            <li><a href="#">Night Dress</a></li>
                            <li><a href="#">Swim Wear</a></li>
                            <li><a href="#">Toys</a></li>
                          </ul>
                        </div>
                        <!-- /.col -->
                      </div>
                      <!-- /.row -->
                    </li>
                    <!-- /.yamm-content -->
                  </ul>
                  <!-- /.dropdown-menu -->
                </li>
                <!-- /.menu-item -->

                <li class="dropdown menu-item"> <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon fa fa-heartbeat"></i>Sepatu</a>
                  <ul class="dropdown-menu mega-menu">
                    <li class="yamm-content">
                      <div class="row">
                        <div class="col-xs-12 col-sm-12 col-lg-4">
                          <ul>
                            <li><a href="#">PUMPS</a></li>
                            <li><a href="#">STILETTO</a></li>
                            <li><a href="#">Ballerina Flat</a></li>
                            <li><a href="#">OXFORDS</a></li>
                            <li><a href="#">TRAINERS</a></li>
                            <li><a href="#">LOAFERS</a></li>
                          </ul>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-lg-4">
                          <ul>
                            <li><a href="#">Routers &amp; Modems</a></li>
                            <li><a href="#">CPUs, Processors</a></li>
                            <li><a href="#">PC Gaming Store</a></li>
                            <li><a href="#">Graphics Cards</a></li>
                            <li><a href="#">Components</a></li>
                            <li><a href="#">Webcam</a></li>
                            <li><a href="#">Memory (RAM)</a></li>
                            <li><a href="#">Motherboards</a></li>
                            <li><a href="#">Keyboards</a></li>
                            <li><a href="#">Headphones</a></li>
                          </ul>
                        </div>
                        <div class="dropdown-banner-holder"> <a href="#"><img alt="" src="{{url('public')}}/assets/images/banners/banner-side.png" /></a> </div>
                      </div>
                      <!-- /.row -->
                    </li>
                    <!-- /.yamm-content -->
                  </ul>
                  <!-- /.dropdown-menu -->
                </li>
                <!-- /.menu-item -->

              </ul>
              <!-- /.nav -->
            </nav>
            <!-- /.megamenu-horizontal -->
          </div>
          <!-- /.side-menu -->
          <!-- ================================== TOP NAVIGATION : END ================================== -->

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
                    <h3 class="name"><a href="{{url('/template.detail')}}">Rok Kasual</a></h3>
                    <div class="rating rateit-small"></div>
                    <div class="product-price"> <span class="price"> RP 245.000 </span> <span class="price-before-discount">RP 500.000 </span> </div>
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
                    <h3 class="name"><a href="{{url('/template.detail')}}">Tas Asterik</a></h3>
                    <div class="rating rateit-small"></div>
                    <div class="product-price"> <span class="price"> Rp 308.000 </span> <span class="price-before-discount">Rp 880.000</span> </div>
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
                      <a href="{{url('/template.detail')}}">
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
                    <h3 class="name"><a href="{{url('/template.detail')}}">Kaos Maran</a></h3>
                    <div class="rating rateit-small"></div>
                    <div class="product-price"> <span class="price"> Rp 77.000 </span> <span class="price-before-discount">Rp 220.000</span> </div>
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

          <!-- ============================================== SPECIAL OFFER ============================================== -->

          <div class="sidebar-widget outer-bottom-small">
            <h3 class="section-title">Penawaran Spesial</h3>
            <div class="sidebar-widget-body outer-top-xs">
              <div class="owl-carousel sidebar-carousel special-offer custom-carousel owl-theme outer-top-xs">
                <div class="item">
                  <div class="products special-product">
                    <div class="product">
                      <div class="product-micro">
                        <div class="row product-micro-row">
                          <div class="col col-xs-5">
                            <div class="product-image">
                              <div class="image"> <a href="#"> <img src="{{url('public')}}/assets/images/products/p5.jpg" alt=""> </a> </div>
                              <!-- /.image -->

                            </div>
                            <!-- /.product-image -->
                          </div>
                          <!-- /.col -->
                          <div class="col col-xs-7">
                            <div class="product-info">
                              <h3 class="name"><a href="{{url('/template.detail')}}">Gaun Meuii</a></h3>
                              <div class="rating rateit-small"></div>
                              <div class="product-price"> <span class="price"> Rp 85.000 </span> </div>
                              <!-- /.product-price -->

                            </div>
                          </div>
                          <!-- /.col -->
                        </div>
                        <!-- /.product-micro-row -->
                      </div>
                      <!-- /.product-micro -->

                    </div>
                    <div class="product">
                      <div class="product-micro">
                        <div class="row product-micro-row">
                          <div class="col col-xs-5">
                            <div class="product-image">
                              <div class="image"> <a href="#"> <img src="{{url('public')}}/assets/images/products/p9.jpg" alt=""> </a> </div>
                              <!-- /.image -->

                            </div>
                            <!-- /.product-image -->
                          </div>
                          <!-- /.col -->
                          <div class="col col-xs-7">
                            <div class="product-info">
                              <h3 class="name"><a href="{{url('/template.detail')}}">Dress Pio</a></h3>
                              <div class="rating rateit-small"></div>
                              <div class="product-price"> <span class="price"> Rp 90.000 </span> </div>
                              <!-- /.product-price -->

                            </div>
                          </div>
                          <!-- /.col -->
                        </div>
                        <!-- /.product-micro-row -->
                      </div>
                      <!-- /.product-micro -->

                    </div>
                    <div class="product">
                      <div class="product-micro">
                        <div class="row product-micro-row">
                          <div class="col col-xs-5">
                            <div class="product-image">
                              <div class="image"> <a href="{{url('/template.detail')}}"> <img src="{{url('public')}}/assets/images/products/p11.jpg" alt=""> </a> </div>
                              <!-- /.image -->

                            </div>
                            <!-- /.product-image -->
                          </div>
                          <!-- /.col -->
                          <div class="col col-xs-7">
                            <div class="product-info">
                              <h3 class="name"><a href="{{url('/template.detail')}}">Dress Long</a></h3>
                              <div class="rating rateit-small"></div>
                              <div class="product-price"> <span class="price"> Rp 110.000 </span> </div>
                              <!-- /.product-price -->

                            </div>
                          </div>
                          <!-- /.col -->
                        </div>
                        <!-- /.product-micro-row -->
                      </div>
                      <!-- /.product-micro -->

                    </div>
                  </div>
                </div>
                <div class="item">
                  <div class="products special-product">
                    <div class="product">
                      <div class="product-micro">
                        <div class="row product-micro-row">
                          <div class="col col-xs-5">
                            <div class="product-image">
                              <div class="image"> <a href="{{url('/template.detail')}}"> <img src="{{url('public')}}/assets/images/products/p15.jpg" alt=""> </a> </div>
                              <!-- /.image -->

                            </div>
                            <!-- /.product-image -->
                          </div>
                          <!-- /.col -->
                          <div class="col col-xs-7">
                            <div class="product-info">
                              <h3 class="name"><a href="{{url('/template.detail')}}"> Kaos Pendek</a></h3>
                              <div class="rating rateit-small"></div>
                              <div class="product-price"> <span class="price"> Rp 55.000 </span> </div>
                              <!-- /.product-price -->

                            </div>
                          </div>
                          <!-- /.col -->
                        </div>
                        <!-- /.product-micro-row -->
                      </div>
                      <!-- /.product-micro -->

                    </div>
                    <div class="product">
                      <div class="product-micro">
                        <div class="row product-micro-row">
                          <div class="col col-xs-5">
                            <div class="product-image">
                              <div class="image"> <a href="{{url('/template.detail')}}"> <img src="{{url('public')}}/assets/images/products/p13.jpg" alt=""> </a> </div>
                              <!-- /.image -->

                            </div>
                            <!-- /.product-image -->
                          </div>
                          <!-- /.col -->
                          <div class="col col-xs-7">
                            <div class="product-info">
                              <h3 class="name"><a href="{{url('/template.detail')}}">Setelan Blei</a></h3>
                              <div class="rating rateit-small"></div>
                              <div class="product-price"> <span class="price"> Rp 99.000 </span> </div>
                              <!-- /.product-price -->

                            </div>
                          </div>
                          <!-- /.col -->
                        </div>
                        <!-- /.product-micro-row -->
                      </div>
                      <!-- /.product-micro -->

                    </div>
                    <div class="product">
                      <div class="product-micro">
                        <div class="row product-micro-row">
                          <div class="col col-xs-5">
                            <div class="product-image">
                              <div class="image"> <a href="{{url('/template.detail')}}"> <img src="{{url('public')}}/assets/images/products/p12.jpg" alt=""> </a> </div>
                              <!-- /.image -->

                            </div>
                            <!-- /.product-image -->
                          </div>
                          <!-- /.col -->
                          <div class="col col-xs-7">
                            <div class="product-info">
                              <h3 class="name"><a href="{{url('/template.detail')}}">Hils</a></h3>
                              <div class="rating rateit-small"></div>
                              <div class="product-price"> <span class="price"> Rp 70.000 </span> </div>
                              <!-- /.product-price -->

                            </div>
                          </div>
                          <!-- /.col -->
                        </div>
                        <!-- /.product-micro-row -->
                      </div>
                      <!-- /.product-micro -->

                    </div>
                  </div>
                </div>
                <div class="item">
                  <div class="products special-product">
                    <div class="product">
                      <div class="product-micro">
                        <div class="row product-micro-row">
                          <div class="col col-xs-5">
                            <div class="product-image">
                              <div class="image"> <a href="{{url('/template.detail')}}"> <img src="{{url('public')}}/assets/images/products/p1.jpg" alt=""> </a> </div>
                              <!-- /.image -->

                            </div>
                            <!-- /.product-image -->
                          </div>
                          <!-- /.col -->
                          <div class="col col-xs-7">
                            <div class="product-info">
                              <h3 class="name"><a href="{{url('/template.detail')}}">Setelan Gie</a></h3>
                              <div class="rating rateit-small"></div>
                              <div class="product-price"> <span class="price"> Rp 95.000 </span> </div>
                              <!-- /.product-price -->

                            </div>
                          </div>
                          <!-- /.col -->
                        </div>
                        <!-- /.product-micro-row -->
                      </div>
                      <!-- /.product-micro -->

                    </div>
                    <div class="product">
                      <div class="product-micro">
                        <div class="row product-micro-row">
                          <div class="col col-xs-5">
                            <div class="product-image">
                              <div class="image"> <a href="#"> <img src="{{url('public')}}/assets/images/products/p3.jpg" alt=""> </a> </div>
                              <!-- /.image -->

                            </div>
                            <!-- /.product-image -->
                          </div>
                          <!-- /.col -->
                          <div class="col col-xs-7">
                            <div class="product-info">
                              <h3 class="name"><a href="{{url('/template.detail')}}">Sepatu kantor</a></h3>
                              <div class="rating rateit-small"></div>
                              <div class="product-price"> <span class="price"> RP 199.000 </span> </div>
                              <!-- /.product-price -->
                            </div>
                          </div>
                          <!-- /.col -->
                        </div>
                        <!-- /.product-micro-row -->
                      </div>
                      <!-- /.product-micro -->

                    </div>
                    <div class="product">
                      <div class="product-micro">
                        <div class="row product-micro-row">
                          <div class="col col-xs-5">
                            <div class="product-image">
                              <div class="image"> <a href="{{url('/template.detail')}}"> <img src="{{url('public')}}/assets/images/products/p7.jpg" alt=""> </a> </div>
                              <!-- /.image -->

                            </div>
                            <!-- /.product-image -->
                          </div>
                          <!-- /.col -->
                          <div class="col col-xs-7">
                            <div class="product-info">
                              <h3 class="name"><a href="{{url('/template.detail')}}">Kacamata</a></h3>
                              <div class="rating rateit-small"></div>
                              <div class="product-price"> <span class="price"> Rp 85.000 </span> </div>
                              <!-- /.product-price -->

                            </div>
                          </div>
                          <!-- /.col -->
                        </div>
                        <!-- /.product-micro-row -->
                      </div>
                      <!-- /.product-micro -->

                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- /.sidebar-widget-body -->
          </div>
          <!-- /.sidebar-widget -->
          <!-- ============================================== SPECIAL OFFER : END ============================================== -->
          <!-- ============================================== PRODUCT TAGS ============================================== -->
          <div class="sidebar-widget product-tag">
            <h3 class="section-title">Label Produk</h3>
            <div class="sidebar-widget-body outer-top-xs">
              <div class="tag-list"> <a class="item" title="Sepatu" href="#">Sepatu</a> <a class="item active" title="Pakaian" href="category.html">Pakaian</a> <a class="item" title="Aksesoris" href="category.html">Aksesoris</a> <a class="item" title="Flatshoes" href="category.html">Flat Shoes</a> <a class="item" title="T-shirt" href="category.html">T-shirt</a> <a class="item" title="Hijab" href="category.html">Hijab</a> <a class="item" title="Sepatu" href="category.html">Sepatu</a> <a class="item" title="Gamis" href="category.html">Gamis</a> <a class="item" title="Kosmetik" href="category.html">Kosmetik</a> </div>
              <!-- /.tag-list -->
            </div>
            <!-- /.sidebar-widget-body -->
          </div>
          <!-- /.sidebar-widget -->
          <!-- ============================================== PRODUCT TAGS : END ============================================== -->
          <!-- ============================================== SPECIAL DEALS ============================================== -->

          <div class="sidebar-widget outer-bottom-small">
            <h3 class="section-title">Penawaran Khusus</h3>
            <div class="sidebar-widget-body outer-top-xs">
              <div class="owl-carousel sidebar-carousel special-offer custom-carousel owl-theme outer-top-xs">
                <div class="item">
                  <div class="products special-product">
                    <div class="product">
                      <div class="product-micro">
                        <div class="row product-micro-row">
                          <div class="col col-xs-5">
                            <div class="product-image">
                              <div class="image"> <a href="{{url('/template.detail')}}"> <img src="{{url('public')}}/assets/images/products/p8.jpg" alt=""> </a> </div>
                              <!-- /.image -->

                            </div>
                            <!-- /.product-image -->
                          </div>
                          <!-- /.col -->
                          <div class="col col-xs-7">
                            <div class="product-info">
                              <h3 class="name"><a href="{{url('/template.detail')}}">Sepatu Kets Putih</a></h3>
                              <div class="rating rateit-small"></div>
                              <div class="product-price"> <span class="price"> Rp 330.000 </span> </div>
                              <!-- /.product-price -->

                            </div>
                          </div>
                          <!-- /.col -->
                        </div>
                        <!-- /.product-micro-row -->
                      </div>
                      <!-- /.product-micro -->

                    </div>
                    <div class="product">
                      <div class="product-micro">
                        <div class="row product-micro-row">
                          <div class="col col-xs-5">
                            <div class="product-image">
                              <div class="image"> <a href="{{url('/template.detail')}}"> <img src="{{url('public')}}/assets/images/products/p5.jpg" alt=""> </a> </div>
                              <!-- /.image -->

                            </div>
                            <!-- /.product-image -->
                          </div>
                          <!-- /.col -->
                          <div class="col col-xs-7">
                            <div class="product-info">
                              <h3 class="name"><a href="{{url('/template.detail')}}">Gaun Mirs</a></h3>
                              <div class="rating rateit-small"></div>
                              <div class="product-price"> <span class="price"> Rp 210.000 </span> </div>
                              <!-- /.product-price -->

                            </div>
                          </div>
                          <!-- /.col -->
                        </div>
                        <!-- /.product-micro-row -->
                      </div>
                      <!-- /.product-micro -->

                    </div>
                    <div class="product">
                      <div class="product-micro">
                        <div class="row product-micro-row">
                          <div class="col col-xs-5">
                            <div class="product-image">
                              <div class="image"> <a href="{{url('/template.detail')}}"> <img src="{{url('public')}}/assets/images/products/p6.jpg" alt="image"> </a> </div>
                              <!-- /.image -->

                            </div>
                            <!-- /.product-image -->
                          </div>
                          <!-- /.col -->
                          <div class="col col-xs-7">
                            <div class="product-info">
                              <h3 class="name"><a href="{{url('/template.detail')}}">Shirt</a></h3>
                              <div class="rating rateit-small"></div>
                              <div class="product-price"> <span class="price"> Rp 160.000 </span> </div>
                              <!-- /.product-price -->

                            </div>
                          </div>
                          <!-- /.col -->
                        </div>
                        <!-- /.product-micro-row -->
                      </div>
                      <!-- /.product-micro -->

                    </div>
                  </div>
                </div>
                <div class="item">
                  <div class="products special-product">
                    <div class="product">
                      <div class="product-micro">
                        <div class="row product-micro-row">
                          <div class="col col-xs-5">
                            <div class="product-image">
                              <div class="image"> <a href="{{url('/template.detail')}}"> <img src="{{url('public')}}/assets/images/products/p8.jpg" alt=""> </a> </div>
                              <!-- /.image -->

                            </div>
                            <!-- /.product-image -->
                          </div>
                          <!-- /.col -->
                          <div class="col col-xs-7">
                            <div class="product-info">
                              <h3 class="name"><a href="{{url('/template.detail')}}">Sepatu white</a></h3>
                              <div class="rating rateit-small"></div>
                              <div class="product-price"> <span class="price"> Rp 380.000 </span> </div>
                              <!-- /.product-price -->

                            </div>
                          </div>
                          <!-- /.col -->
                        </div>
                        <!-- /.product-micro-row -->
                      </div>
                      <!-- /.product-micro -->

                    </div>
                    <div class="product">
                      <div class="product-micro">
                        <div class="row product-micro-row">
                          <div class="col col-xs-5">
                            <div class="product-image">
                              <div class="image"> <a href="{{url('/template.detail')}}"> <img src="{{url('public')}}/assets/images/products/p7.jpg" alt=""> </a> </div>
                              <!-- /.image -->

                            </div>
                            <!-- /.product-image -->
                          </div>
                          <!-- /.col -->
                          <div class="col col-xs-7">
                            <div class="product-info">
                              <h3 class="name"><a href="{{url('/template.detail')}}">Kaca Mata Hitam</a></h3>
                              <div class="rating rateit-small"></div>
                              <div class="product-price"> <span class="price"> Rp 185.000 </span> </div>
                              <!-- /.product-price -->

                            </div>
                          </div>
                          <!-- /.col -->
                        </div>
                        <!-- /.product-micro-row -->
                      </div>
                      <!-- /.product-micro -->

                    </div>
                    <div class="product">
                      <div class="product-micro">
                        <div class="row product-micro-row">
                          <div class="col col-xs-5">
                            <div class="product-image">
                              <div class="image"> <a href="{{url('/template.detail')}}"> <img src="{{url('public')}}/assets/images/products/p6.jpg" alt=""> </a> </div>
                              <!-- /.image -->

                            </div>
                            <!-- /.product-image -->
                          </div>
                          <!-- /.col -->
                          <div class="col col-xs-7">
                            <div class="product-info">
                              <h3 class="name"><a href="{{url('/template.detail')}}">bee shirt</a></h3>
                              <div class="rating rateit-small"></div>
                              <div class="product-price"> <span class="price"> Rp 100.000 </span> </div>
                              <!-- /.product-price -->
                            </div>
                          </div>
                          <!-- /.col -->
                        </div>
                        <!-- /.product-micro-row -->
                      </div>
                      <!-- /.product-micro -->

                    </div>
                  </div>
                </div>
                <div class="item">
                  <div class="products special-product">
                    <div class="product">
                      <div class="product-micro">
                        <div class="row product-micro-row">
                          <div class="col col-xs-5">
                            <div class="product-image">
                              <div class="image"> <a href="{{url('/template.detail')}}"> <img src="{{url('public')}}/assets/images/products/p5.jpg" alt="images">
                                  <div class="zoom-overlay"></div>
                                </a> </div>
                              <!-- /.image -->

                            </div>
                            <!-- /.product-image -->
                          </div>
                          <!-- /.col -->
                          <div class="col col-xs-7">
                            <div class="product-info">
                              <h3 class="name"><a href="{{url('/template.detail')}}">Gaun Vau</a></h3>
                              <div class="rating rateit-small"></div>
                              <div class="product-price"> <span class="price"> Rp 410.000 </span> </div>
                              <!-- /.product-price -->

                            </div>
                          </div>
                          <!-- /.col -->
                        </div>
                        <!-- /.product-micro-row -->
                      </div>
                      <!-- /.product-micro -->

                    </div>
                    <div class="product">
                      <div class="product-micro">
                        <div class="row product-micro-row">
                          <div class="col col-xs-5">
                            <div class="product-image">
                              <div class="image"> <a href="{{url('/template.detail')}}"> <img src="{{url('public')}}/assets/images/products/p4.jpg" alt="">
                                  <div class="zoom-overlay"></div>
                                </a> </div>
                              <!-- /.image -->

                            </div>
                            <!-- /.product-image -->
                          </div>
                          <!-- /.col -->
                          <div class="col col-xs-7">
                            <div class="product-info">
                              <h3 class="name"><a href="{{url('/template.detail')}}">Dress</a></h3>
                              <div class="rating rateit-small"></div>
                              <div class="product-price"> <span class="price"> Rp 199.000 </span> </div>
                              <!-- /.product-price -->

                            </div>
                          </div>
                          <!-- /.col -->
                        </div>
                        <!-- /.product-micro-row -->
                      </div>
                      <!-- /.product-micro -->

                    </div>
                    <div class="product">
                      <div class="product-micro">
                        <div class="row product-micro-row">
                          <div class="col col-xs-5">
                            <div class="product-image">
                              <div class="image"> <a href="{{url('/template.detail')}}"> <img src="{{url('public')}}/assets/images/products/p13.jpg" alt="image"> </a> </div>
                              <!-- /.image -->

                            </div>
                            <!-- /.product-image -->
                          </div>
                          <!-- /.col -->
                          <div class="col col-xs-7">
                            <div class="product-info">
                              <h3 class="name"><a href="{{url('/template.detail')}}">Rok plits</a></h3>
                              <div class="rating rateit-small"></div>
                              <div class="product-price"> <span class="price"> Rp 99.000 </span> </div>
                              <!-- /.product-price -->

                            </div>
                          </div>
                          <!-- /.col -->
                        </div>
                        <!-- /.product-micro-row -->
                      </div>
                      <!-- /.product-micro -->

                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- /.sidebar-widget-body -->
          </div>
          <!-- /.sidebar-widget -->
          <!-- ============================================== SPECIAL DEALS : END ============================================== -->
        </div>
        <!-- /.sidemenu-holder -->
        <!-- ============================================== SIDEBAR : END ============================================== -->

        <!-- ============================================== CONTENT ============================================== -->
        <div class="col-xs-12 col-sm-12 col-md-9 homebanner-holder">

          <div id="hero">
            <div id="owl-main" class="owl-carousel owl-inner-nav owl-ui-sm">
              <div class="item" style="background-image: url({{url('public')}}/assets/images/sliders/01.jpg);">
                <div class="container-fluid">
                  <div class="caption bg-color vertical-center text-left">
                    <div class="slider-header fadeInDown-1">Top Brands</div>
                    <div class="big-text fadeInDown-1"> New Collections </div>
                    <div class="excerpt fadeInDown-2 hidden-xs"> <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</span> </div>
                    <div class="button-holder fadeInDown-3"> <a href="index6c11.html?page=single-product" class="btn-lg btn btn-uppercase btn-primary shop-now-button">Shop Now</a> </div>
                  </div>
                  <!-- /.caption -->
                </div>
                <!-- /.container-fluid -->
              </div>
              <!-- /.item -->

              <div class="item" style="background-image: url({{url('public')}}/assets/images/sliders/02.jpg);">
                <div class="container-fluid">
                  <div class="caption bg-color vertical-center text-left">
                    <div class="slider-header fadeInDown-1">Spring 2018</div>
                    <div class="big-text fadeInDown-1"> Women Fashion </div>
                    <div class="excerpt fadeInDown-2 hidden-xs"> <span>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit</span> </div>
                    <div class="button-holder fadeInDown-3"> <a href="index6c11.html?page=single-product" class="btn-lg btn btn-uppercase btn-primary shop-now-button">Shop Now</a> </div>
                  </div>
                  <!-- /.caption -->
                </div>
                <!-- /.container-fluid -->
              </div>
              <!-- /.item -->

            </div>
            <!-- /.owl-carousel -->
          </div>

          <!-- ============================================== SCROLL TABS ============================================== -->
          <div id="product-tabs-slider" class="scroll-tabs outer-top-vs">
            <div class="more-info-tab clearfix ">
              <h3 class="new-product-title pull-left">Produk Terbaru</h3>
              <ul class="nav nav-tabs nav-tab-line pull-right" id="new-products-1">
                <li class="active"><a data-transition-type="backSlide" href="#all" data-toggle="tab">All</a></li>
                <li><a data-transition-type="backSlide" href="#pakaian" data-toggle="tab">Pakaian</a></li>
                <li><a data-transition-type="backSlide" href="#perhiasan" data-toggle="tab">Perhiasan</a></li>
                <li><a data-transition-type="backSlide" href="#kosmetik" data-toggle="tab">Kosmetik</a></li>
                <li><a data-transition-type="backSlide" href="#sepatu" data-toggle="tab">Sepatu</a></li>
              </ul>
              <!-- /.nav-tabs -->
            </div>
            <div class="tab-content outer-top-xs">
              <div class="tab-pane in active" id="all">
                <div class="product-slider">
                  <div class="owl-carousel home-owl-carousel custom-carousel owl-theme">
                    <div class="item item-carousel">
                      <div class="products">
                        <div class="product">
                          <div class="product-image">
                            <div class="image">
                              <a href="{{url('/template.detail')}}">
                                <img src="{{url('public')}}/assets/images/products/p1.jpg" alt="">
                                <img src="{{url('public')}}/assets/images/products/p1_hover.jpg" alt="" class="hover-image">
                              </a>
                            </div>
                            <!-- /.image -->

                            <div class="tag new"><span>new</span></div>
                          </div>
                          <!-- /.product-image -->

                          <div class="product-info text-left">
                            <h3 class="name"><a href="{{url('/template.detail')}}">Blazze</a></h3>
                            <div class="rating rateit-small"></div>
                            <div class="description"></div>
                            <div class="product-price"> <span class="price"> Rp 145.000 </span> <span class="price-before-discount">$ 800</span> </div>
                            <!-- /.product-price -->

                          </div>
                          <!-- /.product-info -->
                          <div class="cart clearfix animate-effect">
                            <div class="action">
                              <ul class="list-unstyled">
                                <li class="add-cart-button btn-group">
                                  <button data-toggle="tooltip" class="btn btn-primary icon" type="button" title="Add Cart"> <i class="fa fa-shopping-cart"></i> </button>
                                  <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                                </li>
                                <li class="lnk wishlist"> <a data-toggle="tooltip" class="add-to-cart" href="{{url('/template.detail')}}" title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>
                                <li class="lnk"> <a data-toggle="tooltip" class="add-to-cart" href="{{url('/template.detail')}}" title="Compare"> <i class="fa fa-signal" aria-hidden="true"></i> </a> </li>
                              </ul>
                            </div>
                            <!-- /.action -->
                          </div>
                          <!-- /.cart -->
                        </div>
                        <!-- /.product -->

                      </div>
                      <!-- /.products -->
                    </div>
                    <!-- /.item -->

                    <div class="item item-carousel">
                      <div class="products">
                        <div class="product">
                          <div class="product-image">
                            <div class="image">
                              <a href="{{url('/template.detail')}}">
                                <img src="{{url('public')}}/assets/images/products/p4.jpg" alt="">
                                <img src="{{url('public')}}/assets/images/products/p4_hover.jpg" alt="" class="hover-image">
                              </a>
                            </div>
                            <!-- /.image -->


                          </div>
                          <!-- /.product-image -->

                          <div class="product-info text-left">
                            <h3 class="name"><a href="{{url('/template.detail')}}">Gelang Bows</a></h3>
                            <div class="rating rateit-small"></div>
                            <div class="description"></div>
                            <div class="product-price"> <span class="price"> Rp 40.000 </span> <span class="price-before-discount">$ 800</span> </div>
                            <!-- /.product-price -->

                          </div>
                          <!-- /.product-info -->
                          <div class="cart clearfix animate-effect">
                            <div class="action">
                              <ul class="list-unstyled">
                                <li class="add-cart-button btn-group">
                                  <button class="btn btn-primary icon" data-toggle="dropdown" type="button"> <i class="fa fa-shopping-cart"></i> </button>
                                  <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                                </li>
                                <li class="lnk wishlist"> <a class="add-to-cart" href="{{url('/template.detail')}}" title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>
                                <li class="lnk"> <a class="add-to-cart" href="{{url('/template.detail')}}" title="Compare"> <i class="fa fa-signal" aria-hidden="true"></i> </a> </li>
                              </ul>
                            </div>
                            <!-- /.action -->
                          </div>
                          <!-- /.cart -->
                        </div>
                        <!-- /.product -->

                      </div>
                      <!-- /.products -->
                    </div>
                    <!-- /.item -->

                    <div class="item item-carousel">
                      <div class="products">
                        <div class="product">
                          <div class="product-image">
                            <div class="image">
                              <a href="{{url('/template.detail')}}">
                                <img src="{{url('public')}}/assets/images/products/p3.jpg" alt="">
                                <img src="{{url('public')}}/assets/images/products/p3_hover.jpg" alt="" class="hover-image">
                              </a>
                            </div>
                            <!-- /.image -->

                            <div class="tag sale"><span>sale</span></div>
                          </div>
                          <!-- /.product-image -->

                          <div class="product-info text-left">
                            <h3 class="name"><a href="{{url('/template.detail')}}">Sepatu Brown</a></h3>
                            <div class="rating rateit-small"></div>
                            <div class="description"></div>
                            <div class="product-price"> <span class="price"> Rp 99.000 </span> <span class="price-before-discount">$ 800</span> </div>
                            <!-- /.product-price -->

                          </div>
                          <!-- /.product-info -->
                          <div class="cart clearfix animate-effect">
                            <div class="action">
                              <ul class="list-unstyled">
                                <li class="add-cart-button btn-group">
                                  <button class="btn btn-primary icon" data-toggle="dropdown" type="button"> <i class="fa fa-shopping-cart"></i> </button>
                                  <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                                </li>
                                <li class="lnk wishlist"> <a class="add-to-cart" href="{{url('/template.detail')}}" title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>
                                <li class="lnk"> <a class="add-to-cart" href="{{url('/template.detail')}}" title="Compare"> <i class="fa fa-signal" aria-hidden="true"></i> </a> </li>
                              </ul>
                            </div>
                            <!-- /.action -->
                          </div>
                          <!-- /.cart -->
                        </div>
                        <!-- /.product -->

                      </div>
                      <!-- /.products -->
                    </div>
                    <!-- /.item -->

                    <div class="item item-carousel">
                      <div class="products">
                        <div class="product">
                          <div class="product-image">
                            <div class="image">
                              <a href="{{url('/template.detail')}}">
                                <img src="{{url('public')}}/assets/images/products/p2.jpg" alt="">
                                <img src="{{url('public')}}/assets/images/products/p2_hover.jpg" alt="" class="hover-image">
                              </a>
                            </div>
                            <!-- /.image -->


                          </div>
                          <!-- /.product-image -->

                          <div class="product-info text-left">
                            <h3 class="name"><a href="{{url('/template.detail')}}">Kaos Lengan Panjang</a></h3>
                            <div class="rating rateit-small"></div>
                            <div class="description"></div>
                            <div class="product-price"> <span class="price"> RP 80.000 </span> <span class="price-before-discount">$ 800</span> </div>
                            <!-- /.product-price -->

                          </div>
                          <!-- /.product-info -->
                          <div class="cart clearfix animate-effect">
                            <div class="action">
                              <ul class="list-unstyled">
                                <li class="add-cart-button btn-group">
                                  <button class="btn btn-primary icon" data-toggle="dropdown" type="button"> <i class="fa fa-shopping-cart"></i> </button>
                                  <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                                </li>
                                <li class="lnk wishlist"> <a class="add-to-cart" href="{{url('/template.detail')}}" title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>
                                <li class="lnk"> <a class="add-to-cart" href="{{url('/template.detail')}}" title="Compare"> <i class="fa fa-signal" aria-hidden="true"></i> </a> </li>
                              </ul>
                            </div>
                            <!-- /.action -->
                          </div>
                          <!-- /.cart -->
                        </div>
                        <!-- /.product -->

                      </div>
                      <!-- /.products -->
                    </div>
                    <!-- /.item -->

                    <div class="item item-carousel">
                      <div class="products">
                        <div class="product">
                          <div class="product-image">
                            <div class="image">
                              <a href="{{url('/template.detail')}}">
                                <img src="{{url('public')}}/assets/images/products/p6.jpg" alt="">
                                <img src="{{url('public')}}/assets/images/products/p6_hover.jpg" alt="" class="hover-image">
                              </a>
                            </div>
                            <!-- /.image -->

                            <div class="tag hot"><span>hot</span></div>
                          </div>
                          <!-- /.product-image -->

                          <div class="product-info text-left">
                            <h3 class="name"><a href="{{url('/template.detail')}}">Kaos longres</a></h3>
                            <div class="rating rateit-small"></div>
                            <div class="description"></div>
                            <div class="product-price"> <span class="price"> Rp 55.000</span> <span class="price-before-discount">$ 800</span> </div>
                            <!-- /.product-price -->

                          </div>
                          <!-- /.product-info -->
                          <div class="cart clearfix animate-effect">
                            <div class="action">
                              <ul class="list-unstyled">
                                <li class="add-cart-button btn-group">
                                  <button class="btn btn-primary icon" data-toggle="dropdown" type="button"> <i class="fa fa-shopping-cart"></i> </button>
                                  <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                                </li>
                                <li class="lnk wishlist"> <a class="add-to-cart" href="{{url('/template.detail')}}" title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>
                                <li class="lnk"> <a class="add-to-cart" href="{{url('/template.detail')}}" title="Compare"> <i class="fa fa-signal" aria-hidden="true"></i> </a> </li>
                              </ul>
                            </div>
                            <!-- /.action -->
                          </div>
                          <!-- /.cart -->
                        </div>
                        <!-- /.product -->

                      </div>
                      <!-- /.products -->
                    </div>
                    <!-- /.item -->

                    <div class="item item-carousel">
                      <div class="products">
                        <div class="product">
                          <div class="product-image">
                            <div class="image">
                              <a href="{{url('/template.detail')}}">
                                <img src="{{url('public')}}/assets/images/products/p5.jpg" alt="">
                                <img src="{{url('public')}}/assets/images/products/p5_hover.jpg" alt="" class="hover-image">
                              </a>
                            </div>
                            <!-- /.image -->

                            <div class="tag new"><span>new</span></div>
                          </div>
                          <!-- /.product-image -->

                          <div class="product-info text-left">
                            <h3 class="name"><a href="{{url('/template.detail')}}">Dress Pink</a></h3>
                            <div class="rating rateit-small"></div>
                            <div class="description"></div>
                            <div class="product-price"> <span class="price"> Rp 79.000 </span> <span class="price-before-discount">$ 800</span> </div>
                            <!-- /.product-price -->

                          </div>
                          <!-- /.product-info -->

                        </div>
                        <!-- /.product -->

                      </div>
                      <!-- /.products -->
                    </div>
                    <!-- /.item -->
                  </div>
                  <!-- /.home-owl-carousel -->
                </div>
                <!-- /.product-slider -->
              </div>
              <!-- /.tab-pane -->

            </div>
            <!-- /.tab-content -->
          </div>
          <!-- /.scroll-tabs -->
          <!-- ============================================== SCROLL TABS : END ============================================== -->
          <!-- ============================================== WIDE PRODUCTS ============================================== -->
          <div class="wide-banners outer-bottom-xs">
            <div class="row">
              <div class="col-md-4 col-sm-4">
                <div class="wide-banner cnt-strip">
                  <div class="image"> <img class="img-responsive" src="{{url('public')}}/assets/images/banners/home-banner1.jpg" alt=""> </div>
                </div>
                <!-- /.wide-banner -->
              </div>

              <div class="col-md-4 col-sm-4">
                <div class="wide-banner cnt-strip">
                  <div class="image"> <img class="img-responsive" src="{{url('public')}}/assets/images/banners/home-banner3.jpg" alt=""> </div>
                </div>
                <!-- /.wide-banner -->
              </div>

              <!-- /.col -->
              <div class="col-md-4 col-sm-4">
                <div class="wide-banner cnt-strip">
                  <div class="image"> <img class="img-responsive" src="{{url('public')}}/assets/images/banners/home-banner2.jpg" alt=""> </div>
                </div>
                <!-- /.wide-banner -->
              </div>
              <!-- /.col -->
            </div>
            <!-- /.row -->
          </div>
          <!-- /.wide-banners -->
          <div class="wide-banners outer-bottom-xs">
            <div class="row">
              <div class="col-md-8">
                <div class="wide-banner1 cnt-strip">
                  <div class="image"> <img class="img-responsive" src="{{url('public')}}/assets/images/banners/home-banner.jpg" alt=""> </div>
                  <div class="strip strip-text">
                    <div class="strip-inner">
                      <h2 class="text-right">Amazing Sunglasses<br>
                        <span class="shopping-needs">Get 40% off on selected items</span></h2>
                    </div>
                  </div>
                  <div class="new-label">
                    <div class="text">NEW</div>
                  </div>
                  <!-- /.new-label -->
                </div>
                <!-- /.wide-banner -->
              </div>
              <!-- /.col -->
              <div class="col-md-4">
                <div class="wide-banner cnt-strip">
                  <div class="image"> <img class="img-responsive" src="{{url('public')}}/assets/images/banners/55.jpg" alt=""> </div>


                  <!-- /.new-label -->
                </div>
                <!-- /.wide-banner -->
              </div>

            </div>
            <!-- /.row -->
          </div>
          <!-- /.wide-banners -->
          <!-- ============================================== WIDE PRODUCTS : END ============================================== -->

          <!-- ============================================== FEATURED PRODUCTS ============================================== -->
          <section class="section featured-product">
            <div class="row">
              <div class="col-lg-3">
                <h3 class="section-title">Fashion</h3>
                <ul class="sub-cat">
                  <li><a href="#">Pakaian</a></li>
                  <li><a href="#">Pehiasan</a></li>
                  <li><a href="#">Aksesoris</a></li>
                  <li><a href="#">Kosmetik</a></li>
                  <li><a href="#">Sepatu</a></li>
                  <li><a href="#">Flat Shoes</a></li>
                  <li><a href="#">Hijab</a></li>
                </ul>
              </div>
              <div class="col-lg-9">
                <div class="owl-carousel homepage-owl-carousel custom-carousel owl-theme outer-top-xs">
                  <div class="item item-carousel">
                    <div class="products">
                      <div class="product">
                        <div class="product-image">
                          <div class="image">
                            <a href="{{url('/template.detail')}}">
                              <img src="{{url('public')}}/assets/images/products/p13.jpg" alt="">
                              <img src="{{url('public')}}/assets/images/products/p13_hover.jpg" alt="" class="hover-image">
                            </a>

                          </div>
                          <!-- /.image -->

                          <div class="tag hot"><span>hot</span></div>
                        </div>
                        <!-- /.product-image -->

                        <div class="product-info text-left">
                          <h3 class="name"><a href="{{url('/template.detail')}}">Setelan blue</a></h3>
                          <div class="rating rateit-small"></div>
                          <div class="description"></div>
                          <div class="product-price"> <span class="price"> Rp 95.000 </span> <span class="price-before-discount">$ 800</span> </div>
                          <!-- /.product-price -->

                        </div>
                        <!-- /.product-info -->
                        <div class="cart clearfix animate-effect">
                          <div class="action">
                            <ul class="list-unstyled">
                              <li class="add-cart-button btn-group">
                                <button class="btn btn-primary icon" data-toggle="dropdown" type="button"> <i class="fa fa-shopping-cart"></i> </button>
                                <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                              </li>
                              <li class="lnk wishlist"> <a class="add-to-cart" href="detail.html" title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>
                              <li class="lnk"> <a class="add-to-cart" href="{{url('/template.detail')}}" title="Compare"> <i class="fa fa-signal" aria-hidden="true"></i> </a> </li>
                            </ul>
                          </div>
                          <!-- /.action -->
                        </div>
                        <!-- /.cart -->
                      </div>
                      <!-- /.product -->

                    </div>
                    <!-- /.products -->
                  </div>
                  <!-- /.item -->

                  <div class="item item-carousel">
                    <div class="products">
                      <div class="product">
                        <div class="product-image">
                          <div class="image">
                            <a href="{{url('/template.detail')}}">
                              <img src="{{url('public')}}/assets/images/products/p15.jpg" alt="">
                              <img src="{{url('public')}}/assets/images/products/p15_hover.jpg" alt="" class="hover-image">
                            </a>

                          </div>
                          <!-- /.image -->

                          <div class="tag new"><span>new</span></div>
                        </div>
                        <!-- /.product-image -->

                        <div class="product-info text-left">
                          <h3 class="name"><a href="{{url('/template.detail')}}">Kaos Pendek</a></h3>
                          <div class="rating rateit-small"></div>
                          <div class="description"></div>
                          <div class="product-price"> <span class="price"> Rp 55.000 </span> <span class="price-before-discount">$ 800</span> </div>
                          <!-- /.product-price -->

                        </div>
                        <!-- /.product-info -->
                        <div class="cart clearfix animate-effect">
                          <div class="action">
                            <ul class="list-unstyled">
                              <li class="add-cart-button btn-group">
                                <button class="btn btn-primary icon" data-toggle="dropdown" type="button"> <i class="fa fa-shopping-cart"></i> </button>
                                <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                              </li>
                              <li class="lnk wishlist"> <a class="add-to-cart" href="{{url('/template.detail')}}" title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>
                              <li class="lnk"> <a class="add-to-cart" href="{{url('/template.detail')}}" title="Compare"> <i class="fa fa-signal" aria-hidden="true"></i> </a> </li>
                            </ul>
                          </div>
                          <!-- /.action -->
                        </div>
                        <!-- /.cart -->
                      </div>
                      <!-- /.product -->

                    </div>
                    <!-- /.products -->
                  </div>
                  <!-- /.item -->

                  <div class="item item-carousel">
                    <div class="products">
                      <div class="product">
                        <div class="product-image">
                          <div class="image">
                            <a href="{{url('/template.detail')}}">
                              <img src="{{url('public')}}/assets/images/products/p10.jpg" alt="">
                              <img src="{{url('public')}}/assets/images/products/p10_hover.jpg" alt="" class="hover-image">
                            </a>

                          </div>
                          <!-- /.image -->

                          <div class="tag sale"><span>sale</span></div>
                        </div>
                        <!-- /.product-image -->

                        <div class="product-info text-left">
                          <h3 class="name"><a href="{{url('/template.detail')}}">Topi</a></h3>
                          <div class="rating rateit-small"></div>
                          <div class="description"></div>
                          <div class="product-price"> <span class="price"> Rp 65.000 </span> <span class="price-before-discount">$ 800</span> </div>
                          <!-- /.product-price -->

                        </div>
                        <!-- /.product-info -->
                        <div class="cart clearfix animate-effect">
                          <div class="action">
                            <ul class="list-unstyled">
                              <li class="add-cart-button btn-group">
                                <button class="btn btn-primary icon" data-toggle="dropdown" type="button"> <i class="fa fa-shopping-cart"></i> </button>
                                <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                              </li>
                              <li class="lnk wishlist"> <a class="add-to-cart" href="{{url('/template.detail')}}" title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>
                              <li class="lnk"> <a class="add-to-cart" href="{{url('/template.detail')}}" title="Compare"> <i class="fa fa-signal" aria-hidden="true"></i> </a> </li>
                            </ul>
                          </div>
                          <!-- /.action -->
                        </div>
                        <!-- /.cart -->
                      </div>
                      <!-- /.product -->

                    </div>
                    <!-- /.products -->
                  </div>
                  <!-- /.item -->

                  <div class="item item-carousel">
                    <div class="products">
                      <div class="product">
                        <div class="product-image">
                          <div class="image">
                            <a href="{{url('/template.detail')}}">
                              <img src="{{url('public')}}/assets/images/products/p11.jpg" alt="">
                              <img src="{{url('public')}}/assets/images/products/p11_hover.jpg" alt="" class="hover-image">
                            </a>

                          </div>
                          <!-- /.image -->

                          <div class="tag hot"><span>hot</span></div>
                        </div>
                        <!-- /.product-image -->

                        <div class="product-info text-left">
                          <h3 class="name"><a href="{{url('/template.detail')}}">Gamis</a></h3>
                          <div class="rating rateit-small"></div>
                          <div class="description"></div>
                          <div class="product-price"> <span class="price"> Rp 150.000 </span> <span class="price-before-discount">$ 800</span> </div>
                          <!-- /.product-price -->

                        </div>
                        <!-- /.product-info -->
                        <div class="cart clearfix animate-effect">
                          <div class="action">
                            <ul class="list-unstyled">
                              <li class="add-cart-button btn-group">
                                <button class="btn btn-primary icon" data-toggle="dropdown" type="button"> <i class="fa fa-shopping-cart"></i> </button>
                                <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                              </li>
                              <li class="lnk wishlist"> <a class="add-to-cart" href="{{url('/template.detail')}}" title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>
                              <li class="lnk"> <a class="add-to-cart" href="{{url('/template.detail')}}" title="Compare"> <i class="fa fa-signal" aria-hidden="true"></i> </a> </li>
                            </ul>
                          </div>
                          <!-- /.action -->
                        </div>
                        <!-- /.cart -->
                      </div>
                      <!-- /.product -->

                    </div>
                    <!-- /.products -->
                  </div>
                  <!-- /.item -->

                  <div class="item item-carousel">
                    <div class="products">
                      <div class="product">
                        <div class="product-image">
                          <div class="image">
                            <a href="{{url('/template.detail')}}">
                              <img src="{{url('public')}}/assets/images/products/p8.jpg" alt="">
                              <img src="{{url('public')}}/assets/images/products/p8_hover.jpg" alt="" class="hover-image">
                            </a>

                          </div>
                          <!-- /.image -->

                          <div class="tag new"><span>new</span></div>
                        </div>
                        <!-- /.product-image -->

                        <div class="product-info text-left">
                          <h3 class="name"><a href="{{url('/template.detail')}}">Sepatu</a></h3>
                          <div class="rating rateit-small"></div>
                          <div class="description"></div>
                          <div class="product-price"> <span class="price"> Rp 90.000 </span> <span class="price-before-discount">$ 800</span> </div>
                          <!-- /.product-price -->

                        </div>
                        <!-- /.product-info -->
                        <div class="cart clearfix animate-effect">
                          <div class="action">
                            <ul class="list-unstyled">
                              <li class="add-cart-button btn-group">
                                <button class="btn btn-primary icon" data-toggle="dropdown" type="button"> <i class="fa fa-shopping-cart"></i> </button>
                                <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                              </li>
                              <li class="lnk wishlist"> <a class="add-to-cart" href="{{url('/template.detail')}}" title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>
                              <li class="lnk"> <a class="add-to-cart" href="{{url('/template.detail')}}" title="Compare"> <i class="fa fa-signal" aria-hidden="true"></i> </a> </li>
                            </ul>
                          </div>
                          <!-- /.action -->
                        </div>
                        <!-- /.cart -->
                      </div>
                      <!-- /.product -->

                    </div>
                    <!-- /.products -->
                  </div>
                  <!-- /.item -->

                  <div class="item item-carousel">
                    <div class="products">
                      <div class="product">
                        <div class="product-image">
                          <div class="image">
                            <a href="{{url('/template.detail')}}">
                              <img src="{{url('public')}}/assets/images/products/p7.jpg" alt="">
                              <img src="{{url('public')}}/assets/images/products/p7_hover.jpg" alt="" class="hover-image">
                            </a>

                          </div>
                          <!-- /.image -->

                          <div class="tag sale"><span>sale</span></div>
                        </div>
                        <!-- /.product-image -->

                        <div class="product-info text-left">
                          <h3 class="name"><a href="{{url('/template.detail')}}">Kacamata</a></h3>
                          <div class="rating rateit-small"></div>
                          <div class="description"></div>
                          <div class="product-price"> <span class="price"> Rp 70.000 </span> <span class="price-before-discount">$ 800</span> </div>
                          <!-- /.product-price -->

                        </div>
                        <!-- /.product-info -->
                        <div class="cart clearfix animate-effect">
                          <div class="action">
                            <ul class="list-unstyled">
                              <li class="add-cart-button btn-group">
                                <button class="btn btn-primary icon" data-toggle="dropdown" type="button"> <i class="fa fa-shopping-cart"></i> </button>
                                <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                              </li>
                              <li class="lnk wishlist"> <a class="add-to-cart" href="{{url('/template.detail')}}" title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>
                              <li class="lnk"> <a class="add-to-cart" href="{{url('/template.detail')}}" title="Compare"> <i class="fa fa-signal" aria-hidden="true"></i> </a> </li>
                            </ul>
                          </div>
                          <!-- /.action -->
                        </div>
                        <!-- /.cart -->
                      </div>
                      <!-- /.product -->

                    </div>
                    <!-- /.products -->
                  </div>
                  <!-- /.item -->
                </div>
              </div>
            </div>
            <!-- /.home-owl-carousel -->
          </section>
          <!-- /.section -->
          <!-- ============================================== FEATURED PRODUCTS : END ============================================== -->

          <!-- /.sidebar-widget -->
          <!-- ============================================== BEST SELLER : END ============================================== -->

          <!-- ============================================== BLOG SLIDER ============================================== -->
          <section class="section latest-blog outer-bottom-vs">
            <h3 class="section-title">Latest form Blog</h3>
            <div class="blog-slider-container outer-top-xs">
              <div class="owl-carousel blog-slider custom-carousel">
                <div class="item">
                  <div class="blog-post">
                    <div class="blog-post-image">
                      <div class="image"> <a href="#"><img src="{{url('public')}}/assets/images/blog-post/blog_big_01.jpg" alt=""></a> </div>
                    </div>
                    <!-- /.blog-post-image -->

                    <div class="blog-post-info text-left">
                      <h3 class="name"><a href="#">Berbagai Fashion wanita</a></h3>
                      <span class="info">By Bestqu;|&nbsp; 21 Sep 2020 </span>
                      <p class="text">Wanita dan fashion, merupakan dua hal yang memang tak bisa dipisahkan. Dengan tampilan fashion yang menawan, wanita dapat merasakan kepercayaan yang tinggi dalam diri mereka. Oleh karena itu sangatlah wajar jika kita melihat wanita selalu memperbaharui tampilan fashion dalam diri mereka, sesuai dengan perkembangan yang ada. Berbagai perubahan dalam dunia fashion wanita pun, kini terus dilakukan oleh para pelaku bisnis mode baik dalam skala nasional maupun internasional. </p>
                    </div>
                    <!-- /.blog-post-info -->

                  </div>
                  <!-- /.blog-post -->
                </div>
                <!-- /.item -->

                <div class="item">
                  <div class="blog-post">
                    <div class="blog-post-image">
                      <div class="image"> <a href="blog.html"><img src="{{url('public')}}/assets/images/blog-post/blog_big_02.jpg" alt=""></a> </div>
                    </div>
                    <!-- /.blog-post-image -->

                    <div class="blog-post-info text-left">
                      <h3 class="name"><a href="#">Bucket Bunga</a></h3>
                      <span class="info">By neklei;|&nbsp; 18 Sep 2020 </span>
                      <p class="text"> Rangakaian bunga yang indah sering dijadikan hadiah untuk merayakan acara-acara yang membahagiakan. Dari merayakan kelulusan, hari jadi seseorang sampai menyampaikan rasa kasih untuk dia yang tersayang. Itu sebabnya seorang perangkaian bunga sangat dicari karena biasanya pembeli ingin memberikan rangkaian bunga yang disesuaikan dengan kebutuhan pembeli.</p>
                    </div>
                    <!-- /.blog-post-info -->

                  </div>
                  <!-- /.blog-post -->
                </div>
                <!-- /.item -->

                <!-- /.item -->

                <div class="item">
                  <div class="blog-post">
                    <div class="blog-post-image">
                      <div class="image"> <a href="#"><img src="{{url('public')}}/assets/images/blog-post/blog_big_03.jpg" alt=""></a> </div>
                    </div>
                    <!-- /.blog-post-image -->

                    <div class="blog-post-info text-left">
                      <h3 class="name"><a href="#">Tren Pakaian</a></h3>
                      <span class="info">By jauan;|&nbsp; 11 Sep 2020 </span>
                      <p class="text">Trend pakaian sebagian besar didorong oleh perancang busana yang membuat dan menghasilkan pakaian. Dalam hal ini istilah Bisnis Fashion akan digunakan dalam arti bisnis yang berhubungan dengan pakaian modis atau pakaian sebagai industri kreatif yang diciptakan dan diproduksi oleh perancang busana.</p>
                    </div>
                    <!-- /.blog-post-info -->

                  </div>
                  <!-- /.blog-post -->
                </div>
                <!-- /.item -->

                <div class="item">
                  <div class="blog-post">
                    <div class="blog-post-image">
                      <div class="image"> <a href="#"><img src="{{url('public')}}/assets/images/blog-post/blog_big_01.jpg" alt=""></a> </div>
                    </div>
                    <!-- /.blog-post-image -->

                    <div class="blog-post-info text-left">
                      <h3 class="name"><a href="#">Berbagai Fashion wanita</a></h3>
                      <span class="info">By Bestqu;|&nbsp; 21 Sep 2020 </span>
                      <p class="text">Wanita dan fashion, merupakan dua hal yang memang tak bisa dipisahkan. Dengan tampilan fashion yang menawan, wanita dapat merasakan kepercayaan yang tinggi dalam diri mereka. Oleh karena itu sangatlah wajar jika kita melihat wanita selalu memperbaharui tampilan fashion dalam diri mereka, sesuai dengan perkembangan yang ada. Berbagai perubahan dalam dunia fashion wanita pun, kini terus dilakukan oleh para pelaku bisnis mode baik dalam skala nasional maupun internasional. </p>
                    </div>
                    <!-- /.blog-post-info -->

                  </div>
                  <!-- /.blog-post -->
                </div>
                <!-- /.item -->

                <div class="item">
                  <div class="blog-post">
                    <div class="blog-post-image">
                      <div class="image"> <a href="blog.html"><img src="{{url('public')}}/assets/images/blog-post/blog_big_02.jpg" alt=""></a> </div>
                    </div>
                    <!-- /.blog-post-image -->

                    <div class="blog-post-info text-left">
                      <h3 class="name"><a href="#">Bucket Bunga</a></h3>
                      <span class="info">By neklei;|&nbsp; 18 Sep 2020 </span>
                      <p class="text"> Rangakaian bunga yang indah sering dijadikan hadiah untuk merayakan acara-acara yang membahagiakan. Dari merayakan kelulusan, hari jadi seseorang sampai menyampaikan rasa kasih untuk dia yang tersayang. Itu sebabnya seorang perangkaian bunga sangat dicari karena biasanya pembeli ingin memberikan rangkaian bunga yang disesuaikan dengan kebutuhan pembeli.</p>
                    </div>
                    <!-- /.blog-post-info -->

                  </div>
                  <!-- /.blog-post -->
                </div>
                <!-- /.item -->

              </div>
              <!-- /.owl-carousel -->
            </div>
            <!-- /.blog-slider-container -->
          </section>
          <!-- /.section -->
          <!-- ============================================== BLOG SLIDER : END ============================================== -->

          <!-- ============================================== FEATURED PRODUCTS ============================================== -->
          <section class="section new-arriavls">
            <h3 class="section-title">Produk Unggulan</h3>
            <div class="owl-carousel home-owl-carousel custom-carousel owl-theme outer-top-xs">
              <div class="item item-carousel">
                <div class="products">
                  <div class="product">
                    <div class="product-image">
                      <div class="image">
                        <a href="{{url('/template.detail')}}">
                          <img src="{{url('public')}}/assets/images/products/p10.jpg" alt="">
                          <img src="{{url('public')}}/assets/images/products/p10_hover.jpg" alt="" class="hover-image">
                        </a>

                      </div>
                      <!-- /.image -->

                      <div class="tag new"><span>new</span></div>
                    </div>
                    <!-- /.product-image -->

                    <div class="product-info text-left">
                      <h3 class="name"><a href="{{url('/template.detail')}}">Topi Brown</a></h3>
                      <div class="rating rateit-small"></div>
                      <div class="description"></div>
                      <div class="product-price"> <span class="price"> Rp 79.000 </span> <span class="price-before-discount">$ 800</span> </div>
                      <!-- /.product-price -->

                    </div>
                    <!-- /.product-info -->
                    <div class="cart clearfix animate-effect">
                      <div class="action">
                        <ul class="list-unstyled">
                          <li class="add-cart-button btn-group">
                            <button class="btn btn-primary icon" data-toggle="dropdown" type="button"> <i class="fa fa-shopping-cart"></i> </button>
                            <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                          </li>
                          <li class="lnk wishlist"> <a class="add-to-cart" href="{{url('/template.detail')}}" title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>
                          <li class="lnk"> <a class="add-to-cart" href="{{url('/template.detail')}}" title="Compare"> <i class="fa fa-signal" aria-hidden="true"></i> </a> </li>
                        </ul>
                      </div>
                      <!-- /.action -->
                    </div>
                    <!-- /.cart -->
                  </div>
                  <!-- /.product -->

                </div>
                <!-- /.products -->
              </div>
              <!-- /.item -->

              <div class="item item-carousel">
                <div class="products">
                  <div class="product">
                    <div class="product-image">
                      <div class="image">
                        <a href="{{url('/template.detail')}}">
                          <img src="{{url('public')}}/assets/images/products/p2.jpg" alt="">
                          <img src="{{url('public')}}/assets/images/products/p2_hover.jpg" alt="" class="hover-image">
                        </a>

                      </div>
                      <!-- /.image -->

                      <div class="tag new"><span>new</span></div>
                    </div>
                    <!-- /.product-image -->

                    <div class="product-info text-left">
                      <h3 class="name"><a href="{{url('/template.detail')}}">Kaos Panjang</a></h3>
                      <div class="rating rateit-small"></div>
                      <div class="description"></div>
                      <div class="product-price"> <span class="price"> Rp 78.000 </span> <span class="price-before-discount">$ 800</span> </div>
                      <!-- /.product-price -->

                    </div>
                    <!-- /.product-info -->
                    <div class="cart clearfix animate-effect">
                      <div class="action">
                        <ul class="list-unstyled">
                          <li class="add-cart-button btn-group">
                            <button class="btn btn-primary icon" data-toggle="dropdown" type="button"> <i class="fa fa-shopping-cart"></i> </button>
                            <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                          </li>
                          <li class="lnk wishlist"> <a class="add-to-cart" href="{{url('/template.detail')}}" title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>
                          <li class="lnk"> <a class="add-to-cart" href="{{url('/template.detail')}}" title="Compare"> <i class="fa fa-signal" aria-hidden="true"></i> </a> </li>
                        </ul>
                      </div>
                      <!-- /.action -->
                    </div>
                    <!-- /.cart -->
                  </div>
                  <!-- /.product -->

                </div>
                <!-- /.products -->
              </div>
              <!-- /.item -->

              <div class="item item-carousel">
                <div class="products">
                  <div class="product">
                    <div class="product-image">
                      <div class="image">
                        <a href="{{url('/template.detail')}}">
                          <img src="{{url('public')}}/assets/images/products/p3.jpg" alt="">
                          <img src="{{url('public')}}/assets/images/products/p3_hover.jpg" alt="" class="hover-image">
                        </a>

                      </div>
                      <!-- /.image -->

                      <div class="tag hot"><span>hot</span></div>
                    </div>
                    <!-- /.product-image -->

                    <div class="product-info text-left">
                      <h3 class="name"><a href="{{url('/template.detail')}}">Sepatu</a></h3>
                      <div class="rating rateit-small"></div>
                      <div class="description"></div>
                      <div class="product-price"> <span class="price"> Rp 69.000 </span> <span class="price-before-discount">$ 800</span> </div>
                      <!-- /.product-price -->

                    </div>
                    <!-- /.product-info -->
                    <div class="cart clearfix animate-effect">
                      <div class="action">
                        <ul class="list-unstyled">
                          <li class="add-cart-button btn-group">
                            <button class="btn btn-primary icon" data-toggle="dropdown" type="button"> <i class="fa fa-shopping-cart"></i> </button>
                            <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                          </li>
                          <li class="lnk wishlist"> <a class="add-to-cart" href="{{url('/template.detail')}}" title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>
                          <li class="lnk"> <a class="add-to-cart" href="{{url('/template.detail')}}" title="Compare"> <i class="fa fa-signal" aria-hidden="true"></i> </a> </li>
                        </ul>
                      </div>
                      <!-- /.action -->
                    </div>
                    <!-- /.cart -->
                  </div>
                  <!-- /.product -->

                </div>
                <!-- /.products -->
              </div>
              <!-- /.item -->

              <div class="item item-carousel">
                <div class="products">
                  <div class="product">
                    <div class="product-image">
                      <div class="image">
                        <a href="{{url('/template.detail')}}">
                          <img src="{{url('public')}}/assets/images/products/p1.jpg" alt="">
                          <img src="{{url('public')}}/assets/images/products/p1_hover.jpg" alt="" class="hover-image">
                        </a>

                      </div>
                      <!-- /.image -->

                      <div class="tag hot"><span>hot</span></div>
                    </div>
                    <!-- /.product-image -->

                    <div class="product-info text-left">
                      <h3 class="name"><a href="{{url('/template.detail')}}">Setelan Glei</a></h3>
                      <div class="rating rateit-small"></div>
                      <div class="description"></div>
                      <div class="product-price"> <span class="price"> Rp 99.000 </span> <span class="price-before-discount">$ 800</span> </div>
                      <!-- /.product-price -->

                    </div>
                    <!-- /.product-info -->
                    <div class="cart clearfix animate-effect">
                      <div class="action">
                        <ul class="list-unstyled">
                          <li class="add-cart-button btn-group">
                            <button class="btn btn-primary icon" data-toggle="dropdown" type="button"> <i class="fa fa-shopping-cart"></i> </button>
                            <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                          </li>
                          <li class="lnk wishlist"> <a class="add-to-cart" href="{{url('/template.detail')}}" title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>
                          <li class="lnk"> <a class="add-to-cart" href="{{url('/template.detail')}}" title="Compare"> <i class="fa fa-signal" aria-hidden="true"></i> </a> </li>
                        </ul>
                      </div>
                      <!-- /.action -->
                    </div>
                    <!-- /.cart -->
                  </div>
                  <!-- /.product -->

                </div>
                <!-- /.products -->
              </div>
              <!-- /.item -->

              <div class="item item-carousel">
                <div class="products">
                  <div class="product">
                    <div class="product-image">
                      <div class="image">
                        <a href="{{url('/template.detail')}}">
                          <img src="{{url('public')}}/assets/images/products/p7.jpg" alt="">
                          <img src="{{url('public')}}/assets/images/products/p7_hover.jpg" alt="" class="hover-image">
                        </a>

                      </div>
                      <!-- /.image -->

                      <div class="tag sale"><span>sale</span></div>
                    </div>
                    <!-- /.product-image -->

                    <div class="product-info text-left">
                      <h3 class="name"><a href="{{url('/template.detail')}}">Kacamata</a></h3>
                      <div class="rating rateit-small"></div>
                      <div class="description"></div>
                      <div class="product-price"> <span class="price"> Rp 75.000 </span> <span class="price-before-discount">$ 800</span> </div>
                      <!-- /.product-price -->

                    </div>
                    <!-- /.product-info -->
                    <div class="cart clearfix animate-effect">
                      <div class="action">
                        <ul class="list-unstyled">
                          <li class="add-cart-button btn-group">
                            <button class="btn btn-primary icon" data-toggle="dropdown" type="button"> <i class="fa fa-shopping-cart"></i> </button>
                            <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                          </li>
                          <li class="lnk wishlist"> <a class="add-to-cart" href="{{url('/template.detail')}}" title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>
                          <li class="lnk"> <a class="add-to-cart" href="{{url('/template.detail')}}" title="Compare"> <i class="fa fa-signal" aria-hidden="true"></i> </a> </li>
                        </ul>
                      </div>
                      <!-- /.action -->
                    </div>
                    <!-- /.cart -->
                  </div>
                  <!-- /.product -->

                </div>
                <!-- /.products -->
              </div>
              <!-- /.item -->

              <div class="item item-carousel">
                <div class="products">
                  <div class="product">
                    <div class="product-image">
                      <div class="image">
                        <a href="{{url('/template.detail')}}">
                          <img src="{{url('public')}}/assets/images/products/p9.jpg" alt="">
                          <img src="{{url('public')}}/assets/images/products/p9_hover.jpg" alt="" class="hover-image">
                        </a>

                      </div>
                      <!-- /.image -->

                      <div class="tag sale"><span>sale</span></div>
                    </div>
                    <!-- /.product-image -->

                    <div class="product-info text-left">
                      <h3 class="name"><a href="{{url('/template.detail')}}">Dress</a></h3>
                      <div class="rating rateit-small"></div>
                      <div class="description"></div>
                      <div class="product-price"> <span class="price"> Rp 75.000 </span> <span class="price-before-discount">$ 800</span> </div>
                      <!-- /.product-price -->

                    </div>
                    <!-- /.product-info -->
                    <div class="cart clearfix animate-effect">
                      <div class="action">
                        <ul class="list-unstyled">
                          <li class="add-cart-button btn-group">
                            <button class="btn btn-primary icon" data-toggle="dropdown" type="button"> <i class="fa fa-shopping-cart"></i> </button>
                            <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                          </li>
                          <li class="lnk wishlist"> <a class="add-to-cart" href="{{url('/template.detail')}}" title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>
                          <li class="lnk"> <a class="add-to-cart" href="{{url('/template.detail')}}" title="Compare"> <i class="fa fa-signal" aria-hidden="true"></i> </a> </li>
                        </ul>
                      </div>
                      <!-- /.action -->
                    </div>
                    <!-- /.cart -->
                  </div>
                  <!-- /.product -->

                </div>
                <!-- /.products -->
              </div>
              <!-- /.item -->
            </div>
            <!-- /.home-owl-carousel -->
          </section>
          <!-- /.section -->
          <!-- ============================================== FEATURED PRODUCTS : END ============================================== -->

        </div>
        <!-- /.homebanner-holder -->
        <!-- ============================================== CONTENT : END ============================================== -->
      </div>
      <!-- /.row -->
      <!-- ============================================== BRANDS CAROUSEL ============================================== -->
      <div id="brands-carousel" class="logo-slider">
        <div class="logo-slider-inner">
          <div id="brand-slider" class="owl-carousel brand-slider custom-carousel owl-theme">
            <div class="item m-t-15"> <a href="#" class="image"> <img data-echo="{{url('public')}}/assets/images/brands/brand1.png" src="{{url('public')}}/assets/images/blank.gif" alt=""> </a> </div>
            <!--/.item-->

            <div class="item m-t-10"> <a href="#" class="image"> <img data-echo="{{url('public')}}/assets/images/brands/brand2.png" src="{{url('public')}}/assets/images/blank.gif" alt=""> </a> </div>
            <!--/.item-->

            <div class="item"> <a href="#" class="image"> <img data-echo="{{url('public')}}/assets/images/brands/brand3.png" src="{{url('public')}}/assets/images/blank.gif" alt=""> </a> </div>
            <!--/.item-->

            <div class="item"> <a href="#" class="image"> <img data-echo="{{url('public')}}/assets/images/brands/brand4.png" src="{{url('public')}}/assets/images/blank.gif" alt=""> </a> </div>
            <!--/.item-->

            <div class="item"> <a href="#" class="image"> <img data-echo="{{url('public')}}/assets/images/brands/brand5.png" src="{{url('public')}}/assets/images/blank.gif" alt=""> </a> </div>
            <!--/.item-->

            <div class="item"> <a href="#" class="image"> <img data-echo="{{url('public')}}/assets/images/brands/brand6.png" src="{{url('public')}}/assets/images/blank.gif" alt=""> </a> </div>
            <!--/.item-->

            <div class="item"> <a href="#" class="image"> <img data-echo="{{url('public')}}/assets/images/brands/brand2.png" src="{{url('public')}}/assets/images/blank.gif" alt=""> </a> </div>
            <!--/.item-->

            <div class="item"> <a href="#" class="image"> <img data-echo="{{url('public')}}/assets/images/brands/brand4.png" src="{{url('public')}}/assets/images/blank.gif" alt=""> </a> </div>
            <!--/.item-->

            <div class="item"> <a href="#" class="image"> <img data-echo="{{url('public')}}/assets/images/brands/brand1.png" src="{{url('public')}}/assets/images/blank.gif" alt=""> </a> </div>
            <!--/.item-->

            <div class="item"> <a href="#" class="image"> <img data-echo="{{url('public')}}/assets/images/brands/brand5.png" src="{{url('public')}}/assets/images/blank.gif" alt=""> </a> </div>
            <!--/.item-->
          </div>
          <!-- /.owl-carousel #logo-slider -->
        </div>
        <!-- /.logo-slider-inner -->

      </div>
      <!-- /.logo-slider -->
      <!-- ============================================== BRANDS CAROUSEL : END ============================================== -->
    </div>
    <!-- /.container -->
  </div>
  <!-- /#top-banner-and-menu -->

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
  <script src="{{url('public')}}//assets/js/jquery-1.11.1.min.js"></script>
  <script src="{{url('public')}}//assets/js/bootstrap.min.js"></script>
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
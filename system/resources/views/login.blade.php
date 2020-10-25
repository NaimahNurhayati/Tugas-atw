<!DOCTYPE HTML>
<html>

<head>
  <title> Login Page</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="keywords" content="Novus Admin Panel Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
SmartPhone Compatible web template, free WebDesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
  <script type="application/x-javascript">
    addEventListener("load", function() {
      setTimeout(hideURLbar, 0);
    }, false);

    function hideURLbar() {
      window.scrollTo(0, 1);
    }
  </script>
  <!-- Bootstrap Core CSS -->
  <link href="{{url('public')}}/assets2/css/bootstrap.css" rel='stylesheet' type='text/css' />
  <!-- Custom CSS -->
  <link href="{{url('public')}}/assets2/css/style.css" rel='stylesheet' type='text/css' />
  <!-- font CSS -->
  <!-- font-awesome icons -->
  <link href="{{url('public')}}/assets2/css/font-awesome.css" rel="stylesheet">
  <!-- //font-awesome icons -->
  <!-- js-->
  <script src="{{url('public')}}/assets2/js/jquery-1.11.1.min.js"></script>
  <script src="{{url('public')}}/assets2/js/modernizr.custom.js"></script>
  <!--webfonts-->
  <link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,300,300italic,400italic,700,700italic' rel='stylesheet' type='text/css'>
  <!--//webfonts-->
  <!--animate-->
  <link href="{{url('public')}}/assets2/css/animate.css" rel="stylesheet" type="text/css" media="all">
  <script src="{{url('public')}}/assets2/js/wow.min.js"></script>
  <script>
    new WOW().init();
  </script>
  <!--//end-animate-->
  <!-- Metis Menu -->
  <script src="{{url('public')}}/assets2/js/metisMenu.min.js"></script>
  <script src="{{url('public')}}/assets2/js/custom.js"></script>
  <!--//Metis Menu -->
</head>

<body class="cbp-spmenu-push">
  <!-- main content start-->
  <div id="page-wrapper">
    <div class="main-page login-page ">
      <h3 class="title1">OlShop Fashion Wanita</h3>
      <div class="widget-shadow">
        <div class="login-top">
          <h4>Welcome back to Fashion Wanita! <br> Bukan Member? <a href="#"> Daftar »</a> </h4>
        </div>
        <div class="login-body">
          <form>
            <input type="text" class="user" name="email" placeholder="Enter your email" required="">
            <input type="password" name="password" class="lock" placeholder="password">
            <input type="submit" name="Sign In" value="Sign In">
            <div class="forgot-grid">
              <label class="checkbox"><input type="checkbox" name="checkbox" checked=""><i></i>Remember me</label>
              <div class="forgot">
                <a href="#">Lupa password?</a>
              </div>
              <div class="clearfix">

              </div>
            </div>
          </form>
        </div>
      </div>

      <div class="login-page-bottom">
        <h5> - OR -</h5>
        <p><a href="{{url('home')}}">Go Back to Home</a></p>
        <div class="social-btn"><a href="#"><i class="fa fa-facebook"></i><i>Sign In with Facebook</i></a></div>
        <div class="social-btn sb-two"><a href="#"><i class="fa fa-twitter"></i><i>Sign In with Twitter</i></a></div>
      </div>
    </div>
  </div>
  <!--footer-->
  @include('/templateadmin.section.footer')
  <!--//footer-->
  <!-- Classie -->
  <script src="{{url('public')}}/assets2/js/classie.js"></script>
  <script>
    var menuLeft = document.getElementById('cbp-spmenu-s1'),
      showLeftPush = document.getElementById('showLeftPush'),
      body = document.body;

    showLeftPush.onclick = function() {
      classie.toggle(this, 'active');
      classie.toggle(body, 'cbp-spmenu-push-toright');
      classie.toggle(menuLeft, 'cbp-spmenu-open');
      disableOther('showLeftPush');
    };

    function disableOther(button) {
      if (button !== 'showLeftPush') {
        classie.toggle(showLeftPush, 'disabled');
      }
    }
  </script>
  <!--scrolling js-->
  <script src="{{url('public')}}/assets2/js/jquery.nicescroll.js"></script>
  <script src="{{url('public')}}/assets2/js/scripts.js"></script>
  <!--//scrolling js-->
  <!-- Bootstrap Core JavaScript -->
  <script src="{{url('public')}}/assets2/js/bootstrap.js"> </script>
</body>

</html>
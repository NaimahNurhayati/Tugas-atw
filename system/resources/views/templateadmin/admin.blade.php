<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>

<head>
  <title>Template Admin | Home</title>
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
  <!-- chart -->
  <script src="{{url('public')}}/assets2/js/Chart.js"></script>
  <!-- //chart -->
  <!--Calender-->
  <link rel="stylesheet" href="{{url('public')}}/assets2/css/clndr.css" type="text/css" />
  <script src="{{url('public')}}/assets2/js/underscore-min.js" type="text/javascript"></script>
  <script src="{{url('public')}}/assets2/js/moment-2.2.1.js" type="text/javascript"></script>
  <script src="{{url('public')}}/assets2/js/clndr.js" type="text/javascript"></script>
  <script src="{{url('public')}}/assets2/js/site.js" type="text/javascript"></script>
  <!--End Calender-->
  <!-- Metis Menu -->
  <script src="{{url('public')}}/assets2/js/metisMenu.min.js"></script>
  <script src="{{url('public')}}/assets2/js/custom.js"></script>
  <link href="{{url('public')}}/assets2/css/custom.css" rel="stylesheet">
  <!--//Metis Menu -->
</head>

<body class="cbp-spmenu-push">
  <div class="main-content">
    <!--left-fixed -navigation-->
    @include('/templateadmin.section.sidebar')
    <!--left-fixed -navigation-->
    <!-- header-starts -->
    @include('/templateadmin.section.header')
    <!-- //header-ends -->
    <!-- main content start-->
    <div id="page-wrapper">
      @yield('content')
    </div>
    <!--footer-->
    @include('/templateadmin.section.footer')
    <!--//footer-->
  </div>
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
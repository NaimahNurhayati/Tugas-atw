<div class="sticky-header header-section ">
  <div class="header-left">
    <!--toggle button start-->

    <!--toggle button end-->
    <!--logo -->
    <div class="logo">
      <a href="{{url('beranda')}}">
        <h1>FASHOLSHOP</h1>
        <span>Administrator</span>
      </a>
    </div>
    <!--//logo-->
    <!--search-box-->

    <!--//end-search-box-->
    <div class="clearfix"> </div>
  </div>
  <div class="header-right">
    <div class="profile_details_left">
      <!--notifications of menu start -->

      <div class="clearfix"> </div>
    </div>
    <!--notification menu end -->
    <div class="profile_details">
      <ul>
        <li class="dropdown profile_details_drop">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
            <div class="profile_img">
              <span class="prfil-img"><img src="{{url('public')}}/assets2/images/a.png" alt=""> </span>
              <div class="user-name">
                <p>
                  @if(Auth::check())
                  {{request()->user()->nama}}
                  @else
                  Silahkan Login
                  @endif
                </p>
                <span>Administrator</span>
              </div>
              <i class="fa fa-angle-down lnr"></i>
              <i class="fa fa-angle-up lnr"></i>
              <div class="clearfix"></div>
            </div>
          </a>
          <ul class="dropdown-menu drp-mnu">
            <li> <a href="#"><i class="fa fa-cog"></i> Settings</a> </li>
            <li> <a href="#"><i class="fa fa-user"></i> Profile</a> </li>
            <li> <a href="{{url('logout')}}"><i class="fa fa-sign-out"></i> Logout</a> </li>
          </ul>
        </li>
      </ul>
    </div>
    <div class="clearfix"> </div>
  </div>
  <div class="clearfix"> </div>
</div>
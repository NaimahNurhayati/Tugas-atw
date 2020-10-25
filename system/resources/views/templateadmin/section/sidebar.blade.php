@php
function checkRouteActive($route){
if(Route::current()-> uri == $route) return 'active';
}
@endphp

<div class=" sidebar" role="navigation">
  <div class="navbar-collapse">
    <nav class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-left" id="cbp-spmenu-s1">
      <ul class="nav" id="side-menu">
        <li>
          <a href="{{url('home')}}" class="nav-link {{checkRouteActive('home')}}"><i class="fa fa-home nav_icon"></i>Home</a>
        </li>
        <li>
          <a href="{{url('produk')}}" class="nav-link {{checkRouteActive('produk')}}"><i class="fa fa-cogs nav_icon"></i>Produk</a>
        </li>
        <li class="">
          <a href="#"><i class="fa fa-book nav_icon"></i>Kategori <span class="fa arrow"></span></a>
          <ul class="nav nav-second-level collapse">
            <li>
              <a href="{{url('pakaian')}}" class="nav-link {{checkRouteActive('pakaian')}}">Pakaian</a>
            </li>
            <li>
              <a href="{{url('aksesoris')}}" class="nav-link {{checkRouteActive('aksesoris')}}">Aksesoris</a>
            </li>
            <li>
              <a href="{{url('kosmetik')}}" class="nav-link {{checkRouteActive('kosmetik')}}">Kosmetik</a>
            </li>
            <li>
              <a href="{{url('hijab')}}" class="nav-link {{checkRouteActive('hijab')}}">Hijab</a>
            </li>
            <li>
              <a href="{{url('sepatu')}}" class="nav-link {{checkRouteActive('sepatu')}}">Sepatu</a>
            </li>
            <li>
              <a href="{{url('flatshoes')}}" class="nav-link {{checkRouteActive('flatshoes')}}">Flat Shoes</a>
            </li>
          </ul>
          <!-- /nav-second-level -->
        </li>
        <li>
          <a href="{{url('promo')}}" class="nav-link {{checkRouteActive('promo')}}"><i class="fa fa-table nav_icon"></i>Promo</a>
        </li>
        <li>
          <a href="#"><i class="fa fa-file-text-o nav_icon"></i>Pages<span class="nav-badge-btm"></span><span class="fa arrow"></span></a>
          <ul class="nav nav-second-level collapse">
            <li>
              <a href="login.html">Login</a>
            </li>
            <li>
              <a href="signup.html">SignUp</a>
            </li>
          </ul>
          <!-- //nav-second-level -->
        </li>
        <li>
          <a href="#"><i class="fa fa-th nav_icon"></i>Master Data<span class="nav-badge-btm"></span><span class="fa arrow"></span></a>
          <ul class="nav nav-second-level collapse">
            <li>
              <a href="login.html">Pelanggan</a>
            </li>
            <li>
              <a href="signup.html">Supplier</a>
            </li>
          </ul>
          <!-- //nav-second-level -->
        </li>
      </ul>
      <!-- //sidebar-collapse -->
    </nav>
  </div>
</div>
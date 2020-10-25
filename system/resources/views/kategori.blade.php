@extends('templateadmin.admin')

@section('content')
<h2 style="text-align: center;">Halaman Kategori</h2> <br><br>
<div class="image" style="display: flex; justify-content:space-evenly">
  <div>
    <img style="width: 200px; height:auto;" src="{{url('public')}}/assets/images/products/p0.jpg" alt="">
    <a href="">
      <h3 style="text-align: center;">Tas</h3>
    </a>
  </div>
  <div>
    <img style="width: 200px; height:auto;" src="{{url('public')}}/assets/images/products/p18.jpg" alt="" class="hover-image">
    <a href="">
      <h3 style="text-align: center;">Flat Shoes</h3>
    </a>
  </div>
  <div>
    <img style="width: 200px; height:auto;" src="{{url('public')}}/assets/images/products/p16.jpg" alt="">
    <a href="">
      <h3 style="text-align: center;">Sepatu</h3>
    </a>
  </div>
</div>

<div class="image" style="display: flex; justify-content:space-evenly; margin-top:20px;">
  <div>
    <img style="width: 200px; height:auto;" src="{{url('public')}}/assets/images/products/13.jpg" alt="">
    <a href="">
      <h3 style="text-align: center;">Gamis</h3>
    </a>
  </div>
  <div>
    <img style="width: 200px; height:auto;" src="{{url('public')}}/assets/images/products/11.jpg" alt="" class="hover-image">
    <a href="">
      <h3 style="text-align: center;">Jam Tangan</h3>
    </a>
  </div>
  <div>
    <img style="width: 200px; height:200px;" src="{{url('public')}}/assets/images/products/22.jpg" alt="">
    <a href="">
      <h3 style="text-align: center;">Perhiasan</h3>
    </a>
  </div>
</div>

<div class="image" style="display: flex; justify-content:space-evenly; margin-top:20px;">
  <div>
    <img style="width: 200px; height:auto;" src="{{url('public')}}/assets/images/products/12.jpg" alt="">
    <a href="">
      <h3 style="text-align: center;">Kosmetik</h3>
    </a>
  </div>
  <div>
    <img style="width: 200px; height:auto;" src="{{url('public')}}/assets/images/products/10.jpg" alt="" class="hover-image">
    <a href="">
      <h3 style="text-align: center;">Jaket</h3>
    </a>
  </div>
  <div>
    <img style="width: 200px; height:auto;" src="{{url('public')}}/assets/images/products/00.jpg" alt="">
    <a href="">
      <h3 style="text-align: center;">Aksesoris</h3>
    </a>
  </div>

</div>
@endsection
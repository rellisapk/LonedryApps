@extends('layouts.app')
@section('css')
.service-wrap {
  overflow: hidden;
  position: relative;
  height: 300px;
  width: 300px;
  margin: 20px;
}
.service-img {
  position: absolute;
}
@endsection
@section('content')
<div class="container">
    <div class="row">
        <div class="col">
            <h1><a href="/home"><span class="fas fa-arrow-alt-circle-left"></span></a> Apa yang bisa kita bantu?</h1>
        </div>
    </div>

    @if(Auth::check())
    <div class="row justify-content-around">
        <div class="col-lg-3 col-8 p-3">
          <div class="service-wrap mx-auto">
        <a href="/order/{{Auth::user()->id}}"><img class="service-img" src="{{ asset('images/service/cuci_setrika.jpg') }}" alt="Cuci Setrika" style="height: 100%;left: -65px;">
          </div>
          <h3 class="text-center">Cuci Setrika</h3></a>
        </div>
        <div class="col-lg-3 col-8 p-3">
          <div class="service-wrap mx-auto">
          <a href="/order/{{Auth::user()->id}}"><img class="service-img" src="{{ asset('images/service/setrika.jpg') }}" alt="Setrika" style="width: 100%;top: -45px;">
          </div>
          <h3 class="text-center">Setrika</h3></a>
        </div>
        <div class="col-lg-3 col-8 p-3">
          <div class="service-wrap mx-auto">
          <a href="/riwayat/{{Auth::user()->id}}"><img class="service-img" src="{{ asset('images/service/transaksi.jpg') }}" alt="Riwayat Transaksi" style="height: 100%;">
          </div>
          <h3 class="text-center">Riwayat Transaksi</h3></a>
        </div>
    </div>

    @else

    <div class="row justify-content-around">
        <div class="col-lg-3 col-8 p-3">
          <div class="service-wrap mx-auto">
        <a href="{{url ('login') }}"><img class="service-img" src="{{ asset('images/service/cuci_setrika.jpg') }}" alt="Cuci Setrika" style="height: 100%;left: -65px;">
          </div>
          <h3 class="text-center">Cuci Setrika</h3></a>
        </div>
        <div class="col-lg-3 col-8 p-3">
          <div class="service-wrap mx-auto">
          <a href="{{url ('login') }}"><img class="service-img" src="{{ asset('images/service/setrika.jpg') }}" alt="Setrika" style="width: 100%;top: -45px;">
          </div>
          <h3 class="text-center">Setrika</h3></a>
        </div>
        <div class="col-lg-3 col-8 p-3">
          <div class="service-wrap mx-auto">
          <a href="{{url ('login') }}"><img class="service-img" src="{{ asset('images/service/transaksi.jpg') }}" alt="Riwayat Transaksi" style="height: 100%;">
          </div>
          <h3 class="text-center">Riwayat Transaksi</h3></a>
        </div>
    </div>
    @endif

    <div class="row mt-5">
        <div class="col">
            <h1 class="text-center">OUR STORE</h1>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <h5>Jl. Gkpn, Cibeusi, Jatinangor, Kabupaten Sumedang, Jawa Barat 45363</h5>
            <div class="mapouter mx-auto"><div class="gmap_canvas"><iframe width="100%" height="350px" id="gmap_canvas" src="https://maps.google.com/maps?q=Jl.%20Gkpn,%20Cibeusi,%20Jatinangor,%20Kabupaten%20Sumedang,%20Jawa%20Barat%2045363&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://www.whatismyip-address.com"></a><br><style>.mapouter{position:relative;text-align:right;height:350px;width:100%;}</style><style>.gmap_canvas {overflow:hidden;background:none!important;height:350px;width:100%;}</style></div></div>
        </div>
    </div>

</div>
@endsection

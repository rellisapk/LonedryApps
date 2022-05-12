@extends('layouts.app')

@section('css')
.head-wrap {
  overflow: hidden;
  position: relative;
  height: 500px;
}
.head-bg {
  opacity: 0.5;
  position: absolute;
  left: 0;
  top: -130;
  width: 100%;
  height: auto;
}
.head-content {
  position: relative;
}

.service-wrap {
  overflow: hidden;
  position: relative;
  height: 700px;
  width: 500px;
  margin: 20px;
}
.service-img {
  position: absolute;
}

about {
  font-size: 6.25rem;
  font-weight: bolder;
}
@endsection

@section('content')
<div class="container-fluid head-wrap">
    <img class="head-bg" src="{{ asset('images/homepage_photo.jpg') }}">
    <div class="container m-5 head-content">
      <div class="row">
        <div class="col">
          <about>Tentang<br>Lonedry</about>
        </div>
      </div>
    </div>
</div>

<div class="container my-5">

    <div class="row justify-content-around">
        <div class="col-lg-4 col-8 p-3">
            <div class="service-wrap mx-auto">
                <img class="service-img" src="{{ asset('images/about_photo.jpg') }}" alt="Cuci Setrika" style="height: 100%;">
            </div>
        </div>

        <div class="col-lg-6 col-8 p-3 my-auto">
            <h1>Lonedry
                <br>
                Tentang Kami
            </h1>
            <h3>Kami adalah penyedia jasa cuci dan setrika pakaian di Cibeusi, yang dapat dipesan melalui website lonedry.
                <br>
                Alamat : Jl. Gkpn, Cibeusi, Jatinangor, Kabupaten Sumedang, Jawa Barat 45363
            </h3>
        </div>

    </div>
</div>

@endsection

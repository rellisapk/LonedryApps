@extends('layouts.app')
@section('content')
<div class="container">
  <div class="row">
    <div class="col-8 mx-auto">
      <h1>Tambah Treatment</h1>
      <form action="/home/admin/storeTreatments" method="POST">
      @csrf

        <div class="form-group">
          <label for="name234234">Nama</label>
          <input type="text" name="name" value="" class="form-control">
        </div>

        <div class="form-group">
          <label for="price">Harga</label>
          <input type="text" name="price" value="" class="form-control">
        </div>

        <div class="form-group">
          <label for="duration">Durasi</label>
          <input type="text" name="duration" value="" class="form-control">
        </div>

        <div class="row">
          <div class="col-12">
            <input type="submit" value="Submit" class="btn btn-secondary ">
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
@endsection

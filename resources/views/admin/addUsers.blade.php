@extends('layouts.app')
@section('content')
<div class="container">
  <div class="row">
    <div class="col-8 mx-auto">
      <h1>Tambah User</h1>
      <form action="/home/admin/storeUsers" method="POST">
      @csrf

        <div class="form-group">
          <label for="name">Nama</label>
          <input type="text" name="name" value="" class="form-control">
        </div>

        <div class="form-group">
          <label for="email">Email</label>
          <input type="text" name="email" value="" class="form-control">
        </div>

        <div class="form-group">
          <label for="address">Alamat</label>
          <input type="text" name="address" value="" class="form-control">
        </div>

        <div class="form-group">
          <label for="phone">No Telp</label>
          <input type="text" name="phone" value="" class="form-control">
        </div>
        
        <div class="form-group">
            <input type="hidden" name="password" value="12345678">
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

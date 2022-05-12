@extends('layouts.app')
@section('content')
<div class="container">
  <div class="row">
    <div class="col-8 mx-auto">
      <h1>Edit Treatment</h1>
      <form action="/home/admin/updateTreatments" method="POST">
      @csrf
      {{ method_field('PUT') }}

        @foreach($treatments as $t)
        <input type="hidden" name="id" value="{{$t->id}}">

        <div class="form-group">
          <label for="name234234">Nama</label>
          <input type="text" name="name" value="{{ $t->name }}" class="form-control">
        </div>

        <div class="form-group">
          <label for="price">Harga</label>
          <input type="text" name="price" value="{{ $t->price }}" class="form-control">
        </div>

        <div class="form-group">
          <label for="duration">Durasi</label>
          <input type="text" name="duration" value="{{ $t->duration }}" class="form-control">
        </div>

        <div class="row">
          <div class="col-12">
            <input type="submit" value="Submit" class="btn btn-secondary ">
          </div>
        </div>
      </form>
      @endforeach
    </div>
  </div>
</div>
@endsection

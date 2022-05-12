@extends('layouts.app')
@section('content')
<div class="container">
  <div class="row">
    <div class="col-8 mx-auto">
      <h1>Order Treatment</h1>
      <form action="/home/admin/updateOrder" method="POST">
      @csrf
      {{ method_field('PUT') }}

        @foreach($orders as $o)
        <input type="hidden" name="id" value="{{$o->id}}">

        <div class="form-group">
          <label for="status">Status</label>
            <select name="status" class="form-control" id="status">
            <option value="Ordered" {{ $o->status == "Ordered" ? "selected" : "" }}>Ordered</option>
            <option value="On Progress" {{ $o->status == "On Progress" ? "selected" : "" }}>On Progress</option>
            <option value="Done" {{ $o->status == "Done" ? "selected" : "" }}>Done</option>
            </select>
        </div>

        <div class="form-group">
          <label for="nama lengkap">Jenis treatment</label>
          <input type="text" name="treatments" value="{{ $o->t_name }}" class="form-control" readonly>
        </div>

        <div class="form-group">
          <label for="nama lengkap">Nama</label>
          <input type="text" name="nama lengkap" value="{{ $o->u_name }}" class="form-control" readonly>
        </div>

        <div class="form-group">
          <label for="address">Alamat</label>
          <textarea name="address" rows="5" class="form-control" readonly>{{$o->address}}</textarea>
        </div>

        <div class="form-group">
          <label for="berat">Berat (kg)</label>
          <input name="berat" rows="5" value="{{ $o->berat}}" class="form-control">
        </div>

        <div class="form-group">
          <label for="berat">Total (pcs)</label>
          <input name="total" rows="5" value="{{ $o->total}}" class="form-control">
        </div>

        <div class="form-group">
            <label for="deskripsi">Catatan Tambahan</label>
            <textarea name="deskripsi" rows="5"  class="form-control">{{ $o->deskripsi}}</textarea>
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



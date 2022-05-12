@extends('layouts.app')
@section('content')
<div class="container">
  <div class="row">
    <div class="col-8 mx-auto">
      <h1>Order Treatment</h1>
      <form action="/user/order" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="form-group">
          <label for="treatment">Tipe Laundry</label>
          <select name="treatment[]" id="treatments_price" class="form-control form-control-lg" style="width: 100%;" onchange="getPrice(this.options[this.selectedIndex].getAttribute('harga'));">
            <option>Pilih Treatment</option>
            @foreach ($treatments as $treatment)
              <option  value="{{$treatment->id}}" harga="{{$treatment->price}}">{{$treatment->name}}</option>
            @endforeach
          </select>
        </div>

        <div class="form-group">
          <label for="nama lengkap">Nama</label>
          <input type="text" name="nama lengkap" value="{{ $user->name }}" class="form-control" readonly>
        </div>

        <div class="form-group">
          <label for="address">Alamat</label>
          <textarea name="address" rows="5" class="form-control" readonly><?php echo $user['address']; ?></textarea>
        </div>

        <div class="form-group">
          <label for="berat">Berat (/kg)</label>
          <input name="berat" rows="5" class="form-control" id="berat" onchange="getTotal()">
        </div>

        <div class="form-group">
          <label for="total">Total Harga </label>
          <input name="total" rows="5" class="form-control" id="totalHarga" readonly>
        </div>

        <div class="form-group">
            <label for="deskripsi">Catatan Tambahan</label>
            <textarea name="deskripsi" rows="5" class="form-control"></textarea>
        </div>

        <div class="form-group">
            <input type="hidden" name="status" value="Ordered">
        </div>

        <div class="row">
          <div class="col-12">
            <button type="submit" class="btn btn-success">Pesan Laundry</button>
            <input type="submit" value="Cancel" class="btn btn-secondary ">
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
@endsection
<script>
    var price = 0
    function getTotal(event){
        var berat = document.getElementById('berat').value
        var total = price * berat
        document.getElementById('totalHarga').value = total
    }
    function getPrice(harga){
        price = harga
        console.log(harga)
    }
</script>

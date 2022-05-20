@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <center><div class="card-header"><h3>Riwayat Pemesanan</h3></div><center>
                <div class="card-body">
                    <table class="table table-bordered table-hover table-responsive-xl">
                        <thead class="thead-dark">
                            <tr>
                                <th>No</th>
                                <!-- <th>ID Order</th> -->
                                <th>Tanggal Order</th>
                                <th>Berat</th>
                                <th>Total Harga</th>
                                <th>Deskripsi</th>
                                <th>Jenis Treatment</th>
                                <th>Status</th>
                                <th>Invoice</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($orders as $o)
                            <tr>
                                <th>{{$loop->iteration}}</th>
                                <th>{{$o->created_at}}</th>
                                <th>{{$o->berat}}</th>
                                <th>{{$o->total}}</th>
                                <th>{{$o->deskripsi}}</th>
                                <th>{{$o->t_name}}</th>
                                <th>{{$o->status}}</th>
                                <th><a href="/riwayat/nota/{{Auth::user()->id}}/{{$o->id}}" class="btn btn-success">View</a></th>
                            </tr>
                            @endforeach
                            <!-- Masukin syntax sql disini -->
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

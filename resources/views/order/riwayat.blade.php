@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Riwayat Pemesanan</div>
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
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($orders as $o)
                            <tr>
                                <th>{{$loop->iteration}}</th>
                                <!-- <th>{{$o->id}}</th> -->
                                <th>{{$o->created_at}}</th>
                                <th>{{$o->berat}}</th>
                                <th>{{$o->total}}</th>
                                <th>{{$o->deskripsi}}</th>
                                <th>{{$o->t_name}}</th>
                                <th>{{$o->status}}</th>
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

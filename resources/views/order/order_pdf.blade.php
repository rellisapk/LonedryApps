@extends('layouts.app')
@section('content')
    <div class="head-title">
        <h1 class="text-center m-0 p-0">Invoice</h1>
    </div>

    <div>
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
    </div>
@endsection

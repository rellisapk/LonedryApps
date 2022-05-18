@extends('layouts.app')
@section('content')
    <div class="head-title">
        <h1 class="text-center m-0 p-0">Invoice</h1>
    </div>

    <div>
        <tr>
            @foreach($orders as $o)
            <th>{{$o->created_at}}</th>
            <th>{{$o->berat}}</th>
            <th>{{$o->total}}</th>
            <th>{{$o->deskripsi}}</th>
            <th>{{$o->t_name}}</th>
            <th>{{$o->status}}</th>
            @endforeach
        </tr>
    </div>
@endsection

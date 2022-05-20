@extends('layouts.app')
@section('content')
    <div class="col col-lg-4 col-md-4">
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Nota</h3>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table">
                @foreach ($orders as $order)
              <tbody>
                <tr>
                  <td>
                    Name
                  </td>
                  <td>
                    {{$order->u_name}}
                  </td>
                </tr>
                <tr>
                  <td>
                    Berat
                  </td>
                  <td>
                  {{$order->berat}}
                  </td>
                </tr>
                <tr>
                  <td>
                    Treatments
                  </td>
                  <td>
                    {{$order->t_name}}
                  </td>
                </tr>
                <tr>
                  <td>
                    Total
                  </td>
                  <td>
                    {{$order->total}}
                  </td>
                </tr>
                <tr>
                  <td>
                    Deskripsi
                  </td>
                  <td>
                    {{$order->deskripsi}}
                  </td>
                </tr>
                <tr>
                  <td>
                    Status
                  </td>
                  <td>
                    {{$order->status}}
                  </td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
@endsection

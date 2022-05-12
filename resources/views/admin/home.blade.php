@extends('layouts.app')
@section('content')
<div class="container">
    <div class="card">
        <div class="card-header text-center h1">Database</div>
        <div class="card-body">
            <div class="accordion" id="accordionExample">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingOne">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            Tabel User
                        </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                        <div class="accordion-body text-center">
                            <table class="table table-bordered table-hover text-center">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Nama</th>
                                        <th>Alamat</th>
                                        <th>No. HP</th>
                                        <th>Role</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($user as $u)
                                <tr>
                                    <th>{{$u->id}}</th>
                                    <th>{{$u->name}}</th>
                                    <th>{{$u->address}}</th>
                                    <th>{{$u->phone}}</th>
                                    @if($u->is_Admin == 1 )
                                    <th>Admin</th>
                                    @else
                                    <th>User</th>
                                    @endif
                                    <th class="col-md-4">
                                        <div class="row justify-content-center">
                                            <div class="col-sm-auto">
                                                <a href="/home/admin/deleteUsers/{{$u->id}}" class="btn btn-danger">Delete</a>
                                            </div>
                                            <div class="col-sm-auto">
                                                <form action="/home/admin/makeAdmin/" method="POST">
                                                    {{ csrf_field() }}
                                                    <input type="hidden" name="id" value={{$u->id}}>
                                                    <input type="hidden" name="isAdmin" value=1>
                                                    <button type="submit" class="btn btn-success">Jadikan admin</button>
                                                </form>
                                            </div>
                                            <div class="col-sm-auto">
                                                <form action="/home/admin/makeAdmin/" method="POST">
                                                    {{ csrf_field() }}
                                                    <input type="hidden" name="id" value={{$u->id}}>
                                                    <input type="hidden" name="isAdmin" value=0>
                                                    <button type="submit" class="btn btn-danger">Hapus admin</button>
                                                </form>
                                            </div>
                                        </div>
                                    </th>
                                <tr>
                                @endforeach
                                </tbody>
                            </table>
                            <a href="/home/admin/addUsers" class="btn btn-primary">Tambah User</a>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingTwo">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            Tabel Treatments
                        </button>
                    </h2>
                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                        <div class="accordion-body text-center">
                            <table class="table table-bordered table-hover text-center">
                                <thead class="table-warning">
                                    <tr>
                                        <th>ID</th>
                                        <th>Nama</th>
                                        <th>Harga</th>
                                        <th>Durasi</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($treatments as $t)
                                    <tr>
                                        <th>{{$t->id}}</th>
                                        <th>{{$t->name}}</th>
                                        <th>{{$t->price}}</th>
                                        <th>{{$t->duration}}</th>
                                        <th><a href="/home/admin/editTreatments/{{$t->id}}" class="btn btn-success">Edit</a> | <a href="/home/admin/deleteTreatments/{{$t->id}}" class="btn btn-danger">Delete</a></th>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <a href="/home/admin/addTreatments" class="btn btn-primary">Tambah Treatments</a>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingThree">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            Tabel Order
                        </button>
                    </h2>
                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                        <div class="accordion-body text-center">
                            <table class="table table-bordered table-primary table-hover text-center">
                                <thead class="table-primary">
                                    <tr>
                                        <th>ID Order</th>
                                        <th>Berat</th>
                                        <th>Total</th>
                                        <th>Deskripsi</th>
                                        <th>Jenis Treatment</th>
                                        <th>Nama</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($orders as $o)
                                <tr>
                                    <th>{{$o->id}}</th>
                                    <th>{{$o->berat}}</th>
                                    <th>{{$o->total}}</th>
                                    <th>{{$o->deskripsi}}</th>
                                    <th>{{$o->t_name}}</th>
                                    <th>{{$o->u_name}}</th>
                                    <th>{{$o->status}}</th>
                                    <th><a href="/home/admin/editOrder/{{$o->id}}" class="btn btn-success">Edit</a></th>
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
    </div>
</div>
@endsection

@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                <form method="GET" action="/data/{{$data->id}}/update">
                        @csrf

                        <div class="form-group row">
                            <label for="namaBarang" class="col-md-4 col-form-label text-md-right">Nama Barang</label>

                            <div class="col-md-6">
                                <input id="namaBarang" type="text" class="form-control" name="namBarang" value="{{$data->namaBarang}}" required autofocus>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="bayar" class="col-md-4 col-form-label text-md-right">Harga</label>

                            <div class="col-md-6">
                                <input id="bayar" type="text" class="form-control" name="bayar" value="{{$data->bayar}}" required>
                            </div>
                        </div>

                            <div class="from-group row mb-0">
                                <div class="col-md-8 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                    Bayar
                                    </button>
                                </div>
                            </div>
                            
                        </div>
                    </form>
                </div>
             </div>
         </div>
      </div>
    </div>
    
    @endsection
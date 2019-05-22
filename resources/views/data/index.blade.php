@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Rental</div>

                <div class="card-body">
                {{ $datas->links()}}
                <table class="table table-bordered">
                <thead>
                <tr>
                    <th> ID </th>
                    <th> Nama Barang </th>
                    <th> Harga </th>
                    <th> Tanggal </th>
                    <th> Bayar </th>
                </tr>
                </thead>
                 @foreach($datas as $data)
                <tbody>
                 <tr>
                 <td>{{$data-> id}}</td>
                 <td>{{$data-> namaBarang}}</td>
                 <td>Rp {{$data-> harga}}</td>
                 <td>{{$data-> tanggal}}</td>
                 <td>
                <a class="btn btn-outline-warning" href="/data/{{$data->id}}/bayar">Bayar</a>
                    </td>
                 </tr>
                </tbody>
                @endforeach
                </table>
                {{$datas->links()}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

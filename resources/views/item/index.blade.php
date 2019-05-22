@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Outdoor
                <a
                        class= "btn btn-success float-right"
                        role="button" href="{{url('/items/create')}}">
                        tambah
                        </a>
                </div>

                <div class="card-body">
                {{ $items->links()}}
                <table class="table table-bordered">
                <thead>
                <tr>
                    <th> ID </th>
                    <th> Nama </th>
                    <th> Alamat </th>
                    <th> Barang </th>
                    <th> No HP </th>
                    <th> Edit </th>
                </tr>
                </thead>
                 @foreach($items as $item)
                <tbody>
                 <tr>
                 <td>{{$item-> id}}</td>
                 <td>{{$item-> name}}</td>
                 <td>{{$item-> address}}</td>
                 <td>{{$item-> category}}</td>
                 <td>{{$item-> phone}}</td>
                <td>
                <a class="btn btn-outline-warning" href="/items/{{$item->id}}/edit">Edit</a>
                <a class="btn btn-outline-danger" href="/items/{{$item->id}}/destroy">Hapus</a>
                    </td>
                    </tr>
                </tbody>
                @endforeach
                </table>
                {{$items->links()}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

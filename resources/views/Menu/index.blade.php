@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h3>DATA MENU</h3>
                @if (session()->has('success'))
                <div class="alert alert-info" role="alert">
                    {{ session ('success')}}
                </div>
                @endif
            </div>
        <div class="card-body">
        <div class="mb-3">
            <a class="btn btn-primary" href="{{ url('menu/create')}}">Tambah Data</a>    
        </div>
        <table class="table table-light table-striped-columns">
            <tr>
                <td>NO</td>
                <td>NAMA</td>
                <td>HARGA</td>
                <td>EDIT</td>
                <td>HAPUS</td>
            </tr>
            @foreach ($rows as $row)
            <tr>
                <td>{{ $row->menu_id}}</td>
                <td>{{ $row->menu_nama}}</td>
                <td>{{ $row->menu_harga}}</td>
                <td><a class="btn btn-info btn-sm float" href="{{url('menu/' .$row->menu_id. '/edit')}}">Edit</a></td>
                <td>
                    <form action="{{url('menu/' .$row->menu_id)}}" method="post">
                        @method('DELETE')
                        @csrf
                        <button class="btn btn-danger btn-sm float" onclick="return confirm('Apakah yakin ingin dihapus')">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </table>
        </div>
        </div>
    </div>
@endsection
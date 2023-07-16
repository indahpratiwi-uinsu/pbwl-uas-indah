@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h3>DATA PESANAN</h3>
                @if (session()->has('success'))
                <div class="alert alert-info" role="alert">
                    {{ session ('success')}}
                </div>
                @endif
            </div>
            <div class="card-body">
                <div class="mb-3">
                    <a class="btn btn-primary" href="{{ url('pesanan/create')}}">Tambah Data</a>
                </div>
                <table class="table table-light table-striped-columns">
                    <tr>
                        <td>NO</td>
                        <td>MENU</td>
                        <td>NOMOR MEJA</td>
                        <td>NAMA PELANGGAN</td>
                        <td>JUMLAH</td>
                        <td>STATUS</td>
                        <td>EDIT</td>
                        <td>HAPUS</td>
                    </tr>
                    @foreach ($rows as $row)
                    <tr>
                        <td>{{ $row->pesanan_id}}</td>
                        <td>{{ $row->menu->menu_nama}}</td>
                        <td>{{ $row->meja->meja_nomor}}</td>
                        <td>{{ $row->pelanggan->pelanggan_nama}}</td>
                        <td>{{ $row->pesanan_jumlah}}</td>
                        <td>{{ $row->pesanan_status}}</td>
                        <td><a class="btn btn-info btn-sm float" href="{{url('pesanan/' .$row->pesanan_id. '/edit')}}">Edit</a></td>
                        <td>
                            <form action="{{url('pesanan/' .$row->pesanan_id)}}" method="post">
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
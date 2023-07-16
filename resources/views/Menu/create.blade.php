@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h3>TAMBAH DATA MENU</h3>      
            </div>
            <div class="card-body">
                <form action="{{ url('/menu')}}" method="post">
                @csrf
                    <div class="mb-3">
                        <label for="">NAMA MENU</label>
                        <input type="text" name="menu_nama" class="form-control" placeholder="Nama Menu">
                    </div>
                    <div class="mb-3">
                        <label for="">HARGA MENU</label>
                        <input type="text" name="menu_harga" class="form-control" placeholder="Harga Menu">
                    </div>
                    <div class="mb-3">
                        <input class="btn btn-primary" type="submit" name="" id="" value="SIMPAN">
                        <input type="button" class="btn btn-danger" value="BATAL" onclick="history.go(-1);" >
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
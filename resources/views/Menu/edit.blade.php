@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h3>EDIT DATA MENU</h3>
            </div>
            <div class="card-body">
                <form action="{{ url('/menu/' .$row->menu_id)}}" method="post">
                    @method('PATCH')
                    @csrf
                    <div class="mb-3">
                        <label for="">NAMA MENU</label>
                        <input type="text" name="menu_nama" class="form-control" value="{{$row->menu_nama}}">
                    </div>
                    <div class="mb-3">
                        <label for="">HARGA MENU</label>
                        <input type="text" name="menu_harga" class="form-control" value="{{$row->menu_harga}}">
                    </div>
                    <div class="mb-3">
                        <input class="btn btn-info" type="submit" name="" id="" value="UPDATE">
                        <input type="button" class="btn btn-danger" value="BATAL" onclick="history.go(-1);" >
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
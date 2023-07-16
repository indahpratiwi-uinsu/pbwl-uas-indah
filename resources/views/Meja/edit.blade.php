@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h3>EDIT DATA MEJA</h3>
            </div>
            <div class="card-body">
                <form action="{{ url('/meja/' .$row->meja_id)}}" method="post">
                    @method('PATCH')
                    @csrf
                    <div class="mb-3">
                        <label for="">MENU</label>
                        <select name="meja_id_menu" id="" class="form-control">
                            <option value="">---Silahkan Pilih---</option>
                            @foreach ($menu as $mn)
                                <option value="{{$mn->menu_id}}">{{$mn->menu_nama}}</option>
                            @endforeach
                        </select>    
                    </div>
                    <div class="mb-3">
                        <label for="">NOMOR</label>
                        <input type="text" name="meja_nomor" class="form-control" value="{{$row->meja_nomor}}">
                    </div>
                    <div class="mb-3">
                        <label for="">STATUS</label>
                        <input type="text" name="meja_status" class="form-control" value="{{$row->meja_status}}">
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
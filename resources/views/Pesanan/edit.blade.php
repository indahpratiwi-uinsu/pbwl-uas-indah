@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h3>EDIT DATA PESANAN</h3>
            </div>
            <div class="card-body">
                <form action="{{ url('/pesanan/' .$row->pesanan_id)}}" method="post">
                    @method('PATCH')
                    @csrf
                    <div class="mb-3">
                        <label for="">MENU</label>
                        <select name="pesanan_id_menu" id="" class="form-control">
                            <option value="">---Silahkan Pilih---</option>
                            @foreach ($menu as $mn)
                                <option value="{{$mn->menu_id}}">{{$mn->menu_nama}}</option>
                            @endforeach
                        </select>    
                    </div>
                    <div class="mb-3">
                        <label for="">MEJA</label>
                        <select name="pesanan_id_meja" id="" class="form-control">
                            <option value="">---Silahkan Pilih---</option>
                            @foreach ($meja as $mj)
                                <option value="{{$mj->meja_id}}">{{$mj->meja_nomor}}</option>
                            @endforeach
                        </select>    
                    </div>
                    <div class="mb-3">
                        <label for="">NAMA PELANGGAN</label>
                        <select name="pesanan_id_pelanggan" id="" class="form-control">
                            <option value="">---Silahkan Pilih---</option>
                            @foreach ($pelanggan as $pel)
                                <option value="{{$pel->pelanggan_id}}">{{$pel->pelanggan_nama}}</option>
                            @endforeach
                        </select>    
                    </div>
                    <div class="mb-3">
                        <label for="">JUMLAH</label>
                        <input type="text" name="pesanan_jumlah" class="form-control" value="{{$row->pesanan_jumlah}}">
                    </div>
                    <div class="mb-3">
                        <label for="">STATUS</label>
                        <input type="text" name="pesanan_status" class="form-control" value="{{$row->pesanan_status}}">
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
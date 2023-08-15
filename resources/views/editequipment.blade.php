@extends('layouts.app')

@section('content')
<div class="container">
    <div class="jumbotron">
        <p class="h1 text-center"> Form Tambah Barang </p>
        @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
        <form action="/equipment/update/{{$equipments->id}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="name">Nama Aset</label>
                <input type="text" class="form-control" required="required" id="name" name="name" value="{{$equipments->name}}">
            </div>
            <div class="form-group">
                <label for="specifications">Spesifikasi</label>
                <textarea class="form-control" id="specifications" name="specifications" rows="3" value="{{$equipments->specifications}}"></textarea>
            </div>
            <div class="form-group">
                <label for="merek">Merek</label>
                <input type="text" class="form-control" required="required" id="merek" name="merek" value="{{$equipments->merek}}">
            </div>
            <div class="form-group">
                <label for="year">Tahun Pengadaan</label>
                <input type="date" class="form-control" required="required" id="year" name="year" value="{{$equipments->year}}">
            </div>
            <div class="form-group">
                <label for="locations">Lokasi Barang</label>
                <input type="text" class="form-control" required="required" id="locations" name="locations" value="{{$equipments->locations}}">
            </div>
            <div class="form-group">
                <label for="unit_id">Unit atau Departemen</label>
                <select class="form-control" id="unit_id" name="unit_id">
                    @foreach($units  as $record)
                        <option value="{{$record->id}}">{{$record->nama}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="pic">Penanggung Jawab</label>
                <input type="text" class="form-control" required="required" id="pic" name="pic" value="{{$equipments->pic}}">
            </div>
            <br>
            <button type="submit" class="btn btn-primary">Update Data</button>
        </form>
    </div>
</div>
@endsection
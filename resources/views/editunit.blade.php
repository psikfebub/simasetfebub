@extends('layouts.app')

@section('content')
<div class="container">
    <div class="jumbotron">
        <p class="h1 text-center"> Form Tambah Unit atau Departemen </p>
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
        <form action="/unit/update/{{$units->id}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="nama">Nama Ruang</label>
                <input type="text" class="form-control" required="required" id="nama" name="nama" value="{{$units->nama}}">
            </div>
            <div class="form-group">
                <label for="lantai">Lantai</label>
                <input type="text" class="form-control" required="required" id="lantai" name="lantai" value="{{$units->lantai}}">
            </div>
            <div class="form-group">
                <label for="gedung">Example select</label>
                <select class="form-control" id="gedung" name="gedung">
                    <option>{{$units->gedung}}</option>
                    <option>Gedung A</option>
                    <option>Gedung B</option>
                    <option>Gedung C</option>
                    <option>Gedung D</option>
                    <option>Gedung E</option>
                    <option>Gedung F</option>
                    <option>Gedung Utama</option>
                </select>
            </div>
            <br>
            <button type="submit" class="btn btn-primary">Update Data</button>
        </form>
    </div>
</div>
@endsection
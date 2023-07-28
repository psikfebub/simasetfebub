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
                <label for="name">Nama Unit</label>
                <input type="text" class="form-control" required="required" id="name" name="name" value="{{$units->name}}">
            </div>
            <div class="form-group">
                <label for="locations">Lokasi Unit</label>
                <input type="text" class="form-control" required="required" id="locations" name="locations" value="{{$units->locations}}">
            </div>
            <button type="submit" class="btn btn-primary">Update Data</button>
        </form>
    </div>
</div>
@endsection